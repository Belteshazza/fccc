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

/* access/login.html.twig */
class __TwigTemplate_0d23ca9f4e4505606eeea51816b30d25b9b91a45cb0a7baf2d6e84b5b5a2f853 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "access_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "access/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "access/login.html.twig"));

        $this->parent = $this->loadTemplate("access_base.html.twig", "access/login.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        yield "
    <div class=\"row p-4\">

        ";
        // line 7
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 7, $this->source); })())) {
            // line 8
            yield "            <script>
                toastr.error(\"";
            // line 9
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 9, $this->source); })()), "messageKey", [], "any", false, false, false, 9), CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 9, $this->source); })()), "messageData", [], "any", false, false, false, 9), "security"), "html", null, true);
            yield "\");
            </script>

        ";
        }
        // line 13
        yield "
        <div class=\"col-lg-5 mx-auto\">



            <div class=\"p-4\">
                <h4 class=\"mb-5\">Sign In</h4>
                <form action=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        yield "\" method=\"POST\">
                    <div class=\"form-group\">
                        <label>Email</label>
                        <input type=\"text\" id=\"username\" class=\"form-control form-control-lg\" name=\"_username\" value=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 23, $this->source); })()), "html", null, true);
        yield "\" />

                    </div>

                    <div class=\"form-group\">
                        <label>Password</label>
                        <input type=\"password\" name=\"_password\" class=\"form-control form-control-lg\">

                    </div>

                    <button class=\"btn btn-primary btn-block\">Login</button>
                </form>

                <div class=\"text-center p-3\">
                <a href=\"";
        // line 37
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reset_password");
        yield "\" >Reset password</a>
                </div>

                <p class=\"hline font-xs font-gray mb-4 mt-4\"> OR </p>

                <p class=\"text-center\">Click <a href=\"";
        // line 42
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("verify_mda");
        yield "\">here</a> to register as an MDA Admin</p>

            </div>

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
        return "access/login.html.twig";
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
        return array (  126 => 42,  118 => 37,  101 => 23,  95 => 20,  86 => 13,  79 => 9,  76 => 8,  74 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'access_base.html.twig' %}

{% block content %}

    <div class=\"row p-4\">

        {% if error %}
            <script>
                toastr.error(\"{{ error.messageKey|trans(error.messageData, 'security') }}\");
            </script>

        {% endif %}

        <div class=\"col-lg-5 mx-auto\">



            <div class=\"p-4\">
                <h4 class=\"mb-5\">Sign In</h4>
                <form action=\"{{ path('login') }}\" method=\"POST\">
                    <div class=\"form-group\">
                        <label>Email</label>
                        <input type=\"text\" id=\"username\" class=\"form-control form-control-lg\" name=\"_username\" value=\"{{ last_username }}\" />

                    </div>

                    <div class=\"form-group\">
                        <label>Password</label>
                        <input type=\"password\" name=\"_password\" class=\"form-control form-control-lg\">

                    </div>

                    <button class=\"btn btn-primary btn-block\">Login</button>
                </form>

                <div class=\"text-center p-3\">
                <a href=\"{{ path('reset_password') }}\" >Reset password</a>
                </div>

                <p class=\"hline font-xs font-gray mb-4 mt-4\"> OR </p>

                <p class=\"text-center\">Click <a href=\"{{ path('verify_mda') }}\">here</a> to register as an MDA Admin</p>

            </div>

        </div>

    </div>

{% endblock %}", "access/login.html.twig", "C:\\laragon\\www\\training\\templates\\access\\login.html.twig");
    }
}
