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

/* @SyliusPayPalPlugin/Grid/enablePayPal.html.twig */
class __TwigTemplate_9d8bfda378b7e030ae02ec4703c4710f8e3de24e83b96d65f26e703dc3a1e659 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusPayPalPlugin/Grid/enablePayPal.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusPayPalPlugin/Grid/enablePayPal.html.twig"));

        // line 1
        $macros["buttons"] = $this->macros["buttons"] = $this->loadTemplate("@SyliusUi/Macro/buttons.html.twig", "@SyliusPayPalPlugin/Grid/enablePayPal.html.twig", 1)->unwrap();
        // line 2
        echo "
";
        // line 3
        $context["path"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_payment_method_create", ["factory" => "sylius.pay_pal"]);
        // line 4
        echo "
";
        // line 5
        if ( !$this->extensions['Sylius\PayPalPlugin\Twig\PayPalExtension']->isPayPalEnabled(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new RuntimeError('Variable "grid" does not exist.', 5, $this->source); })()), "data", [], "any", false, false, false, 5), "currentPageResults", [], "any", false, false, false, 5))) {
            // line 6
            echo "<a class=\"ui labeled buttons icon top floating button yellow\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new RuntimeError('Variable "path" does not exist.', 6, $this->source); })()), "html", null, true);
            echo "\" data-confirm-pay-pal-consent>
    <i class=\"paypal icon\"></i>
    ";
            // line 8
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.pay_pal.enable_paypal"), "html", null, true);
            echo "
</a>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusPayPalPlugin/Grid/enablePayPal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 8,  55 => 6,  53 => 5,  50 => 4,  48 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import '@SyliusUi/Macro/buttons.html.twig' as buttons %}

{% set path = path('sylius_admin_payment_method_create', {'factory': 'sylius.pay_pal'}) %}

{% if not sylius_is_pay_pal_enabled(grid.data.currentPageResults) %}
<a class=\"ui labeled buttons icon top floating button yellow\" href=\"{{ path }}\" data-confirm-pay-pal-consent>
    <i class=\"paypal icon\"></i>
    {{ 'sylius.pay_pal.enable_paypal'|trans }}
</a>
{% endif %}
", "@SyliusPayPalPlugin/Grid/enablePayPal.html.twig", "/home/gloens/workspace/php/veille/Sylius/project/vendor/sylius/paypal-plugin/src/Resources/views/Grid/enablePayPal.html.twig");
    }
}
