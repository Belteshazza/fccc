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

/* common/user_header.html.twig */
class __TwigTemplate_aa0c5e24062c0c64b616d58cadee48ee1e389b9123ef357594b856b28de7a975 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "common/user_header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "common/user_header.html.twig"));

        // line 1
        yield "<header class=\"header\">
    <nav class=\"navbar bg-primary\">

        <div class=\"container-fluid\">
            <div class=\"navbar-holder d-flex align-items-center justify-content-between\">
                <!-- Navbar Header-->
                <div class=\"navbar-header\">
                    <!-- Navbar Brand --><a href=\"";
        // line 8
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_dashboard");
        yield "\" class=\"navbar-brand\">
                        <div class=\"brand-text brand-big\">
                            <img src=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo.png"), "html", null, true);
        yield "\" style=\"max-width: 200px\">
                        </div>
                        <div class=\"brand-text brand-small\"><strong>FCC</strong></div></a>
                    <!-- Toggle Button--><a id=\"toggle-btn\" href=\"#\" class=\"menu-btn active\"><span></span><span></span><span></span></a>
                </div>
                <!-- Navbar Menu -->
                <ul class=\"nav-menu list-unstyled d-flex flex-md-row align-items-md-center\">

                    <!-- Logout    -->
                    <li class=\"nav-item\"><a href=\"";
        // line 19
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
        return "common/user_header.html.twig";
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
        return array (  70 => 19,  58 => 10,  53 => 8,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header class=\"header\">
    <nav class=\"navbar bg-primary\">

        <div class=\"container-fluid\">
            <div class=\"navbar-holder d-flex align-items-center justify-content-between\">
                <!-- Navbar Header-->
                <div class=\"navbar-header\">
                    <!-- Navbar Brand --><a href=\"{{ path('user_dashboard') }}\" class=\"navbar-brand\">
                        <div class=\"brand-text brand-big\">
                            <img src=\"{{ asset('assets/images/logo.png') }}\" style=\"max-width: 200px\">
                        </div>
                        <div class=\"brand-text brand-small\"><strong>FCC</strong></div></a>
                    <!-- Toggle Button--><a id=\"toggle-btn\" href=\"#\" class=\"menu-btn active\"><span></span><span></span><span></span></a>
                </div>
                <!-- Navbar Menu -->
                <ul class=\"nav-menu list-unstyled d-flex flex-md-row align-items-md-center\">

                    <!-- Logout    -->
                    <li class=\"nav-item\"><a href=\"{{ path('logout') }}\" class=\"nav-link logout\">Logout<i class=\"fa fa-sign-out\"></i></a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>", "common/user_header.html.twig", "C:\\laragon\\www\\training\\templates\\common\\user_header.html.twig");
    }
}
