<?php

/* admin_base.html.twig */
class __TwigTemplate_14d168a13fca3eb2df1f7d0b40245ea8dbb060461cf4128449fc64d0228f7186 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"robots\" content=\"all,follow\">
    <link rel=\"shortcut icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/fav_ico.png"), "html", null, true);
        echo "\"/>
    <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 38
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



<div class=\"page\">

    ";
        // line 63
        $this->loadTemplate("common/admin_header.html.twig", "admin_base.html.twig", 63)->display($context);
        // line 64
        echo "
    <div class=\"page-content d-flex align-items-stretch\">

        ";
        // line 67
        $this->loadTemplate("common/admin_nav.html.twig", "admin_base.html.twig", 67)->display($context);
        // line 68
        echo "        <div class=\"content-inner\">

            <header class=\"page-header\">
                <div class=\"container-fluid\">
                    <h2 class=\"no-margin-bottom\">";
        // line 72
        echo twig_escape_filter($this->env, ($context["page_title"] ?? null), "html", null, true);
        echo "</h2>
                </div>
            </header>

            <div class=\"p-5\">
    ";
        // line 77
        $this->displayBlock('body', $context, $blocks);
        // line 78
        echo "
            </div>
        </div>

    </div>

</div>


";
        // line 87
        $this->displayBlock('javascripts', $context, $blocks);
        // line 114
        echo "


";
        // line 117
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 118
            echo "
    <script>
        toastr.error(\"";
            // line 120
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "\");
    </script>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        echo "

";
        // line 126
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 127
            echo "
    <script>
        toastr.success(\"";
            // line 129
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "\");
    </script>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 133
        echo "


</body>
</html>
";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, ($context["page_title"] ?? null), "html", null, true);
    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 12
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/look_css/css/look_base_v2.min.css"), "html", null, true);
        echo "\" type=\"text/style\">
        <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/toastr.css"), "html", null, true);
        echo "\" type=\"text/style\">
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\" type=\"text/style\">
        <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/jquery-ui.css"), "html", null, true);
        echo "\" type=\"text/style\">
        <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/select2.css"), "html", null, true);
        echo "\" type=\"text/style\">
        <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/datatables.min.css"), "html", null, true);
        echo "\" type=\"text/style\">


        <!-- Bootstrap CSS-->
        <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset2/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <!-- Font Awesome CSS-->
        <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset2/vendor/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\">
        <!-- Fontastic Custom icon font-->
        <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset2/css/fontastic.css"), "html", null, true);
        echo "\">
        <!-- Google fonts - Poppins
        <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Poppins:300,400,700\"> -->
        <!-- theme stylesheet-->
        <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset2/css/style.default.css"), "html", null, true);
        echo "\" id=\"theme-stylesheet\">
        <!-- Custom stylesheet - for your changes-->
        <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset2/css/custom.css"), "html", null, true);
        echo "\">
        <!-- Favicon-->
        <link rel=\"shortcut icon\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset2/img/favicon.ico"), "html", null, true);
        echo "\">
        <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
        <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script><![endif]-->
    ";
    }

    // line 77
    public function block_body($context, array $blocks = array())
    {
    }

    // line 87
    public function block_javascripts($context, array $blocks = array())
    {
        // line 88
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery-ui.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/toastr.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/timeago.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/select2.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/datatables.min.js"), "html", null, true);
        echo "\"></script>

    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.css\" rel=\"stylesheet\">
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.js\"></script>

    <script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/script.js"), "html", null, true);
        echo "\"></script>


    <!-- <script src=\"https://code.jquery.com/jquery-3.2.1.min.js\"></script> -->
    <script src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset2/vendor/popper.js/umd/popper.min.js"), "html", null, true);
        echo "\"> </script>
    <script src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset2/vendor/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset2/vendor/jquery.cookie/jquery.cookie.js"), "html", null, true);
        echo "\"> </script>
    <script src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset2/vendor/chart.js/Chart.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset2/vendor/jquery-validation/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset2/js/charts-home.js"), "html", null, true);
        echo "\"></script>


    <!-- Main File-->
    <script src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset2/js/front.js"), "html", null, true);
        echo "\"></script>

";
    }

    public function getTemplateName()
    {
        return "admin_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  306 => 111,  299 => 107,  295 => 106,  291 => 105,  287 => 104,  283 => 103,  279 => 102,  272 => 98,  264 => 93,  260 => 92,  256 => 91,  252 => 90,  248 => 89,  243 => 88,  240 => 87,  235 => 77,  226 => 33,  221 => 31,  216 => 29,  209 => 25,  204 => 23,  199 => 21,  192 => 17,  188 => 16,  184 => 15,  180 => 14,  176 => 13,  171 => 12,  168 => 11,  162 => 9,  153 => 133,  143 => 129,  139 => 127,  135 => 126,  131 => 124,  121 => 120,  117 => 118,  113 => 117,  108 => 114,  106 => 87,  95 => 78,  93 => 77,  85 => 72,  79 => 68,  77 => 67,  72 => 64,  70 => 63,  43 => 38,  41 => 11,  36 => 9,  32 => 8,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin_base.html.twig", "/home/federalc/public_html/training/templates/admin_base.html.twig");
    }
}
