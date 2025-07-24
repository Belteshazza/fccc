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

/* @Twig/Exception/logs.html.twig */
class __TwigTemplate_4fd615341f6093e3e551eb93ddf982ddc51d9d7805dd0177e0a5beea4a417de5 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Twig/Exception/logs.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Twig/Exception/logs.html.twig"));

        // line 1
        $context["channel_is_defined"] = CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), (isset($context["logs"]) || array_key_exists("logs", $context) ? $context["logs"] : (function () { throw new RuntimeError('Variable "logs" does not exist.', 1, $this->source); })())), "channel", [], "any", true, true, false, 1);
        // line 2
        yield "<table class=\"logs\" data-filter-level=\"Emergency,Alert,Critical,Error,Warning,Notice,Info,Debug\" data-filters>
    <thead>
        <tr>
            <th data-filter=\"level\">Level</th>
            ";
        // line 6
        if ((isset($context["channel_is_defined"]) || array_key_exists("channel_is_defined", $context) ? $context["channel_is_defined"] : (function () { throw new RuntimeError('Variable "channel_is_defined" does not exist.', 6, $this->source); })())) {
            yield "<th data-filter=\"channel\">Channel</th>";
        }
        // line 7
        yield "            <th class=\"full-width\">Message</th>
        </tr>
    </thead>

    <tbody>
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["logs"]) || array_key_exists("logs", $context) ? $context["logs"] : (function () { throw new RuntimeError('Variable "logs" does not exist.', 12, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 13
            yield "        ";
            if ((0 <= CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, $context["log"], "priority", [], "any", false, false, false, 13), 400))) {
                // line 14
                yield "            ";
                $context["status"] = "error";
                // line 15
                yield "        ";
            } elseif ((0 <= CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, $context["log"], "priority", [], "any", false, false, false, 15), 300))) {
                // line 16
                yield "            ";
                $context["status"] = "warning";
                // line 17
                yield "        ";
            } else {
                // line 18
                yield "            ";
                $context["severity"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["log"], "context", [], "any", false, true, false, 18), "exception", [], "any", false, true, false, 18), "severity", [], "any", true, true, false, 18)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["log"], "context", [], "any", false, true, false, 18), "exception", [], "any", false, true, false, 18), "severity", [], "any", false, false, false, 18), false)) : (false));
                // line 19
                yield "            ";
                $context["status"] = (((((isset($context["severity"]) || array_key_exists("severity", $context) ? $context["severity"] : (function () { throw new RuntimeError('Variable "severity" does not exist.', 19, $this->source); })()) === constant("E_DEPRECATED")) || ((isset($context["severity"]) || array_key_exists("severity", $context) ? $context["severity"] : (function () { throw new RuntimeError('Variable "severity" does not exist.', 19, $this->source); })()) === constant("E_USER_DEPRECATED")))) ? ("warning") : ("normal"));
                // line 20
                yield "        ";
            }
            // line 21
            yield "        <tr class=\"status-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 21, $this->source); })()), "html", null, true);
            yield "\" data-filter-level=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["log"], "priorityName", [], "any", false, false, false, 21)), "html", null, true);
            yield "\"";
            if ((isset($context["channel_is_defined"]) || array_key_exists("channel_is_defined", $context) ? $context["channel_is_defined"] : (function () { throw new RuntimeError('Variable "channel_is_defined" does not exist.', 21, $this->source); })())) {
                yield " data-filter-channel=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["log"], "channel", [], "any", false, false, false, 21), "html", null, true);
                yield "\"";
            }
            yield ">
            <td class=\"text-small\" nowrap>
                <span class=\"colored text-bold\">";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["log"], "priorityName", [], "any", false, false, false, 23), "html", null, true);
            yield "</span>
                <span class=\"text-muted newline\">";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["log"], "timestamp", [], "any", false, false, false, 24), "H:i:s"), "html", null, true);
            yield "</span>
            </td>
            ";
            // line 26
            if ((isset($context["channel_is_defined"]) || array_key_exists("channel_is_defined", $context) ? $context["channel_is_defined"] : (function () { throw new RuntimeError('Variable "channel_is_defined" does not exist.', 26, $this->source); })())) {
                // line 27
                yield "                <td class=\"text-small text-bold nowrap\">
                    ";
                // line 28
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["log"], "channel", [], "any", false, false, false, 28), "html", null, true);
                yield "
                </td>
            ";
            }
            // line 31
            yield "            <td>
                ";
            // line 32
            yield $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->formatLogMessage(CoreExtension::getAttribute($this->env, $this->source, $context["log"], "message", [], "any", false, false, false, 32), CoreExtension::getAttribute($this->env, $this->source, $context["log"], "context", [], "any", false, false, false, 32));
            yield "
                ";
            // line 33
            if ((((CoreExtension::getAttribute($this->env, $this->source, $context["log"], "context", [], "any", true, true, false, 33) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["log"], "context", [], "any", false, false, false, 33)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["log"], "context", [], "any", false, false, false, 33)) : (false))) {
                // line 34
                yield "                    <pre class=\"text-muted prewrap m-t-5\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(CoreExtension::getAttribute($this->env, $this->source, $context["log"], "context", [], "any", false, false, false, 34), ((Twig\Extension\CoreExtension::constant("JSON_PRETTY_PRINT") | Twig\Extension\CoreExtension::constant("JSON_UNESCAPED_UNICODE")) | Twig\Extension\CoreExtension::constant("JSON_UNESCAPED_SLASHES"))), "html", null, true);
                yield "</pre>
                ";
            }
            // line 36
            yield "            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        yield "    </tbody>
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
        return "@Twig/Exception/logs.html.twig";
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
        return array (  148 => 39,  140 => 36,  134 => 34,  132 => 33,  128 => 32,  125 => 31,  119 => 28,  116 => 27,  114 => 26,  109 => 24,  105 => 23,  91 => 21,  88 => 20,  85 => 19,  82 => 18,  79 => 17,  76 => 16,  73 => 15,  70 => 14,  67 => 13,  63 => 12,  56 => 7,  52 => 6,  46 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set channel_is_defined = (logs|first).channel is defined %}
<table class=\"logs\" data-filter-level=\"Emergency,Alert,Critical,Error,Warning,Notice,Info,Debug\" data-filters>
    <thead>
        <tr>
            <th data-filter=\"level\">Level</th>
            {% if channel_is_defined %}<th data-filter=\"channel\">Channel</th>{% endif %}
            <th class=\"full-width\">Message</th>
        </tr>
    </thead>

    <tbody>
    {% for log in logs %}
        {% if log.priority >= 400 %}
            {% set status = 'error' %}
        {% elseif log.priority >= 300 %}
            {% set status = 'warning' %}
        {% else %}
            {% set severity = log.context.exception.severity|default(false) %}
            {% set status = severity is constant('E_DEPRECATED') or severity is constant('E_USER_DEPRECATED') ? 'warning' : 'normal' %}
        {% endif %}
        <tr class=\"status-{{ status }}\" data-filter-level=\"{{ log.priorityName|lower }}\"{% if channel_is_defined %} data-filter-channel=\"{{ log.channel }}\"{% endif %}>
            <td class=\"text-small\" nowrap>
                <span class=\"colored text-bold\">{{ log.priorityName }}</span>
                <span class=\"text-muted newline\">{{ log.timestamp|date('H:i:s') }}</span>
            </td>
            {% if channel_is_defined %}
                <td class=\"text-small text-bold nowrap\">
                    {{ log.channel }}
                </td>
            {% endif %}
            <td>
                {{ log.message|format_log_message(log.context) }}
                {% if log.context ?? false %}
                    <pre class=\"text-muted prewrap m-t-5\">{{ log.context|json_encode(constant('JSON_PRETTY_PRINT') b-or constant('JSON_UNESCAPED_UNICODE') b-or constant('JSON_UNESCAPED_SLASHES')) }}</pre>
                {% endif %}
            </td>
        </tr>
    {% endfor %}
    </tbody>
</table>
", "@Twig/Exception/logs.html.twig", "C:\\laragon\\www\\training\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\logs.html.twig");
    }
}
