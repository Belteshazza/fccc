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

/* admin/participants_allowed.html.twig */
class __TwigTemplate_607c8d2a6d15b2231746eff2ccf38571b5661d317e9ae4688185f96dc8608d8c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/participants_allowed.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/participants_allowed.html.twig"));

        $this->parent = $this->loadTemplate("admin_base.html.twig", "admin/participants_allowed.html.twig", 1);
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


            <div class=\"card-body\">

            ";
        // line 15
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), 'form');
        yield "

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
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["participants_allowed"]) || array_key_exists("participants_allowed", $context) ? $context["participants_allowed"] : (function () { throw new RuntimeError('Variable "participants_allowed" does not exist.', 36, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 37
            yield "
                          <li class=\"list-group-item\">
                              <a href=\"";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_delete_participant_allowed", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["data"], "id", [], "any", false, false, false, 39)]), "html", null, true);
            yield "\" class=\"btn btn-xs btn-danger float-right\"><i class=\"fa fa-close\"></i> Delete</a>
                              <h4>";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["data"], "mdaid", [], "any", false, false, false, 40), "name", [], "any", false, false, false, 40), "html", null, true);
            yield "</h4>
                              <p>";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["data"], "trainingid", [], "any", false, false, false, 41), "title", [], "any", false, false, false, 41), "html", null, true);
            yield "</p>
                              <p class=\"font-xs font-gray\">Participants allowed: ";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["data"], "allowedparticipants", [], "any", false, false, false, 42), "html", null, true);
            yield "</p>
                          </li>

                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
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
        return "admin/participants_allowed.html.twig";
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
        return array (  136 => 46,  126 => 42,  122 => 41,  118 => 40,  114 => 39,  110 => 37,  106 => 36,  82 => 15,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin_base.html.twig' %}

{% block body %}


  <div class=\"row\">

    <div class=\"col-md-6\">

        <div class=\"card\">


            <div class=\"card-body\">

            {{ form(form) }}

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

                      {% for data in participants_allowed %}

                          <li class=\"list-group-item\">
                              <a href=\"{{ path('admin_delete_participant_allowed', { 'id':data.id }) }}\" class=\"btn btn-xs btn-danger float-right\"><i class=\"fa fa-close\"></i> Delete</a>
                              <h4>{{ data.mdaid.name }}</h4>
                              <p>{{ data.trainingid.title }}</p>
                              <p class=\"font-xs font-gray\">Participants allowed: {{ data.allowedparticipants }}</p>
                          </li>

                      {% endfor %}
                  </ul>

              </div>
          </div>

      </div>

  </div>


{% endblock %}", "admin/participants_allowed.html.twig", "C:\\laragon\\www\\training\\templates\\admin\\participants_allowed.html.twig");
    }
}
