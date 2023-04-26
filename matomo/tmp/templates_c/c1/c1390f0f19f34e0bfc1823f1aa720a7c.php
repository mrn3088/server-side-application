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

/* @Live/_actionCommon.twig */
class __TwigTemplate_ca3521f1be909d68ebdb048eba8db93f extends Template
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
        echo "<li class=\"";
        if (twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "goalName", [], "any", true, true, false, 1)) {
            echo "goal";
        } else {
            echo "action";
        }
        echo "\"
    title=\"";
        // line 2
        echo $this->env->getFunction('postEvent')->getCallable()("Live.renderActionTooltip", (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 2, $this->source); })()), (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 2, $this->source); })()));
        echo "\">
    <div>
        ";
        // line 5
        echo "        ";
        if ( !twig_test_empty(((twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "pageTitle", [], "any", true, true, false, 5)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "pageTitle", [], "any", false, false, false, 5), false)) : (false)))) {
            // line 6
            echo "            <span class=\"truncated-text-line\">";
            echo $this->env->getFilter('rawSafeDecoded')->getCallable()(twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 6, $this->source); })()), "pageTitle", [], "any", false, false, false, 6));
            echo "</span>
        ";
        }
        // line 8
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "siteSearchKeyword", [], "any", true, true, false, 8)) {
            // line 9
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 9, $this->source); })()), "type", [], "any", false, false, false, 9) == "search")) {
                // line 10
                echo "                <img src='";
                echo \Piwik\piwik_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "iconSVG", [], "any", true, true, false, 10)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "iconSVG", [], "any", false, false, false, 10), twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 10, $this->source); })()), "icon", [], "any", false, false, false, 10))) : (twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 10, $this->source); })()), "icon", [], "any", false, false, false, 10))), "html", null, true);
                echo "' title='";
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Actions_SubmenuSitesearch"), "html", null, true);
                echo "'
                     class=\"action-list-action-icon search\">
            ";
            }
            // line 13
            echo "            <span class=\"truncated-text-line\">";
            echo $this->env->getFilter('rawSafeDecoded')->getCallable()(twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 13, $this->source); })()), "siteSearchKeyword", [], "any", false, false, false, 13));
            echo "</span>
        ";
        }
        // line 15
        echo "        ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 15, $this->source); })()), "url", [], "any", false, false, false, 15))) {
            // line 16
            echo "            ";
            if ( !twig_test_empty(((twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "iconSVG", [], "any", true, true, false, 16)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "iconSVG", [], "any", false, false, false, 16), twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 16, $this->source); })()), "icon", [], "any", false, false, false, 16))) : (twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 16, $this->source); })()), "icon", [], "any", false, false, false, 16))))) {
                // line 17
                echo "                <img src='";
                echo \Piwik\piwik_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "iconSVG", [], "any", true, true, false, 17)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "iconSVG", [], "any", false, false, false, 17), twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 17, $this->source); })()), "icon", [], "any", false, false, false, 17))) : (twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 17, $this->source); })()), "icon", [], "any", false, false, false, 17))), "html", null, true);
                echo "' class=\"action-list-action-icon ";
                echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 17, $this->source); })()), "type", [], "any", false, false, false, 17), "html", null, true);
                echo "\">
            ";
            }
            // line 19
            echo "            ";
            if (((twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 19, $this->source); })()), "type", [], "any", false, false, false, 19) == "action") &&  !twig_test_empty(((twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "pageTitle", [], "any", true, true, false, 19)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "pageTitle", [], "any", false, false, false, 19), false)) : (false))))) {
                echo "<p>";
            }
            // line 20
            echo "            ";
            if ((((is_string($__internal_compile_0 = twig_lower_filter($this->env, twig_trim_filter(twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 20, $this->source); })()), "url", [], "any", false, false, false, 20)))) && is_string($__internal_compile_1 = "javascript:") && ('' === $__internal_compile_1 || 0 === strpos($__internal_compile_0, $__internal_compile_1))) || (is_string($__internal_compile_2 = twig_lower_filter($this->env, twig_trim_filter(twig_get_attribute($this->env, $this->source,             // line 21
(isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 21, $this->source); })()), "url", [], "any", false, false, false, 21)))) && is_string($__internal_compile_3 = "vbscript:") && ('' === $__internal_compile_3 || 0 === strpos($__internal_compile_2, $__internal_compile_3)))) || (is_string($__internal_compile_4 = twig_lower_filter($this->env, twig_trim_filter(twig_get_attribute($this->env, $this->source,             // line 22
(isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 22, $this->source); })()), "url", [], "any", false, false, false, 22)))) && is_string($__internal_compile_5 = "data:") && ('' === $__internal_compile_5 || 0 === strpos($__internal_compile_4, $__internal_compile_5))))) {
                // line 23
                echo "                ";
                echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 23, $this->source); })()), "url", [], "any", false, false, false, 23), "html", null, true);
                echo "
            ";
            } else {
                // line 25
                echo "                <a href=\"";
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('safelink')->getCallable()(twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 25, $this->source); })()), "url", [], "any", false, false, false, 25)), "html_attr");
                echo "\" rel=\"noreferrer noopener\" target=\"_blank\"
                   class=\"action-list-url truncated-text-line\">
                    ";
                // line 27
                if ( !twig_length_filter($this->env, (isset($context["additionalUrls"]) || array_key_exists("additionalUrls", $context) ? $context["additionalUrls"] : (function () { throw new RuntimeError('Variable "additionalUrls" does not exist.', 27, $this->source); })()))) {
                    // line 28
                    echo "                        ";
                    // line 29
                    echo "                        ";
                    echo \Piwik\piwik_escape_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 29, $this->source); })()), "url", [], "any", false, false, false, 29), [((isset($context["mainUrl"]) || array_key_exists("mainUrl", $context) ? $context["mainUrl"] : (function () { throw new RuntimeError('Variable "mainUrl" does not exist.', 29, $this->source); })()) . "/") => "/", "http://" => "", "https://" => ""]), "html", null, true);
                    echo "
                    ";
                } else {
                    // line 31
                    echo "                        ";
                    echo \Piwik\piwik_escape_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 31, $this->source); })()), "url", [], "any", false, false, false, 31), ["http://" => "", "https://" => ""]), "html", null, true);
                    echo "
                    ";
                }
                // line 33
                echo "                </a>
            ";
            }
            // line 35
            echo "            ";
            if (((twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 35, $this->source); })()), "type", [], "any", false, false, false, 35) == "action") &&  !twig_test_empty(((twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "pageTitle", [], "any", true, true, false, 35)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "pageTitle", [], "any", false, false, false, 35), false)) : (false))))) {
                echo "</p>";
            }
            // line 36
            echo "        ";
        } elseif ((twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 36, $this->source); })()), "type", [], "any", false, false, false, 36) != "search")) {
            // line 37
            echo "            <p>
                <span>";
            // line 38
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_NotDefined", $this->env->getFilter('translate')->getCallable()("Actions_ColumnPageURL")), "html", null, true);
            echo "</span>
            </p>
        ";
        }
        // line 41
        echo "    </div>
</li>
";
    }

    public function getTemplateName()
    {
        return "@Live/_actionCommon.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 41,  148 => 38,  145 => 37,  142 => 36,  137 => 35,  133 => 33,  127 => 31,  121 => 29,  119 => 28,  117 => 27,  111 => 25,  105 => 23,  103 => 22,  102 => 21,  100 => 20,  95 => 19,  87 => 17,  84 => 16,  81 => 15,  75 => 13,  66 => 10,  63 => 9,  60 => 8,  54 => 6,  51 => 5,  46 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<li class=\"{% if action.goalName is defined %}goal{% else %}action{% endif %}\"
    title=\"{{ postEvent('Live.renderActionTooltip', action, visitInfo) }}\">
    <div>
        {# Page view / Download / Outlink #}
        {% if action.pageTitle|default(false) is not empty %}
            <span class=\"truncated-text-line\">{{ action.pageTitle|rawSafeDecoded }}</span>
        {% endif %}
        {% if action.siteSearchKeyword is defined %}
            {% if action.type == 'search' %}
                <img src='{{ action.iconSVG|default(action.icon) }}' title='{{ 'Actions_SubmenuSitesearch'|translate }}'
                     class=\"action-list-action-icon search\">
            {% endif %}
            <span class=\"truncated-text-line\">{{ action.siteSearchKeyword|rawSafeDecoded }}</span>
        {% endif %}
        {% if action.url is not empty %}
            {% if action.iconSVG|default(action.icon) is not empty %}
                <img src='{{ action.iconSVG|default(action.icon) }}' class=\"action-list-action-icon {{ action.type }}\">
            {% endif %}
            {% if action.type == 'action' and action.pageTitle|default(false) is not empty %}<p>{% endif %}
            {% if action.url|trim|lower starts with 'javascript:' or
            action.url|trim|lower starts with 'vbscript:' or
            action.url|trim|lower starts with 'data:' %}
                {{ action.url }}
            {% else %}
                <a href=\"{{ action.url|safelink|e('html_attr') }}\" rel=\"noreferrer noopener\" target=\"_blank\"
                   class=\"action-list-url truncated-text-line\">
                    {% if not additionalUrls|length %}
                        {# remove main url from urls if site has no additional urls defined #}
                        {{ action.url|replace({(mainUrl~'/'): '/', 'http://': '', 'https://': ''}) }}
                    {% else %}
                        {{ action.url|replace({'http://': '', 'https://': ''}) }}
                    {% endif %}
                </a>
            {% endif %}
            {% if action.type == 'action' and action.pageTitle|default(false) is not empty %}</p>{% endif %}
        {% elseif action.type != 'search' %}
            <p>
                <span>{{ 'General_NotDefined'|translate('Actions_ColumnPageURL'|translate) }}</span>
            </p>
        {% endif %}
    </div>
</li>
", "@Live/_actionCommon.twig", "/var/www/cse135.monster/public_html/matomo/plugins/Live/templates/_actionCommon.twig");
    }
}
