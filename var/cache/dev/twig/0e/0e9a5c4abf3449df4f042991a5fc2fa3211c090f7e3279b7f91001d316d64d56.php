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

/* common/admin/training_details.html.twig */
class __TwigTemplate_457c5a532beb43933239fec7185387100da3d0716bb173516e55ab966a2b94f8 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "common/admin/training_details.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "common/admin/training_details.html.twig"));

        // line 1
        yield "<div class=\"card\">
    <ul class=\"list-group list-group-flush\">
        <li class=\"list-group-item\">
            <b>Venue:</b> ";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["training"]) || array_key_exists("training", $context) ? $context["training"] : (function () { throw new RuntimeError('Variable "training" does not exist.', 4, $this->source); })()), "venue", [], "any", false, false, false, 4), "html", null, true);
        yield "
        </li>

        <li class=\"list-group-item\">
            <b>Date:</b> ";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["training"]) || array_key_exists("training", $context) ? $context["training"] : (function () { throw new RuntimeError('Variable "training" does not exist.', 8, $this->source); })()), "date", [], "any", false, false, false, 8), "l, F j Y"), "html", null, true);
        yield "
        </li>

        <li class=\"list-group-item\">
            <b>Time:</b> ";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["training"]) || array_key_exists("training", $context) ? $context["training"] : (function () { throw new RuntimeError('Variable "training" does not exist.', 12, $this->source); })()), "time", [], "any", false, false, false, 12), "H:i:s"), "html", null, true);
        yield "
        </li>

        <li class=\"list-group-item\">
            <b>Venue:</b> ";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["training"]) || array_key_exists("training", $context) ? $context["training"] : (function () { throw new RuntimeError('Variable "training" does not exist.', 16, $this->source); })()), "venue", [], "any", false, false, false, 16), "html", null, true);
        yield "
        </li>

        <li class=\"list-group-item\">
            <b>MDA Registration Fee:</b> &#8358;";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["training"]) || array_key_exists("training", $context) ? $context["training"] : (function () { throw new RuntimeError('Variable "training" does not exist.', 20, $this->source); })()), "registrationfee", [], "any", false, false, false, 20)), "html", null, true);
        yield "
        </li>

         <li class=\"list-group-item\">
            <b>Individual Amount:</b> &#8358;";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["training"]) || array_key_exists("training", $context) ? $context["training"] : (function () { throw new RuntimeError('Variable "training" does not exist.', 24, $this->source); })()), "individualamount", [], "any", false, false, false, 24)), "html", null, true);
        yield "
        </li>

        <li class=\"list-group-item\">
            <b>Extra personnel Amount:</b> &#8358;";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["training"]) || array_key_exists("training", $context) ? $context["training"] : (function () { throw new RuntimeError('Variable "training" does not exist.', 28, $this->source); })()), "extrapersonnelamount", [], "any", false, false, false, 28)), "html", null, true);
        yield "
        </li>

        <li class=\"list-group-item\">
            <b>Individuals per MDA:</b> ";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["training"]) || array_key_exists("training", $context) ? $context["training"] : (function () { throw new RuntimeError('Variable "training" does not exist.', 32, $this->source); })()), "individualspermda", [], "any", false, false, false, 32)), "html", null, true);
        yield "
        </li>

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
        return "common/admin/training_details.html.twig";
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
        return array (  98 => 32,  91 => 28,  84 => 24,  77 => 20,  70 => 16,  63 => 12,  56 => 8,  49 => 4,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"card\">
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


</div>", "common/admin/training_details.html.twig", "C:\\laragon\\www\\training\\templates\\common\\admin\\training_details.html.twig");
    }
}
