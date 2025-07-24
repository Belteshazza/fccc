<?php

/* admin/admin_edit_user.html.twig */
class __TwigTemplate_6b6f74b1494f5be0869d202700bd12b1fa98f34e7eebe91e12b6a0551e4cd6e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin_base.html.twig", "admin/admin_edit_user.html.twig", 1);
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
                <h4>Edit user</h4>
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
        return "admin/admin_edit_user.html.twig";
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
        return new Twig_Source("", "admin/admin_edit_user.html.twig", "/home/federalc/public_html/training/templates/admin/admin_edit_user.html.twig");
    }
}
