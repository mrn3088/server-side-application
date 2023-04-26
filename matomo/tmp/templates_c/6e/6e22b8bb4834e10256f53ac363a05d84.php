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

/* @Live/getLastVisitsStart.twig */
class __TwigTemplate_896fe5bfc33482e74089d534136e3f5d extends Template
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
        // line 2
        $context["maxPagesDisplayedByVisitor"] = 100;
        // line 3
        echo "
";
        // line 4
        if ( !twig_test_empty((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 4, $this->source); })()))) {
            // line 5
            echo "<div piwik-alert=\"danger\">";
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 5, $this->source); })()), "html", null, true);
            echo "</div>
";
        } else {
            // line 7
            echo "<ul id=\"visitsLive\">
    ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["visitors"]) || array_key_exists("visitors", $context) ? $context["visitors"] : (function () { throw new RuntimeError('Variable "visitors" does not exist.', 8, $this->source); })()), "getRows", [], "method", false, false, false, 8));
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
            foreach ($context['_seq'] as $context["_key"] => $context["visitor"]) {
                // line 9
                echo "        <li id=\"";
                echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["visitor"], "getColumn", [0 => "idVisit"], "method", false, false, false, 9), "html", null, true);
                echo "\" class=\"visit\">
            <div style=\"display:none;\" class=\"idvisit\">";
                // line 10
                echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["visitor"], "idVisit", [], "any", false, false, false, 10), "html", null, true);
                echo "</div>
            <div title=\"";
                // line 11
                echo \Piwik\piwik_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["visitor"], "getColumn", [0 => "actionDetails"], "method", false, false, false, 11)), "html", null, true);
                echo " ";
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_Actions"), "html", null, true);
                echo "\" class=\"datetime\">
                <span style=\"display:none;\" class=\"serverTimestamp\">";
                // line 12
                echo twig_get_attribute($this->env, $this->source, $context["visitor"], "getColumn", [0 => "serverTimestamp"], "method", false, false, false, 12);
                echo "</span>
                ";
                // line 13
                echo $this->env->getFunction('postEvent')->getCallable()("Live.visitorLogWidgetViewBeforeVisitInfo", $context["visitor"]);
                echo "
                ";
                // line 14
                $context["year"] = twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["visitor"], "getColumn", [0 => "serverTimestamp"], "method", false, false, false, 14), "Y");
                // line 15
                echo "                <span class=\"realTimeWidget_datetime\">";
                echo \Piwik\piwik_escape_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["visitor"], "getColumn", [0 => "serverDatePretty"], "method", false, false, false, 15), [(isset($context["year"]) || array_key_exists("year", $context) ? $context["year"] : (function () { throw new RuntimeError('Variable "year" does not exist.', 15, $this->source); })()) => " "]), "html", null, true);
                echo " - ";
                echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["visitor"], "getColumn", [0 => "serverTimePretty"], "method", false, false, false, 15), "html", null, true);
                echo " ";
                if ((twig_get_attribute($this->env, $this->source, $context["visitor"], "getColumn", [0 => "visitDuration"], "method", false, false, false, 15) > 0)) {
                    echo "(";
                    echo twig_get_attribute($this->env, $this->source, $context["visitor"], "getColumn", [0 => "visitDurationPretty"], "method", false, false, false, 15);
                    echo ")";
                }
                echo "</span>
                ";
                // line 16
                if ( !twig_test_empty(((twig_get_attribute($this->env, $this->source, $context["visitor"], "getColumn", [0 => "userId"], "method", true, true, false, 16)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["visitor"], "getColumn", [0 => "userId"], "method", false, false, false, 16), false)) : (false)))) {
                    // line 17
                    echo "                  &nbsp;  <a class=\"visits-live-launch-visitor-profile rightLink\" title=\"";
                    echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Live_ViewVisitorProfile"), "html", null, true);
                    echo " ";
                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["visitor"], "getColumn", [0 => "userId"], "method", false, false, false, 17))) {
                        echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["visitor"], "getColumn", [0 => "userId"], "method", false, false, false, 17), "html", null, true);
                    }
                    echo "\" data-visitor-id=\"";
                    echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["visitor"], "getColumn", [0 => "visitorId"], "method", false, false, false, 17), "html", null, true);
                    echo "\">
                        <span>";
                    // line 18
                    echo $this->env->getFilter('rawSafeDecoded')->getCallable()(twig_get_attribute($this->env, $this->source, $context["visitor"], "getColumn", [0 => "userId"], "method", false, false, false, 18));
                    echo "</span>
                    </a>
                ";
                }
                // line 21
                echo "
                ";
                // line 22
                echo $this->env->getFunction('postEvent')->getCallable()("Live.renderVisitorIcons", $context["visitor"]);
                echo "
                ";
                // line 23
                if (((isset($context["isProfileEnabled"]) || array_key_exists("isProfileEnabled", $context) ? $context["isProfileEnabled"] : (function () { throw new RuntimeError('Variable "isProfileEnabled" does not exist.', 23, $this->source); })()) &&  !(isset($context["userIsAnonymous"]) || array_key_exists("userIsAnonymous", $context) ? $context["userIsAnonymous"] : (function () { throw new RuntimeError('Variable "userIsAnonymous" does not exist.', 23, $this->source); })()))) {
                    // line 24
                    echo "                <a class=\"visits-live-launch-visitor-profile rightLink\" title=\"";
                    echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Live_ViewVisitorProfile"), "html", null, true);
                    echo " ";
                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["visitor"], "getColumn", [0 => "userId"], "method", false, false, false, 24))) {
                        echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["visitor"], "getColumn", [0 => "userId"], "method", false, false, false, 24), "html", null, true);
                    }
                    echo "\" data-visitor-id=\"";
                    echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["visitor"], "getColumn", [0 => "visitorId"], "method", false, false, false, 24), "html", null, true);
                    echo "\">
                    <span class=\"icon-visitor-profile\"></span>
                </a>
                ";
                }
                // line 28
                echo "
                <span class=\"referrer\">
                    ";
                // line 30
                $this->loadTemplate("@Referrers/_visitorDetails.twig", "@Live/getLastVisitsStart.twig", 30)->display(twig_array_merge($context, ["visitInfo" => $context["visitor"]]));
                // line 31
                echo "                 </span>
            </div>
            <div id=\"";
                // line 33
                echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["visitor"], "getColumn", [0 => "idVisit"], "method", false, false, false, 33), "html_attr");
                echo "_actions\" class=\"settings\">
                <span class=\"pagesTitle\"
                      title=\"";
                // line 35
                echo \Piwik\piwik_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["visitor"], "getColumn", [0 => "actionDetails"], "method", false, false, false, 35)), "html", null, true);
                echo " ";
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_Actions"), "html", null, true);
                echo "\"
                      >";
                // line 36
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_Actions"), "html", null, true);
                echo ":</span>&nbsp;
                ";
                // line 37
                $context["col"] = 0;
                // line 38
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["visitor"], "getColumn", [0 => "actionDetails"], "method", false, false, false, 38));
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
                foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                    // line 39
                    echo "                    ";
                    if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 39) <= (isset($context["maxPagesDisplayedByVisitor"]) || array_key_exists("maxPagesDisplayedByVisitor", $context) ? $context["maxPagesDisplayedByVisitor"] : (function () { throw new RuntimeError('Variable "maxPagesDisplayedByVisitor" does not exist.', 39, $this->source); })()))) {
                        // line 40
                        echo "
                        ";
                        // line 41
                        if (((twig_get_attribute($this->env, $this->source, $context["action"], "type", [], "any", false, false, false, 41) == "ecommerceOrder") || (twig_get_attribute($this->env, $this->source, $context["action"], "type", [], "any", false, false, false, 41) == "ecommerceAbandonedCart"))) {
                            // line 42
                            echo "                            ";
                            ob_start();
                            // line 43
                            if ((twig_get_attribute($this->env, $this->source, $context["action"], "type", [], "any", false, false, false, 43) == "ecommerceOrder")) {
                                // line 44
                                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Goals_EcommerceOrder"), "html", null, true);
                            } else {
                                // line 46
                                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Goals_AbandonedCart"), "html", null, true);
                            }
                            // line 48
                            echo "
 - ";
                            // line 49
                            if ((twig_get_attribute($this->env, $this->source, $context["action"], "type", [], "any", false, false, false, 49) == "ecommerceOrder")) {
                                // line 50
                                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_ColumnRevenue"), "html", null, true);
                                echo ":";
                            } else {
                                // line 52
                                ob_start();
                                // line 53
                                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_ColumnRevenue"), "html", null, true);
                                $context["revenueLeft"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                                // line 55
                                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Goals_LeftInCart", (isset($context["revenueLeft"]) || array_key_exists("revenueLeft", $context) ? $context["revenueLeft"] : (function () { throw new RuntimeError('Variable "revenueLeft" does not exist.', 55, $this->source); })())), "html", null, true);
                                echo ":";
                            }
                            // line 56
                            echo " ";
                            echo $this->env->getFilter('money')->getCallable()(twig_get_attribute($this->env, $this->source, $context["action"], "revenue", [], "any", false, false, false, 56), (isset($context["idSite"]) || array_key_exists("idSite", $context) ? $context["idSite"] : (function () { throw new RuntimeError('Variable "idSite" does not exist.', 56, $this->source); })()));
                            // line 58
                            echo "
 - ";
                            echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "serverTimePretty", [], "any", false, false, false, 58), "html", null, true);
                            // line 59
                            echo "
";
                            // line 60
                            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["action"], "itemDetails", [], "any", false, false, false, 60))) {
                                // line 61
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["action"], "itemDetails", [], "any", false, false, false, 61));
                                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                                    // line 62
                                    echo "
# ";
                                    echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "itemSKU", [], "any", false, false, false, 62), "html", null, true);
                                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["product"], "itemName", [], "any", false, false, false, 62))) {
                                        echo ": ";
                                        echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "itemName", [], "any", false, false, false, 62), "html", null, true);
                                    }
                                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["product"], "itemCategory", [], "any", false, false, false, 62))) {
                                        echo " (";
                                        echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "itemCategory", [], "any", false, false, false, 62), "html", null, true);
                                        echo ")";
                                    }
                                    echo ", ";
                                    echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_Quantity"), "html", null, true);
                                    echo ": ";
                                    echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 62), "html", null, true);
                                    echo ", ";
                                    echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_Price"), "html", null, true);
                                    echo ": ";
                                    echo $this->env->getFilter('money')->getCallable()(twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 62), (isset($context["idSite"]) || array_key_exists("idSite", $context) ? $context["idSite"] : (function () { throw new RuntimeError('Variable "idSite" does not exist.', 62, $this->source); })()));
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                            }
                            // line 65
                            echo "                            ";
                            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                            // line 66
                            echo "                            <span title=\"";
                            echo \Piwik\piwik_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 66, $this->source); })()), "html", null, true);
                            echo "\">
\t\t\t\t\t\t        <img class='iconPadding' src=\"";
                            // line 67
                            echo \Piwik\piwik_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["action"], "iconSVG", [], "any", true, true, false, 67)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["action"], "iconSVG", [], "any", false, false, false, 67), twig_get_attribute($this->env, $this->source, $context["action"], "icon", [], "any", false, false, false, 67))) : (twig_get_attribute($this->env, $this->source, $context["action"], "icon", [], "any", false, false, false, 67))), "html", null, true);
                            echo "\"/>
                                ";
                            // line 68
                            if ((twig_get_attribute($this->env, $this->source, $context["action"], "type", [], "any", false, false, false, 68) == "ecommerceOrder")) {
                                // line 69
                                echo "                                    ";
                                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_ColumnRevenue"), "html", null, true);
                                echo ": ";
                                echo $this->env->getFilter('money')->getCallable()(twig_get_attribute($this->env, $this->source, $context["action"], "revenue", [], "any", false, false, false, 69), (isset($context["idSite"]) || array_key_exists("idSite", $context) ? $context["idSite"] : (function () { throw new RuntimeError('Variable "idSite" does not exist.', 69, $this->source); })()));
                                echo "
                                ";
                            }
                            // line 71
                            echo "                            </span>

                        ";
                        } else {
                            // line 74
                            echo "
                            ";
                            // line 75
                            if ((twig_get_attribute($this->env, $this->source, $context["action"], "url", [], "any", true, true, false, 75) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["action"], "url", [], "any", false, false, false, 75)))) {
                                // line 76
                                echo "                            <a href=\"";
                                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('safelink')->getCallable()(twig_get_attribute($this->env, $this->source, $context["action"], "url", [], "any", false, false, false, 76)), "html_attr");
                                echo "\" target=\"_blank\" rel=\"noreferrer noopener\">
                            ";
                            }
                            // line 78
                            echo "                                ";
                            if ((twig_get_attribute($this->env, $this->source, $context["action"], "type", [], "any", false, false, false, 78) == "action")) {
                                // line 80
                                ob_start();
                                // line 81
                                if ( !twig_test_empty(twig_trim_filter(twig_get_attribute($this->env, $this->source, $context["action"], "url", [], "any", false, false, false, 81)))) {
                                    echo "<span class='tooltip-action-url'>";
                                    echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "url", [], "any", false, false, false, 81), "html", null, true);
                                    echo "</span>";
                                }
                                // line 82
                                echo "
";
                                // line 83
                                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["action"], "pageTitle", [], "any", false, false, false, 83))) {
                                    echo "<span class='tooltip-action-page-title'>";
                                    echo $this->env->getFilter('rawSafeDecoded')->getCallable()(twig_get_attribute($this->env, $this->source, $context["action"], "pageTitle", [], "any", false, false, false, 83));
                                    echo "</span>";
                                }
                                // line 84
                                echo "
<span class=\"tooltip-action-server-time\">";
                                // line 85
                                echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "serverTimePretty", [], "any", false, false, false, 85), "html", null, true);
                                echo "</span>
    ";
                                // line 86
                                if (twig_get_attribute($this->env, $this->source, $context["action"], "timeSpentPretty", [], "any", true, true, false, 86)) {
                                    echo "<span class='tooltip-time-on-page'>";
                                    echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_TimeOnPage"), "html", null, true);
                                    echo ": ";
                                    echo twig_get_attribute($this->env, $this->source, $context["action"], "timeSpentPretty", [], "any", false, false, false, 86);
                                    echo "</span>";
                                }
                                $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                                // line 88
                                echo "                                    <img class='iconPadding' src=\"";
                                echo \Piwik\piwik_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["action"], "iconSVG", [], "any", true, true, false, 88)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["action"], "iconSVG", [], "any", false, false, false, 88), twig_get_attribute($this->env, $this->source, $context["action"], "icon", [], "any", false, false, false, 88))) : (twig_get_attribute($this->env, $this->source, $context["action"], "icon", [], "any", false, false, false, 88))), "html", null, true);
                                echo "\" title=\"";
                                echo \Piwik\piwik_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 88, $this->source); })()), "html_attr");
                                echo "\"/>
                                ";
                            } elseif (((twig_get_attribute($this->env, $this->source,                             // line 89
$context["action"], "type", [], "any", false, false, false, 89) == "outlink") || (twig_get_attribute($this->env, $this->source, $context["action"], "type", [], "any", false, false, false, 89) == "download"))) {
                                // line 90
                                echo "                                    <img class='iconPadding' src=\"";
                                echo \Piwik\piwik_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["action"], "iconSVG", [], "any", true, true, false, 90)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["action"], "iconSVG", [], "any", false, false, false, 90), twig_get_attribute($this->env, $this->source, $context["action"], "icon", [], "any", false, false, false, 90))) : (twig_get_attribute($this->env, $this->source, $context["action"], "icon", [], "any", false, false, false, 90))), "html", null, true);
                                echo "\"
                                         title=\"";
                                // line 91
                                if (twig_get_attribute($this->env, $this->source, $context["action"], "url", [], "any", true, true, false, 91)) {
                                    echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "url", [], "any", false, false, false, 91), "html", null, true);
                                    echo " - ";
                                }
                                echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "serverTimePretty", [], "any", false, false, false, 91), "html", null, true);
                                echo "\"/>
                                ";
                            } elseif ((twig_get_attribute($this->env, $this->source,                             // line 92
$context["action"], "type", [], "any", false, false, false, 92) == "search")) {
                                // line 93
                                echo "                                    <img class='iconPadding' src=\"";
                                echo \Piwik\piwik_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["action"], "iconSVG", [], "any", true, true, false, 93)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["action"], "iconSVG", [], "any", false, false, false, 93), twig_get_attribute($this->env, $this->source, $context["action"], "icon", [], "any", false, false, false, 93))) : (twig_get_attribute($this->env, $this->source, $context["action"], "icon", [], "any", false, false, false, 93))), "html", null, true);
                                echo "\"
                                         title=\"";
                                // line 94
                                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Actions_SubmenuSitesearch"), "html", null, true);
                                echo ": ";
                                echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "siteSearchKeyword", [], "any", false, false, false, 94), "html", null, true);
                                echo " - ";
                                echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "serverTimePretty", [], "any", false, false, false, 94), "html", null, true);
                                echo "\"/>
                                ";
                            } elseif ( !twig_test_empty(((twig_get_attribute($this->env, $this->source,                             // line 95
$context["action"], "eventCategory", [], "any", true, true, false, 95)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["action"], "eventCategory", [], "any", false, false, false, 95), false)) : (false)))) {
                                // line 96
                                echo "                                    <img  class=\"iconPadding\" src='";
                                echo \Piwik\piwik_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["action"], "iconSVG", [], "any", true, true, false, 96)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["action"], "iconSVG", [], "any", false, false, false, 96), twig_get_attribute($this->env, $this->source, $context["action"], "icon", [], "any", false, false, false, 96))) : (twig_get_attribute($this->env, $this->source, $context["action"], "icon", [], "any", false, false, false, 96))), "html", null, true);
                                echo "'
                                        title=\"";
                                // line 97
                                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Events_Event"), "html", null, true);
                                echo " ";
                                echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "eventCategory", [], "any", false, false, false, 97), "html", null, true);
                                echo " - ";
                                echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "eventAction", [], "any", false, false, false, 97), "html", null, true);
                                echo " ";
                                if (twig_get_attribute($this->env, $this->source, $context["action"], "eventName", [], "any", true, true, false, 97)) {
                                    echo "- ";
                                    echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "eventName", [], "any", false, false, false, 97), "html", null, true);
                                }
                                echo " ";
                                if (twig_get_attribute($this->env, $this->source, $context["action"], "eventValue", [], "any", true, true, false, 97)) {
                                    echo "- ";
                                    echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "eventValue", [], "any", false, false, false, 97), "html", null, true);
                                }
                                echo "\"/>
                                ";
                            } elseif ((((twig_get_attribute($this->env, $this->source,                             // line 98
$context["action"], "type", [], "any", false, false, false, 98) == "goal") || (twig_get_attribute($this->env, $this->source, $context["action"], "type", [], "any", false, false, false, 98) == twig_constant("Piwik\\Piwik::LABEL_ID_GOAL_IS_ECOMMERCE_ORDER"))) || (twig_get_attribute($this->env, $this->source,                             // line 99
$context["action"], "type", [], "any", false, false, false, 99) == twig_constant("Piwik\\Piwik::LABEL_ID_GOAL_IS_ECOMMERCE_CART")))) {
                                // line 100
                                echo "                                    <img class='iconPadding' src=\"";
                                echo \Piwik\piwik_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["action"], "iconSVG", [], "any", true, true, false, 100)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["action"], "iconSVG", [], "any", false, false, false, 100), twig_get_attribute($this->env, $this->source, $context["action"], "icon", [], "any", false, false, false, 100))) : (twig_get_attribute($this->env, $this->source, $context["action"], "icon", [], "any", false, false, false, 100))), "html", null, true);
                                echo "\"
                                         title=\"";
                                // line 101
                                echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "goalName", [], "any", false, false, false, 101), "html", null, true);
                                echo " - ";
                                if ((twig_get_attribute($this->env, $this->source, $context["action"], "revenue", [], "any", false, false, false, 101) > 0)) {
                                    echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_ColumnRevenue"), "html", null, true);
                                    echo ": ";
                                    echo $this->env->getFilter('money')->getCallable()(twig_get_attribute($this->env, $this->source, $context["action"], "revenue", [], "any", false, false, false, 101), (isset($context["idSite"]) || array_key_exists("idSite", $context) ? $context["idSite"] : (function () { throw new RuntimeError('Variable "idSite" does not exist.', 101, $this->source); })()));
                                    echo " - ";
                                }
                                echo " ";
                                echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "serverTimePretty", [], "any", false, false, false, 101), "html", null, true);
                                echo "\"/>
                                ";
                            }
                            // line 103
                            echo "                            ";
                            if ((twig_get_attribute($this->env, $this->source, $context["action"], "url", [], "any", true, true, false, 103) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["action"], "url", [], "any", false, false, false, 103)))) {
                                // line 104
                                echo "                            </a>
                            ";
                            }
                            // line 106
                            echo "                        ";
                        }
                        // line 107
                        echo "                    ";
                    }
                    // line 108
                    echo "                ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 109
                echo "
                ";
                // line 110
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["visitor"], "getColumn", [0 => "actionDetails"], "method", false, false, false, 110)) > (isset($context["maxPagesDisplayedByVisitor"]) || array_key_exists("maxPagesDisplayedByVisitor", $context) ? $context["maxPagesDisplayedByVisitor"] : (function () { throw new RuntimeError('Variable "maxPagesDisplayedByVisitor" does not exist.', 110, $this->source); })()))) {
                    // line 111
                    echo "                    (";
                    echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Live_MorePagesNotDisplayed"), "html", null, true);
                    echo ")
                ";
                }
                // line 113
                echo "            </div>
        </li>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['visitor'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 116
            echo "</ul>
<script type=\"text/javascript\">
\$(function () {
    \$('#visitsLive').on('click', '.visits-live-launch-visitor-profile', function (e) {
        e.preventDefault();
        broadcast.propagateNewPopoverParameter('visitorProfile', \$(this).attr('data-visitor-id'));
        return false;
    }).tooltip({
        track: true,
        content: function() {
            var title = \$(this).attr('title');
            return piwikHelper.escape(title.replace(/\\n/g, '<br />'));
        },
        show: {delay: 100, duration: 0},
        hide: false
    });
});
</script>
";
        }
    }

    public function getTemplateName()
    {
        return "@Live/getLastVisitsStart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  486 => 116,  470 => 113,  464 => 111,  462 => 110,  459 => 109,  445 => 108,  442 => 107,  439 => 106,  435 => 104,  432 => 103,  418 => 101,  413 => 100,  411 => 99,  410 => 98,  392 => 97,  387 => 96,  385 => 95,  377 => 94,  372 => 93,  370 => 92,  362 => 91,  357 => 90,  355 => 89,  348 => 88,  339 => 86,  335 => 85,  332 => 84,  326 => 83,  323 => 82,  317 => 81,  315 => 80,  312 => 78,  306 => 76,  304 => 75,  301 => 74,  296 => 71,  288 => 69,  286 => 68,  282 => 67,  277 => 66,  274 => 65,  248 => 62,  244 => 61,  242 => 60,  239 => 59,  235 => 58,  232 => 56,  228 => 55,  225 => 53,  223 => 52,  219 => 50,  217 => 49,  214 => 48,  211 => 46,  208 => 44,  206 => 43,  203 => 42,  201 => 41,  198 => 40,  195 => 39,  177 => 38,  175 => 37,  171 => 36,  165 => 35,  160 => 33,  156 => 31,  154 => 30,  150 => 28,  136 => 24,  134 => 23,  130 => 22,  127 => 21,  121 => 18,  110 => 17,  108 => 16,  95 => 15,  93 => 14,  89 => 13,  85 => 12,  79 => 11,  75 => 10,  70 => 9,  53 => 8,  50 => 7,  44 => 5,  42 => 4,  39 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# some users view thousands of pages which can crash the browser viewing Live! #}
{% set maxPagesDisplayedByVisitor=100 %}

{% if error is not empty %}
<div piwik-alert=\"danger\">{{ error }}</div>
{% else %}
<ul id=\"visitsLive\">
    {% for visitor in visitors.getRows() %}
        <li id=\"{{ visitor.getColumn('idVisit') }}\" class=\"visit\">
            <div style=\"display:none;\" class=\"idvisit\">{{ visitor.idVisit }}</div>
            <div title=\"{{ visitor.getColumn('actionDetails')|length }} {{ 'General_Actions'|translate }}\" class=\"datetime\">
                <span style=\"display:none;\" class=\"serverTimestamp\">{{ visitor.getColumn('serverTimestamp')|raw }}</span>
                {{ postEvent('Live.visitorLogWidgetViewBeforeVisitInfo', visitor) }}
                {% set year = visitor.getColumn('serverTimestamp')|date('Y') %}
                <span class=\"realTimeWidget_datetime\">{{ visitor.getColumn('serverDatePretty')|replace({(year): ' '}) }} - {{ visitor.getColumn('serverTimePretty') }} {% if visitor.getColumn('visitDuration') > 0 %}({{ visitor.getColumn('visitDurationPretty')|raw }}){% endif %}</span>
                {% if visitor.getColumn('userId')|default(false) is not empty %}
                  &nbsp;  <a class=\"visits-live-launch-visitor-profile rightLink\" title=\"{{ 'Live_ViewVisitorProfile'|translate }} {% if visitor.getColumn('userId') is not empty %}{{ visitor.getColumn('userId') }}{% endif %}\" data-visitor-id=\"{{ visitor.getColumn('visitorId') }}\">
                        <span>{{ visitor.getColumn('userId')|rawSafeDecoded}}</span>
                    </a>
                {% endif %}

                {{ postEvent('Live.renderVisitorIcons', visitor) }}
                {% if isProfileEnabled and not userIsAnonymous %}
                <a class=\"visits-live-launch-visitor-profile rightLink\" title=\"{{ 'Live_ViewVisitorProfile'|translate }} {% if visitor.getColumn('userId') is not empty %}{{ visitor.getColumn('userId') }}{% endif %}\" data-visitor-id=\"{{ visitor.getColumn('visitorId') }}\">
                    <span class=\"icon-visitor-profile\"></span>
                </a>
                {% endif %}

                <span class=\"referrer\">
                    {% include \"@Referrers/_visitorDetails.twig\" with {'visitInfo': visitor} %}
                 </span>
            </div>
            <div id=\"{{ visitor.getColumn('idVisit')|e('html_attr') }}_actions\" class=\"settings\">
                <span class=\"pagesTitle\"
                      title=\"{{ visitor.getColumn('actionDetails')|length }} {{ 'General_Actions'|translate }}\"
                      >{{ 'General_Actions'|translate }}:</span>&nbsp;
                {% set col = 0 %}
                {% for action in visitor.getColumn('actionDetails') %}
                    {% if loop.index <= maxPagesDisplayedByVisitor %}

                        {% if action.type == 'ecommerceOrder' or action.type == 'ecommerceAbandonedCart' %}
                            {% set title %}
                                {%- if action.type == 'ecommerceOrder' %}
                                    {{- 'Goals_EcommerceOrder'|translate -}}
                                {% else %}
                                    {{- 'Goals_AbandonedCart'|translate -}}
                                {% endif %}
                                {{- \"\\n - \" -}}
                                {%- if action.type == 'ecommerceOrder' -%}
                                    {{- 'General_ColumnRevenue'|translate -}}:
                                  {%- else -%}
                                    {%- set revenueLeft -%}
                                        {{- 'General_ColumnRevenue'|translate -}}
                                    {%- endset -%}
                                    {{- 'Goals_LeftInCart'|translate(revenueLeft) -}}:
                                {%- endif %} {{ action.revenue|money(idSite)|raw -}}

                                {{- \"\\n - \" -}}{{- action.serverTimePretty -}}
                                {{- \"\\n\" -}}
                                {% if action.itemDetails is not empty -%}
                                    {% for product in action.itemDetails -%}
                                        {{- \"\\n# \" -}}{{ product.itemSKU }}{% if product.itemName is not empty %}: {{ product.itemName }}{% endif %}{% if product.itemCategory is not empty %} ({{ product.itemCategory }}){% endif %}, {{ 'General_Quantity'|translate }}: {{ product.quantity }}, {{ 'General_Price'|translate }}: {{ product.price|money(idSite)|raw }}
                                    {%- endfor %}
                                {%- endif %}
                            {% endset %}
                            <span title=\"{{- title -}}\">
\t\t\t\t\t\t        <img class='iconPadding' src=\"{{ action.iconSVG|default(action.icon) }}\"/>
                                {% if action.type == 'ecommerceOrder' %}
                                    {{ 'General_ColumnRevenue'|translate }}: {{ action.revenue|money(idSite)|raw }}
                                {% endif %}
                            </span>

                        {% else %}

                            {% if action.url is defined and action.url is not empty %}
                            <a href=\"{{ action.url|safelink|e('html_attr') }}\" target=\"_blank\" rel=\"noreferrer noopener\">
                            {% endif %}
                                {% if action.type == 'action' %}
{# white spacing matters as Chrome tooltip display whitespaces #}
{% set title %}
{% if action.url|trim is not empty %}<span class='tooltip-action-url'>{{ action.url }}</span>{% endif %}

{% if action.pageTitle is not empty %}<span class='tooltip-action-page-title'>{{ action.pageTitle|rawSafeDecoded }}</span>{% endif %}

<span class=\"tooltip-action-server-time\">{{ action.serverTimePretty }}</span>
    {% if action.timeSpentPretty is defined %}<span class='tooltip-time-on-page'>{{ 'General_TimeOnPage'|translate }}: {{ action.timeSpentPretty|raw }}</span>{% endif %}
{%- endset %}
                                    <img class='iconPadding' src=\"{{ action.iconSVG|default(action.icon) }}\" title=\"{{- title|e('html_attr') -}}\"/>
                                {% elseif action.type == 'outlink' or action.type == 'download' %}
                                    <img class='iconPadding' src=\"{{ action.iconSVG|default(action.icon) }}\"
                                         title=\"{% if action.url is defined %}{{ action.url }} - {% endif %}{{ action.serverTimePretty }}\"/>
                                {% elseif action.type == 'search' %}
                                    <img class='iconPadding' src=\"{{ action.iconSVG|default(action.icon) }}\"
                                         title=\"{{ 'Actions_SubmenuSitesearch'|translate }}: {{ action.siteSearchKeyword }} - {{ action.serverTimePretty }}\"/>
                                {% elseif action.eventCategory|default(false) is not empty %}
                                    <img  class=\"iconPadding\" src='{{ action.iconSVG|default(action.icon) }}'
                                        title=\"{{ 'Events_Event'|translate }} {{ action.eventCategory }} - {{ action.eventAction }} {% if action.eventName is defined %}- {{ action.eventName }}{% endif %} {% if action.eventValue is defined %}- {{ action.eventValue }}{% endif %}\"/>
                                {% elseif action.type == 'goal' or action.type == constant('Piwik\\\\Piwik::LABEL_ID_GOAL_IS_ECOMMERCE_ORDER') or
                                          action.type == constant('Piwik\\\\Piwik::LABEL_ID_GOAL_IS_ECOMMERCE_CART') %}
                                    <img class='iconPadding' src=\"{{ action.iconSVG|default(action.icon) }}\"
                                         title=\"{{ action.goalName }} - {% if action.revenue > 0 %}{{ 'General_ColumnRevenue'|translate }}: {{ action.revenue|money(idSite)|raw }} - {% endif %} {{ action.serverTimePretty }}\"/>
                                {% endif %}
                            {% if action.url is defined and action.url is not empty %}
                            </a>
                            {% endif %}
                        {% endif %}
                    {% endif %}
                {% endfor %}

                {% if visitor.getColumn('actionDetails')|length > maxPagesDisplayedByVisitor %}
                    ({{ 'Live_MorePagesNotDisplayed'|translate }})
                {% endif %}
            </div>
        </li>
    {% endfor %}
</ul>
<script type=\"text/javascript\">
\$(function () {
    \$('#visitsLive').on('click', '.visits-live-launch-visitor-profile', function (e) {
        e.preventDefault();
        broadcast.propagateNewPopoverParameter('visitorProfile', \$(this).attr('data-visitor-id'));
        return false;
    }).tooltip({
        track: true,
        content: function() {
            var title = \$(this).attr('title');
            return piwikHelper.escape(title.replace(/\\n/g, '<br />'));
        },
        show: {delay: 100, duration: 0},
        hide: false
    });
});
</script>
{% endif %}
", "@Live/getLastVisitsStart.twig", "/var/www/cse135.monster/public_html/matomo/plugins/Live/templates/getLastVisitsStart.twig");
    }
}
