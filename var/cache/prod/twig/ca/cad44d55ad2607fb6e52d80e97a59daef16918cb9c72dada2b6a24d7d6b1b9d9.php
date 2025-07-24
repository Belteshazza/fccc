<?php

/* admin/admin_register_participant_session.html.twig */
class __TwigTemplate_ea5bed0c1fb7fe810b5b98eacfa81af0ed6d5e37dc0bbe715c93a0f65510e37b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin_base.html.twig", "admin/admin_register_participant_session.html.twig", 1);
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

    <div class=\"col-md-12\">

        <div class=\"card\">

            <div class=\"card-header bg-dark font-white\">
                <h4>Register participants for training</h4>
            </div>

            <div class=\"card-body\">

                <form method=\"POST\" action=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_register_training_participant");
        echo "\">

                    <div class=\"row\">
                    <div class=\"form-group col-md-4\">
                        <label>MDA</label><br>
                        <select name=\"mda\" class=\"form-control bg-gray\">
                            <optgroup label=\"Selected\">
                                <option value=\"";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["mda"] ?? null), "id", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["mda"] ?? null), "name", array()), "html", null, true);
        echo "</option>
                            </optgroup>
                            <optgroup label=\"Available\">
                            ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["mdas"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["mda"]) {
            // line 29
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["mda"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["mda"], "name", array()), "html", null, true);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mda'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "                            </optgroup>
                        </select>
                    </div>

                    <div class=\"form-group col-md-4\">
                        <label>Training</label><br>
                        <select name=\"training\" class=\"form-control\">
                            <optgroup label=\"Selected\">
                                <option value=\"";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["training"] ?? null), "id", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["training"] ?? null), "title", array()), "html", null, true);
        echo "</option>
                            </optgroup>
                            <optgroup label=\"Available\">
                            ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["trainings"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["training"]) {
            // line 43
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["training"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["training"], "title", array()), "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['training'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "                            </optgroup>
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
        $context['_seq'] = twig_ensure_traversable(($context["training_sessions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["session"]) {
            // line 91
            echo "
                              <option value=\"";
            // line 92
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["session"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["session"], "name", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["session"], "startdate", array()), "d M, Y"), "html", null, true);
            echo " till ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["session"], "enddate", array()), "d M, Y"), "html", null, true);
            echo "</option>

                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['session'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "                      </select>
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
        if ((twig_length_filter($this->env, ($context["participants"] ?? null)) <= 0)) {
            // line 111
            echo "
                  <form method=\"POST\" action=\"";
            // line 112
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_register_refresher_training_participant_session", array("mda_id" => twig_get_attribute($this->env, $this->getSourceContext(), ($context["mda"] ?? null), "id", array()), "training_id" => twig_get_attribute($this->env, $this->getSourceContext(), ($context["training"] ?? null), "id", array()))), "html", null, true);
            echo "\">

                      ";
            // line 114
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["previous_attendees"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attendee"]) {
                // line 115
                echo "
                          <div class=\"bg-gray mb-2 p-2\">
                      <div class=\"form-group\">
                          <label>Participant name</label>
                          <input type=\"text\" class=\"form-control\" required=\"required\" name=\"participants[]\" value=\"";
                // line 119
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["attendee"], "participantname", array()), "html", null, true);
                echo "\">
                      </div>

                      <div class=\"form-group\">
                          <label>Participant email</label>
                          <input type=\"email\" class=\"form-control\" required=\"required\" name=\"participants_email[]\" value=\"";
                // line 124
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["attendee"], "participantemail", array()), "html", null, true);
                echo "\">
                      </div>

                      <div class=\"form-group\">
                          <label>Participant phone</label>
                          <input type=\"text\" class=\"form-control\" onkeypress=\"return isNumber(event)\" name=\"participants_phone[]\" value=\"";
                // line 129
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["attendee"], "participantphone", array()), "html", null, true);
                echo "\">
                      </div>

                      <div class=\"form-group\">
                          <label>Select a session</label>
                          <select required=\"required\" name=\"participants_session\" class=\"form-control\">
                              <option disabled selected value=\"\">-- Select a session --</option>
                              ";
                // line 136
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["training_sessions"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["session"]) {
                    // line 137
                    echo "
                                  <option value=\"";
                    // line 138
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["session"], "id", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["session"], "name", array()), "html", null, true);
                    echo " - ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["session"], "startdate", array()), "d M, Y"), "html", null, true);
                    echo " till ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["session"], "enddate", array()), "d M, Y"), "html", null, true);
                    echo "</option>

                              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['session'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 141
                echo "                          </select>
                      </div>
                          </div>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attendee'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 145
            echo "                      <button class=\"btn btn-block btn-primary\">Submit</button>
                  </form>
                      ";
        } else {
            // line 148
            echo "
                          <div class=\"p-5 text-center lead\">
                              <img src=\"";
            // line 150
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/empty.png"), "html", null, true);
            echo "\">
                              <p>Participants are already registered for this training</p>
                          </div>
                          ";
        }
        // line 154
        echo "              </div>
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
        $context['_seq'] = twig_ensure_traversable(($context["participants"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["participant"]) {
            // line 166
            echo "
                      <h5>";
            // line 167
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["participant"], "participantname", array()), "html", null, true);
            echo "</h5>
                      <p class=\"m-0\">";
            // line 168
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["participant"], "participantemail", array()), "html", null, true);
            echo "</p>
                      <p class=\"m-0\">";
            // line 169
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["participant"], "participantphone", array()), "html", null, true);
            echo "</p>
                      <a href=\"";
            // line 170
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_edit_participant", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["participant"], "id", array()), "training_id" => twig_get_attribute($this->env, $this->getSourceContext(), ($context["training"] ?? null), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-warning btn-xs mt-2\"><i class=\"fa fa-pencil\"></i> Edit</a>
                      <a href=\"";
            // line 171
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_delete_participant", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["participant"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger btn-xs mt-2\"><i class=\"fa fa-close\"></i> Delete</a>
                      <hr>
                      ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 174
            echo "
                      <div class=\"p-5 text-center lead text-danger\">
                          No participant found
                      </div>

                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['participant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 180
        echo "              </div>
          </div>


          <div class=\"card top_buffer\">
              <div class=\"card-header bg-dark text-white\">
                  <h5>Invoices</h5>
              </div>
              <div class=\"card-body\">

                  ";
        // line 190
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["invoices"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["invoice"]) {
            // line 191
            echo "
                          ";
            // line 192
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["invoice"], "paymentstatus", array()) == 0)) {
                // line 193
                echo "                              <label class=\"pull-right badge text-white bg-danger\"> Not paid</label>
                              ";
            } else {
                // line 195
                echo "                                  <label class=\"pull-right badge text-white bg-success\">Paid</label>
                                  ";
            }
            // line 197
            echo "                      <h5>Invoice #";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["invoice"], "id", array()), "html", null, true);
            echo "</h5>
                      <p class=\"m-0 text-success\">&#8358;";
            // line 198
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["invoice"], "paymentamount", array())), "html", null, true);
            echo "</p>

                      <hr>
                  ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 202
            echo "
                      <div class=\"p-5 text-center lead text-danger\">
                          No invoice found
                      </div>

                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['invoice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 208
        echo "              </div>
          </div>
      </div>

  </div>


";
    }

    public function getTemplateName()
    {
        return "admin/admin_register_participant_session.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  403 => 208,  392 => 202,  383 => 198,  378 => 197,  374 => 195,  370 => 193,  368 => 192,  365 => 191,  360 => 190,  348 => 180,  337 => 174,  329 => 171,  325 => 170,  321 => 169,  317 => 168,  313 => 167,  310 => 166,  305 => 165,  292 => 154,  285 => 150,  281 => 148,  276 => 145,  267 => 141,  252 => 138,  249 => 137,  245 => 136,  235 => 129,  227 => 124,  219 => 119,  213 => 115,  209 => 114,  204 => 112,  201 => 111,  199 => 110,  182 => 95,  167 => 92,  164 => 91,  160 => 90,  113 => 45,  102 => 43,  98 => 42,  90 => 39,  80 => 31,  69 => 29,  65 => 28,  57 => 25,  47 => 18,  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/admin_register_participant_session.html.twig", "/home/federalc/public_html/training/templates/admin/admin_register_participant_session.html.twig");
    }
}
