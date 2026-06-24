<h1 align="center">
    <br>
    DoutPsi
    <br>
</h1>

<h4 align="center">
    Plataforma de agendamento online para psicÃ³logos â€” simples, segura e feita para vocÃª.
</h4>

<p align="center">
  <img alt="License" src="https://img.shields.io/badge/license-GPL--3.0-blue?style=for-the-badge">
  <img alt="PHP" src="https://img.shields.io/badge/PHP-8.2%2B-777BB4?style=for-the-badge&logo=php&logoColor=white">
  <img alt="MySQL" src="https://img.shields.io/badge/MySQL-8.0-4479A1?style=for-the-badge&logo=mysql&logoColor=white">
</p>

<p align="center">
  <a href="#-sobre-o-doutpsi">Sobre</a> â€¢
  <a href="#-funcionalidades">Funcionalidades</a> â€¢
  <a href="#-inÃ­cio-rÃ¡pido">InÃ­cio RÃ¡pido</a> â€¢
  <a href="#-instalaÃ§Ã£o">InstalaÃ§Ã£o</a> â€¢
  <a href="#-licenÃ§a">LicenÃ§a</a>
</p>

---

## ðŸ§  Sobre o DoutPsi

**DoutPsi** Ã© uma plataforma de agendamento online desenvolvida especialmente para psicÃ³logos e clÃ­nicas de psicologia. Permite que pacientes agendem consultas de forma simples e autÃ´noma, enquanto os profissionais gerenciam sua agenda com total controle.

**Por que DoutPsi?**

- ðŸ”’ **Self-hosted** â€” seus dados ficam no seu servidor
- ðŸ‡§ðŸ‡· **Pensado para o Brasil** â€” suporte a portuguÃªs-BR nativo
- âš™ï¸ **Altamente configurÃ¡vel** â€” adapta-se ao fluxo de trabalho de cada profissional
- ðŸ’¸ **Sem mensalidades** â€” hospede vocÃª mesmo sem pagar por usuÃ¡rio

---

## âœ¨ Funcionalidades

- Agendamento online por pacientes sem necessidade de cadastro
- GestÃ£o de consultas e histÃ³rico de pacientes
- OrganizaÃ§Ã£o de serviÃ§os e profissionais
- Planos de trabalho e regras de disponibilidade
- SincronizaÃ§Ã£o com Google Calendar
- NotificaÃ§Ãµes por e-mail para profissional e paciente
- Interface multi-idioma (com PT-BR incluso)
- API REST para integraÃ§Ãµes
- Suporte a mÃºltiplos profissionais e secretÃ¡rias
- PerÃ­odos bloqueados e exceÃ§Ãµes no plano de trabalho

---

## âš¡ InÃ­cio RÃ¡pido (Desenvolvimento)

Clone e rode o projeto localmente usando Docker Compose:

```bash
# Clone o repositÃ³rio
git clone https://github.com/doutstudio-proj/DoutPSI.git

# Entre na pasta do projeto
cd doutpsi

# Suba o ambiente Docker
docker compose up
```

Em um segundo terminal, entre no container da aplicaÃ§Ã£o:

```bash
docker compose exec app bash
```

Dentro do container, instale as dependÃªncias:

```bash
npm install && composer install
```

Inicie o watcher de desenvolvimento:

```bash
npm start
```

Gere os assets de produÃ§Ã£o:

```bash
npm run build
```

> **Nota:** Funciona no Windows (recomenda-se WSL), macOS e Linux via Docker Compose.

---

## ðŸ—ï¸ InstalaÃ§Ã£o (ProduÃ§Ã£o)

### âš¡ InstalaÃ§Ã£o AutomÃ¡tica (Recomendado)

Use o script de instalaÃ§Ã£o para configurar tudo automaticamente em um servidor Ubuntu/Debian:

```bash
# Baixar e executar o instalador
wget https://raw.githubusercontent.com/doutstudio-proj/DoutPSI/main/install.sh
sudo bash install.sh
```

O script configura interativamente:
- âœ… Nginx + PHP 8.2 + MySQL
- âœ… SSL gratuito (Let's Encrypt)
- âœ… E-mail via SMTP (Gmail, SendGrid, etc.)
- âœ… PermissÃµes e seguranÃ§a
- âœ… Build dos assets
- âœ… ServiÃ§os no boot

---

### ðŸ”§ InstalaÃ§Ã£o Manual



- Apache ou Nginx
- PHP 8.2+
- MySQL 8.0+

### Passos

1. Crie um banco de dados MySQL
2. FaÃ§a o upload dos arquivos para o servidor
3. Certifique-se de que o diretÃ³rio `storage/` tem permissÃ£o de escrita
4. Renomeie `config-sample.php` para `config.php`
5. Preencha as configuraÃ§Ãµes no arquivo `config.php`
6. Acesse a aplicaÃ§Ã£o no navegador e siga o assistente de instalaÃ§Ã£o

---

## ðŸ“š DocumentaÃ§Ã£o

Consulte a pasta [`docs/`](docs/) para guias detalhados sobre:

- [InstalaÃ§Ã£o](docs/installation-guide.md)
- [Docker](docs/docker.md)
- [Google Calendar](docs/google-calendar-sync.md)
- [API REST](docs/rest-api.md)
- [FAQ](docs/faq.md)

---

## ðŸ“œ LicenÃ§a

- CÃ³digo: [GPL v3.0](LICENSE)

---

## ðŸ‘¥ Contribuindo

ContribuiÃ§Ãµes sÃ£o bem-vindas! Leia o [guia de contribuiÃ§Ã£o](.github/CONTRIBUTING.md) antes de abrir um Pull Request.
