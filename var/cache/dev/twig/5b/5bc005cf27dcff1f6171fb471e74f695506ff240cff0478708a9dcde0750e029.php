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

/* common/admin/training_session.html.twig */
class __TwigTemplate_80a8a77437397583ac40334c8a0eed04c1ac2c4432571d3641013306d455e5e1 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "common/admin/training_session.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "common/admin/training_session.html.twig"));

        // line 1
        yield "<div class=\"card\">

    <div class=\"card-body\">


        ";
        // line 6
        if ((0 === CoreExtension::compare(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["training_sessions"]) || array_key_exists("training_sessions", $context) ? $context["training_sessions"] : (function () { throw new RuntimeError('Variable "training_sessions" does not exist.', 6, $this->source); })())), 0))) {
            // line 7
            yield "

            <div class=\"text-center  font-weight-100 p-5 font-gray\">

                <img src=\"";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/close.png"), "html", null, true);
            yield "\">
                <p class=\"font-lg mt-3\">No training session found.</p>
                <a href=\"";
            // line 13
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_add_training_session", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["training"]) || array_key_exists("training", $context) ? $context["training"] : (function () { throw new RuntimeError('Variable "training" does not exist.', 13, $this->source); })()), "id", [], "any", false, false, false, 13)]), "html", null, true);
            yield "\" class=\"btn btn-success mt-3\"><i class=\"fa fa-plus\"></i> Add new session</a>

            </div>

            ";
        } else {
            // line 18
            yield "

               <a href=\"";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_add_training_session", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["training"]) || array_key_exists("training", $context) ? $context["training"] : (function () { throw new RuntimeError('Variable "training" does not exist.', 20, $this->source); })()), "id", [], "any", false, false, false, 20)]), "html", null, true);
            yield "\" class=\"btn btn-primary mb-3\"><i class=\"fa fa-plus\"></i> Add Session</a>

                <table id=\"example\" class=\"datatable table display table-bordered table-striped table-hover\" cellspacing=\"0\" width=\"100%\">
                    <thead >
                    <tr>
                        <th>Session name</th>
                        <th>Start date</th>
                        <th>End date</th>
                        <th>Capacity</th>
                        <th>Status</th>
                        <th>Options</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["training_sessions"]) || array_key_exists("training_sessions", $context) ? $context["training_sessions"] : (function () { throw new RuntimeError('Variable "training_sessions" does not exist.', 34, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["session"]) {
                // line 35
                yield "                        <tr>
                            <td>";
                // line 36
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["session"], "name", [], "any", false, false, false, 36), "html", null, true);
                yield "</td>
                            <td>";
                // line 37
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["session"], "startdate", [], "any", false, false, false, 37), "l, F j Y"), "html", null, true);
                yield "</td>
                            <td>";
                // line 38
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["session"], "enddate", [], "any", false, false, false, 38), "l, F j Y"), "html", null, true);
                yield "</td>
                            <td>";
                // line 39
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["session"], "registered", [], "any", false, false, false, 39)), "html", null, true);
                yield "/";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["session"], "capacity", [], "any", false, false, false, 39)), "html", null, true);
                yield "</td>
                            <td>

                                ";
                // line 42
                if ((0 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, $context["session"], "status", [], "any", false, false, false, 42), 0))) {
                    // line 43
                    yield "
                                    <span class=\"text-danger\">Registration closed</span>



                                ";
                } elseif ((0 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source,                 // line 48
$context["session"], "status", [], "any", false, false, false, 48), 1))) {
                    // line 49
                    yield "
                                    <span class=\"text-success\">Registration open</span>

                                ";
                } elseif ((0 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source,                 // line 52
$context["session"], "status", [], "any", false, false, false, 52), 2))) {
                    // line 53
                    yield "
                                    <span class=\"text-primary\">Registration full</span>

                                ";
                }
                // line 57
                yield "                            </td>

                            <td>
                                <a href=\"";
                // line 60
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_training_session", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["session"], "id", [], "any", false, false, false, 60)]), "html", null, true);
                yield "\" class=\"btn btn-xs btn-primary mb-1\"><i class=\"fa fa-users\"></i> View participants</a>
                                ";
                // line 61
                if ((0 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, $context["session"], "status", [], "any", false, false, false, 61), "1"))) {
                    // line 62
                    yield "                                <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_close_training_session", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["session"], "id", [], "any", false, false, false, 62)]), "html", null, true);
                    yield "\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-exclamation-circle\"></i> Close registration</a>
                                    <a href=\"";
                    // line 63
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_edit_training_session", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["session"], "id", [], "any", false, false, false, 63)]), "html", null, true);
                    yield "\" class=\"btn btn-warning btn-xs\"><i class=\"fa fa-pencil\"></i> Edit</a>
                                ";
                } elseif (((0 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source,                 // line 64
$context["session"], "status", [], "any", false, false, false, 64), "0")) || (0 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, $context["session"], "status", [], "any", false, false, false, 64), 2)))) {
                    // line 65
                    yield "                                    <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_open_training_session", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["session"], "id", [], "any", false, false, false, 65)]), "html", null, true);
                    yield "\" class=\"btn btn-success btn-xs\"><i class=\"fa fa-check-circle\"></i> Open registration</a>
                                ";
                }
                // line 67
                yield "                                <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_delete_training_session", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["session"], "id", [], "any", false, false, false, 67)]), "html", null, true);
                yield "\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-close\"></i> Delete session</a>
                            </td>
                        </tr>

                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['session'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            yield "                    </tbody>
                </table>


        ";
        }
        // line 77
        yield "

    </div>

</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "common/admin/training_session.html.twig";
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
        return array (  191 => 77,  184 => 72,  172 => 67,  166 => 65,  164 => 64,  160 => 63,  155 => 62,  153 => 61,  149 => 60,  144 => 57,  138 => 53,  136 => 52,  131 => 49,  129 => 48,  122 => 43,  120 => 42,  112 => 39,  108 => 38,  104 => 37,  100 => 36,  97 => 35,  93 => 34,  76 => 20,  72 => 18,  64 => 13,  59 => 11,  53 => 7,  51 => 6,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"card\">

    <div class=\"card-body\">


        {% if training_sessions|length == 0 %}


            <div class=\"text-center  font-weight-100 p-5 font-gray\">

                <img src=\"{{ asset('assets/images/close.png') }}\">
                <p class=\"font-lg mt-3\">No training session found.</p>
                <a href=\"{{ path('admin_add_training_session', {\"id\" : training.id }) }}\" class=\"btn btn-success mt-3\"><i class=\"fa fa-plus\"></i> Add new session</a>

            </div>

            {% else %}


               <a href=\"{{ path('admin_add_training_session', {\"id\" : training.id }) }}\" class=\"btn btn-primary mb-3\"><i class=\"fa fa-plus\"></i> Add Session</a>

                <table id=\"example\" class=\"datatable table display table-bordered table-striped table-hover\" cellspacing=\"0\" width=\"100%\">
                    <thead >
                    <tr>
                        <th>Session name</th>
                        <th>Start date</th>
                        <th>End date</th>
                        <th>Capacity</th>
                        <th>Status</th>
                        <th>Options</th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for session in training_sessions %}
                        <tr>
                            <td>{{ session.name }}</td>
                            <td>{{ session.startdate|date(\"l, F j Y\") }}</td>
                            <td>{{ session.enddate|date(\"l, F j Y\") }}</td>
                            <td>{{ session.registered|number_format }}/{{ session.capacity|number_format }}</td>
                            <td>

                                {% if session.status == 0 %}

                                    <span class=\"text-danger\">Registration closed</span>



                                {% elseif session.status == 1 %}

                                    <span class=\"text-success\">Registration open</span>

                                {% elseif session.status == 2 %}

                                    <span class=\"text-primary\">Registration full</span>

                                {% endif %}
                            </td>

                            <td>
                                <a href=\"{{ path('admin_training_session', { 'id':session.id }) }}\" class=\"btn btn-xs btn-primary mb-1\"><i class=\"fa fa-users\"></i> View participants</a>
                                {% if session.status == '1' %}
                                <a href=\"{{ path('admin_close_training_session', { 'id' : session.id }) }}\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-exclamation-circle\"></i> Close registration</a>
                                    <a href=\"{{ path('admin_edit_training_session', { 'id' : session.id }) }}\" class=\"btn btn-warning btn-xs\"><i class=\"fa fa-pencil\"></i> Edit</a>
                                {% elseif (session.status == '0') or (session.status == 2) %}
                                    <a href=\"{{ path('admin_open_training_session', { 'id' : session.id }) }}\" class=\"btn btn-success btn-xs\"><i class=\"fa fa-check-circle\"></i> Open registration</a>
                                {% endif %}
                                <a href=\"{{ path('admin_delete_training_session', { 'id' : session.id }) }}\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-close\"></i> Delete session</a>
                            </td>
                        </tr>

                    {% endfor %}
                    </tbody>
                </table>


        {% endif %}


    </div>

</div>", "common/admin/training_session.html.twig", "C:\\laragon\\www\\training\\templates\\common\\admin\\training_session.html.twig");
    }
}
