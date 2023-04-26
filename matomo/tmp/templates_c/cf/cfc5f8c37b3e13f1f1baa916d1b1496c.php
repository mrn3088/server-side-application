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

/* @Marketplace/getPremiumFeatures.twig */
class __TwigTemplate_38bd3dab1186be862b6fe62e03919fed extends Template
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
        echo "<div class=\"getNewPlugins getPremiumFeatures widgetBody\">
    <div class=\"row\">
        <div class=\"col s12 m12\">
            <h3 style=\"font-weight: bold;color: #5bb75b\">";
        // line 4
        echo $this->env->getFilter('translate')->getCallable()("Marketplace_TrialHints", "<a style='color:#5bb75b;text-decoration: underline;' href='https://shop.matomo.org/free-trial/' target='_blank' rel='nofollo'>", "</a>");
        echo "</h3>
            <h3 style=\"margin-bottom: 28px;color: #5bb75b\">";
        // line 5
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Marketplace_SupportMatomoThankYou"), "html", null, true);
        echo " <i class='icon-heart red-text'></i></h3></div>

        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["plugins"]) || array_key_exists("plugins", $context) ? $context["plugins"] : (function () { throw new RuntimeError('Variable "plugins" does not exist.', 7, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["plugin"]) {
            // line 8
            echo "            <div class=\"col s12 m4\">

                <h3 class=\"pluginName\" piwik-plugin-name=\"";
            // line 10
            echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "name", [], "any", false, false, false, 10), "html_attr");
            echo "\">";
            echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "displayName", [], "any", false, false, false, 10), "html", null, true);
            echo "</h3>
                ";
            // line 11
            if ((twig_get_attribute($this->env, $this->source, $context["plugin"], "specialOffer", [], "any", false, false, false, 11) != "")) {
                // line 12
                echo "                <span class=\"pluginSubtitle\">
                    <span>";
                // line 13
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Marketplace_SpecialOffer"), "html", null, true);
                echo ":</span> ";
                echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "specialOffer", [], "any", false, false, false, 13), "html", null, true);
                echo "
                </span>
                ";
            }
            // line 16
            echo "                <span class=\"pluginBody\">
                    ";
            // line 17
            if (twig_get_attribute($this->env, $this->source, $context["plugin"], "isBundle", [], "any", false, false, false, 17)) {
                echo " ";
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Marketplace_SpecialOffer"), "html", null, true);
                echo ": ";
            }
            echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "description", [], "any", false, false, false, 17), "html", null, true);
            echo "
                    <br />
                    <a href=\"javascript:;\" class=\"pluginMoreDetails\" piwik-plugin-name=\"";
            // line 19
            echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "name", [], "any", false, false, false, 19), "html_attr");
            echo "\">";
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_MoreDetails"), "html", null, true);
            echo "</a>
                </span>
            </div>
            ";
            // line 22
            if (((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 22) % 3) == 0)) {
                // line 23
                echo "                </div><div class=\"row\">
            ";
            }
            // line 25
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plugin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "    </div>

    <div class=\"widgetBody\">
        <a href=\"";
        // line 29
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFunction('linkTo')->getCallable()(["module" => "Marketplace", "action" => "overview", "show" => "premium"]), "html", null, true);
        echo "\"
            >";
        // line 30
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CorePluginsAdmin_ViewAllMarketplacePlugins"), "html", null, true);
        echo "</a>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "@Marketplace/getPremiumFeatures.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 30,  137 => 29,  132 => 26,  118 => 25,  114 => 23,  112 => 22,  104 => 19,  94 => 17,  91 => 16,  83 => 13,  80 => 12,  78 => 11,  72 => 10,  68 => 8,  51 => 7,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"getNewPlugins getPremiumFeatures widgetBody\">
    <div class=\"row\">
        <div class=\"col s12 m12\">
            <h3 style=\"font-weight: bold;color: #5bb75b\">{{ 'Marketplace_TrialHints'|translate(\"<a style='color:#5bb75b;text-decoration: underline;' href='https://shop.matomo.org/free-trial/' target='_blank' rel='nofollo'>\",\"</a>\")|raw }}</h3>
            <h3 style=\"margin-bottom: 28px;color: #5bb75b\">{{ 'Marketplace_SupportMatomoThankYou'|translate }} <i class='icon-heart red-text'></i></h3></div>

        {% for plugin in plugins %}
            <div class=\"col s12 m4\">

                <h3 class=\"pluginName\" piwik-plugin-name=\"{{ plugin.name|e('html_attr') }}\">{{ plugin.displayName }}</h3>
                {% if plugin.specialOffer !='' %}
                <span class=\"pluginSubtitle\">
                    <span>{{ 'Marketplace_SpecialOffer'|translate }}:</span> {{ plugin.specialOffer }}
                </span>
                {% endif %}
                <span class=\"pluginBody\">
                    {% if plugin.isBundle %} {{ 'Marketplace_SpecialOffer'|translate }}: {% endif %}{{ plugin.description }}
                    <br />
                    <a href=\"javascript:;\" class=\"pluginMoreDetails\" piwik-plugin-name=\"{{ plugin.name|e('html_attr') }}\">{{ 'General_MoreDetails'|translate }}</a>
                </span>
            </div>
            {% if loop.index % 3 == 0 %}
                </div><div class=\"row\">
            {% endif %}
        {% endfor %}
    </div>

    <div class=\"widgetBody\">
        <a href=\"{{ linkTo({'module': 'Marketplace', 'action': 'overview', 'show': 'premium'}) }}\"
            >{{ 'CorePluginsAdmin_ViewAllMarketplacePlugins'|translate }}</a>
    </div>
</div>", "@Marketplace/getPremiumFeatures.twig", "/var/www/cse135.monster/public_html/matomo/plugins/Marketplace/templates/getPremiumFeatures.twig");
    }
}
