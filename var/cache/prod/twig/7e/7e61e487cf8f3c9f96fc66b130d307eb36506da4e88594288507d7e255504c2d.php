<?php

/* admin/admin_register_participant.html.twig */
class __TwigTemplate_a70cfddccb40d56a79ad58cd17e04d24e35c9f97420ab9b4cd9e6f9a78d30a9f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin_base.html.twig", "admin/admin_register_participant.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "

  <div class=\"row\">

    <div class=\"col-md-12\">

        <div class=\"card\">

            <div class=\"card-header bg-dark font-white\">
                <h4>Register participants for training</h4>
            </div>

            <div class=\"card-body\">

                <form method=\"POST\">

                    <div class=\"row\">
                    <div class=\"form-group col-md-4\">
                        <label>MDA</label><br>
                        <select name=\"mda\" class=\"form-control bg-gray\">
                            ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["mdas"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["mda"]) {
            // line 25
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["mda"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["mda"], "name", array()), "html", null, true);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mda'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "                        </select>
                    </div>

                    <div class=\"form-group col-md-4\">
                        <label>Training</label><br>
                        <select name=\"training\" class=\"form-control\">
                            ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["trainings"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["training"]) {
            // line 34
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["training"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["training"], "title", array()), "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['training'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "                        </select>
                    </div>
                    </div>

                    <div class=\"form-group\">
                        <button class=\"btn btn-primary\">Submit</button>
                    </div>

                </form>

            </div>
        </div>

    </div>




  </div>


";
    }

    public function getTemplateName()
    {
        return "admin/admin_register_participant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 36,  80 => 34,  76 => 33,  68 => 27,  57 => 25,  53 => 24,  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/admin_register_participant.html.twig", "/home/federalc/public_html/training/templates/admin/admin_register_participant.html.twig");
    }
}
