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

/* user/invoice.html.twig */
class __TwigTemplate_afd43a51e167ff6ab68aa733fb8c64a9ad177d08179173764dd153d2d40cc113 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/invoice.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/invoice.html.twig"));

        $this->parent = $this->loadTemplate("user_base.html.twig", "user/invoice.html.twig", 1);
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
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["invoices"]) || array_key_exists("invoices", $context) ? $context["invoices"] : (function () { throw new RuntimeError('Variable "invoices" does not exist.', 25, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["invoice"]) {
            // line 26
            yield "
                    <tr>
                        <td>#";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["invoice"], "id", [], "any", false, false, false, 28), "html", null, true);
            yield "</td>
                        <td>";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["invoice"], "paymentid", [], "any", false, false, false, 29), "html", null, true);
            yield "</td>
                        <td>&#8358;";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["invoice"], "paymentamount", [], "any", false, false, false, 30)), "html", null, true);
            yield "</td>
                        <td>";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["invoice"], "paymentmethod", [], "any", false, false, false, 31), "html", null, true);
            yield "</td>
                        <td>
                            ";
            // line 33
            if ((0 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, $context["invoice"], "paymentstatus", [], "any", false, false, false, 33), 0))) {
                // line 34
                yield "
                                <span class=\"font-danger\">Not paid</span>

                            ";
            } elseif ((0 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source,             // line 37
$context["invoice"], "paymentstatus", [], "any", false, false, false, 37), 1))) {
                // line 38
                yield "
                                <span class=\"font-success\">Paid</span>

                            ";
            }
            // line 42
            yield "                        </td>
                        <td>
                            <a href=\"";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_view_invoice", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["invoice"], "id", [], "any", false, false, false, 44)]), "html", null, true);
            yield "\" class=\"btn btn-info btn-xs\"><i class=\"fa fa-search\"></i> View Invoice</a>
                        </td>
                    </tr>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['invoice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
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
        return "user/invoice.html.twig";
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
        return array (  147 => 49,  136 => 44,  132 => 42,  126 => 38,  124 => 37,  119 => 34,  117 => 33,  112 => 31,  108 => 30,  104 => 29,  100 => 28,  96 => 26,  92 => 25,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'user_base.html.twig' %}

{% block body %}

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

                                <span class=\"font-danger\">Not paid</span>

                            {% elseif invoice.paymentstatus == 1 %}

                                <span class=\"font-success\">Paid</span>

                            {% endif %}
                        </td>
                        <td>
                            <a href=\"{{ path('user_view_invoice', { 'id':invoice.id }) }}\" class=\"btn btn-info btn-xs\"><i class=\"fa fa-search\"></i> View Invoice</a>
                        </td>
                    </tr>

                {% endfor %}

                </tbody>
            </table>

        </div>






        </ul>

    </div>

{% endblock %}", "user/invoice.html.twig", "C:\\laragon\\www\\training\\templates\\user\\invoice.html.twig");
    }
}
