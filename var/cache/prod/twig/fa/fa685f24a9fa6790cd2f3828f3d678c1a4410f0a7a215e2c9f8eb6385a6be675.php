<?php

/* pages/letter.html.twig */
class __TwigTemplate_8944f5acc4bfe3ddbf1d29e15c8283072247e63dc09aae42224fccc14d27c1a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("access_base_pdf.html.twig", "pages/letter.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "access_base_pdf.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
    ";
        // line 5
        $this->loadTemplate("common/nav.html.twig", "pages/letter.html.twig", 5)->display($context);
        // line 6
        echo "
    <h2 class=\"page-header pt-4\">MDA letter</h2>
    <hr>


    <button class=\"btn btn-primary btn-xs mr-2\" onclick=\"printElem('letter');\"><i class=\"fa fa-print\"></i> Print</button>


    <div class=\"padding_50 font-lg\" id=\"letter\" style=\"background-color:#fff !Important; width:100% !Important;font-family: 'Times New Roman' !Important\">

        <img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/fcc_letterhead.png"), "html", null, true);
        echo "\" style=\"max-width: 100%\" class=\"mb-5\">

        <p class=\"float-right font-weight-900\" style=\"margin-top: -3px\">";
        // line 18
        echo twig_escape_filter($this->env, ($context["date"] ?? null), "html", null, true);
        echo "</p>



    <b>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["trainings"] ?? null), "trainingCode", array()), "html", null, true);
        echo "</b>

        <div class=\"clearfix mb-4\"></div>

        <p class=\"m-0\">";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["mda"] ?? null), "topOfficialDesignation", array()), "html", null, true);
        echo ",<br>
            ";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["mda"] ?? null), "name", array()), "html", null, true);
        echo ".</p>
        <div class=\"row\">
            <div class=\"col-8 m-0\">";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["mda"] ?? null), "address", array()), "html", null, true);
        echo "</div>
        </div>



        <div class=\"clearfix mb-5\"></div>

        ";
        // line 37
        echo "            ";
        echo ($context["train_letter_continue"] ?? null);
        echo "
        ";
        // line 39
        echo "

    </div>



";
    }

    public function getTemplateName()
    {
        return "pages/letter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 39,  86 => 37,  76 => 29,  71 => 27,  67 => 26,  60 => 22,  53 => 18,  48 => 16,  36 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "pages/letter.html.twig", "/home/federalc/public_html/training/templates/pages/letter.html.twig");
    }
}
