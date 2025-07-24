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

/* admin/training_session.html.twig */
class __TwigTemplate_30929d183931ab80de658d09a4c0b3a905ea7f4fe77b3fcdeaccbadc91a9d93f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/training_session.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/training_session.html.twig"));

        $this->parent = $this->loadTemplate("admin_base.html.twig", "admin/training_session.html.twig", 1);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_view_training", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["training"]) || array_key_exists("training", $context) ? $context["training"] : (function () { throw new RuntimeError('Variable "training" does not exist.', 6, $this->source); })()), "id", [], "any", false, false, false, 6)]), "html", null, true);
        yield "\" class=\"btn btn-xs btn-warning mt-1\"><i class=\"fa fa-chevron-circle-left\"></i> Back to training</a>

    </div>
    <div class=\"clearfix\"></div>
    <div class=\"card\">
        <div class=\"card-header bg-dark text-white font-white p-3 font-sm-4\">
            ";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["training"]) || array_key_exists("training", $context) ? $context["training"] : (function () { throw new RuntimeError('Variable "training" does not exist.', 12, $this->source); })()), "title", [], "any", false, false, false, 12), "html", null, true);
        yield "
        </div>
        <div class=\"card-body \">
            <h3>";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["training_session"]) || array_key_exists("training_session", $context) ? $context["training_session"] : (function () { throw new RuntimeError('Variable "training_session" does not exist.', 15, $this->source); })()), "name", [], "any", false, false, false, 15), "html", null, true);
        yield "</h3>
        </div>


    </div>

    <div class=\"text-center text-danger mx-auto p-3\">Calculations are based on participants/MDAs that attended</div>
    <div class=\"row text-white text-center\">



    <div class=\"col-md-4\">

        <div class=\"card\">
            <div class=\"card-body text-center text-white bg-dark font-white\">
                <b class=\"text-uppercase font-xs\">Total expected payments</b>
                <p class=\"font-lg m-0\">&#8358;";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["total_expected"]) || array_key_exists("total_expected", $context) ? $context["total_expected"] : (function () { throw new RuntimeError('Variable "total_expected" does not exist.', 31, $this->source); })())), "html", null, true);
        yield "</p>
            </div>
        </div>

    </div>

    <div class=\"col-md-4\">

        <div class=\"card\">
            <div class=\"card-body text-center text-white bg-dark font-white\">
                <b class=\"text-uppercase font-xs\">Total payments received</b>
                <p class=\"font-lg m-0\">&#8358;";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["total_paid"]) || array_key_exists("total_paid", $context) ? $context["total_paid"] : (function () { throw new RuntimeError('Variable "total_paid" does not exist.', 42, $this->source); })())), "html", null, true);
        yield "</p>
            </div>
        </div>

    </div>

    <div class=\"col-md-4\">

        <div class=\"card\">
            <div class=\"card-body bg-dark text-center text-white font-white\">
                <b class=\"text-uppercase font-xs\">Total outstanding payments</b>
                <p class=\"font-lg m-0\">&#8358;";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["total_outstanding"]) || array_key_exists("total_outstanding", $context) ? $context["total_outstanding"] : (function () { throw new RuntimeError('Variable "total_outstanding" does not exist.', 53, $this->source); })())), "html", null, true);
        yield "</p>
            </div>
        </div>

    </div>
    </div>


    <div class=\"card\">
        <div class=\"card-header \">
            <ul class=\"nav nav-pills nav-fill\" id=\"pills-tab\" role=\"tablist\">
                <li class=\"nav-item\">
                    <a class=\"nav-link active\" id=\"pills-registered-tab\" data-toggle=\"pill\" href=\"#pills-registered\" role=\"tab\" aria-controls=\"pills-home\" aria-selected=\"true\">Registered participants</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" id=\"pills-attended-tab\" data-toggle=\"pill\" href=\"#pills-attended\" role=\"tab\" aria-controls=\"pills-profile\" aria-selected=\"false\">Participants who attended</a>
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
                            <th>Reg. Date</th>
                            <th>Payment status</th>
                            <th>Invoice</th>
                            <th>Options</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["training_participants"]) || array_key_exists("training_participants", $context) ? $context["training_participants"] : (function () { throw new RuntimeError('Variable "training_participants" does not exist.', 96, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["participant"]) {
            // line 97
            yield "                            <tr>
                                <td>";
            // line 98
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "name", [], "any", false, false, false, 98), "html", null, true);
            yield "</td>
                                <td>";
            // line 99
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "email", [], "any", false, false, false, 99), "html", null, true);
            yield "</td>
                                <td>";
            // line 100
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "phone", [], "any", false, false, false, 100), "html", null, true);
            yield "</td>
                                <td>";
            // line 101
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "mda", [], "any", false, false, false, 101), "html", null, true);
            yield "</td>
                                <td>";
            // line 102
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "session", [], "any", false, false, false, 102), "html", null, true);
            yield "</td>
                                <td>
                                    ";
            // line 104
            if ((0 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "attended", [], "any", false, false, false, 104), 0))) {
                // line 105
                yield "
                                        No
                                    ";
            } else {
                // line 108
                yield "
                                        Yes

                                    ";
            }
            // line 112
            yield "                                </td>
                                <td>";
            // line 113
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "date", [], "any", false, false, false, 113), "jS F, Y"), "html", null, true);
            yield "</td>
                                <td>
                                    ";
            // line 115
            if ((0 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "payment_status", [], "any", false, false, false, 115), 0))) {
                // line 116
                yield "
                                        <span class=\"text-danger\">Not paid</span>

                                    ";
            } else {
                // line 120
                yield "
                                        <span class=\"text-success\">Paid</span>

                                    ";
            }
            // line 124
            yield "                                </td>
                                <td>#";
            // line 125
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "invoice_id", [], "any", false, false, false, 125), "html", null, true);
            yield "</td>
                                <td>

                                    ";
            // line 128
            if ((0 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "payment_status", [], "any", false, false, false, 128), 0))) {
                // line 129
                yield "
                                        <a href=\"";
                // line 130
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_view_invoice", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "invoice_id", [], "any", false, false, false, 130)]), "html", null, true);
                yield "\" class=\"btn btn-primary btn-xs\"><i class=\"fa fa-file-o\"></i> View invoice</a>

                                    ";
            }
            // line 133
            yield "                                </td>
                            </tr>

                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['participant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 137
        yield "                        </tbody>
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
        // line 158
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["attended_participants"]) || array_key_exists("attended_participants", $context) ? $context["attended_participants"] : (function () { throw new RuntimeError('Variable "attended_participants" does not exist.', 158, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["participant"]) {
            // line 159
            yield "                            <tr>
                                <td>";
            // line 160
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "name", [], "any", false, false, false, 160), "html", null, true);
            yield "</td>
                                <td>";
            // line 161
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "email", [], "any", false, false, false, 161), "html", null, true);
            yield "</td>
                                <td>";
            // line 162
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "phone", [], "any", false, false, false, 162), "html", null, true);
            yield "</td>
                                <td>";
            // line 163
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "mda", [], "any", false, false, false, 163), "html", null, true);
            yield "</td>
                                <td>";
            // line 164
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "session", [], "any", false, false, false, 164), "html", null, true);
            yield "</td>
                                <td>
                                    ";
            // line 166
            if ((0 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "attended", [], "any", false, false, false, 166), 0))) {
                // line 167
                yield "
                                        No
                                    ";
            } else {
                // line 170
                yield "
                                        Yes

                                    ";
            }
            // line 174
            yield "                                </td>
                                <td>
                                    ";
            // line 176
            if ((0 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "payment_status", [], "any", false, false, false, 176), 0))) {
                // line 177
                yield "
                                        <span class=\"text-danger\">Not paid</span>

                                    ";
            } else {
                // line 181
                yield "
                                        <span class=\"text-success\">Paid</span>

                                    ";
            }
            // line 185
            yield "                                </td>

                            </tr>

                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['participant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 190
        yield "                        </tbody>
                    </table>

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
        return "admin/training_session.html.twig";
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
        return array (  365 => 190,  355 => 185,  349 => 181,  343 => 177,  341 => 176,  337 => 174,  331 => 170,  326 => 167,  324 => 166,  319 => 164,  315 => 163,  311 => 162,  307 => 161,  303 => 160,  300 => 159,  296 => 158,  273 => 137,  264 => 133,  258 => 130,  255 => 129,  253 => 128,  247 => 125,  244 => 124,  238 => 120,  232 => 116,  230 => 115,  225 => 113,  222 => 112,  216 => 108,  211 => 105,  209 => 104,  204 => 102,  200 => 101,  196 => 100,  192 => 99,  188 => 98,  185 => 97,  181 => 96,  135 => 53,  121 => 42,  107 => 31,  88 => 15,  82 => 12,  73 => 6,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin_base.html.twig' %}

{% block body %}

    <div class=\"float-right mb-4\">
        <a href=\"{{ path('admin_view_training', {'id': training.id}) }}\" class=\"btn btn-xs btn-warning mt-1\"><i class=\"fa fa-chevron-circle-left\"></i> Back to training</a>

    </div>
    <div class=\"clearfix\"></div>
    <div class=\"card\">
        <div class=\"card-header bg-dark text-white font-white p-3 font-sm-4\">
            {{ training.title }}
        </div>
        <div class=\"card-body \">
            <h3>{{ training_session.name }}</h3>
        </div>


    </div>

    <div class=\"text-center text-danger mx-auto p-3\">Calculations are based on participants/MDAs that attended</div>
    <div class=\"row text-white text-center\">



    <div class=\"col-md-4\">

        <div class=\"card\">
            <div class=\"card-body text-center text-white bg-dark font-white\">
                <b class=\"text-uppercase font-xs\">Total expected payments</b>
                <p class=\"font-lg m-0\">&#8358;{{ total_expected|number_format }}</p>
            </div>
        </div>

    </div>

    <div class=\"col-md-4\">

        <div class=\"card\">
            <div class=\"card-body text-center text-white bg-dark font-white\">
                <b class=\"text-uppercase font-xs\">Total payments received</b>
                <p class=\"font-lg m-0\">&#8358;{{ total_paid|number_format }}</p>
            </div>
        </div>

    </div>

    <div class=\"col-md-4\">

        <div class=\"card\">
            <div class=\"card-body bg-dark text-center text-white font-white\">
                <b class=\"text-uppercase font-xs\">Total outstanding payments</b>
                <p class=\"font-lg m-0\">&#8358;{{ total_outstanding|number_format }}</p>
            </div>
        </div>

    </div>
    </div>


    <div class=\"card\">
        <div class=\"card-header \">
            <ul class=\"nav nav-pills nav-fill\" id=\"pills-tab\" role=\"tablist\">
                <li class=\"nav-item\">
                    <a class=\"nav-link active\" id=\"pills-registered-tab\" data-toggle=\"pill\" href=\"#pills-registered\" role=\"tab\" aria-controls=\"pills-home\" aria-selected=\"true\">Registered participants</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" id=\"pills-attended-tab\" data-toggle=\"pill\" href=\"#pills-attended\" role=\"tab\" aria-controls=\"pills-profile\" aria-selected=\"false\">Participants who attended</a>
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
                            <th>Reg. Date</th>
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
                                <td>{{ participant.date|date('jS F, Y') }}</td>
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

                                        <a href=\"{{ path('user_view_invoice', { 'id':participant.invoice_id }) }}\" class=\"btn btn-primary btn-xs\"><i class=\"fa fa-file-o\"></i> View invoice</a>

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

            </div>

        </div>

    </div>






{% endblock %}", "admin/training_session.html.twig", "C:\\laragon\\www\\training\\templates\\admin\\training_session.html.twig");
    }
}
