<?php

/* admin/mda_admins.html.twig */
class __TwigTemplate_6078941812ad115e39ba6a602134c514be96e43159f33ebe127dea0750b778d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin_base.html.twig", "admin/mda_admins.html.twig", 1);
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
    <div class=\"card\">
        <div class=\"card-header  align-items-center\">
            <h4>All MDA Admins</h4>


        </div>
        <div class=\"card-body\">

            <table id=\"example\" class=\"datatable table display table-striped table-hover\" cellspacing=\"0\" width=\"100%\">
                <thead >
                <tr>
                    <th>First name</th>
                    <th>Last name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>MDA</th>
                    <th>Options</th>

                </tr>
                </thead>
                <tbody>
                ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["participants"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["participant"]) {
            // line 27
            echo "                    <tr>
                        <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["participant"], "firstname", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["participant"], "lastname", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["participant"], "email", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["participant"], "phone", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["participant"], "mda", array()), "html", null, true);
            echo "</td>
                        <td><a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_view_participants", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["participant"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-xs btn-success\"><i class=\"fa fa-search\"></i> View</a></td>
                    </tr>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['participant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "                </tbody>
            </table>

        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "admin/mda_admins.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 37,  82 => 33,  78 => 32,  74 => 31,  70 => 30,  66 => 29,  62 => 28,  59 => 27,  55 => 26,  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/mda_admins.html.twig", "/home/federalc/public_html/training/templates/admin/mda_admins.html.twig");
    }
}
