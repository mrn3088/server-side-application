<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @Login/loginLayout.twig */
class __TwigTemplate_276a6d91753cdee69ac0c05e20742fa2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'meta' => [$this, 'block_meta'],
            'head' => [$this, 'block_head'],
            'pageDescription' => [$this, 'block_pageDescription'],
            'body' => [$this, 'block_body'],
            'loginContent' => [$this, 'block_loginContent'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@Morpheus/layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        ob_start();
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Login_LogIn"), "html", null, true);
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 15
        $context["bodyId"] = "loginPage";
        // line 1
        $this->parent = $this->loadTemplate("@Morpheus/layout.twig", "@Login/loginLayout.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <meta name=\"robots\" content=\"noindex,nofollow\">
";
    }

    // line 7
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
    }

    // line 13
    public function block_pageDescription($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_OpenSourceWebAnalytics"), "html", null, true);
    }

    // line 17
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "
    ";
        // line 19
        echo $this->env->getFunction('postEvent')->getCallable()("Template.beforeTopBar", "login");
        echo "
    ";
        // line 20
        echo $this->env->getFunction('postEvent')->getCallable()("Template.beforeContent", "login");
        echo "

    ";
        // line 22
        $this->loadTemplate("_iframeBuster.twig", "@Login/loginLayout.twig", 22)->display($context);
        // line 23
        echo "
    <div id=\"notificationContainer\">
    </div>
    <nav>
        <div class=\"nav-wrapper\">
            ";
        // line 28
        $this->loadTemplate("@CoreHome/_logo.twig", "@Login/loginLayout.twig", 28)->display(twig_array_merge($context, ["logoLink" => "https://matomo.org", "centeredLogo" => true, "useLargeLogo" => false]));
        // line 29
        echo "        </div>
    </nav>

    <section class=\"loginSection row\">
        <div class=\"col s12 m6 push-m3 l4 push-l4\">

        ";
        // line 36
        echo "        ";
        if (((array_key_exists("isValidHost", $context) && array_key_exists("invalidHostMessage", $context)) && ((isset($context["isValidHost"]) || array_key_exists("isValidHost", $context) ? $context["isValidHost"] : (function () { throw new RuntimeError('Variable "isValidHost" does not exist.', 36, $this->source); })()) == false))) {
            // line 37
            echo "            ";
            $this->loadTemplate("@CoreHome/_warningInvalidHost.twig", "@Login/loginLayout.twig", 37)->display($context);
            // line 38
            echo "        ";
        } else {
            // line 39
            echo "            ";
            $this->displayBlock('loginContent', $context, $blocks);
            // line 41
            echo "        ";
        }
        // line 42
        echo "
        </div>
    </section>

";
    }

    // line 39
    public function block_loginContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 40
        echo "            ";
    }

    public function getTemplateName()
    {
        return "@Login/loginLayout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 40,  142 => 39,  134 => 42,  131 => 41,  128 => 39,  125 => 38,  122 => 37,  119 => 36,  111 => 29,  109 => 28,  102 => 23,  100 => 22,  95 => 20,  91 => 19,  88 => 18,  84 => 17,  77 => 13,  70 => 8,  66 => 7,  61 => 4,  57 => 3,  52 => 1,  50 => 15,  46 => 11,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Morpheus/layout.twig' %}

{% block meta %}
    <meta name=\"robots\" content=\"noindex,nofollow\">
{% endblock %}

{% block head %}
    {{ parent() }}
{% endblock %}

{% set title %}{{ 'Login_LogIn'|translate }}{% endset %}

{% block pageDescription %}{{ 'General_OpenSourceWebAnalytics'|translate }}{% endblock %}

{% set bodyId = 'loginPage' %}

{% block body %}

    {{ postEvent(\"Template.beforeTopBar\", \"login\") }}
    {{ postEvent(\"Template.beforeContent\", \"login\") }}

    {% include \"_iframeBuster.twig\" %}

    <div id=\"notificationContainer\">
    </div>
    <nav>
        <div class=\"nav-wrapper\">
            {% include \"@CoreHome/_logo.twig\" with { 'logoLink': 'https://matomo.org', 'centeredLogo': true, 'useLargeLogo': false } %}
        </div>
    </nav>

    <section class=\"loginSection row\">
        <div class=\"col s12 m6 push-m3 l4 push-l4\">

        {# untrusted host warning #}
        {% if (isValidHost is defined and invalidHostMessage is defined and isValidHost == false) %}
            {% include '@CoreHome/_warningInvalidHost.twig' %}
        {% else %}
            {% block loginContent %}
            {% endblock %}
        {% endif %}

        </div>
    </section>

{% endblock %}
", "@Login/loginLayout.twig", "/var/www/cse135.monster/public_html/matomo/plugins/Login/templates/loginLayout.twig");
    }
}
