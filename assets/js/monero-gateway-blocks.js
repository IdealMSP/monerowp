(function () {
    var wc = window.wc || {};
    var registry = wc.wcBlocksRegistry;
    var settingsApi = wc.wcSettings;
    var element = window.wp && window.wp.element;
    var htmlEntities = window.wp && window.wp.htmlEntities;

    if (!registry || !settingsApi || !element || !registry.registerPaymentMethod) {
        return;
    }

    var settings = settingsApi.getSetting('monero_gateway_data', {});
    var decodeEntities = htmlEntities && htmlEntities.decodeEntities ? htmlEntities.decodeEntities : function (value) { return value; };
    var createElement = element.createElement;

    var Label = function () {
        return createElement('span', null, decodeEntities(settings.title || 'Monero Crypto'));
    };

    var Content = function () {
        return createElement('div', null, decodeEntities(settings.description || 'Pay securely using Monero. You will be provided payment details after checkout.'));
    };

    registry.registerPaymentMethod({
        name: 'monero_gateway',
        label: createElement(Label, null),
        content: createElement(Content, null),
        edit: createElement(Content, null),
        canMakePayment: function () {
            return true;
        },
        ariaLabel: decodeEntities(settings.title || 'Monero Crypto'),
        supports: {
            features: settings.supports || ['products']
        }
    });
})();
