<?php

/* common/footer.html.twig */
class __TwigTemplate_6d736a1565bf231e27cbc91dace87bb15bff3cde24720ccf0286c16d8bc3357c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<footer class=\"bg-dark font-white\">
    <div class=\"container p-5 text-center\">

        <p>&copy;";
        // line 4
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo ". Federal Character Commission of Nigeria</p>

        <b>Metrics:</b>

        <div class=\"col-sm-3 text-left mx-auto\">
        <div class=\"row\">

            <div class=\"col-sm-12\">

                <div class=\"powr-hit-counter\" id=\"11e3b9ae_1523075602\"></div>
                <div class=\"powr-popup\" id=\"be4fb4df_1523076446\"></div>
            </div>";
        // line 33
        echo "
        </div>
        </div>


    </div>
</footer>


";
    }

    public function getTemplateName()
    {
        return "common/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 33,  24 => 4,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "common/footer.html.twig", "C:\\laragon\\www\\training\\templates\\common\\footer.html.twig");
    }
}
