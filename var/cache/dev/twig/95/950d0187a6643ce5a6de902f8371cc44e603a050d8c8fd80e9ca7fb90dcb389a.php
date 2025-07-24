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

/* admin/admin_register_participant_session.html.twig */
class __TwigTemplate_7721d3ab277d8134aa773ba9f3e0e3a9b82fdb830719975f9ca33382b52f536d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin_register_participant_session.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin_register_participant_session.html.twig"));

        $this->parent = $this->loadTemplate("admin_base.html.twig", "admin/admin_register_participant_session.html.twig", 1);
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

    <div class=\"col-md-12\">

        <div class=\"card\">

            <div class=\"card-header bg-dark font-white\">
                <h4>Register participants for training</h4>
            </div>

            <div class=\"card-body\">

                <form method=\"POST\" action=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_register_training_participant");
        yield "\">

                    <div class=\"row\">
                    <div class=\"form-group col-md-4\">
                        <label>MDA</label><br>
                        <select name=\"mda\" class=\"form-control bg-gray\">
                            <optgroup label=\"Selected\">
                                <option value=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["mda"]) || array_key_exists("mda", $context) ? $context["mda"] : (function () { throw new RuntimeError('Variable "mda" does not exist.', 25, $this->source); })()), "id", [], "any", false, false, false, 25), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["mda"]) || array_key_exists("mda", $context) ? $context["mda"] : (function () { throw new RuntimeError('Variable "mda" does not exist.', 25, $this->source); })()), "name", [], "any", false, false, false, 25), "html", null, true);
        yield "</option>
                            </optgroup>
                            <optgroup label=\"Available\">
                            ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["mdas"]) || array_key_exists("mdas", $context) ? $context["mdas"] : (function () { throw new RuntimeError('Variable "mdas" does not exist.', 28, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["mda"]) {
            // line 29
            yield "                                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["mda"], "id", [], "any", false, false, false, 29), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["mda"], "name", [], "any", false, false, false, 29), "html", null, true);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mda'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        yield "                            </optgroup>
                        </select>
                    </div>

                    <div class=\"form-group col-md-4\">
                        <label>Training</label><br>
                        <select name=\"training\" class=\"form-control\">
                            <optgroup label=\"Selected\">
                                <option value=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["training"]) || array_key_exists("training", $context) ? $context["training"] : (function () { throw new RuntimeError('Variable "training" does not exist.', 39, $this->source); })()), "id", [], "any", false, false, false, 39), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["training"]) || array_key_exists("training", $context) ? $context["training"] : (function () { throw new RuntimeError('Variable "training" does not exist.', 39, $this->source); })()), "title", [], "any", false, false, false, 39), "html", null, true);
        yield "</option>
                            </optgroup>
                            <optgroup label=\"Available\">
                            ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["trainings"]) || array_key_exists("trainings", $context) ? $context["trainings"] : (function () { throw new RuntimeError('Variable "trainings" does not exist.', 42, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["training"]) {
            // line 43
            yield "                                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["training"], "id", [], "any", false, false, false, 43), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["training"], "title", [], "any", false, false, false, 43), "html", null, true);
            yield "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['training'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        yield "                            </optgroup>
                        </select>
                    </div>
                    </div>

                    <div class=\"form-group\">
                        <button class=\"btn btn-primary\">Submit</button>
                    </div>

                </form>

            </div>
        </div>

    </div>



      <div class=\"col-md-6\">
          <div class=\"card\">
              <div class=\"card-header bg-dark text-white\">
                  <h5>Register new participant</h5>
              </div>
          <div class=\"card-body\">
              <form method=\"POST\">

                  <div class=\"form-group\">
                      <label>Participant name</label>
                      <input type=\"text\" class=\"form-control\" required=\"required\" name=\"participants\">
                  </div>

                  <div class=\"form-group\">
                      <label>Participant email</label>
                      <input type=\"email\" class=\"form-control\" required=\"required\" name=\"participants_email\">
                  </div>

                  <div class=\"form-group\">
                      <label>Participant phone</label>
                      <input type=\"text\" class=\"form-control\" onkeypress=\"return isNumber(event)\" name=\"participants_phone\">
                  </div>

                  <div class=\"form-group\">
                      <label>Select a session</label>
                      <select required=\"required\" name=\"participants_session\" class=\"form-control\">
                          <option disabled selected value=\"\">-- Select a session --</option>
                          ";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["training_sessions"]) || array_key_exists("training_sessions", $context) ? $context["training_sessions"] : (function () { throw new RuntimeError('Variable "training_sessions" does not exist.', 90, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["session"]) {
            // line 91
            yield "
                              <option value=\"";
            // line 92
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["session"], "id", [], "any", false, false, false, 92), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["session"], "name", [], "any", false, false, false, 92), "html", null, true);
            yield " - ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["session"], "startdate", [], "any", false, false, false, 92), "d M, Y"), "html", null, true);
            yield " till ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["session"], "enddate", [], "any", false, false, false, 92), "d M, Y"), "html", null, true);
            yield "</option>

                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['session'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        yield "                      </select>
                  </div>

                  <button class=\"btn btn-block btn-primary\">Submit</button>
              </form>
          </div>
          </div>



          <div class=\"card\">
              <div class=\"card-header bg-dark text-white\">
                  <h5>Register for refresher training</h5>
              </div>
              <div class=\"card-body\">
                  ";
        // line 110
        if ((0 >= CoreExtension::compare(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["participants"]) || array_key_exists("participants", $context) ? $context["participants"] : (function () { throw new RuntimeError('Variable "participants" does not exist.', 110, $this->source); })())), 0))) {
            // line 111
            yield "
                  <form method=\"POST\" action=\"";
            // line 112
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_register_refresher_training_participant_session", ["mda_id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["mda"]) || array_key_exists("mda", $context) ? $context["mda"] : (function () { throw new RuntimeError('Variable "mda" does not exist.', 112, $this->source); })()), "id", [], "any", false, false, false, 112), "training_id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["training"]) || array_key_exists("training", $context) ? $context["training"] : (function () { throw new RuntimeError('Variable "training" does not exist.', 112, $this->source); })()), "id", [], "any", false, false, false, 112)]), "html", null, true);
            yield "\">

                      ";
            // line 114
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["previous_attendees"]) || array_key_exists("previous_attendees", $context) ? $context["previous_attendees"] : (function () { throw new RuntimeError('Variable "previous_attendees" does not exist.', 114, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["attendee"]) {
                // line 115
                yield "
                          <div class=\"bg-gray mb-2 p-2\">
                      <div class=\"form-group\">
                          <label>Participant name</label>
                          <input type=\"text\" class=\"form-control\" required=\"required\" name=\"participants[]\" value=\"";
                // line 119
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["attendee"], "participantname", [], "any", false, false, false, 119), "html", null, true);
                yield "\">
                      </div>

                      <div class=\"form-group\">
                          <label>Participant email</label>
                          <input type=\"email\" class=\"form-control\" required=\"required\" name=\"participants_email[]\" value=\"";
                // line 124
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["attendee"], "participantemail", [], "any", false, false, false, 124), "html", null, true);
                yield "\">
                      </div>

                      <div class=\"form-group\">
                          <label>Participant phone</label>
                          <input type=\"text\" class=\"form-control\" onkeypress=\"return isNumber(event)\" name=\"participants_phone[]\" value=\"";
                // line 129
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["attendee"], "participantphone", [], "any", false, false, false, 129), "html", null, true);
                yield "\">
                      </div>

                      <div class=\"form-group\">
                          <label>Select a session</label>
                          <select required=\"required\" name=\"participants_session\" class=\"form-control\">
                              <option disabled selected value=\"\">-- Select a session --</option>
                              ";
                // line 136
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["training_sessions"]) || array_key_exists("training_sessions", $context) ? $context["training_sessions"] : (function () { throw new RuntimeError('Variable "training_sessions" does not exist.', 136, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["session"]) {
                    // line 137
                    yield "
                                  <option value=\"";
                    // line 138
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["session"], "id", [], "any", false, false, false, 138), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["session"], "name", [], "any", false, false, false, 138), "html", null, true);
                    yield " - ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["session"], "startdate", [], "any", false, false, false, 138), "d M, Y"), "html", null, true);
                    yield " till ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["session"], "enddate", [], "any", false, false, false, 138), "d M, Y"), "html", null, true);
                    yield "</option>

                              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['session'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 141
                yield "                          </select>
                      </div>
                          </div>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attendee'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 145
            yield "                      <button class=\"btn btn-block btn-primary\">Submit</button>
                  </form>
                      ";
        } else {
            // line 148
            yield "
                          <div class=\"p-5 text-center lead\">
                              <img src=\"";
            // line 150
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/empty.png"), "html", null, true);
            yield "\">
                              <p>Participants are already registered for this training</p>
                          </div>
                          ";
        }
        // line 154
        yield "              </div>
          </div>
      </div>

      <div class=\"col-md-6\">
          <div class=\"card\">
              <div class=\"card-header bg-dark text-white\">
                  <h5>MDA Participants registered for this training</h5>
              </div>
              <div class=\"card-body\">

                  ";
        // line 165
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["participants"]) || array_key_exists("participants", $context) ? $context["participants"] : (function () { throw new RuntimeError('Variable "participants" does not exist.', 165, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["participant"]) {
            // line 166
            yield "
                      <h5>";
            // line 167
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "participantname", [], "any", false, false, false, 167), "html", null, true);
            yield "</h5>
                      <p class=\"m-0\">";
            // line 168
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "participantemail", [], "any", false, false, false, 168), "html", null, true);
            yield "</p>
                      <p class=\"m-0\">";
            // line 169
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "participantphone", [], "any", false, false, false, 169), "html", null, true);
            yield "</p>
                      <a href=\"";
            // line 170
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_edit_participant", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "id", [], "any", false, false, false, 170), "training_id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["training"]) || array_key_exists("training", $context) ? $context["training"] : (function () { throw new RuntimeError('Variable "training" does not exist.', 170, $this->source); })()), "id", [], "any", false, false, false, 170)]), "html", null, true);
            yield "\" class=\"btn btn-warning btn-xs mt-2\"><i class=\"fa fa-pencil\"></i> Edit</a>
                      <a href=\"";
            // line 171
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_delete_participant", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["participant"], "id", [], "any", false, false, false, 171)]), "html", null, true);
            yield "\" class=\"btn btn-danger btn-xs mt-2\"><i class=\"fa fa-close\"></i> Delete</a>
                      <hr>
                      ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 174
            yield "
                      <div class=\"p-5 text-center lead text-danger\">
                          No participant found
                      </div>

                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['participant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 180
        yield "              </div>
          </div>


          <div class=\"card top_buffer\">
              <div class=\"card-header bg-dark text-white\">
                  <h5>Invoices</h5>
              </div>
              <div class=\"card-body\">

                  ";
        // line 190
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["invoices"]) || array_key_exists("invoices", $context) ? $context["invoices"] : (function () { throw new RuntimeError('Variable "invoices" does not exist.', 190, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["invoice"]) {
            // line 191
            yield "
                          ";
            // line 192
            if ((0 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, $context["invoice"], "paymentstatus", [], "any", false, false, false, 192), 0))) {
                // line 193
                yield "                              <label class=\"pull-right badge text-white bg-danger\"> Not paid</label>
                              ";
            } else {
                // line 195
                yield "                                  <label class=\"pull-right badge text-white bg-success\">Paid</label>
                                  ";
            }
            // line 197
            yield "                      <h5>Invoice #";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["invoice"], "id", [], "any", false, false, false, 197), "html", null, true);
            yield "</h5>
                      <p class=\"m-0 text-success\">&#8358;";
            // line 198
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["invoice"], "paymentamount", [], "any", false, false, false, 198)), "html", null, true);
            yield "</p>

                      <hr>
                  ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 202
            yield "
                      <div class=\"p-5 text-center lead text-danger\">
                          No invoice found
                      </div>

                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['invoice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 208
        yield "              </div>
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
        return "admin/admin_register_participant_session.html.twig";
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
        return array (  441 => 208,  430 => 202,  421 => 198,  416 => 197,  412 => 195,  408 => 193,  406 => 192,  403 => 191,  398 => 190,  386 => 180,  375 => 174,  367 => 171,  363 => 170,  359 => 169,  355 => 168,  351 => 167,  348 => 166,  343 => 165,  330 => 154,  323 => 150,  319 => 148,  314 => 145,  305 => 141,  290 => 138,  287 => 137,  283 => 136,  273 => 129,  265 => 124,  257 => 119,  251 => 115,  247 => 114,  242 => 112,  239 => 111,  237 => 110,  220 => 95,  205 => 92,  202 => 91,  198 => 90,  151 => 45,  140 => 43,  136 => 42,  128 => 39,  118 => 31,  107 => 29,  103 => 28,  95 => 25,  85 => 18,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin_base.html.twig' %}

{% block body %}


  <div class=\"row\">

    <div class=\"col-md-12\">

        <div class=\"card\">

            <div class=\"card-header bg-dark font-white\">
                <h4>Register participants for training</h4>
            </div>

            <div class=\"card-body\">

                <form method=\"POST\" action=\"{{ path('admin_register_training_participant') }}\">

                    <div class=\"row\">
                    <div class=\"form-group col-md-4\">
                        <label>MDA</label><br>
                        <select name=\"mda\" class=\"form-control bg-gray\">
                            <optgroup label=\"Selected\">
                                <option value=\"{{ mda.id }}\">{{ mda.name }}</option>
                            </optgroup>
                            <optgroup label=\"Available\">
                            {% for mda in mdas %}
                                <option value=\"{{ mda.id }}\">{{ mda.name }}</option>
                            {% endfor %}
                            </optgroup>
                        </select>
                    </div>

                    <div class=\"form-group col-md-4\">
                        <label>Training</label><br>
                        <select name=\"training\" class=\"form-control\">
                            <optgroup label=\"Selected\">
                                <option value=\"{{ training.id }}\">{{ training.title }}</option>
                            </optgroup>
                            <optgroup label=\"Available\">
                            {% for training in trainings %}
                                <option value=\"{{ training.id }}\">{{ training.title }}</option>
                                {% endfor %}
                            </optgroup>
                        </select>
                    </div>
                    </div>

                    <div class=\"form-group\">
                        <button class=\"btn btn-primary\">Submit</button>
                    </div>

                </form>

            </div>
        </div>

    </div>



      <div class=\"col-md-6\">
          <div class=\"card\">
              <div class=\"card-header bg-dark text-white\">
                  <h5>Register new participant</h5>
              </div>
          <div class=\"card-body\">
              <form method=\"POST\">

                  <div class=\"form-group\">
                      <label>Participant name</label>
                      <input type=\"text\" class=\"form-control\" required=\"required\" name=\"participants\">
                  </div>

                  <div class=\"form-group\">
                      <label>Participant email</label>
                      <input type=\"email\" class=\"form-control\" required=\"required\" name=\"participants_email\">
                  </div>

                  <div class=\"form-group\">
                      <label>Participant phone</label>
                      <input type=\"text\" class=\"form-control\" onkeypress=\"return isNumber(event)\" name=\"participants_phone\">
                  </div>

                  <div class=\"form-group\">
                      <label>Select a session</label>
                      <select required=\"required\" name=\"participants_session\" class=\"form-control\">
                          <option disabled selected value=\"\">-- Select a session --</option>
                          {% for session in training_sessions %}

                              <option value=\"{{ session.id }}\">{{ session.name }} - {{ session.startdate|date(\"d M, Y\") }} till {{ session.enddate|date(\"d M, Y\") }}</option>

                          {% endfor %}
                      </select>
                  </div>

                  <button class=\"btn btn-block btn-primary\">Submit</button>
              </form>
          </div>
          </div>



          <div class=\"card\">
              <div class=\"card-header bg-dark text-white\">
                  <h5>Register for refresher training</h5>
              </div>
              <div class=\"card-body\">
                  {% if participants|length <= 0 %}

                  <form method=\"POST\" action=\"{{ path('admin_register_refresher_training_participant_session', {'mda_id':mda.id,'training_id':training.id}) }}\">

                      {% for attendee in previous_attendees %}

                          <div class=\"bg-gray mb-2 p-2\">
                      <div class=\"form-group\">
                          <label>Participant name</label>
                          <input type=\"text\" class=\"form-control\" required=\"required\" name=\"participants[]\" value=\"{{ attendee.participantname }}\">
                      </div>

                      <div class=\"form-group\">
                          <label>Participant email</label>
                          <input type=\"email\" class=\"form-control\" required=\"required\" name=\"participants_email[]\" value=\"{{ attendee.participantemail }}\">
                      </div>

                      <div class=\"form-group\">
                          <label>Participant phone</label>
                          <input type=\"text\" class=\"form-control\" onkeypress=\"return isNumber(event)\" name=\"participants_phone[]\" value=\"{{ attendee.participantphone }}\">
                      </div>

                      <div class=\"form-group\">
                          <label>Select a session</label>
                          <select required=\"required\" name=\"participants_session\" class=\"form-control\">
                              <option disabled selected value=\"\">-- Select a session --</option>
                              {% for session in training_sessions %}

                                  <option value=\"{{ session.id }}\">{{ session.name }} - {{ session.startdate|date(\"d M, Y\") }} till {{ session.enddate|date(\"d M, Y\") }}</option>

                              {% endfor %}
                          </select>
                      </div>
                          </div>
{% endfor %}
                      <button class=\"btn btn-block btn-primary\">Submit</button>
                  </form>
                      {% else %}

                          <div class=\"p-5 text-center lead\">
                              <img src=\"{{ asset('assets/images/empty.png') }}\">
                              <p>Participants are already registered for this training</p>
                          </div>
                          {% endif %}
              </div>
          </div>
      </div>

      <div class=\"col-md-6\">
          <div class=\"card\">
              <div class=\"card-header bg-dark text-white\">
                  <h5>MDA Participants registered for this training</h5>
              </div>
              <div class=\"card-body\">

                  {% for participant in participants %}

                      <h5>{{ participant.participantname }}</h5>
                      <p class=\"m-0\">{{ participant.participantemail }}</p>
                      <p class=\"m-0\">{{ participant.participantphone }}</p>
                      <a href=\"{{ path('admin_edit_participant', {'id':participant.id, 'training_id':training.id}) }}\" class=\"btn btn-warning btn-xs mt-2\"><i class=\"fa fa-pencil\"></i> Edit</a>
                      <a href=\"{{ path('admin_delete_participant', {'id':participant.id}) }}\" class=\"btn btn-danger btn-xs mt-2\"><i class=\"fa fa-close\"></i> Delete</a>
                      <hr>
                      {% else %}

                      <div class=\"p-5 text-center lead text-danger\">
                          No participant found
                      </div>

                      {% endfor %}
              </div>
          </div>


          <div class=\"card top_buffer\">
              <div class=\"card-header bg-dark text-white\">
                  <h5>Invoices</h5>
              </div>
              <div class=\"card-body\">

                  {% for invoice in invoices %}

                          {% if invoice.paymentstatus == 0 %}
                              <label class=\"pull-right badge text-white bg-danger\"> Not paid</label>
                              {% else %}
                                  <label class=\"pull-right badge text-white bg-success\">Paid</label>
                                  {% endif %}
                      <h5>Invoice #{{ invoice.id }}</h5>
                      <p class=\"m-0 text-success\">&#8358;{{ invoice.paymentamount|number_format }}</p>

                      <hr>
                  {% else %}

                      <div class=\"p-5 text-center lead text-danger\">
                          No invoice found
                      </div>

                  {% endfor %}
              </div>
          </div>
      </div>

  </div>


{% endblock %}", "admin/admin_register_participant_session.html.twig", "C:\\laragon\\www\\training\\templates\\admin\\admin_register_participant_session.html.twig");
    }
}
