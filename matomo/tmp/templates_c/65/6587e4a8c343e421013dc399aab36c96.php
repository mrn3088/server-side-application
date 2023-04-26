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

/* @CoreHome/_dataTableCell.twig */
class __TwigTemplate_ff9871dd9c3a11a604d495d89e860f2a extends Template
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
        ob_start();
        // line 2
        $context["tooltipIndex"] = ((isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 2, $this->source); })()) . "_tooltip");
        // line 3
        if (twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 3, $this->source); })()), "getMetadata", [0 => (isset($context["tooltipIndex"]) || array_key_exists("tooltipIndex", $context) ? $context["tooltipIndex"] : (function () { throw new RuntimeError('Variable "tooltipIndex" does not exist.', 3, $this->source); })())], "method", false, false, false, 3)) {
            echo "<span class=\"cell-tooltip\" data-tooltip=\"";
            echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 3, $this->source); })()), "getMetadata", [0 => (isset($context["tooltipIndex"]) || array_key_exists("tooltipIndex", $context) ? $context["tooltipIndex"] : (function () { throw new RuntimeError('Variable "tooltipIndex" does not exist.', 3, $this->source); })())], "method", false, false, false, 3), "html", null, true);
            echo "\">";
        }
        // line 4
        if ((( !twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 4, $this->source); })()), "getIdSubDataTable", [], "method", false, false, false, 4) && ((isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 4, $this->source); })()) == "label")) && twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 4, $this->source); })()), "getMetadata", [0 => "url"], "method", false, false, false, 4))) {
            // line 5
            echo "    <a rel=\"noreferrer noopener\"
       target=\"_blank\"
       href='";
            // line 7
            if (!twig_in_filter(twig_slice($this->env, twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 7, $this->source); })()), "getMetadata", [0 => "url"], "method", false, false, false, 7), 0, 4), [0 => "http", 1 => "ftp:"])) {
                echo "http://";
            }
            echo $this->env->getFilter('rawSafeDecoded')->getCallable()(twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 7, $this->source); })()), "getMetadata", [0 => "url"], "method", false, false, false, 7));
            echo "'>
";
        }
        // line 9
        echo "
";
        // line 10
        $context["totals"] = twig_get_attribute($this->env, $this->source, (isset($context["dataTable"]) || array_key_exists("dataTable", $context) ? $context["dataTable"] : (function () { throw new RuntimeError('Variable "dataTable" does not exist.', 10, $this->source); })()), "getMetadata", [0 => "totals"], "method", false, false, false, 10);
        // line 11
        $context["labelColumn"] = twig_first($this->env, (isset($context["columns_to_display"]) || array_key_exists("columns_to_display", $context) ? $context["columns_to_display"] : (function () { throw new RuntimeError('Variable "columns_to_display" does not exist.', 11, $this->source); })()));
        // line 12
        $context["reportLabel"] = $this->env->getFilter('rawSafeDecoded')->getCallable()($this->env->getFilter('truncate')->getCallable()(twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 12, $this->source); })()), "getColumn", [0 => (isset($context["labelColumn"]) || array_key_exists("labelColumn", $context) ? $context["labelColumn"] : (function () { throw new RuntimeError('Variable "labelColumn" does not exist.', 12, $this->source); })())], "method", false, false, false, 12), 40));
        // line 13
        $this->loadTemplate("@CoreVisualizations/_dataTableViz_htmlTable_ratio.twig", "@CoreHome/_dataTableCell.twig", 13)->display(twig_array_merge($context, ["label" =>         // line 14
(isset($context["reportLabel"]) || array_key_exists("reportLabel", $context) ? $context["reportLabel"] : (function () { throw new RuntimeError('Variable "reportLabel" does not exist.', 14, $this->source); })()), "labelColumn" =>         // line 15
(isset($context["labelColumn"]) || array_key_exists("labelColumn", $context) ? $context["labelColumn"] : (function () { throw new RuntimeError('Variable "labelColumn" does not exist.', 15, $this->source); })()), "translations" => twig_get_attribute($this->env, $this->source,         // line 16
(isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 16, $this->source); })()), "translations", [], "any", false, false, false, 16)]));
        // line 18
        echo "
";
        // line 19
        $context["dimensions"] = ((twig_get_attribute($this->env, $this->source, ($context["dataTable"] ?? null), "getMetadata", [0 => "dimensions"], "method", true, true, false, 19)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["dataTable"] ?? null), "getMetadata", [0 => "dimensions"], "method", false, false, false, 19), [])) : ([]));
        // line 20
        if ((((isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 20, $this->source); })()) == "label") || twig_in_filter((isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 20, $this->source); })()), (isset($context["dimensions"]) || array_key_exists("dimensions", $context) ? $context["dimensions"] : (function () { throw new RuntimeError('Variable "dimensions" does not exist.', 20, $this->source); })())))) {
            // line 21
            echo "    ";
            $macros["piwik"] = $this->macros["piwik"] = $this->loadTemplate("macros.twig", "@CoreHome/_dataTableCell.twig", 21)->unwrap();
            // line 22
            echo "
    <span class='label";
            // line 23
            if (twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 23, $this->source); })()), "getMetadata", [0 => "is_aggregate"], "method", false, false, false, 23)) {
                echo " highlighted";
            }
            echo "'
    ";
            // line 24
            if ((array_key_exists("properties", $context) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 24, $this->source); })()), "tooltip_metadata_name", [], "any", false, false, false, 24)))) {
                echo "title=\"";
                echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 24, $this->source); })()), "getMetadata", [0 => twig_get_attribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 24, $this->source); })()), "tooltip_metadata_name", [], "any", false, false, false, 24)], "method", false, false, false, 24), "html", null, true);
                echo "\"";
            }
            echo ">
        ";
            // line 25
            if (((isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 25, $this->source); })()) == "label")) {
                // line 26
                echo "            ";
                if ((( !twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 26, $this->source); })()), "getIdSubDataTable", [], "method", false, false, false, 26) && twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 26, $this->source); })()), "getMetadata", [0 => "url"], "method", false, false, false, 26)) &&  !twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 26, $this->source); })()), "getMetadata", [0 => "logo"], "method", false, false, false, 26))) {
                    // line 27
                    echo "                <span class=\"icon-outlink\"></span>
            ";
                } else {
                    // line 29
                    echo "                ";
                    echo twig_call_macro($macros["piwik"], "macro_logoHtml", [twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 29, $this->source); })()), "getMetadata", [], "method", false, false, false, 29), twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 29, $this->source); })()), "getColumn", [0 => "label"], "method", false, false, false, 29)], 29, $context, $this->getSourceContext());
                    echo "
            ";
                }
                // line 31
                echo "        ";
            }
            // line 32
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 32, $this->source); })()), "getMetadata", [0 => "html_label_prefix"], "method", false, false, false, 32)) {
                echo "<span class='label-prefix'>";
                echo twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 32, $this->source); })()), "getMetadata", [0 => "html_label_prefix"], "method", false, false, false, 32);
                echo "&nbsp;</span>";
            }
        }
        // line 33
        echo "<span class=\"value\">";
        // line 34
        if ((twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 34, $this->source); })()), "getColumn", [0 => (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 34, $this->source); })())], "method", false, false, false, 34) || (((isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 34, $this->source); })()) == "label") && ((twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 34, $this->source); })()), "getColumn", [0 => (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 34, $this->source); })())], "method", false, false, false, 34) === "0") || (twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 34, $this->source); })()), "getColumn", [0 => (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 34, $this->source); })())], "method", false, false, false, 34) === 0))))) {
            if (((isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 34, $this->source); })()) == "label")) {
                echo $this->env->getFilter('rawSafeDecoded')->getCallable()(twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 34, $this->source); })()), "getColumn", [0 => (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 34, $this->source); })())], "method", false, false, false, 34));
            } else {
                if (twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 34, $this->source); })()), "getMetadata", [0 => (("html_column_" . (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 34, $this->source); })())) . "_prefix")], "method", false, false, false, 34)) {
                    echo "<span class='column-prefix'>";
                    echo twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 34, $this->source); })()), "getMetadata", [0 => (("html_column_" . (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 34, $this->source); })())) . "_prefix")], "method", false, false, false, 34);
                    echo "</span>";
                }
                echo $this->env->getFilter('rawSafeDecoded')->getCallable()($this->env->getFilter('number')->getCallable()(twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 34, $this->source); })()), "getColumn", [0 => (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 34, $this->source); })())], "method", false, false, false, 34), 2, 0));
                if (twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 34, $this->source); })()), "getMetadata", [0 => (("html_column_" . (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 34, $this->source); })())) . "_suffix")], "method", false, false, false, 34)) {
                    echo "<span class='column-suffix'>";
                    echo twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 34, $this->source); })()), "getMetadata", [0 => (("html_column_" . (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 34, $this->source); })())) . "_suffix")], "method", false, false, false, 34);
                    echo "</span>";
                }
            }
        } else {
            // line 35
            echo "-";
        }
        // line 36
        echo "</span>
";
        // line 37
        if (((isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 37, $this->source); })()) == "label")) {
            if (twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 37, $this->source); })()), "getMetadata", [0 => "html_label_suffix"], "method", false, false, false, 37)) {
                echo "<span class='label-suffix'>";
                echo twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 37, $this->source); })()), "getMetadata", [0 => "html_label_suffix"], "method", false, false, false, 37);
                echo "</span>";
            }
            echo "</span>";
        }
        // line 38
        if ((( !twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 38, $this->source); })()), "getIdSubDataTable", [], "method", false, false, false, 38) && ((isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 38, $this->source); })()) == "label")) && twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 38, $this->source); })()), "getMetadata", [0 => "url"], "method", false, false, false, 38))) {
            // line 39
            echo "    </a>
";
        }
        // line 41
        if (twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 41, $this->source); })()), "getMetadata", [0 => (isset($context["tooltipIndex"]) || array_key_exists("tooltipIndex", $context) ? $context["tooltipIndex"] : (function () { throw new RuntimeError('Variable "tooltipIndex" does not exist.', 41, $this->source); })())], "method", false, false, false, 41)) {
            echo "</span>";
        }
        // line 42
        echo "
";
        $___internal_parse_0_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        echo twig_spaceless($___internal_parse_0_);
    }

    public function getTemplateName()
    {
        return "@CoreHome/_dataTableCell.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 1,  173 => 42,  169 => 41,  165 => 39,  163 => 38,  154 => 37,  151 => 36,  148 => 35,  130 => 34,  128 => 33,  120 => 32,  117 => 31,  111 => 29,  107 => 27,  104 => 26,  102 => 25,  94 => 24,  88 => 23,  85 => 22,  82 => 21,  80 => 20,  78 => 19,  75 => 18,  73 => 16,  72 => 15,  71 => 14,  70 => 13,  68 => 12,  66 => 11,  64 => 10,  61 => 9,  53 => 7,  49 => 5,  47 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% apply spaceless %}
{% set tooltipIndex = column ~ '_tooltip' %}
{% if row.getMetadata(tooltipIndex) %}<span class=\"cell-tooltip\" data-tooltip=\"{{ row.getMetadata(tooltipIndex) }}\">{% endif %}
{% if not row.getIdSubDataTable() and column=='label' and row.getMetadata('url') %}
    <a rel=\"noreferrer noopener\"
       target=\"_blank\"
       href='{% if row.getMetadata('url')|slice(0,4) not in ['http','ftp:'] %}http://{% endif %}{{ row.getMetadata('url')|rawSafeDecoded }}'>
{% endif %}

{% set totals = dataTable.getMetadata('totals') %}
{% set labelColumn   = columns_to_display|first %}
{% set reportLabel   = row.getColumn(labelColumn)|truncate(40)|rawSafeDecoded %}
{% include \"@CoreVisualizations/_dataTableViz_htmlTable_ratio.twig\" with {
    'label': reportLabel,
    'labelColumn': labelColumn,
    'translations': properties.translations
} %}

{% set dimensions = dataTable.getMetadata('dimensions')|default([]) %}
{% if column=='label' or column in dimensions %}
    {% import 'macros.twig' as piwik %}

    <span class='label{% if row.getMetadata('is_aggregate') %} highlighted{% endif %}'
    {% if properties is defined and properties.tooltip_metadata_name is not empty %}title=\"{{ row.getMetadata(properties.tooltip_metadata_name) }}\"{% endif %}>
        {% if column=='label' %}
            {% if not row.getIdSubDataTable() and row.getMetadata('url') and not row.getMetadata('logo') %}
                <span class=\"icon-outlink\"></span>
            {% else %}
                {{ piwik.logoHtml(row.getMetadata(), row.getColumn('label')) }}
            {% endif %}
        {% endif %}
        {% if row.getMetadata('html_label_prefix') %}<span class='label-prefix'>{{ row.getMetadata('html_label_prefix') | raw }}&nbsp;</span>{% endif -%}
{% endif %}<span class=\"value\">
    {%- if row.getColumn(column) or (column=='label' and (row.getColumn(column) is same as(\"0\") or row.getColumn(column) is same as(0))) %}{% if column=='label' %}{{- row.getColumn(column)|rawSafeDecoded -}}{% else %}{% if row.getMetadata('html_column_' ~ column ~ '_prefix') %}<span class='column-prefix'>{{ row.getMetadata('html_column_' ~ column ~ '_prefix') | raw }}</span>{% endif -%}{{- row.getColumn(column)|number(2,0)|rawSafeDecoded -}}{% if row.getMetadata('html_column_' ~ column ~ '_suffix') %}<span class='column-suffix'>{{ row.getMetadata('html_column_' ~ column ~ '_suffix') | raw }}</span>{% endif -%}{% endif %}
    {%- else -%}-
    {%- endif -%}</span>
{% if column=='label' %}{%- if row.getMetadata('html_label_suffix') %}<span class='label-suffix'>{{ row.getMetadata('html_label_suffix') | raw }}</span>{% endif -%}</span>{% endif %}
{% if not row.getIdSubDataTable() and column=='label' and row.getMetadata('url') %}
    </a>
{% endif %}
{% if row.getMetadata(tooltipIndex) %}</span>{% endif %}

{% endapply %}
", "@CoreHome/_dataTableCell.twig", "/var/www/cse135.monster/public_html/matomo/plugins/CoreHome/templates/_dataTableCell.twig");
    }
}
