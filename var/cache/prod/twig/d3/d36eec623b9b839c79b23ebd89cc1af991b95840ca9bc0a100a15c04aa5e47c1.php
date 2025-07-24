<?php

/* admin/invoice.html.twig */
class __TwigTemplate_35c80d42b28da77e9cbcb7626d39f9b8b20d45016c5ca56bb58124c90c1f4ef9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin_base.html.twig", "admin/invoice.html.twig", 1);
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
        <div class=\"card-header\">
            Invoice(s)
        </div>

        <div class=\"card-body\">

            <table id=\"example\" class=\"datatable table display table-bordered table-striped table-hover\" cellspacing=\"0\" width=\"100%\">
                <thead >
                <tr>
                    <th>Invoice ID</th>
                    <th>Payment ID</th>
                    <th>MDA</th>
                    <th>Training</th>
                    <th>Payment amount</th>
                    <th>Payment method</th>
                    <th>Payment status</th>
                    <th>Options</th>
                </tr>
                </thead>
                <tbody>

                ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["invoices"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["invoice"]) {
            // line 28
            echo "
                    <tr>
                        <td>#";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["invoice"], "id", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["invoice"], "paymentid", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["invoice"], "mda", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["invoice"], "training", array()), "title", array()), "html", null, true);
            echo "</td>
                        <td>&#8358;";
            // line 34
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["invoice"], "paymentamount", array())), "html", null, true);
            echo "</td>
                        <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["invoice"], "paymentmethod", array()), "html", null, true);
            echo "</td>
                        <td>
                            ";
            // line 37
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["invoice"], "paymentstatus", array()) == 0)) {
                // line 38
                echo "
                                <span class=\"text-danger\">Not paid</span>

                            ";
            } elseif ((twig_get_attribute($this->env, $this->getSourceContext(),             // line 41
$context["invoice"], "paymentstatus", array()) == 1)) {
                // line 42
                echo "
                                <span class=\"text-success\">Paid</span>

                            ";
            }
            // line 46
            echo "                        </td>
                        <td>
                            ";
            // line 48
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["invoice"], "paymentstatus", array()) == "1")) {
                // line 49
                echo "
                                <a href=\"";
                // line 50
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_view_invoice", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["invoice"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-success btn-xs\"><i class=\"fa fa-search\"></i> View Receipt</a>

                            ";
            } else {
                // line 53
                echo "
                                <a href=\"";
                // line 54
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_view_invoice", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["invoice"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-info btn-xs\"><i class=\"fa fa-search\"></i> View Invoice</a>

                            ";
            }
            // line 57
            echo "                        </td>
                    </tr>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['invoice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "
                </tbody>
            </table>

        </div>






        </ul>

    </div>

";
    }

    public function getTemplateName()
    {
        return "admin/invoice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 61,  128 => 57,  122 => 54,  119 => 53,  113 => 50,  110 => 49,  108 => 48,  104 => 46,  98 => 42,  96 => 41,  91 => 38,  89 => 37,  84 => 35,  80 => 34,  76 => 33,  72 => 32,  68 => 31,  64 => 30,  60 => 28,  56 => 27,  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/invoice.html.twig", "/home/federalc/public_html/training/templates/admin/invoice.html.twig");
    }
}
