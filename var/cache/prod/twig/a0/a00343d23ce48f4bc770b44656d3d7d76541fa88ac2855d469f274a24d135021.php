<?php

/* admin/view_participant.html.twig */
class __TwigTemplate_863c465fb2b272585cb5c56fbadadc3fe925069b11e967a27d702a42f56c645e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin_base.html.twig", "admin/view_participant.html.twig", 1);
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

        <div class=\"col-lg-8\">


            <div class=\"checklist card\">
                <div class=\"card-header bg-dark font-white\">
                    <h4>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["participant"] ?? null), "firstname", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["participant"] ?? null), "lastname", array()), "html", null, true);
        echo "</h4>
                </div>
                <div class=\"card-body p-0\">
                    <div class=\"item\">
                        <b>First name:</b> <span class=\"float-right\">";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["participant"] ?? null), "firstname", array()), "html", null, true);
        echo "</span>
                    </div>
                    <div class=\"item\">
                        <b>Last name:</b> <span class=\"float-right\">";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["participant"] ?? null), "lastname", array()), "html", null, true);
        echo "</span>
                    </div>
                    <div class=\"item\">
                        <b>Phone:</b> <span class=\"float-right\">";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["participant"] ?? null), "phone", array()), "html", null, true);
        echo "</span>
                    </div>
                    <div class=\"item\">
                        <b>Email:</b> <span class=\"float-right\">";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["participant"] ?? null), "email", array()), "html", null, true);
        echo "</span>
                    </div>
                </div>
            </div>

                <div class=\"checklist card\">
                    <div class=\"card-header bg-primary font-white\">
                        <h4>MDA information</h4>
                    </div>
                    <div class=\"card-body p-0\">
                        <div class=\"item\">
                            <b>MDA code:</b> <span class=\"badge badge-danger font-sm float-right\">";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["mda"] ?? null), "mdacode", array()), "html", null, true);
        echo "</span>
                        </div>
                        <div class=\"item\">
                            <b>Name:</b> <span class=\"float-right\">";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["mda"] ?? null), "name", array()), "html", null, true);
        echo "</span>
                        </div>
                        <div class=\"item\">
                            <b>Address:</b> <span class=\"float-right\">";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["mda"] ?? null), "address", array()), "html", null, true);
        echo "</span>
                        </div>
                        <div class=\"item\">
                            <b>Phone:</b> <span class=\"float-right\">";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["mda"] ?? null), "phone", array()), "html", null, true);
        echo "</span>
                        </div>
                        <div class=\"item\">
                            <b>Email:</b> <span class=\"float-right\">";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["mda"] ?? null), "email", array()), "html", null, true);
        echo "</span>
                        </div>
                    </div>
                </div>



        </div>




        <div class=\"col-lg-3\">



        </div>

    </div>

";
    }

    public function getTemplateName()
    {
        return "admin/view_participant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 50,  102 => 47,  96 => 44,  90 => 41,  84 => 38,  70 => 27,  64 => 24,  58 => 21,  52 => 18,  43 => 14,  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/view_participant.html.twig", "/home/federalc/public_html/training/templates/admin/view_participant.html.twig");
    }
}
