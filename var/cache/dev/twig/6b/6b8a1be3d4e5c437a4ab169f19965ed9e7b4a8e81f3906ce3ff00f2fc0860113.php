<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* admin/view_invoice.html.twig */
class __TwigTemplate_aa18eb7608d312678d38283d5e0ab547564b4058f813a35e287ceb8159ae5240 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/view_invoice.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/view_invoice.html.twig"));

        $this->parent = $this->loadTemplate("admin_base.html.twig", "admin/view_invoice.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        yield "

";
        // line 6
        if ((0 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new RuntimeError('Variable "invoice" does not exist.', 6, $this->source); })()), "paymentevidence", [], "any", false, false, false, 6), null))) {
            // line 7
            yield "    <div class=\"card\">

        <div class=\"card-header bg-red font-white\">
            <h4>Payment evidence</h4>
        </div>

        <div class=\"card-body\">

            <div class=\"alert alert-danger\">Awaiting user to upload payment evidence</div>



                    ";
            // line 19
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), 'form_start');
            yield "
                    ";
            // line 20
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), 'widget');
            yield "
                    ";
            // line 21
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), 'form_end');
            yield "


        </div>

    </div>
    ";
        } else {
            // line 28
            yield "
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
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), 'form_start');
            yield "
                    ";
            // line 41
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), 'widget');
            yield "
                    ";
            // line 42
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), 'form_end');
            yield "
                </div>

              <img src=\"";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new RuntimeError('Variable "invoice" does not exist.', 45, $this->source); })()), "paymentevidence", [], "any", false, false, false, 45)), "html", null, true);
            yield "\" class=\"img-fluid\">

            </div>

        </div>

        ";
        }
        // line 52
        yield "


    <div class=\"card\">
        <div class=\"card-header bg-dark font-white\">

            <h2 CLASS=\"text-white float-left\">Confirm payment from MDA</h2>
            <div class=\"float-right d-flex\">
                <button class=\"btn btn-xs btn-primary btn-xs mr-2\" onclick=\"printElem2('letter');\"><i class=\"fa fa-print\"></i> Print</button>


                ";
        // line 63
        if ((0 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new RuntimeError('Variable "invoice" does not exist.', 63, $this->source); })()), "paymentstatus", [], "any", false, false, false, 63), 0))) {
            // line 64
            yield "                    <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_pay_invoice_undertaken", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new RuntimeError('Variable "invoice" does not exist.', 64, $this->source); })()), "id", [], "any", false, false, false, 64)]), "html", null, true);
            yield "\" class=\"btn btn-xs btn-success mr-2\" onclick=\"return confirm('Are you sure you want to confirm this MDA will pay with Undertaken?')\"><i class=\"fa fa-file\"></i> Pay with Undertaken</a>
                    <a href=\"";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_pay_invoice_cash", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new RuntimeError('Variable "invoice" does not exist.', 65, $this->source); })()), "id", [], "any", false, false, false, 65)]), "html", null, true);
            yield "\" class=\"btn btn-xs btn-success mr-2\" onclick=\"return confirm('Are you sure you want to confirm this MDA paid cash?')\"><i class=\"fa fa-money\"></i> Paid with Cash</a>
                    <a href=\"";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_pay_invoice_online", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new RuntimeError('Variable "invoice" does not exist.', 66, $this->source); })()), "id", [], "any", false, false, false, 66)]), "html", null, true);
            yield "\" class=\"btn btn-xs btn-success mr-2\" onclick=\"return confirm('Are you sure you want to confirm this MDA made payment online?')\"><i class=\"fa fa-money\"></i> Paid Online</a>

                    ";
            // line 68
            if ((0 !== CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new RuntimeError('Variable "invoice" does not exist.', 68, $this->source); })()), "paymentevidence", [], "any", false, false, false, 68), null))) {
                // line 69
                yield "                    <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_pay_invoice_bank", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new RuntimeError('Variable "invoice" does not exist.', 69, $this->source); })()), "id", [], "any", false, false, false, 69)]), "html", null, true);
                yield "\" class=\"btn btn-xs btn-success\"><i class=\"fa fa-institution\"></i> Paid by Bank transfer</a>
                        ";
            }
            // line 71
            yield "                ";
        }
        // line 72
        yield "

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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo.png"), "html", null, true);
        yield "\" class=\"mb-5\" style=\"max-width: 300px\">

                            <h1 class=\"text-primary\">
            <span>
    ";
        // line 92
        if ((0 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new RuntimeError('Variable "invoice" does not exist.', 92, $this->source); })()), "paymentstatus", [], "any", false, false, false, 92), 0))) {
            // line 93
            yield "        Invoice
    ";
        } else {
            // line 95
            yield "        Receipt
    ";
        }
        // line 97
        yield "            </span> #";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new RuntimeError('Variable "invoice" does not exist.', 97, $this->source); })()), "id", [], "any", false, false, false, 97), "html", null, true);
        yield "</h1>
                            <p>";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 98, $this->source); })()), "html", null, true);
        yield "</p>
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["mda"]) || array_key_exists("mda", $context) ? $context["mda"] : (function () { throw new RuntimeError('Variable "mda" does not exist.', 120, $this->source); })()), "name", [], "any", false, false, false, 120), "html", null, true);
        yield "</h4>
                            <p>";
        // line 121
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["mda"]) || array_key_exists("mda", $context) ? $context["mda"] : (function () { throw new RuntimeError('Variable "mda" does not exist.', 121, $this->source); })()), "address", [], "any", false, false, false, 121), "html", null, true);
        yield "</p>
                        </div>

                        <div class=\"col-8\">
                            <div class=\"text-right\">

                                <b>Payment status</b>
                                ";
        // line 128
        if ((0 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new RuntimeError('Variable "invoice" does not exist.', 128, $this->source); })()), "paymentstatus", [], "any", false, false, false, 128), 0))) {
            // line 129
            yield "                                    <h2 class=\"font-lg-3 text-danger text-uppercase font-weight-700\">Not paid</h2>

                                ";
        } elseif ((0 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source,         // line 131
(isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new RuntimeError('Variable "invoice" does not exist.', 131, $this->source); })()), "paymentstatus", [], "any", false, false, false, 131), 1))) {
            // line 132
            yield "
                                    <h2 class=\"font-lg-3 text-success text-uppercase font-weight-700\">Paid</h2>

                                ";
        }
        // line 136
        yield "
                                <br>
                                <b>Payment method</b>
                                <p class=\"font-lg-3 text-uppercase font-weight-700\">";
        // line 139
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new RuntimeError('Variable "invoice" does not exist.', 139, $this->source); })()), "paymentmethod", [], "any", false, false, false, 139), "html", null, true);
        yield "</p>
                                ";
        // line 140
        if ((0 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new RuntimeError('Variable "invoice" does not exist.', 140, $this->source); })()), "paymentmethod", [], "any", false, false, false, 140), "Online"))) {
            // line 141
            yield "
                                    Payment Reference: <span class=\"text-uppercase\">";
            // line 142
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new RuntimeError('Variable "invoice" does not exist.', 142, $this->source); })()), "paymentid", [], "any", false, false, false, 142), "html", null, true);
            yield "</span>

                                ";
        }
        // line 145
        yield "

                            </div>
                        </div>

                    </div>

                    <h3 class=\"page-title mt-5 \">";
        // line 152
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["training"]) || array_key_exists("training", $context) ? $context["training"] : (function () { throw new RuntimeError('Variable "training" does not exist.', 152, $this->source); })()), "title", [], "any", false, false, false, 152), "html", null, true);
        yield "</h3>
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
        if ((0 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new RuntimeError('Variable "invoice" does not exist.', 166, $this->source); })()), "initialinvoice", [], "any", false, false, false, 166), 1))) {
            // line 167
            yield "
                            <tr>
                                <td>1</td>
                                <td>MDA Registration Fee</td>
                                <td>1</td>
                                <td>&#8358;";
            // line 172
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["training"]) || array_key_exists("training", $context) ? $context["training"] : (function () { throw new RuntimeError('Variable "training" does not exist.', 172, $this->source); })()), "registrationfee", [], "any", false, false, false, 172)), "html", null, true);
            yield "</td>
                                <td>&#8358;";
            // line 173
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["training"]) || array_key_exists("training", $context) ? $context["training"] : (function () { throw new RuntimeError('Variable "training" does not exist.', 173, $this->source); })()), "registrationfee", [], "any", false, false, false, 173)), "html", null, true);
            yield "</td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>Participant(s) Registration Fee</td>
                                <td>";
            // line 179
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["all_main_participants"]) || array_key_exists("all_main_participants", $context) ? $context["all_main_participants"] : (function () { throw new RuntimeError('Variable "all_main_participants" does not exist.', 179, $this->source); })())), "html", null, true);
            yield "</td>
                                <td>&#8358;";
            // line 180
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["training"]) || array_key_exists("training", $context) ? $context["training"] : (function () { throw new RuntimeError('Variable "training" does not exist.', 180, $this->source); })()), "individualamount", [], "any", false, false, false, 180)), "html", null, true);
            yield "</td>
                                <td>&#8358;";
            // line 181
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, (isset($context["training"]) || array_key_exists("training", $context) ? $context["training"] : (function () { throw new RuntimeError('Variable "training" does not exist.', 181, $this->source); })()), "individualamount", [], "any", false, false, false, 181) * (isset($context["all_main_participants"]) || array_key_exists("all_main_participants", $context) ? $context["all_main_participants"] : (function () { throw new RuntimeError('Variable "all_main_participants" does not exist.', 181, $this->source); })()))), "html", null, true);
            yield "</td>
                            </tr>

                            ";
            // line 184
            if ((1 === CoreExtension::compare((isset($context["all_extra_participants"]) || array_key_exists("all_extra_participants", $context) ? $context["all_extra_participants"] : (function () { throw new RuntimeError('Variable "all_extra_participants" does not exist.', 184, $this->source); })()), 0))) {
                // line 185
                yield "
                                <tr>
                                    <td>3</td>
                                    <td>Participant(s) Registration Fee</td>
                                    <td>";
                // line 189
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["all_extra_participants"]) || array_key_exists("all_extra_participants", $context) ? $context["all_extra_participants"] : (function () { throw new RuntimeError('Variable "all_extra_participants" does not exist.', 189, $this->source); })())), "html", null, true);
                yield "</td>
                                    <td>&#8358;";
                // line 190
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["training"]) || array_key_exists("training", $context) ? $context["training"] : (function () { throw new RuntimeError('Variable "training" does not exist.', 190, $this->source); })()), "extrapersonnelamount", [], "any", false, false, false, 190)), "html", null, true);
                yield "</td>
                                    <td>&#8358;";
                // line 191
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, (isset($context["training"]) || array_key_exists("training", $context) ? $context["training"] : (function () { throw new RuntimeError('Variable "training" does not exist.', 191, $this->source); })()), "extrapersonnelamount", [], "any", false, false, false, 191) * (isset($context["all_extra_participants"]) || array_key_exists("all_extra_participants", $context) ? $context["all_extra_participants"] : (function () { throw new RuntimeError('Variable "all_extra_participants" does not exist.', 191, $this->source); })()))), "html", null, true);
                yield "</td>
                                </tr>

                            ";
            }
            // line 195
            yield "
                            <tr>
                                <td colspan=\"4\" class=\"text-right font-weight-600\">Total</td>
                                <td class=\"font-sm-4 text-success\">&#8358;";
            // line 198
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new RuntimeError('Variable "invoice" does not exist.', 198, $this->source); })()), "paymentamount", [], "any", false, false, false, 198)), "html", null, true);
            yield "</td>
                            </tr>

                        ";
        } else {
            // line 202
            yield "
                            <tr>
                                <td>1</td>
                                <td>Extra Participant(s) Registration Fee</td>
                                <td>";
            // line 206
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["participants_count"]) || array_key_exists("participants_count", $context) ? $context["participants_count"] : (function () { throw new RuntimeError('Variable "participants_count" does not exist.', 206, $this->source); })())), "html", null, true);
            yield "</td>
                                <td>&#8358;";
            // line 207
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["training"]) || array_key_exists("training", $context) ? $context["training"] : (function () { throw new RuntimeError('Variable "training" does not exist.', 207, $this->source); })()), "extrapersonnelamount", [], "any", false, false, false, 207)), "html", null, true);
            yield "</td>
                                <td>&#8358;";
            // line 208
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, (isset($context["training"]) || array_key_exists("training", $context) ? $context["training"] : (function () { throw new RuntimeError('Variable "training" does not exist.', 208, $this->source); })()), "extrapersonnelamount", [], "any", false, false, false, 208) * (isset($context["participants_count"]) || array_key_exists("participants_count", $context) ? $context["participants_count"] : (function () { throw new RuntimeError('Variable "participants_count" does not exist.', 208, $this->source); })()))), "html", null, true);
            yield "</td>
                            </tr>

                            <tr>
                                <td colspan=\"4\" class=\"text-right font-weight-600\">Total</td>
                                <td class=\"font-sm-4 text-success\">&#8358;";
            // line 213
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new RuntimeError('Variable "invoice" does not exist.', 213, $this->source); })()), "paymentamount", [], "any", false, false, false, 213)), "html", null, true);
            yield "</td>
                            </tr>

                        ";
        }
        // line 217
        yield "
                        </tbody>
                    </table>


                    ";
        // line 222
        if ((0 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new RuntimeError('Variable "invoice" does not exist.', 222, $this->source); })()), "paymentstatus", [], "any", false, false, false, 222), 0))) {
            // line 223
            yield "
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
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/pay_logo.png"), "html", null, true);
            yield "\" class=\"img-fluid mt-4 w-75\">

                    ";
        }
        // line 248
        yield "

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
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["invoice_log"]) || array_key_exists("invoice_log", $context) ? $context["invoice_log"] : (function () { throw new RuntimeError('Variable "invoice_log" does not exist.', 271, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 272
            yield "

                        <li class=\"list-group-item\">
                            ";
            // line 275
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["log"], "status", [], "any", false, false, false, 275), "html", null, true);
            yield "
                            <p class=\"text-primary\">by ";
            // line 276
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["log"], "userid", [], "any", false, false, false, 276), "username", [], "any", false, false, false, 276), "html", null, true);
            yield "</p>
                            <p class=\"font-gray font-xs\">";
            // line 277
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["log"], "date", [], "any", false, false, false, 277), "jS F, Y h:i:s a"), "html", null, true);
            yield "</p>
                        </li>





                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 285
        yield "                    </ul>
                </div>
            </div>

        </div>

    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin/view_invoice.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  519 => 285,  505 => 277,  501 => 276,  497 => 275,  492 => 272,  488 => 271,  463 => 248,  457 => 245,  433 => 223,  431 => 222,  424 => 217,  417 => 213,  409 => 208,  405 => 207,  401 => 206,  395 => 202,  388 => 198,  383 => 195,  376 => 191,  372 => 190,  368 => 189,  362 => 185,  360 => 184,  354 => 181,  350 => 180,  346 => 179,  337 => 173,  333 => 172,  326 => 167,  324 => 166,  307 => 152,  298 => 145,  292 => 142,  289 => 141,  287 => 140,  283 => 139,  278 => 136,  272 => 132,  270 => 131,  266 => 129,  264 => 128,  254 => 121,  250 => 120,  225 => 98,  220 => 97,  216 => 95,  212 => 93,  210 => 92,  203 => 88,  185 => 72,  182 => 71,  176 => 69,  174 => 68,  169 => 66,  165 => 65,  160 => 64,  158 => 63,  145 => 52,  135 => 45,  129 => 42,  125 => 41,  121 => 40,  107 => 28,  97 => 21,  93 => 20,  89 => 19,  75 => 7,  73 => 6,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin_base.html.twig' %}

{% block body %}


{% if invoice.paymentevidence == NULL %}
    <div class=\"card\">

        <div class=\"card-header bg-red font-white\">
            <h4>Payment evidence</h4>
        </div>

        <div class=\"card-body\">

            <div class=\"alert alert-danger\">Awaiting user to upload payment evidence</div>



                    {{ form_start(form) }}
                    {{ form_widget(form) }}
                    {{ form_end(form) }}


        </div>

    </div>
    {% else %}

        <div class=\"card\">

            <div class=\"card-header bg-success font-white\">
                <button class=\"btn float-right btn-xs btn-primary btn-xs mr-2\" onclick=\"printElem2('pay_evidence');\"><i class=\"fa fa-print\"></i> Print</button>
                <h4>Payment evidence</h4>
            </div>

            <div class=\"card-body\" id=\"pay_evidence\">

                <div class=\"bg-gray p-3\">
                    <p>Update payment evidence</p>
                    {{ form_start(form) }}
                    {{ form_widget(form) }}
                    {{ form_end(form) }}
                </div>

              <img src=\"{{ asset(invoice.paymentevidence) }}\" class=\"img-fluid\">

            </div>

        </div>

        {% endif %}



    <div class=\"card\">
        <div class=\"card-header bg-dark font-white\">

            <h2 CLASS=\"text-white float-left\">Confirm payment from MDA</h2>
            <div class=\"float-right d-flex\">
                <button class=\"btn btn-xs btn-primary btn-xs mr-2\" onclick=\"printElem2('letter');\"><i class=\"fa fa-print\"></i> Print</button>


                {% if invoice.paymentstatus == 0 %}
                    <a href=\"{{ path('admin_pay_invoice_undertaken', { 'id':invoice.id }) }}\" class=\"btn btn-xs btn-success mr-2\" onclick=\"return confirm('Are you sure you want to confirm this MDA will pay with Undertaken?')\"><i class=\"fa fa-file\"></i> Pay with Undertaken</a>
                    <a href=\"{{ path('admin_pay_invoice_cash', { 'id':invoice.id }) }}\" class=\"btn btn-xs btn-success mr-2\" onclick=\"return confirm('Are you sure you want to confirm this MDA paid cash?')\"><i class=\"fa fa-money\"></i> Paid with Cash</a>
                    <a href=\"{{ path('admin_pay_invoice_online', { 'id':invoice.id }) }}\" class=\"btn btn-xs btn-success mr-2\" onclick=\"return confirm('Are you sure you want to confirm this MDA made payment online?')\"><i class=\"fa fa-money\"></i> Paid Online</a>

                    {% if invoice.paymentevidence != NULL %}
                    <a href=\"{{ path('admin_pay_invoice_bank', { 'id':invoice.id }) }}\" class=\"btn btn-xs btn-success\"><i class=\"fa fa-institution\"></i> Paid by Bank transfer</a>
                        {% endif %}
                {% endif %}


            </div>
            Invoice
        </div>

        <div class=\"card-body p-5\">


            <div id=\"letter\">

                <div class=\"p-5\">

                    <div class=\"row\">

                        <div class=\"col-6\">
                            <img src=\"{{ asset('assets/images/logo.png') }}\" class=\"mb-5\" style=\"max-width: 300px\">

                            <h1 class=\"text-primary\">
            <span>
    {% if invoice.paymentstatus == 0 %}
        Invoice
    {% else %}
        Receipt
    {% endif %}
            </span> #{{ invoice.id }}</h1>
                            <p>{{ date }}</p>
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
                            <h4>{{ mda.name }}</h4>
                            <p>{{ mda.address }}</p>
                        </div>

                        <div class=\"col-8\">
                            <div class=\"text-right\">

                                <b>Payment status</b>
                                {% if invoice.paymentstatus == 0 %}
                                    <h2 class=\"font-lg-3 text-danger text-uppercase font-weight-700\">Not paid</h2>

                                {% elseif invoice.paymentstatus == 1 %}

                                    <h2 class=\"font-lg-3 text-success text-uppercase font-weight-700\">Paid</h2>

                                {% endif %}

                                <br>
                                <b>Payment method</b>
                                <p class=\"font-lg-3 text-uppercase font-weight-700\">{{ invoice.paymentmethod }}</p>
                                {% if invoice.paymentmethod == 'Online' %}

                                    Payment Reference: <span class=\"text-uppercase\">{{ invoice.paymentid }}</span>

                                {% endif %}


                            </div>
                        </div>

                    </div>

                    <h3 class=\"page-title mt-5 \">{{ training.title }}</h3>
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

                        {% if invoice.initialinvoice == 1 %}

                            <tr>
                                <td>1</td>
                                <td>MDA Registration Fee</td>
                                <td>1</td>
                                <td>&#8358;{{ training.registrationfee|number_format }}</td>
                                <td>&#8358;{{ training.registrationfee|number_format }}</td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>Participant(s) Registration Fee</td>
                                <td>{{ all_main_participants|number_format }}</td>
                                <td>&#8358;{{ training.individualamount|number_format }}</td>
                                <td>&#8358;{{ (training.individualamount * all_main_participants)|number_format }}</td>
                            </tr>

                            {% if all_extra_participants > 0 %}

                                <tr>
                                    <td>3</td>
                                    <td>Participant(s) Registration Fee</td>
                                    <td>{{ all_extra_participants|number_format }}</td>
                                    <td>&#8358;{{ training.extrapersonnelamount|number_format }}</td>
                                    <td>&#8358;{{ (training.extrapersonnelamount * all_extra_participants)|number_format }}</td>
                                </tr>

                            {% endif %}

                            <tr>
                                <td colspan=\"4\" class=\"text-right font-weight-600\">Total</td>
                                <td class=\"font-sm-4 text-success\">&#8358;{{ invoice.paymentamount|number_format }}</td>
                            </tr>

                        {% else %}

                            <tr>
                                <td>1</td>
                                <td>Extra Participant(s) Registration Fee</td>
                                <td>{{ participants_count|number_format }}</td>
                                <td>&#8358;{{ training.extrapersonnelamount|number_format }}</td>
                                <td>&#8358;{{ (training.extrapersonnelamount * participants_count)|number_format }}</td>
                            </tr>

                            <tr>
                                <td colspan=\"4\" class=\"text-right font-weight-600\">Total</td>
                                <td class=\"font-sm-4 text-success\">&#8358;{{ invoice.paymentamount|number_format }}</td>
                            </tr>

                        {% endif %}

                        </tbody>
                    </table>


                    {% if invoice.paymentstatus == 0 %}

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

                        <img src=\"{{ asset('assets/images/pay_logo.png') }}\" class=\"img-fluid mt-4 w-75\">

                    {% endif %}


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
                    {% for log in invoice_log %}


                        <li class=\"list-group-item\">
                            {{ log.status }}
                            <p class=\"text-primary\">by {{ log.userid.username }}</p>
                            <p class=\"font-gray font-xs\">{{ log.date|date('jS F, Y h:i:s a') }}</p>
                        </li>





                    {% endfor %}
                    </ul>
                </div>
            </div>

        </div>

    </div>

{% endblock %}", "admin/view_invoice.html.twig", "C:\\laragon\\www\\training\\templates\\admin\\view_invoice.html.twig");
    }
}
