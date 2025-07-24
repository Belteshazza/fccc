<?php

/* user/view_training.html.twig */
class __TwigTemplate_9d8c2f5c937f8721539f08fa2b6030dfa5b59422e0b6355970e72a723da4caf7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("user_base.html.twig", "user/view_training.html.twig", 1);
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

        <div class=\"card-body bg-dark font-white\">
            <h2 class=\"mb-0\">";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["training"] ?? null), "title", array()), "html", null, true);
        echo "</h2>
        </div>
        <ul class=\"list-group list-group-flush\">
            <li class=\"list-group-item\">
                <b>Venue:</b> ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["training"] ?? null), "venue", array()), "html", null, true);
        echo "
            </li>

            <li class=\"list-group-item\">
                <b>Date:</b> ";
        // line 18
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["training"] ?? null), "date", array()), "l, F j Y"), "html", null, true);
        echo "
            </li>

            <li class=\"list-group-item\">
                <b>Time:</b> ";
        // line 22
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["training"] ?? null), "time", array()), "H:i:s"), "html", null, true);
        echo "
            </li>

            <li class=\"list-group-item\">
                <b>Venue:</b> ";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["training"] ?? null), "venue", array()), "html", null, true);
        echo "
            </li>

            <li class=\"list-group-item\">
                <b>MDA Registration Fee:</b> &#8358;";
        // line 30
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["training"] ?? null), "registrationfee", array())), "html", null, true);
        echo "
            </li>

            <li class=\"list-group-item\">
                <b>Individual Amount:</b> &#8358;";
        // line 34
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["training"] ?? null), "individualamount", array())), "html", null, true);
        echo "
            </li>

            <li class=\"list-group-item\">
                <b>Extra personnel Amount:</b> &#8358;";
        // line 38
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["training"] ?? null), "extrapersonnelamount", array())), "html", null, true);
        echo "
            </li>

            <li class=\"list-group-item\">
                <b>Individuals per MDA:</b> ";
        // line 42
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["training"] ?? null), "individualspermda", array())), "html", null, true);
        echo "
            </li>

        </ul>

    </div>



             <div class=\"card\">
                 <div class=\"card-header\">
                     <a href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_training_apply", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), ($context["training"] ?? null), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-xs float-right btn-success\"><i class=\"fa fa-plus\"></i> Add more participants</a>
                     Registered participants
                 </div>
                 <div class=\"card-body\">

                     <table id=\"example\" class=\"datatable table display table-bordered table-striped table-hover\" cellspacing=\"0\" width=\"100%\">
                         <thead >
                         <tr>
                             <th>Name</th>
                             <th>Email</th>
                             <th>Phone</th>
                             <th>Session</th>
                             <th>Attended</th>
                             <th>Reg. Date</th>
                             <th>Payment status</th>
                             <th>Invoice</th>
                             <th>Options</th>
                         </tr>
                         </thead>
                         <tbody>
                         ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["training_participants"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["participant"]) {
            // line 74
            echo "                             <tr>
                                 <td>";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["participant"], "name", array()), "html", null, true);
            echo "</td>
                                 <td>";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["participant"], "email", array()), "html", null, true);
            echo "</td>
                                 <td>";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["participant"], "phone", array()), "html", null, true);
            echo "</td>
                                 <td>";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["participant"], "session", array()), "html", null, true);
            echo "</td>
                                 <td>
                                  ";
            // line 80
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["participant"], "attended", array()) == 0)) {
                // line 81
                echo "
                                      No
                                  ";
            } else {
                // line 84
                echo "
                                      Yes

                                  ";
            }
            // line 88
            echo "                                 </td>
                                 <td>";
            // line 89
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["participant"], "date", array()), "jS F, Y"), "html", null, true);
            echo "</td>
                                 <td>
                                     ";
            // line 91
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["participant"], "payment_status", array()) == 0)) {
                // line 92
                echo "
                                         <span class=\"text-danger\">Not paid</span>

                                     ";
            } else {
                // line 96
                echo "
                                         <span class=\"text-success\">Paid</span>

                                     ";
            }
            // line 100
            echo "                                 </td>
                                 <td>#";
            // line 101
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["participant"], "invoice_id", array()), "html", null, true);
            echo "</td>
                                 <td>

                                     ";
            // line 104
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["participant"], "payment_status", array()) == 0)) {
                // line 105
                echo "
                                       <a href=\"";
                // line 106
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_view_invoice", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["participant"], "invoice_id", array()))), "html", null, true);
                echo "\" class=\"btn btn-primary btn-xs\"><i class=\"fa fa-file-o\"></i> View invoice</a>

                                     ";
            }
            // line 109
            echo "                                 </td>
                             </tr>

                         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['participant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        echo "                         </tbody>
                     </table>

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
                            <th>Payment amount</th>
                            <th>Payment method</th>
                            <th>Payment status</th>
                            <th>Options</th>
                        </tr>
                        </thead>
                        <tbody>

                        ";
        // line 141
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["invoices"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["invoice"]) {
            // line 142
            echo "
                        <tr>
                            <td>#";
            // line 144
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["invoice"], "id", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 145
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["invoice"], "paymentid", array()), "html", null, true);
            echo "</td>
                            <td>&#8358;";
            // line 146
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["invoice"], "paymentamount", array())), "html", null, true);
            echo "</td>
                            <td>";
            // line 147
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["invoice"], "paymentmethod", array()), "html", null, true);
            echo "</td>
                            <td>
                                ";
            // line 149
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["invoice"], "paymentstatus", array()) == 0)) {
                // line 150
                echo "
                                    <span class=\"text-danger\">Not paid</span>

                                ";
            } elseif ((twig_get_attribute($this->env, $this->getSourceContext(),             // line 153
$context["invoice"], "paymentstatus", array()) == 1)) {
                // line 154
                echo "
                                    <span class=\"text-success\">Paid</span>

                                ";
            }
            // line 158
            echo "                            </td>
                            <td>
                                ";
            // line 160
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["invoice"], "paymentstatus", array()) == "1")) {
                // line 161
                echo "
                                    <a href=\"";
                // line 162
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_view_invoice", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["invoice"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-success btn-xs\"><i class=\"fa fa-search\"></i> View Receipt</a>

                                    ";
            } else {
                // line 165
                echo "
                                <a href=\"";
                // line 166
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_view_invoice", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["invoice"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-info btn-xs\"><i class=\"fa fa-search\"></i> View Invoice</a>

                                ";
            }
            // line 169
            echo "                            </td>
                        </tr>

                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['invoice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 173
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
        return "user/view_training.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  323 => 173,  314 => 169,  308 => 166,  305 => 165,  299 => 162,  296 => 161,  294 => 160,  290 => 158,  284 => 154,  282 => 153,  277 => 150,  275 => 149,  270 => 147,  266 => 146,  262 => 145,  258 => 144,  254 => 142,  250 => 141,  220 => 113,  211 => 109,  205 => 106,  202 => 105,  200 => 104,  194 => 101,  191 => 100,  185 => 96,  179 => 92,  177 => 91,  172 => 89,  169 => 88,  163 => 84,  158 => 81,  156 => 80,  151 => 78,  147 => 77,  143 => 76,  139 => 75,  136 => 74,  132 => 73,  109 => 53,  95 => 42,  88 => 38,  81 => 34,  74 => 30,  67 => 26,  60 => 22,  53 => 18,  46 => 14,  39 => 10,  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "user/view_training.html.twig", "/home/federalc/public_html/training/templates/user/view_training.html.twig");
    }
}
