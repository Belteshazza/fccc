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

/* @Twig/exception.css.twig */
class __TwigTemplate_a108a29c8868991e9080113a012ada72dae86bf51956f0e328e4d3926c7c1ef9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Twig/exception.css.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Twig/exception.css.twig"));

        // line 1
        $__internal_compile_0 = (("The template \"" . $this->getTemplateName()) . "\" is deprecated since Symfony 4.4, will be removed in 5.0.");
        trigger_deprecation('', '',         $__internal_compile_0." in \"@Twig/exception.css.twig\" at line 1.");
        // line 4
        yield ":root {
    --font-sans-serif: Helvetica, Arial, sans-serif;
    --page-background: #f9f9f9;
    --color-text: #222;
    /* when updating any of these colors, do the same in toolbar.css.twig */
    --color-success: #4f805d;
    --color-warning: #a46a1f;
    --color-error: #b0413e;
    --color-muted: #999;
    --tab-background: #fff;
    --tab-color: #444;
    --tab-active-background: #666;
    --tab-active-color: #fafafa;
    --tab-disabled-background: #f5f5f5;
    --tab-disabled-color: #999;
    --metric-value-background: #fff;
    --metric-value-color: inherit;
    --metric-unit-color: #999;
    --metric-label-background: #e0e0e0;
    --metric-label-color: inherit;
    --table-border: #e0e0e0;
    --table-background: #fff;
    --table-header: #e0e0e0;
    --tree-active-background: #F7E5A1;
    --exception-title-color: var(--base-2);
    --shadow: 0px 0px 1px rgba(128, 128, 128, .2);
    --border: 1px solid #e0e0e0;
    --background-error: var(--color-error);
    --trace-selected-background: #F7E5A1;
    --highlight-comment: #969896;
    --highlight-default: #222222;
    --highlight-keyword: #a71d5d;
    --highlight-string: #183691;
    --base-0: #fff;
    --base-1: #f5f5f5;
    --base-2: #e0e0e0;
    --base-3: #ccc;
    --base-4: #666;
    --base-5: #444;
    --base-6: #222;
}

html{font-family:sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%}body{margin:0}article,aside,details,figcaption,figure,footer,header,hgroup,main,menu,nav,section,summary{display:block}audio,canvas,progress,video{display:inline-block;vertical-align:baseline}audio:not([controls]){display:none;height:0}[hidden],template{display:none}a{background-color:transparent}a:active,a:hover{outline:0}abbr[title]{border-bottom:1px dotted}b,strong{font-weight:700}dfn{font-style:italic}h1{margin:.67em 0;font-size:2em}mark{color:#000;background:#ff0}small{font-size:80%}sub,sup{position:relative;font-size:75%;line-height:0;vertical-align:baseline}sup{top:-.5em}sub{bottom:-.25em}img{border:0}svg:not(:root){overflow:hidden}figure{margin:1em 40px}hr{height:0;-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box}pre{overflow:auto}code,kbd,pre,samp{font-family:monospace,monospace;font-size:1em}button,input,optgroup,select,textarea{margin:0;font:inherit;color:inherit}button{overflow:visible}button,select{text-transform:none}button,html input[type=\"button\"],input[type=\"reset\"],input[type=\"submit\"]{-webkit-appearance:button;cursor:pointer}button[disabled],html input[disabled]{cursor:default}button::-moz-focus-inner,input::-moz-focus-inner{padding:0;border:0}input{line-height:normal}input[type=\"checkbox\"],input[type=\"radio\"]{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;padding:0}input[type=\"number\"]::-webkit-inner-spin-button,input[type=\"number\"]::-webkit-outer-spin-button{height:auto}input[type=\"search\"]{-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box;-webkit-appearance:textfield}input[type=\"search\"]::-webkit-search-cancel-button,input[type=\"search\"]::-webkit-search-decoration{-webkit-appearance:none}fieldset{padding:.35em .625em .75em;margin:0 2px;border:1px solid silver}legend{padding:0;border:0}textarea{overflow:auto}optgroup{font-weight:700}table{border-spacing:0;border-collapse:collapse}td,th{padding:0}

html {
    /* always display the vertical scrollbar to avoid jumps when toggling contents */
    overflow-y: scroll;
}
body { background-color: #F9F9F9; color: var(--base-6); font: 14px/1.4 Helvetica, Arial, sans-serif; padding-bottom: 45px; }

a { cursor: pointer; text-decoration: none; }
a:hover { text-decoration: underline; }
abbr[title] { border-bottom: none; cursor: help; text-decoration: none; }

code, pre { font: 13px/1.5 Consolas, Monaco, Menlo, \"Ubuntu Mono\", \"Liberation Mono\", monospace; }

table, tr, th, td { background: #FFF; border-collapse: collapse; vertical-align: top; }
table { background: #FFF; border: var(--border); box-shadow: 0px 0px 1px rgba(128, 128, 128, .2); margin: 1em 0; width: 100%; }
table th, table td { border: solid var(--base-2); border-width: 1px 0; padding: 8px 10px; }
table th { background-color: var(--base-2); font-weight: bold; text-align: left; }

.m-t-5 { margin-top: 5px; }
.hidden-xs-down { display: none; }
.block { display: block; }
.full-width { width: 100%; }
.hidden { display: none; }
.prewrap { white-space: pre-wrap; }
.nowrap { white-space: nowrap; }
.newline { display: block; }
.break-long-words { word-wrap: break-word; overflow-wrap: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; min-width: 0; }
.text-small { font-size: 12px !important; }
.text-muted { color: #999; }
.text-bold { font-weight: bold; }
.empty { border: 4px dashed var(--base-2); color: #999; margin: 1em 0; padding: .5em 2em; }

.status-success { background: rgba(94, 151, 110, 0.3); }
.status-warning { background: rgba(240, 181, 24, 0.3); }
.status-error { background: rgba(176, 65, 62, 0.2); }
.status-success td, .status-warning td, .status-error td { background: transparent; }
tr.status-error td, tr.status-warning td { border-bottom: 1px solid #FAFAFA; border-top: 1px solid #FAFAFA; }
.status-warning .colored { color: #A46A1F; }
.status-error .colored  { color: var(--color-error); }

.sf-toggle { cursor: pointer; }
.sf-toggle-content { -moz-transition: display .25s ease; -webkit-transition: display .25s ease; transition: display .25s ease; }
.sf-toggle-content.sf-toggle-hidden { display: none; }
.sf-toggle-content.sf-toggle-visible { display: block; }
thead.sf-toggle-content.sf-toggle-visible, tbody.sf-toggle-content.sf-toggle-visible { display: table-row-group; }
.sf-toggle-off .icon-close, .sf-toggle-on .icon-open { display: none; }
.sf-toggle-off .icon-open, .sf-toggle-on .icon-close { display: block; }

.tab-navigation { margin: 0 0 1em 0; padding: 0; }
.tab-navigation li { background: var(--tab-background); border: 1px solid var(--table-border); color: var(--tab-color); cursor: pointer; display: inline-block; font-size: 16px; margin: 0 0 0 -1px; padding: .5em .75em; z-index: 1; }
.tab-navigation li .badge { background-color: var(--base-1); color: var(--base-4); display: inline-block; font-size: 14px; font-weight: bold; margin-left: 8px; min-width: 10px; padding: 1px 6px; text-align: center; white-space: nowrap; }
.tab-navigation li.disabled { background: var(--tab-disabled-background); color: var(--tab-disabled-color); }
.tab-navigation li.active { background: var(--tab-active-background); color: var(--tab-active-color); z-index: 1100; }
.tab-navigation li.active .badge { background-color: var(--base-5); color: var(--base-2); }
.tab-content > *:first-child { margin-top: 0; }
.tab-navigation li .badge.status-warning { background: var(--color-warning); color: #FFF; }
.tab-navigation li .badge.status-error { background: var(--background-error); color: #FFF; }
.sf-tabs .tab:not(:first-child) { display: none; }

[data-filters] { position: relative; }
[data-filtered] { cursor: pointer; }
[data-filtered]:after { content: '\\00a0\\25BE'; }
[data-filtered]:hover .filter-list li { display: inline-flex; }
[class*=\"filter-hidden-\"] { display: none; }
.filter-list { position: absolute; border: var(--border); box-shadow: var(--shadow); margin: 0; padding: 0; display: flex; flex-direction: column; }
.filter-list :after { content: ''; }
.filter-list li {
    background: var(--tab-disabled-background);
    border-bottom: var(--border);
    color: var(--tab-disabled-color);
    display: none;
    list-style: none;
    margin: 0;
    padding: 5px 10px;
    text-align: left;
    font-weight: normal;
}
.filter-list li.active {
    background: var(--tab-background);
    color: var(--tab-color);
}
.filter-list li.last-active {
    background: var(--tab-active-background);
    color: var(--tab-active-color);
}

.filter-list-level li { cursor: s-resize; }
.filter-list-level li.active { cursor: n-resize; }
.filter-list-level li.last-active { cursor: default; }
.filter-list-level li.last-active:before { content: '\\2714\\00a0'; }
.filter-list-choice li:before { content: '\\2714\\00a0'; color: transparent; }
.filter-list-choice li.active:before { color: unset; }

.container { max-width: 1024px; margin: 0 auto; padding: 0 15px; }
.container::after { content: \"\"; display: table; clear: both; }

header { background-color: var(--base-6); color: rgba(255, 255, 255, 0.75); font-size: 13px; height: 33px; line-height: 33px; padding: 0; }
header .container { display: flex; justify-content: space-between; }
.logo { flex: 1; font-size: 13px; font-weight: normal; margin: 0; padding: 0; }
.logo svg { height: 18px; width: 18px; opacity: .8; vertical-align: -5px; }

.help-link { margin-left: 15px; }
.help-link a { color: inherit; }
.help-link .icon svg { height: 15px; width: 15px; opacity: .7; vertical-align: -2px; }
.help-link a:hover { color: #EEE; text-decoration: none; }
.help-link a:hover svg { opacity: .9; }

.exception-summary { background: var(--background-error); border-bottom: 2px solid rgba(0, 0, 0, 0.1); border-top: 1px solid rgba(0, 0, 0, .3); flex: 0 0 auto; margin-bottom: 15px; }
.exception-metadata { background: rgba(0, 0, 0, 0.1); padding: 7px 0; }
.exception-metadata .container { display: flex; flex-direction: row; justify-content: space-between; }
.exception-metadata h2, .exception-metadata h2 > a { color: rgba(255, 255, 255, 0.8); font-size: 13px; font-weight: 400; margin: 0; }
.exception-http small { font-size: 13px; opacity: .7; }
.exception-hierarchy { flex: 1; }
.exception-hierarchy .icon { margin: 0 3px; opacity: .7; }
.exception-hierarchy .icon svg { height: 13px; width: 13px; vertical-align: -2px; }

.exception-without-message .exception-message-wrapper { display: none; }
.exception-message-wrapper .container { display: flex; align-items: flex-start; min-height: 70px; padding: 10px 15px 8px; }
.exception-message { flex-grow: 1; }
.exception-message, .exception-message a { color: #FFF; font-size: 21px; font-weight: 400; margin: 0; }
.exception-message.long { font-size: 18px; }
.exception-message a { border-bottom: 1px solid rgba(255, 255, 255, 0.5); font-size: inherit; text-decoration: none; }
.exception-message a:hover { border-bottom-color: #ffffff; }

.exception-illustration { flex-basis: 111px; flex-shrink: 0; height: 66px; margin-left: 15px; opacity: .7; }

.trace + .trace { margin-top: 30px; }
.trace-head { background-color: var(--base-2); padding: 10px; position: relative; }
.trace-head .trace-class { color: var(--base-6); font-size: 18px; font-weight: bold; line-height: 1.3; margin: 0; position: relative; }
.trace-head .trace-namespace { color: #999; display: block; font-size: 13px; }
.trace-head .icon { position: absolute; right: 0; top: 0; }
.trace-head .icon svg { height: 24px; width: 24px; }

.trace-details { background: var(--base-0); border: var(--border); box-shadow: 0px 0px 1px rgba(128, 128, 128, .2); margin: 1em 0; table-layout: fixed; }

.trace-message { font-size: 14px; font-weight: normal; margin: .5em 0 0; }

.trace-line { position: relative; padding-top: 8px; padding-bottom: 8px; }
.trace-line + .trace-line { border-top: var(--border); }
.trace-line:hover { background: var(--base-1); }
.trace-line a { color: var(--base-6); }
.trace-line .icon { opacity: .4; position: absolute; left: 10px; top: 11px; }
.trace-line .icon svg { height: 16px; width: 16px; }
.trace-line-header { padding-left: 36px; padding-right: 10px; }

.trace-file-path, .trace-file-path a { color: var(--base-6); font-size: 13px; }
.trace-class { color: var(--color-error); }
.trace-type { padding: 0 2px; }
.trace-method { color: var(--color-error); font-weight: bold; }
.trace-arguments { color: #777; font-weight: normal; padding-left: 2px; }

.trace-code { background: var(--base-0); font-size: 12px; margin: 10px 10px 2px 10px; padding: 10px; overflow-x: auto; white-space: nowrap; }
.trace-code ol { margin: 0; float: left; }
.trace-code li { color: #969896; margin: 0; padding-left: 10px; float: left; width: 100%; }
.trace-code li + li { margin-top: 5px; }
.trace-code li.selected { background: var(--trace-selected-background); margin-top: 2px; }
.trace-code li code { color: var(--base-6); white-space: nowrap; }

.trace-as-text .stacktrace { line-height: 1.8; margin: 0 0 15px; white-space: pre-wrap; }

@media (min-width: 575px) {
    .hidden-xs-down { display: initial; }
    .help-link { margin-left: 30px; }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Twig/exception.css.twig";
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
        return array (  47 => 4,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% deprecated 'The template \"' ~ _self ~'\" is deprecated since Symfony 4.4, will be removed in 5.0.' %}
{# This file is based on WebProfilerBundle/Resources/views/Profiler/profiler.css.twig.
   If you make any change in this file, verify the same change is needed in the other file. #}
:root {
    --font-sans-serif: Helvetica, Arial, sans-serif;
    --page-background: #f9f9f9;
    --color-text: #222;
    /* when updating any of these colors, do the same in toolbar.css.twig */
    --color-success: #4f805d;
    --color-warning: #a46a1f;
    --color-error: #b0413e;
    --color-muted: #999;
    --tab-background: #fff;
    --tab-color: #444;
    --tab-active-background: #666;
    --tab-active-color: #fafafa;
    --tab-disabled-background: #f5f5f5;
    --tab-disabled-color: #999;
    --metric-value-background: #fff;
    --metric-value-color: inherit;
    --metric-unit-color: #999;
    --metric-label-background: #e0e0e0;
    --metric-label-color: inherit;
    --table-border: #e0e0e0;
    --table-background: #fff;
    --table-header: #e0e0e0;
    --tree-active-background: #F7E5A1;
    --exception-title-color: var(--base-2);
    --shadow: 0px 0px 1px rgba(128, 128, 128, .2);
    --border: 1px solid #e0e0e0;
    --background-error: var(--color-error);
    --trace-selected-background: #F7E5A1;
    --highlight-comment: #969896;
    --highlight-default: #222222;
    --highlight-keyword: #a71d5d;
    --highlight-string: #183691;
    --base-0: #fff;
    --base-1: #f5f5f5;
    --base-2: #e0e0e0;
    --base-3: #ccc;
    --base-4: #666;
    --base-5: #444;
    --base-6: #222;
}

html{font-family:sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%}body{margin:0}article,aside,details,figcaption,figure,footer,header,hgroup,main,menu,nav,section,summary{display:block}audio,canvas,progress,video{display:inline-block;vertical-align:baseline}audio:not([controls]){display:none;height:0}[hidden],template{display:none}a{background-color:transparent}a:active,a:hover{outline:0}abbr[title]{border-bottom:1px dotted}b,strong{font-weight:700}dfn{font-style:italic}h1{margin:.67em 0;font-size:2em}mark{color:#000;background:#ff0}small{font-size:80%}sub,sup{position:relative;font-size:75%;line-height:0;vertical-align:baseline}sup{top:-.5em}sub{bottom:-.25em}img{border:0}svg:not(:root){overflow:hidden}figure{margin:1em 40px}hr{height:0;-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box}pre{overflow:auto}code,kbd,pre,samp{font-family:monospace,monospace;font-size:1em}button,input,optgroup,select,textarea{margin:0;font:inherit;color:inherit}button{overflow:visible}button,select{text-transform:none}button,html input[type=\"button\"],input[type=\"reset\"],input[type=\"submit\"]{-webkit-appearance:button;cursor:pointer}button[disabled],html input[disabled]{cursor:default}button::-moz-focus-inner,input::-moz-focus-inner{padding:0;border:0}input{line-height:normal}input[type=\"checkbox\"],input[type=\"radio\"]{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;padding:0}input[type=\"number\"]::-webkit-inner-spin-button,input[type=\"number\"]::-webkit-outer-spin-button{height:auto}input[type=\"search\"]{-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box;-webkit-appearance:textfield}input[type=\"search\"]::-webkit-search-cancel-button,input[type=\"search\"]::-webkit-search-decoration{-webkit-appearance:none}fieldset{padding:.35em .625em .75em;margin:0 2px;border:1px solid silver}legend{padding:0;border:0}textarea{overflow:auto}optgroup{font-weight:700}table{border-spacing:0;border-collapse:collapse}td,th{padding:0}

html {
    /* always display the vertical scrollbar to avoid jumps when toggling contents */
    overflow-y: scroll;
}
body { background-color: #F9F9F9; color: var(--base-6); font: 14px/1.4 Helvetica, Arial, sans-serif; padding-bottom: 45px; }

a { cursor: pointer; text-decoration: none; }
a:hover { text-decoration: underline; }
abbr[title] { border-bottom: none; cursor: help; text-decoration: none; }

code, pre { font: 13px/1.5 Consolas, Monaco, Menlo, \"Ubuntu Mono\", \"Liberation Mono\", monospace; }

table, tr, th, td { background: #FFF; border-collapse: collapse; vertical-align: top; }
table { background: #FFF; border: var(--border); box-shadow: 0px 0px 1px rgba(128, 128, 128, .2); margin: 1em 0; width: 100%; }
table th, table td { border: solid var(--base-2); border-width: 1px 0; padding: 8px 10px; }
table th { background-color: var(--base-2); font-weight: bold; text-align: left; }

.m-t-5 { margin-top: 5px; }
.hidden-xs-down { display: none; }
.block { display: block; }
.full-width { width: 100%; }
.hidden { display: none; }
.prewrap { white-space: pre-wrap; }
.nowrap { white-space: nowrap; }
.newline { display: block; }
.break-long-words { word-wrap: break-word; overflow-wrap: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; min-width: 0; }
.text-small { font-size: 12px !important; }
.text-muted { color: #999; }
.text-bold { font-weight: bold; }
.empty { border: 4px dashed var(--base-2); color: #999; margin: 1em 0; padding: .5em 2em; }

.status-success { background: rgba(94, 151, 110, 0.3); }
.status-warning { background: rgba(240, 181, 24, 0.3); }
.status-error { background: rgba(176, 65, 62, 0.2); }
.status-success td, .status-warning td, .status-error td { background: transparent; }
tr.status-error td, tr.status-warning td { border-bottom: 1px solid #FAFAFA; border-top: 1px solid #FAFAFA; }
.status-warning .colored { color: #A46A1F; }
.status-error .colored  { color: var(--color-error); }

.sf-toggle { cursor: pointer; }
.sf-toggle-content { -moz-transition: display .25s ease; -webkit-transition: display .25s ease; transition: display .25s ease; }
.sf-toggle-content.sf-toggle-hidden { display: none; }
.sf-toggle-content.sf-toggle-visible { display: block; }
thead.sf-toggle-content.sf-toggle-visible, tbody.sf-toggle-content.sf-toggle-visible { display: table-row-group; }
.sf-toggle-off .icon-close, .sf-toggle-on .icon-open { display: none; }
.sf-toggle-off .icon-open, .sf-toggle-on .icon-close { display: block; }

.tab-navigation { margin: 0 0 1em 0; padding: 0; }
.tab-navigation li { background: var(--tab-background); border: 1px solid var(--table-border); color: var(--tab-color); cursor: pointer; display: inline-block; font-size: 16px; margin: 0 0 0 -1px; padding: .5em .75em; z-index: 1; }
.tab-navigation li .badge { background-color: var(--base-1); color: var(--base-4); display: inline-block; font-size: 14px; font-weight: bold; margin-left: 8px; min-width: 10px; padding: 1px 6px; text-align: center; white-space: nowrap; }
.tab-navigation li.disabled { background: var(--tab-disabled-background); color: var(--tab-disabled-color); }
.tab-navigation li.active { background: var(--tab-active-background); color: var(--tab-active-color); z-index: 1100; }
.tab-navigation li.active .badge { background-color: var(--base-5); color: var(--base-2); }
.tab-content > *:first-child { margin-top: 0; }
.tab-navigation li .badge.status-warning { background: var(--color-warning); color: #FFF; }
.tab-navigation li .badge.status-error { background: var(--background-error); color: #FFF; }
.sf-tabs .tab:not(:first-child) { display: none; }

[data-filters] { position: relative; }
[data-filtered] { cursor: pointer; }
[data-filtered]:after { content: '\\00a0\\25BE'; }
[data-filtered]:hover .filter-list li { display: inline-flex; }
[class*=\"filter-hidden-\"] { display: none; }
.filter-list { position: absolute; border: var(--border); box-shadow: var(--shadow); margin: 0; padding: 0; display: flex; flex-direction: column; }
.filter-list :after { content: ''; }
.filter-list li {
    background: var(--tab-disabled-background);
    border-bottom: var(--border);
    color: var(--tab-disabled-color);
    display: none;
    list-style: none;
    margin: 0;
    padding: 5px 10px;
    text-align: left;
    font-weight: normal;
}
.filter-list li.active {
    background: var(--tab-background);
    color: var(--tab-color);
}
.filter-list li.last-active {
    background: var(--tab-active-background);
    color: var(--tab-active-color);
}

.filter-list-level li { cursor: s-resize; }
.filter-list-level li.active { cursor: n-resize; }
.filter-list-level li.last-active { cursor: default; }
.filter-list-level li.last-active:before { content: '\\2714\\00a0'; }
.filter-list-choice li:before { content: '\\2714\\00a0'; color: transparent; }
.filter-list-choice li.active:before { color: unset; }

.container { max-width: 1024px; margin: 0 auto; padding: 0 15px; }
.container::after { content: \"\"; display: table; clear: both; }

header { background-color: var(--base-6); color: rgba(255, 255, 255, 0.75); font-size: 13px; height: 33px; line-height: 33px; padding: 0; }
header .container { display: flex; justify-content: space-between; }
.logo { flex: 1; font-size: 13px; font-weight: normal; margin: 0; padding: 0; }
.logo svg { height: 18px; width: 18px; opacity: .8; vertical-align: -5px; }

.help-link { margin-left: 15px; }
.help-link a { color: inherit; }
.help-link .icon svg { height: 15px; width: 15px; opacity: .7; vertical-align: -2px; }
.help-link a:hover { color: #EEE; text-decoration: none; }
.help-link a:hover svg { opacity: .9; }

.exception-summary { background: var(--background-error); border-bottom: 2px solid rgba(0, 0, 0, 0.1); border-top: 1px solid rgba(0, 0, 0, .3); flex: 0 0 auto; margin-bottom: 15px; }
.exception-metadata { background: rgba(0, 0, 0, 0.1); padding: 7px 0; }
.exception-metadata .container { display: flex; flex-direction: row; justify-content: space-between; }
.exception-metadata h2, .exception-metadata h2 > a { color: rgba(255, 255, 255, 0.8); font-size: 13px; font-weight: 400; margin: 0; }
.exception-http small { font-size: 13px; opacity: .7; }
.exception-hierarchy { flex: 1; }
.exception-hierarchy .icon { margin: 0 3px; opacity: .7; }
.exception-hierarchy .icon svg { height: 13px; width: 13px; vertical-align: -2px; }

.exception-without-message .exception-message-wrapper { display: none; }
.exception-message-wrapper .container { display: flex; align-items: flex-start; min-height: 70px; padding: 10px 15px 8px; }
.exception-message { flex-grow: 1; }
.exception-message, .exception-message a { color: #FFF; font-size: 21px; font-weight: 400; margin: 0; }
.exception-message.long { font-size: 18px; }
.exception-message a { border-bottom: 1px solid rgba(255, 255, 255, 0.5); font-size: inherit; text-decoration: none; }
.exception-message a:hover { border-bottom-color: #ffffff; }

.exception-illustration { flex-basis: 111px; flex-shrink: 0; height: 66px; margin-left: 15px; opacity: .7; }

.trace + .trace { margin-top: 30px; }
.trace-head { background-color: var(--base-2); padding: 10px; position: relative; }
.trace-head .trace-class { color: var(--base-6); font-size: 18px; font-weight: bold; line-height: 1.3; margin: 0; position: relative; }
.trace-head .trace-namespace { color: #999; display: block; font-size: 13px; }
.trace-head .icon { position: absolute; right: 0; top: 0; }
.trace-head .icon svg { height: 24px; width: 24px; }

.trace-details { background: var(--base-0); border: var(--border); box-shadow: 0px 0px 1px rgba(128, 128, 128, .2); margin: 1em 0; table-layout: fixed; }

.trace-message { font-size: 14px; font-weight: normal; margin: .5em 0 0; }

.trace-line { position: relative; padding-top: 8px; padding-bottom: 8px; }
.trace-line + .trace-line { border-top: var(--border); }
.trace-line:hover { background: var(--base-1); }
.trace-line a { color: var(--base-6); }
.trace-line .icon { opacity: .4; position: absolute; left: 10px; top: 11px; }
.trace-line .icon svg { height: 16px; width: 16px; }
.trace-line-header { padding-left: 36px; padding-right: 10px; }

.trace-file-path, .trace-file-path a { color: var(--base-6); font-size: 13px; }
.trace-class { color: var(--color-error); }
.trace-type { padding: 0 2px; }
.trace-method { color: var(--color-error); font-weight: bold; }
.trace-arguments { color: #777; font-weight: normal; padding-left: 2px; }

.trace-code { background: var(--base-0); font-size: 12px; margin: 10px 10px 2px 10px; padding: 10px; overflow-x: auto; white-space: nowrap; }
.trace-code ol { margin: 0; float: left; }
.trace-code li { color: #969896; margin: 0; padding-left: 10px; float: left; width: 100%; }
.trace-code li + li { margin-top: 5px; }
.trace-code li.selected { background: var(--trace-selected-background); margin-top: 2px; }
.trace-code li code { color: var(--base-6); white-space: nowrap; }

.trace-as-text .stacktrace { line-height: 1.8; margin: 0 0 15px; white-space: pre-wrap; }

@media (min-width: 575px) {
    .hidden-xs-down { display: initial; }
    .help-link { margin-left: 30px; }
}
", "@Twig/exception.css.twig", "C:\\laragon\\www\\training\\vendor\\symfony\\twig-bundle\\Resources\\views\\exception.css.twig");
    }
}
