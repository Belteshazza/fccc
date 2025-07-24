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

/* admin/view_training.html.twig */
class __TwigTemplate_ba62cc5b90cd426517a32ea63cad4c90a0d05b0bb2989d21d076257aad011359 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/view_training.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/view_training.html.twig"));

        $this->parent = $this->loadTemplate("admin_base.html.twig", "admin/view_training.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        yield "
    <div class=\"float-right mb-4\">
    <a href=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_edit_training", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["training"]) || array_key_exists("training", $context) ? $context["training"] : (function () { throw new RuntimeError('Variable "training" does not exist.', 6, $this->source); })()), "id", [], "any", false, false, false, 6)]), "html", null, true);
        yield "\" class=\"btn btn-xs btn-warning mt-1\"><i class=\"fa fa-pencil\"></i> Edit</a>
    <a href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_delete_training", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["training"]) || array_key_exists("training", $context) ? $context["training"] : (function () { throw new RuntimeError('Variable "training" does not exist.', 7, $this->source); })()), "id", [], "any", false, false, false, 7)]), "html", null, true);
        yield "\" class=\"btn btn-xs btn-danger mt-1\"><i class=\"fa fa-pencil\"></i> Delete</a>
    </div>

    <div class=\"clearfix\"></div>
    <div class=\"card\">
        <div class=\"card-header bg-dark text-white font-white p-3 font-sm-4\">
            ";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["training"]) || array_key_exists("training", $context) ? $context["training"] : (function () { throw new RuntimeError('Variable "training" does not exist.', 13, $this->source); })()), "title", [], "any", false, false, false, 13), "html", null, true);
        yield "
        </div>
    <div class=\"card-body \">
        <ul class=\"nav nav-pills nav-fill\" id=\"pills-tab\" role=\"tablist\">
            <li class=\"nav-item\">
                <a class=\"nav-link active\" id=\"pills-home-tab\" data-toggle=\"pill\" href=\"#pills-home\" role=\"tab\" aria-controls=\"pills-home\" aria-selected=\"true\">Details</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" id=\"pills-profile-tab\" data-toggle=\"pill\" href=\"#pills-profile\" role=\"tab\" aria-controls=\"pills-profile\" aria-selected=\"false\">Sessions</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" id=\"pills-contact-tab\" data-toggle=\"pill\" href=\"#pills-contact\" role=\"tab\" aria-controls=\"pills-contact\" aria-selected=\"false\">Financials</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" id=\"pills-participants-tab\" data-toggle=\"pill\" href=\"#pills-participants\" role=\"tab\" aria-controls=\"pills-participants\" aria-selected=\"false\">Participants/MDAs</a>
            </li>

        </ul>
    </div>


    </div>



    <ul class=\"nav nav-pills mb-3\" id=\"pills-tab\" role=\"tablist\">

    </ul>
    <div class=\"tab-content\" id=\"pills-tabContent\">
        <div class=\"tab-pane fade show active\" id=\"pills-home\" role=\"tabpanel\" aria-labelledby=\"pills-home-tab\">
            ";
        // line 43
        yield from         $this->loadTemplate("common/admin/training_details.html.twig", "admin/view_training.html.twig", 43)->unwrap()->yield($context);
        // line 44
        yield "        </div>
        <div class=\"tab-pane fade\" id=\"pills-profile\" role=\"tabpanel\" aria-labelledby=\"pills-profile-tab\">
            ";
        // line 46
        yield from         $this->loadTemplate("common/admin/training_session.html.twig", "admin/view_training.html.twig", 46)->unwrap()->yield($context);
        // line 47
        yield "        </div>
        <div class=\"tab-pane fade\" id=\"pills-contact\" role=\"tabpanel\" aria-labelledby=\"pills-contact-tab\">
            ";
        // line 49
        yield from         $this->loadTemplate("common/admin/training_financials.html.twig", "admin/view_training.html.twig", 49)->unwrap()->yield($context);
        // line 50
        yield "        </div>
        <div class=\"tab-pane fade\" id=\"pills-participants\" role=\"tabpanel\" aria-labelledby=\"pills-contact-tab\">
            ";
        // line 52
        yield from         $this->loadTemplate("common/admin/training_participant.html.twig", "admin/view_training.html.twig", 52)->unwrap()->yield($context);
        // line 53
        yield "        </div>
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
        return "admin/view_training.html.twig";
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
        return array (  139 => 53,  137 => 52,  133 => 50,  131 => 49,  127 => 47,  125 => 46,  121 => 44,  119 => 43,  86 => 13,  77 => 7,  73 => 6,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin_base.html.twig' %}

{% block body %}

    <div class=\"float-right mb-4\">
    <a href=\"{{ path('admin_edit_training', {'id': training.id}) }}\" class=\"btn btn-xs btn-warning mt-1\"><i class=\"fa fa-pencil\"></i> Edit</a>
    <a href=\"{{ path('admin_delete_training', {'id': training.id}) }}\" class=\"btn btn-xs btn-danger mt-1\"><i class=\"fa fa-pencil\"></i> Delete</a>
    </div>

    <div class=\"clearfix\"></div>
    <div class=\"card\">
        <div class=\"card-header bg-dark text-white font-white p-3 font-sm-4\">
            {{ training.title }}
        </div>
    <div class=\"card-body \">
        <ul class=\"nav nav-pills nav-fill\" id=\"pills-tab\" role=\"tablist\">
            <li class=\"nav-item\">
                <a class=\"nav-link active\" id=\"pills-home-tab\" data-toggle=\"pill\" href=\"#pills-home\" role=\"tab\" aria-controls=\"pills-home\" aria-selected=\"true\">Details</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" id=\"pills-profile-tab\" data-toggle=\"pill\" href=\"#pills-profile\" role=\"tab\" aria-controls=\"pills-profile\" aria-selected=\"false\">Sessions</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" id=\"pills-contact-tab\" data-toggle=\"pill\" href=\"#pills-contact\" role=\"tab\" aria-controls=\"pills-contact\" aria-selected=\"false\">Financials</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" id=\"pills-participants-tab\" data-toggle=\"pill\" href=\"#pills-participants\" role=\"tab\" aria-controls=\"pills-participants\" aria-selected=\"false\">Participants/MDAs</a>
            </li>

        </ul>
    </div>


    </div>



    <ul class=\"nav nav-pills mb-3\" id=\"pills-tab\" role=\"tablist\">

    </ul>
    <div class=\"tab-content\" id=\"pills-tabContent\">
        <div class=\"tab-pane fade show active\" id=\"pills-home\" role=\"tabpanel\" aria-labelledby=\"pills-home-tab\">
            {% include 'common/admin/training_details.html.twig' %}
        </div>
        <div class=\"tab-pane fade\" id=\"pills-profile\" role=\"tabpanel\" aria-labelledby=\"pills-profile-tab\">
            {% include 'common/admin/training_session.html.twig' %}
        </div>
        <div class=\"tab-pane fade\" id=\"pills-contact\" role=\"tabpanel\" aria-labelledby=\"pills-contact-tab\">
            {% include 'common/admin/training_financials.html.twig' %}
        </div>
        <div class=\"tab-pane fade\" id=\"pills-participants\" role=\"tabpanel\" aria-labelledby=\"pills-contact-tab\">
            {% include 'common/admin/training_participant.html.twig' %}
        </div>
    </div>






{% endblock %}", "admin/view_training.html.twig", "C:\\laragon\\www\\training\\templates\\admin\\view_training.html.twig");
    }
}
