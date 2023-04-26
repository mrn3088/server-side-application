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

/* @Live/_dataTableViz_visitorLog.twig */
class __TwigTemplate_daf3843e4888aabf1cda4626d494617c extends Template
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
        $context["displayVisitorsInOwnColumn"] = (((isset($context["isWidget"]) || array_key_exists("isWidget", $context) ? $context["isWidget"] : (function () { throw new RuntimeError('Variable "isWidget" does not exist.', 1, $this->source); })())) ? (false) : (true));
        // line 2
        echo "
";
        // line 3
        $context["cycleIndex"] = 0;
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["dataTable"]) || array_key_exists("dataTable", $context) ? $context["dataTable"] : (function () { throw new RuntimeError('Variable "dataTable" does not exist.', 4, $this->source); })()), "getRows", [], "method", false, false, false, 4));
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
            // line 5
            echo "    ";
            ob_start();
            // line 6
            echo "        <div class=\"card row hoverable\">

            ";
            // line 8
            if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["visitor"], "getColumn", [0 => "visitorId"], "method", false, false, false, 8)) &&  !twig_get_attribute($this->env, $this->source, (isset($context["clientSideParameters"]) || array_key_exists("clientSideParameters", $context) ? $context["clientSideParameters"] : (function () { throw new RuntimeError('Variable "clientSideParameters" does not exist.', 8, $this->source); })()), "hideProfileLink", [], "any", false, false, false, 8))) {
                // line 9
                echo "                <a class=\"visitor-log-visitor-profile-link visitorLogTooltip\" data-visitor-id=\"";
                echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["visitor"], "getColumn", [0 => "visitorId"], "method", false, false, false, 9), "html", null, true);
                echo "\">
                    <img src=\"plugins/Live/images/visitorProfileLaunch.png\"/> <span>";
                // line 10
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Live_ViewVisitorProfile"), "html", null, true);
                // line 11
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["visitor"], "getColumn", [0 => "userId"], "method", false, false, false, 11))) {
                    echo ": ";
                    echo $this->env->getFilter('rawSafeDecoded')->getCallable()(twig_get_attribute($this->env, $this->source, $context["visitor"], "getColumn", [0 => "userId"], "method", false, false, false, 11));
                }
                echo "</span>
                </a>
            ";
            }
            // line 14
            echo "
        ";
            // line 15
            $context["cycleIndex"] = ((isset($context["cycleIndex"]) || array_key_exists("cycleIndex", $context) ? $context["cycleIndex"] : (function () { throw new RuntimeError('Variable "cycleIndex" does not exist.', 15, $this->source); })()) + 1);
            // line 16
            echo "            <div class=\"col s12 m";
            if ((isset($context["displayVisitorsInOwnColumn"]) || array_key_exists("displayVisitorsInOwnColumn", $context) ? $context["displayVisitorsInOwnColumn"] : (function () { throw new RuntimeError('Variable "displayVisitorsInOwnColumn" does not exist.', 16, $this->source); })())) {
                echo "3";
            } else {
                echo "4";
            }
            echo "\">
                ";
            // line 17
            echo $this->env->getFunction('postEvent')->getCallable()("Live.renderVisitorDetails", $context["visitor"]);
            echo "
            </div>

            ";
            // line 20
            if ((isset($context["displayVisitorsInOwnColumn"]) || array_key_exists("displayVisitorsInOwnColumn", $context) ? $context["displayVisitorsInOwnColumn"] : (function () { throw new RuntimeError('Variable "displayVisitorsInOwnColumn" does not exist.', 20, $this->source); })())) {
                // line 21
                echo "                <div class=\"col s12 m2 own-visitor-column\">
                    ";
                // line 22
                echo $this->env->getFunction('postEvent')->getCallable()("Live.renderVisitorIcons", $context["visitor"]);
                echo "
                </div>
            ";
            }
            // line 25
            echo "
            <div class=\"col s12 m";
            // line 26
            if ((isset($context["displayVisitorsInOwnColumn"]) || array_key_exists("displayVisitorsInOwnColumn", $context) ? $context["displayVisitorsInOwnColumn"] : (function () { throw new RuntimeError('Variable "displayVisitorsInOwnColumn" does not exist.', 26, $this->source); })())) {
                echo "7";
            } else {
                echo "8";
            }
            echo " column ";
            if ((twig_get_attribute($this->env, $this->source, $context["visitor"], "getColumn", [0 => "visitConverted"], "method", false, false, false, 26) &&  !(isset($context["isWidget"]) || array_key_exists("isWidget", $context) ? $context["isWidget"] : (function () { throw new RuntimeError('Variable "isWidget" does not exist.', 26, $this->source); })()))) {
                echo "highlightField";
            }
            echo "\">
                ";
            // line 27
            echo $this->env->getFunction('postEvent')->getCallable()("Live.visitorLogViewBeforeActionsInfo", $context["visitor"]);
            echo "

                <strong>
                    ";
            // line 30
            $context["actionCount"] = twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["visitor"], "getColumn", [0 => "actionDetails"], "method", false, false, false, 30));
            // line 31
            echo "                    ";
            if (twig_get_attribute($this->env, $this->source, $context["visitor"], "truncatedActionsCount", [], "any", true, true, false, 31)) {
                // line 32
                echo "                        ";
                $context["actionCount"] = ((isset($context["actionCount"]) || array_key_exists("actionCount", $context) ? $context["actionCount"] : (function () { throw new RuntimeError('Variable "actionCount" does not exist.', 32, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["visitor"], "truncatedActionsCount", [], "any", false, false, false, 32));
                // line 33
                echo "                    ";
            }
            // line 34
            echo "                    ";
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["actionCount"]) || array_key_exists("actionCount", $context) ? $context["actionCount"] : (function () { throw new RuntimeError('Variable "actionCount" does not exist.', 34, $this->source); })()), "html", null, true);
            echo "
                    ";
            // line 35
            if (((isset($context["actionCount"]) || array_key_exists("actionCount", $context) ? $context["actionCount"] : (function () { throw new RuntimeError('Variable "actionCount" does not exist.', 35, $this->source); })()) <= 1)) {
                // line 36
                echo "                        ";
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_Action"), "html", null, true);
                echo "
                    ";
            } else {
                // line 38
                echo "                        ";
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_Actions"), "html", null, true);
                echo "
                    ";
            }
            // line 40
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["visitor"], "getColumn", [0 => "visitDuration"], "method", false, false, false, 40) > 0)) {
                echo "- ";
                echo twig_get_attribute($this->env, $this->source, $context["visitor"], "getColumn", [0 => "visitDurationPretty"], "method", false, false, false, 40);
            }
            // line 41
            echo "                </strong>

                <div class=\"visitor-log-page-list\">
                    <ol class='visitorLog actionList'>
                        ";
            // line 45
            $this->loadTemplate("@Live/_actionsList.twig", "@Live/_dataTableViz_visitorLog.twig", 45)->display(twig_array_merge($context, ["actionGroups" => twig_get_attribute($this->env, $this->source, $context["visitor"], "getColumn", [0 => "actionGroups"], "method", false, false, false, 45), "visitInfo" => $context["visitor"]]));
            // line 46
            echo "                    </ol>
                </div>
                ";
            // line 48
            echo $this->env->getFunction('postEvent')->getCallable()("Live.visitorLogViewAfterActionsInfo", $context["visitor"]);
            echo "
            </div>
        </div>
    ";
            $context["visitorRow"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 52
            echo "
    ";
            // line 53
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["visitorRow"]) || array_key_exists("visitorRow", $context) ? $context["visitorRow"] : (function () { throw new RuntimeError('Variable "visitorRow" does not exist.', 53, $this->source); })()), "html", null, true);
            echo "
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
    }

    public function getTemplateName()
    {
        return "@Live/_dataTableViz_visitorLog.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 53,  193 => 52,  186 => 48,  182 => 46,  180 => 45,  174 => 41,  168 => 40,  162 => 38,  156 => 36,  154 => 35,  149 => 34,  146 => 33,  143 => 32,  140 => 31,  138 => 30,  132 => 27,  120 => 26,  117 => 25,  111 => 22,  108 => 21,  106 => 20,  100 => 17,  91 => 16,  89 => 15,  86 => 14,  77 => 11,  75 => 10,  70 => 9,  68 => 8,  64 => 6,  61 => 5,  44 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set displayVisitorsInOwnColumn = (isWidget ? false : true) %}

{% set cycleIndex=0 %}
{% for visitor in dataTable.getRows() %}
    {% set visitorRow %}
        <div class=\"card row hoverable\">

            {% if visitor.getColumn('visitorId') is not empty and not clientSideParameters.hideProfileLink %}
                <a class=\"visitor-log-visitor-profile-link visitorLogTooltip\" data-visitor-id=\"{{ visitor.getColumn(\"visitorId\") }}\">
                    <img src=\"plugins/Live/images/visitorProfileLaunch.png\"/> <span>{{ 'Live_ViewVisitorProfile'|translate }}
                        {%- if visitor.getColumn('userId') is not empty %}: {{ visitor.getColumn('userId')|rawSafeDecoded }}{% endif %}</span>
                </a>
            {% endif %}

        {% set cycleIndex=cycleIndex+1 %}
            <div class=\"col s12 m{% if displayVisitorsInOwnColumn %}3{% else %}4{% endif %}\">
                {{ postEvent('Live.renderVisitorDetails', visitor) }}
            </div>

            {% if displayVisitorsInOwnColumn %}
                <div class=\"col s12 m2 own-visitor-column\">
                    {{ postEvent('Live.renderVisitorIcons', visitor) }}
                </div>
            {% endif %}

            <div class=\"col s12 m{% if displayVisitorsInOwnColumn %}7{% else %}8{% endif %} column {% if visitor.getColumn('visitConverted') and not isWidget %}highlightField{% endif %}\">
                {{ postEvent('Live.visitorLogViewBeforeActionsInfo', visitor) }}

                <strong>
                    {% set actionCount = visitor.getColumn('actionDetails')|length %}
                    {% if visitor.truncatedActionsCount is defined %}
                        {% set actionCount = actionCount + visitor.truncatedActionsCount %}
                    {% endif %}
                    {{ actionCount }}
                    {% if actionCount <= 1 %}
                        {{ 'General_Action'|translate }}
                    {% else %}
                        {{ 'General_Actions'|translate }}
                    {% endif %}
                    {% if visitor.getColumn('visitDuration') > 0 %}- {{ visitor.getColumn('visitDurationPretty')|raw }}{% endif %}
                </strong>

                <div class=\"visitor-log-page-list\">
                    <ol class='visitorLog actionList'>
                        {% include \"@Live/_actionsList.twig\" with {'actionGroups': visitor.getColumn('actionGroups'), 'visitInfo': visitor} %}
                    </ol>
                </div>
                {{ postEvent('Live.visitorLogViewAfterActionsInfo', visitor) }}
            </div>
        </div>
    {% endset %}

    {{ visitorRow }}
{% endfor %}
", "@Live/_dataTableViz_visitorLog.twig", "/var/www/cse135.monster/public_html/matomo/plugins/Live/templates/_dataTableViz_visitorLog.twig");
    }
}
