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

/* @SitesManager/_displayJavascriptCode.twig */
class __TwigTemplate_90295c3c6516d28a02049bc14e266496 extends Template
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
        echo "<div class=\"trackingHelpHeader\">
    <h2>";
        // line 2
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_TrackingTags", (isset($context["displaySiteName"]) || array_key_exists("displaySiteName", $context) ? $context["displaySiteName"] : (function () { throw new RuntimeError('Variable "displaySiteName" does not exist.', 2, $this->source); })())), "html", null, true);
        echo "</h2>
    <a class=\"btn\"
        href=\"mailto:?subject=";
        // line 4
        echo \Piwik\piwik_escape_filter($this->env, twig_urlencode_filter($this->env->getFilter('translate')->getCallable()("SitesManager_EmailInstructionsSubject")), "html_attr");
        echo "&body=";
        echo \Piwik\piwik_escape_filter($this->env, twig_urlencode_filter((isset($context["emailBody"]) || array_key_exists("emailBody", $context) ? $context["emailBody"] : (function () { throw new RuntimeError('Variable "emailBody" does not exist.', 4, $this->source); })())), "html_attr");
        echo "\">
        ";
        // line 5
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_EmailInstructionsButton"), "html", null, true);
        echo "
    </a>
</div>

<div class='trackingHelp'>
    <p>";
        // line 10
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Installation_JSTracking_Intro"), "html", null, true);
        echo "</p>

    <p>";
        // line 12
        echo $this->env->getFilter('translate')->getCallable()("CoreAdminHome_JSTrackingIntro3a", "<a href=\"https://matomo.org/integrate/\" rel=\"noreferrer noopener\" target=\"_blank\">", "</a>");
        echo " ";
        echo $this->env->getFilter('translate')->getCallable()("CoreAdminHome_JSTrackingIntro3b");
        echo "</p>

    <h3>";
        // line 14
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_JsTrackingTag"), "html", null, true);
        echo "</h3>

    <p>";
        // line 16
        echo $this->env->getFilter('translate')->getCallable()("CoreAdminHome_JSTracking_CodeNoteBeforeClosingHead", "&lt;/head&gt;");
        echo "</p>

    <pre piwik-select-on-focus>";
        // line 18
        echo (isset($context["jsTag"]) || array_key_exists("jsTag", $context) ? $context["jsTag"] : (function () { throw new RuntimeError('Variable "jsTag" does not exist.', 18, $this->source); })());
        echo "</pre>

    <p>";
        // line 20
        echo $this->env->getFilter('translate')->getCallable()("CoreAdminHome_JSTrackingIntro5", "<a rel=\"noreferrer noopener\" target=\"_blank\" href=\"https://developer.matomo.org/guides/tracking-javascript-guide\">", "</a>");
        echo "</p>

    ";
        // line 22
        if (array_key_exists("isInstall", $context)) {
            // line 23
            echo "        <p>";
            echo $this->env->getFilter('translate')->getCallable()("Installation_JSTracking_EndNote", "", "");
            echo "</p>
    ";
        } else {
            // line 25
            echo "        <p>";
            echo $this->env->getFilter('translate')->getCallable()("CoreAdminHome_JSTracking_EndNote", (("<a href=\"" . $this->env->getFunction('linkTo')->getCallable()(["module" => "CoreAdminHome", "action" => "trackingCodeGenerator"])) . "\">"), "</a>");
            echo "</p>
    ";
        }
        // line 27
        echo "
    <h3>";
        // line 28
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_LogAnalytics"), "html", null, true);
        echo "</h3>

    <p>";
        // line 30
        echo $this->env->getFilter('translate')->getCallable()("SitesManager_LogAnalyticsDescription", "<a href=\"https://matomo.org/log-analytics/\" rel=\"noreferrer noopener\" target=\"_blank\">", "</a>");
        echo "</p>

    <h3>";
        // line 32
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_MobileAppsAndSDKs"), "html", null, true);
        echo "</h3>

    <p>";
        // line 34
        echo $this->env->getFilter('translate')->getCallable()("SitesManager_MobileAppsAndSDKsDescription", "<a href=\"https://matomo.org/integrate/#programming-language-platforms-and-frameworks\" rel=\"noreferrer noopener\" target=\"_blank\">", "</a>");
        echo "</p>

    <h3>";
        // line 36
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreAdminHome_HttpTrackingApi"), "html", null, true);
        echo "</h3>
    <p>";
        // line 37
        echo $this->env->getFilter('translate')->getCallable()("CoreAdminHome_HttpTrackingApiDescription", "<a href=\"https://developer.matomo.org/api-reference/tracking-api\" rel=\"noreferrer noopener\" target=\"_blank\">", "</a>");
        echo "</p>

    <h3>";
        // line 39
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataSinglePageApplication"), "html", null, true);
        echo "</h3>
    <p>";
        // line 40
        echo $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataSinglePageApplicationDescription", "<a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://developer.matomo.org/guides/spa-tracking\">", "</a>");
        echo "</p>

    <p></p>

    ";
        // line 44
        echo $this->env->getFunction('postEvent')->getCallable()("Template.endTrackingHelpPage");
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "@SitesManager/_displayJavascriptCode.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 44,  141 => 40,  137 => 39,  132 => 37,  128 => 36,  123 => 34,  118 => 32,  113 => 30,  108 => 28,  105 => 27,  99 => 25,  93 => 23,  91 => 22,  86 => 20,  81 => 18,  76 => 16,  71 => 14,  64 => 12,  59 => 10,  51 => 5,  45 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"trackingHelpHeader\">
    <h2>{{ 'SitesManager_TrackingTags'|translate(displaySiteName) }}</h2>
    <a class=\"btn\"
        href=\"mailto:?subject={{ 'SitesManager_EmailInstructionsSubject'|translate|url_encode|e('html_attr') }}&body={{ emailBody|url_encode|e('html_attr') }}\">
        {{ 'SitesManager_EmailInstructionsButton'|translate }}
    </a>
</div>

<div class='trackingHelp'>
    <p>{{ 'Installation_JSTracking_Intro'|translate }}</p>

    <p>{{ 'CoreAdminHome_JSTrackingIntro3a'|translate('<a href=\"https://matomo.org/integrate/\" rel=\"noreferrer noopener\" target=\"_blank\">','</a>')|raw }} {{ 'CoreAdminHome_JSTrackingIntro3b'|translate|raw }}</p>

    <h3>{{ 'General_JsTrackingTag'|translate }}</h3>

    <p>{{ 'CoreAdminHome_JSTracking_CodeNoteBeforeClosingHead'|translate(\"&lt;/head&gt;\")|raw }}</p>

    <pre piwik-select-on-focus>{{ jsTag|raw }}</pre>

    <p>{{ 'CoreAdminHome_JSTrackingIntro5'|translate('<a rel=\"noreferrer noopener\" target=\"_blank\" href=\"https://developer.matomo.org/guides/tracking-javascript-guide\">','</a>')|raw }}</p>

    {% if isInstall is defined %}
        <p>{{ 'Installation_JSTracking_EndNote'|translate('', '')|raw }}</p>
    {% else %}
        <p>{{ 'CoreAdminHome_JSTracking_EndNote'|translate('<a href=\"' ~ linkTo({'module': 'CoreAdminHome', 'action': 'trackingCodeGenerator'}) ~'\">','</a>')|raw }}</p>
    {% endif %}

    <h3>{{ 'SitesManager_LogAnalytics'|translate }}</h3>

    <p>{{ 'SitesManager_LogAnalyticsDescription'|translate('<a href=\"https://matomo.org/log-analytics/\" rel=\"noreferrer noopener\" target=\"_blank\">', '</a>')|raw }}</p>

    <h3>{{ 'SitesManager_MobileAppsAndSDKs'|translate }}</h3>

    <p>{{ 'SitesManager_MobileAppsAndSDKsDescription'|translate('<a href=\"https://matomo.org/integrate/#programming-language-platforms-and-frameworks\" rel=\"noreferrer noopener\" target=\"_blank\">','</a>')|raw }}</p>

    <h3>{{ 'CoreAdminHome_HttpTrackingApi'|translate }}</h3>
    <p>{{ 'CoreAdminHome_HttpTrackingApiDescription'|translate('<a href=\"https://developer.matomo.org/api-reference/tracking-api\" rel=\"noreferrer noopener\" target=\"_blank\">','</a>')|raw }}</p>

    <h3>{{ 'SitesManager_SiteWithoutDataSinglePageApplication'|translate }}</h3>
    <p>{{ 'SitesManager_SiteWithoutDataSinglePageApplicationDescription'|translate('<a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://developer.matomo.org/guides/spa-tracking\">','</a>')|raw }}</p>

    <p></p>

    {{ postEvent('Template.endTrackingHelpPage') }}
</div>
", "@SitesManager/_displayJavascriptCode.twig", "/var/www/cse135.monster/public_html/matomo/plugins/SitesManager/templates/_displayJavascriptCode.twig");
    }
}
