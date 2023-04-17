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

/* @CoreHome/_htmlEmailFooter.twig */
class __TwigTemplate_e21a88d22a639349d0c84b07fe7de0ac extends Template
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
        ob_start();
        echo "color:";
        echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["themeStyles"]) || array_key_exists("themeStyles", $context) ? $context["themeStyles"] : (function () { throw new RuntimeError('Variable "themeStyles" does not exist.', 1, $this->source); })()), "colorText", [], "any", false, false, false, 1), "html_attr");
        echo ";font-family:";
        echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["themeStyles"]) || array_key_exists("themeStyles", $context) ? $context["themeStyles"] : (function () { throw new RuntimeError('Variable "themeStyles" does not exist.', 1, $this->source); })()), "fontFamilyBase", [], "any", false, false, false, 1), "html_attr");
        echo ";";
        $context["fontStyle"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 2
        $context["styleParagraph"] = "font-size:15px;line-height:24px;margin:0 0 16px;";
        // line 3
        ob_start();
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["styleParagraph"]) || array_key_exists("styleParagraph", $context) ? $context["styleParagraph"] : (function () { throw new RuntimeError('Variable "styleParagraph" does not exist.', 3, $this->source); })()), "html", null, true);
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["fontStyle"]) || array_key_exists("fontStyle", $context) ? $context["fontStyle"] : (function () { throw new RuntimeError('Variable "fontStyle" does not exist.', 3, $this->source); })()), "html", null, true);
        echo "text-align:center;font-size:13px; color:#666;";
        $context["footerParagraphStyle"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 4
        $context["hasHorizontalRule"] = ( !(isset($context["hasWhiteLabel"]) || array_key_exists("hasWhiteLabel", $context) ? $context["hasWhiteLabel"] : (function () { throw new RuntimeError('Variable "hasWhiteLabel" does not exist.', 4, $this->source); })()) ||  !twig_test_empty(((array_key_exists("unsubscribeLink", $context)) ? (_twig_default_filter((isset($context["unsubscribeLink"]) || array_key_exists("unsubscribeLink", $context) ? $context["unsubscribeLink"] : (function () { throw new RuntimeError('Variable "unsubscribeLink" does not exist.', 4, $this->source); })()))) : (""))));
        // line 5
        echo "
";
        // line 6
        if ((isset($context["hasHorizontalRule"]) || array_key_exists("hasHorizontalRule", $context) ? $context["hasHorizontalRule"] : (function () { throw new RuntimeError('Variable "hasHorizontalRule" does not exist.', 6, $this->source); })())) {
            // line 7
            echo "    <hr style=\" border: 0; margin-top: 50px;  height: 1px; background-image: linear-gradient(to right, rgba(231, 231, 231, 0), rgba(231, 231, 231, 1), rgba(2311, 2311, 231, 0));\">
";
        } else {
            // line 9
            echo "    <br/>
";
        }
        // line 11
        echo "
";
        // line 12
        if ( !(isset($context["hasWhiteLabel"]) || array_key_exists("hasWhiteLabel", $context) ? $context["hasWhiteLabel"] : (function () { throw new RuntimeError('Variable "hasWhiteLabel" does not exist.', 12, $this->source); })())) {
            // line 13
            echo "    <p style='";
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["footerParagraphStyle"]) || array_key_exists("footerParagraphStyle", $context) ? $context["footerParagraphStyle"] : (function () { throw new RuntimeError('Variable "footerParagraphStyle" does not exist.', 13, $this->source); })()), "html", null, true);
            echo "padding-top:30px;margin-bottom:0;'>
        ";
            // line 14
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_PoweredBy"), "html", null, true);
            echo "
        <a style=\"color:#439fe0;\" rel=\"noreferrer\" href=\"https://matomo.org/\" title=\"Matomo Analytics\">Matomo Analytics</a>
        <br />
        ";
            // line 17
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreHome_LeadingAnalyticsPlatformRespectsYourPrivacy"), "html", null, true);
            echo "
    </p>
";
        }
        // line 20
        echo "
";
        // line 21
        if ( !twig_test_empty(((array_key_exists("unsubscribeLink", $context)) ? (_twig_default_filter((isset($context["unsubscribeLink"]) || array_key_exists("unsubscribeLink", $context) ? $context["unsubscribeLink"] : (function () { throw new RuntimeError('Variable "unsubscribeLink" does not exist.', 21, $this->source); })()))) : ("")))) {
            // line 22
            echo "    ";
            ob_start();
            echo "<a style=\"color:#439fe0;\" href=\"";
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["unsubscribeLink"]) || array_key_exists("unsubscribeLink", $context) ? $context["unsubscribeLink"] : (function () { throw new RuntimeError('Variable "unsubscribeLink" does not exist.', 22, $this->source); })()), "html_attr");
            echo "\">";
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("ScheduledReports_Unsubscribe"), "html", null, true);
            echo "</a>";
            $context["unsubLink"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 23
            echo "    <p style='";
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["footerParagraphStyle"]) || array_key_exists("footerParagraphStyle", $context) ? $context["footerParagraphStyle"] : (function () { throw new RuntimeError('Variable "footerParagraphStyle" does not exist.', 23, $this->source); })()), "html", null, true);
            if ((isset($context["hasWhiteLabel"]) || array_key_exists("hasWhiteLabel", $context) ? $context["hasWhiteLabel"] : (function () { throw new RuntimeError('Variable "hasWhiteLabel" does not exist.', 23, $this->source); })())) {
                echo "padding-top:30px;";
            }
            echo "'>";
            echo $this->env->getFilter('translate')->getCallable()("ScheduledReports_UnsubscribeFooter", (isset($context["unsubLink"]) || array_key_exists("unsubLink", $context) ? $context["unsubLink"] : (function () { throw new RuntimeError('Variable "unsubLink" does not exist.', 23, $this->source); })()));
            echo ".</p>
";
        }
        // line 25
        echo "
</div>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "@CoreHome/_htmlEmailFooter.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 25,  104 => 23,  95 => 22,  93 => 21,  90 => 20,  84 => 17,  78 => 14,  73 => 13,  71 => 12,  68 => 11,  64 => 9,  60 => 7,  58 => 6,  55 => 5,  53 => 4,  47 => 3,  45 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set fontStyle %}color:{{ themeStyles.colorText|e('html_attr') }};font-family:{{ themeStyles.fontFamilyBase|e('html_attr') }};{% endset %}
{% set styleParagraph = 'font-size:15px;line-height:24px;margin:0 0 16px;' %}
{% set footerParagraphStyle %}{{styleParagraph}}{{fontStyle}}text-align:center;font-size:13px; color:#666;{% endset %}
{% set hasHorizontalRule = not hasWhiteLabel or unsubscribeLink|default is not empty  %}

{% if hasHorizontalRule %}
    <hr style=\" border: 0; margin-top: 50px;  height: 1px; background-image: linear-gradient(to right, rgba(231, 231, 231, 0), rgba(231, 231, 231, 1), rgba(2311, 2311, 231, 0));\">
{% else %}
    <br/>
{% endif %}

{% if not hasWhiteLabel %}
    <p style='{{ footerParagraphStyle }}padding-top:30px;margin-bottom:0;'>
        {{'General_PoweredBy'|translate}}
        <a style=\"color:#439fe0;\" rel=\"noreferrer\" href=\"https://matomo.org/\" title=\"Matomo Analytics\">Matomo Analytics</a>
        <br />
        {{ 'CoreHome_LeadingAnalyticsPlatformRespectsYourPrivacy'|translate }}
    </p>
{% endif %}

{% if unsubscribeLink|default is not empty %}
    {% set unsubLink %}<a style=\"color:#439fe0;\" href=\"{{ unsubscribeLink|e('html_attr') }}\">{{ 'ScheduledReports_Unsubscribe'|translate }}</a>{% endset %}
    <p style='{{ footerParagraphStyle }}{% if hasWhiteLabel %}padding-top:30px;{% endif %}'>{{ 'ScheduledReports_UnsubscribeFooter'|translate(unsubLink)|raw }}.</p>
{% endif %}

</div>
</body>
</html>
", "@CoreHome/_htmlEmailFooter.twig", "/var/www/cse135.monster/public_html/matomo/plugins/CoreHome/templates/_htmlEmailFooter.twig");
    }
}
