<?php

/* access/register.html.twig */
class __TwigTemplate_a18e7475e72044ecbe363007959f73f32b4763b29c894bcb26dbb57cc88f55b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("access_base.html.twig", "access/register.html.twig", 1);
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
                <h4 class=\"mb-5\">Register MDA</h4>
                ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
                ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
                ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "





                <p class=\"hline font-gray margin_20-top margin_20-bottom\"> OR </p>


                <div class=\"text-center\">
                    Click <a href='";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "'>here</a> login to your account
                </div>
            </div>

        </div>

    </div>

";
    }

    public function getTemplateName()
    {
        return "access/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 28,  53 => 18,  49 => 17,  45 => 16,  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "access/register.html.twig", "/home/federalc/public_html/training/templates/access/register.html.twig");
    }
}
