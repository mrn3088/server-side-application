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

/* @Live/_visitorDetails.twig */
class __TwigTemplate_075657e6a91fc1e2948f1da45edb8c4f extends Template
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
        echo "<strong class=\"visitor-log-datetime visitorLogTooltip\" title=\"";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 1, $this->source); })()), "getColumn", [0 => "visitorType"], "method", false, false, false, 1) == "new")) {
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_NewVisitor"), "html", null, true);
        } else {
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Live_VisitorsLastVisit", twig_get_attribute($this->env, $this->source, (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 1, $this->source); })()), "getColumn", [0 => "daysSinceLastVisit"], "method", false, false, false, 1)), "html", null, true);
        }
        echo "\">
    ";
        // line 2
        echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 2, $this->source); })()), "getColumn", [0 => "serverDatePrettyFirstAction"], "method", false, false, false, 2), "html", null, true);
        echo "
    ";
        // line 3
        if ((isset($context["isWidget"]) || array_key_exists("isWidget", $context) ? $context["isWidget"] : (function () { throw new RuntimeError('Variable "isWidget" does not exist.', 3, $this->source); })())) {
            echo "<br/>";
        } else {
            echo "-";
        }
        echo " ";
        echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 3, $this->source); })()), "getColumn", [0 => "serverTimePrettyFirstAction"], "method", false, false, false, 3), "html", null, true);
        echo "</strong>
";
        // line 4
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 4, $this->source); })()), "getColumn", [0 => "visitIp"], "method", false, false, false, 4))) {
            // line 5
            echo "<span class=\"visitor-log-ip-location visitorLogTooltip\" title=\"";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 5, $this->source); })()), "getColumn", [0 => "userId"], "method", false, false, false, 5))) {
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_UserId"), "html", null, true);
                echo ": ";
                echo $this->env->getFilter('rawSafeDecoded')->getCallable()(twig_get_attribute($this->env, $this->source, (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 5, $this->source); })()), "getColumn", [0 => "userId"], "method", false, false, false, 5));
                echo "
";
            }
            // line 6
            if (((isset($context["isProfileEnabled"]) || array_key_exists("isProfileEnabled", $context) ? $context["isProfileEnabled"] : (function () { throw new RuntimeError('Variable "isProfileEnabled" does not exist.', 6, $this->source); })()) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 6, $this->source); })()), "getColumn", [0 => "visitorId"], "method", false, false, false, 6)))) {
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_VisitorID"), "html", null, true);
                echo ": ";
                echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 6, $this->source); })()), "getColumn", [0 => "visitorId"], "method", false, false, false, 6), "html", null, true);
                echo "
";
            }
            // line 7
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 7, $this->source); })()), "getColumn", [0 => "idVisit"], "method", false, false, false, 7))) {
                // line 8
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_Visit"), "html", null, true);
                echo " ID: ";
                echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 8, $this->source); })()), "getColumn", [0 => "idVisit"], "method", false, false, false, 8), "html", null, true);
                echo "
";
            }
            // line 9
            if ((twig_get_attribute($this->env, $this->source, (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 9, $this->source); })()), "getColumn", [0 => "latitude"], "method", false, false, false, 9) || twig_get_attribute($this->env, $this->source, (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 9, $this->source); })()), "getColumn", [0 => "longitude"], "method", false, false, false, 9))) {
                echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 9, $this->source); })()), "getColumn", [0 => "location"], "method", false, false, false, 9), "html", null, true);
                echo "
GPS (lat/long): ";
                // line 10
                echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 10, $this->source); })()), "getColumn", [0 => "latitude"], "method", false, false, false, 10), "html", null, true);
                echo ",";
                echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 10, $this->source); })()), "getColumn", [0 => "longitude"], "method", false, false, false, 10), "html", null, true);
                echo "
";
            }
            // line 11
            if (twig_get_attribute($this->env, $this->source, (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 11, $this->source); })()), "getColumn", [0 => "providerName"], "method", false, false, false, 11)) {
                // line 12
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Provider_ColumnProvider"), "html", null, true);
                echo ": ";
                echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 12, $this->source); })()), "getColumn", [0 => "providerName"], "method", false, false, false, 12), "html", null, true);
            }
            echo "\">
    IP: ";
            // line 13
            echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 13, $this->source); })()), "getColumn", [0 => "visitIp"], "method", false, false, false, 13), "html", null, true);
            echo "
    <br />
    ";
            // line 15
            if ((twig_get_attribute($this->env, $this->source, (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 15, $this->source); })()), "getColumn", [0 => "location"], "method", false, false, false, 15) != $this->env->getFilter('translate')->getCallable()("General_Unknown"))) {
                echo "<span><img width=\"16\" class=\"flag\" src=\"";
                echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 15, $this->source); })()), "getColumn", [0 => "countryFlag"], "method", false, false, false, 15), "html", null, true);
                echo "\"/>&nbsp;
    ";
                // line 16
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 16, $this->source); })()), "getColumn", [0 => "city"], "method", false, false, false, 16))) {
                    echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 16, $this->source); })()), "getColumn", [0 => "city"], "method", false, false, false, 16), "html", null, true);
                } else {
                    echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 16, $this->source); })()), "getColumn", [0 => "country"], "method", false, false, false, 16), "html", null, true);
                }
                echo "</span>";
            }
            // line 17
            echo "
    ";
            // line 18
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 18, $this->source); })()), "getColumn", [0 => "userId"], "method", false, false, false, 18))) {
                echo "<br/><br/>";
                echo $this->env->getFilter('rawSafeDecoded')->getCallable()(twig_get_attribute($this->env, $this->source, (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 18, $this->source); })()), "getColumn", [0 => "userId"], "method", false, false, false, 18));
            }
            // line 19
            echo "</span>";
        }
        // line 20
        if ((isset($context["isWidget"]) || array_key_exists("isWidget", $context) ? $context["isWidget"] : (function () { throw new RuntimeError('Variable "isWidget" does not exist.', 20, $this->source); })())) {
            // line 21
            echo "    <br />
    ";
            // line 22
            echo $this->env->getFunction('postEvent')->getCallable()("Live.renderVisitorIcons", (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 22, $this->source); })()));
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "@Live/_visitorDetails.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 22,  141 => 21,  139 => 20,  136 => 19,  131 => 18,  128 => 17,  120 => 16,  114 => 15,  109 => 13,  102 => 12,  100 => 11,  93 => 10,  88 => 9,  81 => 8,  79 => 7,  71 => 6,  62 => 5,  60 => 4,  50 => 3,  46 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<strong class=\"visitor-log-datetime visitorLogTooltip\" title=\"{% if visitInfo.getColumn('visitorType')=='new' %}{{ 'General_NewVisitor'|translate }}{% else %}{{ 'Live_VisitorsLastVisit'|translate(visitInfo.getColumn('daysSinceLastVisit')) }}{% endif %}\">
    {{ visitInfo.getColumn('serverDatePrettyFirstAction') }}
    {% if isWidget %}<br/>{% else %}-{% endif %} {{ visitInfo.getColumn('serverTimePrettyFirstAction') }}</strong>
{% if visitInfo.getColumn('visitIp') is not empty %}
<span class=\"visitor-log-ip-location visitorLogTooltip\" title=\"{% if visitInfo.getColumn('userId') is not empty %}{{ 'General_UserId'|translate }}: {{ visitInfo.getColumn('userId')|rawSafeDecoded }}
{% endif %}{% if isProfileEnabled and visitInfo.getColumn('visitorId') is not empty %}{{ 'General_VisitorID'|translate }}: {{ visitInfo.getColumn('visitorId') }}
{% endif %}{% if visitInfo.getColumn('idVisit') is not empty %}
{{ 'General_Visit'|translate }} ID: {{ visitInfo.getColumn('idVisit') }}
{% endif %}{% if visitInfo.getColumn('latitude') or visitInfo.getColumn('longitude') %}{{ visitInfo.getColumn('location') }}
GPS (lat/long): {{ visitInfo.getColumn('latitude') }},{{ visitInfo.getColumn('longitude') }}
{% endif %}{% if visitInfo.getColumn('providerName') %}
{{ 'Provider_ColumnProvider'|translate }}: {{ visitInfo.getColumn('providerName') }}{% endif %}\">
    IP: {{ visitInfo.getColumn('visitIp') }}
    <br />
    {% if visitInfo.getColumn('location') != 'General_Unknown'|translate %}<span><img width=\"16\" class=\"flag\" src=\"{{ visitInfo.getColumn('countryFlag') }}\"/>&nbsp;
    {% if visitInfo.getColumn('city') is not empty %}{{ visitInfo.getColumn('city') }}{% else %}{{ visitInfo.getColumn('country') }}{% endif %}</span>{% endif %}

    {% if visitInfo.getColumn('userId') is not empty %}<br/><br/>{{ visitInfo.getColumn('userId')|rawSafeDecoded }}{% endif %}
</span>{% endif %}
{% if isWidget %}
    <br />
    {{ postEvent('Live.renderVisitorIcons', visitInfo) }}
{% endif %}
", "@Live/_visitorDetails.twig", "/var/www/cse135.monster/public_html/matomo/plugins/Live/templates/_visitorDetails.twig");
    }
}
