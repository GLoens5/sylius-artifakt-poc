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

/* @SyliusUi/Security/_login.html.twig */
class __TwigTemplate_9ac4640e4f473e98aac0d64b324b65848c9ec6d5e46f1db2148d10559122e17c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusUi/Security/_login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusUi/Security/_login.html.twig"));

        // line 1
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), [0 => "@SyliusUi/Form/theme.html.twig"], true);
        // line 2
        echo "
";
        // line 3
        $macros["messages"] = $this->macros["messages"] = $this->loadTemplate("@SyliusUi/Macro/messages.html.twig", "@SyliusUi/Security/_login.html.twig", 3)->unwrap();
        // line 4
        echo "
<div class=\"ui middle aligned center aligned grid\">
    <div class=\"column\">
        ";
        // line 7
        echo $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render("sylius.admin.login.before_form", ["form" => (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })())]);
        echo "

        ";
        // line 9
        if (twig_get_attribute($this->env, $this->source, ($context["paths"] ?? null), "logo", [], "any", true, true, false, 9)) {
            // line 10
            echo "            <div style=\"max-width: 270px; margin: 0 auto; margin-bottom: 40px;\">
                <img src=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["paths"]) || array_key_exists("paths", $context) ? $context["paths"] : (function () { throw new RuntimeError('Variable "paths" does not exist.', 11, $this->source); })()), "logo", [], "any", false, false, false, 11)), "html", null, true);
            echo "\" class=\"ui fluid image\" id=\"logo\">
            </div>
        ";
        }
        // line 14
        echo "
        ";
        // line 15
        if ((isset($context["last_error"]) || array_key_exists("last_error", $context) ? $context["last_error"] : (function () { throw new RuntimeError('Variable "last_error" does not exist.', 15, $this->source); })())) {
            // line 16
            echo "            <div class=\"ui left aligned basic segment\">
                ";
            // line 17
            echo twig_call_macro($macros["messages"], "macro_error", [twig_get_attribute($this->env, $this->source, (isset($context["last_error"]) || array_key_exists("last_error", $context) ? $context["last_error"] : (function () { throw new RuntimeError('Variable "last_error" does not exist.', 17, $this->source); })()), "messageKey", [], "any", false, false, false, 17)], 17, $context, $this->getSourceContext());
            echo "
            </div>
        ";
        }
        // line 20
        echo "
        ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), 'form_start', ["action" => ((array_key_exists("action", $context)) ? (_twig_default_filter((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 21, $this->source); })()), "/")) : ("/")), "attr" => ["class" => "ui large loadable form", "novalidate" => "novalidate"]]);
        echo "
            <div class=\"ui left aligned very padded segment\">
                ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "_username", [], "any", false, false, false, 23), 'row', ["value" => ((array_key_exists("last_username", $context)) ? (_twig_default_filter((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 23, $this->source); })()), "")) : (""))]);
        echo "
                ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "_password", [], "any", false, false, false, 24), 'row');
        echo "
                ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "_remember_me", [], "any", false, false, false, 25), 'row');
        echo "
                <input type=\"hidden\" name=\"_csrf_admin_security_token\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("admin_authenticate"), "html", null, true);
        echo "\">
                <button type=\"submit\" class=\"ui fluid large primary submit button\">Login</button>
            </div>

            ";
        // line 30
        echo $this->extensions['Sylius\Bundle\UiBundle\Twig\TemplateEventExtension']->render("sylius.admin.login.form", ["form" => (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })())]);
        echo "

        ";
        // line 32
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), 'form_end', ["render_rest" => false]);
        echo "
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusUi/Security/_login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 32,  112 => 30,  105 => 26,  101 => 25,  97 => 24,  93 => 23,  88 => 21,  85 => 20,  79 => 17,  76 => 16,  74 => 15,  71 => 14,  65 => 11,  62 => 10,  60 => 9,  55 => 7,  50 => 4,  48 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% form_theme form '@SyliusUi/Form/theme.html.twig' %}

{% import '@SyliusUi/Macro/messages.html.twig' as messages %}

<div class=\"ui middle aligned center aligned grid\">
    <div class=\"column\">
        {{ sylius_template_event('sylius.admin.login.before_form', {'form': form}) }}

        {% if paths.logo is defined %}
            <div style=\"max-width: 270px; margin: 0 auto; margin-bottom: 40px;\">
                <img src=\"{{ asset(paths.logo) }}\" class=\"ui fluid image\" id=\"logo\">
            </div>
        {% endif %}

        {% if last_error %}
            <div class=\"ui left aligned basic segment\">
                {{ messages.error(last_error.messageKey) }}
            </div>
        {% endif %}

        {{ form_start(form, {'action': action|default('/'), 'attr': {'class': 'ui large loadable form', 'novalidate': 'novalidate'}}) }}
            <div class=\"ui left aligned very padded segment\">
                {{ form_row(form._username, {'value': last_username|default('')}) }}
                {{ form_row(form._password) }}
                {{ form_row(form._remember_me) }}
                <input type=\"hidden\" name=\"_csrf_admin_security_token\" value=\"{{ csrf_token('admin_authenticate') }}\">
                <button type=\"submit\" class=\"ui fluid large primary submit button\">Login</button>
            </div>

            {{ sylius_template_event('sylius.admin.login.form', {'form': form}) }}

        {{ form_end(form, {'render_rest': false}) }}
    </div>
</div>
", "@SyliusUi/Security/_login.html.twig", "/home/gloens/workspace/php/veille/Sylius/project/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/views/Security/_login.html.twig");
    }
}
