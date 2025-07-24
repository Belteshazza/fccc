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

/* @Twig/Exception/traces_text.html.twig */
class __TwigTemplate_4a40f42f79420badb34adeec06bdb33ee2684bea1edc688347944f09b3f204eb extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Twig/Exception/traces_text.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Twig/Exception/traces_text.html.twig"));

        // line 1
        yield "<table class=\"trace trace-as-text\">
    <thead class=\"trace-head\">
        <tr>
            <th class=\"sf-toggle\" data-toggle-selector=\"#trace-text-";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 4, $this->source); })()), "html", null, true);
        yield "\" data-toggle-initial=\"";
        yield (((0 === CoreExtension::compare(1, (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 4, $this->source); })())))) ? ("display") : (""));
        yield "\">
                <h3 class=\"trace-class\">
                    ";
        // line 6
        if ((1 === CoreExtension::compare((isset($context["num_exceptions"]) || array_key_exists("num_exceptions", $context) ? $context["num_exceptions"] : (function () { throw new RuntimeError('Variable "num_exceptions" does not exist.', 6, $this->source); })()), 1))) {
            // line 7
            yield "                        <span class=\"text-muted\">[";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((isset($context["num_exceptions"]) || array_key_exists("num_exceptions", $context) ? $context["num_exceptions"] : (function () { throw new RuntimeError('Variable "num_exceptions" does not exist.', 7, $this->source); })()) - (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 7, $this->source); })())) + 1), "html", null, true);
            yield "/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["num_exceptions"]) || array_key_exists("num_exceptions", $context) ? $context["num_exceptions"] : (function () { throw new RuntimeError('Variable "num_exceptions" does not exist.', 7, $this->source); })()), "html", null, true);
            yield "]</span>
                    ";
        }
        // line 9
        yield "                    ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::last($this->env->getCharset(), Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new RuntimeError('Variable "exception" does not exist.', 9, $this->source); })()), "class", [], "any", false, false, false, 9), "\\")), "html", null, true);
        yield "
                    <span class=\"icon icon-close\">";
        // line 10
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@Twig/images/icon-minus-square-o.svg");
        yield "</span>
                    <span class=\"icon icon-open\">";
        // line 11
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@Twig/images/icon-plus-square-o.svg");
        yield "</span>
                </h3>
            </th>
        </tr>
    </thead>

    <tbody id=\"trace-text-";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 17, $this->source); })()), "html", null, true);
        yield "\">
        <tr>
            <td>
                ";
        // line 20
        if (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new RuntimeError('Variable "exception" does not exist.', 20, $this->source); })()), "trace", [], "any", false, false, false, 20))) {
            // line 21
            yield "                <pre class=\"stacktrace\">";
            // line 22
            $___internal_parse_0_ = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 23
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@Twig/Exception/traces.txt.twig", ["exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new RuntimeError('Variable "exception" does not exist.', 23, $this->source); })()), "format" => "html"], false);
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($___internal_parse_0_, "html");
            // line 25
            yield "</pre>
                ";
        }
        // line 27
        yield "            </td>
        </tr>
    </tbody>
</table>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Twig/Exception/traces_text.html.twig";
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
        return array (  106 => 27,  102 => 25,  100 => 22,  96 => 23,  94 => 22,  92 => 21,  90 => 20,  84 => 17,  75 => 11,  71 => 10,  66 => 9,  58 => 7,  56 => 6,  49 => 4,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<table class=\"trace trace-as-text\">
    <thead class=\"trace-head\">
        <tr>
            <th class=\"sf-toggle\" data-toggle-selector=\"#trace-text-{{ index }}\" data-toggle-initial=\"{{ 1 == index ? 'display' }}\">
                <h3 class=\"trace-class\">
                    {% if num_exceptions > 1 %}
                        <span class=\"text-muted\">[{{ num_exceptions - index + 1 }}/{{ num_exceptions }}]</span>
                    {% endif %}
                    {{ exception.class|split('\\\\')|last }}
                    <span class=\"icon icon-close\">{{ include('@Twig/images/icon-minus-square-o.svg') }}</span>
                    <span class=\"icon icon-open\">{{ include('@Twig/images/icon-plus-square-o.svg') }}</span>
                </h3>
            </th>
        </tr>
    </thead>

    <tbody id=\"trace-text-{{ index }}\">
        <tr>
            <td>
                {% if exception.trace|length %}
                <pre class=\"stacktrace\">
                {%- apply escape('html') -%}
                    {{- include('@Twig/Exception/traces.txt.twig', { exception: exception, format: 'html' }, with_context = false) }}
                {%- endapply -%}
                </pre>
                {% endif %}
            </td>
        </tr>
    </tbody>
</table>
", "@Twig/Exception/traces_text.html.twig", "C:\\laragon\\www\\training\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\traces_text.html.twig");
    }
}
