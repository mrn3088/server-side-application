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

/* @Installation/trackingCode.twig */
class __TwigTemplate_75ab9897340aec4684e66a31fd4693de extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@Installation/layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Installation/layout.twig", "@Installation/trackingCode.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
    ";
        // line 5
        if (array_key_exists("displayfirstWebsiteSetupSuccess", $context)) {
            // line 6
            echo "        <div id=\"feedback\" class=\"alert alert-success\">
            ";
            // line 7
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Installation_SetupWebsiteSetupSuccess", (isset($context["displaySiteName"]) || array_key_exists("displaySiteName", $context) ? $context["displaySiteName"] : (function () { throw new RuntimeError('Variable "displaySiteName" does not exist.', 7, $this->source); })())), "html", null, true);
            echo "
        </div>
    ";
        }
        // line 10
        echo "
    ";
        // line 11
        echo (isset($context["trackingHelp"]) || array_key_exists("trackingHelp", $context) ? $context["trackingHelp"] : (function () { throw new RuntimeError('Variable "trackingHelp" does not exist.', 11, $this->source); })());
        echo "

    <h3>";
        // line 13
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Installation_LargePiwikInstances"), "html", null, true);
        echo "</h3>
    <p>
        ";
        // line 15
        echo $this->env->getFilter('translate')->getCallable()("Installation_JsTagArchivingHelp1", "<a rel=\"noreferrer noopener\" target=\"_blank\" href=\"https://matomo.org/docs/setup-auto-archiving/\">", "</a>");
        echo "
    </p>
    <p>
        ";
        // line 18
        echo $this->env->getFilter('translate')->getCallable()("General_ReadThisToLearnMore", "<a rel=\"noreferrer noopener\" target=\"_blank\" href=\"https://matomo.org/docs/optimize/\">", "</a>");
        echo "
    </p>

";
    }

    public function getTemplateName()
    {
        return "@Installation/trackingCode.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 18,  77 => 15,  72 => 13,  67 => 11,  64 => 10,  58 => 7,  55 => 6,  53 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Installation/layout.twig' %}

{% block content %}

    {% if displayfirstWebsiteSetupSuccess is defined %}
        <div id=\"feedback\" class=\"alert alert-success\">
            {{ 'Installation_SetupWebsiteSetupSuccess'|translate(displaySiteName) }}
        </div>
    {% endif %}

    {{ trackingHelp|raw }}

    <h3>{{ 'Installation_LargePiwikInstances'|translate }}</h3>
    <p>
        {{ 'Installation_JsTagArchivingHelp1'|translate('<a rel=\"noreferrer noopener\" target=\"_blank\" href=\"https://matomo.org/docs/setup-auto-archiving/\">','</a>')|raw }}
    </p>
    <p>
        {{ 'General_ReadThisToLearnMore'|translate('<a rel=\"noreferrer noopener\" target=\"_blank\" href=\"https://matomo.org/docs/optimize/\">','</a>')|raw }}
    </p>

{% endblock %}
", "@Installation/trackingCode.twig", "/var/www/cse135.monster/public_html/matomo/plugins/Installation/templates/trackingCode.twig");
    }
}
