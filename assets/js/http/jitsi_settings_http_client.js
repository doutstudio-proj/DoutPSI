/* ----------------------------------------------------------------------------
 * DoutPsi - Online Appointment Scheduler
 *
 * @package     DoutPsi
 * @author      A.Tselegidis <contato@doutpsi.com.br>
 * @copyright   Copyright (c) Alex Tselegidis
 * @license     https://opensource.org/licenses/GPL-3.0 - GPLv3
 * @link        https://DoutPsi.org
 * @since       v1.6.0
 * ---------------------------------------------------------------------------- */

/**
 * Jitsi Settings HTTP client.
 *
 * This module implements the Jitsi settings related HTTP requests.
 */
App.Http.JitsiSettings = (function () {
    /**
     * Save Jitsi settings.
     *
     * @param {Array} jitsiSettings
     *
     * @return {Object}
     */
    function save(jitsiSettings) {
        const url = App.Utils.Url.siteUrl('jitsi_settings/save');

        const data = {
            csrf_token: vars('csrf_token'),
            jitsi_settings: jitsiSettings,
        };

        return $.post(url, data);
    }

    return {
        save,
    };
})();
