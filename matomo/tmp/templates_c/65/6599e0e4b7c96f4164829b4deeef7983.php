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

/* @CoreHome\_uiControl.twig */
class __TwigTemplate_5db01f1a02e0a7a1687f87dd1ed8a2ed extends Template
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
        echo "<div class=\"";
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["cssIdentifier"]) || array_key_exists("cssIdentifier", $context) ? $context["cssIdentifier"] : (function () { throw new RuntimeError('Variable "cssIdentifier" does not exist.', 1, $this->source); })()), "html", null, true);
        echo " ";
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["cssClass"]) || array_key_exists("cssClass", $context) ? $context["cssClass"] : (function () { throw new RuntimeError('Variable "cssClass" does not exist.', 1, $this->source); })()), "html", null, true);
        echo "\"
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["htmlAttributes"]) || array_key_exists("htmlAttributes", $context) ? $context["htmlAttributes"] : (function () { throw new RuntimeError('Variable "htmlAttributes" does not exist.', 2, $this->source); })()));
        foreach ($context['_seq'] as $context["name"] => $context["value"]) {
            // line 3
            echo "         ";
            echo \Piwik\piwik_escape_filter($this->env, $context["name"], "html", null, true);
            echo "=\"";
            echo \Piwik\piwik_escape_filter($this->env, $context["value"], "html_attr");
            echo "\"
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 5
        echo "    data-props=\"";
        echo \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["clientSideProperties"]) || array_key_exists("clientSideProperties", $context) ? $context["clientSideProperties"] : (function () { throw new RuntimeError('Variable "clientSideProperties" does not exist.', 5, $this->source); })())), "html", null, true);
        echo "\"
    data-params=\"";
        // line 6
        echo \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["clientSideParameters"]) || array_key_exists("clientSideParameters", $context) ? $context["clientSideParameters"] : (function () { throw new RuntimeError('Variable "clientSideParameters" does not exist.', 6, $this->source); })())), "html", null, true);
        echo "\">
";
        // line 7
        $this->loadTemplate($context["implView"]->getTemplateFile(), "@CoreHome\\_uiControl.twig", 7)->display(twig_array_merge($context, $context["implView"]->getTemplateVars((isset($context["implOverride"]) || array_key_exists("implOverride", $context) ? $context["implOverride"] : (function () { throw new RuntimeError('Variable "implOverride" does not exist.', 7, $this->source); })()))));
        // line 8
        echo "</div>
<script>\$(document).ready(function () { require('";
        // line 9
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["jsNamespace"]) || array_key_exists("jsNamespace", $context) ? $context["jsNamespace"] : (function () { throw new RuntimeError('Variable "jsNamespace" does not exist.', 9, $this->source); })()), "html", null, true);
        echo "').";
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["jsClass"]) || array_key_exists("jsClass", $context) ? $context["jsClass"] : (function () { throw new RuntimeError('Variable "jsClass" does not exist.', 9, $this->source); })()), "html", null, true);
        echo ".initElements(); });</script>";
    }

    public function getTemplateName()
    {
        return "@CoreHome\\_uiControl.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 9,  70 => 8,  68 => 7,  64 => 6,  59 => 5,  48 => 3,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"{{ cssIdentifier }} {{ cssClass }}\"
    {% for name,value in htmlAttributes %}
         {{ name }}=\"{{ value|e('html_attr') }}\"
    {% endfor %}
    data-props=\"{{ clientSideProperties|json_encode }}\"
    data-params=\"{{ clientSideParameters|json_encode }}\">
{% render implView with implOverride %}
</div>
<script>\$(document).ready(function () { require('{{ jsNamespace }}').{{ jsClass }}.initElements(); });</script>", "@CoreHome\\_uiControl.twig", "/var/www/cse135.monster/public_html/matomo/plugins/CoreHome/templates/_uiControl.twig");
    }
}
