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

        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["privileges"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["privilege"]) {
            // line 16
            echo "            ";
            if (($context["privilege"] == "mda")) {
                // line 17
                echo "                <li class=\"";
                if ((($context["page_title"] ?? null) == "MDAs")) {
                    echo " active ";
                }
                echo "\"><a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_mda");
                echo "\"> <i class=\"fa fa-th-list\"></i>MDAs </a></li>
            ";
            }
            // line 19
            echo "
            ";
            // line 20
            if (($context["privilege"] == "mda_admin")) {
                // line 21
                echo "                <li class=\"";
                if ((($context["page_title"] ?? null) == "MDA Admins")) {
                    echo " active ";
                }
                echo "\"><a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_participants");
                echo "\"> <i class=\"fa fa-users\"></i>MDA Admins </a></li>
            ";
            }
            // line 23
            echo "
            ";
            // line 24
            if (($context["privilege"] == "training")) {
                // line 25
                echo "                <li class=\"";
                if ((($context["page_title"] ?? null) == "Training")) {
                    echo " active ";
                }
                echo "\"><a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_training");
                echo "\"> <i class=\"fa fa-television\"></i>Trainings </a></li>
                <li class=\"";
                // line 26
                if ((($context["page_title"] ?? null) == "Register Training Participants")) {
                    echo " active ";
                }
                echo "\"><a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_register_training_participant");
                echo "\"> <i class=\"fa fa-file-o\"></i>Register Participants </a></li>
                <li class=\"";
                // line 27
                if ((($context["page_title"] ?? null) == "Invoice")) {
                    echo " active ";
                }
                echo "\"><a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_invoice");
                echo "\"> <i class=\"fa fa-bar-chart-o\"></i>Invoice </a></li>
            ";
            }
            // line 29
            echo "


            ";
            // line 32
            if (($context["privilege"] == "participants_allowed")) {
                // line 33
                echo "                <li class=\"";
                if ((($context["page_title"] ?? null) == "MDA Participants Allowed")) {
                    echo " active ";
                }
                echo "\"><a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_participants_allowed");
                echo "\"> <i class=\"fa fa-user-circle-o\"></i>MDA Participants allowed </a></li>
            ";
            }
            // line 35
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['privilege'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "







    </ul><span class=\"heading\">Extras</span>
    <ul class=\"list-unstyled\">
        <li class=\"";
        // line 47
        if ((($context["page_title"] ?? null) == "Account")) {
            echo " active ";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_account");
        echo "\"> <i class=\"fa fa-user\"></i> My Account </a></li>
        ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["privileges"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["privilege"]) {
            // line 49
            echo "            ";
            if (($context["privilege"] == "admins")) {
                // line 50
                echo "                <li class=\"";
                if ((($context["page_title"] ?? null) == "Admin Users")) {
                    echo " active ";
                }
                echo "\"> <a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_users");
                echo "\"> <i class=\"fa fa-users\"></i>Admin Users</a></li>
            ";
            }
            // line 52
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['privilege'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "    </ul>
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
        return array (  178 => 53,  172 => 52,  162 => 50,  159 => 49,  155 => 48,  147 => 47,  135 => 37,  128 => 35,  118 => 33,  116 => 32,  111 => 29,  102 => 27,  94 => 26,  85 => 25,  83 => 24,  80 => 23,  70 => 21,  68 => 20,  65 => 19,  55 => 17,  52 => 16,  48 => 15,  39 => 13,  30 => 7,  24 => 4,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "common/admin_nav.html.twig", "/home/federalc/public_html/training/templates/common/admin_nav.html.twig");
    }
}
