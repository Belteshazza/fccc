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

/* admin/admin_register_participant.html.twig */
class __TwigTemplate_b8edcb15d257445db8a6087c3c59b2ec78f1ec3ebf64a0950e1ea7b293d2ef4c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin_register_participant.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin_register_participant.html.twig"));

        $this->parent = $this->loadTemplate("admin_base.html.twig", "admin/admin_register_participant.html.twig", 1);
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

  <div class=\"row\">

    <div class=\"col-md-12\">

        <div class=\"card\">

            <div class=\"card-header bg-dark font-white\">
                <h4>Register participants for training</h4>
            </div>

            <div class=\"card-body\">

                <form method=\"POST\">

                    <div class=\"row\">
                    <div class=\"form-group col-md-4\">
                        <label>MDA</label><br>
                        <select name=\"mda\" class=\"form-control bg-gray\">
                            ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["mdas"]) || array_key_exists("mdas", $context) ? $context["mdas"] : (function () { throw new RuntimeError('Variable "mdas" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["mda"]) {
            // line 25
            yield "                                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["mda"], "id", [], "any", false, false, false, 25), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["mda"], "name", [], "any", false, false, false, 25), "html", null, true);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mda'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        yield "                        </select>
                    </div>

                    <div class=\"form-group col-md-4\">
                        <label>Training</label><br>
                        <select name=\"training\" class=\"form-control\">
                            ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["trainings"]) || array_key_exists("trainings", $context) ? $context["trainings"] : (function () { throw new RuntimeError('Variable "trainings" does not exist.', 33, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["training"]) {
            // line 34
            yield "                                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["training"], "id", [], "any", false, false, false, 34), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["training"], "title", [], "any", false, false, false, 34), "html", null, true);
            yield "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['training'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        yield "                        </select>
                    </div>
                    </div>

                    <div class=\"form-group\">
                        <button class=\"btn btn-primary\">Submit</button>
                    </div>

                </form>

            </div>
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
        return "admin/admin_register_participant.html.twig";
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
        return array (  129 => 36,  118 => 34,  114 => 33,  106 => 27,  95 => 25,  91 => 24,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin_base.html.twig' %}

{% block body %}


  <div class=\"row\">

    <div class=\"col-md-12\">

        <div class=\"card\">

            <div class=\"card-header bg-dark font-white\">
                <h4>Register participants for training</h4>
            </div>

            <div class=\"card-body\">

                <form method=\"POST\">

                    <div class=\"row\">
                    <div class=\"form-group col-md-4\">
                        <label>MDA</label><br>
                        <select name=\"mda\" class=\"form-control bg-gray\">
                            {% for mda in mdas %}
                                <option value=\"{{ mda.id }}\">{{ mda.name }}</option>
                            {% endfor %}
                        </select>
                    </div>

                    <div class=\"form-group col-md-4\">
                        <label>Training</label><br>
                        <select name=\"training\" class=\"form-control\">
                            {% for training in trainings %}
                                <option value=\"{{ training.id }}\">{{ training.title }}</option>
                                {% endfor %}
                        </select>
                    </div>
                    </div>

                    <div class=\"form-group\">
                        <button class=\"btn btn-primary\">Submit</button>
                    </div>

                </form>

            </div>
        </div>

    </div>




  </div>


{% endblock %}", "admin/admin_register_participant.html.twig", "C:\\laragon\\www\\training\\templates\\admin\\admin_register_participant.html.twig");
    }
}
