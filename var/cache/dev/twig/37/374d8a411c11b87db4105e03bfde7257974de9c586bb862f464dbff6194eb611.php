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

/* pages/generate_letter.html.twig */
class __TwigTemplate_486a8c8105a7d538c857a416aab9082d5485ed0764b8ad1f4077fd0d5213d342 extends Template
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
        return "access_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/generate_letter.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/generate_letter.html.twig"));

        $this->parent = $this->loadTemplate("access_base.html.twig", "pages/generate_letter.html.twig", 1);
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
    <h2 class=\"page-header pt-4\">Generate MDA letter</h2>
    <hr>

    ";
        // line 8
        yield from         $this->loadTemplate("common/nav.html.twig", "pages/generate_letter.html.twig", 8)->unwrap()->yield($context);
        // line 9
        yield "
    <div class=\"row pt-3 d-flex\">

        <div class=\"col-lg-7 mx-auto\">

            <div class=\"bg-dark p-3 mb-3 font-white border_radius\">
                <p class=\"font-xs-2 mb-0 bottom_buffer font-weight-900 text-uppercase font-green\">MDA</p>
                <h4>";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["mda"]) || array_key_exists("mda", $context) ? $context["mda"] : (function () { throw new RuntimeError('Variable "mda" does not exist.', 16, $this->source); })()), "html", null, true);
        yield "</h4>

                ";
        // line 20
        yield "            </div>

            <form action=\"";
        // line 22
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mda_letter");
        yield "\" method=\"POST\">

                <div class=\"form-group\">
                    <label>Select a training</label>
                    <select name=\"training\" class=\"custom-select\">
                        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["trainings"]) || array_key_exists("trainings", $context) ? $context["trainings"] : (function () { throw new RuntimeError('Variable "trainings" does not exist.', 27, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["training"]) {
            // line 28
            yield "
                            <option value=\"";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["training"], "id", [], "any", false, false, false, 29), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["training"], "title", [], "any", false, false, false, 29), "html", null, true);
            yield "</option>

                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['training'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        yield "                    </select>
                </div>

                <div class=\"form-group\">

                    <label>Training type</label> <br>
                    <input type=\"radio\" class=\"custom-radio\" value=\"New training\" name=\"training_type\"> New training
                    <input type=\"radio\" class=\"custom-radio\" value=\"Refresher training\" name=\"training_type\"> Refresher training

                </div>

                <hr>

                <div class=\"form-group\">

                    <label>Email</label> <br>
                    <input type=\"text\" class=\"form-control\" name=\"email\">

                </div>

                <div class=\"form-group\">

                    <label>Phone</label> <br>
                    <input type=\"text\" class=\"form-control\" name=\"phone\" onkeypress=\"return isNumber(event)\">

                </div>

                <input type=\"hidden\" name=\"mda\" value=\"";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["mda"]) || array_key_exists("mda", $context) ? $context["mda"] : (function () { throw new RuntimeError('Variable "mda" does not exist.', 59, $this->source); })()), "html", null, true);
        yield "\">

                <button class=\"btn btn-block mt-3 btn-success\"><i class=\"fa fa-file-text-o\"></i> Generate Letter</button>

            </form>

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
        return "pages/generate_letter.html.twig";
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
        return array (  150 => 59,  121 => 32,  110 => 29,  107 => 28,  103 => 27,  95 => 22,  91 => 20,  86 => 16,  77 => 9,  75 => 8,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'access_base.html.twig' %}

{% block content %}

    <h2 class=\"page-header pt-4\">Generate MDA letter</h2>
    <hr>

    {% include 'common/nav.html.twig' %}

    <div class=\"row pt-3 d-flex\">

        <div class=\"col-lg-7 mx-auto\">

            <div class=\"bg-dark p-3 mb-3 font-white border_radius\">
                <p class=\"font-xs-2 mb-0 bottom_buffer font-weight-900 text-uppercase font-green\">MDA</p>
                <h4>{{ mda }}</h4>

                {# <p class=\"font-xs-2 mb-0 mt-3 bottom_buffer font-weight-900 text-uppercase font-green\">Contact information</p>
                 <p class=\"no_margin\">{{ email }} • {{ phone }}</p>#}
            </div>

            <form action=\"{{ path('mda_letter') }}\" method=\"POST\">

                <div class=\"form-group\">
                    <label>Select a training</label>
                    <select name=\"training\" class=\"custom-select\">
                        {% for training in trainings %}

                            <option value=\"{{ training.id }}\">{{ training.title }}</option>

                            {% endfor %}
                    </select>
                </div>

                <div class=\"form-group\">

                    <label>Training type</label> <br>
                    <input type=\"radio\" class=\"custom-radio\" value=\"New training\" name=\"training_type\"> New training
                    <input type=\"radio\" class=\"custom-radio\" value=\"Refresher training\" name=\"training_type\"> Refresher training

                </div>

                <hr>

                <div class=\"form-group\">

                    <label>Email</label> <br>
                    <input type=\"text\" class=\"form-control\" name=\"email\">

                </div>

                <div class=\"form-group\">

                    <label>Phone</label> <br>
                    <input type=\"text\" class=\"form-control\" name=\"phone\" onkeypress=\"return isNumber(event)\">

                </div>

                <input type=\"hidden\" name=\"mda\" value=\"{{ mda }}\">

                <button class=\"btn btn-block mt-3 btn-success\"><i class=\"fa fa-file-text-o\"></i> Generate Letter</button>

            </form>

        </div>

    </div>


{% endblock %}", "pages/generate_letter.html.twig", "C:\\laragon\\www\\training\\templates\\pages\\generate_letter.html.twig");
    }
}
