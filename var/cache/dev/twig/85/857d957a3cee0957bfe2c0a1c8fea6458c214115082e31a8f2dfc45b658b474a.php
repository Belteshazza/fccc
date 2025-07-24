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

/* admin_base.html.twig */
class __TwigTemplate_c9b1f4ddf98aa5b68f1513326ea691f10b19ebde60f0ab26dabb304fa90b5a29 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"robots\" content=\"all,follow\">
    <link rel=\"shortcut icon\" type=\"image/png\" href=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/fav_ico.png"), "html", null, true);
        yield "\"/>
    <title>";
        // line 9
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>

    ";
        // line 11
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 38
        yield "
    <script>
        window['_fs_debug'] = false;
        window['_fs_host'] = 'fullstory.com';
        window['_fs_org'] = 'AVV4N';
        window['_fs_namespace'] = 'FS';
        (function(m,n,e,t,l,o,g,y){
            if (e in m) {if(m.console && m.console.log) { m.console.log('FullStory namespace conflict. Please set window[\"_fs_namespace\"].');} return;}
            g=m[e]=function(a,b){g.q?g.q.push([a,b]):g._api(a,b);};g.q=[];
            o=n.createElement(t);o.async=1;o.src='https://'+_fs_host+'/s/fs.js';
            y=n.getElementsByTagName(t)[0];y.parentNode.insertBefore(o,y);
            g.identify=function(i,v){g(l,{uid:i});if(v)g(l,v)};g.setUserVars=function(v){g(l,v)};
            y=\"rec\";g.shutdown=function(i,v){g(y,!1)};g.restart=function(i,v){g(y,!0)};
            g.identifyAccount=function(i,v){o='account';v=v||{};v.acctId=i;g(o,v)};
            g.clearUserCookie=function(){};
        })(window,document,window['_fs_namespace'],'script','user');
    </script>

</head>
<body>



<div class=\"page\">

    ";
        // line 63
        yield from         $this->loadTemplate("common/admin_header.html.twig", "admin_base.html.twig", 63)->unwrap()->yield($context);
        // line 64
        yield "
    <div class=\"page-content d-flex align-items-stretch\">

        ";
        // line 67
        yield from         $this->loadTemplate("common/admin_nav.html.twig", "admin_base.html.twig", 67)->unwrap()->yield($context);
        // line 68
        yield "        <div class=\"content-inner\">

            <header class=\"page-header\">
                <div class=\"container-fluid\">
                    <h2 class=\"no-margin-bottom\">";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["page_title"]) || array_key_exists("page_title", $context) ? $context["page_title"] : (function () { throw new RuntimeError('Variable "page_title" does not exist.', 72, $this->source); })()), "html", null, true);
        yield "</h2>
                </div>
            </header>

            <div class=\"p-5\">
    ";
        // line 77
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 78
        yield "
            </div>
        </div>

    </div>

</div>


";
        // line 87
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 114
        yield "


";
        // line 117
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 117, $this->source); })()), "session", [], "any", false, false, false, 117), "flashbag", [], "any", false, false, false, 117), "get", ["error"], "method", false, false, false, 117));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 118
            yield "
    <script>
        toastr.error(\"";
            // line 120
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["flashMessage"], "html", null, true);
            yield "\");
    </script>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        yield "

";
        // line 126
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 126, $this->source); })()), "session", [], "any", false, false, false, 126), "flashbag", [], "any", false, false, false, 126), "get", ["success"], "method", false, false, false, 126));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 127
            yield "
    <script>
        toastr.success(\"";
            // line 129
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["flashMessage"], "html", null, true);
            yield "\");
    </script>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 133
        yield "


</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        return; yield '';
    }

    // line 9
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["page_title"]) || array_key_exists("page_title", $context) ? $context["page_title"] : (function () { throw new RuntimeError('Variable "page_title" does not exist.', 9, $this->source); })()), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        return; yield '';
    }

    // line 11
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        yield "        <link rel=\"stylesheet\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/look_css/css/look_base_v2.min.css"), "html", null, true);
        yield "\" type=\"text/style\">
        <link rel=\"stylesheet\" href=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/toastr.css"), "html", null, true);
        yield "\" type=\"text/style\">
        <link rel=\"stylesheet\" href=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        yield "\" type=\"text/style\">
        <link rel=\"stylesheet\" href=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/jquery-ui.css"), "html", null, true);
        yield "\" type=\"text/style\">
        <link rel=\"stylesheet\" href=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/select2.css"), "html", null, true);
        yield "\" type=\"text/style\">
        <link rel=\"stylesheet\" href=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/datatables.min.css"), "html", null, true);
        yield "\" type=\"text/style\">


        <!-- Bootstrap CSS-->
        <link rel=\"stylesheet\" href=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset2/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        yield "\">
        <!-- Font Awesome CSS-->
        <link rel=\"stylesheet\" href=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset2/vendor/font-awesome/css/font-awesome.min.css"), "html", null, true);
        yield "\">
        <!-- Fontastic Custom icon font-->
        <link rel=\"stylesheet\" href=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset2/css/fontastic.css"), "html", null, true);
        yield "\">
        <!-- Google fonts - Poppins
        <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Poppins:300,400,700\"> -->
        <!-- theme stylesheet-->
        <link rel=\"stylesheet\" href=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset2/css/style.default.css"), "html", null, true);
        yield "\" id=\"theme-stylesheet\">
        <!-- Custom stylesheet - for your changes-->
        <link rel=\"stylesheet\" href=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset2/css/custom.css"), "html", null, true);
        yield "\">
        <!-- Favicon-->
        <link rel=\"shortcut icon\" href=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset2/img/favicon.ico"), "html", null, true);
        yield "\">
        <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
        <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script><![endif]-->
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        return; yield '';
    }

    // line 77
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        return; yield '';
    }

    // line 87
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 88
        yield "    <script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery-ui.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 90
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/toastr.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/timeago.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 92
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/select2.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/datatables.min.js"), "html", null, true);
        yield "\"></script>

    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.css\" rel=\"stylesheet\">
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.js\"></script>

    <script src=\"";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/script.js"), "html", null, true);
        yield "\"></script>


    <!-- <script src=\"https://code.jquery.com/jquery-3.2.1.min.js\"></script> -->
    <script src=\"";
        // line 102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset2/vendor/popper.js/umd/popper.min.js"), "html", null, true);
        yield "\"> </script>
    <script src=\"";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset2/vendor/bootstrap/js/bootstrap.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 104
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset2/vendor/jquery.cookie/jquery.cookie.js"), "html", null, true);
        yield "\"> </script>
    <script src=\"";
        // line 105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset2/vendor/chart.js/Chart.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset2/vendor/jquery-validation/jquery.validate.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 107
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset2/js/charts-home.js"), "html", null, true);
        yield "\"></script>


    <!-- Main File-->
    <script src=\"";
        // line 111
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset2/js/front.js"), "html", null, true);
        yield "\"></script>

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
        return "admin_base.html.twig";
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
        return array (  387 => 111,  380 => 107,  376 => 106,  372 => 105,  368 => 104,  364 => 103,  360 => 102,  353 => 98,  345 => 93,  341 => 92,  337 => 91,  333 => 90,  329 => 89,  324 => 88,  314 => 87,  295 => 77,  279 => 33,  274 => 31,  269 => 29,  262 => 25,  257 => 23,  252 => 21,  245 => 17,  241 => 16,  237 => 15,  233 => 14,  229 => 13,  224 => 12,  214 => 11,  194 => 9,  178 => 133,  168 => 129,  164 => 127,  160 => 126,  156 => 124,  146 => 120,  142 => 118,  138 => 117,  133 => 114,  131 => 87,  120 => 78,  118 => 77,  110 => 72,  104 => 68,  102 => 67,  97 => 64,  95 => 63,  68 => 38,  66 => 11,  61 => 9,  57 => 8,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"robots\" content=\"all,follow\">
    <link rel=\"shortcut icon\" type=\"image/png\" href=\"{{ asset('assets/images/fav_ico.png') }}\"/>
    <title>{% block title %}{{ page_title }}{% endblock %}</title>

    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('assets/look_css/css/look_base_v2.min.css') }}\" type=\"text/style\">
        <link rel=\"stylesheet\" href=\"{{ asset('assets/css/toastr.css') }}\" type=\"text/style\">
        <link rel=\"stylesheet\" href=\"{{ asset('assets/css/style.css') }}\" type=\"text/style\">
        <link rel=\"stylesheet\" href=\"{{ asset('assets/css/jquery-ui.css') }}\" type=\"text/style\">
        <link rel=\"stylesheet\" href=\"{{ asset('assets/css/select2.css') }}\" type=\"text/style\">
        <link rel=\"stylesheet\" href=\"{{ asset('assets/datatables.min.css') }}\" type=\"text/style\">


        <!-- Bootstrap CSS-->
        <link rel=\"stylesheet\" href=\"{{ asset('asset2/vendor/bootstrap/css/bootstrap.min.css') }}\">
        <!-- Font Awesome CSS-->
        <link rel=\"stylesheet\" href=\"{{ asset('asset2/vendor/font-awesome/css/font-awesome.min.css') }}\">
        <!-- Fontastic Custom icon font-->
        <link rel=\"stylesheet\" href=\"{{ asset('asset2/css/fontastic.css') }}\">
        <!-- Google fonts - Poppins
        <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Poppins:300,400,700\"> -->
        <!-- theme stylesheet-->
        <link rel=\"stylesheet\" href=\"{{ asset('asset2/css/style.default.css') }}\" id=\"theme-stylesheet\">
        <!-- Custom stylesheet - for your changes-->
        <link rel=\"stylesheet\" href=\"{{ asset('asset2/css/custom.css') }}\">
        <!-- Favicon-->
        <link rel=\"shortcut icon\" href=\"{{ asset('asset2/img/favicon.ico') }}\">
        <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
        <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script><![endif]-->
    {% endblock %}

    <script>
        window['_fs_debug'] = false;
        window['_fs_host'] = 'fullstory.com';
        window['_fs_org'] = 'AVV4N';
        window['_fs_namespace'] = 'FS';
        (function(m,n,e,t,l,o,g,y){
            if (e in m) {if(m.console && m.console.log) { m.console.log('FullStory namespace conflict. Please set window[\"_fs_namespace\"].');} return;}
            g=m[e]=function(a,b){g.q?g.q.push([a,b]):g._api(a,b);};g.q=[];
            o=n.createElement(t);o.async=1;o.src='https://'+_fs_host+'/s/fs.js';
            y=n.getElementsByTagName(t)[0];y.parentNode.insertBefore(o,y);
            g.identify=function(i,v){g(l,{uid:i});if(v)g(l,v)};g.setUserVars=function(v){g(l,v)};
            y=\"rec\";g.shutdown=function(i,v){g(y,!1)};g.restart=function(i,v){g(y,!0)};
            g.identifyAccount=function(i,v){o='account';v=v||{};v.acctId=i;g(o,v)};
            g.clearUserCookie=function(){};
        })(window,document,window['_fs_namespace'],'script','user');
    </script>

</head>
<body>



<div class=\"page\">

    {% include 'common/admin_header.html.twig' %}

    <div class=\"page-content d-flex align-items-stretch\">

        {% include 'common/admin_nav.html.twig' %}
        <div class=\"content-inner\">

            <header class=\"page-header\">
                <div class=\"container-fluid\">
                    <h2 class=\"no-margin-bottom\">{{ page_title }}</h2>
                </div>
            </header>

            <div class=\"p-5\">
    {% block body %}{% endblock %}

            </div>
        </div>

    </div>

</div>


{% block javascripts %}
    <script src=\"{{ asset('assets/js/jquery.js') }}\"></script>
    <script src=\"{{ asset('assets/js/jquery-ui.js') }}\"></script>
    <script src=\"{{ asset('assets/js/toastr.js') }}\"></script>
    <script src=\"{{ asset('assets/js/timeago.js') }}\"></script>
    <script src=\"{{ asset('assets/js/select2.js') }}\"></script>
    <script src=\"{{ asset('assets/datatables.min.js') }}\"></script>

    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.css\" rel=\"stylesheet\">
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.js\"></script>

    <script src=\"{{ asset('assets/js/script.js') }}\"></script>


    <!-- <script src=\"https://code.jquery.com/jquery-3.2.1.min.js\"></script> -->
    <script src=\"{{ asset('asset2/vendor/popper.js/umd/popper.min.js') }}\"> </script>
    <script src=\"{{ asset('asset2/vendor/bootstrap/js/bootstrap.min.js') }}\"></script>
    <script src=\"{{ asset('asset2/vendor/jquery.cookie/jquery.cookie.js') }}\"> </script>
    <script src=\"{{ asset('asset2/vendor/chart.js/Chart.min.js') }}\"></script>
    <script src=\"{{ asset('asset2/vendor/jquery-validation/jquery.validate.min.js') }}\"></script>
    <script src=\"{{ asset('asset2/js/charts-home.js') }}\"></script>


    <!-- Main File-->
    <script src=\"{{ asset('asset2/js/front.js') }}\"></script>

{% endblock %}



{% for flashMessage in app.session.flashbag.get('error') %}

    <script>
        toastr.error(\"{{ flashMessage }}\");
    </script>

{% endfor %}


{% for flashMessage in app.session.flashbag.get('success') %}

    <script>
        toastr.success(\"{{ flashMessage }}\");
    </script>

{% endfor %}



</body>
</html>
", "admin_base.html.twig", "C:\\laragon\\www\\training\\templates\\admin_base.html.twig");
    }
}
