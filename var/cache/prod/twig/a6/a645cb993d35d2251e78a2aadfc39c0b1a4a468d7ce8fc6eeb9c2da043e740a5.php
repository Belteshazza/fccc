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
                    <a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_training");
        echo "\"><div class=\"item p-0 d-flex align-items-center\">
                        <div class=\"icon bg-blue\"><i class=\"fa fa-book\"></i></div>
                        <div class=\"title font-sm-4\"><span>Available<br>Trainings</span></div>
                        <div class=\"number\"><strong>";
        // line 13
        echo twig_escape_filter($this->env, ($context["all_trainings"] ?? null), "html", null, true);
        echo "</strong></div>
                    </div></a>
                </div>

                <div class=\"col-xl-4 col-sm-6\">
                    <a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_mda");
        echo "\"><div class=\"item p-0 d-flex align-items-center\">
                        <div class=\"icon bg-orange\"><i class=\"fa fa-users\"></i></div>
                        <div class=\"title font-sm-4\"><span>MDAs</span></div>
                        <div class=\"number\"><strong>";
        // line 21
        echo twig_escape_filter($this->env, ($context["all_mdas"] ?? null), "html", null, true);
        echo "</strong></div>
                        </div></a>
                </div>

                <div class=\"col-xl-4 col-sm-6\">
                    <a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_participants");
        echo "\"> <div class=\"item p-0 d-flex align-items-center\">
                        <div class=\"icon bg-red\"><i class=\"fa fa-user\"></i></div>
                        <div class=\"title font-sm-4\"><span>MDA<br>Admins</span></div>
                        <div class=\"number\"><strong>";
        // line 29
        echo twig_escape_filter($this->env, ($context["all_mda_admins"] ?? null), "html", null, true);
        echo "</strong></div>
                        </div></a>
                </div>

            </div>
        </div>
    </section>


    <div class=\"row\">


        <div class=\"col-md-4\">

            <div class=\"card\">
                <div class=\"card-body text-center bg-dark text-white font-white\">
                    <b class=\"text-uppercase font-xs\">Total expected payments</b>
                    <p class=\"font-lg m-0 font-white\">&#8358;";
        // line 46
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["total_payment"] ?? null)), "html", null, true);
        echo "</p>
                </div>
            </div>

        </div>

        <div class=\"col-md-4\">

            <div class=\"card\">
                <div class=\"card-body text-center text-white bg-dark font-white\">
                    <b class=\"text-uppercase font-xs\">Total payments received</b>
                    <p class=\"font-lg m-0\">&#8358;";
        // line 57
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((($context["total_online_payment"] ?? null) + ($context["total_cash_payment"] ?? null)) + ($context["total_bank_payment"] ?? null))), "html", null, true);
        echo "</p>
                </div>
            </div>

        </div>

        <div class=\"col-md-4\">

            <div class=\"card\">
                <div class=\"card-body bg-dark text-center text-white font-white\">
                    <b class=\"text-uppercase font-xs\">Total outstanding payments</b>
                    <p class=\"font-lg m-0\">&#8358;";
        // line 68
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["total_outstanding_payment"] ?? null)), "html", null, true);
        echo "</p>
                </div>
            </div>

        </div>

        <div class=\"col-md-4\">

            <div class=\"card\">
                <div class=\"card-body bg-orange font-white text-white\">
                    <b class=\"text-uppercase font-xs\">Total online payments</b>
                    <p class=\"font-lg m-0\">&#8358;";
        // line 79
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["total_online_payment"] ?? null)), "html", null, true);
        echo "</p>
                </div>
            </div>

        </div>
        <div class=\"col-md-4\">

            <div class=\"card\">
                <div class=\"card-body bg-green font-white\">
                    <b class=\"text-uppercase font-xs\">Total cash payments</b>
                    <p class=\"font-lg m-0\">&#8358;";
        // line 89
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["total_cash_payment"] ?? null)), "html", null, true);
        echo "</p>
                </div>
            </div>

        </div>
        <div class=\"col-md-4\">

            <div class=\"card\">
                <div class=\"card-body bg-blue font-white\">
                    <b class=\"text-uppercase font-xs\">Total bank payments</b>
                    <p class=\"font-lg m-0\">&#8358;";
        // line 99
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["total_bank_payment"] ?? null)), "html", null, true);
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
        return array (  161 => 99,  148 => 89,  135 => 79,  121 => 68,  107 => 57,  93 => 46,  73 => 29,  67 => 26,  59 => 21,  53 => 18,  45 => 13,  39 => 10,  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/dashboard.html.twig", "/home/federalc/public_html/training/templates/admin/dashboard.html.twig");
    }
}
