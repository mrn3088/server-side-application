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

/* admin.twig */
class __TwigTemplate_6a2cd5b28615f15e0f2db4f07f113b48 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'root' => [$this, 'block_root'],
            'topcontrols' => [$this, 'block_topcontrols'],
            'notification' => [$this, 'block_notification'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        ob_start();
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreAdminHome_Administration"), "html", null, true);
        $context["categoryTitle"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 5
        $context["bodyClass"] = $this->env->getFunction('postEvent')->getCallable()("Template.bodyClass", "admin");
        // line 6
        $context["isAdminArea"] = true;
        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "admin.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "    ";
        $context["topMenuModule"] = "CoreAdminHome";
        // line 10
        echo "    ";
        $context["topMenuAction"] = "home";
        // line 11
        echo "    ";
        echo $this->env->getFunction('postEvent')->getCallable()("Template.header", "admin");
        echo "
    ";
        // line 12
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    ";
        // line 13
        echo $this->env->getFunction('postEvent')->getCallable()("Template.footer", "admin");
        echo "
";
    }

    // line 17
    public function block_root($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "    ";
        $this->loadTemplate("@CoreHome/_topScreen.twig", "admin.twig", 18)->display($context);
        // line 19
        echo "
    <div class=\"top_controls\">
        <div piwik-quick-access ng-cloak class=\"piwikTopControl borderedControl\"></div>

        ";
        // line 23
        $this->displayBlock('topcontrols', $context, $blocks);
        // line 25
        echo "
        ";
        // line 26
        $this->loadTemplate("@CoreHome/_headerMessage.twig", "admin.twig", 26)->display($context);
        // line 27
        echo "    </div>

    ";
        // line 29
        $macros["ajax"] = $this->loadTemplate("ajaxMacros.twig", "admin.twig", 29)->unwrap();
        // line 30
        echo "    ";
        echo twig_call_macro($macros["ajax"], "macro_requestErrorDiv", [((array_key_exists("contactEmail", $context)) ? (_twig_default_filter((isset($context["contactEmail"]) || array_key_exists("contactEmail", $context) ? $context["contactEmail"] : (function () { throw new RuntimeError('Variable "contactEmail" does not exist.', 30, $this->source); })()), "")) : ("")), (isset($context["areAdsForProfessionalServicesEnabled"]) || array_key_exists("areAdsForProfessionalServicesEnabled", $context) ? $context["areAdsForProfessionalServicesEnabled"] : (function () { throw new RuntimeError('Variable "areAdsForProfessionalServicesEnabled" does not exist.', 30, $this->source); })()), (isset($context["currentModule"]) || array_key_exists("currentModule", $context) ? $context["currentModule"] : (function () { throw new RuntimeError('Variable "currentModule" does not exist.', 30, $this->source); })()), (isset($context["showMoreFaqInfo"]) || array_key_exists("showMoreFaqInfo", $context) ? $context["showMoreFaqInfo"] : (function () { throw new RuntimeError('Variable "showMoreFaqInfo" does not exist.', 30, $this->source); })())], 30, $context, $this->getSourceContext());
        echo "
    ";
        // line 31
        echo $this->env->getFunction('postEvent')->getCallable()("Template.beforeContent", "admin", (isset($context["currentModule"]) || array_key_exists("currentModule", $context) ? $context["currentModule"] : (function () { throw new RuntimeError('Variable "currentModule" does not exist.', 31, $this->source); })()), (isset($context["currentAction"]) || array_key_exists("currentAction", $context) ? $context["currentAction"] : (function () { throw new RuntimeError('Variable "currentAction" does not exist.', 31, $this->source); })()));
        echo "

    <div class=\"page\">

        ";
        // line 35
        if (( !array_key_exists("showMenu", $context) || (isset($context["showMenu"]) || array_key_exists("showMenu", $context) ? $context["showMenu"] : (function () { throw new RuntimeError('Variable "showMenu" does not exist.', 35, $this->source); })()))) {
            // line 36
            echo "            ";
            $macros["menu"] = $this->loadTemplate("@CoreHome/_menu.twig", "admin.twig", 36)->unwrap();
            // line 37
            echo "            ";
            echo twig_call_macro($macros["menu"], "macro_menu", [(isset($context["adminMenu"]) || array_key_exists("adminMenu", $context) ? $context["adminMenu"] : (function () { throw new RuntimeError('Variable "adminMenu" does not exist.', 37, $this->source); })()), false, "Menu--admin", (isset($context["currentModule"]) || array_key_exists("currentModule", $context) ? $context["currentModule"] : (function () { throw new RuntimeError('Variable "currentModule" does not exist.', 37, $this->source); })()), (isset($context["currentAction"]) || array_key_exists("currentAction", $context) ? $context["currentAction"] : (function () { throw new RuntimeError('Variable "currentAction" does not exist.', 37, $this->source); })()), (isset($context["hasSomeAdminAccess"]) || array_key_exists("hasSomeAdminAccess", $context) ? $context["hasSomeAdminAccess"] : (function () { throw new RuntimeError('Variable "hasSomeAdminAccess" does not exist.', 37, $this->source); })())], 37, $context, $this->getSourceContext());
            echo "
        ";
        }
        // line 39
        echo "

        <div class=\"pageWrap\">
            <a name=\"main\"></a>
            ";
        // line 43
        $this->displayBlock('notification', $context, $blocks);
        // line 46
        echo "            ";
        $this->loadTemplate("@CoreHome/_warningInvalidHost.twig", "admin.twig", 46)->display($context);
        // line 47
        echo "
            <div class=\"admin\" id=\"content\" ng-cloak>

                <div class=\"ui-confirm\" id=\"alert\">
                    <h2></h2>
                    <input role=\"no\" type=\"button\" value=\"";
        // line 52
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_Ok"), "html", null, true);
        echo "\"/>
                </div>

                ";
        // line 55
        $this->displayBlock('content', $context, $blocks);
        // line 57
        echo "

            </div>
        </div>
    </div>


";
    }

    // line 23
    public function block_topcontrols($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "        ";
    }

    // line 43
    public function block_notification($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 44
        echo "                ";
        $this->loadTemplate("@CoreHome/_notifications.twig", "admin.twig", 44)->display($context);
        // line 45
        echo "            ";
    }

    // line 55
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 56
        echo "                ";
    }

    public function getTemplateName()
    {
        return "admin.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 56,  189 => 55,  185 => 45,  182 => 44,  178 => 43,  174 => 24,  170 => 23,  159 => 57,  157 => 55,  151 => 52,  144 => 47,  141 => 46,  139 => 43,  133 => 39,  127 => 37,  124 => 36,  122 => 35,  115 => 31,  110 => 30,  108 => 29,  104 => 27,  102 => 26,  99 => 25,  97 => 23,  91 => 19,  88 => 18,  84 => 17,  78 => 13,  74 => 12,  69 => 11,  66 => 10,  63 => 9,  59 => 8,  54 => 1,  52 => 6,  50 => 5,  46 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.twig' %}

{% set categoryTitle %}{{ 'CoreAdminHome_Administration'|translate }}{% endset %}

{% set bodyClass = postEvent('Template.bodyClass', 'admin') %}
{% set isAdminArea = true %}

{% block body %}
    {% set topMenuModule = 'CoreAdminHome' %}
    {% set topMenuAction = 'home' %}
    {{ postEvent(\"Template.header\", \"admin\") }}
    {{ parent() }}
    {{ postEvent(\"Template.footer\", \"admin\") }}
{% endblock %}


{% block root %}
    {% include \"@CoreHome/_topScreen.twig\" %}

    <div class=\"top_controls\">
        <div piwik-quick-access ng-cloak class=\"piwikTopControl borderedControl\"></div>

        {% block topcontrols %}
        {% endblock %}

        {% include \"@CoreHome/_headerMessage.twig\" %}
    </div>

    {% import 'ajaxMacros.twig' as ajax %}
    {{ ajax.requestErrorDiv(contactEmail|default(''), areAdsForProfessionalServicesEnabled, currentModule, showMoreFaqInfo) }}
    {{ postEvent(\"Template.beforeContent\", \"admin\", currentModule, currentAction) }}

    <div class=\"page\">

        {% if showMenu is not defined or showMenu %}
            {% import '@CoreHome/_menu.twig' as menu %}
            {{ menu.menu(adminMenu, false, 'Menu--admin', currentModule, currentAction, hasSomeAdminAccess) }}
        {% endif %}


        <div class=\"pageWrap\">
            <a name=\"main\"></a>
            {% block notification %}
                {% include \"@CoreHome/_notifications.twig\" %}
            {% endblock %}
            {% include \"@CoreHome/_warningInvalidHost.twig\" %}

            <div class=\"admin\" id=\"content\" ng-cloak>

                <div class=\"ui-confirm\" id=\"alert\">
                    <h2></h2>
                    <input role=\"no\" type=\"button\" value=\"{{ 'General_Ok'|translate }}\"/>
                </div>

                {% block content %}
                {% endblock %}


            </div>
        </div>
    </div>


{% endblock %}
", "admin.twig", "/var/www/cse135.monster/public_html/matomo/plugins/Morpheus/templates/admin.twig");
    }
}
