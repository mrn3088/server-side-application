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

/* @Installation/firstWebsiteSetup.twig */
class __TwigTemplate_d9aed01f4a0f253b4a0d2d23c02c8b04 extends Template
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
        $this->parent = $this->loadTemplate("@Installation/layout.twig", "@Installation/firstWebsiteSetup.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
    <h2>";
        // line 5
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Installation_SetupWebsite"), "html", null, true);
        echo "</h2>

    ";
        // line 7
        if (array_key_exists("displayGeneralSetupSuccess", $context)) {
            // line 8
            echo "        <div id=\"feedback\" class=\"alert alert-success\">
            ";
            // line 9
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Installation_SuperUserSetupSuccess"), "html", null, true);
            echo "
        </div>
    ";
        }
        // line 12
        echo "
    <p>";
        // line 13
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Installation_SiteSetup"), "html", null, true);
        echo "</p>

    ";
        // line 15
        if (array_key_exists("errorMessage", $context)) {
            // line 16
            echo "        <div class=\"alert alert-danger\">
            ";
            // line 17
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Installation_SetupWebsiteError"), "html", null, true);
            echo ":
            <br/>- ";
            // line 18
            echo (isset($context["errorMessage"]) || array_key_exists("errorMessage", $context) ? $context["errorMessage"] : (function () { throw new RuntimeError('Variable "errorMessage" does not exist.', 18, $this->source); })());
            echo "
        </div>
    ";
        }
        // line 21
        echo "
    ";
        // line 22
        if (array_key_exists("form_data", $context)) {
            // line 23
            echo "        ";
            $this->loadTemplate("genericForm.twig", "@Installation/firstWebsiteSetup.twig", 23)->display($context);
            // line 24
            echo "    ";
        }
        // line 25
        echo "    <div class=\"clearfix\"></div>

    <p><em>";
        // line 27
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Installation_SiteSetupFootnote"), "html", null, true);
        echo "</em></p>

";
    }

    public function getTemplateName()
    {
        return "@Installation/firstWebsiteSetup.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 27,  103 => 25,  100 => 24,  97 => 23,  95 => 22,  92 => 21,  86 => 18,  82 => 17,  79 => 16,  77 => 15,  72 => 13,  69 => 12,  63 => 9,  60 => 8,  58 => 7,  53 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Installation/layout.twig' %}

{% block content %}

    <h2>{{ 'Installation_SetupWebsite'|translate }}</h2>

    {% if displayGeneralSetupSuccess is defined %}
        <div id=\"feedback\" class=\"alert alert-success\">
            {{ 'Installation_SuperUserSetupSuccess'|translate }}
        </div>
    {% endif %}

    <p>{{ 'Installation_SiteSetup'|translate }}</p>

    {% if errorMessage is defined %}
        <div class=\"alert alert-danger\">
            {{ 'Installation_SetupWebsiteError'|translate }}:
            <br/>- {{ errorMessage|raw }}
        </div>
    {% endif %}

    {% if form_data is defined %}
        {% include \"genericForm.twig\" %}
    {% endif %}
    <div class=\"clearfix\"></div>

    <p><em>{{ 'Installation_SiteSetupFootnote'|translate }}</em></p>

{% endblock %}
", "@Installation/firstWebsiteSetup.twig", "/var/www/cse135.monster/public_html/matomo/plugins/Installation/templates/firstWebsiteSetup.twig");
    }
}
