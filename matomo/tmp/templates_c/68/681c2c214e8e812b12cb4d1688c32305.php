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

/* @CoreHome/getDefaultIndexView.twig */
class __TwigTemplate_2c14f8042b29ee5a0b005ef8866ffd63 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'topcontrols' => [$this, 'block_topcontrols'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "dashboard.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $macros["ajax"] = $this->macros["ajax"] = $this->loadTemplate("ajaxMacros.twig", "@CoreHome/getDefaultIndexView.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("dashboard.twig", "@CoreHome/getDefaultIndexView.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_topcontrols($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "    ";
        $this->loadTemplate("@CoreHome/_siteSelectHeader.twig", "@CoreHome/getDefaultIndexView.twig", 5)->display($context);
        // line 6
        echo "    ";
        $this->loadTemplate("@CoreHome/_periodSelect.twig", "@CoreHome/getDefaultIndexView.twig", 6)->display($context);
        // line 7
        echo "    ";
        echo $this->env->getFunction('postEvent')->getCallable()("Template.nextToCalendar");
        echo "
    ";
        // line 8
        $this->loadTemplate($context["dashboardSettingsControl"]->getTemplateFile(), "@CoreHome/getDefaultIndexView.twig", 8)->display(twig_array_merge($context, $context["dashboardSettingsControl"]->getTemplateVars()));
        // line 9
        echo "    ";
        $this->loadTemplate("@CoreHome/_headerMessage.twig", "@CoreHome/getDefaultIndexView.twig", 9)->display($context);
    }

    // line 12
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "    ";
        echo twig_call_macro($macros["ajax"], "macro_requestErrorDiv", [((array_key_exists("contactEmail", $context)) ? (_twig_default_filter((isset($context["contactEmail"]) || array_key_exists("contactEmail", $context) ? $context["contactEmail"] : (function () { throw new RuntimeError('Variable "contactEmail" does not exist.', 13, $this->source); })()), "")) : ("")), (isset($context["areAdsForProfessionalServicesEnabled"]) || array_key_exists("areAdsForProfessionalServicesEnabled", $context) ? $context["areAdsForProfessionalServicesEnabled"] : (function () { throw new RuntimeError('Variable "areAdsForProfessionalServicesEnabled" does not exist.', 13, $this->source); })()), (isset($context["currentModule"]) || array_key_exists("currentModule", $context) ? $context["currentModule"] : (function () { throw new RuntimeError('Variable "currentModule" does not exist.', 13, $this->source); })()), (isset($context["showMoreFaqInfo"]) || array_key_exists("showMoreFaqInfo", $context) ? $context["showMoreFaqInfo"] : (function () { throw new RuntimeError('Variable "showMoreFaqInfo" does not exist.', 13, $this->source); })())], 13, $context, $this->getSourceContext());
        echo "
    ";
        // line 14
        echo twig_call_macro($macros["ajax"], "macro_loadingDiv", [], 14, $context, $this->getSourceContext());
        echo "

    <div id=\"content\" class=\"home\">
        ";
        // line 17
        if ((isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 17, $this->source); })())) {
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 17, $this->source); })()), "html", null, true);
        }
        // line 18
        echo "        <div piwik-reporting-page ng-cloak></div>
    </div>
    <div class=\"clear\"></div>

";
    }

    public function getTemplateName()
    {
        return "@CoreHome/getDefaultIndexView.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 18,  87 => 17,  81 => 14,  76 => 13,  72 => 12,  67 => 9,  65 => 8,  60 => 7,  57 => 6,  54 => 5,  50 => 4,  45 => 1,  43 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"dashboard.twig\" %}
{% import 'ajaxMacros.twig' as ajax %}

{% block topcontrols %}
    {% include \"@CoreHome/_siteSelectHeader.twig\" %}
    {% include \"@CoreHome/_periodSelect.twig\" %}
    {{ postEvent(\"Template.nextToCalendar\") }}
    {% render dashboardSettingsControl %}
    {% include \"@CoreHome/_headerMessage.twig\" %}
{% endblock %}

{% block content %}
    {{ ajax.requestErrorDiv(contactEmail|default(''), areAdsForProfessionalServicesEnabled, currentModule, showMoreFaqInfo) }}
    {{ ajax.loadingDiv() }}

    <div id=\"content\" class=\"home\">
        {% if content %}{{ content }}{% endif %}
        <div piwik-reporting-page ng-cloak></div>
    </div>
    <div class=\"clear\"></div>

{% endblock %}

", "@CoreHome/getDefaultIndexView.twig", "/var/www/cse135.monster/public_html/matomo/plugins/CoreHome/templates/getDefaultIndexView.twig");
    }
}
