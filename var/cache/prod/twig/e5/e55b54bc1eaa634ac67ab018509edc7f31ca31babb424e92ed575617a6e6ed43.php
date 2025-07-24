<?php

/* common/admin/training_financials.html.twig */
class __TwigTemplate_f43196250030ed3cc1e472d268a8bff0d7c7556c0cb89d397289713fbdc0c4a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"row text-white text-center\">


    <div class=\"col-md-4\">

        <div class=\"card\">
            <div class=\"card-body text-center text-white bg-dark font-white\">
                <b class=\"text-uppercase font-xs\">Total expected payments</b>
                <p class=\"font-lg m-0\">&#8358;";
        // line 9
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["total_payment"] ?? null)), "html", null, true);
        echo "</p>
            </div>
        </div>

    </div>

    <div class=\"col-md-4\">

        <div class=\"card\">
            <div class=\"card-body text-center text-white bg-dark font-white\">
                <b class=\"text-uppercase font-xs\">Total payments received</b>
                <p class=\"font-lg m-0\">&#8358;";
        // line 20
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((($context["total_online_payment"] ?? null) + ($context["total_cash_payment"] ?? null)) + ($context["total_bank_payment"] ?? null))), "html", null, true);
        echo "</p>
            </div>
        </div>

    </div>

    <div class=\"col-md-4\">

        <div class=\"card\">
            <div class=\"card-body bg-dark text-center text-white font-white\">
                <b class=\"text-uppercase font-xs\">Total outstanding payments</b>
                <p class=\"font-lg m-0\">&#8358;";
        // line 31
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["total_outstanding_payment"] ?? null)), "html", null, true);
        echo "</p>
            </div>
        </div>

    </div>

    <div class=\"col-md-4\">

        <div class=\"card\">
            <div class=\"card-body bg-orange text-white font-white\">
                <b class=\"text-uppercase font-xs\">Total online payments</b>
                <p class=\"font-lg m-0\">&#8358;";
        // line 42
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["total_online_payment"] ?? null)), "html", null, true);
        echo "</p>
            </div>
        </div>

    </div>
    <div class=\"col-md-4\">

        <div class=\"card\">
            <div class=\"card-body bg-green text-white font-white\">
                <b class=\"text-uppercase font-xs\">Total cash payments</b>
                <p class=\"font-lg m-0\">&#8358;";
        // line 52
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["total_cash_payment"] ?? null)), "html", null, true);
        echo "</p>
            </div>
        </div>

    </div>
    <div class=\"col-md-4\">

        <div class=\"card\">
            <div class=\"card-body bg-blue text-white font-white\">
                <b class=\"text-uppercase font-xs\">Total bank payments</b>
                <p class=\"font-lg m-0\">&#8358;";
        // line 62
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["total_bank_payment"] ?? null)), "html", null, true);
        echo "</p>
            </div>
        </div>

    </div>


</div>


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
                <th>Payment amount</th>
                <th>Payment method</th>
                <th>Payment status</th>
                <th>Options</th>
            </tr>
            </thead>
            <tbody>

            ";
        // line 93
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["invoices"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["invoice"]) {
            // line 94
            echo "
                <tr>
                    <td>#";
            // line 96
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["invoice"], "id", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 97
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["invoice"], "paymentid", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 98
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["invoice"], "mda", array()), "html", null, true);
            echo "</td>
                    <td>&#8358;";
            // line 99
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["invoice"], "paymentamount", array())), "html", null, true);
            echo "</td>
                    <td>";
            // line 100
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["invoice"], "paymentmethod", array()), "html", null, true);
            echo "</td>
                    <td>
                        ";
            // line 102
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["invoice"], "paymentstatus", array()) == 0)) {
                // line 103
                echo "
                            <span class=\"text-danger\">Not paid</span>

                        ";
            } elseif ((twig_get_attribute($this->env, $this->getSourceContext(),             // line 106
$context["invoice"], "paymentstatus", array()) == 1)) {
                // line 107
                echo "
                            <span class=\"text-success\">Paid</span>

                        ";
            }
            // line 111
            echo "                    </td>
                    <td>
                        ";
            // line 113
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["invoice"], "paymentstatus", array()) == "1")) {
                // line 114
                echo "
                            <a href=\"";
                // line 115
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_view_invoice", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["invoice"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-success btn-xs\"><i class=\"fa fa-search\"></i> View Receipt</a>

                        ";
            } else {
                // line 118
                echo "
                            <a href=\"";
                // line 119
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_view_invoice", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["invoice"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-info btn-xs\"><i class=\"fa fa-search\"></i> View Invoice</a>

                        ";
            }
            // line 122
            echo "                    </td>
                </tr>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['invoice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        echo "
            </tbody>
        </table>

    </div>






    </ul>

</div>";
    }

    public function getTemplateName()
    {
        return "common/admin/training_financials.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 126,  199 => 122,  193 => 119,  190 => 118,  184 => 115,  181 => 114,  179 => 113,  175 => 111,  169 => 107,  167 => 106,  162 => 103,  160 => 102,  155 => 100,  151 => 99,  147 => 98,  143 => 97,  139 => 96,  135 => 94,  131 => 93,  97 => 62,  84 => 52,  71 => 42,  57 => 31,  43 => 20,  29 => 9,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "common/admin/training_financials.html.twig", "/home/federalc/public_html/training/templates/common/admin/training_financials.html.twig");
    }
}
