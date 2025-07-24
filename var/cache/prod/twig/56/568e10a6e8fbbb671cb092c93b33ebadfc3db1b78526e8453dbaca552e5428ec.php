<?php

/* user/account.html.twig */
class __TwigTemplate_2c4196c5b933bfac1fc57a93bb34a650965f24eaba93e96b475b9807129dbb02 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("user_base.html.twig", "user/account.html.twig", 1);
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_update_password");
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
        return "user/account.html.twig";
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
        return new Twig_Source("", "user/account.html.twig", "/home/federalc/public_html/training/templates/user/account.html.twig");
    }
}
