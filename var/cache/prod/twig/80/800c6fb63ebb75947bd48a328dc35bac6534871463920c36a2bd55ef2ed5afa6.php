<?php

/* common/admin/training_participant.html.twig */
class __TwigTemplate_1a7984754eb36cbb9159363b56f6341116508fd5ca07a604bdbdde840244ffe8 extends Twig_Template
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
        echo "<div class=\"card\">
    <div class=\"card-header \">
        <ul class=\"nav nav-pills nav-fill\" id=\"pills-tab\" role=\"tablist\">
            <li class=\"nav-item\">
                <a class=\"nav-link active\" id=\"pills-registered-tab\" data-toggle=\"pill\" href=\"#pills-registered\" role=\"tab\" aria-controls=\"pills-home\" aria-selected=\"true\">Registered participants</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" id=\"pills-attended-tab\" data-toggle=\"pill\" href=\"#pills-attended\" role=\"tab\" aria-controls=\"pills-profile\" aria-selected=\"false\">Participants who attended</a>
            </li>

            <li class=\"nav-item\">
                <a class=\"nav-link\" id=\"pills-notregistered-tab\" data-toggle=\"pill\" href=\"#pills-notregistered\" role=\"tab\" aria-controls=\"pills-notregistered\" aria-selected=\"false\">MDA's that didn't attend</a>
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
                        <th>Payment status</th>
                        <th>Invoice</th>
                        <th>Options</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["training_participants"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["participant"]) {
            // line 40
            echo "                        <tr>
                            <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["participant"], "name", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["participant"], "email", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["participant"], "phone", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["participant"], "mda", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["participant"], "session", array()), "html", null, true);
            echo "</td>
                            <td>
                                ";
            // line 47
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["participant"], "attended", array()) == 0)) {
                // line 48
                echo "
                                    No
                                ";
            } else {
                // line 51
                echo "
                                    Yes

                                ";
            }
            // line 55
            echo "                            </td>
                            <td>
                                ";
            // line 57
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["participant"], "payment_status", array()) == 0)) {
                // line 58
                echo "
                                    <span class=\"text-danger\">Not paid</span>

                                ";
            } else {
                // line 62
                echo "
                                    <span class=\"text-success\">Paid</span>

                                ";
            }
            // line 66
            echo "                            </td>
                            <td>#";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["participant"], "invoice_id", array()), "html", null, true);
            echo "</td>
                            <td>

                                ";
            // line 70
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["participant"], "payment_status", array()) == 0)) {
                // line 71
                echo "
                                    <a href=\"";
                // line 72
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_view_invoice", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["participant"], "invoice_id", array()))), "html", null, true);
                echo "\" class=\"btn btn-primary btn-xs\"><i class=\"fa fa-file-o\"></i> View invoice</a>

                                ";
            }
            // line 75
            echo "
                                <a href=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_edit_participant", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["participant"], "id", array()), "training_id" => twig_get_attribute($this->env, $this->getSourceContext(), ($context["training"] ?? null), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-warning btn-xs mt-2\"><i class=\"fa fa-pencil\"></i></a>
                                <a href=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_delete_participant", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["participant"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger btn-xs mt-2\"><i class=\"fa fa-close\"></i></a>

                                ";
            // line 79
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["participant"], "attended", array()) == 0)) {
                // line 80
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_mark_participant_attended", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["participant"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-success btn-xs mt-2\">Mark as attended</a>
                                ";
            } else {
                // line 82
                echo "                                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_mark_participant_not_attended", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["participant"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-danger btn-xs mt-2\">Mark as not attended</a>
                                ";
            }
            // line 84
            echo "
                            </td>
                        </tr>

                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['participant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "                    </tbody>
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
        // line 110
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["attended_participants"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["participant"]) {
            // line 111
            echo "                        <tr>
                            <td>";
            // line 112
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["participant"], "name", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 113
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["participant"], "email", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 114
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["participant"], "phone", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 115
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["participant"], "mda", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 116
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["participant"], "session", array()), "html", null, true);
            echo "</td>
                            <td>
                                ";
            // line 118
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["participant"], "attended", array()) == 0)) {
                // line 119
                echo "
                                    No
                                ";
            } else {
                // line 122
                echo "
                                    Yes

                                ";
            }
            // line 126
            echo "                            </td>
                            <td>
                                ";
            // line 128
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["participant"], "payment_status", array()) == 0)) {
                // line 129
                echo "
                                    <span class=\"text-danger\">Not paid</span>

                                ";
            } else {
                // line 133
                echo "
                                    <span class=\"text-success\">Paid</span>

                                ";
            }
            // line 137
            echo "                            </td>

                        </tr>

                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['participant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 142
        echo "                    </tbody>
                </table>

            </div>

            <div class=\"tab-pane fade\" id=\"pills-notregistered\" role=\"tabpanel\" aria-labelledby=\"pills-notregistered-tab\">


                <table id=\"example\" class=\"datatable table display table-bordered table-striped table-hover\" cellspacing=\"0\" width=\"100%\">
                    <thead >
                    <tr>
                        <th>MDA Name</th>
                        <th>MDA Code</th>
                        <th>Email</th>
                        <th>Phone</th>

                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 161
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["not_attended_mdas"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["mda"]) {
            // line 162
            echo "                        <tr>
                            <td>";
            // line 163
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["mda"], "name", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 164
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["mda"], "mda_code", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 165
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["mda"], "email", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 166
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["mda"], "phone", array()), "html", null, true);
            echo "</td>


                        </tr>

                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mda'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 172
        echo "                    </tbody>
                </table>

            </div>

        </div>

    </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "common/admin/training_participant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  318 => 172,  306 => 166,  302 => 165,  298 => 164,  294 => 163,  291 => 162,  287 => 161,  266 => 142,  256 => 137,  250 => 133,  244 => 129,  242 => 128,  238 => 126,  232 => 122,  227 => 119,  225 => 118,  220 => 116,  216 => 115,  212 => 114,  208 => 113,  204 => 112,  201 => 111,  197 => 110,  174 => 89,  164 => 84,  158 => 82,  152 => 80,  150 => 79,  145 => 77,  141 => 76,  138 => 75,  132 => 72,  129 => 71,  127 => 70,  121 => 67,  118 => 66,  112 => 62,  106 => 58,  104 => 57,  100 => 55,  94 => 51,  89 => 48,  87 => 47,  82 => 45,  78 => 44,  74 => 43,  70 => 42,  66 => 41,  63 => 40,  59 => 39,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "common/admin/training_participant.html.twig", "/home/federalc/public_html/training/templates/common/admin/training_participant.html.twig");
    }
}
