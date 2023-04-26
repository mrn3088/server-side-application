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

/* @Live/_visitorLogIcons.twig */
class __TwigTemplate_1e5d41b9385dec846ba17d3a93012b25 extends Template
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
        $context["visitHasEcommerceActivity"] = twig_get_attribute($this->env, $this->source, (isset($context["visitor"]) || array_key_exists("visitor", $context) ? $context["visitor"] : (function () { throw new RuntimeError('Variable "visitor" does not exist.', 1, $this->source); })()), "getColumn", [0 => "visitEcommerceStatusIcon"], "method", false, false, false, 1);
        // line 2
        $context["breakBeforeVisitorRank"] = ((((isset($context["visitHasEcommerceActivity"]) || array_key_exists("visitHasEcommerceActivity", $context) ? $context["visitHasEcommerceActivity"] : (function () { throw new RuntimeError('Variable "visitHasEcommerceActivity" does not exist.', 2, $this->source); })()) && twig_get_attribute($this->env, $this->source, (isset($context["visitor"]) || array_key_exists("visitor", $context) ? $context["visitor"] : (function () { throw new RuntimeError('Variable "visitor" does not exist.', 2, $this->source); })()), "getColumn", [0 => "visitorTypeIcon"], "method", false, false, false, 2))) ? (true) : (false));
        // line 3
        echo "
<span class=\"visitorLogIcons\">

    <span class=\"visitorDetails\">
    ";
        // line 7
        if (twig_get_attribute($this->env, $this->source, (isset($context["visitor"]) || array_key_exists("visitor", $context) ? $context["visitor"] : (function () { throw new RuntimeError('Variable "visitor" does not exist.', 7, $this->source); })()), "getColumn", [0 => "visitorTypeIcon"], "method", false, false, false, 7)) {
            // line 8
            echo "        <span class=\"visitorLogIconWithDetails visitorTypeIcon\">
            <img src=\"";
            // line 9
            echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["visitor"]) || array_key_exists("visitor", $context) ? $context["visitor"] : (function () { throw new RuntimeError('Variable "visitor" does not exist.', 9, $this->source); })()), "getColumn", [0 => "visitorTypeIcon"], "method", false, false, false, 9), "html", null, true);
            echo "\"/>
            <ul class=\"details\">
                <li>";
            // line 11
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_ReturningVisitor"), "html", null, true);
            echo " - ";
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_NVisits", twig_get_attribute($this->env, $this->source, (isset($context["visitor"]) || array_key_exists("visitor", $context) ? $context["visitor"] : (function () { throw new RuntimeError('Variable "visitor" does not exist.', 11, $this->source); })()), "getColumn", [0 => "visitCount"], "method", false, false, false, 11)), "html", null, true);
            echo "</li>
            </ul>
        </span>
    ";
        }
        // line 15
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["visitor"]) || array_key_exists("visitor", $context) ? $context["visitor"] : (function () { throw new RuntimeError('Variable "visitor" does not exist.', 15, $this->source); })()), "getColumn", [0 => "countryFlag"], "method", false, false, false, 15)) {
            // line 16
            echo "        <span class=\"visitorLogIconWithDetails flag\" profile-header-text=\"";
            if (twig_get_attribute($this->env, $this->source, (isset($context["visitor"]) || array_key_exists("visitor", $context) ? $context["visitor"] : (function () { throw new RuntimeError('Variable "visitor" does not exist.', 16, $this->source); })()), "getColumn", [0 => "city"], "method", false, false, false, 16)) {
                echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["visitor"]) || array_key_exists("visitor", $context) ? $context["visitor"] : (function () { throw new RuntimeError('Variable "visitor" does not exist.', 16, $this->source); })()), "getColumn", [0 => "city"], "method", false, false, false, 16), "html_attr");
            } else {
                echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["visitor"]) || array_key_exists("visitor", $context) ? $context["visitor"] : (function () { throw new RuntimeError('Variable "visitor" does not exist.', 16, $this->source); })()), "getColumn", [0 => "country"], "method", false, false, false, 16), "html", null, true);
            }
            echo "\">

            <img src=\"";
            // line 18
            echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["visitor"]) || array_key_exists("visitor", $context) ? $context["visitor"] : (function () { throw new RuntimeError('Variable "visitor" does not exist.', 18, $this->source); })()), "getColumn", [0 => "countryFlag"], "method", false, false, false, 18), "html", null, true);
            echo "\"/>
            <ul class=\"details\">
                <li>";
            // line 20
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("UserCountry_Country"), "html", null, true);
            echo ": ";
            echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["visitor"]) || array_key_exists("visitor", $context) ? $context["visitor"] : (function () { throw new RuntimeError('Variable "visitor" does not exist.', 20, $this->source); })()), "getColumn", [0 => "country"], "method", false, false, false, 20), "html", null, true);
            echo "</li>
                ";
            // line 21
            if (twig_get_attribute($this->env, $this->source, (isset($context["visitor"]) || array_key_exists("visitor", $context) ? $context["visitor"] : (function () { throw new RuntimeError('Variable "visitor" does not exist.', 21, $this->source); })()), "getColumn", [0 => "region"], "method", false, false, false, 21)) {
                echo "<li>";
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("UserCountry_Region"), "html", null, true);
                echo ": ";
                echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["visitor"]) || array_key_exists("visitor", $context) ? $context["visitor"] : (function () { throw new RuntimeError('Variable "visitor" does not exist.', 21, $this->source); })()), "getColumn", [0 => "region"], "method", false, false, false, 21), "html", null, true);
                echo "</li>";
            }
            // line 22
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["visitor"]) || array_key_exists("visitor", $context) ? $context["visitor"] : (function () { throw new RuntimeError('Variable "visitor" does not exist.', 22, $this->source); })()), "getColumn", [0 => "city"], "method", false, false, false, 22)) {
                echo "<li>";
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("UserCountry_City"), "html", null, true);
                echo ": ";
                echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["visitor"]) || array_key_exists("visitor", $context) ? $context["visitor"] : (function () { throw new RuntimeError('Variable "visitor" does not exist.', 22, $this->source); })()), "getColumn", [0 => "city"], "method", false, false, false, 22), "html", null, true);
                echo "</li>";
            }
            // line 23
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["visitor"]) || array_key_exists("visitor", $context) ? $context["visitor"] : (function () { throw new RuntimeError('Variable "visitor" does not exist.', 23, $this->source); })()), "getColumn", [0 => "language"], "method", false, false, false, 23)) {
                echo "<li>";
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("UserLanguage_BrowserLanguage"), "html", null, true);
                echo ": ";
                echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["visitor"]) || array_key_exists("visitor", $context) ? $context["visitor"] : (function () { throw new RuntimeError('Variable "visitor" does not exist.', 23, $this->source); })()), "getColumn", [0 => "language"], "method", false, false, false, 23), "html", null, true);
                echo "</li>";
            }
            // line 24
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["visitor"]) || array_key_exists("visitor", $context) ? $context["visitor"] : (function () { throw new RuntimeError('Variable "visitor" does not exist.', 24, $this->source); })()), "getColumn", [0 => "providerName"], "method", false, false, false, 24)) {
                echo "<li>";
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Provider_ColumnProvider"), "html", null, true);
                echo ": ";
                echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["visitor"]) || array_key_exists("visitor", $context) ? $context["visitor"] : (function () { throw new RuntimeError('Variable "visitor" does not exist.', 24, $this->source); })()), "getColumn", [0 => "providerName"], "method", false, false, false, 24), "html", null, true);
                echo "</li>";
            }
            // line 25
            echo "                <li>";
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_IP"), "html", null, true);
            echo ": ";
            echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["visitor"]) || array_key_exists("visitor", $context) ? $context["visitor"] : (function () { throw new RuntimeError('Variable "visitor" does not exist.', 25, $this->source); })()), "getColumn", [0 => "visitIp"], "method", false, false, false, 25), "html", null, true);
            echo "</li>
                ";
            // line 26
            if (((isset($context["isProfileEnabled"]) || array_key_exists("isProfileEnabled", $context) ? $context["isProfileEnabled"] : (function () { throw new RuntimeError('Variable "isProfileEnabled" does not exist.', 26, $this->source); })()) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["visitor"]) || array_key_exists("visitor", $context) ? $context["visitor"] : (function () { throw new RuntimeError('Variable "visitor" does not exist.', 26, $this->source); })()), "getColumn", [0 => "visitorId"], "method", false, false, false, 26)))) {
                echo "<li>";
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_VisitorID"), "html", null, true);
                echo ": ";
                echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["visitor"]) || array_key_exists("visitor", $context) ? $context["visitor"] : (function () { throw new RuntimeError('Variable "visitor" does not exist.', 26, $this->source); })()), "getColumn", [0 => "visitorId"], "method", false, false, false, 26), "html", null, true);
                echo "</li>";
            }
            // line 27
            echo "
            </ul>
        </span>
    ";
        }
        // line 31
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["visitor"]) || array_key_exists("visitor", $context) ? $context["visitor"] : (function () { throw new RuntimeError('Variable "visitor" does not exist.', 31, $this->source); })()), "getColumn", [0 => "browserIcon"], "method", false, false, false, 31)) {
            // line 32
            echo "        <span class=\"visitorLogIconWithDetails\" profile-header-text=\"";
            echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["visitor"]) || array_key_exists("visitor", $context) ? $context["visitor"] : (function () { throw new RuntimeError('Variable "visitor" does not exist.', 32, $this->source); })()), "getColumn", [0 => "browser"], "method", false, false, false, 32), "html_attr");
            echo "\">
            <img src=\"";
            // line 33
            echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["visitor"]) || array_key_exists("visitor", $context) ? $context["visitor"] : (function () { throw new RuntimeError('Variable "visitor" does not exist.', 33, $this->source); })()), "getColumn", [0 => "browserIcon"], "method", false, false, false, 33), "html", null, true);
            echo "\"/>
            <ul class=\"details\">
                <li>";
            // line 35
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("DevicesDetection_ColumnBrowser"), "html", null, true);
            echo ": ";
            echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["visitor"]) || array_key_exists("visitor", $context) ? $context["visitor"] : (function () { throw new RuntimeError('Variable "visitor" does not exist.', 35, $this->source); })()), "getColumn", [0 => "browser"], "method", false, false, false, 35), "html", null, true);
            echo "</li>
                <li>";
            // line 36
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("DevicesDetection_BrowserEngine"), "html", null, true);
            echo ": ";
            echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["visitor"]) || array_key_exists("visitor", $context) ? $context["visitor"] : (function () { throw new RuntimeError('Variable "visitor" does not exist.', 36, $this->source); })()), "getColumn", [0 => "browserFamily"], "method", false, false, false, 36), "html", null, true);
            echo "</li>
                ";
            // line 37
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["visitor"]) || array_key_exists("visitor", $context) ? $context["visitor"] : (function () { throw new RuntimeError('Variable "visitor" does not exist.', 37, $this->source); })()), "getColumn", [0 => "pluginsIcons"], "method", false, false, false, 37)) > 0)) {
                // line 38
                echo "                    <li>
                        ";
                // line 39
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_Plugins"), "html", null, true);
                echo ":
                        ";
                // line 40
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["visitor"]) || array_key_exists("visitor", $context) ? $context["visitor"] : (function () { throw new RuntimeError('Variable "visitor" does not exist.', 40, $this->source); })()), "getColumn", [0 => "pluginsIcons"], "method", false, false, false, 40));
                foreach ($context['_seq'] as $context["_key"] => $context["pluginIcon"]) {
                    // line 41
                    echo "                            <img width=\"16px\" height=\"16px\" src=\"";
                    echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pluginIcon"], "pluginIcon", [], "any", false, false, false, 41), "html", null, true);
                    echo "\" alt=\"";
                    echo \Piwik\piwik_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pluginIcon"], "pluginName", [], "any", false, false, false, 41), true), "html", null, true);
                    echo "\"/>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pluginIcon'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 43
                echo "                    </li>
                ";
            }
            // line 45
            echo "            </ul>
        </span>
    ";
        }
        // line 48
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["visitor"]) || array_key_exists("visitor", $context) ? $context["visitor"] : (function () { throw new RuntimeError('Variable "visitor" does not exist.', 48, $this->source); })()), "getColumn", [0 => "operatingSystemIcon"], "method", false, false, false, 48)) {
            // line 49
            echo "            <span class=\"visitorLogIconWithDetails\" profile-header-text=\"";
            echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["visitor"]) || array_key_exists("visitor", $context) ? $context["visitor"] : (function () { throw new RuntimeError('Variable "visitor" does not exist.', 49, $this->source); })()), "getColumn", [0 => "operatingSystem"], "method", false, false, false, 49), "html_attr");
            echo "\">
            <img src=\"";
            // line 50
            echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["visitor"]) || array_key_exists("visitor", $context) ? $context["visitor"] : (function () { throw new RuntimeError('Variable "visitor" does not exist.', 50, $this->source); })()), "getColumn", [0 => "operatingSystemIcon"], "method", false, false, false, 50), "html", null, true);
            echo "\"/>
            <ul class=\"details\">
                <li>";
            // line 52
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("DevicesDetection_ColumnOperatingSystem"), "html", null, true);
            echo ": ";
            echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["visitor"]) || array_key_exists("visitor", $context) ? $context["visitor"] : (function () { throw new RuntimeError('Variable "visitor" does not exist.', 52, $this->source); })()), "getColumn", [0 => "operatingSystem"], "method", false, false, false, 52), "html", null, true);
            echo "</li>
            </ul>
        </span>
        ";
        }
        // line 56
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["visitor"]) || array_key_exists("visitor", $context) ? $context["visitor"] : (function () { throw new RuntimeError('Variable "visitor" does not exist.', 56, $this->source); })()), "getColumn", [0 => "deviceTypeIcon"], "method", false, false, false, 56)) {
            // line 57
            echo "            <span class=\"visitorLogIconWithDetails\" profile-header-text=\"";
            if (twig_get_attribute($this->env, $this->source, (isset($context["visitor"]) || array_key_exists("visitor", $context) ? $context["visitor"] : (function () { throw new RuntimeError('Variable "visitor" does not exist.', 57, $this->source); })()), "getColumn", [0 => "resolution"], "method", false, false, false, 57)) {
                echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["visitor"]) || array_key_exists("visitor", $context) ? $context["visitor"] : (function () { throw new RuntimeError('Variable "visitor" does not exist.', 57, $this->source); })()), "getColumn", [0 => "resolution"], "method", false, false, false, 57), "html_attr");
            } else {
                echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["visitor"]) || array_key_exists("visitor", $context) ? $context["visitor"] : (function () { throw new RuntimeError('Variable "visitor" does not exist.', 57, $this->source); })()), "getColumn", [0 => "deviceType"], "method", false, false, false, 57), "html", null, true);
            }
            echo "\">
            <img src=\"";
            // line 58
            echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["visitor"]) || array_key_exists("visitor", $context) ? $context["visitor"] : (function () { throw new RuntimeError('Variable "visitor" does not exist.', 58, $this->source); })()), "getColumn", [0 => "deviceTypeIcon"], "method", false, false, false, 58), "html", null, true);
            echo "\"/>
            <ul class=\"details\">
                <li>";
            // line 60
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("DevicesDetection_DeviceType"), "html", null, true);
            echo ": ";
            echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["visitor"]) || array_key_exists("visitor", $context) ? $context["visitor"] : (function () { throw new RuntimeError('Variable "visitor" does not exist.', 60, $this->source); })()), "getColumn", [0 => "deviceType"], "method", false, false, false, 60), "html", null, true);
            echo "</li>
                ";
            // line 61
            if (twig_get_attribute($this->env, $this->source, (isset($context["visitor"]) || array_key_exists("visitor", $context) ? $context["visitor"] : (function () { throw new RuntimeError('Variable "visitor" does not exist.', 61, $this->source); })()), "getColumn", [0 => "deviceBrand"], "method", false, false, false, 61)) {
                echo "<li>";
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("DevicesDetection_DeviceBrand"), "html", null, true);
                echo ": ";
                echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["visitor"]) || array_key_exists("visitor", $context) ? $context["visitor"] : (function () { throw new RuntimeError('Variable "visitor" does not exist.', 61, $this->source); })()), "getColumn", [0 => "deviceBrand"], "method", false, false, false, 61), "html", null, true);
                echo "</li>";
            }
            // line 62
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["visitor"]) || array_key_exists("visitor", $context) ? $context["visitor"] : (function () { throw new RuntimeError('Variable "visitor" does not exist.', 62, $this->source); })()), "getColumn", [0 => "deviceModel"], "method", false, false, false, 62)) {
                echo "<li>";
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("DevicesDetection_DeviceModel"), "html", null, true);
                echo ": ";
                echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["visitor"]) || array_key_exists("visitor", $context) ? $context["visitor"] : (function () { throw new RuntimeError('Variable "visitor" does not exist.', 62, $this->source); })()), "getColumn", [0 => "deviceModel"], "method", false, false, false, 62), "html", null, true);
                echo "</li>";
            }
            // line 63
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["visitor"]) || array_key_exists("visitor", $context) ? $context["visitor"] : (function () { throw new RuntimeError('Variable "visitor" does not exist.', 63, $this->source); })()), "getColumn", [0 => "resolution"], "method", false, false, false, 63)) {
                echo "<li>";
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Resolution_ColumnResolution"), "html", null, true);
                echo ": ";
                echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["visitor"]) || array_key_exists("visitor", $context) ? $context["visitor"] : (function () { throw new RuntimeError('Variable "visitor" does not exist.', 63, $this->source); })()), "getColumn", [0 => "resolution"], "method", false, false, false, 63), "html", null, true);
                echo "</li>";
            }
            // line 64
            echo "            </ul>
        </span>
        ";
        }
        // line 67
        echo "    </span>

    ";
        // line 69
        if ((twig_get_attribute($this->env, $this->source, (isset($context["visitor"]) || array_key_exists("visitor", $context) ? $context["visitor"] : (function () { throw new RuntimeError('Variable "visitor" does not exist.', 69, $this->source); })()), "getColumn", [0 => "goalConversions"], "method", false, false, false, 69) || (isset($context["visitHasEcommerceActivity"]) || array_key_exists("visitHasEcommerceActivity", $context) ? $context["visitHasEcommerceActivity"] : (function () { throw new RuntimeError('Variable "visitHasEcommerceActivity" does not exist.', 69, $this->source); })()))) {
            // line 70
            echo "    <span class=\"visitorType\">
        ";
            // line 72
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["visitor"]) || array_key_exists("visitor", $context) ? $context["visitor"] : (function () { throw new RuntimeError('Variable "visitor" does not exist.', 72, $this->source); })()), "getColumn", [0 => "goalConversions"], "method", false, false, false, 72)) {
                // line 73
                echo "            <span title=\"";
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_VisitConvertedNGoals", twig_get_attribute($this->env, $this->source, (isset($context["visitor"]) || array_key_exists("visitor", $context) ? $context["visitor"] : (function () { throw new RuntimeError('Variable "visitor" does not exist.', 73, $this->source); })()), "getColumn", [0 => "goalConversions"], "method", false, false, false, 73)), "html", null, true);
                echo "\" class=\"visitorLogTooltip\">
                <img src=\"";
                // line 74
                echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["visitor"]) || array_key_exists("visitor", $context) ? $context["visitor"] : (function () { throw new RuntimeError('Variable "visitor" does not exist.', 74, $this->source); })()), "getColumn", [0 => "visitConvertedIcon"], "method", false, false, false, 74), "html", null, true);
                echo "\"/>
                <span class=\"conversionCount\">";
                // line 75
                if ((twig_get_attribute($this->env, $this->source, (isset($context["visitor"]) || array_key_exists("visitor", $context) ? $context["visitor"] : (function () { throw new RuntimeError('Variable "visitor" does not exist.', 75, $this->source); })()), "getColumn", [0 => "goalConversions"], "method", false, false, false, 75) > 99)) {
                    echo "99+";
                } else {
                    echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["visitor"]) || array_key_exists("visitor", $context) ? $context["visitor"] : (function () { throw new RuntimeError('Variable "visitor" does not exist.', 75, $this->source); })()), "getColumn", [0 => "goalConversions"], "method", false, false, false, 75), "html", null, true);
                }
                echo "</span>
            </span>
        ";
            }
            // line 78
            echo "        ";
            // line 79
            echo "        ";
            if ((isset($context["visitHasEcommerceActivity"]) || array_key_exists("visitHasEcommerceActivity", $context) ? $context["visitHasEcommerceActivity"] : (function () { throw new RuntimeError('Variable "visitHasEcommerceActivity" does not exist.', 79, $this->source); })())) {
                // line 80
                echo "            <img class=\"visitorLogTooltip\" src=\"";
                echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["visitor"]) || array_key_exists("visitor", $context) ? $context["visitor"] : (function () { throw new RuntimeError('Variable "visitor" does not exist.', 80, $this->source); })()), "getColumn", [0 => "visitEcommerceStatusIcon"], "method", false, false, false, 80), "html", null, true);
                echo "\" title=\"";
                echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["visitor"]) || array_key_exists("visitor", $context) ? $context["visitor"] : (function () { throw new RuntimeError('Variable "visitor" does not exist.', 80, $this->source); })()), "getColumn", [0 => "visitEcommerceStatus"], "method", false, false, false, 80), "html", null, true);
                echo "\"/>
        ";
            }
            // line 82
            echo "    </span>
    ";
        }
        // line 84
        echo "</span>
";
    }

    public function getTemplateName()
    {
        return "@Live/_visitorLogIcons.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  328 => 84,  324 => 82,  316 => 80,  313 => 79,  311 => 78,  301 => 75,  297 => 74,  292 => 73,  289 => 72,  286 => 70,  284 => 69,  280 => 67,  275 => 64,  266 => 63,  257 => 62,  249 => 61,  243 => 60,  238 => 58,  229 => 57,  226 => 56,  217 => 52,  212 => 50,  207 => 49,  204 => 48,  199 => 45,  195 => 43,  184 => 41,  180 => 40,  176 => 39,  173 => 38,  171 => 37,  165 => 36,  159 => 35,  154 => 33,  149 => 32,  146 => 31,  140 => 27,  132 => 26,  125 => 25,  116 => 24,  107 => 23,  98 => 22,  90 => 21,  84 => 20,  79 => 18,  69 => 16,  66 => 15,  57 => 11,  52 => 9,  49 => 8,  47 => 7,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set visitHasEcommerceActivity = visitor.getColumn('visitEcommerceStatusIcon') %}
{% set breakBeforeVisitorRank = (visitHasEcommerceActivity and visitor.getColumn('visitorTypeIcon')) ? true : false %}

<span class=\"visitorLogIcons\">

    <span class=\"visitorDetails\">
    {% if visitor.getColumn('visitorTypeIcon') %}
        <span class=\"visitorLogIconWithDetails visitorTypeIcon\">
            <img src=\"{{ visitor.getColumn('visitorTypeIcon') }}\"/>
            <ul class=\"details\">
                <li>{{ 'General_ReturningVisitor'|translate }} - {{ 'General_NVisits'|translate(visitor.getColumn('visitCount')) }}</li>
            </ul>
        </span>
    {% endif %}
    {% if visitor.getColumn('countryFlag') %}
        <span class=\"visitorLogIconWithDetails flag\" profile-header-text=\"{% if visitor.getColumn('city') %}{{ visitor.getColumn('city')|e('html_attr') }}{% else %}{{ visitor.getColumn('country') }}{% endif %}\">

            <img src=\"{{ visitor.getColumn('countryFlag') }}\"/>
            <ul class=\"details\">
                <li>{{ 'UserCountry_Country'|translate }}: {{ visitor.getColumn('country') }}</li>
                {% if visitor.getColumn('region') %}<li>{{ 'UserCountry_Region'|translate }}: {{ visitor.getColumn('region') }}</li>{% endif %}
                {% if visitor.getColumn('city') %}<li>{{ 'UserCountry_City'|translate }}: {{ visitor.getColumn('city') }}</li>{% endif %}
                {% if visitor.getColumn('language') %}<li>{{ 'UserLanguage_BrowserLanguage'|translate }}: {{ visitor.getColumn('language') }}</li>{% endif %}
                {% if visitor.getColumn('providerName') %}<li>{{ 'Provider_ColumnProvider'|translate }}: {{ visitor.getColumn('providerName') }}</li>{% endif %}
                <li>{{ 'General_IP'|translate }}: {{ visitor.getColumn('visitIp') }}</li>
                {% if isProfileEnabled and visitor.getColumn('visitorId') is not empty %}<li>{{ 'General_VisitorID'|translate }}: {{ visitor.getColumn('visitorId') }}</li>{% endif %}

            </ul>
        </span>
    {% endif %}
    {% if visitor.getColumn('browserIcon') %}
        <span class=\"visitorLogIconWithDetails\" profile-header-text=\"{{ visitor.getColumn('browser')|e('html_attr') }}\">
            <img src=\"{{ visitor.getColumn('browserIcon') }}\"/>
            <ul class=\"details\">
                <li>{{ 'DevicesDetection_ColumnBrowser'|translate }}: {{ visitor.getColumn('browser') }}</li>
                <li>{{ 'DevicesDetection_BrowserEngine'|translate }}: {{ visitor.getColumn('browserFamily') }}</li>
                {% if visitor.getColumn('pluginsIcons')|length > 0 %}
                    <li>
                        {{ 'General_Plugins'|translate }}:
                        {% for pluginIcon in visitor.getColumn('pluginsIcons') %}
                            <img width=\"16px\" height=\"16px\" src=\"{{ pluginIcon.pluginIcon }}\" alt=\"{{ pluginIcon.pluginName|capitalize(true) }}\"/>
                        {% endfor %}
                    </li>
                {% endif %}
            </ul>
        </span>
    {% endif %}
        {% if visitor.getColumn('operatingSystemIcon') %}
            <span class=\"visitorLogIconWithDetails\" profile-header-text=\"{{ visitor.getColumn('operatingSystem')|e('html_attr') }}\">
            <img src=\"{{ visitor.getColumn('operatingSystemIcon') }}\"/>
            <ul class=\"details\">
                <li>{{ 'DevicesDetection_ColumnOperatingSystem'|translate }}: {{ visitor.getColumn('operatingSystem') }}</li>
            </ul>
        </span>
        {% endif %}
        {% if visitor.getColumn('deviceTypeIcon') %}
            <span class=\"visitorLogIconWithDetails\" profile-header-text=\"{% if visitor.getColumn('resolution') %}{{ visitor.getColumn('resolution')|e('html_attr') }}{% else %}{{ visitor.getColumn('deviceType') }}{% endif %}\">
            <img src=\"{{ visitor.getColumn('deviceTypeIcon') }}\"/>
            <ul class=\"details\">
                <li>{{ 'DevicesDetection_DeviceType'|translate }}: {{ visitor.getColumn('deviceType') }}</li>
                {% if visitor.getColumn('deviceBrand') %}<li>{{ 'DevicesDetection_DeviceBrand'|translate }}: {{ visitor.getColumn('deviceBrand') }}</li>{% endif %}
                {% if visitor.getColumn('deviceModel') %}<li>{{ 'DevicesDetection_DeviceModel'|translate }}: {{ visitor.getColumn('deviceModel') }}</li>{% endif %}
                {% if visitor.getColumn('resolution') %}<li>{{ 'Resolution_ColumnResolution'|translate }}: {{ visitor.getColumn('resolution') }}</li>{% endif %}
            </ul>
        </span>
        {% endif %}
    </span>

    {% if visitor.getColumn('goalConversions') or visitHasEcommerceActivity %}
    <span class=\"visitorType\">
        {# Goals, and/or Ecommerce activity #}
        {% if visitor.getColumn('goalConversions') %}
            <span title=\"{{ 'General_VisitConvertedNGoals'|translate(visitor.getColumn('goalConversions')) }}\" class=\"visitorLogTooltip\">
                <img src=\"{{ visitor.getColumn('visitConvertedIcon') }}\"/>
                <span class=\"conversionCount\">{% if visitor.getColumn('goalConversions') > 99 %}99+{% else %}{{ visitor.getColumn('goalConversions') }}{% endif %}</span>
            </span>
        {% endif %}
        {# Ecommerce activity #}
        {% if visitHasEcommerceActivity %}
            <img class=\"visitorLogTooltip\" src=\"{{ visitor.getColumn('visitEcommerceStatusIcon') }}\" title=\"{{ visitor.getColumn('visitEcommerceStatus') }}\"/>
        {% endif %}
    </span>
    {% endif %}
</span>
", "@Live/_visitorLogIcons.twig", "/var/www/cse135.monster/public_html/matomo/plugins/Live/templates/_visitorLogIcons.twig");
    }
}
