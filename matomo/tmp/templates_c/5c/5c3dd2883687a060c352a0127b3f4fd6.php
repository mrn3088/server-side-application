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

/* @CoreHome/_dataTable.twig */
class __TwigTemplate_a3d3e9bab5652242d9877efe9170dda3 extends Template
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
        if (twig_get_attribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 1, $this->source); })()), "show_visualization_only", [], "any", false, false, false, 1)) {
            // line 2
            echo "    ";
            $this->loadTemplate((isset($context["visualizationTemplate"]) || array_key_exists("visualizationTemplate", $context) ? $context["visualizationTemplate"] : (function () { throw new RuntimeError('Variable "visualizationTemplate" does not exist.', 2, $this->source); })()), "@CoreHome/_dataTable.twig", 2)->display($context);
        } else {
            // line 5
            $context["isDataTableEmpty"] = (( !array_key_exists("dataTable", $context) || (null === (isset($context["dataTable"]) || array_key_exists("dataTable", $context) ? $context["dataTable"] : (function () { throw new RuntimeError('Variable "dataTable" does not exist.', 5, $this->source); })()))) || ((array_key_exists("dataTableHasNoData", $context)) ? (_twig_default_filter((isset($context["dataTableHasNoData"]) || array_key_exists("dataTableHasNoData", $context) ? $context["dataTableHasNoData"] : (function () { throw new RuntimeError('Variable "dataTableHasNoData" does not exist.', 5, $this->source); })()), false)) : (false)));
            // line 6
            echo "
";
            // line 7
            $context["showCardAsContentBlock"] = ((twig_get_attribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 7, $this->source); })()), "show_as_content_block", [], "any", false, false, false, 7) && twig_get_attribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 7, $this->source); })()), "show_title", [], "any", false, false, false, 7)) &&  !(isset($context["isWidget"]) || array_key_exists("isWidget", $context) ? $context["isWidget"] : (function () { throw new RuntimeError('Variable "isWidget" does not exist.', 7, $this->source); })()));
            // line 8
            $context["showOnlyTitleWithoutCard"] = (( !(isset($context["showCardAsContentBlock"]) || array_key_exists("showCardAsContentBlock", $context) ? $context["showCardAsContentBlock"] : (function () { throw new RuntimeError('Variable "showCardAsContentBlock" does not exist.', 8, $this->source); })()) && twig_get_attribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 8, $this->source); })()), "title", [], "any", false, false, false, 8)) && twig_get_attribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 8, $this->source); })()), "show_title", [], "any", false, false, false, 8));
            // line 9
            echo "
";
            // line 10
            if ((isset($context["showCardAsContentBlock"]) || array_key_exists("showCardAsContentBlock", $context) ? $context["showCardAsContentBlock"] : (function () { throw new RuntimeError('Variable "showCardAsContentBlock" does not exist.', 10, $this->source); })())) {
                // line 11
                echo "<div class=\"card\">
<div class=\"card-content\">
    ";
                // line 13
                if (twig_get_attribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 13, $this->source); })()), "title", [], "any", false, false, false, 13)) {
                    // line 14
                    echo "        <h2 class=\"card-title\"
            ";
                    // line 15
                    if (twig_get_attribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 15, $this->source); })()), "title_edit_entity_url", [], "any", false, false, false, 15)) {
                        echo "edit-url=\"";
                        echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 15, $this->source); })()), "title_edit_entity_url", [], "any", false, false, false, 15), "html", null, true);
                        echo "\"";
                    }
                    // line 16
                    echo "            report-generated=\"";
                    if (array_key_exists("reportLastUpdatedMessage", $context)) {
                        echo (isset($context["reportLastUpdatedMessage"]) || array_key_exists("reportLastUpdatedMessage", $context) ? $context["reportLastUpdatedMessage"] : (function () { throw new RuntimeError('Variable "reportLastUpdatedMessage" does not exist.', 16, $this->source); })());
                    }
                    echo "\"
              piwik-enriched-headline
        >";
                    // line 18
                    echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 18, $this->source); })()), "title", [], "any", false, false, false, 18), "html", null, true);
                    echo "</h2>
    ";
                }
            } elseif (            // line 20
(isset($context["showOnlyTitleWithoutCard"]) || array_key_exists("showOnlyTitleWithoutCard", $context) ? $context["showOnlyTitleWithoutCard"] : (function () { throw new RuntimeError('Variable "showOnlyTitleWithoutCard" does not exist.', 20, $this->source); })())) {
                // line 21
                echo "    <div>
    <h2>";
                // line 22
                echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 22, $this->source); })()), "title", [], "any", false, false, false, 22), "html", null, true);
                echo "</h2>
";
            }
            // line 24
            echo "
";
            // line 25
            $context["showCardTableIsEmpty"] = (( !twig_get_attribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 25, $this->source); })()), "show_as_content_block", [], "any", false, false, false, 25) && (isset($context["isDataTableEmpty"]) || array_key_exists("isDataTableEmpty", $context) ? $context["isDataTableEmpty"] : (function () { throw new RuntimeError('Variable "isDataTableEmpty" does not exist.', 25, $this->source); })())) &&  !(isset($context["isWidget"]) || array_key_exists("isWidget", $context) ? $context["isWidget"] : (function () { throw new RuntimeError('Variable "isWidget" does not exist.', 25, $this->source); })()));
            // line 26
            if ((isset($context["showCardTableIsEmpty"]) || array_key_exists("showCardTableIsEmpty", $context) ? $context["showCardTableIsEmpty"] : (function () { throw new RuntimeError('Variable "showCardTableIsEmpty" does not exist.', 26, $this->source); })())) {
                // line 27
                echo "    <div class=\"card\">
    <div class=\"card-content\">
";
            }
            // line 30
            echo "
";
            // line 31
            $context["summaryRowId"] = twig_constant("Piwik\\DataTable::ID_SUMMARY_ROW");
            // line 32
            $context["isSubtable"] = (twig_get_attribute($this->env, $this->source, ($context["javascriptVariablesToSet"] ?? null), "idSubtable", [], "any", true, true, false, 32) && (twig_get_attribute($this->env, $this->source, (isset($context["javascriptVariablesToSet"]) || array_key_exists("javascriptVariablesToSet", $context) ? $context["javascriptVariablesToSet"] : (function () { throw new RuntimeError('Variable "javascriptVariablesToSet" does not exist.', 32, $this->source); })()), "idSubtable", [], "any", false, false, false, 32) != 0));
            // line 33
            echo "<div class=\"dataTable ";
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["visualizationCssClass"]) || array_key_exists("visualizationCssClass", $context) ? $context["visualizationCssClass"] : (function () { throw new RuntimeError('Variable "visualizationCssClass" does not exist.', 33, $this->source); })()), "html", null, true);
            echo " ";
            echo \Piwik\piwik_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["properties"] ?? null), "datatable_css_class", [], "any", true, true, false, 33)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["properties"] ?? null), "datatable_css_class", [], "any", false, false, false, 33), "")) : ("")), "html", null, true);
            echo " ";
            if ((isset($context["isSubtable"]) || array_key_exists("isSubtable", $context) ? $context["isSubtable"] : (function () { throw new RuntimeError('Variable "isSubtable" does not exist.', 33, $this->source); })())) {
                echo "subDataTable";
            }
            echo " ";
            if (((array_key_exists("isComparing", $context)) ? (_twig_default_filter((isset($context["isComparing"]) || array_key_exists("isComparing", $context) ? $context["isComparing"] : (function () { throw new RuntimeError('Variable "isComparing" does not exist.', 33, $this->source); })()), false)) : (false))) {
                echo "isComparing";
            }
            echo "\"
     data-table-type=\"";
            // line 34
            echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 34, $this->source); })()), "datatable_js_type", [], "any", false, false, false, 34), "html", null, true);
            echo "\"
     data-report=\"";
            // line 35
            echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 35, $this->source); })()), "report_id", [], "any", false, false, false, 35), "html", null, true);
            echo "\"
     data-report-metadata=\"";
            // line 36
            echo \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["reportMetdadata"]) || array_key_exists("reportMetdadata", $context) ? $context["reportMetdadata"] : (function () { throw new RuntimeError('Variable "reportMetdadata" does not exist.', 36, $this->source); })())), "html_attr");
            echo "\"
     data-props=\"";
            // line 37
            if (twig_test_empty((isset($context["clientSideProperties"]) || array_key_exists("clientSideProperties", $context) ? $context["clientSideProperties"] : (function () { throw new RuntimeError('Variable "clientSideProperties" does not exist.', 37, $this->source); })()))) {
                echo "{}";
            } else {
                echo \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["clientSideProperties"]) || array_key_exists("clientSideProperties", $context) ? $context["clientSideProperties"] : (function () { throw new RuntimeError('Variable "clientSideProperties" does not exist.', 37, $this->source); })())), "html", null, true);
            }
            echo "\"
     data-params=\"";
            // line 38
            if (twig_test_empty((isset($context["clientSideParameters"]) || array_key_exists("clientSideParameters", $context) ? $context["clientSideParameters"] : (function () { throw new RuntimeError('Variable "clientSideParameters" does not exist.', 38, $this->source); })()))) {
                echo "{}";
            } else {
                echo \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["clientSideParameters"]) || array_key_exists("clientSideParameters", $context) ? $context["clientSideParameters"] : (function () { throw new RuntimeError('Variable "clientSideParameters" does not exist.', 38, $this->source); })())), "html", null, true);
            }
            echo "\">

    ";
            // line 40
            if (twig_get_attribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 40, $this->source); })()), "description", [], "any", false, false, false, 40)) {
                // line 41
                echo "        <div class=\"card-description\">";
                echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 41, $this->source); })()), "description", [], "any", false, false, false, 41), "html", null, true);
                echo "</div>
    ";
            }
            // line 43
            echo "
    <div class=\"reportDocumentation\" data-content=\"";
            // line 44
            echo \Piwik\piwik_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["properties"] ?? null), "documentation", [], "any", true, true, false, 44)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["properties"] ?? null), "documentation", [], "any", false, false, false, 44))) : ("")), "html_attr");
            echo "\">
        ";
            // line 45
            if ( !twig_test_empty(((twig_get_attribute($this->env, $this->source, ($context["properties"] ?? null), "documentation", [], "any", true, true, false, 45)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["properties"] ?? null), "documentation", [], "any", false, false, false, 45))) : ("")))) {
                echo "<p ng-bind-html=\"";
                echo \Piwik\piwik_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 45, $this->source); })()), "documentation", [], "any", false, false, false, 45)), "html_attr");
                echo "\"></p>";
            }
            // line 46
            echo "        ";
            if ( !twig_test_empty(((twig_get_attribute($this->env, $this->source, ($context["properties"] ?? null), "onlineGuideUrl", [], "any", true, true, false, 46)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["properties"] ?? null), "onlineGuideUrl", [], "any", false, false, false, 46))) : ("")))) {
                echo "<a href=\"";
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('safelink')->getCallable()(twig_get_attribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 46, $this->source); })()), "onlineGuideUrl", [], "any", false, false, false, 46)), "html_attr");
                echo "\" target=\"_blank\" rel=\"noreferrer noopener\" class=\"onlineGuide\">";
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreHome_ReadMoreOnlineGuide"), "html", null, true);
                echo "</a>";
            }
            // line 47
            echo "        ";
            if ((array_key_exists("reportLastUpdatedMessage", $context) && (isset($context["reportLastUpdatedMessage"]) || array_key_exists("reportLastUpdatedMessage", $context) ? $context["reportLastUpdatedMessage"] : (function () { throw new RuntimeError('Variable "reportLastUpdatedMessage" does not exist.', 47, $this->source); })()))) {
                echo "<span class=\"helpDate\">";
                echo (isset($context["reportLastUpdatedMessage"]) || array_key_exists("reportLastUpdatedMessage", $context) ? $context["reportLastUpdatedMessage"] : (function () { throw new RuntimeError('Variable "reportLastUpdatedMessage" does not exist.', 47, $this->source); })());
                echo "</span>";
            }
            // line 48
            echo "    </div>

    <div class=\"dataTableWrapper\">
        ";
            // line 51
            if (array_key_exists("error", $context)) {
                // line 52
                echo "            <div piwik-alert=\"danger\">";
                echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 52, $this->source); })()), "message", [], "any", false, false, false, 52), "html", null, true);
                echo "</div>
        ";
            } else {
                // line 54
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, ($context["properties"] ?? null), "show_header_message", [], "any", true, true, false, 54) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 54, $this->source); })()), "show_header_message", [], "any", false, false, false, 54)))) {
                    // line 55
                    echo "                <div class='datatableHeaderMessage'>";
                    echo twig_get_attribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 55, $this->source); })()), "show_header_message", [], "any", false, false, false, 55);
                    echo "</div>
            ";
                }
                // line 57
                echo "
            ";
                // line 58
                if ((isset($context["isDataTableEmpty"]) || array_key_exists("isDataTableEmpty", $context) ? $context["isDataTableEmpty"] : (function () { throw new RuntimeError('Variable "isDataTableEmpty" does not exist.', 58, $this->source); })())) {
                    // line 59
                    echo "                <div class=\"pk-emptyDataTable\">
                ";
                    // line 60
                    if ((array_key_exists("showReportDataWasPurgedMessage", $context) && (isset($context["showReportDataWasPurgedMessage"]) || array_key_exists("showReportDataWasPurgedMessage", $context) ? $context["showReportDataWasPurgedMessage"] : (function () { throw new RuntimeError('Variable "showReportDataWasPurgedMessage" does not exist.', 60, $this->source); })()))) {
                        // line 61
                        echo "                    ";
                        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreHome_DataForThisReportHasBeenPurged", (isset($context["deleteReportsOlderThan"]) || array_key_exists("deleteReportsOlderThan", $context) ? $context["deleteReportsOlderThan"] : (function () { throw new RuntimeError('Variable "deleteReportsOlderThan" does not exist.', 61, $this->source); })())), "html", null, true);
                        echo "
                ";
                    } elseif ((                    // line 62
array_key_exists("showPluginArchiveDisabled", $context) && (isset($context["showPluginArchiveDisabled"]) || array_key_exists("showPluginArchiveDisabled", $context) ? $context["showPluginArchiveDisabled"] : (function () { throw new RuntimeError('Variable "showPluginArchiveDisabled" does not exist.', 62, $this->source); })()))) {
                        // line 63
                        echo "                    ";
                        echo $this->env->getFilter('translate')->getCallable()("CoreHome_DataForThisReportHasBeenDisabled", (("<a target=\"_blank\" href=\"" . "https://matomo.org/faq/how-to-disable-archiving-the-segment-reports-for-specific-plugins") . "\">"), "</a>");
                        echo "
                ";
                    } elseif (twig_get_attribute($this->env, $this->source,                     // line 64
(isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 64, $this->source); })()), "no_data_message", [], "any", false, false, false, 64)) {
                        // line 65
                        echo "                    ";
                        echo twig_get_attribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 65, $this->source); })()), "no_data_message", [], "any", false, false, false, 65);
                        echo "
                ";
                    } else {
                        // line 67
                        echo "                    ";
                        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreHome_ThereIsNoDataForThisReport"), "html", null, true);
                        echo "
                ";
                    }
                    // line 69
                    echo "                </div>
            ";
                } else {
                    // line 71
                    echo "                ";
                    $this->loadTemplate((isset($context["visualizationTemplate"]) || array_key_exists("visualizationTemplate", $context) ? $context["visualizationTemplate"] : (function () { throw new RuntimeError('Variable "visualizationTemplate" does not exist.', 71, $this->source); })()), "@CoreHome/_dataTable.twig", 71)->display($context);
                    // line 72
                    echo "            ";
                }
                // line 73
                echo "
            ";
                // line 74
                if (twig_get_attribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 74, $this->source); })()), "show_footer", [], "any", false, false, false, 74)) {
                    // line 75
                    echo "                ";
                    $this->loadTemplate("@CoreHome/_dataTableFooter.twig", "@CoreHome/_dataTable.twig", 75)->display($context);
                    // line 76
                    echo "            ";
                }
                // line 77
                echo "
            ";
                // line 78
                $this->loadTemplate("@CoreHome/_dataTableJS.twig", "@CoreHome/_dataTable.twig", 78)->display(twig_array_merge($context, ["reportId" => twig_get_attribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 78, $this->source); })()), "report_id", [], "any", false, false, false, 78)]));
                // line 79
                echo "        ";
            }
            // line 80
            echo "    </div>
</div>

";
            // line 83
            if (( !twig_test_empty((isset($context["notifications"]) || array_key_exists("notifications", $context) ? $context["notifications"] : (function () { throw new RuntimeError('Variable "notifications" does not exist.', 83, $this->source); })())) && twig_length_filter($this->env, (isset($context["notifications"]) || array_key_exists("notifications", $context) ? $context["notifications"] : (function () { throw new RuntimeError('Variable "notifications" does not exist.', 83, $this->source); })())))) {
                // line 84
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["notifications"]) || array_key_exists("notifications", $context) ? $context["notifications"] : (function () { throw new RuntimeError('Variable "notifications" does not exist.', 84, $this->source); })()));
                foreach ($context['_seq'] as $context["notificationId"] => $context["n"]) {
                    // line 85
                    echo "
        ";
                    // line 86
                    echo $this->env->getFilter('notification')->getCallable()(twig_get_attribute($this->env, $this->source, $context["n"], "message", [], "any", false, false, false, 86), ["id" => $context["notificationId"], "type" => twig_get_attribute($this->env, $this->source, $context["n"], "type", [], "any", false, false, false, 86), "title" => twig_get_attribute($this->env, $this->source, $context["n"], "title", [], "any", false, false, false, 86), "noclear" => twig_get_attribute($this->env, $this->source, $context["n"], "hasNoClear", [], "any", false, false, false, 86), "context" => twig_get_attribute($this->env, $this->source, $context["n"], "context", [], "any", false, false, false, 86), "raw" => twig_get_attribute($this->env, $this->source, $context["n"], "raw", [], "any", false, false, false, 86)], false);
                    echo "

    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['notificationId'], $context['n'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            // line 90
            echo "
";
            // line 91
            if ((isset($context["showCardTableIsEmpty"]) || array_key_exists("showCardTableIsEmpty", $context) ? $context["showCardTableIsEmpty"] : (function () { throw new RuntimeError('Variable "showCardTableIsEmpty" does not exist.', 91, $this->source); })())) {
                // line 92
                echo "    </div></div>
";
            }
            // line 94
            echo "
";
            // line 95
            if ((isset($context["showCardAsContentBlock"]) || array_key_exists("showCardAsContentBlock", $context) ? $context["showCardAsContentBlock"] : (function () { throw new RuntimeError('Variable "showCardAsContentBlock" does not exist.', 95, $this->source); })())) {
                // line 96
                echo "    </div></div>
";
            } elseif (            // line 97
(isset($context["showOnlyTitleWithoutCard"]) || array_key_exists("showOnlyTitleWithoutCard", $context) ? $context["showOnlyTitleWithoutCard"] : (function () { throw new RuntimeError('Variable "showOnlyTitleWithoutCard" does not exist.', 97, $this->source); })())) {
                // line 98
                echo "    </div>
";
            }
        }
    }

    public function getTemplateName()
    {
        return "@CoreHome/_dataTable.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  326 => 98,  324 => 97,  321 => 96,  319 => 95,  316 => 94,  312 => 92,  310 => 91,  307 => 90,  297 => 86,  294 => 85,  289 => 84,  287 => 83,  282 => 80,  279 => 79,  277 => 78,  274 => 77,  271 => 76,  268 => 75,  266 => 74,  263 => 73,  260 => 72,  257 => 71,  253 => 69,  247 => 67,  241 => 65,  239 => 64,  234 => 63,  232 => 62,  227 => 61,  225 => 60,  222 => 59,  220 => 58,  217 => 57,  211 => 55,  208 => 54,  202 => 52,  200 => 51,  195 => 48,  188 => 47,  179 => 46,  173 => 45,  169 => 44,  166 => 43,  160 => 41,  158 => 40,  149 => 38,  141 => 37,  137 => 36,  133 => 35,  129 => 34,  114 => 33,  112 => 32,  110 => 31,  107 => 30,  102 => 27,  100 => 26,  98 => 25,  95 => 24,  90 => 22,  87 => 21,  85 => 20,  80 => 18,  72 => 16,  66 => 15,  63 => 14,  61 => 13,  57 => 11,  55 => 10,  52 => 9,  50 => 8,  48 => 7,  45 => 6,  43 => 5,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if properties.show_visualization_only %}
    {% include visualizationTemplate %}
{%- else -%}

{% set isDataTableEmpty = (dataTable is not defined or dataTable is null or dataTableHasNoData|default(false)) %}

{% set showCardAsContentBlock = (properties.show_as_content_block and properties.show_title and not isWidget) %}
{% set showOnlyTitleWithoutCard = not showCardAsContentBlock and properties.title and properties.show_title %}

{% if showCardAsContentBlock  %}
<div class=\"card\">
<div class=\"card-content\">
    {% if properties.title %}
        <h2 class=\"card-title\"
            {% if properties.title_edit_entity_url %}edit-url=\"{{ properties.title_edit_entity_url }}\"{% endif %}
            report-generated=\"{% if reportLastUpdatedMessage is defined %}{{ reportLastUpdatedMessage|raw }}{% endif %}\"
              piwik-enriched-headline
        >{{ properties.title }}</h2>
    {% endif %}
{% elseif showOnlyTitleWithoutCard %}
    <div>
    <h2>{{ properties.title }}</h2>
{% endif %}

{% set showCardTableIsEmpty = not properties.show_as_content_block and isDataTableEmpty and not isWidget %}
{% if showCardTableIsEmpty %}
    <div class=\"card\">
    <div class=\"card-content\">
{% endif %}

{% set summaryRowId = constant('Piwik\\\\DataTable::ID_SUMMARY_ROW') %}{# ID_SUMMARY_ROW #}
{% set isSubtable = javascriptVariablesToSet.idSubtable is defined and javascriptVariablesToSet.idSubtable != 0 %}
<div class=\"dataTable {{ visualizationCssClass }} {{ properties.datatable_css_class|default('') }} {% if isSubtable %}subDataTable{% endif %} {% if isComparing|default(false) %}isComparing{% endif %}\"
     data-table-type=\"{{ properties.datatable_js_type }}\"
     data-report=\"{{ properties.report_id }}\"
     data-report-metadata=\"{{ reportMetdadata|json_encode|e('html_attr') }}\"
     data-props=\"{% if clientSideProperties is empty %}{}{% else %}{{ clientSideProperties|json_encode }}{% endif %}\"
     data-params=\"{% if clientSideParameters is empty %}{}{% else %}{{ clientSideParameters|json_encode }}{% endif %}\">

    {% if properties.description %}
        <div class=\"card-description\">{{ properties.description }}</div>
    {% endif %}

    <div class=\"reportDocumentation\" data-content=\"{{ properties.documentation|default|e('html_attr') }}\">
        {% if properties.documentation|default is not empty %}<p ng-bind-html=\"{{ properties.documentation|json_encode|e('html_attr') }}\"></p>{% endif %}
        {% if properties.onlineGuideUrl|default is not empty %}<a href=\"{{ properties.onlineGuideUrl|safelink|e('html_attr') }}\" target=\"_blank\" rel=\"noreferrer noopener\" class=\"onlineGuide\">{{ 'CoreHome_ReadMoreOnlineGuide'|translate }}</a>{% endif %}
        {% if reportLastUpdatedMessage is defined and reportLastUpdatedMessage %}<span class=\"helpDate\">{{ reportLastUpdatedMessage|raw }}</span>{% endif %}
    </div>

    <div class=\"dataTableWrapper\">
        {% if error is defined %}
            <div piwik-alert=\"danger\">{{ error.message }}</div>
        {% else %}
            {% if properties.show_header_message is defined and properties.show_header_message is not empty %}
                <div class='datatableHeaderMessage'>{{ properties.show_header_message | raw }}</div>
            {% endif %}

            {% if isDataTableEmpty %}
                <div class=\"pk-emptyDataTable\">
                {% if showReportDataWasPurgedMessage is defined and showReportDataWasPurgedMessage %}
                    {{ 'CoreHome_DataForThisReportHasBeenPurged'|translate(deleteReportsOlderThan) }}
                {% elseif showPluginArchiveDisabled is defined and showPluginArchiveDisabled%}
                    {{ 'CoreHome_DataForThisReportHasBeenDisabled'|translate('<a target=\"_blank\" href=\"'~'https://matomo.org/faq/how-to-disable-archiving-the-segment-reports-for-specific-plugins' ~'\">', '</a>')|raw }}
                {% elseif properties.no_data_message %}
                    {{ properties.no_data_message|raw }}
                {% else %}
                    {{ 'CoreHome_ThereIsNoDataForThisReport'|translate }}
                {% endif %}
                </div>
            {% else %}
                {% include visualizationTemplate %}
            {% endif %}

            {% if properties.show_footer %}
                {% include \"@CoreHome/_dataTableFooter.twig\" %}
            {% endif %}

            {% include \"@CoreHome/_dataTableJS.twig\" with { reportId: properties.report_id } %}
        {% endif %}
    </div>
</div>

{% if notifications is not empty and notifications|length %}
    {% for notificationId, n in notifications %}

        {{ n.message|notification({'id': notificationId, 'type': n.type, 'title': n.title, 'noclear': n.hasNoClear, 'context': n.context, 'raw': n.raw}, false) }}

    {% endfor %}
{% endif %}

{% if showCardTableIsEmpty %}
    </div></div>
{% endif %}

{% if showCardAsContentBlock %}
    </div></div>
{% elseif showOnlyTitleWithoutCard %}
    </div>
{% endif %}

{%- endif %}
", "@CoreHome/_dataTable.twig", "/var/www/cse135.monster/public_html/matomo/plugins/CoreHome/templates/_dataTable.twig");
    }
}
