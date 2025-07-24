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
class __TwigTemplate_b9e24ebda851bcac0be3cd22f8d867ec extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "common/nav.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "common/nav.html.twig"));

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
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
