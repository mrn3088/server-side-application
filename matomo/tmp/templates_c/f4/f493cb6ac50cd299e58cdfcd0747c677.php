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

/* @CoreHome/_dataTableFooter.twig */
class __TwigTemplate_378f3863c52791b412c8d0a574e3af64 extends Template
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
        echo "<div class=\"dataTableFeatures\">
    <div class=\"dataTableFooterNavigation\">

        ";
        // line 4
        if (( !(isset($context["isDataTableEmpty"]) || array_key_exists("isDataTableEmpty", $context) ? $context["isDataTableEmpty"] : (function () { throw new RuntimeError('Variable "isDataTableEmpty" does not exist.', 4, $this->source); })()) && (twig_get_attribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 4, $this->source); })()), "show_offset_information", [], "any", false, false, false, 4) || twig_get_attribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 4, $this->source); })()), "show_pagination_control", [], "any", false, false, false, 4)))) {
            // line 5
            echo "            <div class=\"row dataTablePaginationControl\">
                ";
            // line 6
            if (twig_get_attribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 6, $this->source); })()), "show_pagination_control", [], "any", false, false, false, 6)) {
                // line 7
                echo "                    <span class=\"dataTablePrevious\">&lsaquo; ";
                if (twig_get_attribute($this->env, $this->source, ($context["clientSideParameters"] ?? null), "dataTablePreviousIsFirst", [], "any", true, true, false, 7)) {
                    echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_First"), "html", null, true);
                } else {
                    echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_Previous"), "html", null, true);
                }
                echo "</span>
                    &nbsp;
                ";
            }
            // line 10
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 10, $this->source); })()), "show_offset_information", [], "any", false, false, false, 10)) {
                // line 11
                echo "                    <span class=\"dataTablePages\"></span>
                ";
            }
            // line 13
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 13, $this->source); })()), "show_pagination_control", [], "any", false, false, false, 13)) {
                // line 14
                echo "                    &nbsp;<span class=\"dataTableNext\">";
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_Next"), "html", null, true);
                echo " &rsaquo;</span>
                ";
            }
            // line 16
            echo "            </div>
        ";
        }
        // line 18
        echo "
        <div class=\"row\">
            <div class=\"col s9 m9 dataTableControls\">
                ";
        // line 21
        $this->loadTemplate("@CoreHome/_dataTableActions.twig", "@CoreHome/_dataTableFooter.twig", 21)->display($context);
        // line 22
        echo "            </div>

            ";
        // line 24
        if (( !(isset($context["isDataTableEmpty"]) || array_key_exists("isDataTableEmpty", $context) ? $context["isDataTableEmpty"] : (function () { throw new RuntimeError('Variable "isDataTableEmpty" does not exist.', 24, $this->source); })()) && ((twig_get_attribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 24, $this->source); })()), "show_footer_icons", [], "any", false, false, false, 24) && twig_get_attribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 24, $this->source); })()), "show_pagination_control", [], "any", false, false, false, 24)) || twig_get_attribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 24, $this->source); })()), "show_limit_control", [], "any", false, false, false, 24)))) {
            // line 25
            echo "                <div class=\"col s3 m3 limitSelection\"></div>
            ";
        }
        // line 27
        echo "        </div>

        ";
        // line 29
        if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 29, $this->source); })()), "related_reports", [], "any", false, false, false, 29)) && twig_get_attribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 29, $this->source); })()), "show_related_reports", [], "any", false, false, false, 29))) {
            // line 30
            echo "            <div class=\"row datatableRelatedReports\">
                ";
            // line 31
            echo twig_get_attribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 31, $this->source); })()), "related_reports_title", [], "any", false, false, false, 31);
            echo "
                <ul style=\"list-style:none;";
            // line 32
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 32, $this->source); })()), "related_reports", [], "any", false, false, false, 32)) == 1)) {
                echo "display:inline-block;";
            }
            echo "}\">
                    <li><span href=\"";
            // line 33
            echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 33, $this->source); })()), "self_url", [], "any", false, false, false, 33), "html", null, true);
            echo "\" style=\"display:none;\">";
            echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 33, $this->source); })()), "title", [], "any", false, false, false, 33), "html", null, true);
            echo "</span></li>

                    ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 35, $this->source); })()), "related_reports", [], "any", false, false, false, 35));
            foreach ($context['_seq'] as $context["reportUrl"] => $context["reportTitle"]) {
                // line 36
                echo "                        <li><span href=\"";
                echo \Piwik\piwik_escape_filter($this->env, $context["reportUrl"], "html", null, true);
                echo "\">";
                echo \Piwik\piwik_escape_filter($this->env, $context["reportTitle"], "html", null, true);
                echo "</span></li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['reportUrl'], $context['reportTitle'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "                </ul>
            </div>
        ";
        }
        // line 41
        echo "    </div>

    <span class=\"loadingPiwik\" style=\"display:none;\"><img src=\"plugins/Morpheus/images/loading-blue.gif\"/> ";
        // line 43
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_LoadingData"), "html", null, true);
        echo "</span>

    ";
        // line 45
        if ((twig_get_attribute($this->env, $this->source, ($context["properties"] ?? null), "show_footer_message", [], "any", true, true, false, 45) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 45, $this->source); })()), "show_footer_message", [], "any", false, false, false, 45)))) {
            // line 46
            echo "        <div class='datatableFooterMessage'>";
            echo twig_get_attribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 46, $this->source); })()), "show_footer_message", [], "any", false, false, false, 46);
            echo "</div>
    ";
        }
        // line 48
        echo "
</div>

<span class=\"loadingPiwikBelow\" style=\"display:none;\"><img src=\"plugins/Morpheus/images/loading-blue.gif\"/> ";
        // line 51
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_LoadingData"), "html", null, true);
        echo "</span>

<div class=\"dataTableSpacer\"></div>
";
    }

    public function getTemplateName()
    {
        return "@CoreHome/_dataTableFooter.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 51,  160 => 48,  154 => 46,  152 => 45,  147 => 43,  143 => 41,  138 => 38,  127 => 36,  123 => 35,  116 => 33,  110 => 32,  106 => 31,  103 => 30,  101 => 29,  97 => 27,  93 => 25,  91 => 24,  87 => 22,  85 => 21,  80 => 18,  76 => 16,  70 => 14,  67 => 13,  63 => 11,  60 => 10,  49 => 7,  47 => 6,  44 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"dataTableFeatures\">
    <div class=\"dataTableFooterNavigation\">

        {% if not isDataTableEmpty and (properties.show_offset_information or properties.show_pagination_control) %}
            <div class=\"row dataTablePaginationControl\">
                {% if properties.show_pagination_control %}
                    <span class=\"dataTablePrevious\">&lsaquo; {% if clientSideParameters.dataTablePreviousIsFirst is defined %}{{ 'General_First'|translate }}{% else %}{{ 'General_Previous'|translate }}{% endif %}</span>
                    &nbsp;
                {% endif %}
                {% if properties.show_offset_information %}
                    <span class=\"dataTablePages\"></span>
                {% endif %}
                {% if properties.show_pagination_control %}
                    &nbsp;<span class=\"dataTableNext\">{{ 'General_Next'|translate }} &rsaquo;</span>
                {% endif %}
            </div>
        {% endif %}

        <div class=\"row\">
            <div class=\"col s9 m9 dataTableControls\">
                {% include \"@CoreHome/_dataTableActions.twig\" %}
            </div>

            {% if not isDataTableEmpty and (properties.show_footer_icons and properties.show_pagination_control or properties.show_limit_control) %}
                <div class=\"col s3 m3 limitSelection\"></div>
            {% endif %}
        </div>

        {% if (properties.related_reports is not empty) and properties.show_related_reports %}
            <div class=\"row datatableRelatedReports\">
                {{ properties.related_reports_title|raw }}
                <ul style=\"list-style:none;{% if properties.related_reports|length == 1 %}display:inline-block;{% endif %}}\">
                    <li><span href=\"{{ properties.self_url }}\" style=\"display:none;\">{{ properties.title }}</span></li>

                    {% for reportUrl,reportTitle in properties.related_reports %}
                        <li><span href=\"{{ reportUrl }}\">{{ reportTitle }}</span></li>
                    {% endfor %}
                </ul>
            </div>
        {% endif %}
    </div>

    <span class=\"loadingPiwik\" style=\"display:none;\"><img src=\"plugins/Morpheus/images/loading-blue.gif\"/> {{ 'General_LoadingData'|translate }}</span>

    {% if properties.show_footer_message is defined and properties.show_footer_message is not empty %}
        <div class='datatableFooterMessage'>{{ properties.show_footer_message | raw }}</div>
    {% endif %}

</div>

<span class=\"loadingPiwikBelow\" style=\"display:none;\"><img src=\"plugins/Morpheus/images/loading-blue.gif\"/> {{ 'General_LoadingData'|translate }}</span>

<div class=\"dataTableSpacer\"></div>
", "@CoreHome/_dataTableFooter.twig", "/var/www/cse135.monster/public_html/matomo/plugins/CoreHome/templates/_dataTableFooter.twig");
    }
}
