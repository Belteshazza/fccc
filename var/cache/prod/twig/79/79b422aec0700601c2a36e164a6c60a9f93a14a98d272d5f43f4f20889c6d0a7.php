<?php

/* user/mda.html.twig */
class __TwigTemplate_6d7103955a5ccd6d89254eefd43ee0093372d6d7bf668dc793d107a3d9ebed49 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("user_base.html.twig", "user/mda.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "user_base.html.twig";
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

        <div class=\"col-md-8\">

            <div class=\"card\">
                <div class=\"card-header bg-dark font-white\">
                    My MDA Information
                </div>
                <div class=\"card-body\">

                    <h1 class=\"font-weight-100 font-lg-4\"><i class=\"fa fa-institution\"></i> ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["mda"] ?? null), "name", array()), "html", null, true);
        echo "</h1>

                </div>

                <ul class=\"list-group list-group-flush\">
                    <li class=\"list-group-item\">
                        <i class=\"fa fa-barcode\"></i> <b>MDA Code:</b> ";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["mda"] ?? null), "mdacode", array()), "html", null, true);
        echo "
                    </li>
                    <li class=\"list-group-item\">
                        <i class=\"fa fa-building\"></i> <b>Address:</b> ";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["mda"] ?? null), "address", array()), "html", null, true);
        echo "
                    </li>

                    <li class=\"list-group-item\">
                        <i class=\"fa fa-phone\"></i> <b>Phone:</b> ";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["mda"] ?? null), "phone", array()), "html", null, true);
        echo "
                    </li>

                    <li class=\"list-group-item\">
                        <i class=\"fa fa-envelope\"></i> <b>Email:</b> ";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["mda"] ?? null), "email", array()), "html", null, true);
        echo "
                    </li>
                </ul>

            </div>

        </div>

        <div class=\"col-md-4\">
            <h4><i class=\"fa fa-info-circle\"></i> Info</h4>
            <p>If your MDA information is inaccurate please contact the administrator to correct the information</p>

            <b>Administrator</b>
            <p>
                <i class=\"fa fa-envelope\"></i> admin@federalcharacter.com <br>
                <i class=\"fa fa-phone\"></i> 0812345678
            </p>
            <p></p>
        </div>

    </div>


";
    }

    public function getTemplateName()
    {
        return "user/mda.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 33,  67 => 29,  60 => 25,  54 => 22,  45 => 16,  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "user/mda.html.twig", "/home/federalc/public_html/training/templates/user/mda.html.twig");
    }
}
