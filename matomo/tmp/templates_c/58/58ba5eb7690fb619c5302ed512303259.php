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

/* @CoreHome/_warningInvalidHost.twig */
class __TwigTemplate_0d1460611514bc108abe1bb9e5111b50 extends Template
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
        // line 2
        if (((array_key_exists("isValidHost", $context) && array_key_exists("invalidHostMessage", $context)) && ((isset($context["isValidHost"]) || array_key_exists("isValidHost", $context) ? $context["isValidHost"] : (function () { throw new RuntimeError('Variable "isValidHost" does not exist.', 2, $this->source); })()) == false))) {
            // line 3
            echo "    ";
            ob_start();
            // line 4
            echo "        <a class=\"btn btn-link\" style=\"float:right;\" href=\"https://matomo.org/faq/troubleshooting/faq_171\" rel=\"noreferrer noopener\" target=\"_blank\">
            <span class=\"icon-help\"></span>
            ";
            // line 6
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_Help"), "html", null, true);
            echo "
        </a>
        <strong>";
            // line 8
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_Warning"), "html", null, true);
            echo ":&nbsp;</strong>";
            echo (isset($context["invalidHostMessage"]) || array_key_exists("invalidHostMessage", $context) ? $context["invalidHostMessage"] : (function () { throw new RuntimeError('Variable "invalidHostMessage" does not exist.', 8, $this->source); })());
            echo "

        <br>
        <br>

        ";
            // line 13
            echo (isset($context["invalidHostMessageHowToFix"]) || array_key_exists("invalidHostMessageHowToFix", $context) ? $context["invalidHostMessageHowToFix"] : (function () { throw new RuntimeError('Variable "invalidHostMessageHowToFix" does not exist.', 13, $this->source); })());
            echo "
    ";
            $context["invalidHostText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 15
            echo "
    <div style=\"clear:both;width:800px;\">
        ";
            // line 17
            echo $this->env->getFilter('notification')->getCallable()((isset($context["invalidHostText"]) || array_key_exists("invalidHostText", $context) ? $context["invalidHostText"] : (function () { throw new RuntimeError('Variable "invalidHostText" does not exist.', 17, $this->source); })()), ["noclear" => true, "raw" => true, "context" => "warning"]);
            echo "
    </div>

";
        }
        // line 21
        echo "
";
    }

    public function getTemplateName()
    {
        return "@CoreHome/_warningInvalidHost.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 21,  70 => 17,  66 => 15,  61 => 13,  51 => 8,  46 => 6,  42 => 4,  39 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# untrusted host warning #}
{% if (isValidHost is defined and invalidHostMessage is defined and isValidHost == false) %}
    {% set invalidHostText %}
        <a class=\"btn btn-link\" style=\"float:right;\" href=\"https://matomo.org/faq/troubleshooting/faq_171\" rel=\"noreferrer noopener\" target=\"_blank\">
            <span class=\"icon-help\"></span>
            {{ 'General_Help'|translate }}
        </a>
        <strong>{{ 'General_Warning'|translate }}:&nbsp;</strong>{{ invalidHostMessage|raw }}

        <br>
        <br>

        {{ invalidHostMessageHowToFix|raw }}
    {% endset %}

    <div style=\"clear:both;width:800px;\">
        {{ invalidHostText|notification({'noclear': true, 'raw': true, 'context': 'warning'}) }}
    </div>

{% endif %}

", "@CoreHome/_warningInvalidHost.twig", "/var/www/cse135.monster/public_html/matomo/plugins/CoreHome/templates/_warningInvalidHost.twig");
    }
}
