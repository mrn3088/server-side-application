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

/* @UsersManager/userSettings.twig */
class __TwigTemplate_f10d665a36f5a41d5cece59f7b2c7e96 extends Template
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
        return "admin.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        ob_start();
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("UsersManager_PersonalSettings"), "html", null, true);
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        $this->parent = $this->loadTemplate("admin.twig", "@UsersManager/userSettings.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<div
    matomo-personal-settings
    is-users-admin-enabled=\"";
        // line 8
        echo \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["isUsersAdminEnabled"]) || array_key_exists("isUsersAdminEnabled", $context) ? $context["isUsersAdminEnabled"] : (function () { throw new RuntimeError('Variable "isUsersAdminEnabled" does not exist.', 8, $this->source); })())), "html_attr");
        echo "\"
    title=\"";
        // line 9
        echo \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 9, $this->source); })())), "html_attr");
        echo "\"
    user-login=\"";
        // line 10
        echo \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["userLogin"]) || array_key_exists("userLogin", $context) ? $context["userLogin"] : (function () { throw new RuntimeError('Variable "userLogin" does not exist.', 10, $this->source); })())), "html_attr");
        echo "\"
    user-email=\"";
        // line 11
        echo \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["userEmail"]) || array_key_exists("userEmail", $context) ? $context["userEmail"] : (function () { throw new RuntimeError('Variable "userEmail" does not exist.', 11, $this->source); })())), "html_attr");
        echo "\"
    current-language-code=\"";
        // line 12
        echo \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["currentLanguageCode"]) || array_key_exists("currentLanguageCode", $context) ? $context["currentLanguageCode"] : (function () { throw new RuntimeError('Variable "currentLanguageCode" does not exist.', 12, $this->source); })())), "html_attr");
        echo "\"
    language-options=\"";
        // line 13
        echo \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["languageOptions"]) || array_key_exists("languageOptions", $context) ? $context["languageOptions"] : (function () { throw new RuntimeError('Variable "languageOptions" does not exist.', 13, $this->source); })())), "html_attr");
        echo "\"
    current-timeformat=\"";
        // line 14
        echo \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["currentTimeformat"]) || array_key_exists("currentTimeformat", $context) ? $context["currentTimeformat"] : (function () { throw new RuntimeError('Variable "currentTimeformat" does not exist.', 14, $this->source); })())), "html_attr");
        echo "\"
    time-formats=\"";
        // line 15
        echo \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["timeFormats"]) || array_key_exists("timeFormats", $context) ? $context["timeFormats"] : (function () { throw new RuntimeError('Variable "timeFormats" does not exist.', 15, $this->source); })())), "html_attr");
        echo "\"
    default-report=\"";
        // line 16
        echo \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["defaultReport"]) || array_key_exists("defaultReport", $context) ? $context["defaultReport"] : (function () { throw new RuntimeError('Variable "defaultReport" does not exist.', 16, $this->source); })())), "html_attr");
        echo "\"
    default-report-options=\"";
        // line 17
        echo \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["defaultReportOptions"]) || array_key_exists("defaultReportOptions", $context) ? $context["defaultReportOptions"] : (function () { throw new RuntimeError('Variable "defaultReportOptions" does not exist.', 17, $this->source); })())), "html_attr");
        echo "\"
    default-report-id-site=\"";
        // line 18
        echo \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["defaultReportIdSite"]) || array_key_exists("defaultReportIdSite", $context) ? $context["defaultReportIdSite"] : (function () { throw new RuntimeError('Variable "defaultReportIdSite" does not exist.', 18, $this->source); })())), "html_attr");
        echo "\"
    default-report-site-name=\"";
        // line 19
        echo \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["defaultReportSiteName"]) || array_key_exists("defaultReportSiteName", $context) ? $context["defaultReportSiteName"] : (function () { throw new RuntimeError('Variable "defaultReportSiteName" does not exist.', 19, $this->source); })())), "html_attr");
        echo "\"
    default-date=\"";
        // line 20
        echo \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["defaultDate"]) || array_key_exists("defaultDate", $context) ? $context["defaultDate"] : (function () { throw new RuntimeError('Variable "defaultDate" does not exist.', 20, $this->source); })())), "html_attr");
        echo "\"
    available-default-dates=\"";
        // line 21
        echo \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["availableDefaultDates"]) || array_key_exists("availableDefaultDates", $context) ? $context["availableDefaultDates"] : (function () { throw new RuntimeError('Variable "availableDefaultDates" does not exist.', 21, $this->source); })())), "html_attr");
        echo "\"
></div>

";
        // line 24
        if ((isset($context["showNewsletterSignup"]) || array_key_exists("showNewsletterSignup", $context) ? $context["showNewsletterSignup"] : (function () { throw new RuntimeError('Variable "showNewsletterSignup" does not exist.', 24, $this->source); })())) {
            // line 25
            echo "    <div matomo-newsletter-settings></div>
";
        }
        // line 27
        echo "
<div piwik-plugin-settings mode=\"user\"></div>

<div piwik-content-block
     content-title=\"";
        // line 31
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("UsersManager_ExcludeVisitsViaCookie"), "html_attr");
        echo "\">
    <p>
        ";
        // line 33
        if ((isset($context["ignoreCookieSet"]) || array_key_exists("ignoreCookieSet", $context) ? $context["ignoreCookieSet"] : (function () { throw new RuntimeError('Variable "ignoreCookieSet" does not exist.', 33, $this->source); })())) {
            // line 34
            echo "            ";
            echo $this->env->getFilter('translate')->getCallable()("UsersManager_YourVisitsAreIgnoredOnDomain", "<strong>", (isset($context["piwikHost"]) || array_key_exists("piwikHost", $context) ? $context["piwikHost"] : (function () { throw new RuntimeError('Variable "piwikHost" does not exist.', 34, $this->source); })()), "</strong>");
            echo "
        ";
        } else {
            // line 36
            echo "            ";
            echo $this->env->getFilter('translate')->getCallable()("UsersManager_YourVisitsAreNotIgnored", "<strong>", "</strong>");
            echo "
        ";
        }
        // line 38
        echo "    </p>
    <span style=\"margin-left:20px;\">
    <a href='";
        // line 40
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFunction('linkTo')->getCallable()(["ignoreSalt" => (isset($context["ignoreSalt"]) || array_key_exists("ignoreSalt", $context) ? $context["ignoreSalt"] : (function () { throw new RuntimeError('Variable "ignoreSalt" does not exist.', 40, $this->source); })()), "module" => "UsersManager", "action" => "setIgnoreCookie"]), "html", null, true);
        echo "#excludeCookie'>&rsaquo; ";
        if ((isset($context["ignoreCookieSet"]) || array_key_exists("ignoreCookieSet", $context) ? $context["ignoreCookieSet"] : (function () { throw new RuntimeError('Variable "ignoreCookieSet" does not exist.', 40, $this->source); })())) {
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("UsersManager_ClickHereToDeleteTheCookie"), "html", null, true);
            echo "
        ";
        } else {
            // line 41
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("UsersManager_ClickHereToSetTheCookieOnDomain", (isset($context["piwikHost"]) || array_key_exists("piwikHost", $context) ? $context["piwikHost"] : (function () { throw new RuntimeError('Variable "piwikHost" does not exist.', 41, $this->source); })())), "html", null, true);
        }
        // line 42
        echo "        <br/>
    </a></span>
</div>

";
    }

    public function getTemplateName()
    {
        return "@UsersManager/userSettings.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 42,  160 => 41,  152 => 40,  148 => 38,  142 => 36,  136 => 34,  134 => 33,  129 => 31,  123 => 27,  119 => 25,  117 => 24,  111 => 21,  107 => 20,  103 => 19,  99 => 18,  95 => 17,  91 => 16,  87 => 15,  83 => 14,  79 => 13,  75 => 12,  71 => 11,  67 => 10,  63 => 9,  59 => 8,  55 => 6,  51 => 5,  46 => 1,  42 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin.twig' %}

{% set title %}{{ 'UsersManager_PersonalSettings'|translate }}{% endset %}

{% block content %}
<div
    matomo-personal-settings
    is-users-admin-enabled=\"{{ isUsersAdminEnabled|json_encode|e('html_attr') }}\"
    title=\"{{ title|json_encode|e('html_attr') }}\"
    user-login=\"{{ userLogin|json_encode|e('html_attr') }}\"
    user-email=\"{{ userEmail|json_encode|e('html_attr') }}\"
    current-language-code=\"{{ currentLanguageCode|json_encode|e('html_attr') }}\"
    language-options=\"{{ languageOptions|json_encode|e('html_attr') }}\"
    current-timeformat=\"{{ currentTimeformat|json_encode|e('html_attr') }}\"
    time-formats=\"{{ timeFormats|json_encode|e('html_attr') }}\"
    default-report=\"{{ defaultReport|json_encode|e('html_attr') }}\"
    default-report-options=\"{{ defaultReportOptions|json_encode|e('html_attr') }}\"
    default-report-id-site=\"{{ defaultReportIdSite|json_encode|e('html_attr') }}\"
    default-report-site-name=\"{{ defaultReportSiteName|json_encode|e('html_attr') }}\"
    default-date=\"{{ defaultDate|json_encode|e('html_attr') }}\"
    available-default-dates=\"{{ availableDefaultDates|json_encode|e('html_attr') }}\"
></div>

{% if showNewsletterSignup %}
    <div matomo-newsletter-settings></div>
{% endif %}

<div piwik-plugin-settings mode=\"user\"></div>

<div piwik-content-block
     content-title=\"{{ 'UsersManager_ExcludeVisitsViaCookie'|translate|e('html_attr') }}\">
    <p>
        {% if ignoreCookieSet %}
            {{ 'UsersManager_YourVisitsAreIgnoredOnDomain'|translate(\"<strong>\", piwikHost, \"</strong>\")|raw }}
        {% else %}
            {{ 'UsersManager_YourVisitsAreNotIgnored'|translate(\"<strong>\",\"</strong>\")|raw }}
        {% endif %}
    </p>
    <span style=\"margin-left:20px;\">
    <a href='{{ linkTo({'ignoreSalt':ignoreSalt, 'module': 'UsersManager', 'action':'setIgnoreCookie'}) }}#excludeCookie'>&rsaquo; {% if ignoreCookieSet %}{{ 'UsersManager_ClickHereToDeleteTheCookie'|translate }}
        {% else %}{{'UsersManager_ClickHereToSetTheCookieOnDomain'|translate(piwikHost) }}{% endif %}
        <br/>
    </a></span>
</div>

{% endblock %}
", "@UsersManager/userSettings.twig", "/var/www/cse135.monster/public_html/matomo/plugins/UsersManager/templates/userSettings.twig");
    }
}
