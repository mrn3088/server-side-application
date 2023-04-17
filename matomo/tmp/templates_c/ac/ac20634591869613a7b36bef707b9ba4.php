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

/* @Installation/layout.twig */
class __TwigTemplate_bd605bb84096cd618d68f8bab4fd2dc7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html id=\"ng-app\" ng-app=\"piwikApp\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"robots\" content=\"noindex,nofollow\">
    <meta name=\"google\" content=\"notranslate\">
    <title>Matomo ";
        // line 7
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["piwikVersion"]) || array_key_exists("piwikVersion", $context) ? $context["piwikVersion"] : (function () { throw new RuntimeError('Variable "piwikVersion" does not exist.', 7, $this->source); })()), "html", null, true);
        echo " &rsaquo; ";
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Installation_Installation"), "html", null, true);
        echo "</title>

    <script>window.piwik = {installation: true};</script>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"index.php?module=Installation&action=getInstallationCss\"/>
    <script type=\"text/javascript\" src=\"index.php?module=Installation&action=getInstallationJs\"></script>

    <link rel=\"shortcut icon\" href=\"plugins/CoreHome/images/favicon.png\"/>
</head>
<body ng-app=\"app\" id=\"installation\">
<div class=\"container\">

    <div class=\"header\">
        <div class=\"logo\">
            <img title=\"Matomo ";
        // line 20
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["piwikVersion"]) || array_key_exists("piwikVersion", $context) ? $context["piwikVersion"] : (function () { throw new RuntimeError('Variable "piwikVersion" does not exist.', 20, $this->source); })()), "html", null, true);
        echo " - ";
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_OpenSourceWebAnalytics"), "html_attr");
        echo "\" src=\"plugins/Morpheus/images/logo.png\"/>
            <p>";
        // line 21
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_OpenSourceWebAnalytics"), "html", null, true);
        echo "</p>
        </div>
        <div class=\"language-selector\">
            ";
        // line 24
        echo $this->env->getFunction('postEvent')->getCallable()("Template.topBar");
        echo "
        </div>

        <div class=\"installation-progress\">
            <h4>
                ";
        // line 29
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Installation_InstallationStatus"), "html", null, true);
        echo "
                <small>";
        // line 30
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["percentDone"]) || array_key_exists("percentDone", $context) ? $context["percentDone"] : (function () { throw new RuntimeError('Variable "percentDone" does not exist.', 30, $this->source); })()), "html", null, true);
        echo "%</small>
            </h4>
            <div class=\"progress\">
                <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ";
        // line 33
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["percentDone"]) || array_key_exists("percentDone", $context) ? $context["percentDone"] : (function () { throw new RuntimeError('Variable "percentDone" does not exist.', 33, $this->source); })()), "html", null, true);
        echo "%;\"></div>
            </div>
        </div>

        <div class=\"clearfix\"></div>
    </div>

    <div class=\"row\">
        <div class=\"col s3\">
            <ul class=\"list-group\">
                ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allStepsTitle"]) || array_key_exists("allStepsTitle", $context) ? $context["allStepsTitle"] : (function () { throw new RuntimeError('Variable "allStepsTitle" does not exist.', 43, $this->source); })()));
        foreach ($context['_seq'] as $context["stepId"] => $context["stepName"]) {
            // line 44
            echo "                    ";
            if (((isset($context["currentStepId"]) || array_key_exists("currentStepId", $context) ? $context["currentStepId"] : (function () { throw new RuntimeError('Variable "currentStepId" does not exist.', 44, $this->source); })()) > $context["stepId"])) {
                // line 45
                echo "                        ";
                $context["stepClass"] = "disabled";
                // line 46
                echo "                    ";
            } elseif (((isset($context["currentStepId"]) || array_key_exists("currentStepId", $context) ? $context["currentStepId"] : (function () { throw new RuntimeError('Variable "currentStepId" does not exist.', 46, $this->source); })()) == $context["stepId"])) {
                // line 47
                echo "                        ";
                $context["stepClass"] = "active";
                // line 48
                echo "                    ";
            } else {
                // line 49
                echo "                        ";
                $context["stepClass"] = "";
                // line 50
                echo "                    ";
            }
            // line 51
            echo "                    <li class=\"list-group-item ";
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["stepClass"]) || array_key_exists("stepClass", $context) ? $context["stepClass"] : (function () { throw new RuntimeError('Variable "stepClass" does not exist.', 51, $this->source); })()), "html", null, true);
            echo "\">";
            echo \Piwik\piwik_escape_filter($this->env, ($context["stepId"] + 1), "html", null, true);
            echo ". ";
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()($context["stepName"]), "html", null, true);
            echo "</li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['stepId'], $context['stepName'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "            </ul>
        </div>
        <div class=\"col s9 content\">
            ";
        // line 56
        ob_start();
        // line 57
        echo "                <p class=\"next-step\">
                    <a class=\"btn\" href=\"";
        // line 58
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFunction('linkTo')->getCallable()(["action" => (isset($context["nextModuleName"]) || array_key_exists("nextModuleName", $context) ? $context["nextModuleName"] : (function () { throw new RuntimeError('Variable "nextModuleName" does not exist.', 58, $this->source); })()), "token_auth" => null, "method" => null]), "html", null, true);
        echo "\">
                        ";
        // line 59
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_Next"), "html", null, true);
        echo " &raquo;</a>
                </p>
            ";
        $context["nextButton"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 62
        echo "            ";
        if ((array_key_exists("showNextStepAtTop", $context) && (isset($context["showNextStepAtTop"]) || array_key_exists("showNextStepAtTop", $context) ? $context["showNextStepAtTop"] : (function () { throw new RuntimeError('Variable "showNextStepAtTop" does not exist.', 62, $this->source); })()))) {
            // line 63
            echo "                ";
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["nextButton"]) || array_key_exists("nextButton", $context) ? $context["nextButton"] : (function () { throw new RuntimeError('Variable "nextButton" does not exist.', 63, $this->source); })()), "html", null, true);
            echo "
            ";
        }
        // line 65
        echo "
            ";
        // line 66
        $this->displayBlock('content', $context, $blocks);
        // line 67
        echo "
            ";
        // line 68
        if ((isset($context["showNextStep"]) || array_key_exists("showNextStep", $context) ? $context["showNextStep"] : (function () { throw new RuntimeError('Variable "showNextStep" does not exist.', 68, $this->source); })())) {
            // line 69
            echo "                ";
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["nextButton"]) || array_key_exists("nextButton", $context) ? $context["nextButton"] : (function () { throw new RuntimeError('Variable "nextButton" does not exist.', 69, $this->source); })()), "html", null, true);
            echo "
            ";
        }
        // line 71
        echo "        </div>
    </div>

</div>

<div id=\"should-get-hidden\"
     style=\"color: red;margin-left: 16px;margin-bottom: 16px;font-weight:bold;font-size: 20px\">
    <p class=\"should-get-hidden-by-js\">
        ";
        // line 79
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreHome_JsDidntLoad"), "html", null, true);
        echo "
    </p>
    <p class=\"should-get-hidden-by-css\">
        ";
        // line 82
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreHome_CssDidntLoad"), "html", null, true);
        echo "
    </p>
</div>
";
        // line 85
        $this->loadTemplate("@CoreHome/_adblockDetect.twig", "@Installation/layout.twig", 85)->display($context);
        // line 86
        echo "</body>
</html>
";
    }

    // line 66
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "@Installation/layout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 66,  214 => 86,  212 => 85,  206 => 82,  200 => 79,  190 => 71,  184 => 69,  182 => 68,  179 => 67,  177 => 66,  174 => 65,  168 => 63,  165 => 62,  159 => 59,  155 => 58,  152 => 57,  150 => 56,  145 => 53,  132 => 51,  129 => 50,  126 => 49,  123 => 48,  120 => 47,  117 => 46,  114 => 45,  111 => 44,  107 => 43,  94 => 33,  88 => 30,  84 => 29,  76 => 24,  70 => 21,  64 => 20,  46 => 7,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html id=\"ng-app\" ng-app=\"piwikApp\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"robots\" content=\"noindex,nofollow\">
    <meta name=\"google\" content=\"notranslate\">
    <title>Matomo {{ piwikVersion }} &rsaquo; {{ 'Installation_Installation'|translate }}</title>

    <script>window.piwik = {installation: true};</script>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"index.php?module=Installation&action=getInstallationCss\"/>
    <script type=\"text/javascript\" src=\"index.php?module=Installation&action=getInstallationJs\"></script>

    <link rel=\"shortcut icon\" href=\"plugins/CoreHome/images/favicon.png\"/>
</head>
<body ng-app=\"app\" id=\"installation\">
<div class=\"container\">

    <div class=\"header\">
        <div class=\"logo\">
            <img title=\"Matomo {{ piwikVersion }} - {{ 'General_OpenSourceWebAnalytics'|translate|escape('html_attr') }}\" src=\"plugins/Morpheus/images/logo.png\"/>
            <p>{{ 'General_OpenSourceWebAnalytics'|translate }}</p>
        </div>
        <div class=\"language-selector\">
            {{ postEvent('Template.topBar')|raw }}
        </div>

        <div class=\"installation-progress\">
            <h4>
                {{ 'Installation_InstallationStatus'|translate }}
                <small>{{ percentDone }}%</small>
            </h4>
            <div class=\"progress\">
                <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: {{ percentDone }}%;\"></div>
            </div>
        </div>

        <div class=\"clearfix\"></div>
    </div>

    <div class=\"row\">
        <div class=\"col s3\">
            <ul class=\"list-group\">
                {% for stepId,stepName in allStepsTitle %}
                    {% if currentStepId > stepId %}
                        {% set stepClass = 'disabled' %}
                    {% elseif currentStepId == stepId %}
                        {% set stepClass = 'active' %}
                    {% else %}
                        {% set stepClass = '' %}
                    {% endif %}
                    <li class=\"list-group-item {{ stepClass }}\">{{ stepId + 1 }}. {{ stepName|translate }}</li>
                {% endfor %}
            </ul>
        </div>
        <div class=\"col s9 content\">
            {% set nextButton %}
                <p class=\"next-step\">
                    <a class=\"btn\" href=\"{{ linkTo({'action':nextModuleName, 'token_auth':null, 'method':null }) }}\">
                        {{ 'General_Next'|translate }} &raquo;</a>
                </p>
            {% endset %}
            {% if showNextStepAtTop is defined and showNextStepAtTop %}
                {{ nextButton }}
            {% endif %}

            {% block content %}{% endblock %}

            {% if showNextStep %}
                {{ nextButton }}
            {% endif %}
        </div>
    </div>

</div>

<div id=\"should-get-hidden\"
     style=\"color: red;margin-left: 16px;margin-bottom: 16px;font-weight:bold;font-size: 20px\">
    <p class=\"should-get-hidden-by-js\">
        {{ 'CoreHome_JsDidntLoad'|translate }}
    </p>
    <p class=\"should-get-hidden-by-css\">
        {{ 'CoreHome_CssDidntLoad'|translate }}
    </p>
</div>
{% include \"@CoreHome/_adblockDetect.twig\" %}
</body>
</html>
", "@Installation/layout.twig", "/var/www/cse135.monster/public_html/matomo/plugins/Installation/templates/layout.twig");
    }
}
