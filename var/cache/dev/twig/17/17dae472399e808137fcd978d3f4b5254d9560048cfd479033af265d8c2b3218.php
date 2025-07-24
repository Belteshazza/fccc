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

/* user/mda.html.twig */
class __TwigTemplate_41060f5359c26e48711d1b94bf3b6e4d755bd74fc2b369bc550e3b57668b7703 extends Template
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
        return "user_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/mda.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/mda.html.twig"));

        $this->parent = $this->loadTemplate("user_base.html.twig", "user/mda.html.twig", 1);
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

        <div class=\"col-md-8\">

            <div class=\"card\">
                <div class=\"card-header bg-dark font-white\">
                    My MDA Information
                </div>
                <div class=\"card-body\">

                    <h1 class=\"font-weight-100 font-lg-4\"><i class=\"fa fa-institution\"></i> ";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["mda"]) || array_key_exists("mda", $context) ? $context["mda"] : (function () { throw new RuntimeError('Variable "mda" does not exist.', 16, $this->source); })()), "name", [], "any", false, false, false, 16), "html", null, true);
        yield "</h1>

                </div>

                <ul class=\"list-group list-group-flush\">
                    <li class=\"list-group-item\">
                        <i class=\"fa fa-barcode\"></i> <b>MDA Code:</b> ";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["mda"]) || array_key_exists("mda", $context) ? $context["mda"] : (function () { throw new RuntimeError('Variable "mda" does not exist.', 22, $this->source); })()), "mdacode", [], "any", false, false, false, 22), "html", null, true);
        yield "
                    </li>
                    <li class=\"list-group-item\">
                        <i class=\"fa fa-building\"></i> <b>Address:</b> ";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["mda"]) || array_key_exists("mda", $context) ? $context["mda"] : (function () { throw new RuntimeError('Variable "mda" does not exist.', 25, $this->source); })()), "address", [], "any", false, false, false, 25), "html", null, true);
        yield "
                    </li>

                    <li class=\"list-group-item\">
                        <i class=\"fa fa-phone\"></i> <b>Phone:</b> ";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["mda"]) || array_key_exists("mda", $context) ? $context["mda"] : (function () { throw new RuntimeError('Variable "mda" does not exist.', 29, $this->source); })()), "phone", [], "any", false, false, false, 29), "html", null, true);
        yield "
                    </li>

                    <li class=\"list-group-item\">
                        <i class=\"fa fa-envelope\"></i> <b>Email:</b> ";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["mda"]) || array_key_exists("mda", $context) ? $context["mda"] : (function () { throw new RuntimeError('Variable "mda" does not exist.', 33, $this->source); })()), "email", [], "any", false, false, false, 33), "html", null, true);
        yield "
                    </li>
                </ul>

            </div>

        </div>

        <div class=\"col-md-4\">
            <h4><i class=\"fa fa-info-circle\"></i> Info</h4>
            <p>If your MDA information is inaccurate please contact the administrator to correct the information</p>

            <b>Administrator</b>
            <p>
                <i class=\"fa fa-envelope\"></i> admin@federalcharacter.com <br>
                <i class=\"fa fa-phone\"></i> 0812345678
            </p>
            <p></p>
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
        return "user/mda.html.twig";
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
        return array (  112 => 33,  105 => 29,  98 => 25,  92 => 22,  83 => 16,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'user_base.html.twig' %}

{% block body %}


    <div class=\"row\">

        <div class=\"col-md-8\">

            <div class=\"card\">
                <div class=\"card-header bg-dark font-white\">
                    My MDA Information
                </div>
                <div class=\"card-body\">

                    <h1 class=\"font-weight-100 font-lg-4\"><i class=\"fa fa-institution\"></i> {{ mda.name }}</h1>

                </div>

                <ul class=\"list-group list-group-flush\">
                    <li class=\"list-group-item\">
                        <i class=\"fa fa-barcode\"></i> <b>MDA Code:</b> {{ mda.mdacode }}
                    </li>
                    <li class=\"list-group-item\">
                        <i class=\"fa fa-building\"></i> <b>Address:</b> {{ mda.address }}
                    </li>

                    <li class=\"list-group-item\">
                        <i class=\"fa fa-phone\"></i> <b>Phone:</b> {{ mda.phone }}
                    </li>

                    <li class=\"list-group-item\">
                        <i class=\"fa fa-envelope\"></i> <b>Email:</b> {{ mda.email }}
                    </li>
                </ul>

            </div>

        </div>

        <div class=\"col-md-4\">
            <h4><i class=\"fa fa-info-circle\"></i> Info</h4>
            <p>If your MDA information is inaccurate please contact the administrator to correct the information</p>

            <b>Administrator</b>
            <p>
                <i class=\"fa fa-envelope\"></i> admin@federalcharacter.com <br>
                <i class=\"fa fa-phone\"></i> 0812345678
            </p>
            <p></p>
        </div>

    </div>


{% endblock %}", "user/mda.html.twig", "C:\\laragon\\www\\training\\templates\\user\\mda.html.twig");
    }
}
