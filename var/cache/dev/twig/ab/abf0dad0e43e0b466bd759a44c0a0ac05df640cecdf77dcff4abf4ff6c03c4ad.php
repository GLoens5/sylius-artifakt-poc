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

/* @SyliusAdmin/Order/Show/_shipment.html.twig */
class __TwigTemplate_115c6f9bd5613a5e0a7974a4e0e18b9350af0290c3a301e8509d927f43a38501 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Order/Show/_shipment.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Order/Show/_shipment.html.twig"));

        // line 1
        $macros["label"] = $this->macros["label"] = $this->loadTemplate("@SyliusUi/Macro/labels.html.twig", "@SyliusAdmin/Order/Show/_shipment.html.twig", 1)->unwrap();
        // line 2
        echo "
";
        // line 3
        $context["cart"] = twig_constant("Sylius\\Component\\Shipping\\Model\\Shipment::STATE_CART");
        // line 4
        $context["shipped"] = twig_constant("Sylius\\Component\\Shipping\\Model\\Shipment::STATE_SHIPPED");
        // line 5
        echo "
<div class=\"item\">
    <div class=\"right floated content\">
        ";
        // line 8
        $this->loadTemplate("@SyliusAdmin/Common/Label/shipmentState.html.twig", "@SyliusAdmin/Order/Show/_shipment.html.twig", 8)->display(twig_array_merge($context, ["data" => twig_get_attribute($this->env, $this->source, (isset($context["shipment"]) || array_key_exists("shipment", $context) ? $context["shipment"] : (function () { throw new RuntimeError('Variable "shipment" does not exist.', 8, $this->source); })()), "state", [], "any", false, false, false, 8)]));
        // line 9
        echo "    </div>
    <i class=\"large truck icon\"></i>
    <div class=\"content\">
        <div class=\"header\">
            ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["shipment"]) || array_key_exists("shipment", $context) ? $context["shipment"] : (function () { throw new RuntimeError('Variable "shipment" does not exist.', 13, $this->source); })()), "method", [], "any", false, false, false, 13), "html", null, true);
        echo "
        </div>
        <div class=\"description\">
            <i class=\"globe icon\"></i>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["shipment"]) || array_key_exists("shipment", $context) ? $context["shipment"] : (function () { throw new RuntimeError('Variable "shipment" does not exist.', 16, $this->source); })()), "method", [], "any", false, false, false, 16), "zone", [], "any", false, false, false, 16), "html", null, true);
        echo "
        </div>
        ";
        // line 18
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["shipment"]) || array_key_exists("shipment", $context) ? $context["shipment"] : (function () { throw new RuntimeError('Variable "shipment" does not exist.', 18, $this->source); })()), "shippedAt", [], "any", false, false, false, 18))) {
            // line 19
            echo "            ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.shipped_at"), "html", null, true);
            echo ": <span class=\"shipped-at-date\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["shipment"]) || array_key_exists("shipment", $context) ? $context["shipment"] : (function () { throw new RuntimeError('Variable "shipment" does not exist.', 19, $this->source); })()), "shippedAt", [], "any", false, false, false, 19), "d-m-Y H:i:s"), "html", null, true);
            echo "</span>
        ";
        }
        // line 21
        echo "    </div>
    ";
        // line 22
        if ($this->extensions['SM\Extension\Twig\SMExtension']->can((isset($context["shipment"]) || array_key_exists("shipment", $context) ? $context["shipment"] : (function () { throw new RuntimeError('Variable "shipment" does not exist.', 22, $this->source); })()), "ship", "sylius_shipment")) {
            // line 23
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_partial_shipment_ship", ["orderId" => twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 23, $this->source); })()), "id", [], "any", false, false, false, 23), "id" => twig_get_attribute($this->env, $this->source, (isset($context["shipment"]) || array_key_exists("shipment", $context) ? $context["shipment"] : (function () { throw new RuntimeError('Variable "shipment" does not exist.', 23, $this->source); })()), "id", [], "any", false, false, false, 23)]));
            echo "
    ";
        }
        // line 25
        echo "    ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["shipment"]) || array_key_exists("shipment", $context) ? $context["shipment"] : (function () { throw new RuntimeError('Variable "shipment" does not exist.', 25, $this->source); })()), "tracking", [], "any", false, false, false, 25))) {
            // line 26
            echo "        <div class=\"ui segment\">
            <span class=\"ui top attached icon label\"><i class=\"plane icon\"></i> ";
            // line 27
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.tracking_code")), "html", null, true);
            echo "</span>
            <p>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["shipment"]) || array_key_exists("shipment", $context) ? $context["shipment"] : (function () { throw new RuntimeError('Variable "shipment" does not exist.', 28, $this->source); })()), "tracking", [], "any", false, false, false, 28), "html", null, true);
            echo "</p>
        </div>
    ";
        }
        // line 31
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["shipment"]) || array_key_exists("shipment", $context) ? $context["shipment"] : (function () { throw new RuntimeError('Variable "shipment" does not exist.', 31, $this->source); })()), "state", [], "any", false, false, false, 31) != (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 31, $this->source); })()))) {
            // line 32
            echo "        <a class=\"ui icon labeled tiny fluid button\" style=\"color: gray; margin-top: 10px;\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_shipment_show", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["shipment"]) || array_key_exists("shipment", $context) ? $context["shipment"] : (function () { throw new RuntimeError('Variable "shipment" does not exist.', 32, $this->source); })()), "id", [], "any", false, false, false, 32)]), "html", null, true);
            echo "\" ";
            echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["shipment-show-button"]);
            echo ">
            <i class=\"icon search\"></i>";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.show"), "html", null, true);
            echo "
        </a>
    ";
        }
        // line 36
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["shipment"]) || array_key_exists("shipment", $context) ? $context["shipment"] : (function () { throw new RuntimeError('Variable "shipment" does not exist.', 36, $this->source); })()), "state", [], "any", false, false, false, 36) == (isset($context["shipped"]) || array_key_exists("shipped", $context) ? $context["shipped"] : (function () { throw new RuntimeError('Variable "shipped" does not exist.', 36, $this->source); })()))) {
            // line 37
            echo "        ";
            $context["path"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_shipment_resend_confirmation_email", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["shipment"]) || array_key_exists("shipment", $context) ? $context["shipment"] : (function () { throw new RuntimeError('Variable "shipment" does not exist.', 37, $this->source); })()), "id", [], "any", false, false, false, 37), "_csrf_token" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(twig_get_attribute($this->env, $this->source, (isset($context["shipment"]) || array_key_exists("shipment", $context) ? $context["shipment"] : (function () { throw new RuntimeError('Variable "shipment" does not exist.', 37, $this->source); })()), "id", [], "any", false, false, false, 37))]);
            // line 38
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new RuntimeError('Variable "path" does not exist.', 38, $this->source); })()), "html", null, true);
            echo "\" class=\"ui icon labeled tiny fluid button\" style=\"margin: 7px 0 0;\" ";
            echo call_user_func_array($this->env->getFunction('sylius_test_html_attribute')->getCallable(), ["resend-shipment-confirmation-email"]);
            echo ">
            <i class=\"send icon\"></i> ";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.resend_the_shipment_confirmation_email"), "html", null, true);
            echo "
        </a>
    ";
        }
        // line 42
        echo "</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Order/Show/_shipment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 42,  142 => 39,  135 => 38,  132 => 37,  129 => 36,  123 => 33,  116 => 32,  113 => 31,  107 => 28,  103 => 27,  100 => 26,  97 => 25,  91 => 23,  89 => 22,  86 => 21,  78 => 19,  76 => 18,  71 => 16,  65 => 13,  59 => 9,  57 => 8,  52 => 5,  50 => 4,  48 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import '@SyliusUi/Macro/labels.html.twig' as label %}

{% set cart = constant('Sylius\\\\Component\\\\Shipping\\\\Model\\\\Shipment::STATE_CART') %}
{% set shipped = constant('Sylius\\\\Component\\\\Shipping\\\\Model\\\\Shipment::STATE_SHIPPED') %}

<div class=\"item\">
    <div class=\"right floated content\">
        {% include '@SyliusAdmin/Common/Label/shipmentState.html.twig' with {'data': shipment.state} %}
    </div>
    <i class=\"large truck icon\"></i>
    <div class=\"content\">
        <div class=\"header\">
            {{ shipment.method }}
        </div>
        <div class=\"description\">
            <i class=\"globe icon\"></i>{{ shipment.method.zone }}
        </div>
        {% if shipment.shippedAt is not empty %}
            {{ 'sylius.ui.shipped_at'|trans }}: <span class=\"shipped-at-date\">{{ shipment.shippedAt|date('d-m-Y H:i:s') }}</span>
        {% endif %}
    </div>
    {% if sm_can(shipment, 'ship', 'sylius_shipment') %}
        {{ render(path('sylius_admin_partial_shipment_ship', {'orderId': order.id, 'id': shipment.id})) }}
    {% endif %}
    {% if shipment.tracking is not empty %}
        <div class=\"ui segment\">
            <span class=\"ui top attached icon label\"><i class=\"plane icon\"></i> {{ 'sylius.ui.tracking_code'|trans|upper }}</span>
            <p>{{ shipment.tracking }}</p>
        </div>
    {% endif %}
    {% if shipment.state != cart %}
        <a class=\"ui icon labeled tiny fluid button\" style=\"color: gray; margin-top: 10px;\" href=\"{{ path('sylius_admin_shipment_show', {'id': shipment.id}) }}\" {{ sylius_test_html_attribute('shipment-show-button') }}>
            <i class=\"icon search\"></i>{{ 'sylius.ui.show'|trans }}
        </a>
    {% endif %}
    {% if shipment.state == shipped %}
        {% set path = path('sylius_admin_shipment_resend_confirmation_email', {'id': shipment.id, '_csrf_token': csrf_token(shipment.id)}) %}
        <a href=\"{{ path }}\" class=\"ui icon labeled tiny fluid button\" style=\"margin: 7px 0 0;\" {{ sylius_test_html_attribute('resend-shipment-confirmation-email') }}>
            <i class=\"send icon\"></i> {{ 'sylius.ui.resend_the_shipment_confirmation_email'|trans }}
        </a>
    {% endif %}
</div>
", "@SyliusAdmin/Order/Show/_shipment.html.twig", "/home/gloens/workspace/php/veille/Sylius/project/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Order/Show/_shipment.html.twig");
    }
}
