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

/* user/refresher_apply_training.html.twig */
class __TwigTemplate_18a82bcad67d055349f177952c7e750039e1fe4fbb1a8117eb427d33472a3b57 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/refresher_apply_training.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/refresher_apply_training.html.twig"));

        $this->parent = $this->loadTemplate("user_base.html.twig", "user/refresher_apply_training.html.twig", 1);
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


        <div class=\"col-md-9\">

    <div class=\"card\">

        <div class=\"card-header bg-dark font-white\">
            <h4>Apply for ";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["training"]) || array_key_exists("training", $context) ? $context["training"] : (function () { throw new RuntimeError('Variable "training" does not exist.', 14, $this->source); })()), "title", [], "any", false, false, false, 14), "html", null, true);
        yield " refresher training</h4>
        </div>

        <div class=\"card-body\">

        ";
        // line 19
        if ((0 <= CoreExtension::compare(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["training_sessions"]) || array_key_exists("training_sessions", $context) ? $context["training_sessions"] : (function () { throw new RuntimeError('Variable "training_sessions" does not exist.', 19, $this->source); })())), 1))) {
            // line 20
            yield "            <form action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_refresher_training_apply", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["training"]) || array_key_exists("training", $context) ? $context["training"] : (function () { throw new RuntimeError('Variable "training" does not exist.', 20, $this->source); })()), "id", [], "any", false, false, false, 20)]), "html", null, true);
            yield "\" method=\"POST\">

                <div class=\"form-group\">
                    <label>Select a session</label>
                    <select required=\"required\" name=\"training_session\" class=\"form-control\">
                        <option disabled selected value=\"\">-- Select a session --</option>
                        ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["training_sessions"]) || array_key_exists("training_sessions", $context) ? $context["training_sessions"] : (function () { throw new RuntimeError('Variable "training_sessions" does not exist.', 26, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["session"]) {
                // line 27
                yield "
                            <option value=\"";
                // line 28
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["session"], "id", [], "any", false, false, false, 28), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["session"], "name", [], "any", false, false, false, 28), "html", null, true);
                yield " - ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["session"], "startdate", [], "any", false, false, false, 28), "d M, Y"), "html", null, true);
                yield " till ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["session"], "enddate", [], "any", false, false, false, 28), "d M, Y"), "html", null, true);
                yield "</option>

                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['session'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            yield "                    </select>
                </div>

                <hr>

                <h4 class=\"mb-4\">All participants</h4>

                <div id=\"training_form_participants\">

                    ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["previous_attendees"]) || array_key_exists("previous_attendees", $context) ? $context["previous_attendees"] : (function () { throw new RuntimeError('Variable "previous_attendees" does not exist.', 40, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["attendee"]) {
                // line 41
                yield "                    <div class=\"bg-gray p-3 mb-3\">
                <div class=\"form-group\">
                    <label>Participant name</label>
                    <input type=\"text\" class=\"form-control\" readonly=\"\" required=\"required\" name=\"participants[]\" value=\"";
                // line 44
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["attendee"], "participantname", [], "any", false, false, false, 44), "html", null, true);
                yield "\">
                </div>

                    <div class=\"form-group\">
                        <label>Participant email</label>
                        <input type=\"email\" class=\"form-control\" readonly=\"\" required=\"required\" name=\"participants_email[]\" value=\"";
                // line 49
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["attendee"], "participantemail", [], "any", false, false, false, 49), "html", null, true);
                yield "\">
                    </div>

                <div class=\"form-group\">
                    <label>Participant phone</label>
                    <input type=\"text\" class=\"form-control\" readonly=\"\" onkeypress=\"return isNumber(event)\" name=\"participants_phone[]\" value=\"";
                // line 54
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["attendee"], "participantphone", [], "any", false, false, false, 54), "html", null, true);
                yield "\">
                </div>
                    </div>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attendee'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            yield "

                </div>



                <button class=\"btn btn-primary\">Submit</button>

            </form>

            ";
        } else {
            // line 69
            yield "
                <div class=\"text-center lead p-5\">
            <i class=\"fa fa-close fa-3x text-danger font-xl-4\"></i>
                    <p> No training session available</p>
                    <a href=\"#\" onclick=\"window.history.go(-1); return false;\" class=\"btn btn-primary\"><i class=\"fa fa-chevron-circle-left\"></i> Go back</a>
                </div>

                ";
        }
        // line 77
        yield "        </div>

    </div>

        </div>

    <div class=\"col-md-3\">




        <h4 class=\"mt-3\"><i class=\"fa fa-info-circle\"></i> Individual refresher personnel fee </h4>
        &#8358;";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["training"]) || array_key_exists("training", $context) ? $context["training"] : (function () { throw new RuntimeError('Variable "training" does not exist.', 89, $this->source); })()), "refresherindividualamount", [], "any", false, false, false, 89)), "html", null, true);
        yield "


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
        return "user/refresher_apply_training.html.twig";
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
        return array (  206 => 89,  192 => 77,  182 => 69,  169 => 58,  159 => 54,  151 => 49,  143 => 44,  138 => 41,  134 => 40,  123 => 31,  108 => 28,  105 => 27,  101 => 26,  91 => 20,  89 => 19,  81 => 14,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends'user_base.html.twig' %}

{% block body %}


    <div class=\"row\">


        <div class=\"col-md-9\">

    <div class=\"card\">

        <div class=\"card-header bg-dark font-white\">
            <h4>Apply for {{ training.title }} refresher training</h4>
        </div>

        <div class=\"card-body\">

        {% if training_sessions|length >= 1 %}
            <form action=\"{{ path('user_refresher_training_apply', { 'id': training.id }) }}\" method=\"POST\">

                <div class=\"form-group\">
                    <label>Select a session</label>
                    <select required=\"required\" name=\"training_session\" class=\"form-control\">
                        <option disabled selected value=\"\">-- Select a session --</option>
                        {% for session in training_sessions %}

                            <option value=\"{{ session.id }}\">{{ session.name }} - {{ session.startdate|date(\"d M, Y\") }} till {{ session.enddate|date(\"d M, Y\") }}</option>

                        {% endfor %}
                    </select>
                </div>

                <hr>

                <h4 class=\"mb-4\">All participants</h4>

                <div id=\"training_form_participants\">

                    {% for attendee in previous_attendees %}
                    <div class=\"bg-gray p-3 mb-3\">
                <div class=\"form-group\">
                    <label>Participant name</label>
                    <input type=\"text\" class=\"form-control\" readonly=\"\" required=\"required\" name=\"participants[]\" value=\"{{ attendee.participantname }}\">
                </div>

                    <div class=\"form-group\">
                        <label>Participant email</label>
                        <input type=\"email\" class=\"form-control\" readonly=\"\" required=\"required\" name=\"participants_email[]\" value=\"{{ attendee.participantemail }}\">
                    </div>

                <div class=\"form-group\">
                    <label>Participant phone</label>
                    <input type=\"text\" class=\"form-control\" readonly=\"\" onkeypress=\"return isNumber(event)\" name=\"participants_phone[]\" value=\"{{ attendee.participantphone }}\">
                </div>
                    </div>
{% endfor %}


                </div>



                <button class=\"btn btn-primary\">Submit</button>

            </form>

            {% else %}

                <div class=\"text-center lead p-5\">
            <i class=\"fa fa-close fa-3x text-danger font-xl-4\"></i>
                    <p> No training session available</p>
                    <a href=\"#\" onclick=\"window.history.go(-1); return false;\" class=\"btn btn-primary\"><i class=\"fa fa-chevron-circle-left\"></i> Go back</a>
                </div>

                {% endif %}
        </div>

    </div>

        </div>

    <div class=\"col-md-3\">




        <h4 class=\"mt-3\"><i class=\"fa fa-info-circle\"></i> Individual refresher personnel fee </h4>
        &#8358;{{ training.refresherindividualamount|number_format }}


    </div>


    </div>


{% endblock %}", "user/refresher_apply_training.html.twig", "C:\\laragon\\www\\training\\templates\\user\\refresher_apply_training.html.twig");
    }
}
