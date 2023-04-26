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

/* @Installation/finished.twig */
class __TwigTemplate_eb528f60cd4f0d38b1cf6023511c40f0 extends Template
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
        $this->parent = $this->loadTemplate("@Installation/layout.twig", "@Installation/finished.twig", 1);
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
        echo $this->env->getFilter('translate')->getCallable()("Installation_Congratulations");
        echo "</h2>

    ";
        // line 7
        echo $this->env->getFilter('translate')->getCallable()("Installation_CongratulationsHelp");
        echo "

    <h3>";
        // line 9
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Installation_WelcomeToCommunity"), "html", null, true);
        echo "</h3>
    <p>
        ";
        // line 11
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Installation_CollaborativeProject"), "html", null, true);
        echo "
    </p>
    <p>
        ";
        // line 14
        echo $this->env->getFilter('translate')->getCallable()("Installation_GetInvolved", "<a rel=\"noreferrer noopener\" target=\"_blank\" href=\"https://matomo.org/get-involved/\">", "</a>");
        echo "
        ";
        // line 15
        echo $this->env->getFilter('translate')->getCallable()("General_HelpTranslatePiwik", "<a rel='noreferrer noopener' target='_blank' href='https://matomo.org/translations/'>", "</a>");
        echo "
    </p>
    <p>";
        // line 17
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Installation_WeHopeYouWillEnjoyPiwik"), "html", null, true);
        echo "</p>
    <p><i>";
        // line 18
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Installation_HappyAnalysing"), "html", null, true);
        echo "</i></p>

    ";
        // line 20
        if ((isset($context["areAdsForProfessionalServicesEnabled"]) || array_key_exists("areAdsForProfessionalServicesEnabled", $context) ? $context["areAdsForProfessionalServicesEnabled"] : (function () { throw new RuntimeError('Variable "areAdsForProfessionalServicesEnabled" does not exist.', 20, $this->source); })())) {
            // line 21
            echo "        <h3>";
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Installation_ProfessionalServicesAdTitle"), "html", null, true);
            echo "</h3>
        <p>
            ";
            // line 23
            echo $this->env->getFilter('translate')->getCallable()("Installation_ProfessionalServicesfessionalServicesAdText", "<a rel=\"noreferrer noopener\" target=\"_blank\" href=\"https://plugins.matomo.org/premium?pk_campaign=App_ProfessionalServices&pk_medium=App_InstallationFinished&pk_source=Matomo_App\">", "</a>", "<a rel=\"noreferrer noopener\" target=\"_blank\" href=\"https://matomo.org/support-plans/?pk_campaign=App_ProfessionalServices&pk_medium=App_InstallationFinished&pk_source=Matomo_App\">");
            echo "
        </p>
        <p>
            ";
            // line 26
            echo $this->env->getFilter('translate')->getCallable()("Installation_ProfessionalServicesfessionalDiscoverHow", "<a rel=\"noreferrer noopener\" target=\"_blank\" href=\"https://matomo.org/matomo-cloud/?pk_campaign=App_ProfessionalServices&pk_medium=App_InstallationFinished&pk_source=Matomo_App\">", "</a>");
            echo "
        </p>
    ";
        }
        // line 29
        echo "
    <h3>Performance Settings</h3>
    <p>";
        // line 31
        echo $this->env->getFilter('translate')->getCallable()("Installation_PerformanceSettingsDesc1", "<a href=\"https://matomo.org/docs/setup-auto-archiving/\" rel=\"noreferrer noopener\" target=\"_blank\">", "</a>");
        echo "</p>
    <p>";
        // line 32
        echo $this->env->getFilter('translate')->getCallable()("Installation_PerformanceSettingsDesc2", "<a href=\"https://matomo.org/docs/setup-auto-archiving/\" rel=\"noreferrer noopener\" target=\"_blank\">", "</a>");
        echo "</p>

    <h3>";
        // line 34
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Installation_DefaultSettings"), "html", null, true);
        echo "</h3>
    <p>";
        // line 35
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Installation_DefaultSettingsHelp"), "html", null, true);
        echo "</p>

    ";
        // line 37
        if (array_key_exists("errorMessage", $context)) {
            // line 38
            echo "        <div class=\"alert alert-danger\">
            ";
            // line 39
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_Error"), "html", null, true);
            echo ":
            <br/>- ";
            // line 40
            echo (isset($context["errorMessage"]) || array_key_exists("errorMessage", $context) ? $context["errorMessage"] : (function () { throw new RuntimeError('Variable "errorMessage" does not exist.', 40, $this->source); })());
            echo "
        </div>
    ";
        }
        // line 43
        echo "
    <div class=\"installation-finished\">
        ";
        // line 45
        if (array_key_exists("form_data", $context)) {
            // line 46
            echo "            ";
            $this->loadTemplate("genericForm.twig", "@Installation/finished.twig", 46)->display($context);
            // line 47
            echo "        ";
        }
        // line 48
        echo "    </div>

";
    }

    public function getTemplateName()
    {
        return "@Installation/finished.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 48,  158 => 47,  155 => 46,  153 => 45,  149 => 43,  143 => 40,  139 => 39,  136 => 38,  134 => 37,  129 => 35,  125 => 34,  120 => 32,  116 => 31,  112 => 29,  106 => 26,  100 => 23,  94 => 21,  92 => 20,  87 => 18,  83 => 17,  78 => 15,  74 => 14,  68 => 11,  63 => 9,  58 => 7,  53 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Installation/layout.twig' %}

{% block content %}

    <h2>{{ 'Installation_Congratulations'|translate|raw }}</h2>

    {{ 'Installation_CongratulationsHelp'|translate|raw }}

    <h3>{{ 'Installation_WelcomeToCommunity'|translate }}</h3>
    <p>
        {{ 'Installation_CollaborativeProject'|translate }}
    </p>
    <p>
        {{ 'Installation_GetInvolved'|translate('<a rel=\"noreferrer noopener\" target=\"_blank\" href=\"https://matomo.org/get-involved/\">','</a>')|raw }}
        {{ 'General_HelpTranslatePiwik'|translate(\"<a rel='noreferrer noopener' target='_blank' href=\\'https://matomo.org/translations/\\'>\",\"<\\/a>\")|raw }}
    </p>
    <p>{{ 'Installation_WeHopeYouWillEnjoyPiwik'|translate }}</p>
    <p><i>{{ 'Installation_HappyAnalysing'|translate }}</i></p>

    {% if areAdsForProfessionalServicesEnabled %}
        <h3>{{ 'Installation_ProfessionalServicesAdTitle'|translate }}</h3>
        <p>
            {{ 'Installation_ProfessionalServicesfessionalServicesAdText'|translate('<a rel=\"noreferrer noopener\" target=\"_blank\" href=\"https://plugins.matomo.org/premium?pk_campaign=App_ProfessionalServices&pk_medium=App_InstallationFinished&pk_source=Matomo_App\">','</a>','<a rel=\"noreferrer noopener\" target=\"_blank\" href=\"https://matomo.org/support-plans/?pk_campaign=App_ProfessionalServices&pk_medium=App_InstallationFinished&pk_source=Matomo_App\">')|raw }}
        </p>
        <p>
            {{ 'Installation_ProfessionalServicesfessionalDiscoverHow'|translate('<a rel=\"noreferrer noopener\" target=\"_blank\" href=\"https://matomo.org/matomo-cloud/?pk_campaign=App_ProfessionalServices&pk_medium=App_InstallationFinished&pk_source=Matomo_App\">','</a>')|raw }}
        </p>
    {% endif %}

    <h3>Performance Settings</h3>
    <p>{{ 'Installation_PerformanceSettingsDesc1'|translate('<a href=\"https://matomo.org/docs/setup-auto-archiving/\" rel=\"noreferrer noopener\" target=\"_blank\">', '</a>')|raw }}</p>
    <p>{{ 'Installation_PerformanceSettingsDesc2'|translate('<a href=\"https://matomo.org/docs/setup-auto-archiving/\" rel=\"noreferrer noopener\" target=\"_blank\">', '</a>')|raw }}</p>

    <h3>{{ 'Installation_DefaultSettings'|translate }}</h3>
    <p>{{ 'Installation_DefaultSettingsHelp'|translate }}</p>

    {% if errorMessage is defined %}
        <div class=\"alert alert-danger\">
            {{ 'General_Error'|translate }}:
            <br/>- {{ errorMessage|raw }}
        </div>
    {% endif %}

    <div class=\"installation-finished\">
        {% if form_data is defined %}
            {% include \"genericForm.twig\" %}
        {% endif %}
    </div>

{% endblock %}
", "@Installation/finished.twig", "/var/www/cse135.monster/public_html/matomo/plugins/Installation/templates/finished.twig");
    }
}
