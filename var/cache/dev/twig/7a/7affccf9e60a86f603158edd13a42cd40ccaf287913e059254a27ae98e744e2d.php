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

/* admin/training.html.twig */
class __TwigTemplate_93bc2cf9c64a806785138c5a12f3246f6f2a81e9d5c4d25800700d586cf0410f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/training.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/training.html.twig"));

        $this->parent = $this->loadTemplate("admin_base.html.twig", "admin/training.html.twig", 1);
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
      <div class=\"card-header  align-items-center\">
         <div class=\"float-right\"><a href=\"";
        // line 7
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_add_training");
        yield "\" class=\"btn btn-xs btn-success\"><i class=\"fa fa-plus\"></i> Add new</a></div>
         <h4>All trainings</h4>


      </div>
      <div class=\"card-body\">

         <table id=\"example\" class=\"datatable table display table-striped table-hover\" cellspacing=\"0\" width=\"100%\">
            <thead >
            <tr>
               <th>Title</th>
               <th>Venue</th>
               <th>Date</th>
               <th>Time</th>
                <th>Registration fee</th>
               <th>Individual amount</th>
               <th>Extra personel amount</th>
               <th>Individuals per MDA</th>
                <th>Options</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["trainings"]) || array_key_exists("trainings", $context) ? $context["trainings"] : (function () { throw new RuntimeError('Variable "trainings" does not exist.', 29, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["training"]) {
            // line 30
            yield "                <tr>
                    <td>";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["training"], "title", [], "any", false, false, false, 31), "html", null, true);
            yield "</td>
                    <td>";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["training"], "venue", [], "any", false, false, false, 32), "html", null, true);
            yield "</td>
                    <td>";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["training"], "date", [], "any", false, false, false, 33), "l, F j Y"), "html", null, true);
            yield "</td>
                    <td>";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["training"], "time", [], "any", false, false, false, 34), "H:i:s"), "html", null, true);
            yield "</td>
                    <td>&#8358;";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["training"], "registrationfee", [], "any", false, false, false, 35)), "html", null, true);
            yield "</td>
                    <td>&#8358;";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["training"], "individualamount", [], "any", false, false, false, 36)), "html", null, true);
            yield "</td>
                    <td>&#8358;";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["training"], "extrapersonnelamount", [], "any", false, false, false, 37)), "html", null, true);
            yield "</td>
                    <td>";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["training"], "individualspermda", [], "any", false, false, false, 38), "html", null, true);
            yield "</td>
                    <td>
                        <a href=\"";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_view_training", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["training"], "id", [], "any", false, false, false, 40)]), "html", null, true);
            yield "\" class=\"btn btn-xs btn-primary\"><i class=\"fa fa-search\"></i> View</a>
                        <a href=\"";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_edit_training", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["training"], "id", [], "any", false, false, false, 41)]), "html", null, true);
            yield "\" class=\"btn btn-xs btn-warning mt-1\"><i class=\"fa fa-pencil\"></i> Edit</a>
                        <a href=\"";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_delete_training", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["training"], "id", [], "any", false, false, false, 42)]), "html", null, true);
            yield "\" class=\"btn btn-xs btn-danger mt-1\"><i class=\"fa fa-pencil\"></i> Delete</a>
                        <a href=\"";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_link_training", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["training"], "id", [], "any", false, false, false, 43)]), "html", null, true);
            yield "\" class=\"btn btn-xs btn-success mt-1\"><i class=\"fa fa-link\"></i> Link training</a>
                    </td>
                </tr>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['training'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        yield "            </tbody>
         </table>

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
        return "admin/training.html.twig";
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
        return array (  162 => 48,  151 => 43,  147 => 42,  143 => 41,  139 => 40,  134 => 38,  130 => 37,  126 => 36,  122 => 35,  118 => 34,  114 => 33,  110 => 32,  106 => 31,  103 => 30,  99 => 29,  74 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin_base.html.twig' %}

{% block body %}

   <div class=\"card\">
      <div class=\"card-header  align-items-center\">
         <div class=\"float-right\"><a href=\"{{ path('admin_add_training') }}\" class=\"btn btn-xs btn-success\"><i class=\"fa fa-plus\"></i> Add new</a></div>
         <h4>All trainings</h4>


      </div>
      <div class=\"card-body\">

         <table id=\"example\" class=\"datatable table display table-striped table-hover\" cellspacing=\"0\" width=\"100%\">
            <thead >
            <tr>
               <th>Title</th>
               <th>Venue</th>
               <th>Date</th>
               <th>Time</th>
                <th>Registration fee</th>
               <th>Individual amount</th>
               <th>Extra personel amount</th>
               <th>Individuals per MDA</th>
                <th>Options</th>
            </tr>
            </thead>
            <tbody>
            {% for training in trainings %}
                <tr>
                    <td>{{ training.title }}</td>
                    <td>{{ training.venue }}</td>
                    <td>{{ training.date|date(\"l, F j Y\") }}</td>
                    <td>{{ training.time|date(\"H:i:s\") }}</td>
                    <td>&#8358;{{ training.registrationfee|number_format }}</td>
                    <td>&#8358;{{ training.individualamount|number_format }}</td>
                    <td>&#8358;{{ training.extrapersonnelamount|number_format }}</td>
                    <td>{{ training.individualspermda }}</td>
                    <td>
                        <a href=\"{{ path('admin_view_training', {'id': training.id}) }}\" class=\"btn btn-xs btn-primary\"><i class=\"fa fa-search\"></i> View</a>
                        <a href=\"{{ path('admin_edit_training', {'id': training.id}) }}\" class=\"btn btn-xs btn-warning mt-1\"><i class=\"fa fa-pencil\"></i> Edit</a>
                        <a href=\"{{ path('admin_delete_training', {'id': training.id}) }}\" class=\"btn btn-xs btn-danger mt-1\"><i class=\"fa fa-pencil\"></i> Delete</a>
                        <a href=\"{{ path('admin_link_training', {'id': training.id}) }}\" class=\"btn btn-xs btn-success mt-1\"><i class=\"fa fa-link\"></i> Link training</a>
                    </td>
                </tr>

            {% endfor %}
            </tbody>
         </table>

      </div>
   </div>



{% endblock %}", "admin/training.html.twig", "C:\\laragon\\www\\training\\templates\\admin\\training.html.twig");
    }
}
