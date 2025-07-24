<?php

/* user/view_invoice.html.twig */
class __TwigTemplate_7d9ef694011f0198f6f81764a7608c7303fd293f3285bfdf4e639e57ade491da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("user_base.html.twig", "user/view_invoice.html.twig", 1);
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
    ";
        // line 5
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["invoice"] ?? null), "paymentevidence", array()) == null)) {
            // line 6
            echo "        <div class=\"card\">

            <div class=\"card-header bg-red font-white\">
                <h4>Upload payment evidence</h4>
            </div>

            <div class=\"card-body\">

                ";
            // line 14
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
            echo "
                ";
            // line 15
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
            echo "
                ";
            // line 16
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
            echo "

            </div>

        </div>
    ";
        } else {
            // line 22
            echo "
        <div class=\"card\">

            <div class=\"card-header bg-success font-white\">
                <button class=\"btn float-right btn-xs btn-primary btn-xs mr-2\" onclick=\"printElem2('pay_evidence');\"><i class=\"fa fa-print\"></i> Print</button>
                <h4>Payment evidence</h4>
            </div>

            <div class=\"card-body\" id=\"pay_evidence\">

                <img src=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(twig_get_attribute($this->env, $this->getSourceContext(), ($context["invoice"] ?? null), "paymentevidence", array())), "html", null, true);
            echo "\" class=\"img-fluid\">

            </div>

        </div>

    ";
        }
        // line 39
        echo "

    <div class=\"card\">
        <div class=\"card-header bg-dark font-white\">
            <div class=\"float-right d-flex\">
                <button class=\"btn btn-primary btn-xs mr-2\" onclick=\"printElem('letter');\"><i class=\"fa fa-print\"></i> Print</button>

    ";
        // line 46
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["invoice"] ?? null), "paymentevidence", array()) == null)) {
            // line 47
            echo "    ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["invoice"] ?? null), "paymentstatus", array()) == 0)) {
                // line 48
                echo "                <form action=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("verify_invoice_online_payment", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), ($context["invoice"] ?? null), "id", array()))), "html", null, true);
                echo "\" method=\"POST\" class=\"bottom_buffer\">

                    <button class='btn btn-info btn-xs' id=\"paystack_pay\">Pay Online</button>
                    <script
                            src=\"https://js.paystack.co/v1/inline.js\"
                            data-key=\"pk_live_23b02ce39ed67434180d01a95154d6411e9fa4ee\"
                            data-email=\"";
                // line 54
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "email", array()), "html", null, true);
                echo "\"
                            data-amount=\"";
                // line 55
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["invoice"] ?? null), "paymentamount", array()), "html", null, true);
                echo "00\"
                            data-ref=\"";
                // line 56
                echo twig_escape_filter($this->env, ($context["payment_id"] ?? null), "html", null, true);
                echo "\"
                            data-custom-button = \"paystack_pay\">

                    </script>
                </form>
        ";
            }
            // line 62
            echo "    ";
        }
        // line 63
        echo "
            </div>
            Invoice
        </div>

        <div class=\"card-body p-5\">


            <div id=\"letter\">

                <div class=\"p-5\">

<div class=\"row\">

    <div class=\"col-6\">
        <img src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/logo.png"), "html", null, true);
        echo "\" class=\"mb-5\" style=\"max-width: 300px\">

        <h1 class=\"text-primary\">
            <span>
    ";
        // line 82
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["invoice"] ?? null), "paymentstatus", array()) == 0)) {
            // line 83
            echo "                Invoice
        ";
        } else {
            // line 85
            echo "        Receipt
        ";
        }
        // line 87
        echo "            </span> #";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["invoice"] ?? null), "id", array()), "html", null, true);
        echo "</h1>
        <p>";
        // line 88
        echo twig_escape_filter($this->env, ($context["date"] ?? null), "html", null, true);
        echo "</p>
    </div>

    <div class=\"col-6\">
        <div class=\"text-right\">

            <h1>Pyrich Group Limited</h1>
            <p>
                No 26 Jos Street,<br>
                Area 3 Garki,<br>
                Abuja.
            </p>

        </div>
    </div>

</div>


                <div class=\"row mt-5\">

                    <div class=\"col-4\">
                        <h4>";
        // line 110
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["mda"] ?? null), "name", array()), "html", null, true);
        echo "</h4>
                        <p>";
        // line 111
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["mda"] ?? null), "address", array()), "html", null, true);
        echo "</p>
                    </div>

                    <div class=\"col-8\">
                        <div class=\"text-right\">

                            <b>Payment status</b>
                            ";
        // line 118
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["invoice"] ?? null), "paymentstatus", array()) == 0)) {
            // line 119
            echo "                            <h2 class=\"font-lg-3 text-danger text-uppercase font-weight-700\">Not paid</h2>

                                ";
        } elseif ((twig_get_attribute($this->env, $this->getSourceContext(),         // line 121
($context["invoice"] ?? null), "paymentstatus", array()) == 1)) {
            // line 122
            echo "
                                    <h2 class=\"font-lg-3 text-success text-uppercase font-weight-700\">Paid</h2>

                                ";
        }
        // line 126
        echo "
                            <br>
                            <b>Payment method</b>
                            <p class=\"font-lg-3 text-uppercase font-weight-700\">";
        // line 129
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["invoice"] ?? null), "paymentmethod", array()), "html", null, true);
        echo "</p>
                            ";
        // line 130
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["invoice"] ?? null), "paymentmethod", array()) == "Online")) {
            // line 131
            echo "
                                Payment Reference: <span class=\"text-uppercase\">";
            // line 132
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["invoice"] ?? null), "paymentid", array()), "html", null, true);
            echo "</span>

                            ";
        }
        // line 135
        echo "

                        </div>
                    </div>

                </div>

                    <h3 class=\"page-title mt-5 \">";
        // line 142
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["training"] ?? null), "title", array()), "html", null, true);
        echo "</h3>
                <hr class=\"mb-5\">

                <table class=\"table mt-4 mb-5 table-bordered\">
                    <thead>
                    <th>S/N</th>
                    <th>Item</th>
                    <th>Quantity</th>
                    <th>Unit Price</th>
                    <th>Sub-total</th>
                    </thead>

                    <tbody>

                    ";
        // line 156
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["invoice"] ?? null), "initialinvoice", array()) == 1)) {
            // line 157
            echo "
                    <tr>
                        <td>1</td>
                        <td>MDA Registration Fee</td>
                        <td>1</td>
                        <td>&#8358;";
            // line 162
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["training"] ?? null), "registrationfee", array())), "html", null, true);
            echo "</td>
                        <td>&#8358;";
            // line 163
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["training"] ?? null), "registrationfee", array())), "html", null, true);
            echo "</td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>Participant(s) Registration Fee</td>
                        <td>";
            // line 169
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["all_main_participants"] ?? null)), "html", null, true);
            echo "</td>
                        <td>&#8358;";
            // line 170
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["training"] ?? null), "individualamount", array())), "html", null, true);
            echo "</td>
                        <td>&#8358;";
            // line 171
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->getSourceContext(), ($context["training"] ?? null), "individualamount", array()) * ($context["all_main_participants"] ?? null))), "html", null, true);
            echo "</td>
                    </tr>

                        ";
            // line 174
            if ((($context["all_extra_participants"] ?? null) > 0)) {
                // line 175
                echo "
                            <tr>
                                <td>3</td>
                                <td>Participant(s) Registration Fee</td>
                                <td>";
                // line 179
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["all_extra_participants"] ?? null)), "html", null, true);
                echo "</td>
                                <td>&#8358;";
                // line 180
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["training"] ?? null), "extrapersonnelamount", array())), "html", null, true);
                echo "</td>
                                <td>&#8358;";
                // line 181
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->getSourceContext(), ($context["training"] ?? null), "extrapersonnelamount", array()) * ($context["all_extra_participants"] ?? null))), "html", null, true);
                echo "</td>
                            </tr>

                        ";
            }
            // line 185
            echo "
                    <tr>
                        <td colspan=\"4\" class=\"text-right font-weight-600\">Total</td>
                        <td class=\"font-sm-4 text-success\">&#8358;";
            // line 188
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["invoice"] ?? null), "paymentamount", array())), "html", null, true);
            echo "</td>
                    </tr>

                        ";
        } else {
            // line 192
            echo "
                            <tr>
                                <td>1</td>
                                <td>Extra Participant(s) Registration Fee</td>
                                <td>";
            // line 196
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["participants_count"] ?? null)), "html", null, true);
            echo "</td>
                                <td>&#8358;";
            // line 197
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["training"] ?? null), "extrapersonnelamount", array())), "html", null, true);
            echo "</td>
                                <td>&#8358;";
            // line 198
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->getSourceContext(), ($context["training"] ?? null), "extrapersonnelamount", array()) * ($context["participants_count"] ?? null))), "html", null, true);
            echo "</td>
                            </tr>

                            <tr>
                                <td colspan=\"4\" class=\"text-right font-weight-600\">Total</td>
                                <td class=\"font-sm-4 text-success\">&#8358;";
            // line 203
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["invoice"] ?? null), "paymentamount", array())), "html", null, true);
            echo "</td>
                            </tr>

                        ";
        }
        // line 207
        echo "
                    </tbody>
                </table>


    ";
        // line 212
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["invoice"] ?? null), "paymentstatus", array()) == 0)) {
            // line 213
            echo "
        <h4>For bank transfer and payment:</h4>
        <p>Please make payment to the following account:</p>


        <div class=\"row\">
            <div class=\"col-3\"><b>Acct Name:</b></div>
            <div class=\"col-8\">PYRICH GROUP OF COMPANIES LTD.</div>

            <div class=\"col-3\"><b>Acct Number:</b></div>
            <div class=\"col-8\">1012835411</div>

            <div class=\"col-3\"><b>TIN:</b></div>
            <div class=\"col-8\">17780157-0001</div>

            <div class=\"col-3\"><b>Bank Name:</b></div>
            <div class=\"col-8\">Zenith Bank</div>

        </div>

        <p class=\"mt-3\">After making payment, scan a copy of the reciept, attach and send as mail to payment@pglnigeria.com stating your MDA name and invoice no.</p>

        <img src=\"";
            // line 235
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/pay_logo.png"), "html", null, true);
            echo "\" class=\"img-fluid mt-4 w-75\">

";
        }
        // line 238
        echo "

            </div>
            </div>

        </div>






        </ul>

    </div>

";
    }

    public function getTemplateName()
    {
        return "user/view_invoice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  406 => 238,  400 => 235,  376 => 213,  374 => 212,  367 => 207,  360 => 203,  352 => 198,  348 => 197,  344 => 196,  338 => 192,  331 => 188,  326 => 185,  319 => 181,  315 => 180,  311 => 179,  305 => 175,  303 => 174,  297 => 171,  293 => 170,  289 => 169,  280 => 163,  276 => 162,  269 => 157,  267 => 156,  250 => 142,  241 => 135,  235 => 132,  232 => 131,  230 => 130,  226 => 129,  221 => 126,  215 => 122,  213 => 121,  209 => 119,  207 => 118,  197 => 111,  193 => 110,  168 => 88,  163 => 87,  159 => 85,  155 => 83,  153 => 82,  146 => 78,  129 => 63,  126 => 62,  117 => 56,  113 => 55,  109 => 54,  99 => 48,  96 => 47,  94 => 46,  85 => 39,  75 => 32,  63 => 22,  54 => 16,  50 => 15,  46 => 14,  36 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "user/view_invoice.html.twig", "/home/federalc/public_html/training/templates/user/view_invoice.html.twig");
    }
}
