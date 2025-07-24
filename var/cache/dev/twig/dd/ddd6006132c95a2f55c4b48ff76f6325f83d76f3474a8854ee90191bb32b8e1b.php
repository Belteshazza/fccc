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

/* base.html.twig */
class __TwigTemplate_e846b5e60b09517b421a247c9b9bdbf81fcc80217348ceefee13d2279d81ace6 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
        <link rel=\"shortcut icon\" type=\"image/png\" href=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/fav_ico.png"), "html", null, true);
        yield "\"/>
        ";
        // line 7
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 20
        yield "

        ";
        // line 22
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 35
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
        ";
        // line 54
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 55
        yield "

        ";
        // line 57
        yield from         $this->loadTemplate("common/footer.html.twig", "base.html.twig", 57)->unwrap()->yield($context);
        // line 58
        yield "

        ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 60, $this->source); })()), "session", [], "any", false, false, false, 60), "flashbag", [], "any", false, false, false, 60), "get", ["error"], "method", false, false, false, 60));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 61
            yield "
            <script>
                toastr.error(\"";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["flashMessage"], "html", null, true);
            yield "\");
            </script>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        yield "

        ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 69, $this->source); })()), "session", [], "any", false, false, false, 69), "flashbag", [], "any", false, false, false, 69), "get", ["success"], "method", false, false, false, 69));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 70
            yield "
            <script>
                toastr.success(\"";
            // line 72
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["flashMessage"], "html", null, true);
            yield "\");
            </script>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        yield "


    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        return; yield '';
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Welcome!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        return; yield '';
    }

    // line 7
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        yield "            <link rel=\"stylesheet\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/look_css/css/look_base_v2.min.css"), "html", null, true);
        yield "\" >
            <link rel=\"stylesheet\" href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/font-awesome-4.7.0/css/font-awesome.min.css"), "html", null, true);
        yield "\">
            <link rel=\"stylesheet\" href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        yield "\">
            <link rel=\"stylesheet\" href=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/toastr.css"), "html", null, true);
        yield "\">
            <link rel=\"stylesheet\" href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        yield "\">
            <link rel=\"stylesheet\" href=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/select2.css"), "html", null, true);
        yield "\">

            <link rel=\"stylesheet\" href=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/scss/owl.carousel.css"), "html", null, true);
        yield "\">
            <link rel=\"stylesheet\" href=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/scss/owl.theme.default.css"), "html", null, true);
        yield "\">


        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        return; yield '';
    }

    // line 22
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 23
        yield "            <script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.js"), "html", null, true);
        yield "\"></script>
            <script src=\"//www.powr.io/powr.js?external-type=html\"></script>
            <link href=\"https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.css\" rel=\"stylesheet\">
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.js\"></script>
            <script src=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/owl.carousel.js"), "html", null, true);
        yield "\"></script>
            <script src=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/popper.min.js"), "html", null, true);
        yield "\"></script>
            <script src=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.js"), "html", null, true);
        yield "\"></script>
            <script src=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/toastr.js"), "html", null, true);
        yield "\"></script>
            <script src=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/timeago.js"), "html", null, true);
        yield "\"></script>
            <script src=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/select2.js"), "html", null, true);
        yield "\"></script>
            <script src=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/script.js"), "html", null, true);
        yield "\"></script>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        return; yield '';
    }

    // line 54
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

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "base.html.twig";
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
        return array (  289 => 54,  276 => 33,  272 => 32,  268 => 31,  264 => 30,  260 => 29,  256 => 28,  252 => 27,  244 => 23,  234 => 22,  219 => 16,  215 => 15,  210 => 13,  206 => 12,  202 => 11,  198 => 10,  194 => 9,  189 => 8,  179 => 7,  159 => 5,  143 => 76,  133 => 72,  129 => 70,  125 => 69,  121 => 67,  111 => 63,  107 => 61,  103 => 60,  99 => 58,  97 => 57,  93 => 55,  91 => 54,  70 => 35,  68 => 22,  64 => 20,  62 => 7,  58 => 6,  54 => 5,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        <link rel=\"shortcut icon\" type=\"image/png\" href=\"{{ asset('assets/images/fav_ico.png') }}\"/>
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('assets/look_css/css/look_base_v2.min.css') }}\" >
            <link rel=\"stylesheet\" href=\"{{ asset('assets/font-awesome-4.7.0/css/font-awesome.min.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('assets/css/bootstrap.min.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('assets/css/toastr.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('assets/css/style.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('assets/css/select2.css') }}\">

            <link rel=\"stylesheet\" href=\"{{ asset('assets/scss/owl.carousel.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('assets/scss/owl.theme.default.css') }}\">


        {% endblock %}


        {% block javascripts %}
            <script src=\"{{ asset('assets/js/jquery.js') }}\"></script>
            <script src=\"//www.powr.io/powr.js?external-type=html\"></script>
            <link href=\"https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.css\" rel=\"stylesheet\">
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.js\"></script>
            <script src=\"{{ asset('assets/js/owl.carousel.js') }}\"></script>
            <script src=\"{{ asset('assets/js/popper.min.js') }}\"></script>
            <script src=\"{{ asset('assets/js/bootstrap.js') }}\"></script>
            <script src=\"{{ asset('assets/js/toastr.js') }}\"></script>
            <script src=\"{{ asset('assets/js/timeago.js') }}\"></script>
            <script src=\"{{ asset('assets/js/select2.js') }}\"></script>
            <script src=\"{{ asset('assets/js/script.js') }}\"></script>
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
        {% block body %}{% endblock %}


        {% include'common/footer.html.twig' %}


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
", "base.html.twig", "C:\\laragon\\www\\training\\templates\\base.html.twig");
    }
}
