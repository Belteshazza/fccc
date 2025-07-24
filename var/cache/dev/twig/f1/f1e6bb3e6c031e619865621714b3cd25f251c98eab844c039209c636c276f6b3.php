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

/* user/view_invoice.html.twig */
class __TwigTemplate_6df3ee91c7d72a2bd14818f02cb30b90511af1b82fd6435273282d3ee0f8ed42 extends Template
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
        return "user_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/view_invoice.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/view_invoice.html.twig"));

        $this->parent = $this->loadTemplate("user_base.html.twig", "user/view_invoice.html.twig", 1);
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
        // line 5
        if ((0 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new RuntimeError('Variable "invoice" does not exist.', 5, $this->source); })()), "paymentevidence", [], "any", false, false, false, 5), null))) {
            // line 6
            yield "        <div class=\"card\">

            <div class=\"card-header bg-red font-white\">
                <h4>Upload payment evidence</h4>
            </div>

            <div class=\"card-body\">

                ";
            // line 14
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), 'form_start');
            yield "
                ";
            // line 15
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), 'widget');
            yield "
                ";
            // line 16
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), 'form_end');
            yield "

            </div>

        </div>
    ";
        } else {
            // line 22
            yield "
        <div class=\"card\">

            <div class=\"card-header bg-success font-white\">
                <button class=\"btn float-right btn-xs btn-primary btn-xs mr-2\" onclick=\"printElem2('pay_evidence');\"><i class=\"fa fa-print\"></i> Print</button>
                <h4>Payment evidence</h4>
            </div>

            <div class=\"card-body\" id=\"pay_evidence\">

                <img src=\"";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new RuntimeError('Variable "invoice" does not exist.', 32, $this->source); })()), "paymentevidence", [], "any", false, false, false, 32)), "html", null, true);
            yield "\" class=\"img-fluid\">

            </div>

        </div>

    ";
        }
        // line 39
        yield "

    <div class=\"card\">
        <div class=\"card-header bg-dark font-white\">
            <div class=\"float-right d-flex\">
                <button class=\"btn btn-primary btn-xs mr-2\" onclick=\"printElem('letter');\"><i class=\"fa fa-print\"></i> Print</button>

    ";
        // line 46
        if ((0 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new RuntimeError('Variable "invoice" does not exist.', 46, $this->source); })()), "paymentevidence", [], "any", false, false, false, 46), null))) {
            // line 47
            yield "    ";
            if ((0 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new RuntimeError('Variable "invoice" does not exist.', 47, $this->source); })()), "paymentstatus", [], "any", false, false, false, 47), 0))) {
                // line 48
                yield "                <form action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("verify_invoice_online_payment", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new RuntimeError('Variable "invoice" does not exist.', 48, $this->source); })()), "id", [], "any", false, false, false, 48)]), "html", null, true);
                yield "\" method=\"POST\" class=\"bottom_buffer\">

                    <button class='btn btn-info btn-xs' id=\"paystack_pay\">Pay Online</button>
                    <script
                            src=\"https://js.paystack.co/v1/inline.js\"
                            data-key=\"pk_live_23b02ce39ed67434180d01a95154d6411e9fa4ee\"
                            data-email=\"";
                // line 54
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 54, $this->source); })()), "email", [], "any", false, false, false, 54), "html", null, true);
                yield "\"
                            data-amount=\"";
                // line 55
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new RuntimeError('Variable "invoice" does not exist.', 55, $this->source); })()), "paymentamount", [], "any", false, false, false, 55), "html", null, true);
                yield "00\"
                            data-ref=\"";
                // line 56
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["payment_id"]) || array_key_exists("payment_id", $context) ? $context["payment_id"] : (function () { throw new RuntimeError('Variable "payment_id" does not exist.', 56, $this->source); })()), "html", null, true);
                yield "\"
                            data-custom-button = \"paystack_pay\">

                    </script>
                </form>
        ";
            }
            // line 62
            yield "    ";
        }
        // line 63
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
        // line 78
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo.png"), "html", null, true);
        yield "\" class=\"mb-5\" style=\"max-width: 300px\">

        <h1 class=\"text-primary\">
            <span>
    ";
        // line 82
        if ((0 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new RuntimeError('Variable "invoice" does not exist.', 82, $this->source); })()), "paymentstatus", [], "any", false, false, false, 82), 0))) {
            // line 83
            yield "                Invoice
        ";
        } else {
            // line 85
            yield "        Receipt
        ";
        }
        // line 87
        yield "            </span> #";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new RuntimeError('Variable "invoice" does not exist.', 87, $this->source); })()), "id", [], "any", false, false, false, 87), "html", null, true);
        yield "</h1>
        <p>";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 88, $this->source); })()), "html", null, true);
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
        // line 110
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["mda"]) || array_key_exists("mda", $context) ? $context["mda"] : (function () { throw new RuntimeError('Variable "mda" does not exist.', 110, $this->source); })()), "name", [], "any", false, false, false, 110), "html", null, true);
        yield "</h4>
                        <p>";
        // line 111
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["mda"]) || array_key_exists("mda", $context) ? $context["mda"] : (function () { throw new RuntimeError('Variable "mda" does not exist.', 111, $this->source); })()), "address", [], "any", false, false, false, 111), "html", null, true);
        yield "</p>
                    </div>

                    <div class=\"col-8\">
                        <div class=\"text-right\">

                            <b>Payment status</b>
                            ";
        // line 118
        if ((0 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new RuntimeError('Variable "invoice" does not exist.', 118, $this->source); })()), "paymentstatus", [], "any", false, false, false, 118), 0))) {
            // line 119
            yield "                            <h2 class=\"font-lg-3 text-danger text-uppercase font-weight-700\">Not paid</h2>

                                ";
        } elseif ((0 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source,         // line 121
(isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new RuntimeError('Variable "invoice" does not exist.', 121, $this->source); })()), "paymentstatus", [], "any", false, false, false, 121), 1))) {
            // line 122
            yield "
                                    <h2 class=\"font-lg-3 text-success text-uppercase font-weight-700\">Paid</h2>

                                ";
        }
        // line 126
        yield "
                            <br>
                            <b>Payment method</b>
                            <p class=\"font-lg-3 text-uppercase font-weight-700\">";
        // line 129
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new RuntimeError('Variable "invoice" does not exist.', 129, $this->source); })()), "paymentmethod", [], "any", false, false, false, 129), "html", null, true);
        yield "</p>
                            ";
        // line 130
        if ((0 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new RuntimeError('Variable "invoice" does not exist.', 130, $this->source); })()), "paymentmethod", [], "any", false, false, false, 130), "Online"))) {
            // line 131
            yield "
                                Payment Reference: <span class=\"text-uppercase\">";
            // line 132
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new RuntimeError('Variable "invoice" does not exist.', 132, $this->source); })()), "paymentid", [], "any", false, false, false, 132), "html", null, true);
            yield "</span>

                            ";
        }
        // line 135
        yield "

                        </div>
                    </div>

                </div>

                    <h3 class=\"page-title mt-5 \">";
        // line 142
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["training"]) || array_key_exists("training", $context) ? $context["training"] : (function () { throw new RuntimeError('Variable "training" does not exist.', 142, $this->source); })()), "title", [], "any", false, false, false, 142), "html", null, true);
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
        // line 156
        if ((0 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new RuntimeError('Variable "invoice" does not exist.', 156, $this->source); })()), "initialinvoice", [], "any", false, false, false, 156), 1))) {
            // line 157
            yield "
                    <tr>
                        <td>1</td>
                        <td>MDA Registration Fee</td>
                        <td>1</td>
                        <td>&#8358;";
            // line 162
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["training"]) || array_key_exists("training", $context) ? $context["training"] : (function () { throw new RuntimeError('Variable "training" does not exist.', 162, $this->source); })()), "registrationfee", [], "any", false, false, false, 162)), "html", null, true);
            yield "</td>
                        <td>&#8358;";
            // line 163
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["training"]) || array_key_exists("training", $context) ? $context["training"] : (function () { throw new RuntimeError('Variable "training" does not exist.', 163, $this->source); })()), "registrationfee", [], "any", false, false, false, 163)), "html", null, true);
            yield "</td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>Participant(s) Registration Fee</td>
                        <td>";
            // line 169
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["all_main_participants"]) || array_key_exists("all_main_participants", $context) ? $context["all_main_participants"] : (function () { throw new RuntimeError('Variable "all_main_participants" does not exist.', 169, $this->source); })())), "html", null, true);
            yield "</td>
                        <td>&#8358;";
            // line 170
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["training"]) || array_key_exists("training", $context) ? $context["training"] : (function () { throw new RuntimeError('Variable "training" does not exist.', 170, $this->source); })()), "individualamount", [], "any", false, false, false, 170)), "html", null, true);
            yield "</td>
                        <td>&#8358;";
            // line 171
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, (isset($context["training"]) || array_key_exists("training", $context) ? $context["training"] : (function () { throw new RuntimeError('Variable "training" does not exist.', 171, $this->source); })()), "individualamount", [], "any", false, false, false, 171) * (isset($context["all_main_participants"]) || array_key_exists("all_main_participants", $context) ? $context["all_main_participants"] : (function () { throw new RuntimeError('Variable "all_main_participants" does not exist.', 171, $this->source); })()))), "html", null, true);
            yield "</td>
                    </tr>

                        ";
            // line 174
            if ((1 === CoreExtension::compare((isset($context["all_extra_participants"]) || array_key_exists("all_extra_participants", $context) ? $context["all_extra_participants"] : (function () { throw new RuntimeError('Variable "all_extra_participants" does not exist.', 174, $this->source); })()), 0))) {
                // line 175
                yield "
                            <tr>
                                <td>3</td>
                                <td>Participant(s) Registration Fee</td>
                                <td>";
                // line 179
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["all_extra_participants"]) || array_key_exists("all_extra_participants", $context) ? $context["all_extra_participants"] : (function () { throw new RuntimeError('Variable "all_extra_participants" does not exist.', 179, $this->source); })())), "html", null, true);
                yield "</td>
                                <td>&#8358;";
                // line 180
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["training"]) || array_key_exists("training", $context) ? $context["training"] : (function () { throw new RuntimeError('Variable "training" does not exist.', 180, $this->source); })()), "extrapersonnelamount", [], "any", false, false, false, 180)), "html", null, true);
                yield "</td>
                                <td>&#8358;";
                // line 181
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, (isset($context["training"]) || array_key_exists("training", $context) ? $context["training"] : (function () { throw new RuntimeError('Variable "training" does not exist.', 181, $this->source); })()), "extrapersonnelamount", [], "any", false, false, false, 181) * (isset($context["all_extra_participants"]) || array_key_exists("all_extra_participants", $context) ? $context["all_extra_participants"] : (function () { throw new RuntimeError('Variable "all_extra_participants" does not exist.', 181, $this->source); })()))), "html", null, true);
                yield "</td>
                            </tr>

                        ";
            }
            // line 185
            yield "
                    <tr>
                        <td colspan=\"4\" class=\"text-right font-weight-600\">Total</td>
                        <td class=\"font-sm-4 text-success\">&#8358;";
            // line 188
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new RuntimeError('Variable "invoice" does not exist.', 188, $this->source); })()), "paymentamount", [], "any", false, false, false, 188)), "html", null, true);
            yield "</td>
                    </tr>

                        ";
        } else {
            // line 192
            yield "
                            <tr>
                                <td>1</td>
                                <td>Extra Participant(s) Registration Fee</td>
                                <td>";
            // line 196
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["participants_count"]) || array_key_exists("participants_count", $context) ? $context["participants_count"] : (function () { throw new RuntimeError('Variable "participants_count" does not exist.', 196, $this->source); })())), "html", null, true);
            yield "</td>
                                <td>&#8358;";
            // line 197
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["training"]) || array_key_exists("training", $context) ? $context["training"] : (function () { throw new RuntimeError('Variable "training" does not exist.', 197, $this->source); })()), "extrapersonnelamount", [], "any", false, false, false, 197)), "html", null, true);
            yield "</td>
                                <td>&#8358;";
            // line 198
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, (isset($context["training"]) || array_key_exists("training", $context) ? $context["training"] : (function () { throw new RuntimeError('Variable "training" does not exist.', 198, $this->source); })()), "extrapersonnelamount", [], "any", false, false, false, 198) * (isset($context["participants_count"]) || array_key_exists("participants_count", $context) ? $context["participants_count"] : (function () { throw new RuntimeError('Variable "participants_count" does not exist.', 198, $this->source); })()))), "html", null, true);
            yield "</td>
                            </tr>

                            <tr>
                                <td colspan=\"4\" class=\"text-right font-weight-600\">Total</td>
                                <td class=\"font-sm-4 text-success\">&#8358;";
            // line 203
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new RuntimeError('Variable "invoice" does not exist.', 203, $this->source); })()), "paymentamount", [], "any", false, false, false, 203)), "html", null, true);
            yield "</td>
                            </tr>

                        ";
        }
        // line 207
        yield "
                    </tbody>
                </table>


    ";
        // line 212
        if ((0 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new RuntimeError('Variable "invoice" does not exist.', 212, $this->source); })()), "paymentstatus", [], "any", false, false, false, 212), 0))) {
            // line 213
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
            // line 235
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/pay_logo.png"), "html", null, true);
            yield "\" class=\"img-fluid mt-4 w-75\">

";
        }
        // line 238
        yield "

            </div>
            </div>

        </div>






        </ul>

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
        return "user/view_invoice.html.twig";
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
        return array (  444 => 238,  438 => 235,  414 => 213,  412 => 212,  405 => 207,  398 => 203,  390 => 198,  386 => 197,  382 => 196,  376 => 192,  369 => 188,  364 => 185,  357 => 181,  353 => 180,  349 => 179,  343 => 175,  341 => 174,  335 => 171,  331 => 170,  327 => 169,  318 => 163,  314 => 162,  307 => 157,  305 => 156,  288 => 142,  279 => 135,  273 => 132,  270 => 131,  268 => 130,  264 => 129,  259 => 126,  253 => 122,  251 => 121,  247 => 119,  245 => 118,  235 => 111,  231 => 110,  206 => 88,  201 => 87,  197 => 85,  193 => 83,  191 => 82,  184 => 78,  167 => 63,  164 => 62,  155 => 56,  151 => 55,  147 => 54,  137 => 48,  134 => 47,  132 => 46,  123 => 39,  113 => 32,  101 => 22,  92 => 16,  88 => 15,  84 => 14,  74 => 6,  72 => 5,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'user_base.html.twig' %}

{% block body %}

    {% if invoice.paymentevidence == NULL %}
        <div class=\"card\">

            <div class=\"card-header bg-red font-white\">
                <h4>Upload payment evidence</h4>
            </div>

            <div class=\"card-body\">

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

                <img src=\"{{ asset(invoice.paymentevidence) }}\" class=\"img-fluid\">

            </div>

        </div>

    {% endif %}


    <div class=\"card\">
        <div class=\"card-header bg-dark font-white\">
            <div class=\"float-right d-flex\">
                <button class=\"btn btn-primary btn-xs mr-2\" onclick=\"printElem('letter');\"><i class=\"fa fa-print\"></i> Print</button>

    {% if invoice.paymentevidence == NULL %}
    {% if invoice.paymentstatus == 0 %}
                <form action=\"{{ path('verify_invoice_online_payment', { 'id':invoice.id }) }}\" method=\"POST\" class=\"bottom_buffer\">

                    <button class='btn btn-info btn-xs' id=\"paystack_pay\">Pay Online</button>
                    <script
                            src=\"https://js.paystack.co/v1/inline.js\"
                            data-key=\"pk_live_23b02ce39ed67434180d01a95154d6411e9fa4ee\"
                            data-email=\"{{ user.email }}\"
                            data-amount=\"{{ invoice.paymentamount }}00\"
                            data-ref=\"{{ payment_id }}\"
                            data-custom-button = \"paystack_pay\">

                    </script>
                </form>
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






        </ul>

    </div>

{% endblock %}", "user/view_invoice.html.twig", "C:\\laragon\\www\\training\\templates\\user\\view_invoice.html.twig");
    }
}
