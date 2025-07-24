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

/* user/trainings.html.twig */
class __TwigTemplate_a744e9d7f8fac7aba63e7087f6cf79a586262d5af646a1631eb0e8f5863ec774 extends Template
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
        return "user_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/trainings.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/trainings.html.twig"));

        $this->parent = $this->loadTemplate("user_base.html.twig", "user/trainings.html.twig", 1);
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
    <div class=\"card\">

        <div class=\"card-header bg-dark font-white\">
            <ul class=\"nav nav-pills nav-fill\" id=\"pills-tab\" role=\"tablist\">
                <li class=\"nav-item\">
                    <a class=\"nav-link active\" id=\"pills-home-tab\" data-toggle=\"pill\" href=\"#pills-home\" role=\"tab\" aria-controls=\"pills-home\" aria-selected=\"true\">Trainings applied for (";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["trainings_applied"]) || array_key_exists("trainings_applied", $context) ? $context["trainings_applied"] : (function () { throw new RuntimeError('Variable "trainings_applied" does not exist.', 10, $this->source); })())), "html", null, true);
        yield ")</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" id=\"pills-profile-tab\" data-toggle=\"pill\" href=\"#pills-profile\" role=\"tab\" aria-controls=\"pills-profile\" aria-selected=\"false\">Available trainings (";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["trainings"]) || array_key_exists("trainings", $context) ? $context["trainings"] : (function () { throw new RuntimeError('Variable "trainings" does not exist.', 13, $this->source); })())), "html", null, true);
        yield ")</a>
                </li>

            </ul>
        </div>

        <div class=\"card-body\">
            <div class=\"tab-content\" id=\"pills-tabContent\">
                <div class=\"tab-pane fade show active\" id=\"pills-home\" role=\"tabpanel\" aria-labelledby=\"pills-home-tab\">
                    ";
        // line 22
        yield from         $this->loadTemplate("common/user/my_trainings.html.twig", "user/trainings.html.twig", 22)->unwrap()->yield($context);
        // line 23
        yield "                </div>
                <div class=\"tab-pane fade\" id=\"pills-profile\" role=\"tabpanel\" aria-labelledby=\"pills-profile-tab\">
                    ";
        // line 25
        yield from         $this->loadTemplate("common/user/all_trainings.html.twig", "user/trainings.html.twig", 25)->unwrap()->yield($context);
        // line 26
        yield "                </div>

            </div>
        </div>


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
        return "user/trainings.html.twig";
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
        return array (  103 => 26,  101 => 25,  97 => 23,  95 => 22,  83 => 13,  77 => 10,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'user_base.html.twig' %}

{% block body %}

    <div class=\"card\">

        <div class=\"card-header bg-dark font-white\">
            <ul class=\"nav nav-pills nav-fill\" id=\"pills-tab\" role=\"tablist\">
                <li class=\"nav-item\">
                    <a class=\"nav-link active\" id=\"pills-home-tab\" data-toggle=\"pill\" href=\"#pills-home\" role=\"tab\" aria-controls=\"pills-home\" aria-selected=\"true\">Trainings applied for ({{ trainings_applied|length }})</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" id=\"pills-profile-tab\" data-toggle=\"pill\" href=\"#pills-profile\" role=\"tab\" aria-controls=\"pills-profile\" aria-selected=\"false\">Available trainings ({{ trainings|length }})</a>
                </li>

            </ul>
        </div>

        <div class=\"card-body\">
            <div class=\"tab-content\" id=\"pills-tabContent\">
                <div class=\"tab-pane fade show active\" id=\"pills-home\" role=\"tabpanel\" aria-labelledby=\"pills-home-tab\">
                    {% include 'common/user/my_trainings.html.twig' %}
                </div>
                <div class=\"tab-pane fade\" id=\"pills-profile\" role=\"tabpanel\" aria-labelledby=\"pills-profile-tab\">
                    {% include 'common/user/all_trainings.html.twig' %}
                </div>

            </div>
        </div>


    </div>

{% endblock %}", "user/trainings.html.twig", "C:\\laragon\\www\\training\\templates\\user\\trainings.html.twig");
    }
}
