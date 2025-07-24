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

/* common/user_nav.html.twig */
class __TwigTemplate_01d9a69daf1145f1ebb3c0c0302348ab8925eb208912b4d5ec34ede19fb4a6c5 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "common/user_nav.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "common/user_nav.html.twig"));

        // line 1
        yield "<nav class=\"side-navbar\">
    <!-- Sidebar Header-->
    <div class=\"sidebar-header bg-blue bg-transparent_black_3 m-3 p-2 border_radius d-flex align-items-center\">
        <div class=\"avatar\"><img src=\"";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset2/img/user-blue.jpg"), "html", null, true);
        yield "\" alt=\"...\" class=\"img-fluid rounded-circle\"></div>
        <div class=\"title\">
            <p class=\"font-black\">User:</p>
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
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_dashboard");
        yield "\"> <i class=\"icon-home\"></i>Dashboard </a></li>
        <li class=\"";
        // line 14
        if ((0 === CoreExtension::compare((isset($context["page_title"]) || array_key_exists("page_title", $context) ? $context["page_title"] : (function () { throw new RuntimeError('Variable "page_title" does not exist.', 14, $this->source); })()), "MDA"))) {
            yield " active ";
        }
        yield "\"><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_mda");
        yield "\"> <i class=\"fa fa-institution\"></i>MDA info. </a></li>
        <li class=\"";
        // line 15
        if ((0 === CoreExtension::compare((isset($context["page_title"]) || array_key_exists("page_title", $context) ? $context["page_title"] : (function () { throw new RuntimeError('Variable "page_title" does not exist.', 15, $this->source); })()), "Training"))) {
            yield " active ";
        }
        yield "\"><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_trainings");
        yield "\"> <i class=\"fa fa-television\"></i>Trainings </a></li>
        <li class=\"";
        // line 16
        if ((0 === CoreExtension::compare((isset($context["page_title"]) || array_key_exists("page_title", $context) ? $context["page_title"] : (function () { throw new RuntimeError('Variable "page_title" does not exist.', 16, $this->source); })()), "Invoice"))) {
            yield " active ";
        }
        yield "\"><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_invoice");
        yield "\"> <i class=\"fa fa-bar-chart-o\"></i>Invoice </a></li>


    </ul><span class=\"heading\">Extras</span>
    <ul class=\"list-unstyled\">
        <li class=\"";
        // line 21
        if ((0 === CoreExtension::compare((isset($context["page_title"]) || array_key_exists("page_title", $context) ? $context["page_title"] : (function () { throw new RuntimeError('Variable "page_title" does not exist.', 21, $this->source); })()), "Account"))) {
            yield " active ";
        }
        yield "\"><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_account");
        yield "\"> <i class=\"fa fa-user\"></i> Account </a></li>

    </ul>
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
        return "common/user_nav.html.twig";
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
        return array (  100 => 21,  88 => 16,  80 => 15,  72 => 14,  64 => 13,  55 => 7,  49 => 4,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"side-navbar\">
    <!-- Sidebar Header-->
    <div class=\"sidebar-header bg-blue bg-transparent_black_3 m-3 p-2 border_radius d-flex align-items-center\">
        <div class=\"avatar\"><img src=\"{{ asset('asset2/img/user-blue.jpg') }}\" alt=\"...\" class=\"img-fluid rounded-circle\"></div>
        <div class=\"title\">
            <p class=\"font-black\">User:</p>
            <h1 class=\"font-sm-3\">{{ user.username }}</h1>

        </div>
    </div>
    <!-- Sidebar Navidation Menus--><span class=\"heading\">Main</span>
    <ul class=\"list-unstyled\">
        <li class=\"{% if page_title == 'Dashboard' %} active {% endif %}\"><a href=\"{{ path('user_dashboard') }}\"> <i class=\"icon-home\"></i>Dashboard </a></li>
        <li class=\"{% if page_title == 'MDA' %} active {% endif %}\"><a href=\"{{ path('user_mda') }}\"> <i class=\"fa fa-institution\"></i>MDA info. </a></li>
        <li class=\"{% if page_title == 'Training' %} active {% endif %}\"><a href=\"{{ path('user_trainings') }}\"> <i class=\"fa fa-television\"></i>Trainings </a></li>
        <li class=\"{% if page_title == 'Invoice' %} active {% endif %}\"><a href=\"{{ path('user_invoice') }}\"> <i class=\"fa fa-bar-chart-o\"></i>Invoice </a></li>


    </ul><span class=\"heading\">Extras</span>
    <ul class=\"list-unstyled\">
        <li class=\"{% if page_title == 'Account' %} active {% endif %}\"><a href=\"{{ path('user_account') }}\"> <i class=\"fa fa-user\"></i> Account </a></li>

    </ul>
</nav>", "common/user_nav.html.twig", "C:\\laragon\\www\\training\\templates\\common\\user_nav.html.twig");
    }
}
