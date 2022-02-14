<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @SyliusPayPalPlugin/payWithPaypal.html.twig */
class __TwigTemplate_d6ce48cf0beb4a2a0b03003b5f52db68fcc6dd2b30c0419ba8349f2b5ffb69e1 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusPayPalPlugin/payWithPaypal.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusPayPalPlugin/payWithPaypal.html.twig"));

        // line 1
        $this->loadTemplate("@SyliusUi/_stylesheets.html.twig", "@SyliusPayPalPlugin/payWithPaypal.html.twig", 1)->display(twig_array_merge($context, ["path" => "assets/shop/css/style.css"]));
        // line 2
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.pay_pal.pay_with_pay_pal"), "html", null, true);
        echo "</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 179
        echo "    </head>
    <body>
    <div id=\"paypal-payment-container\" class=\"ui segment loadable\">
        <div class=\"back-button-container\">
            <a href=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_order_show", ["tokenValue" => (isset($context["order_token"]) || array_key_exists("order_token", $context) ? $context["order_token"] : (function () { throw new RuntimeError('Variable "order_token" does not exist.', 183, $this->source); })())]), "html", null, true);
        echo "\" class=\"back-button\">
                ";
        // line 184
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.pay_pal.back_to_store"), "html", null, true);
        echo "
            </a>
        </div>
        <div class=\"container\">
            ";
        // line 188
        $this->loadTemplate("@SyliusShop/_flashes.html.twig", "@SyliusPayPalPlugin/payWithPaypal.html.twig", 188)->display($context);
        // line 189
        echo "            <div class=\"header padding\"><img draggable=\"false\" id=\"sylius-logo\" src=\"https://paypal.sylius.com/assets/img/logo.png\" alt=\"logo\"/></div>
            <div id=\"tabs\" class=\"ui top attached tabular menu\">
                <div class=\"active item\" data-tab=\"paypal\">PayPal</div>
                <div class=\"item\" data-tab=\"card\">";
        // line 192
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.pay_pal.credit_card"), "html", null, true);
        echo "</div>
            </div>
            <div class=\"ui bottom attached active tab segment\" data-tab=\"paypal\">
                <div class=\"button-container padding\">
                    <div id=\"paypal-button-container\"></div>
                </div>
            </div>
            <div class=\"ui bottom attached tab segment\" data-tab=\"card\">
                <div class=\"button-container padding\">
                    <div id=\"advanced-cards-container\"></div>
                    <form id=\"advanced-cards-form\">
                        <label for=\"card-number\">";
        // line 203
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.pay_pal.credit_card_number"), "html", null, true);
        echo "</label>
                        <div id=\"card-number\" class=\"input\"><div id=\"card-image\"></div></div>
                        <label for=\"expiration-date\">";
        // line 205
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.pay_pal.expiration_date"), "html", null, true);
        echo "</label>
                        <div id=\"expiration-date\" class=\"input\"></div>
                        <label for=\"cvv\">";
        // line 207
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.pay_pal.cvv"), "html", null, true);
        echo "</label>
                        <div id=\"cvv\" class=\"input\"></div>
                        <label for='card-holder-name'>";
        // line 209
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.form.credit_card.cardholder_name"), "html", null, true);
        echo "</label>
                        <br/><input type='text' id='card-holder-name' name='card-holder-name' autocomplete='off' placeholder='";
        // line 210
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.form.credit_card.cardholder_name"), "html", null, true);
        echo "' value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["billing_address"]) || array_key_exists("billing_address", $context) ? $context["billing_address"] : (function () { throw new RuntimeError('Variable "billing_address" does not exist.', 210, $this->source); })()), "fullName", [], "any", false, false, false, 210), "html", null, true);
        echo "\"/>
                        <div class=\"checkbox-grid\">
                            <input type=\"checkbox\" id=\"billing-info\" checked />
                            <label for=\"billing-info\">";
        // line 213
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.pay_pal.billing_info"), "html", null, true);
        echo "</label>
                        </div>
                        <div id=\"billing-container\" class=\"hidden\">
                            <br/><label for='card-billing-address-street'>";
        // line 216
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.billing_address"), "html", null, true);
        echo "</label>
                            <br/><input type='text' id='card-billing-address-street' name='card-billing-address-street' autocomplete='off' placeholder='";
        // line 217
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.street"), "html", null, true);
        echo "' value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["billing_address"]) || array_key_exists("billing_address", $context) ? $context["billing_address"] : (function () { throw new RuntimeError('Variable "billing_address" does not exist.', 217, $this->source); })()), "street", [], "any", false, false, false, 217), "html", null, true);
        echo "\"/>
                            <input type='text' id='card-billing-address-city' name='card-billing-address-city' autocomplete='off' placeholder='";
        // line 218
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.city"), "html", null, true);
        echo "' value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["billing_address"]) || array_key_exists("billing_address", $context) ? $context["billing_address"] : (function () { throw new RuntimeError('Variable "billing_address" does not exist.', 218, $this->source); })()), "city", [], "any", false, false, false, 218), "html", null, true);
        echo "\"/>
                            <input type='text' id='card-billing-address-state' name='card-billing-address-state' autocomplete='off' placeholder='";
        // line 219
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.state"), "html", null, true);
        echo "' value=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('sylius_province_name')->getCallable(), [(isset($context["billing_address"]) || array_key_exists("billing_address", $context) ? $context["billing_address"] : (function () { throw new RuntimeError('Variable "billing_address" does not exist.', 219, $this->source); })())]), "html", null, true);
        echo "\"/>
                            <input type='text' id='card-billing-address-zip' name='card-billing-address-zip' autocomplete='off' placeholder='";
        // line 220
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.postcode"), "html", null, true);
        echo "' value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["billing_address"]) || array_key_exists("billing_address", $context) ? $context["billing_address"] : (function () { throw new RuntimeError('Variable "billing_address" does not exist.', 220, $this->source); })()), "postcode", [], "any", false, false, false, 220), "html", null, true);
        echo "\"/>
                            <input type='text' id='card-billing-address-country' name='card-billing-address-country' autocomplete='off' placeholder='";
        // line 221
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.country"), "html", null, true);
        echo "' value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["billing_address"]) || array_key_exists("billing_address", $context) ? $context["billing_address"] : (function () { throw new RuntimeError('Variable "billing_address" does not exist.', 221, $this->source); })()), "countryCode", [], "any", false, false, false, 221), "html", null, true);
        echo "\" />
                        </div>
                        <button value=\"submit\" id=\"submit\" class=\"ui button yellow fluid\">";
        // line 223
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.pay_pal.pay_with_card"), "html", null, true);
        echo "</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </body>
    ";
        // line 230
        $this->loadTemplate("@SyliusUi/_javascripts.html.twig", "@SyliusPayPalPlugin/payWithPaypal.html.twig", 230)->display(twig_array_merge($context, ["path" => "assets/shop/js/app.js"]));
        // line 231
        echo "    <script src=\"https://www.paypal.com/sdk/js?components=hosted-fields,buttons,funding-eligibility&locale=";
        echo twig_escape_filter($this->env, (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 231, $this->source); })()), "html", null, true);
        echo "&currency=";
        echo twig_escape_filter($this->env, (isset($context["currency"]) || array_key_exists("currency", $context) ? $context["currency"] : (function () { throw new RuntimeError('Variable "currency" does not exist.', 231, $this->source); })()), "html", null, true);
        echo "&vault=false&client-id=";
        echo twig_escape_filter($this->env, (isset($context["client_id"]) || array_key_exists("client_id", $context) ? $context["client_id"] : (function () { throw new RuntimeError('Variable "client_id" does not exist.', 231, $this->source); })()), "html", null, true);
        echo "&merchant-id=";
        echo twig_escape_filter($this->env, (isset($context["merchant_id"]) || array_key_exists("merchant_id", $context) ? $context["merchant_id"] : (function () { throw new RuntimeError('Variable "merchant_id" does not exist.', 231, $this->source); })()), "html", null, true);
        echo "&intent=capture\" data-partner-attribution-id=\"";
        echo twig_escape_filter($this->env, (isset($context["partner_attribution_id"]) || array_key_exists("partner_attribution_id", $context) ? $context["partner_attribution_id"] : (function () { throw new RuntimeError('Variable "partner_attribution_id" does not exist.', 231, $this->source); })()), "html", null, true);
        echo "\" data-enable-3ds data-client-token=\"";
        echo twig_escape_filter($this->env, (isset($context["client_token"]) || array_key_exists("client_token", $context) ? $context["client_token"] : (function () { throw new RuntimeError('Variable "client_token" does not exist.', 231, $this->source); })()), "html", null, true);
        echo "\"></script>
    <script>
        let createPayPalOrderUrl = \"";
        // line 233
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_paypal_plugin_create_paypal_order", ["token" => (isset($context["order_token"]) || array_key_exists("order_token", $context) ? $context["order_token"] : (function () { throw new RuntimeError('Variable "order_token" does not exist.', 233, $this->source); })())]), "html", null, true);
        echo "\";
        let completePayPalOrderUrl = \"";
        // line 234
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_paypal_plugin_complete_paypal_order", ["token" => (isset($context["order_token"]) || array_key_exists("order_token", $context) ? $context["order_token"] : (function () { throw new RuntimeError('Variable "order_token" does not exist.', 234, $this->source); })())]), "html", null, true);
        echo "\"
        let errorPayPalPaymentUrl = \"";
        // line 235
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_paypal_plugin_payment_error");
        echo "\";
        let availableCountries = ";
        // line 236
        echo json_encode((isset($context["available_countries"]) || array_key_exists("available_countries", $context) ? $context["available_countries"] : (function () { throw new RuntimeError('Variable "available_countries" does not exist.', 236, $this->source); })()));
        echo ";
        let cancelPayPalPaymentUrl = \"";
        // line 237
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_paypal_plugin_cancel_checkout_payment");
        echo "\";
        let updatePayPalOrderUrl = \"";
        // line 238
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_paypal_plugin_update_paypal_order");
        echo "\";
        let validForm = false;
        let invalidFormMessage = \"";
        // line 240
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.pay_pal.invalid_form"), "html", null, true);
        echo "\";
        let cancelPreviousPaymentUrl = \"";
        // line 241
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_paypal_plugin_cancel_last_payment", ["token" => (isset($context["order_token"]) || array_key_exists("order_token", $context) ? $context["order_token"] : (function () { throw new RuntimeError('Variable "order_token" does not exist.', 241, $this->source); })())]), "html", null, true);
        echo "\";

        window.addEventListener(\"beforeunload\", function(event) {
            fetch (cancelPreviousPaymentUrl, {
                method: 'get'
            })
        });

        paypal.Buttons({
            locale: '";
        // line 250
        echo twig_escape_filter($this->env, (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 250, $this->source); })()), "html", null, true);
        echo "',
            style: { label: 'pay' },
            createOrder: function(data, actions) {
                return fetch(createPayPalOrderUrl, {
                    method: 'post'
                }).then(res => {
                    document.querySelector('#paypal-payment-container').classList.add('loading');
                    document.querySelector('#paypal-button-container').classList.add('low-opacity');
                    return res.json();
                }).then(data => data.orderID);
            },
            onApprove: function(data, actions) {
                return fetch(completePayPalOrderUrl, {
                    method: 'post'
                }).then(res => res.json()).then(details => window.location.href = details.return_url);
            },
            onError: function (error) {
                return fetch(errorPayPalPaymentUrl, {
                    method: 'post',
                    headers: {},
                    body: error
                }).then(window.location.reload());
            },
            onShippingChange: function(data, actions) {
                if (!availableCountries.filter(country => country === data.shipping_address.country_code).length) {
                    return actions.reject();
                }

                return fetch(updatePayPalOrderUrl, {
                    method: 'post',
                    headers: { 'content-type': 'application/json' },
                    body: JSON.stringify(data)
                }).then(res => {
                    if (!res || res.error) {
                        return actions.reject();
                    }

                    return actions.resolve();
                });
            },
            onCancel: function (data, actions) {
                return fetch(cancelPayPalPaymentUrl, {
                    method: 'post',
                    headers: { 'content-type': 'application/json' },
                    body: JSON.stringify({ payPalOrderId: data.orderID })
                }).then(window.location.reload());
            }
        }).render('#paypal-button-container');

        //once we add onshippingchange button doesnt render anymore
        paypal.getFundingSources().forEach(function(fundingSource) {
            var button = paypal.Buttons({
                fundingSource: fundingSource,
                createOrder: function(data, actions) {
                    return fetch(createPayPalOrderUrl, {
                        method: 'post'
                    }).then(res => {
                        document.querySelector('#paypal-payment-container').classList.add('loading');
                        document.querySelector('#paypal-button-container').classList.add('low-opacity');
                        return res.json();
                    }).then(data => data.orderID);
                },
                onApprove: function(data, actions) {
                    return fetch(completePayPalOrderUrl, {
                        method: 'post'
                    }).then(res => res.json()).then(details => window.location.href = details.return_url);
                },
                onError: function (err) {
                    return fetch(errorPayPalPaymentUrl, {
                        method: 'post',
                        headers: { 'content-type': 'application/json' },
                        body: JSON.stringify(err)
                    }).then(window.location.reload());
                },
                onCancel: function (data, actions) {
                    return fetch(cancelPayPalPaymentUrl, {
                        method: 'post',
                        headers: { 'content-type': 'application/json' },
                        body: JSON.stringify({ payPalOrderId: data.orderID })
                    }).then(window.location.reload());
                }
            });

            if (button.isEligible() && fundingSource != 'paypal' && fundingSource != 'card') {
                button.render('#paypal-button-container');
            }
        });

        if (paypal.HostedFields.isEligible() === true) {
            let processingOrderId;

            paypal.HostedFields.render({
                createOrder: function(data, actions) {
                    document.querySelector('#paypal-payment-container').classList.add('loading');
                    document.querySelector('#paypal-button-container').classList.add('low-opacity');

                    return fetch(createPayPalOrderUrl, {
                        method: 'POST'
                    }).then(function(res) {
                        return res.json();
                    }).then(function(data) {
                        processingOrderId = data.orderID;

                        return data.orderID;
                    });
                },
                styles: {
                    'input': {
                        'font-size': '14px',
                        'font-family': 'Product Sans',
                        'color': '#3a3a3a',
                    },
                    ':focus': {
                        'color': '#000'
                    }
                },
                fields: {
                    number: {
                        selector: '#card-number',
                        placeholder: '";
        // line 369
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.pay_pal.credit_card_number"), "html", null, true);
        echo "',
                        required: 'required',
                    },
                    cvv: {
                        selector: '#cvv',
                        placeholder: '123',
                        required: 'required',
                    },
                    expirationDate: {
                        selector: '#expiration-date',
                        placeholder: 'MM/YYYY',
                        required: 'required',
                    }
                }
            }).then(hostedFields => {
                hostedFields.on('validityChange', function (event) {
                    let field = event.fields[event.emittedBy];

                    if (field.isValid) {
                        field.container.classList.remove('invalid-field');
                    } else if (field.isPotentiallyValid) {
                        field.container.classList.add('invalid-field');
                    } else {
                        field.container.classList.add('invalid-field');
                    }
                });

                hostedFields.on('cardTypeChange', function (event) {
                    if (event.cards.length === 1) {
                        document.querySelector('#advanced-cards-form').classList = [];
                        document.querySelector('#advanced-cards-form').classList.add(event.cards[0].type);
                        document.querySelector('#card-image').classList = [];
                        document.querySelector('#card-image').classList.add(event.cards[0].type);
                        // Change the CVV length for AmericanExpress cards
                        if (event.cards[0].code.size === 4) {
                            hostedFieldsInstance.setAttribute({
                                field: 'cvv',
                                attribute: 'placeholder',
                                value: '1234'
                            });
                        }
                    } else {
                        hostedFields.setAttribute({
                            field: 'cvv',
                            attribute: 'placeholder',
                            value: '123'
                        });
                        document.querySelector('#card-image').classList = [];
                        document.querySelector('#advanced-cards-form').classList = [];
                    }
                });

                document.querySelector('#advanced-cards-form').addEventListener('submit', event => {
                    event.preventDefault();

                    let state = hostedFields.getState();
                    let formValid = Object.keys(state.fields).every(function (key) {
                        if (!state.fields[key].isValid) state.fields[key].container.classList.add('invalid-field');
                        else state.fields[key].container.classList.remove('invalid-field')
                        return state.fields[key].isValid;
                    });

                    if (formValid) {
                        hostedFields.submit({
                            contingencies: ['SCA_ALWAYS'],
                            cardholderName: document.getElementById('card-holder-name').value,
                            billingAddress: {
                                streetAddress: document.getElementById('card-billing-address-street').value,
                                region: document.getElementById('card-billing-address-state').value,
                                locality: document.getElementById('card-billing-address-city').value,
                                postalCode: document.getElementById('card-billing-address-zip').value,
                                countryCodeAlpha2: document.getElementById('card-billing-address-country').value
                            }
                        }).then(payload => {
                            if (payload.authenticationReason == 'SUCCESSFUL' && payload.authenticationStatus == 'YES') {
                                return fetch(completePayPalOrderUrl, {
                                    method: 'post'
                                }).then(function(res) {
                                    return res.json();
                                }).then(function(data) {
                                    if (data.status == 'processing') {
                                        return fetch(cancelPayPalPaymentUrl, {
                                            method: 'post',
                                            headers: { 'content-type': 'application/json' },
                                            body: JSON.stringify({ payPalOrderId: data.orderID })
                                        }).then(window.location.reload());
                                    }

                                    window.location.href = data.return_url;
                                });
                            }


                            return fetch(errorPayPalPaymentUrl, {
                                method: 'post',
                                headers: { 'content-type': 'application/json' },
                                body: JSON.stringify('Invalid 3D Secure authentication.')
                            }).then(function(data) {
                                return fetch(cancelPayPalPaymentUrl, {
                                    method: 'post',
                                    headers: { 'content-type': 'application/json' },
                                    body: JSON.stringify({ payPalOrderId: processingOrderId })
                                }).then(window.location.reload());
                            });
                        });
                    } else {
                        alert(invalidFormMessage);
                    }
                });
            });
        }

        document.querySelector('#billing-info').addEventListener('change', e => {
            document.querySelector('#billing-container').classList.toggle('hidden');
        })

        \$(document).ready(function() {
            \$('#tabs').tab()
        });
    </script>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "            <style>
                .container {
                    padding: 30px;
                    align-items: center;
                    display: grid;
                    justify-content: center;
                    grid-template-rows: 30vh auto;
                    width: 400px;
                    margin: auto;
                    font-family: 'Roboto', verdana, sans-serif;
                }

                #sylius-logo {
                    width: 100%;
                }

                .padding {
                    padding: 10px;
                }

                .back-button-container {
                    position: absolute;
                    padding: 20px;
                    top: 0;
                    left: 0;
                }

                .back-button {
                    cursor: pointer;
                    display: inline-block;
                    min-height: 1em;
                    outline: 0;
                    border: none;
                    vertical-align: baseline;
                    color: rgba(0,0,0,.6);
                    font-family: Lato,'Helvetica Neue',Arial,Helvetica,sans-serif;
                    padding: .78571429em 1.5em .78571429em;
                    text-transform: none;
                    text-shadow: none;
                    font-weight: 700;
                    line-height: 1em;
                    font-style: normal;
                    text-align: center;
                    text-decoration: none;
                    border-radius: .28571429rem;
                    background-color: #1abb9c;
                    color: #fff;
                    margin:auto;
                }

                #paypal-payment-container {
                    min-height: 100%;
                    height: auto;
                    width: 100%;
                }

                .input {
                    height: 30px;
                    padding: 5px;
                    margin-bottom: 10px;
                }

                .low-opacity {
                    opacity: 0.9;
                }

                .hidden {
                    display: none;
                }

                input, .input {
                    font-size: 14px;
                    font-family: 'Product Sans', sans-serif;
                    color: #3a3a3a;
                    cursor: auto;
                    width: 100%;
                    padding: 5px;
                    height: 30px;
                    margin-bottom: 5px;
                    margin-top: 2px;
                    border: 1px solid lightgray;
                    -webkit-transition: border-color 160ms;
                    transition: border-color 160ms;
                    border-radius: 5px;
                }

                input:focus, .input:focus {
                    outline: none;
                    border-color: #777;
                }

                .braintree-hosted-fields-focused {
                    border-color: #777;
                }

                .braintree-hosted-fields-invalid {
                    border-color: tomato;
                }

                .braintree-hosted-fields-valid {
                    border-color: limegreen;
                }

                .checkbox-grid {
                    display: grid;
                    grid-template-columns: 20px auto;
                    align-items: center;
                    grid-gap: 10px;
                    grid-template-rows: 30px;
                    margin-bottom: 5px;
                }

                #card-image {
                    position: absolute;
                    top: 3.1em;
                    right: 1.7em;
                    width: 44px;
                    height: 28px;
                    background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/346994/card_sprite.png);
                    background-size: 86px 458px;
                    border-radius: 1px;
                    background-position: -100px 0;
                    background-repeat: no-repeat;
                    margin-bottom: 1em;
                }

                #card-image.visa {
                     background-position: 0 -398px;
                }

                #card-image.master-card {
                     background-position: 0 -281px;
                }

                #card-image.american-express {
                     background-position: 0 -370px;
                }

                #card-image.discover {
                     background-position: 0 -163px;
                }

                #card-image.maestro {
                     background-position: 0 -251px;
                }

                #card-image.jcb {
                     background-position: 0 -221px;
                }

                #card-image.diners-club {
                     background-position: 0 -133px;
                }

                #billing-info {
                    height: 20px;
                    margin: 0;
                }

                label {
                    padding: 2px;
                    margin-bottom: 2px;
                }

                #paypal-button-container {
                    display: grid;
                    grid-gap: 10px;
                }
            </style>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusPayPalPlugin/payWithPaypal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  498 => 9,  488 => 8,  356 => 369,  234 => 250,  222 => 241,  218 => 240,  213 => 238,  209 => 237,  205 => 236,  201 => 235,  197 => 234,  193 => 233,  177 => 231,  175 => 230,  165 => 223,  158 => 221,  152 => 220,  146 => 219,  140 => 218,  134 => 217,  130 => 216,  124 => 213,  116 => 210,  112 => 209,  107 => 207,  102 => 205,  97 => 203,  83 => 192,  78 => 189,  76 => 188,  69 => 184,  65 => 183,  59 => 179,  57 => 8,  51 => 5,  46 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include '@SyliusUi/_stylesheets.html.twig' with {'path': 'assets/shop/css/style.css'} %}
<!DOCTYPE html>
<html>
    <head>
        <title>{{ 'sylius.pay_pal.pay_with_pay_pal'|trans }}</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        {% block stylesheets %}
            <style>
                .container {
                    padding: 30px;
                    align-items: center;
                    display: grid;
                    justify-content: center;
                    grid-template-rows: 30vh auto;
                    width: 400px;
                    margin: auto;
                    font-family: 'Roboto', verdana, sans-serif;
                }

                #sylius-logo {
                    width: 100%;
                }

                .padding {
                    padding: 10px;
                }

                .back-button-container {
                    position: absolute;
                    padding: 20px;
                    top: 0;
                    left: 0;
                }

                .back-button {
                    cursor: pointer;
                    display: inline-block;
                    min-height: 1em;
                    outline: 0;
                    border: none;
                    vertical-align: baseline;
                    color: rgba(0,0,0,.6);
                    font-family: Lato,'Helvetica Neue',Arial,Helvetica,sans-serif;
                    padding: .78571429em 1.5em .78571429em;
                    text-transform: none;
                    text-shadow: none;
                    font-weight: 700;
                    line-height: 1em;
                    font-style: normal;
                    text-align: center;
                    text-decoration: none;
                    border-radius: .28571429rem;
                    background-color: #1abb9c;
                    color: #fff;
                    margin:auto;
                }

                #paypal-payment-container {
                    min-height: 100%;
                    height: auto;
                    width: 100%;
                }

                .input {
                    height: 30px;
                    padding: 5px;
                    margin-bottom: 10px;
                }

                .low-opacity {
                    opacity: 0.9;
                }

                .hidden {
                    display: none;
                }

                input, .input {
                    font-size: 14px;
                    font-family: 'Product Sans', sans-serif;
                    color: #3a3a3a;
                    cursor: auto;
                    width: 100%;
                    padding: 5px;
                    height: 30px;
                    margin-bottom: 5px;
                    margin-top: 2px;
                    border: 1px solid lightgray;
                    -webkit-transition: border-color 160ms;
                    transition: border-color 160ms;
                    border-radius: 5px;
                }

                input:focus, .input:focus {
                    outline: none;
                    border-color: #777;
                }

                .braintree-hosted-fields-focused {
                    border-color: #777;
                }

                .braintree-hosted-fields-invalid {
                    border-color: tomato;
                }

                .braintree-hosted-fields-valid {
                    border-color: limegreen;
                }

                .checkbox-grid {
                    display: grid;
                    grid-template-columns: 20px auto;
                    align-items: center;
                    grid-gap: 10px;
                    grid-template-rows: 30px;
                    margin-bottom: 5px;
                }

                #card-image {
                    position: absolute;
                    top: 3.1em;
                    right: 1.7em;
                    width: 44px;
                    height: 28px;
                    background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/346994/card_sprite.png);
                    background-size: 86px 458px;
                    border-radius: 1px;
                    background-position: -100px 0;
                    background-repeat: no-repeat;
                    margin-bottom: 1em;
                }

                #card-image.visa {
                     background-position: 0 -398px;
                }

                #card-image.master-card {
                     background-position: 0 -281px;
                }

                #card-image.american-express {
                     background-position: 0 -370px;
                }

                #card-image.discover {
                     background-position: 0 -163px;
                }

                #card-image.maestro {
                     background-position: 0 -251px;
                }

                #card-image.jcb {
                     background-position: 0 -221px;
                }

                #card-image.diners-club {
                     background-position: 0 -133px;
                }

                #billing-info {
                    height: 20px;
                    margin: 0;
                }

                label {
                    padding: 2px;
                    margin-bottom: 2px;
                }

                #paypal-button-container {
                    display: grid;
                    grid-gap: 10px;
                }
            </style>
        {% endblock %}
    </head>
    <body>
    <div id=\"paypal-payment-container\" class=\"ui segment loadable\">
        <div class=\"back-button-container\">
            <a href=\"{{ path('sylius_shop_order_show', {'tokenValue': order_token}) }}\" class=\"back-button\">
                {{ 'sylius.pay_pal.back_to_store'|trans }}
            </a>
        </div>
        <div class=\"container\">
            {% include '@SyliusShop/_flashes.html.twig' %}
            <div class=\"header padding\"><img draggable=\"false\" id=\"sylius-logo\" src=\"https://paypal.sylius.com/assets/img/logo.png\" alt=\"logo\"/></div>
            <div id=\"tabs\" class=\"ui top attached tabular menu\">
                <div class=\"active item\" data-tab=\"paypal\">PayPal</div>
                <div class=\"item\" data-tab=\"card\">{{ 'sylius.pay_pal.credit_card'|trans }}</div>
            </div>
            <div class=\"ui bottom attached active tab segment\" data-tab=\"paypal\">
                <div class=\"button-container padding\">
                    <div id=\"paypal-button-container\"></div>
                </div>
            </div>
            <div class=\"ui bottom attached tab segment\" data-tab=\"card\">
                <div class=\"button-container padding\">
                    <div id=\"advanced-cards-container\"></div>
                    <form id=\"advanced-cards-form\">
                        <label for=\"card-number\">{{ 'sylius.pay_pal.credit_card_number'|trans }}</label>
                        <div id=\"card-number\" class=\"input\"><div id=\"card-image\"></div></div>
                        <label for=\"expiration-date\">{{ 'sylius.pay_pal.expiration_date'|trans }}</label>
                        <div id=\"expiration-date\" class=\"input\"></div>
                        <label for=\"cvv\">{{ 'sylius.pay_pal.cvv'|trans }}</label>
                        <div id=\"cvv\" class=\"input\"></div>
                        <label for='card-holder-name'>{{ 'sylius.form.credit_card.cardholder_name'|trans }}</label>
                        <br/><input type='text' id='card-holder-name' name='card-holder-name' autocomplete='off' placeholder='{{ 'sylius.form.credit_card.cardholder_name'|trans }}' value=\"{{ billing_address.fullName }}\"/>
                        <div class=\"checkbox-grid\">
                            <input type=\"checkbox\" id=\"billing-info\" checked />
                            <label for=\"billing-info\">{{ 'sylius.pay_pal.billing_info'|trans }}</label>
                        </div>
                        <div id=\"billing-container\" class=\"hidden\">
                            <br/><label for='card-billing-address-street'>{{ 'sylius.ui.billing_address'|trans }}</label>
                            <br/><input type='text' id='card-billing-address-street' name='card-billing-address-street' autocomplete='off' placeholder='{{ 'sylius.ui.street'|trans }}' value=\"{{ billing_address.street }}\"/>
                            <input type='text' id='card-billing-address-city' name='card-billing-address-city' autocomplete='off' placeholder='{{ 'sylius.ui.city'|trans }}' value=\"{{ billing_address.city }}\"/>
                            <input type='text' id='card-billing-address-state' name='card-billing-address-state' autocomplete='off' placeholder='{{ 'sylius.ui.state'|trans }}' value=\"{{ billing_address|sylius_province_name }}\"/>
                            <input type='text' id='card-billing-address-zip' name='card-billing-address-zip' autocomplete='off' placeholder='{{ 'sylius.ui.postcode'|trans }}' value=\"{{ billing_address.postcode }}\"/>
                            <input type='text' id='card-billing-address-country' name='card-billing-address-country' autocomplete='off' placeholder='{{ 'sylius.ui.country'|trans }}' value=\"{{ billing_address.countryCode }}\" />
                        </div>
                        <button value=\"submit\" id=\"submit\" class=\"ui button yellow fluid\">{{ 'sylius.pay_pal.pay_with_card'|trans }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </body>
    {% include '@SyliusUi/_javascripts.html.twig' with {'path': 'assets/shop/js/app.js'} %}
    <script src=\"https://www.paypal.com/sdk/js?components=hosted-fields,buttons,funding-eligibility&locale={{ locale }}&currency={{ currency }}&vault=false&client-id={{ client_id }}&merchant-id={{ merchant_id }}&intent=capture\" data-partner-attribution-id=\"{{ partner_attribution_id }}\" data-enable-3ds data-client-token=\"{{ client_token }}\"></script>
    <script>
        let createPayPalOrderUrl = \"{{ path('sylius_paypal_plugin_create_paypal_order', {'token': order_token}) }}\";
        let completePayPalOrderUrl = \"{{ path('sylius_paypal_plugin_complete_paypal_order', {'token': order_token }) }}\"
        let errorPayPalPaymentUrl = \"{{ path('sylius_paypal_plugin_payment_error') }}\";
        let availableCountries = {{ available_countries|json_encode|raw }};
        let cancelPayPalPaymentUrl = \"{{ path('sylius_paypal_plugin_cancel_checkout_payment') }}\";
        let updatePayPalOrderUrl = \"{{ path('sylius_paypal_plugin_update_paypal_order') }}\";
        let validForm = false;
        let invalidFormMessage = \"{{ 'sylius.pay_pal.invalid_form'|trans }}\";
        let cancelPreviousPaymentUrl = \"{{ path('sylius_paypal_plugin_cancel_last_payment', {'token': order_token}) }}\";

        window.addEventListener(\"beforeunload\", function(event) {
            fetch (cancelPreviousPaymentUrl, {
                method: 'get'
            })
        });

        paypal.Buttons({
            locale: '{{ locale }}',
            style: { label: 'pay' },
            createOrder: function(data, actions) {
                return fetch(createPayPalOrderUrl, {
                    method: 'post'
                }).then(res => {
                    document.querySelector('#paypal-payment-container').classList.add('loading');
                    document.querySelector('#paypal-button-container').classList.add('low-opacity');
                    return res.json();
                }).then(data => data.orderID);
            },
            onApprove: function(data, actions) {
                return fetch(completePayPalOrderUrl, {
                    method: 'post'
                }).then(res => res.json()).then(details => window.location.href = details.return_url);
            },
            onError: function (error) {
                return fetch(errorPayPalPaymentUrl, {
                    method: 'post',
                    headers: {},
                    body: error
                }).then(window.location.reload());
            },
            onShippingChange: function(data, actions) {
                if (!availableCountries.filter(country => country === data.shipping_address.country_code).length) {
                    return actions.reject();
                }

                return fetch(updatePayPalOrderUrl, {
                    method: 'post',
                    headers: { 'content-type': 'application/json' },
                    body: JSON.stringify(data)
                }).then(res => {
                    if (!res || res.error) {
                        return actions.reject();
                    }

                    return actions.resolve();
                });
            },
            onCancel: function (data, actions) {
                return fetch(cancelPayPalPaymentUrl, {
                    method: 'post',
                    headers: { 'content-type': 'application/json' },
                    body: JSON.stringify({ payPalOrderId: data.orderID })
                }).then(window.location.reload());
            }
        }).render('#paypal-button-container');

        //once we add onshippingchange button doesnt render anymore
        paypal.getFundingSources().forEach(function(fundingSource) {
            var button = paypal.Buttons({
                fundingSource: fundingSource,
                createOrder: function(data, actions) {
                    return fetch(createPayPalOrderUrl, {
                        method: 'post'
                    }).then(res => {
                        document.querySelector('#paypal-payment-container').classList.add('loading');
                        document.querySelector('#paypal-button-container').classList.add('low-opacity');
                        return res.json();
                    }).then(data => data.orderID);
                },
                onApprove: function(data, actions) {
                    return fetch(completePayPalOrderUrl, {
                        method: 'post'
                    }).then(res => res.json()).then(details => window.location.href = details.return_url);
                },
                onError: function (err) {
                    return fetch(errorPayPalPaymentUrl, {
                        method: 'post',
                        headers: { 'content-type': 'application/json' },
                        body: JSON.stringify(err)
                    }).then(window.location.reload());
                },
                onCancel: function (data, actions) {
                    return fetch(cancelPayPalPaymentUrl, {
                        method: 'post',
                        headers: { 'content-type': 'application/json' },
                        body: JSON.stringify({ payPalOrderId: data.orderID })
                    }).then(window.location.reload());
                }
            });

            if (button.isEligible() && fundingSource != 'paypal' && fundingSource != 'card') {
                button.render('#paypal-button-container');
            }
        });

        if (paypal.HostedFields.isEligible() === true) {
            let processingOrderId;

            paypal.HostedFields.render({
                createOrder: function(data, actions) {
                    document.querySelector('#paypal-payment-container').classList.add('loading');
                    document.querySelector('#paypal-button-container').classList.add('low-opacity');

                    return fetch(createPayPalOrderUrl, {
                        method: 'POST'
                    }).then(function(res) {
                        return res.json();
                    }).then(function(data) {
                        processingOrderId = data.orderID;

                        return data.orderID;
                    });
                },
                styles: {
                    'input': {
                        'font-size': '14px',
                        'font-family': 'Product Sans',
                        'color': '#3a3a3a',
                    },
                    ':focus': {
                        'color': '#000'
                    }
                },
                fields: {
                    number: {
                        selector: '#card-number',
                        placeholder: '{{ 'sylius.pay_pal.credit_card_number'|trans }}',
                        required: 'required',
                    },
                    cvv: {
                        selector: '#cvv',
                        placeholder: '123',
                        required: 'required',
                    },
                    expirationDate: {
                        selector: '#expiration-date',
                        placeholder: 'MM/YYYY',
                        required: 'required',
                    }
                }
            }).then(hostedFields => {
                hostedFields.on('validityChange', function (event) {
                    let field = event.fields[event.emittedBy];

                    if (field.isValid) {
                        field.container.classList.remove('invalid-field');
                    } else if (field.isPotentiallyValid) {
                        field.container.classList.add('invalid-field');
                    } else {
                        field.container.classList.add('invalid-field');
                    }
                });

                hostedFields.on('cardTypeChange', function (event) {
                    if (event.cards.length === 1) {
                        document.querySelector('#advanced-cards-form').classList = [];
                        document.querySelector('#advanced-cards-form').classList.add(event.cards[0].type);
                        document.querySelector('#card-image').classList = [];
                        document.querySelector('#card-image').classList.add(event.cards[0].type);
                        // Change the CVV length for AmericanExpress cards
                        if (event.cards[0].code.size === 4) {
                            hostedFieldsInstance.setAttribute({
                                field: 'cvv',
                                attribute: 'placeholder',
                                value: '1234'
                            });
                        }
                    } else {
                        hostedFields.setAttribute({
                            field: 'cvv',
                            attribute: 'placeholder',
                            value: '123'
                        });
                        document.querySelector('#card-image').classList = [];
                        document.querySelector('#advanced-cards-form').classList = [];
                    }
                });

                document.querySelector('#advanced-cards-form').addEventListener('submit', event => {
                    event.preventDefault();

                    let state = hostedFields.getState();
                    let formValid = Object.keys(state.fields).every(function (key) {
                        if (!state.fields[key].isValid) state.fields[key].container.classList.add('invalid-field');
                        else state.fields[key].container.classList.remove('invalid-field')
                        return state.fields[key].isValid;
                    });

                    if (formValid) {
                        hostedFields.submit({
                            contingencies: ['SCA_ALWAYS'],
                            cardholderName: document.getElementById('card-holder-name').value,
                            billingAddress: {
                                streetAddress: document.getElementById('card-billing-address-street').value,
                                region: document.getElementById('card-billing-address-state').value,
                                locality: document.getElementById('card-billing-address-city').value,
                                postalCode: document.getElementById('card-billing-address-zip').value,
                                countryCodeAlpha2: document.getElementById('card-billing-address-country').value
                            }
                        }).then(payload => {
                            if (payload.authenticationReason == 'SUCCESSFUL' && payload.authenticationStatus == 'YES') {
                                return fetch(completePayPalOrderUrl, {
                                    method: 'post'
                                }).then(function(res) {
                                    return res.json();
                                }).then(function(data) {
                                    if (data.status == 'processing') {
                                        return fetch(cancelPayPalPaymentUrl, {
                                            method: 'post',
                                            headers: { 'content-type': 'application/json' },
                                            body: JSON.stringify({ payPalOrderId: data.orderID })
                                        }).then(window.location.reload());
                                    }

                                    window.location.href = data.return_url;
                                });
                            }


                            return fetch(errorPayPalPaymentUrl, {
                                method: 'post',
                                headers: { 'content-type': 'application/json' },
                                body: JSON.stringify('Invalid 3D Secure authentication.')
                            }).then(function(data) {
                                return fetch(cancelPayPalPaymentUrl, {
                                    method: 'post',
                                    headers: { 'content-type': 'application/json' },
                                    body: JSON.stringify({ payPalOrderId: processingOrderId })
                                }).then(window.location.reload());
                            });
                        });
                    } else {
                        alert(invalidFormMessage);
                    }
                });
            });
        }

        document.querySelector('#billing-info').addEventListener('change', e => {
            document.querySelector('#billing-container').classList.toggle('hidden');
        })

        \$(document).ready(function() {
            \$('#tabs').tab()
        });
    </script>
</html>
", "@SyliusPayPalPlugin/payWithPaypal.html.twig", "/home/gloens/workspace/php/veille/Sylius/project/vendor/sylius/paypal-plugin/src/Resources/views/payWithPaypal.html.twig");
    }
}
