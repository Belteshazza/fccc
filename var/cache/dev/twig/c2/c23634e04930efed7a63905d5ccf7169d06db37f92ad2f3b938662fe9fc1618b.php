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

/* access/verify_mda.html.twig */
class __TwigTemplate_0955ca763869a9cc2612d042d22cfaadb9e8f11e21b8239e4f14fae117a4cab3 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "access/verify_mda.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "access/verify_mda.html.twig"));

        $this->parent = $this->loadTemplate("access_base.html.twig", "access/verify_mda.html.twig", 1);
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


        <div class=\"col-lg-5 mx-auto\">

            <div class=\"p-4\">
                <h4 class=\"mb-5\">Verify MDA Information</h4>
                ";
        // line 12
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), 'form_start');
        yield "
                ";
        // line 13
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), 'widget');
        yield "
                ";
        // line 14
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), 'form_end');
        yield "


                ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "session", [], "any", false, false, false, 17), "flashbag", [], "any", false, false, false, 17), "get", ["mda_name"], "method", false, false, false, 17));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 18
            yield "
                    <div class=\"text-center border border_radius mt-3 bg-gray p-3\">
                        ";
            // line 20
            if ((0 !== CoreExtension::compare($context["flashMessage"], "MDA Not Found"))) {
                // line 21
                yield "                        <p class=\"m-0\">MDA Name:</p>
                        ";
            }
            // line 23
            yield "                   <h4>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["flashMessage"], "html", null, true);
            yield "</h4>
                    ";
            // line 24
            if ((0 !== CoreExtension::compare($context["flashMessage"], "MDA Not Found"))) {
                // line 25
                yield "                        ";
                if ((0 >= CoreExtension::compare((isset($context["result"]) || array_key_exists("result", $context) ? $context["result"] : (function () { throw new RuntimeError('Variable "result" does not exist.', 25, $this->source); })()), 0))) {
                    // line 26
                    yield "
                            <a href=\"";
                    // line 27
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register", ["mda_code" => (isset($context["last_code"]) || array_key_exists("last_code", $context) ? $context["last_code"] : (function () { throw new RuntimeError('Variable "last_code" does not exist.', 27, $this->source); })())]), "html", null, true);
                    yield "\">Register for this MDA</a>

                            ";
                } else {
                    // line 30
                    yield "
                            <p class=\"text-danger m-0\">Another admin user is registered for this MDA. Please send an email to fcctraining@pglnigeria.com for more information</p>

                        ";
                }
                // line 34
                yield "                    ";
            }
            // line 35
            yield "                    </div>




                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        yield "


                <p class=\"hline font-gray margin_20-top margin_20-bottom\"> OR </p>


                <div class=\"text-center\">
                    Click <a href='";
        // line 48
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        yield "'>here</a> login to your account
                </div>
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
        return "access/verify_mda.html.twig";
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
        return array (  155 => 48,  146 => 41,  135 => 35,  132 => 34,  126 => 30,  120 => 27,  117 => 26,  114 => 25,  112 => 24,  107 => 23,  103 => 21,  101 => 20,  97 => 18,  93 => 17,  87 => 14,  83 => 13,  79 => 12,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'access_base.html.twig' %}

{% block content %}

    <div class=\"row p-4\">


        <div class=\"col-lg-5 mx-auto\">

            <div class=\"p-4\">
                <h4 class=\"mb-5\">Verify MDA Information</h4>
                {{ form_start(form) }}
                {{ form_widget(form) }}
                {{ form_end(form) }}


                {% for flashMessage in app.session.flashbag.get('mda_name') %}

                    <div class=\"text-center border border_radius mt-3 bg-gray p-3\">
                        {% if flashMessage != 'MDA Not Found' %}
                        <p class=\"m-0\">MDA Name:</p>
                        {% endif %}
                   <h4>{{ flashMessage }}</h4>
                    {% if flashMessage != 'MDA Not Found' %}
                        {% if result <= 0 %}

                            <a href=\"{{ path('register', {'mda_code': last_code }) }}\">Register for this MDA</a>

                            {% else %}

                            <p class=\"text-danger m-0\">Another admin user is registered for this MDA. Please send an email to fcctraining@pglnigeria.com for more information</p>

                        {% endif %}
                    {% endif %}
                    </div>




                {% endfor %}



                <p class=\"hline font-gray margin_20-top margin_20-bottom\"> OR </p>


                <div class=\"text-center\">
                    Click <a href='{{ path('login') }}'>here</a> login to your account
                </div>
            </div>

        </div>

    </div>

{% endblock %}", "access/verify_mda.html.twig", "C:\\laragon\\www\\training\\templates\\access\\verify_mda.html.twig");
    }
}
