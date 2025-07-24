<?php

/* admin/mdas.html.twig */
class __TwigTemplate_dcb93ad0481a98a5e0196be6451c205bf9354f0cc87750abf9092ccd6aa7f025 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin_base.html.twig", "admin/mdas.html.twig", 1);
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
                <div class=\"float-right\"><a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add_mda");
        echo "\" class=\"btn btn-xs btn-primary\"><i class=\"fa fa-plus\"></i> Add new</a></div>
                <h4>All MDAs</h4>


            </div>
            <div class=\"card-body\">

                <table id=\"example\" class=\"datatable table display table-striped table-hover\" cellspacing=\"0\" width=\"100%\">
                    <thead >
                    <tr>
                        <th>MDA Code</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Participants registered</th>

                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["mdas"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["mda"]) {
            // line 28
            echo "                        <tr>
                            <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["mda"], "mda_code", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["mda"], "name", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["mda"], "email", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["mda"], "phone", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["mda"], "address", array()), "html", null, true);
            echo "</td>
                            <td><a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_edit_mda", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["mda"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-xs btn-warning\"><i class=\"fa fa-pencil\"></i> Edit</a></td>
                        </tr>

                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mda'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "                    </tbody>
                </table>

            </div>
    </div>



";
    }

    public function getTemplateName()
    {
        return "admin/mdas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 38,  86 => 34,  82 => 33,  78 => 32,  74 => 31,  70 => 30,  66 => 29,  63 => 28,  59 => 27,  36 => 7,  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/mdas.html.twig", "/home/federalc/public_html/training/templates/admin/mdas.html.twig");
    }
}
