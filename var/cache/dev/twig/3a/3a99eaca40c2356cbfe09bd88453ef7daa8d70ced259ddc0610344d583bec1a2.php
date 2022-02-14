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

/* @SyliusShop/Common/Order/_addresses.html.twig */
class __TwigTemplate_27bf52757878b95602c3096a5c2fb6f5b491809abb1d2d8715a75516ddba3576 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Common/Order/_addresses.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusShop/Common/Order/_addresses.html.twig"));

        // line 1
        echo "<div class=\"ui segment\">
    <div class=\"ui ";
        // line 2
        if (twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 2, $this->source); })()), "isShippingRequired", [], "method", false, false, false, 2)) {
            echo "two";
        } else {
            echo "one";
        }
        echo " column divided stackable grid\">
        <div class=\"column\" id=\"sylius-billing-address\" ";
        // line 3
        echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["billing-address"]);
        echo ">
            <div class=\"ui small dividing header\">";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.billing_address"), "html", null, true);
        echo "</div>
            ";
        // line 5
        $this->loadTemplate("@SyliusShop/Common/_address.html.twig", "@SyliusShop/Common/Order/_addresses.html.twig", 5)->display(twig_array_merge($context, ["address" => twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 5, $this->source); })()), "billingAddress", [], "any", false, false, false, 5)]));
        // line 6
        echo "        </div>
        ";
        // line 7
        if (twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 7, $this->source); })()), "isShippingRequired", [], "method", false, false, false, 7)) {
            // line 8
            echo "        <div class=\"column\" id=\"sylius-shipping-address\" ";
            echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["shipping-address"]);
            echo ">
            <div class=\"ui small dividing header\">";
            // line 9
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.shipping_address"), "html", null, true);
            echo "</div>
            ";
            // line 10
            $this->loadTemplate("@SyliusShop/Common/_address.html.twig", "@SyliusShop/Common/Order/_addresses.html.twig", 10)->display(twig_array_merge($context, ["address" => twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 10, $this->source); })()), "shippingAddress", [], "any", false, false, false, 10)]));
            // line 11
            echo "        </div>
        ";
        }
        // line 13
        echo "    </div>
</div>
";
        // line 15
        if ($this->extensions['Sylius\PayPalPlugin\Twig\OrderAddressExtension']->isBillingAddressMissing((isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 15, $this->source); })()))) {
            // line 16
            echo "<div class=\"ui icon message\">
    <i class=\"address card icon\"></i>
    <div class=\"content\">
        <div class=\"header\">";
            // line 19
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.pay_pal.missing_billing_address_header"), "html", null, true);
            echo "</div>
        <p>";
            // line 20
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.pay_pal.missing_billing_address_content"), "html", null, true);
            echo "</p>
    </div>
</div>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Common/Order/_addresses.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 20,  95 => 19,  90 => 16,  88 => 15,  84 => 13,  80 => 11,  78 => 10,  74 => 9,  69 => 8,  67 => 7,  64 => 6,  62 => 5,  58 => 4,  54 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"ui segment\">
    <div class=\"ui {% if order.isShippingRequired() %}two{% else %}one{% endif %} column divided stackable grid\">
        <div class=\"column\" id=\"sylius-billing-address\" {{ sylius_test_html_attribute('billing-address') }}>
            <div class=\"ui small dividing header\">{{ 'sylius.ui.billing_address'|trans }}</div>
            {% include '@SyliusShop/Common/_address.html.twig' with {'address': order.billingAddress} %}
        </div>
        {% if order.isShippingRequired() %}
        <div class=\"column\" id=\"sylius-shipping-address\" {{ sylius_test_html_attribute('shipping-address') }}>
            <div class=\"ui small dividing header\">{{ 'sylius.ui.shipping_address'|trans }}</div>
            {% include '@SyliusShop/Common/_address.html.twig' with {'address': order.shippingAddress} %}
        </div>
        {% endif %}
    </div>
</div>
{% if sylius_is_billing_address_missing(order) %}
<div class=\"ui icon message\">
    <i class=\"address card icon\"></i>
    <div class=\"content\">
        <div class=\"header\">{{ 'sylius.pay_pal.missing_billing_address_header'|trans }}</div>
        <p>{{ 'sylius.pay_pal.missing_billing_address_content'|trans }}</p>
    </div>
</div>
{% endif %}
", "@SyliusShop/Common/Order/_addresses.html.twig", "/home/gloens/workspace/php/veille/Sylius/project/templates/bundles/SyliusShopBundle/Common/Order/_addresses.html.twig");
    }
}
