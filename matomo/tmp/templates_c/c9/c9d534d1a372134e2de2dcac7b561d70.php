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

/* @CoreHome/getSystemSummary.twig */
class __TwigTemplate_807f62091fc824412b966171210f18d7 extends Template
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
        echo "<div class=\"widgetBody systemSummary\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 2, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 3
            echo "        ";
            if ( !twig_test_empty($context["item"])) {
                // line 4
                echo "            <div class=\"systemSummaryItem ";
                if (twig_get_attribute($this->env, $this->source, $context["item"], "getKey", [], "any", false, false, false, 4)) {
                    echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getKey", [], "any", false, false, false, 4), "html", null, true);
                }
                echo "\">
                ";
                // line 5
                if (twig_get_attribute($this->env, $this->source, $context["item"], "getIcon", [], "any", false, false, false, 5)) {
                    echo "<span class=\"icon ";
                    echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getIcon", [], "any", false, false, false, 5), "html", null, true);
                    echo "\"></span>";
                }
                // line 6
                echo "
                ";
                // line 7
                if (twig_get_attribute($this->env, $this->source, $context["item"], "getUrlParams", [], "any", false, false, false, 7)) {
                    // line 8
                    echo "<a href=\"";
                    echo \Piwik\piwik_escape_filter($this->env, $this->env->getFunction('linkTo')->getCallable()(twig_get_attribute($this->env, $this->source, $context["item"], "getUrlParams", [], "any", false, false, false, 8)), "html", null, true);
                    echo "\" class=\"itemLabel\">
                ";
                } else {
                    // line 10
                    echo "<span class=\"itemLabel\">
                ";
                }
                // line 13
                echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getLabel", [], "any", false, false, false, 13), "html", null, true);
                if (twig_get_attribute($this->env, $this->source, $context["item"], "getValue", [], "any", false, false, false, 13)) {
                    echo ":";
                }
                // line 15
                if (twig_get_attribute($this->env, $this->source, $context["item"], "getUrlParams", [], "any", false, false, false, 15)) {
                    // line 16
                    echo "                    </a>";
                } else {
                    // line 18
                    echo "                    </span>";
                }
                // line 20
                echo "
                ";
                // line 21
                if (twig_get_attribute($this->env, $this->source, $context["item"], "getValue", [], "any", false, false, false, 21)) {
                    echo "<span class=\"itemValue\">";
                    echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getValue", [], "any", false, false, false, 21), "html", null, true);
                    echo "</span>";
                }
                // line 22
                echo "            </div>
        ";
            }
            // line 24
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    <br />
</div>";
    }

    public function getTemplateName()
    {
        return "@CoreHome/getSystemSummary.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 25,  101 => 24,  97 => 22,  91 => 21,  88 => 20,  85 => 18,  82 => 16,  80 => 15,  75 => 13,  71 => 10,  65 => 8,  63 => 7,  60 => 6,  54 => 5,  47 => 4,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"widgetBody systemSummary\">
    {% for item in items %}
        {% if item is not empty %}
            <div class=\"systemSummaryItem {% if item.getKey %}{{ item.getKey }}{% endif %}\">
                {% if item.getIcon %}<span class=\"icon {{ item.getIcon }}\"></span>{% endif %}

                {% if item.getUrlParams -%}
                    <a href=\"{{ linkTo(item.getUrlParams) }}\" class=\"itemLabel\">
                {% else -%}
                    <span class=\"itemLabel\">
                {% endif -%}

                {{ item.getLabel }}{% if item.getValue %}:{% endif %}

                {%- if item.getUrlParams %}
                    </a>
                {%- else %}
                    </span>
                {%- endif %}

                {% if item.getValue %}<span class=\"itemValue\">{{ item.getValue }}</span>{% endif %}
            </div>
        {% endif %}
    {% endfor %}
    <br />
</div>", "@CoreHome/getSystemSummary.twig", "/var/www/cse135.monster/public_html/matomo/plugins/CoreHome/templates/getSystemSummary.twig");
    }
}
