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

/* @Twig/Exception/exception.html.twig */
class __TwigTemplate_10c41a25dd66a9703a0009821719cd43c08022d1608d8d70ecf600ed38da79f8 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.html.twig"));

        // line 1
        yield "<div class=\"exception-summary ";
        yield ((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new RuntimeError('Variable "exception" does not exist.', 1, $this->source); })()), "message", [], "any", false, false, false, 1))) ? ("exception-without-message") : (""));
        yield "\">
    <div class=\"exception-metadata\">
        <div class=\"container\">
            <h2 class=\"exception-hierarchy\">
                ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::reverse($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new RuntimeError('Variable "exception" does not exist.', 5, $this->source); })()), "allPrevious", [], "any", false, false, false, 5)));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["previousException"]) {
            // line 6
            yield "                    <a href=\"#trace-box-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "revindex", [], "any", false, false, false, 6) + 1), "html", null, true);
            yield "\">";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->abbrClass($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["previousException"], "class", [], "any", false, false, false, 6), "html", null, true));
            yield "</a>
                    <span class=\"icon\">";
            // line 7
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@Twig/images/chevron-right.svg");
            yield "</span>
                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['previousException'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        yield "                <a href=\"#trace-box-1\">";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->abbrClass($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new RuntimeError('Variable "exception" does not exist.', 9, $this->source); })()), "class", [], "any", false, false, false, 9), "html", null, true));
        yield "</a>
            </h2>
            <h2 class=\"exception-http\">
                HTTP ";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new RuntimeError('Variable "status_code" does not exist.', 12, $this->source); })()), "html", null, true);
        yield " <small>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new RuntimeError('Variable "status_text" does not exist.', 12, $this->source); })()), "html", null, true);
        yield "</small>
            </h2>
        </div>
    </div>

    <div class=\"exception-message-wrapper\">
        <div class=\"container\">
            <h1 class=\"break-long-words exception-message ";
        // line 19
        yield (((1 === CoreExtension::compare(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new RuntimeError('Variable "exception" does not exist.', 19, $this->source); })()), "message", [], "any", false, false, false, 19)), 180))) ? ("long") : (""));
        yield "\">";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->formatFileFromText(Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new RuntimeError('Variable "exception" does not exist.', 20, $this->source); })()), "message", [], "any", false, false, false, 20), "html", null, true)));
        // line 21
        yield "</h1>

            <div class=\"exception-illustration hidden-xs-down\">
                ";
        // line 24
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@Twig/images/symfony-ghost.svg");
        yield "
            </div>
        </div>
    </div>
</div>

<div class=\"container\">
    <div class=\"sf-tabs\">
        <div class=\"tab\">
            ";
        // line 33
        $context["exception_as_array"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new RuntimeError('Variable "exception" does not exist.', 33, $this->source); })()), "toarray", [], "any", false, false, false, 33);
        // line 34
        yield "            ";
        $context["_exceptions_with_user_code"] = [];
        // line 35
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["exception_as_array"]) || array_key_exists("exception_as_array", $context) ? $context["exception_as_array"] : (function () { throw new RuntimeError('Variable "exception_as_array" does not exist.', 35, $this->source); })()));
        foreach ($context['_seq'] as $context["i"] => $context["e"]) {
            // line 36
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["e"], "trace", [], "any", false, false, false, 36));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 37
                yield "                    ";
                if (((( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "file", [], "any", false, false, false, 37)) && !CoreExtension::inFilter("/vendor/", CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "file", [], "any", false, false, false, 37))) && !CoreExtension::inFilter("/var/cache/", CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "file", [], "any", false, false, false, 37))) &&  !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 37))) {
                    // line 38
                    yield "                        ";
                    $context["_exceptions_with_user_code"] = Twig\Extension\CoreExtension::merge((isset($context["_exceptions_with_user_code"]) || array_key_exists("_exceptions_with_user_code", $context) ? $context["_exceptions_with_user_code"] : (function () { throw new RuntimeError('Variable "_exceptions_with_user_code" does not exist.', 38, $this->source); })()), [$context["i"]]);
                    // line 39
                    yield "                    ";
                }
                // line 40
                yield "                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        yield "            <h3 class=\"tab-title\">
                ";
        // line 43
        if ((1 === CoreExtension::compare(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["exception_as_array"]) || array_key_exists("exception_as_array", $context) ? $context["exception_as_array"] : (function () { throw new RuntimeError('Variable "exception_as_array" does not exist.', 43, $this->source); })())), 1))) {
            // line 44
            yield "                    Exceptions <span class=\"badge\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["exception_as_array"]) || array_key_exists("exception_as_array", $context) ? $context["exception_as_array"] : (function () { throw new RuntimeError('Variable "exception_as_array" does not exist.', 44, $this->source); })())), "html", null, true);
            yield "</span>
                ";
        } else {
            // line 46
            yield "                    Exception
                ";
        }
        // line 48
        yield "            </h3>

            <div class=\"tab-content\">
                ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["exception_as_array"]) || array_key_exists("exception_as_array", $context) ? $context["exception_as_array"] : (function () { throw new RuntimeError('Variable "exception_as_array" does not exist.', 51, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["i"] => $context["e"]) {
            // line 52
            yield "                    ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@Twig/Exception/traces.html.twig", ["exception" => $context["e"], "index" => CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 52), "expand" => (CoreExtension::inFilter($context["i"], (isset($context["_exceptions_with_user_code"]) || array_key_exists("_exceptions_with_user_code", $context) ? $context["_exceptions_with_user_code"] : (function () { throw new RuntimeError('Variable "_exceptions_with_user_code" does not exist.', 52, $this->source); })())) || (Twig\Extension\CoreExtension::testEmpty((isset($context["_exceptions_with_user_code"]) || array_key_exists("_exceptions_with_user_code", $context) ? $context["_exceptions_with_user_code"] : (function () { throw new RuntimeError('Variable "_exceptions_with_user_code" does not exist.', 52, $this->source); })())) && CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 52)))], false);
            yield "
                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        yield "            </div>
        </div>

        ";
        // line 57
        if ((isset($context["logger"]) || array_key_exists("logger", $context) ? $context["logger"] : (function () { throw new RuntimeError('Variable "logger" does not exist.', 57, $this->source); })())) {
            // line 58
            yield "        <div class=\"tab ";
            yield ((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["logger"]) || array_key_exists("logger", $context) ? $context["logger"] : (function () { throw new RuntimeError('Variable "logger" does not exist.', 58, $this->source); })()), "logs", [], "any", false, false, false, 58))) ? ("disabled") : (""));
            yield "\">
            <h3 class=\"tab-title\">
                Logs
                ";
            // line 61
            if ((((CoreExtension::getAttribute($this->env, $this->source, ($context["logger"] ?? null), "counterrors", [], "any", true, true, false, 61) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["logger"] ?? null), "counterrors", [], "any", false, false, false, 61)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["logger"] ?? null), "counterrors", [], "any", false, false, false, 61)) : (false))) {
                yield "<span class=\"badge status-error\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["logger"]) || array_key_exists("logger", $context) ? $context["logger"] : (function () { throw new RuntimeError('Variable "logger" does not exist.', 61, $this->source); })()), "counterrors", [], "any", false, false, false, 61), "html", null, true);
                yield "</span>";
            }
            // line 62
            yield "            </h3>

            <div class=\"tab-content\">
                ";
            // line 65
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["logger"]) || array_key_exists("logger", $context) ? $context["logger"] : (function () { throw new RuntimeError('Variable "logger" does not exist.', 65, $this->source); })()), "logs", [], "any", false, false, false, 65)) {
                // line 66
                yield "                    ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@Twig/Exception/logs.html.twig", ["logs" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["logger"]) || array_key_exists("logger", $context) ? $context["logger"] : (function () { throw new RuntimeError('Variable "logger" does not exist.', 66, $this->source); })()), "logs", [], "any", false, false, false, 66)], false);
                yield "
                ";
            } else {
                // line 68
                yield "                    <div class=\"empty\">
                        <p>No log messages</p>
                    </div>
                ";
            }
            // line 72
            yield "            </div>
        </div>
        ";
        }
        // line 75
        yield "
        <div class=\"tab\">
            <h3 class=\"tab-title\">
                ";
        // line 78
        if ((1 === CoreExtension::compare(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["exception_as_array"]) || array_key_exists("exception_as_array", $context) ? $context["exception_as_array"] : (function () { throw new RuntimeError('Variable "exception_as_array" does not exist.', 78, $this->source); })())), 1))) {
            // line 79
            yield "                    Stack Traces <span class=\"badge\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["exception_as_array"]) || array_key_exists("exception_as_array", $context) ? $context["exception_as_array"] : (function () { throw new RuntimeError('Variable "exception_as_array" does not exist.', 79, $this->source); })())), "html", null, true);
            yield "</span>
                ";
        } else {
            // line 81
            yield "                    Stack Trace
                ";
        }
        // line 83
        yield "            </h3>

            <div class=\"tab-content\">
                ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["exception_as_array"]) || array_key_exists("exception_as_array", $context) ? $context["exception_as_array"] : (function () { throw new RuntimeError('Variable "exception_as_array" does not exist.', 86, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 87
            yield "                    ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@Twig/Exception/traces_text.html.twig", ["exception" => $context["e"], "index" => CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 87), "num_exceptions" => CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "length", [], "any", false, false, false, 87)], false);
            yield "
                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        yield "            </div>
        </div>

        ";
        // line 92
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["currentContent"]) || array_key_exists("currentContent", $context) ? $context["currentContent"] : (function () { throw new RuntimeError('Variable "currentContent" does not exist.', 92, $this->source); })()))) {
            // line 93
            yield "        <div class=\"tab\">
            <h3 class=\"tab-title\">Output content</h3>

            <div class=\"tab-content\">
                ";
            // line 97
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["currentContent"]) || array_key_exists("currentContent", $context) ? $context["currentContent"] : (function () { throw new RuntimeError('Variable "currentContent" does not exist.', 97, $this->source); })()), "html", null, true);
            yield "
            </div>
        </div>
        ";
        }
        // line 101
        yield "    </div>
</div>
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
        return "@Twig/Exception/exception.html.twig";
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
        return array (  364 => 101,  357 => 97,  351 => 93,  349 => 92,  344 => 89,  327 => 87,  310 => 86,  305 => 83,  301 => 81,  295 => 79,  293 => 78,  288 => 75,  283 => 72,  277 => 68,  271 => 66,  269 => 65,  264 => 62,  258 => 61,  251 => 58,  249 => 57,  244 => 54,  227 => 52,  210 => 51,  205 => 48,  201 => 46,  195 => 44,  193 => 43,  190 => 42,  184 => 41,  170 => 40,  167 => 39,  164 => 38,  161 => 37,  143 => 36,  138 => 35,  135 => 34,  133 => 33,  121 => 24,  116 => 21,  114 => 20,  111 => 19,  99 => 12,  92 => 9,  76 => 7,  69 => 6,  52 => 5,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"exception-summary {{ exception.message is empty ? 'exception-without-message' }}\">
    <div class=\"exception-metadata\">
        <div class=\"container\">
            <h2 class=\"exception-hierarchy\">
                {% for previousException in exception.allPrevious|reverse %}
                    <a href=\"#trace-box-{{ loop.revindex + 1 }}\">{{ previousException.class|abbr_class }}</a>
                    <span class=\"icon\">{{ include('@Twig/images/chevron-right.svg') }}</span>
                {% endfor %}
                <a href=\"#trace-box-1\">{{ exception.class|abbr_class }}</a>
            </h2>
            <h2 class=\"exception-http\">
                HTTP {{ status_code }} <small>{{ status_text }}</small>
            </h2>
        </div>
    </div>

    <div class=\"exception-message-wrapper\">
        <div class=\"container\">
            <h1 class=\"break-long-words exception-message {{ exception.message|length > 180 ? 'long' }}\">
                {{- exception.message|nl2br|format_file_from_text -}}
            </h1>

            <div class=\"exception-illustration hidden-xs-down\">
                {{ include('@Twig/images/symfony-ghost.svg') }}
            </div>
        </div>
    </div>
</div>

<div class=\"container\">
    <div class=\"sf-tabs\">
        <div class=\"tab\">
            {% set exception_as_array = exception.toarray %}
            {% set _exceptions_with_user_code = [] %}
            {% for i, e in exception_as_array %}
                {% for trace in e.trace %}
                    {% if (trace.file is not empty) and ('/vendor/' not in trace.file) and ('/var/cache/' not in trace.file) and not loop.last %}
                        {% set _exceptions_with_user_code = _exceptions_with_user_code|merge([i]) %}
                    {% endif %}
                {% endfor %}
            {% endfor %}
            <h3 class=\"tab-title\">
                {% if exception_as_array|length > 1 %}
                    Exceptions <span class=\"badge\">{{ exception_as_array|length }}</span>
                {% else %}
                    Exception
                {% endif %}
            </h3>

            <div class=\"tab-content\">
                {% for i, e in exception_as_array %}
                    {{ include('@Twig/Exception/traces.html.twig', { exception: e, index: loop.index, expand: i in _exceptions_with_user_code or (_exceptions_with_user_code is empty and loop.first) }, with_context = false) }}
                {% endfor %}
            </div>
        </div>

        {% if logger %}
        <div class=\"tab {{ logger.logs is empty ? 'disabled' }}\">
            <h3 class=\"tab-title\">
                Logs
                {% if logger.counterrors ?? false %}<span class=\"badge status-error\">{{ logger.counterrors }}</span>{% endif %}
            </h3>

            <div class=\"tab-content\">
                {% if logger.logs %}
                    {{ include('@Twig/Exception/logs.html.twig', { logs: logger.logs }, with_context = false)  }}
                {% else %}
                    <div class=\"empty\">
                        <p>No log messages</p>
                    </div>
                {% endif %}
            </div>
        </div>
        {% endif %}

        <div class=\"tab\">
            <h3 class=\"tab-title\">
                {% if exception_as_array|length > 1 %}
                    Stack Traces <span class=\"badge\">{{ exception_as_array|length }}</span>
                {% else %}
                    Stack Trace
                {% endif %}
            </h3>

            <div class=\"tab-content\">
                {% for e in exception_as_array %}
                    {{ include('@Twig/Exception/traces_text.html.twig', { exception: e, index: loop.index, num_exceptions: loop.length }, with_context = false) }}
                {% endfor %}
            </div>
        </div>

        {% if currentContent is not empty %}
        <div class=\"tab\">
            <h3 class=\"tab-title\">Output content</h3>

            <div class=\"tab-content\">
                {{ currentContent }}
            </div>
        </div>
        {% endif %}
    </div>
</div>
", "@Twig/Exception/exception.html.twig", "C:\\laragon\\www\\training\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\exception.html.twig");
    }
}
