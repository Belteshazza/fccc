<?php

/* user/trainings.html.twig */
class __TwigTemplate_d2a2e5a32731f01a0446489188f6d962f481791e42b6a8a91265b8b483485e95 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("user_base.html.twig", "user/trainings.html.twig", 1);
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
            <ul class=\"nav nav-pills nav-fill\" id=\"pills-tab\" role=\"tablist\">
                <li class=\"nav-item\">
                    <a class=\"nav-link active\" id=\"pills-home-tab\" data-toggle=\"pill\" href=\"#pills-home\" role=\"tab\" aria-controls=\"pills-home\" aria-selected=\"true\">Trainings applied for (";
        // line 10
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["trainings_applied"] ?? null)), "html", null, true);
        echo ")</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" id=\"pills-profile-tab\" data-toggle=\"pill\" href=\"#pills-profile\" role=\"tab\" aria-controls=\"pills-profile\" aria-selected=\"false\">Available trainings (";
        // line 13
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["trainings"] ?? null)), "html", null, true);
        echo ")</a>
                </li>

            </ul>
        </div>

        <div class=\"card-body\">
            <div class=\"tab-content\" id=\"pills-tabContent\">
                <div class=\"tab-pane fade show active\" id=\"pills-home\" role=\"tabpanel\" aria-labelledby=\"pills-home-tab\">
                    ";
        // line 22
        $this->loadTemplate("common/user/my_trainings.html.twig", "user/trainings.html.twig", 22)->display($context);
        // line 23
        echo "                </div>
                <div class=\"tab-pane fade\" id=\"pills-profile\" role=\"tabpanel\" aria-labelledby=\"pills-profile-tab\">
                    ";
        // line 25
        $this->loadTemplate("common/user/all_trainings.html.twig", "user/trainings.html.twig", 25)->display($context);
        // line 26
        echo "                </div>

            </div>
        </div>


    </div>

";
    }

    public function getTemplateName()
    {
        return "user/trainings.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 26,  63 => 25,  59 => 23,  57 => 22,  45 => 13,  39 => 10,  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "user/trainings.html.twig", "/home/federalc/public_html/training/templates/user/trainings.html.twig");
    }
}
