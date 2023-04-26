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

/* @Live/index.twig */
class __TwigTemplate_0b48e2a051a3ce802d2ecb31afd244ed extends Template
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
        if ( !(isset($context["isWidgetized"]) || array_key_exists("isWidgetized", $context) ? $context["isWidgetized"] : (function () { throw new RuntimeError('Variable "isWidgetized" does not exist.', 1, $this->source); })())) {
            echo "<div piwik-content-block content-title=\"";
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Live_VisitorsInRealTime"), "html_attr");
            echo "\">";
        }
        // line 2
        echo "
<div piwik-live-widget-refresh live-refresh-after-ms=\"";
        // line 3
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["liveRefreshAfterMs"]) || array_key_exists("liveRefreshAfterMs", $context) ? $context["liveRefreshAfterMs"] : (function () { throw new RuntimeError('Variable "liveRefreshAfterMs" does not exist.', 3, $this->source); })()), "html_attr");
        echo "\">
    ";
        // line 4
        $this->loadTemplate("@Live/_totalVisitors.twig", "@Live/index.twig", 4)->display($context);
        // line 5
        echo "
    ";
        // line 6
        echo (isset($context["visitors"]) || array_key_exists("visitors", $context) ? $context["visitors"] : (function () { throw new RuntimeError('Variable "visitors" does not exist.', 6, $this->source); })());
        echo "
</div>

";
        // line 9
        ob_start();
        // line 10
        echo "<div class=\"visitsLiveFooter\">
    <a title=\"";
        // line 11
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Live_OnClickPause", $this->env->getFilter('translate')->getCallable()("Live_VisitorsInRealTime")), "html", null, true);
        echo "\" href=\"javascript:void(0);\" onclick=\"onClickPause();\">
        <img id=\"pauseImage\" border=\"0\" src=\"plugins/Live/images/pause.png\" />
    </a>
    <a title=\"";
        // line 14
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Live_OnClickStart", $this->env->getFilter('translate')->getCallable()("Live_VisitorsInRealTime")), "html", null, true);
        echo "\" href=\"javascript:void(0);\" onclick=\"onClickPlay();\">
        <img id=\"playImage\" style=\"display: none;\" border=\"0\" src=\"plugins/Live/images/play.png\" />
    </a>
    ";
        // line 17
        if ( !(isset($context["disableLink"]) || array_key_exists("disableLink", $context) ? $context["disableLink"] : (function () { throw new RuntimeError('Variable "disableLink" does not exist.', 17, $this->source); })())) {
            // line 18
            echo "        &nbsp;
        <a class=\"rightLink\" href=\"#\" onclick=\"this.href=broadcast.buildReportingUrl('category=General_Visitors&subcategory=Live_VisitorLog')\">";
            // line 19
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Live_LinkVisitorLog"), "html", null, true);
            echo "</a>
    ";
        }
        // line 21
        echo "</div>
";
        $___internal_parse_0_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 9
        echo twig_spaceless($___internal_parse_0_);
        // line 23
        echo "
";
        // line 24
        if ( !(isset($context["isWidgetized"]) || array_key_exists("isWidgetized", $context) ? $context["isWidgetized"] : (function () { throw new RuntimeError('Variable "isWidgetized" does not exist.', 24, $this->source); })())) {
            echo "</div>";
        }
    }

    public function getTemplateName()
    {
        return "@Live/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 24,  94 => 23,  92 => 9,  88 => 21,  83 => 19,  80 => 18,  78 => 17,  72 => 14,  66 => 11,  63 => 10,  61 => 9,  55 => 6,  52 => 5,  50 => 4,  46 => 3,  43 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if not isWidgetized %}<div piwik-content-block content-title=\"{{ 'Live_VisitorsInRealTime'|translate|e('html_attr') }}\">{% endif %}

<div piwik-live-widget-refresh live-refresh-after-ms=\"{{ liveRefreshAfterMs|e('html_attr') }}\">
    {% include \"@Live/_totalVisitors.twig\" %}

    {{ visitors|raw }}
</div>

{% apply spaceless %}
<div class=\"visitsLiveFooter\">
    <a title=\"{{ 'Live_OnClickPause'|translate('Live_VisitorsInRealTime'|translate) }}\" href=\"javascript:void(0);\" onclick=\"onClickPause();\">
        <img id=\"pauseImage\" border=\"0\" src=\"plugins/Live/images/pause.png\" />
    </a>
    <a title=\"{{ 'Live_OnClickStart'|translate('Live_VisitorsInRealTime'|translate) }}\" href=\"javascript:void(0);\" onclick=\"onClickPlay();\">
        <img id=\"playImage\" style=\"display: none;\" border=\"0\" src=\"plugins/Live/images/play.png\" />
    </a>
    {% if not disableLink %}
        &nbsp;
        <a class=\"rightLink\" href=\"#\" onclick=\"this.href=broadcast.buildReportingUrl('category=General_Visitors&subcategory=Live_VisitorLog')\">{{ 'Live_LinkVisitorLog'|translate }}</a>
    {% endif %}
</div>
{% endapply %}

{% if not isWidgetized %}</div>{% endif %}
", "@Live/index.twig", "/var/www/cse135.monster/public_html/matomo/plugins/Live/templates/index.twig");
    }
}
