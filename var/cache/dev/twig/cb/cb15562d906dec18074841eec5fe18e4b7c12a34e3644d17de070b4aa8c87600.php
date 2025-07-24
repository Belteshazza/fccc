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

/* common/admin_header.html.twig */
class __TwigTemplate_864dc055db82226acdc29b04df1d142844bdfe7a46247f0feae2c747917dc9d4 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "common/admin_header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "common/admin_header.html.twig"));

        // line 1
        yield "<header class=\"header\">
    <nav class=\"navbar\">
        <!-- Search Box-->
        <div class=\"search-box\">
            <button class=\"dismiss\"><i class=\"icon-close\"></i></button>
            <form id=\"searchForm\" action=\"#\" role=\"search\">
                <input type=\"search\" placeholder=\"What are you looking for...\" class=\"form-control\">
            </form>
        </div>
        <div class=\"container-fluid\">
            <div class=\"navbar-holder d-flex align-items-center justify-content-between\">
                <!-- Navbar Header-->
                <div class=\"navbar-header\">
                    <!-- Navbar Brand --><a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
        yield "\" class=\"navbar-brand\">
                        <div class=\"brand-text brand-big\">
                            <img src=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo.png"), "html", null, true);
        yield "\" style=\"max-width: 200px\">
                        </div>
                        <div class=\"brand-text brand-small\"><strong>FCC</strong></div></a>
                    <!-- Toggle Button--><a id=\"toggle-btn\" href=\"#\" class=\"menu-btn active\"><span></span><span></span><span></span></a>
                </div>
                <!-- Navbar Menu -->
                <ul class=\"nav-menu list-unstyled d-flex flex-md-row align-items-md-center\">
                    <!-- Search-->
                    <li class=\"nav-item d-flex align-items-center\"><a id=\"search\" href=\"#\"><i class=\"icon-search\"></i></a></li>

                    <!-- Logout    -->
                    <li class=\"nav-item\"><a href=\"";
        // line 27
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
        yield "\" class=\"nav-link logout\">Logout<i class=\"fa fa-sign-out\"></i></a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "common/admin_header.html.twig";
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
        return array (  78 => 27,  64 => 16,  59 => 14,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header class=\"header\">
    <nav class=\"navbar\">
        <!-- Search Box-->
        <div class=\"search-box\">
            <button class=\"dismiss\"><i class=\"icon-close\"></i></button>
            <form id=\"searchForm\" action=\"#\" role=\"search\">
                <input type=\"search\" placeholder=\"What are you looking for...\" class=\"form-control\">
            </form>
        </div>
        <div class=\"container-fluid\">
            <div class=\"navbar-holder d-flex align-items-center justify-content-between\">
                <!-- Navbar Header-->
                <div class=\"navbar-header\">
                    <!-- Navbar Brand --><a href=\"{{ path('admin_dashboard') }}\" class=\"navbar-brand\">
                        <div class=\"brand-text brand-big\">
                            <img src=\"{{ asset('assets/images/logo.png') }}\" style=\"max-width: 200px\">
                        </div>
                        <div class=\"brand-text brand-small\"><strong>FCC</strong></div></a>
                    <!-- Toggle Button--><a id=\"toggle-btn\" href=\"#\" class=\"menu-btn active\"><span></span><span></span><span></span></a>
                </div>
                <!-- Navbar Menu -->
                <ul class=\"nav-menu list-unstyled d-flex flex-md-row align-items-md-center\">
                    <!-- Search-->
                    <li class=\"nav-item d-flex align-items-center\"><a id=\"search\" href=\"#\"><i class=\"icon-search\"></i></a></li>

                    <!-- Logout    -->
                    <li class=\"nav-item\"><a href=\"{{ path('logout') }}\" class=\"nav-link logout\">Logout<i class=\"fa fa-sign-out\"></i></a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>", "common/admin_header.html.twig", "C:\\laragon\\www\\training\\templates\\common\\admin_header.html.twig");
    }
}
