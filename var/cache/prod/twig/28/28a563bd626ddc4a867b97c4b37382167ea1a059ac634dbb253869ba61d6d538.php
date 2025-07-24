<?php

/* common/admin/training_session.html.twig */
class __TwigTemplate_c4b7f329a664b4b9e89d640b798aa6473777c7e9077cca0a71108761080637fa extends Twig_Template
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

    <div class=\"card-body\">


        ";
        // line 6
        if ((twig_length_filter($this->env, ($context["training_sessions"] ?? null)) == 0)) {
            // line 7
            echo "

            <div class=\"text-center  font-weight-100 p-5 font-gray\">

                <img src=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/close.png"), "html", null, true);
            echo "\">
                <p class=\"font-lg mt-3\">No training session found.</p>
                <a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_add_training_session", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), ($context["training"] ?? null), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-success mt-3\"><i class=\"fa fa-plus\"></i> Add new session</a>

            </div>

            ";
        } else {
            // line 18
            echo "

               <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_add_training_session", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), ($context["training"] ?? null), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary mb-3\"><i class=\"fa fa-plus\"></i> Add Session</a>

                <table id=\"example\" class=\"datatable table display table-bordered table-striped table-hover\" cellspacing=\"0\" width=\"100%\">
                    <thead >
                    <tr>
                        <th>Session name</th>
                        <th>Start date</th>
                        <th>End date</th>
                        <th>Capacity</th>
                        <th>Status</th>
                        <th>Options</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["training_sessions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["session"]) {
                // line 35
                echo "                        <tr>
                            <td>";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["session"], "name", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 37
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["session"], "startdate", array()), "l, F j Y"), "html", null, true);
                echo "</td>
                            <td>";
                // line 38
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["session"], "enddate", array()), "l, F j Y"), "html", null, true);
                echo "</td>
                            <td>";
                // line 39
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["session"], "registered", array())), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["session"], "capacity", array())), "html", null, true);
                echo "</td>
                            <td>

                                ";
                // line 42
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["session"], "status", array()) == 0)) {
                    // line 43
                    echo "
                                    <span class=\"text-danger\">Registration closed</span>



                                ";
                } elseif ((twig_get_attribute($this->env, $this->getSourceContext(),                 // line 48
$context["session"], "status", array()) == 1)) {
                    // line 49
                    echo "
                                    <span class=\"text-success\">Registration open</span>

                                ";
                } elseif ((twig_get_attribute($this->env, $this->getSourceContext(),                 // line 52
$context["session"], "status", array()) == 2)) {
                    // line 53
                    echo "
                                    <span class=\"text-primary\">Registration full</span>

                                ";
                }
                // line 57
                echo "                            </td>

                            <td>
                                <a href=\"";
                // line 60
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_training_session", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["session"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-xs btn-primary mb-1\"><i class=\"fa fa-users\"></i> View participants</a>
                                ";
                // line 61
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["session"], "status", array()) == "1")) {
                    // line 62
                    echo "                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_close_training_session", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["session"], "id", array()))), "html", null, true);
                    echo "\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-exclamation-circle\"></i> Close registration</a>
                                    <a href=\"";
                    // line 63
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_edit_training_session", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["session"], "id", array()))), "html", null, true);
                    echo "\" class=\"btn btn-warning btn-xs\"><i class=\"fa fa-pencil\"></i> Edit</a>
                                ";
                } elseif (((twig_get_attribute($this->env, $this->getSourceContext(),                 // line 64
$context["session"], "status", array()) == "0") || (twig_get_attribute($this->env, $this->getSourceContext(), $context["session"], "status", array()) == 2))) {
                    // line 65
                    echo "                                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_open_training_session", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["session"], "id", array()))), "html", null, true);
                    echo "\" class=\"btn btn-success btn-xs\"><i class=\"fa fa-check-circle\"></i> Open registration</a>
                                ";
                }
                // line 67
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_delete_training_session", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["session"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-close\"></i> Delete session</a>
                            </td>
                        </tr>

                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['session'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "                    </tbody>
                </table>


        ";
        }
        // line 77
        echo "

    </div>

</div>";
    }

    public function getTemplateName()
    {
        return "common/admin/training_session.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 77,  159 => 72,  147 => 67,  141 => 65,  139 => 64,  135 => 63,  130 => 62,  128 => 61,  124 => 60,  119 => 57,  113 => 53,  111 => 52,  106 => 49,  104 => 48,  97 => 43,  95 => 42,  87 => 39,  83 => 38,  79 => 37,  75 => 36,  72 => 35,  68 => 34,  51 => 20,  47 => 18,  39 => 13,  34 => 11,  28 => 7,  26 => 6,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "common/admin/training_session.html.twig", "/home/federalc/public_html/training/templates/common/admin/training_session.html.twig");
    }
}
