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

/* common/admin/training_financials.html.twig */
class __TwigTemplate_a2c219c7138d42d93c622c2c71531b2e02519667c59a983670b1bcbf9d26be0a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "common/admin/training_financials.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "common/admin/training_financials.html.twig"));

        // line 1
        yield "<div class=\"row text-white text-center\">


    <div class=\"col-md-4\">

        <div class=\"card\">
            <div class=\"card-body text-center text-white bg-dark font-white\">
                <b class=\"text-uppercase font-xs\">Total expected payments</b>
                <p class=\"font-lg m-0\">&#8358;";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["total_payment"]) || array_key_exists("total_payment", $context) ? $context["total_payment"] : (function () { throw new RuntimeError('Variable "total_payment" does not exist.', 9, $this->source); })())), "html", null, true);
        yield "</p>
            </div>
        </div>

    </div>

    <div class=\"col-md-4\">

        <div class=\"card\">
            <div class=\"card-body text-center text-white bg-dark font-white\">
                <b class=\"text-uppercase font-xs\">Total payments received</b>
                <p class=\"font-lg m-0\">&#8358;";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((((isset($context["total_online_payment"]) || array_key_exists("total_online_payment", $context) ? $context["total_online_payment"] : (function () { throw new RuntimeError('Variable "total_online_payment" does not exist.', 20, $this->source); })()) + (isset($context["total_cash_payment"]) || array_key_exists("total_cash_payment", $context) ? $context["total_cash_payment"] : (function () { throw new RuntimeError('Variable "total_cash_payment" does not exist.', 20, $this->source); })())) + (isset($context["total_bank_payment"]) || array_key_exists("total_bank_payment", $context) ? $context["total_bank_payment"] : (function () { throw new RuntimeError('Variable "total_bank_payment" does not exist.', 20, $this->source); })()))), "html", null, true);
        yield "</p>
            </div>
        </div>

    </div>

    <div class=\"col-md-4\">

        <div class=\"card\">
            <div class=\"card-body bg-dark text-center text-white font-white\">
                <b class=\"text-uppercase font-xs\">Total outstanding payments</b>
                <p class=\"font-lg m-0\">&#8358;";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["total_outstanding_payment"]) || array_key_exists("total_outstanding_payment", $context) ? $context["total_outstanding_payment"] : (function () { throw new RuntimeError('Variable "total_outstanding_payment" does not exist.', 31, $this->source); })())), "html", null, true);
        yield "</p>
            </div>
        </div>

    </div>

    <div class=\"col-md-4\">

        <div class=\"card\">
            <div class=\"card-body bg-orange text-white font-white\">
                <b class=\"text-uppercase font-xs\">Total online payments</b>
                <p class=\"font-lg m-0\">&#8358;";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["total_online_payment"]) || array_key_exists("total_online_payment", $context) ? $context["total_online_payment"] : (function () { throw new RuntimeError('Variable "total_online_payment" does not exist.', 42, $this->source); })())), "html", null, true);
        yield "</p>
            </div>
        </div>

    </div>
    <div class=\"col-md-4\">

        <div class=\"card\">
            <div class=\"card-body bg-green text-white font-white\">
                <b class=\"text-uppercase font-xs\">Total cash payments</b>
                <p class=\"font-lg m-0\">&#8358;";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["total_cash_payment"]) || array_key_exists("total_cash_payment", $context) ? $context["total_cash_payment"] : (function () { throw new RuntimeError('Variable "total_cash_payment" does not exist.', 52, $this->source); })())), "html", null, true);
        yield "</p>
            </div>
        </div>

    </div>
    <div class=\"col-md-4\">

        <div class=\"card\">
            <div class=\"card-body bg-blue text-white font-white\">
                <b class=\"text-uppercase font-xs\">Total bank payments</b>
                <p class=\"font-lg m-0\">&#8358;";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["total_bank_payment"]) || array_key_exists("total_bank_payment", $context) ? $context["total_bank_payment"] : (function () { throw new RuntimeError('Variable "total_bank_payment" does not exist.', 62, $this->source); })())), "html", null, true);
        yield "</p>
            </div>
        </div>

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
                <th>MDA</th>
                <th>Payment amount</th>
                <th>Payment method</th>
                <th>Payment status</th>
                <th>Options</th>
            </tr>
            </thead>
            <tbody>

            ";
        // line 93
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["invoices"]) || array_key_exists("invoices", $context) ? $context["invoices"] : (function () { throw new RuntimeError('Variable "invoices" does not exist.', 93, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["invoice"]) {
            // line 94
            yield "
                <tr>
                    <td>#";
            // line 96
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["invoice"], "id", [], "any", false, false, false, 96), "html", null, true);
            yield "</td>
                    <td>";
            // line 97
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["invoice"], "paymentid", [], "any", false, false, false, 97), "html", null, true);
            yield "</td>
                    <td>";
            // line 98
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["invoice"], "mda", [], "any", false, false, false, 98), "html", null, true);
            yield "</td>
                    <td>&#8358;";
            // line 99
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["invoice"], "paymentamount", [], "any", false, false, false, 99)), "html", null, true);
            yield "</td>
                    <td>";
            // line 100
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["invoice"], "paymentmethod", [], "any", false, false, false, 100), "html", null, true);
            yield "</td>
                    <td>
                        ";
            // line 102
            if ((0 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, $context["invoice"], "paymentstatus", [], "any", false, false, false, 102), 0))) {
                // line 103
                yield "
                            <span class=\"text-danger\">Not paid</span>

                        ";
            } elseif ((0 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source,             // line 106
$context["invoice"], "paymentstatus", [], "any", false, false, false, 106), 1))) {
                // line 107
                yield "
                            <span class=\"text-success\">Paid</span>

                        ";
            }
            // line 111
            yield "                    </td>
                    <td>
                        ";
            // line 113
            if ((0 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, $context["invoice"], "paymentstatus", [], "any", false, false, false, 113), "1"))) {
                // line 114
                yield "
                            <a href=\"";
                // line 115
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_view_invoice", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["invoice"], "id", [], "any", false, false, false, 115)]), "html", null, true);
                yield "\" class=\"btn btn-success btn-xs\"><i class=\"fa fa-search\"></i> View Receipt</a>

                        ";
            } else {
                // line 118
                yield "
                            <a href=\"";
                // line 119
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_view_invoice", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["invoice"], "id", [], "any", false, false, false, 119)]), "html", null, true);
                yield "\" class=\"btn btn-info btn-xs\"><i class=\"fa fa-search\"></i> View Invoice</a>

                        ";
            }
            // line 122
            yield "                    </td>
                </tr>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['invoice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        yield "
            </tbody>
        </table>

    </div>






    </ul>

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
        return "common/admin/training_financials.html.twig";
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
        return array (  233 => 126,  224 => 122,  218 => 119,  215 => 118,  209 => 115,  206 => 114,  204 => 113,  200 => 111,  194 => 107,  192 => 106,  187 => 103,  185 => 102,  180 => 100,  176 => 99,  172 => 98,  168 => 97,  164 => 96,  160 => 94,  156 => 93,  122 => 62,  109 => 52,  96 => 42,  82 => 31,  68 => 20,  54 => 9,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row text-white text-center\">


    <div class=\"col-md-4\">

        <div class=\"card\">
            <div class=\"card-body text-center text-white bg-dark font-white\">
                <b class=\"text-uppercase font-xs\">Total expected payments</b>
                <p class=\"font-lg m-0\">&#8358;{{ total_payment|number_format }}</p>
            </div>
        </div>

    </div>

    <div class=\"col-md-4\">

        <div class=\"card\">
            <div class=\"card-body text-center text-white bg-dark font-white\">
                <b class=\"text-uppercase font-xs\">Total payments received</b>
                <p class=\"font-lg m-0\">&#8358;{{ (total_online_payment + total_cash_payment + total_bank_payment)|number_format }}</p>
            </div>
        </div>

    </div>

    <div class=\"col-md-4\">

        <div class=\"card\">
            <div class=\"card-body bg-dark text-center text-white font-white\">
                <b class=\"text-uppercase font-xs\">Total outstanding payments</b>
                <p class=\"font-lg m-0\">&#8358;{{ total_outstanding_payment|number_format }}</p>
            </div>
        </div>

    </div>

    <div class=\"col-md-4\">

        <div class=\"card\">
            <div class=\"card-body bg-orange text-white font-white\">
                <b class=\"text-uppercase font-xs\">Total online payments</b>
                <p class=\"font-lg m-0\">&#8358;{{ total_online_payment|number_format }}</p>
            </div>
        </div>

    </div>
    <div class=\"col-md-4\">

        <div class=\"card\">
            <div class=\"card-body bg-green text-white font-white\">
                <b class=\"text-uppercase font-xs\">Total cash payments</b>
                <p class=\"font-lg m-0\">&#8358;{{ total_cash_payment|number_format }}</p>
            </div>
        </div>

    </div>
    <div class=\"col-md-4\">

        <div class=\"card\">
            <div class=\"card-body bg-blue text-white font-white\">
                <b class=\"text-uppercase font-xs\">Total bank payments</b>
                <p class=\"font-lg m-0\">&#8358;{{ total_bank_payment|number_format }}</p>
            </div>
        </div>

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
                <th>MDA</th>
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
                    <td>{{ invoice.mda }}</td>
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

                            <a href=\"{{ path('admin_view_invoice', { 'id':invoice.id }) }}\" class=\"btn btn-success btn-xs\"><i class=\"fa fa-search\"></i> View Receipt</a>

                        {% else %}

                            <a href=\"{{ path('admin_view_invoice', { 'id':invoice.id }) }}\" class=\"btn btn-info btn-xs\"><i class=\"fa fa-search\"></i> View Invoice</a>

                        {% endif %}
                    </td>
                </tr>

            {% endfor %}

            </tbody>
        </table>

    </div>






    </ul>

</div>", "common/admin/training_financials.html.twig", "C:\\laragon\\www\\training\\templates\\common\\admin\\training_financials.html.twig");
    }
}
