<?php

/* pages/generate_letter.html.twig */
class __TwigTemplate_b2ca966a021c3d9ad7febff82e141aa41f05e236efd331504f73db8528833603 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("access_base.html.twig", "pages/generate_letter.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "access_base.html.twig";
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
    <h2 class=\"page-header pt-4\">Generate MDA letter</h2>
    <hr>

    ";
        // line 8
        $this->loadTemplate("common/nav.html.twig", "pages/generate_letter.html.twig", 8)->display($context);
        // line 9
        echo "
    <div class=\"row pt-3 d-flex\">

        <div class=\"col-lg-7 border_right\">

            <div class=\"bg-dark p-3 mb-3 font-white border_radius\">
                <p class=\"font-xs-2 mb-0 bottom_buffer font-weight-900 text-uppercase font-green\">MDA</p>
                <h4>";
        // line 16
        echo twig_escape_filter($this->env, ($context["mda"] ?? null), "html", null, true);
        echo "</h4>

                <p class=\"font-xs-2 mb-0 mt-3 bottom_buffer font-weight-900 text-uppercase font-green\">Contact information</p>
                <p class=\"no_margin\">";
        // line 19
        echo twig_escape_filter($this->env, ($context["email"] ?? null), "html", null, true);
        echo " • ";
        echo twig_escape_filter($this->env, ($context["phone"] ?? null), "html", null, true);
        echo "</p>
            </div>

            <form action=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mda_letter");
        echo "\" method=\"POST\">

                <div class=\"form-group\">
                    <label>Select a training</label>
                    <select name=\"training\" class=\"custom-select\">
                        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["trainings"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["training"]) {
            // line 28
            echo "
                            <option value=\"";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["training"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["training"], "title", array()), "html", null, true);
            echo "</option>

                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['training'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "                    </select>
                </div>

                <div class=\"form-group\">

                    <label>Training type</label> <br>
                    <input type=\"radio\" class=\"custom-radio\" value=\"New training\" name=\"training_type\"> New training
                    <input type=\"radio\" class=\"custom-radio\" value=\"Refresher training\" name=\"training_type\"> Refresher training

                </div>

                <input type=\"hidden\" name=\"mda\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, ($context["mda"] ?? null), "html", null, true);
        echo "\">

                <button class=\"btn btn-block mt-3 btn-success\"><i class=\"fa fa-file-text-o\"></i> Generate Letter</button>

            </form>

        </div>

    </div>


";
    }

    public function getTemplateName()
    {
        return "pages/generate_letter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 43,  88 => 32,  77 => 29,  74 => 28,  70 => 27,  62 => 22,  54 => 19,  48 => 16,  39 => 9,  37 => 8,  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "pages/generate_letter.html.twig", "/home/federalc/public_html/training/templates/pages/generate_letter.html.twig");
    }
}
