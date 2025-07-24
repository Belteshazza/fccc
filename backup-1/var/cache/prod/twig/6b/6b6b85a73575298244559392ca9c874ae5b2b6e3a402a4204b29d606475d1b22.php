<?php

/* user/apply_training.html.twig */
class __TwigTemplate_0504ae839524fdee4ff9c49a2a63aef2365210a80ce2ea7d76fa274264f2d58c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("user_base.html.twig", "user/apply_training.html.twig", 1);
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

    <div class=\"row\">


        <div class=\"col-md-9\">

    <div class=\"card\">

        <div class=\"card-header bg-dark font-white\">
            <h4>Apply for ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["training"] ?? null), "title", array()), "html", null, true);
        echo "</h4>
        </div>

        <div class=\"card-body\">


            <form action=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_training_apply", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), ($context["training"] ?? null), "id", array()))), "html", null, true);
        echo "\" method=\"POST\">

                <div class=\"form-group\">
                    <label>Select a session</label>
                    <select required=\"required\" name=\"training_session\" class=\"form-control\">
                        <option disabled selected value=\"\">-- Select a session --</option>
                        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["training_sessions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["session"]) {
            // line 27
            echo "
                            <option value=\"";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["session"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["session"], "name", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["session"], "startdate", array()), "d M, Y"), "html", null, true);
            echo " till ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["session"], "enddate", array()), "d M, Y"), "html", null, true);
            echo "</option>

                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['session'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "                    </select>
                </div>

                <hr>

                <a style=\"cursor: pointer\" class=\"float-right font-white btn btn-xs btn-success\" id=\"add_participant\"><i class=\"fa fa-plus\"></i> Add another participant</a>

                <h4 class=\"mb-4\">Add participants</h4>

                <div id=\"training_form_participants\">

                    <div class=\"bg-gray p-3 mb-3\">
                <div class=\"form-group\">
                    <label>Participant name</label>
                    <input type=\"text\" class=\"form-control\" required=\"required\" name=\"participants[]\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "firstname", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "lastname", array()), "html", null, true);
        echo "\">
                </div>

                    <div class=\"form-group\">
                        <label>Participant email</label>
                        <input type=\"email\" class=\"form-control\" required=\"required\" name=\"participants_email[]\">
                    </div>

                <div class=\"form-group\">
                    <label>Participant phone</label>
                    <input type=\"text\" class=\"form-control\" onkeypress=\"return isNumber(event)\" name=\"participants_phone[]\">
                </div>
                    </div>

                </div>



                <button class=\"btn btn-primary\">Submit</button>

            </form>

        </div>

    </div>

        </div>

    <div class=\"col-md-3\">


            <h4><i class=\"fa fa-info-circle\"></i> Organization registration fee</h4>
            &#8358;";
        // line 77
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["training"] ?? null), "registrationfee", array())), "html", null, true);
        echo "

        <h4 class=\"mt-3\"><i class=\"fa fa-info-circle\"></i> Each participant fee</h4>
        &#8358;";
        // line 80
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["training"] ?? null), "individualamount", array())), "html", null, true);
        echo "

        <h4 class=\"mt-3\"><i class=\"fa fa-info-circle\"></i> Each extra personnel fee (after ";
        // line 82
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["training"] ?? null), "individualspermda", array()), "html", null, true);
        echo " participants)</h4>
        &#8358;";
        // line 83
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["training"] ?? null), "extrapersonnelamount", array())), "html", null, true);
        echo "


    </div>


    </div>


";
    }

    public function getTemplateName()
    {
        return "user/apply_training.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 83,  147 => 82,  142 => 80,  136 => 77,  99 => 45,  83 => 31,  68 => 28,  65 => 27,  61 => 26,  52 => 20,  43 => 14,  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "user/apply_training.html.twig", "/home/federalc/public_html/training/templates/user/apply_training.html.twig");
    }
}
