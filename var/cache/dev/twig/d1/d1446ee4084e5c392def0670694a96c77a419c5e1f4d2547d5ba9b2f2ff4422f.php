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

/* @SyliusPayPalPlugin/javascripts.html.twig */
class __TwigTemplate_67f1fc5f2bf3993dab4c70e2c4b91b78d4ef30d3626c817173471d6a248a4246 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusPayPalPlugin/javascripts.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusPayPalPlugin/javascripts.html.twig"));

        // line 1
        echo "<script type=\"application/javascript\">
    const confirmationText = document.querySelector('#confirmation-modal > div.content');;
    const defaultText = confirmationText.innerHTML;

    document.querySelector('#confirmation-button').addEventListener('click', evt => {
        window.location.href = evt.currentTarget.getAttribute('href');
    })

    document.querySelectorAll('[data-confirm-pay-pal-consent]').forEach((item) => {
        item.addEventListener('click', (evt) => {
            evt.preventDefault();

            const actionButton = evt.currentTarget;
            document.querySelector('#confirmation-button').setAttribute('href', actionButton.getAttribute('href'));

            confirmationText.innerHTML = '";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.pay_pal.share_data_consent_confirmation"), "html", null, true);
        echo "';
            \$('#confirmation-modal')
                .modal({
                    onHidden: function() {
                        confirmationText.innerHTML = defaultText;
                    }
                })
                .modal('show')
            ;
        });
    });
</script>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusPayPalPlugin/javascripts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 16,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script type=\"application/javascript\">
    const confirmationText = document.querySelector('#confirmation-modal > div.content');;
    const defaultText = confirmationText.innerHTML;

    document.querySelector('#confirmation-button').addEventListener('click', evt => {
        window.location.href = evt.currentTarget.getAttribute('href');
    })

    document.querySelectorAll('[data-confirm-pay-pal-consent]').forEach((item) => {
        item.addEventListener('click', (evt) => {
            evt.preventDefault();

            const actionButton = evt.currentTarget;
            document.querySelector('#confirmation-button').setAttribute('href', actionButton.getAttribute('href'));

            confirmationText.innerHTML = '{{ 'sylius.pay_pal.share_data_consent_confirmation'|trans }}';
            \$('#confirmation-modal')
                .modal({
                    onHidden: function() {
                        confirmationText.innerHTML = defaultText;
                    }
                })
                .modal('show')
            ;
        });
    });
</script>
", "@SyliusPayPalPlugin/javascripts.html.twig", "/home/gloens/workspace/php/veille/Sylius/project/vendor/sylius/paypal-plugin/src/Resources/views/javascripts.html.twig");
    }
}
