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

/* common/admin/training_participant.html.twig */
class __TwigTemplate_454d8cfd3e14d6443e44f291d73a913fb5d73e25873ee9cc3b2898bffc9b823a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "common/admin/training_participant.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "common/admin/training_participant.html.twig"));

        // line 1
        yield "<div class=\"card\">
    <div class=\"card-header \">
        <ul class=\"nav nav-pills nav-fill\" id=\"pills-tab\" role=\"tablist\">
            <li class=\"nav-item\">
                <a class=\"nav-link active\" id=\"pills-registered-tab\" data-toggle=\"pill\" href=\"#pills-registered\" role=\"tab\" aria-controls=\"pills-home\" aria-selected=\"true\">Registered participants</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" id=\"pills-attended-tab\" data-toggle=\"pill\" href=\"#pills-attended\" role=\"tab\" aria-controls=\"pills-profile\" aria-selected=\"false\">Participants who attended</a>
            </li>

            <li class=\"nav-item\">
                <a class=\"nav-link\" id=\"pills-notregistered-tab\" data-toggle=\"pill\" href=\"#pills-notregistered\" role=\"tab\" aria-controls=\"pills-notregistered\" aria-selected=\"false\">MDA's that didn't attend</a>
            </li>

        </ul>
    </div>

    <div class=\"card-body\">

        <div class=\"tab-content\" id=\"pills-tabContent\">
            <div class=\"tab-pane fade show active\" id=\"pills-registered\" role=\"tabpanel\" aria-labelledby=\"pills-home-tab\">


                <table id=\"example\" class=\"datatable table display table-bordered table-striped table-hover\" cellspacing=\"0\" width=\"100%\">
                    <thead >
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>MDA</th>
                        <th>Session</th>
                        <th>Attended</th>
                        <th>Payment status</th>
                        <th>Invoice</th>
                        <th>Options</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["training_participants"]) || array_key_exists("training_participants", $context) ? $context["training_participants"] : (function () { throw new RuntimeError('Variable "training_participants" does not exist.', 39, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["participant"]) {
            // line 40
            yield "                        <tr>
                            <td>";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "name", [], "any", false, false, false, 41), "html", null, true);
            yield "</td>
                            <td>";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "email", [], "any", false, false, false, 42), "html", null, true);
            yield "</td>
                            <td>";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "phone", [], "any", false, false, false, 43), "html", null, true);
            yield "</td>
                            <td>";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "mda", [], "any", false, false, false, 44), "html", null, true);
            yield "</td>
                            <td>";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "session", [], "any", false, false, false, 45), "html", null, true);
            yield "</td>
                            <td>
                                ";
            // line 47
            if ((0 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "attended", [], "any", false, false, false, 47), 0))) {
                // line 48
                yield "
                                    No
                                ";
            } else {
                // line 51
                yield "
                                    Yes

                                ";
            }
            // line 55
            yield "                            </td>
                            <td>
                                ";
            // line 57
            if ((0 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "payment_status", [], "any", false, false, false, 57), 0))) {
                // line 58
                yield "
                                    <span class=\"text-danger\">Not paid</span>

                                ";
            } else {
                // line 62
                yield "
                                    <span class=\"text-success\">Paid</span>

                                ";
            }
            // line 66
            yield "                            </td>
                            <td>#";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "invoice_id", [], "any", false, false, false, 67), "html", null, true);
            yield "</td>
                            <td>

                                ";
            // line 70
            if ((0 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "payment_status", [], "any", false, false, false, 70), 0))) {
                // line 71
                yield "
                                    <a href=\"";
                // line 72
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_view_invoice", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "invoice_id", [], "any", false, false, false, 72)]), "html", null, true);
                yield "\" class=\"btn btn-primary btn-xs\"><i class=\"fa fa-file-o\"></i> View invoice</a>

                                ";
            }
            // line 75
            yield "
                                <a href=\"";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_edit_participant", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "id", [], "any", false, false, false, 76), "training_id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["training"]) || array_key_exists("training", $context) ? $context["training"] : (function () { throw new RuntimeError('Variable "training" does not exist.', 76, $this->source); })()), "id", [], "any", false, false, false, 76)]), "html", null, true);
            yield "\" class=\"btn btn-warning btn-xs mt-2\"><i class=\"fa fa-pencil\"></i></a>
                                <a href=\"";
            // line 77
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_delete_participant", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "id", [], "any", false, false, false, 77)]), "html", null, true);
            yield "\" class=\"btn btn-danger btn-xs mt-2\"><i class=\"fa fa-close\"></i></a>

                                ";
            // line 79
            if ((0 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "attended", [], "any", false, false, false, 79), 0))) {
                // line 80
                yield "                                <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_mark_participant_attended", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "id", [], "any", false, false, false, 80)]), "html", null, true);
                yield "\" class=\"btn btn-success btn-xs mt-2\">Mark as attended</a>
                                ";
            } else {
                // line 82
                yield "                                    <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_mark_participant_not_attended", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "id", [], "any", false, false, false, 82)]), "html", null, true);
                yield "\" class=\"btn btn-danger btn-xs mt-2\">Mark as not attended</a>
                                ";
            }
            // line 84
            yield "
                            </td>
                        </tr>

                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['participant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        yield "                    </tbody>
                </table>


            </div>
            <div class=\"tab-pane fade\" id=\"pills-attended\" role=\"tabpanel\" aria-labelledby=\"pills-profile-tab\">


                <table id=\"example\" class=\"datatable table display table-bordered table-striped table-hover\" cellspacing=\"0\" width=\"100%\">
                    <thead >
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>MDA</th>
                        <th>Session</th>
                        <th>Attended</th>
                        <th>Payment status</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 110
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["attended_participants"]) || array_key_exists("attended_participants", $context) ? $context["attended_participants"] : (function () { throw new RuntimeError('Variable "attended_participants" does not exist.', 110, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["participant"]) {
            // line 111
            yield "                        <tr>
                            <td>";
            // line 112
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "name", [], "any", false, false, false, 112), "html", null, true);
            yield "</td>
                            <td>";
            // line 113
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "email", [], "any", false, false, false, 113), "html", null, true);
            yield "</td>
                            <td>";
            // line 114
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "phone", [], "any", false, false, false, 114), "html", null, true);
            yield "</td>
                            <td>";
            // line 115
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "mda", [], "any", false, false, false, 115), "html", null, true);
            yield "</td>
                            <td>";
            // line 116
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "session", [], "any", false, false, false, 116), "html", null, true);
            yield "</td>
                            <td>
                                ";
            // line 118
            if ((0 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "attended", [], "any", false, false, false, 118), 0))) {
                // line 119
                yield "
                                    No
                                ";
            } else {
                // line 122
                yield "
                                    Yes

                                ";
            }
            // line 126
            yield "                            </td>
                            <td>
                                ";
            // line 128
            if ((0 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "payment_status", [], "any", false, false, false, 128), 0))) {
                // line 129
                yield "
                                    <span class=\"text-danger\">Not paid</span>

                                ";
            } else {
                // line 133
                yield "
                                    <span class=\"text-success\">Paid</span>

                                ";
            }
            // line 137
            yield "                            </td>

                        </tr>

                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['participant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 142
        yield "                    </tbody>
                </table>

            </div>

            <div class=\"tab-pane fade\" id=\"pills-notregistered\" role=\"tabpanel\" aria-labelledby=\"pills-notregistered-tab\">


                <table id=\"example\" class=\"datatable table display table-bordered table-striped table-hover\" cellspacing=\"0\" width=\"100%\">
                    <thead >
                    <tr>
                        <th>MDA Name</th>
                        <th>MDA Code</th>
                        <th>Email</th>
                        <th>Phone</th>

                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 161
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["not_attended_mdas"]) || array_key_exists("not_attended_mdas", $context) ? $context["not_attended_mdas"] : (function () { throw new RuntimeError('Variable "not_attended_mdas" does not exist.', 161, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["mda"]) {
            // line 162
            yield "                        <tr>
                            <td>";
            // line 163
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["mda"], "name", [], "any", false, false, false, 163), "html", null, true);
            yield "</td>
                            <td>";
            // line 164
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["mda"], "mda_code", [], "any", false, false, false, 164), "html", null, true);
            yield "</td>
                            <td>";
            // line 165
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["mda"], "email", [], "any", false, false, false, 165), "html", null, true);
            yield "</td>
                            <td>";
            // line 166
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["mda"], "phone", [], "any", false, false, false, 166), "html", null, true);
            yield "</td>


                        </tr>

                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mda'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 172
        yield "                    </tbody>
                </table>

            </div>

        </div>

    </div>

</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "common/admin/training_participant.html.twig";
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
        return array (  343 => 172,  331 => 166,  327 => 165,  323 => 164,  319 => 163,  316 => 162,  312 => 161,  291 => 142,  281 => 137,  275 => 133,  269 => 129,  267 => 128,  263 => 126,  257 => 122,  252 => 119,  250 => 118,  245 => 116,  241 => 115,  237 => 114,  233 => 113,  229 => 112,  226 => 111,  222 => 110,  199 => 89,  189 => 84,  183 => 82,  177 => 80,  175 => 79,  170 => 77,  166 => 76,  163 => 75,  157 => 72,  154 => 71,  152 => 70,  146 => 67,  143 => 66,  137 => 62,  131 => 58,  129 => 57,  125 => 55,  119 => 51,  114 => 48,  112 => 47,  107 => 45,  103 => 44,  99 => 43,  95 => 42,  91 => 41,  88 => 40,  84 => 39,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"card\">
    <div class=\"card-header \">
        <ul class=\"nav nav-pills nav-fill\" id=\"pills-tab\" role=\"tablist\">
            <li class=\"nav-item\">
                <a class=\"nav-link active\" id=\"pills-registered-tab\" data-toggle=\"pill\" href=\"#pills-registered\" role=\"tab\" aria-controls=\"pills-home\" aria-selected=\"true\">Registered participants</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" id=\"pills-attended-tab\" data-toggle=\"pill\" href=\"#pills-attended\" role=\"tab\" aria-controls=\"pills-profile\" aria-selected=\"false\">Participants who attended</a>
            </li>

            <li class=\"nav-item\">
                <a class=\"nav-link\" id=\"pills-notregistered-tab\" data-toggle=\"pill\" href=\"#pills-notregistered\" role=\"tab\" aria-controls=\"pills-notregistered\" aria-selected=\"false\">MDA's that didn't attend</a>
            </li>

        </ul>
    </div>

    <div class=\"card-body\">

        <div class=\"tab-content\" id=\"pills-tabContent\">
            <div class=\"tab-pane fade show active\" id=\"pills-registered\" role=\"tabpanel\" aria-labelledby=\"pills-home-tab\">


                <table id=\"example\" class=\"datatable table display table-bordered table-striped table-hover\" cellspacing=\"0\" width=\"100%\">
                    <thead >
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>MDA</th>
                        <th>Session</th>
                        <th>Attended</th>
                        <th>Payment status</th>
                        <th>Invoice</th>
                        <th>Options</th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for participant in training_participants %}
                        <tr>
                            <td>{{ participant.name }}</td>
                            <td>{{ participant.email }}</td>
                            <td>{{ participant.phone }}</td>
                            <td>{{ participant.mda }}</td>
                            <td>{{ participant.session }}</td>
                            <td>
                                {% if participant.attended == 0 %}

                                    No
                                {% else %}

                                    Yes

                                {% endif %}
                            </td>
                            <td>
                                {% if participant.payment_status == 0 %}

                                    <span class=\"text-danger\">Not paid</span>

                                {% else %}

                                    <span class=\"text-success\">Paid</span>

                                {% endif %}
                            </td>
                            <td>#{{ participant.invoice_id }}</td>
                            <td>

                                {% if participant.payment_status == 0 %}

                                    <a href=\"{{ path('admin_view_invoice', { 'id':participant.invoice_id }) }}\" class=\"btn btn-primary btn-xs\"><i class=\"fa fa-file-o\"></i> View invoice</a>

                                {% endif %}

                                <a href=\"{{ path('admin_edit_participant', {'id':participant.id, 'training_id':training.id}) }}\" class=\"btn btn-warning btn-xs mt-2\"><i class=\"fa fa-pencil\"></i></a>
                                <a href=\"{{ path('admin_delete_participant', {'id':participant.id}) }}\" class=\"btn btn-danger btn-xs mt-2\"><i class=\"fa fa-close\"></i></a>

                                {% if participant.attended == 0 %}
                                <a href=\"{{ path('admin_mark_participant_attended', {'id':participant.id}) }}\" class=\"btn btn-success btn-xs mt-2\">Mark as attended</a>
                                {% else %}
                                    <a href=\"{{ path('admin_mark_participant_not_attended', {'id':participant.id}) }}\" class=\"btn btn-danger btn-xs mt-2\">Mark as not attended</a>
                                {% endif %}

                            </td>
                        </tr>

                    {% endfor %}
                    </tbody>
                </table>


            </div>
            <div class=\"tab-pane fade\" id=\"pills-attended\" role=\"tabpanel\" aria-labelledby=\"pills-profile-tab\">


                <table id=\"example\" class=\"datatable table display table-bordered table-striped table-hover\" cellspacing=\"0\" width=\"100%\">
                    <thead >
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>MDA</th>
                        <th>Session</th>
                        <th>Attended</th>
                        <th>Payment status</th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for participant in attended_participants %}
                        <tr>
                            <td>{{ participant.name }}</td>
                            <td>{{ participant.email }}</td>
                            <td>{{ participant.phone }}</td>
                            <td>{{ participant.mda }}</td>
                            <td>{{ participant.session }}</td>
                            <td>
                                {% if participant.attended == 0 %}

                                    No
                                {% else %}

                                    Yes

                                {% endif %}
                            </td>
                            <td>
                                {% if participant.payment_status == 0 %}

                                    <span class=\"text-danger\">Not paid</span>

                                {% else %}

                                    <span class=\"text-success\">Paid</span>

                                {% endif %}
                            </td>

                        </tr>

                    {% endfor %}
                    </tbody>
                </table>

            </div>

            <div class=\"tab-pane fade\" id=\"pills-notregistered\" role=\"tabpanel\" aria-labelledby=\"pills-notregistered-tab\">


                <table id=\"example\" class=\"datatable table display table-bordered table-striped table-hover\" cellspacing=\"0\" width=\"100%\">
                    <thead >
                    <tr>
                        <th>MDA Name</th>
                        <th>MDA Code</th>
                        <th>Email</th>
                        <th>Phone</th>

                    </tr>
                    </thead>
                    <tbody>
                    {% for mda in not_attended_mdas %}
                        <tr>
                            <td>{{ mda.name }}</td>
                            <td>{{ mda.mda_code }}</td>
                            <td>{{ mda.email }}</td>
                            <td>{{ mda.phone }}</td>


                        </tr>

                    {% endfor %}
                    </tbody>
                </table>

            </div>

        </div>

    </div>

</div>
", "common/admin/training_participant.html.twig", "C:\\laragon\\www\\training\\templates\\common\\admin\\training_participant.html.twig");
    }
}
