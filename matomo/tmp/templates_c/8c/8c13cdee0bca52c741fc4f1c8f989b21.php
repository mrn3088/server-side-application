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

/* @CoreHome/_logo.twig */
class __TwigTemplate_b840d2eb3a25c515637b7c26d678c861 extends Template
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
        echo "<span id=\"logo\" class=\"logo brand-logo ";
        if ((array_key_exists("centeredLogo", $context) && (isset($context["centeredLogo"]) || array_key_exists("centeredLogo", $context) ? $context["centeredLogo"] : (function () { throw new RuntimeError('Variable "centeredLogo" does not exist.', 1, $this->source); })()))) {
            echo "center";
        }
        echo "\">
    ";
        // line 2
        if (( !array_key_exists("logoLink", $context) ||  !twig_test_empty((isset($context["logoLink"]) || array_key_exists("logoLink", $context) ? $context["logoLink"] : (function () { throw new RuntimeError('Variable "logoLink" does not exist.', 2, $this->source); })())))) {
            // line 3
            echo "    <a href=\"";
            echo \Piwik\piwik_escape_filter($this->env, ((array_key_exists("logoLink", $context)) ? (_twig_default_filter((isset($context["logoLink"]) || array_key_exists("logoLink", $context) ? $context["logoLink"] : (function () { throw new RuntimeError('Variable "logoLink" does not exist.', 3, $this->source); })()), "index.php")) : ("index.php")), "html", null, true);
            echo "\" tabindex=\"-1\"
       title=\"";
            // line 4
            if ((isset($context["isCustomLogo"]) || array_key_exists("isCustomLogo", $context) ? $context["isCustomLogo"] : (function () { throw new RuntimeError('Variable "isCustomLogo" does not exist.', 4, $this->source); })())) {
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_PoweredBy"), "html", null, true);
                echo " ";
            }
            echo "Matomo";
            if ( !(isset($context["isCustomLogo"]) || array_key_exists("isCustomLogo", $context) ? $context["isCustomLogo"] : (function () { throw new RuntimeError('Variable "isCustomLogo" does not exist.', 4, $this->source); })())) {
                echo " # ";
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_OpenSourceWebAnalytics"), "html", null, true);
            }
            echo "\"
    >
    ";
        }
        // line 7
        echo "    ";
        if ((isset($context["hasSVGLogo"]) || array_key_exists("hasSVGLogo", $context) ? $context["hasSVGLogo"] : (function () { throw new RuntimeError('Variable "hasSVGLogo" does not exist.', 7, $this->source); })())) {
            // line 8
            echo "        <img src='";
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["logoSVG"]) || array_key_exists("logoSVG", $context) ? $context["logoSVG"] : (function () { throw new RuntimeError('Variable "logoSVG" does not exist.', 8, $this->source); })()), "html", null, true);
            echo "?matomo' tabindex=\"3\"
             alt=\"";
            // line 9
            if ((isset($context["isCustomLogo"]) || array_key_exists("isCustomLogo", $context) ? $context["isCustomLogo"] : (function () { throw new RuntimeError('Variable "isCustomLogo" does not exist.', 9, $this->source); })())) {
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_PoweredBy"), "html", null, true);
                echo " ";
            }
            echo "Matomo\"
             class=\"";
            // line 10
            if ( !(isset($context["isCustomLogo"]) || array_key_exists("isCustomLogo", $context) ? $context["isCustomLogo"] : (function () { throw new RuntimeError('Variable "isCustomLogo" does not exist.', 10, $this->source); })())) {
                echo "default-piwik-logo";
            }
            echo "\" />
    ";
        } else {
            // line 12
            echo "        <img src='";
            if (((array_key_exists("useLargeLogo", $context)) ? (_twig_default_filter((isset($context["useLargeLogo"]) || array_key_exists("useLargeLogo", $context) ? $context["useLargeLogo"] : (function () { throw new RuntimeError('Variable "useLargeLogo" does not exist.', 12, $this->source); })()), false)) : (false))) {
                echo \Piwik\piwik_escape_filter($this->env, (isset($context["logoLarge"]) || array_key_exists("logoLarge", $context) ? $context["logoLarge"] : (function () { throw new RuntimeError('Variable "logoLarge" does not exist.', 12, $this->source); })()), "html", null, true);
            } else {
                echo \Piwik\piwik_escape_filter($this->env, (isset($context["logoHeader"]) || array_key_exists("logoHeader", $context) ? $context["logoHeader"] : (function () { throw new RuntimeError('Variable "logoHeader" does not exist.', 12, $this->source); })()), "html", null, true);
            }
            echo "?matomo' alt=\"";
            if ((isset($context["isCustomLogo"]) || array_key_exists("isCustomLogo", $context) ? $context["isCustomLogo"] : (function () { throw new RuntimeError('Variable "isCustomLogo" does not exist.', 12, $this->source); })())) {
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_PoweredBy"), "html", null, true);
                echo " ";
            }
            echo "Matomo\" />
    ";
        }
        // line 14
        echo "        ";
        if (( !array_key_exists("logoLink", $context) ||  !twig_test_empty((isset($context["logoLink"]) || array_key_exists("logoLink", $context) ? $context["logoLink"] : (function () { throw new RuntimeError('Variable "logoLink" does not exist.', 14, $this->source); })())))) {
            // line 15
            echo "    </a>
    ";
        }
        // line 17
        echo "</span>
";
    }

    public function getTemplateName()
    {
        return "@CoreHome/_logo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 17,  105 => 15,  102 => 14,  87 => 12,  80 => 10,  73 => 9,  68 => 8,  65 => 7,  51 => 4,  46 => 3,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<span id=\"logo\" class=\"logo brand-logo {% if centeredLogo is defined and centeredLogo %}center{% endif %}\">
    {% if logoLink is not defined or logoLink is not empty %}
    <a href=\"{{ logoLink|default('index.php') }}\" tabindex=\"-1\"
       title=\"{% if isCustomLogo %}{{ 'General_PoweredBy'|translate }} {% endif %}Matomo{% if not isCustomLogo %} # {{ 'General_OpenSourceWebAnalytics'|translate }}{% endif %}\"
    >
    {% endif %}
    {% if hasSVGLogo %}
        <img src='{{ logoSVG }}?matomo' tabindex=\"3\"
             alt=\"{% if isCustomLogo %}{{ 'General_PoweredBy'|translate }} {% endif %}Matomo\"
             class=\"{% if not isCustomLogo %}default-piwik-logo{% endif %}\" />
    {% else %}
        <img src='{% if useLargeLogo|default(false) %}{{ logoLarge }}{% else %}{{ logoHeader }}{% endif %}?matomo' alt=\"{% if isCustomLogo %}{{ 'General_PoweredBy'|translate }} {% endif %}Matomo\" />
    {% endif %}
        {% if logoLink is not defined or logoLink is not empty %}
    </a>
    {% endif %}
</span>
", "@CoreHome/_logo.twig", "/var/www/cse135.monster/public_html/matomo/plugins/CoreHome/templates/_logo.twig");
    }
}
