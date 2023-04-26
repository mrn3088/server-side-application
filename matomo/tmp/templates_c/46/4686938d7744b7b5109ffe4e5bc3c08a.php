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

/* @Dashboard/_widgetFactoryTemplate.twig */
class __TwigTemplate_f1346a8921398b091ad07dc4645f50a5 extends Template
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
        echo "<div id=\"widgetTemplate\" style=\"display:none;\">
    <div class=\"widget\">
        <div class=\"widgetTop\">
            <div class=\"buttons\">
                <div class=\"button\" id=\"close\">
                    <span class=\"icon-close\" title=\"";
        // line 6
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_Close"), "html", null, true);
        echo "\"></span>
                </div>
                <div class=\"button\" id=\"maximise\">
                    <span class=\"icon-fullscreen\" title=\"";
        // line 9
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Dashboard_Maximise"), "html", null, true);
        echo "\"></span>
                </div>
                <div class=\"button\" id=\"minimise\">
                    <span class=\"icon-minimise\" title=\"";
        // line 12
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Dashboard_Minimise"), "html", null, true);
        echo "\"></span>
                </div>
                <div class=\"button\" id=\"refresh\">
                    <span class=\"icon-reload\" title=\"";
        // line 15
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_Refresh"), "html", null, true);
        echo "\"></span>
                </div>
            </div>
            <h3 class=\"widgetName\">";
        // line 18
        if (array_key_exists("widgetName", $context)) {
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["widgetName"]) || array_key_exists("widgetName", $context) ? $context["widgetName"] : (function () { throw new RuntimeError('Variable "widgetName" does not exist.', 18, $this->source); })()), "html", null, true);
        }
        // line 19
        echo "                <div class=\"widgetNameOffScreen\">
                    ";
        // line 20
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_Widget"), "html", null, true);
        echo "
                </div>
            </h3>
        </div>
        <div class=\"widgetContent\">
            <div class=\"widgetLoading\">";
        // line 25
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Dashboard_LoadingWidget"), "html", null, true);
        echo "</div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@Dashboard/_widgetFactoryTemplate.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 25,  75 => 20,  72 => 19,  68 => 18,  62 => 15,  56 => 12,  50 => 9,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"widgetTemplate\" style=\"display:none;\">
    <div class=\"widget\">
        <div class=\"widgetTop\">
            <div class=\"buttons\">
                <div class=\"button\" id=\"close\">
                    <span class=\"icon-close\" title=\"{{ 'General_Close'|translate }}\"></span>
                </div>
                <div class=\"button\" id=\"maximise\">
                    <span class=\"icon-fullscreen\" title=\"{{ 'Dashboard_Maximise'|translate }}\"></span>
                </div>
                <div class=\"button\" id=\"minimise\">
                    <span class=\"icon-minimise\" title=\"{{ 'Dashboard_Minimise'|translate }}\"></span>
                </div>
                <div class=\"button\" id=\"refresh\">
                    <span class=\"icon-reload\" title=\"{{ 'General_Refresh'|translate }}\"></span>
                </div>
            </div>
            <h3 class=\"widgetName\">{% if widgetName is defined %}{{ widgetName }}{% endif %}
                <div class=\"widgetNameOffScreen\">
                    {{ 'General_Widget'|translate }}
                </div>
            </h3>
        </div>
        <div class=\"widgetContent\">
            <div class=\"widgetLoading\">{{ 'Dashboard_LoadingWidget'|translate }}</div>
        </div>
    </div>
</div>
", "@Dashboard/_widgetFactoryTemplate.twig", "/var/www/cse135.monster/public_html/matomo/plugins/Dashboard/templates/_widgetFactoryTemplate.twig");
    }
}
