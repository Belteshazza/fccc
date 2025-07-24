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

/* @Twig/Exception/trace.html.twig */
class __TwigTemplate_9a0f455f8cdd8e9b66830e428c3f3bd1c1ed45d4374db62147e62d03db82cea0 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Twig/Exception/trace.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Twig/Exception/trace.html.twig"));

        // line 1
        yield "<div class=\"trace-line-header break-long-words ";
        yield ((((CoreExtension::getAttribute($this->env, $this->source, ($context["trace"] ?? null), "file", [], "any", true, true, false, 1)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["trace"] ?? null), "file", [], "any", false, false, false, 1), false)) : (false))) ? ("sf-toggle") : (""));
        yield "\" data-toggle-selector=\"#trace-html-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["prefix"]) || array_key_exists("prefix", $context) ? $context["prefix"] : (function () { throw new RuntimeError('Variable "prefix" does not exist.', 1, $this->source); })()), "html", null, true);
        yield "-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 1, $this->source); })()), "html", null, true);
        yield "\" data-toggle-initial=\"";
        yield (((0 === CoreExtension::compare((isset($context["style"]) || array_key_exists("style", $context) ? $context["style"] : (function () { throw new RuntimeError('Variable "style" does not exist.', 1, $this->source); })()), "expanded"))) ? ("display") : (""));
        yield "\">
    ";
        // line 2
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["trace"] ?? null), "file", [], "any", true, true, false, 2)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["trace"] ?? null), "file", [], "any", false, false, false, 2), false)) : (false))) {
            // line 3
            yield "        <span class=\"icon icon-close\">";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@Twig/images/icon-minus-square.svg");
            yield "</span>
        <span class=\"icon icon-open\">";
            // line 4
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@Twig/images/icon-plus-square.svg");
            yield "</span>
    ";
        }
        // line 6
        yield "
    ";
        // line 7
        if (((0 !== CoreExtension::compare((isset($context["style"]) || array_key_exists("style", $context) ? $context["style"] : (function () { throw new RuntimeError('Variable "style" does not exist.', 7, $this->source); })()), "compact")) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["trace"]) || array_key_exists("trace", $context) ? $context["trace"] : (function () { throw new RuntimeError('Variable "trace" does not exist.', 7, $this->source); })()), "function", [], "any", false, false, false, 7))) {
            // line 8
            yield "        <span class=\"trace-class\">";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->abbrClass($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trace"]) || array_key_exists("trace", $context) ? $context["trace"] : (function () { throw new RuntimeError('Variable "trace" does not exist.', 8, $this->source); })()), "class", [], "any", false, false, false, 8), "html", null, true));
            yield "</span>";
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trace"]) || array_key_exists("trace", $context) ? $context["trace"] : (function () { throw new RuntimeError('Variable "trace" does not exist.', 8, $this->source); })()), "type", [], "any", false, false, false, 8))) {
                yield "<span class=\"trace-type\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trace"]) || array_key_exists("trace", $context) ? $context["trace"] : (function () { throw new RuntimeError('Variable "trace" does not exist.', 8, $this->source); })()), "type", [], "any", false, false, false, 8), "html", null, true);
                yield "</span>";
            }
            yield "<span class=\"trace-method\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trace"]) || array_key_exists("trace", $context) ? $context["trace"] : (function () { throw new RuntimeError('Variable "trace" does not exist.', 8, $this->source); })()), "function", [], "any", false, false, false, 8), "html", null, true);
            yield "</span><span class=\"trace-arguments\">(";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->formatArgs(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trace"]) || array_key_exists("trace", $context) ? $context["trace"] : (function () { throw new RuntimeError('Variable "trace" does not exist.', 8, $this->source); })()), "args", [], "any", false, false, false, 8));
            yield ")</span>
    ";
        }
        // line 10
        yield "
    ";
        // line 11
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["trace"] ?? null), "file", [], "any", true, true, false, 11)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["trace"] ?? null), "file", [], "any", false, false, false, 11), false)) : (false))) {
            // line 12
            yield "        ";
            $context["line_number"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["trace"] ?? null), "line", [], "any", true, true, false, 12)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["trace"] ?? null), "line", [], "any", false, false, false, 12), 1)) : (1));
            // line 13
            yield "        ";
            $context["file_link"] = $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trace"]) || array_key_exists("trace", $context) ? $context["trace"] : (function () { throw new RuntimeError('Variable "trace" does not exist.', 13, $this->source); })()), "file", [], "any", false, false, false, 13), (isset($context["line_number"]) || array_key_exists("line_number", $context) ? $context["line_number"] : (function () { throw new RuntimeError('Variable "line_number" does not exist.', 13, $this->source); })()));
            // line 14
            yield "        ";
            $context["file_path"] = Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::striptags($this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->formatFile(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trace"]) || array_key_exists("trace", $context) ? $context["trace"] : (function () { throw new RuntimeError('Variable "trace" does not exist.', 14, $this->source); })()), "file", [], "any", false, false, false, 14), (isset($context["line_number"]) || array_key_exists("line_number", $context) ? $context["line_number"] : (function () { throw new RuntimeError('Variable "line_number" does not exist.', 14, $this->source); })()))), [(" at line " . (isset($context["line_number"]) || array_key_exists("line_number", $context) ? $context["line_number"] : (function () { throw new RuntimeError('Variable "line_number" does not exist.', 14, $this->source); })())) => ""]);
            // line 15
            yield "        ";
            $context["file_path_parts"] = Twig\Extension\CoreExtension::split($this->env->getCharset(), (isset($context["file_path"]) || array_key_exists("file_path", $context) ? $context["file_path"] : (function () { throw new RuntimeError('Variable "file_path" does not exist.', 15, $this->source); })()), Twig\Extension\CoreExtension::constant("DIRECTORY_SEPARATOR"));
            // line 16
            yield "
        <span class=\"block trace-file-path\">
            in
            <a href=\"";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["file_link"]) || array_key_exists("file_link", $context) ? $context["file_link"] : (function () { throw new RuntimeError('Variable "file_link" does not exist.', 19, $this->source); })()), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["file_path_parts"]) || array_key_exists("file_path_parts", $context) ? $context["file_path_parts"] : (function () { throw new RuntimeError('Variable "file_path_parts" does not exist.', 19, $this->source); })()), 0,  -1), Twig\Extension\CoreExtension::constant("DIRECTORY_SEPARATOR")), "html", null, true);
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("DIRECTORY_SEPARATOR"), "html", null, true);
            yield "<strong>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::last($this->env->getCharset(), (isset($context["file_path_parts"]) || array_key_exists("file_path_parts", $context) ? $context["file_path_parts"] : (function () { throw new RuntimeError('Variable "file_path_parts" does not exist.', 19, $this->source); })())), "html", null, true);
            yield "</strong></a>";
            // line 20
            if (((0 === CoreExtension::compare((isset($context["style"]) || array_key_exists("style", $context) ? $context["style"] : (function () { throw new RuntimeError('Variable "style" does not exist.', 20, $this->source); })()), "compact")) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["trace"]) || array_key_exists("trace", $context) ? $context["trace"] : (function () { throw new RuntimeError('Variable "trace" does not exist.', 20, $this->source); })()), "function", [], "any", false, false, false, 20))) {
                yield "<span class=\"trace-type\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trace"]) || array_key_exists("trace", $context) ? $context["trace"] : (function () { throw new RuntimeError('Variable "trace" does not exist.', 20, $this->source); })()), "type", [], "any", false, false, false, 20), "html", null, true);
                yield "</span><span class=\"trace-method\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trace"]) || array_key_exists("trace", $context) ? $context["trace"] : (function () { throw new RuntimeError('Variable "trace" does not exist.', 20, $this->source); })()), "function", [], "any", false, false, false, 20), "html", null, true);
                yield "</span>";
            }
            // line 21
            yield "            (line ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["line_number"]) || array_key_exists("line_number", $context) ? $context["line_number"] : (function () { throw new RuntimeError('Variable "line_number" does not exist.', 21, $this->source); })()), "html", null, true);
            yield ")
        </span>
    ";
        }
        // line 24
        yield "</div>
";
        // line 25
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["trace"] ?? null), "file", [], "any", true, true, false, 25)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["trace"] ?? null), "file", [], "any", false, false, false, 25), false)) : (false))) {
            // line 26
            yield "    <div id=\"trace-html-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((isset($context["prefix"]) || array_key_exists("prefix", $context) ? $context["prefix"] : (function () { throw new RuntimeError('Variable "prefix" does not exist.', 26, $this->source); })()) . "-") . (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 26, $this->source); })())), "html", null, true);
            yield "\" class=\"trace-code sf-toggle-content\">
        ";
            // line 27
            yield Twig\Extension\CoreExtension::replace($this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->fileExcerpt(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trace"]) || array_key_exists("trace", $context) ? $context["trace"] : (function () { throw new RuntimeError('Variable "trace" does not exist.', 27, $this->source); })()), "file", [], "any", false, false, false, 27), CoreExtension::getAttribute($this->env, $this->source, (isset($context["trace"]) || array_key_exists("trace", $context) ? $context["trace"] : (function () { throw new RuntimeError('Variable "trace" does not exist.', 27, $this->source); })()), "line", [], "any", false, false, false, 27), 5), ["#DD0000" => "var(--highlight-string)", "#007700" => "var(--highlight-keyword)", "#0000BB" => "var(--highlight-default)", "#FF8000" => "var(--highlight-comment)"]);
            // line 32
            yield "
    </div>
";
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
        return "@Twig/Exception/trace.html.twig";
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
        return array (  145 => 32,  143 => 27,  138 => 26,  136 => 25,  133 => 24,  126 => 21,  118 => 20,  110 => 19,  105 => 16,  102 => 15,  99 => 14,  96 => 13,  93 => 12,  91 => 11,  88 => 10,  72 => 8,  70 => 7,  67 => 6,  62 => 4,  57 => 3,  55 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"trace-line-header break-long-words {{ trace.file|default(false) ? 'sf-toggle' }}\" data-toggle-selector=\"#trace-html-{{ prefix }}-{{ i }}\" data-toggle-initial=\"{{ style == 'expanded' ? 'display' }}\">
    {% if trace.file|default(false) %}
        <span class=\"icon icon-close\">{{ include('@Twig/images/icon-minus-square.svg') }}</span>
        <span class=\"icon icon-open\">{{ include('@Twig/images/icon-plus-square.svg') }}</span>
    {% endif %}

    {% if style != 'compact' and trace.function %}
        <span class=\"trace-class\">{{ trace.class|abbr_class }}</span>{% if trace.type is not empty %}<span class=\"trace-type\">{{ trace.type }}</span>{% endif %}<span class=\"trace-method\">{{ trace.function }}</span><span class=\"trace-arguments\">({{ trace.args|format_args }})</span>
    {% endif %}

    {% if trace.file|default(false) %}
        {% set line_number = trace.line|default(1) %}
        {% set file_link = trace.file|file_link(line_number) %}
        {% set file_path = trace.file|format_file(line_number)|striptags|replace({ (' at line ' ~ line_number): '' }) %}
        {% set file_path_parts = file_path|split(constant('DIRECTORY_SEPARATOR')) %}

        <span class=\"block trace-file-path\">
            in
            <a href=\"{{ file_link }}\">{{ file_path_parts[:-1]|join(constant('DIRECTORY_SEPARATOR')) }}{{ constant('DIRECTORY_SEPARATOR') }}<strong>{{ file_path_parts|last }}</strong></a>
            {%- if style == 'compact' and trace.function %}<span class=\"trace-type\">{{ trace.type }}</span><span class=\"trace-method\">{{ trace.function }}</span>{% endif %}
            (line {{ line_number }})
        </span>
    {% endif %}
</div>
{% if trace.file|default(false) %}
    <div id=\"trace-html-{{ prefix ~ '-' ~ i }}\" class=\"trace-code sf-toggle-content\">
        {{ trace.file|file_excerpt(trace.line, 5)|replace({
            '#DD0000': 'var(--highlight-string)',
            '#007700': 'var(--highlight-keyword)',
            '#0000BB': 'var(--highlight-default)',
            '#FF8000': 'var(--highlight-comment)'
        })|raw }}
    </div>
{% endif %}
", "@Twig/Exception/trace.html.twig", "C:\\laragon\\www\\training\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\trace.html.twig");
    }
}
