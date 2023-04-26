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

/* @CustomDimensions/_visitorDetails.twig */
class __TwigTemplate_ad90e8a70a5aa42f48f2807edcd2f540 extends Template
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
        if ((isset($context["customDimensions"]) || array_key_exists("customDimensions", $context) ? $context["customDimensions"] : (function () { throw new RuntimeError('Variable "customDimensions" does not exist.', 1, $this->source); })())) {
            // line 2
            echo "    <div class=\"visitorCustomDimensions\">
    ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, (isset($context["customDimensions"]) || array_key_exists("customDimensions", $context) ? $context["customDimensions"] : (function () { throw new RuntimeError('Variable "customDimensions" does not exist.', 3, $this->source); })()), function ($__customDimension__) use ($context, $macros) { $context["customDimension"] = $__customDimension__; return (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customDimension"], "value", [], "any", false, false, false, 3)) > 0); }));
            foreach ($context['_seq'] as $context["_key"] => $context["customDimension"]) {
                // line 4
                echo "        <br/>
        <abbr class=\"visitorLogTooltip\" title=\"";
                // line 5
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CustomDimensions_CustomDimensionId", twig_get_attribute($this->env, $this->source, $context["customDimension"], "id", [], "any", false, false, false, 5)), "html", null, true);
                echo "\">";
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('truncate')->getCallable()(twig_get_attribute($this->env, $this->source, $context["customDimension"], "name", [], "any", false, false, false, 5), 30), "html", null, true);
                echo ":</abbr>
        ";
                // line 6
                echo $this->env->getFilter('rawSafeDecoded')->getCallable()($this->env->getFilter('truncate')->getCallable()(twig_get_attribute($this->env, $this->source, $context["customDimension"], "value", [], "any", false, false, false, 6), 50));
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customDimension'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "@CustomDimensions/_visitorDetails.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 8,  55 => 6,  49 => 5,  46 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if customDimensions %}
    <div class=\"visitorCustomDimensions\">
    {% for customDimension in customDimensions|filter(customDimension => customDimension.value|length > 0) %}
        <br/>
        <abbr class=\"visitorLogTooltip\" title=\"{{ 'CustomDimensions_CustomDimensionId'|translate(customDimension.id) }}\">{{ customDimension.name|truncate(30) }}:</abbr>
        {{ customDimension.value|truncate(50)|rawSafeDecoded }}
    {% endfor %}
    </div>
{% endif %}", "@CustomDimensions/_visitorDetails.twig", "/var/www/cse135.monster/public_html/matomo/plugins/CustomDimensions/templates/_visitorDetails.twig");
    }
}
