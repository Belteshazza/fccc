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

/* @Twig/Exception/traces.html.twig */
class __TwigTemplate_ea05fee439747c9136d14e0144c3265356e761a0eb630fe20aff506cc5b10892 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.html.twig"));

        // line 1
        yield "<div class=\"trace trace-as-html\" id=\"trace-box-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 1, $this->source); })()), "html", null, true);
        yield "\">
    <div class=\"trace-details\">
        <div class=\"trace-head\">
            <span class=\"sf-toggle\" data-toggle-selector=\"#trace-html-";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 4, $this->source); })()), "html", null, true);
        yield "\" data-toggle-initial=\"";
        yield (((isset($context["expand"]) || array_key_exists("expand", $context) ? $context["expand"] : (function () { throw new RuntimeError('Variable "expand" does not exist.', 4, $this->source); })())) ? ("display") : (""));
        yield "\">
                <h3 class=\"trace-class\">
                    <span class=\"icon icon-close\">";
        // line 6
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@Twig/images/icon-minus-square-o.svg");
        yield "</span>
                    <span class=\"icon icon-open\">";
        // line 7
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@Twig/images/icon-plus-square-o.svg");
        yield "</span>

                    <span class=\"trace-namespace\">
                        ";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(Twig\Extension\CoreExtension::slice($this->env->getCharset(), Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new RuntimeError('Variable "exception" does not exist.', 10, $this->source); })()), "class", [], "any", false, false, false, 10), "\\"), 0,  -1), "\\"), "html", null, true);
        // line 11
        yield (((1 === CoreExtension::compare(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new RuntimeError('Variable "exception" does not exist.', 11, $this->source); })()), "class", [], "any", false, false, false, 11), "\\")), 1))) ? ("\\") : (""));
        yield "
                    </span>
                    ";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::last($this->env->getCharset(), Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new RuntimeError('Variable "exception" does not exist.', 13, $this->source); })()), "class", [], "any", false, false, false, 13), "\\")), "html", null, true);
        yield "
                </h3>

                ";
        // line 16
        if (( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new RuntimeError('Variable "exception" does not exist.', 16, $this->source); })()), "message", [], "any", false, false, false, 16)) && (1 === CoreExtension::compare((isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 16, $this->source); })()), 1)))) {
            // line 17
            yield "                    <p class=\"break-long-words trace-message\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new RuntimeError('Variable "exception" does not exist.', 17, $this->source); })()), "message", [], "any", false, false, false, 17), "html", null, true);
            yield "</p>
                ";
        }
        // line 19
        yield "            </span>
        </div>

        <div id=\"trace-html-";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 22, $this->source); })()), "html", null, true);
        yield "\" class=\"sf-toggle-content\">
        ";
        // line 23
        $context["_is_first_user_code"] = true;
        // line 24
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new RuntimeError('Variable "exception" does not exist.', 24, $this->source); })()), "trace", [], "any", false, false, false, 24));
        foreach ($context['_seq'] as $context["i"] => $context["trace"]) {
            // line 25
            yield "            ";
            $context["_is_vendor_trace"] = ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "file", [], "any", false, false, false, 25)) && (CoreExtension::inFilter("/vendor/", CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "file", [], "any", false, false, false, 25)) || CoreExtension::inFilter("/var/cache/", CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "file", [], "any", false, false, false, 25))));
            // line 26
            yield "            ";
            $context["_display_code_snippet"] = ((isset($context["_is_first_user_code"]) || array_key_exists("_is_first_user_code", $context) ? $context["_is_first_user_code"] : (function () { throw new RuntimeError('Variable "_is_first_user_code" does not exist.', 26, $this->source); })()) &&  !(isset($context["_is_vendor_trace"]) || array_key_exists("_is_vendor_trace", $context) ? $context["_is_vendor_trace"] : (function () { throw new RuntimeError('Variable "_is_vendor_trace" does not exist.', 26, $this->source); })()));
            // line 27
            yield "            ";
            if ((isset($context["_display_code_snippet"]) || array_key_exists("_display_code_snippet", $context) ? $context["_display_code_snippet"] : (function () { throw new RuntimeError('Variable "_display_code_snippet" does not exist.', 27, $this->source); })())) {
                $context["_is_first_user_code"] = false;
            }
            // line 28
            yield "            <div class=\"trace-line ";
            yield (((isset($context["_is_vendor_trace"]) || array_key_exists("_is_vendor_trace", $context) ? $context["_is_vendor_trace"] : (function () { throw new RuntimeError('Variable "_is_vendor_trace" does not exist.', 28, $this->source); })())) ? ("trace-from-vendor") : (""));
            yield "\">
                ";
            // line 29
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@Twig/Exception/trace.html.twig", ["prefix" => (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 29, $this->source); })()), "i" => $context["i"], "trace" => $context["trace"], "style" => (((isset($context["_is_vendor_trace"]) || array_key_exists("_is_vendor_trace", $context) ? $context["_is_vendor_trace"] : (function () { throw new RuntimeError('Variable "_is_vendor_trace" does not exist.', 29, $this->source); })())) ? ("compact") : ((((isset($context["_display_code_snippet"]) || array_key_exists("_display_code_snippet", $context) ? $context["_display_code_snippet"] : (function () { throw new RuntimeError('Variable "_display_code_snippet" does not exist.', 29, $this->source); })())) ? ("expanded") : (""))))], false);
            yield "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        yield "        </div>
    </div>
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
        return "@Twig/Exception/traces.html.twig";
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
        return array (  130 => 32,  121 => 29,  116 => 28,  111 => 27,  108 => 26,  105 => 25,  100 => 24,  98 => 23,  94 => 22,  89 => 19,  83 => 17,  81 => 16,  75 => 13,  70 => 11,  68 => 10,  62 => 7,  58 => 6,  51 => 4,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"trace trace-as-html\" id=\"trace-box-{{ index }}\">
    <div class=\"trace-details\">
        <div class=\"trace-head\">
            <span class=\"sf-toggle\" data-toggle-selector=\"#trace-html-{{ index }}\" data-toggle-initial=\"{{ expand ? 'display' }}\">
                <h3 class=\"trace-class\">
                    <span class=\"icon icon-close\">{{ include('@Twig/images/icon-minus-square-o.svg') }}</span>
                    <span class=\"icon icon-open\">{{ include('@Twig/images/icon-plus-square-o.svg') }}</span>

                    <span class=\"trace-namespace\">
                        {{ exception.class|split('\\\\')|slice(0, -1)|join('\\\\') }}
                        {{- exception.class|split('\\\\')|length > 1 ? '\\\\' }}
                    </span>
                    {{ exception.class|split('\\\\')|last }}
                </h3>

                {% if exception.message is not empty and index > 1 %}
                    <p class=\"break-long-words trace-message\">{{ exception.message }}</p>
                {% endif %}
            </span>
        </div>

        <div id=\"trace-html-{{ index }}\" class=\"sf-toggle-content\">
        {% set _is_first_user_code = true %}
        {% for i, trace in exception.trace %}
            {% set _is_vendor_trace = trace.file is not empty and ('/vendor/' in trace.file or '/var/cache/' in trace.file) %}
            {% set _display_code_snippet = _is_first_user_code and not _is_vendor_trace %}
            {% if _display_code_snippet %}{% set _is_first_user_code = false %}{% endif %}
            <div class=\"trace-line {{ _is_vendor_trace ? 'trace-from-vendor' }}\">
                {{ include('@Twig/Exception/trace.html.twig', { prefix: index, i: i, trace: trace, style: _is_vendor_trace ? 'compact' : _display_code_snippet ? 'expanded' }, with_context = false) }}
            </div>
        {% endfor %}
        </div>
    </div>
</div>
", "@Twig/Exception/traces.html.twig", "C:\\laragon\\www\\training\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\traces.html.twig");
    }
}
