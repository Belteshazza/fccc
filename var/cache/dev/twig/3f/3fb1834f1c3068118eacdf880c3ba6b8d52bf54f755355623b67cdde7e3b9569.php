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

/* @Security/Collector/security.html.twig */
class __TwigTemplate_53abbb6141c66a1a1211f2991e59d90217ba4ea22eeb6eeb748bde86647c27ff extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'page_title' => [$this, 'block_page_title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Security/Collector/security.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Security/Collector/security.html.twig"));

        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@Security/Collector/security.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        // line 0
        yield "Security";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        return; yield '';
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
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 6, $this->source); })()), "token", [], "any", false, false, false, 6)) {
            // line 7
            yield "        ";
            $context["is_authenticated"] = (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 7, $this->source); })()), "enabled", [], "any", false, false, false, 7) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 7, $this->source); })()), "authenticated", [], "any", false, false, false, 7));
            // line 8
            yield "        ";
            $context["color_code"] = (( !(isset($context["is_authenticated"]) || array_key_exists("is_authenticated", $context) ? $context["is_authenticated"] : (function () { throw new RuntimeError('Variable "is_authenticated" does not exist.', 8, $this->source); })())) ? ("yellow") : (""));
            // line 9
            yield "    ";
        } else {
            // line 10
            yield "        ";
            $context["color_code"] = ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 10, $this->source); })()), "enabled", [], "any", false, false, false, 10)) ? ("red") : (""));
            // line 11
            yield "    ";
        }
        // line 12
        yield "
    ";
        // line 13
        $context["icon"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 14
            yield "        ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@Security/Collector/icon.svg");
            yield "
        <span class=\"sf-toolbar-value\">";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "user", [], "any", true, true, false, 15)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "user", [], "any", false, false, false, 15), "n/a")) : ("n/a")), "html", null, true);
            yield "</span>
    ";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 17
        yield "
    ";
        // line 18
        $context["text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 19
            yield "        ";
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 19, $this->source); })()), "impersonated", [], "any", false, false, false, 19)) {
                // line 20
                yield "            <div class=\"sf-toolbar-info-group\">
                <div class=\"sf-toolbar-info-piece\">
                    <b>Impersonator</b>
                    <span>";
                // line 23
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 23, $this->source); })()), "impersonatorUser", [], "any", false, false, false, 23), "html", null, true);
                yield "</span>
                </div>
            </div>
        ";
            }
            // line 27
            yield "
        <div class=\"sf-toolbar-info-group\">
            ";
            // line 29
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 29, $this->source); })()), "enabled", [], "any", false, false, false, 29)) {
                // line 30
                yield "                ";
                if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 30, $this->source); })()), "token", [], "any", false, false, false, 30)) {
                    // line 31
                    yield "                    <div class=\"sf-toolbar-info-piece\">
                        <b>Logged in as</b>
                        <span>";
                    // line 33
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 33, $this->source); })()), "user", [], "any", false, false, false, 33), "html", null, true);
                    yield "</span>
                    </div>

                    <div class=\"sf-toolbar-info-piece\">
                        <b>Authenticated</b>
                        <span class=\"sf-toolbar-status sf-toolbar-status-";
                    // line 38
                    yield (((isset($context["is_authenticated"]) || array_key_exists("is_authenticated", $context) ? $context["is_authenticated"] : (function () { throw new RuntimeError('Variable "is_authenticated" does not exist.', 38, $this->source); })())) ? ("green") : ("red"));
                    yield "\">";
                    yield (((isset($context["is_authenticated"]) || array_key_exists("is_authenticated", $context) ? $context["is_authenticated"] : (function () { throw new RuntimeError('Variable "is_authenticated" does not exist.', 38, $this->source); })())) ? ("Yes") : ("No"));
                    yield "</span>
                    </div>

                    <div class=\"sf-toolbar-info-piece\">
                        <b>Token class</b>
                        <span>";
                    // line 43
                    yield $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->abbrClass($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 43, $this->source); })()), "tokenClass", [], "any", false, false, false, 43), "html", null, true));
                    yield "</span>
                    </div>
                ";
                } else {
                    // line 46
                    yield "                    <div class=\"sf-toolbar-info-piece\">
                        <b>Authenticated</b>
                        <span class=\"sf-toolbar-status sf-toolbar-status-red\">No</span>
                    </div>
                ";
                }
                // line 51
                yield "
                ";
                // line 52
                if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 52, $this->source); })()), "firewall", [], "any", false, false, false, 52)) {
                    // line 53
                    yield "                    <div class=\"sf-toolbar-info-piece\">
                        <b>Firewall name</b>
                        <span>";
                    // line 55
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 55, $this->source); })()), "firewall", [], "any", false, false, false, 55), "name", [], "any", false, false, false, 55), "html", null, true);
                    yield "</span>
                    </div>
                ";
                }
                // line 58
                yield "
                ";
                // line 59
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 59, $this->source); })()), "token", [], "any", false, false, false, 59) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 59, $this->source); })()), "logoutUrl", [], "any", false, false, false, 59))) {
                    // line 60
                    yield "                    <div class=\"sf-toolbar-info-piece\">
                        <b>Actions</b>
                        <span>
                            <a href=\"";
                    // line 63
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 63, $this->source); })()), "logoutUrl", [], "any", false, false, false, 63), "html", null, true);
                    yield "\">Logout</a>
                            ";
                    // line 64
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 64, $this->source); })()), "impersonated", [], "any", false, false, false, 64) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 64, $this->source); })()), "impersonationExitPath", [], "any", false, false, false, 64))) {
                        // line 65
                        yield "                                | <a href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 65, $this->source); })()), "impersonationExitPath", [], "any", false, false, false, 65), "html", null, true);
                        yield "\">Exit impersonation</a>
                            ";
                    }
                    // line 67
                    yield "                        </span>
                    </div>
                ";
                }
                // line 70
                yield "            ";
            } else {
                // line 71
                yield "                <div class=\"sf-toolbar-info-piece\">
                    <span>The security is disabled.</span>
                </div>
            ";
            }
            // line 75
            yield "        </div>
    ";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 77
        yield "
    ";
        // line 78
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => (isset($context["profiler_url"]) || array_key_exists("profiler_url", $context) ? $context["profiler_url"] : (function () { throw new RuntimeError('Variable "profiler_url" does not exist.', 78, $this->source); })()), "status" => (isset($context["color_code"]) || array_key_exists("color_code", $context) ? $context["color_code"] : (function () { throw new RuntimeError('Variable "color_code" does not exist.', 78, $this->source); })())]);
        yield "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        return; yield '';
    }

    // line 81
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 82
        yield "    <span class=\"label ";
        yield ((( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 82, $this->source); })()), "enabled", [], "any", false, false, false, 82) ||  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 82, $this->source); })()), "token", [], "any", false, false, false, 82))) ? ("disabled") : (""));
        yield "\">
        <span class=\"icon\">";
        // line 83
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@Security/Collector/icon.svg");
        yield "</span>
        <strong>Security</strong>
    </span>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        return; yield '';
    }

    // line 88
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 89
        yield "    <h2>Security Token</h2>

    ";
        // line 91
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 91, $this->source); })()), "enabled", [], "any", false, false, false, 91)) {
            // line 92
            yield "        ";
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 92, $this->source); })()), "token", [], "any", false, false, false, 92)) {
                // line 93
                yield "            <div class=\"metrics\">
                <div class=\"metric\">
                    <span class=\"value\">";
                // line 95
                (((0 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 95, $this->source); })()), "user", [], "any", false, false, false, 95), "anon."))) ? (yield "Anonymous") : (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 95, $this->source); })()), "user", [], "any", false, false, false, 95), "html", null, true)));
                yield "</span>
                    <span class=\"label\">Username</span>
                </div>

                <div class=\"metric\">
                    <span class=\"value\">";
                // line 100
                yield Twig\Extension\CoreExtension::include($this->env, $context, (("@WebProfiler/Icon/" . ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 100, $this->source); })()), "authenticated", [], "any", false, false, false, 100)) ? ("yes") : ("no"))) . ".svg"));
                yield "</span>
                    <span class=\"label\">Authenticated</span>
                </div>
            </div>

            <table>
                <thead>
                    <tr>
                        <th scope=\"col\" class=\"key\">Property</th>
                        <th scope=\"col\">Value</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>Roles</th>
                        <td>
                            ";
                // line 116
                yield ((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 116, $this->source); })()), "roles", [], "any", false, false, false, 116))) ? ("none") : ($this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 116, $this->source); })()), "roles", [], "any", false, false, false, 116), 1)));
                yield "

                            ";
                // line 118
                if (( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 118, $this->source); })()), "authenticated", [], "any", false, false, false, 118) && Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 118, $this->source); })()), "roles", [], "any", false, false, false, 118)))) {
                    // line 119
                    yield "                                <p class=\"help\">User is not authenticated probably because they have no roles.</p>
                            ";
                }
                // line 121
                yield "                        </td>
                    </tr>

                    ";
                // line 124
                if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 124, $this->source); })()), "supportsRoleHierarchy", [], "any", false, false, false, 124)) {
                    // line 125
                    yield "                    <tr>
                        <th>Inherited Roles</th>
                        <td>";
                    // line 127
                    yield ((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 127, $this->source); })()), "inheritedRoles", [], "any", false, false, false, 127))) ? ("none") : ($this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 127, $this->source); })()), "inheritedRoles", [], "any", false, false, false, 127), 1)));
                    yield "</td>
                    </tr>
                    ";
                }
                // line 130
                yield "
                    ";
                // line 131
                if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 131, $this->source); })()), "token", [], "any", false, false, false, 131)) {
                    // line 132
                    yield "                    <tr>
                        <th>Token</th>
                        <td>";
                    // line 134
                    yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 134, $this->source); })()), "token", [], "any", false, false, false, 134));
                    yield "</td>
                    </tr>
                    ";
                }
                // line 137
                yield "                </tbody>
            </table>
        ";
            } elseif (CoreExtension::getAttribute($this->env, $this->source,             // line 139
(isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 139, $this->source); })()), "enabled", [], "any", false, false, false, 139)) {
                // line 140
                yield "            <div class=\"empty\">
                <p>There is no security token.</p>
            </div>
        ";
            }
            // line 144
            yield "

        <h2>Security Firewall</h2>

        ";
            // line 148
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 148, $this->source); })()), "firewall", [], "any", false, false, false, 148)) {
                // line 149
                yield "            <div class=\"metrics\">
                <div class=\"metric\">
                    <span class=\"value\">";
                // line 151
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 151, $this->source); })()), "firewall", [], "any", false, false, false, 151), "name", [], "any", false, false, false, 151), "html", null, true);
                yield "</span>
                    <span class=\"label\">Name</span>
                </div>
                <div class=\"metric\">
                    <span class=\"value\">";
                // line 155
                yield Twig\Extension\CoreExtension::include($this->env, $context, (("@WebProfiler/Icon/" . ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 155, $this->source); })()), "firewall", [], "any", false, false, false, 155), "security_enabled", [], "any", false, false, false, 155)) ? ("yes") : ("no"))) . ".svg"));
                yield "</span>
                    <span class=\"label\">Security enabled</span>
                </div>
                <div class=\"metric\">
                    <span class=\"value\">";
                // line 159
                yield Twig\Extension\CoreExtension::include($this->env, $context, (("@WebProfiler/Icon/" . ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 159, $this->source); })()), "firewall", [], "any", false, false, false, 159), "stateless", [], "any", false, false, false, 159)) ? ("yes") : ("no"))) . ".svg"));
                yield "</span>
                    <span class=\"label\">Stateless</span>
                </div>
                <div class=\"metric\">
                    <span class=\"value\">";
                // line 163
                yield Twig\Extension\CoreExtension::include($this->env, $context, (("@WebProfiler/Icon/" . ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 163, $this->source); })()), "firewall", [], "any", false, false, false, 163), "allows_anonymous", [], "any", false, false, false, 163)) ? ("yes") : ("no"))) . ".svg"));
                yield "</span>
                    <span class=\"label\">Allows anonymous</span>
                </div>
            </div>

            ";
                // line 168
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 168, $this->source); })()), "firewall", [], "any", false, false, false, 168), "security_enabled", [], "any", false, false, false, 168)) {
                    // line 169
                    yield "                <h4>Configuration</h4>

                <table>
                    <thead>
                        <tr>
                            <th scope=\"col\" class=\"key\">Key</th>
                            <th scope=\"col\">Value</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>provider</th>
                            <td>";
                    // line 181
                    ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 181, $this->source); })()), "firewall", [], "any", false, false, false, 181), "provider", [], "any", false, false, false, 181)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 181, $this->source); })()), "firewall", [], "any", false, false, false, 181), "provider", [], "any", false, false, false, 181), "html", null, true)) : (yield "(none)"));
                    yield "</td>
                        </tr>
                        <tr>
                            <th>context</th>
                            <td>";
                    // line 185
                    ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 185, $this->source); })()), "firewall", [], "any", false, false, false, 185), "context", [], "any", false, false, false, 185)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 185, $this->source); })()), "firewall", [], "any", false, false, false, 185), "context", [], "any", false, false, false, 185), "html", null, true)) : (yield "(none)"));
                    yield "</td>
                        </tr>
                        <tr>
                            <th>entry_point</th>
                            <td>";
                    // line 189
                    ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 189, $this->source); })()), "firewall", [], "any", false, false, false, 189), "entry_point", [], "any", false, false, false, 189)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 189, $this->source); })()), "firewall", [], "any", false, false, false, 189), "entry_point", [], "any", false, false, false, 189), "html", null, true)) : (yield "(none)"));
                    yield "</td>
                        </tr>
                        <tr>
                            <th>user_checker</th>
                            <td>";
                    // line 193
                    ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 193, $this->source); })()), "firewall", [], "any", false, false, false, 193), "user_checker", [], "any", false, false, false, 193)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 193, $this->source); })()), "firewall", [], "any", false, false, false, 193), "user_checker", [], "any", false, false, false, 193), "html", null, true)) : (yield "(none)"));
                    yield "</td>
                        </tr>
                        <tr>
                            <th>access_denied_handler</th>
                            <td>";
                    // line 197
                    ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 197, $this->source); })()), "firewall", [], "any", false, false, false, 197), "access_denied_handler", [], "any", false, false, false, 197)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 197, $this->source); })()), "firewall", [], "any", false, false, false, 197), "access_denied_handler", [], "any", false, false, false, 197), "html", null, true)) : (yield "(none)"));
                    yield "</td>
                        </tr>
                        <tr>
                            <th>access_denied_url</th>
                            <td>";
                    // line 201
                    ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 201, $this->source); })()), "firewall", [], "any", false, false, false, 201), "access_denied_url", [], "any", false, false, false, 201)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 201, $this->source); })()), "firewall", [], "any", false, false, false, 201), "access_denied_url", [], "any", false, false, false, 201), "html", null, true)) : (yield "(none)"));
                    yield "</td>
                        </tr>
                        <tr>
                            <th>listeners</th>
                            <td>";
                    // line 205
                    yield ((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 205, $this->source); })()), "firewall", [], "any", false, false, false, 205), "listeners", [], "any", false, false, false, 205))) ? ("(none)") : ($this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 205, $this->source); })()), "firewall", [], "any", false, false, false, 205), "listeners", [], "any", false, false, false, 205), 1)));
                    yield "</td>
                        </tr>
                    </tbody>
                </table>

                <h4>Listeners</h4>

                ";
                    // line 212
                    if (Twig\Extension\CoreExtension::testEmpty(((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "listeners", [], "any", true, true, false, 212)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "listeners", [], "any", false, false, false, 212), [])) : ([])))) {
                        // line 213
                        yield "                    <div class=\"empty\">
                        <p>No security listeners have been recorded. Check that debugging is enabled in the kernel.</p>
                    </div>
                ";
                    } else {
                        // line 217
                        yield "                    <table>
                        <thead>
                        <tr>
                            <th>Listener</th>
                            <th>Duration</th>
                            <th>Response</th>
                        </tr>
                        </thead>

                        ";
                        // line 226
                        $context["previous_event"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 226, $this->source); })()), "listeners", [], "any", false, false, false, 226));
                        // line 227
                        yield "                        ";
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 227, $this->source); })()), "listeners", [], "any", false, false, false, 227));
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
                        foreach ($context['_seq'] as $context["_key"] => $context["listener"]) {
                            // line 228
                            yield "                            ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 228) || (0 !== CoreExtension::compare($context["listener"], (isset($context["previous_event"]) || array_key_exists("previous_event", $context) ? $context["previous_event"] : (function () { throw new RuntimeError('Variable "previous_event" does not exist.', 228, $this->source); })()))))) {
                                // line 229
                                yield "                                ";
                                if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 229)) {
                                    // line 230
                                    yield "                                    </tbody>
                                ";
                                }
                                // line 232
                                yield "
                                <tbody>
                                ";
                                // line 234
                                $context["previous_event"] = $context["listener"];
                                // line 235
                                yield "                            ";
                            }
                            // line 236
                            yield "
                            <tr>
                                <td class=\"font-normal\">";
                            // line 238
                            yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["listener"], "stub", [], "any", false, false, false, 238));
                            yield "</td>
                                <td class=\"no-wrap\">";
                            // line 239
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%0.2f", (CoreExtension::getAttribute($this->env, $this->source, $context["listener"], "time", [], "any", false, false, false, 239) * 1000)), "html", null, true);
                            yield " ms</td>
                                <td class=\"font-normal\">";
                            // line 240
                            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["listener"], "response", [], "any", false, false, false, 240)) ? ($this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["listener"], "response", [], "any", false, false, false, 240))) : ("(none)"));
                            yield "</td>
                            </tr>

                            ";
                            // line 243
                            if (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 243)) {
                                // line 244
                                yield "                                </tbody>
                            ";
                            }
                            // line 246
                            yield "                        ";
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
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listener'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 247
                        yield "                    </table>
                ";
                    }
                    // line 249
                    yield "            ";
                }
                // line 250
                yield "        ";
            } elseif (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 250, $this->source); })()), "enabled", [], "any", false, false, false, 250)) {
                // line 251
                yield "            <div class=\"empty\">
                <p>This request was not covered by any firewall.</p>
            </div>
        ";
            }
            // line 255
            yield "    ";
        } else {
            // line 256
            yield "        <div class=\"empty\">
            <p>The security component is disabled.</p>
        </div>
    ";
        }
        // line 260
        yield "
    ";
        // line 261
        if ( !Twig\Extension\CoreExtension::testEmpty(((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "voters", [], "any", true, true, false, 261)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "voters", [], "any", false, false, false, 261), [])) : ([])))) {
            // line 262
            yield "        <h2>Security Voters <small>(";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 262, $this->source); })()), "voters", [], "any", false, false, false, 262)), "html", null, true);
            yield ")</small></h2>

        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">";
            // line 266
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "voterStrategy", [], "any", true, true, false, 266)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "voterStrategy", [], "any", false, false, false, 266), "unknown")) : ("unknown")), "html", null, true);
            yield "</span>
                <span class=\"label\">Strategy</span>
            </div>
        </div>

        <table class=\"voters\">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Voter class</th>
                </tr>
            </thead>

            <tbody>
                ";
            // line 280
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 280, $this->source); })()), "voters", [], "any", false, false, false, 280));
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
            foreach ($context['_seq'] as $context["_key"] => $context["voter"]) {
                // line 281
                yield "                    <tr>
                        <td class=\"font-normal text-small text-muted nowrap\">";
                // line 282
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 282), "html", null, true);
                yield "</td>
                        <td class=\"font-normal\">";
                // line 283
                yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $context["voter"]);
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 286
            yield "            </tbody>
        </table>
    ";
        }
        // line 289
        yield "
    ";
        // line 290
        if ( !Twig\Extension\CoreExtension::testEmpty(((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "accessDecisionLog", [], "any", true, true, false, 290)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "accessDecisionLog", [], "any", false, false, false, 290), [])) : ([])))) {
            // line 291
            yield "        <h2>Access decision log</h2>

        <table class=\"decision-log\">
            <col style=\"width: 30px\">
            <col style=\"width: 120px\">
            <col style=\"width: 25%\">
            <col style=\"width: 60%\">

            <thead>
                <tr>
                    <th>#</th>
                    <th>Result</th>
                    <th>Attributes</th>
                    <th>Object</th>
                </tr>
            </thead>

            <tbody>
                ";
            // line 309
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 309, $this->source); })()), "accessDecisionLog", [], "any", false, false, false, 309));
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
            foreach ($context['_seq'] as $context["_key"] => $context["decision"]) {
                // line 310
                yield "                    <tr class=\"voter_result\">
                        <td class=\"font-normal text-small text-muted nowrap\">";
                // line 311
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 311), "html", null, true);
                yield "</td>
                        <td class=\"font-normal\">
                            ";
                // line 313
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["decision"], "result", [], "any", false, false, false, 313)) ? ("<span class=\"label status-success same-width\">GRANTED</span>") : ("<span class=\"label status-error same-width\">DENIED</span>"));
                // line 316
                yield "
                        </td>
                        <td>
                            ";
                // line 319
                if ((0 === CoreExtension::compare(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["decision"], "attributes", [], "any", false, false, false, 319)), 1))) {
                    // line 320
                    yield "                                ";
                    $context["attribute"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["decision"], "attributes", [], "any", false, false, false, 320));
                    // line 321
                    yield "                                ";
                    if (CoreExtension::getAttribute($this->env, $this->source, ($context["attribute"] ?? null), "expression", [], "any", true, true, false, 321)) {
                        // line 322
                        yield "                                    Expression: <pre><code>";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attribute"]) || array_key_exists("attribute", $context) ? $context["attribute"] : (function () { throw new RuntimeError('Variable "attribute" does not exist.', 322, $this->source); })()), "expression", [], "any", false, false, false, 322), "html", null, true);
                        yield "</code></pre>
                                ";
                    } elseif ((0 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source,                     // line 323
(isset($context["attribute"]) || array_key_exists("attribute", $context) ? $context["attribute"] : (function () { throw new RuntimeError('Variable "attribute" does not exist.', 323, $this->source); })()), "type", [], "any", false, false, false, 323), "string"))) {
                        // line 324
                        yield "                                    ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["attribute"]) || array_key_exists("attribute", $context) ? $context["attribute"] : (function () { throw new RuntimeError('Variable "attribute" does not exist.', 324, $this->source); })()), "html", null, true);
                        yield "
                                ";
                    } else {
                        // line 326
                        yield "                                     ";
                        yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, (isset($context["attribute"]) || array_key_exists("attribute", $context) ? $context["attribute"] : (function () { throw new RuntimeError('Variable "attribute" does not exist.', 326, $this->source); })()));
                        yield "
                                ";
                    }
                    // line 328
                    yield "                            ";
                } else {
                    // line 329
                    yield "                                ";
                    yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["decision"], "attributes", [], "any", false, false, false, 329));
                    yield "
                            ";
                }
                // line 331
                yield "                        </td>
                        <td>";
                // line 332
                yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["decision"], "seek", ["object"], "method", false, false, false, 332));
                yield "</td>
                    </tr>
                    <tr class=\"voter_details\">
                        <td></td>
                        <td colspan=\"3\">
                        ";
                // line 337
                if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["decision"], "voter_details", [], "any", false, false, false, 337))) {
                    // line 338
                    yield "                            ";
                    $context["voter_details_id"] = ("voter-details-" . CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 338));
                    // line 339
                    yield "                            <div id=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["voter_details_id"]) || array_key_exists("voter_details_id", $context) ? $context["voter_details_id"] : (function () { throw new RuntimeError('Variable "voter_details_id" does not exist.', 339, $this->source); })()), "html", null, true);
                    yield "\" class=\"sf-toggle-content sf-toggle-hidden\">
                                <table>
                                   <tbody>
                                    ";
                    // line 342
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["decision"], "voter_details", [], "any", false, false, false, 342));
                    foreach ($context['_seq'] as $context["_key"] => $context["voter_detail"]) {
                        // line 343
                        yield "                                        <tr>
                                            <td class=\"font-normal\">";
                        // line 344
                        yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["voter_detail"], "class", [], "array", false, false, false, 344));
                        yield "</td>
                                            ";
                        // line 345
                        if ((0 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 345, $this->source); })()), "voterStrategy", [], "any", false, false, false, 345), Twig\Extension\CoreExtension::constant("Symfony\\Component\\Security\\Core\\Authorization\\AccessDecisionManager::STRATEGY_UNANIMOUS")))) {
                            // line 346
                            yield "                                            <td class=\"font-normal text-small\">attribute ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["voter_detail"], "attributes", [], "array", false, false, false, 346), 0, [], "array", false, false, false, 346), "html", null, true);
                            yield "</td>
                                            ";
                        }
                        // line 348
                        yield "                                            <td class=\"font-normal text-small\">
                                                ";
                        // line 349
                        if ((0 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, $context["voter_detail"], "vote", [], "array", false, false, false, 349), Twig\Extension\CoreExtension::constant("Symfony\\Component\\Security\\Core\\Authorization\\Voter\\VoterInterface::ACCESS_GRANTED")))) {
                            // line 350
                            yield "                                                    ACCESS GRANTED
                                                ";
                        } elseif ((0 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source,                         // line 351
$context["voter_detail"], "vote", [], "array", false, false, false, 351), Twig\Extension\CoreExtension::constant("Symfony\\Component\\Security\\Core\\Authorization\\Voter\\VoterInterface::ACCESS_ABSTAIN")))) {
                            // line 352
                            yield "                                                    ACCESS ABSTAIN
                                                ";
                        } elseif ((0 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source,                         // line 353
$context["voter_detail"], "vote", [], "array", false, false, false, 353), Twig\Extension\CoreExtension::constant("Symfony\\Component\\Security\\Core\\Authorization\\Voter\\VoterInterface::ACCESS_DENIED")))) {
                            // line 354
                            yield "                                                    ACCESS DENIED
                                                ";
                        } else {
                            // line 356
                            yield "                                                    unknown (";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["voter_detail"], "vote", [], "array", false, false, false, 356), "html", null, true);
                            yield ")
                                                ";
                        }
                        // line 358
                        yield "                                            </td>
                                        </tr>
                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voter_detail'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 361
                    yield "                                    </tbody>
                                </table>
                            </div>
                            <a class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#";
                    // line 364
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["voter_details_id"]) || array_key_exists("voter_details_id", $context) ? $context["voter_details_id"] : (function () { throw new RuntimeError('Variable "voter_details_id" does not exist.', 364, $this->source); })()), "html", null, true);
                    yield "\" data-toggle-alt-content=\"Hide voter details\">Show voter details</a>
                        ";
                }
                // line 366
                yield "                        </td>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['decision'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 369
            yield "            </tbody>
        </table>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Security/Collector/security.html.twig";
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
        return array (  898 => 369,  882 => 366,  877 => 364,  872 => 361,  864 => 358,  858 => 356,  854 => 354,  852 => 353,  849 => 352,  847 => 351,  844 => 350,  842 => 349,  839 => 348,  833 => 346,  831 => 345,  827 => 344,  824 => 343,  820 => 342,  813 => 339,  810 => 338,  808 => 337,  800 => 332,  797 => 331,  791 => 329,  788 => 328,  782 => 326,  776 => 324,  774 => 323,  769 => 322,  766 => 321,  763 => 320,  761 => 319,  756 => 316,  754 => 313,  749 => 311,  746 => 310,  729 => 309,  709 => 291,  707 => 290,  704 => 289,  699 => 286,  682 => 283,  678 => 282,  675 => 281,  658 => 280,  641 => 266,  633 => 262,  631 => 261,  628 => 260,  622 => 256,  619 => 255,  613 => 251,  610 => 250,  607 => 249,  603 => 247,  589 => 246,  585 => 244,  583 => 243,  577 => 240,  573 => 239,  569 => 238,  565 => 236,  562 => 235,  560 => 234,  556 => 232,  552 => 230,  549 => 229,  546 => 228,  528 => 227,  526 => 226,  515 => 217,  509 => 213,  507 => 212,  497 => 205,  490 => 201,  483 => 197,  476 => 193,  469 => 189,  462 => 185,  455 => 181,  441 => 169,  439 => 168,  431 => 163,  424 => 159,  417 => 155,  410 => 151,  406 => 149,  404 => 148,  398 => 144,  392 => 140,  390 => 139,  386 => 137,  380 => 134,  376 => 132,  374 => 131,  371 => 130,  365 => 127,  361 => 125,  359 => 124,  354 => 121,  350 => 119,  348 => 118,  343 => 116,  324 => 100,  316 => 95,  312 => 93,  309 => 92,  307 => 91,  303 => 89,  293 => 88,  278 => 83,  273 => 82,  263 => 81,  250 => 78,  247 => 77,  242 => 75,  236 => 71,  233 => 70,  228 => 67,  222 => 65,  220 => 64,  216 => 63,  211 => 60,  209 => 59,  206 => 58,  200 => 55,  196 => 53,  194 => 52,  191 => 51,  184 => 46,  178 => 43,  168 => 38,  160 => 33,  156 => 31,  153 => 30,  151 => 29,  147 => 27,  140 => 23,  135 => 20,  132 => 19,  130 => 18,  127 => 17,  121 => 15,  116 => 14,  114 => 13,  111 => 12,  108 => 11,  105 => 10,  102 => 9,  99 => 8,  96 => 7,  93 => 6,  83 => 5,  72 => 0,  62 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block page_title 'Security' %}

{% block toolbar %}
    {% if collector.token %}
        {% set is_authenticated = collector.enabled and collector.authenticated  %}
        {% set color_code = not is_authenticated ? 'yellow' %}
    {% else %}
        {% set color_code = collector.enabled ? 'red' %}
    {% endif %}

    {% set icon %}
        {{ include('@Security/Collector/icon.svg') }}
        <span class=\"sf-toolbar-value\">{{ collector.user|default('n/a') }}</span>
    {% endset %}

    {% set text %}
        {% if collector.impersonated %}
            <div class=\"sf-toolbar-info-group\">
                <div class=\"sf-toolbar-info-piece\">
                    <b>Impersonator</b>
                    <span>{{ collector.impersonatorUser }}</span>
                </div>
            </div>
        {% endif %}

        <div class=\"sf-toolbar-info-group\">
            {% if collector.enabled %}
                {% if collector.token %}
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Logged in as</b>
                        <span>{{ collector.user }}</span>
                    </div>

                    <div class=\"sf-toolbar-info-piece\">
                        <b>Authenticated</b>
                        <span class=\"sf-toolbar-status sf-toolbar-status-{{ is_authenticated ? 'green' : 'red' }}\">{{ is_authenticated ? 'Yes' : 'No' }}</span>
                    </div>

                    <div class=\"sf-toolbar-info-piece\">
                        <b>Token class</b>
                        <span>{{ collector.tokenClass|abbr_class }}</span>
                    </div>
                {% else %}
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Authenticated</b>
                        <span class=\"sf-toolbar-status sf-toolbar-status-red\">No</span>
                    </div>
                {% endif %}

                {% if collector.firewall %}
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Firewall name</b>
                        <span>{{ collector.firewall.name }}</span>
                    </div>
                {% endif %}

                {% if collector.token and collector.logoutUrl %}
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Actions</b>
                        <span>
                            <a href=\"{{ collector.logoutUrl }}\">Logout</a>
                            {% if collector.impersonated and collector.impersonationExitPath %}
                                | <a href=\"{{ collector.impersonationExitPath }}\">Exit impersonation</a>
                            {% endif %}
                        </span>
                    </div>
                {% endif %}
            {% else %}
                <div class=\"sf-toolbar-info-piece\">
                    <span>The security is disabled.</span>
                </div>
            {% endif %}
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url, status: color_code }) }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ not collector.enabled or not collector.token ? 'disabled' }}\">
        <span class=\"icon\">{{ include('@Security/Collector/icon.svg') }}</span>
        <strong>Security</strong>
    </span>
{% endblock %}

{% block panel %}
    <h2>Security Token</h2>

    {% if collector.enabled %}
        {% if collector.token %}
            <div class=\"metrics\">
                <div class=\"metric\">
                    <span class=\"value\">{{ collector.user == 'anon.' ? 'Anonymous' : collector.user }}</span>
                    <span class=\"label\">Username</span>
                </div>

                <div class=\"metric\">
                    <span class=\"value\">{{ include('@WebProfiler/Icon/' ~ (collector.authenticated ? 'yes' : 'no') ~ '.svg') }}</span>
                    <span class=\"label\">Authenticated</span>
                </div>
            </div>

            <table>
                <thead>
                    <tr>
                        <th scope=\"col\" class=\"key\">Property</th>
                        <th scope=\"col\">Value</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>Roles</th>
                        <td>
                            {{ collector.roles is empty ? 'none' : profiler_dump(collector.roles, maxDepth=1) }}

                            {% if not collector.authenticated and collector.roles is empty %}
                                <p class=\"help\">User is not authenticated probably because they have no roles.</p>
                            {% endif %}
                        </td>
                    </tr>

                    {% if collector.supportsRoleHierarchy %}
                    <tr>
                        <th>Inherited Roles</th>
                        <td>{{ collector.inheritedRoles is empty ? 'none' : profiler_dump(collector.inheritedRoles, maxDepth=1) }}</td>
                    </tr>
                    {% endif %}

                    {% if collector.token %}
                    <tr>
                        <th>Token</th>
                        <td>{{ profiler_dump(collector.token) }}</td>
                    </tr>
                    {% endif %}
                </tbody>
            </table>
        {% elseif collector.enabled %}
            <div class=\"empty\">
                <p>There is no security token.</p>
            </div>
        {% endif %}


        <h2>Security Firewall</h2>

        {% if collector.firewall %}
            <div class=\"metrics\">
                <div class=\"metric\">
                    <span class=\"value\">{{ collector.firewall.name }}</span>
                    <span class=\"label\">Name</span>
                </div>
                <div class=\"metric\">
                    <span class=\"value\">{{ include('@WebProfiler/Icon/' ~ (collector.firewall.security_enabled ? 'yes' : 'no') ~ '.svg') }}</span>
                    <span class=\"label\">Security enabled</span>
                </div>
                <div class=\"metric\">
                    <span class=\"value\">{{ include('@WebProfiler/Icon/' ~ (collector.firewall.stateless ? 'yes' : 'no') ~ '.svg') }}</span>
                    <span class=\"label\">Stateless</span>
                </div>
                <div class=\"metric\">
                    <span class=\"value\">{{ include('@WebProfiler/Icon/' ~ (collector.firewall.allows_anonymous ? 'yes' : 'no') ~ '.svg') }}</span>
                    <span class=\"label\">Allows anonymous</span>
                </div>
            </div>

            {% if collector.firewall.security_enabled %}
                <h4>Configuration</h4>

                <table>
                    <thead>
                        <tr>
                            <th scope=\"col\" class=\"key\">Key</th>
                            <th scope=\"col\">Value</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>provider</th>
                            <td>{{ collector.firewall.provider ?: '(none)' }}</td>
                        </tr>
                        <tr>
                            <th>context</th>
                            <td>{{ collector.firewall.context ?: '(none)' }}</td>
                        </tr>
                        <tr>
                            <th>entry_point</th>
                            <td>{{ collector.firewall.entry_point ?: '(none)' }}</td>
                        </tr>
                        <tr>
                            <th>user_checker</th>
                            <td>{{ collector.firewall.user_checker ?: '(none)' }}</td>
                        </tr>
                        <tr>
                            <th>access_denied_handler</th>
                            <td>{{ collector.firewall.access_denied_handler ?: '(none)' }}</td>
                        </tr>
                        <tr>
                            <th>access_denied_url</th>
                            <td>{{ collector.firewall.access_denied_url ?: '(none)' }}</td>
                        </tr>
                        <tr>
                            <th>listeners</th>
                            <td>{{ collector.firewall.listeners is empty ? '(none)' : profiler_dump(collector.firewall.listeners, maxDepth=1) }}</td>
                        </tr>
                    </tbody>
                </table>

                <h4>Listeners</h4>

                {% if collector.listeners|default([]) is empty %}
                    <div class=\"empty\">
                        <p>No security listeners have been recorded. Check that debugging is enabled in the kernel.</p>
                    </div>
                {% else %}
                    <table>
                        <thead>
                        <tr>
                            <th>Listener</th>
                            <th>Duration</th>
                            <th>Response</th>
                        </tr>
                        </thead>

                        {% set previous_event = (collector.listeners|first) %}
                        {% for listener in collector.listeners %}
                            {% if loop.first or listener != previous_event %}
                                {% if not loop.first %}
                                    </tbody>
                                {% endif %}

                                <tbody>
                                {% set previous_event = listener %}
                            {% endif %}

                            <tr>
                                <td class=\"font-normal\">{{ profiler_dump(listener.stub) }}</td>
                                <td class=\"no-wrap\">{{ '%0.2f'|format(listener.time * 1000) }} ms</td>
                                <td class=\"font-normal\">{{ listener.response ? profiler_dump(listener.response) : '(none)' }}</td>
                            </tr>

                            {% if loop.last %}
                                </tbody>
                            {% endif %}
                        {% endfor %}
                    </table>
                {% endif %}
            {% endif %}
        {% elseif collector.enabled %}
            <div class=\"empty\">
                <p>This request was not covered by any firewall.</p>
            </div>
        {% endif %}
    {% else %}
        <div class=\"empty\">
            <p>The security component is disabled.</p>
        </div>
    {% endif %}

    {% if collector.voters|default([]) is not empty %}
        <h2>Security Voters <small>({{ collector.voters|length }})</small></h2>

        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">{{ collector.voterStrategy|default('unknown') }}</span>
                <span class=\"label\">Strategy</span>
            </div>
        </div>

        <table class=\"voters\">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Voter class</th>
                </tr>
            </thead>

            <tbody>
                {% for voter in collector.voters %}
                    <tr>
                        <td class=\"font-normal text-small text-muted nowrap\">{{ loop.index }}</td>
                        <td class=\"font-normal\">{{ profiler_dump(voter) }}</td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    {% endif %}

    {% if collector.accessDecisionLog|default([]) is not empty %}
        <h2>Access decision log</h2>

        <table class=\"decision-log\">
            <col style=\"width: 30px\">
            <col style=\"width: 120px\">
            <col style=\"width: 25%\">
            <col style=\"width: 60%\">

            <thead>
                <tr>
                    <th>#</th>
                    <th>Result</th>
                    <th>Attributes</th>
                    <th>Object</th>
                </tr>
            </thead>

            <tbody>
                {% for decision in collector.accessDecisionLog %}
                    <tr class=\"voter_result\">
                        <td class=\"font-normal text-small text-muted nowrap\">{{ loop.index }}</td>
                        <td class=\"font-normal\">
                            {{ decision.result
                                ? '<span class=\"label status-success same-width\">GRANTED</span>'
                                : '<span class=\"label status-error same-width\">DENIED</span>'
                            }}
                        </td>
                        <td>
                            {% if decision.attributes|length == 1 %}
                                {% set attribute = decision.attributes|first %}
                                {% if attribute.expression is defined %}
                                    Expression: <pre><code>{{ attribute.expression }}</code></pre>
                                {% elseif attribute.type == 'string' %}
                                    {{ attribute }}
                                {% else %}
                                     {{ profiler_dump(attribute) }}
                                {% endif %}
                            {% else %}
                                {{ profiler_dump(decision.attributes) }}
                            {% endif %}
                        </td>
                        <td>{{ profiler_dump(decision.seek('object')) }}</td>
                    </tr>
                    <tr class=\"voter_details\">
                        <td></td>
                        <td colspan=\"3\">
                        {% if decision.voter_details is not empty %}
                            {% set voter_details_id = 'voter-details-' ~ loop.index %}
                            <div id=\"{{ voter_details_id }}\" class=\"sf-toggle-content sf-toggle-hidden\">
                                <table>
                                   <tbody>
                                    {% for voter_detail in decision.voter_details %}
                                        <tr>
                                            <td class=\"font-normal\">{{ profiler_dump(voter_detail['class']) }}</td>
                                            {% if collector.voterStrategy == constant('Symfony\\\\Component\\\\Security\\\\Core\\\\Authorization\\\\AccessDecisionManager::STRATEGY_UNANIMOUS') %}
                                            <td class=\"font-normal text-small\">attribute {{ voter_detail['attributes'][0] }}</td>
                                            {% endif %}
                                            <td class=\"font-normal text-small\">
                                                {% if voter_detail['vote'] == constant('Symfony\\\\Component\\\\Security\\\\Core\\\\Authorization\\\\Voter\\\\VoterInterface::ACCESS_GRANTED') %}
                                                    ACCESS GRANTED
                                                {% elseif voter_detail['vote'] == constant('Symfony\\\\Component\\\\Security\\\\Core\\\\Authorization\\\\Voter\\\\VoterInterface::ACCESS_ABSTAIN') %}
                                                    ACCESS ABSTAIN
                                                {% elseif voter_detail['vote'] == constant('Symfony\\\\Component\\\\Security\\\\Core\\\\Authorization\\\\Voter\\\\VoterInterface::ACCESS_DENIED') %}
                                                    ACCESS DENIED
                                                {% else %}
                                                    unknown ({{ voter_detail['vote'] }})
                                                {% endif %}
                                            </td>
                                        </tr>
                                    {% endfor %}
                                    </tbody>
                                </table>
                            </div>
                            <a class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#{{ voter_details_id }}\" data-toggle-alt-content=\"Hide voter details\">Show voter details</a>
                        {% endif %}
                        </td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    {% endif %}
{% endblock %}
", "@Security/Collector/security.html.twig", "C:\\laragon\\www\\training\\vendor\\symfony\\security-bundle\\Resources\\views\\Collector\\security.html.twig");
    }
}
