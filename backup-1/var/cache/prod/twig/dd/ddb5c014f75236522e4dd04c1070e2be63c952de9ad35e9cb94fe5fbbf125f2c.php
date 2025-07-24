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
    <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 37
        echo "

</head>
<body>



<div class=\"page\">

    ";
        // line 46
        $this->loadTemplate("common/admin_header.html.twig", "admin_base.html.twig", 46)->display($context);
        // line 47
        echo "
    <div class=\"page-content d-flex align-items-stretch\">

        ";
        // line 50
        $this->loadTemplate("common/admin_nav.html.twig", "admin_base.html.twig", 50)->display($context);
        // line 51
        echo "        <div class=\"content-inner\">

            <header class=\"page-header\">
                <div class=\"container-fluid\">
                    <h2 class=\"no-margin-bottom\">";
        // line 55
        echo twig_escape_filter($this->env, ($context["page_title"] ?? null), "html", null, true);
        echo "</h2>
                </div>
            </header>

            <div class=\"p-5\">
    ";
        // line 60
        $this->displayBlock('body', $context, $blocks);
        // line 61
        echo "
            </div>
        </div>

    </div>

</div>


";
        // line 70
        $this->displayBlock('javascripts', $context, $blocks);
        // line 97
        echo "


";
        // line 100
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 101
            echo "
    <script>
        toastr.error(\"";
            // line 103
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "\");
    </script>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        echo "

";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 110
            echo "
    <script>
        toastr.success(\"";
            // line 112
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "\");
    </script>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        echo "</body>
</html>
";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, ($context["page_title"] ?? null), "html", null, true);
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 11
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/look_css/css/look_base_v2.min.css"), "html", null, true);
        echo "\" type=\"text/style\">
        <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/toastr.css"), "html", null, true);
        echo "\" type=\"text/style\">
        <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\" type=\"text/style\">
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/jquery-ui.css"), "html", null, true);
        echo "\" type=\"text/style\">
        <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/select2.css"), "html", null, true);
        echo "\" type=\"text/style\">
        <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/datatables.min.css"), "html", null, true);
        echo "\" type=\"text/style\">


        <!-- Bootstrap CSS-->
        <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset2/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <!-- Font Awesome CSS-->
        <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset2/vendor/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\">
        <!-- Fontastic Custom icon font-->
        <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset2/css/fontastic.css"), "html", null, true);
        echo "\">
        <!-- Google fonts - Poppins
        <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Poppins:300,400,700\"> -->
        <!-- theme stylesheet-->
        <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset2/css/style.default.css"), "html", null, true);
        echo "\" id=\"theme-stylesheet\">
        <!-- Custom stylesheet - for your changes-->
        <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset2/css/custom.css"), "html", null, true);
        echo "\">
        <!-- Favicon-->
        <link rel=\"shortcut icon\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset2/img/favicon.ico"), "html", null, true);
        echo "\">
        <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
        <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script><![endif]-->
    ";
    }

    // line 60
    public function block_body($context, array $blocks = array())
    {
    }

    // line 70
    public function block_javascripts($context, array $blocks = array())
    {
        // line 71
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery-ui.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/toastr.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/timeago.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/select2.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/datatables.min.js"), "html", null, true);
        echo "\"></script>

    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.css\" rel=\"stylesheet\">
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.js\"></script>

    <script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/script.js"), "html", null, true);
        echo "\"></script>


    <!-- <script src=\"https://code.jquery.com/jquery-3.2.1.min.js\"></script> -->
    <script src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset2/vendor/popper.js/umd/popper.min.js"), "html", null, true);
        echo "\"> </script>
    <script src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset2/vendor/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset2/vendor/jquery.cookie/jquery.cookie.js"), "html", null, true);
        echo "\"> </script>
    <script src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset2/vendor/chart.js/Chart.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset2/vendor/jquery-validation/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("asset2/js/charts-home.js"), "html", null, true);
        echo "\"></script>


    <!-- Main File-->
    <script src=\"";
        // line 94
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
        return array (  283 => 94,  276 => 90,  272 => 89,  268 => 88,  264 => 87,  260 => 86,  256 => 85,  249 => 81,  241 => 76,  237 => 75,  233 => 74,  229 => 73,  225 => 72,  220 => 71,  217 => 70,  212 => 60,  203 => 32,  198 => 30,  193 => 28,  186 => 24,  181 => 22,  176 => 20,  169 => 16,  165 => 15,  161 => 14,  157 => 13,  153 => 12,  148 => 11,  145 => 10,  139 => 8,  133 => 116,  123 => 112,  119 => 110,  115 => 109,  111 => 107,  101 => 103,  97 => 101,  93 => 100,  88 => 97,  86 => 70,  75 => 61,  73 => 60,  65 => 55,  59 => 51,  57 => 50,  52 => 47,  50 => 46,  39 => 37,  37 => 10,  32 => 8,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin_base.html.twig", "/home/federalc/public_html/training/templates/admin_base.html.twig");
    }
}
