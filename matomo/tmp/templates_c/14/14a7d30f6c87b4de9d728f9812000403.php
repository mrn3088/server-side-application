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

/* @Live/_actionTooltip.twig */
class __TwigTemplate_ae62dfaacce750ebe02f7dd2496f7a2c extends Template
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
        echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 1, $this->source); })()), "serverTimePretty", [], "any", false, false, false, 1), "html", null, true);
        if ((twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "url", [], "any", true, true, false, 1) && twig_length_filter($this->env, twig_trim_filter(twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 1, $this->source); })()), "url", [], "any", false, false, false, 1))))) {
            // line 2
            echo "
";
            // line 3
            echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 3, $this->source); })()), "url", [], "any", false, false, false, 3), "html", null, true);
        }
        if (twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "pageLoadTime", [], "any", true, true, false, 3)) {
            // line 4
            echo "
";
            // line 5
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("PagePerformance_PageLoadTime"), "html", null, true);
            echo ": ";
            echo twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 5, $this->source); })()), "pageLoadTime", [], "any", false, false, false, 5);
        }
        // line 6
        if (( !twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "pageLoadTime", [], "any", true, true, false, 6) && twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "generationTime", [], "any", true, true, false, 6))) {
            // line 7
            echo "
";
            // line 8
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_ColumnGenerationTime"), "html", null, true);
            echo ": ";
            echo twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 8, $this->source); })()), "generationTime", [], "any", false, false, false, 8);
        }
        // line 10
        if (twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "timeSpentPretty", [], "any", true, true, false, 10)) {
            // line 11
            echo "
";
            // line 12
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_TimeOnPage"), "html", null, true);
            echo ": ";
            echo twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 12, $this->source); })()), "timeSpentPretty", [], "any", false, false, false, 12);
        }
        // line 13
        if (((twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "siteSearchCategory", [], "any", true, true, false, 13)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "siteSearchCategory", [], "any", false, false, false, 13), false)) : (false))) {
            // line 14
            echo "
";
            // line 15
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Actions_ColumnSearchCategory"), "html", null, true);
            echo ": ";
            echo $this->env->getFilter('rawSafeDecoded')->getCallable()(twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 15, $this->source); })()), "siteSearchCategory", [], "any", false, false, false, 15));
        }
        // line 16
        if (((twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "siteSearchCount", [], "any", true, true, false, 16)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "siteSearchCount", [], "any", false, false, false, 16), false)) : (false))) {
            // line 17
            echo "
";
            // line 18
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Actions_ColumnSearchResultsCount"), "html", null, true);
            echo ": ";
            echo $this->env->getFilter('rawSafeDecoded')->getCallable()(twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 18, $this->source); })()), "siteSearchCount", [], "any", false, false, false, 18));
        }
    }

    public function getTemplateName()
    {
        return "@Live/_actionTooltip.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 18,  87 => 17,  85 => 16,  80 => 15,  77 => 14,  75 => 13,  70 => 12,  67 => 11,  65 => 10,  60 => 8,  57 => 7,  55 => 6,  50 => 5,  47 => 4,  43 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ action.serverTimePretty }}{% if action.url is defined and action.url|trim|length %}

{{ action.url }}{% endif %}{%- if action.pageLoadTime is defined %}

{{ 'PagePerformance_PageLoadTime'|translate }}: {{ action.pageLoadTime|raw }}{% endif %}
{%- if action.pageLoadTime is not defined and action.generationTime is defined %}

{{ 'General_ColumnGenerationTime'|translate }}: {{ action.generationTime|raw }}{% endif %}

{%- if action.timeSpentPretty is defined %}

{{ 'General_TimeOnPage'|translate }}: {{ action.timeSpentPretty|raw }}{% endif %}
{%- if action.siteSearchCategory|default(false) %}

{{ 'Actions_ColumnSearchCategory'|translate }}: {{ action.siteSearchCategory|rawSafeDecoded }}{% endif %}
{%- if action.siteSearchCount|default(false) %}

{{ 'Actions_ColumnSearchResultsCount'|translate }}: {{ action.siteSearchCount|rawSafeDecoded }}{% endif %}", "@Live/_actionTooltip.twig", "/var/www/cse135.monster/public_html/matomo/plugins/Live/templates/_actionTooltip.twig");
    }
}
