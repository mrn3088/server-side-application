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

/* @CoreHome/_adblockDetect.twig */
class __TwigTemplate_09ead696a93a4457e5a43eee9219b94f extends Template
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
        echo "<div id=\"bottomAd\" style=\"font-size: 2px;\">&nbsp;</div>
<script type=\"text/javascript\">
    window.addEventListener('DOMContentLoaded', function () {
        if ('undefined' === (typeof hasBlockedContent) || hasBlockedContent !== false) {
            ";
        // line 6
        echo "            (function () {
                ";
        // line 8
        echo "                var body = document.getElementsByTagName('body');

                if (!body || !body[0]) {
                    return;
                }

                var bottomAd = document.getElementById('bottomAd');
                var wasMostLikelyCausedByAdblock = false;

                if (!bottomAd) {
                    wasMostLikelyCausedByAdblock = true;
                } else if (bottomAd.style && bottomAd.style.display === 'none') {
                    wasMostLikelyCausedByAdblock = true;
                } else if ('undefined' !== (typeof bottomAd.clientHeight) && bottomAd.clientHeight === 0) {
                    wasMostLikelyCausedByAdblock = true;
                }

                if (wasMostLikelyCausedByAdblock) {
                    var shouldGetHiddenElement = document.getElementById(\"should-get-hidden\");
                    var warning = document.createElement('p');
                    warning.innerText = '";
        // line 28
        echo \Piwik\piwik_escape_filter($this->env, \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreHome_AdblockIsMaybeUsed"), "js"), "html", null, true);
        echo "';

                    if (shouldGetHiddenElement) {
                        shouldGetHiddenElement.appendChild(warning);
                    } else {
                        body[0].insertBefore(warning, body[0].firstChild);
                        warning.style.color = 'red';
                        warning.style.fontWeight = 'bold';
                        warning.style.marginLeft = '16px';
                        warning.style.marginBottom = '16px';
                        warning.style.fontSize = '20px';
                    }
                }
            })();
        }
    });
</script>";
    }

    public function getTemplateName()
    {
        return "@CoreHome/_adblockDetect.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 28,  46 => 8,  43 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"bottomAd\" style=\"font-size: 2px;\">&nbsp;</div>
<script type=\"text/javascript\">
    window.addEventListener('DOMContentLoaded', function () {
        if ('undefined' === (typeof hasBlockedContent) || hasBlockedContent !== false) {
            {# if hasBlockedContent was \"false\" most likely nothing was blocked #}
            (function () {
                {# most likely jQuery is not available, have to use vanilla JS here #}
                var body = document.getElementsByTagName('body');

                if (!body || !body[0]) {
                    return;
                }

                var bottomAd = document.getElementById('bottomAd');
                var wasMostLikelyCausedByAdblock = false;

                if (!bottomAd) {
                    wasMostLikelyCausedByAdblock = true;
                } else if (bottomAd.style && bottomAd.style.display === 'none') {
                    wasMostLikelyCausedByAdblock = true;
                } else if ('undefined' !== (typeof bottomAd.clientHeight) && bottomAd.clientHeight === 0) {
                    wasMostLikelyCausedByAdblock = true;
                }

                if (wasMostLikelyCausedByAdblock) {
                    var shouldGetHiddenElement = document.getElementById(\"should-get-hidden\");
                    var warning = document.createElement('p');
                    warning.innerText = '{{ 'CoreHome_AdblockIsMaybeUsed'|translate|e('js') }}';

                    if (shouldGetHiddenElement) {
                        shouldGetHiddenElement.appendChild(warning);
                    } else {
                        body[0].insertBefore(warning, body[0].firstChild);
                        warning.style.color = 'red';
                        warning.style.fontWeight = 'bold';
                        warning.style.marginLeft = '16px';
                        warning.style.marginBottom = '16px';
                        warning.style.fontSize = '20px';
                    }
                }
            })();
        }
    });
</script>", "@CoreHome/_adblockDetect.twig", "/var/www/cse135.monster/public_html/matomo/plugins/CoreHome/templates/_adblockDetect.twig");
    }
}
