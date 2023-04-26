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

/* @Insights/table_row.twig */
class __TwigTemplate_86d9d99627cab320581ff81aafb44939 extends Template
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
        if (twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 1, $this->source); })()), "getColumn", [0 => "isDisappeared"], "method", false, false, false, 1)) {
            // line 2
            echo "    ";
            $context["rowTitle"] = $this->env->getFilter('translate')->getCallable()("Insights_TitleRowDisappearedDetails", twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 2, $this->source); })()), "getColumn", [0 => "label"], "method", false, false, false, 2), twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 2, $this->source); })()), "getColumn", [0 => "value_old"], "method", false, false, false, 2), $this->env->getFilter('prettyDate')->getCallable()(twig_get_attribute($this->env, $this->source, (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new RuntimeError('Variable "metadata" does not exist.', 2, $this->source); })()), "date", [], "any", false, false, false, 2), twig_get_attribute($this->env, $this->source, (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new RuntimeError('Variable "metadata" does not exist.', 2, $this->source); })()), "period", [], "any", false, false, false, 2)), $this->env->getFilter('prettyDate')->getCallable()(twig_get_attribute($this->env, $this->source, (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new RuntimeError('Variable "metadata" does not exist.', 2, $this->source); })()), "lastDate", [], "any", false, false, false, 2), twig_get_attribute($this->env, $this->source, (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new RuntimeError('Variable "metadata" does not exist.', 2, $this->source); })()), "period", [], "any", false, false, false, 2)));
        } elseif (twig_get_attribute($this->env, $this->source,         // line 3
(isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 3, $this->source); })()), "getColumn", [0 => "isNew"], "method", false, false, false, 3)) {
            // line 4
            echo "    ";
            $context["rowTitle"] = $this->env->getFilter('translate')->getCallable()("Insights_TitleRowNewDetails", twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 4, $this->source); })()), "getColumn", [0 => "label"], "method", false, false, false, 4), twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 4, $this->source); })()), "getColumn", [0 => "value_new"], "method", false, false, false, 4), $this->env->getFilter('prettyDate')->getCallable()(twig_get_attribute($this->env, $this->source, (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new RuntimeError('Variable "metadata" does not exist.', 4, $this->source); })()), "lastDate", [], "any", false, false, false, 4), twig_get_attribute($this->env, $this->source, (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new RuntimeError('Variable "metadata" does not exist.', 4, $this->source); })()), "period", [], "any", false, false, false, 4)));
        } else {
            // line 6
            echo "    ";
            $context["rowTitle"] = $this->env->getFilter('translate')->getCallable()("Insights_TitleRowChangeDetails", twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 6, $this->source); })()), "getColumn", [0 => "label"], "method", false, false, false, 6), twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 6, $this->source); })()), "getColumn", [0 => "value_old"], "method", false, false, false, 6), $this->env->getFilter('prettyDate')->getCallable()(twig_get_attribute($this->env, $this->source, (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new RuntimeError('Variable "metadata" does not exist.', 6, $this->source); })()), "lastDate", [], "any", false, false, false, 6), twig_get_attribute($this->env, $this->source, (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new RuntimeError('Variable "metadata" does not exist.', 6, $this->source); })()), "period", [], "any", false, false, false, 6)), twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 6, $this->source); })()), "getColumn", [0 => "value_new"], "method", false, false, false, 6), $this->env->getFilter('prettyDate')->getCallable()(twig_get_attribute($this->env, $this->source, (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new RuntimeError('Variable "metadata" does not exist.', 6, $this->source); })()), "date", [], "any", false, false, false, 6), twig_get_attribute($this->env, $this->source, (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new RuntimeError('Variable "metadata" does not exist.', 6, $this->source); })()), "period", [], "any", false, false, false, 6)), twig_get_attribute($this->env, $this->source, (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new RuntimeError('Variable "metadata" does not exist.', 6, $this->source); })()), "metricName", [], "any", false, false, false, 6));
        }
        // line 8
        echo "
";
        // line 9
        $context["rowTitleShaker"] = "";
        // line 10
        if (twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 10, $this->source); })()), "getColumn", [0 => "isMoverAndShaker"], "method", false, false, false, 10)) {
            // line 11
            echo "    ";
            $context["rowTitleShaker"] = $this->env->getFilter('translate')->getCallable()("Insights_TitleRowMoverAndShaker");
        }
        // line 13
        echo "
<tr title=\"";
        // line 14
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["rowTitle"]) || array_key_exists("rowTitle", $context) ? $context["rowTitle"] : (function () { throw new RuntimeError('Variable "rowTitle" does not exist.', 14, $this->source); })()), "html_attr");
        echo " ";
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["rowTitleShaker"]) || array_key_exists("rowTitleShaker", $context) ? $context["rowTitleShaker"] : (function () { throw new RuntimeError('Variable "rowTitleShaker" does not exist.', 14, $this->source); })()), "html_attr");
        echo "\"
    class=\"";
        // line 15
        if (twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 15, $this->source); })()), "getColumn", [0 => "isMoverAndShaker"], "method", false, false, false, 15)) {
            echo "isMoverAndShaker";
        }
        echo "\">
    <td class=\"label\">
        <span class=\"title\">
            ";
        // line 18
        echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 18, $this->source); })()), "getColumn", [0 => "label"], "method", false, false, false, 18), "html", null, true);
        echo "
        </span>
    </td>

    ";
        // line 22
        if (twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 22, $this->source); })()), "getColumn", [0 => "grown"], "method", false, false, false, 22)) {
            // line 23
            echo "        <td class=\"column\">+";
            echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 23, $this->source); })()), "getColumn", [0 => "difference"], "method", false, false, false, 23), "html", null, true);
            echo "</td>
        <td class=\"column grown\">+";
            // line 24
            echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 24, $this->source); })()), "getColumn", [0 => "growth_percent"], "method", false, false, false, 24), "html", null, true);
            echo "</td>
    ";
        } else {
            // line 26
            echo "        <td class=\"column\">";
            echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 26, $this->source); })()), "getColumn", [0 => "difference"], "method", false, false, false, 26), "html", null, true);
            echo "</td>
        <td class=\"column notGrown\">";
            // line 27
            echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 27, $this->source); })()), "getColumn", [0 => "growth_percent"], "method", false, false, false, 27), "html", null, true);
            echo "</td>
    ";
        }
        // line 29
        echo "</tr>";
    }

    public function getTemplateName()
    {
        return "@Insights/table_row.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 29,  104 => 27,  99 => 26,  94 => 24,  89 => 23,  87 => 22,  80 => 18,  72 => 15,  66 => 14,  63 => 13,  59 => 11,  57 => 10,  55 => 9,  52 => 8,  48 => 6,  44 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if row.getColumn('isDisappeared') %}
    {% set rowTitle = 'Insights_TitleRowDisappearedDetails'|translate(row.getColumn('label'), row.getColumn('value_old'), metadata.date|prettyDate(metadata.period), metadata.lastDate|prettyDate(metadata.period)) %}
{% elseif row.getColumn('isNew') %}
    {% set rowTitle = 'Insights_TitleRowNewDetails'|translate(row.getColumn('label'), row.getColumn('value_new'), metadata.lastDate|prettyDate(metadata.period)) %}
{% else %}
    {% set rowTitle = 'Insights_TitleRowChangeDetails'|translate(row.getColumn('label'), row.getColumn('value_old'), metadata.lastDate|prettyDate(metadata.period), row.getColumn('value_new'), metadata.date|prettyDate(metadata.period), metadata.metricName) %}
{% endif %}

{% set rowTitleShaker = '' %}
{% if row.getColumn('isMoverAndShaker') %}
    {% set rowTitleShaker = 'Insights_TitleRowMoverAndShaker'|translate %}
{% endif %}

<tr title=\"{{ rowTitle|e('html_attr') }} {{ rowTitleShaker|e('html_attr') }}\"
    class=\"{% if row.getColumn('isMoverAndShaker') %}isMoverAndShaker{% endif %}\">
    <td class=\"label\">
        <span class=\"title\">
            {{ row.getColumn('label') }}
        </span>
    </td>

    {% if row.getColumn('grown') %}
        <td class=\"column\">+{{ row.getColumn('difference') }}</td>
        <td class=\"column grown\">+{{ row.getColumn('growth_percent') }}</td>
    {% else %}
        <td class=\"column\">{{ row.getColumn('difference') }}</td>
        <td class=\"column notGrown\">{{ row.getColumn('growth_percent') }}</td>
    {% endif %}
</tr>", "@Insights/table_row.twig", "/var/www/cse135.monster/public_html/matomo/plugins/Insights/templates/table_row.twig");
    }
}
