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

/* @CoreAdminHome/home.twig */
class __TwigTemplate_525ca474b7e37f9345b3fa2b6a806ad0 extends Template
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
        $this->parent = $this->loadTemplate("admin.twig", "@CoreAdminHome/home.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    ";
        ob_start();
        // line 7
        echo "        <div piwik-content-block content-title=\"";
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreAdminHome_NeedHelp"), "html", null, true);
        echo "\">
            <div>
                ";
        // line 9
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreAdminHome_HowToGetHelp"), "html", null, true);
        echo "
                <br />
                <br />
                <a href=\"";
        // line 12
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFunction('linkTo')->getCallable()(["module" => "Feedback", "action" => "index"]), "html", null, true);
        echo "\">";
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreAdminHome_LearnMore"), "html", null, true);
        echo "</a>
            </div>
        </div>
    ";
        $context["feedbackHelp"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 16
        echo "
    ";
        // line 17
        if ((isset($context["isSuperUser"]) || array_key_exists("isSuperUser", $context) ? $context["isSuperUser"] : (function () { throw new RuntimeError('Variable "isSuperUser" does not exist.', 17, $this->source); })())) {
            // line 18
            echo "        <div class=\"row\">
            ";
            // line 19
            if (((isset($context["hasQuickLinks"]) || array_key_exists("hasQuickLinks", $context) ? $context["hasQuickLinks"] : (function () { throw new RuntimeError('Variable "hasQuickLinks" does not exist.', 19, $this->source); })()) || (isset($context["hasSystemSummary"]) || array_key_exists("hasSystemSummary", $context) ? $context["hasSystemSummary"] : (function () { throw new RuntimeError('Variable "hasSystemSummary" does not exist.', 19, $this->source); })()))) {
                // line 20
                echo "                <div class=\"col s12 ";
                if ((isset($context["isFeedbackEnabled"]) || array_key_exists("isFeedbackEnabled", $context) ? $context["isFeedbackEnabled"] : (function () { throw new RuntimeError('Variable "isFeedbackEnabled" does not exist.', 20, $this->source); })())) {
                    echo "m4";
                } else {
                    echo "m6";
                }
                echo "\">
                    ";
                // line 21
                if ((isset($context["hasQuickLinks"]) || array_key_exists("hasQuickLinks", $context) ? $context["hasQuickLinks"] : (function () { throw new RuntimeError('Variable "hasQuickLinks" does not exist.', 21, $this->source); })())) {
                    echo "<div piwik-widget-loader='{\"module\":\"CoreHome\",\"action\":\"quickLinks\"}'></div>";
                }
                // line 22
                echo "                    ";
                if ((isset($context["hasSystemSummary"]) || array_key_exists("hasSystemSummary", $context) ? $context["hasSystemSummary"] : (function () { throw new RuntimeError('Variable "hasSystemSummary" does not exist.', 22, $this->source); })())) {
                    echo "<div piwik-widget-loader='{\"module\":\"CoreHome\",\"action\":\"getSystemSummary\"}'></div>";
                }
                // line 23
                echo "                </div>
            ";
            }
            // line 25
            echo "            ";
            if (((isset($context["hasDiagnostics"]) || array_key_exists("hasDiagnostics", $context) ? $context["hasDiagnostics"] : (function () { throw new RuntimeError('Variable "hasDiagnostics" does not exist.', 25, $this->source); })()) || (isset($context["hasTrackingFailures"]) || array_key_exists("hasTrackingFailures", $context) ? $context["hasTrackingFailures"] : (function () { throw new RuntimeError('Variable "hasTrackingFailures" does not exist.', 25, $this->source); })()))) {
                // line 26
                echo "                <div class=\"col s12 ";
                if ((isset($context["isFeedbackEnabled"]) || array_key_exists("isFeedbackEnabled", $context) ? $context["isFeedbackEnabled"] : (function () { throw new RuntimeError('Variable "isFeedbackEnabled" does not exist.', 26, $this->source); })())) {
                    echo "m4";
                } else {
                    echo "m6";
                }
                echo "\">
                    ";
                // line 27
                if ((isset($context["hasDiagnostics"]) || array_key_exists("hasDiagnostics", $context) ? $context["hasDiagnostics"] : (function () { throw new RuntimeError('Variable "hasDiagnostics" does not exist.', 27, $this->source); })())) {
                    // line 28
                    echo "                    <div piwik-widget-loader='{\"module\":\"Installation\",\"action\":\"getSystemCheck\"}'></div>
                    ";
                }
                // line 30
                echo "                    ";
                if ((isset($context["hasTrackingFailures"]) || array_key_exists("hasTrackingFailures", $context) ? $context["hasTrackingFailures"] : (function () { throw new RuntimeError('Variable "hasTrackingFailures" does not exist.', 30, $this->source); })())) {
                    // line 31
                    echo "                    <div piwik-widget-loader='{\"module\":\"CoreAdminHome\",\"action\":\"getTrackingFailures\"}'></div>
                    ";
                }
                // line 33
                echo "                </div>
            ";
            }
            // line 35
            echo "            <div class=\"col s12 m4\">
            ";
            // line 36
            if ((isset($context["isFeedbackEnabled"]) || array_key_exists("isFeedbackEnabled", $context) ? $context["isFeedbackEnabled"] : (function () { throw new RuntimeError('Variable "isFeedbackEnabled" does not exist.', 36, $this->source); })())) {
                // line 37
                echo "                ";
                echo (isset($context["feedbackHelp"]) || array_key_exists("feedbackHelp", $context) ? $context["feedbackHelp"] : (function () { throw new RuntimeError('Variable "feedbackHelp" does not exist.', 37, $this->source); })());
                echo "
            ";
            }
            // line 39
            echo "            </div>
        </div>
    ";
        } elseif (        // line 41
(isset($context["isFeedbackEnabled"]) || array_key_exists("isFeedbackEnabled", $context) ? $context["isFeedbackEnabled"] : (function () { throw new RuntimeError('Variable "isFeedbackEnabled" does not exist.', 41, $this->source); })())) {
            // line 42
            echo "        ";
            echo (isset($context["feedbackHelp"]) || array_key_exists("feedbackHelp", $context) ? $context["feedbackHelp"] : (function () { throw new RuntimeError('Variable "feedbackHelp" does not exist.', 42, $this->source); })());
            echo "
    ";
        }
        // line 44
        echo "
    ";
        // line 45
        if ((((isset($context["hasPremiumFeatures"]) || array_key_exists("hasPremiumFeatures", $context) ? $context["hasPremiumFeatures"] : (function () { throw new RuntimeError('Variable "hasPremiumFeatures" does not exist.', 45, $this->source); })()) && (isset($context["isMarketplaceEnabled"]) || array_key_exists("isMarketplaceEnabled", $context) ? $context["isMarketplaceEnabled"] : (function () { throw new RuntimeError('Variable "isMarketplaceEnabled" does not exist.', 45, $this->source); })())) && (isset($context["isInternetEnabled"]) || array_key_exists("isInternetEnabled", $context) ? $context["isInternetEnabled"] : (function () { throw new RuntimeError('Variable "isInternetEnabled" does not exist.', 45, $this->source); })()))) {
            // line 46
            echo "        <div piwik-widget-loader='{\"module\":\"Marketplace\",\"action\":\"getPremiumFeatures\"}'></div>
    ";
        }
        // line 48
        echo "    ";
        if ((((isset($context["hasNewPlugins"]) || array_key_exists("hasNewPlugins", $context) ? $context["hasNewPlugins"] : (function () { throw new RuntimeError('Variable "hasNewPlugins" does not exist.', 48, $this->source); })()) && (isset($context["isMarketplaceEnabled"]) || array_key_exists("isMarketplaceEnabled", $context) ? $context["isMarketplaceEnabled"] : (function () { throw new RuntimeError('Variable "isMarketplaceEnabled" does not exist.', 48, $this->source); })())) && (isset($context["isInternetEnabled"]) || array_key_exists("isInternetEnabled", $context) ? $context["isInternetEnabled"] : (function () { throw new RuntimeError('Variable "isInternetEnabled" does not exist.', 48, $this->source); })()))) {
            // line 49
            echo "        <div piwik-widget-loader='{\"module\":\"Marketplace\",\"action\":\"getNewPlugins\", \"isAdminPage\": \"1\"}'></div>
    ";
        }
        // line 51
        echo "
    ";
        // line 52
        echo $this->env->getFunction('postEvent')->getCallable()("Template.adminHome");
        echo "

    <style type=\"text/css\">
        #content .piwik-donate-call {
            padding: 0;
            border: 0;
            max-width: none;
        }
        .theWidgetContent .rss {
            margin: -10px -15px;
        }
    </style>

    ";
        // line 65
        if (((isset($context["hasDonateForm"]) || array_key_exists("hasDonateForm", $context) ? $context["hasDonateForm"] : (function () { throw new RuntimeError('Variable "hasDonateForm" does not exist.', 65, $this->source); })()) || (isset($context["hasPiwikBlog"]) || array_key_exists("hasPiwikBlog", $context) ? $context["hasPiwikBlog"] : (function () { throw new RuntimeError('Variable "hasPiwikBlog" does not exist.', 65, $this->source); })()))) {
            // line 66
            echo "        <div class=\"row\">
            ";
            // line 67
            if ((isset($context["hasDonateForm"]) || array_key_exists("hasDonateForm", $context) ? $context["hasDonateForm"] : (function () { throw new RuntimeError('Variable "hasDonateForm" does not exist.', 67, $this->source); })())) {
                // line 68
                echo "                <div class=\"col s12 ";
                if ((isset($context["hasPiwikBlog"]) || array_key_exists("hasPiwikBlog", $context) ? $context["hasPiwikBlog"] : (function () { throw new RuntimeError('Variable "hasPiwikBlog" does not exist.', 68, $this->source); })())) {
                    echo "m6";
                }
                echo "\">
                    <div piwik-widget-loader='{\"module\":\"CoreHome\",\"action\":\"getDonateForm\",\"widget\": \"0\"}'></div>
                </div>
            ";
            }
            // line 72
            echo "            ";
            if (((isset($context["hasPiwikBlog"]) || array_key_exists("hasPiwikBlog", $context) ? $context["hasPiwikBlog"] : (function () { throw new RuntimeError('Variable "hasPiwikBlog" does not exist.', 72, $this->source); })()) && (isset($context["isInternetEnabled"]) || array_key_exists("isInternetEnabled", $context) ? $context["isInternetEnabled"] : (function () { throw new RuntimeError('Variable "isInternetEnabled" does not exist.', 72, $this->source); })()))) {
                // line 73
                echo "                <div class=\"col s12 ";
                if ((isset($context["hasDonateForm"]) || array_key_exists("hasDonateForm", $context) ? $context["hasDonateForm"] : (function () { throw new RuntimeError('Variable "hasDonateForm" does not exist.', 73, $this->source); })())) {
                    echo "m6";
                }
                echo "\">
                    <div piwik-widget-loader='{\"module\":\"RssWidget\",\"action\":\"rssPiwik\"}'></div>
                </div>
            ";
            }
            // line 77
            echo "        </div>
    ";
        }
        // line 79
        echo "
";
    }

    public function getTemplateName()
    {
        return "@CoreAdminHome/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 79,  228 => 77,  218 => 73,  215 => 72,  205 => 68,  203 => 67,  200 => 66,  198 => 65,  182 => 52,  179 => 51,  175 => 49,  172 => 48,  168 => 46,  166 => 45,  163 => 44,  157 => 42,  155 => 41,  151 => 39,  145 => 37,  143 => 36,  140 => 35,  136 => 33,  132 => 31,  129 => 30,  125 => 28,  123 => 27,  114 => 26,  111 => 25,  107 => 23,  102 => 22,  98 => 21,  89 => 20,  87 => 19,  84 => 18,  82 => 17,  79 => 16,  70 => 12,  64 => 9,  58 => 7,  55 => 6,  51 => 5,  46 => 1,  42 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin.twig' %}

{% set title %}{{ 'CoreAdminHome_MenuGeneralSettings'|translate }}{% endset %}

{% block content %}
    {% set feedbackHelp %}
        <div piwik-content-block content-title=\"{{ 'CoreAdminHome_NeedHelp'|translate }}\">
            <div>
                {{ 'CoreAdminHome_HowToGetHelp'|translate }}
                <br />
                <br />
                <a href=\"{{ linkTo({'module': 'Feedback', 'action': 'index'}) }}\">{{ 'CoreAdminHome_LearnMore'|translate }}</a>
            </div>
        </div>
    {% endset %}

    {% if isSuperUser %}
        <div class=\"row\">
            {% if hasQuickLinks or hasSystemSummary %}
                <div class=\"col s12 {% if isFeedbackEnabled %}m4{% else %}m6{% endif %}\">
                    {% if hasQuickLinks %}<div piwik-widget-loader='{\"module\":\"CoreHome\",\"action\":\"quickLinks\"}'></div>{% endif %}
                    {% if hasSystemSummary %}<div piwik-widget-loader='{\"module\":\"CoreHome\",\"action\":\"getSystemSummary\"}'></div>{% endif %}
                </div>
            {% endif %}
            {% if hasDiagnostics or hasTrackingFailures %}
                <div class=\"col s12 {% if isFeedbackEnabled %}m4{% else %}m6{% endif %}\">
                    {% if hasDiagnostics %}
                    <div piwik-widget-loader='{\"module\":\"Installation\",\"action\":\"getSystemCheck\"}'></div>
                    {% endif %}
                    {% if hasTrackingFailures %}
                    <div piwik-widget-loader='{\"module\":\"CoreAdminHome\",\"action\":\"getTrackingFailures\"}'></div>
                    {% endif %}
                </div>
            {% endif %}
            <div class=\"col s12 m4\">
            {% if isFeedbackEnabled %}
                {{ feedbackHelp|raw }}
            {% endif %}
            </div>
        </div>
    {% elseif isFeedbackEnabled %}
        {{ feedbackHelp|raw }}
    {% endif %}

    {% if hasPremiumFeatures and isMarketplaceEnabled and isInternetEnabled %}
        <div piwik-widget-loader='{\"module\":\"Marketplace\",\"action\":\"getPremiumFeatures\"}'></div>
    {% endif %}
    {% if hasNewPlugins and isMarketplaceEnabled and isInternetEnabled %}
        <div piwik-widget-loader='{\"module\":\"Marketplace\",\"action\":\"getNewPlugins\", \"isAdminPage\": \"1\"}'></div>
    {% endif %}

    {{ postEvent('Template.adminHome') }}

    <style type=\"text/css\">
        #content .piwik-donate-call {
            padding: 0;
            border: 0;
            max-width: none;
        }
        .theWidgetContent .rss {
            margin: -10px -15px;
        }
    </style>

    {% if hasDonateForm or hasPiwikBlog %}
        <div class=\"row\">
            {% if hasDonateForm %}
                <div class=\"col s12 {% if hasPiwikBlog %}m6{% endif %}\">
                    <div piwik-widget-loader='{\"module\":\"CoreHome\",\"action\":\"getDonateForm\",\"widget\": \"0\"}'></div>
                </div>
            {% endif %}
            {% if hasPiwikBlog and isInternetEnabled %}
                <div class=\"col s12 {% if hasDonateForm %}m6{% endif %}\">
                    <div piwik-widget-loader='{\"module\":\"RssWidget\",\"action\":\"rssPiwik\"}'></div>
                </div>
            {% endif %}
        </div>
    {% endif %}

{% endblock %}
", "@CoreAdminHome/home.twig", "/var/www/cse135.monster/public_html/matomo/plugins/CoreAdminHome/templates/home.twig");
    }
}
