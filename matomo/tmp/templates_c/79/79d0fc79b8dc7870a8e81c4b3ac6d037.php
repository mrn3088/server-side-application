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

/* genericForm.twig */
class __TwigTemplate_9e0431a6f5b644a46a6caac0caca17d2 extends Template
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
        if (twig_get_attribute($this->env, $this->source, (isset($context["form_data"]) || array_key_exists("form_data", $context) ? $context["form_data"] : (function () { throw new RuntimeError('Variable "form_data" does not exist.', 1, $this->source); })()), "errors", [], "any", false, false, false, 1)) {
            // line 2
            echo "\t<div class=\"alert alert-warning\">
\t\t<strong>";
            // line 3
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Installation_PleaseFixTheFollowingErrors"), "html", null, true);
            echo ":</strong>
\t\t<ul>
            ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form_data"]) || array_key_exists("form_data", $context) ? $context["form_data"] : (function () { throw new RuntimeError('Variable "form_data" does not exist.', 5, $this->source); })()), "errors", [], "any", false, false, false, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                // line 6
                echo "\t\t\t\t<li>";
                echo $context["data"];
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "\t\t</ul>
\t</div>
";
        }
        // line 11
        echo "
<form ";
        // line 12
        echo twig_get_attribute($this->env, $this->source, (isset($context["form_data"]) || array_key_exists("form_data", $context) ? $context["form_data"] : (function () { throw new RuntimeError('Variable "form_data" does not exist.', 12, $this->source); })()), "attributes", [], "any", false, false, false, 12);
        echo ">
    ";
        // line 14
        echo "    ";
        echo twig_join_filter(twig_get_attribute($this->env, $this->source, (isset($context["form_data"]) || array_key_exists("form_data", $context) ? $context["form_data"] : (function () { throw new RuntimeError('Variable "form_data" does not exist.', 14, $this->source); })()), "hidden", [], "any", false, false, false, 14));
        echo "

    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["element_list"]) || array_key_exists("element_list", $context) ? $context["element_list"] : (function () { throw new RuntimeError('Variable "element_list" does not exist.', 16, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["fieldname"]) {
            // line 17
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["form_data"] ?? null), $context["fieldname"], [], "array", true, true, false, 17)) {
                // line 18
                echo "            <div class=\"row form-group\">
                <div class=\"col s12 m12 l6\">
                    ";
                // line 20
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form_data"]) || array_key_exists("form_data", $context) ? $context["form_data"] : (function () { throw new RuntimeError('Variable "form_data" does not exist.', 20, $this->source); })()), $context["fieldname"], [], "array", false, false, false, 20), "type", [], "any", false, false, false, 20) == "checkbox")) {
                    // line 21
                    echo "                        <label class=\"checkbox\">
                            ";
                    // line 22
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form_data"]) || array_key_exists("form_data", $context) ? $context["form_data"] : (function () { throw new RuntimeError('Variable "form_data" does not exist.', 22, $this->source); })()), $context["fieldname"], [], "array", false, false, false, 22), "html", [], "any", false, false, false, 22);
                    echo "
                        </label>
                    ";
                } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 24
(isset($context["form_data"]) || array_key_exists("form_data", $context) ? $context["form_data"] : (function () { throw new RuntimeError('Variable "form_data" does not exist.', 24, $this->source); })()), $context["fieldname"], [], "array", false, false, false, 24), "label", [], "any", false, false, false, 24)) {
                    // line 25
                    echo "                        <label>
                            ";
                    // line 26
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form_data"]) || array_key_exists("form_data", $context) ? $context["form_data"] : (function () { throw new RuntimeError('Variable "form_data" does not exist.', 26, $this->source); })()), $context["fieldname"], [], "array", false, false, false, 26), "label", [], "any", false, false, false, 26);
                    echo "
                        </label>
                        ";
                    // line 28
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form_data"]) || array_key_exists("form_data", $context) ? $context["form_data"] : (function () { throw new RuntimeError('Variable "form_data" does not exist.', 28, $this->source); })()), $context["fieldname"], [], "array", false, false, false, 28), "html", [], "any", false, false, false, 28);
                    echo "
                    ";
                } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 29
(isset($context["form_data"]) || array_key_exists("form_data", $context) ? $context["form_data"] : (function () { throw new RuntimeError('Variable "form_data" does not exist.', 29, $this->source); })()), $context["fieldname"], [], "array", false, false, false, 29), "type", [], "any", false, false, false, 29) == "hidden")) {
                    // line 30
                    echo "                        ";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form_data"]) || array_key_exists("form_data", $context) ? $context["form_data"] : (function () { throw new RuntimeError('Variable "form_data" does not exist.', 30, $this->source); })()), $context["fieldname"], [], "array", false, false, false, 30), "html", [], "any", false, false, false, 30);
                    echo "
                    ";
                }
                // line 32
                echo "                </div>
            </div>
        ";
            }
            // line 35
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fieldname'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "
    ";
        // line 37
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form_data"]) || array_key_exists("form_data", $context) ? $context["form_data"] : (function () { throw new RuntimeError('Variable "form_data" does not exist.', 37, $this->source); })()), "submit", [], "any", false, false, false, 37), "html", [], "any", false, false, false, 37)) {
            // line 38
            echo "        <div class=\"row\">
            <div class=\"col s12\">
                ";
            // line 40
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form_data"]) || array_key_exists("form_data", $context) ? $context["form_data"] : (function () { throw new RuntimeError('Variable "form_data" does not exist.', 40, $this->source); })()), "submit", [], "any", false, false, false, 40), "html", [], "any", false, false, false, 40);
            echo "
            </div>
        </div>
    ";
        }
        // line 44
        echo "</form>
";
    }

    public function getTemplateName()
    {
        return "genericForm.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 44,  141 => 40,  137 => 38,  135 => 37,  132 => 36,  126 => 35,  121 => 32,  115 => 30,  113 => 29,  109 => 28,  104 => 26,  101 => 25,  99 => 24,  94 => 22,  91 => 21,  89 => 20,  85 => 18,  82 => 17,  78 => 16,  72 => 14,  68 => 12,  65 => 11,  60 => 8,  51 => 6,  47 => 5,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if form_data.errors %}
\t<div class=\"alert alert-warning\">
\t\t<strong>{{ 'Installation_PleaseFixTheFollowingErrors'|translate }}:</strong>
\t\t<ul>
            {% for data in form_data.errors %}
\t\t\t\t<li>{{ data|raw }}</li>
            {% endfor %}
\t\t</ul>
\t</div>
{% endif %}

<form {{ form_data.attributes|raw }}>
    {# display any hidden input field #}
    {{ form_data.hidden|join|raw }}

    {% for fieldname in element_list %}
        {% if form_data[fieldname] is defined %}
            <div class=\"row form-group\">
                <div class=\"col s12 m12 l6\">
                    {% if form_data[fieldname].type == 'checkbox' %}
                        <label class=\"checkbox\">
                            {{ form_data[fieldname].html|raw }}
                        </label>
                    {% elseif form_data[fieldname].label %}
                        <label>
                            {{ form_data[fieldname].label|raw }}
                        </label>
                        {{ form_data[fieldname].html|raw }}
                    {% elseif form_data[fieldname].type == 'hidden' %}
                        {{ form_data[fieldname].html|raw }}
                    {% endif %}
                </div>
            </div>
        {% endif %}
    {% endfor %}

    {% if form_data.submit.html %}
        <div class=\"row\">
            <div class=\"col s12\">
                {{ form_data.submit.html|raw }}
            </div>
        </div>
    {% endif %}
</form>
", "genericForm.twig", "/var/www/cse135.monster/public_html/matomo/plugins/Morpheus/templates/genericForm.twig");
    }
}
