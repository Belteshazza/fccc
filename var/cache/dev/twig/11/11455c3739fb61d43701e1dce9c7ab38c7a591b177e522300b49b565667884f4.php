<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* admin/admin_users.html.twig */
class __TwigTemplate_09ba31a7f545f17174e6ad3e4747ff2176baf4b27e8bfc3aec5ec54025b29d59 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin_users.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin_users.html.twig"));

        $this->parent = $this->loadTemplate("admin_base.html.twig", "admin/admin_users.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        yield "

  <div class=\"row\">

    <div class=\"col-md-6\">

        <div class=\"card\">

            <div class=\"card-header bg-dark font-white\">
                <h4>Add new user</h4>
            </div>

            <div class=\"card-body\">

            ";
        // line 18
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), 'form');
        yield "

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
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["admin_users"]) || array_key_exists("admin_users", $context) ? $context["admin_users"] : (function () { throw new RuntimeError('Variable "admin_users" does not exist.', 39, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 40
            yield "
                          <li class=\"list-group-item\">
                              <a href=\"";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_delete_user", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 42)]), "html", null, true);
            yield "\" class=\"btn btn-xs btn-danger float-right\"><i class=\"fa fa-close\"></i> Delete User</a>
                              <a href=\"";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_edit_user", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 43)]), "html", null, true);
            yield "\" class=\"btn btn-xs btn-warning float-right\"><i class=\"fa fa-pencil\"></i> Edit User</a>
                              <h4>";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 44), "html", null, true);
            yield "</h4>
                              <p class=\"font-xs font-gray\">";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 45), "html", null, true);
            yield "</p>
                          </li>

                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        yield "                  </ul>

              </div>
          </div>

      </div>

  </div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin/admin_users.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  139 => 49,  129 => 45,  125 => 44,  121 => 43,  117 => 42,  113 => 40,  109 => 39,  85 => 18,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin_base.html.twig' %}

{% block body %}


  <div class=\"row\">

    <div class=\"col-md-6\">

        <div class=\"card\">

            <div class=\"card-header bg-dark font-white\">
                <h4>Add new user</h4>
            </div>

            <div class=\"card-body\">

            {{ form(form) }}

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

                      {% for user in admin_users %}

                          <li class=\"list-group-item\">
                              <a href=\"{{ path('admin_delete_user', { 'id':user.id }) }}\" class=\"btn btn-xs btn-danger float-right\"><i class=\"fa fa-close\"></i> Delete User</a>
                              <a href=\"{{ path('admin_edit_user', { 'id':user.id }) }}\" class=\"btn btn-xs btn-warning float-right\"><i class=\"fa fa-pencil\"></i> Edit User</a>
                              <h4>{{ user.username }}</h4>
                              <p class=\"font-xs font-gray\">{{ user.email }}</p>
                          </li>

                      {% endfor %}
                  </ul>

              </div>
          </div>

      </div>

  </div>


{% endblock %}", "admin/admin_users.html.twig", "C:\\laragon\\www\\training\\templates\\admin\\admin_users.html.twig");
    }
}
