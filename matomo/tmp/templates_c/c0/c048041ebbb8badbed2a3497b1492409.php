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

/* @Marketplace/getNewPluginsAdmin.twig */
class __TwigTemplate_846ebf8ddcaab1d73cabc4f48f0d7668 extends Template
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
        echo "<div class=\"getNewPlugins isAdminPage\">
    <div class=\"row\">
        ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["plugins"]) || array_key_exists("plugins", $context) ? $context["plugins"] : (function () { throw new RuntimeError('Variable "plugins" does not exist.', 3, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["plugin"]) {
            // line 4
            echo "            <div class=\"col s12 m4\">

                <h3 class=\"pluginName\"
                    title=\"";
            // line 7
            echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "description", [], "any", false, false, false, 7), "html_attr");
            echo "\"
                    piwik-plugin-name=\"";
            // line 8
            echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "name", [], "any", false, false, false, 8), "html_attr");
            echo "\">";
            echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "displayName", [], "any", false, false, false, 8), "html", null, true);
            echo "</h3>
                <p class=\"description\"
                   title=\"";
            // line 10
            echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "description", [], "any", false, false, false, 10), "html_attr");
            echo "\">";
            echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "description", [], "any", false, false, false, 10), "html", null, true);
            echo "</p>

                ";
            // line 12
            if ((twig_get_attribute($this->env, $this->source, $context["plugin"], "screenshots", [], "any", false, false, false, 12) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["plugin"], "screenshots", [], "any", false, true, false, 12), 0, [], "any", true, true, false, 12))) {
                // line 13
                echo "                    <br />
                    <img piwik-plugin-name=\"";
                // line 14
                echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "name", [], "any", false, false, false, 14), "html_attr");
                echo "\"
                         class=\"screenshot\"
                         src=\"";
                // line 16
                echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["plugin"], "screenshots", [], "any", false, false, false, 16), 0, [], "any", false, false, false, 16), "html", null, true);
                echo "?w=600\" width=\"100%\" alt=\"\">
                ";
            }
            // line 18
            echo "            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plugin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "    </div>

    <div class=\"widgetBody\">
        <a href=\"";
        // line 23
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFunction('linkTo')->getCallable()(["module" => "Marketplace", "action" => "overview"]), "html", null, true);
        echo "\"
            >";
        // line 24
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CorePluginsAdmin_ViewAllMarketplacePlugins"), "html", null, true);
        echo "</a>
    </div>

    <script type=\"text/javascript\">
        \$('.getNewPlugins .col .description').dotdotdot({
            watch: 'window'
        });
    </script>
</div>";
    }

    public function getTemplateName()
    {
        return "@Marketplace/getNewPluginsAdmin.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 24,  95 => 23,  90 => 20,  83 => 18,  78 => 16,  73 => 14,  70 => 13,  68 => 12,  61 => 10,  54 => 8,  50 => 7,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"getNewPlugins isAdminPage\">
    <div class=\"row\">
        {% for plugin in plugins %}
            <div class=\"col s12 m4\">

                <h3 class=\"pluginName\"
                    title=\"{{ plugin.description|e('html_attr') }}\"
                    piwik-plugin-name=\"{{ plugin.name|e('html_attr') }}\">{{ plugin.displayName }}</h3>
                <p class=\"description\"
                   title=\"{{ plugin.description|e('html_attr') }}\">{{ plugin.description }}</p>

                {% if plugin.screenshots and plugin.screenshots.0 is defined %}
                    <br />
                    <img piwik-plugin-name=\"{{ plugin.name|e('html_attr') }}\"
                         class=\"screenshot\"
                         src=\"{{ plugin.screenshots.0 }}?w=600\" width=\"100%\" alt=\"\">
                {% endif %}
            </div>
        {% endfor %}
    </div>

    <div class=\"widgetBody\">
        <a href=\"{{ linkTo({'module': 'Marketplace', 'action': 'overview'}) }}\"
            >{{ 'CorePluginsAdmin_ViewAllMarketplacePlugins'|translate }}</a>
    </div>

    <script type=\"text/javascript\">
        \$('.getNewPlugins .col .description').dotdotdot({
            watch: 'window'
        });
    </script>
</div>", "@Marketplace/getNewPluginsAdmin.twig", "/var/www/cse135.monster/public_html/matomo/plugins/Marketplace/templates/getNewPluginsAdmin.twig");
    }
}
