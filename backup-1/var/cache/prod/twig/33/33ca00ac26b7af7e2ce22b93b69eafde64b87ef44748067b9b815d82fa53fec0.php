<?php

/* access_base.html.twig */
class __TwigTemplate_cb06c023dafb1409e0387042c3e63fac746f607b38f3e25e336d173ff32863ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "access_base.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
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
    ";
        // line 5
        $this->loadTemplate("common/nav.html.twig", "access_base.html.twig", 5)->display($context);
        // line 6
        echo "

    <div class=\"container mt-5 p-5\">
    ";
        // line 9
        $this->displayBlock('content', $context, $blocks);
        // line 10
        echo "    </div>



";
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "access_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 9,  44 => 10,  42 => 9,  37 => 6,  35 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "access_base.html.twig", "/home/federalc/public_html/training/templates/access_base.html.twig");
    }
}
