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

/* @Dashboard/_dashboardSettings.twig */
class __TwigTemplate_2e0ec8c98e6f1de9d31612aa9fd91422 extends Template
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
        echo "<a class=\"title\" title=\"";
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Dashboard_ManageDashboard"), "html_attr");
        echo "\" tabindex=\"4\"><span class=\"icon icon-arrow-bottom\"></span>";
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Dashboard_Dashboard"), "html", null, true);
        echo " </a>
<div class=\"dropdown positionInViewport\">
    <ul class=\"submenu\">
        <li>
            <div class=\"addWidget\">";
        // line 5
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Dashboard_AddAWidget"), "html", null, true);
        echo "</div>
            <ul class=\"widgetpreview-categorylist\"></ul>
        </li>
        ";
        // line 8
        if ((twig_length_filter($this->env, (isset($context["dashboardActions"]) || array_key_exists("dashboardActions", $context) ? $context["dashboardActions"] : (function () { throw new RuntimeError('Variable "dashboardActions" does not exist.', 8, $this->source); })())) > 0)) {
            // line 9
            echo "            <li>
                <div class=\"manageDashboard\">";
            // line 10
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Dashboard_ManageDashboard"), "html", null, true);
            echo "</div>
                <ul>
                    ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["dashboardActions"]) || array_key_exists("dashboardActions", $context) ? $context["dashboardActions"] : (function () { throw new RuntimeError('Variable "dashboardActions" does not exist.', 12, $this->source); })()));
            foreach ($context['_seq'] as $context["action"] => $context["title"]) {
                // line 13
                echo "                        <li data-action=\"";
                echo \Piwik\piwik_escape_filter($this->env, $context["action"], "html", null, true);
                echo "\">";
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()($context["title"]), "html", null, true);
                echo "</li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['action'], $context['title'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "                </ul>
            </li>
        ";
        }
        // line 18
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["generalActions"]) || array_key_exists("generalActions", $context) ? $context["generalActions"] : (function () { throw new RuntimeError('Variable "generalActions" does not exist.', 18, $this->source); })()));
        foreach ($context['_seq'] as $context["action"] => $context["title"]) {
            // line 19
            echo "            <li class=\"generalAction\" data-action=\"";
            echo \Piwik\piwik_escape_filter($this->env, $context["action"], "html", null, true);
            echo "\">";
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()($context["title"]), "html", null, true);
            echo "</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['action'], $context['title'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "    </ul>
    <ul class=\"widgetpreview-widgetlist\"></ul>
    <div class=\"widgetpreview-preview\"></div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@Dashboard/_dashboardSettings.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 21,  88 => 19,  83 => 18,  78 => 15,  67 => 13,  63 => 12,  58 => 10,  55 => 9,  53 => 8,  47 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<a class=\"title\" title=\"{{ 'Dashboard_ManageDashboard'|translate|e('html_attr') }}\" tabindex=\"4\"><span class=\"icon icon-arrow-bottom\"></span>{{ 'Dashboard_Dashboard'|translate }} </a>
<div class=\"dropdown positionInViewport\">
    <ul class=\"submenu\">
        <li>
            <div class=\"addWidget\">{{ 'Dashboard_AddAWidget'|translate }}</div>
            <ul class=\"widgetpreview-categorylist\"></ul>
        </li>
        {% if dashboardActions|length > 0 %}
            <li>
                <div class=\"manageDashboard\">{{ 'Dashboard_ManageDashboard'|translate }}</div>
                <ul>
                    {% for action, title in dashboardActions %}
                        <li data-action=\"{{ action }}\">{{ title|translate }}</li>
                    {% endfor %}
                </ul>
            </li>
        {% endif %}
        {% for action, title in generalActions %}
            <li class=\"generalAction\" data-action=\"{{ action }}\">{{ title|translate }}</li>
        {% endfor %}
    </ul>
    <ul class=\"widgetpreview-widgetlist\"></ul>
    <div class=\"widgetpreview-preview\"></div>
</div>
", "@Dashboard/_dashboardSettings.twig", "/var/www/cse135.monster/public_html/matomo/plugins/Dashboard/templates/_dashboardSettings.twig");
    }
}
