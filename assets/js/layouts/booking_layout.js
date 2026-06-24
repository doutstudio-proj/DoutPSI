/* ----------------------------------------------------------------------------
 * DoutPsi - Online Appointment Scheduler
 *
 * @package     DoutPsi
 * @author      A.Tselegidis <contato@doutpsi.com.br>
 * @copyright   Copyright (c) Alex Tselegidis
 * @license     https://opensource.org/licenses/GPL-3.0 - GPLv3
 * @link        https://DoutPsi.org
 * @since       v1.5.0
 * ---------------------------------------------------------------------------- */

/**
 * Booking layout.
 *
 * This module implements the booking layout functionality.
 */
window.App.Layouts.Booking = (function () {
    const $selectLanguage = $('#select-language');

    /**
     * Initialize the module.
     */
    function initialize() {
        App.Utils.Lang.enableLanguageSelection($selectLanguage);
    }

    document.addEventListener('DOMContentLoaded', initialize);

    return {};
})();
