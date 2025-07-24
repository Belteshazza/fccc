<?php

/* admin/admin_users.html.twig */
class __TwigTemplate_2b3ba038dd266385e61c61ed28324a950f9a1122402d8de2d6058bbb42c49818 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin_base.html.twig", "admin/admin_users.html.twig", 1);
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

            <div class=\"card-header bg-dark font-white\">
                <h4>Add new user</h4>
            </div>

            <div class=\"card-body\">

            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form');
        echo "

            </div>
        </div>

    </div>


      <div class=\"col-md-6\">

          <div class=\"card\">

              <div class=\"card-header bg-dark font-white\">
                  <h4>Admin users</h4>
              </div>


              <div class=\"card-body\">

                  <ul class=\"list-group list-group-flush\">

                      ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["admin_users"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 40
            echo "
                          <li class=\"list-group-item\">
                              <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_delete_user", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-xs btn-danger float-right\"><i class=\"fa fa-close\"></i> Delete User</a>
                              <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_edit_user", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-xs btn-warning float-right\"><i class=\"fa fa-pencil\"></i> Edit User</a>
                              <h4>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "username", array()), "html", null, true);
            echo "</h4>
                              <p class=\"font-xs font-gray\">";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "email", array()), "html", null, true);
            echo "</p>
                          </li>

                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "                  </ul>

              </div>
          </div>

      </div>

  </div>


";
    }

    public function getTemplateName()
    {
        return "admin/admin_users.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 49,  91 => 45,  87 => 44,  83 => 43,  79 => 42,  75 => 40,  71 => 39,  47 => 18,  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/admin_users.html.twig", "/home/federalc/public_html/training/templates/admin/admin_users.html.twig");
    }
}
