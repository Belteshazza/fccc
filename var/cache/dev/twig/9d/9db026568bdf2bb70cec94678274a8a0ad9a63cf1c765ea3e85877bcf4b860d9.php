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

/* user/apply_training.html.twig */
class __TwigTemplate_255654bb952dd158a9926cf41b88a7263020b5d4b9df06e64ecb736451ae2c8d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'script' => [$this, 'block_script'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/apply_training.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/apply_training.html.twig"));

        $this->parent = $this->loadTemplate("user_base.html.twig", "user/apply_training.html.twig", 1);
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
        yield "</h4>
        </div>

        <div class=\"card-body\">

        ";
        // line 19
        if ((0 <= CoreExtension::compare(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["training_sessions"]) || array_key_exists("training_sessions", $context) ? $context["training_sessions"] : (function () { throw new RuntimeError('Variable "training_sessions" does not exist.', 19, $this->source); })())), 1))) {
            // line 20
            yield "            <form action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_new_training_apply", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["training"]) || array_key_exists("training", $context) ? $context["training"] : (function () { throw new RuntimeError('Variable "training" does not exist.', 20, $this->source); })()), "id", [], "any", false, false, false, 20)]), "html", null, true);
            yield "\" method=\"POST\">

                <hr>

                <a style=\"cursor: pointer\" class=\"float-right font-white btn btn-xs btn-success\" id=\"add_participant\"><i class=\"fa fa-plus\"></i> Add another participant</a>

                <h4 class=\"mb-4\">Add participants</h4>

                <div id=\"training_form_participants\">

                    <div class=\"bg-gray p-3 mb-3\">
                <div class=\"form-group\">
                    <label>Participant name</label>
                    <input type=\"text\" class=\"form-control\" required=\"required\" name=\"participants[]\" value=\"";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 33, $this->source); })()), "firstname", [], "any", false, false, false, 33), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 33, $this->source); })()), "lastname", [], "any", false, false, false, 33), "html", null, true);
            yield "\">
                </div>

                    <div class=\"form-group\">
                        <label>Participant email</label>
                        <input type=\"email\" class=\"form-control\" required=\"required\" name=\"participants_email[]\">
                    </div>

                <div class=\"form-group\">
                    <label>Participant phone</label>
                    <input type=\"text\" class=\"form-control\" onkeypress=\"return isNumber(event)\" name=\"participants_phone[]\">
                </div>

                        <div class=\"form-group\">
                            <label>Select a session</label>
                            <select required=\"required\" name=\"participants_session[]\" class=\"form-control\">
                                <option disabled selected value=\"\">-- Select a session --</option>
                                ";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["training_sessions"]) || array_key_exists("training_sessions", $context) ? $context["training_sessions"] : (function () { throw new RuntimeError('Variable "training_sessions" does not exist.', 50, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["session"]) {
                // line 51
                yield "
                                    <option value=\"";
                // line 52
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["session"], "id", [], "any", false, false, false, 52), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["session"], "name", [], "any", false, false, false, 52), "html", null, true);
                yield " - ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["session"], "startdate", [], "any", false, false, false, 52), "d M, Y"), "html", null, true);
                yield " till ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["session"], "enddate", [], "any", false, false, false, 52), "d M, Y"), "html", null, true);
                yield "</option>

                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['session'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            yield "                            </select>
                        </div>
                    </div>



                </div>



                <button class=\"btn btn-primary\">Submit</button>

            </form>

            ";
        } else {
            // line 70
            yield "
                <div class=\"text-center lead p-5\">
            <i class=\"fa fa-close fa-3x text-danger font-xl-4\"></i>
                    <p> No training session available</p>
                    <a href=\"#\" onclick=\"window.history.go(-1); return false;\" class=\"btn btn-primary\"><i class=\"fa fa-chevron-circle-left\"></i> Go back</a>
                </div>

                ";
        }
        // line 78
        yield "        </div>

    </div>

        </div>

    <div class=\"col-md-3\">


            <h4><i class=\"fa fa-info-circle\"></i> Organization registration fee</h4>
            &#8358;";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["training"]) || array_key_exists("training", $context) ? $context["training"] : (function () { throw new RuntimeError('Variable "training" does not exist.', 88, $this->source); })()), "registrationfee", [], "any", false, false, false, 88)), "html", null, true);
        yield "

        <h4 class=\"mt-3\"><i class=\"fa fa-info-circle\"></i> Each participant fee</h4>
        &#8358;";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["training"]) || array_key_exists("training", $context) ? $context["training"] : (function () { throw new RuntimeError('Variable "training" does not exist.', 91, $this->source); })()), "individualamount", [], "any", false, false, false, 91)), "html", null, true);
        yield "

        <h4 class=\"mt-3\"><i class=\"fa fa-info-circle\"></i> Each extra personnel fee (after ";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["training"]) || array_key_exists("training", $context) ? $context["training"] : (function () { throw new RuntimeError('Variable "training" does not exist.', 93, $this->source); })()), "individualspermda", [], "any", false, false, false, 93), "html", null, true);
        yield " participants)</h4>
        &#8358;";
        // line 94
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["training"]) || array_key_exists("training", $context) ? $context["training"] : (function () { throw new RuntimeError('Variable "training" does not exist.', 94, $this->source); })()), "extrapersonnelamount", [], "any", false, false, false, 94)), "html", null, true);
        yield "


    </div>


    </div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        return; yield '';
    }

    // line 105
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        // line 106
        yield "    <script>
    \$(\"#add_participant\").click(function () {
    \$(\"#training_form_participants\").append(\"<div class='bg-gray p-3 mb-3'> <div class='form-group'> <label>Participant name</label> <input type='text' class='form-control' required='required' name='participants[]'> </div> <div class='form-group'> <label>Participant email</label> <input type='email' class='form-control' required='required' name='participants_email[]'> </div> <div class='form-group'> <label>Participant phone</label> <input type='text' class='form-control' onkeypress='return isNumber(event)' name='participants_phone[]'></div>  <div class='form-group'><label>Select a session</label><select required='required' name='participants_session[]' class='form-control'><option disabled selected value=''>-- Select a session --</option>";
        // line 108
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["training_sessions"]) || array_key_exists("training_sessions", $context) ? $context["training_sessions"] : (function () { throw new RuntimeError('Variable "training_sessions" does not exist.', 108, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["session"]) {
            yield "<option value='";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["session"], "id", [], "any", false, false, false, 108), "html", null, true);
            yield "'>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["session"], "name", [], "any", false, false, false, 108), "html", null, true);
            yield " - ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["session"], "startdate", [], "any", false, false, false, 108), "d M, Y"), "html", null, true);
            yield " till ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["session"], "enddate", [], "any", false, false, false, 108), "d M, Y"), "html", null, true);
            yield "</option>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['session'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "</select> </div></div>\");
    });
    </script>
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
        return "user/apply_training.html.twig";
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
        return array (  242 => 108,  238 => 106,  228 => 105,  207 => 94,  203 => 93,  198 => 91,  192 => 88,  180 => 78,  170 => 70,  153 => 55,  138 => 52,  135 => 51,  131 => 50,  109 => 33,  92 => 20,  90 => 19,  82 => 14,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends'user_base.html.twig' %}

{% block body %}


    <div class=\"row\">


        <div class=\"col-md-9\">

    <div class=\"card\">

        <div class=\"card-header bg-dark font-white\">
            <h4>Apply for {{ training.title }}</h4>
        </div>

        <div class=\"card-body\">

        {% if training_sessions|length >= 1 %}
            <form action=\"{{ path('user_new_training_apply', { 'id': training.id }) }}\" method=\"POST\">

                <hr>

                <a style=\"cursor: pointer\" class=\"float-right font-white btn btn-xs btn-success\" id=\"add_participant\"><i class=\"fa fa-plus\"></i> Add another participant</a>

                <h4 class=\"mb-4\">Add participants</h4>

                <div id=\"training_form_participants\">

                    <div class=\"bg-gray p-3 mb-3\">
                <div class=\"form-group\">
                    <label>Participant name</label>
                    <input type=\"text\" class=\"form-control\" required=\"required\" name=\"participants[]\" value=\"{{ user.firstname }} {{ user.lastname }}\">
                </div>

                    <div class=\"form-group\">
                        <label>Participant email</label>
                        <input type=\"email\" class=\"form-control\" required=\"required\" name=\"participants_email[]\">
                    </div>

                <div class=\"form-group\">
                    <label>Participant phone</label>
                    <input type=\"text\" class=\"form-control\" onkeypress=\"return isNumber(event)\" name=\"participants_phone[]\">
                </div>

                        <div class=\"form-group\">
                            <label>Select a session</label>
                            <select required=\"required\" name=\"participants_session[]\" class=\"form-control\">
                                <option disabled selected value=\"\">-- Select a session --</option>
                                {% for session in training_sessions %}

                                    <option value=\"{{ session.id }}\">{{ session.name }} - {{ session.startdate|date(\"d M, Y\") }} till {{ session.enddate|date(\"d M, Y\") }}</option>

                                {% endfor %}
                            </select>
                        </div>
                    </div>



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


            <h4><i class=\"fa fa-info-circle\"></i> Organization registration fee</h4>
            &#8358;{{ training.registrationfee|number_format }}

        <h4 class=\"mt-3\"><i class=\"fa fa-info-circle\"></i> Each participant fee</h4>
        &#8358;{{ training.individualamount|number_format }}

        <h4 class=\"mt-3\"><i class=\"fa fa-info-circle\"></i> Each extra personnel fee (after {{ training.individualspermda }} participants)</h4>
        &#8358;{{ training.extrapersonnelamount|number_format }}


    </div>


    </div>


{% endblock %}

{% block script %}
    <script>
    \$(\"#add_participant\").click(function () {
    \$(\"#training_form_participants\").append(\"<div class='bg-gray p-3 mb-3'> <div class='form-group'> <label>Participant name</label> <input type='text' class='form-control' required='required' name='participants[]'> </div> <div class='form-group'> <label>Participant email</label> <input type='email' class='form-control' required='required' name='participants_email[]'> </div> <div class='form-group'> <label>Participant phone</label> <input type='text' class='form-control' onkeypress='return isNumber(event)' name='participants_phone[]'></div>  <div class='form-group'><label>Select a session</label><select required='required' name='participants_session[]' class='form-control'><option disabled selected value=''>-- Select a session --</option>{% for session in training_sessions %}<option value='{{ session.id }}'>{{ session.name }} - {{ session.startdate|date('d M, Y') }} till {{ session.enddate|date('d M, Y') }}</option>{% endfor %}</select> </div></div>\");
    });
    </script>
{% endblock %}", "user/apply_training.html.twig", "C:\\laragon\\www\\training\\templates\\user\\apply_training.html.twig");
    }
}
