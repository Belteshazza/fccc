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

/* pages/print_letter.html.twig */
class __TwigTemplate_90cdb1e5dd23ffd955a8f36a1528565059fb2bb4e97b45c9a9d5f8732c2fb7a9 extends Template
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
        return "access_base_pdf.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/print_letter.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/print_letter.html.twig"));

        $this->parent = $this->loadTemplate("access_base_pdf.html.twig", "pages/print_letter.html.twig", 1);
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
    ";
        // line 5
        yield from         $this->loadTemplate("common/nav.html.twig", "pages/print_letter.html.twig", 5)->unwrap()->yield($context);
        // line 6
        yield "


    <div class=\"row mt-4\">

    <div class=\"col-sm-3 list-group\">
        ";
        // line 12
        $context["count"] = 0;
        // line 13
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["all_mda"]) || array_key_exists("all_mda", $context) ? $context["all_mda"] : (function () { throw new RuntimeError('Variable "all_mda" does not exist.', 13, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["mda"]) {
            // line 14
            yield "            ";
            $context["count"] = ((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 14, $this->source); })()) + 1);
            // line 15
            yield "            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("print_mda_letter", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["mda"], "id", [], "any", false, false, false, 15)]), "html", null, true);
            yield "\" class=\"list-group-item\">
            ";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 16, $this->source); })()), "html", null, true);
            yield ". ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["mda"], "name", [], "any", false, false, false, 16), "html", null, true);
            yield "
            </a>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mda'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        yield "    </div>
        <div class=\"col-sm-9\">

            <h2 class=\"page-header pt-4\">";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["mda"]) || array_key_exists("mda", $context) ? $context["mda"] : (function () { throw new RuntimeError('Variable "mda" does not exist.', 23, $this->source); })()), "name", [], "any", false, false, false, 23), "html", null, true);
        yield " letter</h2>
            <hr>


            <button class=\"btn btn-primary btn-xs mr-2\" onclick=\"printElem('letter');\"><i class=\"fa fa-print\"></i> Print</button>


            <div class=\"padding_50 font-lg\" id=\"letter\" style=\"background-color:#fff !Important; width:100% !Important;font-family: 'Times New Roman' !Important\">

                <img src=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/fcc_letterhead.png"), "html", null, true);
        yield "\" style=\"max-width: 100%\" class=\"mb-5\">

                <p class=\"float-right font-weight-900\" style=\"margin-top: -3px\">";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 34, $this->source); })()), "html", null, true);
        yield "</p>



                <b>";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["trainings"]) || array_key_exists("trainings", $context) ? $context["trainings"] : (function () { throw new RuntimeError('Variable "trainings" does not exist.', 38, $this->source); })()), "trainingCode", [], "any", false, false, false, 38), "html", null, true);
        yield "</b>

                <div class=\"clearfix\"></div>


                <p class=\"m-0\">";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["mda"]) || array_key_exists("mda", $context) ? $context["mda"] : (function () { throw new RuntimeError('Variable "mda" does not exist.', 43, $this->source); })()), "topOfficialDesignation", [], "any", false, false, false, 43), "html", null, true);
        yield ",<br>
                    ";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["mda"]) || array_key_exists("mda", $context) ? $context["mda"] : (function () { throw new RuntimeError('Variable "mda" does not exist.', 44, $this->source); })()), "name", [], "any", false, false, false, 44), "html", null, true);
        yield ".</p>
                <div class=\"row\">
                <div class=\"col-8 m-0\">";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["mda"]) || array_key_exists("mda", $context) ? $context["mda"] : (function () { throw new RuntimeError('Variable "mda" does not exist.', 46, $this->source); })()), "address", [], "any", false, false, false, 46), "html", null, true);
        yield "</div>
                </div>




                <div class=\"clearfix mb-5\"></div>

                ";
        // line 55
        yield "                    ";
        yield (isset($context["train_letter_continue"]) || array_key_exists("train_letter_continue", $context) ? $context["train_letter_continue"] : (function () { throw new RuntimeError('Variable "train_letter_continue" does not exist.', 55, $this->source); })());
        yield "
                ";
        // line 57
        yield "

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
        return "pages/print_letter.html.twig";
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
        return array (  171 => 57,  166 => 55,  155 => 46,  150 => 44,  146 => 43,  138 => 38,  131 => 34,  126 => 32,  114 => 23,  109 => 20,  97 => 16,  92 => 15,  89 => 14,  84 => 13,  82 => 12,  74 => 6,  72 => 5,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'access_base_pdf.html.twig' %}

{% block content %}

    {% include 'common/nav.html.twig' %}



    <div class=\"row mt-4\">

    <div class=\"col-sm-3 list-group\">
        {% set count = 0 %}
        {% for mda in all_mda %}
            {% set count = count + 1 %}
            <a href=\"{{ path('print_mda_letter', { 'id':mda.id }) }}\" class=\"list-group-item\">
            {{ count }}. {{ mda.name }}
            </a>

            {% endfor %}
    </div>
        <div class=\"col-sm-9\">

            <h2 class=\"page-header pt-4\">{{ mda.name }} letter</h2>
            <hr>


            <button class=\"btn btn-primary btn-xs mr-2\" onclick=\"printElem('letter');\"><i class=\"fa fa-print\"></i> Print</button>


            <div class=\"padding_50 font-lg\" id=\"letter\" style=\"background-color:#fff !Important; width:100% !Important;font-family: 'Times New Roman' !Important\">

                <img src=\"{{ asset('assets/images/fcc_letterhead.png') }}\" style=\"max-width: 100%\" class=\"mb-5\">

                <p class=\"float-right font-weight-900\" style=\"margin-top: -3px\">{{ date }}</p>



                <b>{{ trainings.trainingCode }}</b>

                <div class=\"clearfix\"></div>


                <p class=\"m-0\">{{ mda.topOfficialDesignation }},<br>
                    {{ mda.name }}.</p>
                <div class=\"row\">
                <div class=\"col-8 m-0\">{{ mda.address }}</div>
                </div>




                <div class=\"clearfix mb-5\"></div>

                {% autoescape false %}
                    {{ train_letter_continue }}
                {% endautoescape %}


            </div>


        </div>

    </div>





{% endblock %}", "pages/print_letter.html.twig", "C:\\laragon\\www\\training\\templates\\pages\\print_letter.html.twig");
    }
}
