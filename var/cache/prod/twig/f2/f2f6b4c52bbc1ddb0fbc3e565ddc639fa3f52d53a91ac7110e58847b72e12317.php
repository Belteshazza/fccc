<?php

/* user/dashboard.html.twig */
class __TwigTemplate_134fb7ded2d11fdbdce6600f459999b5c8244150c3a7d6a8807fbeb179b6f47f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("user_base.html.twig", "user/dashboard.html.twig", 1);
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
    <section class=\"dashboard-counts p-0 m-0\">
        <div class=\"container-fluid p-0\">
            <div class=\"row bg-white has-shadow\">
                <!-- Item -->
                <div class=\"col-xl-4 col-sm-6\">
                    <div class=\"item p-0 d-flex align-items-center\">
                        <div class=\"icon bg-blue\"><i class=\"fa fa-book\"></i></div>
                        <div class=\"title font-sm-4\"><span>Available<br>Training</span></div>
                    <div class=\"number\"><strong>";
        // line 13
        echo twig_escape_filter($this->env, ($context["trainings_available"] ?? null), "html", null, true);
        echo "</strong></div>
                  </div>
                </div>

                <div class=\"col-xl-4 col-sm-6\">
                    <div class=\"item p-0 d-flex align-items-center\">
                        <div class=\"icon bg-orange\"><i class=\"fa fa-users\"></i></div>
                        <div class=\"title font-sm-4\"><span>Trainings<br>Applied For</span></div>
                        <div class=\"number\"><strong>";
        // line 21
        echo twig_escape_filter($this->env, ($context["trainings_applied"] ?? null), "html", null, true);
        echo "</strong></div>
                    </div>
                </div>

                <div class=\"col-xl-4 col-sm-6\">
                    <div class=\"item p-0 d-flex align-items-center\">
                        <div class=\"icon bg-red\"><i class=\"fa fa-money\"></i></div>
                        <div class=\"title font-sm-4\"><span>Pending<br>Invoice(s)</span></div>
                        <div class=\"number\"><strong>";
        // line 29
        echo twig_escape_filter($this->env, ($context["pending_invoice"] ?? null), "html", null, true);
        echo "</strong></div>
                    </div>
                </div>

              </div>
            </div>
          </section>


    <div class=\"row mt-5\">

        <div class=\"col-lg-6\">

            <div class=\"articles card\">

                <div class=\"card-header bg-dark font-white\">
                    Registered Participants
                </div>
                <div class=\"card-body p-0\">

                    ";
        // line 49
        if ((twig_length_filter($this->env, ($context["training_participants"] ?? null)) >= 1)) {
            // line 50
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["training_participants"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["participant"]) {
                // line 51
                echo "
                        <div class=\"item d-flex align-items-center\">
                            <div class=\"text\">
                                <div class=\"badge badge-success float-right\">";
                // line 54
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["participant"], "session_name", array()), "html", null, true);
                echo "</div>
                                <h5 class=\"font-weight-500\">";
                // line 55
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["participant"], "name", array()), "html", null, true);
                echo "</h5>
                                <small>";
                // line 56
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["participant"], "training_title", array()), "html", null, true);
                echo ".</small>

                            </div>
                        </div>


                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['participant'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "                        ";
        } else {
            // line 64
            echo "
                            <div class=\"text-center font-lg p-5\">
                                <p>No registered participant</p>

                            </div>

                            ";
        }
        // line 71
        echo "                </div>

            </div>

        </div>


    <div class=\"col-lg-6\">

        <div class=\"card\">

            <div class=\"card-header bg-dark font-white\">
                <h4>MDA</h4>
            </div>
            <div class=\"card-body\">

                <h2 class=\"font-lg\">";
        // line 87
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["mda"] ?? null), "name", array()), "html", null, true);
        echo "</h2>
                <p class=\"m-0\"><b class=\"text-primary\">MDA Code:</b> ";
        // line 88
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["mda"] ?? null), "mdacode", array()), "html", null, true);
        echo "</p>
                <p><b class=\"text-primary\">Address:</b> ";
        // line 89
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["mda"] ?? null), "address", array()), "html", null, true);
        echo "</p>

            </div>

        </div>

    </div>

    </div>

";
    }

    public function getTemplateName()
    {
        return "user/dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 89,  154 => 88,  150 => 87,  132 => 71,  123 => 64,  120 => 63,  107 => 56,  103 => 55,  99 => 54,  94 => 51,  89 => 50,  87 => 49,  64 => 29,  53 => 21,  42 => 13,  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "user/dashboard.html.twig", "/home/federalc/public_html/training/templates/user/dashboard.html.twig");
    }
}
