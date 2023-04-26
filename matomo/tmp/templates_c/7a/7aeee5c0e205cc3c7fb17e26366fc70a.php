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

/* @CoreHome/_favicon.twig */
class __TwigTemplate_61c1a0083d14a0869f5d1176b70dce29 extends Template
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
        if ((((isset($context["isCustomLogo"]) || array_key_exists("isCustomLogo", $context) ? $context["isCustomLogo"] : (function () { throw new RuntimeError('Variable "isCustomLogo" does not exist.', 1, $this->source); })()) && array_key_exists("customFavicon", $context)) && (isset($context["customFavicon"]) || array_key_exists("customFavicon", $context) ? $context["customFavicon"] : (function () { throw new RuntimeError('Variable "customFavicon" does not exist.', 1, $this->source); })()))) {
            // line 2
            echo "    <link rel=\"shortcut icon\" href=\"";
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["customFavicon"]) || array_key_exists("customFavicon", $context) ? $context["customFavicon"] : (function () { throw new RuntimeError('Variable "customFavicon" does not exist.', 2, $this->source); })()), "html", null, true);
            echo "\"/>
";
        } else {
            // line 4
            echo "    <link rel=\"shortcut icon\" href=\"plugins/CoreHome/images/favicon.png\"/>
    <link rel=\"icon\" type='image/png' sizes='256x256' href=\"plugins/CoreHome/images/applogo_256.png\"/>
";
        }
    }

    public function getTemplateName()
    {
        return "@CoreHome/_favicon.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if isCustomLogo and customFavicon is defined and customFavicon %}
    <link rel=\"shortcut icon\" href=\"{{ customFavicon }}\"/>
{% else %}
    <link rel=\"shortcut icon\" href=\"plugins/CoreHome/images/favicon.png\"/>
    <link rel=\"icon\" type='image/png' sizes='256x256' href=\"plugins/CoreHome/images/applogo_256.png\"/>
{% endif %}", "@CoreHome/_favicon.twig", "/var/www/cse135.monster/public_html/matomo/plugins/CoreHome/templates/_favicon.twig");
    }
}
