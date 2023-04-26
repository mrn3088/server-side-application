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

/* @Live/_totalVisitors.twig */
class __TwigTemplate_bb966140b454dcc49039cf95b85ca5b6 extends Template
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
        echo "<div id=\"visitsTotal\">
    <table class=\"dataTable\" cellspacing=\"0\">
        <thead>
        <tr>
            <th id=\"label\" class=\"sortable label first\" style=\"cursor: auto;\">
                <div id=\"thDIV\">";
        // line 6
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_Date"), "html", null, true);
        echo "</div>
            </th>
            <th class=\"sortable\" style=\"cursor: auto;\">
                <div id=\"thDIV\">";
        // line 9
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_ColumnNbVisits"), "html", null, true);
        echo "</div>
            </th>
            <th class=\"sortable\" style=\"cursor: auto;\">
                <div id=\"thDIV\">";
        // line 12
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_Actions"), "html", null, true);
        echo "</div>
            </th>
        </tr>
        </thead>
        <tbody>
        <tr class=\"\">
            <td class=\"label column\">";
        // line 18
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Live_LastHours", 24), "html", null, true);
        echo "</td>
            <td class=\"column\" ";
        // line 19
        if ((isset($context["countErrorToday"]) || array_key_exists("countErrorToday", $context) ? $context["countErrorToday"] : (function () { throw new RuntimeError('Variable "countErrorToday" does not exist.', 19, $this->source); })())) {
            echo "title=\"";
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["countErrorToday"]) || array_key_exists("countErrorToday", $context) ? $context["countErrorToday"] : (function () { throw new RuntimeError('Variable "countErrorToday" does not exist.', 19, $this->source); })()), "html_attr");
            echo "\"";
        }
        echo ">";
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('number')->getCallable()((isset($context["visitorsCountToday"]) || array_key_exists("visitorsCountToday", $context) ? $context["visitorsCountToday"] : (function () { throw new RuntimeError('Variable "visitorsCountToday" does not exist.', 19, $this->source); })())), "html", null, true);
        echo "</td>
            <td class=\"column\" ";
        // line 20
        if ((isset($context["countErrorToday"]) || array_key_exists("countErrorToday", $context) ? $context["countErrorToday"] : (function () { throw new RuntimeError('Variable "countErrorToday" does not exist.', 20, $this->source); })())) {
            echo "title=\"";
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["countErrorToday"]) || array_key_exists("countErrorToday", $context) ? $context["countErrorToday"] : (function () { throw new RuntimeError('Variable "countErrorToday" does not exist.', 20, $this->source); })()), "html_attr");
            echo "\"";
        }
        echo ">";
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('number')->getCallable()((isset($context["pisToday"]) || array_key_exists("pisToday", $context) ? $context["pisToday"] : (function () { throw new RuntimeError('Variable "pisToday" does not exist.', 20, $this->source); })())), "html", null, true);
        echo "</td>
        </tr>
        <tr class=\"\">
            <td class=\"label column\">";
        // line 23
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Live_LastMinutes", 30), "html", null, true);
        echo "</td>
            <td class=\"column\" ";
        // line 24
        if ((isset($context["countErrorHalfHour"]) || array_key_exists("countErrorHalfHour", $context) ? $context["countErrorHalfHour"] : (function () { throw new RuntimeError('Variable "countErrorHalfHour" does not exist.', 24, $this->source); })())) {
            echo "title=\"";
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["countErrorHalfHour"]) || array_key_exists("countErrorHalfHour", $context) ? $context["countErrorHalfHour"] : (function () { throw new RuntimeError('Variable "countErrorHalfHour" does not exist.', 24, $this->source); })()), "html_attr");
            echo "\"";
        }
        echo ">";
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('number')->getCallable()((isset($context["visitorsCountHalfHour"]) || array_key_exists("visitorsCountHalfHour", $context) ? $context["visitorsCountHalfHour"] : (function () { throw new RuntimeError('Variable "visitorsCountHalfHour" does not exist.', 24, $this->source); })())), "html", null, true);
        echo "</td>
            <td class=\"column\" ";
        // line 25
        if ((isset($context["countErrorHalfHour"]) || array_key_exists("countErrorHalfHour", $context) ? $context["countErrorHalfHour"] : (function () { throw new RuntimeError('Variable "countErrorHalfHour" does not exist.', 25, $this->source); })())) {
            echo "title=\"";
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["countErrorHalfHour"]) || array_key_exists("countErrorHalfHour", $context) ? $context["countErrorHalfHour"] : (function () { throw new RuntimeError('Variable "countErrorHalfHour" does not exist.', 25, $this->source); })()), "html_attr");
            echo "\"";
        }
        echo ">";
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('number')->getCallable()((isset($context["pisHalfhour"]) || array_key_exists("pisHalfhour", $context) ? $context["pisHalfhour"] : (function () { throw new RuntimeError('Variable "pisHalfhour" does not exist.', 25, $this->source); })())), "html", null, true);
        echo "</td>
        </tr>
        </tbody>
    </table>
</div>
";
    }

    public function getTemplateName()
    {
        return "@Live/_totalVisitors.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 25,  95 => 24,  91 => 23,  79 => 20,  69 => 19,  65 => 18,  56 => 12,  50 => 9,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"visitsTotal\">
    <table class=\"dataTable\" cellspacing=\"0\">
        <thead>
        <tr>
            <th id=\"label\" class=\"sortable label first\" style=\"cursor: auto;\">
                <div id=\"thDIV\">{{ 'General_Date'|translate }}</div>
            </th>
            <th class=\"sortable\" style=\"cursor: auto;\">
                <div id=\"thDIV\">{{ 'General_ColumnNbVisits'|translate }}</div>
            </th>
            <th class=\"sortable\" style=\"cursor: auto;\">
                <div id=\"thDIV\">{{ 'General_Actions'|translate }}</div>
            </th>
        </tr>
        </thead>
        <tbody>
        <tr class=\"\">
            <td class=\"label column\">{{ 'Live_LastHours'|translate(24) }}</td>
            <td class=\"column\" {% if countErrorToday %}title=\"{{ countErrorToday|e('html_attr') }}\"{% endif %}>{{ visitorsCountToday|number }}</td>
            <td class=\"column\" {% if countErrorToday %}title=\"{{ countErrorToday|e('html_attr') }}\"{% endif %}>{{ pisToday|number }}</td>
        </tr>
        <tr class=\"\">
            <td class=\"label column\">{{ 'Live_LastMinutes'|translate(30) }}</td>
            <td class=\"column\" {% if countErrorHalfHour %}title=\"{{ countErrorHalfHour|e('html_attr') }}\"{% endif %}>{{ visitorsCountHalfHour|number }}</td>
            <td class=\"column\" {% if countErrorHalfHour %}title=\"{{ countErrorHalfHour|e('html_attr') }}\"{% endif %}>{{ pisHalfhour|number }}</td>
        </tr>
        </tbody>
    </table>
</div>
", "@Live/_totalVisitors.twig", "/var/www/cse135.monster/public_html/matomo/plugins/Live/templates/_totalVisitors.twig");
    }
}
