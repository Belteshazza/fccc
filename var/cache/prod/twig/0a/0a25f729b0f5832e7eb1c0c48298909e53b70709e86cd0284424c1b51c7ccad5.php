<?php

/* admin/view_training.html.twig */
class __TwigTemplate_ccd2fd153386c13abe63c6307a4c470657c911542fb7eab7898582dfc3a3b269 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin_base.html.twig", "admin/view_training.html.twig", 1);
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
    <div class=\"float-right mb-4\">
    <a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_edit_training", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), ($context["training"] ?? null), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-xs btn-warning mt-1\"><i class=\"fa fa-pencil\"></i> Edit</a>
    <a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_delete_training", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), ($context["training"] ?? null), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-xs btn-danger mt-1\"><i class=\"fa fa-pencil\"></i> Delete</a>
    </div>

    <div class=\"clearfix\"></div>
    <div class=\"card\">
        <div class=\"card-header bg-dark text-white font-white p-3 font-sm-4\">
            ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["training"] ?? null), "title", array()), "html", null, true);
        echo "
        </div>
    <div class=\"card-body \">
        <ul class=\"nav nav-pills nav-fill\" id=\"pills-tab\" role=\"tablist\">
            <li class=\"nav-item\">
                <a class=\"nav-link active\" id=\"pills-home-tab\" data-toggle=\"pill\" href=\"#pills-home\" role=\"tab\" aria-controls=\"pills-home\" aria-selected=\"true\">Details</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" id=\"pills-profile-tab\" data-toggle=\"pill\" href=\"#pills-profile\" role=\"tab\" aria-controls=\"pills-profile\" aria-selected=\"false\">Sessions</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" id=\"pills-contact-tab\" data-toggle=\"pill\" href=\"#pills-contact\" role=\"tab\" aria-controls=\"pills-contact\" aria-selected=\"false\">Financials</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" id=\"pills-participants-tab\" data-toggle=\"pill\" href=\"#pills-participants\" role=\"tab\" aria-controls=\"pills-participants\" aria-selected=\"false\">Participants/MDAs</a>
            </li>

        </ul>
    </div>


    </div>



    <ul class=\"nav nav-pills mb-3\" id=\"pills-tab\" role=\"tablist\">

    </ul>
    <div class=\"tab-content\" id=\"pills-tabContent\">
        <div class=\"tab-pane fade show active\" id=\"pills-home\" role=\"tabpanel\" aria-labelledby=\"pills-home-tab\">
            ";
        // line 43
        $this->loadTemplate("common/admin/training_details.html.twig", "admin/view_training.html.twig", 43)->display($context);
        // line 44
        echo "        </div>
        <div class=\"tab-pane fade\" id=\"pills-profile\" role=\"tabpanel\" aria-labelledby=\"pills-profile-tab\">
            ";
        // line 46
        $this->loadTemplate("common/admin/training_session.html.twig", "admin/view_training.html.twig", 46)->display($context);
        // line 47
        echo "        </div>
        <div class=\"tab-pane fade\" id=\"pills-contact\" role=\"tabpanel\" aria-labelledby=\"pills-contact-tab\">
            ";
        // line 49
        $this->loadTemplate("common/admin/training_financials.html.twig", "admin/view_training.html.twig", 49)->display($context);
        // line 50
        echo "        </div>
        <div class=\"tab-pane fade\" id=\"pills-participants\" role=\"tabpanel\" aria-labelledby=\"pills-contact-tab\">
            ";
        // line 52
        $this->loadTemplate("common/admin/training_participant.html.twig", "admin/view_training.html.twig", 52)->display($context);
        // line 53
        echo "        </div>
    </div>






";
    }

    public function getTemplateName()
    {
        return "admin/view_training.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 53,  99 => 52,  95 => 50,  93 => 49,  89 => 47,  87 => 46,  83 => 44,  81 => 43,  48 => 13,  39 => 7,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/view_training.html.twig", "/home/federalc/public_html/training/templates/admin/view_training.html.twig");
    }
}
