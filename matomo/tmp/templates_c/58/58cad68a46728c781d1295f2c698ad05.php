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

/* @Morpheus/javascriptCode.twig */
class __TwigTemplate_17de895c1bd5201301d076dba1265354 extends Template
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
        echo "<!-- Matomo -->
<script>
  var _paq = window._paq = window._paq || [];
  /* tracker methods like \"setCustomDimension\" should be called before \"trackPageView\" */
{\$options}  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    {\$setTrackerUrl}
    {\$optionsBeforeTrackerUrl}_paq.push(['setTrackerUrl', u+'{\$matomoPhpFilename}']);
    _paq.push(['setSiteId', '{\$idSite}']);
    ";
        // line 11
        if ((isset($context["loadAsync"]) || array_key_exists("loadAsync", $context) ? $context["loadAsync"] : (function () { throw new RuntimeError('Variable "loadAsync" does not exist.', 11, $this->source); })())) {
            echo "var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.async=true; g.src=u+'{\$matomoJsFilename}'; s.parentNode.insertBefore(g,s);";
        }
        // line 13
        echo "
  })();
</script>
";
        // line 16
        if ( !(isset($context["loadAsync"]) || array_key_exists("loadAsync", $context) ? $context["loadAsync"] : (function () { throw new RuntimeError('Variable "loadAsync" does not exist.', 16, $this->source); })())) {
            echo "<script src=\"{\$protocol}{\$piwikUrl}/{\$matomoJsFilename}\"></script>
";
        }
        // line 18
        if ((isset($context["trackNoScript"]) || array_key_exists("trackNoScript", $context) ? $context["trackNoScript"] : (function () { throw new RuntimeError('Variable "trackNoScript" does not exist.', 18, $this->source); })())) {
            echo "<noscript><p><img src=\"{\$protocol}{\$piwikUrl}/{\$matomoPhpFilename}?idsite={\$idSite}&amp;rec=1\" style=\"border:0;\" alt=\"\" /></p></noscript>
";
        }
        // line 20
        echo "<!-- End Matomo Code -->
";
    }

    public function getTemplateName()
    {
        return "@Morpheus/javascriptCode.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 20,  64 => 18,  59 => 16,  54 => 13,  49 => 11,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Matomo -->
<script>
  var _paq = window._paq = window._paq || [];
  /* tracker methods like \"setCustomDimension\" should be called before \"trackPageView\" */
{\$options}  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    {\$setTrackerUrl}
    {\$optionsBeforeTrackerUrl}_paq.push(['setTrackerUrl', u+'{\$matomoPhpFilename}']);
    _paq.push(['setSiteId', '{\$idSite}']);
    {% if loadAsync %}var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.async=true; g.src=u+'{\$matomoJsFilename}'; s.parentNode.insertBefore(g,s);{% endif %}

  })();
</script>
{% if not loadAsync %}<script src=\"{\$protocol}{\$piwikUrl}/{\$matomoJsFilename}\"></script>
{% endif %}
{% if trackNoScript %}<noscript><p><img src=\"{\$protocol}{\$piwikUrl}/{\$matomoPhpFilename}?idsite={\$idSite}&amp;rec=1\" style=\"border:0;\" alt=\"\" /></p></noscript>
{% endif %}
<!-- End Matomo Code -->
", "@Morpheus/javascriptCode.twig", "/var/www/cse135.monster/public_html/matomo/plugins/Morpheus/templates/javascriptCode.twig");
    }
}
