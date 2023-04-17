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

/* @SitesManager/_trackingCodeEmail.twig */
class __TwigTemplate_04f1afd3b59b01cb4ddf0f08be3d569c extends Template
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
        // line 1
        if ((isset($context["showMatomoLinks"]) || array_key_exists("showMatomoLinks", $context) ? $context["showMatomoLinks"] : (function () { throw new RuntimeError('Variable "showMatomoLinks" does not exist.', 1, $this->source); })())) {
            echo "** ";
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_JsTrackingTag"), "html", null, true);
        }
        // line 2
        echo "
";
        // line 3
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreAdminHome_JSTracking_CodeNoteBeforeClosingHeadEmail", "'head'"), "html", null, true);
        echo "

";
        // line 5
        if ((isset($context["consentManagerName"]) || array_key_exists("consentManagerName", $context) ? $context["consentManagerName"] : (function () { throw new RuntimeError('Variable "consentManagerName" does not exist.', 5, $this->source); })())) {
            // line 6
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreAdminHome_JSTracking_ConsentManagerDetected", (isset($context["consentManagerName"]) || array_key_exists("consentManagerName", $context) ? $context["consentManagerName"] : (function () { throw new RuntimeError('Variable "consentManagerName" does not exist.', 6, $this->source); })()), (isset($context["consentManagerUrl"]) || array_key_exists("consentManagerUrl", $context) ? $context["consentManagerUrl"] : (function () { throw new RuntimeError('Variable "consentManagerUrl" does not exist.', 6, $this->source); })())), "html", null, true);
            echo "
";
            // line 7
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreAdminHome_JSTracking_ConsentManagerEmailNote"), "html", null, true);
            echo "
";
        }
        // line 9
        echo "
";
        // line 10
        if ((isset($context["ga3Used"]) || array_key_exists("ga3Used", $context) ? $context["ga3Used"] : (function () { throw new RuntimeError('Variable "ga3Used" does not exist.', 10, $this->source); })())) {
            // line 11
            echo $this->env->getFilter('translate')->getCallable()("SitesManager_GADetectedEmail", "Google Analytics 3", "GA", "https://matomo.org/faq/how-to/migrate-from-google-analytics-3-to-matomo/");
            echo "
";
            // line 12
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreAdminHome_JSTracking_ConsentManagerEmailNote"), "html", null, true);
            echo "
";
        }
        // line 14
        echo "
";
        // line 15
        if ((isset($context["ga4Used"]) || array_key_exists("ga4Used", $context) ? $context["ga4Used"] : (function () { throw new RuntimeError('Variable "ga4Used" does not exist.', 15, $this->source); })())) {
            // line 16
            echo $this->env->getFilter('translate')->getCallable()("SitesManager_GA4DetectedEmail", "Google Analytics 4", "GA", "https://matomo.org/faq/how-to/migrate-from-google-analytics-4-to-matomo/");
            echo "
";
            // line 17
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreAdminHome_JSTracking_ConsentManagerEmailNote"), "html", null, true);
            echo "
";
        }
        // line 19
        echo "
";
        // line 20
        if ((isset($context["gtmUsed"]) || array_key_exists("gtmUsed", $context) ? $context["gtmUsed"] : (function () { throw new RuntimeError('Variable "gtmUsed" does not exist.', 20, $this->source); })())) {
            // line 21
            echo $this->env->getFilter('translate')->getCallable()("SitesManager_GTMDetectedEmail", "Google Tag Manager", "GTM", "https://matomo.org/faq/tag-manager/migrating-from-google-tag-manager/");
            echo "
";
            // line 22
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreAdminHome_JSTracking_ConsentManagerEmailNote"), "html", null, true);
            echo "
";
        }
        // line 24
        echo "
";
        // line 25
        echo (isset($context["jsTag"]) || array_key_exists("jsTag", $context) ? $context["jsTag"] : (function () { throw new RuntimeError('Variable "jsTag" does not exist.', 25, $this->source); })());
        echo "

";
        // line 27
        if ((isset($context["showMatomoLinks"]) || array_key_exists("showMatomoLinks", $context) ? $context["showMatomoLinks"] : (function () { throw new RuntimeError('Variable "showMatomoLinks" does not exist.', 27, $this->source); })())) {
            echo $this->env->getFilter('translate')->getCallable()("SitesManager_EmailInstructionsDocsPlainText", "https://developer.matomo.org/guides/tracking-javascript-guide");
        }
        // line 28
        echo "
";
        // line 29
        echo $this->env->getFilter('translate')->getCallable()("SitesManager_EmailInstructionsGenerateTrackingCode", ((isset($context["piwikUrl"]) || array_key_exists("piwikUrl", $context) ? $context["piwikUrl"] : (function () { throw new RuntimeError('Variable "piwikUrl" does not exist.', 29, $this->source); })()) . $this->env->getFunction('linkTo')->getCallable()(["module" => "CoreAdminHome", "action" => "trackingCodeGenerator"])));
        echo "

";
        // line 31
        if ((isset($context["showMatomoLinks"]) || array_key_exists("showMatomoLinks", $context) ? $context["showMatomoLinks"] : (function () { throw new RuntimeError('Variable "showMatomoLinks" does not exist.', 31, $this->source); })())) {
            // line 32
            echo "** ";
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_InstallationGuides"), "html", null, true);
            echo "
WordPress: https://matomo.org/faq/new-to-piwik/how-do-i-install-the-matomo-tracking-code-on-wordpress/
Squarespace: https://matomo.org/faq/new-to-piwik/how-do-i-integrate-matomo-with-squarespace-website/
Wix: https://matomo.org/faq/new-to-piwik/how-do-i-install-the-matomo-analytics-tracking-code-on-wix/
SharePoint: https://matomo.org/faq/how-to-install/faq_19424/
Joomla: https://matomo.org/faq/new-to-piwik/how-do-i-install-the-matomo-analytics-tracking-code-on-joomla/
Shopify: https://matomo.org/faq/new-to-piwik/how-do-i-install-the-matomo-tracking-code-on-my-shopify-store/
Google Tag Manager: https://matomo.org/faq/new-to-piwik/how-do-i-use-matomo-analytics-within-gtm-google-tag-manager/

** ";
            // line 41
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_Integrations"), "html", null, true);
            echo "
";
            // line 42
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreAdminHome_JSTrackingIntro3a", "", ""), "html", null, true);
            echo "
https://matomo.org/integrate/

** ";
            // line 45
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_LogAnalytics"), "html", null, true);
            echo "
";
            // line 46
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_LogAnalyticsDescription", "", ""), "html", null, true);
            echo "
https://matomo.org/log-analytics/

** ";
            // line 49
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_MobileAppsAndSDKs"), "html", null, true);
            echo "
";
            // line 50
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_MobileAppsAndSDKsDescription", "", ""), "html", null, true);
            echo "
https://matomo.org/integrate/#programming-language-platforms-and-frameworks

** ";
            // line 53
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreAdminHome_HttpTrackingApi"), "html", null, true);
            echo "
";
            // line 54
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreAdminHome_HttpTrackingApiDescription", "", ""), "html", null, true);
            echo "
https://developer.matomo.org/api-reference/tracking-api

** ";
            // line 57
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataSinglePageApplication"), "html", null, true);
            echo "
";
            // line 58
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreAdminHome_SinglePageApplicationDescription", "", ""), "html", null, true);
            echo "
https://developer.matomo.org/guides/spa-tracking

** ";
            // line 61
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_EmailInstructionsSiteDetailsHeading"), "html", null, true);
            echo "
";
            // line 62
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_EmailInstructionsSiteDetails"), "html", null, true);
            echo "
* ";
            // line 63
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_EmailInstructionsYourSiteId", (isset($context["idSite"]) || array_key_exists("idSite", $context) ? $context["idSite"] : (function () { throw new RuntimeError('Variable "idSite" does not exist.', 63, $this->source); })())), "html", null, true);
            echo "
* ";
            // line 64
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_EmailInstructionsYourTrackingUrl", (isset($context["trackingUrl"]) || array_key_exists("trackingUrl", $context) ? $context["trackingUrl"] : (function () { throw new RuntimeError('Variable "trackingUrl" does not exist.', 64, $this->source); })())), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "@SitesManager/_trackingCodeEmail.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 64,  196 => 63,  192 => 62,  188 => 61,  182 => 58,  178 => 57,  172 => 54,  168 => 53,  162 => 50,  158 => 49,  152 => 46,  148 => 45,  142 => 42,  138 => 41,  125 => 32,  123 => 31,  118 => 29,  115 => 28,  111 => 27,  106 => 25,  103 => 24,  98 => 22,  94 => 21,  92 => 20,  89 => 19,  84 => 17,  80 => 16,  78 => 15,  75 => 14,  70 => 12,  66 => 11,  64 => 10,  61 => 9,  56 => 7,  52 => 6,  50 => 5,  45 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if showMatomoLinks %}** {{ 'General_JsTrackingTag'|translate }}{% endif %}

{{ 'CoreAdminHome_JSTracking_CodeNoteBeforeClosingHeadEmail'|translate(\"'head'\") }}

{% if consentManagerName %}
{{ 'CoreAdminHome_JSTracking_ConsentManagerDetected'|translate(consentManagerName, consentManagerUrl) }}
{{ 'CoreAdminHome_JSTracking_ConsentManagerEmailNote'|translate }}
{% endif %}

{% if ga3Used %}
{{ 'SitesManager_GADetectedEmail'|translate('Google Analytics 3', 'GA', 'https://matomo.org/faq/how-to/migrate-from-google-analytics-3-to-matomo/')|raw }}
{{ 'CoreAdminHome_JSTracking_ConsentManagerEmailNote'|translate }}
{% endif %}

{% if ga4Used %}
{{ 'SitesManager_GA4DetectedEmail'|translate('Google Analytics 4', 'GA', 'https://matomo.org/faq/how-to/migrate-from-google-analytics-4-to-matomo/')|raw }}
{{ 'CoreAdminHome_JSTracking_ConsentManagerEmailNote'|translate }}
{% endif %}

{% if gtmUsed %}
{{ 'SitesManager_GTMDetectedEmail'|translate('Google Tag Manager', 'GTM', 'https://matomo.org/faq/tag-manager/migrating-from-google-tag-manager/')|raw }}
{{ 'CoreAdminHome_JSTracking_ConsentManagerEmailNote'|translate }}
{% endif %}

{{ jsTag|raw }}

{% if showMatomoLinks %}{{ 'SitesManager_EmailInstructionsDocsPlainText'|translate('https://developer.matomo.org/guides/tracking-javascript-guide')|raw }}{% endif %}

{{ 'SitesManager_EmailInstructionsGenerateTrackingCode'|translate(piwikUrl ~ linkTo({'module': 'CoreAdminHome', 'action': 'trackingCodeGenerator'}))|raw }}

{% if showMatomoLinks %}
** {{ 'SitesManager_InstallationGuides'|translate }}
WordPress: https://matomo.org/faq/new-to-piwik/how-do-i-install-the-matomo-tracking-code-on-wordpress/
Squarespace: https://matomo.org/faq/new-to-piwik/how-do-i-integrate-matomo-with-squarespace-website/
Wix: https://matomo.org/faq/new-to-piwik/how-do-i-install-the-matomo-analytics-tracking-code-on-wix/
SharePoint: https://matomo.org/faq/how-to-install/faq_19424/
Joomla: https://matomo.org/faq/new-to-piwik/how-do-i-install-the-matomo-analytics-tracking-code-on-joomla/
Shopify: https://matomo.org/faq/new-to-piwik/how-do-i-install-the-matomo-tracking-code-on-my-shopify-store/
Google Tag Manager: https://matomo.org/faq/new-to-piwik/how-do-i-use-matomo-analytics-within-gtm-google-tag-manager/

** {{ 'SitesManager_Integrations'|translate }}
{{ 'CoreAdminHome_JSTrackingIntro3a'|translate('', '') }}
https://matomo.org/integrate/

** {{ 'SitesManager_LogAnalytics'|translate }}
{{ 'SitesManager_LogAnalyticsDescription'|translate('', '') }}
https://matomo.org/log-analytics/

** {{ 'SitesManager_MobileAppsAndSDKs'|translate }}
{{ 'SitesManager_MobileAppsAndSDKsDescription'|translate('', '') }}
https://matomo.org/integrate/#programming-language-platforms-and-frameworks

** {{ 'CoreAdminHome_HttpTrackingApi'|translate }}
{{ 'CoreAdminHome_HttpTrackingApiDescription'|translate('', '') }}
https://developer.matomo.org/api-reference/tracking-api

** {{ 'SitesManager_SiteWithoutDataSinglePageApplication'|translate }}
{{ 'CoreAdminHome_SinglePageApplicationDescription'|translate('', '') }}
https://developer.matomo.org/guides/spa-tracking

** {{ 'SitesManager_EmailInstructionsSiteDetailsHeading'|translate }}
{{ 'SitesManager_EmailInstructionsSiteDetails'|translate }}
* {{ 'SitesManager_EmailInstructionsYourSiteId'|translate(idSite) }}
* {{ 'SitesManager_EmailInstructionsYourTrackingUrl'|translate(trackingUrl) }}
{% endif %}
", "@SitesManager/_trackingCodeEmail.twig", "/var/www/cse135.monster/public_html/matomo/plugins/SitesManager/templates/_trackingCodeEmail.twig");
    }
}
