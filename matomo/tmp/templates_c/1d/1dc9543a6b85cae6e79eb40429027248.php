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

/* @CoreHome/_dataTableHead.twig */
class __TwigTemplate_ff7fbb9d42898bc5d0355c9f95325d59 extends Template
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
        $context["dimensions"] = ((twig_get_attribute($this->env, $this->source, ($context["dataTable"] ?? null), "getMetadata", [0 => "dimensions"], "method", true, true, false, 1)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["dataTable"] ?? null), "getMetadata", [0 => "dimensions"], "method", false, false, false, 1), [])) : ([]));
        // line 2
        echo "<thead>
   <tr>
       ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 4, $this->source); })()), "columns_to_display", [], "any", false, false, false, 4));
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
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 5
            echo "           <th class=\"";
            if (twig_get_attribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 5, $this->source); })()), "enable_sort", [], "any", false, false, false, 5)) {
                echo "sortable";
            }
            echo " ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 5)) {
                echo "first";
            } elseif (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 5)) {
                echo "last";
            }
            echo " ";
            if ((($context["column"] == "label") || twig_in_filter($context["column"], (isset($context["dimensions"]) || array_key_exists("dimensions", $context) ? $context["dimensions"] : (function () { throw new RuntimeError('Variable "dimensions" does not exist.', 5, $this->source); })())))) {
                echo "label";
            }
            echo "\" id=\"";
            echo \Piwik\piwik_escape_filter($this->env, $context["column"], "html", null, true);
            echo "\">
               ";
            // line 6
            if ( !twig_test_empty(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["properties"] ?? null), "metrics_documentation", [], "any", false, true, false, 6), $context["column"], [], "array", true, true, false, 6)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["properties"] ?? null), "metrics_documentation", [], "any", false, true, false, 6), $context["column"], [], "array", false, false, false, 6))) : ("")))) {
                // line 7
                echo "                   <div class=\"columnDocumentation\">
                       <div class=\"columnDocumentationTitle\">
                           <span class=\"icon-help\"></span>
                           ";
                // line 10
                echo $this->env->getFilter('rawSafeDecoded')->getCallable()(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["properties"] ?? null), "translations", [], "any", false, true, false, 10), $context["column"], [], "array", true, true, false, 10)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["properties"] ?? null), "translations", [], "any", false, true, false, 10), $context["column"], [], "array", false, false, false, 10), $context["column"])) : ($context["column"])));
                echo "
                       </div>
                       ";
                // line 12
                echo $this->env->getFilter('rawSafeDecoded')->getCallable()(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 12, $this->source); })()), "metrics_documentation", [], "any", false, false, false, 12), $context["column"], [], "array", false, false, false, 12));
                echo "
                   </div>
               ";
            }
            // line 15
            echo "               <div id=\"thDIV\" class=\"thDIV\">";
            echo $this->env->getFilter('rawSafeDecoded')->getCallable()(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["properties"] ?? null), "translations", [], "any", false, true, false, 15), $context["column"], [], "array", true, true, false, 15)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["properties"] ?? null), "translations", [], "any", false, true, false, 15), $context["column"], [], "array", false, false, false, 15), $context["column"])) : ($context["column"])));
            echo "</div>
           </th>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "   </tr>
</thead>
";
    }

    public function getTemplateName()
    {
        return "@CoreHome/_dataTableHead.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 18,  97 => 15,  91 => 12,  86 => 10,  81 => 7,  79 => 6,  60 => 5,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set dimensions = dataTable.getMetadata('dimensions')|default([]) %}
<thead>
   <tr>
       {% for column in properties.columns_to_display %}
           <th class=\"{% if properties.enable_sort %}sortable{% endif %} {% if loop.first %}first{% elseif loop.last %}last{% endif %} {% if column == 'label' or column in dimensions %}label{% endif %}\" id=\"{{ column }}\">
               {% if properties.metrics_documentation[column]|default is not empty %}
                   <div class=\"columnDocumentation\">
                       <div class=\"columnDocumentationTitle\">
                           <span class=\"icon-help\"></span>
                           {{ properties.translations[column]|default(column)|rawSafeDecoded }}
                       </div>
                       {{ properties.metrics_documentation[column]|rawSafeDecoded|raw }}
                   </div>
               {% endif %}
               <div id=\"thDIV\" class=\"thDIV\">{{ properties.translations[column]|default(column)|rawSafeDecoded }}</div>
           </th>
       {% endfor %}
   </tr>
</thead>
", "@CoreHome/_dataTableHead.twig", "/var/www/cse135.monster/public_html/matomo/plugins/CoreHome/templates/_dataTableHead.twig");
    }
}
