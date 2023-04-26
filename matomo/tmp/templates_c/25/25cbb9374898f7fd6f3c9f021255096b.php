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

/* @CoreHome/_dataTableActions.twig */
class __TwigTemplate_46b3d9722e5ef9a5332357d9337d71d7 extends Template
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
        echo " ";
        $context["randomIdForDropdown"] = twig_random($this->env, 999999);
        // line 2
        echo "
    ";
        // line 3
        if ((twig_get_attribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 3, $this->source); })()), "show_footer", [], "any", false, false, false, 3) && twig_get_attribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 3, $this->source); })()), "show_footer_icons", [], "any", false, false, false, 3))) {
            // line 4
            echo "
        <a class='dropdown-button dropdownConfigureIcon dataTableAction'
           href='javascript:;'
           data-target='dropdownConfigure";
            // line 7
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["randomIdForDropdown"]) || array_key_exists("randomIdForDropdown", $context) ? $context["randomIdForDropdown"] : (function () { throw new RuntimeError('Variable "randomIdForDropdown" does not exist.', 7, $this->source); })()), "html", null, true);
            echo "'><span class=\"icon-configure\"></span></a>

        ";
            // line 9
            $context["activeFooterIcon"] = "";
            // line 10
            echo "        ";
            $context["numIcons"] = 0;
            // line 11
            echo "        ";
            ob_start();
            // line 12
            echo "            <ul id='dropdownVisualizations";
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["randomIdForDropdown"]) || array_key_exists("randomIdForDropdown", $context) ? $context["randomIdForDropdown"] : (function () { throw new RuntimeError('Variable "randomIdForDropdown" does not exist.', 12, $this->source); })()), "html", null, true);
            echo "' class='dropdown-content dataTableFooterIcons'>
                ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["footerIcons"]) || array_key_exists("footerIcons", $context) ? $context["footerIcons"] : (function () { throw new RuntimeError('Variable "footerIcons" does not exist.', 13, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["footerIconGroup"]) {
                // line 14
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, twig_get_attribute($this->env, $this->source, $context["footerIconGroup"], "buttons", [], "any", false, false, false, 14), function ($__footerIcon__) use ($context, $macros) { $context["footerIcon"] = $__footerIcon__; return twig_get_attribute($this->env, $this->source, $context["footerIcon"], "icon", [], "any", false, false, false, 14); }));
                foreach ($context['_seq'] as $context["_key"] => $context["footerIcon"]) {
                    // line 15
                    echo "                        <li>
                            ";
                    // line 16
                    $context["numIcons"] = ((isset($context["numIcons"]) || array_key_exists("numIcons", $context) ? $context["numIcons"] : (function () { throw new RuntimeError('Variable "numIcons" does not exist.', 16, $this->source); })()) + 1);
                    // line 17
                    echo "                            ";
                    $context["isActiveEcommerceView"] = (twig_get_attribute($this->env, $this->source, ($context["clientSideParameters"] ?? null), "abandonedCarts", [], "any", true, true, false, 17) && (((twig_get_attribute($this->env, $this->source,                     // line 18
$context["footerIcon"], "id", [], "any", false, false, false, 18) == "ecommerceOrder") && (twig_get_attribute($this->env, $this->source, (isset($context["clientSideParameters"]) || array_key_exists("clientSideParameters", $context) ? $context["clientSideParameters"] : (function () { throw new RuntimeError('Variable "clientSideParameters" does not exist.', 18, $this->source); })()), "abandonedCarts", [], "any", false, false, false, 18) == 0)) || ((twig_get_attribute($this->env, $this->source,                     // line 19
$context["footerIcon"], "id", [], "any", false, false, false, 19) == "ecommerceAbandonedCart") && (twig_get_attribute($this->env, $this->source, (isset($context["clientSideParameters"]) || array_key_exists("clientSideParameters", $context) ? $context["clientSideParameters"] : (function () { throw new RuntimeError('Variable "clientSideParameters" does not exist.', 19, $this->source); })()), "abandonedCarts", [], "any", false, false, false, 19) == 1))));
                    // line 20
                    echo "                            <a class=\"";
                    echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["footerIconGroup"], "class", [], "any", false, false, false, 20), "html", null, true);
                    echo " tableIcon ";
                    if (((twig_get_attribute($this->env, $this->source, (isset($context["clientSideParameters"]) || array_key_exists("clientSideParameters", $context) ? $context["clientSideParameters"] : (function () { throw new RuntimeError('Variable "clientSideParameters" does not exist.', 20, $this->source); })()), "viewDataTable", [], "any", false, false, false, 20) == twig_get_attribute($this->env, $this->source, $context["footerIcon"], "id", [], "any", false, false, false, 20)) || (isset($context["isActiveEcommerceView"]) || array_key_exists("isActiveEcommerceView", $context) ? $context["isActiveEcommerceView"] : (function () { throw new RuntimeError('Variable "isActiveEcommerceView" does not exist.', 20, $this->source); })()))) {
                        echo "activeIcon";
                        $context["activeFooterIcon"] = twig_get_attribute($this->env, $this->source, $context["footerIcon"], "icon", [], "any", false, false, false, 20);
                    }
                    echo "\"
                               data-footer-icon-id=\"";
                    // line 21
                    echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["footerIcon"], "id", [], "any", false, false, false, 21), "html", null, true);
                    echo "\">
                                ";
                    // line 22
                    if ((is_string($__internal_compile_0 = twig_get_attribute($this->env, $this->source, $context["footerIcon"], "icon", [], "any", false, false, false, 22)) && is_string($__internal_compile_1 = "icon-") && ('' === $__internal_compile_1 || 0 === strpos($__internal_compile_0, $__internal_compile_1)))) {
                        // line 23
                        echo "                                    <span title=\"";
                        echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["footerIcon"], "title", [], "any", false, false, false, 23), "html", null, true);
                        echo "\" class=\"";
                        echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["footerIcon"], "icon", [], "any", false, false, false, 23), "html", null, true);
                        echo "\"></span>
                                ";
                    } else {
                        // line 25
                        echo "                                    <img width=\"16\" height=\"16\" title=\"";
                        echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["footerIcon"], "title", [], "any", false, false, false, 25), "html", null, true);
                        echo "\" src=\"";
                        echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["footerIcon"], "icon", [], "any", false, false, false, 25), "html", null, true);
                        echo "\"/>
                                ";
                    }
                    // line 27
                    echo "                                ";
                    if (twig_get_attribute($this->env, $this->source, $context["footerIcon"], "title", [], "any", true, true, false, 27)) {
                        echo "<span>";
                        echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["footerIcon"], "title", [], "any", false, false, false, 27), "html", null, true);
                        echo "</span>";
                    }
                    // line 28
                    echo "                            </a>
                        </li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['footerIcon'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 31
                echo "                    <li class=\"divider\"></li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['footerIconGroup'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "            </ul>
        ";
            $context["visualizationIcons"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 35
            echo "
        ";
            // line 36
            if (((isset($context["activeFooterIcon"]) || array_key_exists("activeFooterIcon", $context) ? $context["activeFooterIcon"] : (function () { throw new RuntimeError('Variable "activeFooterIcon" does not exist.', 36, $this->source); })()) && ((isset($context["numIcons"]) || array_key_exists("numIcons", $context) ? $context["numIcons"] : (function () { throw new RuntimeError('Variable "numIcons" does not exist.', 36, $this->source); })()) > 1))) {
                // line 37
                echo "            <a class=\"dropdown-button dataTableAction activateVisualizationSelection\"
               href=\"javascript:;\"
               data-target=\"dropdownVisualizations";
                // line 39
                echo \Piwik\piwik_escape_filter($this->env, (isset($context["randomIdForDropdown"]) || array_key_exists("randomIdForDropdown", $context) ? $context["randomIdForDropdown"] : (function () { throw new RuntimeError('Variable "randomIdForDropdown" does not exist.', 39, $this->source); })()), "html", null, true);
                echo "\">
                ";
                // line 40
                if ((is_string($__internal_compile_2 = (isset($context["activeFooterIcon"]) || array_key_exists("activeFooterIcon", $context) ? $context["activeFooterIcon"] : (function () { throw new RuntimeError('Variable "activeFooterIcon" does not exist.', 40, $this->source); })())) && is_string($__internal_compile_3 = "icon-") && ('' === $__internal_compile_3 || 0 === strpos($__internal_compile_2, $__internal_compile_3)))) {
                    // line 41
                    echo "                    <span title=\"";
                    echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreHome_ChangeVisualization"), "html_attr");
                    echo "\" class=\"";
                    echo \Piwik\piwik_escape_filter($this->env, (isset($context["activeFooterIcon"]) || array_key_exists("activeFooterIcon", $context) ? $context["activeFooterIcon"] : (function () { throw new RuntimeError('Variable "activeFooterIcon" does not exist.', 41, $this->source); })()), "html", null, true);
                    echo "\"></span>
                ";
                } else {
                    // line 43
                    echo "                    <img title=\"";
                    echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreHome_ChangeVisualization"), "html_attr");
                    echo "\" width=\"16\" height=\"16\" src=\"";
                    echo \Piwik\piwik_escape_filter($this->env, (isset($context["activeFooterIcon"]) || array_key_exists("activeFooterIcon", $context) ? $context["activeFooterIcon"] : (function () { throw new RuntimeError('Variable "activeFooterIcon" does not exist.', 43, $this->source); })()), "html", null, true);
                    echo "\"/>
                ";
                }
                // line 45
                echo "            </a>
            ";
                // line 46
                echo (isset($context["visualizationIcons"]) || array_key_exists("visualizationIcons", $context) ? $context["visualizationIcons"] : (function () { throw new RuntimeError('Variable "visualizationIcons" does not exist.', 46, $this->source); })());
                echo "
        ";
            }
            // line 48
            echo "
        ";
            // line 49
            if (twig_get_attribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 49, $this->source); })()), "show_export", [], "any", false, false, false, 49)) {
                // line 50
                echo "            ";
                $context["requestParams"] = json_encode(twig_get_attribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 50, $this->source); })()), "request_parameters_to_modify", [], "any", false, false, false, 50));
                // line 51
                echo "
            ";
                // line 52
                $context["formats"] = ["CSV" => "CSV", "TSV" => "TSV (Excel)", "XML" => "XML", "JSON" => "Json", "HTML" => "HTML"];
                // line 53
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 53, $this->source); })()), "show_export_as_rss_feed", [], "any", false, false, false, 53)) {
                    // line 54
                    echo "                ";
                    $context["formats"] = twig_array_merge((isset($context["formats"]) || array_key_exists("formats", $context) ? $context["formats"] : (function () { throw new RuntimeError('Variable "formats" does not exist.', 54, $this->source); })()), ["RSS" => "RSS"]);
                    // line 55
                    echo "            ";
                }
                // line 56
                echo "
            <a class=\"dataTableAction activateExportSelection\" piwik-report-export
               report-title=\"";
                // line 58
                echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 58, $this->source); })()), "title", [], "any", false, false, false, 58), "html_attr");
                echo "\" request-params=\"";
                echo \Piwik\piwik_escape_filter($this->env, (isset($context["requestParams"]) || array_key_exists("requestParams", $context) ? $context["requestParams"] : (function () { throw new RuntimeError('Variable "requestParams" does not exist.', 58, $this->source); })()), "html_attr");
                echo "\"
               api-method=\"";
                // line 59
                echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 59, $this->source); })()), "apiMethodToRequestDataTable", [], "any", false, false, false, 59), "html", null, true);
                echo "\" report-formats=\"";
                echo \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["formats"]) || array_key_exists("formats", $context) ? $context["formats"] : (function () { throw new RuntimeError('Variable "formats" does not exist.', 59, $this->source); })())), "html_attr");
                echo "\"
               href='javascript:;' title=\"";
                // line 60
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_ExportThisReport"), "html_attr");
                echo "\"
               max-filter-limit=\"";
                // line 61
                echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 61, $this->source); })()), "max_export_filter_limit", [], "any", false, false, false, 61), "html_attr");
                echo "\"
               ><span class=\"icon-export\"></span></a>
        ";
            }
            // line 64
            echo "
        ";
            // line 65
            if (twig_get_attribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 65, $this->source); })()), "show_export_as_image_icon", [], "any", false, false, false, 65)) {
                // line 66
                echo "            <a class=\"dataTableAction tableIcon\" href=\"javascript:;\" id=\"dataTableFooterExportAsImageIcon\"
               onclick=\"\$(this).closest('.dataTable').find('div.jqplot-target').trigger('piwikExportAsImage'); return false;\"
               title=\"";
                // line 68
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_ExportAsImage"), "html", null, true);
                echo "\">
                <span class=\"icon-image\"></span>
            </a>
        ";
            }
            // line 72
            echo "
        ";
            // line 73
            if (($this->env->getFunction('isPluginLoaded')->getCallable()("Annotations") &&  !twig_get_attribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 73, $this->source); })()), "hide_annotations_view", [], "any", false, false, false, 73))) {
                // line 74
                echo "            <a class='dataTableAction annotationView'
               href='javascript:;' title=\"";
                // line 75
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Annotations_Annotations"), "html_attr");
                echo "\"
            ><span class=\"icon-annotation\"></span></a>
        ";
            }
            // line 78
            echo "
        ";
            // line 79
            if (twig_get_attribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 79, $this->source); })()), "show_search", [], "any", false, false, false, 79)) {
                // line 80
                echo "            <a class='dropdown-button dataTableAction searchAction'
               href='javascript:;' title=\"";
                // line 81
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_Search"), "html_attr");
                echo "\"
               ><span class=\"icon-search\"></span>
                <span class=\"icon-close\" title=\"";
                // line 83
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreHome_CloseSearch"), "html_attr");
                echo "\"></span>
                <input id=\"widgetSearch_";
                // line 84
                echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 84, $this->source); })()), "report_id", [], "any", false, false, false, 84), "html", null, true);
                echo "\"
                       title=\"";
                // line 85
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreHome_DataTableHowToSearch"), "html_attr");
                echo "\"
                       type=\"text\"
                       class=\"dataTableSearchInput\" />
            </a>
        ";
            }
            // line 90
            echo "
        ";
            // line 91
            if ( !twig_test_empty(((twig_get_attribute($this->env, $this->source, ($context["properties"] ?? null), "datatable_actions", [], "any", true, true, false, 91)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["properties"] ?? null), "datatable_actions", [], "any", false, false, false, 91))) : ("")))) {
                // line 92
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 92, $this->source); })()), "datatable_actions", [], "any", false, false, false, 92));
                foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                    // line 93
                    echo "            <a class='dataTableAction ";
                    echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "id", [], "any", false, false, false, 93), "html_attr");
                    echo "'
               href='javascript:;' title=\"";
                    // line 94
                    echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "title", [], "any", false, false, false, 94), "html_attr");
                    echo "\"
            >
                ";
                    // line 96
                    if ((is_string($__internal_compile_4 = twig_get_attribute($this->env, $this->source, $context["action"], "icon", [], "any", false, false, false, 96)) && is_string($__internal_compile_5 = "icon-") && ('' === $__internal_compile_5 || 0 === strpos($__internal_compile_4, $__internal_compile_5)))) {
                        // line 97
                        echo "                    <span class=\"";
                        echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "icon", [], "any", false, false, false, 97), "html", null, true);
                        echo "\"></span>
                ";
                    } else {
                        // line 99
                        echo "                    <img width=\"16\" height=\"16\" title=\"";
                        echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "title", [], "any", false, false, false, 99), "html", null, true);
                        echo "\" src=\"";
                        echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "icon", [], "any", false, false, false, 99), "html", null, true);
                        echo "\"/>
                ";
                    }
                    // line 101
                    echo "            </a>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 103
                echo "        ";
            }
            // line 104
            echo "
        <ul id='dropdownConfigure";
            // line 105
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["randomIdForDropdown"]) || array_key_exists("randomIdForDropdown", $context) ? $context["randomIdForDropdown"] : (function () { throw new RuntimeError('Variable "randomIdForDropdown" does not exist.', 105, $this->source); })()), "html", null, true);
            echo "' class='dropdown-content tableConfiguration'>
            ";
            // line 106
            if (twig_get_attribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 106, $this->source); })()), "show_flatten_table", [], "any", false, false, false, 106)) {
                // line 107
                echo "                <li>
                    <div class=\"configItem dataTableFlatten\"></div>
                </li>
                ";
                // line 110
                if ((twig_get_attribute($this->env, $this->source, ($context["clientSideParameters"] ?? null), "flat", [], "any", true, true, false, 110) && (twig_get_attribute($this->env, $this->source, (isset($context["clientSideParameters"]) || array_key_exists("clientSideParameters", $context) ? $context["clientSideParameters"] : (function () { throw new RuntimeError('Variable "clientSideParameters" does not exist.', 110, $this->source); })()), "flat", [], "any", false, false, false, 110) == 1))) {
                    // line 111
                    echo "                    ";
                    if (((array_key_exists("hasMultipleDimensions", $context)) ? (_twig_default_filter((isset($context["hasMultipleDimensions"]) || array_key_exists("hasMultipleDimensions", $context) ? $context["hasMultipleDimensions"] : (function () { throw new RuntimeError('Variable "hasMultipleDimensions" does not exist.', 111, $this->source); })()))) : (""))) {
                        // line 112
                        echo "                        <li>
                            <div class=\"configItem dataTableShowDimensions\"></div>
                        </li>
                    ";
                    }
                    // line 116
                    echo "                    <li>
                        <div class=\"configItem dataTableIncludeAggregateRows\"></div>
                    </li>
                ";
                }
                // line 120
                echo "            ";
            }
            // line 121
            echo "            ";
            if (( !(isset($context["isDataTableEmpty"]) || array_key_exists("isDataTableEmpty", $context) ? $context["isDataTableEmpty"] : (function () { throw new RuntimeError('Variable "isDataTableEmpty" does not exist.', 121, $this->source); })()) && ((twig_get_attribute($this->env, $this->source, ($context["properties"] ?? null), "show_totals_row", [], "any", true, true, false, 121)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["properties"] ?? null), "show_totals_row", [], "any", false, false, false, 121), 0)) : (0)))) {
                // line 122
                echo "                <li>
                    <div class=\"configItem dataTableShowTotalsRow\"></div>
                </li>
            ";
            }
            // line 126
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 126, $this->source); })()), "show_exclude_low_population", [], "any", false, false, false, 126)) {
                // line 127
                echo "                <li>
                    <div class=\"configItem dataTableExcludeLowPopulation\"></div>
                </li>
            ";
            }
            // line 131
            echo "            ";
            if (( !twig_test_empty(((twig_get_attribute($this->env, $this->source, ($context["properties"] ?? null), "show_pivot_by_subtable", [], "any", true, true, false, 131)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["properties"] ?? null), "show_pivot_by_subtable", [], "any", false, false, false, 131))) : (""))) &&  !((array_key_exists("isComparing", $context)) ? (_twig_default_filter((isset($context["isComparing"]) || array_key_exists("isComparing", $context) ? $context["isComparing"] : (function () { throw new RuntimeError('Variable "isComparing" does not exist.', 131, $this->source); })()), false)) : (false)))) {
                // line 132
                echo "                <li>
                    <div class=\"configItem dataTablePivotBySubtable\"></div>
                </li>
            ";
            }
            // line 136
            echo "        </ul>

        ";
            // line 138
            if (twig_get_attribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 138, $this->source); })()), "show_periods", [], "any", false, false, false, 138)) {
                // line 139
                echo "            <a class=\"dropdown-button dataTableAction activatePeriodsSelection\"
               href=\"javascript:;\"
               title=\"";
                // line 141
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreHome_ChangePeriod"), "html_attr");
                echo "\"
               data-target=\"dropdownPeriods";
                // line 142
                echo \Piwik\piwik_escape_filter($this->env, (isset($context["randomIdForDropdown"]) || array_key_exists("randomIdForDropdown", $context) ? $context["randomIdForDropdown"] : (function () { throw new RuntimeError('Variable "randomIdForDropdown" does not exist.', 142, $this->source); })()), "html", null, true);
                echo "\"
            >
                <div><span class=\"icon-calendar\"></span><span class=\"periodName\">";
                // line 144
                echo \Piwik\piwik_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["properties"] ?? null), "translations", [], "any", false, true, false, 144), twig_get_attribute($this->env, $this->source, (isset($context["clientSideParameters"]) || array_key_exists("clientSideParameters", $context) ? $context["clientSideParameters"] : (function () { throw new RuntimeError('Variable "clientSideParameters" does not exist.', 144, $this->source); })()), "period", [], "any", false, false, false, 144), [], "array", true, true, false, 144)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["properties"] ?? null), "translations", [], "any", false, true, false, 144), twig_get_attribute($this->env, $this->source, (isset($context["clientSideParameters"]) || array_key_exists("clientSideParameters", $context) ? $context["clientSideParameters"] : (function () { throw new RuntimeError('Variable "clientSideParameters" does not exist.', 144, $this->source); })()), "period", [], "any", false, false, false, 144), [], "array", false, false, false, 144), twig_get_attribute($this->env, $this->source, (isset($context["clientSideParameters"]) || array_key_exists("clientSideParameters", $context) ? $context["clientSideParameters"] : (function () { throw new RuntimeError('Variable "clientSideParameters" does not exist.', 144, $this->source); })()), "period", [], "any", false, false, false, 144))) : (twig_get_attribute($this->env, $this->source, (isset($context["clientSideParameters"]) || array_key_exists("clientSideParameters", $context) ? $context["clientSideParameters"] : (function () { throw new RuntimeError('Variable "clientSideParameters" does not exist.', 144, $this->source); })()), "period", [], "any", false, false, false, 144))), "html", null, true);
                echo "</span></div>
            </a>
            <ul id='dropdownPeriods";
                // line 146
                echo \Piwik\piwik_escape_filter($this->env, (isset($context["randomIdForDropdown"]) || array_key_exists("randomIdForDropdown", $context) ? $context["randomIdForDropdown"] : (function () { throw new RuntimeError('Variable "randomIdForDropdown" does not exist.', 146, $this->source); })()), "html", null, true);
                echo "' class='dropdown-content dataTablePeriods'>
                ";
                // line 147
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 147, $this->source); })()), "selectable_periods", [], "any", false, false, false, 147));
                foreach ($context['_seq'] as $context["_key"] => $context["selectablePeriod"]) {
                    // line 148
                    echo "                    <li>
                        <a data-period=\"";
                    // line 149
                    echo \Piwik\piwik_escape_filter($this->env, $context["selectablePeriod"], "html", null, true);
                    echo "\" class=\"tableIcon ";
                    if ((((twig_get_attribute($this->env, $this->source, ($context["clientSideParameters"] ?? null), "period", [], "any", true, true, false, 149)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["clientSideParameters"] ?? null), "period", [], "any", false, false, false, 149), "")) : ("")) == $context["selectablePeriod"])) {
                        echo "activeIcon";
                    }
                    echo "\">
                            <span>";
                    // line 150
                    echo \Piwik\piwik_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["properties"] ?? null), "translations", [], "any", false, true, false, 150), $context["selectablePeriod"], [], "array", true, true, false, 150)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["properties"] ?? null), "translations", [], "any", false, true, false, 150), $context["selectablePeriod"], [], "array", false, false, false, 150), $context["selectablePeriod"])) : ($context["selectablePeriod"])), "html", null, true);
                    echo "</span>
                        </a>
                    </li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['selectablePeriod'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 154
                echo "            </ul>
        ";
            }
            // line 156
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "@CoreHome/_dataTableActions.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  455 => 156,  451 => 154,  441 => 150,  433 => 149,  430 => 148,  426 => 147,  422 => 146,  417 => 144,  412 => 142,  408 => 141,  404 => 139,  402 => 138,  398 => 136,  392 => 132,  389 => 131,  383 => 127,  380 => 126,  374 => 122,  371 => 121,  368 => 120,  362 => 116,  356 => 112,  353 => 111,  351 => 110,  346 => 107,  344 => 106,  340 => 105,  337 => 104,  334 => 103,  327 => 101,  319 => 99,  313 => 97,  311 => 96,  306 => 94,  301 => 93,  296 => 92,  294 => 91,  291 => 90,  283 => 85,  279 => 84,  275 => 83,  270 => 81,  267 => 80,  265 => 79,  262 => 78,  256 => 75,  253 => 74,  251 => 73,  248 => 72,  241 => 68,  237 => 66,  235 => 65,  232 => 64,  226 => 61,  222 => 60,  216 => 59,  210 => 58,  206 => 56,  203 => 55,  200 => 54,  197 => 53,  195 => 52,  192 => 51,  189 => 50,  187 => 49,  184 => 48,  179 => 46,  176 => 45,  168 => 43,  160 => 41,  158 => 40,  154 => 39,  150 => 37,  148 => 36,  145 => 35,  141 => 33,  134 => 31,  126 => 28,  119 => 27,  111 => 25,  103 => 23,  101 => 22,  97 => 21,  87 => 20,  85 => 19,  84 => 18,  82 => 17,  80 => 16,  77 => 15,  72 => 14,  68 => 13,  63 => 12,  60 => 11,  57 => 10,  55 => 9,  50 => 7,  45 => 4,  43 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" {% set randomIdForDropdown = random(999999) %}

    {% if properties.show_footer and properties.show_footer_icons %}

        <a class='dropdown-button dropdownConfigureIcon dataTableAction'
           href='javascript:;'
           data-target='dropdownConfigure{{ randomIdForDropdown }}'><span class=\"icon-configure\"></span></a>

        {% set activeFooterIcon = '' %}
        {% set numIcons = 0 %}
        {% set visualizationIcons %}
            <ul id='dropdownVisualizations{{ randomIdForDropdown }}' class='dropdown-content dataTableFooterIcons'>
                {% for footerIconGroup in footerIcons %}
                    {% for footerIcon in footerIconGroup.buttons|filter(footerIcon => footerIcon.icon) %}
                        <li>
                            {% set numIcons = numIcons + 1 %}
                            {% set isActiveEcommerceView = clientSideParameters.abandonedCarts is defined and
                            ((footerIcon.id == 'ecommerceOrder' and clientSideParameters.abandonedCarts == 0) or
                            (footerIcon.id == 'ecommerceAbandonedCart' and clientSideParameters.abandonedCarts == 1)) %}
                            <a class=\"{{ footerIconGroup.class }} tableIcon {% if clientSideParameters.viewDataTable == footerIcon.id or isActiveEcommerceView %}activeIcon{% set activeFooterIcon = footerIcon.icon %}{% endif %}\"
                               data-footer-icon-id=\"{{ footerIcon.id }}\">
                                {% if footerIcon.icon starts with 'icon-' %}
                                    <span title=\"{{ footerIcon.title }}\" class=\"{{ footerIcon.icon }}\"></span>
                                {% else %}
                                    <img width=\"16\" height=\"16\" title=\"{{ footerIcon.title }}\" src=\"{{ footerIcon.icon }}\"/>
                                {% endif %}
                                {% if footerIcon.title is defined %}<span>{{ footerIcon.title }}</span>{% endif %}
                            </a>
                        </li>
                    {% endfor %}
                    <li class=\"divider\"></li>
                {% endfor %}
            </ul>
        {% endset %}

        {% if activeFooterIcon and numIcons > 1 %}
            <a class=\"dropdown-button dataTableAction activateVisualizationSelection\"
               href=\"javascript:;\"
               data-target=\"dropdownVisualizations{{ randomIdForDropdown }}\">
                {% if activeFooterIcon starts with 'icon-' %}
                    <span title=\"{{ 'CoreHome_ChangeVisualization'|translate|e('html_attr') }}\" class=\"{{ activeFooterIcon }}\"></span>
                {% else %}
                    <img title=\"{{ 'CoreHome_ChangeVisualization'|translate|e('html_attr') }}\" width=\"16\" height=\"16\" src=\"{{ activeFooterIcon }}\"/>
                {% endif %}
            </a>
            {{ visualizationIcons|raw }}
        {% endif %}

        {% if properties.show_export %}
            {% set requestParams = properties.request_parameters_to_modify|json_encode %}

            {% set formats = {\"CSV\":\"CSV\",\"TSV\":\"TSV (Excel)\",\"XML\":\"XML\",\"JSON\":\"Json\",\"HTML\":\"HTML\"} %}
            {% if properties.show_export_as_rss_feed %}
                {% set formats = formats|merge({\"RSS\": \"RSS\"}) %}
            {% endif %}

            <a class=\"dataTableAction activateExportSelection\" piwik-report-export
               report-title=\"{{ properties.title|e('html_attr') }}\" request-params=\"{{ requestParams|e('html_attr') }}\"
               api-method=\"{{ properties.apiMethodToRequestDataTable }}\" report-formats=\"{{ formats|json_encode|e('html_attr') }}\"
               href='javascript:;' title=\"{{ 'General_ExportThisReport'|translate|e('html_attr') }}\"
               max-filter-limit=\"{{ properties.max_export_filter_limit|e('html_attr') }}\"
               ><span class=\"icon-export\"></span></a>
        {% endif %}

        {% if properties.show_export_as_image_icon %}
            <a class=\"dataTableAction tableIcon\" href=\"javascript:;\" id=\"dataTableFooterExportAsImageIcon\"
               onclick=\"\$(this).closest('.dataTable').find('div.jqplot-target').trigger('piwikExportAsImage'); return false;\"
               title=\"{{ 'General_ExportAsImage'|translate }}\">
                <span class=\"icon-image\"></span>
            </a>
        {% endif %}

        {% if isPluginLoaded('Annotations') and not properties.hide_annotations_view %}
            <a class='dataTableAction annotationView'
               href='javascript:;' title=\"{{ 'Annotations_Annotations'|translate|e('html_attr') }}\"
            ><span class=\"icon-annotation\"></span></a>
        {% endif %}

        {% if properties.show_search %}
            <a class='dropdown-button dataTableAction searchAction'
               href='javascript:;' title=\"{{ 'General_Search'|translate|e('html_attr') }}\"
               ><span class=\"icon-search\"></span>
                <span class=\"icon-close\" title=\"{{ 'CoreHome_CloseSearch'|translate|e('html_attr') }}\"></span>
                <input id=\"widgetSearch_{{ properties.report_id }}\"
                       title=\"{{ 'CoreHome_DataTableHowToSearch'|translate|e('html_attr') }}\"
                       type=\"text\"
                       class=\"dataTableSearchInput\" />
            </a>
        {% endif %}

        {% if properties.datatable_actions|default is not empty %}
        {% for action in properties.datatable_actions %}
            <a class='dataTableAction {{ action.id|e('html_attr') }}'
               href='javascript:;' title=\"{{ action.title|e('html_attr') }}\"
            >
                {% if action.icon starts with 'icon-' %}
                    <span class=\"{{ action.icon }}\"></span>
                {% else %}
                    <img width=\"16\" height=\"16\" title=\"{{ action.title }}\" src=\"{{ action.icon }}\"/>
                {% endif %}
            </a>
        {% endfor %}
        {% endif %}

        <ul id='dropdownConfigure{{ randomIdForDropdown }}' class='dropdown-content tableConfiguration'>
            {% if properties.show_flatten_table %}
                <li>
                    <div class=\"configItem dataTableFlatten\"></div>
                </li>
                {% if clientSideParameters.flat is defined and clientSideParameters.flat == 1 %}
                    {% if hasMultipleDimensions|default %}
                        <li>
                            <div class=\"configItem dataTableShowDimensions\"></div>
                        </li>
                    {% endif %}
                    <li>
                        <div class=\"configItem dataTableIncludeAggregateRows\"></div>
                    </li>
                {% endif %}
            {% endif %}
            {% if not isDataTableEmpty and properties.show_totals_row|default(0) %}
                <li>
                    <div class=\"configItem dataTableShowTotalsRow\"></div>
                </li>
            {% endif %}
            {% if properties.show_exclude_low_population %}
                <li>
                    <div class=\"configItem dataTableExcludeLowPopulation\"></div>
                </li>
            {% endif %}
            {% if properties.show_pivot_by_subtable|default is not empty and not isComparing|default(false) %}
                <li>
                    <div class=\"configItem dataTablePivotBySubtable\"></div>
                </li>
            {% endif %}
        </ul>

        {% if properties.show_periods %}
            <a class=\"dropdown-button dataTableAction activatePeriodsSelection\"
               href=\"javascript:;\"
               title=\"{{ 'CoreHome_ChangePeriod'|translate|e('html_attr') }}\"
               data-target=\"dropdownPeriods{{ randomIdForDropdown }}\"
            >
                <div><span class=\"icon-calendar\"></span><span class=\"periodName\">{{ properties.translations[clientSideParameters.period]|default(clientSideParameters.period) }}</span></div>
            </a>
            <ul id='dropdownPeriods{{ randomIdForDropdown }}' class='dropdown-content dataTablePeriods'>
                {% for selectablePeriod in properties.selectable_periods %}
                    <li>
                        <a data-period=\"{{ selectablePeriod }}\" class=\"tableIcon {% if (clientSideParameters.period|default('')) == selectablePeriod %}activeIcon{% endif %}\">
                            <span>{{ properties.translations[selectablePeriod]|default(selectablePeriod) }}</span>
                        </a>
                    </li>
                {% endfor %}
            </ul>
        {% endif %}
    {% endif %}
", "@CoreHome/_dataTableActions.twig", "/var/www/cse135.monster/public_html/matomo/plugins/CoreHome/templates/_dataTableActions.twig");
    }
}
