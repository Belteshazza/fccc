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

/* @Doctrine/Collector/db.html.twig */
class __TwigTemplate_e51ff0efb6a632fe961868be3a03eea080104ca0154f9f4ca46052abee7d51cf extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'toolbar' => [$this, 'block_toolbar'],
            'menu' => [$this, 'block_menu'],
            'panel' => [$this, 'block_panel'],
            'queries' => [$this, 'block_queries'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(((CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 1, $this->source); })()), "isXmlHttpRequest", [], "any", false, false, false, 1)) ? ("@WebProfiler/Profiler/ajax_layout.html.twig") : ("@WebProfiler/Profiler/layout.html.twig")), "@Doctrine/Collector/db.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Doctrine/Collector/db.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Doctrine/Collector/db.html.twig"));

        // line 3
        $macros["helper"] = $this->macros["helper"] = $this;
        // line 1
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_toolbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 6
        yield "    ";
        if (((1 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 6, $this->source); })()), "querycount", [], "any", false, false, false, 6), 0)) || (1 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 6, $this->source); })()), "invalidEntityCount", [], "any", false, false, false, 6), 0)))) {
            // line 7
            yield "
        ";
            // line 8
            $context["icon"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 9
                yield "            ";
                $context["status"] = (((1 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 9, $this->source); })()), "invalidEntityCount", [], "any", false, false, false, 9), 0))) ? ("red") : ((((1 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 9, $this->source); })()), "querycount", [], "any", false, false, false, 9), 50))) ? ("yellow") : (""))));
                // line 10
                yield "
            ";
                // line 11
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@Doctrine/Collector/icon.svg");
                yield "

            ";
                // line 13
                if (((0 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 13, $this->source); })()), "querycount", [], "any", false, false, false, 13), 0)) && (1 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 13, $this->source); })()), "invalidEntityCount", [], "any", false, false, false, 13), 0)))) {
                    // line 14
                    yield "                <span class=\"sf-toolbar-value\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 14, $this->source); })()), "invalidEntityCount", [], "any", false, false, false, 14), "html", null, true);
                    yield "</span>
                <span class=\"sf-toolbar-label\">errors</span>
            ";
                } else {
                    // line 17
                    yield "                <span class=\"sf-toolbar-value\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 17, $this->source); })()), "querycount", [], "any", false, false, false, 17), "html", null, true);
                    yield "</span>
                <span class=\"sf-toolbar-info-piece-additional-detail\">
                    <span class=\"sf-toolbar-label\">in</span>
                    <span class=\"sf-toolbar-value\">";
                    // line 20
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%0.2f", (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 20, $this->source); })()), "time", [], "any", false, false, false, 20) * 1000)), "html", null, true);
                    yield "</span>
                    <span class=\"sf-toolbar-label\">ms</span>
                </span>
            ";
                }
                // line 24
                yield "        ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 25
            yield "
        ";
            // line 26
            $context["text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 27
                yield "            <div class=\"sf-toolbar-info-piece\">
                <b>Database Queries</b>
                <span class=\"sf-toolbar-status ";
                // line 29
                yield (((1 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 29, $this->source); })()), "querycount", [], "any", false, false, false, 29), 50))) ? ("sf-toolbar-status-yellow") : (""));
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 29, $this->source); })()), "querycount", [], "any", false, false, false, 29), "html", null, true);
                yield "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Different statements</b>
                <span class=\"sf-toolbar-status\">";
                // line 33
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 33, $this->source); })()), "groupedQueryCount", [], "any", false, false, false, 33), "html", null, true);
                yield "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Query time</b>
                <span>";
                // line 37
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%0.2f", (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 37, $this->source); })()), "time", [], "any", false, false, false, 37) * 1000)), "html", null, true);
                yield " ms</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Invalid entities</b>
                <span class=\"sf-toolbar-status ";
                // line 41
                yield (((1 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 41, $this->source); })()), "invalidEntityCount", [], "any", false, false, false, 41), 0))) ? ("sf-toolbar-status-red") : (""));
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 41, $this->source); })()), "invalidEntityCount", [], "any", false, false, false, 41), "html", null, true);
                yield "</span>
            </div>
            ";
                // line 43
                if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 43, $this->source); })()), "cacheEnabled", [], "any", false, false, false, 43)) {
                    // line 44
                    yield "                <div class=\"sf-toolbar-info-piece\">
                    <b>Cache hits</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status-green\">";
                    // line 46
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 46, $this->source); })()), "cacheHitsCount", [], "any", false, false, false, 46), "html", null, true);
                    yield "</span>
                </div>
                <div class=\"sf-toolbar-info-piece\">
                    <b>Cache misses</b>
                    <span class=\"sf-toolbar-status ";
                    // line 50
                    yield (((1 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 50, $this->source); })()), "cacheMissesCount", [], "any", false, false, false, 50), 0))) ? ("sf-toolbar-status-yellow") : (""));
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 50, $this->source); })()), "cacheMissesCount", [], "any", false, false, false, 50), "html", null, true);
                    yield "</span>
                </div>
                <div class=\"sf-toolbar-info-piece\">
                    <b>Cache puts</b>
                    <span class=\"sf-toolbar-status ";
                    // line 54
                    yield (((1 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 54, $this->source); })()), "cachePutsCount", [], "any", false, false, false, 54), 0))) ? ("sf-toolbar-status-yellow") : (""));
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 54, $this->source); })()), "cachePutsCount", [], "any", false, false, false, 54), "html", null, true);
                    yield "</span>
                </div>
            ";
                } else {
                    // line 57
                    yield "                <div class=\"sf-toolbar-info-piece\">
                    <b>Second Level Cache</b>
                    <span class=\"sf-toolbar-status\">disabled</span>
                </div>
            ";
                }
                // line 62
                yield "        ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 63
            yield "
        ";
            // line 64
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => (isset($context["profiler_url"]) || array_key_exists("profiler_url", $context) ? $context["profiler_url"] : (function () { throw new RuntimeError('Variable "profiler_url" does not exist.', 64, $this->source); })()), "status" => ((array_key_exists("status", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 64, $this->source); })()), "")) : (""))]);
            yield "

    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        return; yield '';
    }

    // line 69
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 70
        yield "    <span class=\"label ";
        yield (((1 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 70, $this->source); })()), "invalidEntityCount", [], "any", false, false, false, 70), 0))) ? ("label-status-error") : (""));
        yield " ";
        yield (((0 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 70, $this->source); })()), "querycount", [], "any", false, false, false, 70), 0))) ? ("disabled") : (""));
        yield "\">
        <span class=\"icon\">";
        // line 71
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@Doctrine/Collector/icon.svg");
        yield "</span>
        <strong>Doctrine</strong>
        ";
        // line 73
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 73, $this->source); })()), "invalidEntityCount", [], "any", false, false, false, 73)) {
            // line 74
            yield "            <span class=\"count\">
                <span>";
            // line 75
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 75, $this->source); })()), "invalidEntityCount", [], "any", false, false, false, 75), "html", null, true);
            yield "</span>
            </span>
        ";
        }
        // line 78
        yield "    </span>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        return; yield '';
    }

    // line 81
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 82
        yield "    ";
        if ((0 === CoreExtension::compare("explain", (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 82, $this->source); })())))) {
            // line 83
            yield "        ";
            yield $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("Doctrine\\Bundle\\DoctrineBundle\\Controller\\ProfilerController::explainAction", ["token" =>             // line 84
(isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new RuntimeError('Variable "token" does not exist.', 84, $this->source); })()), "panel" => "db", "connectionName" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 86
(isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 86, $this->source); })()), "query", [], "any", false, false, false, 86), "get", ["connection"], "method", false, false, false, 86), "query" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 87
(isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 87, $this->source); })()), "query", [], "any", false, false, false, 87), "get", ["query"], "method", false, false, false, 87)]));
            // line 88
            yield "
    ";
        } else {
            // line 90
            yield "        ";
            yield from             $this->unwrap()->yieldBlock("queries", $context, $blocks);
            yield "
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        return; yield '';
    }

    // line 94
    public function block_queries($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "queries"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "queries"));

        // line 95
        yield "    <style>
        .time-container { position: relative; }
        .time-container .nowrap { position: relative; z-index: 1; text-shadow: 0 0 2px #fff; }
        .time-bar { display: block; position: absolute; top: 0; left: 0; bottom: 0; background: #e0e0e0; }
        .sql-runnable.sf-toggle-content.sf-toggle-visible { display: flex; flex-direction: column; }
        .sql-runnable button { align-self: end; }
    </style>

    <h2>Query Metrics</h2>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">";
        // line 107
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 107, $this->source); })()), "querycount", [], "any", false, false, false, 107), "html", null, true);
        yield "</span>
            <span class=\"label\">Database Queries</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">";
        // line 112
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 112, $this->source); })()), "groupedQueryCount", [], "any", false, false, false, 112), "html", null, true);
        yield "</span>
            <span class=\"label\">Different statements</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">";
        // line 117
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%0.2f", (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 117, $this->source); })()), "time", [], "any", false, false, false, 117) * 1000)), "html", null, true);
        yield " ms</span>
            <span class=\"label\">Query time</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">";
        // line 122
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 122, $this->source); })()), "invalidEntityCount", [], "any", false, false, false, 122), "html", null, true);
        yield "</span>
            <span class=\"label\">Invalid entities</span>
        </div>

        ";
        // line 126
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 126, $this->source); })()), "cacheEnabled", [], "any", false, false, false, 126)) {
            // line 127
            yield "            <div class=\"metric\">
                <span class=\"value\">";
            // line 128
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 128, $this->source); })()), "cacheHitsCount", [], "any", false, false, false, 128), "html", null, true);
            yield "</span>
                <span class=\"label\">Cache hits</span>
            </div>
            <div class=\"metric\">
                <span class=\"value\">";
            // line 132
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 132, $this->source); })()), "cacheMissesCount", [], "any", false, false, false, 132), "html", null, true);
            yield "</span>
                <span class=\"label\">Cache misses</span>
            </div>
            <div class=\"metric\">
                <span class=\"value\">";
            // line 136
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 136, $this->source); })()), "cachePutsCount", [], "any", false, false, false, 136), "html", null, true);
            yield "</span>
                <span class=\"label\">Cache puts</span>
            </div>
        ";
        }
        // line 140
        yield "    </div>

    ";
        // line 142
        $context["group_queries"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 142, $this->source); })()), "query", [], "any", false, false, false, 142), "getBoolean", ["group"], "method", false, false, false, 142);
        // line 143
        yield "    ";
        if ((isset($context["group_queries"]) || array_key_exists("group_queries", $context) ? $context["group_queries"] : (function () { throw new RuntimeError('Variable "group_queries" does not exist.', 143, $this->source); })())) {
            // line 144
            yield "        <h2>Grouped Statements</h2>
        <p><a href=\"";
            // line 145
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", ["panel" => "db", "token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new RuntimeError('Variable "token" does not exist.', 145, $this->source); })())]), "html", null, true);
            yield "\">Show all queries</a></p>
    ";
        } else {
            // line 147
            yield "        <h2>Queries</h2>
        <p><a href=\"";
            // line 148
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", ["panel" => "db", "token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new RuntimeError('Variable "token" does not exist.', 148, $this->source); })()), "group" => true]), "html", null, true);
            yield "\">Group similar statements</a></p>
    ";
        }
        // line 150
        yield "
    ";
        // line 151
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 151, $this->source); })()), "queries", [], "any", false, false, false, 151));
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
        foreach ($context['_seq'] as $context["connection"] => $context["queries"]) {
            // line 152
            yield "        ";
            if ((1 === CoreExtension::compare(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 152, $this->source); })()), "connections", [], "any", false, false, false, 152)), 1))) {
                // line 153
                yield "            <h3>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["connection"], "html", null, true);
                yield " <small>connection</small></h3>
        ";
            }
            // line 155
            yield "
        ";
            // line 156
            if (Twig\Extension\CoreExtension::testEmpty($context["queries"])) {
                // line 157
                yield "            <div class=\"empty\">
                <p>No database queries were performed.</p>
            </div>
        ";
            } else {
                // line 161
                yield "            ";
                if ((isset($context["group_queries"]) || array_key_exists("group_queries", $context) ? $context["group_queries"] : (function () { throw new RuntimeError('Variable "group_queries" does not exist.', 161, $this->source); })())) {
                    // line 162
                    yield "                ";
                    $context["queries"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 162, $this->source); })()), "groupedQueries", [], "any", false, false, false, 162), $context["connection"], [], "array", false, false, false, 162);
                    // line 163
                    yield "            ";
                }
                // line 164
                yield "            <table class=\"alt queries-table\">
                <thead>
                <tr>
                    ";
                // line 167
                if ((isset($context["group_queries"]) || array_key_exists("group_queries", $context) ? $context["group_queries"] : (function () { throw new RuntimeError('Variable "group_queries" does not exist.', 167, $this->source); })())) {
                    // line 168
                    yield "                        <th class=\"nowrap\" onclick=\"javascript:sortTable(this, 0, 'queries-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 168), "html", null, true);
                    yield "')\" data-sort-direction=\"1\" style=\"cursor: pointer;\">Time<span class=\"text-muted\">&#9660;</span></th>
                        <th class=\"nowrap\" onclick=\"javascript:sortTable(this, 1, 'queries-";
                    // line 169
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 169), "html", null, true);
                    yield "')\" style=\"cursor: pointer;\">Count<span></span></th>
                    ";
                } else {
                    // line 171
                    yield "                        <th class=\"nowrap\" onclick=\"javascript:sortTable(this, 0, 'queries-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 171), "html", null, true);
                    yield "')\" data-sort-direction=\"-1\" style=\"cursor: pointer;\">#<span class=\"text-muted\">&#9650;</span></th>
                        <th class=\"nowrap\" onclick=\"javascript:sortTable(this, 1, 'queries-";
                    // line 172
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 172), "html", null, true);
                    yield "')\" style=\"cursor: pointer;\">Time<span></span></th>
                    ";
                }
                // line 174
                yield "                    <th style=\"width: 100%;\">Info</th>
                </tr>
                </thead>
                <tbody id=\"queries-";
                // line 177
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 177), "html", null, true);
                yield "\">
                    ";
                // line 178
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($context["queries"]);
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
                foreach ($context['_seq'] as $context["i"] => $context["query"]) {
                    // line 179
                    yield "                        ";
                    $context["i"] = (((isset($context["group_queries"]) || array_key_exists("group_queries", $context) ? $context["group_queries"] : (function () { throw new RuntimeError('Variable "group_queries" does not exist.', 179, $this->source); })())) ? (CoreExtension::getAttribute($this->env, $this->source, $context["query"], "index", [], "any", false, false, false, 179)) : ($context["i"]));
                    // line 180
                    yield "                        <tr id=\"queryNo-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                    yield "-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "parent", [], "any", false, false, false, 180), "loop", [], "any", false, false, false, 180), "index", [], "any", false, false, false, 180), "html", null, true);
                    yield "\">
                            ";
                    // line 181
                    if ((isset($context["group_queries"]) || array_key_exists("group_queries", $context) ? $context["group_queries"] : (function () { throw new RuntimeError('Variable "group_queries" does not exist.', 181, $this->source); })())) {
                        // line 182
                        yield "                                <td class=\"time-container\">
                                    <span class=\"time-bar\" style=\"width:";
                        // line 183
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%0.2f", CoreExtension::getAttribute($this->env, $this->source, $context["query"], "executionPercent", [], "any", false, false, false, 183)), "html", null, true);
                        yield "%\"></span>
                                    <span class=\"nowrap\">";
                        // line 184
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%0.2f", (CoreExtension::getAttribute($this->env, $this->source, $context["query"], "executionMS", [], "any", false, false, false, 184) * 1000)), "html", null, true);
                        yield "&nbsp;ms<br />(";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%0.2f", CoreExtension::getAttribute($this->env, $this->source, $context["query"], "executionPercent", [], "any", false, false, false, 184)), "html", null, true);
                        yield "%)</span>
                                </td>
                                <td class=\"nowrap\">";
                        // line 186
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["query"], "count", [], "any", false, false, false, 186), "html", null, true);
                        yield "</td>
                            ";
                    } else {
                        // line 188
                        yield "                                <td class=\"nowrap\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 188), "html", null, true);
                        yield "</td>
                                <td class=\"nowrap\">";
                        // line 189
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%0.2f", (CoreExtension::getAttribute($this->env, $this->source, $context["query"], "executionMS", [], "any", false, false, false, 189) * 1000)), "html", null, true);
                        yield "&nbsp;ms</td>
                            ";
                    }
                    // line 191
                    yield "                            <td>
                                ";
                    // line 192
                    yield $this->extensions['Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension']->prettifySql(CoreExtension::getAttribute($this->env, $this->source, $context["query"], "sql", [], "any", false, false, false, 192));
                    yield "

                                <div>
                                    <strong class=\"font-normal text-small\">Parameters</strong>: ";
                    // line 195
                    yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["query"], "params", [], "any", false, false, false, 195), 2);
                    yield "
                                </div>

                                <div class=\"text-small font-normal\">
                                    <a href=\"#\" class=\"sf-toggle link-inverse\" data-toggle-selector=\"#formatted-query-";
                    // line 199
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                    yield "-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "parent", [], "any", false, false, false, 199), "loop", [], "any", false, false, false, 199), "index", [], "any", false, false, false, 199), "html", null, true);
                    yield "\" data-toggle-alt-content=\"Hide formatted query\">View formatted query</a>

                                    ";
                    // line 201
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["query"], "runnable", [], "any", false, false, false, 201)) {
                        // line 202
                        yield "                                        &nbsp;&nbsp;
                                        <a href=\"#\" class=\"sf-toggle link-inverse\" data-toggle-selector=\"#original-query-";
                        // line 203
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                        yield "-";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "parent", [], "any", false, false, false, 203), "loop", [], "any", false, false, false, 203), "index", [], "any", false, false, false, 203), "html", null, true);
                        yield "\" data-toggle-alt-content=\"Hide runnable query\">View runnable query</a>
                                    ";
                    }
                    // line 205
                    yield "
                                    ";
                    // line 206
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["query"], "explainable", [], "any", false, false, false, 206)) {
                        // line 207
                        yield "                                        &nbsp;&nbsp;
                                        <a class=\"link-inverse\" href=\"";
                        // line 208
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", ["panel" => "db", "token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new RuntimeError('Variable "token" does not exist.', 208, $this->source); })()), "page" => "explain", "connection" => $context["connection"], "query" => $context["i"]]), "html", null, true);
                        yield "\" onclick=\"return explain(this);\" data-target-id=\"explain-";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                        yield "-";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "parent", [], "any", false, false, false, 208), "loop", [], "any", false, false, false, 208), "index", [], "any", false, false, false, 208), "html", null, true);
                        yield "\">Explain query</a>
                                    ";
                    }
                    // line 210
                    yield "
                                    ";
                    // line 211
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["query"], "backtrace", [], "any", true, true, false, 211)) {
                        // line 212
                        yield "                                        &nbsp;&nbsp;
                                        <a href=\"#\" class=\"sf-toggle link-inverse\" data-toggle-selector=\"#backtrace-";
                        // line 213
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                        yield "-";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "parent", [], "any", false, false, false, 213), "loop", [], "any", false, false, false, 213), "index", [], "any", false, false, false, 213), "html", null, true);
                        yield "\" data-toggle-alt-content=\"Hide query backtrace\">View query backtrace</a>
                                    ";
                    }
                    // line 215
                    yield "                                </div>

                                <div id=\"formatted-query-";
                    // line 217
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                    yield "-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "parent", [], "any", false, false, false, 217), "loop", [], "any", false, false, false, 217), "index", [], "any", false, false, false, 217), "html", null, true);
                    yield "\" class=\"sql-runnable hidden\">
                                    ";
                    // line 218
                    yield $this->extensions['Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension']->formatSql(CoreExtension::getAttribute($this->env, $this->source, $context["query"], "sql", [], "any", false, false, false, 218), true);
                    yield "
                                    <button class=\"btn btn-sm hidden\" data-clipboard-text=\"";
                    // line 219
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension']->formatSql(CoreExtension::getAttribute($this->env, $this->source, $context["query"], "sql", [], "any", false, false, false, 219), false), "html_attr");
                    yield "\">Copy</button>
                                </div>

                                ";
                    // line 222
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["query"], "runnable", [], "any", false, false, false, 222)) {
                        // line 223
                        yield "                                    <div id=\"original-query-";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                        yield "-";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "parent", [], "any", false, false, false, 223), "loop", [], "any", false, false, false, 223), "index", [], "any", false, false, false, 223), "html", null, true);
                        yield "\" class=\"sql-runnable hidden\">
                                        ";
                        // line 224
                        $context["runnable_sql"] = $this->extensions['Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension']->replaceQueryParameters((CoreExtension::getAttribute($this->env, $this->source, $context["query"], "sql", [], "any", false, false, false, 224) . ";"), CoreExtension::getAttribute($this->env, $this->source, $context["query"], "params", [], "any", false, false, false, 224));
                        // line 225
                        yield "                                        ";
                        yield $this->extensions['Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension']->prettifySql((isset($context["runnable_sql"]) || array_key_exists("runnable_sql", $context) ? $context["runnable_sql"] : (function () { throw new RuntimeError('Variable "runnable_sql" does not exist.', 225, $this->source); })()));
                        yield "
                                        <button class=\"btn btn-sm hidden\" data-clipboard-text=\"";
                        // line 226
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["runnable_sql"]) || array_key_exists("runnable_sql", $context) ? $context["runnable_sql"] : (function () { throw new RuntimeError('Variable "runnable_sql" does not exist.', 226, $this->source); })()), "html_attr");
                        yield "\">Copy</button>
                                    </div>
                                ";
                    }
                    // line 229
                    yield "
                                ";
                    // line 230
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["query"], "explainable", [], "any", false, false, false, 230)) {
                        // line 231
                        yield "                                    <div id=\"explain-";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                        yield "-";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "parent", [], "any", false, false, false, 231), "loop", [], "any", false, false, false, 231), "index", [], "any", false, false, false, 231), "html", null, true);
                        yield "\" class=\"sql-explain\"></div>
                                ";
                    }
                    // line 233
                    yield "
                                ";
                    // line 234
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["query"], "backtrace", [], "any", true, true, false, 234)) {
                        // line 235
                        yield "                                    <div id=\"backtrace-";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                        yield "-";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "parent", [], "any", false, false, false, 235), "loop", [], "any", false, false, false, 235), "index", [], "any", false, false, false, 235), "html", null, true);
                        yield "\" class=\"hidden\">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th scope=\"col\">#</th>
                                                    <th scope=\"col\">File/Call</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                ";
                        // line 244
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["query"], "backtrace", [], "any", false, false, false, 244));
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
                            // line 245
                            yield "                                                    <tr>
                                                        <td>";
                            // line 246
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 246), "html", null, true);
                            yield "</td>
                                                        <td>
                                                            <span class=\"text-small\">
                                                                ";
                            // line 249
                            $context["line_number"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "line", [], "any", true, true, false, 249)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "line", [], "any", false, false, false, 249), 1)) : (1));
                            // line 250
                            yield "                                                                ";
                            if (CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "file", [], "any", true, true, false, 250)) {
                                // line 251
                                yield "                                                                    <a href=\"";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink(CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "file", [], "any", false, false, false, 251), (isset($context["line_number"]) || array_key_exists("line_number", $context) ? $context["line_number"] : (function () { throw new RuntimeError('Variable "line_number" does not exist.', 251, $this->source); })())), "html", null, true);
                                yield "\">
                                                                ";
                            }
                            // line 253
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "class", [], "any", true, true, false, 253)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "class", [], "any", false, false, false, 253))) : ("")) . ((CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "class", [], "any", true, true, false, 253)) ? (((CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "type", [], "any", true, true, false, 253)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "type", [], "any", false, false, false, 253), "::")) : ("::"))) : (""))), "html", null, true);
                            // line 254
                            yield "<span class=\"status-warning\">";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "function", [], "any", false, false, false, 254), "html", null, true);
                            yield "</span>
                                                                ";
                            // line 255
                            if (CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "file", [], "any", true, true, false, 255)) {
                                // line 256
                                yield "                                                                    </a>
                                                                ";
                            }
                            // line 258
                            yield "                                                                (line ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["line_number"]) || array_key_exists("line_number", $context) ? $context["line_number"] : (function () { throw new RuntimeError('Variable "line_number" does not exist.', 258, $this->source); })()), "html", null, true);
                            yield ")
                                                            </span>
                                                        </td>
                                                    </tr>
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
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 263
                        yield "                                            </tbody>
                                        </table>
                                    </div>
                                ";
                    }
                    // line 267
                    yield "                            </td>
                        </tr>
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
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['query'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 270
                yield "                </tbody>
            </table>
        ";
            }
            // line 273
            yield "    ";
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
        unset($context['_seq'], $context['_iterated'], $context['connection'], $context['queries'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 274
        yield "
    <h2>Database Connections</h2>

    ";
        // line 277
        if ( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 277, $this->source); })()), "connections", [], "any", false, false, false, 277)) {
            // line 278
            yield "        <div class=\"empty\">
            <p>There are no configured database connections.</p>
        </div>
    ";
        } else {
            // line 282
            yield "        ";
            yield CoreExtension::callMacro($macros["helper"], "macro_render_simple_table", ["Name", "Service", CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 282, $this->source); })()), "connections", [], "any", false, false, false, 282)], 282, $context, $this->getSourceContext());
            yield "
    ";
        }
        // line 284
        yield "
    <h2>Entity Managers</h2>

    ";
        // line 287
        if ( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 287, $this->source); })()), "managers", [], "any", false, false, false, 287)) {
            // line 288
            yield "        <div class=\"empty\">
            <p>There are no configured entity managers.</p>
        </div>
    ";
        } else {
            // line 292
            yield "        ";
            yield CoreExtension::callMacro($macros["helper"], "macro_render_simple_table", ["Name", "Service", CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 292, $this->source); })()), "managers", [], "any", false, false, false, 292)], 292, $context, $this->getSourceContext());
            yield "
    ";
        }
        // line 294
        yield "
    <h2>Second Level Cache</h2>

    ";
        // line 297
        if ( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 297, $this->source); })()), "cacheEnabled", [], "any", false, false, false, 297)) {
            // line 298
            yield "        <div class=\"empty\">
            <p>Second Level Cache is not enabled.</p>
        </div>
    ";
        } else {
            // line 302
            yield "        ";
            if ( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 302, $this->source); })()), "cacheCounts", [], "any", false, false, false, 302)) {
                // line 303
                yield "            <div class=\"empty\">
                <p>Second level cache information is not available.</p>
            </div>
        ";
            } else {
                // line 307
                yield "            <div class=\"metrics\">
                <div class=\"metric\">
                    <span class=\"value\">";
                // line 309
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 309, $this->source); })()), "cacheCounts", [], "any", false, false, false, 309), "hits", [], "any", false, false, false, 309), "html", null, true);
                yield "</span>
                    <span class=\"label\">Hits</span>
                </div>

                <div class=\"metric\">
                    <span class=\"value\">";
                // line 314
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 314, $this->source); })()), "cacheCounts", [], "any", false, false, false, 314), "misses", [], "any", false, false, false, 314), "html", null, true);
                yield "</span>
                    <span class=\"label\">Misses</span>
                </div>

                <div class=\"metric\">
                    <span class=\"value\">";
                // line 319
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 319, $this->source); })()), "cacheCounts", [], "any", false, false, false, 319), "puts", [], "any", false, false, false, 319), "html", null, true);
                yield "</span>
                    <span class=\"label\">Puts</span>
                </div>
            </div>

            ";
                // line 324
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 324, $this->source); })()), "cacheRegions", [], "any", false, false, false, 324), "hits", [], "any", false, false, false, 324)) {
                    // line 325
                    yield "                <h3>Number of cache hits</h3>
                ";
                    // line 326
                    yield CoreExtension::callMacro($macros["helper"], "macro_render_simple_table", ["Region", "Hits", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 326, $this->source); })()), "cacheRegions", [], "any", false, false, false, 326), "hits", [], "any", false, false, false, 326)], 326, $context, $this->getSourceContext());
                    yield "
            ";
                }
                // line 328
                yield "
            ";
                // line 329
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 329, $this->source); })()), "cacheRegions", [], "any", false, false, false, 329), "misses", [], "any", false, false, false, 329)) {
                    // line 330
                    yield "                <h3>Number of cache misses</h3>
                ";
                    // line 331
                    yield CoreExtension::callMacro($macros["helper"], "macro_render_simple_table", ["Region", "Misses", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 331, $this->source); })()), "cacheRegions", [], "any", false, false, false, 331), "misses", [], "any", false, false, false, 331)], 331, $context, $this->getSourceContext());
                    yield "
            ";
                }
                // line 333
                yield "
            ";
                // line 334
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 334, $this->source); })()), "cacheRegions", [], "any", false, false, false, 334), "puts", [], "any", false, false, false, 334)) {
                    // line 335
                    yield "                <h3>Number of cache puts</h3>
                ";
                    // line 336
                    yield CoreExtension::callMacro($macros["helper"], "macro_render_simple_table", ["Region", "Puts", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 336, $this->source); })()), "cacheRegions", [], "any", false, false, false, 336), "puts", [], "any", false, false, false, 336)], 336, $context, $this->getSourceContext());
                    yield "
            ";
                }
                // line 338
                yield "        ";
            }
            // line 339
            yield "    ";
        }
        // line 340
        yield "
    ";
        // line 341
        if ((1 === CoreExtension::compare(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 341, $this->source); })()), "entities", [], "any", false, false, false, 341)), 0))) {
            // line 342
            yield "        <h2>Entities Mapping</h2>

        ";
            // line 344
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 344, $this->source); })()), "entities", [], "any", false, false, false, 344));
            foreach ($context['_seq'] as $context["manager"] => $context["classes"]) {
                // line 345
                yield "            ";
                if ((1 === CoreExtension::compare(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 345, $this->source); })()), "managers", [], "any", false, false, false, 345)), 1))) {
                    // line 346
                    yield "                <h3>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["manager"], "html", null, true);
                    yield " <small>entity manager</small></h3>
            ";
                }
                // line 348
                yield "
            ";
                // line 349
                if (Twig\Extension\CoreExtension::testEmpty($context["classes"])) {
                    // line 350
                    yield "                <div class=\"empty\">
                    <p>No loaded entities.</p>
                </div>
            ";
                } else {
                    // line 354
                    yield "                <table>
                    <thead>
                    <tr>
                        <th scope=\"col\">Class</th>
                        <th scope=\"col\">Mapping errors</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
                    // line 362
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable($context["classes"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["class"]) {
                        // line 363
                        yield "                        ";
                        $context["contains_errors"] = (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "mappingErrors", [], "any", false, true, false, 363), $context["manager"], [], "array", true, true, false, 363) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "mappingErrors", [], "any", false, true, false, 363), $context["manager"], [], "array", false, true, false, 363), $context["class"], [], "array", true, true, false, 363));
                        // line 364
                        yield "                        <tr class=\"";
                        yield (((isset($context["contains_errors"]) || array_key_exists("contains_errors", $context) ? $context["contains_errors"] : (function () { throw new RuntimeError('Variable "contains_errors" does not exist.', 364, $this->source); })())) ? ("status-error") : (""));
                        yield "\">
                            <td>";
                        // line 365
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["class"], "html", null, true);
                        yield "</td>
                            <td class=\"font-normal\">
                                ";
                        // line 367
                        if ((isset($context["contains_errors"]) || array_key_exists("contains_errors", $context) ? $context["contains_errors"] : (function () { throw new RuntimeError('Variable "contains_errors" does not exist.', 367, $this->source); })())) {
                            // line 368
                            yield "                                    <ul>
                                        ";
                            // line 369
                            $context['_parent'] = $context;
                            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 369, $this->source); })()), "mappingErrors", [], "any", false, false, false, 369), $context["manager"], [], "array", false, false, false, 369), $context["class"], [], "array", false, false, false, 369));
                            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                                // line 370
                                yield "                                            <li>";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["error"], "html", null, true);
                                yield "</li>
                                        ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 372
                            yield "                                    </ul>
                                ";
                        } else {
                            // line 374
                            yield "                                    No errors.
                                ";
                        }
                        // line 376
                        yield "                            </td>
                        </tr>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['class'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 379
                    yield "                    </tbody>
                </table>
            ";
                }
                // line 382
                yield "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['manager'], $context['classes'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 383
            yield "    ";
        }
        // line 384
        yield "
    <script type=\"text/javascript\">//<![CDATA[
        function explain(link) {
            \"use strict\";

            var targetId = link.getAttribute('data-target-id');
            var targetElement = document.getElementById(targetId);

            if (targetElement.style.display != 'block') {
                Sfjs.load(targetId, link.href, null, function(xhr, el) {
                    el.innerHTML = 'An error occurred while loading the query explanation.';
                });

                targetElement.style.display = 'block';
                link.innerHTML = 'Hide query explanation';
            } else {
                targetElement.style.display = 'none';
                link.innerHTML = 'Explain query';
            }

            return false;
        }

        function sortTable(header, column, targetId) {
            \"use strict\";

            var direction = parseInt(header.getAttribute('data-sort-direction')) || 1,
                items = [],
                target = document.getElementById(targetId),
                rows = target.children,
                headers = header.parentElement.children,
                i;

            for (i = 0; i < rows.length; ++i) {
                items.push(rows[i]);
            }

            for (i = 0; i < headers.length; ++i) {
                headers[i].removeAttribute('data-sort-direction');
                if (headers[i].children.length > 0) {
                    headers[i].children[0].innerHTML = '';
                }
            }

            header.setAttribute('data-sort-direction', (-1*direction).toString());
            header.children[0].innerHTML = direction > 0 ? '<span class=\"text-muted\">&#9650;</span>' : '<span class=\"text-muted\">&#9660;</span>';

            items.sort(function(a, b) {
                return direction * (parseFloat(a.children[column].innerHTML) - parseFloat(b.children[column].innerHTML));
            });

            for (i = 0; i < items.length; ++i) {
                Sfjs.removeClass(items[i], i % 2 ? 'even' : 'odd');
                Sfjs.addClass(items[i], i % 2 ? 'odd' : 'even');
                target.appendChild(items[i]);
            }
        }

        if (navigator.clipboard) {
            document.querySelectorAll('[data-clipboard-text]').forEach(function(button) {
                Sfjs.removeClass(button, 'hidden');
                button.addEventListener('click', function() {
                    navigator.clipboard.writeText(button.getAttribute('data-clipboard-text'));
                })
            });
        }

        //]]></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        return; yield '';
    }

    // line 454
    public function macro_render_simple_table($__label1__ = null, $__label2__ = null, $__data__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "label1" => $__label1__,
            "label2" => $__label2__,
            "data" => $__data__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_simple_table"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_simple_table"));

            // line 455
            yield "    <table>
        <thead>
        <tr>
            <th scope=\"col\" class=\"key\">";
            // line 458
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["label1"]) || array_key_exists("label1", $context) ? $context["label1"] : (function () { throw new RuntimeError('Variable "label1" does not exist.', 458, $this->source); })()), "html", null, true);
            yield "</th>
            <th scope=\"col\">";
            // line 459
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["label2"]) || array_key_exists("label2", $context) ? $context["label2"] : (function () { throw new RuntimeError('Variable "label2" does not exist.', 459, $this->source); })()), "html", null, true);
            yield "</th>
        </tr>
        </thead>
        <tbody>
        ";
            // line 463
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 463, $this->source); })()));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 464
                yield "            <tr>
                <th scope=\"row\">";
                // line 465
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                yield "</th>
                <td>";
                // line 466
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
                yield "</td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 469
            yield "        </tbody>
    </table>
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Doctrine/Collector/db.html.twig";
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
        return array (  1176 => 469,  1167 => 466,  1163 => 465,  1160 => 464,  1156 => 463,  1149 => 459,  1145 => 458,  1140 => 455,  1120 => 454,  1041 => 384,  1038 => 383,  1032 => 382,  1027 => 379,  1019 => 376,  1015 => 374,  1011 => 372,  1002 => 370,  998 => 369,  995 => 368,  993 => 367,  988 => 365,  983 => 364,  980 => 363,  976 => 362,  966 => 354,  960 => 350,  958 => 349,  955 => 348,  949 => 346,  946 => 345,  942 => 344,  938 => 342,  936 => 341,  933 => 340,  930 => 339,  927 => 338,  922 => 336,  919 => 335,  917 => 334,  914 => 333,  909 => 331,  906 => 330,  904 => 329,  901 => 328,  896 => 326,  893 => 325,  891 => 324,  883 => 319,  875 => 314,  867 => 309,  863 => 307,  857 => 303,  854 => 302,  848 => 298,  846 => 297,  841 => 294,  835 => 292,  829 => 288,  827 => 287,  822 => 284,  816 => 282,  810 => 278,  808 => 277,  803 => 274,  789 => 273,  784 => 270,  768 => 267,  762 => 263,  742 => 258,  738 => 256,  736 => 255,  731 => 254,  729 => 253,  723 => 251,  720 => 250,  718 => 249,  712 => 246,  709 => 245,  692 => 244,  677 => 235,  675 => 234,  672 => 233,  664 => 231,  662 => 230,  659 => 229,  653 => 226,  648 => 225,  646 => 224,  639 => 223,  637 => 222,  631 => 219,  627 => 218,  621 => 217,  617 => 215,  610 => 213,  607 => 212,  605 => 211,  602 => 210,  593 => 208,  590 => 207,  588 => 206,  585 => 205,  578 => 203,  575 => 202,  573 => 201,  566 => 199,  559 => 195,  553 => 192,  550 => 191,  545 => 189,  540 => 188,  535 => 186,  528 => 184,  524 => 183,  521 => 182,  519 => 181,  512 => 180,  509 => 179,  492 => 178,  488 => 177,  483 => 174,  478 => 172,  473 => 171,  468 => 169,  463 => 168,  461 => 167,  456 => 164,  453 => 163,  450 => 162,  447 => 161,  441 => 157,  439 => 156,  436 => 155,  430 => 153,  427 => 152,  410 => 151,  407 => 150,  402 => 148,  399 => 147,  394 => 145,  391 => 144,  388 => 143,  386 => 142,  382 => 140,  375 => 136,  368 => 132,  361 => 128,  358 => 127,  356 => 126,  349 => 122,  341 => 117,  333 => 112,  325 => 107,  311 => 95,  301 => 94,  286 => 90,  282 => 88,  280 => 87,  279 => 86,  278 => 84,  276 => 83,  273 => 82,  263 => 81,  251 => 78,  245 => 75,  242 => 74,  240 => 73,  235 => 71,  228 => 70,  218 => 69,  203 => 64,  200 => 63,  196 => 62,  189 => 57,  181 => 54,  172 => 50,  165 => 46,  161 => 44,  159 => 43,  152 => 41,  145 => 37,  138 => 33,  129 => 29,  125 => 27,  123 => 26,  120 => 25,  116 => 24,  109 => 20,  102 => 17,  95 => 14,  93 => 13,  88 => 11,  85 => 10,  82 => 9,  80 => 8,  77 => 7,  74 => 6,  64 => 5,  54 => 1,  52 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends request.isXmlHttpRequest ? '@WebProfiler/Profiler/ajax_layout.html.twig' : '@WebProfiler/Profiler/layout.html.twig' %}

{% import _self as helper %}

{% block toolbar %}
    {% if collector.querycount > 0 or collector.invalidEntityCount > 0 %}

        {% set icon %}
            {% set status = collector.invalidEntityCount > 0 ? 'red' : collector.querycount > 50 ? 'yellow' %}

            {{ include('@Doctrine/Collector/icon.svg') }}

            {% if collector.querycount == 0 and collector.invalidEntityCount > 0 %}
                <span class=\"sf-toolbar-value\">{{ collector.invalidEntityCount }}</span>
                <span class=\"sf-toolbar-label\">errors</span>
            {% else %}
                <span class=\"sf-toolbar-value\">{{ collector.querycount }}</span>
                <span class=\"sf-toolbar-info-piece-additional-detail\">
                    <span class=\"sf-toolbar-label\">in</span>
                    <span class=\"sf-toolbar-value\">{{ '%0.2f'|format(collector.time * 1000) }}</span>
                    <span class=\"sf-toolbar-label\">ms</span>
                </span>
            {% endif %}
        {% endset %}

        {% set text %}
            <div class=\"sf-toolbar-info-piece\">
                <b>Database Queries</b>
                <span class=\"sf-toolbar-status {{ collector.querycount > 50 ? 'sf-toolbar-status-yellow' : '' }}\">{{ collector.querycount }}</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Different statements</b>
                <span class=\"sf-toolbar-status\">{{ collector.groupedQueryCount }}</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Query time</b>
                <span>{{ '%0.2f'|format(collector.time * 1000) }} ms</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Invalid entities</b>
                <span class=\"sf-toolbar-status {{ collector.invalidEntityCount > 0 ? 'sf-toolbar-status-red' : '' }}\">{{ collector.invalidEntityCount }}</span>
            </div>
            {% if collector.cacheEnabled %}
                <div class=\"sf-toolbar-info-piece\">
                    <b>Cache hits</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status-green\">{{ collector.cacheHitsCount }}</span>
                </div>
                <div class=\"sf-toolbar-info-piece\">
                    <b>Cache misses</b>
                    <span class=\"sf-toolbar-status {{ collector.cacheMissesCount > 0 ? 'sf-toolbar-status-yellow' : '' }}\">{{ collector.cacheMissesCount }}</span>
                </div>
                <div class=\"sf-toolbar-info-piece\">
                    <b>Cache puts</b>
                    <span class=\"sf-toolbar-status {{ collector.cachePutsCount > 0 ? 'sf-toolbar-status-yellow' : '' }}\">{{ collector.cachePutsCount }}</span>
                </div>
            {% else %}
                <div class=\"sf-toolbar-info-piece\">
                    <b>Second Level Cache</b>
                    <span class=\"sf-toolbar-status\">disabled</span>
                </div>
            {% endif %}
        {% endset %}

        {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url, status: status|default('') }) }}

    {% endif %}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.invalidEntityCount > 0 ? 'label-status-error' }} {{ collector.querycount == 0 ? 'disabled' }}\">
        <span class=\"icon\">{{ include('@Doctrine/Collector/icon.svg') }}</span>
        <strong>Doctrine</strong>
        {% if collector.invalidEntityCount %}
            <span class=\"count\">
                <span>{{ collector.invalidEntityCount }}</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    {% if 'explain' == page %}
        {{ render(controller('Doctrine\\\\Bundle\\\\DoctrineBundle\\\\Controller\\\\ProfilerController::explainAction', {
            token: token,
            panel: 'db',
            connectionName: request.query.get('connection'),
            query: request.query.get('query')
        })) }}
    {% else %}
        {{ block('queries') }}
    {% endif %}
{% endblock %}

{% block queries %}
    <style>
        .time-container { position: relative; }
        .time-container .nowrap { position: relative; z-index: 1; text-shadow: 0 0 2px #fff; }
        .time-bar { display: block; position: absolute; top: 0; left: 0; bottom: 0; background: #e0e0e0; }
        .sql-runnable.sf-toggle-content.sf-toggle-visible { display: flex; flex-direction: column; }
        .sql-runnable button { align-self: end; }
    </style>

    <h2>Query Metrics</h2>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">{{ collector.querycount }}</span>
            <span class=\"label\">Database Queries</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">{{ collector.groupedQueryCount }}</span>
            <span class=\"label\">Different statements</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">{{ '%0.2f'|format(collector.time * 1000) }} ms</span>
            <span class=\"label\">Query time</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">{{ collector.invalidEntityCount }}</span>
            <span class=\"label\">Invalid entities</span>
        </div>

        {% if collector.cacheEnabled %}
            <div class=\"metric\">
                <span class=\"value\">{{ collector.cacheHitsCount }}</span>
                <span class=\"label\">Cache hits</span>
            </div>
            <div class=\"metric\">
                <span class=\"value\">{{ collector.cacheMissesCount }}</span>
                <span class=\"label\">Cache misses</span>
            </div>
            <div class=\"metric\">
                <span class=\"value\">{{ collector.cachePutsCount }}</span>
                <span class=\"label\">Cache puts</span>
            </div>
        {% endif %}
    </div>

    {% set group_queries = request.query.getBoolean('group') %}
    {% if group_queries %}
        <h2>Grouped Statements</h2>
        <p><a href=\"{{ path('_profiler', { panel: 'db', token: token }) }}\">Show all queries</a></p>
    {% else %}
        <h2>Queries</h2>
        <p><a href=\"{{ path('_profiler', { panel: 'db', token: token, group: true }) }}\">Group similar statements</a></p>
    {% endif %}

    {% for connection, queries in collector.queries %}
        {% if collector.connections|length > 1 %}
            <h3>{{ connection }} <small>connection</small></h3>
        {% endif %}

        {% if queries is empty %}
            <div class=\"empty\">
                <p>No database queries were performed.</p>
            </div>
        {% else %}
            {% if group_queries %}
                {% set queries = collector.groupedQueries[connection] %}
            {% endif %}
            <table class=\"alt queries-table\">
                <thead>
                <tr>
                    {% if group_queries %}
                        <th class=\"nowrap\" onclick=\"javascript:sortTable(this, 0, 'queries-{{ loop.index }}')\" data-sort-direction=\"1\" style=\"cursor: pointer;\">Time<span class=\"text-muted\">&#9660;</span></th>
                        <th class=\"nowrap\" onclick=\"javascript:sortTable(this, 1, 'queries-{{ loop.index }}')\" style=\"cursor: pointer;\">Count<span></span></th>
                    {% else %}
                        <th class=\"nowrap\" onclick=\"javascript:sortTable(this, 0, 'queries-{{ loop.index }}')\" data-sort-direction=\"-1\" style=\"cursor: pointer;\">#<span class=\"text-muted\">&#9650;</span></th>
                        <th class=\"nowrap\" onclick=\"javascript:sortTable(this, 1, 'queries-{{ loop.index }}')\" style=\"cursor: pointer;\">Time<span></span></th>
                    {% endif %}
                    <th style=\"width: 100%;\">Info</th>
                </tr>
                </thead>
                <tbody id=\"queries-{{ loop.index }}\">
                    {% for i, query in queries %}
                        {% set i = group_queries ? query.index : i %}
                        <tr id=\"queryNo-{{ i }}-{{ loop.parent.loop.index }}\">
                            {% if group_queries %}
                                <td class=\"time-container\">
                                    <span class=\"time-bar\" style=\"width:{{ '%0.2f'|format(query.executionPercent) }}%\"></span>
                                    <span class=\"nowrap\">{{ '%0.2f'|format(query.executionMS * 1000) }}&nbsp;ms<br />({{ '%0.2f'|format(query.executionPercent) }}%)</span>
                                </td>
                                <td class=\"nowrap\">{{ query.count }}</td>
                            {% else %}
                                <td class=\"nowrap\">{{ loop.index }}</td>
                                <td class=\"nowrap\">{{ '%0.2f'|format(query.executionMS * 1000) }}&nbsp;ms</td>
                            {% endif %}
                            <td>
                                {{ query.sql|doctrine_prettify_sql }}

                                <div>
                                    <strong class=\"font-normal text-small\">Parameters</strong>: {{ profiler_dump(query.params, 2) }}
                                </div>

                                <div class=\"text-small font-normal\">
                                    <a href=\"#\" class=\"sf-toggle link-inverse\" data-toggle-selector=\"#formatted-query-{{ i }}-{{ loop.parent.loop.index }}\" data-toggle-alt-content=\"Hide formatted query\">View formatted query</a>

                                    {% if query.runnable %}
                                        &nbsp;&nbsp;
                                        <a href=\"#\" class=\"sf-toggle link-inverse\" data-toggle-selector=\"#original-query-{{ i }}-{{ loop.parent.loop.index }}\" data-toggle-alt-content=\"Hide runnable query\">View runnable query</a>
                                    {% endif %}

                                    {% if query.explainable %}
                                        &nbsp;&nbsp;
                                        <a class=\"link-inverse\" href=\"{{ path('_profiler', { panel: 'db', token: token, page: 'explain', connection: connection, query: i }) }}\" onclick=\"return explain(this);\" data-target-id=\"explain-{{ i }}-{{ loop.parent.loop.index }}\">Explain query</a>
                                    {% endif %}

                                    {% if query.backtrace is defined %}
                                        &nbsp;&nbsp;
                                        <a href=\"#\" class=\"sf-toggle link-inverse\" data-toggle-selector=\"#backtrace-{{ i }}-{{ loop.parent.loop.index }}\" data-toggle-alt-content=\"Hide query backtrace\">View query backtrace</a>
                                    {% endif %}
                                </div>

                                <div id=\"formatted-query-{{ i }}-{{ loop.parent.loop.index }}\" class=\"sql-runnable hidden\">
                                    {{ query.sql|doctrine_format_sql(highlight = true) }}
                                    <button class=\"btn btn-sm hidden\" data-clipboard-text=\"{{ query.sql|doctrine_format_sql(highlight = false)|e('html_attr') }}\">Copy</button>
                                </div>

                                {% if query.runnable %}
                                    <div id=\"original-query-{{ i }}-{{ loop.parent.loop.index }}\" class=\"sql-runnable hidden\">
                                        {% set runnable_sql = (query.sql ~ ';')|doctrine_replace_query_parameters(query.params) %}
                                        {{ runnable_sql|doctrine_prettify_sql }}
                                        <button class=\"btn btn-sm hidden\" data-clipboard-text=\"{{ runnable_sql|e('html_attr') }}\">Copy</button>
                                    </div>
                                {% endif %}

                                {% if query.explainable %}
                                    <div id=\"explain-{{ i }}-{{ loop.parent.loop.index }}\" class=\"sql-explain\"></div>
                                {% endif %}

                                {% if query.backtrace is defined %}
                                    <div id=\"backtrace-{{ i }}-{{ loop.parent.loop.index }}\" class=\"hidden\">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th scope=\"col\">#</th>
                                                    <th scope=\"col\">File/Call</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                {% for trace in query.backtrace %}
                                                    <tr>
                                                        <td>{{ loop.index }}</td>
                                                        <td>
                                                            <span class=\"text-small\">
                                                                {% set line_number = trace.line|default(1) %}
                                                                {% if trace.file is defined %}
                                                                    <a href=\"{{ trace.file|file_link(line_number) }}\">
                                                                {% endif %}
                                                                    {{- trace.class|default ~ (trace.class is defined ? trace.type|default('::')) -}}
                                                                    <span class=\"status-warning\">{{ trace.function }}</span>
                                                                {% if trace.file is defined %}
                                                                    </a>
                                                                {% endif %}
                                                                (line {{ line_number }})
                                                            </span>
                                                        </td>
                                                    </tr>
                                                {% endfor %}
                                            </tbody>
                                        </table>
                                    </div>
                                {% endif %}
                            </td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        {% endif %}
    {% endfor %}

    <h2>Database Connections</h2>

    {% if not collector.connections %}
        <div class=\"empty\">
            <p>There are no configured database connections.</p>
        </div>
    {% else %}
        {{ helper.render_simple_table('Name', 'Service', collector.connections) }}
    {% endif %}

    <h2>Entity Managers</h2>

    {% if not collector.managers %}
        <div class=\"empty\">
            <p>There are no configured entity managers.</p>
        </div>
    {% else %}
        {{ helper.render_simple_table('Name', 'Service', collector.managers) }}
    {% endif %}

    <h2>Second Level Cache</h2>

    {% if not collector.cacheEnabled %}
        <div class=\"empty\">
            <p>Second Level Cache is not enabled.</p>
        </div>
    {% else %}
        {% if not collector.cacheCounts %}
            <div class=\"empty\">
                <p>Second level cache information is not available.</p>
            </div>
        {% else %}
            <div class=\"metrics\">
                <div class=\"metric\">
                    <span class=\"value\">{{ collector.cacheCounts.hits }}</span>
                    <span class=\"label\">Hits</span>
                </div>

                <div class=\"metric\">
                    <span class=\"value\">{{ collector.cacheCounts.misses }}</span>
                    <span class=\"label\">Misses</span>
                </div>

                <div class=\"metric\">
                    <span class=\"value\">{{ collector.cacheCounts.puts }}</span>
                    <span class=\"label\">Puts</span>
                </div>
            </div>

            {% if collector.cacheRegions.hits %}
                <h3>Number of cache hits</h3>
                {{ helper.render_simple_table('Region', 'Hits', collector.cacheRegions.hits) }}
            {% endif %}

            {% if collector.cacheRegions.misses %}
                <h3>Number of cache misses</h3>
                {{ helper.render_simple_table('Region', 'Misses', collector.cacheRegions.misses) }}
            {% endif %}

            {% if collector.cacheRegions.puts %}
                <h3>Number of cache puts</h3>
                {{ helper.render_simple_table('Region', 'Puts', collector.cacheRegions.puts) }}
            {% endif %}
        {% endif %}
    {% endif %}

    {% if collector.entities|length > 0 %}
        <h2>Entities Mapping</h2>

        {% for manager, classes in collector.entities %}
            {% if collector.managers|length > 1 %}
                <h3>{{ manager }} <small>entity manager</small></h3>
            {% endif %}

            {% if classes is empty %}
                <div class=\"empty\">
                    <p>No loaded entities.</p>
                </div>
            {% else %}
                <table>
                    <thead>
                    <tr>
                        <th scope=\"col\">Class</th>
                        <th scope=\"col\">Mapping errors</th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for class in classes %}
                        {% set contains_errors = collector.mappingErrors[manager] is defined and collector.mappingErrors[manager][class] is defined %}
                        <tr class=\"{{ contains_errors ? 'status-error' }}\">
                            <td>{{ class }}</td>
                            <td class=\"font-normal\">
                                {% if contains_errors %}
                                    <ul>
                                        {% for error in collector.mappingErrors[manager][class] %}
                                            <li>{{ error }}</li>
                                        {% endfor %}
                                    </ul>
                                {% else %}
                                    No errors.
                                {% endif %}
                            </td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            {% endif %}
        {% endfor %}
    {% endif %}

    <script type=\"text/javascript\">//<![CDATA[
        function explain(link) {
            \"use strict\";

            var targetId = link.getAttribute('data-target-id');
            var targetElement = document.getElementById(targetId);

            if (targetElement.style.display != 'block') {
                Sfjs.load(targetId, link.href, null, function(xhr, el) {
                    el.innerHTML = 'An error occurred while loading the query explanation.';
                });

                targetElement.style.display = 'block';
                link.innerHTML = 'Hide query explanation';
            } else {
                targetElement.style.display = 'none';
                link.innerHTML = 'Explain query';
            }

            return false;
        }

        function sortTable(header, column, targetId) {
            \"use strict\";

            var direction = parseInt(header.getAttribute('data-sort-direction')) || 1,
                items = [],
                target = document.getElementById(targetId),
                rows = target.children,
                headers = header.parentElement.children,
                i;

            for (i = 0; i < rows.length; ++i) {
                items.push(rows[i]);
            }

            for (i = 0; i < headers.length; ++i) {
                headers[i].removeAttribute('data-sort-direction');
                if (headers[i].children.length > 0) {
                    headers[i].children[0].innerHTML = '';
                }
            }

            header.setAttribute('data-sort-direction', (-1*direction).toString());
            header.children[0].innerHTML = direction > 0 ? '<span class=\"text-muted\">&#9650;</span>' : '<span class=\"text-muted\">&#9660;</span>';

            items.sort(function(a, b) {
                return direction * (parseFloat(a.children[column].innerHTML) - parseFloat(b.children[column].innerHTML));
            });

            for (i = 0; i < items.length; ++i) {
                Sfjs.removeClass(items[i], i % 2 ? 'even' : 'odd');
                Sfjs.addClass(items[i], i % 2 ? 'odd' : 'even');
                target.appendChild(items[i]);
            }
        }

        if (navigator.clipboard) {
            document.querySelectorAll('[data-clipboard-text]').forEach(function(button) {
                Sfjs.removeClass(button, 'hidden');
                button.addEventListener('click', function() {
                    navigator.clipboard.writeText(button.getAttribute('data-clipboard-text'));
                })
            });
        }

        //]]></script>
{% endblock %}

{% macro render_simple_table(label1, label2, data) %}
    <table>
        <thead>
        <tr>
            <th scope=\"col\" class=\"key\">{{ label1 }}</th>
            <th scope=\"col\">{{ label2 }}</th>
        </tr>
        </thead>
        <tbody>
        {% for key, value in data %}
            <tr>
                <th scope=\"row\">{{ key }}</th>
                <td>{{ value }}</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
{% endmacro %}
", "@Doctrine/Collector/db.html.twig", "C:\\laragon\\www\\training\\vendor\\doctrine\\doctrine-bundle\\Resources\\views\\Collector\\db.html.twig");
    }
}
