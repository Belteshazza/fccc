<?php

/* admin/admin_edit_participant.html.twig */
class __TwigTemplate_089dcc6831d972c6bf287a970cf13e9b69a1e7b6189f35c9948b348e6e014cc3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin_base.html.twig", "admin/admin_edit_participant.html.twig", 1);
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

    <div class=\"col-md-6 mx-auto\">

        <div class=\"card\">

            <div class=\"card-header bg-dark font-white\">
                <h4>Edit participant</h4>
            </div>

            <div class=\"card-body\">

            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form');
        echo "

            </div>
        </div>

    </div>




  </div>


";
    }

    public function getTemplateName()
    {
        return "admin/admin_edit_participant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 18,  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/admin_edit_participant.html.twig", "/home/federalc/public_html/training/templates/admin/admin_edit_participant.html.twig");
    }
}
