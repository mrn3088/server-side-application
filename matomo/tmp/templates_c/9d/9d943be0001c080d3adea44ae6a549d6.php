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

/* macros.twig */
class __TwigTemplate_8eb1439db318fff06d8f9ac56b1d2b91 extends Template
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
        // line 18
        echo "
";
    }

    // line 1
    public function macro_logoHtml($__metadata__ = null, $__alt__ = "", ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "metadata" => $__metadata__,
            "alt" => $__alt__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 2
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, ($context["metadata"] ?? null), "logo", [], "array", true, true, false, 2)) {
                // line 3
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, ($context["metadata"] ?? null), "logoWidth", [], "array", true, true, false, 3)) {
                    // line 4
                    echo "            ";
                    ob_start();
                    echo "width=\"";
                    echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new RuntimeError('Variable "metadata" does not exist.', 4, $this->source); })()), "logoWidth", [], "array", false, false, false, 4), "html", null, true);
                    echo "\"";
                    $context["width"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 5
                    echo "        ";
                }
                // line 6
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, ($context["metadata"] ?? null), "logoHeight", [], "array", true, true, false, 6)) {
                    // line 7
                    echo "            ";
                    ob_start();
                    echo "height=\"";
                    echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new RuntimeError('Variable "metadata" does not exist.', 7, $this->source); })()), "logoHeight", [], "array", false, false, false, 7), "html", null, true);
                    echo "\"";
                    $context["height"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 8
                    echo "        ";
                }
                // line 9
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, ($context["metadata"] ?? null), "logoWidth", [], "array", true, true, false, 9)) {
                    // line 10
                    echo "            ";
                    ob_start();
                    echo "width=\"";
                    echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new RuntimeError('Variable "metadata" does not exist.', 10, $this->source); })()), "logoWidth", [], "array", false, false, false, 10), "html", null, true);
                    echo "\"";
                    $context["width"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 11
                    echo "        ";
                }
                // line 12
                echo "        ";
                if ( !twig_test_empty((isset($context["alt"]) || array_key_exists("alt", $context) ? $context["alt"] : (function () { throw new RuntimeError('Variable "alt" does not exist.', 12, $this->source); })()))) {
                    // line 13
                    echo "            ";
                    ob_start();
                    echo "title='";
                    echo \Piwik\piwik_escape_filter($this->env, (isset($context["alt"]) || array_key_exists("alt", $context) ? $context["alt"] : (function () { throw new RuntimeError('Variable "alt" does not exist.', 13, $this->source); })()), "html", null, true);
                    echo "' alt='";
                    echo \Piwik\piwik_escape_filter($this->env, (isset($context["alt"]) || array_key_exists("alt", $context) ? $context["alt"] : (function () { throw new RuntimeError('Variable "alt" does not exist.', 13, $this->source); })()), "html", null, true);
                    echo "'";
                    $context["alt"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 14
                    echo "        ";
                }
                // line 15
                echo "        <img ";
                echo \Piwik\piwik_escape_filter($this->env, (isset($context["alt"]) || array_key_exists("alt", $context) ? $context["alt"] : (function () { throw new RuntimeError('Variable "alt" does not exist.', 15, $this->source); })()), "html", null, true);
                echo " ";
                echo \Piwik\piwik_escape_filter($this->env, ((array_key_exists("width", $context)) ? (_twig_default_filter((isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 15, $this->source); })()), "")) : ("")), "html", null, true);
                echo " ";
                echo \Piwik\piwik_escape_filter($this->env, ((array_key_exists("height", $context)) ? (_twig_default_filter((isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 15, $this->source); })()), "")) : ("")), "html", null, true);
                echo " src='";
                echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new RuntimeError('Variable "metadata" does not exist.', 15, $this->source); })()), "logo", [], "array", false, false, false, 15), "html", null, true);
                echo "' />
    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 20
    public function macro_inlineHelp($__text__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "text" => $__text__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 21
            echo "    <div class=\"ui-inline-help\" >
        ";
            // line 22
            echo (isset($context["text"]) || array_key_exists("text", $context) ? $context["text"] : (function () { throw new RuntimeError('Variable "text" does not exist.', 22, $this->source); })());
            echo "
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "macros.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 22,  145 => 21,  132 => 20,  113 => 15,  110 => 14,  101 => 13,  98 => 12,  95 => 11,  88 => 10,  85 => 9,  82 => 8,  75 => 7,  72 => 6,  69 => 5,  62 => 4,  59 => 3,  56 => 2,  42 => 1,  37 => 18,);
    }

    public function getSourceContext()
    {
        return new Source("{% macro logoHtml(metadata, alt='') %}
    {% if metadata['logo'] is defined %}
        {% if metadata['logoWidth'] is defined %}
            {% set width %}width=\"{{ metadata['logoWidth'] }}\"{% endset %}
        {% endif %}
        {% if metadata['logoHeight'] is defined %}
            {% set height %}height=\"{{ metadata['logoHeight'] }}\"{% endset %}
        {% endif %}
        {% if metadata['logoWidth'] is defined %}
            {% set width %}width=\"{{ metadata['logoWidth'] }}\"{% endset %}
        {% endif %}
        {% if alt is not empty %}
            {% set alt %}title='{{ alt }}' alt='{{ alt }}'{% endset %}
        {% endif %}
        <img {{ alt }} {{ width|default('') }} {{ height|default('') }} src='{{ metadata['logo'] }}' />
    {% endif %}
{% endmacro %}

{# Deprecated: use form-group and form-help DIVs instead #}
{% macro inlineHelp(text) %}
    <div class=\"ui-inline-help\" >
        {{ text|raw }}
    </div>
{% endmacro %}", "macros.twig", "/var/www/cse135.monster/public_html/matomo/plugins/Morpheus/templates/macros.twig");
    }
}
