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

/* common/footer.html.twig */
class __TwigTemplate_6f5d849d37c612ce0477d799b02f22e153f28c98ba09618b72e76d9ff7bbd906 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "common/footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "common/footer.html.twig"));

        // line 1
        yield "<footer class=\"bg-dark font-white\">
    <div class=\"container p-5 text-center\">

        <p>&copy; ";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield ". Federal Character Commission of Nigeria</p>

        <b>Metrics:</b>

        <div class=\"col-sm-3 text-left mx-auto\">
        <div class=\"row\">

            <div class=\"col-sm-12\">

                <div class=\"powr-hit-counter\" id=\"11e3b9ae_1523075602\"></div>
                <div class=\"powr-popup\" id=\"be4fb4df_1523076446\"></div>
            </div>
            ";
        // line 17
        yield "                ";
        // line 18
        yield "            ";
        // line 19
        yield "
            ";
        // line 21
        yield "                ";
        // line 22
        yield "            ";
        // line 23
        yield "            ";
        // line 24
        yield "                ";
        // line 25
        yield "            ";
        // line 26
        yield "
            ";
        // line 28
        yield "                ";
        // line 29
        yield "            ";
        // line 30
        yield "            ";
        // line 31
        yield "                ";
        // line 32
        yield "            ";
        // line 33
        yield "
        </div>
        </div>


    </div>
</footer>


";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "common/footer.html.twig";
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
        return array (  94 => 33,  92 => 32,  90 => 31,  88 => 30,  86 => 29,  84 => 28,  81 => 26,  79 => 25,  77 => 24,  75 => 23,  73 => 22,  71 => 21,  68 => 19,  66 => 18,  64 => 17,  49 => 4,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer class=\"bg-dark font-white\">
    <div class=\"container p-5 text-center\">

        <p>&copy; {{ \"now\"|date('Y') }}. Federal Character Commission of Nigeria</p>

        <b>Metrics:</b>

        <div class=\"col-sm-3 text-left mx-auto\">
        <div class=\"row\">

            <div class=\"col-sm-12\">

                <div class=\"powr-hit-counter\" id=\"11e3b9ae_1523075602\"></div>
                <div class=\"powr-popup\" id=\"be4fb4df_1523076446\"></div>
            </div>
            {#<div class=\"col-sm-2\">#}
                {#{{ visitor_metrics.total_visits }}#}
            {#</div>#}

            {#<div class=\"col-sm-10\">#}
                {#Visits today:#}
            {#</div>#}
            {#<div class=\"col-sm-2\">#}
                {#{{ visitor_metrics.visit_today }}#}
            {#</div>#}

            {#<div class=\"col-sm-10\">#}
                {#Unique visitors:#}
            {#</div>#}
            {#<div class=\"col-sm-2\">#}
                {#{{ visitor_metrics.unique_visits }}#}
            {#</div>#}

        </div>
        </div>


    </div>
</footer>


", "common/footer.html.twig", "C:\\laragon\\www\\training\\templates\\common\\footer.html.twig");
    }
}
