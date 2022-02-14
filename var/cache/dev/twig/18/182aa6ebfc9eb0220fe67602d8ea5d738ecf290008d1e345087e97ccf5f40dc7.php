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

/* @SyliusAdmin/Channel/_form.html.twig */
class __TwigTemplate_8ff9b1bcc8120684019ac508513a27aa7f252e0dab0730f4c595e987d3cd90ac extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Channel/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Channel/_form.html.twig"));

        // line 1
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'errors');
        echo "
<div class=\"ui two column stackable grid\">
    <div class=\"column\">
        <h4 class=\"ui top attached large header\">";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.general"), "html", null, true);
        echo "</h4>
        <div class=\"ui attached segment\">
            ";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), 'errors');
        echo "
            <div class=\"fields\">
                <div class=\"six wide field\">
                    ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "code", [], "any", false, false, false, 9), 'row');
        echo "
                </div>
                <div class=\"seven wide field\">
                    ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "name", [], "any", false, false, false, 12), 'row');
        echo "
                </div>
                <div class=\"three wide field\">
                    ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "color", [], "any", false, false, false, 15), 'row');
        echo "
                </div>
            </div>
            <div class=\"ui hidden divider\"></div>
            ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "enabled", [], "any", false, false, false, 19), 'row');
        echo "
        </div>
        <div class=\"ui attached segment\">
            <div class=\"field\">
                ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "hostname", [], "any", false, false, false, 23), 'label');
        echo "
                <div class=\"ui labeled input\">
                    <div class=\"ui label\">https://</div>
                    ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "hostname", [], "any", false, false, false, 26), 'widget');
        echo "
                </div>
                ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "hostname", [], "any", false, false, false, 28), 'errors');
        echo "
            </div>
            ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "contactEmail", [], "any", false, false, false, 30), 'row');
        echo "
            ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "contactPhoneNumber", [], "any", false, false, false, 31), 'row');
        echo "
            ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "description", [], "any", false, false, false, 32), 'row', ["attr" => ["rows" => "3"]]);
        echo "
        </div>
        <div class=\"ui attached segment\">
            ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "countries", [], "any", false, false, false, 35), 'row');
        echo "
        </div>
        <div class=\"ui hidden divider\"></div>
        <h4 class=\"ui top attached large header\">";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.money"), "html", null, true);
        echo "</h4>
        <div class=\"ui attached segment\">
            <div class=\"two fields\">
                ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "baseCurrency", [], "any", false, false, false, 41), 'row');
        echo "
                ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "currencies", [], "any", false, false, false, 42), 'row');
        echo "
            </div>
        </div>
        <div class=\"ui attached segment\">
            ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "defaultTaxZone", [], "any", false, false, false, 46), 'row');
        echo "
            ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "taxCalculationStrategy", [], "any", false, false, false, 47), 'row');
        echo "
        </div>
    </div>
    <div class=\"column\">
        <h4 class=\"ui top attached large header\">";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "shopBillingData", [], "any", false, false, false, 51), 'label');
        echo "</h4>
        <div class=\"ui attached segment\">
            <div class=\"two fields\">
                ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "shopBillingData", [], "any", false, false, false, 54), "company", [], "any", false, false, false, 54), 'row');
        echo "
                ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "shopBillingData", [], "any", false, false, false, 55), "taxId", [], "any", false, false, false, 55), 'row');
        echo "
            </div>
            <div class=\"two fields\">
                ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "shopBillingData", [], "any", false, false, false, 58), "countryCode", [], "any", false, false, false, 58), 'row');
        echo "
                ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "shopBillingData", [], "any", false, false, false, 59), "street", [], "any", false, false, false, 59), 'row');
        echo "
            </div>
            <div class=\"two fields\">
                ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "shopBillingData", [], "any", false, false, false, 62), "city", [], "any", false, false, false, 62), 'row');
        echo "
                ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "shopBillingData", [], "any", false, false, false, 63), "postcode", [], "any", false, false, false, 63), 'row');
        echo "
            </div>
        </div>
        <div class=\"ui hidden divider\"></div>
        <h4 class=\"ui top attached large header\">";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.look_and_feel"), "html", null, true);
        echo "</h4>
        <div class=\"ui attached segment\">
            ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "themeName", [], "any", false, false, false, 69), 'row');
        echo "
        </div>
        <div class=\"ui attached segment\">
            ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "locales", [], "any", false, false, false, 72), 'row');
        echo "
            ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "defaultLocale", [], "any", false, false, false, 73), 'row');
        echo "
        </div>
        <div class=\"ui attached segment\">
            ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "menuTaxon", [], "any", false, false, false, 76), 'row');
        echo "
        </div>
        <div class=\"ui hidden divider\"></div>
        <div class=\"ui attached segment\">
            ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "skippingShippingStepAllowed", [], "any", false, false, false, 80), 'row');
        echo "
            ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "skippingPaymentStepAllowed", [], "any", false, false, false, 81), 'row');
        echo "
            ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "accountVerificationRequired", [], "any", false, false, false, 82), 'row');
        echo "
        </div>
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Channel/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 82,  219 => 81,  215 => 80,  208 => 76,  202 => 73,  198 => 72,  192 => 69,  187 => 67,  180 => 63,  176 => 62,  170 => 59,  166 => 58,  160 => 55,  156 => 54,  150 => 51,  143 => 47,  139 => 46,  132 => 42,  128 => 41,  122 => 38,  116 => 35,  110 => 32,  106 => 31,  102 => 30,  97 => 28,  92 => 26,  86 => 23,  79 => 19,  72 => 15,  66 => 12,  60 => 9,  54 => 6,  49 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_errors(form) }}
<div class=\"ui two column stackable grid\">
    <div class=\"column\">
        <h4 class=\"ui top attached large header\">{{ 'sylius.ui.general'|trans }}</h4>
        <div class=\"ui attached segment\">
            {{ form_errors(form) }}
            <div class=\"fields\">
                <div class=\"six wide field\">
                    {{ form_row(form.code) }}
                </div>
                <div class=\"seven wide field\">
                    {{ form_row(form.name) }}
                </div>
                <div class=\"three wide field\">
                    {{ form_row(form.color) }}
                </div>
            </div>
            <div class=\"ui hidden divider\"></div>
            {{ form_row(form.enabled) }}
        </div>
        <div class=\"ui attached segment\">
            <div class=\"field\">
                {{ form_label(form.hostname) }}
                <div class=\"ui labeled input\">
                    <div class=\"ui label\">https://</div>
                    {{ form_widget(form.hostname) }}
                </div>
                {{ form_errors(form.hostname) }}
            </div>
            {{ form_row(form.contactEmail) }}
            {{ form_row(form.contactPhoneNumber) }}
            {{ form_row(form.description, {'attr': {'rows' : '3'}}) }}
        </div>
        <div class=\"ui attached segment\">
            {{ form_row(form.countries) }}
        </div>
        <div class=\"ui hidden divider\"></div>
        <h4 class=\"ui top attached large header\">{{ 'sylius.ui.money'|trans }}</h4>
        <div class=\"ui attached segment\">
            <div class=\"two fields\">
                {{ form_row(form.baseCurrency) }}
                {{ form_row(form.currencies) }}
            </div>
        </div>
        <div class=\"ui attached segment\">
            {{ form_row(form.defaultTaxZone) }}
            {{ form_row(form.taxCalculationStrategy) }}
        </div>
    </div>
    <div class=\"column\">
        <h4 class=\"ui top attached large header\">{{ form_label(form.shopBillingData) }}</h4>
        <div class=\"ui attached segment\">
            <div class=\"two fields\">
                {{ form_row(form.shopBillingData.company) }}
                {{ form_row(form.shopBillingData.taxId) }}
            </div>
            <div class=\"two fields\">
                {{ form_row(form.shopBillingData.countryCode) }}
                {{ form_row(form.shopBillingData.street) }}
            </div>
            <div class=\"two fields\">
                {{ form_row(form.shopBillingData.city) }}
                {{ form_row(form.shopBillingData.postcode) }}
            </div>
        </div>
        <div class=\"ui hidden divider\"></div>
        <h4 class=\"ui top attached large header\">{{ 'sylius.ui.look_and_feel'|trans }}</h4>
        <div class=\"ui attached segment\">
            {{ form_row(form.themeName) }}
        </div>
        <div class=\"ui attached segment\">
            {{ form_row(form.locales) }}
            {{ form_row(form.defaultLocale) }}
        </div>
        <div class=\"ui attached segment\">
            {{ form_row(form.menuTaxon) }}
        </div>
        <div class=\"ui hidden divider\"></div>
        <div class=\"ui attached segment\">
            {{ form_row(form.skippingShippingStepAllowed) }}
            {{ form_row(form.skippingPaymentStepAllowed) }}
            {{ form_row(form.accountVerificationRequired) }}
        </div>
    </div>
</div>
", "@SyliusAdmin/Channel/_form.html.twig", "/home/gloens/workspace/php/veille/Sylius/project/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Channel/_form.html.twig");
    }
}
