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

/* @CoreAdminHome/_securityNotificationEmail.twig */
class __TwigTemplate_3d1735a83486ca21f12d9dbe674170e9 extends Template
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
        echo "<p>";
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_HelloUser", (isset($context["login"]) || array_key_exists("login", $context) ? $context["login"] : (function () { throw new RuntimeError('Variable "login" does not exist.', 1, $this->source); })())), "html", null, true);
        echo "</p>
<p>";
        // line 2
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["body"]) || array_key_exists("body", $context) ? $context["body"] : (function () { throw new RuntimeError('Variable "body" does not exist.', 2, $this->source); })()), "html", null, true);
        echo "</p>
";
    }

    public function getTemplateName()
    {
        return "@CoreAdminHome/_securityNotificationEmail.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<p>{{ 'General_HelloUser'|translate(login) }}</p>
<p>{{ body }}</p>
", "@CoreAdminHome/_securityNotificationEmail.twig", "/var/www/cse135.monster/public_html/matomo/plugins/CoreAdminHome/templates/_securityNotificationEmail.twig");
    }
}
