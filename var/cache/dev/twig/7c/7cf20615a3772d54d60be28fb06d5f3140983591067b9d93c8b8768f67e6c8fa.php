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

/* admin/view_participant.html.twig */
class __TwigTemplate_0b8d5a777239c8884694fb117a8f4de5eb45d340a99b8ac1890ec870bd2e713d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/view_participant.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/view_participant.html.twig"));

        $this->parent = $this->loadTemplate("admin_base.html.twig", "admin/view_participant.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        yield "


    <div class=\"row\">

        <div class=\"col-lg-8\">


            <div class=\"checklist card\">
                <div class=\"card-header bg-dark font-white\">
                    <h4>";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["participant"]) || array_key_exists("participant", $context) ? $context["participant"] : (function () { throw new RuntimeError('Variable "participant" does not exist.', 14, $this->source); })()), "firstname", [], "any", false, false, false, 14), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["participant"]) || array_key_exists("participant", $context) ? $context["participant"] : (function () { throw new RuntimeError('Variable "participant" does not exist.', 14, $this->source); })()), "lastname", [], "any", false, false, false, 14), "html", null, true);
        yield "</h4>
                </div>
                <div class=\"card-body p-0\">
                    <div class=\"item\">
                        <b>First name:</b> <span class=\"float-right\">";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["participant"]) || array_key_exists("participant", $context) ? $context["participant"] : (function () { throw new RuntimeError('Variable "participant" does not exist.', 18, $this->source); })()), "firstname", [], "any", false, false, false, 18), "html", null, true);
        yield "</span>
                    </div>
                    <div class=\"item\">
                        <b>Last name:</b> <span class=\"float-right\">";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["participant"]) || array_key_exists("participant", $context) ? $context["participant"] : (function () { throw new RuntimeError('Variable "participant" does not exist.', 21, $this->source); })()), "lastname", [], "any", false, false, false, 21), "html", null, true);
        yield "</span>
                    </div>
                    <div class=\"item\">
                        <b>Phone:</b> <span class=\"float-right\">";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["participant"]) || array_key_exists("participant", $context) ? $context["participant"] : (function () { throw new RuntimeError('Variable "participant" does not exist.', 24, $this->source); })()), "phone", [], "any", false, false, false, 24), "html", null, true);
        yield "</span>
                    </div>
                    <div class=\"item\">
                        <b>Email:</b> <span class=\"float-right\">";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["participant"]) || array_key_exists("participant", $context) ? $context["participant"] : (function () { throw new RuntimeError('Variable "participant" does not exist.', 27, $this->source); })()), "email", [], "any", false, false, false, 27), "html", null, true);
        yield "</span>
                    </div>
                </div>
            </div>

                <div class=\"checklist card\">
                    <div class=\"card-header bg-primary font-white\">
                        <h4>MDA information</h4>
                    </div>
                    <div class=\"card-body p-0\">
                        <div class=\"item\">
                            <b>MDA code:</b> <span class=\"badge badge-danger font-sm float-right\">";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["mda"]) || array_key_exists("mda", $context) ? $context["mda"] : (function () { throw new RuntimeError('Variable "mda" does not exist.', 38, $this->source); })()), "mdacode", [], "any", false, false, false, 38), "html", null, true);
        yield "</span>
                        </div>
                        <div class=\"item\">
                            <b>Name:</b> <span class=\"float-right\">";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["mda"]) || array_key_exists("mda", $context) ? $context["mda"] : (function () { throw new RuntimeError('Variable "mda" does not exist.', 41, $this->source); })()), "name", [], "any", false, false, false, 41), "html", null, true);
        yield "</span>
                        </div>
                        <div class=\"item\">
                            <b>Address:</b> <span class=\"float-right\">";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["mda"]) || array_key_exists("mda", $context) ? $context["mda"] : (function () { throw new RuntimeError('Variable "mda" does not exist.', 44, $this->source); })()), "address", [], "any", false, false, false, 44), "html", null, true);
        yield "</span>
                        </div>
                        <div class=\"item\">
                            <b>Phone:</b> <span class=\"float-right\">";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["mda"]) || array_key_exists("mda", $context) ? $context["mda"] : (function () { throw new RuntimeError('Variable "mda" does not exist.', 47, $this->source); })()), "phone", [], "any", false, false, false, 47), "html", null, true);
        yield "</span>
                        </div>
                        <div class=\"item\">
                            <b>Email:</b> <span class=\"float-right\">";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["mda"]) || array_key_exists("mda", $context) ? $context["mda"] : (function () { throw new RuntimeError('Variable "mda" does not exist.', 50, $this->source); })()), "email", [], "any", false, false, false, 50), "html", null, true);
        yield "</span>
                        </div>
                    </div>
                </div>



        </div>




        <div class=\"col-lg-3\">



        </div>

    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin/view_participant.html.twig";
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
        return array (  146 => 50,  140 => 47,  134 => 44,  128 => 41,  122 => 38,  108 => 27,  102 => 24,  96 => 21,  90 => 18,  81 => 14,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin_base.html.twig' %}

{% block body %}



    <div class=\"row\">

        <div class=\"col-lg-8\">


            <div class=\"checklist card\">
                <div class=\"card-header bg-dark font-white\">
                    <h4>{{ participant.firstname }} {{ participant.lastname }}</h4>
                </div>
                <div class=\"card-body p-0\">
                    <div class=\"item\">
                        <b>First name:</b> <span class=\"float-right\">{{ participant.firstname }}</span>
                    </div>
                    <div class=\"item\">
                        <b>Last name:</b> <span class=\"float-right\">{{ participant.lastname }}</span>
                    </div>
                    <div class=\"item\">
                        <b>Phone:</b> <span class=\"float-right\">{{ participant.phone }}</span>
                    </div>
                    <div class=\"item\">
                        <b>Email:</b> <span class=\"float-right\">{{ participant.email }}</span>
                    </div>
                </div>
            </div>

                <div class=\"checklist card\">
                    <div class=\"card-header bg-primary font-white\">
                        <h4>MDA information</h4>
                    </div>
                    <div class=\"card-body p-0\">
                        <div class=\"item\">
                            <b>MDA code:</b> <span class=\"badge badge-danger font-sm float-right\">{{ mda.mdacode }}</span>
                        </div>
                        <div class=\"item\">
                            <b>Name:</b> <span class=\"float-right\">{{ mda.name }}</span>
                        </div>
                        <div class=\"item\">
                            <b>Address:</b> <span class=\"float-right\">{{ mda.address }}</span>
                        </div>
                        <div class=\"item\">
                            <b>Phone:</b> <span class=\"float-right\">{{ mda.phone }}</span>
                        </div>
                        <div class=\"item\">
                            <b>Email:</b> <span class=\"float-right\">{{ mda.email }}</span>
                        </div>
                    </div>
                </div>



        </div>




        <div class=\"col-lg-3\">



        </div>

    </div>

{% endblock %}", "admin/view_participant.html.twig", "C:\\laragon\\www\\training\\templates\\admin\\view_participant.html.twig");
    }
}
