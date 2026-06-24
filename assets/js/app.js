/* ----------------------------------------------------------------------------
 * DoutPsi - Online Appointment Scheduler
 *
 * @author      A.Tselegidis <contato@doutpsi.com.br>
 * @copyright   Copyright (c) Alex Tselegidis
 * @license     https://opensource.org/licenses/GPL-3.0 - GPLv3
 * @link        https://DoutPsi.org
 * @since       v1.5.0
 * ---------------------------------------------------------------------------- */

/**
 * App global namespace object.
 *
 * This script should be loaded before the other modules in order to define the global application namespace.
 */
window.App = (function () {
    function onAjaxError(event, jqXHR, textStatus, errorThrown) {
        console.error('Unexpected HTTP Error: ', jqXHR, textStatus, errorThrown);

        let response;

        try {
            response = JSON.parse(jqXHR.responseText); // JSON response
        } catch (error) {
            response = {message: jqXHR.responseText}; // String response
        }

        if (!response || !response.message) {
            return;
        }

        if (!App.Utils.Message) {
            // If the message module is not loaded then build the bootstrap 
            // modal and display the error manually.
            const $modal = $('<div/>', {
                class: 'card',
                html: [
                    $('<div/>', {
                        class: 'card-body overflow-auto',
                        html: response.message,
                    }),
                ],
            });
            $modal.appendTo('#message-modal .modal-body');
        } else {
            App.Utils.Message.show('DoutPsi', lang('unexpected_issues_message'));
            const $modal = $('<div/>', {
                class: 'card',
                html: [
                    $('<div/>', {
                        class: 'card-body overflow-auto',
                        html: response.message,
                    }),
                ],
            });
            $modal.appendTo('#message-modal .modal-body');
        }
    }

    $(document).ajaxError(onAjaxError);

    $(function () {
        if (window.moment) {
            window.moment.locale(vars('language_code'));
        }
    });

    return {
        Components: {},
        Http: {},
        Layouts: {},
        Pages: {},
        Utils: {},
    };
})();
