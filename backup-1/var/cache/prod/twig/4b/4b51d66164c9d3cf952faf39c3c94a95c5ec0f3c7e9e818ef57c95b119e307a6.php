<?php

/* common/admin_header.html.twig */
class __TwigTemplate_929d2f6f832a7740269f8011d764e5fa7c4585a2ee0dd1258e5ae3173b3ce858 extends Twig_Template
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_dashboard");
        echo "\" class=\"navbar-brand\">
                        <div class=\"brand-text brand-big\">
                            <img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/logo.png"), "html", null, true);
        echo "\" style=\"max-width: 200px\">
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
        return "common/admin_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 27,  39 => 16,  34 => 14,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "common/admin_header.html.twig", "/home/federalc/public_html/training/templates/common/admin_header.html.twig");
    }
}
