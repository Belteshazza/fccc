<?php

/* common/user_header.html.twig */
class __TwigTemplate_ec6716a49340bb40e55549cbc35b7a6fbd6e3f33bd5a2c514ffef3e4da9099b2 extends Twig_Template
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
        echo "<header class=\"header\">
    <nav class=\"navbar bg-primary\">

        <div class=\"container-fluid\">
            <div class=\"navbar-holder d-flex align-items-center justify-content-between\">
                <!-- Navbar Header-->
                <div class=\"navbar-header\">
                    <!-- Navbar Brand --><a href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_dashboard");
        echo "\" class=\"navbar-brand\">
                        <div class=\"brand-text brand-big\">
                            <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/logo.png"), "html", null, true);
        echo "\" style=\"max-width: 200px\">
                        </div>
                        <div class=\"brand-text brand-small\"><strong>FCC</strong></div></a>
                    <!-- Toggle Button--><a id=\"toggle-btn\" href=\"#\" class=\"menu-btn active\"><span></span><span></span><span></span></a>
                </div>
                <!-- Navbar Menu -->
                <ul class=\"nav-menu list-unstyled d-flex flex-md-row align-items-md-center\">

                    <!-- Logout    -->
                    <li class=\"nav-item\"><a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
        echo "\" class=\"nav-link logout\">Logout<i class=\"fa fa-sign-out\"></i></a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>";
    }

    public function getTemplateName()
    {
        return "common/user_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 19,  33 => 10,  28 => 8,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "common/user_header.html.twig", "/home/federalc/public_html/training/templates/common/user_header.html.twig");
    }
}
