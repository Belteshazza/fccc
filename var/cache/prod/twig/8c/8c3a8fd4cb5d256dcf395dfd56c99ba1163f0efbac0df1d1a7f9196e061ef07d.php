<?php

/* admin/training.html.twig */
class __TwigTemplate_7c7fcf5bd72e2b86582d004082fc170178a13bf8bdbb0cf16a38d96284b30173 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin_base.html.twig", "admin/training.html.twig", 1);
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_add_training");
        echo "\" class=\"btn btn-xs btn-success\"><i class=\"fa fa-plus\"></i> Add new</a></div>
         <h4>All trainings</h4>


      </div>
      <div class=\"card-body\">

         <table id=\"example\" class=\"datatable table display table-striped table-hover\" cellspacing=\"0\" width=\"100%\">
            <thead >
            <tr>
               <th>Title</th>
               <th>Venue</th>
               <th>Date</th>
               <th>Time</th>
                <th>Registration fee</th>
               <th>Individual amount</th>
               <th>Extra personel amount</th>
               <th>Individuals per MDA</th>
                <th>Options</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["trainings"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["training"]) {
            // line 30
            echo "                <tr>
                    <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["training"], "title", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["training"], "venue", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["training"], "date", array()), "l, F j Y"), "html", null, true);
            echo "</td>
                    <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["training"], "time", array()), "H:i:s"), "html", null, true);
            echo "</td>
                    <td>&#8358;";
            // line 35
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["training"], "registrationfee", array())), "html", null, true);
            echo "</td>
                    <td>&#8358;";
            // line 36
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["training"], "individualamount", array())), "html", null, true);
            echo "</td>
                    <td>&#8358;";
            // line 37
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["training"], "extrapersonnelamount", array())), "html", null, true);
            echo "</td>
                    <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["training"], "individualspermda", array()), "html", null, true);
            echo "</td>
                    <td>
                        <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_view_training", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["training"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-xs btn-primary\"><i class=\"fa fa-search\"></i> View</a>
                        <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_edit_training", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["training"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-xs btn-warning mt-1\"><i class=\"fa fa-pencil\"></i> Edit</a>
                        <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_delete_training", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["training"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-xs btn-danger mt-1\"><i class=\"fa fa-pencil\"></i> Delete</a>
                        <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_link_training", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["training"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-xs btn-success mt-1\"><i class=\"fa fa-link\"></i> Link training</a>
                    </td>
                </tr>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['training'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "            </tbody>
         </table>

      </div>
   </div>



";
    }

    public function getTemplateName()
    {
        return "admin/training.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 48,  113 => 43,  109 => 42,  105 => 41,  101 => 40,  96 => 38,  92 => 37,  88 => 36,  84 => 35,  80 => 34,  76 => 33,  72 => 32,  68 => 31,  65 => 30,  61 => 29,  36 => 7,  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/training.html.twig", "/home/federalc/public_html/training/templates/admin/training.html.twig");
    }
}
