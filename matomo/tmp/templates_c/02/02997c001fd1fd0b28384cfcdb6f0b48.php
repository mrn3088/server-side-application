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

/* @SitesManager/siteWithoutData.twig */
class __TwigTemplate_2554fcc43caedccdd53857935756706a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'notification' => [$this, 'block_notification'],
            'topcontrols' => [$this, 'block_topcontrols'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "dashboard.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("dashboard.twig", "@SitesManager/siteWithoutData.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_notification($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        $this->loadTemplate("@CoreHome/_notifications.twig", "@SitesManager/siteWithoutData.twig", 4)->display($context);
    }

    // line 7
    public function block_topcontrols($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "    ";
        $this->loadTemplate("@CoreHome/_siteSelectHeader.twig", "@SitesManager/siteWithoutData.twig", 8)->display($context);
    }

    // line 11
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "
    <script type=\"text/javascript\" charset=\"utf-8\">
        \$(document).ready(function () {
            \$('<div />').insertAfter('.site-without-data').liveWidget({
                interval: 1000,
                onUpdate: function () {
                    // reload page as soon as a visit was detected
                    broadcast.propagateNewPage('date=today');
                },
                dataUrlParams: {
                    module: 'Live',
                    action: 'getLastVisitsStart'
                }
            });
        });
    </script>

    <div class=\"site-without-data\">
        <div piwik-content-block content-title=\"";
        // line 30
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataTitle"), "html_attr");
        echo " 🚀\">

            <p>&nbsp;</p>
            <p>";
        // line 33
        echo $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataDescription", (((("<a href=\"mailto:?subject=" . \Piwik\piwik_escape_filter($this->env, twig_urlencode_filter($this->env->getFilter('translate')->getCallable()("SitesManager_EmailInstructionsSubject")), "html_attr")) . "&body=") . \Piwik\piwik_escape_filter($this->env, twig_urlencode_filter((isset($context["emailBody"]) || array_key_exists("emailBody", $context) ? $context["emailBody"] : (function () { throw new RuntimeError('Variable "emailBody" does not exist.', 33, $this->source); })())), "html_attr")) . "\">"), "</a>");
        echo "</p>
            <p>";
        // line 34
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataMessageDisappears"), "html", null, true);
        echo "</p>

            <h3>";
        // line 36
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataChoosePreferredWay"), "html", null, true);
        echo "</h3>

            <div piwik-widget-loader='{\"module\":\"SitesManager\",\"action\":\"siteWithoutDataTabs\"}' loading-message=\"";
        // line 38
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_DetectingYourSite"), "html_attr");
        echo "...\"></div>

            <hr>

            <a class=\"btn\" id=\"emailTrackingCodeBtn\"
                href=\"mailto:?subject=";
        // line 43
        echo \Piwik\piwik_escape_filter($this->env, twig_urlencode_filter($this->env->getFilter('translate')->getCallable()("SitesManager_EmailInstructionsSubject")), "html_attr");
        echo "&body=";
        echo \Piwik\piwik_escape_filter($this->env, twig_urlencode_filter((isset($context["emailBody"]) || array_key_exists("emailBody", $context) ? $context["emailBody"] : (function () { throw new RuntimeError('Variable "emailBody" does not exist.', 43, $this->source); })())), "html_attr");
        echo "\"
            >";
        // line 44
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_EmailInstructionsButton"), "html", null, true);
        echo "</a>

            ";
        // line 46
        echo $this->env->getFunction('postEvent')->getCallable()("Template.siteWithoutData.afterIntro");
        echo "
            <br />
            <br />
            <a href=\"";
        // line 49
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFunction('linkTo')->getCallable()(["module" => "SitesManager", "action" => "ignoreNoDataMessage"]), "html", null, true);
        echo "\"
               class=\"btn ignoreSitesWithoutData\"
            >
                ";
        // line 52
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_SiteWithoutDataIgnoreMessage"), "html", null, true);
        echo "
            </a>
        </div>

        ";
        // line 56
        echo $this->env->getFunction('postEvent')->getCallable()("Template.siteWithoutData.afterTrackingHelp");
        echo "
    </div>

";
    }

    public function getTemplateName()
    {
        return "@SitesManager/siteWithoutData.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 56,  141 => 52,  135 => 49,  129 => 46,  124 => 44,  118 => 43,  110 => 38,  105 => 36,  100 => 34,  96 => 33,  90 => 30,  70 => 12,  66 => 11,  61 => 8,  57 => 7,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"dashboard.twig\" %}

{% block notification %}
    {% include \"@CoreHome/_notifications.twig\" %}
{% endblock %}

{% block topcontrols %}
    {% include \"@CoreHome/_siteSelectHeader.twig\" %}
{% endblock %}

{% block content %}

    <script type=\"text/javascript\" charset=\"utf-8\">
        \$(document).ready(function () {
            \$('<div />').insertAfter('.site-without-data').liveWidget({
                interval: 1000,
                onUpdate: function () {
                    // reload page as soon as a visit was detected
                    broadcast.propagateNewPage('date=today');
                },
                dataUrlParams: {
                    module: 'Live',
                    action: 'getLastVisitsStart'
                }
            });
        });
    </script>

    <div class=\"site-without-data\">
        <div piwik-content-block content-title=\"{{ 'SitesManager_SiteWithoutDataTitle'|translate|e('html_attr') }} 🚀\">

            <p>&nbsp;</p>
            <p>{{ 'SitesManager_SiteWithoutDataDescription'|translate('<a href=\"mailto:?subject=' ~ 'SitesManager_EmailInstructionsSubject'|translate|url_encode|e('html_attr') ~ '&body=' ~ emailBody|url_encode|e('html_attr') ~ '\">', '</a>')|raw }}</p>
            <p>{{ 'SitesManager_SiteWithoutDataMessageDisappears'|translate }}</p>

            <h3>{{ 'SitesManager_SiteWithoutDataChoosePreferredWay'|translate }}</h3>

            <div piwik-widget-loader='{\"module\":\"SitesManager\",\"action\":\"siteWithoutDataTabs\"}' loading-message=\"{{ 'SitesManager_DetectingYourSite'|translate|e('html_attr') }}...\"></div>

            <hr>

            <a class=\"btn\" id=\"emailTrackingCodeBtn\"
                href=\"mailto:?subject={{ 'SitesManager_EmailInstructionsSubject'|translate|url_encode|e('html_attr') }}&body={{ emailBody|url_encode|e('html_attr') }}\"
            >{{ 'SitesManager_EmailInstructionsButton'|translate }}</a>

            {{ postEvent('Template.siteWithoutData.afterIntro') }}
            <br />
            <br />
            <a href=\"{{ linkTo({module: 'SitesManager', action: 'ignoreNoDataMessage'}) }}\"
               class=\"btn ignoreSitesWithoutData\"
            >
                {{ 'SitesManager_SiteWithoutDataIgnoreMessage'|translate }}
            </a>
        </div>

        {{ postEvent('Template.siteWithoutData.afterTrackingHelp') }}
    </div>

{% endblock %}
", "@SitesManager/siteWithoutData.twig", "/var/www/cse135.monster/public_html/matomo/plugins/SitesManager/templates/siteWithoutData.twig");
    }
}
