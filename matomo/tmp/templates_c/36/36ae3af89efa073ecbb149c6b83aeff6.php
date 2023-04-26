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

/* @Insights/overviewWidget.twig */
class __TwigTemplate_3d5d0ecf6da0aa5af0ec6823f72ba143 extends Template
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
        echo "<div class=\"insightsDataTable dataTable\"
     data-table-type=\"InsightsDataTable\"
     data-table-onlyinsightsinit=\"1\">
    ";
        // line 4
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reports"]) || array_key_exists("reports", $context) ? $context["reports"] : (function () { throw new RuntimeError('Variable "reports" does not exist.', 4, $this->source); })()), "getColumns", [], "any", false, false, false, 4)) > 0)) {
            // line 5
            echo "        <div class=\"dataTableScroller\">
        <table class=\"dataTable\"
               title=\"";
            // line 7
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["consideredGrowth"]) || array_key_exists("consideredGrowth", $context) ? $context["consideredGrowth"] : (function () { throw new RuntimeError('Variable "consideredGrowth" does not exist.', 7, $this->source); })()), "html_attr");
            echo " ";
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["consideredChanges"]) || array_key_exists("consideredChanges", $context) ? $context["consideredChanges"] : (function () { throw new RuntimeError('Variable "consideredChanges" does not exist.', 7, $this->source); })()), "html_attr");
            echo "\">
            ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reports"]) || array_key_exists("reports", $context) ? $context["reports"] : (function () { throw new RuntimeError('Variable "reports" does not exist.', 8, $this->source); })()), "getDataTables", [], "method", false, false, false, 8), function ($__dataTable__) use ($context, $macros) { $context["dataTable"] = $__dataTable__; return (twig_get_attribute($this->env, $this->source, $context["dataTable"], "getRowsCount", [], "any", false, false, false, 8) > 0); }));
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
            foreach ($context['_seq'] as $context["_key"] => $context["dataTable"]) {
                // line 9
                echo "                ";
                $context["metadata"] = twig_get_attribute($this->env, $this->source, $context["dataTable"], "getAllTableMetadata", [], "any", false, false, false, 9);
                // line 10
                echo "
                <thead>
                    ";
                // line 12
                $this->loadTemplate("@Insights/table_header.twig", "@Insights/overviewWidget.twig", 12)->display($context);
                // line 13
                echo "                </thead>

                <tbody>
                    ";
                // line 16
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["dataTable"], "getRows", [], "any", false, false, false, 16));
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
                foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                    // line 17
                    echo "                        ";
                    $this->loadTemplate("@Insights/table_row.twig", "@Insights/overviewWidget.twig", 17)->display($context);
                    // line 18
                    echo "                    ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 19
                echo "                </tbody>
            ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dataTable'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "        </table>
        </div>

        <script type=\"text/javascript\" defer=\"defer\">
            \$(document).ready(function () {
                require('piwik/UI/DataTable').initNewDataTables();
            });
        </script>

    ";
        } else {
            // line 31
            echo "
        <div class=\"pk-emptyDataTable\"
             title=\"";
            // line 33
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["consideredGrowth"]) || array_key_exists("consideredGrowth", $context) ? $context["consideredGrowth"] : (function () { throw new RuntimeError('Variable "consideredGrowth" does not exist.', 33, $this->source); })()), "html_attr");
            echo " ";
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["consideredChanges"]) || array_key_exists("consideredChanges", $context) ? $context["consideredChanges"] : (function () { throw new RuntimeError('Variable "consideredChanges" does not exist.', 33, $this->source); })()), "html_attr");
            echo "\">
            ";
            // line 34
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Insights_NoResultMatchesCriteria"), "html", null, true);
            echo "
        </div>

    ";
        }
        // line 38
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "@Insights/overviewWidget.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 38,  156 => 34,  150 => 33,  146 => 31,  134 => 21,  119 => 19,  105 => 18,  102 => 17,  85 => 16,  80 => 13,  78 => 12,  74 => 10,  71 => 9,  54 => 8,  48 => 7,  44 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"insightsDataTable dataTable\"
     data-table-type=\"InsightsDataTable\"
     data-table-onlyinsightsinit=\"1\">
    {% if reports.getColumns|length > 0 %}
        <div class=\"dataTableScroller\">
        <table class=\"dataTable\"
               title=\"{{ consideredGrowth|e('html_attr') }} {{ consideredChanges|e('html_attr') }}\">
            {% for dataTable in reports.getDataTables()|filter(dataTable => dataTable.getRowsCount > 0) %}
                {% set metadata = dataTable.getAllTableMetadata %}

                <thead>
                    {% include \"@Insights/table_header.twig\" %}
                </thead>

                <tbody>
                    {% for row in dataTable.getRows %}
                        {% include \"@Insights/table_row.twig\" %}
                    {% endfor %}
                </tbody>
            {% endfor %}
        </table>
        </div>

        <script type=\"text/javascript\" defer=\"defer\">
            \$(document).ready(function () {
                require('piwik/UI/DataTable').initNewDataTables();
            });
        </script>

    {% else %}

        <div class=\"pk-emptyDataTable\"
             title=\"{{ consideredGrowth|e('html_attr') }} {{ consideredChanges|e('html_attr') }}\">
            {{ 'Insights_NoResultMatchesCriteria'|translate }}
        </div>

    {% endif %}
</div>", "@Insights/overviewWidget.twig", "/var/www/cse135.monster/public_html/matomo/plugins/Insights/templates/overviewWidget.twig");
    }
}
