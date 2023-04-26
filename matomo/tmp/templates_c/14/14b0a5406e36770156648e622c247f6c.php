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

/* @CoreVisualizations/_dataTableViz_htmlTable_ratio.twig */
class __TwigTemplate_363d0d3a2e188ad598f2fd90338be026 extends Template
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
        if ((twig_in_filter((isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 1, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 1, $this->source); })()), "report_ratio_columns", [], "any", false, false, false, 1)) && (twig_in_filter((isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 1, $this->source); })()), twig_get_array_keys_filter((isset($context["totals"]) || array_key_exists("totals", $context) ? $context["totals"] : (function () { throw new RuntimeError('Variable "totals" does not exist.', 1, $this->source); })()))) || ((array_key_exists("forceZero", $context)) ? (_twig_default_filter((isset($context["forceZero"]) || array_key_exists("forceZero", $context) ? $context["forceZero"] : (function () { throw new RuntimeError('Variable "forceZero" does not exist.', 1, $this->source); })()))) : (""))))) {
            // line 2
            $context["reportTotal"] = ((twig_get_attribute($this->env, $this->source, ($context["totals"] ?? null), (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 2, $this->source); })()), [], "array", true, true, false, 2)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["totals"] ?? null), (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 2, $this->source); })()), [], "array", false, false, false, 2), 0)) : (0));
            // line 3
            echo "
    ";
            // line 4
            if ((array_key_exists("siteTotalRow", $context) &&  !twig_test_empty((isset($context["siteTotalRow"]) || array_key_exists("siteTotalRow", $context) ? $context["siteTotalRow"] : (function () { throw new RuntimeError('Variable "siteTotalRow" does not exist.', 4, $this->source); })())))) {
                // line 5
                echo "        ";
                $context["siteTotal"] = twig_get_attribute($this->env, $this->source, (isset($context["siteTotalRow"]) || array_key_exists("siteTotalRow", $context) ? $context["siteTotalRow"] : (function () { throw new RuntimeError('Variable "siteTotalRow" does not exist.', 5, $this->source); })()), "getColumn", [0 => (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 5, $this->source); })())], "method", false, false, false, 5);
                // line 6
                echo "    ";
            } else {
                // line 7
                echo "        ";
                $context["siteTotal"] = 0;
                // line 8
                echo "    ";
            }
            // line 9
            echo "
    ";
            // line 10
            if (twig_test_empty(((array_key_exists("rowPercentage", $context)) ? (_twig_default_filter((isset($context["rowPercentage"]) || array_key_exists("rowPercentage", $context) ? $context["rowPercentage"] : (function () { throw new RuntimeError('Variable "rowPercentage" does not exist.', 10, $this->source); })()))) : ("")))) {
                // line 11
                echo "        ";
                if ((twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 11, $this->source); })()), "getMetadata", [0 => ((isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 11, $this->source); })()) . "_row_percentage")], "method", false, false, false, 11) != false)) {
                    // line 12
                    echo "            ";
                    $context["rowPercentage"] = twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 12, $this->source); })()), "getMetadata", [0 => ((isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 12, $this->source); })()) . "_row_percentage")], "method", false, false, false, 12);
                    // line 13
                    echo "        ";
                } elseif (($this->env->getTest('numeric')->getCallable()(((twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "getColumn", [0 => (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 13, $this->source); })())], "method", true, true, false, 13)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "getColumn", [0 => (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 13, $this->source); })())], "method", false, false, false, 13), 0)) : (0))) && $this->env->getTest('numeric')->getCallable()((isset($context["reportTotal"]) || array_key_exists("reportTotal", $context) ? $context["reportTotal"] : (function () { throw new RuntimeError('Variable "reportTotal" does not exist.', 13, $this->source); })())))) {
                    // line 14
                    echo "            ";
                    $context["rowPercentage"] = $this->env->getFilter('percentage')->getCallable()(twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 14, $this->source); })()), "getColumn", [0 => (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 14, $this->source); })())], "method", false, false, false, 14), (isset($context["reportTotal"]) || array_key_exists("reportTotal", $context) ? $context["reportTotal"] : (function () { throw new RuntimeError('Variable "reportTotal" does not exist.', 14, $this->source); })()), 1);
                    // line 15
                    echo "        ";
                } else {
                    // line 16
                    echo "            ";
                    $context["rowPercentage"] = "";
                    echo " ";
                    // line 17
                    echo "        ";
                }
                // line 18
                echo "    ";
            }
            // line 19
            echo "
    ";
            // line 20
            $context["metricTitle"] = ((twig_get_attribute($this->env, $this->source, ($context["translations"] ?? null), (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 20, $this->source); })()), [], "array", true, true, false, 20)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["translations"] ?? null), (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 20, $this->source); })()), [], "array", false, false, false, 20), (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 20, $this->source); })()))) : ((isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 20, $this->source); })())));
            // line 21
            echo "
    ";
            // line 22
            $context["reportRatioTooltip"] = $this->env->getFilter('translate')->getCallable()("General_ReportRatioTooltip", (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 22, $this->source); })()), \Piwik\piwik_escape_filter($this->env, (isset($context["rowPercentage"]) || array_key_exists("rowPercentage", $context) ? $context["rowPercentage"] : (function () { throw new RuntimeError('Variable "rowPercentage" does not exist.', 22, $this->source); })()), "html_attr"), \Piwik\piwik_escape_filter($this->env, (isset($context["reportTotal"]) || array_key_exists("reportTotal", $context) ? $context["reportTotal"] : (function () { throw new RuntimeError('Variable "reportTotal" does not exist.', 22, $this->source); })()), "html_attr"), \Piwik\piwik_escape_filter($this->env, (isset($context["metricTitle"]) || array_key_exists("metricTitle", $context) ? $context["metricTitle"] : (function () { throw new RuntimeError('Variable "metricTitle" does not exist.', 22, $this->source); })()), "html_attr"), (("\"" . (isset($context["segmentTitlePretty"]) || array_key_exists("segmentTitlePretty", $context) ? $context["segmentTitlePretty"] : (function () { throw new RuntimeError('Variable "segmentTitlePretty" does not exist.', 22, $this->source); })())) . "\""), \Piwik\piwik_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["translations"] ?? null), (isset($context["labelColumn"]) || array_key_exists("labelColumn", $context) ? $context["labelColumn"] : (function () { throw new RuntimeError('Variable "labelColumn" does not exist.', 22, $this->source); })()), [], "array", true, true, false, 22)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["translations"] ?? null), (isset($context["labelColumn"]) || array_key_exists("labelColumn", $context) ? $context["labelColumn"] : (function () { throw new RuntimeError('Variable "labelColumn" does not exist.', 22, $this->source); })()), [], "array", false, false, false, 22), (isset($context["labelColumn"]) || array_key_exists("labelColumn", $context) ? $context["labelColumn"] : (function () { throw new RuntimeError('Variable "labelColumn" does not exist.', 22, $this->source); })()))) : ((isset($context["labelColumn"]) || array_key_exists("labelColumn", $context) ? $context["labelColumn"] : (function () { throw new RuntimeError('Variable "labelColumn" does not exist.', 22, $this->source); })()))), "html_attr"));
            // line 23
            echo "
    ";
            // line 24
            if (twig_test_empty(((array_key_exists("totalPercentage", $context)) ? (_twig_default_filter((isset($context["totalPercentage"]) || array_key_exists("totalPercentage", $context) ? $context["totalPercentage"] : (function () { throw new RuntimeError('Variable "totalPercentage" does not exist.', 24, $this->source); })()))) : ("")))) {
                // line 25
                echo "        ";
                if ((twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 25, $this->source); })()), "getMetadata", [0 => ((isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 25, $this->source); })()) . "_site_total_percentage")], "method", false, false, false, 25) != false)) {
                    // line 26
                    echo "            ";
                    $context["totalPercentage"] = twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 26, $this->source); })()), "getMetadata", [0 => ((isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 26, $this->source); })()) . "_site_total_percentage")], "method", false, false, false, 26);
                    // line 27
                    echo "        ";
                } elseif (($this->env->getTest('numeric')->getCallable()(((twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "getColumn", [0 => (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 27, $this->source); })())], "method", true, true, false, 27)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "getColumn", [0 => (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 27, $this->source); })())], "method", false, false, false, 27), 0)) : (0))) && $this->env->getTest('numeric')->getCallable()((isset($context["siteTotal"]) || array_key_exists("siteTotal", $context) ? $context["siteTotal"] : (function () { throw new RuntimeError('Variable "siteTotal" does not exist.', 27, $this->source); })())))) {
                    // line 28
                    echo "            ";
                    $context["totalPercentage"] = $this->env->getFilter('percentage')->getCallable()(twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 28, $this->source); })()), "getColumn", [0 => (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 28, $this->source); })())], "method", false, false, false, 28), (isset($context["siteTotal"]) || array_key_exists("siteTotal", $context) ? $context["siteTotal"] : (function () { throw new RuntimeError('Variable "siteTotal" does not exist.', 28, $this->source); })()), 1);
                    // line 29
                    echo "        ";
                }
                // line 30
                echo "    ";
            }
            // line 31
            echo "
    ";
            // line 32
            if ( !twig_test_empty(((array_key_exists("totalPercentage", $context)) ? (_twig_default_filter((isset($context["totalPercentage"]) || array_key_exists("totalPercentage", $context) ? $context["totalPercentage"] : (function () { throw new RuntimeError('Variable "totalPercentage" does not exist.', 32, $this->source); })()))) : ("")))) {
                // line 33
                echo "        ";
                $context["totalRatioTooltip"] = $this->env->getFilter('translate')->getCallable()("General_TotalRatioTooltip", (isset($context["totalPercentage"]) || array_key_exists("totalPercentage", $context) ? $context["totalPercentage"] : (function () { throw new RuntimeError('Variable "totalPercentage" does not exist.', 33, $this->source); })()), $this->env->getFilter('number')->getCallable()((isset($context["siteTotal"]) || array_key_exists("siteTotal", $context) ? $context["siteTotal"] : (function () { throw new RuntimeError('Variable "siteTotal" does not exist.', 33, $this->source); })()), 2, 0), ((((isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 33, $this->source); })()) == "nb_visits")) ? ($this->env->getFilter('translate')->getCallable()("General_ColumnNbVisits")) : ((isset($context["metricTitle"]) || array_key_exists("metricTitle", $context) ? $context["metricTitle"] : (function () { throw new RuntimeError('Variable "metricTitle" does not exist.', 33, $this->source); })()))), (isset($context["periodTitlePretty"]) || array_key_exists("periodTitlePretty", $context) ? $context["periodTitlePretty"] : (function () { throw new RuntimeError('Variable "periodTitlePretty" does not exist.', 33, $this->source); })()));
                // line 34
                echo "    ";
            } else {
                // line 35
                echo "        ";
                $context["totalRatioTooltip"] = "";
                // line 36
                echo "    ";
            }
            // line 37
            echo "
    <span class=\"ratio\"
          title=\"";
            // line 39
            echo $this->env->getFilter('rawSafeDecoded')->getCallable()((isset($context["reportRatioTooltip"]) || array_key_exists("reportRatioTooltip", $context) ? $context["reportRatioTooltip"] : (function () { throw new RuntimeError('Variable "reportRatioTooltip" does not exist.', 39, $this->source); })()));
            echo " ";
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('rawSafeDecoded')->getCallable()((isset($context["totalRatioTooltip"]) || array_key_exists("totalRatioTooltip", $context) ? $context["totalRatioTooltip"] : (function () { throw new RuntimeError('Variable "totalRatioTooltip" does not exist.', 39, $this->source); })())), "html_attr");
            if ( !twig_test_empty(((array_key_exists("tooltipSuffix", $context)) ? (_twig_default_filter((isset($context["tooltipSuffix"]) || array_key_exists("tooltipSuffix", $context) ? $context["tooltipSuffix"] : (function () { throw new RuntimeError('Variable "tooltipSuffix" does not exist.', 39, $this->source); })()))) : ("")))) {
                echo "<br/><br/> ";
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('rawSafeDecoded')->getCallable()((isset($context["tooltipSuffix"]) || array_key_exists("tooltipSuffix", $context) ? $context["tooltipSuffix"] : (function () { throw new RuntimeError('Variable "tooltipSuffix" does not exist.', 39, $this->source); })())), "html_attr");
            }
            echo "\"
    >&nbsp;";
            // line 40
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["rowPercentage"]) || array_key_exists("rowPercentage", $context) ? $context["rowPercentage"] : (function () { throw new RuntimeError('Variable "rowPercentage" does not exist.', 40, $this->source); })()), "html", null, true);
            echo " ";
            if ( !twig_test_empty(((array_key_exists("changePercentage", $context)) ? (_twig_default_filter((isset($context["changePercentage"]) || array_key_exists("changePercentage", $context) ? $context["changePercentage"] : (function () { throw new RuntimeError('Variable "changePercentage" does not exist.', 40, $this->source); })()))) : ("")))) {
                echo "(";
                echo \Piwik\piwik_escape_filter($this->env, (isset($context["changePercentage"]) || array_key_exists("changePercentage", $context) ? $context["changePercentage"] : (function () { throw new RuntimeError('Variable "changePercentage" does not exist.', 40, $this->source); })()), "html", null, true);
                echo ")";
            }
            echo "</span>";
        }
    }

    public function getTemplateName()
    {
        return "@CoreVisualizations/_dataTableViz_htmlTable_ratio.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 40,  142 => 39,  138 => 37,  135 => 36,  132 => 35,  129 => 34,  126 => 33,  124 => 32,  121 => 31,  118 => 30,  115 => 29,  112 => 28,  109 => 27,  106 => 26,  103 => 25,  101 => 24,  98 => 23,  96 => 22,  93 => 21,  91 => 20,  88 => 19,  85 => 18,  82 => 17,  78 => 16,  75 => 15,  72 => 14,  69 => 13,  66 => 12,  63 => 11,  61 => 10,  58 => 9,  55 => 8,  52 => 7,  49 => 6,  46 => 5,  44 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if column in properties.report_ratio_columns and (column in totals|keys or forceZero|default) -%}
    {% set reportTotal   = totals[column]|default(0) %}

    {% if siteTotalRow is defined and siteTotalRow is not empty %}
        {% set siteTotal = siteTotalRow.getColumn(column) %}
    {% else %}
        {% set siteTotal = 0 %}
    {% endif %}

    {% if rowPercentage|default is empty %}
        {% if row.getMetadata(column ~ '_row_percentage') != false %}
            {% set rowPercentage = row.getMetadata(column ~ '_row_percentage') %}
        {% elseif row.getColumn(column)|default(0) is numeric and reportTotal is numeric %}
            {% set rowPercentage = row.getColumn(column)|percentage(reportTotal, 1) %}
        {% else %}
            {% set rowPercentage = '' %} {# should not happen #}
        {% endif %}
    {% endif %}

    {% set metricTitle   = translations[column]|default(column) %}

    {% set reportRatioTooltip = 'General_ReportRatioTooltip'|translate(label, rowPercentage|e('html_attr'), reportTotal|e('html_attr'), metricTitle|e('html_attr'), '\"' ~ segmentTitlePretty ~ '\"', translations[labelColumn]|default(labelColumn)|e('html_attr')) %}

    {% if totalPercentage|default is empty %}
        {% if row.getMetadata(column ~ '_site_total_percentage') != false %}
            {% set totalPercentage = row.getMetadata(column ~ '_site_total_percentage') %}
        {% elseif row.getColumn(column)|default(0) is numeric and siteTotal is numeric %}
            {% set totalPercentage = row.getColumn(column)|percentage(siteTotal, 1) %}
        {% endif %}
    {% endif %}

    {% if totalPercentage|default is not empty %}
        {% set totalRatioTooltip = 'General_TotalRatioTooltip'|translate(totalPercentage, siteTotal|number(2,0), column == 'nb_visits' ? 'General_ColumnNbVisits'|translate : metricTitle, periodTitlePretty) %}
    {% else %}
        {% set totalRatioTooltip = '' %}
    {% endif %}

    <span class=\"ratio\"
          title=\"{{ reportRatioTooltip|rawSafeDecoded|raw }} {{ totalRatioTooltip|rawSafeDecoded|e('html_attr') }}{% if tooltipSuffix|default is not empty %}<br/><br/> {{ tooltipSuffix|rawSafeDecoded|e('html_attr') }}{% endif %}\"
    >&nbsp;{{ rowPercentage }} {% if changePercentage|default is not empty %}({{ changePercentage }}){% endif %}</span>
{%- endif %}
", "@CoreVisualizations/_dataTableViz_htmlTable_ratio.twig", "/var/www/cse135.monster/public_html/matomo/plugins/CoreVisualizations/templates/_dataTableViz_htmlTable_ratio.twig");
    }
}
