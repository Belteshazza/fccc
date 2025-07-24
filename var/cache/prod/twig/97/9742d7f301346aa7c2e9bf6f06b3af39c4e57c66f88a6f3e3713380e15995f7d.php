<?php

/* common/user/my_trainings.html.twig */
class __TwigTemplate_ee66d807cc9fe12841255645a550e20a49850a50c71951ff05100cb5b3b015db extends Twig_Template
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
        echo "<table id=\"example\" class=\"datatable table display table-striped table-hover\" cellspacing=\"0\" width=\"100%\">
    <thead >
    <tr>
        <th>Title</th>
        <th>Venue</th>
        <th>Date</th>
        <th>Time</th>
        <th>Registration fee</th>
        <th>Individual amount</th>
        <th>Extra personel amount</th>
        <th>Individuals per MDA</th>
        <th>Options</th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["trainings_applied"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["training"]) {
            // line 17
            echo "        <tr>
            <td>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["training"], "title", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["training"], "venue", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["training"], "date", array()), "l, F j Y"), "html", null, true);
            echo "</td>
            <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["training"], "time", array()), "H:i:s"), "html", null, true);
            echo "</td>
            <td>&#8358;";
            // line 22
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["training"], "registrationfee", array())), "html", null, true);
            echo "</td>
            <td>&#8358;";
            // line 23
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["training"], "individualamount", array())), "html", null, true);
            echo "</td>
            <td>&#8358;";
            // line 24
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["training"], "extrapersonnelamount", array())), "html", null, true);
            echo "</td>
            <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["training"], "individualspermda", array()), "html", null, true);
            echo "</td>
            <td>
                <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_view_training", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["training"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-xs btn-primary\"><i class=\"fa fa-search\"></i> View</a>

            </td>
        </tr>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['training'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "    </tbody>
</table>";
    }

    public function getTemplateName()
    {
        return "common/user/my_trainings.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 33,  76 => 27,  71 => 25,  67 => 24,  63 => 23,  59 => 22,  55 => 21,  51 => 20,  47 => 19,  43 => 18,  40 => 17,  36 => 16,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "common/user/my_trainings.html.twig", "/home/federalc/public_html/training/templates/common/user/my_trainings.html.twig");
    }
}
