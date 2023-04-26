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

/* @SitesManager/_siteWithoutDataTabs.twig */
class __TwigTemplate_eb58af5db72d43fb288e823175c86efc extends Template
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
        echo "<script type=\"text/javascript\">
    \$(document).ready(function(){
        \$('.tabs').tabs();
    });
</script>

<div class=\"row\">
    <div class=\"col s12\">
        <ul class=\"tabs\">
            <li class=\"tab col s3\"><a ";
        // line 10
        if ((((isset($context["siteType"]) || array_key_exists("siteType", $context) ? $context["siteType"] : (function () { throw new RuntimeError('Variable "siteType" does not exist.', 10, $this->source); })()) != twig_constant("Piwik\\Plugins\\SitesManager\\SitesManager::SITE_TYPE_UNKNOWN")) && ((isset($context["consentManagerName"]) || array_key_exists("consentManagerName", $context) ? $context["consentManagerName"] : (function () { throw new RuntimeError('Variable "consentManagerName" does not exist.', 10, $this->source); })()) == false))) {
            echo " class=\"active\" ";
        }
        echo " href=\"#integrations\">";
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_Integrations"), "html", null, true);
        echo "</a></li>
            <li class=\"tab col s3\"><a ";
        // line 11
        if ((((isset($context["siteType"]) || array_key_exists("siteType", $context) ? $context["siteType"] : (function () { throw new RuntimeError('Variable "siteType" does not exist.', 11, $this->source); })()) == twig_constant("Piwik\\Plugins\\SitesManager\\SitesManager::SITE_TYPE_UNKNOWN")) || (isset($context["consentManagerName"]) || array_key_exists("consentManagerName", $context) ? $context["consentManagerName"] : (function () { throw new RuntimeError('Variable "consentManagerName" does not exist.', 11, $this->source); })()))) {
            echo " class=\"active\" ";
        }
        echo " href=\"#tracking-code\">";
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreAdminHome_TrackingCode"), "html", null, true);
        echo "</a></li>
            <li class=\"tab col s3\"><a href=\"#mtm\">";
        // line 12
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataMatomoTagManager"), "html", null, true);
        echo "</a></li>
            <li class=\"tab col s3\"><a href=\"#other\">";
        // line 13
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataOtherWays"), "html", null, true);
        echo "</a></li>
        </ul>
    </div>

    <div id=\"integrations\" class=\"col s12\">
        <h3>";
        // line 18
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_Integrations"), "html", null, true);
        echo "</h3>
        ";
        // line 19
        if ((isset($context["instruction"]) || array_key_exists("instruction", $context) ? $context["instruction"] : (function () { throw new RuntimeError('Variable "instruction" does not exist.', 19, $this->source); })())) {
            // line 20
            echo "            <p>";
            echo (isset($context["instruction"]) || array_key_exists("instruction", $context) ? $context["instruction"] : (function () { throw new RuntimeError('Variable "instruction" does not exist.', 20, $this->source); })());
            echo "</p>

            ";
            // line 22
            if ((isset($context["gtmUsed"]) || array_key_exists("gtmUsed", $context) ? $context["gtmUsed"] : (function () { throw new RuntimeError('Variable "gtmUsed" does not exist.', 22, $this->source); })())) {
                // line 23
                echo "                <p>";
                echo $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataDetectedGtm", twig_capitalize_string_filter($this->env, (isset($context["siteType"]) || array_key_exists("siteType", $context) ? $context["siteType"] : (function () { throw new RuntimeError('Variable "siteType" does not exist.', 23, $this->source); })())), "<a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://matomo.org/faq/new-to-piwik/how-do-i-use-matomo-analytics-within-gtm-google-tag-manager\">", "</a>");
                echo "</p>
            ";
            }
            // line 25
            echo "
            <p>";
            // line 26
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataOtherIntegrations"), "html", null, true);
            echo ": ";
            echo $this->env->getFilter('translate')->getCallable()("CoreAdminHome_JSTrackingIntro3a", "<a href=\"https://matomo.org/integrate/\" rel=\"noreferrer noopener\" target=\"_blank\">", "</a>");
            echo "</p>
        ";
        } else {
            // line 28
            echo "            <p>";
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_InstallationGuidesIntro"), "html", null, true);
            echo "

            <p>
                <a target=\"_blank\" rel=\"noreferrer noopener\" href='https://matomo.org/faq/new-to-piwik/how-do-i-install-the-matomo-tracking-code-on-wordpress/'>WordPress</a>
                | <a target=\"_blank\" rel=\"noreferrer noopener\" href='https://matomo.org/faq/new-to-piwik/how-do-i-integrate-matomo-with-squarespace-website/'>Squarespace</a>
                | <a target=\"_blank\" rel=\"noreferrer noopener\" href='https://matomo.org/faq/new-to-piwik/how-do-i-install-the-matomo-analytics-tracking-code-on-wix/'>Wix</a>
                | <a target=\"_blank\" rel=\"noreferrer noopener\" href='https://matomo.org/faq/how-to-install/faq_19424/'>SharePoint</a>
                | <a target=\"_blank\" rel=\"noreferrer noopener\" href='https://matomo.org/faq/new-to-piwik/how-do-i-install-the-matomo-analytics-tracking-code-on-joomla/'>Joomla</a>
                | <a target=\"_blank\" rel=\"noreferrer noopener\" href='https://matomo.org/faq/new-to-piwik/how-do-i-install-the-matomo-tracking-code-on-my-shopify-store/'>Shopify</a>
                | <a target=\"_blank\" rel=\"noreferrer noopener\" href='https://matomo.org/faq/new-to-piwik/how-do-i-use-matomo-analytics-within-gtm-google-tag-manager/'>Google Tag Manager</a>
            </p>

            <p>";
            // line 40
            echo $this->env->getFilter('translate')->getCallable()("CoreAdminHome_JSTrackingIntro3a", "<a href=\"https://matomo.org/integrate/\" rel=\"noreferrer noopener\" target=\"_blank\">", "</a>");
            echo "</p>
            <p>";
            // line 41
            echo $this->env->getFilter('translate')->getCallable()("CoreAdminHome_JSTrackingIntro3b");
            echo "</p>
            <br>
            <p>";
            // line 43
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_ExtraInformationNeeded"), "html", null, true);
            echo "</p>
            <p>Matomo URL: <code piwik-select-on-focus>";
            // line 44
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["piwikUrl"]) || array_key_exists("piwikUrl", $context) ? $context["piwikUrl"] : (function () { throw new RuntimeError('Variable "piwikUrl" does not exist.', 44, $this->source); })()), "html", null, true);
            echo "</code></p>
            <p>";
            // line 45
            echo $this->env->getFilter('translate')->getCallable()("SitesManager_EmailInstructionsYourSiteId", (("<code piwik-select-on-focus>" . (isset($context["idSite"]) || array_key_exists("idSite", $context) ? $context["idSite"] : (function () { throw new RuntimeError('Variable "idSite" does not exist.', 45, $this->source); })())) . "</code>"));
            echo "</p>
        ";
        }
        // line 47
        echo "    </div>

    <div id=\"tracking-code\" class=\"col s12\">

        ";
        // line 51
        if ((isset($context["consentManagerName"]) || array_key_exists("consentManagerName", $context) ? $context["consentManagerName"] : (function () { throw new RuntimeError('Variable "consentManagerName" does not exist.', 51, $this->source); })())) {
            // line 52
            echo "        <p></p><p></p>
        <div class=\"system notification notification-info\">
            <p> ";
            // line 54
            echo $this->env->getFilter('translate')->getCallable()("PrivacyManager_ConsentManagerDetected", (isset($context["consentManagerName"]) || array_key_exists("consentManagerName", $context) ? $context["consentManagerName"] : (function () { throw new RuntimeError('Variable "consentManagerName" does not exist.', 54, $this->source); })()), (("<a href=\"" . (isset($context["consentManagerUrl"]) || array_key_exists("consentManagerUrl", $context) ? $context["consentManagerUrl"] : (function () { throw new RuntimeError('Variable "consentManagerUrl" does not exist.', 54, $this->source); })())) . "\" target=\"_blank\" rel=\"noreferrer noopener\">"), "</a");
            echo "
            </p>
            ";
            // line 56
            if ((isset($context["consentManagerIsConnected"]) || array_key_exists("consentManagerIsConnected", $context) ? $context["consentManagerIsConnected"] : (function () { throw new RuntimeError('Variable "consentManagerIsConnected" does not exist.', 56, $this->source); })())) {
                // line 57
                echo "                <p> ";
                echo $this->env->getFilter('translate')->getCallable()("PrivacyManager_ConsentManagerConnected", (isset($context["consentManagerName"]) || array_key_exists("consentManagerName", $context) ? $context["consentManagerName"] : (function () { throw new RuntimeError('Variable "consentManagerName" does not exist.', 57, $this->source); })()));
                echo "
                </p>
            ";
            }
            // line 60
            echo "        </div>
        ";
        }
        // line 62
        echo "
        ";
        // line 63
        if ((isset($context["ga3Used"]) || array_key_exists("ga3Used", $context) ? $context["ga3Used"] : (function () { throw new RuntimeError('Variable "ga3Used" does not exist.', 63, $this->source); })())) {
            // line 64
            echo "        <p></p><p></p>
        <div class=\"system notification notification-info\">
             ";
            // line 66
            echo $this->env->getFilter('translate')->getCallable()("SitesManager_GADetected", "Google Analytics 3", "GA", "<a href=\"", "https://matomo.org/faq/how-to/migrate-from-google-analytics-3-to-matomo/", "\" target=\"_blank\" rel=\"noreferrer noopener\">", "</a>");
            echo "
        </div>
        ";
        }
        // line 69
        echo "
        ";
        // line 70
        if ((isset($context["ga4Used"]) || array_key_exists("ga4Used", $context) ? $context["ga4Used"] : (function () { throw new RuntimeError('Variable "ga4Used" does not exist.', 70, $this->source); })())) {
            // line 71
            echo "        <p></p><p></p>
        <div class=\"system notification notification-info\">
            ";
            // line 73
            echo $this->env->getFilter('translate')->getCallable()("SitesManager_GADetected", "Google Analytics 4", "GA", "<a href=\"", "https://matomo.org/faq/how-to/migrate-from-google-analytics-4-to-matomo/", "\" target=\"_blank\" rel=\"noreferrer noopener\">", "</a>");
            echo "
        </div>
        ";
        }
        // line 76
        echo "
        ";
        // line 77
        if ((isset($context["gtmUsed"]) || array_key_exists("gtmUsed", $context) ? $context["gtmUsed"] : (function () { throw new RuntimeError('Variable "gtmUsed" does not exist.', 77, $this->source); })())) {
            // line 78
            echo "        <p></p><p></p>
        <div class=\"system notification notification-info\">
            ";
            // line 80
            echo $this->env->getFilter('translate')->getCallable()("SitesManager_GADetected", "Google Tag Manager", "GTM", "<a href=\"", "https://matomo.org/faq/tag-manager/migrating-from-google-tag-manager/", "\" target=\"_blank\" rel=\"noreferrer noopener\">", "</a>");
            echo "
        </div>
        ";
        }
        // line 83
        echo "
        <h3>";
        // line 84
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreAdminHome_TrackingCode"), "html", null, true);
        echo "</h3>

        <p>";
        // line 86
        echo $this->env->getFilter('translate')->getCallable()("CoreAdminHome_JSTracking_CodeNoteBeforeClosingHead", "&lt;/head&gt;");
        echo "</p>

        <pre piwik-select-on-focus>";
        // line 88
        echo (isset($context["jsTag"]) || array_key_exists("jsTag", $context) ? $context["jsTag"] : (function () { throw new RuntimeError('Variable "jsTag" does not exist.', 88, $this->source); })());
        echo "</pre>

        <p>";
        // line 90
        echo $this->env->getFilter('translate')->getCallable()("CoreAdminHome_JSTrackingIntro5", "<a rel=\"noreferrer noopener\" target=\"_blank\" href=\"https://developer.matomo.org/guides/tracking-javascript-guide\">", "</a>");
        echo "</p>

        <p>";
        // line 92
        echo $this->env->getFilter('translate')->getCallable()("CoreAdminHome_JSTracking_EndNote", (("<a href=\"" . $this->env->getFunction('linkTo')->getCallable()(["module" => "CoreAdminHome", "action" => "trackingCodeGenerator"])) . "\">"), "</a>");
        echo "</p>
    </div>

    <div id=\"mtm\" class=\"col s12\">
        ";
        // line 96
        if ((isset($context["tagManagerActive"]) || array_key_exists("tagManagerActive", $context) ? $context["tagManagerActive"] : (function () { throw new RuntimeError('Variable "tagManagerActive" does not exist.', 96, $this->source); })())) {
            // line 97
            echo "            ";
            echo $this->env->getFunction('postEvent')->getCallable()("Template.endTrackingCodePage");
            echo "
        ";
        } else {
            // line 99
            echo "                <h3>";
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataMatomoTagManager"), "html", null, true);
            echo "</h3>
                <p>";
            // line 100
            echo $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataMatomoTagManagerNotActive", "<a href=\"https://matomo.org/docs/tag-manager/\" rel=\"noreferrer noopener\" target=\"_blank\">", "</a>");
            echo "</p>
        ";
        }
        // line 102
        echo "    </div>

    <div id=\"other\" class=\"col s12\">
        <h3>";
        // line 105
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_LogAnalytics"), "html", null, true);
        echo "</h3>
        <p>";
        // line 106
        echo $this->env->getFilter('translate')->getCallable()("SitesManager_LogAnalyticsDescription", "<a href=\"https://matomo.org/log-analytics/\" rel=\"noreferrer noopener\" target=\"_blank\">", "</a>");
        echo "</p>

        <h3>";
        // line 108
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_MobileAppsAndSDKs"), "html", null, true);
        echo "</h3>
        <p>";
        // line 109
        echo $this->env->getFilter('translate')->getCallable()("SitesManager_MobileAppsAndSDKsDescription", "<a href=\"https://matomo.org/integrate/#programming-language-platforms-and-frameworks\" rel=\"noreferrer noopener\" target=\"_blank\">", "</a>");
        echo "</p>

        <h3>";
        // line 111
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreAdminHome_HttpTrackingApi"), "html", null, true);
        echo "</h3>
        <p>";
        // line 112
        echo $this->env->getFilter('translate')->getCallable()("CoreAdminHome_HttpTrackingApiDescription", "<a href=\"https://developer.matomo.org/api-reference/tracking-api\" rel=\"noreferrer noopener\" target=\"_blank\">", "</a>");
        echo "</p>

        <h3>";
        // line 114
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataGoogleTagManager"), "html", null, true);
        echo "</h3>
        <p>";
        // line 115
        echo $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataGoogleTagManagerDescription", "<a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://matomo.org/faq/new-to-piwik/how-do-i-use-matomo-analytics-within-gtm-google-tag-manager\">", "</a>");
        echo "</p>

        <h3>";
        // line 117
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataSinglePageApplication"), "html", null, true);
        echo "</h3>
        <p>";
        // line 118
        echo $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataSinglePageApplicationDescription", "<a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://developer.matomo.org/guides/spa-tracking\">", "</a>");
        echo "</p>

        ";
        // line 120
        if (array_key_exists("googleAnalyticsImporterMessage", $context)) {
            // line 121
            echo "            ";
            echo (isset($context["googleAnalyticsImporterMessage"]) || array_key_exists("googleAnalyticsImporterMessage", $context) ? $context["googleAnalyticsImporterMessage"] : (function () { throw new RuntimeError('Variable "googleAnalyticsImporterMessage" does not exist.', 121, $this->source); })());
            echo "
        ";
        }
        // line 123
        echo "    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@SitesManager/_siteWithoutDataTabs.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  325 => 123,  319 => 121,  317 => 120,  312 => 118,  308 => 117,  303 => 115,  299 => 114,  294 => 112,  290 => 111,  285 => 109,  281 => 108,  276 => 106,  272 => 105,  267 => 102,  262 => 100,  257 => 99,  251 => 97,  249 => 96,  242 => 92,  237 => 90,  232 => 88,  227 => 86,  222 => 84,  219 => 83,  213 => 80,  209 => 78,  207 => 77,  204 => 76,  198 => 73,  194 => 71,  192 => 70,  189 => 69,  183 => 66,  179 => 64,  177 => 63,  174 => 62,  170 => 60,  163 => 57,  161 => 56,  156 => 54,  152 => 52,  150 => 51,  144 => 47,  139 => 45,  135 => 44,  131 => 43,  126 => 41,  122 => 40,  106 => 28,  99 => 26,  96 => 25,  90 => 23,  88 => 22,  82 => 20,  80 => 19,  76 => 18,  68 => 13,  64 => 12,  56 => 11,  48 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script type=\"text/javascript\">
    \$(document).ready(function(){
        \$('.tabs').tabs();
    });
</script>

<div class=\"row\">
    <div class=\"col s12\">
        <ul class=\"tabs\">
            <li class=\"tab col s3\"><a {% if siteType != constant('Piwik\\\\Plugins\\\\SitesManager\\\\SitesManager::SITE_TYPE_UNKNOWN') and (consentManagerName == false) %} class=\"active\" {% endif %} href=\"#integrations\">{{ 'SitesManager_Integrations'|translate }}</a></li>
            <li class=\"tab col s3\"><a {% if siteType == constant('Piwik\\\\Plugins\\\\SitesManager\\\\SitesManager::SITE_TYPE_UNKNOWN') or consentManagerName %} class=\"active\" {% endif %} href=\"#tracking-code\">{{ 'CoreAdminHome_TrackingCode'|translate}}</a></li>
            <li class=\"tab col s3\"><a href=\"#mtm\">{{ 'SitesManager_SiteWithoutDataMatomoTagManager'|translate}}</a></li>
            <li class=\"tab col s3\"><a href=\"#other\">{{ 'SitesManager_SiteWithoutDataOtherWays'|translate }}</a></li>
        </ul>
    </div>

    <div id=\"integrations\" class=\"col s12\">
        <h3>{{ 'SitesManager_Integrations'|translate }}</h3>
        {% if instruction %}
            <p>{{ instruction|raw }}</p>

            {% if gtmUsed %}
                <p>{{ 'SitesManager_SiteWithoutDataDetectedGtm'|translate(siteType|capitalize, '<a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://matomo.org/faq/new-to-piwik/how-do-i-use-matomo-analytics-within-gtm-google-tag-manager\">','</a>')|raw }}</p>
            {% endif %}

            <p>{{ 'SitesManager_SiteWithoutDataOtherIntegrations'|translate }}: {{ 'CoreAdminHome_JSTrackingIntro3a'|translate('<a href=\"https://matomo.org/integrate/\" rel=\"noreferrer noopener\" target=\"_blank\">','</a>')|raw }}</p>
        {% else %}
            <p>{{ 'SitesManager_InstallationGuidesIntro'|translate }}

            <p>
                <a target=\"_blank\" rel=\"noreferrer noopener\" href='https://matomo.org/faq/new-to-piwik/how-do-i-install-the-matomo-tracking-code-on-wordpress/'>WordPress</a>
                | <a target=\"_blank\" rel=\"noreferrer noopener\" href='https://matomo.org/faq/new-to-piwik/how-do-i-integrate-matomo-with-squarespace-website/'>Squarespace</a>
                | <a target=\"_blank\" rel=\"noreferrer noopener\" href='https://matomo.org/faq/new-to-piwik/how-do-i-install-the-matomo-analytics-tracking-code-on-wix/'>Wix</a>
                | <a target=\"_blank\" rel=\"noreferrer noopener\" href='https://matomo.org/faq/how-to-install/faq_19424/'>SharePoint</a>
                | <a target=\"_blank\" rel=\"noreferrer noopener\" href='https://matomo.org/faq/new-to-piwik/how-do-i-install-the-matomo-analytics-tracking-code-on-joomla/'>Joomla</a>
                | <a target=\"_blank\" rel=\"noreferrer noopener\" href='https://matomo.org/faq/new-to-piwik/how-do-i-install-the-matomo-tracking-code-on-my-shopify-store/'>Shopify</a>
                | <a target=\"_blank\" rel=\"noreferrer noopener\" href='https://matomo.org/faq/new-to-piwik/how-do-i-use-matomo-analytics-within-gtm-google-tag-manager/'>Google Tag Manager</a>
            </p>

            <p>{{ 'CoreAdminHome_JSTrackingIntro3a'|translate('<a href=\"https://matomo.org/integrate/\" rel=\"noreferrer noopener\" target=\"_blank\">','</a>')|raw }}</p>
            <p>{{ 'CoreAdminHome_JSTrackingIntro3b'|translate|raw }}</p>
            <br>
            <p>{{ 'SitesManager_ExtraInformationNeeded'|translate }}</p>
            <p>Matomo URL: <code piwik-select-on-focus>{{ piwikUrl }}</code></p>
            <p>{{ 'SitesManager_EmailInstructionsYourSiteId'|translate('<code piwik-select-on-focus>' ~ idSite ~ '</code>')|raw }}</p>
        {% endif %}
    </div>

    <div id=\"tracking-code\" class=\"col s12\">

        {% if consentManagerName %}
        <p></p><p></p>
        <div class=\"system notification notification-info\">
            <p> {{ 'PrivacyManager_ConsentManagerDetected'|translate(consentManagerName, '<a href=\"' ~ consentManagerUrl ~ '\" target=\"_blank\" rel=\"noreferrer noopener\">', '</a')|raw }}
            </p>
            {% if consentManagerIsConnected %}
                <p> {{ 'PrivacyManager_ConsentManagerConnected'|translate(consentManagerName)|raw }}
                </p>
            {% endif %}
        </div>
        {% endif %}

        {% if ga3Used %}
        <p></p><p></p>
        <div class=\"system notification notification-info\">
             {{ 'SitesManager_GADetected'|translate('Google Analytics 3', 'GA', '<a href=\"', 'https://matomo.org/faq/how-to/migrate-from-google-analytics-3-to-matomo/', '\" target=\"_blank\" rel=\"noreferrer noopener\">', '</a>')|raw }}
        </div>
        {% endif %}

        {% if ga4Used %}
        <p></p><p></p>
        <div class=\"system notification notification-info\">
            {{ 'SitesManager_GADetected'|translate('Google Analytics 4', 'GA', '<a href=\"', 'https://matomo.org/faq/how-to/migrate-from-google-analytics-4-to-matomo/', '\" target=\"_blank\" rel=\"noreferrer noopener\">', '</a>')|raw }}
        </div>
        {% endif %}

        {% if gtmUsed %}
        <p></p><p></p>
        <div class=\"system notification notification-info\">
            {{ 'SitesManager_GADetected'|translate('Google Tag Manager', 'GTM', '<a href=\"', 'https://matomo.org/faq/tag-manager/migrating-from-google-tag-manager/', '\" target=\"_blank\" rel=\"noreferrer noopener\">', '</a>')|raw }}
        </div>
        {% endif %}

        <h3>{{ 'CoreAdminHome_TrackingCode'|translate}}</h3>

        <p>{{ 'CoreAdminHome_JSTracking_CodeNoteBeforeClosingHead'|translate(\"&lt;/head&gt;\")|raw }}</p>

        <pre piwik-select-on-focus>{{ jsTag|raw }}</pre>

        <p>{{ 'CoreAdminHome_JSTrackingIntro5'|translate('<a rel=\"noreferrer noopener\" target=\"_blank\" href=\"https://developer.matomo.org/guides/tracking-javascript-guide\">','</a>')|raw }}</p>

        <p>{{ 'CoreAdminHome_JSTracking_EndNote'|translate('<a href=\"' ~ linkTo({'module': 'CoreAdminHome', 'action': 'trackingCodeGenerator'}) ~'\">','</a>')|raw }}</p>
    </div>

    <div id=\"mtm\" class=\"col s12\">
        {% if tagManagerActive %}
            {{ postEvent('Template.endTrackingCodePage') }}
        {% else %}
                <h3>{{ 'SitesManager_SiteWithoutDataMatomoTagManager'|translate }}</h3>
                <p>{{ 'SitesManager_SiteWithoutDataMatomoTagManagerNotActive'|translate('<a href=\"https://matomo.org/docs/tag-manager/\" rel=\"noreferrer noopener\" target=\"_blank\">', '</a>')|raw }}</p>
        {% endif %}
    </div>

    <div id=\"other\" class=\"col s12\">
        <h3>{{ 'SitesManager_LogAnalytics'|translate }}</h3>
        <p>{{ 'SitesManager_LogAnalyticsDescription'|translate('<a href=\"https://matomo.org/log-analytics/\" rel=\"noreferrer noopener\" target=\"_blank\">', '</a>')|raw }}</p>

        <h3>{{ 'SitesManager_MobileAppsAndSDKs'|translate }}</h3>
        <p>{{ 'SitesManager_MobileAppsAndSDKsDescription'|translate('<a href=\"https://matomo.org/integrate/#programming-language-platforms-and-frameworks\" rel=\"noreferrer noopener\" target=\"_blank\">','</a>')|raw }}</p>

        <h3>{{ 'CoreAdminHome_HttpTrackingApi'|translate }}</h3>
        <p>{{ 'CoreAdminHome_HttpTrackingApiDescription'|translate('<a href=\"https://developer.matomo.org/api-reference/tracking-api\" rel=\"noreferrer noopener\" target=\"_blank\">','</a>')|raw }}</p>

        <h3>{{ 'SitesManager_SiteWithoutDataGoogleTagManager'|translate }}</h3>
        <p>{{ 'SitesManager_SiteWithoutDataGoogleTagManagerDescription'|translate('<a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://matomo.org/faq/new-to-piwik/how-do-i-use-matomo-analytics-within-gtm-google-tag-manager\">','</a>')|raw }}</p>

        <h3>{{ 'SitesManager_SiteWithoutDataSinglePageApplication'|translate }}</h3>
        <p>{{ 'SitesManager_SiteWithoutDataSinglePageApplicationDescription'|translate('<a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://developer.matomo.org/guides/spa-tracking\">','</a>')|raw }}</p>

        {% if googleAnalyticsImporterMessage is defined %}
            {{ googleAnalyticsImporterMessage|raw }}
        {% endif %}
    </div>
</div>
", "@SitesManager/_siteWithoutDataTabs.twig", "/var/www/cse135.monster/public_html/matomo/plugins/SitesManager/templates/_siteWithoutDataTabs.twig");
    }
}
