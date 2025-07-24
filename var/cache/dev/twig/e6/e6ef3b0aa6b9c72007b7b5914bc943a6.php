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

/* pages/home.html.twig */
class __TwigTemplate_60ea0d062cb2cf2ff62307754e27f7cb extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/home.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/home.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        yield "
    ";
        // line 5
        yield from         $this->loadTemplate("common/nav.html.twig", "pages/home.html.twig", 5)->unwrap()->yield($context);
        // line 6
        yield "
  <div  class='no_margin no_padding pic_background padding_50-bottom padding_100-top' style='background: url(\" ";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/wall.jpg"), "html", null, true);
        yield "\") #000033 fixed no-repeat ; background-size: 130% !Important'>
    <div class='transparent_container bg-transparent_black_5'>
    </div>
    <div style='position:Relative' class='clearfix container font-white padding_20-top padding_20-bottom'>

      <div class=\"row\">
        <div class='col-md-7 col-sm-12 mx-auto text-center'>
          <p class=\"font-sm-4 text-uppercase font-lg-3\">Federal Character Commission</p>
          <h1 class=\"font-weight-900 no_margin-top font-xl-2\">Agency Wide Training</h1>
          <p class=\"font-sm-4 lead mb-5\">
            ONLINE SUBMISSION OF NOMINAL ROLL, FORMAT AND PROCESSES
          </p>


          <a href=\"";
        // line 21
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        yield "\" class=\"btn btn-lg top_buffer btn-primary\">Apply Now <i class=\"fa fa-paper-plane\"></i></a>
          <a href=\"#recieve_letter\" class='btn btn-lg top_buffer btn-success'>Receive training letter <i class=\"fa fa-file\"></i></a>
        </div>



      </div>
    </div>
  </div>

<div class=\"mt-2\">
    <div class=\"owl-carousel\">
        <div class=\"item\">
            <img src=\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/IMG_20171018_121053.jpg"), "html", null, true);
        yield "\" class=\"img-float\">
        </div>
        <div class=\"item\">
            <img src=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/IMG_20171018_121106.jpg"), "html", null, true);
        yield "\" class=\"img-float\">
        </div>
        <div class=\"item\">
            <img src=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/IMG_20171016_115222.jpg"), "html", null, true);
        yield "\" class=\"img-float\">
        </div>
        <div class=\"item\">
            <img src=\"";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/IMG_20171017_164254-2.jpg"), "html", null, true);
        yield "\" class=\"img-float\">
        </div>
        <div class=\"item\">
            <img src=\"";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/IMG_20171016_122040.jpg"), "html", null, true);
        yield "\" class=\"img-float\">
        </div>


    </div>
</div>

    <div class=\"text-center\">
    <a href=\"\" class=\"btn btn-default font-white mx-auto mt-2 mb-2 font-xs bg-transparent_black_2\" style=\"border-radius:20px\"><i class=\"fa fa-arrow-left\"></i> Click and drag left</a>
    </div>

    <script>
        var owl = \$('.owl-carousel');
        owl.owlCarousel({
            margin: 10,
            loop: true,
            autoplayTimeout:5000,
            autoplayHoverPause:false,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 3
                }
            }
        })
    </script>


  <div class=\"bg-white border_bottom padding_50 no_xs_padding-left no_xs_padding-right no_padding-bottom\" id=\"about_training\">

    <div class=\"container\">

      <div class=\"row\">



        <div class=\"col-md-10 col-sm-12 text-center mx-auto no_padding-bottom\">
          <p class=\"font-xs-2 mb-0 bottom_buffer font-weight-900 text-uppercase font-green\">Introduction</p>
          <h1 class='mt-0 mb-5'>About the training</h1>
          <p class=' bottom_buffer font-light text-primary text-justify line-height'>
            The FEDERAL CHARACTER COMMISSION is organising a two - day workshop titled
            \"ONLINE SUBMISSION OF NOMINAL ROLL, FORMAT AND PROCESSES\"
            scheduled to hold in batches at Chams City, Training Center, Maitama Abuja, Nigeria.
          </p>

          <p class=' bottom_buffer font-sm-2 text-justify font-light text-primary line-height'>
            This workshop is being reorganized to update participants with the emerging trends and best practices as well as to address the observed lapses/challenges found in the submission of some MDAs who had earlier attended a similar workshop with the commission in 2013 It is also to sensitize and train the Desk Officers of the Federal Ministries, Departments and Agencies on the correct Format and Process of forwarding their Nominal Rolls online through the Commission's website/Portal which would ensure smooth and timely submission of their returns.
          </p>

            <div id=\"recieve_letter\"></div>

        </div>

      </div>

    </div>

  </div>


    <div  class='no_margin no_padding pic_background padding_20-bottom padding_30-top' style='background: url(\" ";
        // line 111
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/wall.jpg"), "html", null, true);
        yield "\") #000033 fixed no-repeat ; background-size: 130% !Important'>
        <div class='transparent_container bg-transparent_black_8'>
        </div>
        <div style='position:Relative' class='clearfix container font-white padding_20-top padding_20-bottom'>

            <div class=\"row\">
                <div class='col-md-7 col-sm-12 mx-auto text-center'>

                    <h1 class=\"font-weight-900 no_margin-top font-xl\">Receive training letter</h1>
                    <p class=\"font-sm-4 lead mb-5\">
                        If you are the Desk Officer in charge of submitting nominal roll to FCC and your agency have not received any letter concerning the on-going training, please enter your MDA Code to generate/print a softcopy of the letter for further action.
                    </p>
                    <form method=\"POST\">


                        <div class=\"form-group\">


                            <input type=\"text\" name=\"mda_code\" placeholder=\"Enter MDA Code\" onkeypress=\"return isNumber(event)\" required class=\"form-control form-control-lg\">

                        </div>



                        <button class=\"btn btn-primary\">Submit</button>
                    </form>
                </div>



            </div>
        </div>
    </div>



    <div class=\"bg-green font-white text-center font-black no_xs_padding-left no_xs_padding-right no_padding-bottom padding_30\">

        <div class=\"container\">

        <p class=\"font-xs-2 mb-0 bottom_buffer font-weight-900 text-uppercase font-black\">MDAs</p>
        <h1 class='mt-0 mb-5'>How to apply</h1>

      <div class=\"row\">


          <div class=\"col-sm-4 mb-4\">
            <div class=\"num_count\">1</div>
              <p>Obtain the <strong>MDA Establishment Code</strong> from the invitation letter sent to your MDA
              for participation.
            </p>
          </div>

          <div class=\"col-sm-4 mb-4\">
              <div class=\"num_count\">2</div>
            <p>Use the <strong>MDA Establishment Code</strong> to create an account for
              your MDA
              ";
        // line 172
        yield "            </p>
          </div>

          <div class=\"col-sm-4 mb-4\">
              <div class=\"num_count\">3</div>
            <p>On successful registration, you will be required to <strong>verify and authenticate</strong>
              your account. Please follow the guide(s) you received via <strong>EMAIL</strong> &amp; <strong>SMS
                Message</strong> for the verification process.
            </p>
          </div>


          <div class=\"col-sm-4 mb-4\">
              <div class=\"num_count\">4</div>
            <p>After account creation and verification, you can then proceed to log into your account.
              <div style=\"clear: both; font-size: 0.85em; font-style: normal; padding-left: 25px; font-weight:900\" class=\"\"><strong class=\"text-danger\">Note:</strong>
                Please note that the account registration and verification is done only once for a MDA.
              </div>
            </p>
          </div>

          <div class=\"col-sm-4 mb-4\">
              <div class=\"num_count\">5</div>
            <p>
              On successful login, You can add participants for the training and also select a training
              session to attend.
            </p>
          </div>

          <div class=\"col-sm-4 mb-4\">
              <div class=\"num_count\">6</div>
              <p>
                  Make payment for organization and participants online or by cash at the venue of the training
              </p>
          </div>





      </div>


        </div>

    </div>




    <div  class='no_margin no_padding pic_background padding_20-bottom padding_30-top' style='background: url(\" ";
        // line 222
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/wall.jpg"), "html", null, true);
        yield "\") #000033 fixed no-repeat ; background-size: 130% !Important'>
        <div class='transparent_container bg-transparent_black_8'>
        </div>
        <div style='position:Relative' class='clearfix container font-white padding_20-top padding_20-bottom'>

                <h1 class=\"font-weight-900 no_margin-top text-center mb-5 font-xl\">Training Location</h1>

            <div class=\"row\">

                <div class=\"col-md-9\">
                    <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7879.318671968691!2d7.494863505079575!3d9.094764882922695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104e0a69bb8b562f%3A0x359b684aa41d63a!2sSascon+International+School!5e0!3m2!1sen!2sng!4v1506440288340\" width=\"100%\" height=\"290\" frameborder=\"0\" style=\"border:0\" allowfullscreen=\"\"></iframe>
                </div>
                <div class='col-md-3'>


                    <b>Address:</b>
                    <p>
                        ChamsCity, 19a Yedseram Street.
                        Maitama, Abuja.
                    </p>

                    <p>
                        Inside Sascon international School.
                        After the IGP's House.

                    </p>

                </div>



            </div>
        </div>
    </div>


  <div class=\"d-md-flex\">

    <div class=\"bg-white border_right col-md-6 font-black no_xs_padding-left no_xs_padding-right no_padding-bottom\">



      <div class=\"row\">


        <div class=\"col-sm-10 mx-auto padding_30  no_padding-bottom\">
          <p class=\"font-xs-2 mb-0 bottom_buffer font-weight-900 text-uppercase font-green\">Pay</p>
          <h1 class='mt-0 mb-5'>Payment details</h1>



           <p class=\"mb-4\">Please make payment to the following account details provided below:</p>

            <p> Account Name: <br><strong>PYRICH GROUP OF COMPANIES LTD.</strong></p>
            <p> Account Number:<br> <strong>1012835411</strong></p>
            <p> TIN: <br><strong>17780157-0001</strong></p>
            <p> Bank Name:<br> <strong>Zenith Bank</strong></p>



        </div>

      </div>


    </div>


    <div class=\"bg-white col-md-6 no_xs_padding-left no_xs_padding-right no_padding-bottom\" id=\"recieve_letter\">



      <div class=\"row\">


        <div class=\"col-sm-10 mx-auto padding_30  no_padding-bottom\">
          <p class=\"font-xs-2 mb-0 bottom_buffer font-weight-900 text-uppercase font-green\">Training</p>
          <h1 class='mt-0 mb-5'>Available sessions</h1>
          <p class=\"\">
            Below are the currently available sessions in the training to apply for. Each session has a duration of Two (2) days:
          </p>



            ";
        // line 306
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["training_session"]) || array_key_exists("training_session", $context) ? $context["training_session"] : (function () { throw new RuntimeError('Variable "training_session" does not exist.', 306, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["session"]) {
            // line 307
            yield "
                <div class=\"p-3 border bg-gray mb-2\">
                ";
            // line 309
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["session"], "name", [], "any", false, false, false, 309), "html", null, true);
            yield "
                    <p class=\"m-0 font-xs\"><span class=\"badge badge-primary\">DATE</span>: ";
            // line 310
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["session"], "startdate", [], "any", false, false, false, 310), "l, F j Y"), "html", null, true);
            yield "</p>
                </div>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['session'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 314
        yield "


        </div>

      </div>


    </div>

  </div>





";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "pages/home.html.twig";
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
        return array (  423 => 314,  413 => 310,  409 => 309,  405 => 307,  401 => 306,  314 => 222,  262 => 172,  202 => 111,  134 => 46,  128 => 43,  122 => 40,  116 => 37,  110 => 34,  94 => 21,  77 => 7,  74 => 6,  72 => 5,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

    {% include 'common/nav.html.twig' %}

  <div  class='no_margin no_padding pic_background padding_50-bottom padding_100-top' style='background: url(\" {{ asset('assets/images/wall.jpg') }}\") #000033 fixed no-repeat ; background-size: 130% !Important'>
    <div class='transparent_container bg-transparent_black_5'>
    </div>
    <div style='position:Relative' class='clearfix container font-white padding_20-top padding_20-bottom'>

      <div class=\"row\">
        <div class='col-md-7 col-sm-12 mx-auto text-center'>
          <p class=\"font-sm-4 text-uppercase font-lg-3\">Federal Character Commission</p>
          <h1 class=\"font-weight-900 no_margin-top font-xl-2\">Agency Wide Training</h1>
          <p class=\"font-sm-4 lead mb-5\">
            ONLINE SUBMISSION OF NOMINAL ROLL, FORMAT AND PROCESSES
          </p>


          <a href=\"{{ path('login') }}\" class=\"btn btn-lg top_buffer btn-primary\">Apply Now <i class=\"fa fa-paper-plane\"></i></a>
          <a href=\"#recieve_letter\" class='btn btn-lg top_buffer btn-success'>Receive training letter <i class=\"fa fa-file\"></i></a>
        </div>



      </div>
    </div>
  </div>

<div class=\"mt-2\">
    <div class=\"owl-carousel\">
        <div class=\"item\">
            <img src=\"{{ asset('assets/images/IMG_20171018_121053.jpg') }}\" class=\"img-float\">
        </div>
        <div class=\"item\">
            <img src=\"{{ asset('assets/images/IMG_20171018_121106.jpg') }}\" class=\"img-float\">
        </div>
        <div class=\"item\">
            <img src=\"{{ asset('assets/images/IMG_20171016_115222.jpg') }}\" class=\"img-float\">
        </div>
        <div class=\"item\">
            <img src=\"{{ asset('assets/images/IMG_20171017_164254-2.jpg') }}\" class=\"img-float\">
        </div>
        <div class=\"item\">
            <img src=\"{{ asset('assets/images/IMG_20171016_122040.jpg') }}\" class=\"img-float\">
        </div>


    </div>
</div>

    <div class=\"text-center\">
    <a href=\"\" class=\"btn btn-default font-white mx-auto mt-2 mb-2 font-xs bg-transparent_black_2\" style=\"border-radius:20px\"><i class=\"fa fa-arrow-left\"></i> Click and drag left</a>
    </div>

    <script>
        var owl = \$('.owl-carousel');
        owl.owlCarousel({
            margin: 10,
            loop: true,
            autoplayTimeout:5000,
            autoplayHoverPause:false,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 3
                }
            }
        })
    </script>


  <div class=\"bg-white border_bottom padding_50 no_xs_padding-left no_xs_padding-right no_padding-bottom\" id=\"about_training\">

    <div class=\"container\">

      <div class=\"row\">



        <div class=\"col-md-10 col-sm-12 text-center mx-auto no_padding-bottom\">
          <p class=\"font-xs-2 mb-0 bottom_buffer font-weight-900 text-uppercase font-green\">Introduction</p>
          <h1 class='mt-0 mb-5'>About the training</h1>
          <p class=' bottom_buffer font-light text-primary text-justify line-height'>
            The FEDERAL CHARACTER COMMISSION is organising a two - day workshop titled
            \"ONLINE SUBMISSION OF NOMINAL ROLL, FORMAT AND PROCESSES\"
            scheduled to hold in batches at Chams City, Training Center, Maitama Abuja, Nigeria.
          </p>

          <p class=' bottom_buffer font-sm-2 text-justify font-light text-primary line-height'>
            This workshop is being reorganized to update participants with the emerging trends and best practices as well as to address the observed lapses/challenges found in the submission of some MDAs who had earlier attended a similar workshop with the commission in 2013 It is also to sensitize and train the Desk Officers of the Federal Ministries, Departments and Agencies on the correct Format and Process of forwarding their Nominal Rolls online through the Commission's website/Portal which would ensure smooth and timely submission of their returns.
          </p>

            <div id=\"recieve_letter\"></div>

        </div>

      </div>

    </div>

  </div>


    <div  class='no_margin no_padding pic_background padding_20-bottom padding_30-top' style='background: url(\" {{ asset('assets/images/wall.jpg') }}\") #000033 fixed no-repeat ; background-size: 130% !Important'>
        <div class='transparent_container bg-transparent_black_8'>
        </div>
        <div style='position:Relative' class='clearfix container font-white padding_20-top padding_20-bottom'>

            <div class=\"row\">
                <div class='col-md-7 col-sm-12 mx-auto text-center'>

                    <h1 class=\"font-weight-900 no_margin-top font-xl\">Receive training letter</h1>
                    <p class=\"font-sm-4 lead mb-5\">
                        If you are the Desk Officer in charge of submitting nominal roll to FCC and your agency have not received any letter concerning the on-going training, please enter your MDA Code to generate/print a softcopy of the letter for further action.
                    </p>
                    <form method=\"POST\">


                        <div class=\"form-group\">


                            <input type=\"text\" name=\"mda_code\" placeholder=\"Enter MDA Code\" onkeypress=\"return isNumber(event)\" required class=\"form-control form-control-lg\">

                        </div>



                        <button class=\"btn btn-primary\">Submit</button>
                    </form>
                </div>



            </div>
        </div>
    </div>



    <div class=\"bg-green font-white text-center font-black no_xs_padding-left no_xs_padding-right no_padding-bottom padding_30\">

        <div class=\"container\">

        <p class=\"font-xs-2 mb-0 bottom_buffer font-weight-900 text-uppercase font-black\">MDAs</p>
        <h1 class='mt-0 mb-5'>How to apply</h1>

      <div class=\"row\">


          <div class=\"col-sm-4 mb-4\">
            <div class=\"num_count\">1</div>
              <p>Obtain the <strong>MDA Establishment Code</strong> from the invitation letter sent to your MDA
              for participation.
            </p>
          </div>

          <div class=\"col-sm-4 mb-4\">
              <div class=\"num_count\">2</div>
            <p>Use the <strong>MDA Establishment Code</strong> to create an account for
              your MDA
              {#<div style=\"clear: both; font-size: 0.85em; font-style: normal; padding-left: 25px; font-weight:900\" class=\" \"><strong class=\"text-danger\">Note:</strong>
                During MDA registration, please follow the on-screen guide for a quick and easy
                registration.
              </div>#}
            </p>
          </div>

          <div class=\"col-sm-4 mb-4\">
              <div class=\"num_count\">3</div>
            <p>On successful registration, you will be required to <strong>verify and authenticate</strong>
              your account. Please follow the guide(s) you received via <strong>EMAIL</strong> &amp; <strong>SMS
                Message</strong> for the verification process.
            </p>
          </div>


          <div class=\"col-sm-4 mb-4\">
              <div class=\"num_count\">4</div>
            <p>After account creation and verification, you can then proceed to log into your account.
              <div style=\"clear: both; font-size: 0.85em; font-style: normal; padding-left: 25px; font-weight:900\" class=\"\"><strong class=\"text-danger\">Note:</strong>
                Please note that the account registration and verification is done only once for a MDA.
              </div>
            </p>
          </div>

          <div class=\"col-sm-4 mb-4\">
              <div class=\"num_count\">5</div>
            <p>
              On successful login, You can add participants for the training and also select a training
              session to attend.
            </p>
          </div>

          <div class=\"col-sm-4 mb-4\">
              <div class=\"num_count\">6</div>
              <p>
                  Make payment for organization and participants online or by cash at the venue of the training
              </p>
          </div>





      </div>


        </div>

    </div>




    <div  class='no_margin no_padding pic_background padding_20-bottom padding_30-top' style='background: url(\" {{ asset('assets/images/wall.jpg') }}\") #000033 fixed no-repeat ; background-size: 130% !Important'>
        <div class='transparent_container bg-transparent_black_8'>
        </div>
        <div style='position:Relative' class='clearfix container font-white padding_20-top padding_20-bottom'>

                <h1 class=\"font-weight-900 no_margin-top text-center mb-5 font-xl\">Training Location</h1>

            <div class=\"row\">

                <div class=\"col-md-9\">
                    <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7879.318671968691!2d7.494863505079575!3d9.094764882922695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104e0a69bb8b562f%3A0x359b684aa41d63a!2sSascon+International+School!5e0!3m2!1sen!2sng!4v1506440288340\" width=\"100%\" height=\"290\" frameborder=\"0\" style=\"border:0\" allowfullscreen=\"\"></iframe>
                </div>
                <div class='col-md-3'>


                    <b>Address:</b>
                    <p>
                        ChamsCity, 19a Yedseram Street.
                        Maitama, Abuja.
                    </p>

                    <p>
                        Inside Sascon international School.
                        After the IGP's House.

                    </p>

                </div>



            </div>
        </div>
    </div>


  <div class=\"d-md-flex\">

    <div class=\"bg-white border_right col-md-6 font-black no_xs_padding-left no_xs_padding-right no_padding-bottom\">



      <div class=\"row\">


        <div class=\"col-sm-10 mx-auto padding_30  no_padding-bottom\">
          <p class=\"font-xs-2 mb-0 bottom_buffer font-weight-900 text-uppercase font-green\">Pay</p>
          <h1 class='mt-0 mb-5'>Payment details</h1>



           <p class=\"mb-4\">Please make payment to the following account details provided below:</p>

            <p> Account Name: <br><strong>PYRICH GROUP OF COMPANIES LTD.</strong></p>
            <p> Account Number:<br> <strong>1012835411</strong></p>
            <p> TIN: <br><strong>17780157-0001</strong></p>
            <p> Bank Name:<br> <strong>Zenith Bank</strong></p>



        </div>

      </div>


    </div>


    <div class=\"bg-white col-md-6 no_xs_padding-left no_xs_padding-right no_padding-bottom\" id=\"recieve_letter\">



      <div class=\"row\">


        <div class=\"col-sm-10 mx-auto padding_30  no_padding-bottom\">
          <p class=\"font-xs-2 mb-0 bottom_buffer font-weight-900 text-uppercase font-green\">Training</p>
          <h1 class='mt-0 mb-5'>Available sessions</h1>
          <p class=\"\">
            Below are the currently available sessions in the training to apply for. Each session has a duration of Two (2) days:
          </p>



            {% for session in training_session %}

                <div class=\"p-3 border bg-gray mb-2\">
                {{ session.name }}
                    <p class=\"m-0 font-xs\"><span class=\"badge badge-primary\">DATE</span>: {{ session.startdate|date(\"l, F j Y\") }}</p>
                </div>

            {% endfor %}



        </div>

      </div>


    </div>

  </div>





{% endblock %}", "pages/home.html.twig", "C:\\laragon\\www\\training\\templates\\pages\\home.html.twig");
    }
}
