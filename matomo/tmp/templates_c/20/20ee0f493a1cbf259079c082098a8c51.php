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

/* @CoreHome/quickLinks.twig */
class __TwigTemplate_aa60376b4d36402b8cf6c21a212c0038 extends Template
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
        echo "<div class=\"widgetBody quickLinks\">
    ";
        // line 2
        if ((isset($context["hasSitesAdmin"]) || array_key_exists("hasSitesAdmin", $context) ? $context["hasSitesAdmin"] : (function () { throw new RuntimeError('Variable "hasSitesAdmin" does not exist.', 2, $this->source); })())) {
            // line 3
            echo "    <div class=\"quickLink\">
        <span class=\"icon icon-open-source\">&nbsp;</span>
        <a href=\"";
            // line 5
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFunction('linkTo')->getCallable()(["module" => "SitesManager", "action" => "index", "showaddsite" => "1"]), "html", null, true);
            echo "\" class=\"itemLabel\">
            ";
            // line 6
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SitesManager_AddSite"));
            echo "
        </a>
    </div>
    ";
        }
        // line 10
        echo "    ";
        if ((isset($context["hasUsersAdmin"]) || array_key_exists("hasUsersAdmin", $context) ? $context["hasUsersAdmin"] : (function () { throw new RuntimeError('Variable "hasUsersAdmin" does not exist.', 10, $this->source); })())) {
            // line 11
            echo "    <div class=\"quickLink\">
        <span class=\"icon icon-user-add\">&nbsp;</span>
        <a href=\"";
            // line 13
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFunction('linkTo')->getCallable()(["module" => "UsersManager", "action" => "index", "showadduser" => "1"]), "html", null, true);
            echo "\" class=\"itemLabel\">
            ";
            // line 14
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("UsersManager_InviteNewUser"));
            echo "
        </a>
    </div>
    ";
        }
        // line 18
        echo "    <br />
</div>
";
    }

    public function getTemplateName()
    {
        return "@CoreHome/quickLinks.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 18,  68 => 14,  64 => 13,  60 => 11,  57 => 10,  50 => 6,  46 => 5,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"widgetBody quickLinks\">
    {% if hasSitesAdmin %}
    <div class=\"quickLink\">
        <span class=\"icon icon-open-source\">&nbsp;</span>
        <a href=\"{{ linkTo({'module': 'SitesManager', 'action': 'index', 'showaddsite': '1'}) }}\" class=\"itemLabel\">
            {{ 'SitesManager_AddSite'|translate|e }}
        </a>
    </div>
    {% endif %}
    {% if hasUsersAdmin %}
    <div class=\"quickLink\">
        <span class=\"icon icon-user-add\">&nbsp;</span>
        <a href=\"{{ linkTo({'module': 'UsersManager', 'action': 'index', 'showadduser': '1'}) }}\" class=\"itemLabel\">
            {{ 'UsersManager_InviteNewUser'|translate|e }}
        </a>
    </div>
    {% endif %}
    <br />
</div>
", "@CoreHome/quickLinks.twig", "/var/www/cse135.monster/public_html/matomo/plugins/CoreHome/templates/quickLinks.twig");
    }
}
