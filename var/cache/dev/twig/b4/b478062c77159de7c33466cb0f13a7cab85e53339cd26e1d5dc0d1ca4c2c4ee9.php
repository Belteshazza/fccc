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

/* common/admin_nav.html.twig */
class __TwigTemplate_5d0374337f162f6da243175aa178424bada4e06f37371e8a826b3adef81a1363 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "common/admin_nav.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "common/admin_nav.html.twig"));

        // line 1
        yield "<nav class=\"side-navbar\">
    <!-- Sidebar Header-->
    <div class=\"sidebar-header bg-transparent_black_3 m-3 p-2 border_radius d-flex align-items-center\">
        <div class=\"avatar\"><img src=\"";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset2/img/user-blue.jpg"), "html", null, true);
        yield "\" alt=\"...\" class=\"img-fluid rounded-circle\"></div>
        <div class=\"title\">
            <p class=\"font-black\">Logged in as</p>
            <h1 class=\"font-sm-3\">";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 7, $this->source); })()), "username", [], "any", false, false, false, 7), "html", null, true);
        yield "</h1>

        </div>
    </div>
    <!-- Sidebar Navidation Menus--><span class=\"heading\">Main</span>
    <ul class=\"list-unstyled\">
        <li class=\"";
        // line 13
        if ((0 === CoreExtension::compare((isset($context["page_title"]) || array_key_exists("page_title", $context) ? $context["page_title"] : (function () { throw new RuntimeError('Variable "page_title" does not exist.', 13, $this->source); })()), "Dashboard"))) {
            yield " active ";
        }
        yield "\"><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
        yield "\"> <i class=\"icon-home\"></i>Dashboard </a></li>

        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["privileges"]) || array_key_exists("privileges", $context) ? $context["privileges"] : (function () { throw new RuntimeError('Variable "privileges" does not exist.', 15, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["privilege"]) {
            // line 16
            yield "            ";
            if ((0 === CoreExtension::compare($context["privilege"], "mda"))) {
                // line 17
                yield "                <li class=\"";
                if ((0 === CoreExtension::compare((isset($context["page_title"]) || array_key_exists("page_title", $context) ? $context["page_title"] : (function () { throw new RuntimeError('Variable "page_title" does not exist.', 17, $this->source); })()), "MDAs"))) {
                    yield " active ";
                }
                yield "\"><a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_mda");
                yield "\"> <i class=\"fa fa-th-list\"></i>MDAs </a></li>
            ";
            }
            // line 19
            yield "
            ";
            // line 20
            if ((0 === CoreExtension::compare($context["privilege"], "mda_admin"))) {
                // line 21
                yield "                <li class=\"";
                if ((0 === CoreExtension::compare((isset($context["page_title"]) || array_key_exists("page_title", $context) ? $context["page_title"] : (function () { throw new RuntimeError('Variable "page_title" does not exist.', 21, $this->source); })()), "MDA Admins"))) {
                    yield " active ";
                }
                yield "\"><a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_participants");
                yield "\"> <i class=\"fa fa-users\"></i>MDA Admins </a></li>
            ";
            }
            // line 23
            yield "
            ";
            // line 24
            if ((0 === CoreExtension::compare($context["privilege"], "training"))) {
                // line 25
                yield "                <li class=\"";
                if ((0 === CoreExtension::compare((isset($context["page_title"]) || array_key_exists("page_title", $context) ? $context["page_title"] : (function () { throw new RuntimeError('Variable "page_title" does not exist.', 25, $this->source); })()), "Training"))) {
                    yield " active ";
                }
                yield "\"><a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_training");
                yield "\"> <i class=\"fa fa-television\"></i>Trainings </a></li>
                <li class=\"";
                // line 26
                if ((0 === CoreExtension::compare((isset($context["page_title"]) || array_key_exists("page_title", $context) ? $context["page_title"] : (function () { throw new RuntimeError('Variable "page_title" does not exist.', 26, $this->source); })()), "Register Training Participants"))) {
                    yield " active ";
                }
                yield "\"><a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_register_training_participant");
                yield "\"> <i class=\"fa fa-file-o\"></i>Register Participants </a></li>
                <li class=\"";
                // line 27
                if ((0 === CoreExtension::compare((isset($context["page_title"]) || array_key_exists("page_title", $context) ? $context["page_title"] : (function () { throw new RuntimeError('Variable "page_title" does not exist.', 27, $this->source); })()), "Invoice"))) {
                    yield " active ";
                }
                yield "\"><a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_invoice");
                yield "\"> <i class=\"fa fa-bar-chart-o\"></i>Invoice </a></li>
            ";
            }
            // line 29
            yield "


            ";
            // line 32
            if ((0 === CoreExtension::compare($context["privilege"], "participants_allowed"))) {
                // line 33
                yield "                <li class=\"";
                if ((0 === CoreExtension::compare((isset($context["page_title"]) || array_key_exists("page_title", $context) ? $context["page_title"] : (function () { throw new RuntimeError('Variable "page_title" does not exist.', 33, $this->source); })()), "MDA Participants Allowed"))) {
                    yield " active ";
                }
                yield "\"><a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_participants_allowed");
                yield "\"> <i class=\"fa fa-user-circle-o\"></i>MDA Participants allowed </a></li>
            ";
            }
            // line 35
            yield "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['privilege'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        yield "







    </ul><span class=\"heading\">Extras</span>
    <ul class=\"list-unstyled\">
        <li class=\"";
        // line 47
        if ((0 === CoreExtension::compare((isset($context["page_title"]) || array_key_exists("page_title", $context) ? $context["page_title"] : (function () { throw new RuntimeError('Variable "page_title" does not exist.', 47, $this->source); })()), "Account"))) {
            yield " active ";
        }
        yield "\"><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_account");
        yield "\"> <i class=\"fa fa-user\"></i> My Account </a></li>
        ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["privileges"]) || array_key_exists("privileges", $context) ? $context["privileges"] : (function () { throw new RuntimeError('Variable "privileges" does not exist.', 48, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["privilege"]) {
            // line 49
            yield "            ";
            if ((0 === CoreExtension::compare($context["privilege"], "admins"))) {
                // line 50
                yield "                <li class=\"";
                if ((0 === CoreExtension::compare((isset($context["page_title"]) || array_key_exists("page_title", $context) ? $context["page_title"] : (function () { throw new RuntimeError('Variable "page_title" does not exist.', 50, $this->source); })()), "Admin Users"))) {
                    yield " active ";
                }
                yield "\"> <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users");
                yield "\"> <i class=\"fa fa-users\"></i>Admin Users</a></li>
            ";
            }
            // line 52
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['privilege'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        yield "    </ul>
</nav>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "common/admin_nav.html.twig";
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
        return array (  203 => 53,  197 => 52,  187 => 50,  184 => 49,  180 => 48,  172 => 47,  160 => 37,  153 => 35,  143 => 33,  141 => 32,  136 => 29,  127 => 27,  119 => 26,  110 => 25,  108 => 24,  105 => 23,  95 => 21,  93 => 20,  90 => 19,  80 => 17,  77 => 16,  73 => 15,  64 => 13,  55 => 7,  49 => 4,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"side-navbar\">
    <!-- Sidebar Header-->
    <div class=\"sidebar-header bg-transparent_black_3 m-3 p-2 border_radius d-flex align-items-center\">
        <div class=\"avatar\"><img src=\"{{ asset('asset2/img/user-blue.jpg') }}\" alt=\"...\" class=\"img-fluid rounded-circle\"></div>
        <div class=\"title\">
            <p class=\"font-black\">Logged in as</p>
            <h1 class=\"font-sm-3\">{{ user.username }}</h1>

        </div>
    </div>
    <!-- Sidebar Navidation Menus--><span class=\"heading\">Main</span>
    <ul class=\"list-unstyled\">
        <li class=\"{% if page_title == 'Dashboard' %} active {% endif %}\"><a href=\"{{ path('admin_dashboard') }}\"> <i class=\"icon-home\"></i>Dashboard </a></li>

        {% for privilege in privileges %}
            {% if privilege == 'mda' %}
                <li class=\"{% if page_title == 'MDAs' %} active {% endif %}\"><a href=\"{{ path('admin_mda') }}\"> <i class=\"fa fa-th-list\"></i>MDAs </a></li>
            {% endif %}

            {% if privilege == 'mda_admin' %}
                <li class=\"{% if page_title == 'MDA Admins' %} active {% endif %}\"><a href=\"{{ path('admin_participants') }}\"> <i class=\"fa fa-users\"></i>MDA Admins </a></li>
            {% endif %}

            {% if privilege == 'training' %}
                <li class=\"{% if page_title == 'Training' %} active {% endif %}\"><a href=\"{{ path('admin_training') }}\"> <i class=\"fa fa-television\"></i>Trainings </a></li>
                <li class=\"{% if page_title == 'Register Training Participants' %} active {% endif %}\"><a href=\"{{ path('admin_register_training_participant') }}\"> <i class=\"fa fa-file-o\"></i>Register Participants </a></li>
                <li class=\"{% if page_title == 'Invoice' %} active {% endif %}\"><a href=\"{{ path('admin_invoice') }}\"> <i class=\"fa fa-bar-chart-o\"></i>Invoice </a></li>
            {% endif %}



            {% if privilege == 'participants_allowed' %}
                <li class=\"{% if page_title == 'MDA Participants Allowed' %} active {% endif %}\"><a href=\"{{ path('admin_participants_allowed') }}\"> <i class=\"fa fa-user-circle-o\"></i>MDA Participants allowed </a></li>
            {% endif %}

        {% endfor %}








    </ul><span class=\"heading\">Extras</span>
    <ul class=\"list-unstyled\">
        <li class=\"{% if page_title == 'Account' %} active {% endif %}\"><a href=\"{{ path('admin_account') }}\"> <i class=\"fa fa-user\"></i> My Account </a></li>
        {% for privilege in privileges %}
            {% if privilege == 'admins' %}
                <li class=\"{% if page_title == 'Admin Users' %} active {% endif %}\"> <a href=\"{{ path('admin_users') }}\"> <i class=\"fa fa-users\"></i>Admin Users</a></li>
            {% endif %}
        {% endfor %}
    </ul>
</nav>", "common/admin_nav.html.twig", "C:\\laragon\\www\\training\\templates\\common\\admin_nav.html.twig");
    }
}
