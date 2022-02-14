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

/* @SyliusAdmin/Product/Show/_variantItem.html.twig */
class __TwigTemplate_5f38882cc1550969f5e5b663cdd30783477846f4fd7e5e92ce6d1d616f1cf890 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Product/Show/_variantItem.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Product/Show/_variantItem.html.twig"));

        // line 1
        echo "<tr class=\"variants-accordion__title item-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["loop"]) || array_key_exists("loop", $context) ? $context["loop"] : (function () { throw new RuntimeError('Variable "loop" does not exist.', 1, $this->source); })()), "index", [], "any", false, false, false, 1), "html", null, true);
        echo "\">
    <td class=\"center aligned\">
        <button class=\"ui basic icon button\" style=\"box-shadow: none\">
            <i class=\"counterclockwise rotated dropdown icon\"></i>
        </button>
    </td>
    <td>
        <div class=\"ui items\">
            <div class=\"item\">
                <div class=\"ui tiny image\">
                    ";
        // line 11
        if (twig_get_attribute($this->env, $this->source, (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 11, $this->source); })()), "hasImages", [], "any", false, false, false, 11)) {
            // line 12
            echo "                        ";
            $this->loadTemplate("@SyliusAdmin/Product/_mainImage.html.twig", "@SyliusAdmin/Product/Show/_variantItem.html.twig", 12)->display(twig_array_merge($context, ["product" => (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 12, $this->source); })()), "filter" => "sylius_admin_product_large_thumbnail"]));
            // line 13
            echo "                    ";
        } else {
            // line 14
            echo "                        ";
            $this->loadTemplate("@SyliusAdmin/Product/_mainImage.html.twig", "@SyliusAdmin/Product/Show/_variantItem.html.twig", 14)->display(twig_array_merge($context, ["product" => (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 14, $this->source); })()), "filter" => "sylius_admin_product_large_thumbnail"]));
            // line 15
            echo "                    ";
        }
        // line 16
        echo "                </div>
                <div class=\"middle aligned content\">
                    <div><strong class=\"variant-name\">";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 18, $this->source); })()), "product", [], "any", false, false, false, 18), "name", [], "any", false, false, false, 18), "html", null, true);
        echo "</strong></div>
                    <small class=\"gray text variant-code\">";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 19, $this->source); })()), "code", [], "any", false, false, false, 19), "html", null, true);
        echo "</small>
                </div>
            </div>
        </div>
    </td>
    <td>
        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 25, $this->source); })()), "optionValues", [], "any", false, false, false, 25));
        foreach ($context['_seq'] as $context["_key"] => $context["optionValue"]) {
            // line 26
            echo "            <div><span class=\"gray text\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["optionValue"], "option", [], "any", false, false, false, 26), "name", [], "any", false, false, false, 26), "html", null, true);
            echo ":</span> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["optionValue"], "value", [], "any", false, false, false, 26), "html", null, true);
            echo "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['optionValue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "    </td>
    <td>
        ";
        // line 30
        if (twig_get_attribute($this->env, $this->source, (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 30, $this->source); })()), "tracked", [], "any", false, false, false, 30)) {
            // line 31
            echo "            <span class=\"ui teal label\"><i class=\"checkmark icon\"></i>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.tracked"), "html", null, true);
            echo "</span>
        ";
        } else {
            // line 33
            echo "            <span class=\"ui red label\"><i class=\"remove icon\"></i>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.not_tracked"), "html", null, true);
            echo "</span>
        ";
        }
        // line 35
        echo "    </td>
    <td>
        ";
        // line 37
        if (twig_get_attribute($this->env, $this->source, (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 37, $this->source); })()), "shippingRequired", [], "any", false, false, false, 37)) {
            // line 38
            echo "            <span class=\"ui teal label\"><i class=\"checkmark icon\"></i>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.shipping_required"), "html", null, true);
            echo "</span>
        ";
        } else {
            // line 40
            echo "            <span class=\"ui orange label\"><i class=\"remove icon\"></i>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.shipping_not_required"), "html", null, true);
            echo "</span>
        ";
        }
        // line 42
        echo "    </td>
    <td>
        ";
        // line 44
        if (twig_get_attribute($this->env, $this->source, (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 44, $this->source); })()), "taxCategory", [], "any", false, false, false, 44)) {
            // line 45
            echo "            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 45, $this->source); })()), "taxCategory", [], "any", false, false, false, 45), "html", null, true);
            echo "
        ";
        } else {
            // line 47
            echo "            <div class=\"gray text\">-</div>
        ";
        }
        // line 49
        echo "    </td>
    <td class=\"current-stock\">";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 50, $this->source); })()), "onHand", [], "any", false, false, false, 50), "html", null, true);
        echo "</td>
    <td>
        <a class=\"ui labeled icon button edit-variant\" style=\"padding-right: 15px;\" href= ";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_product_variant_update", ["productId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 52, $this->source); })()), "product", [], "any", false, false, false, 52), "id", [], "any", false, false, false, 52), "id" => twig_get_attribute($this->env, $this->source, (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 52, $this->source); })()), "id", [], "any", false, false, false, 52)]), "html", null, true);
        echo ">
            <i class=\"edit icon\"></i>
            ";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.edit"), "html", null, true);
        echo "
        </a>
    </td>
</tr>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Product/Show/_variantItem.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 54,  163 => 52,  158 => 50,  155 => 49,  151 => 47,  145 => 45,  143 => 44,  139 => 42,  133 => 40,  127 => 38,  125 => 37,  121 => 35,  115 => 33,  109 => 31,  107 => 30,  103 => 28,  92 => 26,  88 => 25,  79 => 19,  75 => 18,  71 => 16,  68 => 15,  65 => 14,  62 => 13,  59 => 12,  57 => 11,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<tr class=\"variants-accordion__title item-{{ loop.index\t}}\">
    <td class=\"center aligned\">
        <button class=\"ui basic icon button\" style=\"box-shadow: none\">
            <i class=\"counterclockwise rotated dropdown icon\"></i>
        </button>
    </td>
    <td>
        <div class=\"ui items\">
            <div class=\"item\">
                <div class=\"ui tiny image\">
                    {% if variant.hasImages %}
                        {% include '@SyliusAdmin/Product/_mainImage.html.twig' with {'product': variant, 'filter': 'sylius_admin_product_large_thumbnail'} %}
                    {% else %}
                        {% include '@SyliusAdmin/Product/_mainImage.html.twig' with {'product': product, 'filter': 'sylius_admin_product_large_thumbnail'} %}
                    {% endif %}
                </div>
                <div class=\"middle aligned content\">
                    <div><strong class=\"variant-name\">{{ variant.product.name }}</strong></div>
                    <small class=\"gray text variant-code\">{{ variant.code }}</small>
                </div>
            </div>
        </div>
    </td>
    <td>
        {% for optionValue in variant.optionValues %}
            <div><span class=\"gray text\">{{ optionValue.option.name }}:</span> {{ optionValue.value }}</div>
        {% endfor %}
    </td>
    <td>
        {% if variant.tracked %}
            <span class=\"ui teal label\"><i class=\"checkmark icon\"></i>{{ 'sylius.ui.tracked'|trans }}</span>
        {% else %}
            <span class=\"ui red label\"><i class=\"remove icon\"></i>{{ 'sylius.ui.not_tracked'|trans }}</span>
        {% endif %}
    </td>
    <td>
        {% if variant.shippingRequired %}
            <span class=\"ui teal label\"><i class=\"checkmark icon\"></i>{{ 'sylius.ui.shipping_required'|trans }}</span>
        {% else %}
            <span class=\"ui orange label\"><i class=\"remove icon\"></i>{{ 'sylius.ui.shipping_not_required'|trans }}</span>
        {% endif %}
    </td>
    <td>
        {% if variant.taxCategory %}
            {{ variant.taxCategory }}
        {% else %}
            <div class=\"gray text\">-</div>
        {% endif %}
    </td>
    <td class=\"current-stock\">{{ variant.onHand }}</td>
    <td>
        <a class=\"ui labeled icon button edit-variant\" style=\"padding-right: 15px;\" href= {{path('sylius_admin_product_variant_update', {'productId' : variant.product.id, 'id' : variant.id}) }}>
            <i class=\"edit icon\"></i>
            {{ 'sylius.ui.edit'|trans }}
        </a>
    </td>
</tr>
", "@SyliusAdmin/Product/Show/_variantItem.html.twig", "/home/gloens/workspace/php/veille/Sylius/project/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Product/Show/_variantItem.html.twig");
    }
}
