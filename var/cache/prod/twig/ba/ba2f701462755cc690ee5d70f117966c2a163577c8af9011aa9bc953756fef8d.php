<?php

/* admin/view_invoice.html.twig */
class __TwigTemplate_80f46816feb8de110a97b3ecc4d16035c67ec35614b6cf84e414d2d0963ae02e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin_base.html.twig", "admin/view_invoice.html.twig", 1);
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

";
        // line 6
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["invoice"] ?? null), "paymentevidence", array()) == null)) {
            // line 7
            echo "    <div class=\"card\">

        <div class=\"card-header bg-red font-white\">
            <h4>Payment evidence</h4>
        </div>

        <div class=\"card-body\">

            <div class=\"alert alert-danger\">Awaiting user to upload payment evidence</div>



                    ";
            // line 19
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
            echo "
                    ";
            // line 20
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
            echo "
                    ";
            // line 21
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
            echo "


        </div>

    </div>
    ";
        } else {
            // line 28
            echo "
        <div class=\"card\">

            <div class=\"card-header bg-success font-white\">
                <button class=\"btn float-right btn-xs btn-primary btn-xs mr-2\" onclick=\"printElem2('pay_evidence');\"><i class=\"fa fa-print\"></i> Print</button>
                <h4>Payment evidence</h4>
            </div>

            <div class=\"card-body\" id=\"pay_evidence\">

                <div class=\"bg-gray p-3\">
                    <p>Update payment evidence</p>
                    ";
            // line 40
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
            echo "
                    ";
            // line 41
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
            echo "
                    ";
            // line 42
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
            echo "
                </div>

              <img src=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(twig_get_attribute($this->env, $this->getSourceContext(), ($context["invoice"] ?? null), "paymentevidence", array())), "html", null, true);
            echo "\" class=\"img-fluid\">

            </div>

        </div>

        ";
        }
        // line 52
        echo "


    <div class=\"card\">
        <div class=\"card-header bg-dark font-white\">

            <h2 CLASS=\"text-white float-left\">Confirm payment from MDA</h2>
            <div class=\"float-right d-flex\">
                <button class=\"btn btn-xs btn-primary btn-xs mr-2\" onclick=\"printElem2('letter');\"><i class=\"fa fa-print\"></i> Print</button>


                ";
        // line 63
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["invoice"] ?? null), "paymentstatus", array()) == 0)) {
            // line 64
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_pay_invoice_undertaken", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), ($context["invoice"] ?? null), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-xs btn-success mr-2\" onclick=\"return confirm('Are you sure you want to confirm this MDA will pay with Undertaken?')\"><i class=\"fa fa-file\"></i> Pay with Undertaken</a>
                    <a href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_pay_invoice_cash", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), ($context["invoice"] ?? null), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-xs btn-success mr-2\" onclick=\"return confirm('Are you sure you want to confirm this MDA paid cash?')\"><i class=\"fa fa-money\"></i> Paid with Cash</a>
                    <a href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_pay_invoice_online", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), ($context["invoice"] ?? null), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-xs btn-success mr-2\" onclick=\"return confirm('Are you sure you want to confirm this MDA made payment online?')\"><i class=\"fa fa-money\"></i> Paid Online</a>

                    ";
            // line 68
            if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["invoice"] ?? null), "paymentevidence", array()) != null)) {
                // line 69
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_pay_invoice_bank", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), ($context["invoice"] ?? null), "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-xs btn-success\"><i class=\"fa fa-institution\"></i> Paid by Bank transfer</a>
                        ";
            }
            // line 71
            echo "                ";
        }
        // line 72
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
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/logo.png"), "html", null, true);
        echo "\" class=\"mb-5\" style=\"max-width: 300px\">

                            <h1 class=\"text-primary\">
            <span>
    ";
        // line 92
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["invoice"] ?? null), "paymentstatus", array()) == 0)) {
            // line 93
            echo "        Invoice
    ";
        } else {
            // line 95
            echo "        Receipt
    ";
        }
        // line 97
        echo "            </span> #";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["invoice"] ?? null), "id", array()), "html", null, true);
        echo "</h1>
                            <p>";
        // line 98
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
        // line 120
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["mda"] ?? null), "name", array()), "html", null, true);
        echo "</h4>
                            <p>";
        // line 121
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["mda"] ?? null), "address", array()), "html", null, true);
        echo "</p>
                        </div>

                        <div class=\"col-8\">
                            <div class=\"text-right\">

                                <b>Payment status</b>
                                ";
        // line 128
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["invoice"] ?? null), "paymentstatus", array()) == 0)) {
            // line 129
            echo "                                    <h2 class=\"font-lg-3 text-danger text-uppercase font-weight-700\">Not paid</h2>

                                ";
        } elseif ((twig_get_attribute($this->env, $this->getSourceContext(),         // line 131
($context["invoice"] ?? null), "paymentstatus", array()) == 1)) {
            // line 132
            echo "
                                    <h2 class=\"font-lg-3 text-success text-uppercase font-weight-700\">Paid</h2>

                                ";
        }
        // line 136
        echo "
                                <br>
                                <b>Payment method</b>
                                <p class=\"font-lg-3 text-uppercase font-weight-700\">";
        // line 139
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["invoice"] ?? null), "paymentmethod", array()), "html", null, true);
        echo "</p>
                                ";
        // line 140
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["invoice"] ?? null), "paymentmethod", array()) == "Online")) {
            // line 141
            echo "
                                    Payment Reference: <span class=\"text-uppercase\">";
            // line 142
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["invoice"] ?? null), "paymentid", array()), "html", null, true);
            echo "</span>

                                ";
        }
        // line 145
        echo "

                            </div>
                        </div>

                    </div>

                    <h3 class=\"page-title mt-5 \">";
        // line 152
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
        // line 166
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["invoice"] ?? null), "initialinvoice", array()) == 1)) {
            // line 167
            echo "
                            <tr>
                                <td>1</td>
                                <td>MDA Registration Fee</td>
                                <td>1</td>
                                <td>&#8358;";
            // line 172
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["training"] ?? null), "registrationfee", array())), "html", null, true);
            echo "</td>
                                <td>&#8358;";
            // line 173
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["training"] ?? null), "registrationfee", array())), "html", null, true);
            echo "</td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>Participant(s) Registration Fee</td>
                                <td>";
            // line 179
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["all_main_participants"] ?? null)), "html", null, true);
            echo "</td>
                                <td>&#8358;";
            // line 180
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["training"] ?? null), "individualamount", array())), "html", null, true);
            echo "</td>
                                <td>&#8358;";
            // line 181
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->getSourceContext(), ($context["training"] ?? null), "individualamount", array()) * ($context["all_main_participants"] ?? null))), "html", null, true);
            echo "</td>
                            </tr>

                            ";
            // line 184
            if ((($context["all_extra_participants"] ?? null) > 0)) {
                // line 185
                echo "
                                <tr>
                                    <td>3</td>
                                    <td>Participant(s) Registration Fee</td>
                                    <td>";
                // line 189
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["all_extra_participants"] ?? null)), "html", null, true);
                echo "</td>
                                    <td>&#8358;";
                // line 190
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["training"] ?? null), "extrapersonnelamount", array())), "html", null, true);
                echo "</td>
                                    <td>&#8358;";
                // line 191
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->getSourceContext(), ($context["training"] ?? null), "extrapersonnelamount", array()) * ($context["all_extra_participants"] ?? null))), "html", null, true);
                echo "</td>
                                </tr>

                            ";
            }
            // line 195
            echo "
                            <tr>
                                <td colspan=\"4\" class=\"text-right font-weight-600\">Total</td>
                                <td class=\"font-sm-4 text-success\">&#8358;";
            // line 198
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["invoice"] ?? null), "paymentamount", array())), "html", null, true);
            echo "</td>
                            </tr>

                        ";
        } else {
            // line 202
            echo "
                            <tr>
                                <td>1</td>
                                <td>Extra Participant(s) Registration Fee</td>
                                <td>";
            // line 206
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["participants_count"] ?? null)), "html", null, true);
            echo "</td>
                                <td>&#8358;";
            // line 207
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["training"] ?? null), "extrapersonnelamount", array())), "html", null, true);
            echo "</td>
                                <td>&#8358;";
            // line 208
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->getSourceContext(), ($context["training"] ?? null), "extrapersonnelamount", array()) * ($context["participants_count"] ?? null))), "html", null, true);
            echo "</td>
                            </tr>

                            <tr>
                                <td colspan=\"4\" class=\"text-right font-weight-600\">Total</td>
                                <td class=\"font-sm-4 text-success\">&#8358;";
            // line 213
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["invoice"] ?? null), "paymentamount", array())), "html", null, true);
            echo "</td>
                            </tr>

                        ";
        }
        // line 217
        echo "
                        </tbody>
                    </table>


                    ";
        // line 222
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["invoice"] ?? null), "paymentstatus", array()) == 0)) {
            // line 223
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
            // line 245
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/pay_logo.png"), "html", null, true);
            echo "\" class=\"img-fluid mt-4 w-75\">

                    ";
        }
        // line 248
        echo "

                </div>
            </div>

        </div>




    </div>

    <div class=\"row\">

        <div class=\"col-md-6\">


            <div class=\"card\">
                <div class=\"card-header bg-dark text-white\">
                    <h5>Log</h5>
                </div>
                <div class=\"card-body\">
                    <ul class=\"list-group list-group-flush\">
                    ";
        // line 271
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["invoice_log"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 272
            echo "

                        <li class=\"list-group-item\">
                            ";
            // line 275
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["log"], "status", array()), "html", null, true);
            echo "
                            <p class=\"text-primary\">by ";
            // line 276
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["log"], "userid", array()), "username", array()), "html", null, true);
            echo "</p>
                            <p class=\"font-gray font-xs\">";
            // line 277
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["log"], "date", array()), "jS F, Y h:i:s a"), "html", null, true);
            echo "</p>
                        </li>





                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 285
        echo "                    </ul>
                </div>
            </div>

        </div>

    </div>

";
    }

    public function getTemplateName()
    {
        return "admin/view_invoice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  481 => 285,  467 => 277,  463 => 276,  459 => 275,  454 => 272,  450 => 271,  425 => 248,  419 => 245,  395 => 223,  393 => 222,  386 => 217,  379 => 213,  371 => 208,  367 => 207,  363 => 206,  357 => 202,  350 => 198,  345 => 195,  338 => 191,  334 => 190,  330 => 189,  324 => 185,  322 => 184,  316 => 181,  312 => 180,  308 => 179,  299 => 173,  295 => 172,  288 => 167,  286 => 166,  269 => 152,  260 => 145,  254 => 142,  251 => 141,  249 => 140,  245 => 139,  240 => 136,  234 => 132,  232 => 131,  228 => 129,  226 => 128,  216 => 121,  212 => 120,  187 => 98,  182 => 97,  178 => 95,  174 => 93,  172 => 92,  165 => 88,  147 => 72,  144 => 71,  138 => 69,  136 => 68,  131 => 66,  127 => 65,  122 => 64,  120 => 63,  107 => 52,  97 => 45,  91 => 42,  87 => 41,  83 => 40,  69 => 28,  59 => 21,  55 => 20,  51 => 19,  37 => 7,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/view_invoice.html.twig", "/home/federalc/public_html/training/templates/admin/view_invoice.html.twig");
    }
}
