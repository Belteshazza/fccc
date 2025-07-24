<?php

/* common/nav.html.twig */
class __TwigTemplate_dfc7d16057ba52d18227ed2fc65834436449afb3af942bb6b17baf708acda7bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<header class=\"fixed-top\">
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\" class=\"navbar-brand\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/logo.png"), "html", null, true);
        echo "\" style=\"max-width: 220px\"></a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbar6\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"navbar-collapse collapse justify-content-stretch\" id=\"navbar6\">
        <ul class=\"navbar-nav\">
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\">Login</a>
            </li>
        </ul>
        <ul class=\"navbar-nav ml-auto\">
            <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\">Home</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"http://federalcharacter.gov.ng\" target=\"_fcc\"><i class=\"fa fa-globe\"></i> FCC Website</a>
            </li>
        </ul>
    </div>
    </div>
</nav>
</header>";
    }

    public function getTemplateName()
    {
        return "common/nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 26,  46 => 21,  34 => 14,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "common/nav.html.twig", "/home/federalc/public_html/training/templates/common/nav.html.twig");
    }
}
