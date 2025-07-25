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

/* @WebProfiler/Profiler/profiler.css.twig */
class __TwigTemplate_9269665c1a2b626c466ac42ee295700db642923c283b7421c4d38b5472d92159 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/profiler.css.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/profiler.css.twig"));

        yield "*{-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box}html{font-family:sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%}body{margin:0}article,aside,details,figcaption,figure,footer,header,hgroup,main,menu,nav,section,summary{display:block}audio,canvas,progress,video{display:inline-block;vertical-align:baseline}audio:not([controls]){display:none;height:0}[hidden],template{display:none}a{background-color:transparent}a:active,a:hover{outline:0}abbr[title]{border-bottom:1px dotted}b,strong{font-weight:700}dfn{font-style:italic}h1{margin:.67em 0;font-size:2em}mark{color:#000;background:#ff0}small{font-size:80%}sub,sup{position:relative;font-size:75%;line-height:0;vertical-align:baseline}sup{top:-.5em}sub{bottom:-.25em}img{border:0}svg:not(:root){overflow:hidden}figure{margin:1em 40px}hr{height:0;-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box}pre{overflow:auto}code,kbd,pre,samp{font-family:monospace,monospace;font-size:1em}button,input,optgroup,select,textarea{margin:0;font:inherit;color:inherit}button{overflow:visible}button,select{text-transform:none}button,html input[type=\"button\"],input[type=\"reset\"],input[type=\"submit\"]{-webkit-appearance:button;cursor:pointer}button[disabled],html input[disabled]{cursor:default}button::-moz-focus-inner,input::-moz-focus-inner{padding:0;border:0}input{line-height:normal}input[type=\"checkbox\"],input[type=\"radio\"]{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;padding:0}input[type=\"number\"]::-webkit-inner-spin-button,input[type=\"number\"]::-webkit-outer-spin-button{height:auto}input[type=\"search\"]{-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box;-webkit-appearance:textfield}input[type=\"search\"]::-webkit-search-cancel-button,input[type=\"search\"]::-webkit-search-decoration{-webkit-appearance:none}fieldset{padding:.35em .625em .75em;margin:0 2px;border:1px solid silver}legend{padding:0;border:0}textarea{overflow:auto}optgroup{font-weight:700}table{border-spacing:0;border-collapse:collapse}td,th{padding:0}

:root {
    --font-sans-serif: Helvetica, Arial, sans-serif;
    --page-background: #f9f9f9;
    --color-text: #222;
    --color-muted: #999;
    /* when updating any of these colors, do the same in toolbar.css.twig */
    --color-success: #4f805d;
    --color-warning: #a46a1f;
    --color-error: #b0413e;
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
    --trace-selected-background: #F7E5A1;
    --table-border: #e0e0e0;
    --table-background: #fff;
    --table-header: #e0e0e0;
    --info-background: #ddf;
    --tree-active-background: #F7E5A1;
    --exception-title-color: var(--base-2);
    --shadow: 0px 0px 1px rgba(128, 128, 128, .2);
    --border: 1px solid #e0e0e0;
    --background-error: var(--color-error);
    --highlight-comment: #969896;
    --highlight-default: #222222;
    --highlight-keyword: #a71d5d;
    --highlight-string: #183691;
    --highlight-selected-line: rgba(255, 255, 153, 0.5);
    --base-0: #fff;
    --base-1: #f5f5f5;
    --base-2: #e0e0e0;
    --base-3: #ccc;
    --base-4: #666;
    --base-5: #444;
    --base-6: #222;
    --card-label-background: #eee;
    --card-label-color: var(--base-6);
}

.theme-dark {
    --page-background: #36393e;
    --color-text: #e0e0e0;
    --color-muted: #777;
    --color-error: #d43934;
    --tab-background: #555;
    --tab-color: #ccc;
    --tab-active-background: #888;
    --tab-active-color: #fafafa;
    --tab-disabled-background: var(--page-background);
    --tab-disabled-color: #777;
    --metric-value-background: #555;
    --metric-value-color: inherit;
    --metric-unit-color: #999;
    --metric-label-background: #777;
    --metric-label-color: #e0e0e0;
    --trace-selected-background: #71663a;
    --table-border: #444;
    --table-background: #333;
    --table-header: #555;
    --info-background: rgba(79, 148, 195, 0.5);
    --tree-active-background: var(--metric-label-background);
    --exception-title-color: var(--base-2);
    --shadow: 0px 0px 1px rgba(32, 32, 32, .2);
    --border: 1px solid #666;
    --background-error: #b0413e;
    --highlight-comment: #dedede;
    --highlight-default: var(--base-6);
    --highlight-keyword: #ff413c;
    --highlight-string: #70a6fd;
    --highlight-selected-line: rgba(14, 14, 14, 0.5);
    --base-0: #2e3136;
    --base-1: #444;
    --base-2: #666;
    --base-3: #666;
    --base-4: #666;
    --base-5: #e0e0e0;
    --base-6: #f5f5f5;
    --card-label-background: var(--tab-active-background);
    --card-label-color: var(--tab-active-color);
}

html, body  {
    height: 100%;
    width: 100%;
}
body {
    background-color: var(--page-background);
    color: var(--base-6);
    display: flex;
    flex-direction: column;
    font-family: var(--font-sans-serif);
    font-size: 14px;
    line-height: 1.4;
}

h2, h3, h4 {
    font-weight: 500;
    margin: 1.5em 0 .5em;
}
h2 + h3,
h3 + h4 {
    margin-top: 1em;
}
h2 {
    font-size: 24px;
}
h3 {
    font-size: 21px;
}
h4 {
    font-size: 18px;
}
h2 span, h3 span, h4 span,
h2 small, h3 small, h4 small {
    color: var(--color-muted);
}

li {
    margin-bottom: 10px;
}

p {
    font-size: 16px;
    margin-bottom: 1em;
}

a {
    color: #218BC3;
    text-decoration: none;
}
a:hover {
    text-decoration: underline;
}
a.link-inverse {
    text-decoration: underline;
}
a.link-inverse:hover {
    text-decoration: none;
}
a:active,
a:hover {
    outline: 0;
}
h2 a,
h3 a,
h4 a {
    text-decoration: underline;
}
h2 a:hover,
h3 a:hover,
h4 a:hover {
    text-decoration: none;
}

abbr {
    border-bottom: 1px dotted var(--base-5);
    cursor: help;
}

code, pre {
    font-family: monospace;
    font-size: 13px;
}

button {
    font-family: var(--font-sans-serif);
}
.btn {
    background: #777;
    border-radius: 2px;
    border: 0;
    color: #f5f5f5;
    display: inline-block;
    padding: .5em .75em;
}
.btn:hover {
    cursor: pointer;
    opacity: 0.8;
    text-decoration: none;
}
.btn-sm {
    font-size: 12px;
}
.btn-sm svg {
    height: 16px;
    width: 16px;
    vertical-align: middle;
}
.btn-link {
    border-color: transparent;
    color: #218BC3;
    text-decoration: none;
    background-color: transparent;
    outline: none;
    border: 0;
    padding: 0;
    cursor: pointer;
}
.btn-link:hover {
    text-decoration: underline;
}
table, tr, th, td {
    background: var(--table-background);
    border-collapse: collapse;
    line-height: 1.5;
    vertical-align: top;
}
table {
    background: var(--base-0);
    border: var(--border);
    box-shadow: var(--shadow);
    margin: 1em 0;
    width: 100%;
}

table th, table td {
    padding: 8px 10px;
}

table th {
    font-weight: bold;
    text-align: left;
}
table thead th {
    background-color: var(--table-header);
}
table thead th.key {
    width: 19%;
}
table thead.small th {
    font-size: 12px;
    padding: 4px 10px;
}

table tbody th,
table tbody td {
    border: 1px solid var(--base-2);
    border-width: 1px 0;
    font-family: monospace;
    font-size: 13px;
}

table tbody div {
    margin: .25em 0;
}
table tbody ul {
    margin: 0;
    padding: 0 0 0 1em;
}

table thead th.num-col,
table tbody td.num-col {
    text-align: center;
}

.block {
    display: block;
}
.full-width {
    width: 100%;
}
.hidden {
    display: none;
}
.nowrap {
    white-space: pre;
}
.prewrap {
    white-space: pre-wrap;
}
.newline {
    display: block;
}
.break-long-words {
    -ms-word-break: break-all;
    word-break: break-all;
    word-break: break-word;
    -webkit-hyphens: auto;
    -moz-hyphens: auto;
    hyphens: auto;
}
.text-small {
    font-size: 12px !important;
}
.text-muted {
    color: var(--color-muted);
}
.text-danger {
    color: var(--color-error);
}
.text-bold {
    font-weight: bold;
}
.text-right {
    text-align: right;
}
.text-center {
    text-align: center;
}
.font-normal {
    font-family: var(--font-sans-serif);
    font-size: 14px;
}
.help {
    color: var(--color-muted);
    font-size: 14px;
    margin-bottom: .5em;
}
.empty {
    border: 4px dashed var(--base-2);
    color: var(--color-muted);
    margin: 1em 0;
    padding: .5em 2em;
}

.label {
    background-color: var(--base-4);
    color: #FAFAFA;
    display: inline-block;
    font-size: 12px;
    font-weight: bold;
    padding: 3px 7px;
    white-space: nowrap;
}
.label.same-width {
    min-width: 70px;
    text-align: center;
}
.label.status-success { background: var(--color-success); color: #FFF; }
.label.status-warning { background: var(--color-warning); color: #FFF; }
.label.status-error   { background: var(--background-error); color: #FFF; }

.metrics {
    margin: 1em 0 0;
    overflow: auto;
}
.metrics .metric {
    float: left;
    margin: 0 1em 1em 0;
}

.metric {
    background: var(--metric-value-background);
    border: 1px solid var(--table-border);
    box-shadow: var(--shadow);
    color: var(--metric-value-color);
    min-width: 100px;
    min-height: 70px;
}
.metric .value {
    display: block;
    font-size: 28px;
    padding: 8px 15px 4px;
    text-align: center;
}
.metric .value svg {
    margin: 5px 0 -5px;
}
.metric .unit {
    color: var(--metric-unit-color);
    font-size: 18px;
    margin-left: -4px;
}
.metric .label {
    background: var(--metric-label-background);
    color: var(--metric-label-color);
    display: block;
    font-size: 12px;
    padding: 5px;
    text-align: center;
}

.metrics-horizontal .metric {
    min-height: 0;
    min-width: 0;
}
.metrics-horizontal .metric .value,
.metrics-horizontal .metric .label {
    display: inline;
    padding: 2px 6px;
}
.metrics-horizontal .metric .label {
    display: inline-block;
    padding: 6px;
}
.metrics-horizontal .metric .value {
    font-size: 16px;
}
.metrics-horizontal .metric .value svg {
    max-height: 14px;
    line-height: 10px;
    margin: 0;
    padding-left: 4px;
    vertical-align: middle;
}

.metric-divider {
    float: left;
    margin: 0 1em;
    min-height: 1px; }

.card {
    background: var(--base-0);
    border: var(--border);
    box-shadow: var(--shadow);
    margin: 1em 0;
    padding: 10px;
}
.card-block + .card-block {
    border-top: 1px solid var(--base-2);
    padding-top: 10px;
}
.card *:first-child,
.card-block *:first-child {
    margin-top: 0;
}
.card .label {
    background-color: var(--card-label-background);
    color: var(--card-label-color);
}

.status-success {
    background: rgba(94, 151, 110, 0.3);
}
.status-warning {
    background: rgba(240, 181, 24, 0.3);
}
.status-error {
    background: rgba(176, 65, 62, 0.2);
}
.status-success td,
.status-warning td,
.status-error td {
    background: transparent;
}
tr.status-error td,
tr.status-warning td {
    border-bottom: 1px solid #FAFAFA;
    border-top: 1px solid #FAFAFA;
}

.status-warning .colored {
    color: var(--color-warning);
}
.status-error .colored  {
    color: var(--color-error);
}

.highlight pre {
    margin: 0;
    white-space: pre-wrap;
}

.highlight .keyword   { color: #8959A8; font-weight: bold; }
.highlight .word      { color: var(--color-text); }
.highlight .variable  { color: #916319; }
.highlight .symbol    { color: var(--color-text); }
.highlight .comment   { color: #999999; }
.highlight .backtick  { color: #718C00; }
.highlight .string    { color: #718C00; }
.highlight .number    { color: #F5871F; font-weight: bold; }
.highlight .error     { color: #C82829; }

.sf-icon {
    vertical-align: middle;
    background-repeat: no-repeat;
    background-size: contain;
    width: 16px;
    height: 16px;
    display: inline-block;
}
.sf-icon svg {
    width: 16px;
    height: 16px;
}
.sf-icon.sf-medium,
.sf-icon.sf-medium svg {
    width: 24px;
    height: 24px;
}
.sf-icon.sf-large,
.sf-icon.sf-large svg {
    width: 32px;
    height: 32px;
}


.container {
    max-width: 1300px;
    padding-right: 15px;
}
#header {
    flex: 0 0 auto;
}
#header .container {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
}
#summary {
    flex: 0 0 auto;
}
#content {
    height: 100%;
}
#main {
    display: flex;
    flex-direction: row;
    min-height: 100%;
}
#sidebar {
    flex: 0 0 220px;
}
#collector-wrapper {
    flex: 0 1 100%;
    min-width: 0;
}
#collector-content {
    margin: 0 0 30px 0;
    padding: 14px 0 14px 20px;
}

#main h2:first-of-type {
    margin-top: 0;
}

#header {
    background-color: #222;
    overflow: hidden;
}
#header h1 {
    color: #fff;
    flex: 1;
    font-weight: normal;
    font-size: 21px;
    margin: 0;
    padding: 10px 10px 8px;
}
#header h1 span {
    color: #ccc;
}
#header h1 svg {
    height: 40px;
    width: 40px;
    margin-top: -4px;
    vertical-align: middle;
}
#header h1 svg path,
#header h1 svg .sf-svg-path {
    fill: #fff;
}
#header .search {
    padding-top: 11px;
}
#header .search input {
    border: 1px solid #ddd;
    margin-right: 4px;
    padding: 7px 8px;
    width: 200px;
}

#summary .status {
    background: var(--base-2);
    border: solid rgba(0, 0, 0, 0.1);
    border-width: 2px 0;
    padding: 10px;
}
#summary h2,
#summary h2 a {
    color: var(--base-6);
    font-size: 21px;
    margin: 0;
    text-decoration: none;
    vertical-align: middle;
}
#summary h2 a:hover {
    text-decoration: underline;
}
#summary h2 a.referer {
    margin-left: .5em;
    font-size: 75%;
    color: rgba(255, 255, 255, 0.5);
}
#summary h2 a.referer:before {
    content: '\\1F503\\00a0';
}

#summary .status-success { background: var(--color-success); }
#summary .status-warning { background: var(--color-warning); }
#summary .status-error   { background: var(--background-error);   }

#summary .status-success h2,
#summary .status-success a,
#summary .status-warning h2,
#summary .status-warning a,
#summary .status-error h2,
#summary .status-error a {
    color: #FFF;
}

#summary dl.metadata,
#summary dl.metadata a {
    margin: 5px 0 0;
    color: rgba(255, 255, 255, 0.75);
}
#summary dl.metadata dt,
#summary dl.metadata dd {
    display: inline-block;
    font-size: 13px;
}
#summary dl.metadata dt {
    font-weight: bold;
}
#summary dl.metadata dt:after {
    content: ':';
}
#summary dl.metadata dd {
    margin: 0 1.5em 0 0;
}

#summary dl.metadata .label {
    background: rgba(255, 255, 255, 0.2);
}

#sidebar {
    background: #444;
    color: #ccc;
    padding-bottom: 30px;
    position: relative;
    width: 220px;
    z-index: 9999;
}
#sidebar .module {
    padding: 10px;
    width: 220px;
}

#sidebar #sidebar-shortcuts {
    background: #333;
    width: 220px;
}
#sidebar #sidebar-shortcuts .shortcuts {
    position: relative;
    padding: 16px 10px;
}
#sidebar-shortcuts .icon {
    display: block;
    float: left;
    width: 50px;
    margin: 2px 0 0 -10px;
    text-align: center;
}
#sidebar #sidebar-shortcuts .btn {
    color: #f5f5f5;
}
#sidebar #sidebar-shortcuts .btn + .btn {
    margin-left: 5px;
}
#sidebar #sidebar-shortcuts .btn {
    padding: .5em;
}

#sidebar-search .form-group:first-of-type {
    padding-top: 20px;
}
#sidebar-search .form-group {
    clear: both;
    overflow: hidden;
    padding-bottom: 10px;
}
#sidebar-search .form-group label {
    float: left;
    font-size: 13px;
    line-height: 24px;
    width: 60px;
}
#sidebar-search .form-group input,
#sidebar-search .form-group select {
    float: left;
    font-size: 13px;
    padding: 3px 6px;
}
#sidebar-search .form-group input {
    background: #ccc;
    border: 1px solid var(--color-muted);
    color: #222;
    width: 120px;
}
#sidebar-search .form-group select {
    color: #222;
}
#sidebar-search .form-group .btn {
    float: right;
    margin-right: 10px;
}

#menu-profiler {
    margin: 0;
    padding: 0;
    list-style-type: none;
}
#menu-profiler li {
    position: relative;
    margin-bottom: 0;
}
#menu-profiler li a {
    border: solid transparent;
    border-width: 2px 0;
    color: var(--base-3);
    display: block;
}
#menu-profiler li a:hover {
    text-decoration: none;
}
#menu-profiler li a .label {
    background: transparent;
    color: #EEE;
    display: block;
    padding: 8px 10px 8px 50px;
    overflow: hidden;
    white-space: nowrap;
}
#menu-profiler li a .label .icon {
    display: block;
    position: absolute;
    left: 0;
    top: 8px;
    width: 50px;
    text-align: center;
}
#menu-profiler .label .icon img,
#menu-profiler .label .icon svg {
    height: 24px;
    max-width: 24px;
}
#menu-profiler li a .label .icon svg path,
#menu-profiler li a .label .icon svg .sf-svg-path {
    fill: #DDD;
}
#menu-profiler li a .label strong {
    font-size: 16px;
    font-weight: normal;
}
#menu-profiler li a .label.disabled {
    opacity: .25;
}
#menu-profiler li a:hover .label.disabled,
#menu-profiler li.selected a .label.disabled {
    opacity: 1;
}

#menu-profiler li.selected a,
#menu-profiler:hover li.selected a:hover,
#menu-profiler li a:hover {
    background: #666;
    border: solid #555;
    border-width: 2px 0;
}
#menu-profiler li.selected a .label,
#menu-profiler li a:hover .label {
    color: #FFF;
}
#menu-profiler li.selected a .icon svg path,
#menu-profiler li.selected a .icon svg .sf-svg-path,
#menu-profiler li a:hover .icon svg path,
#menu-profiler li a:hover .icon svg .sf-svg-path {
    fill: #fff;
}

#menu-profiler li a .count {
    background-color: #666;
    color: #fff;
    display: inline-block;
    font-weight: bold;
    min-width: 10px;
    padding: 2px 6px;
    position: absolute;
    right: 10px;
    text-align: center;
    vertical-align: baseline;
    white-space: nowrap;
}
#menu-profiler li a span.count span {
    font-size: 12px;

}
#menu-profiler li a span.count span + span::before {
    content: \" / \";
    color: #AAA;
}

#menu-profiler .label-status-warning .count {
    background: var(--color-warning);
}
#menu-profiler .label-status-error .count {
    background: var(--background-error);
}

#timeline-control {
    background: var(--table-background);
    box-shadow: var(--shadow);
    margin: 1em 0;
    padding: 10px;
}
#timeline-control label {
    font-weight: bold;
    margin-right: 1em;
}
#timeline-control input {
    background: var(--metric-value-background);
    border: 1px solid var(--table-border);
    font-size: 16px;
    padding: 4px;
    text-align: right;
    width: 5em;
}
#timeline-control .help {
    margin-left: 1em;
}

.sf-profiler-timeline .legends {
    font-size: 12px;
    line-height: 1.5em;
}
.sf-profiler-timeline + p.help {
    margin-top: 0;
}

.tab-navigation {
    margin: 0 0 1em 0;
    padding: 0;
}
.tab-navigation li {
    background: var(--tab-background);
    border: 1px solid var(--table-border);
    color: var(--tab-color);
    cursor: pointer;
    display: inline-block;
    font-size: 16px;
    margin: 0 0 0 -1px;
    padding: .5em .75em;
    z-index: 1;
}
.tab-navigation li .badge {
    background-color: var(--base-1);
    color: var(--base-4);
    display: inline-block;
    font-size: 14px;
    font-weight: bold;
    margin-left: 8px;
    min-width: 10px;
    padding: 1px 6px;
    text-align: center;
    white-space: nowrap;
}
.tab-navigation li.disabled {
    background: var(--tab-disabled-background);
    color: var(--tab-disabled-color);
}
.tab-navigation li.active {
    background: var(--tab-active-background);
    color: var(--tab-active-color);
    z-index: 1100;
}
.tab-navigation li.active .badge {
    background-color: var(--base-5);
    color: var(--base-2);
}
.tab-content > *:first-child {
    margin-top: 0;
}
.tab-navigation li .badge.status-warning { background: var(--color-warning); color: #FFF; }
.tab-navigation li .badge.status-error { background: var(--background-error); color: #FFF; }

.sf-tabs .tab:not(:first-child) { display: none; }

.sf-toggle-content {
    -moz-transition: display .25s ease;
    -webkit-transition: display .25s ease;
    transition: display .25s ease;
}
.sf-toggle-content.sf-toggle-hidden {
    display: none;
}
.sf-toggle-content.sf-toggle-visible {
    display: block;
}

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

#twig-dump pre {
    font-size: 12px;
    line-height: 1.7;
    background-color: var(--base-0);
    border: var(--border);
    padding: 15px;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
}
#twig-dump span {
    border-radius: 2px;
    padding: 1px 2px;
}
#twig-dump .status-error   { background: transparent; color: var(--color-error); }
#twig-dump .status-warning { background: rgba(240, 181, 24, 0.3);     }
#twig-dump .status-success { background: rgba(100, 189, 99, 0.2);     }
#twig-dump .status-info    { background: var(--info-background);      }

#twig-table tbody td {
    vertical-align: middle;
}
#twig-table tbody td > a {
    margin-left: -5px;
}
#twig-table tbody td div {
    margin: 0;
}

.icon-twig {
    vertical-align: text-bottom;
}
.icon-twig svg path {
    fill: #7eea12;
}

table.logs .metadata {
    display: block;
    font-size: 12px;
}
.theme-dark tr.status-error td,
.theme-dark tr.status-warning td { border-bottom: unset; border-top: unset; }

.sql-runnable {
    background: var(--base-1);
    margin: .5em 0;
    padding: 1em;
}
.sql-explain {
    overflow-x: auto;
    max-width: 920px;
}
.sql-explain table td, .sql-explain table tr {
    word-break: normal;
}
.queries-table pre {
    margin: 0;
    white-space: pre-wrap;
    -ms-word-break: break-all;
    word-break: break-all;
    word-break: break-word;
    -webkit-hyphens: auto;
    -moz-hyphens: auto;
    hyphens: auto;
}

#collector-content .decision-log .voter_result td {
    border-top-width: 1px;
    border-bottom-width: 0;
    padding-bottom: 0;
}

#collector-content .decision-log .voter_details td {
    border-top-width: 0;
    border-bottom-width: 1px;
    padding-bottom: 0;
}

#collector-content .decision-log .voter_details table {
    border: 0;
    margin: 0;
    box-shadow: unset;
}

#collector-content .decision-log .voter_details table td {
    border: 0;
    padding: 0 0 8px 0;
}


#collector-content .sf-validator {
    margin-bottom: 2em;
}

#collector-content .sf-validator .sf-validator-context,
#collector-content .sf-validator .trace {
    border: var(--border);
    background: var(--base-0);
    padding: 10px;
    margin: 0.5em 0;
    overflow: auto;
}
#collector-content .sf-validator .trace {
    font-size: 12px;
}
#collector-content .sf-validator .trace li {
    margin-bottom: 0;
    padding: 0;
}
#collector-content .sf-validator .trace li.selected {
    background: var(--highlight-selected-line);
}


#collector-content .message-bus .trace {
    border: var(--border);
    background: var(--base-0);
    padding: 10px;
    margin: 0.5em 0;
    overflow: auto;
}
#collector-content .message-bus .trace {
    font-size: 12px;
}
#collector-content .message-bus .trace li {
    margin-bottom: 0;
    padding: 0;
}
#collector-content .message-bus .trace li.selected {
    background: var(--highlight-selected-line);
}

pre.sf-dump, pre.sf-dump .sf-dump-default {
    z-index: 1000 !important;
}

#collector-content .sf-dump {
    margin-bottom: 2em;
}
#collector-content pre.sf-dump,
#collector-content .sf-dump code,
#collector-content .sf-dump samp {
    font-family: monospace;
    font-size: 13px;
}
#collector-content .sf-dump a {
    cursor: pointer;
}
#collector-content .sf-dump pre.sf-dump,
#collector-content .sf-dump .trace {
    border: var(--border);
    padding: 10px;
    margin: 0.5em 0;
    overflow: auto;
}

#collector-content pre.sf-dump,
#collector-content .sf-dump-default {
    background: none;
}
#collector-content .sf-dump-ellipsis { max-width: 100em; }

#collector-content .sf-dump {
    margin: 0;
    padding: 0;
    line-height: 1.4;
}

#collector-content .dump-inline .sf-dump {
    display: inline;
    white-space: normal;
    font-size: inherit;
    line-height: inherit;
}
#collector-content .dump-inline .sf-dump:after {
    display: none;
}

#collector-content .sf-dump .trace {
    font-size: 12px;
}
#collector-content .sf-dump .trace li {
    margin-bottom: 0;
    padding: 0;
}

#search-results td {
    font-family: var(--font-sans-serif);
    vertical-align: middle;
}

#search-results .sf-search {
    visibility: hidden;
    margin-left: 2px;
}
#search-results tr:hover .sf-search {
    visibility: visible;
}


.visible-small {
    display: none;
}
.hidden-small {
    display: inherit;
}

@media (max-width: 768px) {
    #sidebar {
        flex-basis: 50px;
        overflow-x: hidden;
        transition: flex-basis 200ms ease-out;
    }
    #sidebar:hover, #sidebar.expanded {
        flex-basis: 220px;
    }

    #sidebar-search {
        display: none;
    }
    #sidebar:hover #sidebar-search.sf-toggle-visible, #sidebar.expanded #sidebar-search.sf-toggle-visible {
        display: block;
    }

    #sidebar .module {
        display: none;
    }
    #sidebar:hover .module, #sidebar.expanded .module {
        display: block;
    }

    #sidebar:not(:hover):not(.expanded) .label .count {
        border-radius: 50%;
        border: 1px solid #eee;
        height: 8px;
        min-width: 0;
        padding: 0;
        right: 4px;
        text-indent: -9999px;
        top: 50%;
        width: 8px;
    }

    .visible-small {
        display: inherit;
    }
    .hidden-small {
        display: none;
    }

    .btn-sm svg {
        margin-left: 2px;
    }
}

body.width-full .container {
    max-width: 100%;
}

body.theme-light #collector-content .sf-dump pre.sf-dump,
body.theme-light #collector-content .sf-dump .trace {
    background: #FFF;
}
body.theme-light #collector-content pre.sf-dump,
body.theme-light #collector-content .sf-dump-default {
    color: #CC7832;
}
body.theme-light #collector-content .sf-dump-str { color: #629755; }
body.theme-light #collector-content .sf-dump-private,
body.theme-light #collector-content .sf-dump-protected,
body.theme-light #collector-content .sf-dump-public { color: #262626; }
body.theme-light #collector-content .sf-dump-note { color: #6897BB; }
body.theme-light #collector-content .sf-dump-key { color: #789339; }
body.theme-light #collector-content .sf-dump-ref { color: #6E6E6E; }
body.theme-light #collector-content .sf-dump-ellipsis { color: #CC7832; max-width: 100em; }
body.theme-light #collector-content .sf-dump-ellipsis-path { max-width: 5em; }
body.theme-light #collector-content .sf-dump .trace li.selected {
    background: rgba(255, 255, 153, 0.5);
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
        return "@WebProfiler/Profiler/profiler.css.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array ();
    }

    public function getSourceContext()
    {
        return new Source("{# This file is partially duplicated in TwigBundle/Resources/views/exceotion.css.twig.
   If you make any change in this file, verify the same change is needed in the other file. #}
{# Normalization
   (normalize.css v3.0.3 | MIT License | github.com/necolas/normalize.css)
   ========================================================================= #}
*{-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box}html{font-family:sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%}body{margin:0}article,aside,details,figcaption,figure,footer,header,hgroup,main,menu,nav,section,summary{display:block}audio,canvas,progress,video{display:inline-block;vertical-align:baseline}audio:not([controls]){display:none;height:0}[hidden],template{display:none}a{background-color:transparent}a:active,a:hover{outline:0}abbr[title]{border-bottom:1px dotted}b,strong{font-weight:700}dfn{font-style:italic}h1{margin:.67em 0;font-size:2em}mark{color:#000;background:#ff0}small{font-size:80%}sub,sup{position:relative;font-size:75%;line-height:0;vertical-align:baseline}sup{top:-.5em}sub{bottom:-.25em}img{border:0}svg:not(:root){overflow:hidden}figure{margin:1em 40px}hr{height:0;-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box}pre{overflow:auto}code,kbd,pre,samp{font-family:monospace,monospace;font-size:1em}button,input,optgroup,select,textarea{margin:0;font:inherit;color:inherit}button{overflow:visible}button,select{text-transform:none}button,html input[type=\"button\"],input[type=\"reset\"],input[type=\"submit\"]{-webkit-appearance:button;cursor:pointer}button[disabled],html input[disabled]{cursor:default}button::-moz-focus-inner,input::-moz-focus-inner{padding:0;border:0}input{line-height:normal}input[type=\"checkbox\"],input[type=\"radio\"]{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;padding:0}input[type=\"number\"]::-webkit-inner-spin-button,input[type=\"number\"]::-webkit-outer-spin-button{height:auto}input[type=\"search\"]{-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box;-webkit-appearance:textfield}input[type=\"search\"]::-webkit-search-cancel-button,input[type=\"search\"]::-webkit-search-decoration{-webkit-appearance:none}fieldset{padding:.35em .625em .75em;margin:0 2px;border:1px solid silver}legend{padding:0;border:0}textarea{overflow:auto}optgroup{font-weight:700}table{border-spacing:0;border-collapse:collapse}td,th{padding:0}

:root {
    --font-sans-serif: Helvetica, Arial, sans-serif;
    --page-background: #f9f9f9;
    --color-text: #222;
    --color-muted: #999;
    /* when updating any of these colors, do the same in toolbar.css.twig */
    --color-success: #4f805d;
    --color-warning: #a46a1f;
    --color-error: #b0413e;
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
    --trace-selected-background: #F7E5A1;
    --table-border: #e0e0e0;
    --table-background: #fff;
    --table-header: #e0e0e0;
    --info-background: #ddf;
    --tree-active-background: #F7E5A1;
    --exception-title-color: var(--base-2);
    --shadow: 0px 0px 1px rgba(128, 128, 128, .2);
    --border: 1px solid #e0e0e0;
    --background-error: var(--color-error);
    --highlight-comment: #969896;
    --highlight-default: #222222;
    --highlight-keyword: #a71d5d;
    --highlight-string: #183691;
    --highlight-selected-line: rgba(255, 255, 153, 0.5);
    --base-0: #fff;
    --base-1: #f5f5f5;
    --base-2: #e0e0e0;
    --base-3: #ccc;
    --base-4: #666;
    --base-5: #444;
    --base-6: #222;
    --card-label-background: #eee;
    --card-label-color: var(--base-6);
}

.theme-dark {
    --page-background: #36393e;
    --color-text: #e0e0e0;
    --color-muted: #777;
    --color-error: #d43934;
    --tab-background: #555;
    --tab-color: #ccc;
    --tab-active-background: #888;
    --tab-active-color: #fafafa;
    --tab-disabled-background: var(--page-background);
    --tab-disabled-color: #777;
    --metric-value-background: #555;
    --metric-value-color: inherit;
    --metric-unit-color: #999;
    --metric-label-background: #777;
    --metric-label-color: #e0e0e0;
    --trace-selected-background: #71663a;
    --table-border: #444;
    --table-background: #333;
    --table-header: #555;
    --info-background: rgba(79, 148, 195, 0.5);
    --tree-active-background: var(--metric-label-background);
    --exception-title-color: var(--base-2);
    --shadow: 0px 0px 1px rgba(32, 32, 32, .2);
    --border: 1px solid #666;
    --background-error: #b0413e;
    --highlight-comment: #dedede;
    --highlight-default: var(--base-6);
    --highlight-keyword: #ff413c;
    --highlight-string: #70a6fd;
    --highlight-selected-line: rgba(14, 14, 14, 0.5);
    --base-0: #2e3136;
    --base-1: #444;
    --base-2: #666;
    --base-3: #666;
    --base-4: #666;
    --base-5: #e0e0e0;
    --base-6: #f5f5f5;
    --card-label-background: var(--tab-active-background);
    --card-label-color: var(--tab-active-color);
}

{# Basic styles
   ========================================================================= #}
html, body  {
    height: 100%;
    width: 100%;
}
body {
    background-color: var(--page-background);
    color: var(--base-6);
    display: flex;
    flex-direction: column;
    font-family: var(--font-sans-serif);
    font-size: 14px;
    line-height: 1.4;
}

h2, h3, h4 {
    font-weight: 500;
    margin: 1.5em 0 .5em;
}
h2 + h3,
h3 + h4 {
    margin-top: 1em;
}
h2 {
    font-size: 24px;
}
h3 {
    font-size: 21px;
}
h4 {
    font-size: 18px;
}
h2 span, h3 span, h4 span,
h2 small, h3 small, h4 small {
    color: var(--color-muted);
}

li {
    margin-bottom: 10px;
}

p {
    font-size: 16px;
    margin-bottom: 1em;
}

a {
    color: #218BC3;
    text-decoration: none;
}
a:hover {
    text-decoration: underline;
}
a.link-inverse {
    text-decoration: underline;
}
a.link-inverse:hover {
    text-decoration: none;
}
a:active,
a:hover {
    outline: 0;
}
h2 a,
h3 a,
h4 a {
    text-decoration: underline;
}
h2 a:hover,
h3 a:hover,
h4 a:hover {
    text-decoration: none;
}

abbr {
    border-bottom: 1px dotted var(--base-5);
    cursor: help;
}

code, pre {
    font-family: monospace;
    font-size: 13px;
}

{# Buttons (the colors of this element don't change based on the selected theme)
   ------------------------------------------------------------------------- #}
button {
    font-family: var(--font-sans-serif);
}
.btn {
    background: #777;
    border-radius: 2px;
    border: 0;
    color: #f5f5f5;
    display: inline-block;
    padding: .5em .75em;
}
.btn:hover {
    cursor: pointer;
    opacity: 0.8;
    text-decoration: none;
}
.btn-sm {
    font-size: 12px;
}
.btn-sm svg {
    height: 16px;
    width: 16px;
    vertical-align: middle;
}
.btn-link {
    border-color: transparent;
    color: #218BC3;
    text-decoration: none;
    background-color: transparent;
    outline: none;
    border: 0;
    padding: 0;
    cursor: pointer;
}
.btn-link:hover {
    text-decoration: underline;
}
{# Tables
   ------------------------------------------------------------------------- #}
table, tr, th, td {
    background: var(--table-background);
    border-collapse: collapse;
    line-height: 1.5;
    vertical-align: top;
}
table {
    background: var(--base-0);
    border: var(--border);
    box-shadow: var(--shadow);
    margin: 1em 0;
    width: 100%;
}

table th, table td {
    padding: 8px 10px;
}

table th {
    font-weight: bold;
    text-align: left;
}
table thead th {
    background-color: var(--table-header);
}
table thead th.key {
    width: 19%;
}
table thead.small th {
    font-size: 12px;
    padding: 4px 10px;
}

table tbody th,
table tbody td {
    border: 1px solid var(--base-2);
    border-width: 1px 0;
    font-family: monospace;
    font-size: 13px;
}

table tbody div {
    margin: .25em 0;
}
table tbody ul {
    margin: 0;
    padding: 0 0 0 1em;
}

table thead th.num-col,
table tbody td.num-col {
    text-align: center;
}

{# Utility classes
   ========================================================================= #}
.block {
    display: block;
}
.full-width {
    width: 100%;
}
.hidden {
    display: none;
}
.nowrap {
    white-space: pre;
}
.prewrap {
    white-space: pre-wrap;
}
.newline {
    display: block;
}
.break-long-words {
    -ms-word-break: break-all;
    word-break: break-all;
    word-break: break-word;
    -webkit-hyphens: auto;
    -moz-hyphens: auto;
    hyphens: auto;
}
.text-small {
    font-size: 12px !important;
}
.text-muted {
    color: var(--color-muted);
}
.text-danger {
    color: var(--color-error);
}
.text-bold {
    font-weight: bold;
}
.text-right {
    text-align: right;
}
.text-center {
    text-align: center;
}
.font-normal {
    font-family: var(--font-sans-serif);
    font-size: 14px;
}
.help {
    color: var(--color-muted);
    font-size: 14px;
    margin-bottom: .5em;
}
.empty {
    border: 4px dashed var(--base-2);
    color: var(--color-muted);
    margin: 1em 0;
    padding: .5em 2em;
}

.label {
    background-color: var(--base-4);
    color: #FAFAFA;
    display: inline-block;
    font-size: 12px;
    font-weight: bold;
    padding: 3px 7px;
    white-space: nowrap;
}
.label.same-width {
    min-width: 70px;
    text-align: center;
}
.label.status-success { background: var(--color-success); color: #FFF; }
.label.status-warning { background: var(--color-warning); color: #FFF; }
.label.status-error   { background: var(--background-error); color: #FFF; }

{# Metrics
   ------------------------------------------------------------------------- #}
.metrics {
    margin: 1em 0 0;
    overflow: auto;
}
.metrics .metric {
    float: left;
    margin: 0 1em 1em 0;
}

.metric {
    background: var(--metric-value-background);
    border: 1px solid var(--table-border);
    box-shadow: var(--shadow);
    color: var(--metric-value-color);
    min-width: 100px;
    min-height: 70px;
}
.metric .value {
    display: block;
    font-size: 28px;
    padding: 8px 15px 4px;
    text-align: center;
}
.metric .value svg {
    margin: 5px 0 -5px;
}
.metric .unit {
    color: var(--metric-unit-color);
    font-size: 18px;
    margin-left: -4px;
}
.metric .label {
    background: var(--metric-label-background);
    color: var(--metric-label-color);
    display: block;
    font-size: 12px;
    padding: 5px;
    text-align: center;
}

.metrics-horizontal .metric {
    min-height: 0;
    min-width: 0;
}
.metrics-horizontal .metric .value,
.metrics-horizontal .metric .label {
    display: inline;
    padding: 2px 6px;
}
.metrics-horizontal .metric .label {
    display: inline-block;
    padding: 6px;
}
.metrics-horizontal .metric .value {
    font-size: 16px;
}
.metrics-horizontal .metric .value svg {
    max-height: 14px;
    line-height: 10px;
    margin: 0;
    padding-left: 4px;
    vertical-align: middle;
}

.metric-divider {
    float: left;
    margin: 0 1em;
    min-height: 1px; {# required to apply 'margin' to an empty 'div' #}
}

{# Cards
   ------------------------------------------------------------------------- #}
.card {
    background: var(--base-0);
    border: var(--border);
    box-shadow: var(--shadow);
    margin: 1em 0;
    padding: 10px;
}
.card-block + .card-block {
    border-top: 1px solid var(--base-2);
    padding-top: 10px;
}
.card *:first-child,
.card-block *:first-child {
    margin-top: 0;
}
.card .label {
    background-color: var(--card-label-background);
    color: var(--card-label-color);
}

{# Status
   ------------------------------------------------------------------------- #}
.status-success {
    background: rgba(94, 151, 110, 0.3);
}
.status-warning {
    background: rgba(240, 181, 24, 0.3);
}
.status-error {
    background: rgba(176, 65, 62, 0.2);
}
.status-success td,
.status-warning td,
.status-error td {
    background: transparent;
}
tr.status-error td,
tr.status-warning td {
    border-bottom: 1px solid #FAFAFA;
    border-top: 1px solid #FAFAFA;
}

.status-warning .colored {
    color: var(--color-warning);
}
.status-error .colored  {
    color: var(--color-error);
}

{# Syntax highlighting
   ========================================================================= #}
.highlight pre {
    margin: 0;
    white-space: pre-wrap;
}

.highlight .keyword   { color: #8959A8; font-weight: bold; }
.highlight .word      { color: var(--color-text); }
.highlight .variable  { color: #916319; }
.highlight .symbol    { color: var(--color-text); }
.highlight .comment   { color: #999999; }
.highlight .backtick  { color: #718C00; }
.highlight .string    { color: #718C00; }
.highlight .number    { color: #F5871F; font-weight: bold; }
.highlight .error     { color: #C82829; }

{# Icons
   ========================================================================= #}
.sf-icon {
    vertical-align: middle;
    background-repeat: no-repeat;
    background-size: contain;
    width: 16px;
    height: 16px;
    display: inline-block;
}
.sf-icon svg {
    width: 16px;
    height: 16px;
}
.sf-icon.sf-medium,
.sf-icon.sf-medium svg {
    width: 24px;
    height: 24px;
}
.sf-icon.sf-large,
.sf-icon.sf-large svg {
    width: 32px;
    height: 32px;
}


{# Layout
   ========================================================================= #}
.container {
    max-width: 1300px;
    padding-right: 15px;
}
#header {
    flex: 0 0 auto;
}
#header .container {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
}
#summary {
    flex: 0 0 auto;
}
#content {
    height: 100%;
}
#main {
    display: flex;
    flex-direction: row;
    min-height: 100%;
}
#sidebar {
    flex: 0 0 220px;
}
#collector-wrapper {
    flex: 0 1 100%;
    min-width: 0;
}
#collector-content {
    margin: 0 0 30px 0;
    padding: 14px 0 14px 20px;
}

#main h2:first-of-type {
    margin-top: 0;
}

{# Header (the colors of this element don't change based on the selected theme)
   ========================================================================= #}
#header {
    background-color: #222;
    overflow: hidden;
}
#header h1 {
    color: #fff;
    flex: 1;
    font-weight: normal;
    font-size: 21px;
    margin: 0;
    padding: 10px 10px 8px;
}
#header h1 span {
    color: #ccc;
}
#header h1 svg {
    height: 40px;
    width: 40px;
    margin-top: -4px;
    vertical-align: middle;
}
#header h1 svg path,
#header h1 svg .sf-svg-path {
    fill: #fff;
}
#header .search {
    padding-top: 11px;
}
#header .search input {
    border: 1px solid #ddd;
    margin-right: 4px;
    padding: 7px 8px;
    width: 200px;
}

{# Summary
   ========================================================================= #}
#summary .status {
    background: var(--base-2);
    border: solid rgba(0, 0, 0, 0.1);
    border-width: 2px 0;
    padding: 10px;
}
#summary h2,
#summary h2 a {
    color: var(--base-6);
    font-size: 21px;
    margin: 0;
    text-decoration: none;
    vertical-align: middle;
}
#summary h2 a:hover {
    text-decoration: underline;
}
#summary h2 a.referer {
    margin-left: .5em;
    font-size: 75%;
    color: rgba(255, 255, 255, 0.5);
}
#summary h2 a.referer:before {
    content: '\\1F503\\00a0';
}

#summary .status-success { background: var(--color-success); }
#summary .status-warning { background: var(--color-warning); }
#summary .status-error   { background: var(--background-error);   }

#summary .status-success h2,
#summary .status-success a,
#summary .status-warning h2,
#summary .status-warning a,
#summary .status-error h2,
#summary .status-error a {
    color: #FFF;
}

#summary dl.metadata,
#summary dl.metadata a {
    margin: 5px 0 0;
    color: rgba(255, 255, 255, 0.75);
}
#summary dl.metadata dt,
#summary dl.metadata dd {
    display: inline-block;
    font-size: 13px;
}
#summary dl.metadata dt {
    font-weight: bold;
}
#summary dl.metadata dt:after {
    content: ':';
}
#summary dl.metadata dd {
    margin: 0 1.5em 0 0;
}

#summary dl.metadata .label {
    background: rgba(255, 255, 255, 0.2);
}

{# Sidebar
   ========================================================================= #}
#sidebar {
    background: #444;
    color: #ccc;
    padding-bottom: 30px;
    position: relative;
    width: 220px;
    z-index: 9999;
}
#sidebar .module {
    padding: 10px;
    width: 220px;
}

{# Sidebar Shortcuts
   ------------------------------------------------------------------------- #}
#sidebar #sidebar-shortcuts {
    background: #333;
    width: 220px;
}
#sidebar #sidebar-shortcuts .shortcuts {
    position: relative;
    padding: 16px 10px;
}
#sidebar-shortcuts .icon {
    display: block;
    float: left;
    width: 50px;
    margin: 2px 0 0 -10px;
    text-align: center;
}
#sidebar #sidebar-shortcuts .btn {
    color: #f5f5f5;
}
#sidebar #sidebar-shortcuts .btn + .btn {
    margin-left: 5px;
}
#sidebar #sidebar-shortcuts .btn {
    padding: .5em;
}

{# Sidebar Search (the colors of this element don't change based on the selected theme)
   ------------------------------------------------------------------------- #}
#sidebar-search .form-group:first-of-type {
    padding-top: 20px;
}
#sidebar-search .form-group {
    clear: both;
    overflow: hidden;
    padding-bottom: 10px;
}
#sidebar-search .form-group label {
    float: left;
    font-size: 13px;
    line-height: 24px;
    width: 60px;
}
#sidebar-search .form-group input,
#sidebar-search .form-group select {
    float: left;
    font-size: 13px;
    padding: 3px 6px;
}
#sidebar-search .form-group input {
    background: #ccc;
    border: 1px solid var(--color-muted);
    color: #222;
    width: 120px;
}
#sidebar-search .form-group select {
    color: #222;
}
#sidebar-search .form-group .btn {
    float: right;
    margin-right: 10px;
}

{# Sidebar Menu (the colors of this element don't change based on the selected theme)
   ------------------------------------------------------------------------- #}
#menu-profiler {
    margin: 0;
    padding: 0;
    list-style-type: none;
}
#menu-profiler li {
    position: relative;
    margin-bottom: 0;
}
#menu-profiler li a {
    border: solid transparent;
    border-width: 2px 0;
    color: var(--base-3);
    display: block;
}
#menu-profiler li a:hover {
    text-decoration: none;
}
#menu-profiler li a .label {
    background: transparent;
    color: #EEE;
    display: block;
    padding: 8px 10px 8px 50px;
    overflow: hidden;
    white-space: nowrap;
}
#menu-profiler li a .label .icon {
    display: block;
    position: absolute;
    left: 0;
    top: 8px;
    width: 50px;
    text-align: center;
}
#menu-profiler .label .icon img,
#menu-profiler .label .icon svg {
    height: 24px;
    max-width: 24px;
}
#menu-profiler li a .label .icon svg path,
#menu-profiler li a .label .icon svg .sf-svg-path {
    fill: #DDD;
}
#menu-profiler li a .label strong {
    font-size: 16px;
    font-weight: normal;
}
#menu-profiler li a .label.disabled {
    opacity: .25;
}
#menu-profiler li a:hover .label.disabled,
#menu-profiler li.selected a .label.disabled {
    opacity: 1;
}

#menu-profiler li.selected a,
#menu-profiler:hover li.selected a:hover,
#menu-profiler li a:hover {
    background: #666;
    border: solid #555;
    border-width: 2px 0;
}
#menu-profiler li.selected a .label,
#menu-profiler li a:hover .label {
    color: #FFF;
}
#menu-profiler li.selected a .icon svg path,
#menu-profiler li.selected a .icon svg .sf-svg-path,
#menu-profiler li a:hover .icon svg path,
#menu-profiler li a:hover .icon svg .sf-svg-path {
    fill: #fff;
}

#menu-profiler li a .count {
    background-color: #666;
    color: #fff;
    display: inline-block;
    font-weight: bold;
    min-width: 10px;
    padding: 2px 6px;
    position: absolute;
    right: 10px;
    text-align: center;
    vertical-align: baseline;
    white-space: nowrap;
}
#menu-profiler li a span.count span {
    font-size: 12px;

}
#menu-profiler li a span.count span + span::before {
    content: \" / \";
    color: #AAA;
}

#menu-profiler .label-status-warning .count {
    background: var(--color-warning);
}
#menu-profiler .label-status-error .count {
    background: var(--background-error);
}

{# Timeline panel
   ========================================================================= #}
#timeline-control {
    background: var(--table-background);
    box-shadow: var(--shadow);
    margin: 1em 0;
    padding: 10px;
}
#timeline-control label {
    font-weight: bold;
    margin-right: 1em;
}
#timeline-control input {
    background: var(--metric-value-background);
    border: 1px solid var(--table-border);
    font-size: 16px;
    padding: 4px;
    text-align: right;
    width: 5em;
}
#timeline-control .help {
    margin-left: 1em;
}

.sf-profiler-timeline .legends {
    font-size: 12px;
    line-height: 1.5em;
}
.sf-profiler-timeline + p.help {
    margin-top: 0;
}

{# Tabbed navigation
   ========================================================================= #}
.tab-navigation {
    margin: 0 0 1em 0;
    padding: 0;
}
.tab-navigation li {
    background: var(--tab-background);
    border: 1px solid var(--table-border);
    color: var(--tab-color);
    cursor: pointer;
    display: inline-block;
    font-size: 16px;
    margin: 0 0 0 -1px;
    padding: .5em .75em;
    z-index: 1;
}
.tab-navigation li .badge {
    background-color: var(--base-1);
    color: var(--base-4);
    display: inline-block;
    font-size: 14px;
    font-weight: bold;
    margin-left: 8px;
    min-width: 10px;
    padding: 1px 6px;
    text-align: center;
    white-space: nowrap;
}
.tab-navigation li.disabled {
    background: var(--tab-disabled-background);
    color: var(--tab-disabled-color);
}
.tab-navigation li.active {
    background: var(--tab-active-background);
    color: var(--tab-active-color);
    z-index: 1100;
}
.tab-navigation li.active .badge {
    background-color: var(--base-5);
    color: var(--base-2);
}
.tab-content > *:first-child {
    margin-top: 0;
}
.tab-navigation li .badge.status-warning { background: var(--color-warning); color: #FFF; }
.tab-navigation li .badge.status-error { background: var(--background-error); color: #FFF; }

.sf-tabs .tab:not(:first-child) { display: none; }

{# Toggles
   ========================================================================= #}
.sf-toggle-content {
    -moz-transition: display .25s ease;
    -webkit-transition: display .25s ease;
    transition: display .25s ease;
}
.sf-toggle-content.sf-toggle-hidden {
    display: none;
}
.sf-toggle-content.sf-toggle-visible {
    display: block;
}

{# Filters
   ========================================================================= #}
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

{# Twig panel
   ========================================================================= #}
#twig-dump pre {
    font-size: 12px;
    line-height: 1.7;
    background-color: var(--base-0);
    border: var(--border);
    padding: 15px;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
}
#twig-dump span {
    border-radius: 2px;
    padding: 1px 2px;
}
#twig-dump .status-error   { background: transparent; color: var(--color-error); }
#twig-dump .status-warning { background: rgba(240, 181, 24, 0.3);     }
#twig-dump .status-success { background: rgba(100, 189, 99, 0.2);     }
#twig-dump .status-info    { background: var(--info-background);      }

#twig-table tbody td {
    vertical-align: middle;
}
#twig-table tbody td > a {
    margin-left: -5px;
}
#twig-table tbody td div {
    margin: 0;
}

.icon-twig {
    vertical-align: text-bottom;
}
.icon-twig svg path {
    fill: #7eea12;
}

{# Logger panel
   ========================================================================= #}
table.logs .metadata {
    display: block;
    font-size: 12px;
}
.theme-dark tr.status-error td,
.theme-dark tr.status-warning td { border-bottom: unset; border-top: unset; }

{# Doctrine panel
   ========================================================================= #}
.sql-runnable {
    background: var(--base-1);
    margin: .5em 0;
    padding: 1em;
}
.sql-explain {
    overflow-x: auto;
    max-width: 920px;
}
.sql-explain table td, .sql-explain table tr {
    word-break: normal;
}
.queries-table pre {
    margin: 0;
    white-space: pre-wrap;
    -ms-word-break: break-all;
    word-break: break-all;
    word-break: break-word;
    -webkit-hyphens: auto;
    -moz-hyphens: auto;
    hyphens: auto;
}

{# Security panel
   ========================================================================= #}
#collector-content .decision-log .voter_result td {
    border-top-width: 1px;
    border-bottom-width: 0;
    padding-bottom: 0;
}

#collector-content .decision-log .voter_details td {
    border-top-width: 0;
    border-bottom-width: 1px;
    padding-bottom: 0;
}

#collector-content .decision-log .voter_details table {
    border: 0;
    margin: 0;
    box-shadow: unset;
}

#collector-content .decision-log .voter_details table td {
    border: 0;
    padding: 0 0 8px 0;
}

{# Validator panel
   ========================================================================= #}

#collector-content .sf-validator {
    margin-bottom: 2em;
}

#collector-content .sf-validator .sf-validator-context,
#collector-content .sf-validator .trace {
    border: var(--border);
    background: var(--base-0);
    padding: 10px;
    margin: 0.5em 0;
    overflow: auto;
}
#collector-content .sf-validator .trace {
    font-size: 12px;
}
#collector-content .sf-validator .trace li {
    margin-bottom: 0;
    padding: 0;
}
#collector-content .sf-validator .trace li.selected {
    background: var(--highlight-selected-line);
}

{# Messenger panel
   ========================================================================= #}

#collector-content .message-bus .trace {
    border: var(--border);
    background: var(--base-0);
    padding: 10px;
    margin: 0.5em 0;
    overflow: auto;
}
#collector-content .message-bus .trace {
    font-size: 12px;
}
#collector-content .message-bus .trace li {
    margin-bottom: 0;
    padding: 0;
}
#collector-content .message-bus .trace li.selected {
    background: var(--highlight-selected-line);
}

{# Dump panel
   ========================================================================= #}
pre.sf-dump, pre.sf-dump .sf-dump-default {
    z-index: 1000 !important;
}

#collector-content .sf-dump {
    margin-bottom: 2em;
}
#collector-content pre.sf-dump,
#collector-content .sf-dump code,
#collector-content .sf-dump samp {
    font-family: monospace;
    font-size: 13px;
}
#collector-content .sf-dump a {
    cursor: pointer;
}
#collector-content .sf-dump pre.sf-dump,
#collector-content .sf-dump .trace {
    border: var(--border);
    padding: 10px;
    margin: 0.5em 0;
    overflow: auto;
}

#collector-content pre.sf-dump,
#collector-content .sf-dump-default {
    background: none;
}
#collector-content .sf-dump-ellipsis { max-width: 100em; }

#collector-content .sf-dump {
    margin: 0;
    padding: 0;
    line-height: 1.4;
}

#collector-content .dump-inline .sf-dump {
    display: inline;
    white-space: normal;
    font-size: inherit;
    line-height: inherit;
}
#collector-content .dump-inline .sf-dump:after {
    display: none;
}

#collector-content .sf-dump .trace {
    font-size: 12px;
}
#collector-content .sf-dump .trace li {
    margin-bottom: 0;
    padding: 0;
}

{# Search Results page
   ========================================================================= #}
#search-results td {
    font-family: var(--font-sans-serif);
    vertical-align: middle;
}

#search-results .sf-search {
    visibility: hidden;
    margin-left: 2px;
}
#search-results tr:hover .sf-search {
    visibility: visible;
}

{# Small screens
   ========================================================================= #}

.visible-small {
    display: none;
}
.hidden-small {
    display: inherit;
}

@media (max-width: 768px) {
    #sidebar {
        flex-basis: 50px;
        overflow-x: hidden;
        transition: flex-basis 200ms ease-out;
    }
    #sidebar:hover, #sidebar.expanded {
        flex-basis: 220px;
    }

    #sidebar-search {
        display: none;
    }
    #sidebar:hover #sidebar-search.sf-toggle-visible, #sidebar.expanded #sidebar-search.sf-toggle-visible {
        display: block;
    }

    #sidebar .module {
        display: none;
    }
    #sidebar:hover .module, #sidebar.expanded .module {
        display: block;
    }

    #sidebar:not(:hover):not(.expanded) .label .count {
        border-radius: 50%;
        border: 1px solid #eee;
        height: 8px;
        min-width: 0;
        padding: 0;
        right: 4px;
        text-indent: -9999px;
        top: 50%;
        width: 8px;
    }

    .visible-small {
        display: inherit;
    }
    .hidden-small {
        display: none;
    }

    .btn-sm svg {
        margin-left: 2px;
    }
}

{# Config Options
   ========================================================================= #}
body.width-full .container {
    max-width: 100%;
}

body.theme-light #collector-content .sf-dump pre.sf-dump,
body.theme-light #collector-content .sf-dump .trace {
    background: #FFF;
}
body.theme-light #collector-content pre.sf-dump,
body.theme-light #collector-content .sf-dump-default {
    color: #CC7832;
}
body.theme-light #collector-content .sf-dump-str { color: #629755; }
body.theme-light #collector-content .sf-dump-private,
body.theme-light #collector-content .sf-dump-protected,
body.theme-light #collector-content .sf-dump-public { color: #262626; }
body.theme-light #collector-content .sf-dump-note { color: #6897BB; }
body.theme-light #collector-content .sf-dump-key { color: #789339; }
body.theme-light #collector-content .sf-dump-ref { color: #6E6E6E; }
body.theme-light #collector-content .sf-dump-ellipsis { color: #CC7832; max-width: 100em; }
body.theme-light #collector-content .sf-dump-ellipsis-path { max-width: 5em; }
body.theme-light #collector-content .sf-dump .trace li.selected {
    background: rgba(255, 255, 153, 0.5);
}
", "@WebProfiler/Profiler/profiler.css.twig", "C:\\laragon\\www\\training\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Profiler\\profiler.css.twig");
    }
}
