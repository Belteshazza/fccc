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

/* admin/dashboard.html.twig */
class __TwigTemplate_fe0a59ff0333b70c97132cc6ec16ed7abf11798af89b49a28b57faf19d514cbe extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard.html.twig"));

        $this->parent = $this->loadTemplate("admin_base.html.twig", "admin/dashboard.html.twig", 1);
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
    <section class=\"dashboard-counts p-0 mb-5\">
        <div class=\"container-fluid p-0\">
            <div class=\"row bg-white has-shadow\">
                <!-- Item -->
                <div class=\"col-xl-4 col-sm-6\">
                    <a href=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_training");
        yield "\"><div class=\"item p-0 d-flex align-items-center\">
                        <div class=\"icon bg-blue\"><i class=\"fa fa-book\"></i></div>
                        <div class=\"title font-sm-4\"><span>Available<br>Trainings</span></div>
                        <div class=\"number\"><strong>";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["all_trainings"]) || array_key_exists("all_trainings", $context) ? $context["all_trainings"] : (function () { throw new RuntimeError('Variable "all_trainings" does not exist.', 13, $this->source); })()), "html", null, true);
        yield "</strong></div>
                    </div></a>
                </div>

                <div class=\"col-xl-4 col-sm-6\">
                    <a href=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_mda");
        yield "\"><div class=\"item p-0 d-flex align-items-center\">
                        <div class=\"icon bg-orange\"><i class=\"fa fa-users\"></i></div>
                        <div class=\"title font-sm-4\"><span>MDAs</span></div>
                        <div class=\"number\"><strong>";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["all_mdas"]) || array_key_exists("all_mdas", $context) ? $context["all_mdas"] : (function () { throw new RuntimeError('Variable "all_mdas" does not exist.', 21, $this->source); })()), "html", null, true);
        yield "</strong></div>
                        </div></a>
                </div>

                <div class=\"col-xl-4 col-sm-6\">
                    <a href=\"";
        // line 26
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_participants");
        yield "\"> <div class=\"item p-0 d-flex align-items-center\">
                        <div class=\"icon bg-red\"><i class=\"fa fa-user\"></i></div>
                        <div class=\"title font-sm-4\"><span>MDA<br>Admins</span></div>
                        <div class=\"number\"><strong>";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["all_mda_admins"]) || array_key_exists("all_mda_admins", $context) ? $context["all_mda_admins"] : (function () { throw new RuntimeError('Variable "all_mda_admins" does not exist.', 29, $this->source); })()), "html", null, true);
        yield "</strong></div>
                        </div></a>
                </div>

            </div>
        </div>
    </section>


    <div class=\"row\">


        <div class=\"col-md-4\">

            <div class=\"card\">
                <div class=\"card-body text-center bg-dark text-white font-white\">
                    <b class=\"text-uppercase font-xs\">Total expected payments</b>
                    <p class=\"font-lg m-0 font-white\">&#8358;";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["total_payment"]) || array_key_exists("total_payment", $context) ? $context["total_payment"] : (function () { throw new RuntimeError('Variable "total_payment" does not exist.', 46, $this->source); })())), "html", null, true);
        yield "</p>
                </div>
            </div>

        </div>

        <div class=\"col-md-4\">

            <div class=\"card\">
                <div class=\"card-body text-center text-white bg-dark font-white\">
                    <b class=\"text-uppercase font-xs\">Total payments received</b>
                    <p class=\"font-lg m-0\">&#8358;";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((((isset($context["total_online_payment"]) || array_key_exists("total_online_payment", $context) ? $context["total_online_payment"] : (function () { throw new RuntimeError('Variable "total_online_payment" does not exist.', 57, $this->source); })()) + (isset($context["total_cash_payment"]) || array_key_exists("total_cash_payment", $context) ? $context["total_cash_payment"] : (function () { throw new RuntimeError('Variable "total_cash_payment" does not exist.', 57, $this->source); })())) + (isset($context["total_bank_payment"]) || array_key_exists("total_bank_payment", $context) ? $context["total_bank_payment"] : (function () { throw new RuntimeError('Variable "total_bank_payment" does not exist.', 57, $this->source); })()))), "html", null, true);
        yield "</p>
                </div>
            </div>

        </div>

        <div class=\"col-md-4\">

            <div class=\"card\">
                <div class=\"card-body bg-dark text-center text-white font-white\">
                    <b class=\"text-uppercase font-xs\">Total outstanding payments</b>
                    <p class=\"font-lg m-0\">&#8358;";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["total_outstanding_payment"]) || array_key_exists("total_outstanding_payment", $context) ? $context["total_outstanding_payment"] : (function () { throw new RuntimeError('Variable "total_outstanding_payment" does not exist.', 68, $this->source); })())), "html", null, true);
        yield "</p>
                </div>
            </div>

        </div>

        <div class=\"col-md-4\">

            <div class=\"card\">
                <div class=\"card-body bg-orange font-white text-white\">
                    <b class=\"text-uppercase font-xs\">Total online payments</b>
                    <p class=\"font-lg m-0\">&#8358;";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["total_online_payment"]) || array_key_exists("total_online_payment", $context) ? $context["total_online_payment"] : (function () { throw new RuntimeError('Variable "total_online_payment" does not exist.', 79, $this->source); })())), "html", null, true);
        yield "</p>
                </div>
            </div>

        </div>
        <div class=\"col-md-4\">

            <div class=\"card\">
                <div class=\"card-body bg-green font-white\">
                    <b class=\"text-uppercase font-xs\">Total cash payments</b>
                    <p class=\"font-lg m-0\">&#8358;";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["total_cash_payment"]) || array_key_exists("total_cash_payment", $context) ? $context["total_cash_payment"] : (function () { throw new RuntimeError('Variable "total_cash_payment" does not exist.', 89, $this->source); })())), "html", null, true);
        yield "</p>
                </div>
            </div>

        </div>
        <div class=\"col-md-4\">

            <div class=\"card\">
                <div class=\"card-body bg-blue font-white\">
                    <b class=\"text-uppercase font-xs\">Total bank payments</b>
                    <p class=\"font-lg m-0\">&#8358;";
        // line 99
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["total_bank_payment"]) || array_key_exists("total_bank_payment", $context) ? $context["total_bank_payment"] : (function () { throw new RuntimeError('Variable "total_bank_payment" does not exist.', 99, $this->source); })())), "html", null, true);
        yield "</p>
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
        return "admin/dashboard.html.twig";
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
        return array (  199 => 99,  186 => 89,  173 => 79,  159 => 68,  145 => 57,  131 => 46,  111 => 29,  105 => 26,  97 => 21,  91 => 18,  83 => 13,  77 => 10,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin_base.html.twig' %}

{% block body %}

    <section class=\"dashboard-counts p-0 mb-5\">
        <div class=\"container-fluid p-0\">
            <div class=\"row bg-white has-shadow\">
                <!-- Item -->
                <div class=\"col-xl-4 col-sm-6\">
                    <a href=\"{{ path('admin_training') }}\"><div class=\"item p-0 d-flex align-items-center\">
                        <div class=\"icon bg-blue\"><i class=\"fa fa-book\"></i></div>
                        <div class=\"title font-sm-4\"><span>Available<br>Trainings</span></div>
                        <div class=\"number\"><strong>{{ all_trainings }}</strong></div>
                    </div></a>
                </div>

                <div class=\"col-xl-4 col-sm-6\">
                    <a href=\"{{ path('admin_mda') }}\"><div class=\"item p-0 d-flex align-items-center\">
                        <div class=\"icon bg-orange\"><i class=\"fa fa-users\"></i></div>
                        <div class=\"title font-sm-4\"><span>MDAs</span></div>
                        <div class=\"number\"><strong>{{ all_mdas }}</strong></div>
                        </div></a>
                </div>

                <div class=\"col-xl-4 col-sm-6\">
                    <a href=\"{{ path('admin_participants') }}\"> <div class=\"item p-0 d-flex align-items-center\">
                        <div class=\"icon bg-red\"><i class=\"fa fa-user\"></i></div>
                        <div class=\"title font-sm-4\"><span>MDA<br>Admins</span></div>
                        <div class=\"number\"><strong>{{ all_mda_admins }}</strong></div>
                        </div></a>
                </div>

            </div>
        </div>
    </section>


    <div class=\"row\">


        <div class=\"col-md-4\">

            <div class=\"card\">
                <div class=\"card-body text-center bg-dark text-white font-white\">
                    <b class=\"text-uppercase font-xs\">Total expected payments</b>
                    <p class=\"font-lg m-0 font-white\">&#8358;{{ total_payment|number_format }}</p>
                </div>
            </div>

        </div>

        <div class=\"col-md-4\">

            <div class=\"card\">
                <div class=\"card-body text-center text-white bg-dark font-white\">
                    <b class=\"text-uppercase font-xs\">Total payments received</b>
                    <p class=\"font-lg m-0\">&#8358;{{ (total_online_payment + total_cash_payment + total_bank_payment)|number_format }}</p>
                </div>
            </div>

        </div>

        <div class=\"col-md-4\">

            <div class=\"card\">
                <div class=\"card-body bg-dark text-center text-white font-white\">
                    <b class=\"text-uppercase font-xs\">Total outstanding payments</b>
                    <p class=\"font-lg m-0\">&#8358;{{ total_outstanding_payment|number_format }}</p>
                </div>
            </div>

        </div>

        <div class=\"col-md-4\">

            <div class=\"card\">
                <div class=\"card-body bg-orange font-white text-white\">
                    <b class=\"text-uppercase font-xs\">Total online payments</b>
                    <p class=\"font-lg m-0\">&#8358;{{ total_online_payment|number_format }}</p>
                </div>
            </div>

        </div>
        <div class=\"col-md-4\">

            <div class=\"card\">
                <div class=\"card-body bg-green font-white\">
                    <b class=\"text-uppercase font-xs\">Total cash payments</b>
                    <p class=\"font-lg m-0\">&#8358;{{ total_cash_payment|number_format }}</p>
                </div>
            </div>

        </div>
        <div class=\"col-md-4\">

            <div class=\"card\">
                <div class=\"card-body bg-blue font-white\">
                    <b class=\"text-uppercase font-xs\">Total bank payments</b>
                    <p class=\"font-lg m-0\">&#8358;{{ total_bank_payment|number_format }}</p>
                </div>
            </div>

        </div>


    </div>

{% endblock %}", "admin/dashboard.html.twig", "C:\\laragon\\www\\training\\templates\\admin\\dashboard.html.twig");
    }
}
