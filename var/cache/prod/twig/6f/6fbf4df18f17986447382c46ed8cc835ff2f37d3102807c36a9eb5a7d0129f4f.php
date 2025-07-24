<?php

/* common/admin/training_details.html.twig */
class __TwigTemplate_134f5cdec6cccaa4c367b4301a25dfb95e316ebc1058570e680bd6fb2b0e859d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"card\">
    <ul class=\"list-group list-group-flush\">
        <li class=\"list-group-item\">
            <b>Venue:</b> ";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["training"] ?? null), "venue", array()), "html", null, true);
        echo "
        </li>

        <li class=\"list-group-item\">
            <b>Date:</b> ";
        // line 8
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["training"] ?? null), "date", array()), "l, F j Y"), "html", null, true);
        echo "
        </li>

        <li class=\"list-group-item\">
            <b>Time:</b> ";
        // line 12
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["training"] ?? null), "time", array()), "H:i:s"), "html", null, true);
        echo "
        </li>

        <li class=\"list-group-item\">
            <b>Venue:</b> ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["training"] ?? null), "venue", array()), "html", null, true);
        echo "
        </li>

        <li class=\"list-group-item\">
            <b>MDA Registration Fee:</b> &#8358;";
        // line 20
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["training"] ?? null), "registrationfee", array())), "html", null, true);
        echo "
        </li>

         <li class=\"list-group-item\">
            <b>Individual Amount:</b> &#8358;";
        // line 24
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["training"] ?? null), "individualamount", array())), "html", null, true);
        echo "
        </li>

        <li class=\"list-group-item\">
            <b>Extra personnel Amount:</b> &#8358;";
        // line 28
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["training"] ?? null), "extrapersonnelamount", array())), "html", null, true);
        echo "
        </li>

        <li class=\"list-group-item\">
            <b>Individuals per MDA:</b> ";
        // line 32
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["training"] ?? null), "individualspermda", array())), "html", null, true);
        echo "
        </li>

    </ul>


</div>";
    }

    public function getTemplateName()
    {
        return "common/admin/training_details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 32,  66 => 28,  59 => 24,  52 => 20,  45 => 16,  38 => 12,  31 => 8,  24 => 4,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "common/admin/training_details.html.twig", "/home/federalc/public_html/training/templates/common/admin/training_details.html.twig");
    }
}
