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

/* user/training_application.html.twig */
class __TwigTemplate_bddb11155e85daddcaa47556e1114bf69a6c33be208102029c4e01c300991733 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/training_application.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/training_application.html.twig"));

        $this->parent = $this->loadTemplate("user_base.html.twig", "user/training_application.html.twig", 1);
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

        <div class=\"col-md-8 mx-auto\">

            <h2>";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["training"]) || array_key_exists("training", $context) ? $context["training"] : (function () { throw new RuntimeError('Variable "training" does not exist.', 10, $this->source); })()), "title", [], "any", false, false, false, 10), "html", null, true);
        yield "</h2>

            <hr>

            <div class=\"card\">

                <div class=\"card-header bg-dark text-white font-white\">
                    <h4>Training application</h4>
                </div>

                <div class=\"card-body p-5\">

                    <div class=\"row\">

                        <div class=\"col-md-6\">
                            <a href=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_new_training_apply", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["training"]) || array_key_exists("training", $context) ? $context["training"] : (function () { throw new RuntimeError('Variable "training" does not exist.', 25, $this->source); })()), "id", [], "any", false, false, false, 25)]), "html", null, true);
        yield "\" class=\"bg-gray border_radius train_application_col w-100 p-4 lead text-center\">
                              New training
                            </a>
                        </div>
                        <div class=\"col-md-6 \">
                            <a href=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_refresher_training_apply", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["training"]) || array_key_exists("training", $context) ? $context["training"] : (function () { throw new RuntimeError('Variable "training" does not exist.', 30, $this->source); })()), "id", [], "any", false, false, false, 30)]), "html", null, true);
        yield "\" class=\"bg-gray border_radius train_application_col w-100 p-4 lead text-center\">
                            Refresher training
                            </a>
                        </div>

                    </div>


                </div>
            </div>

            <div class=\"font-xs\">

                <b>Note</b>
                <p>- Click on \"New Training\" if you have not come for the training previously and want to register participants from your MDA for this training</p>
                <p>- Click on \"Refresher Training\" if you have come for the training but you wish to come again for a refresher training</p>

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
        return "user/training_application.html.twig";
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
        return array (  103 => 30,  95 => 25,  77 => 10,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'user_base.html.twig' %}

{% block body %}


    <div class=\"row\">

        <div class=\"col-md-8 mx-auto\">

            <h2>{{ training.title }}</h2>

            <hr>

            <div class=\"card\">

                <div class=\"card-header bg-dark text-white font-white\">
                    <h4>Training application</h4>
                </div>

                <div class=\"card-body p-5\">

                    <div class=\"row\">

                        <div class=\"col-md-6\">
                            <a href=\"{{ path('user_new_training_apply', { 'id':training.id }) }}\" class=\"bg-gray border_radius train_application_col w-100 p-4 lead text-center\">
                              New training
                            </a>
                        </div>
                        <div class=\"col-md-6 \">
                            <a href=\"{{ path('user_refresher_training_apply', { 'id':training.id }) }}\" class=\"bg-gray border_radius train_application_col w-100 p-4 lead text-center\">
                            Refresher training
                            </a>
                        </div>

                    </div>


                </div>
            </div>

            <div class=\"font-xs\">

                <b>Note</b>
                <p>- Click on \"New Training\" if you have not come for the training previously and want to register participants from your MDA for this training</p>
                <p>- Click on \"Refresher Training\" if you have come for the training but you wish to come again for a refresher training</p>

            </div>
        </div>

    </div>






{% endblock %}", "user/training_application.html.twig", "C:\\laragon\\www\\training\\templates\\user\\training_application.html.twig");
    }
}
