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

/* @CoreHome/_headerMessage.twig */
class __TwigTemplate_dc90e39a8b32da77707b02aca0b78d04 extends Template
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
        // line 2
        $context["test_latest_version_available"] = "4.0.0";
        // line 3
        $context["test_piwikUrl"] = "https://demo.matomo.org/";
        // line 4
        ob_start();
        echo \Piwik\piwik_escape_filter($this->env, (((((isset($context["piwikUrl"]) || array_key_exists("piwikUrl", $context) ? $context["piwikUrl"] : (function () { throw new RuntimeError('Variable "piwikUrl" does not exist.', 4, $this->source); })()) == "http://demo.matomo.org/") || ((isset($context["piwikUrl"]) || array_key_exists("piwikUrl", $context) ? $context["piwikUrl"] : (function () { throw new RuntimeError('Variable "piwikUrl" does not exist.', 4, $this->source); })()) == "https://demo.matomo.org/")) || ((isset($context["piwikUrl"]) || array_key_exists("piwikUrl", $context) ? $context["piwikUrl"] : (function () { throw new RuntimeError('Variable "piwikUrl" does not exist.', 4, $this->source); })()) == "https://demo.matomo.cloud/")) || ((isset($context["piwikUrl"]) || array_key_exists("piwikUrl", $context) ? $context["piwikUrl"] : (function () { throw new RuntimeError('Variable "piwikUrl" does not exist.', 4, $this->source); })()) == "http://demo.matomo.cloud/")), "html", null, true);
        $context["isPiwikDemo"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 5
        echo "
";
        // line 6
        ob_start();
        // line 7
        echo "    <span id=\"updateCheckLinkContainer\">
        <span class=\"icon icon-fixed icon-reload\"></span>
                ";
        // line 9
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreHome_CheckForUpdates"), "html", null, true);
        echo "
    </span>
";
        $context["updateCheck"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 12
        echo "
";
        // line 13
        if (((((((isset($context["latest_version_available"]) || array_key_exists("latest_version_available", $context) ? $context["latest_version_available"] : (function () { throw new RuntimeError('Variable "latest_version_available" does not exist.', 13, $this->source); })()) &&  !(isset($context["isPiwikDemo"]) || array_key_exists("isPiwikDemo", $context) ? $context["isPiwikDemo"] : (function () { throw new RuntimeError('Variable "isPiwikDemo" does not exist.', 13, $this->source); })())) && (isset($context["hasSomeViewAccess"]) || array_key_exists("hasSomeViewAccess", $context) ? $context["hasSomeViewAccess"] : (function () { throw new RuntimeError('Variable "hasSomeViewAccess" does not exist.', 13, $this->source); })())) &&  !(isset($context["isUserIsAnonymous"]) || array_key_exists("isUserIsAnonymous", $context) ? $context["isUserIsAnonymous"] : (function () { throw new RuntimeError('Variable "isUserIsAnonymous" does not exist.', 13, $this->source); })())) && (isset($context["showUpdateNotificationToUser"]) || array_key_exists("showUpdateNotificationToUser", $context) ? $context["showUpdateNotificationToUser"] : (function () { throw new RuntimeError('Variable "showUpdateNotificationToUser" does not exist.', 13, $this->source); })())) || (((isset($context["isSuperUser"]) || array_key_exists("isSuperUser", $context) ? $context["isSuperUser"] : (function () { throw new RuntimeError('Variable "isSuperUser" does not exist.', 13, $this->source); })()) && array_key_exists("isAdminArea", $context)) && (isset($context["isAdminArea"]) || array_key_exists("isAdminArea", $context) ? $context["isAdminArea"] : (function () { throw new RuntimeError('Variable "isAdminArea" does not exist.', 13, $this->source); })())))) {
            // line 14
            echo "<div piwik-expand-on-hover
     id=\"header_message\"
     class=\"piwikSelector borderedControl ";
            // line 16
            if ( !(isset($context["latest_version_available"]) || array_key_exists("latest_version_available", $context) ? $context["latest_version_available"] : (function () { throw new RuntimeError('Variable "latest_version_available" does not exist.', 16, $this->source); })())) {
                echo "header_info";
            } else {
            }
            echo " piwikTopControl ";
            if ((isset($context["latest_version_available"]) || array_key_exists("latest_version_available", $context) ? $context["latest_version_available"] : (function () { throw new RuntimeError('Variable "latest_version_available" does not exist.', 16, $this->source); })())) {
                echo "update_available";
            }
            echo "\"
        >

        ";
            // line 19
            if (((isset($context["latest_version_available"]) || array_key_exists("latest_version_available", $context) ? $context["latest_version_available"] : (function () { throw new RuntimeError('Variable "latest_version_available" does not exist.', 19, $this->source); })()) &&  !(isset($context["isPiwikDemo"]) || array_key_exists("isPiwikDemo", $context) ? $context["isPiwikDemo"] : (function () { throw new RuntimeError('Variable "isPiwikDemo" does not exist.', 19, $this->source); })()))) {
                // line 20
                echo "            ";
                if ((isset($context["isMultiServerEnvironment"]) || array_key_exists("isMultiServerEnvironment", $context) ? $context["isMultiServerEnvironment"] : (function () { throw new RuntimeError('Variable "isMultiServerEnvironment" does not exist.', 20, $this->source); })())) {
                    // line 21
                    echo "                <span class=\"title\" style=\"cursor:pointer;\">
                    ";
                    // line 22
                    echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_NewUpdatePiwikX", (isset($context["latest_version_available"]) || array_key_exists("latest_version_available", $context) ? $context["latest_version_available"] : (function () { throw new RuntimeError('Variable "latest_version_available" does not exist.', 22, $this->source); })())), "html", null, true);
                    echo "
                    <span class=\"icon-warning\"></span>
                </span>
            ";
                } else {
                    // line 26
                    echo "                <a class=\"title\" href=\"?module=CoreUpdater&action=newVersionAvailable\" style=\"cursor:pointer;\">
                    ";
                    // line 27
                    echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_NewUpdatePiwikX", (isset($context["latest_version_available"]) || array_key_exists("latest_version_available", $context) ? $context["latest_version_available"] : (function () { throw new RuntimeError('Variable "latest_version_available" does not exist.', 27, $this->source); })())), "html", null, true);
                    echo "
                    <span class=\"icon-warning\"></span>
                </a>
            ";
                }
                // line 31
                echo "        ";
            } elseif ((((isset($context["isSuperUser"]) || array_key_exists("isSuperUser", $context) ? $context["isSuperUser"] : (function () { throw new RuntimeError('Variable "isSuperUser" does not exist.', 31, $this->source); })()) && array_key_exists("isAdminArea", $context)) && (isset($context["isAdminArea"]) || array_key_exists("isAdminArea", $context) ? $context["isAdminArea"] : (function () { throw new RuntimeError('Variable "isAdminArea" does not exist.', 31, $this->source); })()))) {
                // line 32
                echo "            ";
                if ((isset($context["isInternetEnabled"]) || array_key_exists("isInternetEnabled", $context) ? $context["isInternetEnabled"] : (function () { throw new RuntimeError('Variable "isInternetEnabled" does not exist.', 32, $this->source); })())) {
                    // line 33
                    echo "            <a class=\"title\">";
                    echo (isset($context["updateCheck"]) || array_key_exists("updateCheck", $context) ? $context["updateCheck"] : (function () { throw new RuntimeError('Variable "updateCheck" does not exist.', 33, $this->source); })());
                    echo "</a>
            ";
                } else {
                    // line 35
                    echo "            <a class=\"title\" href=\"https://matomo.org/changelog/\" target=\"_blank\" rel=\"noreferrer noopener\">
                <span id=\"updateCheckLinkContainer\">
                    ";
                    // line 37
                    echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreHome_SeeAvailableVersions"), "html", null, true);
                    echo "
                </span>
            </a>
            ";
                }
                // line 41
                echo "        ";
            }
            // line 42
            echo "
    <div class=\"dropdown positionInViewport\">
        ";
            // line 44
            if (((isset($context["latest_version_available"]) || array_key_exists("latest_version_available", $context) ? $context["latest_version_available"] : (function () { throw new RuntimeError('Variable "latest_version_available" does not exist.', 44, $this->source); })()) && (isset($context["isSuperUser"]) || array_key_exists("isSuperUser", $context) ? $context["isSuperUser"] : (function () { throw new RuntimeError('Variable "isSuperUser" does not exist.', 44, $this->source); })()))) {
                // line 45
                echo "            ";
                if ((isset($context["isMultiServerEnvironment"]) || array_key_exists("isMultiServerEnvironment", $context) ? $context["isMultiServerEnvironment"] : (function () { throw new RuntimeError('Variable "isMultiServerEnvironment" does not exist.', 45, $this->source); })())) {
                    // line 46
                    echo "                ";
                    echo $this->env->getFilter('translate')->getCallable()("CoreHome_OneClickUpdateNotPossibleAsMultiServerEnvironment", (("<a rel='noreferrer noopener' href='https://builds.matomo.org/piwik-" . (isset($context["latest_version_available"]) || array_key_exists("latest_version_available", $context) ? $context["latest_version_available"] : (function () { throw new RuntimeError('Variable "latest_version_available" does not exist.', 46, $this->source); })())) . ".zip'>builds.matomo.org</a>"));
                    echo "
            ";
                } else {
                    // line 48
                    echo "                ";
                    echo $this->env->getFilter('translate')->getCallable()("General_PiwikXIsAvailablePleaseUpdateNow", (isset($context["latest_version_available"]) || array_key_exists("latest_version_available", $context) ? $context["latest_version_available"] : (function () { throw new RuntimeError('Variable "latest_version_available" does not exist.', 48, $this->source); })()), "<br /><a href='index.php?module=CoreUpdater&amp;action=newVersionAvailable'>", "</a>", "<a target='_blank' rel='noreferrer noopener' href='https://matomo.org/changelog/'>", "</a>");
                    echo "
            ";
                }
                // line 50
                echo "            <br />
        ";
            } elseif ((((            // line 51
(isset($context["latest_version_available"]) || array_key_exists("latest_version_available", $context) ? $context["latest_version_available"] : (function () { throw new RuntimeError('Variable "latest_version_available" does not exist.', 51, $this->source); })()) &&  !(isset($context["isPiwikDemo"]) || array_key_exists("isPiwikDemo", $context) ? $context["isPiwikDemo"] : (function () { throw new RuntimeError('Variable "isPiwikDemo" does not exist.', 51, $this->source); })())) && (isset($context["hasSomeViewAccess"]) || array_key_exists("hasSomeViewAccess", $context) ? $context["hasSomeViewAccess"] : (function () { throw new RuntimeError('Variable "hasSomeViewAccess" does not exist.', 51, $this->source); })())) &&  !(isset($context["isUserIsAnonymous"]) || array_key_exists("isUserIsAnonymous", $context) ? $context["isUserIsAnonymous"] : (function () { throw new RuntimeError('Variable "isUserIsAnonymous" does not exist.', 51, $this->source); })()))) {
                // line 52
                echo "            ";
                $context["updateSubject"] = \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_NewUpdatePiwikX", (isset($context["latest_version_available"]) || array_key_exists("latest_version_available", $context) ? $context["latest_version_available"] : (function () { throw new RuntimeError('Variable "latest_version_available" does not exist.', 52, $this->source); })())), "url");
                // line 53
                echo "            ";
                echo $this->env->getFilter('translate')->getCallable()("General_PiwikXIsAvailablePleaseNotifyPiwikAdmin", (("<a target='_blank' rel='noreferrer noopener' href='https://matomo.org/'>Matomo</a> <a target='_blank' rel='noreferrer noopener' href='https://matomo.org/changelog/'>" . (isset($context["latest_version_available"]) || array_key_exists("latest_version_available", $context) ? $context["latest_version_available"] : (function () { throw new RuntimeError('Variable "latest_version_available" does not exist.', 53, $this->source); })())) . "</a>"), (((("<a href='mailto:" . \Piwik\piwik_escape_filter($this->env, (isset($context["contactEmail"]) || array_key_exists("contactEmail", $context) ? $context["contactEmail"] : (function () { throw new RuntimeError('Variable "contactEmail" does not exist.', 53, $this->source); })()), "url")) . "?subject=") . (isset($context["updateSubject"]) || array_key_exists("updateSubject", $context) ? $context["updateSubject"] : (function () { throw new RuntimeError('Variable "updateSubject" does not exist.', 53, $this->source); })())) . "'>"), "</a>");
                echo "
            <br />
        ";
            }
            // line 56
            echo "
        ";
            // line 57
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_YouAreCurrentlyUsing", (isset($context["piwik_version"]) || array_key_exists("piwik_version", $context) ? $context["piwik_version"] : (function () { throw new RuntimeError('Variable "piwik_version" does not exist.', 57, $this->source); })())), "html", null, true);
            echo "
    </div>
</div>

<span class=\"icon icon-arrowup\"></span>
<div style=\"clear:right\"></div>
";
        } else {
            // line 64
            echo "<span class=\"icon icon-arrowup\"></span>
";
        }
    }

    public function getTemplateName()
    {
        return "@CoreHome/_headerMessage.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 64,  172 => 57,  169 => 56,  162 => 53,  159 => 52,  157 => 51,  154 => 50,  148 => 48,  142 => 46,  139 => 45,  137 => 44,  133 => 42,  130 => 41,  123 => 37,  119 => 35,  113 => 33,  110 => 32,  107 => 31,  100 => 27,  97 => 26,  90 => 22,  87 => 21,  84 => 20,  82 => 19,  69 => 16,  65 => 14,  63 => 13,  60 => 12,  54 => 9,  50 => 7,  48 => 6,  45 => 5,  41 => 4,  39 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# testing, remove test_ from var names #}
{% set test_latest_version_available=\"4.0.0\" %}
{% set test_piwikUrl='https://demo.matomo.org/' %}
{% set isPiwikDemo %}{{ piwikUrl == 'http://demo.matomo.org/' or piwikUrl == 'https://demo.matomo.org/' or piwikUrl == 'https://demo.matomo.cloud/' or piwikUrl == 'http://demo.matomo.cloud/' }}{% endset %}

{% set updateCheck %}
    <span id=\"updateCheckLinkContainer\">
        <span class=\"icon icon-fixed icon-reload\"></span>
                {{ 'CoreHome_CheckForUpdates'|translate }}
    </span>
{% endset %}

{% if (latest_version_available and not isPiwikDemo and hasSomeViewAccess and not isUserIsAnonymous and showUpdateNotificationToUser) or (isSuperUser and isAdminArea is defined and isAdminArea) %}
<div piwik-expand-on-hover
     id=\"header_message\"
     class=\"piwikSelector borderedControl {% if not latest_version_available %}header_info{% else %}{% endif %} piwikTopControl {% if latest_version_available %}update_available{% endif %}\"
        >

        {% if latest_version_available and not isPiwikDemo %}
            {% if isMultiServerEnvironment %}
                <span class=\"title\" style=\"cursor:pointer;\">
                    {{ 'General_NewUpdatePiwikX'|translate(latest_version_available) }}
                    <span class=\"icon-warning\"></span>
                </span>
            {% else %}
                <a class=\"title\" href=\"?module=CoreUpdater&action=newVersionAvailable\" style=\"cursor:pointer;\">
                    {{ 'General_NewUpdatePiwikX'|translate(latest_version_available) }}
                    <span class=\"icon-warning\"></span>
                </a>
            {% endif %}
        {% elseif isSuperUser and isAdminArea is defined and isAdminArea %}
            {% if isInternetEnabled %}
            <a class=\"title\">{{ updateCheck|raw }}</a>
            {% else %}
            <a class=\"title\" href=\"https://matomo.org/changelog/\" target=\"_blank\" rel=\"noreferrer noopener\">
                <span id=\"updateCheckLinkContainer\">
                    {{ 'CoreHome_SeeAvailableVersions'|translate }}
                </span>
            </a>
            {% endif %}
        {% endif %}

    <div class=\"dropdown positionInViewport\">
        {% if latest_version_available and isSuperUser %}
            {% if isMultiServerEnvironment %}
                {{ 'CoreHome_OneClickUpdateNotPossibleAsMultiServerEnvironment'|translate(\"<a rel='noreferrer noopener' href='https://builds.matomo.org/piwik-\" ~ latest_version_available ~ \".zip'>builds.matomo.org</a>\")|raw }}
            {% else %}
                {{ 'General_PiwikXIsAvailablePleaseUpdateNow'|translate(latest_version_available,\"<br /><a href='index.php?module=CoreUpdater&amp;action=newVersionAvailable'>\",\"</a>\",\"<a target='_blank' rel='noreferrer noopener' href='https://matomo.org/changelog/'>\",\"</a>\")|raw }}
            {% endif %}
            <br />
        {% elseif latest_version_available and not isPiwikDemo and hasSomeViewAccess and not isUserIsAnonymous %}
            {% set updateSubject = 'General_NewUpdatePiwikX'|translate(latest_version_available)|e('url') %}
            {{ 'General_PiwikXIsAvailablePleaseNotifyPiwikAdmin'|translate(\"<a target='_blank' rel='noreferrer noopener' href='https://matomo.org/'>Matomo</a> <a target='_blank' rel='noreferrer noopener' href='https://matomo.org/changelog/'>\" ~ latest_version_available ~ \"</a>\", \"<a href='mailto:\" ~ contactEmail|e('url') ~ \"?subject=\" ~ updateSubject ~ \"'>\", \"</a>\")|raw }}
            <br />
        {% endif %}

        {{ 'General_YouAreCurrentlyUsing'|translate(piwik_version) }}
    </div>
</div>

<span class=\"icon icon-arrowup\"></span>
<div style=\"clear:right\"></div>
{% else %}
<span class=\"icon icon-arrowup\"></span>
{% endif %}
", "@CoreHome/_headerMessage.twig", "/var/www/cse135.monster/public_html/matomo/plugins/CoreHome/templates/_headerMessage.twig");
    }
}
