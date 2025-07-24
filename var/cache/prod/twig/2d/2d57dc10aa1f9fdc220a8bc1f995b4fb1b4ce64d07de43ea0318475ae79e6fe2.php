<?php

/* pages/print_letter.html.twig */
class __TwigTemplate_9f2611605bc14c01bdfdb8264c9182cfe591175b669fd356b889c240127afc7c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("access_base_pdf.html.twig", "pages/print_letter.html.twig", 1);
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
        $this->loadTemplate("common/nav.html.twig", "pages/print_letter.html.twig", 5)->display($context);
        // line 6
        echo "


    <div class=\"row mt-4\">

    <div class=\"col-sm-3 list-group\">
        ";
        // line 12
        $context["count"] = 0;
        // line 13
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["all_mda"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["mda"]) {
            // line 14
            echo "            ";
            $context["count"] = (($context["count"] ?? null) + 1);
            // line 15
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("print_mda_letter", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["mda"], "id", array()))), "html", null, true);
            echo "\" class=\"list-group-item\">
            ";
            // line 16
            echo twig_escape_filter($this->env, ($context["count"] ?? null), "html", null, true);
            echo ". ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["mda"], "name", array()), "html", null, true);
            echo "
            </a>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mda'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "    </div>
        <div class=\"col-sm-9\">

            <h2 class=\"page-header pt-4\">";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["mda"] ?? null), "name", array()), "html", null, true);
        echo " letter</h2>
            <hr>


            <button class=\"btn btn-primary btn-xs mr-2\" onclick=\"printElem('letter');\"><i class=\"fa fa-print\"></i> Print</button>


            <div class=\"padding_50 font-lg\" id=\"letter\" style=\"background-color:#fff !Important; width:100% !Important;font-family: 'Times New Roman' !Important\">

                <img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/fcc_letterhead.png"), "html", null, true);
        echo "\" style=\"max-width: 100%\" class=\"mb-5\">

                <p class=\"float-right font-weight-900\" style=\"margin-top: -3px\">";
        // line 34
        echo twig_escape_filter($this->env, ($context["date"] ?? null), "html", null, true);
        echo "</p>



                <b>";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["trainings"] ?? null), "trainingCode", array()), "html", null, true);
        echo "</b>

                <div class=\"clearfix\"></div>


                <p class=\"m-0\">";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["mda"] ?? null), "topOfficialDesignation", array()), "html", null, true);
        echo ",<br>
                    ";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["mda"] ?? null), "name", array()), "html", null, true);
        echo ".</p>
                <div class=\"row\">
                <div class=\"col-8 m-0\">";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["mda"] ?? null), "address", array()), "html", null, true);
        echo "</div>
                </div>




                <div class=\"clearfix mb-5\"></div>

                ";
        // line 55
        echo "                    ";
        echo ($context["train_letter_continue"] ?? null);
        echo "
                ";
        // line 57
        echo "

            </div>


        </div>

    </div>





";
    }

    public function getTemplateName()
    {
        return "pages/print_letter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 57,  128 => 55,  117 => 46,  112 => 44,  108 => 43,  100 => 38,  93 => 34,  88 => 32,  76 => 23,  71 => 20,  59 => 16,  54 => 15,  51 => 14,  46 => 13,  44 => 12,  36 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "pages/print_letter.html.twig", "/home/federalc/public_html/training/templates/pages/print_letter.html.twig");
    }
}
