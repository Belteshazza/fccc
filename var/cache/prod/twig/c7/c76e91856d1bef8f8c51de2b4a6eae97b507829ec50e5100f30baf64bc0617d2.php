<?php

/* admin/account.html.twig */
class __TwigTemplate_09a17d68862063ec225e33c7ba40c45715c037cf3f5d5bbdfbfeb7a1935466d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin_base.html.twig", "admin/account.html.twig", 1);
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

    <div class=\"card\">

        <div class=\"card-header bg-dark font-white\">
            <h4>Update my information</h4>
        </div>

        <div class=\"card-body\">

            ";
        // line 14
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
            ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "

        </div>
    </div>


    <div class=\"card\">

        <div class=\"card-header bg-dark font-white\">
            <h4>Update password</h4>
        </div>

        <div class=\"card-body\">


            <form action=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_update_password");
        echo "\" method=\"POST\">

                <div class=\"form-group\">
                <label>Current password</label>
            <input type=\"password\" name=\"current_password\" class=\"form-control\">

                </div>

                <div class=\"form-group\">
                    <label>New password</label>
                    <input type=\"password\" name=\"new_password\" class=\"form-control\">

                </div>

                <div class=\"form-group\">
                    <label>Confirm new password</label>
                    <input type=\"password\" name=\"confirm_password\" class=\"form-control\">

                </div>


                <button class=\"btn btn-success btn-block\">Update</button>

            </form>



        </div>
    </div>


";
    }

    public function getTemplateName()
    {
        return "admin/account.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 31,  51 => 16,  47 => 15,  43 => 14,  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/account.html.twig", "/home/federalc/public_html/training/templates/admin/account.html.twig");
    }
}
