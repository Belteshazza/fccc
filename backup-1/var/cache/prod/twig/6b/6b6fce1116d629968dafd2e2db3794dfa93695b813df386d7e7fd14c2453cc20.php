<?php

/* common/admin_nav.html.twig */
class __TwigTemplate_7860417206ef5d64a343978979d59b6e7af94e628c852c8ca34bfeb2a67b39ff extends Twig_Template
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
        echo "<nav class=\"side-navbar\">
    <!-- Sidebar Header-->
    <div class=\"sidebar-header bg-transparent_black_3 m-3 p-2 border_radius d-flex align-items-center\">
        <div class=\"avatar\"><img src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset2/img/user-blue.jpg"), "html", null, true);
        echo "\" alt=\"...\" class=\"img-fluid rounded-circle\"></div>
        <div class=\"title\">
            <p class=\"font-black\">Logged in as</p>
            <h1 class=\"font-sm-3\">";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "username", array()), "html", null, true);
        echo "</h1>

        </div>
    </div>
    <!-- Sidebar Navidation Menus--><span class=\"heading\">Main</span>
    <ul class=\"list-unstyled\">
        <li class=\"";
        // line 13
        if ((($context["page_title"] ?? null) == "Dashboard")) {
            echo " active ";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_dashboard");
        echo "\"> <i class=\"icon-home\"></i>Dashboard </a></li>
        <li class=\"";
        // line 14
        if ((($context["page_title"] ?? null) == "MDAs")) {
            echo " active ";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_mda");
        echo "\"> <i class=\"fa fa-th-list\"></i>MDAs </a></li>
        <li class=\"";
        // line 15
        if ((($context["page_title"] ?? null) == "MDA Admins")) {
            echo " active ";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_participants");
        echo "\"> <i class=\"fa fa-users\"></i>MDA Admins </a></li>
        <li class=\"";
        // line 16
        if ((($context["page_title"] ?? null) == "Training")) {
            echo " active ";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_training");
        echo "\"> <i class=\"fa fa-television\"></i>Trainings </a></li>
        <li class=\"";
        // line 17
        if ((($context["page_title"] ?? null) == "Invoice")) {
            echo " active ";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_invoice");
        echo "\"> <i class=\"fa fa-bar-chart-o\"></i>Invoice </a></li>


    </ul><span class=\"heading\">Extras</span>
    <ul class=\"list-unstyled\">
        <li class=\"";
        // line 22
        if ((($context["page_title"] ?? null) == "Account")) {
            echo " active ";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_account");
        echo "\"> <i class=\"fa fa-user\"></i> My Account </a></li>
        <li class=\"";
        // line 23
        if ((($context["page_title"] ?? null) == "Admin Users")) {
            echo " active ";
        }
        echo "\"> <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_users");
        echo "\"> <i class=\"fa fa-users\"></i>Admin Users</a></li>

    </ul>
</nav>";
    }

    public function getTemplateName()
    {
        return "common/admin_nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 23,  83 => 22,  71 => 17,  63 => 16,  55 => 15,  47 => 14,  39 => 13,  30 => 7,  24 => 4,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "common/admin_nav.html.twig", "/home/federalc/public_html/training/templates/common/admin_nav.html.twig");
    }
}
