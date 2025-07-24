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

/* admin/invoice.html.twig */
class __TwigTemplate_b98023bdb8b22a4226c8360ae9ad818a3419ea6bfa4f7a829f6fb2577820f23a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/invoice.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/invoice.html.twig"));

        $this->parent = $this->loadTemplate("admin_base.html.twig", "admin/invoice.html.twig", 1);
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
                    <th>MDA</th>
                    <th>Training</th>
                    <th>Payment amount</th>
                    <th>Payment method</th>
                    <th>Payment status</th>
                    <th>Options</th>
                </tr>
                </thead>
                <tbody>

                ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["invoices"]) || array_key_exists("invoices", $context) ? $context["invoices"] : (function () { throw new RuntimeError('Variable "invoices" does not exist.', 27, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["invoice"]) {
            // line 28
            yield "
                    <tr>
                        <td>#";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["invoice"], "id", [], "any", false, false, false, 30), "html", null, true);
            yield "</td>
                        <td>";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["invoice"], "paymentid", [], "any", false, false, false, 31), "html", null, true);
            yield "</td>
                        <td>";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["invoice"], "mda", [], "any", false, false, false, 32), "html", null, true);
            yield "</td>
                        <td>";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["invoice"], "training", [], "any", false, false, false, 33), "title", [], "any", false, false, false, 33), "html", null, true);
            yield "</td>
                        <td>&#8358;";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["invoice"], "paymentamount", [], "any", false, false, false, 34)), "html", null, true);
            yield "</td>
                        <td>";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["invoice"], "paymentmethod", [], "any", false, false, false, 35), "html", null, true);
            yield "</td>
                        <td>
                            ";
            // line 37
            if ((0 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, $context["invoice"], "paymentstatus", [], "any", false, false, false, 37), 0))) {
                // line 38
                yield "
                                <span class=\"text-danger\">Not paid</span>

                            ";
            } elseif ((0 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source,             // line 41
$context["invoice"], "paymentstatus", [], "any", false, false, false, 41), 1))) {
                // line 42
                yield "
                                <span class=\"text-success\">Paid</span>

                            ";
            }
            // line 46
            yield "                        </td>
                        <td>
                            ";
            // line 48
            if ((0 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, $context["invoice"], "paymentstatus", [], "any", false, false, false, 48), "1"))) {
                // line 49
                yield "
                                <a href=\"";
                // line 50
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_view_invoice", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["invoice"], "id", [], "any", false, false, false, 50)]), "html", null, true);
                yield "\" class=\"btn btn-success btn-xs\"><i class=\"fa fa-search\"></i> View Receipt</a>

                            ";
            } else {
                // line 53
                yield "
                                <a href=\"";
                // line 54
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_view_invoice", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["invoice"], "id", [], "any", false, false, false, 54)]), "html", null, true);
                yield "\" class=\"btn btn-info btn-xs\"><i class=\"fa fa-search\"></i> View Invoice</a>

                            ";
            }
            // line 57
            yield "                        </td>
                    </tr>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['invoice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
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
        return "admin/invoice.html.twig";
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
        return array (  175 => 61,  166 => 57,  160 => 54,  157 => 53,  151 => 50,  148 => 49,  146 => 48,  142 => 46,  136 => 42,  134 => 41,  129 => 38,  127 => 37,  122 => 35,  118 => 34,  114 => 33,  110 => 32,  106 => 31,  102 => 30,  98 => 28,  94 => 27,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin_base.html.twig' %}

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
                    <th>MDA</th>
                    <th>Training</th>
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
                        <td>{{ invoice.training.title }}</td>
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

    </div>

{% endblock %}", "admin/invoice.html.twig", "C:\\laragon\\www\\training\\templates\\admin\\invoice.html.twig");
    }
}
