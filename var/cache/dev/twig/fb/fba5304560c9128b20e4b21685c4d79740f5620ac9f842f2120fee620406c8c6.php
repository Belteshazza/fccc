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

/* @Twig/Exception/trace.txt.twig */
class __TwigTemplate_268adfb601c7ddeed30023a827e3e7b33ee694d950482d4c7dfd75b65357dd90 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Twig/Exception/trace.txt.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Twig/Exception/trace.txt.twig"));

        // line 1
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["trace"]) || array_key_exists("trace", $context) ? $context["trace"] : (function () { throw new RuntimeError('Variable "trace" does not exist.', 1, $this->source); })()), "function", [], "any", false, false, false, 1)) {
            // line 2
            yield "at ";
            yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["trace"]) || array_key_exists("trace", $context) ? $context["trace"] : (function () { throw new RuntimeError('Variable "trace" does not exist.', 2, $this->source); })()), "class", [], "any", false, false, false, 2) . CoreExtension::getAttribute($this->env, $this->source, (isset($context["trace"]) || array_key_exists("trace", $context) ? $context["trace"] : (function () { throw new RuntimeError('Variable "trace" does not exist.', 2, $this->source); })()), "type", [], "any", false, false, false, 2)) . CoreExtension::getAttribute($this->env, $this->source, (isset($context["trace"]) || array_key_exists("trace", $context) ? $context["trace"] : (function () { throw new RuntimeError('Variable "trace" does not exist.', 2, $this->source); })()), "function", [], "any", false, false, false, 2));
            yield "(";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->formatArgsAsText(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trace"]) || array_key_exists("trace", $context) ? $context["trace"] : (function () { throw new RuntimeError('Variable "trace" does not exist.', 2, $this->source); })()), "args", [], "any", false, false, false, 2));
            yield ")";
        }
        // line 4
        if (( !Twig\Extension\CoreExtension::testEmpty(((CoreExtension::getAttribute($this->env, $this->source, ($context["trace"] ?? null), "file", [], "any", true, true, false, 4)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["trace"] ?? null), "file", [], "any", false, false, false, 4), "")) : (""))) &&  !Twig\Extension\CoreExtension::testEmpty(((CoreExtension::getAttribute($this->env, $this->source, ($context["trace"] ?? null), "line", [], "any", true, true, false, 4)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["trace"] ?? null), "line", [], "any", false, false, false, 4), "")) : (""))))) {
            // line 5
            yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["trace"]) || array_key_exists("trace", $context) ? $context["trace"] : (function () { throw new RuntimeError('Variable "trace" does not exist.', 5, $this->source); })()), "function", [], "any", false, false, false, 5)) ? ("
     (") : ("at "));
            yield Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::striptags($this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->formatFile(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trace"]) || array_key_exists("trace", $context) ? $context["trace"] : (function () { throw new RuntimeError('Variable "trace" does not exist.', 5, $this->source); })()), "file", [], "any", false, false, false, 5), CoreExtension::getAttribute($this->env, $this->source, (isset($context["trace"]) || array_key_exists("trace", $context) ? $context["trace"] : (function () { throw new RuntimeError('Variable "trace" does not exist.', 5, $this->source); })()), "line", [], "any", false, false, false, 5))), [(" at line " . CoreExtension::getAttribute($this->env, $this->source, (isset($context["trace"]) || array_key_exists("trace", $context) ? $context["trace"] : (function () { throw new RuntimeError('Variable "trace" does not exist.', 5, $this->source); })()), "line", [], "any", false, false, false, 5)) => ""]);
            yield ":";
            yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["trace"]) || array_key_exists("trace", $context) ? $context["trace"] : (function () { throw new RuntimeError('Variable "trace" does not exist.', 5, $this->source); })()), "line", [], "any", false, false, false, 5);
            yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["trace"]) || array_key_exists("trace", $context) ? $context["trace"] : (function () { throw new RuntimeError('Variable "trace" does not exist.', 5, $this->source); })()), "function", [], "any", false, false, false, 5)) ? (")") : (""));
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Twig/Exception/trace.txt.twig";
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
        return array (  55 => 5,  53 => 4,  46 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if trace.function %}
at {{ trace.class ~ trace.type ~ trace.function }}({{ trace.args|format_args_as_text }})
{%- endif -%}
{% if trace.file|default('') is not empty and trace.line|default('') is not empty %}
  {{- trace.function ? '\\n     (' : 'at '}}{{ trace.file|format_file(trace.line)|striptags|replace({ (' at line ' ~ trace.line): '' }) }}:{{ trace.line }}{{ trace.function ? ')' }}
{%- endif %}
", "@Twig/Exception/trace.txt.twig", "C:\\laragon\\www\\training\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\trace.txt.twig");
    }
}
