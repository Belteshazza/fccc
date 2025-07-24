<?php

/* base2.html.twig */
class __TwigTemplate_2c1d5e4644e8cd0add3c2d26d456ac9ff41144c1d1576de3940ea42d8216c24c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "

        ";
        // line 16
        $this->displayBlock('javascripts', $context, $blocks);
        // line 25
        echo "
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
        // line 44
        $this->displayBlock('body', $context, $blocks);
        // line 45
        echo "

        ";
        // line 47
        $this->loadTemplate("common/footer.html.twig", "base2.html.twig", 47)->display($context);
        // line 48
        echo "

    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "request", array()), "getSchemeAndHttpHost", array(), "method") . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/look_css/css/look_base_v2.min.css")), "html", null, true);
        echo "\" media=\"screen, print\" type=\"text/style\">
            <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "request", array()), "getSchemeAndHttpHost", array(), "method") . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/font-awesome-4.7.0/css/font-awesome.min.css")), "html", null, true);
        echo "\" type=\"text/style\">
            <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "request", array()), "getSchemeAndHttpHost", array(), "method") . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/bootstrap.min.css")), "html", null, true);
        echo "\" media=\"screen, print\" type=\"text/style\">
            <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "request", array()), "getSchemeAndHttpHost", array(), "method") . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/toastr.css")), "html", null, true);
        echo "\" type=\"text/style\">
            <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "request", array()), "getSchemeAndHttpHost", array(), "method") . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/style.css")), "html", null, true);
        echo "\" type=\"text/style\">
            <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "request", array()), "getSchemeAndHttpHost", array(), "method") . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/select2.css")), "html", null, true);
        echo "\" type=\"text/style\">
        ";
    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        // line 17
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "request", array()), "getSchemeAndHttpHost", array(), "method") . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.js")), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "request", array()), "getSchemeAndHttpHost", array(), "method") . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/popper.min.js")), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "request", array()), "getSchemeAndHttpHost", array(), "method") . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/bootstrap.js")), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "request", array()), "getSchemeAndHttpHost", array(), "method") . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/toastr.js")), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "request", array()), "getSchemeAndHttpHost", array(), "method") . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/timeago.js")), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "request", array()), "getSchemeAndHttpHost", array(), "method") . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/select2.js")), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "request", array()), "getSchemeAndHttpHost", array(), "method") . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/script.js")), "html", null, true);
        echo "\"></script>
        ";
    }

    // line 44
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "base2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 44,  142 => 23,  138 => 22,  134 => 21,  130 => 20,  126 => 19,  122 => 18,  117 => 17,  114 => 16,  108 => 12,  104 => 11,  100 => 10,  96 => 9,  92 => 8,  87 => 7,  84 => 6,  78 => 5,  70 => 48,  68 => 47,  64 => 45,  62 => 44,  41 => 25,  39 => 16,  35 => 14,  33 => 6,  29 => 5,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "base2.html.twig", "/home/federalc/public_html/training/templates/base2.html.twig");
    }
}
