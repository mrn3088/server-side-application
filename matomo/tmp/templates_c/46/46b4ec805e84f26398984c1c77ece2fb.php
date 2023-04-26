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

/* @Referrers/_visitorDetails.twig */
class __TwigTemplate_0befe64c5017ca1e2cc608796b6a3a70 extends Template
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
        echo "<div class=\"visitorReferrer ";
        echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 1, $this->source); })()), "getColumn", [0 => "referrerType"], "method", false, false, false, 1), "html", null, true);
        echo "\">
    ";
        // line 2
        if ((twig_get_attribute($this->env, $this->source, (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 2, $this->source); })()), "getColumn", [0 => "referrerType"], "method", false, false, false, 2) == "website")) {
            // line 3
            echo "        <span>";
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Referrers_ColumnWebsite"), "html", null, true);
            echo ":</span>
        <a href=\"";
            // line 4
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('safelink')->getCallable()(twig_get_attribute($this->env, $this->source, (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 4, $this->source); })()), "getColumn", [0 => "referrerUrl"], "method", false, false, false, 4)), "html_attr");
            echo "\" rel=\"noreferrer noopener\" target=\"_blank\" class=\"visitorLogTooltip\" title=\"";
            echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 4, $this->source); })()), "getColumn", [0 => "referrerUrl"], "method", false, false, false, 4), "html", null, true);
            echo "\"
           style=\"text-decoration:underline;\">
            ";
            // line 6
            echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 6, $this->source); })()), "getColumn", [0 => "referrerName"], "method", false, false, false, 6), "html", null, true);
            echo "
        </a>
    ";
        }
        // line 9
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 9, $this->source); })()), "getColumn", [0 => "referrerType"], "method", false, false, false, 9) == "campaign")) {
            // line 10
            echo "        <span>";
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Referrers_ColumnCampaign"), "html", null, true);
            echo ": ";
            echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 10, $this->source); })()), "getColumn", [0 => "referrerName"], "method", false, false, false, 10), "html", null, true);
            echo "
            ";
            // line 11
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 11, $this->source); })()), "getColumn", [0 => "referrerKeyword"], "method", false, false, false, 11))) {
                echo " - ";
                echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 11, $this->source); })()), "getColumn", [0 => "referrerKeyword"], "method", false, false, false, 11), "html", null, true);
            }
            echo "</span>
    ";
        }
        // line 13
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 13, $this->source); })()), "getColumn", [0 => "referrerType"], "method", false, false, false, 13) == "social")) {
            // line 14
            echo "        <span>";
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Referrers_ColumnSocial"), "html", null, true);
            echo ":</span>
        ";
            // line 15
            if (twig_get_attribute($this->env, $this->source, (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 15, $this->source); })()), "getColumn", [0 => "referrerSearchEngineIcon"], "method", false, false, false, 15)) {
                // line 16
                echo "            <img width=\"16\" src=\"";
                echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 16, $this->source); })()), "getColumn", [0 => "referrerSocialNetworkIcon"], "method", false, false, false, 16), "html", null, true);
                echo "\" alt=\"";
                echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 16, $this->source); })()), "getColumn", [0 => "referrerName"], "method", false, false, false, 16), "html", null, true);
                echo "\"/>
        ";
            }
            // line 18
            echo "        <a href=\"";
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('safelink')->getCallable()(twig_get_attribute($this->env, $this->source, (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 18, $this->source); })()), "getColumn", [0 => "referrerUrl"], "method", false, false, false, 18)), "html_attr");
            echo "\" rel=\"noreferrer\" target=\"_blank\" class=\"visitorLogTooltip\" title=\"";
            echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 18, $this->source); })()), "getColumn", [0 => "referrerUrl"], "method", false, false, false, 18), "html", null, true);
            echo "\"
           style=\"text-decoration:underline;\">
            ";
            // line 20
            echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 20, $this->source); })()), "getColumn", [0 => "referrerName"], "method", false, false, false, 20), "html", null, true);
            echo "
        </a>
    ";
        }
        // line 23
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 23, $this->source); })()), "getColumn", [0 => "referrerType"], "method", false, false, false, 23) == "search")) {
            // line 24
            $context["keywordNotDefined"] = $this->env->getFilter('translate')->getCallable()("General_NotDefined", $this->env->getFilter('translate')->getCallable()("General_ColumnKeyword"));
            // line 25
            $context["showKeyword"] = ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 25, $this->source); })()), "getColumn", [0 => "referrerKeyword"], "method", false, false, false, 25)) && (twig_get_attribute($this->env, $this->source, (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 25, $this->source); })()), "getColumn", [0 => "referrerKeyword"], "method", false, false, false, 25) != (isset($context["keywordNotDefined"]) || array_key_exists("keywordNotDefined", $context) ? $context["keywordNotDefined"] : (function () { throw new RuntimeError('Variable "keywordNotDefined" does not exist.', 25, $this->source); })())));
            // line 26
            echo "<span ";
            if ( !(isset($context["showKeyword"]) || array_key_exists("showKeyword", $context) ? $context["showKeyword"] : (function () { throw new RuntimeError('Variable "showKeyword" does not exist.', 26, $this->source); })())) {
                echo "title=\"";
                echo \Piwik\piwik_escape_filter($this->env, (isset($context["keywordNotDefined"]) || array_key_exists("keywordNotDefined", $context) ? $context["keywordNotDefined"] : (function () { throw new RuntimeError('Variable "keywordNotDefined" does not exist.', 26, $this->source); })()), "html", null, true);
                echo "\"";
            }
            echo ">
        ";
            // line 27
            if (twig_get_attribute($this->env, $this->source, (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 27, $this->source); })()), "getColumn", [0 => "referrerSearchEngineIcon"], "method", false, false, false, 27)) {
                // line 28
                echo "            <img width=\"16\" src=\"";
                echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 28, $this->source); })()), "getColumn", [0 => "referrerSearchEngineIcon"], "method", false, false, false, 28), "html", null, true);
                echo "\" alt=\"";
                echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 28, $this->source); })()), "getColumn", [0 => "referrerName"], "method", false, false, false, 28), "html", null, true);
                echo "\"/>
        ";
            }
            // line 30
            echo "            <span>";
            echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 30, $this->source); })()), "getColumn", [0 => "referrerName"], "method", false, false, false, 30), "html", null, true);
            echo "</span>";
            // line 31
            if ((isset($context["showKeyword"]) || array_key_exists("showKeyword", $context) ? $context["showKeyword"] : (function () { throw new RuntimeError('Variable "showKeyword" does not exist.', 31, $this->source); })())) {
                echo "<span>, ";
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Referrers_Keywords"), "html", null, true);
                echo ":</span>
            <a href=\"";
                // line 32
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('safelink')->getCallable()(twig_get_attribute($this->env, $this->source, (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 32, $this->source); })()), "getColumn", [0 => "referrerUrl"], "method", false, false, false, 32)), "html_attr");
                echo "\" rel=\"noreferrer noopener\" target=\"_blank\" style=\"text-decoration:underline;\">
                \"";
                // line 33
                echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 33, $this->source); })()), "getColumn", [0 => "referrerKeyword"], "method", false, false, false, 33), "html", null, true);
                echo "\"</a>
        ";
            }
            // line 35
            echo "        ";
            ob_start();
            echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 35, $this->source); })()), "getColumn", [0 => "referrerKeyword"], "method", false, false, false, 35), "html", null, true);
            $context["keyword"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 36
            echo "        ";
            ob_start();
            echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 36, $this->source); })()), "getColumn", [0 => "referrerName"], "method", false, false, false, 36), "html", null, true);
            $context["searchName"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 37
            echo "        ";
            ob_start();
            echo "#";
            echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 37, $this->source); })()), "getColumn", [0 => "referrerKeywordPosition"], "method", false, false, false, 37), "html", null, true);
            $context["position"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 38
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 38, $this->source); })()), "getColumn", [0 => "referrerKeywordPosition"], "method", false, false, false, 38)) {
                // line 39
                echo "            <span title='";
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Live_KeywordRankedOnSearchResultForThisVisitor", (isset($context["keyword"]) || array_key_exists("keyword", $context) ? $context["keyword"] : (function () { throw new RuntimeError('Variable "keyword" does not exist.', 39, $this->source); })()), (isset($context["position"]) || array_key_exists("position", $context) ? $context["position"] : (function () { throw new RuntimeError('Variable "position" does not exist.', 39, $this->source); })()), (isset($context["searchName"]) || array_key_exists("searchName", $context) ? $context["searchName"] : (function () { throw new RuntimeError('Variable "searchName" does not exist.', 39, $this->source); })())), "html", null, true);
                echo "' class='visitorRank visitorLogTooltip'>
                            <span class='hash'>#</span>
                ";
                // line 41
                echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 41, $this->source); })()), "getColumn", [0 => "referrerKeywordPosition"], "method", false, false, false, 41), "html", null, true);
                echo "
                        </span>
        ";
            }
            // line 44
            echo "        </span>
    ";
        }
        // line 46
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 46, $this->source); })()), "getColumn", [0 => "referrerType"], "method", false, false, false, 46) == "direct")) {
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Referrers_DirectEntry"), "html", null, true);
        }
        // line 47
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "@Referrers/_visitorDetails.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 47,  192 => 46,  188 => 44,  182 => 41,  176 => 39,  173 => 38,  167 => 37,  162 => 36,  157 => 35,  152 => 33,  148 => 32,  142 => 31,  138 => 30,  130 => 28,  128 => 27,  119 => 26,  117 => 25,  115 => 24,  112 => 23,  106 => 20,  98 => 18,  90 => 16,  88 => 15,  83 => 14,  80 => 13,  72 => 11,  65 => 10,  62 => 9,  56 => 6,  49 => 4,  44 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"visitorReferrer {{ visitInfo.getColumn('referrerType') }}\">
    {% if visitInfo.getColumn('referrerType') == 'website' %}
        <span>{{ 'Referrers_ColumnWebsite'|translate }}:</span>
        <a href=\"{{ visitInfo.getColumn('referrerUrl')|safelink|e('html_attr') }}\" rel=\"noreferrer noopener\" target=\"_blank\" class=\"visitorLogTooltip\" title=\"{{ visitInfo.getColumn('referrerUrl') }}\"
           style=\"text-decoration:underline;\">
            {{ visitInfo.getColumn('referrerName') }}
        </a>
    {% endif %}
    {% if visitInfo.getColumn('referrerType') == 'campaign' %}
        <span>{{ 'Referrers_ColumnCampaign'|translate }}: {{ visitInfo.getColumn('referrerName') }}
            {% if visitInfo.getColumn('referrerKeyword') is not empty %} - {{ visitInfo.getColumn('referrerKeyword') }}{% endif %}</span>
    {% endif %}
    {% if visitInfo.getColumn('referrerType') == 'social' %}
        <span>{{ 'Referrers_ColumnSocial'|translate }}:</span>
        {% if visitInfo.getColumn('referrerSearchEngineIcon') %}
            <img width=\"16\" src=\"{{ visitInfo.getColumn('referrerSocialNetworkIcon') }}\" alt=\"{{ visitInfo.getColumn('referrerName') }}\"/>
        {% endif %}
        <a href=\"{{ visitInfo.getColumn('referrerUrl')|safelink|e('html_attr') }}\" rel=\"noreferrer\" target=\"_blank\" class=\"visitorLogTooltip\" title=\"{{ visitInfo.getColumn('referrerUrl') }}\"
           style=\"text-decoration:underline;\">
            {{ visitInfo.getColumn('referrerName') }}
        </a>
    {% endif %}
    {% if visitInfo.getColumn('referrerType') == 'search' %}
        {%- set keywordNotDefined = 'General_NotDefined'|translate('General_ColumnKeyword'|translate) -%}
        {%- set showKeyword = visitInfo.getColumn('referrerKeyword') is not empty and visitInfo.getColumn('referrerKeyword') != keywordNotDefined -%}
        <span {% if not showKeyword %}title=\"{{ keywordNotDefined }}\"{% endif %}>
        {% if visitInfo.getColumn('referrerSearchEngineIcon') %}
            <img width=\"16\" src=\"{{ visitInfo.getColumn('referrerSearchEngineIcon') }}\" alt=\"{{ visitInfo.getColumn('referrerName') }}\"/>
        {% endif %}
            <span>{{ visitInfo.getColumn('referrerName') }}</span>
        {%- if showKeyword %}<span>, {{ 'Referrers_Keywords'|translate }}:</span>
            <a href=\"{{ visitInfo.getColumn('referrerUrl')|safelink|e('html_attr') }}\" rel=\"noreferrer noopener\" target=\"_blank\" style=\"text-decoration:underline;\">
                \"{{ visitInfo.getColumn('referrerKeyword') }}\"</a>
        {% endif %}
        {% set keyword %}{{ visitInfo.getColumn('referrerKeyword') }}{% endset %}
        {% set searchName %}{{ visitInfo.getColumn('referrerName') }}{% endset %}
        {% set position %}#{{ visitInfo.getColumn('referrerKeywordPosition') }}{% endset %}
        {% if visitInfo.getColumn('referrerKeywordPosition') %}
            <span title='{{ 'Live_KeywordRankedOnSearchResultForThisVisitor'|translate(keyword,position,searchName) }}' class='visitorRank visitorLogTooltip'>
                            <span class='hash'>#</span>
                {{ visitInfo.getColumn('referrerKeywordPosition') }}
                        </span>
        {% endif %}
        </span>
    {% endif %}
    {% if visitInfo.getColumn('referrerType') == 'direct' %}{{ 'Referrers_DirectEntry'|translate }}{% endif %}
</div>
", "@Referrers/_visitorDetails.twig", "/var/www/cse135.monster/public_html/matomo/plugins/Referrers/templates/_visitorDetails.twig");
    }
}
