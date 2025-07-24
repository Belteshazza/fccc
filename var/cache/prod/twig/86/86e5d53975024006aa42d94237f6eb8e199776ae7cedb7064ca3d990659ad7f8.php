<?php

/* user/invoice.html.twig */
class __TwigTemplate_f374894439bdda29edde786e086710157968c7587b3539d2c624e9bbbeea52de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("user_base.html.twig", "user/invoice.html.twig", 1);
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
                    <th>Payment amount</th>
                    <th>Payment method</th>
                    <th>Payment status</th>
                    <th>Options</th>
                </tr>
                </thead>
                <tbody>

                ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["invoices"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["invoice"]) {
            // line 26
            echo "
                    <tr>
                        <td>#";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["invoice"], "id", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["invoice"], "paymentid", array()), "html", null, true);
            echo "</td>
                        <td>&#8358;";
            // line 30
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["invoice"], "paymentamount", array())), "html", null, true);
            echo "</td>
                        <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["invoice"], "paymentmethod", array()), "html", null, true);
            echo "</td>
                        <td>
                            ";
            // line 33
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["invoice"], "paymentstatus", array()) == 0)) {
                // line 34
                echo "
                                <span class=\"font-danger\">Not paid</span>

                            ";
            } elseif ((twig_get_attribute($this->env, $this->getSourceContext(),             // line 37
$context["invoice"], "paymentstatus", array()) == 1)) {
                // line 38
                echo "
                                <span class=\"font-success\">Paid</span>

                            ";
            }
            // line 42
            echo "                        </td>
                        <td>
                            <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_view_invoice", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["invoice"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-info btn-xs\"><i class=\"fa fa-search\"></i> View Invoice</a>
                        </td>
                    </tr>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['invoice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
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
        return "user/invoice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 49,  98 => 44,  94 => 42,  88 => 38,  86 => 37,  81 => 34,  79 => 33,  74 => 31,  70 => 30,  66 => 29,  62 => 28,  58 => 26,  54 => 25,  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "user/invoice.html.twig", "/home/federalc/public_html/training/templates/user/invoice.html.twig");
    }
}
