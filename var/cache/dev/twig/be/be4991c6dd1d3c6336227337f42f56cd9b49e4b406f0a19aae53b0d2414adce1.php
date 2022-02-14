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

/* @SyliusAdmin/Product/Show/_simpleProduct.html.twig */
class __TwigTemplate_b14bc100d02aaa47946b669d332e3640502839140e79c86d07515cba0786e31c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Product/Show/_simpleProduct.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Product/Show/_simpleProduct.html.twig"));

        // line 1
        $this->loadTemplate("@SyliusAdmin/Product/Show/_header.html.twig", "@SyliusAdmin/Product/Show/_simpleProduct.html.twig", 1)->display($context);
        // line 2
        echo "
<div class=\"ui grid\">
    <div class=\"sixteen wide mobile ten wide computer column\">
        ";
        // line 5
        $this->loadTemplate("@SyliusAdmin/Product/Show/_details.html.twig", "@SyliusAdmin/Product/Show/_simpleProduct.html.twig", 5)->display($context);
        // line 6
        echo "        <div class=\"ui hidden divider\"></div>
        ";
        // line 7
        $this->loadTemplate("@SyliusAdmin/Product/Show/_taxonomy.html.twig", "@SyliusAdmin/Product/Show/_simpleProduct.html.twig", 7)->display($context);
        // line 8
        echo "    </div>
    <div class=\"sixteen wide mobile six wide computer column\">
        ";
        // line 10
        $this->loadTemplate("@SyliusAdmin/Product/Show/_pricing.html.twig", "@SyliusAdmin/Product/Show/_simpleProduct.html.twig", 10)->display($context);
        // line 11
        echo "        <div class=\"ui hidden divider\"></div>
        ";
        // line 12
        $this->loadTemplate("@SyliusAdmin/Product/Show/_shipping.html.twig", "@SyliusAdmin/Product/Show/_simpleProduct.html.twig", 12)->display($context);
        // line 13
        echo "    </div>
</div>
<div class=\"ui hidden divider\"></div>
";
        // line 16
        $this->loadTemplate("@SyliusAdmin/Product/Show/_media.html.twig", "@SyliusAdmin/Product/Show/_simpleProduct.html.twig", 16)->display($context);
        // line 17
        echo "<div class=\"ui hidden divider\"></div>
";
        // line 18
        $this->loadTemplate("@SyliusAdmin/Product/Show/_moreDetails.html.twig", "@SyliusAdmin/Product/Show/_simpleProduct.html.twig", 18)->display($context);
        // line 19
        echo "<div class=\"ui hidden divider\"></div>
<div class=\"ui grid\">
    <div class=\"sixteen wide mobile ten wide computer column\">
        ";
        // line 22
        $this->loadTemplate("@SyliusAdmin/Product/Show/_attributes.html.twig", "@SyliusAdmin/Product/Show/_simpleProduct.html.twig", 22)->display($context);
        // line 23
        echo "    </div>
    <div class=\"sixteen wide mobile six wide computer column\">
        ";
        // line 25
        $this->loadTemplate("@SyliusAdmin/Product/Show/_associations.html.twig", "@SyliusAdmin/Product/Show/_simpleProduct.html.twig", 25)->display($context);
        // line 26
        echo "    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Product/Show/_simpleProduct.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 26,  91 => 25,  87 => 23,  85 => 22,  80 => 19,  78 => 18,  75 => 17,  73 => 16,  68 => 13,  66 => 12,  63 => 11,  61 => 10,  57 => 8,  55 => 7,  52 => 6,  50 => 5,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include '@SyliusAdmin/Product/Show/_header.html.twig' %}

<div class=\"ui grid\">
    <div class=\"sixteen wide mobile ten wide computer column\">
        {% include '@SyliusAdmin/Product/Show/_details.html.twig' %}
        <div class=\"ui hidden divider\"></div>
        {% include '@SyliusAdmin/Product/Show/_taxonomy.html.twig' %}
    </div>
    <div class=\"sixteen wide mobile six wide computer column\">
        {% include '@SyliusAdmin/Product/Show/_pricing.html.twig' %}
        <div class=\"ui hidden divider\"></div>
        {% include '@SyliusAdmin/Product/Show/_shipping.html.twig' %}
    </div>
</div>
<div class=\"ui hidden divider\"></div>
{% include '@SyliusAdmin/Product/Show/_media.html.twig' %}
<div class=\"ui hidden divider\"></div>
{% include '@SyliusAdmin/Product/Show/_moreDetails.html.twig' %}
<div class=\"ui hidden divider\"></div>
<div class=\"ui grid\">
    <div class=\"sixteen wide mobile ten wide computer column\">
        {% include '@SyliusAdmin/Product/Show/_attributes.html.twig' %}
    </div>
    <div class=\"sixteen wide mobile six wide computer column\">
        {% include '@SyliusAdmin/Product/Show/_associations.html.twig' %}
    </div>
</div>
", "@SyliusAdmin/Product/Show/_simpleProduct.html.twig", "/home/gloens/workspace/php/veille/Sylius/project/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Product/Show/_simpleProduct.html.twig");
    }
}
