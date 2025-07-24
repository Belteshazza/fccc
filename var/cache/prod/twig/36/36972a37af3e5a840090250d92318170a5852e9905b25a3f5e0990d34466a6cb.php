<?php

/* access/reset_password.html.twig */
class __TwigTemplate_f7ba85e32e243dda627ff04841dd54df0fc091fe111f851cb78fcefa829b4989 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("access_base.html.twig", "access/reset_password.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "access_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
    <div class=\"row p-4\">



        <div class=\"col-lg-5 mx-auto\">



            <div class=\"p-4\">
                <h4 class=\"mb-5\">Reset Password</h4>
                ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form');
        echo "

                <div class=\"text-center p-3\">
                <a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\">Click here to Login</a>
                </div>

                <p class=\"hline font-xs font-gray mb-4 mt-4\"> OR </p>

                <p class=\"text-center\">Click <a href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("verify_mda");
        echo "\">here</a> to register as an MDA Admin</p>

            </div>

        </div>

    </div>

";
    }

    public function getTemplateName()
    {
        return "access/reset_password.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 23,  50 => 18,  44 => 15,  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "access/reset_password.html.twig", "/home/federalc/public_html/training/templates/access/reset_password.html.twig");
    }
}
