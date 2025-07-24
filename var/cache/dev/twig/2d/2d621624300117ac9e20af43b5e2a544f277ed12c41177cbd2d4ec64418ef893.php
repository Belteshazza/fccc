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

/* user/view_training.html.twig */
class __TwigTemplate_53e9f187ecd0958767dc449e4a30edfae314cff492ce185892a4546cade0fa1c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/view_training.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/view_training.html.twig"));

        $this->parent = $this->loadTemplate("user_base.html.twig", "user/view_training.html.twig", 1);
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

        <div class=\"card-body bg-dark font-white\">
            <h2 class=\"mb-0\">";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["training"]) || array_key_exists("training", $context) ? $context["training"] : (function () { throw new RuntimeError('Variable "training" does not exist.', 10, $this->source); })()), "title", [], "any", false, false, false, 10), "html", null, true);
        yield "</h2>
        </div>
        <ul class=\"list-group list-group-flush\">
            <li class=\"list-group-item\">
                <b>Venue:</b> ";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["training"]) || array_key_exists("training", $context) ? $context["training"] : (function () { throw new RuntimeError('Variable "training" does not exist.', 14, $this->source); })()), "venue", [], "any", false, false, false, 14), "html", null, true);
        yield "
            </li>

            <li class=\"list-group-item\">
                <b>Date:</b> ";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["training"]) || array_key_exists("training", $context) ? $context["training"] : (function () { throw new RuntimeError('Variable "training" does not exist.', 18, $this->source); })()), "date", [], "any", false, false, false, 18), "l, F j Y"), "html", null, true);
        yield "
            </li>

            <li class=\"list-group-item\">
                <b>Time:</b> ";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["training"]) || array_key_exists("training", $context) ? $context["training"] : (function () { throw new RuntimeError('Variable "training" does not exist.', 22, $this->source); })()), "time", [], "any", false, false, false, 22), "H:i:s"), "html", null, true);
        yield "
            </li>

            <li class=\"list-group-item\">
                <b>Venue:</b> ";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["training"]) || array_key_exists("training", $context) ? $context["training"] : (function () { throw new RuntimeError('Variable "training" does not exist.', 26, $this->source); })()), "venue", [], "any", false, false, false, 26), "html", null, true);
        yield "
            </li>

            <li class=\"list-group-item\">
                <b>MDA Registration Fee:</b> &#8358;";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["training"]) || array_key_exists("training", $context) ? $context["training"] : (function () { throw new RuntimeError('Variable "training" does not exist.', 30, $this->source); })()), "registrationfee", [], "any", false, false, false, 30)), "html", null, true);
        yield "
            </li>

            <li class=\"list-group-item\">
                <b>Individual Amount:</b> &#8358;";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["training"]) || array_key_exists("training", $context) ? $context["training"] : (function () { throw new RuntimeError('Variable "training" does not exist.', 34, $this->source); })()), "individualamount", [], "any", false, false, false, 34)), "html", null, true);
        yield "
            </li>

            <li class=\"list-group-item\">
                <b>Extra personnel Amount:</b> &#8358;";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["training"]) || array_key_exists("training", $context) ? $context["training"] : (function () { throw new RuntimeError('Variable "training" does not exist.', 38, $this->source); })()), "extrapersonnelamount", [], "any", false, false, false, 38)), "html", null, true);
        yield "
            </li>

            <li class=\"list-group-item\">
                <b>Individuals per MDA:</b> ";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["training"]) || array_key_exists("training", $context) ? $context["training"] : (function () { throw new RuntimeError('Variable "training" does not exist.', 42, $this->source); })()), "individualspermda", [], "any", false, false, false, 42)), "html", null, true);
        yield "
            </li>

        </ul>

    </div>



             <div class=\"card\">
                 <div class=\"card-header\">
                     <a href=\"";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_training_apply", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["training"]) || array_key_exists("training", $context) ? $context["training"] : (function () { throw new RuntimeError('Variable "training" does not exist.', 53, $this->source); })()), "id", [], "any", false, false, false, 53)]), "html", null, true);
        yield "\" class=\"btn btn-xs float-right btn-success\"><i class=\"fa fa-plus\"></i> Add more participants</a>
                     Registered participants
                 </div>
                 <div class=\"card-body\">

                     <table id=\"example\" class=\"datatable table display table-bordered table-striped table-hover\" cellspacing=\"0\" width=\"100%\">
                         <thead >
                         <tr>
                             <th>Name</th>
                             <th>Email</th>
                             <th>Phone</th>
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
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["training_participants"]) || array_key_exists("training_participants", $context) ? $context["training_participants"] : (function () { throw new RuntimeError('Variable "training_participants" does not exist.', 73, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["participant"]) {
            // line 74
            yield "                             <tr>
                                 <td>";
            // line 75
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "name", [], "any", false, false, false, 75), "html", null, true);
            yield "</td>
                                 <td>";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "email", [], "any", false, false, false, 76), "html", null, true);
            yield "</td>
                                 <td>";
            // line 77
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "phone", [], "any", false, false, false, 77), "html", null, true);
            yield "</td>
                                 <td>";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "session", [], "any", false, false, false, 78), "html", null, true);
            yield "</td>
                                 <td>
                                  ";
            // line 80
            if ((0 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "attended", [], "any", false, false, false, 80), 0))) {
                // line 81
                yield "
                                      No
                                  ";
            } else {
                // line 84
                yield "
                                      Yes

                                  ";
            }
            // line 88
            yield "                                 </td>
                                 <td>";
            // line 89
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "date", [], "any", false, false, false, 89), "jS F, Y"), "html", null, true);
            yield "</td>
                                 <td>
                                     ";
            // line 91
            if ((0 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "payment_status", [], "any", false, false, false, 91), 0))) {
                // line 92
                yield "
                                         <span class=\"text-danger\">Not paid</span>

                                     ";
            } else {
                // line 96
                yield "
                                         <span class=\"text-success\">Paid</span>

                                     ";
            }
            // line 100
            yield "                                 </td>
                                 <td>#";
            // line 101
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "invoice_id", [], "any", false, false, false, 101), "html", null, true);
            yield "</td>
                                 <td>

                                     ";
            // line 104
            if ((0 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "payment_status", [], "any", false, false, false, 104), 0))) {
                // line 105
                yield "
                                       <a href=\"";
                // line 106
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_view_invoice", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "invoice_id", [], "any", false, false, false, 106)]), "html", null, true);
                yield "\" class=\"btn btn-primary btn-xs\"><i class=\"fa fa-file-o\"></i> View invoice</a>

                                     ";
            }
            // line 109
            yield "                                 </td>
                             </tr>

                         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['participant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        yield "                         </tbody>
                     </table>

                 </div>
             </div>



            <div class=\"card\">
                <div class=\"card-header\">
                    Invoice(s)
                </div>

                <div class=\"card-body\">

                    <table id=\"example\" class=\"datatable table display table-bordered table-striped table-hover\" cellspacing=\"0\" width=\"100%\">
                        <thead >
                        <tr>
                            <th>Invoice ID</th>
                            <th>Payment ID</th>
                            <th>Payment amount</th>
                            <th>Payment method</th>
                            <th>Payment status</th>
                            <th>Options</th>
                        </tr>
                        </thead>
                        <tbody>

                        ";
        // line 141
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["invoices"]) || array_key_exists("invoices", $context) ? $context["invoices"] : (function () { throw new RuntimeError('Variable "invoices" does not exist.', 141, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["invoice"]) {
            // line 142
            yield "
                        <tr>
                            <td>#";
            // line 144
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["invoice"], "id", [], "any", false, false, false, 144), "html", null, true);
            yield "</td>
                            <td>";
            // line 145
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["invoice"], "paymentid", [], "any", false, false, false, 145), "html", null, true);
            yield "</td>
                            <td>&#8358;";
            // line 146
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["invoice"], "paymentamount", [], "any", false, false, false, 146)), "html", null, true);
            yield "</td>
                            <td>";
            // line 147
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["invoice"], "paymentmethod", [], "any", false, false, false, 147), "html", null, true);
            yield "</td>
                            <td>
                                ";
            // line 149
            if ((0 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, $context["invoice"], "paymentstatus", [], "any", false, false, false, 149), 0))) {
                // line 150
                yield "
                                    <span class=\"text-danger\">Not paid</span>

                                ";
            } elseif ((0 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source,             // line 153
$context["invoice"], "paymentstatus", [], "any", false, false, false, 153), 1))) {
                // line 154
                yield "
                                    <span class=\"text-success\">Paid</span>

                                ";
            }
            // line 158
            yield "                            </td>
                            <td>
                                ";
            // line 160
            if ((0 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, $context["invoice"], "paymentstatus", [], "any", false, false, false, 160), "1"))) {
                // line 161
                yield "
                                    <a href=\"";
                // line 162
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_view_invoice", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["invoice"], "id", [], "any", false, false, false, 162)]), "html", null, true);
                yield "\" class=\"btn btn-success btn-xs\"><i class=\"fa fa-search\"></i> View Receipt</a>

                                    ";
            } else {
                // line 165
                yield "
                                <a href=\"";
                // line 166
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_view_invoice", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["invoice"], "id", [], "any", false, false, false, 166)]), "html", null, true);
                yield "\" class=\"btn btn-info btn-xs\"><i class=\"fa fa-search\"></i> View Invoice</a>

                                ";
            }
            // line 169
            yield "                            </td>
                        </tr>

                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['invoice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 173
        yield "
                        </tbody>
                    </table>

                </div>






                </ul>

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
        return "user/view_training.html.twig";
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
        return array (  361 => 173,  352 => 169,  346 => 166,  343 => 165,  337 => 162,  334 => 161,  332 => 160,  328 => 158,  322 => 154,  320 => 153,  315 => 150,  313 => 149,  308 => 147,  304 => 146,  300 => 145,  296 => 144,  292 => 142,  288 => 141,  258 => 113,  249 => 109,  243 => 106,  240 => 105,  238 => 104,  232 => 101,  229 => 100,  223 => 96,  217 => 92,  215 => 91,  210 => 89,  207 => 88,  201 => 84,  196 => 81,  194 => 80,  189 => 78,  185 => 77,  181 => 76,  177 => 75,  174 => 74,  170 => 73,  147 => 53,  133 => 42,  126 => 38,  119 => 34,  112 => 30,  105 => 26,  98 => 22,  91 => 18,  84 => 14,  77 => 10,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends'user_base.html.twig' %}

{% block body %}



    <div class=\"card\">

        <div class=\"card-body bg-dark font-white\">
            <h2 class=\"mb-0\">{{ training.title }}</h2>
        </div>
        <ul class=\"list-group list-group-flush\">
            <li class=\"list-group-item\">
                <b>Venue:</b> {{ training.venue }}
            </li>

            <li class=\"list-group-item\">
                <b>Date:</b> {{ training.date|date(\"l, F j Y\") }}
            </li>

            <li class=\"list-group-item\">
                <b>Time:</b> {{ training.time|date(\"H:i:s\") }}
            </li>

            <li class=\"list-group-item\">
                <b>Venue:</b> {{ training.venue }}
            </li>

            <li class=\"list-group-item\">
                <b>MDA Registration Fee:</b> &#8358;{{ training.registrationfee|number_format }}
            </li>

            <li class=\"list-group-item\">
                <b>Individual Amount:</b> &#8358;{{ training.individualamount|number_format }}
            </li>

            <li class=\"list-group-item\">
                <b>Extra personnel Amount:</b> &#8358;{{ training.extrapersonnelamount|number_format }}
            </li>

            <li class=\"list-group-item\">
                <b>Individuals per MDA:</b> {{ training.individualspermda|number_format }}
            </li>

        </ul>

    </div>



             <div class=\"card\">
                 <div class=\"card-header\">
                     <a href=\"{{ path('user_training_apply', { 'id':training.id }) }}\" class=\"btn btn-xs float-right btn-success\"><i class=\"fa fa-plus\"></i> Add more participants</a>
                     Registered participants
                 </div>
                 <div class=\"card-body\">

                     <table id=\"example\" class=\"datatable table display table-bordered table-striped table-hover\" cellspacing=\"0\" width=\"100%\">
                         <thead >
                         <tr>
                             <th>Name</th>
                             <th>Email</th>
                             <th>Phone</th>
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
             </div>



            <div class=\"card\">
                <div class=\"card-header\">
                    Invoice(s)
                </div>

                <div class=\"card-body\">

                    <table id=\"example\" class=\"datatable table display table-bordered table-striped table-hover\" cellspacing=\"0\" width=\"100%\">
                        <thead >
                        <tr>
                            <th>Invoice ID</th>
                            <th>Payment ID</th>
                            <th>Payment amount</th>
                            <th>Payment method</th>
                            <th>Payment status</th>
                            <th>Options</th>
                        </tr>
                        </thead>
                        <tbody>

                        {% for invoice in invoices %}

                        <tr>
                            <td>#{{ invoice.id }}</td>
                            <td>{{ invoice.paymentid }}</td>
                            <td>&#8358;{{ invoice.paymentamount|number_format }}</td>
                            <td>{{ invoice.paymentmethod }}</td>
                            <td>
                                {% if invoice.paymentstatus == 0 %}

                                    <span class=\"text-danger\">Not paid</span>

                                {% elseif invoice.paymentstatus == 1 %}

                                    <span class=\"text-success\">Paid</span>

                                {% endif %}
                            </td>
                            <td>
                                {% if invoice.paymentstatus == '1' %}

                                    <a href=\"{{ path('user_view_invoice', { 'id':invoice.id }) }}\" class=\"btn btn-success btn-xs\"><i class=\"fa fa-search\"></i> View Receipt</a>

                                    {% else %}

                                <a href=\"{{ path('user_view_invoice', { 'id':invoice.id }) }}\" class=\"btn btn-info btn-xs\"><i class=\"fa fa-search\"></i> View Invoice</a>

                                {% endif %}
                            </td>
                        </tr>

                        {% endfor %}

                        </tbody>
                    </table>

                </div>






                </ul>

            </div>





{% endblock %}", "user/view_training.html.twig", "C:\\laragon\\www\\training\\templates\\user\\view_training.html.twig");
    }
}
