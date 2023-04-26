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

/* @CoreAdminHome/generalSettings.twig */
class __TwigTemplate_f33d77eefe0c2ed9f772096b6e499d28 extends Template
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
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreAdminHome_MenuGeneralSettings"), "html", null, true);
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        $this->parent = $this->loadTemplate("admin.twig", "@CoreAdminHome/generalSettings.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
    ";
        // line 7
        $macros["piwik"] = $this->loadTemplate("macros.twig", "@CoreAdminHome/generalSettings.twig", 7)->unwrap();
        // line 8
        echo "    ";
        $macros["ajax"] = $this->loadTemplate("ajaxMacros.twig", "@CoreAdminHome/generalSettings.twig", 8)->unwrap();
        // line 9
        echo "
    ";
        // line 10
        echo twig_call_macro($macros["ajax"], "macro_errorDiv", [], 10, $context, $this->getSourceContext());
        echo "
    ";
        // line 11
        echo twig_call_macro($macros["ajax"], "macro_loadingDiv", [], 11, $context, $this->getSourceContext());
        echo "

    <div class=\"card generalSettingsTOCCard\">
        <div id=\"generalSettingsTOC\" class=\"card-action\">
            ";
        // line 15
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_GoTo2"), "html", null, true);
        echo ":
            ";
        // line 16
        if ((isset($context["isGeneralSettingsAdminEnabled"]) || array_key_exists("isGeneralSettingsAdminEnabled", $context) ? $context["isGeneralSettingsAdminEnabled"] : (function () { throw new RuntimeError('Variable "isGeneralSettingsAdminEnabled" does not exist.', 16, $this->source); })())) {
            // line 17
            echo "            <a href=\"#/archivingSettings\">";
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreAdminHome_ArchivingSettings"), "html", null, true);
            echo "</a>
                ";
            // line 18
            if ( !(isset($context["isMultiServerEnvironment"]) || array_key_exists("isMultiServerEnvironment", $context) ? $context["isMultiServerEnvironment"] : (function () { throw new RuntimeError('Variable "isMultiServerEnvironment" does not exist.', 18, $this->source); })())) {
                // line 19
                echo "                <a href=\"#/mailSettings\">";
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreAdminHome_EmailServerSettings"), "html", null, true);
                echo "</a>
                ";
            }
            // line 21
            echo "            ";
        }
        // line 22
        echo "            ";
        if ((isset($context["customLogoEnabled"]) || array_key_exists("customLogoEnabled", $context) ? $context["customLogoEnabled"] : (function () { throw new RuntimeError('Variable "customLogoEnabled" does not exist.', 22, $this->source); })())) {
            // line 23
            echo "            <a href=\"#/brandingSettings\">";
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreAdminHome_BrandingSettings"), "html", null, true);
            echo "</a>
            ";
        }
        // line 25
        echo "            ";
        if ((isset($context["isDataPurgeSettingsEnabled"]) || array_key_exists("isDataPurgeSettingsEnabled", $context) ? $context["isDataPurgeSettingsEnabled"] : (function () { throw new RuntimeError('Variable "isDataPurgeSettingsEnabled" does not exist.', 25, $this->source); })())) {
            // line 26
            echo "            <a href=\"#/deleteDataSettings\">";
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("PrivacyManager_DeleteDataSettings"), "html", null, true);
            echo "</a>
            ";
        }
        // line 28
        echo "            ";
        echo $this->env->getFunction('postEvent')->getCallable()("Template.endGeneralSettingsPageTableOfContents");
        echo "
        </div>
    </div>

";
        // line 32
        if ((isset($context["isGeneralSettingsAdminEnabled"]) || array_key_exists("isGeneralSettingsAdminEnabled", $context) ? $context["isGeneralSettingsAdminEnabled"] : (function () { throw new RuntimeError('Variable "isGeneralSettingsAdminEnabled" does not exist.', 32, $this->source); })())) {
            // line 33
            echo "    <div
        matomo-archiving-settings
        enable-browser-trigger-archiving=\"";
            // line 35
            echo \Piwik\piwik_escape_filter($this->env, json_encode(((isset($context["enableBrowserTriggerArchiving"]) || array_key_exists("enableBrowserTriggerArchiving", $context) ? $context["enableBrowserTriggerArchiving"] : (function () { throw new RuntimeError('Variable "enableBrowserTriggerArchiving" does not exist.', 35, $this->source); })()) == 1)), "html_attr");
            echo "\"
        show-segment-archive-trigger-info=\"";
            // line 36
            echo \Piwik\piwik_escape_filter($this->env, json_encode( ! !(isset($context["showSegmentArchiveTriggerInfo"]) || array_key_exists("showSegmentArchiveTriggerInfo", $context) ? $context["showSegmentArchiveTriggerInfo"] : (function () { throw new RuntimeError('Variable "showSegmentArchiveTriggerInfo" does not exist.', 36, $this->source); })())), "html_attr");
            echo "\"
        is-general-settings-admin-enabled=\"";
            // line 37
            echo \Piwik\piwik_escape_filter($this->env, json_encode( ! !(isset($context["isGeneralSettingsAdminEnabled"]) || array_key_exists("isGeneralSettingsAdminEnabled", $context) ? $context["isGeneralSettingsAdminEnabled"] : (function () { throw new RuntimeError('Variable "isGeneralSettingsAdminEnabled" does not exist.', 37, $this->source); })())), "html_attr");
            echo "\"
        show-warning-cron=\"";
            // line 38
            echo \Piwik\piwik_escape_filter($this->env, json_encode( ! !(isset($context["showWarningCron"]) || array_key_exists("showWarningCron", $context) ? $context["showWarningCron"] : (function () { throw new RuntimeError('Variable "showWarningCron" does not exist.', 38, $this->source); })())), "html_attr");
            echo "\"
        today-archive-time-to-live=\"";
            // line 39
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["todayArchiveTimeToLive"]) || array_key_exists("todayArchiveTimeToLive", $context) ? $context["todayArchiveTimeToLive"] : (function () { throw new RuntimeError('Variable "todayArchiveTimeToLive" does not exist.', 39, $this->source); })()), "html_attr");
            echo "\"
        today-archive-time-to-live-default=\"";
            // line 40
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["todayArchiveTimeToLiveDefault"]) || array_key_exists("todayArchiveTimeToLiveDefault", $context) ? $context["todayArchiveTimeToLiveDefault"] : (function () { throw new RuntimeError('Variable "todayArchiveTimeToLiveDefault" does not exist.', 40, $this->source); })()), "html_attr");
            echo "\"
    ></div>

    ";
            // line 43
            if ( !(isset($context["isMultiServerEnvironment"]) || array_key_exists("isMultiServerEnvironment", $context) ? $context["isMultiServerEnvironment"] : (function () { throw new RuntimeError('Variable "isMultiServerEnvironment" does not exist.', 43, $this->source); })())) {
                // line 44
                echo "        <div
            matomo-smtp-settings
            mail=\"";
                // line 46
                echo \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["mail"]) || array_key_exists("mail", $context) ? $context["mail"] : (function () { throw new RuntimeError('Variable "mail" does not exist.', 46, $this->source); })())), "html_attr");
                echo "\"
            mail-types=\"";
                // line 47
                echo \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["mailTypes"]) || array_key_exists("mailTypes", $context) ? $context["mailTypes"] : (function () { throw new RuntimeError('Variable "mailTypes" does not exist.', 47, $this->source); })())), "html_attr");
                echo "\"
            mail-encryptions=\"";
                // line 48
                echo \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["mailEncryptions"]) || array_key_exists("mailEncryptions", $context) ? $context["mailEncryptions"] : (function () { throw new RuntimeError('Variable "mailEncryptions" does not exist.', 48, $this->source); })())), "html_attr");
                echo "\"
        ></div>
    ";
            }
        }
        // line 52
        echo "
";
        // line 53
        if ((isset($context["customLogoEnabled"]) || array_key_exists("customLogoEnabled", $context) ? $context["customLogoEnabled"] : (function () { throw new RuntimeError('Variable "customLogoEnabled" does not exist.', 53, $this->source); })())) {
            // line 54
            echo "<div
    matomo-branding-settings
    file-upload-enabled=\"";
            // line 56
            echo \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["fileUploadEnabled"]) || array_key_exists("fileUploadEnabled", $context) ? $context["fileUploadEnabled"] : (function () { throw new RuntimeError('Variable "fileUploadEnabled" does not exist.', 56, $this->source); })())), "html_attr");
            echo "\"
    logos-writeable=\"";
            // line 57
            echo \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["logosWriteable"]) || array_key_exists("logosWriteable", $context) ? $context["logosWriteable"] : (function () { throw new RuntimeError('Variable "logosWriteable" does not exist.', 57, $this->source); })())), "html_attr");
            echo "\"
    use-custom-logo=\"";
            // line 58
            echo \Piwik\piwik_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, (isset($context["branding"]) || array_key_exists("branding", $context) ? $context["branding"] : (function () { throw new RuntimeError('Variable "branding" does not exist.', 58, $this->source); })()), "use_custom_logo", [], "any", false, false, false, 58)), "html_attr");
            echo "\"
    path-user-logo-directory=\"";
            // line 59
            echo \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["pathUserLogoDirectory"]) || array_key_exists("pathUserLogoDirectory", $context) ? $context["pathUserLogoDirectory"] : (function () { throw new RuntimeError('Variable "pathUserLogoDirectory" does not exist.', 59, $this->source); })())), "html_attr");
            echo "\"
    path-user-logo=\"";
            // line 60
            echo \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["pathUserLogo"]) || array_key_exists("pathUserLogo", $context) ? $context["pathUserLogo"] : (function () { throw new RuntimeError('Variable "pathUserLogo" does not exist.', 60, $this->source); })())), "html_attr");
            echo "\"
    path-user-logo-small=\"";
            // line 61
            echo \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["pathUserLogoSmall"]) || array_key_exists("pathUserLogoSmall", $context) ? $context["pathUserLogoSmall"] : (function () { throw new RuntimeError('Variable "pathUserLogoSmall" does not exist.', 61, $this->source); })())), "html_attr");
            echo "\"
    path-user-logo-svg=\"";
            // line 62
            echo \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["pathUserLogoSVG"]) || array_key_exists("pathUserLogoSVG", $context) ? $context["pathUserLogoSVG"] : (function () { throw new RuntimeError('Variable "pathUserLogoSVG" does not exist.', 62, $this->source); })())), "html_attr");
            echo "\"
    has-user-logo=\"";
            // line 63
            echo \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["hasUserLogo"]) || array_key_exists("hasUserLogo", $context) ? $context["hasUserLogo"] : (function () { throw new RuntimeError('Variable "hasUserLogo" does not exist.', 63, $this->source); })())), "html_attr");
            echo "\"
    path-user-favicon=\"";
            // line 64
            echo \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["pathUserFavicon"]) || array_key_exists("pathUserFavicon", $context) ? $context["pathUserFavicon"] : (function () { throw new RuntimeError('Variable "pathUserFavicon" does not exist.', 64, $this->source); })())), "html_attr");
            echo "\"
    has-user-favicon=\"";
            // line 65
            echo \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["hasUserFavicon"]) || array_key_exists("hasUserFavicon", $context) ? $context["hasUserFavicon"] : (function () { throw new RuntimeError('Variable "hasUserFavicon" does not exist.', 65, $this->source); })())), "html_attr");
            echo "\"
    is-plugins-admin-enabled=\"";
            // line 66
            echo \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["isPluginsAdminEnabled"]) || array_key_exists("isPluginsAdminEnabled", $context) ? $context["isPluginsAdminEnabled"] : (function () { throw new RuntimeError('Variable "isPluginsAdminEnabled" does not exist.', 66, $this->source); })())), "html_attr");
            echo "\"
></div>
";
        }
        // line 69
        echo "
";
        // line 70
        if ((isset($context["isDataPurgeSettingsEnabled"]) || array_key_exists("isDataPurgeSettingsEnabled", $context) ? $context["isDataPurgeSettingsEnabled"] : (function () { throw new RuntimeError('Variable "isDataPurgeSettingsEnabled" does not exist.', 70, $this->source); })())) {
            // line 71
            echo "    <div piwik-content-block content-title=\"";
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("PrivacyManager_DeleteDataSettings"), "html_attr");
            echo "\"
         anchor=\"deleteDataSettings\">
        <p>";
            // line 73
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("PrivacyManager_DeleteDataDescription"), "html", null, true);
            echo "</p>
        <p>
            <a href='";
            // line 75
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFunction('linkTo')->getCallable()(["module" => "PrivacyManager", "action" => "privacySettings"]), "html", null, true);
            echo "#deleteLogsAnchor'>
                ";
            // line 76
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("PrivacyManager_ClickHereSettings", (("'" . $this->env->getFilter('translate')->getCallable()("PrivacyManager_DeleteDataSettings")) . "'")), "html", null, true);
            echo "
            </a>
        </p>
    </div>
";
        }
        // line 81
        echo "
<div piwik-plugin-settings mode=\"admin\"></div>

";
    }

    public function getTemplateName()
    {
        return "@CoreAdminHome/generalSettings.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  261 => 81,  253 => 76,  249 => 75,  244 => 73,  238 => 71,  236 => 70,  233 => 69,  227 => 66,  223 => 65,  219 => 64,  215 => 63,  211 => 62,  207 => 61,  203 => 60,  199 => 59,  195 => 58,  191 => 57,  187 => 56,  183 => 54,  181 => 53,  178 => 52,  171 => 48,  167 => 47,  163 => 46,  159 => 44,  157 => 43,  151 => 40,  147 => 39,  143 => 38,  139 => 37,  135 => 36,  131 => 35,  127 => 33,  125 => 32,  117 => 28,  111 => 26,  108 => 25,  102 => 23,  99 => 22,  96 => 21,  90 => 19,  88 => 18,  83 => 17,  81 => 16,  77 => 15,  70 => 11,  66 => 10,  63 => 9,  60 => 8,  58 => 7,  55 => 6,  51 => 5,  46 => 1,  42 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin.twig' %}

{% set title %}{{ 'CoreAdminHome_MenuGeneralSettings'|translate }}{% endset %}

{% block content %}

    {% import 'macros.twig' as piwik %}
    {% import 'ajaxMacros.twig' as ajax %}

    {{ ajax.errorDiv() }}
    {{ ajax.loadingDiv() }}

    <div class=\"card generalSettingsTOCCard\">
        <div id=\"generalSettingsTOC\" class=\"card-action\">
            {{ 'General_GoTo2'|translate }}:
            {% if isGeneralSettingsAdminEnabled %}
            <a href=\"#/archivingSettings\">{{ 'CoreAdminHome_ArchivingSettings'|translate  }}</a>
                {% if not isMultiServerEnvironment %}
                <a href=\"#/mailSettings\">{{ 'CoreAdminHome_EmailServerSettings'|translate }}</a>
                {% endif %}
            {% endif %}
            {% if customLogoEnabled %}
            <a href=\"#/brandingSettings\">{{ 'CoreAdminHome_BrandingSettings'|translate }}</a>
            {% endif %}
            {% if isDataPurgeSettingsEnabled %}
            <a href=\"#/deleteDataSettings\">{{ 'PrivacyManager_DeleteDataSettings'|translate }}</a>
            {% endif %}
            {{ postEvent('Template.endGeneralSettingsPageTableOfContents') }}
        </div>
    </div>

{% if isGeneralSettingsAdminEnabled %}
    <div
        matomo-archiving-settings
        enable-browser-trigger-archiving=\"{{ (enableBrowserTriggerArchiving==1)|json_encode|e('html_attr') }}\"
        show-segment-archive-trigger-info=\"{{ (not not showSegmentArchiveTriggerInfo)|json_encode|e('html_attr') }}\"
        is-general-settings-admin-enabled=\"{{ (not not isGeneralSettingsAdminEnabled)|json_encode|e('html_attr') }}\"
        show-warning-cron=\"{{ (not not showWarningCron)|json_encode|e('html_attr') }}\"
        today-archive-time-to-live=\"{{ todayArchiveTimeToLive|e('html_attr') }}\"
        today-archive-time-to-live-default=\"{{ todayArchiveTimeToLiveDefault|e('html_attr') }}\"
    ></div>

    {% if not isMultiServerEnvironment %}
        <div
            matomo-smtp-settings
            mail=\"{{ mail|json_encode|e('html_attr') }}\"
            mail-types=\"{{ mailTypes|json_encode|e('html_attr') }}\"
            mail-encryptions=\"{{ mailEncryptions|json_encode|e('html_attr') }}\"
        ></div>
    {% endif %}
{% endif %}

{% if customLogoEnabled %}
<div
    matomo-branding-settings
    file-upload-enabled=\"{{ fileUploadEnabled|json_encode|e('html_attr') }}\"
    logos-writeable=\"{{ logosWriteable|json_encode|e('html_attr') }}\"
    use-custom-logo=\"{{ branding.use_custom_logo|json_encode|e('html_attr') }}\"
    path-user-logo-directory=\"{{ pathUserLogoDirectory|json_encode|e('html_attr') }}\"
    path-user-logo=\"{{ pathUserLogo|json_encode|e('html_attr') }}\"
    path-user-logo-small=\"{{ pathUserLogoSmall|json_encode|e('html_attr') }}\"
    path-user-logo-svg=\"{{ pathUserLogoSVG|json_encode|e('html_attr') }}\"
    has-user-logo=\"{{ hasUserLogo|json_encode|e('html_attr') }}\"
    path-user-favicon=\"{{ pathUserFavicon|json_encode|e('html_attr') }}\"
    has-user-favicon=\"{{ hasUserFavicon|json_encode|e('html_attr') }}\"
    is-plugins-admin-enabled=\"{{ isPluginsAdminEnabled|json_encode|e('html_attr') }}\"
></div>
{% endif %}

{% if isDataPurgeSettingsEnabled %}
    <div piwik-content-block content-title=\"{{ 'PrivacyManager_DeleteDataSettings'|translate|e('html_attr') }}\"
         anchor=\"deleteDataSettings\">
        <p>{{ 'PrivacyManager_DeleteDataDescription'|translate }}</p>
        <p>
            <a href='{{ linkTo({'module':\"PrivacyManager\", 'action':\"privacySettings\"}) }}#deleteLogsAnchor'>
                {{ 'PrivacyManager_ClickHereSettings'|translate(\"'\" ~ 'PrivacyManager_DeleteDataSettings'|translate ~ \"'\") }}
            </a>
        </p>
    </div>
{% endif %}

<div piwik-plugin-settings mode=\"admin\"></div>

{% endblock %}
", "@CoreAdminHome/generalSettings.twig", "/var/www/cse135.monster/public_html/matomo/plugins/CoreAdminHome/templates/generalSettings.twig");
    }
}
