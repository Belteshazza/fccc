<?php

/* access/login.html.twig */
class __TwigTemplate_e293be257a937cb12bbbc8d51f9d392b8cb76ff78245a9d116d6ed16d1377de1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("access_base.html.twig", "access/login.html.twig", 1);
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

        ";
        // line 7
        if (($context["error"] ?? null)) {
            // line 8
            echo "            <script>
                toastr.error(\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), ($context["error"] ?? null), "messageKey", array()), twig_get_attribute($this->env, $this->getSourceContext(), ($context["error"] ?? null), "messageData", array()), "security"), "html", null, true);
            echo "\");
            </script>

        ";
        }
        // line 13
        echo "
        <div class=\"col-lg-5 mx-auto\">



            <div class=\"p-4\">
                <h4 class=\"mb-5\">Sign In</h4>
                <form action=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\" method=\"POST\">
                    <div class=\"form-group\">
                        <label>Email</label>
                        <input type=\"text\" id=\"username\" class=\"form-control form-control-lg\" name=\"_username\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
        echo "\" />

                    </div>

                    <div class=\"form-group\">
                        <label>Password</label>
                        <input type=\"password\" name=\"_password\" class=\"form-control form-control-lg\">

                    </div>

                    <button class=\"btn btn-primary btn-block\">Login</button>
                </form>

                <p class=\"hline font-xs font-gray mb-4 mt-4\"> OR </p>

                <p class=\"text-center\">Click <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("verify_mda");
        echo "\">here</a> to register as an MDA Admin</p>

            </div>

        </div>

    </div>

";
    }

    public function getTemplateName()
    {
        return "access/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 38,  63 => 23,  57 => 20,  48 => 13,  41 => 9,  38 => 8,  36 => 7,  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "access/login.html.twig", "/home/federalc/public_html/training/templates/access/login.html.twig");
    }
}
