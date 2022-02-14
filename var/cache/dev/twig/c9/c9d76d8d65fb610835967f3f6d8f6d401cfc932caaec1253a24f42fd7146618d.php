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

/* @SyliusAdmin/Product/Show/_variantContentShipping.html.twig */
class __TwigTemplate_3987e7c400355a8e9cdc72fb58fd911b1e53083426255febd80d792e62d2ab3c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Product/Show/_variantContentShipping.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Product/Show/_variantContentShipping.html.twig"));

        // line 1
        echo "<div class=\"ui segment\">
    <div class=\"ui small header\">
        ";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.shipping"), "html", null, true);
        echo "
    </div>
    ";
        // line 5
        if ((((((twig_get_attribute($this->env, $this->source, (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 5, $this->source); })()), "shippingCategory", [], "any", false, false, false, 5) === null) && (twig_get_attribute($this->env, $this->source, (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 5, $this->source); })()), "width", [], "any", false, false, false, 5) === null)) && (twig_get_attribute($this->env, $this->source, (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 5, $this->source); })()), "height", [], "any", false, false, false, 5) === null)) && (twig_get_attribute($this->env, $this->source, (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 5, $this->source); })()), "depth", [], "any", false, false, false, 5) === null)) && (twig_get_attribute($this->env, $this->source, (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 5, $this->source); })()), "weight", [], "any", false, false, false, 5) === null))) {
            // line 6
            echo "        <div class=\"ui teal message\">
            <p>";
            // line 7
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.no_shipping_data"), "html", null, true);
            echo "</p>
        </div>
    ";
        } else {
            // line 10
            echo "        <table class=\"ui very basic celled table\">
            <tbody>
            <tr>
                <td class=\"five wide gray text\"><strong>";
            // line 13
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.shipping_category"), "html", null, true);
            echo "</strong></td>
                <td>";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 14, $this->source); })()), "shippingCategory", [], "any", false, false, false, 14), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <td class=\"five wide gray text\"><strong>";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.width"), "html", null, true);
            echo "</strong></td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 18, $this->source); })()), "width", [], "any", false, false, false, 18), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <td class=\"five wide gray text\"><strong>";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.height"), "html", null, true);
            echo "</strong></td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 22, $this->source); })()), "height", [], "any", false, false, false, 22), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <td class=\"five wide gray text\"><strong>";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.depth"), "html", null, true);
            echo "</strong></td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 26, $this->source); })()), "depth", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <td class=\"five wide gray text\"><strong>";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.weight"), "html", null, true);
            echo "</strong></td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 30, $this->source); })()), "weight", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
            </tr>
            </tbody>
        </table>
    ";
        }
        // line 35
        echo "</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Product/Show/_variantContentShipping.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 35,  112 => 30,  108 => 29,  102 => 26,  98 => 25,  92 => 22,  88 => 21,  82 => 18,  78 => 17,  72 => 14,  68 => 13,  63 => 10,  57 => 7,  54 => 6,  52 => 5,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"ui segment\">
    <div class=\"ui small header\">
        {{ 'sylius.ui.shipping'|trans }}
    </div>
    {% if variant.shippingCategory is same as(null) and variant.width is same as(null) and variant.height is same as(null) and variant.depth is same as(null) and variant.weight is same as(null) %}
        <div class=\"ui teal message\">
            <p>{{ 'sylius.ui.no_shipping_data'|trans }}</p>
        </div>
    {% else %}
        <table class=\"ui very basic celled table\">
            <tbody>
            <tr>
                <td class=\"five wide gray text\"><strong>{{ 'sylius.ui.shipping_category'|trans }}</strong></td>
                <td>{{ variant.shippingCategory }}</td>
            </tr>
            <tr>
                <td class=\"five wide gray text\"><strong>{{ 'sylius.ui.width'|trans }}</strong></td>
                <td>{{ variant.width }}</td>
            </tr>
            <tr>
                <td class=\"five wide gray text\"><strong>{{ 'sylius.ui.height'|trans }}</strong></td>
                <td>{{ variant.height }}</td>
            </tr>
            <tr>
                <td class=\"five wide gray text\"><strong>{{ 'sylius.ui.depth'|trans }}</strong></td>
                <td>{{ variant.depth }}</td>
            </tr>
            <tr>
                <td class=\"five wide gray text\"><strong>{{ 'sylius.ui.weight'|trans }}</strong></td>
                <td>{{ variant.weight }}</td>
            </tr>
            </tbody>
        </table>
    {% endif %}
</div>
", "@SyliusAdmin/Product/Show/_variantContentShipping.html.twig", "/home/gloens/workspace/php/veille/Sylius/project/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Product/Show/_variantContentShipping.html.twig");
    }
}
