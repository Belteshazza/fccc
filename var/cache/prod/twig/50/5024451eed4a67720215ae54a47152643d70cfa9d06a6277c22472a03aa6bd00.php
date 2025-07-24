<?php

/* access_base_pdf.html.twig */
class __TwigTemplate_ddfbeedf45f7a6f7efa180a42ab078f01bbe32e708d4cc129c193d54e6be80a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", "access_base_pdf.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base2.html.twig";
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
        $this->loadTemplate("common/nav.html.twig", "access_base_pdf.html.twig", 5)->display($context);
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
        return "access_base_pdf.html.twig";
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
        return new Twig_Source("", "access_base_pdf.html.twig", "/home/federalc/public_html/training/templates/access_base_pdf.html.twig");
    }
}
