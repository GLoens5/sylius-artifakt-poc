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

/* @SyliusPayPalPlugin/payFromProductPage.html.twig */
class __TwigTemplate_5c91664fc6210ed3a5116333b0ef4fe022d75a2f2426efdc220b0fb4b2dbe233 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusPayPalPlugin/payFromProductPage.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusPayPalPlugin/payFromProductPage.html.twig"));

        // line 1
        echo "<div id=\"paypal-button-container\"></div>
<script src=\"https://www.paypal.com/sdk/js?client-id=";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["clientId"]) || array_key_exists("clientId", $context) ? $context["clientId"] : (function () { throw new RuntimeError('Variable "clientId" does not exist.', 2, $this->source); })()), "html", null, true);
        echo "&locale=";
        echo twig_escape_filter($this->env, (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 2, $this->source); })()), "html", null, true);
        echo "&currency=";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sylius"]) || array_key_exists("sylius", $context) ? $context["sylius"] : (function () { throw new RuntimeError('Variable "sylius" does not exist.', 2, $this->source); })()), "currencyCode", [], "any", false, false, false, 2), "html", null, true);
        echo "&commit=false&disable-funding=credit,card,bancontact,blik,eps,giropay,ideal,mybank,p24,sepa,sofort,venmo\" data-partner-attribution-id=\"sylius-ppcp4p-bn-code\"></script>
<script>
    let payPalOrderId = null;
    let orderId = null;

    let completeUrl = \"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["completeUrl"]) || array_key_exists("completeUrl", $context) ? $context["completeUrl"] : (function () { throw new RuntimeError('Variable "completeUrl" does not exist.', 7, $this->source); })()), "html", null, true);
        echo "\";
    let createPayPalOrderFromProductUrl = \"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["createPayPalOrderFromProductUrl"]) || array_key_exists("createPayPalOrderFromProductUrl", $context) ? $context["createPayPalOrderFromProductUrl"] : (function () { throw new RuntimeError('Variable "createPayPalOrderFromProductUrl" does not exist.', 8, $this->source); })()), "html", null, true);
        echo "\";
    let processPayPalOrderUrl = \"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["processPayPalOrderUrl"]) || array_key_exists("processPayPalOrderUrl", $context) ? $context["processPayPalOrderUrl"] : (function () { throw new RuntimeError('Variable "processPayPalOrderUrl" does not exist.', 9, $this->source); })()), "html", null, true);
        echo "\";
    let cancelPayPalOrderUrl = \"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_paypal_plugin_cancel_order");
        echo "\";
    let errorPayPalPaymentUrl = \"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["errorPayPalPaymentUrl"]) || array_key_exists("errorPayPalPaymentUrl", $context) ? $context["errorPayPalPaymentUrl"] : (function () { throw new RuntimeError('Variable "errorPayPalPaymentUrl" does not exist.', 11, $this->source); })()), "html", null, true);
        echo "\";
    let availableCountries = ";
        // line 12
        echo json_encode((isset($context["available_countries"]) || array_key_exists("available_countries", $context) ? $context["available_countries"] : (function () { throw new RuntimeError('Variable "available_countries" does not exist.', 12, $this->source); })()));
        echo ";
    let updatePayPalOrderUrl = \"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_paypal_plugin_update_paypal_order");
        echo "\";

    paypal.Buttons({
        locale: '";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "',
        style: {
            label: 'checkout'
        },
        createOrder: function(data, actions) {
            let formData = new FormData(document.getElementsByName('sylius_add_to_cart')[0]);
            return fetch(createPayPalOrderFromProductUrl, {
                method: 'post',
                body: formData
            })
            .then(function(res) {
                document.forms[0].classList.add('loading');
                return res.status === 400 ? window.location.reload() : res.json();
            })
            .then(data => {
                payPalOrderId = data.orderID;
                orderId = data.id;

                return data.orderID;
            });
        },
        onApprove: function(data, actions) {
            return fetch(processPayPalOrderUrl, {
                method: 'post',
                headers: { 'content-type': 'application/json' },
                body: JSON.stringify({ payPalOrderId: payPalOrderId, orderId: orderId })
            })
            .then(res => res.json())
            .then(details => window.location.href = completeUrl);
        },
        onCancel: function (data, actions) {
            return fetch(cancelPayPalOrderUrl, {
                method: 'post',
                headers: { 'content-type': 'application/json' },
                body: JSON.stringify({ payPalOrderId: data.orderID })
            })
            .then(data => window.location.reload());
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
        }
    }).render('#paypal-button-container');
</script>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusPayPalPlugin/payFromProductPage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 16,  82 => 13,  78 => 12,  74 => 11,  70 => 10,  66 => 9,  62 => 8,  58 => 7,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"paypal-button-container\"></div>
<script src=\"https://www.paypal.com/sdk/js?client-id={{ clientId }}&locale={{ locale }}&currency={{ sylius.currencyCode }}&commit=false&disable-funding=credit,card,bancontact,blik,eps,giropay,ideal,mybank,p24,sepa,sofort,venmo\" data-partner-attribution-id=\"sylius-ppcp4p-bn-code\"></script>
<script>
    let payPalOrderId = null;
    let orderId = null;

    let completeUrl = \"{{ completeUrl }}\";
    let createPayPalOrderFromProductUrl = \"{{ createPayPalOrderFromProductUrl }}\";
    let processPayPalOrderUrl = \"{{ processPayPalOrderUrl }}\";
    let cancelPayPalOrderUrl = \"{{ path('sylius_paypal_plugin_cancel_order') }}\";
    let errorPayPalPaymentUrl = \"{{ errorPayPalPaymentUrl }}\";
    let availableCountries = {{ available_countries|json_encode|raw }};
    let updatePayPalOrderUrl = \"{{ path('sylius_paypal_plugin_update_paypal_order') }}\";

    paypal.Buttons({
        locale: '{{ locale }}',
        style: {
            label: 'checkout'
        },
        createOrder: function(data, actions) {
            let formData = new FormData(document.getElementsByName('sylius_add_to_cart')[0]);
            return fetch(createPayPalOrderFromProductUrl, {
                method: 'post',
                body: formData
            })
            .then(function(res) {
                document.forms[0].classList.add('loading');
                return res.status === 400 ? window.location.reload() : res.json();
            })
            .then(data => {
                payPalOrderId = data.orderID;
                orderId = data.id;

                return data.orderID;
            });
        },
        onApprove: function(data, actions) {
            return fetch(processPayPalOrderUrl, {
                method: 'post',
                headers: { 'content-type': 'application/json' },
                body: JSON.stringify({ payPalOrderId: payPalOrderId, orderId: orderId })
            })
            .then(res => res.json())
            .then(details => window.location.href = completeUrl);
        },
        onCancel: function (data, actions) {
            return fetch(cancelPayPalOrderUrl, {
                method: 'post',
                headers: { 'content-type': 'application/json' },
                body: JSON.stringify({ payPalOrderId: data.orderID })
            })
            .then(data => window.location.reload());
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
        }
    }).render('#paypal-button-container');
</script>
", "@SyliusPayPalPlugin/payFromProductPage.html.twig", "/home/gloens/workspace/php/veille/Sylius/project/vendor/sylius/paypal-plugin/src/Resources/views/payFromProductPage.html.twig");
    }
}
