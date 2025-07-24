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

/* common/user/my_trainings.html.twig */
class __TwigTemplate_957d6a128ad316ed5f87f87ebfd577032a9e995bec8cbbed988dd521993e72ac extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "common/user/my_trainings.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "common/user/my_trainings.html.twig"));

        // line 1
        yield "<table id=\"example\" class=\"datatable table display table-striped table-hover\" cellspacing=\"0\" width=\"100%\">
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
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["trainings_applied"]) || array_key_exists("trainings_applied", $context) ? $context["trainings_applied"] : (function () { throw new RuntimeError('Variable "trainings_applied" does not exist.', 16, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["training"]) {
            // line 17
            yield "        <tr>
            <td>";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["training"], "title", [], "any", false, false, false, 18), "html", null, true);
            yield "</td>
            <td>";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["training"], "venue", [], "any", false, false, false, 19), "html", null, true);
            yield "</td>
            <td>";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["training"], "date", [], "any", false, false, false, 20), "l, F j Y"), "html", null, true);
            yield "</td>
            <td>";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["training"], "time", [], "any", false, false, false, 21), "H:i:s"), "html", null, true);
            yield "</td>
            <td>&#8358;";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["training"], "registrationfee", [], "any", false, false, false, 22)), "html", null, true);
            yield "</td>
            <td>&#8358;";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["training"], "individualamount", [], "any", false, false, false, 23)), "html", null, true);
            yield "</td>
            <td>&#8358;";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["training"], "extrapersonnelamount", [], "any", false, false, false, 24)), "html", null, true);
            yield "</td>
            <td>";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["training"], "individualspermda", [], "any", false, false, false, 25), "html", null, true);
            yield "</td>
            <td>
                <a href=\"";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_view_training", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["training"], "id", [], "any", false, false, false, 27)]), "html", null, true);
            yield "\" class=\"btn btn-xs btn-primary\"><i class=\"fa fa-search\"></i> View</a>

            </td>
        </tr>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['training'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        yield "    </tbody>
</table>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "common/user/my_trainings.html.twig";
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
        return array (  113 => 33,  101 => 27,  96 => 25,  92 => 24,  88 => 23,  84 => 22,  80 => 21,  76 => 20,  72 => 19,  68 => 18,  65 => 17,  61 => 16,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<table id=\"example\" class=\"datatable table display table-striped table-hover\" cellspacing=\"0\" width=\"100%\">
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
    {% for training in trainings_applied %}
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
                <a href=\"{{ path('user_view_training', { 'id':training.id }) }}\" class=\"btn btn-xs btn-primary\"><i class=\"fa fa-search\"></i> View</a>

            </td>
        </tr>

    {% endfor %}
    </tbody>
</table>", "common/user/my_trainings.html.twig", "C:\\laragon\\www\\training\\templates\\common\\user\\my_trainings.html.twig");
    }
}
