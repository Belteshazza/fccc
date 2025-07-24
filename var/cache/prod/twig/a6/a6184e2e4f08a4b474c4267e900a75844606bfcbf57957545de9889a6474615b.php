<?php

/* admin/participants_allowed.html.twig */
class __TwigTemplate_34bbf8de60609be01cab6f59cd64569c2b577f20978b48b5bcbd3d556485c727 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin_base.html.twig", "admin/participants_allowed.html.twig", 1);
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

  <div class=\"row\">

    <div class=\"col-md-6\">

        <div class=\"card\">


            <div class=\"card-body\">

            ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form');
        echo "

            </div>
        </div>

    </div>


      <div class=\"col-md-6\">

          <div class=\"card\">

              <div class=\"card-header bg-dark font-white\">
                  <h4>MDAs allowed to bring single participant</h4>
              </div>


              <div class=\"card-body\">

                  <ul class=\"list-group list-group-flush\">

                      ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["participants_allowed"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 37
            echo "
                          <li class=\"list-group-item\">
                              <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_delete_participant_allowed", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["data"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-xs btn-danger float-right\"><i class=\"fa fa-close\"></i> Delete</a>
                              <h4>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["data"], "mdaid", array()), "name", array()), "html", null, true);
            echo "</h4>
                              <p>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["data"], "trainingid", array()), "title", array()), "html", null, true);
            echo "</p>
                              <p class=\"font-xs font-gray\">Participants allowed: ";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["data"], "allowedparticipants", array()), "html", null, true);
            echo "</p>
                          </li>

                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "                  </ul>

              </div>
          </div>

      </div>

  </div>


";
    }

    public function getTemplateName()
    {
        return "admin/participants_allowed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 46,  88 => 42,  84 => 41,  80 => 40,  76 => 39,  72 => 37,  68 => 36,  44 => 15,  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/participants_allowed.html.twig", "/home/federalc/public_html/training/templates/admin/participants_allowed.html.twig");
    }
}
