<?php

/* admin/training_session.html.twig */
class __TwigTemplate_124284da31d4b7b79dbdab8de8f040becdea374ba59e84ea756bbe6f5a1fe9e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin_base.html.twig", "admin/training_session.html.twig", 1);
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
    <div class=\"float-right mb-4\">
        <a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_view_training", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), ($context["training"] ?? null), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-xs btn-warning mt-1\"><i class=\"fa fa-chevron-circle-left\"></i> Back to training</a>

    </div>
    <div class=\"clearfix\"></div>
    <div class=\"card\">
        <div class=\"card-header bg-dark text-white font-white p-3 font-sm-4\">
            ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["training"] ?? null), "title", array()), "html", null, true);
        echo "
        </div>
        <div class=\"card-body \">
            <h3>";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["training_session"] ?? null), "name", array()), "html", null, true);
        echo "</h3>
        </div>


    </div>

    <div class=\"text-center text-danger mx-auto p-3\">Calculations are based on participants/MDAs that attended</div>
    <div class=\"row text-white text-center\">



    <div class=\"col-md-4\">

        <div class=\"card\">
            <div class=\"card-body text-center text-white bg-dark font-white\">
                <b class=\"text-uppercase font-xs\">Total expected payments</b>
                <p class=\"font-lg m-0\">&#8358;";
        // line 31
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["total_expected"] ?? null)), "html", null, true);
        echo "</p>
            </div>
        </div>

    </div>

    <div class=\"col-md-4\">

        <div class=\"card\">
            <div class=\"card-body text-center text-white bg-dark font-white\">
                <b class=\"text-uppercase font-xs\">Total payments received</b>
                <p class=\"font-lg m-0\">&#8358;";
        // line 42
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["total_paid"] ?? null)), "html", null, true);
        echo "</p>
            </div>
        </div>

    </div>

    <div class=\"col-md-4\">

        <div class=\"card\">
            <div class=\"card-body bg-dark text-center text-white font-white\">
                <b class=\"text-uppercase font-xs\">Total outstanding payments</b>
                <p class=\"font-lg m-0\">&#8358;";
        // line 53
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["total_outstanding"] ?? null)), "html", null, true);
        echo "</p>
            </div>
        </div>

    </div>
    </div>


    <div class=\"card\">
        <div class=\"card-header \">
            <ul class=\"nav nav-pills nav-fill\" id=\"pills-tab\" role=\"tablist\">
                <li class=\"nav-item\">
                    <a class=\"nav-link active\" id=\"pills-registered-tab\" data-toggle=\"pill\" href=\"#pills-registered\" role=\"tab\" aria-controls=\"pills-home\" aria-selected=\"true\">Registered participants</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" id=\"pills-attended-tab\" data-toggle=\"pill\" href=\"#pills-attended\" role=\"tab\" aria-controls=\"pills-profile\" aria-selected=\"false\">Participants who attended</a>
                </li>

            </ul>
        </div>

        <div class=\"card-body\">

            <div class=\"tab-content\" id=\"pills-tabContent\">
                <div class=\"tab-pane fade show active\" id=\"pills-registered\" role=\"tabpanel\" aria-labelledby=\"pills-home-tab\">


                    <table id=\"example\" class=\"datatable table display table-bordered table-striped table-hover\" cellspacing=\"0\" width=\"100%\">
                        <thead >
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>MDA</th>
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
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["training_participants"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["participant"]) {
            // line 97
            echo "                            <tr>
                                <td>";
            // line 98
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["participant"], "name", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 99
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["participant"], "email", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 100
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["participant"], "phone", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 101
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["participant"], "mda", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 102
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["participant"], "session", array()), "html", null, true);
            echo "</td>
                                <td>
                                    ";
            // line 104
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["participant"], "attended", array()) == 0)) {
                // line 105
                echo "
                                        No
                                    ";
            } else {
                // line 108
                echo "
                                        Yes

                                    ";
            }
            // line 112
            echo "                                </td>
                                <td>";
            // line 113
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["participant"], "date", array()), "jS F, Y"), "html", null, true);
            echo "</td>
                                <td>
                                    ";
            // line 115
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["participant"], "payment_status", array()) == 0)) {
                // line 116
                echo "
                                        <span class=\"text-danger\">Not paid</span>

                                    ";
            } else {
                // line 120
                echo "
                                        <span class=\"text-success\">Paid</span>

                                    ";
            }
            // line 124
            echo "                                </td>
                                <td>#";
            // line 125
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["participant"], "invoice_id", array()), "html", null, true);
            echo "</td>
                                <td>

                                    ";
            // line 128
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["participant"], "payment_status", array()) == 0)) {
                // line 129
                echo "
                                        <a href=\"";
                // line 130
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_view_invoice", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["participant"], "invoice_id", array()))), "html", null, true);
                echo "\" class=\"btn btn-primary btn-xs\"><i class=\"fa fa-file-o\"></i> View invoice</a>

                                    ";
            }
            // line 133
            echo "                                </td>
                            </tr>

                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['participant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 137
        echo "                        </tbody>
                    </table>


                </div>
                <div class=\"tab-pane fade\" id=\"pills-attended\" role=\"tabpanel\" aria-labelledby=\"pills-profile-tab\">


                    <table id=\"example\" class=\"datatable table display table-bordered table-striped table-hover\" cellspacing=\"0\" width=\"100%\">
                        <thead >
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>MDA</th>
                            <th>Session</th>
                            <th>Attended</th>
                            <th>Payment status</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 158
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["attended_participants"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["participant"]) {
            // line 159
            echo "                            <tr>
                                <td>";
            // line 160
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["participant"], "name", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 161
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["participant"], "email", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 162
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["participant"], "phone", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 163
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["participant"], "mda", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 164
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["participant"], "session", array()), "html", null, true);
            echo "</td>
                                <td>
                                    ";
            // line 166
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["participant"], "attended", array()) == 0)) {
                // line 167
                echo "
                                        No
                                    ";
            } else {
                // line 170
                echo "
                                        Yes

                                    ";
            }
            // line 174
            echo "                                </td>
                                <td>
                                    ";
            // line 176
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["participant"], "payment_status", array()) == 0)) {
                // line 177
                echo "
                                        <span class=\"text-danger\">Not paid</span>

                                    ";
            } else {
                // line 181
                echo "
                                        <span class=\"text-success\">Paid</span>

                                    ";
            }
            // line 185
            echo "                                </td>

                            </tr>

                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['participant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 190
        echo "                        </tbody>
                    </table>

                </div>

            </div>

        </div>

    </div>






";
    }

    public function getTemplateName()
    {
        return "admin/training_session.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  327 => 190,  317 => 185,  311 => 181,  305 => 177,  303 => 176,  299 => 174,  293 => 170,  288 => 167,  286 => 166,  281 => 164,  277 => 163,  273 => 162,  269 => 161,  265 => 160,  262 => 159,  258 => 158,  235 => 137,  226 => 133,  220 => 130,  217 => 129,  215 => 128,  209 => 125,  206 => 124,  200 => 120,  194 => 116,  192 => 115,  187 => 113,  184 => 112,  178 => 108,  173 => 105,  171 => 104,  166 => 102,  162 => 101,  158 => 100,  154 => 99,  150 => 98,  147 => 97,  143 => 96,  97 => 53,  83 => 42,  69 => 31,  50 => 15,  44 => 12,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/training_session.html.twig", "/home/federalc/public_html/training/templates/admin/training_session.html.twig");
    }
}
