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

/* @SyliusAdmin/Product/Show/_variantContent.html.twig */
class __TwigTemplate_688a6d41ffd05f52a7667ef15b14342b6d6f7a1a3c547455978069b63f3fc8c3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Product/Show/_variantContent.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Product/Show/_variantContent.html.twig"));

        // line 1
        echo "<tr class=\"variants-accordion__content item-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["loop"]) || array_key_exists("loop", $context) ? $context["loop"] : (function () { throw new RuntimeError('Variable "loop" does not exist.', 1, $this->source); })()), "index", [], "any", false, false, false, 1), "html", null, true);
        echo "\" style=\"display: none; background: rgba(0,0,0,.04);\">
    <td colspan=\"8\" style=\"padding: 20px\">
        <div class=\"ui grid\">
            <div class=\"doubling two column row\">
                <div class=\"column\">
                    ";
        // line 6
        $this->loadTemplate("@SyliusAdmin/Product/Show/_variantContentShipping.html.twig", "@SyliusAdmin/Product/Show/_variantContent.html.twig", 6)->display($context);
        // line 7
        echo "                </div>
                <div class=\"column\">
                    ";
        // line 9
        $this->loadTemplate("@SyliusAdmin/Product/Show/_variantContentPricing.html.twig", "@SyliusAdmin/Product/Show/_variantContent.html.twig", 9)->display($context);
        // line 10
        echo "                </div>
            </div>
        </div>
    </td>
</tr>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Product/Show/_variantContent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 10,  58 => 9,  54 => 7,  52 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<tr class=\"variants-accordion__content item-{{ loop.index }}\" style=\"display: none; background: rgba(0,0,0,.04);\">
    <td colspan=\"8\" style=\"padding: 20px\">
        <div class=\"ui grid\">
            <div class=\"doubling two column row\">
                <div class=\"column\">
                    {% include '@SyliusAdmin/Product/Show/_variantContentShipping.html.twig' %}
                </div>
                <div class=\"column\">
                    {% include '@SyliusAdmin/Product/Show/_variantContentPricing.html.twig' %}
                </div>
            </div>
        </div>
    </td>
</tr>
", "@SyliusAdmin/Product/Show/_variantContent.html.twig", "/home/gloens/workspace/php/veille/Sylius/project/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Product/Show/_variantContent.html.twig");
    }
}
