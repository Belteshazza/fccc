<?php

/* access/verify_mda.html.twig */
class __TwigTemplate_1cc520f814d15bd2e182d2851a893c3996708f0bb472e8147ee6ddf55726c8f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("access_base.html.twig", "access/verify_mda.html.twig", 1);
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
                <h4 class=\"mb-5\">Verify MDA Information</h4>
                ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
                ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
                ";
        // line 14
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "


                ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "session", array()), "flashbag", array()), "get", array(0 => "mda_name"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 18
            echo "
                    <div class=\"text-center border border_radius mt-3 bg-gray p-3\">
                        ";
            // line 20
            if (($context["flashMessage"] != "MDA Not Found")) {
                // line 21
                echo "                        <p class=\"m-0\">MDA Name:</p>
                        ";
            }
            // line 23
            echo "                   <h4>";
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "</h4>
                    ";
            // line 24
            if (($context["flashMessage"] != "MDA Not Found")) {
                // line 25
                echo "                        ";
                if ((($context["result"] ?? null) <= 0)) {
                    // line 26
                    echo "
                            <a href=\"";
                    // line 27
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register", array("mda_code" => ($context["last_code"] ?? null))), "html", null, true);
                    echo "\">Register for this MDA</a>

                            ";
                } else {
                    // line 30
                    echo "
                            <p class=\"text-danger m-0\">Another admin user is registered for this MDA. Please send an email to fcctraining@pglnigeria.com for more information</p>

                        ";
                }
                // line 34
                echo "                    ";
            }
            // line 35
            echo "                    </div>




                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "


                <p class=\"hline font-gray margin_20-top margin_20-bottom\"> OR </p>


                <div class=\"text-center\">
                    Click <a href='";
        // line 48
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
        return "access/verify_mda.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 48,  108 => 41,  97 => 35,  94 => 34,  88 => 30,  82 => 27,  79 => 26,  76 => 25,  74 => 24,  69 => 23,  65 => 21,  63 => 20,  59 => 18,  55 => 17,  49 => 14,  45 => 13,  41 => 12,  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "access/verify_mda.html.twig", "/home/federalc/public_html/training/templates/access/verify_mda.html.twig");
    }
}
