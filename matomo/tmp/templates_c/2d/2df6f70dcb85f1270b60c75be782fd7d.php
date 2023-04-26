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

/* @Live/_actionsList.twig */
class __TwigTemplate_a8415986618b5d0d61fa92de496d13bb extends Template
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
        $context["previousAction"] = false;
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["actionGroups"]) || array_key_exists("actionGroups", $context) ? $context["actionGroups"] : (function () { throw new RuntimeError('Variable "actionGroups" does not exist.', 2, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["actionGroup"]) {
            // line 3
            echo "    ";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["actionGroup"], "pageviewAction", [], "any", false, false, false, 3))) {
                // line 4
                echo "    ";
                echo $this->env->getFunction('postEvent')->getCallable()("Live.renderAction", twig_get_attribute($this->env, $this->source, $context["actionGroup"], "pageviewAction", [], "any", false, false, false, 4), (isset($context["previousAction"]) || array_key_exists("previousAction", $context) ? $context["previousAction"] : (function () { throw new RuntimeError('Variable "previousAction" does not exist.', 4, $this->source); })()), (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 4, $this->source); })()));
                echo "

    ";
                // line 6
                $context["previousAction"] = twig_get_attribute($this->env, $this->source, $context["actionGroup"], "pageviewAction", [], "any", false, false, false, 6);
                // line 7
                echo "    ";
            }
            // line 8
            echo "
    ";
            // line 9
            if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["actionGroup"], "actionsOnPage", [], "any", false, false, false, 9)) ||  !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["actionGroup"], "refreshActions", [], "any", false, false, false, 9)))) {
                // line 10
                echo "    ";
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["actionGroup"], "pageviewAction", [], "any", false, false, false, 10))) {
                    // line 11
                    echo "    <li class=\"pageviewActions\" data-view-count=\"";
                    echo \Piwik\piwik_escape_filter($this->env, (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actionGroup"], "refreshActions", [], "any", false, false, false, 11)) + 1), "html", null, true);
                    echo "\" data-actions-on-page=\"";
                    echo \Piwik\piwik_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actionGroup"], "actionsOnPage", [], "any", false, false, false, 11)), "html", null, true);
                    echo "\">
        <ol class=\"actionList\">
    ";
                }
                // line 14
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["actionGroup"], "refreshActions", [], "any", false, false, false, 14));
                foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                    // line 15
                    echo "
            ";
                    // line 16
                    echo $this->env->getFunction('postEvent')->getCallable()("Live.renderAction", $context["action"], (isset($context["previousAction"]) || array_key_exists("previousAction", $context) ? $context["previousAction"] : (function () { throw new RuntimeError('Variable "previousAction" does not exist.', 16, $this->source); })()), (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 16, $this->source); })()));
                    echo "

            ";
                    // line 18
                    $context["previousAction"] = $context["action"];
                    // line 19
                    echo "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 20
                echo "        <li class=\"refresh-divider\"></li>
        ";
                // line 21
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["actionGroup"], "actionsOnPage", [], "any", false, false, false, 21));
                foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                    // line 22
                    echo "
            ";
                    // line 23
                    echo $this->env->getFunction('postEvent')->getCallable()("Live.renderAction", $context["action"], (isset($context["previousAction"]) || array_key_exists("previousAction", $context) ? $context["previousAction"] : (function () { throw new RuntimeError('Variable "previousAction" does not exist.', 23, $this->source); })()), (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 23, $this->source); })()));
                    echo "

        ";
                    // line 25
                    $context["previousAction"] = $context["action"];
                    // line 26
                    echo "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 27
                echo "    ";
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["actionGroup"], "pageviewAction", [], "any", false, false, false, 27))) {
                    // line 28
                    echo "        <li class=\"actionsForPageExpander expanded\" style=\"display:none;\">
            <span>
                <a class=\"show-more-actions\" href=\"javascript:\" style=\"display:none;\">Show <span class=\"show-actions-count\"></span> more actions that occurred on this page...</a>
                <a class=\"show-less-actions\" href=\"javascript:\">Show less actions...</a>
            </span>
        </li>
        </ol>
    </li>
    ";
                }
                // line 37
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actionGroup'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "
";
        // line 40
        if (twig_get_attribute($this->env, $this->source, ($context["visitInfo"] ?? null), "truncatedActionsCount", [], "any", true, true, false, 40)) {
            // line 41
            echo "    <li class=\"more\">
        <span class=\"icon-info\"></span>
        ";
            // line 43
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Live_MorePagesNotDisplayed"), "html", null, true);
            echo "
    </li>
";
        }
    }

    public function getTemplateName()
    {
        return "@Live/_actionsList.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 43,  144 => 41,  142 => 40,  139 => 39,  132 => 37,  121 => 28,  118 => 27,  112 => 26,  110 => 25,  105 => 23,  102 => 22,  98 => 21,  95 => 20,  89 => 19,  87 => 18,  82 => 16,  79 => 15,  74 => 14,  65 => 11,  62 => 10,  60 => 9,  57 => 8,  54 => 7,  52 => 6,  46 => 4,  43 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set previousAction = false %}
{% for actionGroup in actionGroups %}
    {% if actionGroup.pageviewAction is not empty %}
    {{ postEvent('Live.renderAction', actionGroup.pageviewAction, previousAction, visitInfo) }}

    {% set previousAction = actionGroup.pageviewAction %}
    {% endif %}

    {% if actionGroup.actionsOnPage is not empty or actionGroup.refreshActions is not empty %}
    {% if actionGroup.pageviewAction is not empty %}
    <li class=\"pageviewActions\" data-view-count=\"{{ actionGroup.refreshActions|length + 1 }}\" data-actions-on-page=\"{{ actionGroup.actionsOnPage|length }}\">
        <ol class=\"actionList\">
    {% endif %}
        {% for action in actionGroup.refreshActions %}

            {{ postEvent('Live.renderAction', action, previousAction, visitInfo) }}

            {% set previousAction = action %}
        {% endfor %}
        <li class=\"refresh-divider\"></li>
        {% for action in actionGroup.actionsOnPage %}

            {{ postEvent('Live.renderAction', action, previousAction, visitInfo) }}

        {% set previousAction = action %}
        {% endfor %}
    {% if actionGroup.pageviewAction is not empty %}
        <li class=\"actionsForPageExpander expanded\" style=\"display:none;\">
            <span>
                <a class=\"show-more-actions\" href=\"javascript:\" style=\"display:none;\">Show <span class=\"show-actions-count\"></span> more actions that occurred on this page...</a>
                <a class=\"show-less-actions\" href=\"javascript:\">Show less actions...</a>
            </span>
        </li>
        </ol>
    </li>
    {% endif %}
    {% endif %}
{% endfor %}

{% if visitInfo.truncatedActionsCount is defined %}
    <li class=\"more\">
        <span class=\"icon-info\"></span>
        {{ 'Live_MorePagesNotDisplayed'|translate }}
    </li>
{% endif %}", "@Live/_actionsList.twig", "/var/www/cse135.monster/public_html/matomo/plugins/Live/templates/_actionsList.twig");
    }
}
