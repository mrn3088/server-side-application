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

/* @Installation/setupSuperUser.twig */
class __TwigTemplate_d62af00c9c00268f9ef9eea61bb1233a extends Template
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
        $this->parent = $this->loadTemplate("@Installation/layout.twig", "@Installation/setupSuperUser.twig", 1);
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
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Installation_SuperUser"), "html", null, true);
        echo "</h2>

    ";
        // line 7
        if (array_key_exists("errorMessage", $context)) {
            // line 8
            echo "        <div class=\"alert alert-danger\">
            ";
            // line 9
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Installation_SuperUserSetupError"), "html", null, true);
            echo ":
            <br/>- ";
            // line 10
            echo (isset($context["errorMessage"]) || array_key_exists("errorMessage", $context) ? $context["errorMessage"] : (function () { throw new RuntimeError('Variable "errorMessage" does not exist.', 10, $this->source); })());
            echo "
        </div>
    ";
        }
        // line 13
        echo "
    ";
        // line 14
        if (array_key_exists("form_data", $context)) {
            // line 15
            echo "        ";
            $this->loadTemplate("genericForm.twig", "@Installation/setupSuperUser.twig", 15)->display($context);
            // line 16
            echo "    ";
        }
        // line 17
        echo "
";
    }

    public function getTemplateName()
    {
        return "@Installation/setupSuperUser.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 17,  81 => 16,  78 => 15,  76 => 14,  73 => 13,  67 => 10,  63 => 9,  60 => 8,  58 => 7,  53 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Installation/layout.twig' %}

{% block content %}

    <h2>{{ 'Installation_SuperUser'|translate }}</h2>

    {% if errorMessage is defined %}
        <div class=\"alert alert-danger\">
            {{ 'Installation_SuperUserSetupError'|translate }}:
            <br/>- {{ errorMessage|raw }}
        </div>
    {% endif %}

    {% if form_data is defined %}
        {% include \"genericForm.twig\" %}
    {% endif %}

{% endblock %}
", "@Installation/setupSuperUser.twig", "/var/www/cse135.monster/public_html/matomo/plugins/Installation/templates/setupSuperUser.twig");
    }
}
