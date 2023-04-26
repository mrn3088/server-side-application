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

/* @CoreUpdater/_updateCommunicationEmail.twig */
class __TwigTemplate_d33699ce1526289243e3398940d3843c extends Template
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
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("ScheduledReports_EmailHello"), "html", null, true);
        echo "</p>

<p>";
        // line 3
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreUpdater_ThereIsNewVersionAvailableForUpdate"), "html", null, true);
        echo "</p>

<p>";
        // line 5
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreUpdater_YouCanUpgradeAutomaticallyOrDownloadPackage", (isset($context["latestVersion"]) || array_key_exists("latestVersion", $context) ? $context["latestVersion"] : (function () { throw new RuntimeError('Variable "latestVersion" does not exist.', 5, $this->source); })())), "html", null, true);
        echo "<br/>
<a href=\"";
        // line 6
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["host"]) || array_key_exists("host", $context) ? $context["host"] : (function () { throw new RuntimeError('Variable "host" does not exist.', 6, $this->source); })()), "html_attr");
        echo "index.php?module=CoreUpdater&action=newVersionAvailable\">";
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["host"]) || array_key_exists("host", $context) ? $context["host"] : (function () { throw new RuntimeError('Variable "host" does not exist.', 6, $this->source); })()), "html", null, true);
        echo "index.php?module=CoreUpdater&action=newVersionAvailable</a>
</p>

";
        // line 9
        if ((isset($context["isStableVersion"]) || array_key_exists("isStableVersion", $context) ? $context["isStableVersion"] : (function () { throw new RuntimeError('Variable "isStableVersion" does not exist.', 9, $this->source); })())) {
            // line 10
            echo "<p>
    ";
            // line 11
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreUpdater_ViewVersionChangelog"), "html", null, true);
            echo "
    <br/>
    <a href=\"";
            // line 13
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('safelink')->getCallable()((isset($context["linkToChangeLog"]) || array_key_exists("linkToChangeLog", $context) ? $context["linkToChangeLog"] : (function () { throw new RuntimeError('Variable "linkToChangeLog" does not exist.', 13, $this->source); })())), "html_attr");
            echo "\">";
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["linkToChangeLog"]) || array_key_exists("linkToChangeLog", $context) ? $context["linkToChangeLog"] : (function () { throw new RuntimeError('Variable "linkToChangeLog" does not exist.', 13, $this->source); })()), "html", null, true);
            echo "</a>
</p>
";
        }
        // line 16
        echo "
<p>";
        // line 17
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreUpdater_ReceiveEmailBecauseIsSuperUser", (isset($context["host"]) || array_key_exists("host", $context) ? $context["host"] : (function () { throw new RuntimeError('Variable "host" does not exist.', 17, $this->source); })())), "html", null, true);
        echo "</p>
<p>";
        // line 18
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreUpdater_FeedbackRequest"), "html", null, true);
        echo "<br/><a href=\"https://matomo.org/contact/\">https://matomo.org/contact/</a></p>
";
    }

    public function getTemplateName()
    {
        return "@CoreUpdater/_updateCommunicationEmail.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 18,  81 => 17,  78 => 16,  70 => 13,  65 => 11,  62 => 10,  60 => 9,  52 => 6,  48 => 5,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<p>{{ 'ScheduledReports_EmailHello'|translate }}</p>

<p>{{ 'CoreUpdater_ThereIsNewVersionAvailableForUpdate'|translate }}</p>

<p>{{ 'CoreUpdater_YouCanUpgradeAutomaticallyOrDownloadPackage'|translate(latestVersion) }}<br/>
<a href=\"{{ host|e('html_attr') }}index.php?module=CoreUpdater&action=newVersionAvailable\">{{ host }}index.php?module=CoreUpdater&action=newVersionAvailable</a>
</p>

{% if isStableVersion %}
<p>
    {{ 'CoreUpdater_ViewVersionChangelog'|translate }}
    <br/>
    <a href=\"{{ linkToChangeLog|safelink|e('html_attr') }}\">{{ linkToChangeLog }}</a>
</p>
{% endif %}

<p>{{ 'CoreUpdater_ReceiveEmailBecauseIsSuperUser'|translate(host) }}</p>
<p>{{ 'CoreUpdater_FeedbackRequest'|translate }}<br/><a href=\"https://matomo.org/contact/\">https://matomo.org/contact/</a></p>
", "@CoreUpdater/_updateCommunicationEmail.twig", "/var/www/cse135.monster/public_html/matomo/plugins/CoreUpdater/templates/_updateCommunicationEmail.twig");
    }
}
