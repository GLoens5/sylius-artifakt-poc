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

/* @SyliusAdmin/Product/Show/_details.html.twig */
class __TwigTemplate_c70c7a3573e03b6f2857d2da5ea8231d40593944394cdc406774a3d1dd1b9cb8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Product/Show/_details.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Product/Show/_details.html.twig"));

        // line 1
        echo "<div id=\"details\">
    <h4 class=\"ui top attached large header\">";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.details"), "html", null, true);
        echo "</h4>
    <div class=\"ui attached segment\">
        <div>
            ";
        // line 5
        if (twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 5, $this->source); })()), "enabled", [], "any", false, false, false, 5)) {
            // line 6
            echo "                <span class=\"ui teal label\"><i class=\"checkmark icon\"></i>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.enabled"), "html", null, true);
            echo "</span>
            ";
        } else {
            // line 8
            echo "                <span class=\"ui red label\"><i class=\"remove icon\"></i>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.disabled"), "html", null, true);
            echo "</span>
            ";
        }
        // line 10
        echo "
            ";
        // line 11
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 11, $this->source); })()), "variants", [], "any", false, false, false, 11), "first", [], "any", false, false, false, 11), "tracked", [], "any", false, false, false, 11)) {
            // line 12
            echo "                <span class=\"ui teal label\"><i class=\"checkmark icon\"></i>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.tracked"), "html", null, true);
            echo "</span>
            ";
        } else {
            // line 14
            echo "                <span class=\"ui red label\"><i class=\"remove icon\"></i>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.not_tracked"), "html", null, true);
            echo "</span>
            ";
        }
        // line 16
        echo "
            ";
        // line 17
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 17, $this->source); })()), "variants", [], "any", false, false, false, 17), "first", [], "any", false, false, false, 17), "shippingRequired", [], "any", false, false, false, 17)) {
            // line 18
            echo "                <span class=\"ui teal label\"><i class=\"checkmark icon\"></i>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.shipping_required"), "html", null, true);
            echo "</span>
            ";
        } else {
            // line 20
            echo "                <span class=\"ui orange label\"><i class=\"remove icon\"></i>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.shipping_not_required"), "html", null, true);
            echo "</span>
            ";
        }
        // line 22
        echo "
            <table class=\"ui very basic celled table\">
                <tbody>
                <tr>
                    <td class=\"five wide\"><strong class=\"gray text\">";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.code"), "html", null, true);
        echo "</strong></td>
                    <td>";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 27, $this->source); })()), "code", [], "any", false, false, false, 27), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td class=\"five wide\"><strong class=\"gray text\">";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.channels"), "html", null, true);
        echo "</strong></td>
                    <td>
                        ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 32, $this->source); })()), "channels", [], "any", false, false, false, 32));
        foreach ($context['_seq'] as $context["_key"] => $context["channel"]) {
            // line 33
            echo "                            <div>
                                <span class=\"ui large empty horizontal circular label\" style=\"background-color: ";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["channel"], "color", [], "any", false, false, false, 34), "html", null, true);
            echo "\"></span>
                                <span class=\"channel-name\">";
            // line 35
            echo twig_escape_filter($this->env, $context["channel"], "html", null, true);
            echo "</span>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['channel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "                    </td>
                </tr>
                <tr>
                    <td class=\"five wide\"><strong class=\"gray text\">";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.current_stock"), "html", null, true);
        echo "</strong></td>
                    <td>";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 42, $this->source); })()), "variants", [], "any", false, false, false, 42), "first", [], "any", false, false, false, 42), "onHand", [], "any", false, false, false, 42), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td class=\"five wide\"><strong class=\"gray text\">";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.tax_category"), "html", null, true);
        echo "</strong></td>
                    <td>";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 46, $this->source); })()), "variants", [], "any", false, false, false, 46), "first", [], "any", false, false, false, 46), "taxCategory", [], "any", false, false, false, 46), "html", null, true);
        echo "</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Product/Show/_details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 46,  156 => 45,  150 => 42,  146 => 41,  141 => 38,  132 => 35,  128 => 34,  125 => 33,  121 => 32,  116 => 30,  110 => 27,  106 => 26,  100 => 22,  94 => 20,  88 => 18,  86 => 17,  83 => 16,  77 => 14,  71 => 12,  69 => 11,  66 => 10,  60 => 8,  54 => 6,  52 => 5,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"details\">
    <h4 class=\"ui top attached large header\">{{ 'sylius.ui.details'|trans }}</h4>
    <div class=\"ui attached segment\">
        <div>
            {% if product.enabled %}
                <span class=\"ui teal label\"><i class=\"checkmark icon\"></i>{{ 'sylius.ui.enabled'|trans }}</span>
            {% else %}
                <span class=\"ui red label\"><i class=\"remove icon\"></i>{{ 'sylius.ui.disabled'|trans }}</span>
            {% endif %}

            {% if product.variants.first.tracked %}
                <span class=\"ui teal label\"><i class=\"checkmark icon\"></i>{{ 'sylius.ui.tracked'|trans }}</span>
            {% else %}
                <span class=\"ui red label\"><i class=\"remove icon\"></i>{{ 'sylius.ui.not_tracked'|trans }}</span>
            {% endif %}

            {% if product.variants.first.shippingRequired %}
                <span class=\"ui teal label\"><i class=\"checkmark icon\"></i>{{ 'sylius.ui.shipping_required'|trans }}</span>
            {% else %}
                <span class=\"ui orange label\"><i class=\"remove icon\"></i>{{ 'sylius.ui.shipping_not_required'|trans }}</span>
            {% endif %}

            <table class=\"ui very basic celled table\">
                <tbody>
                <tr>
                    <td class=\"five wide\"><strong class=\"gray text\">{{ 'sylius.ui.code'|trans }}</strong></td>
                    <td>{{ product.code }}</td>
                </tr>
                <tr>
                    <td class=\"five wide\"><strong class=\"gray text\">{{ 'sylius.ui.channels'|trans }}</strong></td>
                    <td>
                        {% for channel in product.channels %}
                            <div>
                                <span class=\"ui large empty horizontal circular label\" style=\"background-color: {{ channel.color }}\"></span>
                                <span class=\"channel-name\">{{ channel }}</span>
                            </div>
                        {% endfor %}
                    </td>
                </tr>
                <tr>
                    <td class=\"five wide\"><strong class=\"gray text\">{{ 'sylius.ui.current_stock'|trans }}</strong></td>
                    <td>{{ product.variants.first.onHand }}</td>
                </tr>
                <tr>
                    <td class=\"five wide\"><strong class=\"gray text\">{{ 'sylius.ui.tax_category'|trans }}</strong></td>
                    <td>{{ product.variants.first.taxCategory }}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
", "@SyliusAdmin/Product/Show/_details.html.twig", "/home/gloens/workspace/php/veille/Sylius/project/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Product/Show/_details.html.twig");
    }
}
