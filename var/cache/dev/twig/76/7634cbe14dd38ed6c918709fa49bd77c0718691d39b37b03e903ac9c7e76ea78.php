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

/* common/nav.html.twig */
class __TwigTemplate_ba14999d0d36747946bba6a7fe2d1828d2ceefc92a7b698b8ccf6465af2f516d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "common/nav.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "common/nav.html.twig"));

        // line 1
        yield "<header class=\"fixed-top\">
    <div class=\"bg-dark d-none d-md-block\">
        <div class=\"container d-sm-flex clearfix font-white\">
            <div class=\"w-50\">
                <i class=\"fa fa-phone-square font-white\"></i> For more information, call 08039717368, 08052374070, 08039475265
            </div>
            <div class=\"w-50 text-right\">
                <i class=\"fa fa-envelope font-white\"></i> federalcharacterng@gmail.com
            </div>
        </div>
    </div>
<nav class=\"navbar navbar-expand-md navbar-dark bg-green\">
    <div class=\"container\">
    <a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        yield "\" class=\"navbar-brand\"><img src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo.png"), "html", null, true);
        yield "\" style=\"max-width: 220px\"></a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbar6\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"navbar-collapse collapse justify-content-stretch\" id=\"navbar6\">
        <ul class=\"navbar-nav\">
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
        // line 21
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        yield "\">Login</a>
            </li>
        </ul>
        <ul class=\"navbar-nav ml-auto\">
            <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"";
        // line 26
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        yield "\">Home</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"http://federalcharacter.gov.ng\" target=\"_fcc\"><i class=\"fa fa-globe\"></i> FCC Website</a>
            </li>
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
        return "common/nav.html.twig";
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
        return array (  79 => 26,  71 => 21,  59 => 14,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header class=\"fixed-top\">
    <div class=\"bg-dark d-none d-md-block\">
        <div class=\"container d-sm-flex clearfix font-white\">
            <div class=\"w-50\">
                <i class=\"fa fa-phone-square font-white\"></i> For more information, call 08039717368, 08052374070, 08039475265
            </div>
            <div class=\"w-50 text-right\">
                <i class=\"fa fa-envelope font-white\"></i> federalcharacterng@gmail.com
            </div>
        </div>
    </div>
<nav class=\"navbar navbar-expand-md navbar-dark bg-green\">
    <div class=\"container\">
    <a href=\"{{ path('home') }}\" class=\"navbar-brand\"><img src=\"{{ asset('assets/images/logo.png') }}\" style=\"max-width: 220px\"></a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbar6\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"navbar-collapse collapse justify-content-stretch\" id=\"navbar6\">
        <ul class=\"navbar-nav\">
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"{{ path('login') }}\">Login</a>
            </li>
        </ul>
        <ul class=\"navbar-nav ml-auto\">
            <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"{{ path('home') }}\">Home</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"http://federalcharacter.gov.ng\" target=\"_fcc\"><i class=\"fa fa-globe\"></i> FCC Website</a>
            </li>
        </ul>
    </div>
    </div>
</nav>
</header>", "common/nav.html.twig", "C:\\laragon\\www\\training\\templates\\common\\nav.html.twig");
    }
}
