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

/* @CoreHome/getPromoVideo.twig */
class __TwigTemplate_6cc8f3f28aae0ee0eb45cdb2b93ad3d2 extends Template
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
        echo "<div id=\"piwik-promo\">
    <a id=\"piwik-promo-videos-link\" href=\"";
        // line 2
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["promoVideoUrl"]) || array_key_exists("promoVideoUrl", $context) ? $context["promoVideoUrl"] : (function () { throw new RuntimeError('Variable "promoVideoUrl" does not exist.', 2, $this->source); })()), "html_attr");
        echo "\" rel=\"noreferrer noopener\" target=\"_blank\">
        <div id=\"piwik-promo-video\">
            <div id=\"piwik-promo-thumbnail\">
                <img src=\"plugins/CoreHome/images/promo_video_splash.jpg\"/>
            </div>
        </div>

        <span>";
        // line 9
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreHome_ViewAllPiwikVideoTutorials"), "html", null, true);
        echo "</span>
    </a>

    <div id=\"piwik-promo-share\">
        <span>";
        // line 13
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreHome_ShareThis"), "html", null, true);
        echo ":</span>

        ";
        // line 16
        echo "        <a href=\"https://www.facebook.com/sharer.php?u=";
        echo \Piwik\piwik_escape_filter($this->env, twig_urlencode_filter((isset($context["promoVideoUrl"]) || array_key_exists("promoVideoUrl", $context) ? $context["promoVideoUrl"] : (function () { throw new RuntimeError('Variable "promoVideoUrl" does not exist.', 16, $this->source); })())), "html", null, true);
        echo "\" rel=\"noreferrer noopener\" target=\"_blank\">
            <img src=\"plugins/Morpheus/icons/dist/socials/facebook.com.png\" width=\"16px\" height=\"16px\" />
        </a>

        ";
        // line 21
        echo "        <a href=\"https://twitter.com/share?text=";
        echo \Piwik\piwik_escape_filter($this->env, twig_urlencode_filter((isset($context["shareText"]) || array_key_exists("shareText", $context) ? $context["shareText"] : (function () { throw new RuntimeError('Variable "shareText" does not exist.', 21, $this->source); })())), "html", null, true);
        echo "&url=";
        echo \Piwik\piwik_escape_filter($this->env, twig_urlencode_filter((isset($context["promoVideoUrl"]) || array_key_exists("promoVideoUrl", $context) ? $context["promoVideoUrl"] : (function () { throw new RuntimeError('Variable "promoVideoUrl" does not exist.', 21, $this->source); })())), "html", null, true);
        echo "\" rel=\"noreferrer noopener\" target=\"_blank\">
            <img src=\"plugins/Morpheus/icons/dist/socials/twitter.com.png\" width=\"16px\" height=\"16px\" />
        </a>

        ";
        // line 26
        echo "        <a href=\"mailto:?body=";
        echo \Piwik\piwik_escape_filter($this->env, twig_urlencode_filter((isset($context["shareTextLong"]) || array_key_exists("shareTextLong", $context) ? $context["shareTextLong"] : (function () { throw new RuntimeError('Variable "shareTextLong" does not exist.', 26, $this->source); })()), true), "html", null, true);
        echo "&subject=";
        echo \Piwik\piwik_escape_filter($this->env, twig_urlencode_filter((isset($context["shareText"]) || array_key_exists("shareText", $context) ? $context["shareText"] : (function () { throw new RuntimeError('Variable "shareText" does not exist.', 26, $this->source); })()), true), "html", null, true);
        echo "\" target=\"_blank\">
            <img src=\"plugins/Morpheus/images/email.png\" />
        </a>
    </div>

    <div style=\"clear:both;\"></div>

    <div id=\"piwik-widget-footer\" style=\"color:#666;\">";
        // line 33
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreHome_CloseWidgetDirections"), "html", null, true);
        echo "</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@CoreHome/getPromoVideo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 33,  80 => 26,  70 => 21,  62 => 16,  57 => 13,  50 => 9,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"piwik-promo\">
    <a id=\"piwik-promo-videos-link\" href=\"{{ promoVideoUrl|e('html_attr') }}\" rel=\"noreferrer noopener\" target=\"_blank\">
        <div id=\"piwik-promo-video\">
            <div id=\"piwik-promo-thumbnail\">
                <img src=\"plugins/CoreHome/images/promo_video_splash.jpg\"/>
            </div>
        </div>

        <span>{{ 'CoreHome_ViewAllPiwikVideoTutorials'|translate }}</span>
    </a>

    <div id=\"piwik-promo-share\">
        <span>{{ 'CoreHome_ShareThis'|translate }}:</span>

        {# facebook #}
        <a href=\"https://www.facebook.com/sharer.php?u={{ promoVideoUrl|url_encode }}\" rel=\"noreferrer noopener\" target=\"_blank\">
            <img src=\"plugins/Morpheus/icons/dist/socials/facebook.com.png\" width=\"16px\" height=\"16px\" />
        </a>

        {# twitter #}
        <a href=\"https://twitter.com/share?text={{ shareText|url_encode }}&url={{ promoVideoUrl|url_encode }}\" rel=\"noreferrer noopener\" target=\"_blank\">
            <img src=\"plugins/Morpheus/icons/dist/socials/twitter.com.png\" width=\"16px\" height=\"16px\" />
        </a>

        {# email #}
        <a href=\"mailto:?body={{ shareTextLong|url_encode(true) }}&subject={{ shareText|url_encode(true) }}\" target=\"_blank\">
            <img src=\"plugins/Morpheus/images/email.png\" />
        </a>
    </div>

    <div style=\"clear:both;\"></div>

    <div id=\"piwik-widget-footer\" style=\"color:#666;\">{{ 'CoreHome_CloseWidgetDirections'|translate }}</div>
</div>
", "@CoreHome/getPromoVideo.twig", "/var/www/cse135.monster/public_html/matomo/plugins/CoreHome/templates/getPromoVideo.twig");
    }
}
