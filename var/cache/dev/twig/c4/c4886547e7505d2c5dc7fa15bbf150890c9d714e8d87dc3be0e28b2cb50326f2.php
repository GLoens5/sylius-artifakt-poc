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

/* @SyliusAdmin/Product/Show/_variantContentPricing.html.twig */
class __TwigTemplate_8c2d4ab6aaa52341305f8b1bebb6d9aca0be7576933eb63c54110c11465e14c5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Product/Show/_variantContentPricing.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Product/Show/_variantContentPricing.html.twig"));

        // line 1
        $macros["money"] = $this->macros["money"] = $this->loadTemplate("@SyliusAdmin/Common/Macro/money.html.twig", "@SyliusAdmin/Product/Show/_variantContentPricing.html.twig", 1)->unwrap();
        // line 2
        echo "
<div class=\"ui segment\">
    <div class=\"ui small header\">
        ";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.pricing"), "html", null, true);
        echo "
    </div>
    <table class=\"ui very basic celled table\">
        <tbody>
        <tr>
            <td class=\"gray text\"><strong>";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.channels"), "html", null, true);
        echo "</strong></td>
            <td class=\"gray text\"><strong>";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.price"), "html", null, true);
        echo "</strong></td>
            <td class=\"gray text\"><strong>";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.original_price"), "html", null, true);
        echo "</strong></td>
        </tr>
        ";
        // line 14
        $context["currencies"] = $this->extensions['Sylius\Bundle\AdminBundle\Twig\ChannelsCurrenciesExtension']->getAllCurrencies();
        // line 15
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 15, $this->source); })()), "channelPricings", [], "any", false, false, false, 15));
        foreach ($context['_seq'] as $context["_key"] => $context["channelPricing"]) {
            // line 16
            echo "            <tr class=\"pricing\">
                <td class=\"five wide gray text\">
                    <strong>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["channelPricing"], "channelCode", [], "any", false, false, false, 18), "html", null, true);
            echo "</strong>
                </td>
                ";
            // line 20
            $context["channelCode"] = twig_get_attribute($this->env, $this->source, $context["channelPricing"], "channelCode", [], "any", false, false, false, 20);
            // line 21
            echo "                <td>";
            echo twig_call_macro($macros["money"], "macro_format", [twig_get_attribute($this->env, $this->source, $context["channelPricing"], "price", [], "any", false, false, false, 21), twig_get_attribute($this->env, $this->source, (isset($context["currencies"]) || array_key_exists("currencies", $context) ? $context["currencies"] : (function () { throw new RuntimeError('Variable "currencies" does not exist.', 21, $this->source); })()), (isset($context["channelCode"]) || array_key_exists("channelCode", $context) ? $context["channelCode"] : (function () { throw new RuntimeError('Variable "channelCode" does not exist.', 21, $this->source); })()), [], "array", false, false, false, 21)], 21, $context, $this->getSourceContext());
            echo "</td>
                ";
            // line 22
            if ((twig_get_attribute($this->env, $this->source, $context["channelPricing"], "originalPrice", [], "any", false, false, false, 22) != null)) {
                // line 23
                echo "                    <td>";
                echo twig_call_macro($macros["money"], "macro_format", [twig_get_attribute($this->env, $this->source, $context["channelPricing"], "originalPrice", [], "any", false, false, false, 23), twig_get_attribute($this->env, $this->source, (isset($context["currencies"]) || array_key_exists("currencies", $context) ? $context["currencies"] : (function () { throw new RuntimeError('Variable "currencies" does not exist.', 23, $this->source); })()), (isset($context["channelCode"]) || array_key_exists("channelCode", $context) ? $context["channelCode"] : (function () { throw new RuntimeError('Variable "channelCode" does not exist.', 23, $this->source); })()), [], "array", false, false, false, 23)], 23, $context, $this->getSourceContext());
                echo "</td>
                ";
            } else {
                // line 25
                echo "                    <td><span class=\"gray text\">-</span></td>
                ";
            }
            // line 27
            echo "            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['channelPricing'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "        </tbody>
    </table>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Product/Show/_variantContentPricing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 29,  106 => 27,  102 => 25,  96 => 23,  94 => 22,  89 => 21,  87 => 20,  82 => 18,  78 => 16,  73 => 15,  71 => 14,  66 => 12,  62 => 11,  58 => 10,  50 => 5,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import \"@SyliusAdmin/Common/Macro/money.html.twig\" as money %}

<div class=\"ui segment\">
    <div class=\"ui small header\">
        {{ 'sylius.ui.pricing'|trans }}
    </div>
    <table class=\"ui very basic celled table\">
        <tbody>
        <tr>
            <td class=\"gray text\"><strong>{{ 'sylius.ui.channels'|trans }}</strong></td>
            <td class=\"gray text\"><strong>{{ 'sylius.ui.price'|trans }}</strong></td>
            <td class=\"gray text\"><strong>{{ 'sylius.ui.original_price'|trans }}</strong></td>
        </tr>
        {% set currencies = sylius_channels_currencies() %}
        {% for channelPricing in variant.channelPricings %}
            <tr class=\"pricing\">
                <td class=\"five wide gray text\">
                    <strong>{{ channelPricing.channelCode }}</strong>
                </td>
                {% set channelCode = channelPricing.channelCode %}
                <td>{{ money.format(channelPricing.price, currencies[channelCode]) }}</td>
                {% if channelPricing.originalPrice != null %}
                    <td>{{ money.format(channelPricing.originalPrice, currencies[channelCode]) }}</td>
                {% else %}
                    <td><span class=\"gray text\">-</span></td>
                {% endif %}
            </tr>
        {% endfor %}
        </tbody>
    </table>
</div>
", "@SyliusAdmin/Product/Show/_variantContentPricing.html.twig", "/home/gloens/workspace/php/veille/Sylius/project/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Product/Show/_variantContentPricing.html.twig");
    }
}
