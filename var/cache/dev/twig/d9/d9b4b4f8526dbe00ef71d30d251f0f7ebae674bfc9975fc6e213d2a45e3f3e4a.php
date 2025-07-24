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

/* @WebProfiler/Collector/logger.html.twig */
class __TwigTemplate_edbff305cb51e51a1bca287c8fa75a9a5aa8ae5b84718b4ef849f75a98a04f45 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/logger.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/logger.html.twig"));

        // line 3
        $macros["helper"] = $this->macros["helper"] = $this;
        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/logger.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
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
        if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 6, $this->source); })()), "counterrors", [], "any", false, false, false, 6) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 6, $this->source); })()), "countdeprecations", [], "any", false, false, false, 6)) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 6, $this->source); })()), "countwarnings", [], "any", false, false, false, 6))) {
            // line 7
            yield "        ";
            $context["icon"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 8
                yield "            ";
                $context["status_color"] = ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 8, $this->source); })()), "counterrors", [], "any", false, false, false, 8)) ? ("red") : ("yellow"));
                // line 9
                yield "            ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Icon/logger.svg");
                yield "
            <span class=\"sf-toolbar-value\">";
                // line 10
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 10, $this->source); })()), "counterrors", [], "any", false, false, false, 10)) ?: ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 10, $this->source); })()), "countdeprecations", [], "any", false, false, false, 10) + CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 10, $this->source); })()), "countwarnings", [], "any", false, false, false, 10)))), "html", null, true);
                yield "</span>
        ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 12
            yield "
        ";
            // line 13
            $context["text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 14
                yield "            <div class=\"sf-toolbar-info-piece\">
                <b>Errors</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
                // line 16
                yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 16, $this->source); })()), "counterrors", [], "any", false, false, false, 16)) ? ("red") : (""));
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "counterrors", [], "any", true, true, false, 16)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "counterrors", [], "any", false, false, false, 16), 0)) : (0)), "html", null, true);
                yield "</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Warnings</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
                // line 21
                yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 21, $this->source); })()), "countwarnings", [], "any", false, false, false, 21)) ? ("yellow") : (""));
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "countwarnings", [], "any", true, true, false, 21)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "countwarnings", [], "any", false, false, false, 21), 0)) : (0)), "html", null, true);
                yield "</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Deprecations</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
                // line 26
                yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 26, $this->source); })()), "countdeprecations", [], "any", false, false, false, 26)) ? ("yellow") : (""));
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "countdeprecations", [], "any", true, true, false, 26)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "countdeprecations", [], "any", false, false, false, 26), 0)) : (0)), "html", null, true);
                yield "</span>
            </div>
        ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 29
            yield "
        ";
            // line 30
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => (isset($context["profiler_url"]) || array_key_exists("profiler_url", $context) ? $context["profiler_url"] : (function () { throw new RuntimeError('Variable "profiler_url" does not exist.', 30, $this->source); })()), "status" => (isset($context["status_color"]) || array_key_exists("status_color", $context) ? $context["status_color"] : (function () { throw new RuntimeError('Variable "status_color" does not exist.', 30, $this->source); })())]);
            yield "
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        return; yield '';
    }

    // line 34
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 35
        yield "    <span class=\"label label-status-";
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 35, $this->source); })()), "counterrors", [], "any", false, false, false, 35)) ? ("error") : ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 35, $this->source); })()), "countdeprecations", [], "any", false, false, false, 35) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 35, $this->source); })()), "countwarnings", [], "any", false, false, false, 35))) ? ("warning") : (""))));
        yield " ";
        yield ((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 35, $this->source); })()), "logs", [], "any", false, false, false, 35))) ? ("disabled") : (""));
        yield "\">
        <span class=\"icon\">";
        // line 36
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Icon/logger.svg");
        yield "</span>
        <strong>Logs</strong>
        ";
        // line 38
        if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 38, $this->source); })()), "counterrors", [], "any", false, false, false, 38) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 38, $this->source); })()), "countdeprecations", [], "any", false, false, false, 38)) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 38, $this->source); })()), "countwarnings", [], "any", false, false, false, 38))) {
            // line 39
            yield "            <span class=\"count\">
                <span>";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 40, $this->source); })()), "counterrors", [], "any", false, false, false, 40)) ?: ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 40, $this->source); })()), "countdeprecations", [], "any", false, false, false, 40) + CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 40, $this->source); })()), "countwarnings", [], "any", false, false, false, 40)))), "html", null, true);
            yield "</span>
            </span>
        ";
        }
        // line 43
        yield "    </span>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        return; yield '';
    }

    // line 46
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 47
        yield "    <h2>Log Messages</h2>

    ";
        // line 49
        if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 49, $this->source); })()), "logs", [], "any", false, false, false, 49))) {
            // line 50
            yield "        <div class=\"empty\">
            <p>No log messages available.</p>
        </div>
    ";
        } else {
            // line 54
            yield "        ";
            // line 55
            yield "        ";
            [$context["deprecation_logs"], $context["debug_logs"], $context["info_and_error_logs"], $context["silenced_logs"]] =             [[], [], [], []];
            // line 56
            yield "        ";
            $context["has_error_logs"] = false;
            // line 57
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 57, $this->source); })()), "logs", [], "any", false, false, false, 57));
            foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
                // line 58
                yield "            ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["log"], "scream", [], "any", true, true, false, 58) &&  !CoreExtension::getAttribute($this->env, $this->source, $context["log"], "scream", [], "any", false, false, false, 58))) {
                    // line 59
                    yield "                ";
                    $context["deprecation_logs"] = Twig\Extension\CoreExtension::merge((isset($context["deprecation_logs"]) || array_key_exists("deprecation_logs", $context) ? $context["deprecation_logs"] : (function () { throw new RuntimeError('Variable "deprecation_logs" does not exist.', 59, $this->source); })()), [$context["log"]]);
                    // line 60
                    yield "            ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["log"], "scream", [], "any", true, true, false, 60) && CoreExtension::getAttribute($this->env, $this->source, $context["log"], "scream", [], "any", false, false, false, 60))) {
                    // line 61
                    yield "                ";
                    $context["silenced_logs"] = Twig\Extension\CoreExtension::merge((isset($context["silenced_logs"]) || array_key_exists("silenced_logs", $context) ? $context["silenced_logs"] : (function () { throw new RuntimeError('Variable "silenced_logs" does not exist.', 61, $this->source); })()), [$context["log"]]);
                    // line 62
                    yield "            ";
                } elseif ((0 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, $context["log"], "priorityName", [], "any", false, false, false, 62), "DEBUG"))) {
                    // line 63
                    yield "                ";
                    $context["debug_logs"] = Twig\Extension\CoreExtension::merge((isset($context["debug_logs"]) || array_key_exists("debug_logs", $context) ? $context["debug_logs"] : (function () { throw new RuntimeError('Variable "debug_logs" does not exist.', 63, $this->source); })()), [$context["log"]]);
                    // line 64
                    yield "            ";
                } else {
                    // line 65
                    yield "                ";
                    $context["info_and_error_logs"] = Twig\Extension\CoreExtension::merge((isset($context["info_and_error_logs"]) || array_key_exists("info_and_error_logs", $context) ? $context["info_and_error_logs"] : (function () { throw new RuntimeError('Variable "info_and_error_logs" does not exist.', 65, $this->source); })()), [$context["log"]]);
                    // line 66
                    yield "                ";
                    if ((0 !== CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, $context["log"], "priorityName", [], "any", false, false, false, 66), "INFO"))) {
                        // line 67
                        yield "                    ";
                        $context["has_error_logs"] = true;
                        // line 68
                        yield "                ";
                    }
                    // line 69
                    yield "            ";
                }
                // line 70
                yield "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            yield "
        <div class=\"sf-tabs\">
            <div class=\"tab ";
            // line 73
            yield (((isset($context["has_error_logs"]) || array_key_exists("has_error_logs", $context) ? $context["has_error_logs"] : (function () { throw new RuntimeError('Variable "has_error_logs" does not exist.', 73, $this->source); })())) ? ("active") : (""));
            yield "\">
                <h3 class=\"tab-title\">Info. &amp; Errors <span class=\"badge status-";
            // line 74
            yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 74, $this->source); })()), "counterrors", [], "any", false, false, false, 74)) ? ("error") : (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 74, $this->source); })()), "countwarnings", [], "any", false, false, false, 74)) ? ("warning") : (""))));
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 74, $this->source); })()), "counterrors", [], "any", false, false, false, 74)) ?: (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["info_and_error_logs"]) || array_key_exists("info_and_error_logs", $context) ? $context["info_and_error_logs"] : (function () { throw new RuntimeError('Variable "info_and_error_logs" does not exist.', 74, $this->source); })())))), "html", null, true);
            yield "</span></h3>
                <p class=\"text-muted\">Informational and error log messages generated during the execution of the application.</p>

                <div class=\"tab-content\">
                    ";
            // line 78
            if (Twig\Extension\CoreExtension::testEmpty((isset($context["info_and_error_logs"]) || array_key_exists("info_and_error_logs", $context) ? $context["info_and_error_logs"] : (function () { throw new RuntimeError('Variable "info_and_error_logs" does not exist.', 78, $this->source); })()))) {
                // line 79
                yield "                        <div class=\"empty\">
                            <p>There are no log messages of this level.</p>
                        </div>
                    ";
            } else {
                // line 83
                yield "                        ";
                yield CoreExtension::callMacro($macros["helper"], "macro_render_table", [(isset($context["info_and_error_logs"]) || array_key_exists("info_and_error_logs", $context) ? $context["info_and_error_logs"] : (function () { throw new RuntimeError('Variable "info_and_error_logs" does not exist.', 83, $this->source); })()), "info", true], 83, $context, $this->getSourceContext());
                yield "
                    ";
            }
            // line 85
            yield "                </div>
            </div>

            <div class=\"tab ";
            // line 88
            yield ((( !(isset($context["has_error_logs"]) || array_key_exists("has_error_logs", $context) ? $context["has_error_logs"] : (function () { throw new RuntimeError('Variable "has_error_logs" does not exist.', 88, $this->source); })()) && (1 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 88, $this->source); })()), "countdeprecations", [], "any", false, false, false, 88), 0)))) ? ("active") : (""));
            yield "\">
                ";
            // line 91
            yield "                <h3 class=\"tab-title\">Deprecations <span class=\"badge status-";
            yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 91, $this->source); })()), "countdeprecations", [], "any", false, false, false, 91)) ? ("warning") : (""));
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "countdeprecations", [], "any", true, true, false, 91)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "countdeprecations", [], "any", false, false, false, 91), 0)) : (0)), "html", null, true);
            yield "</span></h3>
                <p class=\"text-muted\">Log messages generated by using features marked as deprecated.</p>

                <div class=\"tab-content\">
                    ";
            // line 95
            if (Twig\Extension\CoreExtension::testEmpty((isset($context["deprecation_logs"]) || array_key_exists("deprecation_logs", $context) ? $context["deprecation_logs"] : (function () { throw new RuntimeError('Variable "deprecation_logs" does not exist.', 95, $this->source); })()))) {
                // line 96
                yield "                        <div class=\"empty\">
                            <p>There are no log messages about deprecated features.</p>
                        </div>
                    ";
            } else {
                // line 100
                yield "                        ";
                yield CoreExtension::callMacro($macros["helper"], "macro_render_table", [(isset($context["deprecation_logs"]) || array_key_exists("deprecation_logs", $context) ? $context["deprecation_logs"] : (function () { throw new RuntimeError('Variable "deprecation_logs" does not exist.', 100, $this->source); })()), "deprecation", false, true], 100, $context, $this->getSourceContext());
                yield "
                    ";
            }
            // line 102
            yield "                </div>
            </div>

            <div class=\"tab\">
                <h3 class=\"tab-title\">Debug <span class=\"badge\">";
            // line 106
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["debug_logs"]) || array_key_exists("debug_logs", $context) ? $context["debug_logs"] : (function () { throw new RuntimeError('Variable "debug_logs" does not exist.', 106, $this->source); })())), "html", null, true);
            yield "</span></h3>
                <p class=\"text-muted\">Unimportant log messages generated during the execution of the application.</p>

                <div class=\"tab-content\">
                    ";
            // line 110
            if (Twig\Extension\CoreExtension::testEmpty((isset($context["debug_logs"]) || array_key_exists("debug_logs", $context) ? $context["debug_logs"] : (function () { throw new RuntimeError('Variable "debug_logs" does not exist.', 110, $this->source); })()))) {
                // line 111
                yield "                        <div class=\"empty\">
                            <p>There are no log messages of this level.</p>
                        </div>
                    ";
            } else {
                // line 115
                yield "                        ";
                yield CoreExtension::callMacro($macros["helper"], "macro_render_table", [(isset($context["debug_logs"]) || array_key_exists("debug_logs", $context) ? $context["debug_logs"] : (function () { throw new RuntimeError('Variable "debug_logs" does not exist.', 115, $this->source); })()), "debug"], 115, $context, $this->getSourceContext());
                yield "
                    ";
            }
            // line 117
            yield "                </div>
            </div>

            <div class=\"tab\">
                <h3 class=\"tab-title\">PHP Notices <span class=\"badge\">";
            // line 121
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "countscreams", [], "any", true, true, false, 121)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "countscreams", [], "any", false, false, false, 121), 0)) : (0)), "html", null, true);
            yield "</span></h3>
                <p class=\"text-muted\">Log messages generated by PHP notices silenced with the @ operator.</p>

                <div class=\"tab-content\">
                    ";
            // line 125
            if (Twig\Extension\CoreExtension::testEmpty((isset($context["silenced_logs"]) || array_key_exists("silenced_logs", $context) ? $context["silenced_logs"] : (function () { throw new RuntimeError('Variable "silenced_logs" does not exist.', 125, $this->source); })()))) {
                // line 126
                yield "                        <div class=\"empty\">
                            <p>There are no log messages of this level.</p>
                        </div>
                    ";
            } else {
                // line 130
                yield "                        ";
                yield CoreExtension::callMacro($macros["helper"], "macro_render_table", [(isset($context["silenced_logs"]) || array_key_exists("silenced_logs", $context) ? $context["silenced_logs"] : (function () { throw new RuntimeError('Variable "silenced_logs" does not exist.', 130, $this->source); })()), "silenced"], 130, $context, $this->getSourceContext());
                yield "
                    ";
            }
            // line 132
            yield "                </div>
            </div>

            ";
            // line 135
            $context["compilerLogTotal"] = 0;
            // line 136
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 136, $this->source); })()), "compilerLogs", [], "any", false, false, false, 136));
            foreach ($context['_seq'] as $context["_key"] => $context["logs"]) {
                // line 137
                yield "                ";
                $context["compilerLogTotal"] = ((isset($context["compilerLogTotal"]) || array_key_exists("compilerLogTotal", $context) ? $context["compilerLogTotal"] : (function () { throw new RuntimeError('Variable "compilerLogTotal" does not exist.', 137, $this->source); })()) + Twig\Extension\CoreExtension::length($this->env->getCharset(), $context["logs"]));
                // line 138
                yield "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['logs'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 139
            yield "            <div class=\"tab\">
                <h3 class=\"tab-title\">Container <span class=\"badge\">";
            // line 140
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["compilerLogTotal"]) || array_key_exists("compilerLogTotal", $context) ? $context["compilerLogTotal"] : (function () { throw new RuntimeError('Variable "compilerLogTotal" does not exist.', 140, $this->source); })()), "html", null, true);
            yield "</span></h3>
                <p class=\"text-muted\">Log messages generated during the compilation of the service container.</p>

                <div class=\"tab-content\">
                    ";
            // line 144
            if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 144, $this->source); })()), "compilerLogs", [], "any", false, false, false, 144))) {
                // line 145
                yield "                        <div class=\"empty\">
                            <p>There are no compiler log messages.</p>
                        </div>
                    ";
            } else {
                // line 149
                yield "                        <table class=\"logs\">
                            <thead>
                                <tr>
                                    <th class=\"full-width\">Class</th>
                                    <th>Messages</th>
                                </tr>
                            </thead>

                            <tbody>
                                ";
                // line 158
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 158, $this->source); })()), "compilerLogs", [], "any", false, false, false, 158));
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
                foreach ($context['_seq'] as $context["class"] => $context["logs"]) {
                    // line 159
                    yield "                                    <tr class=\"\">
                                        <td class=\"font-normal\">
                                            ";
                    // line 161
                    $context["context_id"] = ("context-compiler-" . CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 161));
                    // line 162
                    yield "
                                             <a class=\"btn btn-link sf-toggle\" data-toggle-selector=\"#";
                    // line 163
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["context_id"]) || array_key_exists("context_id", $context) ? $context["context_id"] : (function () { throw new RuntimeError('Variable "context_id" does not exist.', 163, $this->source); })()), "html", null, true);
                    yield "\" data-toggle-alt-content=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["class"], "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["class"], "html", null, true);
                    yield "</a>

                                             <div id=\"";
                    // line 165
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["context_id"]) || array_key_exists("context_id", $context) ? $context["context_id"] : (function () { throw new RuntimeError('Variable "context_id" does not exist.', 165, $this->source); })()), "html", null, true);
                    yield "\" class=\"context sf-toggle-content sf-toggle-hidden\">
                                                <ul>
                                                ";
                    // line 167
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable($context["logs"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
                        // line 168
                        yield "                                                    <li>";
                        yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpLog($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["log"], "message", [], "any", false, false, false, 168));
                        yield "</li>
                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 170
                    yield "                                                </ul>
                                            </div>
                                        </td>
                                        <td class=\"font-normal text-right\">";
                    // line 173
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), $context["logs"]), "html", null, true);
                    yield "</td>
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
                unset($context['_seq'], $context['_iterated'], $context['class'], $context['logs'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 176
                yield "                            </tbody>
                        </table>
                    ";
            }
            // line 179
            yield "                </div>
            </div>

        </div>

        <script>Sfjs.createFilters();</script>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        return; yield '';
    }

    // line 188
    public function macro_render_table($__logs__ = null, $__category__ = "", $__show_level__ = false, $__is_deprecation__ = false, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "logs" => $__logs__,
            "category" => $__category__,
            "show_level" => $__show_level__,
            "is_deprecation" => $__is_deprecation__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_table"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_table"));

            // line 189
            yield "    ";
            $macros["helper"] = $this;
            // line 190
            yield "    ";
            $context["channel_is_defined"] = CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), (isset($context["logs"]) || array_key_exists("logs", $context) ? $context["logs"] : (function () { throw new RuntimeError('Variable "logs" does not exist.', 190, $this->source); })())), "channel", [], "any", true, true, false, 190);
            // line 191
            yield "    ";
            $context["filter"] = ((isset($context["show_level"]) || array_key_exists("show_level", $context) ? $context["show_level"] : (function () { throw new RuntimeError('Variable "show_level" does not exist.', 191, $this->source); })()) || (isset($context["channel_is_defined"]) || array_key_exists("channel_is_defined", $context) ? $context["channel_is_defined"] : (function () { throw new RuntimeError('Variable "channel_is_defined" does not exist.', 191, $this->source); })()));
            // line 192
            yield "
    <table class=\"logs\"";
            // line 193
            if ((isset($context["show_level"]) || array_key_exists("show_level", $context) ? $context["show_level"] : (function () { throw new RuntimeError('Variable "show_level" does not exist.', 193, $this->source); })())) {
                yield " data-filter-level=\"Emergency,Alert,Critical,Error,Warning,Notice,Info\"";
            }
            if ((isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 193, $this->source); })())) {
                yield " data-filters";
            }
            yield ">
        <thead>
            <tr>
                ";
            // line 196
            if ((isset($context["show_level"]) || array_key_exists("show_level", $context) ? $context["show_level"] : (function () { throw new RuntimeError('Variable "show_level" does not exist.', 196, $this->source); })())) {
                yield "<th data-filter=\"level\">Level</th>";
            } else {
                yield "<th>Time</th>";
            }
            // line 197
            yield "                ";
            if ((isset($context["channel_is_defined"]) || array_key_exists("channel_is_defined", $context) ? $context["channel_is_defined"] : (function () { throw new RuntimeError('Variable "channel_is_defined" does not exist.', 197, $this->source); })())) {
                yield "<th data-filter=\"channel\">Channel</th>";
            }
            // line 198
            yield "                <th class=\"full-width\">Message</th>
            </tr>
        </thead>

        <tbody>
            ";
            // line 203
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["logs"]) || array_key_exists("logs", $context) ? $context["logs"] : (function () { throw new RuntimeError('Variable "logs" does not exist.', 203, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
                // line 204
                yield "                ";
                $context["css_class"] = (( !(isset($context["is_deprecation"]) || array_key_exists("is_deprecation", $context) ? $context["is_deprecation"] : (function () { throw new RuntimeError('Variable "is_deprecation" does not exist.', 204, $this->source); })())) ? (((CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source,                 // line 205
$context["log"], "priorityName", [], "any", false, false, false, 205), ["CRITICAL", "ERROR", "ALERT", "EMERGENCY"])) ? ("status-error") : ((((0 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source,                 // line 206
$context["log"], "priorityName", [], "any", false, false, false, 206), "WARNING"))) ? ("status-warning") : (""))))) : (""));
                // line 208
                yield "                <tr class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["css_class"]) || array_key_exists("css_class", $context) ? $context["css_class"] : (function () { throw new RuntimeError('Variable "css_class" does not exist.', 208, $this->source); })()), "html", null, true);
                yield "\"";
                if ((isset($context["show_level"]) || array_key_exists("show_level", $context) ? $context["show_level"] : (function () { throw new RuntimeError('Variable "show_level" does not exist.', 208, $this->source); })())) {
                    yield " data-filter-level=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["log"], "priorityName", [], "any", false, false, false, 208)), "html", null, true);
                    yield "\"";
                }
                if ((isset($context["channel_is_defined"]) || array_key_exists("channel_is_defined", $context) ? $context["channel_is_defined"] : (function () { throw new RuntimeError('Variable "channel_is_defined" does not exist.', 208, $this->source); })())) {
                    yield " data-filter-channel=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["log"], "channel", [], "any", false, false, false, 208), "html", null, true);
                    yield "\"";
                }
                yield ">
                    <td class=\"font-normal text-small\" nowrap>
                        ";
                // line 210
                if ((isset($context["show_level"]) || array_key_exists("show_level", $context) ? $context["show_level"] : (function () { throw new RuntimeError('Variable "show_level" does not exist.', 210, $this->source); })())) {
                    // line 211
                    yield "                            <span class=\"colored text-bold\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["log"], "priorityName", [], "any", false, false, false, 211), "html", null, true);
                    yield "</span>
                        ";
                }
                // line 213
                yield "                        <time class=\"text-muted newline\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["log"], "timestamp", [], "any", false, false, false, 213), "r"), "html", null, true);
                yield "\" datetime=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["log"], "timestamp", [], "any", false, false, false, 213), "c"), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["log"], "timestamp", [], "any", false, false, false, 213), "H:i:s"), "html", null, true);
                yield "</time>
                    </td>

                    ";
                // line 216
                if ((isset($context["channel_is_defined"]) || array_key_exists("channel_is_defined", $context) ? $context["channel_is_defined"] : (function () { throw new RuntimeError('Variable "channel_is_defined" does not exist.', 216, $this->source); })())) {
                    // line 217
                    yield "                        <td class=\"font-normal text-small text-bold\" nowrap>
                            ";
                    // line 218
                    if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["log"], "channel", [], "any", false, false, false, 218))) {
                        yield "<em>n/a</em>";
                    } else {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["log"], "channel", [], "any", false, false, false, 218), "html", null, true);
                    }
                    // line 219
                    yield "                            ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["log"], "errorCount", [], "any", true, true, false, 219) && (1 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, $context["log"], "errorCount", [], "any", false, false, false, 219), 1)))) {
                        // line 220
                        yield "                                <span class=\"text-muted\">(";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["log"], "errorCount", [], "any", false, false, false, 220), "html", null, true);
                        yield " times)</span>
                            ";
                    }
                    // line 222
                    yield "                        </td>

                    ";
                }
                // line 225
                yield "
                    <td class=\"font-normal\">";
                // line 226
                yield CoreExtension::callMacro($macros["helper"], "macro_render_log_message", [(isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 226, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 226), $context["log"]], 226, $context, $this->getSourceContext());
                yield "</td>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 229
            yield "        </tbody>
    </table>
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 233
    public function macro_render_log_message($__category__ = null, $__log_index__ = null, $__log__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "category" => $__category__,
            "log_index" => $__log_index__,
            "log" => $__log__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_log_message"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_log_message"));

            // line 234
            yield "    ";
            $context["has_context"] = (CoreExtension::getAttribute($this->env, $this->source, ($context["log"] ?? null), "context", [], "any", true, true, false, 234) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["log"]) || array_key_exists("log", $context) ? $context["log"] : (function () { throw new RuntimeError('Variable "log" does not exist.', 234, $this->source); })()), "context", [], "any", false, false, false, 234)));
            // line 235
            yield "    ";
            $context["has_trace"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["log"] ?? null), "context", [], "any", false, true, false, 235), "exception", [], "any", false, true, false, 235), "trace", [], "any", true, true, false, 235);
            // line 236
            yield "
    ";
            // line 237
            if ( !(isset($context["has_context"]) || array_key_exists("has_context", $context) ? $context["has_context"] : (function () { throw new RuntimeError('Variable "has_context" does not exist.', 237, $this->source); })())) {
                // line 238
                yield "        ";
                yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpLog($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["log"]) || array_key_exists("log", $context) ? $context["log"] : (function () { throw new RuntimeError('Variable "log" does not exist.', 238, $this->source); })()), "message", [], "any", false, false, false, 238));
                yield "
    ";
            } else {
                // line 240
                yield "        ";
                yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpLog($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["log"]) || array_key_exists("log", $context) ? $context["log"] : (function () { throw new RuntimeError('Variable "log" does not exist.', 240, $this->source); })()), "message", [], "any", false, false, false, 240), CoreExtension::getAttribute($this->env, $this->source, (isset($context["log"]) || array_key_exists("log", $context) ? $context["log"] : (function () { throw new RuntimeError('Variable "log" does not exist.', 240, $this->source); })()), "context", [], "any", false, false, false, 240));
                yield "

        <div class=\"text-small font-normal\">
            ";
                // line 243
                $context["context_id"] = ((("context-" . (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 243, $this->source); })())) . "-") . (isset($context["log_index"]) || array_key_exists("log_index", $context) ? $context["log_index"] : (function () { throw new RuntimeError('Variable "log_index" does not exist.', 243, $this->source); })()));
                // line 244
                yield "            <a class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["context_id"]) || array_key_exists("context_id", $context) ? $context["context_id"] : (function () { throw new RuntimeError('Variable "context_id" does not exist.', 244, $this->source); })()), "html", null, true);
                yield "\" data-toggle-alt-content=\"Hide context\">Show context</a>

            ";
                // line 246
                if ((isset($context["has_trace"]) || array_key_exists("has_trace", $context) ? $context["has_trace"] : (function () { throw new RuntimeError('Variable "has_trace" does not exist.', 246, $this->source); })())) {
                    // line 247
                    yield "                &nbsp;&nbsp;
                ";
                    // line 248
                    $context["trace_id"] = ((("trace-" . (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 248, $this->source); })())) . "-") . (isset($context["log_index"]) || array_key_exists("log_index", $context) ? $context["log_index"] : (function () { throw new RuntimeError('Variable "log_index" does not exist.', 248, $this->source); })()));
                    // line 249
                    yield "                <a class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["trace_id"]) || array_key_exists("trace_id", $context) ? $context["trace_id"] : (function () { throw new RuntimeError('Variable "trace_id" does not exist.', 249, $this->source); })()), "html", null, true);
                    yield "\" data-toggle-alt-content=\"Hide trace\">Show trace</a>
            ";
                }
                // line 251
                yield "        </div>

        <div id=\"";
                // line 253
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["context_id"]) || array_key_exists("context_id", $context) ? $context["context_id"] : (function () { throw new RuntimeError('Variable "context_id" does not exist.', 253, $this->source); })()), "html", null, true);
                yield "\" class=\"context sf-toggle-content sf-toggle-hidden\">
            ";
                // line 254
                yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["log"]) || array_key_exists("log", $context) ? $context["log"] : (function () { throw new RuntimeError('Variable "log" does not exist.', 254, $this->source); })()), "context", [], "any", false, false, false, 254), 1);
                yield "
        </div>

        ";
                // line 257
                if ((isset($context["has_trace"]) || array_key_exists("has_trace", $context) ? $context["has_trace"] : (function () { throw new RuntimeError('Variable "has_trace" does not exist.', 257, $this->source); })())) {
                    // line 258
                    yield "            <div id=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["trace_id"]) || array_key_exists("trace_id", $context) ? $context["trace_id"] : (function () { throw new RuntimeError('Variable "trace_id" does not exist.', 258, $this->source); })()), "html", null, true);
                    yield "\" class=\"context sf-toggle-content sf-toggle-hidden\">
                ";
                    // line 259
                    yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["log"]) || array_key_exists("log", $context) ? $context["log"] : (function () { throw new RuntimeError('Variable "log" does not exist.', 259, $this->source); })()), "context", [], "any", false, false, false, 259), "exception", [], "any", false, false, false, 259), "trace", [], "any", false, false, false, 259), 1);
                    yield "
            </div>
        ";
                }
                // line 262
                yield "    ";
            }
            
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
        return "@WebProfiler/Collector/logger.html.twig";
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
        return array (  808 => 262,  802 => 259,  797 => 258,  795 => 257,  789 => 254,  785 => 253,  781 => 251,  775 => 249,  773 => 248,  770 => 247,  768 => 246,  762 => 244,  760 => 243,  753 => 240,  747 => 238,  745 => 237,  742 => 236,  739 => 235,  736 => 234,  716 => 233,  702 => 229,  685 => 226,  682 => 225,  677 => 222,  671 => 220,  668 => 219,  662 => 218,  659 => 217,  657 => 216,  646 => 213,  640 => 211,  638 => 210,  621 => 208,  619 => 206,  618 => 205,  616 => 204,  599 => 203,  592 => 198,  587 => 197,  581 => 196,  570 => 193,  567 => 192,  564 => 191,  561 => 190,  558 => 189,  537 => 188,  519 => 179,  514 => 176,  497 => 173,  492 => 170,  483 => 168,  479 => 167,  474 => 165,  465 => 163,  462 => 162,  460 => 161,  456 => 159,  439 => 158,  428 => 149,  422 => 145,  420 => 144,  413 => 140,  410 => 139,  404 => 138,  401 => 137,  396 => 136,  394 => 135,  389 => 132,  383 => 130,  377 => 126,  375 => 125,  368 => 121,  362 => 117,  356 => 115,  350 => 111,  348 => 110,  341 => 106,  335 => 102,  329 => 100,  323 => 96,  321 => 95,  311 => 91,  307 => 88,  302 => 85,  296 => 83,  290 => 79,  288 => 78,  279 => 74,  275 => 73,  271 => 71,  265 => 70,  262 => 69,  259 => 68,  256 => 67,  253 => 66,  250 => 65,  247 => 64,  244 => 63,  241 => 62,  238 => 61,  235 => 60,  232 => 59,  229 => 58,  224 => 57,  221 => 56,  218 => 55,  216 => 54,  210 => 50,  208 => 49,  204 => 47,  194 => 46,  182 => 43,  176 => 40,  173 => 39,  171 => 38,  166 => 36,  159 => 35,  149 => 34,  135 => 30,  132 => 29,  123 => 26,  113 => 21,  103 => 16,  99 => 14,  97 => 13,  94 => 12,  88 => 10,  83 => 9,  80 => 8,  77 => 7,  74 => 6,  64 => 5,  53 => 1,  51 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% import _self as helper %}

{% block toolbar %}
    {% if collector.counterrors or collector.countdeprecations or collector.countwarnings %}
        {% set icon %}
            {% set status_color = collector.counterrors ? 'red' : 'yellow' %}
            {{ include('@WebProfiler/Icon/logger.svg') }}
            <span class=\"sf-toolbar-value\">{{ collector.counterrors ?: (collector.countdeprecations + collector.countwarnings) }}</span>
        {% endset %}

        {% set text %}
            <div class=\"sf-toolbar-info-piece\">
                <b>Errors</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-{{ collector.counterrors ? 'red' }}\">{{ collector.counterrors|default(0) }}</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Warnings</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-{{ collector.countwarnings ? 'yellow' }}\">{{ collector.countwarnings|default(0) }}</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Deprecations</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-{{ collector.countdeprecations ? 'yellow' }}\">{{ collector.countdeprecations|default(0) }}</span>
            </div>
        {% endset %}

        {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url, status: status_color }) }}
    {% endif %}
{% endblock %}

{% block menu %}
    <span class=\"label label-status-{{ collector.counterrors ? 'error' : collector.countdeprecations or collector.countwarnings ? 'warning' }} {{ collector.logs is empty ? 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/logger.svg') }}</span>
        <strong>Logs</strong>
        {% if collector.counterrors or collector.countdeprecations or collector.countwarnings %}
            <span class=\"count\">
                <span>{{ collector.counterrors ?: (collector.countdeprecations + collector.countwarnings) }}</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Log Messages</h2>

    {% if collector.logs is empty %}
        <div class=\"empty\">
            <p>No log messages available.</p>
        </div>
    {% else %}
        {# sort collected logs in groups #}
        {% set deprecation_logs, debug_logs, info_and_error_logs, silenced_logs = [], [], [], [] %}
        {% set has_error_logs = false %}
        {% for log in collector.logs %}
            {% if log.scream is defined and not log.scream %}
                {% set deprecation_logs = deprecation_logs|merge([log]) %}
            {% elseif log.scream is defined and log.scream %}
                {% set silenced_logs = silenced_logs|merge([log]) %}
            {% elseif log.priorityName == 'DEBUG' %}
                {% set debug_logs = debug_logs|merge([log]) %}
            {% else %}
                {% set info_and_error_logs = info_and_error_logs|merge([log]) %}
                {% if log.priorityName != 'INFO' %}
                    {% set has_error_logs = true %}
                {% endif %}
            {% endif %}
        {% endfor %}

        <div class=\"sf-tabs\">
            <div class=\"tab {{ has_error_logs ? 'active' }}\">
                <h3 class=\"tab-title\">Info. &amp; Errors <span class=\"badge status-{{ collector.counterrors ? 'error' : collector.countwarnings ? 'warning' }}\">{{ collector.counterrors ?: info_and_error_logs|length }}</span></h3>
                <p class=\"text-muted\">Informational and error log messages generated during the execution of the application.</p>

                <div class=\"tab-content\">
                    {% if info_and_error_logs is empty %}
                        <div class=\"empty\">
                            <p>There are no log messages of this level.</p>
                        </div>
                    {% else %}
                        {{ helper.render_table(info_and_error_logs, 'info', true) }}
                    {% endif %}
                </div>
            </div>

            <div class=\"tab {{ not has_error_logs and collector.countdeprecations > 0 ? 'active' }}\">
                {# 'deprecation_logs|length' is not used because deprecations are
                now grouped and the group count doesn't match the message count #}
                <h3 class=\"tab-title\">Deprecations <span class=\"badge status-{{ collector.countdeprecations ? 'warning' }}\">{{ collector.countdeprecations|default(0) }}</span></h3>
                <p class=\"text-muted\">Log messages generated by using features marked as deprecated.</p>

                <div class=\"tab-content\">
                    {% if deprecation_logs is empty %}
                        <div class=\"empty\">
                            <p>There are no log messages about deprecated features.</p>
                        </div>
                    {% else %}
                        {{ helper.render_table(deprecation_logs, 'deprecation', false, true) }}
                    {% endif %}
                </div>
            </div>

            <div class=\"tab\">
                <h3 class=\"tab-title\">Debug <span class=\"badge\">{{ debug_logs|length }}</span></h3>
                <p class=\"text-muted\">Unimportant log messages generated during the execution of the application.</p>

                <div class=\"tab-content\">
                    {% if debug_logs is empty %}
                        <div class=\"empty\">
                            <p>There are no log messages of this level.</p>
                        </div>
                    {% else %}
                        {{ helper.render_table(debug_logs, 'debug') }}
                    {% endif %}
                </div>
            </div>

            <div class=\"tab\">
                <h3 class=\"tab-title\">PHP Notices <span class=\"badge\">{{ collector.countscreams|default(0) }}</span></h3>
                <p class=\"text-muted\">Log messages generated by PHP notices silenced with the @ operator.</p>

                <div class=\"tab-content\">
                    {% if silenced_logs is empty %}
                        <div class=\"empty\">
                            <p>There are no log messages of this level.</p>
                        </div>
                    {% else %}
                        {{ helper.render_table(silenced_logs, 'silenced') }}
                    {% endif %}
                </div>
            </div>

            {% set compilerLogTotal = 0 %}
            {% for logs in collector.compilerLogs %}
                {% set compilerLogTotal = compilerLogTotal + logs|length %}
            {% endfor %}
            <div class=\"tab\">
                <h3 class=\"tab-title\">Container <span class=\"badge\">{{ compilerLogTotal }}</span></h3>
                <p class=\"text-muted\">Log messages generated during the compilation of the service container.</p>

                <div class=\"tab-content\">
                    {% if collector.compilerLogs is empty %}
                        <div class=\"empty\">
                            <p>There are no compiler log messages.</p>
                        </div>
                    {% else %}
                        <table class=\"logs\">
                            <thead>
                                <tr>
                                    <th class=\"full-width\">Class</th>
                                    <th>Messages</th>
                                </tr>
                            </thead>

                            <tbody>
                                {% for class, logs in collector.compilerLogs %}
                                    <tr class=\"\">
                                        <td class=\"font-normal\">
                                            {% set context_id = 'context-compiler-' ~ loop.index %}

                                             <a class=\"btn btn-link sf-toggle\" data-toggle-selector=\"#{{ context_id }}\" data-toggle-alt-content=\"{{ class }}\">{{ class }}</a>

                                             <div id=\"{{ context_id }}\" class=\"context sf-toggle-content sf-toggle-hidden\">
                                                <ul>
                                                {% for log in logs %}
                                                    <li>{{ profiler_dump_log(log.message) }}</li>
                                                {% endfor %}
                                                </ul>
                                            </div>
                                        </td>
                                        <td class=\"font-normal text-right\">{{ logs|length }}</td>
                                    </tr>
                                {% endfor %}
                            </tbody>
                        </table>
                    {% endif %}
                </div>
            </div>

        </div>

        <script>Sfjs.createFilters();</script>
    {% endif %}
{% endblock %}

{% macro render_table(logs, category = '', show_level = false, is_deprecation = false) %}
    {% import _self as helper %}
    {% set channel_is_defined = (logs|first).channel is defined %}
    {% set filter = show_level or channel_is_defined %}

    <table class=\"logs\"{% if show_level %} data-filter-level=\"Emergency,Alert,Critical,Error,Warning,Notice,Info\"{% endif %}{% if filter %} data-filters{% endif %}>
        <thead>
            <tr>
                {% if show_level %}<th data-filter=\"level\">Level</th>{% else %}<th>Time</th>{% endif %}
                {% if channel_is_defined %}<th data-filter=\"channel\">Channel</th>{% endif %}
                <th class=\"full-width\">Message</th>
            </tr>
        </thead>

        <tbody>
            {% for log in logs %}
                {% set css_class = not is_deprecation
                    ? log.priorityName in ['CRITICAL', 'ERROR', 'ALERT', 'EMERGENCY'] ? 'status-error'
                    : log.priorityName == 'WARNING' ? 'status-warning'
                %}
                <tr class=\"{{ css_class }}\"{% if show_level %} data-filter-level=\"{{ log.priorityName|lower }}\"{% endif %}{% if channel_is_defined %} data-filter-channel=\"{{ log.channel }}\"{% endif %}>
                    <td class=\"font-normal text-small\" nowrap>
                        {% if show_level %}
                            <span class=\"colored text-bold\">{{ log.priorityName }}</span>
                        {% endif %}
                        <time class=\"text-muted newline\" title=\"{{ log.timestamp|date('r') }}\" datetime=\"{{ log.timestamp|date('c') }}\">{{ log.timestamp|date('H:i:s') }}</time>
                    </td>

                    {% if channel_is_defined %}
                        <td class=\"font-normal text-small text-bold\" nowrap>
                            {% if log.channel is null %}<em>n/a</em>{% else %}{{ log.channel }}{% endif %}
                            {% if log.errorCount is defined and log.errorCount > 1 %}
                                <span class=\"text-muted\">({{ log.errorCount }} times)</span>
                            {% endif %}
                        </td>

                    {% endif %}

                    <td class=\"font-normal\">{{ helper.render_log_message(category, loop.index, log) }}</td>
                </tr>
            {% endfor %}
        </tbody>
    </table>
{% endmacro %}

{% macro render_log_message(category, log_index, log) %}
    {% set has_context = log.context is defined and log.context is not empty %}
    {% set has_trace = log.context.exception.trace is defined %}

    {% if not has_context %}
        {{ profiler_dump_log(log.message) }}
    {% else %}
        {{ profiler_dump_log(log.message, log.context) }}

        <div class=\"text-small font-normal\">
            {% set context_id = 'context-' ~ category ~ '-' ~ log_index %}
            <a class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#{{ context_id }}\" data-toggle-alt-content=\"Hide context\">Show context</a>

            {% if has_trace %}
                &nbsp;&nbsp;
                {% set trace_id = 'trace-' ~ category ~ '-' ~ log_index %}
                <a class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#{{ trace_id }}\" data-toggle-alt-content=\"Hide trace\">Show trace</a>
            {% endif %}
        </div>

        <div id=\"{{ context_id }}\" class=\"context sf-toggle-content sf-toggle-hidden\">
            {{ profiler_dump(log.context, maxDepth=1) }}
        </div>

        {% if has_trace %}
            <div id=\"{{ trace_id }}\" class=\"context sf-toggle-content sf-toggle-hidden\">
                {{ profiler_dump(log.context.exception.trace, maxDepth=1) }}
            </div>
        {% endif %}
    {% endif %}
{% endmacro %}
", "@WebProfiler/Collector/logger.html.twig", "C:\\laragon\\www\\training\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\logger.html.twig");
    }
}
