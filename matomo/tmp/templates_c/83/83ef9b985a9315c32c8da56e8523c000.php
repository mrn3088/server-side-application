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

/* @Morpheus/layout.twig */
class __TwigTemplate_968947d7f8d17cb6a30e24ecc3795cc7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'pageTitle' => [$this, 'block_pageTitle'],
            'pageDescription' => [$this, 'block_pageDescription'],
            'meta' => [$this, 'block_meta'],
            'body' => [$this, 'block_body'],
            'root' => [$this, 'block_root'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html id=\"ng-app\" ";
        // line 2
        if (array_key_exists("language", $context)) {
            echo "lang=\"";
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["language"]) || array_key_exists("language", $context) ? $context["language"] : (function () { throw new RuntimeError('Variable "language" does not exist.', 2, $this->source); })()), "html", null, true);
            echo "\"";
        }
        echo " ng-app=\"piwikApp\">
    <head>
        ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 32
        echo "    </head>
    <body id=\"";
        // line 33
        echo \Piwik\piwik_escape_filter($this->env, ((array_key_exists("bodyId", $context)) ? (_twig_default_filter((isset($context["bodyId"]) || array_key_exists("bodyId", $context) ? $context["bodyId"] : (function () { throw new RuntimeError('Variable "bodyId" does not exist.', 33, $this->source); })()), "")) : ("")), "html", null, true);
        echo "\" ng-app=\"app\" class=\"";
        echo \Piwik\piwik_escape_filter($this->env, ((array_key_exists("bodyClass", $context)) ? (_twig_default_filter((isset($context["bodyClass"]) || array_key_exists("bodyClass", $context) ? $context["bodyClass"] : (function () { throw new RuntimeError('Variable "bodyClass" does not exist.', 33, $this->source); })()), "")) : ("")), "html", null, true);
        echo "\">
        ";
        // line 34
        echo $this->env->getFunction('postEvent')->getCallable()("Template.bodyTop");
        echo "

    ";
        // line 36
        $this->displayBlock('body', $context, $blocks);
        // line 50
        echo "
        <div id=\"pageFooter\">
            ";
        // line 52
        echo $this->env->getFunction('postEvent')->getCallable()("Template.pageFooter");
        echo "
        </div>

        ";
        // line 55
        $this->loadTemplate("@CoreHome/_adblockDetect.twig", "@Morpheus/layout.twig", 55)->display($context);
        // line 56
        echo "
        ";
        // line 57
        echo $this->env->getFunction('postEvent')->getCallable()("Template.bodyBottom");
        echo "
    </body>
</html>
";
    }

    // line 4
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "            <meta charset=\"utf-8\">
            <title>";
        // line 7
        $this->displayBlock('pageTitle', $context, $blocks);
        // line 12
        echo "</title>
            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=EDGE,chrome=1\"/>
            <meta name=\"viewport\" content=\"initial-scale=1.0\"/>
            <meta name=\"generator\" content=\"Matomo - free/libre analytics platform\"/>
            <meta name=\"description\" content=\"";
        // line 16
        $this->displayBlock('pageDescription', $context, $blocks);
        echo "\"/>
            <meta name=\"apple-itunes-app\" content=\"app-id=737216887\" />
            <meta name=\"google\" content=\"notranslate\">
            ";
        // line 19
        $this->displayBlock('meta', $context, $blocks);
        // line 22
        echo "
            ";
        // line 23
        $this->loadTemplate("@CoreHome/_favicon.twig", "@Morpheus/layout.twig", 23)->display($context);
        // line 24
        echo "            ";
        $this->loadTemplate("@CoreHome/_applePinnedTabIcon.twig", "@Morpheus/layout.twig", 24)->display($context);
        // line 25
        echo "            <meta name=\"theme-color\" content=\"";
        echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["themeStyles"]) || array_key_exists("themeStyles", $context) ? $context["themeStyles"] : (function () { throw new RuntimeError('Variable "themeStyles" does not exist.', 25, $this->source); })()), "colorHeaderBackground", [], "any", false, false, false, 25), "html", null, true);
        echo "\">
            ";
        // line 26
        $this->loadTemplate("_jsGlobalVariables.twig", "@Morpheus/layout.twig", 26)->display($context);
        // line 27
        echo "            ";
        $this->loadTemplate("_jsCssIncludes.twig", "@Morpheus/layout.twig", 27)->display($context);
        // line 29
        if ( !(isset($context["isCustomLogo"]) || array_key_exists("isCustomLogo", $context) ? $context["isCustomLogo"] : (function () { throw new RuntimeError('Variable "isCustomLogo" does not exist.', 29, $this->source); })())) {
            echo "<link rel=\"manifest\" href=\"plugins/CoreHome/javascripts/manifest.json\" crossorigin=\"use-credentials\">";
        }
        // line 30
        echo "
        ";
    }

    // line 7
    public function block_pageTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        if (array_key_exists("title", $context)) {
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 8, $this->source); })()), "html", null, true);
            echo " - ";
        }
        // line 9
        if (array_key_exists("categoryTitle", $context)) {
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["categoryTitle"]) || array_key_exists("categoryTitle", $context) ? $context["categoryTitle"] : (function () { throw new RuntimeError('Variable "categoryTitle" does not exist.', 9, $this->source); })()), "html", null, true);
            echo " - ";
        }
        // line 10
        echo "Matomo";
    }

    // line 16
    public function block_pageDescription($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 19
    public function block_meta($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "                <meta name=\"robots\" content=\"noindex,nofollow\">
            ";
    }

    // line 36
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        echo "        ";
        $this->loadTemplate("_iframeBuster.twig", "@Morpheus/layout.twig", 37)->display($context);
        // line 38
        echo "        ";
        $this->loadTemplate("@CoreHome/_javaScriptDisabled.twig", "@Morpheus/layout.twig", 38)->display($context);
        // line 39
        echo "
        <div id=\"root\">
            ";
        // line 41
        $this->displayBlock('root', $context, $blocks);
        // line 43
        echo "        </div>

        <div piwik-popover-handler></div>

        ";
        // line 47
        $this->loadTemplate("@CoreHome/_shortcuts.twig", "@Morpheus/layout.twig", 47)->display($context);
        // line 48
        echo "
    ";
    }

    // line 41
    public function block_root($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 42
        echo "            ";
    }

    public function getTemplateName()
    {
        return "@Morpheus/layout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 42,  208 => 41,  203 => 48,  201 => 47,  195 => 43,  193 => 41,  189 => 39,  186 => 38,  183 => 37,  179 => 36,  174 => 20,  170 => 19,  164 => 16,  160 => 10,  155 => 9,  150 => 8,  146 => 7,  141 => 30,  137 => 29,  134 => 27,  132 => 26,  127 => 25,  124 => 24,  122 => 23,  119 => 22,  117 => 19,  111 => 16,  105 => 12,  103 => 7,  100 => 5,  96 => 4,  88 => 57,  85 => 56,  83 => 55,  77 => 52,  73 => 50,  71 => 36,  66 => 34,  60 => 33,  57 => 32,  55 => 4,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html id=\"ng-app\" {% if language is defined %}lang=\"{{ language }}\"{% endif %} ng-app=\"piwikApp\">
    <head>
        {% block head %}
            <meta charset=\"utf-8\">
            <title>
                {%- block pageTitle %}
                    {%- if title is defined -%}{{ title }} - {% endif -%}
                    {%- if categoryTitle is defined -%}{{ categoryTitle }} - {% endif -%}
                    Matomo
                {%- endblock -%}
            </title>
            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=EDGE,chrome=1\"/>
            <meta name=\"viewport\" content=\"initial-scale=1.0\"/>
            <meta name=\"generator\" content=\"Matomo - free/libre analytics platform\"/>
            <meta name=\"description\" content=\"{% block pageDescription %}{% endblock %}\"/>
            <meta name=\"apple-itunes-app\" content=\"app-id=737216887\" />
            <meta name=\"google\" content=\"notranslate\">
            {% block meta %}
                <meta name=\"robots\" content=\"noindex,nofollow\">
            {% endblock %}

            {% include \"@CoreHome/_favicon.twig\" %}
            {% include \"@CoreHome/_applePinnedTabIcon.twig\" %}
            <meta name=\"theme-color\" content=\"{{ themeStyles.colorHeaderBackground }}\">
            {% include \"_jsGlobalVariables.twig\" %}
            {% include \"_jsCssIncludes.twig\" %}

            {%- if not isCustomLogo %}<link rel=\"manifest\" href=\"plugins/CoreHome/javascripts/manifest.json\" crossorigin=\"use-credentials\">{% endif %}

        {% endblock %}
    </head>
    <body id=\"{{ bodyId|default('') }}\" ng-app=\"app\" class=\"{{ bodyClass|default('') }}\">
        {{ postEvent('Template.bodyTop' ) }}

    {% block body %}
        {% include \"_iframeBuster.twig\" %}
        {% include \"@CoreHome/_javaScriptDisabled.twig\" %}

        <div id=\"root\">
            {% block root %}
            {% endblock %}
        </div>

        <div piwik-popover-handler></div>

        {% include \"@CoreHome/_shortcuts.twig\" %}

    {% endblock %}

        <div id=\"pageFooter\">
            {{ postEvent('Template.pageFooter') }}
        </div>

        {% include \"@CoreHome/_adblockDetect.twig\" %}

        {{ postEvent('Template.bodyBottom' ) }}
    </body>
</html>
", "@Morpheus/layout.twig", "/var/www/cse135.monster/public_html/matomo/plugins/Morpheus/templates/layout.twig");
    }
}
