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

/* @CoreVisualizations/macros.twig */
class __TwigTemplate_0c8c3efcb5d593bdcc61ba909e32022e extends Template
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
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "
";
        // line 21
        echo "
";
    }

    // line 2
    public function macro_sparklineEvolution($__evolution__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "evolution" => $__evolution__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 3
            echo "    ";
            $context["evolutionPretty"] = twig_get_attribute($this->env, $this->source, (isset($context["evolution"]) || array_key_exists("evolution", $context) ? $context["evolution"] : (function () { throw new RuntimeError('Variable "evolution" does not exist.', 3, $this->source); })()), "percent", [], "any", false, false, false, 3);
            // line 4
            echo "    ";
            $context["compareValue"] = ((twig_get_attribute($this->env, $this->source, ($context["evolution"] ?? null), "trend", [], "any", true, true, false, 4)) ? (twig_get_attribute($this->env, $this->source, (isset($context["evolution"]) || array_key_exists("evolution", $context) ? $context["evolution"] : (function () { throw new RuntimeError('Variable "evolution" does not exist.', 4, $this->source); })()), "trend", [], "any", false, false, false, 4)) : (twig_get_attribute($this->env, $this->source, (isset($context["evolution"]) || array_key_exists("evolution", $context) ? $context["evolution"] : (function () { throw new RuntimeError('Variable "evolution" does not exist.', 4, $this->source); })()), "percent", [], "any", false, false, false, 4)));
            // line 5
            echo "    ";
            if (((isset($context["compareValue"]) || array_key_exists("compareValue", $context) ? $context["compareValue"] : (function () { throw new RuntimeError('Variable "compareValue" does not exist.', 5, $this->source); })()) < 0)) {
                // line 6
                echo "        ";
                $context["evolutionClass"] = "negative-evolution";
                // line 7
                echo "        ";
                $context["evolutionIcon"] = "arrow_down.png";
                // line 8
                echo "    ";
            } elseif ((((isset($context["compareValue"]) || array_key_exists("compareValue", $context) ? $context["compareValue"] : (function () { throw new RuntimeError('Variable "compareValue" does not exist.', 8, $this->source); })()) == 0) || ((isset($context["compareValue"]) || array_key_exists("compareValue", $context) ? $context["compareValue"] : (function () { throw new RuntimeError('Variable "compareValue" does not exist.', 8, $this->source); })()) == "0%"))) {
                // line 9
                echo "        ";
                $context["evolutionClass"] = "neutral-evolution";
                // line 10
                echo "        ";
                $context["evolutionIcon"] = "stop.png";
                // line 11
                echo "    ";
            } else {
                // line 12
                echo "        ";
                $context["evolutionClass"] = "positive-evolution";
                // line 13
                echo "        ";
                $context["evolutionIcon"] = "arrow_up.png";
                // line 14
                echo "        ";
                $context["evolutionPretty"] = ("+" . twig_get_attribute($this->env, $this->source, (isset($context["evolution"]) || array_key_exists("evolution", $context) ? $context["evolution"] : (function () { throw new RuntimeError('Variable "evolution" does not exist.', 14, $this->source); })()), "percent", [], "any", false, false, false, 14));
                // line 15
                echo "    ";
            }
            // line 16
            echo "
    <span class=\"metricEvolution\" title=\"";
            // line 17
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('rawSafeDecoded')->getCallable()(twig_get_attribute($this->env, $this->source, (isset($context["evolution"]) || array_key_exists("evolution", $context) ? $context["evolution"] : (function () { throw new RuntimeError('Variable "evolution" does not exist.', 17, $this->source); })()), "tooltip", [], "any", false, false, false, 17)), "html_attr");
            echo "\">
    <img style=\"padding-right:4px\" src=\"plugins/MultiSites/images/";
            // line 18
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["evolutionIcon"]) || array_key_exists("evolutionIcon", $context) ? $context["evolutionIcon"] : (function () { throw new RuntimeError('Variable "evolutionIcon" does not exist.', 18, $this->source); })()), "html", null, true);
            echo "\" alt=\"\" />
    <strong class=\"";
            // line 19
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["evolutionClass"]) || array_key_exists("evolutionClass", $context) ? $context["evolutionClass"] : (function () { throw new RuntimeError('Variable "evolutionClass" does not exist.', 19, $this->source); })()), "html", null, true);
            echo "\" aria-hidden=\"true\">";
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["evolutionPretty"]) || array_key_exists("evolutionPretty", $context) ? $context["evolutionPretty"] : (function () { throw new RuntimeError('Variable "evolutionPretty" does not exist.', 19, $this->source); })()), "html", null, true);
            echo "</strong></span>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 22
    public function macro_singleSparkline($__sparkline__ = null, $__allMetricsDocumentation__ = null, $__areSparklinesLinkable__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "sparkline" => $__sparkline__,
            "allMetricsDocumentation" => $__allMetricsDocumentation__,
            "areSparklinesLinkable" => $__areSparklinesLinkable__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 23
            echo "
    <div class=\"sparkline ";
            // line 24
            if ((array_key_exists("areSparklinesLinkable", $context) &&  !(isset($context["areSparklinesLinkable"]) || array_key_exists("areSparklinesLinkable", $context) ? $context["areSparklinesLinkable"] : (function () { throw new RuntimeError('Variable "areSparklinesLinkable" does not exist.', 24, $this->source); })()))) {
                echo "notLinkable";
            }
            echo "\"
         ";
            // line 25
            if ( !twig_test_empty(((twig_get_attribute($this->env, $this->source, ($context["sparkline"] ?? null), "seriesIndices", [], "any", true, true, false, 25)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["sparkline"] ?? null), "seriesIndices", [], "any", false, false, false, 25))) : ("")))) {
                echo "data-series-indices=\"";
                echo \Piwik\piwik_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, (isset($context["sparkline"]) || array_key_exists("sparkline", $context) ? $context["sparkline"] : (function () { throw new RuntimeError('Variable "sparkline" does not exist.', 25, $this->source); })()), "seriesIndices", [], "any", false, false, false, 25)), "html_attr");
                echo "\"";
            }
            // line 26
            echo "         ";
            if ( !twig_test_empty(((twig_get_attribute($this->env, $this->source, ($context["sparkline"] ?? null), "graphParams", [], "any", true, true, false, 26)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["sparkline"] ?? null), "graphParams", [], "any", false, false, false, 26))) : ("")))) {
                echo "data-graph-params=\"";
                echo \Piwik\piwik_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, (isset($context["sparkline"]) || array_key_exists("sparkline", $context) ? $context["sparkline"] : (function () { throw new RuntimeError('Variable "sparkline" does not exist.', 26, $this->source); })()), "graphParams", [], "any", false, false, false, 26)), "html_attr");
                echo "\"";
            }
            // line 27
            echo "    >
        <div
            ";
            // line 29
            if (((twig_get_attribute($this->env, $this->source, ($context["sparkline"] ?? null), "tooltip", [], "any", true, true, false, 29)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["sparkline"] ?? null), "tooltip", [], "any", false, false, false, 29))) : (""))) {
                echo "title=\"";
                echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sparkline"]) || array_key_exists("sparkline", $context) ? $context["sparkline"] : (function () { throw new RuntimeError('Variable "sparkline" does not exist.', 29, $this->source); })()), "tooltip", [], "any", false, false, false, 29), "html_attr");
                echo "\"";
            }
            // line 30
            echo "        >
            ";
            // line 31
            if ( !twig_test_empty(((twig_get_attribute($this->env, $this->source, ($context["sparkline"] ?? null), "title", [], "any", true, true, false, 31)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["sparkline"] ?? null), "title", [], "any", false, false, false, 31))) : ("")))) {
                echo "<h6 class=\"sparkline-title\" title=\"";
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('rawSafeDecoded')->getCallable()(twig_get_attribute($this->env, $this->source, (isset($context["sparkline"]) || array_key_exists("sparkline", $context) ? $context["sparkline"] : (function () { throw new RuntimeError('Variable "sparkline" does not exist.', 31, $this->source); })()), "title", [], "any", false, false, false, 31)), "html_attr");
                echo "\">";
                echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sparkline"]) || array_key_exists("sparkline", $context) ? $context["sparkline"] : (function () { throw new RuntimeError('Variable "sparkline" does not exist.', 31, $this->source); })()), "title", [], "any", false, false, false, 31), "html", null, true);
                echo "</h6>";
            }
            // line 32
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["sparkline"]) || array_key_exists("sparkline", $context) ? $context["sparkline"] : (function () { throw new RuntimeError('Variable "sparkline" does not exist.', 32, $this->source); })()), "url", [], "any", false, false, false, 32)) {
                echo $this->env->getFunction('sparkline')->getCallable()(twig_get_attribute($this->env, $this->source, (isset($context["sparkline"]) || array_key_exists("sparkline", $context) ? $context["sparkline"] : (function () { throw new RuntimeError('Variable "sparkline" does not exist.', 32, $this->source); })()), "url", [], "any", false, false, false, 32));
            }
            // line 33
            echo "        </div>
\t<div>
        ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["sparkline"]) || array_key_exists("sparkline", $context) ? $context["sparkline"] : (function () { throw new RuntimeError('Variable "sparkline" does not exist.', 35, $this->source); })()), "metrics", [], "any", false, false, false, 35));
            foreach ($context['_seq'] as $context["groupName"] => $context["group"]) {
                // line 36
                echo "            ";
                if ( !twig_test_empty($context["groupName"])) {
                    echo "<span class=\"metric-group-title\">";
                    echo \Piwik\piwik_escape_filter($this->env, $context["groupName"], "html", null, true);
                    echo "</span>";
                }
                // line 37
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["group"]);
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["metric"]) {
                    // line 38
                    echo "                <span class=\"sparkline-metrics\" ";
                    if ((twig_get_attribute($this->env, $this->source, ($context["allMetricsDocumentation"] ?? null), twig_get_attribute($this->env, $this->source, $context["metric"], "column", [], "any", false, false, false, 38), [], "array", true, true, false, 38) && twig_get_attribute($this->env, $this->source, (isset($context["allMetricsDocumentation"]) || array_key_exists("allMetricsDocumentation", $context) ? $context["allMetricsDocumentation"] : (function () { throw new RuntimeError('Variable "allMetricsDocumentation" does not exist.', 38, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["metric"], "column", [], "any", false, false, false, 38), [], "array", false, false, false, 38))) {
                        echo "title=\"";
                        echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["allMetricsDocumentation"]) || array_key_exists("allMetricsDocumentation", $context) ? $context["allMetricsDocumentation"] : (function () { throw new RuntimeError('Variable "allMetricsDocumentation" does not exist.', 38, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["metric"], "column", [], "any", false, false, false, 38), [], "array", false, false, false, 38), "html", null, true);
                        echo "\"";
                    }
                    echo ">
                ";
                    // line 39
                    if (twig_in_filter("%s", twig_get_attribute($this->env, $this->source, $context["metric"], "description", [], "any", false, false, false, 39))) {
                        // line 40
                        echo $this->env->getFilter('translate')->getCallable()(twig_get_attribute($this->env, $this->source, $context["metric"], "description", [], "any", false, false, false, 40), (("<strong>" . $this->env->getFilter('number')->getCallable()(twig_get_attribute($this->env, $this->source, $context["metric"], "value", [], "any", false, false, false, 40), 2)) . "</strong>"));
                    } else {
                        // line 42
                        echo "                    <strong>";
                        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('number')->getCallable()(twig_get_attribute($this->env, $this->source, $context["metric"], "value", [], "any", false, false, false, 42), 2), "html", null, true);
                        echo "</strong> ";
                        echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["metric"], "description", [], "any", false, false, false, 42), "html", null, true);
                    }
                    // line 43
                    if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 43)) {
                        echo ", ";
                    }
                    // line 44
                    echo "                </span>
                ";
                    // line 45
                    if (twig_get_attribute($this->env, $this->source, $context["metric"], "evolution", [], "any", true, true, false, 45)) {
                        // line 46
                        echo "                    ";
                        echo twig_call_macro($macros["_self"], "macro_sparklineEvolution", [twig_get_attribute($this->env, $this->source, $context["metric"], "evolution", [], "any", false, false, false, 46)], 46, $context, $this->getSourceContext());
                        echo "
                ";
                    }
                    // line 48
                    echo "            ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['metric'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 49
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['groupName'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["sparkline"] ?? null), "evolution", [], "any", true, true, false, 50)) {
                // line 51
                echo "            ";
                echo twig_call_macro($macros["_self"], "macro_sparklineEvolution", [twig_get_attribute($this->env, $this->source, (isset($context["sparkline"]) || array_key_exists("sparkline", $context) ? $context["sparkline"] : (function () { throw new RuntimeError('Variable "sparkline" does not exist.', 51, $this->source); })()), "evolution", [], "any", false, false, false, 51)], 51, $context, $this->getSourceContext());
                echo "
        ";
            }
            // line 53
            echo "\t</div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@CoreVisualizations/macros.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  282 => 53,  276 => 51,  273 => 50,  267 => 49,  253 => 48,  247 => 46,  245 => 45,  242 => 44,  238 => 43,  232 => 42,  229 => 40,  227 => 39,  218 => 38,  200 => 37,  193 => 36,  189 => 35,  185 => 33,  180 => 32,  172 => 31,  169 => 30,  163 => 29,  159 => 27,  152 => 26,  146 => 25,  140 => 24,  137 => 23,  122 => 22,  109 => 19,  105 => 18,  101 => 17,  98 => 16,  95 => 15,  92 => 14,  89 => 13,  86 => 12,  83 => 11,  80 => 10,  77 => 9,  74 => 8,  71 => 7,  68 => 6,  65 => 5,  62 => 4,  59 => 3,  46 => 2,  41 => 21,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% macro sparklineEvolution(evolution) %}
    {% set evolutionPretty = evolution.percent %}
    {% set compareValue = evolution.trend is defined ? evolution.trend : evolution.percent %}
    {% if compareValue < 0 %}
        {% set evolutionClass = 'negative-evolution' %}
        {% set evolutionIcon  = 'arrow_down.png' %}
    {% elseif compareValue == 0 or compareValue == '0%' %}
        {% set evolutionClass = 'neutral-evolution' %}
        {% set evolutionIcon  = 'stop.png' %}
    {% else %}
        {% set evolutionClass  = 'positive-evolution' %}
        {% set evolutionIcon   = 'arrow_up.png' %}
        {% set evolutionPretty = '+' ~ evolution.percent %}
    {% endif %}

    <span class=\"metricEvolution\" title=\"{{ evolution.tooltip|rawSafeDecoded|e('html_attr') }}\">
    <img style=\"padding-right:4px\" src=\"plugins/MultiSites/images/{{ evolutionIcon }}\" alt=\"\" />
    <strong class=\"{{ evolutionClass }}\" aria-hidden=\"true\">{{ evolutionPretty }}</strong></span>
{% endmacro %}

{% macro singleSparkline(sparkline, allMetricsDocumentation, areSparklinesLinkable) %}

    <div class=\"sparkline {% if areSparklinesLinkable is defined and not areSparklinesLinkable %}notLinkable{% endif %}\"
         {% if sparkline.seriesIndices|default is not empty %}data-series-indices=\"{{ sparkline.seriesIndices|json_encode|e('html_attr') }}\"{% endif %}
         {% if sparkline.graphParams|default is not empty %}data-graph-params=\"{{ sparkline.graphParams|json_encode|e('html_attr') }}\"{% endif %}
    >
        <div
            {% if sparkline.tooltip|default %}title=\"{{ sparkline.tooltip|e('html_attr') }}\"{% endif %}
        >
            {% if sparkline.title|default is not empty %}<h6 class=\"sparkline-title\" title=\"{{ sparkline.title|rawSafeDecoded|e('html_attr') }}\">{{ sparkline.title }}</h6>{% endif %}
            {% if sparkline.url %}{{ sparkline(sparkline.url)|raw }}{% endif %}
        </div>
\t<div>
        {% for groupName, group in sparkline.metrics %}
            {% if groupName is not empty %}<span class=\"metric-group-title\">{{ groupName }}</span>{% endif %}
            {% for metric in group %}
                <span class=\"sparkline-metrics\" {% if allMetricsDocumentation[metric.column] is defined and allMetricsDocumentation[metric.column] %}title=\"{{ allMetricsDocumentation[metric.column] }}\"{% endif %}>
                {% if '%s' in metric.description -%}
                    {{ metric.description|translate(\"<strong>\"~metric.value|number(2)~\"</strong>\")|raw }}
                {%- else %}
                    <strong>{{ metric.value|number(2) }}</strong> {{ metric.description }}
                {%- endif %}{% if not loop.last %}, {% endif %}
                </span>
                {% if metric.evolution is defined %}
                    {{ _self.sparklineEvolution(metric.evolution) }}
                {% endif %}
            {% endfor %}
        {% endfor %}
        {% if sparkline.evolution is defined %}
            {{ _self.sparklineEvolution(sparkline.evolution) }}
        {% endif %}
\t</div>
    </div>
{% endmacro %}
", "@CoreVisualizations/macros.twig", "/var/www/cse135.monster/public_html/matomo/plugins/CoreVisualizations/templates/macros.twig");
    }
}
