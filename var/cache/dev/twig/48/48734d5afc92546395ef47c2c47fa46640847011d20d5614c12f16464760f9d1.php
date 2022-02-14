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

/* @SyliusPayPalPlugin/payFromPaymentPage.html.twig */
class __TwigTemplate_186e70bca4e28dc76681b0e423fd41fec924c090c5477941655f483eaa0f63f9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusPayPalPlugin/payFromPaymentPage.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusPayPalPlugin/payFromPaymentPage.html.twig"));

        // line 1
        echo "<div id=\"paypal-button-container\" style=\"width:250px\"></div>
<script src=\"https://www.paypal.com/sdk/js?client-id=";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["clientId"]) || array_key_exists("clientId", $context) ? $context["clientId"] : (function () { throw new RuntimeError('Variable "clientId" does not exist.', 2, $this->source); })()), "html", null, true);
        echo "&locale=";
        echo twig_escape_filter($this->env, (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 2, $this->source); })()), "html", null, true);
        echo "&currency=";
        echo twig_escape_filter($this->env, (isset($context["currency"]) || array_key_exists("currency", $context) ? $context["currency"] : (function () { throw new RuntimeError('Variable "currency" does not exist.', 2, $this->source); })()), "html", null, true);
        echo "\" data-partner-attribution-id=\"";
        echo twig_escape_filter($this->env, (isset($context["partnerAttributionId"]) || array_key_exists("partnerAttributionId", $context) ? $context["partnerAttributionId"] : (function () { throw new RuntimeError('Variable "partnerAttributionId" does not exist.', 2, $this->source); })()), "html", null, true);
        echo "\"></script>
<script>
    let createPayPalOrderFromPaymentPageUrl = \"";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["createPayPalOrderFromPaymentPageUrl"]) || array_key_exists("createPayPalOrderFromPaymentPageUrl", $context) ? $context["createPayPalOrderFromPaymentPageUrl"] : (function () { throw new RuntimeError('Variable "createPayPalOrderFromPaymentPageUrl" does not exist.', 4, $this->source); })()), "html", null, true);
        echo "\";
    let completePayPalOrderFromPaymentPageUrl = \"";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["completePayPalOrderFromPaymentPageUrl"]) || array_key_exists("completePayPalOrderFromPaymentPageUrl", $context) ? $context["completePayPalOrderFromPaymentPageUrl"] : (function () { throw new RuntimeError('Variable "completePayPalOrderFromPaymentPageUrl" does not exist.', 5, $this->source); })()), "html", null, true);
        echo "\";
    let cancelPayPalPaymentUrl = \"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["cancelPayPalPaymentUrl"]) || array_key_exists("cancelPayPalPaymentUrl", $context) ? $context["cancelPayPalPaymentUrl"] : (function () { throw new RuntimeError('Variable "cancelPayPalPaymentUrl" does not exist.', 6, $this->source); })()), "html", null, true);
        echo "\";
    let errorPayPalPaymentUrl = \"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["errorPayPalPaymentUrl"]) || array_key_exists("errorPayPalPaymentUrl", $context) ? $context["errorPayPalPaymentUrl"] : (function () { throw new RuntimeError('Variable "errorPayPalPaymentUrl" does not exist.', 7, $this->source); })()), "html", null, true);
        echo "\";
    let availableCountries = ";
        // line 8
        echo json_encode((isset($context["available_countries"]) || array_key_exists("available_countries", $context) ? $context["available_countries"] : (function () { throw new RuntimeError('Variable "available_countries" does not exist.', 8, $this->source); })()));
        echo ";
    let updatePayPalOrderUrl = \"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_paypal_plugin_update_paypal_order");
        echo "\";

    paypal.Buttons({
        style: {
            color: 'gold',
            layout: 'horizontal',
            label: 'checkout',
        },
        locale: '";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 17, $this->source); })()), "html", null, true);
        echo "',
        createOrder: function(data, actions) {
            return fetch(createPayPalOrderFromPaymentPageUrl, {
                method: 'post'
            }).then(function(res) {
                document.forms[0].classList.add('loading');
                return res.status === 400 ? window.location.reload() : res.json();
            }).then(data => data.order_id);
        },
        onApprove: function(data, actions) {
            return fetch(completePayPalOrderFromPaymentPageUrl, {
                method: 'post'
            }).then(res => res.json()).then(details => window.location.href = details.return_url);
        },
        onCancel: function (data, actions) {
            return fetch(cancelPayPalPaymentUrl, {
                method: 'post',
                headers: { 'content-type': 'application/json' },
                body: JSON.stringify({ payPalOrderId: data.orderID })
            }).then(window.location.reload());
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
        return "@SyliusPayPalPlugin/payFromPaymentPage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 17,  77 => 9,  73 => 8,  69 => 7,  65 => 6,  61 => 5,  57 => 4,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"paypal-button-container\" style=\"width:250px\"></div>
<script src=\"https://www.paypal.com/sdk/js?client-id={{ clientId }}&locale={{ locale }}&currency={{ currency }}\" data-partner-attribution-id=\"{{ partnerAttributionId }}\"></script>
<script>
    let createPayPalOrderFromPaymentPageUrl = \"{{ createPayPalOrderFromPaymentPageUrl }}\";
    let completePayPalOrderFromPaymentPageUrl = \"{{ completePayPalOrderFromPaymentPageUrl }}\";
    let cancelPayPalPaymentUrl = \"{{ cancelPayPalPaymentUrl }}\";
    let errorPayPalPaymentUrl = \"{{ errorPayPalPaymentUrl }}\";
    let availableCountries = {{ available_countries|json_encode|raw }};
    let updatePayPalOrderUrl = \"{{ path('sylius_paypal_plugin_update_paypal_order') }}\";

    paypal.Buttons({
        style: {
            color: 'gold',
            layout: 'horizontal',
            label: 'checkout',
        },
        locale: '{{ locale }}',
        createOrder: function(data, actions) {
            return fetch(createPayPalOrderFromPaymentPageUrl, {
                method: 'post'
            }).then(function(res) {
                document.forms[0].classList.add('loading');
                return res.status === 400 ? window.location.reload() : res.json();
            }).then(data => data.order_id);
        },
        onApprove: function(data, actions) {
            return fetch(completePayPalOrderFromPaymentPageUrl, {
                method: 'post'
            }).then(res => res.json()).then(details => window.location.href = details.return_url);
        },
        onCancel: function (data, actions) {
            return fetch(cancelPayPalPaymentUrl, {
                method: 'post',
                headers: { 'content-type': 'application/json' },
                body: JSON.stringify({ payPalOrderId: data.orderID })
            }).then(window.location.reload());
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
", "@SyliusPayPalPlugin/payFromPaymentPage.html.twig", "/home/gloens/workspace/php/veille/Sylius/project/vendor/sylius/paypal-plugin/src/Resources/views/payFromPaymentPage.html.twig");
    }
}
