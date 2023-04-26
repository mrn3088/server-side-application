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

/* contentBlock.twig */
class __TwigTemplate_2936303974c349588b4ea2bb8fe473e8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'helpText' => [$this, 'block_helpText'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"card\">
    <div class=\"card-content\">
        ";
        // line 3
        if ((array_key_exists("title", $context) && (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 3, $this->source); })()))) {
            // line 4
            echo "            <h2 class=\"card-title\"
                  ";
            // line 5
            if (((array_key_exists("rate", $context) && (isset($context["rate"]) || array_key_exists("rate", $context) ? $context["rate"] : (function () { throw new RuntimeError('Variable "rate" does not exist.', 5, $this->source); })())) && $this->env->getTest('true')->getCallable()((isset($context["rate"]) || array_key_exists("rate", $context) ? $context["rate"] : (function () { throw new RuntimeError('Variable "rate" does not exist.', 5, $this->source); })())))) {
                echo "piwik-enriched-headline=\"";
                echo \Piwik\piwik_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 5, $this->source); })()), "html_attr");
                echo "\"
                  ";
            } elseif (((            // line 6
array_key_exists("rate", $context) && (isset($context["rate"]) || array_key_exists("rate", $context) ? $context["rate"] : (function () { throw new RuntimeError('Variable "rate" does not exist.', 6, $this->source); })())) && (isset($context["rate"]) || array_key_exists("rate", $context) ? $context["rate"] : (function () { throw new RuntimeError('Variable "rate" does not exist.', 6, $this->source); })()))) {
                echo "piwik-enriched-headline=\"";
                echo \Piwik\piwik_escape_filter($this->env, (isset($context["rate"]) || array_key_exists("rate", $context) ? $context["rate"] : (function () { throw new RuntimeError('Variable "rate" does not exist.', 6, $this->source); })()), "html_attr");
                echo "\"";
            }
            // line 7
            echo "            >";
            $this->displayBlock('helpText', $context, $blocks);
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 7, $this->source); })()), "html", null, true);
            echo "</h2>
        ";
        }
        // line 9
        echo "
        ";
        // line 10
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
</div>";
    }

    // line 7
    public function block_helpText($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 10
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "        ";
    }

    public function getTemplateName()
    {
        return "contentBlock.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 11,  83 => 10,  77 => 7,  72 => 12,  70 => 10,  67 => 9,  60 => 7,  54 => 6,  48 => 5,  45 => 4,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"card\">
    <div class=\"card-content\">
        {% if title is defined and title %}
            <h2 class=\"card-title\"
                  {% if rate is defined and rate and rate is true %}piwik-enriched-headline=\"{{ title|e('html_attr') }}\"
                  {% elseif rate is defined and rate and rate %}piwik-enriched-headline=\"{{ rate|e('html_attr') }}\"{% endif %}
            >{% block helpText %}{% endblock %}{{ title }}</h2>
        {% endif %}

        {% block content %}
        {% endblock %}
    </div>
</div>", "contentBlock.twig", "/var/www/cse135.monster/public_html/matomo/plugins/Morpheus/templates/contentBlock.twig");
    }
}
