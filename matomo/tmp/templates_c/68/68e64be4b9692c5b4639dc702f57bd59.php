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

/* _jsGlobalVariables.twig */
class __TwigTemplate_0a019ab6d8179dd035657c26064389e5 extends Template
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
    var piwik = {};
    piwik.token_auth = \"";
        // line 3
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["token_auth"]) || array_key_exists("token_auth", $context) ? $context["token_auth"] : (function () { throw new RuntimeError('Variable "token_auth" does not exist.', 3, $this->source); })()), "html", null, true);
        echo "\";
    piwik.piwik_url = \"";
        // line 4
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["piwikUrl"]) || array_key_exists("piwikUrl", $context) ? $context["piwikUrl"] : (function () { throw new RuntimeError('Variable "piwikUrl" does not exist.', 4, $this->source); })()), "html", null, true);
        echo "\";
    piwik.cacheBuster = \"";
        // line 5
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["cacheBuster"]) || array_key_exists("cacheBuster", $context) ? $context["cacheBuster"] : (function () { throw new RuntimeError('Variable "cacheBuster" does not exist.', 5, $this->source); })()), "html", null, true);
        echo "\";
    ";
        // line 6
        if (array_key_exists("timezoneOffset", $context)) {
            echo "piwik.timezoneOffset = ";
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["timezoneOffset"]) || array_key_exists("timezoneOffset", $context) ? $context["timezoneOffset"] : (function () { throw new RuntimeError('Variable "timezoneOffset" does not exist.', 6, $this->source); })()), "html", null, true);
            echo ";";
        }
        // line 7
        echo "
    piwik.numbers = {
        patternNumber: \"";
        // line 9
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Intl_NumberFormatNumber"), "html", null, true);
        echo "\",
        patternPercent: \"";
        // line 10
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Intl_NumberFormatPercent"), "html", null, true);
        echo "\",
        patternCurrency: \"";
        // line 11
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Intl_NumberFormatCurrency"), "html", null, true);
        echo "\",
        symbolPlus: \"";
        // line 12
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Intl_NumberSymbolPlus"), "html", null, true);
        echo "\",
        symbolMinus: \"";
        // line 13
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Intl_NumberSymbolMinus"), "html", null, true);
        echo "\",
        symbolPercent: \"";
        // line 14
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Intl_NumberSymbolPercent"), "html", null, true);
        echo "\",
        symbolGroup: \"";
        // line 15
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Intl_NumberSymbolGroup"), "html", null, true);
        echo "\",
        symbolDecimal: \"";
        // line 16
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Intl_NumberSymbolDecimal"), "html", null, true);
        echo "\"
    };

    piwik.relativePluginWebDirs = ";
        // line 19
        echo json_encode((isset($context["relativePluginWebDirs"]) || array_key_exists("relativePluginWebDirs", $context) ? $context["relativePluginWebDirs"] : (function () { throw new RuntimeError('Variable "relativePluginWebDirs" does not exist.', 19, $this->source); })()));
        echo ";

    ";
        // line 21
        if ((isset($context["userLogin"]) || array_key_exists("userLogin", $context) ? $context["userLogin"] : (function () { throw new RuntimeError('Variable "userLogin" does not exist.', 21, $this->source); })())) {
            echo "piwik.userLogin = \"";
            echo \Piwik\piwik_escape_filter($this->env, \Piwik\piwik_escape_filter($this->env, (isset($context["userLogin"]) || array_key_exists("userLogin", $context) ? $context["userLogin"] : (function () { throw new RuntimeError('Variable "userLogin" does not exist.', 21, $this->source); })()), "js"), "html", null, true);
            echo "\";";
        }
        // line 22
        echo "
    ";
        // line 23
        if (array_key_exists("idSite", $context)) {
            echo "piwik.idSite = \"";
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["idSite"]) || array_key_exists("idSite", $context) ? $context["idSite"] : (function () { throw new RuntimeError('Variable "idSite" does not exist.', 23, $this->source); })()), "html", null, true);
            echo "\";";
        }
        // line 24
        echo "
    piwik.requiresPasswordConfirmation = ";
        // line 25
        echo (((isset($context["userRequiresPasswordConfirmation"]) || array_key_exists("userRequiresPasswordConfirmation", $context) ? $context["userRequiresPasswordConfirmation"] : (function () { throw new RuntimeError('Variable "userRequiresPasswordConfirmation" does not exist.', 25, $this->source); })())) ? ("true") : ("false"));
        echo ";

    ";
        // line 27
        if (array_key_exists("siteName", $context)) {
            // line 28
            echo "    // NOTE: siteName is currently considered deprecated, use piwik.currentSiteName instead, which will not contain HTML entities
    piwik.siteName = \"";
            // line 29
            echo \Piwik\piwik_escape_filter($this->env, \Piwik\piwik_escape_filter($this->env, (isset($context["siteName"]) || array_key_exists("siteName", $context) ? $context["siteName"] : (function () { throw new RuntimeError('Variable "siteName" does not exist.', 29, $this->source); })()), "js"), "html", null, true);
            echo "\";
    ";
            // line 30
            if (array_key_exists("siteNameDecoded", $context)) {
                echo " // just to be safe
    piwik.currentSiteName = ";
                // line 31
                echo json_encode((isset($context["siteNameDecoded"]) || array_key_exists("siteNameDecoded", $context) ? $context["siteNameDecoded"] : (function () { throw new RuntimeError('Variable "siteNameDecoded" does not exist.', 31, $this->source); })()));
                echo ";";
            }
            // line 32
            echo "    ";
        }
        // line 33
        echo "
    ";
        // line 34
        if (array_key_exists("siteMainUrl", $context)) {
            echo "piwik.siteMainUrl = \"";
            echo \Piwik\piwik_escape_filter($this->env, \Piwik\piwik_escape_filter($this->env, (isset($context["siteMainUrl"]) || array_key_exists("siteMainUrl", $context) ? $context["siteMainUrl"] : (function () { throw new RuntimeError('Variable "siteMainUrl" does not exist.', 34, $this->source); })()), "js"), "html", null, true);
            echo "\";";
        }
        // line 35
        echo "
    ";
        // line 36
        if (array_key_exists("period", $context)) {
            echo "piwik.period = \"";
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["period"]) || array_key_exists("period", $context) ? $context["period"] : (function () { throw new RuntimeError('Variable "period" does not exist.', 36, $this->source); })()), "html", null, true);
            echo "\";";
        }
        // line 37
        echo "
";
        // line 42
        echo "    piwik.currentDateString = \"";
        echo \Piwik\piwik_escape_filter($this->env, ((array_key_exists("date", $context)) ? (_twig_default_filter((isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 42, $this->source); })()), ((array_key_exists("endDate", $context)) ? (_twig_default_filter((isset($context["endDate"]) || array_key_exists("endDate", $context) ? $context["endDate"] : (function () { throw new RuntimeError('Variable "endDate" does not exist.', 42, $this->source); })()), "")) : ("")))) : (((array_key_exists("endDate", $context)) ? (_twig_default_filter((isset($context["endDate"]) || array_key_exists("endDate", $context) ? $context["endDate"] : (function () { throw new RuntimeError('Variable "endDate" does not exist.', 42, $this->source); })()), "")) : ("")))), "html", null, true);
        echo "\";
";
        // line 43
        if (array_key_exists("startDate", $context)) {
            // line 44
            echo "    piwik.startDateString = \"";
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["startDate"]) || array_key_exists("startDate", $context) ? $context["startDate"] : (function () { throw new RuntimeError('Variable "startDate" does not exist.', 44, $this->source); })()), "html", null, true);
            echo "\";
    piwik.endDateString = \"";
            // line 45
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["endDate"]) || array_key_exists("endDate", $context) ? $context["endDate"] : (function () { throw new RuntimeError('Variable "endDate" does not exist.', 45, $this->source); })()), "html", null, true);
            echo "\";
    piwik.minDateYear = ";
            // line 46
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["minDateYear"]) || array_key_exists("minDateYear", $context) ? $context["minDateYear"] : (function () { throw new RuntimeError('Variable "minDateYear" does not exist.', 46, $this->source); })()), "html", null, true);
            echo ";
    piwik.minDateMonth = parseInt(\"";
            // line 47
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["minDateMonth"]) || array_key_exists("minDateMonth", $context) ? $context["minDateMonth"] : (function () { throw new RuntimeError('Variable "minDateMonth" does not exist.', 47, $this->source); })()), "html", null, true);
            echo "\", 10);
    piwik.minDateDay = parseInt(\"";
            // line 48
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["minDateDay"]) || array_key_exists("minDateDay", $context) ? $context["minDateDay"] : (function () { throw new RuntimeError('Variable "minDateDay" does not exist.', 48, $this->source); })()), "html", null, true);
            echo "\", 10);
    piwik.maxDateYear = ";
            // line 49
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["maxDateYear"]) || array_key_exists("maxDateYear", $context) ? $context["maxDateYear"] : (function () { throw new RuntimeError('Variable "maxDateYear" does not exist.', 49, $this->source); })()), "html", null, true);
            echo ";
    piwik.maxDateMonth = parseInt(\"";
            // line 50
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["maxDateMonth"]) || array_key_exists("maxDateMonth", $context) ? $context["maxDateMonth"] : (function () { throw new RuntimeError('Variable "maxDateMonth" does not exist.', 50, $this->source); })()), "html", null, true);
            echo "\", 10);
    piwik.maxDateDay = parseInt(\"";
            // line 51
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["maxDateDay"]) || array_key_exists("maxDateDay", $context) ? $context["maxDateDay"] : (function () { throw new RuntimeError('Variable "maxDateDay" does not exist.', 51, $this->source); })()), "html", null, true);
            echo "\", 10);
";
        }
        // line 53
        echo "    ";
        if (array_key_exists("language", $context)) {
            echo "piwik.language = \"";
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["language"]) || array_key_exists("language", $context) ? $context["language"] : (function () { throw new RuntimeError('Variable "language" does not exist.', 53, $this->source); })()), "html", null, true);
            echo "\";";
        }
        // line 54
        echo "
    piwik.hasSuperUserAccess = ";
        // line 55
        echo \Piwik\piwik_escape_filter($this->env, \Piwik\piwik_escape_filter($this->env, ((array_key_exists("hasSuperUserAccess", $context)) ? (_twig_default_filter((isset($context["hasSuperUserAccess"]) || array_key_exists("hasSuperUserAccess", $context) ? $context["hasSuperUserAccess"] : (function () { throw new RuntimeError('Variable "hasSuperUserAccess" does not exist.', 55, $this->source); })()), 0)) : (0)), "js"), "html", null, true);
        echo ";
    piwik.userCapabilities = ";
        // line 56
        echo json_encode(((array_key_exists("userCapabilities", $context)) ? (_twig_default_filter((isset($context["userCapabilities"]) || array_key_exists("userCapabilities", $context) ? $context["userCapabilities"] : (function () { throw new RuntimeError('Variable "userCapabilities" does not exist.', 56, $this->source); })()), [])) : ([])));
        echo ";
    piwik.config = {};
";
        // line 58
        if (array_key_exists("clientSideConfig", $context)) {
            // line 59
            echo "    piwik.config = ";
            echo json_encode((isset($context["clientSideConfig"]) || array_key_exists("clientSideConfig", $context) ? $context["clientSideConfig"] : (function () { throw new RuntimeError('Variable "clientSideConfig" does not exist.', 59, $this->source); })()));
            echo ";
";
        }
        // line 61
        echo "    Object.freeze(piwik.config); // disallow accidental changes
    piwik.shouldPropagateTokenAuth = ";
        // line 62
        echo json_encode((isset($context["shouldPropagateTokenAuth"]) || array_key_exists("shouldPropagateTokenAuth", $context) ? $context["shouldPropagateTokenAuth"] : (function () { throw new RuntimeError('Variable "shouldPropagateTokenAuth" does not exist.', 62, $this->source); })()));
        echo ";
    ";
        // line 63
        echo $this->env->getFunction('postEvent')->getCallable()("Template.jsGlobalVariables");
        echo "
</script>

";
    }

    public function getTemplateName()
    {
        return "_jsGlobalVariables.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 63,  237 => 62,  234 => 61,  228 => 59,  226 => 58,  221 => 56,  217 => 55,  214 => 54,  207 => 53,  202 => 51,  198 => 50,  194 => 49,  190 => 48,  186 => 47,  182 => 46,  178 => 45,  173 => 44,  171 => 43,  166 => 42,  163 => 37,  157 => 36,  154 => 35,  148 => 34,  145 => 33,  142 => 32,  138 => 31,  134 => 30,  130 => 29,  127 => 28,  125 => 27,  120 => 25,  117 => 24,  111 => 23,  108 => 22,  102 => 21,  97 => 19,  91 => 16,  87 => 15,  83 => 14,  79 => 13,  75 => 12,  71 => 11,  67 => 10,  63 => 9,  59 => 7,  53 => 6,  49 => 5,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script type=\"text/javascript\">
    var piwik = {};
    piwik.token_auth = \"{{ token_auth }}\";
    piwik.piwik_url = \"{{ piwikUrl }}\";
    piwik.cacheBuster = \"{{ cacheBuster }}\";
    {% if timezoneOffset is defined %}piwik.timezoneOffset = {{ timezoneOffset }};{% endif %}

    piwik.numbers = {
        patternNumber: \"{{ 'Intl_NumberFormatNumber'|translate }}\",
        patternPercent: \"{{ 'Intl_NumberFormatPercent'|translate }}\",
        patternCurrency: \"{{ 'Intl_NumberFormatCurrency'|translate }}\",
        symbolPlus: \"{{ 'Intl_NumberSymbolPlus'|translate }}\",
        symbolMinus: \"{{ 'Intl_NumberSymbolMinus'|translate }}\",
        symbolPercent: \"{{ 'Intl_NumberSymbolPercent'|translate }}\",
        symbolGroup: \"{{ 'Intl_NumberSymbolGroup'|translate }}\",
        symbolDecimal: \"{{ 'Intl_NumberSymbolDecimal'|translate }}\"
    };

    piwik.relativePluginWebDirs = {{ relativePluginWebDirs|json_encode|raw }};

    {% if userLogin %}piwik.userLogin = \"{{ userLogin|e('js')}}\";{% endif %}

    {% if idSite is defined %}piwik.idSite = \"{{ idSite }}\";{% endif %}

    piwik.requiresPasswordConfirmation = {{ userRequiresPasswordConfirmation ? 'true' : 'false' }};

    {% if siteName is defined %}
    // NOTE: siteName is currently considered deprecated, use piwik.currentSiteName instead, which will not contain HTML entities
    piwik.siteName = \"{{ siteName|e('js') }}\";
    {% if siteNameDecoded is defined %} // just to be safe
    piwik.currentSiteName = {{ siteNameDecoded|json_encode|raw }};{% endif %}
    {% endif %}

    {% if siteMainUrl is defined %}piwik.siteMainUrl = \"{{ siteMainUrl|e('js') }}\";{% endif %}

    {% if period is defined %}piwik.period = \"{{ period }}\";{% endif %}

{# piwik.currentDateString should not be used other than by the calendar Javascript
            (it is not set to the expected value when period=range)
        Use broadcast.getValueFromUrl('date') instead
#}
    piwik.currentDateString = \"{{ date|default(endDate|default('')) }}\";
{% if startDate is defined %}
    piwik.startDateString = \"{{ startDate }}\";
    piwik.endDateString = \"{{ endDate }}\";
    piwik.minDateYear = {{ minDateYear }};
    piwik.minDateMonth = parseInt(\"{{ minDateMonth }}\", 10);
    piwik.minDateDay = parseInt(\"{{ minDateDay }}\", 10);
    piwik.maxDateYear = {{ maxDateYear }};
    piwik.maxDateMonth = parseInt(\"{{ maxDateMonth }}\", 10);
    piwik.maxDateDay = parseInt(\"{{ maxDateDay }}\", 10);
{% endif %}
    {% if language is defined %}piwik.language = \"{{ language }}\";{% endif %}

    piwik.hasSuperUserAccess = {{ hasSuperUserAccess|default(0)|e('js')}};
    piwik.userCapabilities = {{ userCapabilities|default([])|json_encode|raw }};
    piwik.config = {};
{% if clientSideConfig is defined %}
    piwik.config = {{ clientSideConfig|json_encode|raw }};
{% endif %}
    Object.freeze(piwik.config); // disallow accidental changes
    piwik.shouldPropagateTokenAuth = {{ shouldPropagateTokenAuth|json_encode|raw }};
    {{ postEvent(\"Template.jsGlobalVariables\") }}
</script>

", "_jsGlobalVariables.twig", "/var/www/cse135.monster/public_html/matomo/plugins/Morpheus/templates/_jsGlobalVariables.twig");
    }
}
