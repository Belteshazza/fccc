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

/* user/dashboard.html.twig */
class __TwigTemplate_27ef1fd0a837edd25fcff68f5f305e011b632c795e5c9e8a49895a0bef4075db extends Template
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
        return "user_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/dashboard.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/dashboard.html.twig"));

        $this->parent = $this->loadTemplate("user_base.html.twig", "user/dashboard.html.twig", 1);
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
    <section class=\"dashboard-counts p-0 m-0\">
        <div class=\"container-fluid p-0\">
            <div class=\"row bg-white has-shadow\">
                <!-- Item -->
                <div class=\"col-xl-4 col-sm-6\">
                    <div class=\"item p-0 d-flex align-items-center\">
                        <div class=\"icon bg-blue\"><i class=\"fa fa-book\"></i></div>
                        <div class=\"title font-sm-4\"><span>Available<br>Training</span></div>
                    <div class=\"number\"><strong>";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["trainings_available"]) || array_key_exists("trainings_available", $context) ? $context["trainings_available"] : (function () { throw new RuntimeError('Variable "trainings_available" does not exist.', 13, $this->source); })()), "html", null, true);
        yield "</strong></div>
                  </div>
                </div>

                <div class=\"col-xl-4 col-sm-6\">
                    <div class=\"item p-0 d-flex align-items-center\">
                        <div class=\"icon bg-orange\"><i class=\"fa fa-users\"></i></div>
                        <div class=\"title font-sm-4\"><span>Trainings<br>Applied For</span></div>
                        <div class=\"number\"><strong>";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["trainings_applied"]) || array_key_exists("trainings_applied", $context) ? $context["trainings_applied"] : (function () { throw new RuntimeError('Variable "trainings_applied" does not exist.', 21, $this->source); })()), "html", null, true);
        yield "</strong></div>
                    </div>
                </div>

                <div class=\"col-xl-4 col-sm-6\">
                    <div class=\"item p-0 d-flex align-items-center\">
                        <div class=\"icon bg-red\"><i class=\"fa fa-money\"></i></div>
                        <div class=\"title font-sm-4\"><span>Pending<br>Invoice(s)</span></div>
                        <div class=\"number\"><strong>";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["pending_invoice"]) || array_key_exists("pending_invoice", $context) ? $context["pending_invoice"] : (function () { throw new RuntimeError('Variable "pending_invoice" does not exist.', 29, $this->source); })()), "html", null, true);
        yield "</strong></div>
                    </div>
                </div>

              </div>
            </div>
          </section>


    <div class=\"row mt-5\">

        <div class=\"col-lg-6\">

            <div class=\"articles card\">

                <div class=\"card-header bg-dark font-white\">
                    Registered Participants
                </div>
                <div class=\"card-body p-0\">

                    ";
        // line 49
        if ((0 <= CoreExtension::compare(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["training_participants"]) || array_key_exists("training_participants", $context) ? $context["training_participants"] : (function () { throw new RuntimeError('Variable "training_participants" does not exist.', 49, $this->source); })())), 1))) {
            // line 50
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["training_participants"]) || array_key_exists("training_participants", $context) ? $context["training_participants"] : (function () { throw new RuntimeError('Variable "training_participants" does not exist.', 50, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["participant"]) {
                // line 51
                yield "
                        <div class=\"item d-flex align-items-center\">
                            <div class=\"text\">
                                <div class=\"badge badge-success float-right\">";
                // line 54
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "session_name", [], "any", false, false, false, 54), "html", null, true);
                yield "</div>
                                <h5 class=\"font-weight-500\">";
                // line 55
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "name", [], "any", false, false, false, 55), "html", null, true);
                yield "</h5>
                                <small>";
                // line 56
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "training_title", [], "any", false, false, false, 56), "html", null, true);
                yield ".</small>

                            </div>
                        </div>


                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['participant'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            yield "                        ";
        } else {
            // line 64
            yield "
                            <div class=\"text-center font-lg p-5\">
                                <p>No registered participant</p>

                            </div>

                            ";
        }
        // line 71
        yield "                </div>

            </div>

        </div>


    <div class=\"col-lg-6\">

        <div class=\"card\">

            <div class=\"card-header bg-dark font-white\">
                <h4>MDA</h4>
            </div>
            <div class=\"card-body\">

                <h2 class=\"font-lg\">";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["mda"]) || array_key_exists("mda", $context) ? $context["mda"] : (function () { throw new RuntimeError('Variable "mda" does not exist.', 87, $this->source); })()), "name", [], "any", false, false, false, 87), "html", null, true);
        yield "</h2>
                <p class=\"m-0\"><b class=\"text-primary\">MDA Code:</b> ";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["mda"]) || array_key_exists("mda", $context) ? $context["mda"] : (function () { throw new RuntimeError('Variable "mda" does not exist.', 88, $this->source); })()), "mdacode", [], "any", false, false, false, 88), "html", null, true);
        yield "</p>
                <p><b class=\"text-primary\">Address:</b> ";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["mda"]) || array_key_exists("mda", $context) ? $context["mda"] : (function () { throw new RuntimeError('Variable "mda" does not exist.', 89, $this->source); })()), "address", [], "any", false, false, false, 89), "html", null, true);
        yield "</p>

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
        return "user/dashboard.html.twig";
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
        return array (  196 => 89,  192 => 88,  188 => 87,  170 => 71,  161 => 64,  158 => 63,  145 => 56,  141 => 55,  137 => 54,  132 => 51,  127 => 50,  125 => 49,  102 => 29,  91 => 21,  80 => 13,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'user_base.html.twig' %}

{% block body %}

    <section class=\"dashboard-counts p-0 m-0\">
        <div class=\"container-fluid p-0\">
            <div class=\"row bg-white has-shadow\">
                <!-- Item -->
                <div class=\"col-xl-4 col-sm-6\">
                    <div class=\"item p-0 d-flex align-items-center\">
                        <div class=\"icon bg-blue\"><i class=\"fa fa-book\"></i></div>
                        <div class=\"title font-sm-4\"><span>Available<br>Training</span></div>
                    <div class=\"number\"><strong>{{ trainings_available }}</strong></div>
                  </div>
                </div>

                <div class=\"col-xl-4 col-sm-6\">
                    <div class=\"item p-0 d-flex align-items-center\">
                        <div class=\"icon bg-orange\"><i class=\"fa fa-users\"></i></div>
                        <div class=\"title font-sm-4\"><span>Trainings<br>Applied For</span></div>
                        <div class=\"number\"><strong>{{ trainings_applied }}</strong></div>
                    </div>
                </div>

                <div class=\"col-xl-4 col-sm-6\">
                    <div class=\"item p-0 d-flex align-items-center\">
                        <div class=\"icon bg-red\"><i class=\"fa fa-money\"></i></div>
                        <div class=\"title font-sm-4\"><span>Pending<br>Invoice(s)</span></div>
                        <div class=\"number\"><strong>{{ pending_invoice }}</strong></div>
                    </div>
                </div>

              </div>
            </div>
          </section>


    <div class=\"row mt-5\">

        <div class=\"col-lg-6\">

            <div class=\"articles card\">

                <div class=\"card-header bg-dark font-white\">
                    Registered Participants
                </div>
                <div class=\"card-body p-0\">

                    {% if training_participants|length >= 1 %}
                    {% for participant in training_participants %}

                        <div class=\"item d-flex align-items-center\">
                            <div class=\"text\">
                                <div class=\"badge badge-success float-right\">{{ participant.session_name }}</div>
                                <h5 class=\"font-weight-500\">{{ participant.name }}</h5>
                                <small>{{ participant.training_title }}.</small>

                            </div>
                        </div>


                    {% endfor %}
                        {% else %}

                            <div class=\"text-center font-lg p-5\">
                                <p>No registered participant</p>

                            </div>

                            {% endif %}
                </div>

            </div>

        </div>


    <div class=\"col-lg-6\">

        <div class=\"card\">

            <div class=\"card-header bg-dark font-white\">
                <h4>MDA</h4>
            </div>
            <div class=\"card-body\">

                <h2 class=\"font-lg\">{{ mda.name }}</h2>
                <p class=\"m-0\"><b class=\"text-primary\">MDA Code:</b> {{ mda.mdacode }}</p>
                <p><b class=\"text-primary\">Address:</b> {{ mda.address }}</p>

            </div>

        </div>

    </div>

    </div>

{% endblock %}", "user/dashboard.html.twig", "C:\\laragon\\www\\training\\templates\\user\\dashboard.html.twig");
    }
}
