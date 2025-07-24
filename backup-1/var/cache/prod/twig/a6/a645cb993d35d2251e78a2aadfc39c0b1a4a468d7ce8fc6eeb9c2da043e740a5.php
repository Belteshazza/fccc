<?php

/* admin/dashboard.html.twig */
class __TwigTemplate_8ce3256f40a623610b824d0e93fe137103d84208c5209e5324714a36245b4bdb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin_base.html.twig", "admin/dashboard.html.twig", 1);
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
    <section class=\"dashboard-counts p-0 mb-5\">
        <div class=\"container-fluid p-0\">
            <div class=\"row bg-white has-shadow\">
                <!-- Item -->
                <div class=\"col-xl-4 col-sm-6\">
                    <div class=\"item p-0 d-flex align-items-center\">
                        <div class=\"icon bg-blue\"><i class=\"fa fa-book\"></i></div>
                        <div class=\"title font-sm-4\"><span>Available<br>Trainings</span></div>
                        <div class=\"number\"><strong>";
        // line 13
        echo twig_escape_filter($this->env, ($context["all_trainings"] ?? null), "html", null, true);
        echo "</strong></div>
                    </div>
                </div>

                <div class=\"col-xl-4 col-sm-6\">
                    <div class=\"item p-0 d-flex align-items-center\">
                        <div class=\"icon bg-orange\"><i class=\"fa fa-users\"></i></div>
                        <div class=\"title font-sm-4\"><span>MDAs</span></div>
                        <div class=\"number\"><strong>";
        // line 21
        echo twig_escape_filter($this->env, ($context["all_mdas"] ?? null), "html", null, true);
        echo "</strong></div>
                    </div>
                </div>

                <div class=\"col-xl-4 col-sm-6\">
                    <div class=\"item p-0 d-flex align-items-center\">
                        <div class=\"icon bg-red\"><i class=\"fa fa-user\"></i></div>
                        <div class=\"title font-sm-4\"><span>MDA<br>Admins</span></div>
                        <div class=\"number\"><strong>";
        // line 29
        echo twig_escape_filter($this->env, ($context["all_mda_admins"] ?? null), "html", null, true);
        echo "</strong></div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <div class=\"row\">


        <div class=\"col-md-6\">

            <div class=\"card\">
                <div class=\"card-body text-center bg-dark font-white\">
                    <b class=\"text-uppercase font-xs\">Total expected payments</b>
                    <p class=\"font-lg m-0\">&#8358;";
        // line 46
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["total_payment"] ?? null)), "html", null, true);
        echo "</p>
                </div>
            </div>

        </div>

        <div class=\"col-md-6\">

            <div class=\"card\">
                <div class=\"card-body bg-dark text-center font-white\">
                    <b class=\"text-uppercase font-xs\">Total outstanding payments</b>
                    <p class=\"font-lg m-0\">&#8358;";
        // line 57
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["total_outstanding_payment"] ?? null)), "html", null, true);
        echo "</p>
                </div>
            </div>

        </div>

        <div class=\"col-md-3\">

            <div class=\"card\">
                <div class=\"card-body bg-orange font-white\">
                    <b class=\"text-uppercase font-xs\">Total online payments</b>
                    <p class=\"font-lg m-0\">&#8358;";
        // line 68
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["total_online_payment"] ?? null)), "html", null, true);
        echo "</p>
                </div>
            </div>

        </div>
        <div class=\"col-md-3\">

            <div class=\"card\">
                <div class=\"card-body bg-green font-white\">
                    <b class=\"text-uppercase font-xs\">Total cash payments</b>
                    <p class=\"font-lg m-0\">&#8358;";
        // line 78
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["total_cash_payment"] ?? null)), "html", null, true);
        echo "</p>
                </div>
            </div>

        </div>
        <div class=\"col-md-3\">

            <div class=\"card\">
                <div class=\"card-body bg-blue font-white\">
                    <b class=\"text-uppercase font-xs\">Total bank payments</b>
                    <p class=\"font-lg m-0\">&#8358;";
        // line 88
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["total_bank_payment"] ?? null)), "html", null, true);
        echo "</p>
                </div>
            </div>

        </div>
        <div class=\"col-md-3\">

            <div class=\"card\">
                <div class=\"card-body bg-red font-white\">
                    <b class=\"text-uppercase font-xs\">Total undertaken</b>
                    <p class=\"font-lg m-0\">&#8358;";
        // line 98
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["total_undertaken_payment"] ?? null)), "html", null, true);
        echo "</p>
                </div>
            </div>

        </div>

    </div>

";
    }

    public function getTemplateName()
    {
        return "admin/dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 98,  138 => 88,  125 => 78,  112 => 68,  98 => 57,  84 => 46,  64 => 29,  53 => 21,  42 => 13,  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/dashboard.html.twig", "/home/federalc/public_html/training/templates/admin/dashboard.html.twig");
    }
}
