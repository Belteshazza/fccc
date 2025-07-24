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

/* admin/mdas.html.twig */
class __TwigTemplate_0f8e316d63642bf775120ed67beee031a01e346a0ef0a17b54da26f445e6b3e2 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/mdas.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/mdas.html.twig"));

        $this->parent = $this->loadTemplate("admin_base.html.twig", "admin/mdas.html.twig", 1);
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
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_mda");
        yield "\" class=\"btn btn-xs btn-primary\"><i class=\"fa fa-plus\"></i> Add new</a></div>
                <h4>All MDAs</h4>


            </div>
            <div class=\"card-body\">

                <table id=\"example\" class=\"datatable table display table-striped table-hover\" cellspacing=\"0\" width=\"100%\">
                    <thead >
                    <tr>
                        <th>MDA Code</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Participants registered</th>

                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["mdas"]) || array_key_exists("mdas", $context) ? $context["mdas"] : (function () { throw new RuntimeError('Variable "mdas" does not exist.', 27, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["mda"]) {
            // line 28
            yield "                        <tr>
                            <td>";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["mda"], "mda_code", [], "any", false, false, false, 29), "html", null, true);
            yield "</td>
                            <td>";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["mda"], "name", [], "any", false, false, false, 30), "html", null, true);
            yield "</td>
                            <td>";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["mda"], "email", [], "any", false, false, false, 31), "html", null, true);
            yield "</td>
                            <td>";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["mda"], "phone", [], "any", false, false, false, 32), "html", null, true);
            yield "</td>
                            <td>";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["mda"], "address", [], "any", false, false, false, 33), "html", null, true);
            yield "</td>
                            <td><a href=\"";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_edit_mda", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["mda"], "id", [], "any", false, false, false, 34)]), "html", null, true);
            yield "\" class=\"btn btn-xs btn-warning\"><i class=\"fa fa-pencil\"></i> Edit</a></td>
                        </tr>

                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mda'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        yield "                    </tbody>
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
        return "admin/mdas.html.twig";
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
        return array (  134 => 38,  124 => 34,  120 => 33,  116 => 32,  112 => 31,  108 => 30,  104 => 29,  101 => 28,  97 => 27,  74 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin_base.html.twig' %}

{% block body %}

    <div class=\"card\">
            <div class=\"card-header  align-items-center\">
                <div class=\"float-right\"><a href=\"{{ path('add_mda') }}\" class=\"btn btn-xs btn-primary\"><i class=\"fa fa-plus\"></i> Add new</a></div>
                <h4>All MDAs</h4>


            </div>
            <div class=\"card-body\">

                <table id=\"example\" class=\"datatable table display table-striped table-hover\" cellspacing=\"0\" width=\"100%\">
                    <thead >
                    <tr>
                        <th>MDA Code</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Participants registered</th>

                    </tr>
                    </thead>
                    <tbody>
                    {% for mda in mdas %}
                        <tr>
                            <td>{{ mda.mda_code }}</td>
                            <td>{{ mda.name }}</td>
                            <td>{{ mda.email }}</td>
                            <td>{{ mda.phone }}</td>
                            <td>{{ mda.address }}</td>
                            <td><a href=\"{{ path('admin_edit_mda', { 'id':mda.id }) }}\" class=\"btn btn-xs btn-warning\"><i class=\"fa fa-pencil\"></i> Edit</a></td>
                        </tr>

                    {% endfor %}
                    </tbody>
                </table>

            </div>
    </div>



{% endblock %}", "admin/mdas.html.twig", "C:\\laragon\\www\\training\\templates\\admin\\mdas.html.twig");
    }
}
