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

/* @WebProfiler/Collector/mailer.html.twig */
class __TwigTemplate_2ec32ca6c2caf69e9ea6f0fb7823088d491d07994bd3bc531caf7723f0c37b9a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'toolbar' => [$this, 'block_toolbar'],
            'head' => [$this, 'block_head'],
            'menu' => [$this, 'block_menu'],
            'panel' => [$this, 'block_panel'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/mailer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/mailer.html.twig"));

        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/mailer.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        yield "    ";
        $context["events"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 4, $this->source); })()), "events", [], "any", false, false, false, 4);
        // line 5
        yield "
    ";
        // line 6
        if (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 6, $this->source); })()), "messages", [], "any", false, false, false, 6))) {
            // line 7
            yield "        ";
            $context["icon"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 8
                yield "            ";
                yield from                 $this->loadTemplate("@WebProfiler/Icon/mailer.svg", "@WebProfiler/Collector/mailer.html.twig", 8)->unwrap()->yield($context);
                // line 9
                yield "            <span class=\"sf-toolbar-value\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 9, $this->source); })()), "messages", [], "any", false, false, false, 9)), "html", null, true);
                yield "</span>
        ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 11
            yield "
        ";
            // line 12
            $context["text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 13
                yield "            <div class=\"sf-toolbar-info-piece\">
                <b>Sent messages</b>
                <span class=\"sf-toolbar-status\">";
                // line 15
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 15, $this->source); })()), "messages", [], "any", false, false, false, 15)), "html", null, true);
                yield "</span>
            </div>

            ";
                // line 18
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 18, $this->source); })()), "transports", [], "any", false, false, false, 18));
                foreach ($context['_seq'] as $context["_key"] => $context["transport"]) {
                    // line 19
                    yield "                <div class=\"sf-toolbar-info-piece\">
                    <b>";
                    // line 20
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["transport"], "html", null, true);
                    yield "</b>
                    <span class=\"sf-toolbar-status\">";
                    // line 21
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 21, $this->source); })()), "messages", [$context["transport"]], "method", false, false, false, 21)), "html", null, true);
                    yield "</span>
                </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['transport'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 24
                yield "        ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 25
            yield "
        ";
            // line 26
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => (isset($context["profiler_url"]) || array_key_exists("profiler_url", $context) ? $context["profiler_url"] : (function () { throw new RuntimeError('Variable "profiler_url" does not exist.', 26, $this->source); })())]);
            yield "
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        return; yield '';
    }

    // line 30
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 31
        yield "    ";
        yield from $this->yieldParentBlock("head", $context, $blocks);
        yield "
    <style type=\"text/css\">
        /* utility classes */
        .m-t-0 { margin-top: 0 !important; }
        .m-t-10 { margin-top: 10px !important; }

        /* basic grid */
        .row {
            display: flex;
            flex-wrap: wrap;
            margin-right: -15px;
            margin-left: -15px;
        }
        .col {
            flex-basis: 0;
            flex-grow: 1;
            max-width: 100%;
            position: relative;
            width: 100%;
            min-height: 1px;
            padding-right: 15px;
            padding-left: 15px;
        }
        .col-4 {
            flex: 0 0 33.333333%;
            max-width: 33.333333%;
        }

        /* small tabs */
        .sf-tabs-sm .tab-navigation li {
            font-size: 14px;
            padding: .3em .5em;
        }
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        return; yield '';
    }

    // line 67
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 68
        yield "    ";
        $context["events"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 68, $this->source); })()), "events", [], "any", false, false, false, 68);
        // line 69
        yield "
    <span class=\"label ";
        // line 70
        yield ((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 70, $this->source); })()), "messages", [], "any", false, false, false, 70))) ? ("disabled") : (""));
        yield "\">
        <span class=\"icon\">";
        // line 71
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Icon/mailer.svg");
        yield "</span>

        <strong>E-mails</strong>
        ";
        // line 74
        if ((1 === CoreExtension::compare(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 74, $this->source); })()), "messages", [], "any", false, false, false, 74)), 0))) {
            // line 75
            yield "            <span class=\"count\">
                <span>";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 76, $this->source); })()), "messages", [], "any", false, false, false, 76)), "html", null, true);
            yield "</span>
            </span>
        ";
        }
        // line 79
        yield "    </span>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        return; yield '';
    }

    // line 82
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 83
        yield "    ";
        $context["events"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 83, $this->source); })()), "events", [], "any", false, false, false, 83);
        // line 84
        yield "
    <h2>Emails</h2>

    ";
        // line 87
        if ( !Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 87, $this->source); })()), "messages", [], "any", false, false, false, 87))) {
            // line 88
            yield "        <div class=\"empty\">
            <p>No emails were sent.</p>
        </div>
    ";
        }
        // line 92
        yield "
    <div class=\"metrics\">
        ";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 94, $this->source); })()), "transports", [], "any", false, false, false, 94));
        foreach ($context['_seq'] as $context["_key"] => $context["transport"]) {
            // line 95
            yield "            <div class=\"metric\">
                <span class=\"value\">";
            // line 96
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 96, $this->source); })()), "messages", [$context["transport"]], "method", false, false, false, 96)), "html", null, true);
            yield "</span>
                <span class=\"label\">";
            // line 97
            yield (((0 === CoreExtension::compare(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 97, $this->source); })()), "messages", [$context["transport"]], "method", false, false, false, 97)), 1))) ? ("message") : ("messages"));
            yield "</span>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['transport'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        yield "    </div>

    ";
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 102, $this->source); })()), "transports", [], "any", false, false, false, 102));
        foreach ($context['_seq'] as $context["_key"] => $context["transport"]) {
            // line 103
            yield "        <h3>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["transport"], "html", null, true);
            yield "</h3>

        <div class=\"card-block\">
            <div class=\"sf-tabs sf-tabs-sm\">
                ";
            // line 107
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 107, $this->source); })()), "events", [$context["transport"]], "method", false, false, false, 107));
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
            foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                // line 108
                yield "                    ";
                $context["message"] = CoreExtension::getAttribute($this->env, $this->source, $context["event"], "message", [], "any", false, false, false, 108);
                // line 109
                yield "                    <div class=\"tab\">
                        <h3 class=\"tab-title\">Email #";
                // line 110
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 110), "html", null, true);
                yield " <small>(";
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "isQueued", [], "method", false, false, false, 110)) ? ("queued") : ("sent"));
                yield ")</small></h3>
                        <div class=\"tab-content\">
                            <div class=\"card\">
                                ";
                // line 113
                if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "headers", [], "any", true, true, false, 113)) {
                    // line 114
                    yield "                                    ";
                    // line 115
                    yield "                                    <div class=\"card-block\">
                                        <pre class=\"prewrap\" style=\"max-height: 600px\">";
                    // line 116
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 116, $this->source); })()), "toString", [], "method", false, false, false, 116), "html", null, true);
                    yield "</pre>
                                    </div>
                                ";
                } else {
                    // line 119
                    yield "                                    ";
                    // line 120
                    yield "                                    <div class=\"card-block\">
                                        <span class=\"label\">Subject</span>
                                        <h2 class=\"m-t-10\">";
                    // line 122
                    (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "headers", [], "any", false, true, false, 122), "get", ["subject"], "method", false, true, false, 122), "bodyAsString", [], "method", true, true, false, 122) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "headers", [], "any", false, true, false, 122), "get", ["subject"], "method", false, true, false, 122), "bodyAsString", [], "method", false, false, false, 122)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "headers", [], "any", false, true, false, 122), "get", ["subject"], "method", false, true, false, 122), "bodyAsString", [], "method", false, false, false, 122), "html", null, true)) : (yield "(empty)"));
                    yield "</h2>
                                    </div>

                                    <div class=\"card-block\">
                                        <div class=\"row\">
                                            <div class=\"col col-4\">
                                                <span class=\"label\">From</span>
                                                <pre class=\"prewrap\">";
                    // line 129
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "headers", [], "any", false, true, false, 129), "get", ["from"], "method", false, true, false, 129), "bodyAsString", [], "method", true, true, false, 129) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "headers", [], "any", false, true, false, 129), "get", ["from"], "method", false, true, false, 129), "bodyAsString", [], "method", false, false, false, 129)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "headers", [], "any", false, true, false, 129), "get", ["from"], "method", false, true, false, 129), "bodyAsString", [], "method", false, false, false, 129)) : ("(empty)")), ["From:" => ""]), "html", null, true);
                    yield "</pre>

                                                <span class=\"label\">To</span>
                                                <pre class=\"prewrap\">";
                    // line 132
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "headers", [], "any", false, true, false, 132), "get", ["to"], "method", false, true, false, 132), "bodyAsString", [], "method", true, true, false, 132) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "headers", [], "any", false, true, false, 132), "get", ["to"], "method", false, true, false, 132), "bodyAsString", [], "method", false, false, false, 132)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "headers", [], "any", false, true, false, 132), "get", ["to"], "method", false, true, false, 132), "bodyAsString", [], "method", false, false, false, 132)) : ("(empty)")), ["To:" => ""]), "html", null, true);
                    yield "</pre>
                                            </div>
                                            <div class=\"col\">
                                                <span class=\"label\">Headers</span>
                                                <pre class=\"prewrap\">";
                    // line 136
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 136, $this->source); })()), "headers", [], "any", false, false, false, 136), "all", [], "any", false, false, false, 136), function ($__header__) use ($context, $macros) { $context["header"] = $__header__; return !CoreExtension::inFilter((((CoreExtension::getAttribute($this->env, $this->source, $context["header"], "name", [], "any", true, true, false, 136) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["header"], "name", [], "any", false, false, false, 136)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["header"], "name", [], "any", false, false, false, 136)) : ("")), ["Subject", "From", "To"]); }));
                    foreach ($context['_seq'] as $context["_key"] => $context["header"]) {
                        // line 137
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["header"], "toString", [], "any", false, false, false, 137), "html", null, true);
                        yield "
";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['header'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 138
                    yield "</pre>
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"card-block\">
                                        ";
                    // line 144
                    if (CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "htmlBody", [], "any", true, true, false, 144)) {
                        // line 145
                        yield "                                            ";
                        // line 146
                        yield "                                            <div class=\"sf-tabs sf-tabs-sm\">
                                                <div class=\"tab\">
                                                    <h3 class=\"tab-title\">HTML Content</h3>
                                                    <div class=\"tab-content\">
                                                        <pre class=\"prewrap\" style=\"max-height: 600px\">";
                        // line 151
                        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 151, $this->source); })()), "htmlCharset", [], "method", false, false, false, 151)) {
                            // line 152
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::convertEncoding(CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 152, $this->source); })()), "htmlBody", [], "method", false, false, false, 152), "UTF-8", CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 152, $this->source); })()), "htmlCharset", [], "method", false, false, false, 152)), "html", null, true);
                        } else {
                            // line 154
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 154, $this->source); })()), "htmlBody", [], "method", false, false, false, 154), "html", null, true);
                        }
                        // line 156
                        yield "</pre>
                                                    </div>
                                                </div>
                                                <div class=\"tab\">
                                                    <h3 class=\"tab-title\">Text Content</h3>
                                                    <div class=\"tab-content\">
                                                        <pre class=\"prewrap\" style=\"max-height: 600px\">";
                        // line 163
                        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 163, $this->source); })()), "textCharset", [], "method", false, false, false, 163)) {
                            // line 164
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::convertEncoding(CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 164, $this->source); })()), "textBody", [], "method", false, false, false, 164), "UTF-8", CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 164, $this->source); })()), "textCharset", [], "method", false, false, false, 164)), "html", null, true);
                        } else {
                            // line 166
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 166, $this->source); })()), "textBody", [], "method", false, false, false, 166), "html", null, true);
                        }
                        // line 168
                        yield "</pre>
                                                    </div>
                                                </div>
                                                ";
                        // line 171
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 171, $this->source); })()), "attachments", [], "any", false, false, false, 171));
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
                        foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
                            // line 172
                            yield "                                                    <div class=\"tab\">
                                                        <h3 class=\"tab-title\">Attachment #";
                            // line 173
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 173), "html", null, true);
                            yield "</h3>
                                                        <div class=\"tab-content\">
                                                            <pre class=\"prewrap\" style=\"max-height: 600px\">";
                            // line 175
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["attachment"], "toString", [], "method", false, false, false, 175), "html", null, true);
                            yield "</pre>
                                                        </div>
                                                    </div>
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
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachment'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 179
                        yield "                                            ";
                    }
                    // line 180
                    yield "                                            <div class=\"tab\">
                                                <h3 class=\"tab-title\">Parts Hierarchy</h3>
                                                <div class=\"tab-content\">
                                                    <pre class=\"prewrap\" style=\"max-height: 600px\">";
                    // line 183
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 183, $this->source); })()), "body", [], "method", false, false, false, 183), "asDebugString", [], "method", false, false, false, 183), "html", null, true);
                    yield "</pre>
                                                </div>
                                            </div>
                                            <div class=\"tab\">
                                                <h3 class=\"tab-title\">Raw</h3>
                                                <div class=\"tab-content\">
                                                    <pre class=\"prewrap\" style=\"max-height: 600px\">";
                    // line 189
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 189, $this->source); })()), "toString", [], "method", false, false, false, 189), "html", null, true);
                    yield "</pre>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                ";
                }
                // line 195
                yield "                            </div>
                        </div>
                    </div>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 199
            yield "            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['transport'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@WebProfiler/Collector/mailer.html.twig";
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
        return array (  539 => 199,  522 => 195,  513 => 189,  504 => 183,  499 => 180,  496 => 179,  478 => 175,  473 => 173,  470 => 172,  453 => 171,  448 => 168,  445 => 166,  442 => 164,  440 => 163,  432 => 156,  429 => 154,  426 => 152,  424 => 151,  418 => 146,  416 => 145,  414 => 144,  406 => 138,  398 => 137,  394 => 136,  387 => 132,  381 => 129,  371 => 122,  367 => 120,  365 => 119,  359 => 116,  356 => 115,  354 => 114,  352 => 113,  344 => 110,  341 => 109,  338 => 108,  321 => 107,  313 => 103,  309 => 102,  305 => 100,  296 => 97,  292 => 96,  289 => 95,  285 => 94,  281 => 92,  275 => 88,  273 => 87,  268 => 84,  265 => 83,  255 => 82,  243 => 79,  237 => 76,  234 => 75,  232 => 74,  226 => 71,  222 => 70,  219 => 69,  216 => 68,  206 => 67,  159 => 31,  149 => 30,  135 => 26,  132 => 25,  128 => 24,  119 => 21,  115 => 20,  112 => 19,  108 => 18,  102 => 15,  98 => 13,  96 => 12,  93 => 11,  86 => 9,  83 => 8,  80 => 7,  78 => 6,  75 => 5,  72 => 4,  62 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set events = collector.events %}

    {% if events.messages|length %}
        {% set icon %}
            {% include('@WebProfiler/Icon/mailer.svg') %}
            <span class=\"sf-toolbar-value\">{{ events.messages|length }}</span>
        {% endset %}

        {% set text %}
            <div class=\"sf-toolbar-info-piece\">
                <b>Sent messages</b>
                <span class=\"sf-toolbar-status\">{{ events.messages|length }}</span>
            </div>

            {% for transport in events.transports %}
                <div class=\"sf-toolbar-info-piece\">
                    <b>{{ transport }}</b>
                    <span class=\"sf-toolbar-status\">{{ events.messages(transport)|length }}</span>
                </div>
            {% endfor %}
        {% endset %}

        {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { 'link': profiler_url }) }}
    {% endif %}
{% endblock %}

{% block head %}
    {{ parent() }}
    <style type=\"text/css\">
        /* utility classes */
        .m-t-0 { margin-top: 0 !important; }
        .m-t-10 { margin-top: 10px !important; }

        /* basic grid */
        .row {
            display: flex;
            flex-wrap: wrap;
            margin-right: -15px;
            margin-left: -15px;
        }
        .col {
            flex-basis: 0;
            flex-grow: 1;
            max-width: 100%;
            position: relative;
            width: 100%;
            min-height: 1px;
            padding-right: 15px;
            padding-left: 15px;
        }
        .col-4 {
            flex: 0 0 33.333333%;
            max-width: 33.333333%;
        }

        /* small tabs */
        .sf-tabs-sm .tab-navigation li {
            font-size: 14px;
            padding: .3em .5em;
        }
    </style>
{% endblock %}

{% block menu %}
    {% set events = collector.events %}

    <span class=\"label {{ events.messages is empty ? 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/mailer.svg') }}</span>

        <strong>E-mails</strong>
        {% if events.messages|length > 0 %}
            <span class=\"count\">
                <span>{{ events.messages|length }}</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    {% set events = collector.events %}

    <h2>Emails</h2>

    {% if not events.messages|length %}
        <div class=\"empty\">
            <p>No emails were sent.</p>
        </div>
    {% endif %}

    <div class=\"metrics\">
        {% for transport in events.transports %}
            <div class=\"metric\">
                <span class=\"value\">{{ events.messages(transport)|length }}</span>
                <span class=\"label\">{{ events.messages(transport)|length == 1 ? 'message' : 'messages' }}</span>
            </div>
        {% endfor %}
    </div>

    {% for transport in events.transports %}
        <h3>{{ transport }}</h3>

        <div class=\"card-block\">
            <div class=\"sf-tabs sf-tabs-sm\">
                {% for event in events.events(transport) %}
                    {% set message = event.message %}
                    <div class=\"tab\">
                        <h3 class=\"tab-title\">Email #{{ loop.index }} <small>({{ event.isQueued() ? 'queued' : 'sent' }})</small></h3>
                        <div class=\"tab-content\">
                            <div class=\"card\">
                                {% if message.headers is not defined %}
                                    {# RawMessage instance #}
                                    <div class=\"card-block\">
                                        <pre class=\"prewrap\" style=\"max-height: 600px\">{{ message.toString() }}</pre>
                                    </div>
                                {% else %}
                                    {# Message instance #}
                                    <div class=\"card-block\">
                                        <span class=\"label\">Subject</span>
                                        <h2 class=\"m-t-10\">{{ message.headers.get('subject').bodyAsString() ?? '(empty)' }}</h2>
                                    </div>

                                    <div class=\"card-block\">
                                        <div class=\"row\">
                                            <div class=\"col col-4\">
                                                <span class=\"label\">From</span>
                                                <pre class=\"prewrap\">{{ (message.headers.get('from').bodyAsString() ?? '(empty)')|replace({'From:': ''}) }}</pre>

                                                <span class=\"label\">To</span>
                                                <pre class=\"prewrap\">{{ (message.headers.get('to').bodyAsString() ?? '(empty)')|replace({'To:': ''}) }}</pre>
                                            </div>
                                            <div class=\"col\">
                                                <span class=\"label\">Headers</span>
                                                <pre class=\"prewrap\">{% for header in message.headers.all|filter(header => (header.name ?? '') not in ['Subject', 'From', 'To']) %}
                                                    {{- header.toString }}
                                                {%~ endfor %}</pre>
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"card-block\">
                                        {% if message.htmlBody is defined %}
                                            {# Email instance #}
                                            <div class=\"sf-tabs sf-tabs-sm\">
                                                <div class=\"tab\">
                                                    <h3 class=\"tab-title\">HTML Content</h3>
                                                    <div class=\"tab-content\">
                                                        <pre class=\"prewrap\" style=\"max-height: 600px\">
                                                            {%- if message.htmlCharset() %}
                                                                {{- message.htmlBody()|convert_encoding('UTF-8', message.htmlCharset()) }}
                                                            {%- else %}
                                                                {{- message.htmlBody() }}
                                                            {%- endif -%}
                                                        </pre>
                                                    </div>
                                                </div>
                                                <div class=\"tab\">
                                                    <h3 class=\"tab-title\">Text Content</h3>
                                                    <div class=\"tab-content\">
                                                        <pre class=\"prewrap\" style=\"max-height: 600px\">
                                                            {%- if message.textCharset() %}
                                                                {{- message.textBody()|convert_encoding('UTF-8', message.textCharset()) }}
                                                            {%- else %}
                                                                {{- message.textBody() }}
                                                            {%- endif -%}
                                                        </pre>
                                                    </div>
                                                </div>
                                                {% for attachment in message.attachments %}
                                                    <div class=\"tab\">
                                                        <h3 class=\"tab-title\">Attachment #{{ loop.index }}</h3>
                                                        <div class=\"tab-content\">
                                                            <pre class=\"prewrap\" style=\"max-height: 600px\">{{ attachment.toString() }}</pre>
                                                        </div>
                                                    </div>
                                                {% endfor %}
                                            {% endif %}
                                            <div class=\"tab\">
                                                <h3 class=\"tab-title\">Parts Hierarchy</h3>
                                                <div class=\"tab-content\">
                                                    <pre class=\"prewrap\" style=\"max-height: 600px\">{{ message.body().asDebugString() }}</pre>
                                                </div>
                                            </div>
                                            <div class=\"tab\">
                                                <h3 class=\"tab-title\">Raw</h3>
                                                <div class=\"tab-content\">
                                                    <pre class=\"prewrap\" style=\"max-height: 600px\">{{ message.toString() }}</pre>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                {% endif %}
                            </div>
                        </div>
                    </div>
                {% endfor %}
            </div>
        </div>
    {% endfor %}
{% endblock %}
", "@WebProfiler/Collector/mailer.html.twig", "C:\\laragon\\www\\training\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\mailer.html.twig");
    }
}
