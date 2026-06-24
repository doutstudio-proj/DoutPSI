#!/usr/bin/env bash
# =============================================================================
#  DoutPsi - Script de Instalacao Inteligente
#  Compativel com: Ubuntu 22.04 / 24.04 | Debian 11 / 12
#  Repositorio: https://github.com/doutstudio-proj/DoutPSI
#  Uso: sudo bash install.sh
# =============================================================================

set -e

RED='\033[0;31m'; GREEN='\033[0;32m'; YELLOW='\033[1;33m'
BLUE='\033[0;34m'; CYAN='\033[0;36m'; BOLD='\033[1m'; NC='\033[0m'

info()    { echo -e "${CYAN}[INFO]${NC} $1"; }
success() { echo -e "${GREEN}[ OK ]${NC} $1"; }
warn()    { echo -e "${YELLOW}[AVISO]${NC} $1"; }
error()   { echo -e "${RED}[ERRO]${NC} $1"; exit 1; }
step()    { echo -e "\n${BOLD}${BLUE}=> $1${NC}"; }

# =============================================================================
# BANNER
# =============================================================================
clear
echo ""
echo "  ██████╗  ██████╗ ██╗   ██╗████████╗██████╗ ███████╗██╗"
echo "  ██╔══██╗██╔═══██╗██║   ██║╚══██╔══╝██╔══██╗██╔════╝██║"
echo "  ██║  ██║██║   ██║██║   ██║   ██║   ██████╔╝███████╗██║"
echo "  ██║  ██║██║   ██║██║   ██║   ██║   ██╔═══╝ ╚════██║██║"
echo "  ██████╔╝╚██████╔╝╚██████╔╝   ██║   ██║     ███████║██║"
echo "  ╚═════╝  ╚═════╝  ╚═════╝    ╚═╝   ╚═╝     ╚══════╝╚═╝"
echo ""
echo "  Instalador Inteligente DoutPsi"
echo "  Detecta conflitos de porta e adapta automaticamente"
echo ""

# =============================================================================
# VERIFICACOES INICIAIS
# =============================================================================
[[ $EUID -ne 0 ]] && error "Execute como root: sudo bash install.sh"

if ! grep -qiE "ubuntu|debian" /etc/os-release 2>/dev/null; then
    warn "SO nao reconhecido. Testado em Ubuntu 22.04/24.04 e Debian 11/12."
    read -rp "Continuar mesmo assim? (s/N): " FORCE
    [[ "$FORCE" != "s" && "$FORCE" != "S" ]] && exit 1
fi

# Instalar ss se necessario
command -v ss &>/dev/null || apt-get install -y -qq iproute2 2>/dev/null

# =============================================================================
# FUNCOES DE DETECCAO DE PORTA
# =============================================================================

# Verifica se uma porta esta em uso
port_in_use() {
    ss -tlnp 2>/dev/null | grep -qE ":${1}[ \t]|:${1}$"
}

# Retorna o processo usando a porta
port_process() {
    ss -tlnp 2>/dev/null | grep ":${1}" | grep -oP 'users:\(\("\K[^"]+' | head -1
}

# Encontra a proxima porta livre a partir de um numero base
find_free_port() {
    local port=$1
    while port_in_use "$port"; do
        port=$((port + 1))
    done
    echo "$port"
}

# Verifica se a porta esta sendo usada pelo nginx (mesmo servico que vamos instalar)
port_used_by_nginx() {
    local proc
    proc=$(port_process "$1")
    [[ "$proc" == "nginx" ]]
}

# Verifica se a porta esta sendo usada pelo mysql
port_used_by_mysql() {
    local proc
    proc=$(port_process "$1")
    [[ "$proc" == "mysqld" || "$proc" == "mysql" ]]
}

# =============================================================================
# SCAN DE PORTAS INTELIGENTE
# =============================================================================
step "Analisando portas do servidor"
echo ""

# --- Porta HTTP (80) ---
echo -n "  Porta 80  (HTTP)    : "
if ! port_in_use 80; then
    HTTP_PORT=80
    echo -e "${GREEN}livre${NC} -> usando :80"
elif port_used_by_nginx 80; then
    HTTP_PORT=80
    echo -e "${CYAN}nginx ja ativo${NC} -> reutilizando :80 (sera reconfigurado)"
else
    PROC=$(port_process 80)
    HTTP_PORT=$(find_free_port 8081)
    echo -e "${YELLOW}ocupada por '${PROC}'${NC} -> redirecionando para :${HTTP_PORT}"
fi

# --- Porta HTTPS (443) ---
echo -n "  Porta 443 (HTTPS)   : "
if ! port_in_use 443; then
    HTTPS_PORT=443
    echo -e "${GREEN}livre${NC} -> usando :443"
elif port_used_by_nginx 443; then
    HTTPS_PORT=443
    echo -e "${CYAN}nginx ja ativo${NC} -> reutilizando :443 (sera reconfigurado)"
else
    PROC=$(port_process 443)
    HTTPS_PORT=$(find_free_port 8443)
    echo -e "${YELLOW}ocupada por '${PROC}'${NC} -> redirecionando para :${HTTPS_PORT}"
fi

# --- Porta MySQL (3306) ---
echo -n "  Porta 3306 (MySQL)  : "
if ! port_in_use 3306; then
    MYSQL_PORT=3306
    MYSQL_EXISTING=false
    echo -e "${GREEN}livre${NC} -> instalando MySQL na :3306"
elif port_used_by_mysql 3306; then
    MYSQL_PORT=3306
    MYSQL_EXISTING=true
    echo -e "${CYAN}MySQL ja ativo${NC} -> reutilizando instancia existente"
else
    PROC=$(port_process 3306)
    MYSQL_PORT=$(find_free_port 3307)
    MYSQL_EXISTING=false
    echo -e "${YELLOW}ocupada por '${PROC}'${NC} -> MySQL sera configurado na :${MYSQL_PORT}"
fi

# --- Porta PHP-FPM (9000) ---
echo -n "  Porta 9000 (PHP-FPM): "
if ! port_in_use 9000; then
    PHPFPM_SOCK="/run/php/php8.2-fpm.sock"
    echo -e "${GREEN}livre${NC} -> usando socket Unix (mais rapido)"
else
    PROC=$(port_process 9000)
    PHPFPM_PORT=$(find_free_port 9001)
    PHPFPM_SOCK="127.0.0.1:${PHPFPM_PORT}"
    echo -e "${YELLOW}ocupada por '${PROC}'${NC} -> PHP-FPM na porta :${PHPFPM_PORT}"
fi

echo ""
echo -e "  ${BOLD}Portas definidas para instalacao:${NC}"
echo "  HTTP  : $HTTP_PORT"
echo "  HTTPS : $HTTPS_PORT"
echo "  MySQL : $MYSQL_PORT"
echo "  PHP-FPM: $PHPFPM_SOCK"
echo ""

# =============================================================================
# COLETA DE INFORMACOES
# =============================================================================
step "Configuracao da Instalacao"
echo ""

read -rp "Dominio do sistema (ex: agendamento.clinica.com.br): " DOMAIN
[[ -z "$DOMAIN" ]] && error "Dominio e obrigatorio."

# Decisao sobre SSL - logica inteligente por cenario
#
# Let's Encrypt HTTP-01 challenge: EXIGE porta 80 publica
# Se porta 80 esta com nginx (mesmo servico), funciona - reconfiguraremos
# Se porta 80 esta com outro processo, temos 3 opcoes:
#   1. Parar temporariamente o processo para pegar o certificado
#   2. Usar DNS-01 challenge (sem precisar da porta 80)
#   3. Instalar sem SSL (usuario configura depois)

SSL_MODE="none"
SSL_BLOCKER_PROC=""

if [[ "$HTTP_PORT" == "80" ]]; then
    # Porta 80 esta disponivel para nos (livre ou era nginx que vamos substituir)
    echo ""
    read -rp "Configurar SSL gratuito via Lets Encrypt? (S/n): " SETUP_SSL
    SETUP_SSL="${SETUP_SSL:-S}"
    if [[ "$SETUP_SSL" =~ ^[Ss]$ ]]; then
        read -rp "E-mail para o certificado SSL: " SSL_EMAIL
        [[ -z "$SSL_EMAIL" ]] && error "E-mail SSL e obrigatorio."
        SSL_MODE="http01"
    fi
else
    # Porta 80 ocupada por outro processo - SSL complica
    SSL_BLOCKER_PROC=$(port_process 80)
    echo ""
    echo -e "${YELLOW}Atencao:${NC} Porta 80 esta ocupada por '${SSL_BLOCKER_PROC}'."
    echo "O Lets Encrypt precisa da porta 80 para validar o dominio."
    echo ""
    echo "Opcoes de SSL:"
    echo "  1) Parar '${SSL_BLOCKER_PROC}' temporariamente, pegar o certificado e reiniciar"
    echo "  2) Usar DNS-01 challenge (sem precisar da porta 80 - requer acesso ao DNS)"
    echo "  3) Instalar sem SSL por agora (configura depois manualmente)"
    echo ""
    read -rp "Escolha (1/2/3): " SSL_CHOICE

    case "$SSL_CHOICE" in
        1)
            read -rp "E-mail para o certificado SSL: " SSL_EMAIL
            [[ -z "$SSL_EMAIL" ]] && error "E-mail SSL e obrigatorio."
            SSL_MODE="stop_and_get"
            ;;
        2)
            read -rp "E-mail para o certificado SSL: " SSL_EMAIL
            [[ -z "$SSL_EMAIL" ]] && error "E-mail SSL e obrigatorio."
            echo ""
            echo "Para DNS-01, o certbot abrira uma janela pedindo para voce adicionar"
            echo "um registro TXT no seu DNS. Tenha acesso ao painel DNS pronto."
            SSL_MODE="dns01"
            ;;
        3|*)
            SSL_MODE="none"
            warn "Instalacao sem SSL. Acesse via HTTP: http://${DOMAIN}:${HTTP_PORT}"
            warn "Para adicionar SSL depois: sudo certbot --nginx -d ${DOMAIN}"
            ;;
    esac
fi

echo ""
echo "── Banco de Dados MySQL ──────────────────────────"
read -rp "  Nome do banco (padrao: doutpsi): " DB_NAME
DB_NAME="${DB_NAME:-doutpsi}"
read -rp "  Usuario do banco: " DB_USER
[[ -z "$DB_USER" ]] && error "Usuario e obrigatorio."
read -rsp "  Senha do banco: " DB_PASS; echo ""
[[ -z "$DB_PASS" ]] && error "Senha e obrigatoria."

if [[ "$MYSQL_EXISTING" == false ]]; then
    read -rsp "  Senha root MySQL (enter se nao tiver): " DB_ROOT_PASS; echo ""
fi

echo ""
echo "── E-mail SMTP para Notificacoes ─────────────────"
read -rp "  Host SMTP (ex: smtp.gmail.com): " SMTP_HOST
read -rp "  Porta SMTP (587=TLS / 465=SSL): " SMTP_PORT
SMTP_PORT="${SMTP_PORT:-587}"
read -rp "  Usuario SMTP (seu e-mail): " SMTP_USER
read -rsp "  Senha SMTP: " SMTP_PASS; echo ""
read -rp "  E-mail remetente (ex: noreply@clinica.com.br): " SMTP_FROM
read -rp "  Nome remetente (ex: Clinica de Psicologia): " SMTP_FROM_NAME

echo ""
echo "── Repositorio e Destino ─────────────────────────"
read -rp "  URL Git (padrao: https://github.com/doutstudio-proj/DoutPSI.git): " GIT_REPO
GIT_REPO="${GIT_REPO:-https://github.com/doutstudio-proj/DoutPSI.git}"

INSTALL_DIR="/var/www/doutpsi"
read -rp "  Diretorio de instalacao (padrao: $INSTALL_DIR): " CUSTOM_DIR
INSTALL_DIR="${CUSTOM_DIR:-$INSTALL_DIR}"

# Montar BASE_URL com porta correta
if [[ "$SETUP_SSL" =~ ^[Ss]$ ]]; then
    BASE_URL="https://${DOMAIN}"
elif [[ "$HTTP_PORT" == "80" ]]; then
    BASE_URL="http://${DOMAIN}"
else
    BASE_URL="http://${DOMAIN}:${HTTP_PORT}"
fi

echo ""
echo "──────────────────────────────────────────────────"
echo "  Resumo da Instalacao"
echo "──────────────────────────────────────────────────"
echo "  URL final:   $BASE_URL"
echo "  Dominio:     $DOMAIN"
echo "  HTTP port:   $HTTP_PORT"
echo "  HTTPS port:  $HTTPS_PORT"
echo "  MySQL port:  $MYSQL_PORT"
echo "  Banco:       $DB_NAME / usuario: $DB_USER"
echo "  SMTP:        $SMTP_HOST:$SMTP_PORT"
echo "  Repositorio: $GIT_REPO"
echo "  Diretorio:   $INSTALL_DIR"
echo ""
read -rp "Confirmar e iniciar instalacao? (S/n): " CONFIRM
[[ "$CONFIRM" =~ ^[Nn]$ ]] && echo "Cancelado." && exit 0

# =============================================================================
# DEPENDENCIAS DO SISTEMA
# =============================================================================
step "Instalando dependencias do sistema"

apt-get update -qq
apt-get install -y -qq \
    curl wget git unzip zip \
    nginx \
    software-properties-common \
    certbot python3-certbot-nginx \
    > /dev/null 2>&1

success "Pacotes base instalados"

# --- MySQL: instalar apenas se nao existe ---
if [[ "$MYSQL_EXISTING" == false ]]; then
    apt-get install -y -qq mysql-server > /dev/null 2>&1
    success "MySQL instalado"
    
    # Alterar porta do MySQL se necessario
    if [[ "$MYSQL_PORT" != "3306" ]]; then
        info "Configurando MySQL na porta $MYSQL_PORT..."
        sed -i "s/^#\?port\s*=.*/port = $MYSQL_PORT/" /etc/mysql/mysql.conf.d/mysqld.cnf 2>/dev/null || \
        echo "port = $MYSQL_PORT" >> /etc/mysql/mysql.conf.d/mysqld.cnf
        systemctl restart mysql 2>/dev/null || true
        success "MySQL reconfigurado para porta $MYSQL_PORT"
    fi
else
    info "MySQL existente sera utilizado na porta $MYSQL_PORT"
fi

step "Instalando PHP 8.2 e extensoes"

if grep -qi "ubuntu" /etc/os-release; then
    add-apt-repository -y ppa:ondrej/php > /dev/null 2>&1 || true
    apt-get update -qq
fi

apt-get install -y -qq \
    php8.2-fpm \
    php8.2-mysql \
    php8.2-curl \
    php8.2-mbstring \
    php8.2-gd \
    php8.2-xml \
    php8.2-intl \
    php8.2-zip \
    php8.2-bcmath \
    php8.2-fileinfo \
    > /dev/null 2>&1

success "PHP 8.2 instalado"

# Configurar PHP-FPM para porta alternativa se necessario
if [[ "$PHPFPM_SOCK" != "/run/php/php8.2-fpm.sock" ]]; then
    info "Reconfigurando PHP-FPM para $PHPFPM_SOCK..."
    PHPFPM_POOL="/etc/php/8.2/fpm/pool.d/www.conf"
    sed -i "s|^listen = .*|listen = $PHPFPM_SOCK|" "$PHPFPM_POOL"
    systemctl restart php8.2-fpm
    success "PHP-FPM configurado em $PHPFPM_SOCK"
fi

if ! command -v composer &> /dev/null; then
    step "Instalando Composer"
    curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer > /dev/null 2>&1
    success "Composer instalado"
fi

if ! command -v node &> /dev/null; then
    step "Instalando Node.js 18"
    curl -fsSL https://deb.nodesource.com/setup_18.x | bash - > /dev/null 2>&1
    apt-get install -y -qq nodejs > /dev/null 2>&1
    success "Node.js instalado"
fi

# =============================================================================
# BANCO DE DADOS
# =============================================================================
step "Configurando banco de dados MySQL"

systemctl start mysql 2>/dev/null || systemctl start mysqld 2>/dev/null || true

MYSQL_OPTS=""
[[ "$MYSQL_PORT" != "3306" ]] && MYSQL_OPTS="--port=$MYSQL_PORT"

SQL_CMD="
CREATE DATABASE IF NOT EXISTS \`${DB_NAME}\` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
CREATE USER IF NOT EXISTS '${DB_USER}'@'localhost' IDENTIFIED BY '${DB_PASS}';
GRANT ALL PRIVILEGES ON \`${DB_NAME}\`.* TO '${DB_USER}'@'localhost';
FLUSH PRIVILEGES;"

if [[ -n "$DB_ROOT_PASS" ]]; then
    echo "$SQL_CMD" | mysql $MYSQL_OPTS -u root -p"$DB_ROOT_PASS" 2>/dev/null || \
    echo "$SQL_CMD" | mysql $MYSQL_OPTS -u root 2>/dev/null || \
    error "Falha ao conectar ao MySQL. Verifique a senha root."
else
    echo "$SQL_CMD" | mysql $MYSQL_OPTS -u root 2>/dev/null || \
    error "Falha ao conectar ao MySQL."
fi

success "Banco '$DB_NAME' e usuario '$DB_USER' configurados"

# =============================================================================
# CLONE E CONFIGURACAO
# =============================================================================
step "Clonando repositorio DoutPsi"

if [[ -d "$INSTALL_DIR" ]]; then
    warn "Diretorio $INSTALL_DIR ja existe. Fazendo backup..."
    mv "$INSTALL_DIR" "${INSTALL_DIR}_backup_$(date +%Y%m%d_%H%M%S)"
fi

git clone "$GIT_REPO" "$INSTALL_DIR" --depth=1 > /dev/null 2>&1 || \
    error "Falha ao clonar: $GIT_REPO"

success "Repositorio clonado em $INSTALL_DIR"
cd "$INSTALL_DIR"

# --- config.php ---
step "Criando config.php"

cat > "${INSTALL_DIR}/config.php" <<PHPCONFIG
<?php
/* DoutPsi - Configuracao gerada em $(date '+%Y-%m-%d %H:%M:%S') */

class Config
{
    const BASE_URL   = '${BASE_URL}';
    const LANGUAGE   = 'portuguese-br';
    const DEBUG_MODE = false;

    const DB_HOST     = '127.0.0.1';
    const DB_NAME     = '${DB_NAME}';
    const DB_USERNAME = '${DB_USER}';
    const DB_PASSWORD = '${DB_PASS}';

    // Google Calendar (opcional)
    // const GOOGLE_SYNC_FEATURE  = false;
    // const GOOGLE_CLIENT_ID     = '';
    // const GOOGLE_CLIENT_SECRET = '';
}
PHPCONFIG

success "config.php criado (URL: ${BASE_URL})"

# --- email.php ---
step "Configurando SMTP"

[[ "$SMTP_PORT" == "465" ]] && SMTP_CRYPTO="ssl" || SMTP_CRYPTO="tls"

cat > "${INSTALL_DIR}/application/config/email.php" <<EMAILCONFIG
<?php defined('BASEPATH') or exit('No direct script access allowed');

// DoutPsi - Configuracao SMTP gerada em $(date '+%Y-%m-%d %H:%M:%S')

\$config['useragent']    = 'DoutPsi';
\$config['protocol']     = 'smtp';
\$config['mailtype']     = 'html';
\$config['smtp_debug']   = false;
\$config['smtp_auth']    = true;
\$config['smtp_host']    = '${SMTP_HOST}';
\$config['smtp_user']    = '${SMTP_USER}';
\$config['smtp_pass']    = '${SMTP_PASS}';
\$config['smtp_crypto']  = '${SMTP_CRYPTO}';
\$config['smtp_port']    = ${SMTP_PORT};
\$config['from_name']    = '${SMTP_FROM_NAME}';
\$config['from_address'] = '${SMTP_FROM}';
\$config['reply_to']     = '${SMTP_FROM}';
\$config['crlf']         = "\r\n";
\$config['newline']      = "\r\n";
EMAILCONFIG

success "SMTP configurado (${SMTP_HOST}:${SMTP_PORT})"

# =============================================================================
# DEPENDENCIAS E BUILD
# =============================================================================
step "Instalando dependencias PHP (Composer)"
composer install --no-dev --optimize-autoloader --no-interaction --quiet || \
    error "Falha no Composer."
success "Dependencias PHP instaladas"

step "Compilando assets frontend"
npm install --silent
npm run build --silent
success "Assets compilados"

# =============================================================================
# PERMISSOES
# =============================================================================
step "Configurando permissoes"

chown -R www-data:www-data "${INSTALL_DIR}"
find "${INSTALL_DIR}" -type f -exec chmod 644 {} \;
find "${INSTALL_DIR}" -type d -exec chmod 755 {} \;
chmod -R 775 "${INSTALL_DIR}/storage"
chmod 640 "${INSTALL_DIR}/config.php"
chmod 640 "${INSTALL_DIR}/application/config/email.php"

success "Permissoes configuradas"

# =============================================================================
# NGINX - configurar com as portas detectadas
# =============================================================================
step "Configurando Nginx (HTTP:${HTTP_PORT} / HTTPS:${HTTPS_PORT})"

NGINX_CONF="/etc/nginx/sites-available/doutpsi"

# Definir como o fastcgi_pass vai se comunicar com PHP-FPM
if [[ "$PHPFPM_SOCK" == /run/* ]]; then
    FASTCGI_PASS="unix:${PHPFPM_SOCK}"
else
    FASTCGI_PASS="${PHPFPM_SOCK}"
fi

cat > "${NGINX_CONF}" <<NGINXCONF
server {
    listen ${HTTP_PORT};
    server_name ${DOMAIN};

    root ${INSTALL_DIR};
    index index.php index.html;

    client_max_body_size 128M;

    access_log /var/log/nginx/doutpsi_access.log;
    error_log  /var/log/nginx/doutpsi_error.log;

    location / {
        try_files \$uri \$uri/ /index.php?\$args;
    }

    location ~ ^.+\.php\$ {
        fastcgi_pass ${FASTCGI_PASS};
        fastcgi_split_path_info ^(.+?\.php)(/.*)$;
        fastcgi_param SCRIPT_FILENAME \$document_root\$fastcgi_script_name;
        fastcgi_buffers 16 16k;
        fastcgi_buffer_size 32k;
        fastcgi_index index.php;
        include fastcgi_params;
    }

    location ~ /\.ht  { deny all; }
    location ~ /\.git { deny all; }
    location = /config.php   { deny all; }
    location = /composer.json { deny all; }
    location = /package.json  { deny all; }
    location = /install.sh    { deny all; }
}
NGINXCONF

ln -sf "${NGINX_CONF}" /etc/nginx/sites-enabled/doutpsi

# Remover default apenas se nossa porta for 80
if [[ "$HTTP_PORT" == "80" ]]; then
    rm -f /etc/nginx/sites-enabled/default 2>/dev/null || true
fi

nginx -t > /dev/null 2>&1 || error "Configuracao do Nginx invalida."
systemctl reload nginx

success "Nginx configurado na porta $HTTP_PORT"

# =============================================================================
# SSL - Lets Encrypt (multi-modo inteligente)
# =============================================================================
run_certbot_http01() {
    certbot --nginx \
        -d "${DOMAIN}" \
        --non-interactive \
        --agree-tos \
        --email "${SSL_EMAIL}" \
        --redirect \
        2>&1
}

run_certbot_dns01() {
    # DNS-01: interativo, usuario precisa criar o registro TXT manualmente
    certbot certonly \
        --manual \
        --preferred-challenges dns \
        -d "${DOMAIN}" \
        --agree-tos \
        --email "${SSL_EMAIL}"
}

apply_ssl_to_nginx() {
    # Atualiza o config nginx para incluir o bloco SSL gerado pelo certbot
    nginx -t > /dev/null 2>&1 && systemctl reload nginx
    BASE_URL="https://${DOMAIN}"
    # Agendar renovacao automatica
    (crontab -l 2>/dev/null; echo "0 3 * * * certbot renew --quiet && systemctl reload nginx") | sort -u | crontab -
    success "Renovacao automatica de SSL agendada (diaria 03:00)"
}

case "$SSL_MODE" in

    http01)
        step "Configurando SSL com Lets Encrypt (HTTP-01)"
        if run_certbot_http01 > /dev/null 2>&1; then
            apply_ssl_to_nginx
            success "Certificado SSL instalado para ${DOMAIN}"
        else
            warn "Nao foi possivel obter o certificado SSL."
            warn "Verifique se o DNS '${DOMAIN}' aponta para este servidor (IP publico)."
            warn "Para tentar novamente depois: sudo certbot --nginx -d ${DOMAIN}"
        fi
        ;;

    stop_and_get)
        step "SSL: parando '${SSL_BLOCKER_PROC}' temporariamente para obter certificado"
        # Descobrir o servico systemd que controla o processo bloqueante
        BLOCKER_SERVICE=""
        for svc in apache2 apache httpd caddy haproxy traefik; do
            if systemctl is-active --quiet "$svc" 2>/dev/null; then
                BLOCKER_SERVICE="$svc"
                break
            fi
        done

        CERT_OK=false

        if [[ -n "$BLOCKER_SERVICE" ]]; then
            info "Parando $BLOCKER_SERVICE..."
            systemctl stop "$BLOCKER_SERVICE" 2>/dev/null || true
            sleep 2

            # Subir nginx temporariamente apenas para o desafio
            systemctl start nginx 2>/dev/null || true
            sleep 1

            if run_certbot_http01 > /dev/null 2>&1; then
                CERT_OK=true
            fi

            info "Reiniciando $BLOCKER_SERVICE..."
            systemctl start "$BLOCKER_SERVICE" 2>/dev/null || true
        else
            # Tentar parar via kill direto se nao encontrou servico
            warn "Servico systemd de '${SSL_BLOCKER_PROC}' nao identificado."
            warn "Tentando obter o certificado com standalone (sem nginx)..."
            systemctl stop nginx 2>/dev/null || true
            sleep 1
            if certbot certonly --standalone \
                -d "${DOMAIN}" \
                --non-interactive \
                --agree-tos \
                --email "${SSL_EMAIL}" > /dev/null 2>&1; then
                CERT_OK=true
            fi
            systemctl start nginx 2>/dev/null || true
        fi

        if [[ "$CERT_OK" == true ]]; then
            # Configurar nginx para usar o certificado obtido
            CERT_PATH="/etc/letsencrypt/live/${DOMAIN}"
            sed -i "/listen ${HTTP_PORT};/a\\    listen ${HTTPS_PORT} ssl;\n    ssl_certificate ${CERT_PATH}/fullchain.pem;\n    ssl_certificate_key ${CERT_PATH}/privkey.pem;\n    ssl_protocols TLSv1.2 TLSv1.3;\n    ssl_ciphers HIGH:!aNULL:!MD5;\n    if (\$scheme = http) { return 301 https://\$host\$request_uri; }" \
                "${NGINX_CONF}" 2>/dev/null || true
            apply_ssl_to_nginx
            success "Certificado SSL instalado para ${DOMAIN}"
        else
            warn "Nao foi possivel obter o certificado SSL automaticamente."
            warn "Tente manualmente: sudo certbot certonly --standalone -d ${DOMAIN}"
        fi
        ;;

    dns01)
        step "SSL via DNS-01 challenge (manual)"
        echo ""
        warn "O certbot vai pedir para voce criar um registro TXT no DNS."
        warn "Tenha o painel do seu provedor de DNS aberto antes de continuar."
        echo ""
        read -rp "Pronto? Pressione ENTER para iniciar o desafio DNS..."
        if run_certbot_dns01; then
            CERT_PATH="/etc/letsencrypt/live/${DOMAIN}"
            # Adicionar bloco SSL ao nginx manualmente
            cat >> "${NGINX_CONF}" <<SSLBLOCK

server {
    listen ${HTTPS_PORT} ssl;
    server_name ${DOMAIN};

    ssl_certificate     ${CERT_PATH}/fullchain.pem;
    ssl_certificate_key ${CERT_PATH}/privkey.pem;
    ssl_protocols TLSv1.2 TLSv1.3;
    ssl_ciphers HIGH:!aNULL:!MD5;

    root ${INSTALL_DIR};
    index index.php index.html;

    location / {
        try_files \$uri \$uri/ /index.php?\$args;
    }

    location ~ ^.+\.php\$ {
        fastcgi_pass ${FASTCGI_PASS};
        fastcgi_split_path_info ^(.+?\.php)(/.*)$;
        fastcgi_param SCRIPT_FILENAME \$document_root\$fastcgi_script_name;
        include fastcgi_params;
    }

    location ~ /\.ht  { deny all; }
    location ~ /\.git { deny all; }
    location = /config.php { deny all; }
}
SSLBLOCK
            apply_ssl_to_nginx
            success "Certificado SSL (DNS-01) instalado para ${DOMAIN}"
        else
            warn "Desafio DNS falhou ou foi cancelado."
            warn "Tente novamente depois: sudo certbot certonly --manual --preferred-challenges dns -d ${DOMAIN}"
        fi
        ;;

    none)
        info "Instalacao sem SSL. Acesse: http://${DOMAIN}:${HTTP_PORT}"
        ;;
esac


# =============================================================================
# PHP.INI
# =============================================================================
step "Otimizando PHP"

cat > "/etc/php/8.2/fpm/conf.d/99-doutpsi.ini" <<PHPINI
upload_max_filesize = 32M
post_max_size = 32M
memory_limit = 256M
max_execution_time = 120
date.timezone = America/Sao_Paulo
PHPINI

systemctl restart php8.2-fpm
success "PHP-FPM reiniciado"

# =============================================================================
# BOOT
# =============================================================================
step "Habilitando servicos no boot"
systemctl enable nginx php8.2-fpm mysql 2>/dev/null || true
success "Servicos habilitados"

# =============================================================================
# VERIFICACAO FINAL DAS PORTAS
# =============================================================================
step "Verificacao final"
echo ""

check_final() {
    local port=$1 label=$2
    if port_in_use "$port"; then
        echo -e "  ${GREEN}[ATIVO]${NC}  :${port} ${label}"
    else
        echo -e "  ${RED}[ERRO]${NC}   :${port} ${label} - nao respondendo!"
    fi
}

check_final "$HTTP_PORT"  "HTTP / Nginx"
[[ "$SETUP_SSL" =~ ^[Ss]$ ]] && check_final "$HTTPS_PORT" "HTTPS / SSL"
check_final "$MYSQL_PORT" "MySQL"
echo ""

# =============================================================================
# RESUMO FINAL
# =============================================================================
clear
echo ""
echo "╔═══════════════════════════════════════════════════════════╗"
echo "║           DoutPsi instalado com sucesso!                  ║"
echo "╚═══════════════════════════════════════════════════════════╝"
echo ""
echo "  ACESSE O SISTEMA:"
echo ""
echo -e "  ${BOLD}${CYAN}${BASE_URL}${NC}"
echo ""
echo "  Siga o assistente para criar a conta admin."
echo ""
echo "  PORTAS UTILIZADAS NESTA INSTALACAO:"
echo "  HTTP :  $HTTP_PORT"
[[ "$SETUP_SSL" =~ ^[Ss]$ ]] && echo "  HTTPS:  $HTTPS_PORT"
echo "  MySQL:  $MYSQL_PORT"
echo "  PHP  :  $PHPFPM_SOCK"
echo ""
echo "  CONFIGURE NO PAINEL ADMIN:"
echo "  - Nome da clinica e logo"
echo "  - Horarios de funcionamento"
echo "  - Servicos (consultas, terapias, avaliacoes)"
echo "  - Profissionais (psicologos)"
echo "  - Politica de privacidade / LGPD"
echo ""
echo "  ARQUIVOS:"
echo "  Config:   ${INSTALL_DIR}/config.php"
echo "  SMTP:     ${INSTALL_DIR}/application/config/email.php"
echo "  Logs:     ${INSTALL_DIR}/storage/logs/"
echo "  Nginx:    /var/log/nginx/doutpsi_error.log"
echo ""
echo "  COMANDOS UTEIS:"
echo "  Reiniciar:  sudo systemctl restart nginx php8.2-fpm"
echo "  Ver logs:   sudo tail -f /var/log/nginx/doutpsi_error.log"
echo "  Portas:     sudo ss -tlnp | grep -E ':80|:443|:3306|:${HTTP_PORT}'"
[[ "$SETUP_SSL" =~ ^[Ss]$ ]] && echo "  SSL:        sudo certbot renew"
echo ""
echo "  Suporte: https://github.com/doutstudio-proj/DoutPSI/issues"
echo ""