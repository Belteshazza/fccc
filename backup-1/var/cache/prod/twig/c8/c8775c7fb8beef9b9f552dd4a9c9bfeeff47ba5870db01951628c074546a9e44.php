<?php

/* pages/home.html.twig */
class __TwigTemplate_7c6532e9f029341807c714f4d89ed7b57f2d37c455dc53c5e1ce3a958c20b11f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "pages/home.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
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
    ";
        // line 5
        $this->loadTemplate("common/nav.html.twig", "pages/home.html.twig", 5)->display($context);
        // line 6
        echo "
    <div  class='no_margin no_padding pic_background padding_50-bottom padding_100-top' style='background: url(\" ";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/wall.jpg"), "html", null, true);
        echo "\") #000033 fixed no-repeat ; background-size: 130% !Important'>
        <div class='transparent_container bg-transparent_black_5'>
        </div>
        <div style='position:Relative' class='clearfix container font-white padding_20-top padding_20-bottom'>

            <div class=\"row\">
            <div class='col-md-7 col-sm-12 mx-auto text-center'>
                <p class=\"font-sm-4 text-uppercase font-lg-3\">Federal Character Commission</p>
                <h1 class=\"font-weight-900 no_margin-top font-xl-2\">Agency Wide Training Portal</h1>
                <p class=\"font-sm-4 lead mb-5\">
                    ONLINE SUBMISSION OF NOMINAL ROLL, FORMAT AND PROCESSES
                </p>


                <a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\" class=\"btn btn-lg top_buffer btn-primary\">Apply Now <i class=\"fa fa-paper-plane\"></i></a>
                <a href=\"#recieve_letter\" class='btn btn-lg top_buffer btn-success'>Receive training letter <i class=\"fa fa-file\"></i></a>
            </div>



            </div>
        </div>
    </div>


    <div class=\"bg-white padding_50 no_xs_padding-left no_xs_padding-right no_padding-bottom\" id=\"about_training\">

        <div class=\"container\">

            <div class=\"row\">



                <div class=\"col-md-10 col-sm-12 text-center mx-auto no_padding-bottom\">
                    <p class=\"font-xs-2 mb-0 bottom_buffer font-weight-900 text-uppercase font-green\">Introduction</p>
                    <h1 class='mt-0 mb-5'>About the training</h1>
                    <p class=' bottom_buffer font-light font-gray line-height'>
                        The FEDERAL CHARACTER COMMISSION is organising a two - day workshop titled
                        \"ONLINE SUBMISSION OF NOMINAL ROLL, FORMAT AND PROCESSES\"
                        scheduled to hold in batches at Chams City, Training Center, Maitama Abuja, Nigeria.
                    </p>

                    <p class=' bottom_buffer font-light font-gray line-height'>
                        This workshop is being reorganized to update participants with the emerging trends and best practices as well as to address the observed lapses/challenges found in the submission of some MDAs who had earlier attended a similar workshop with the commission in 2013 It is also to sensitize and train the Desk Officers of the Federal Ministries, Departments and Agencies on the correct Format and Process of forwarding their Nominal Rolls online through the Commission's website/Portal which would ensure smooth and timely submission of their returns.
                    </p>

                </div>

            </div>

        </div>

    </div>

    <div class=\"d-md-flex\">

    <div class=\"bg-gray-2 col-md-6 font-black no_xs_padding-left no_xs_padding-right no_padding-bottom\">



            <div class=\"row\">


                <div class=\"col-sm-10 mx-auto padding_30  no_padding-bottom\">
                    <p class=\"font-xs-2 mb-0 bottom_buffer font-weight-900 text-uppercase font-green\">MDAs</p>
                    <h1 class='mt-0 mb-5'>How to apply</h1>
                    <ol class=\"how-to-list\">
                        <li>Obtain the <strong>MDA Establishment Code</strong> from the invitation letter sent to your MDA
                            for participation.
                        </li>
                        <li>Use the <strong>MDA Establishment Code</strong> to create an account for
                            your MDA
                            <div style=\"clear: both; font-size: 0.85em; font-style: normal; padding-left: 25px; font-weight:900\" class=\" \"><strong class=\"text-danger\">Note:</strong>
                                During MDA registration, please follow the on-screen guide for a quick and easy
                                registration.
                            </div>
                        </li>
                        <li>On successful registration, you will be required to <strong>verify and authenticate</strong>
                            your account. Please follow the guide(s) you received via <strong>EMAIL</strong> &amp; <strong>SMS
                                Message</strong> for the verification process.
                        </li>
                        <li>After account creation and verification, you can then proceed to log into your account.
                            <div style=\"clear: both; font-size: 0.85em; font-style: normal; padding-left: 25px; font-weight:900\" class=\"\"><strong class=\"text-danger\">Note:</strong>
                                Please note that the account registration and verification is done only once for a MDA.
                            </div>
                        </li>
                        <li>
                            On successful login, You can add participants for the training and also select a training
                            session to attend.
                        </li>

                    </ol>



                </div>

            </div>


    </div>


        <div class=\"bg-green col-md-6 font-white no_xs_padding-left no_xs_padding-right no_padding-bottom\" id=\"recieve_letter\">



            <div class=\"row\">


                <div class=\"col-sm-10 mx-auto padding_30  no_padding-bottom\">
                    <p class=\"font-xs-2 mb-0 bottom_buffer font-weight-900 text-uppercase font-black\">MDAs</p>
                    <h1 class='mt-0 mb-5'>Receive training letter</h1>
                    <p class=\"text-white\">
                        If you are the Desk Officer in charge of submitting nominal roll to FCC and your agency have not received any letter concerning the on-going training, please enter your email address and phone number for a softcopy of the letter for further action.
                    </p>

                    <form action=\"";
        // line 124
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("generate_letter_step_2");
        echo "\" method=\"POST\">

                        <div class=\"form-group\">
                            <label>Select your MDA</label>
                        <select class=\"form-control\" required name=\"mda\">
                            <option selected disabled value=\"\">-- Choose an MDA --</option>
                            ";
        // line 130
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["mdas"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["mda"]) {
            // line 131
            echo "
                                <option>";
            // line 132
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["mda"], "name", array()), "html", null, true);
            echo "</option>

                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mda'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 135
        echo "                        </select>
                        </div>

                        <div class=\"form-group\">

                            <label>Email address</label>
                            <input type=\"email\" name=\"email\" required class=\"form-control\">

                        </div>

                        <div class=\"form-group\">

                            <label>Phone</label>
                            <input type=\"text\" name=\"phone\" required onkeypress=\"return isNumber(event)\" class=\"form-control\">
                        </div>


                            <button class=\"btn btn-success\">Submit</button>
                    </form>



                </div>

            </div>


        </div>

    </div>


";
    }

    public function getTemplateName()
    {
        return "pages/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 135,  178 => 132,  175 => 131,  171 => 130,  162 => 124,  56 => 21,  39 => 7,  36 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "pages/home.html.twig", "/home/federalc/public_html/training3/templates/pages/home.html.twig");
    }
}
