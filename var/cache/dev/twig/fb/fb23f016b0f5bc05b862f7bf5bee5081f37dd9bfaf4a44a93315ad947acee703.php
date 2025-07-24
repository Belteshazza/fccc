<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* pages/letter.html.twig */
class __TwigTemplate_501cb9ca787fbf1b1a106b87b5d009298d624033b796e74abdef56424c5fc161 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "access_base_pdf.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/letter.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/letter.html.twig"));

        $this->parent = $this->loadTemplate("access_base_pdf.html.twig", "pages/letter.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        yield "
    ";
        // line 5
        yield from         $this->loadTemplate("common/nav.html.twig", "pages/letter.html.twig", 5)->unwrap()->yield($context);
        // line 6
        yield "
    <h2 class=\"page-header pt-4\">MDA letter</h2>
    <hr>


    <button class=\"btn btn-primary btn-xs mr-2\" onclick=\"printElem('letter');\"><i class=\"fa fa-print\"></i> Print</button>


    <div class=\"padding_50 font-lg\" id=\"letter\" style=\"background-color:#fff !Important; width:100% !Important;font-family: 'Times New Roman' !Important\">

        <img src=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/fcc_letterhead.png"), "html", null, true);
        yield "\" style=\"max-width: 100%\" class=\"mb-5\">

        <p class=\"float-right font-weight-900\" style=\"margin-top: -3px\">";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 18, $this->source); })()), "html", null, true);
        yield "</p>



    <b>";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trainings"]) || array_key_exists("trainings", $context) ? $context["trainings"] : (function () { throw new RuntimeError('Variable "trainings" does not exist.', 22, $this->source); })()), "trainingCode", [], "any", false, false, false, 22), "html", null, true);
        yield "</b>

        <div class=\"clearfix mb-4\"></div>

        <p class=\"m-0\">";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["mda"]) || array_key_exists("mda", $context) ? $context["mda"] : (function () { throw new RuntimeError('Variable "mda" does not exist.', 26, $this->source); })()), "topOfficialDesignation", [], "any", false, false, false, 26), "html", null, true);
        yield ",<br>
            ";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["mda"]) || array_key_exists("mda", $context) ? $context["mda"] : (function () { throw new RuntimeError('Variable "mda" does not exist.', 27, $this->source); })()), "name", [], "any", false, false, false, 27), "html", null, true);
        yield ".</p>
        <div class=\"row\">
            <div class=\"col-8 m-0\">";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["mda"]) || array_key_exists("mda", $context) ? $context["mda"] : (function () { throw new RuntimeError('Variable "mda" does not exist.', 29, $this->source); })()), "address", [], "any", false, false, false, 29), "html", null, true);
        yield "</div>
        </div>



        <div class=\"clearfix mb-5\"></div>

        ";
        // line 37
        yield "            ";
        yield (isset($context["train_letter_continue"]) || array_key_exists("train_letter_continue", $context) ? $context["train_letter_continue"] : (function () { throw new RuntimeError('Variable "train_letter_continue" does not exist.', 37, $this->source); })());
        yield "
        ";
        // line 39
        yield "

    </div>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "pages/letter.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  129 => 39,  124 => 37,  114 => 29,  109 => 27,  105 => 26,  98 => 22,  91 => 18,  86 => 16,  74 => 6,  72 => 5,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'access_base_pdf.html.twig' %}

{% block content %}

    {% include 'common/nav.html.twig' %}

    <h2 class=\"page-header pt-4\">MDA letter</h2>
    <hr>


    <button class=\"btn btn-primary btn-xs mr-2\" onclick=\"printElem('letter');\"><i class=\"fa fa-print\"></i> Print</button>


    <div class=\"padding_50 font-lg\" id=\"letter\" style=\"background-color:#fff !Important; width:100% !Important;font-family: 'Times New Roman' !Important\">

        <img src=\"{{ asset('assets/images/fcc_letterhead.png') }}\" style=\"max-width: 100%\" class=\"mb-5\">

        <p class=\"float-right font-weight-900\" style=\"margin-top: -3px\">{{ date }}</p>



    <b>{{ trainings.trainingCode }}</b>

        <div class=\"clearfix mb-4\"></div>

        <p class=\"m-0\">{{ mda.topOfficialDesignation }},<br>
            {{ mda.name }}.</p>
        <div class=\"row\">
            <div class=\"col-8 m-0\">{{ mda.address }}</div>
        </div>



        <div class=\"clearfix mb-5\"></div>

        {% autoescape false %}
            {{ train_letter_continue }}
        {% endautoescape %}


    </div>



{% endblock %}", "pages/letter.html.twig", "C:\\laragon\\www\\training\\templates\\pages\\letter.html.twig");
    }
}
