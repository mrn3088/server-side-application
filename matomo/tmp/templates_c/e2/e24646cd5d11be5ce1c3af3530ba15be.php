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

/* @CoreHome/_donate.twig */
class __TwigTemplate_aada7e719ca5541d172be2da06336475 extends Template
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
        echo "<div class=\"piwik-donate-call\">
    <div class=\"piwik-donate-message\">
        ";
        // line 3
        if (array_key_exists("msg", $context)) {
            // line 4
            echo "            ";
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["msg"]) || array_key_exists("msg", $context) ? $context["msg"] : (function () { throw new RuntimeError('Variable "msg" does not exist.', 4, $this->source); })()), "html", null, true);
            echo "
        ";
        } else {
            // line 6
            echo "            <p>";
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreHome_DonateCall1"), "html", null, true);
            echo "</p>
            <p><strong>";
            // line 7
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreHome_DonateCall2"), "html", null, true);
            echo "</strong></p>
            <p>";
            // line 8
            echo $this->env->getFilter('translate')->getCallable()("CoreHome_DonateCall3", "<strong>", "</strong>", "<a target=\"_blank\" rel=\"nofollow\" href=\"https://matomo.org/recommends/premium-plugins/\"><strong>", "</strong></a>");
            echo "</p>
        ";
        }
        // line 10
        echo "    </div>

    <span id=\"piwik-worth\">";
        // line 12
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreHome_SupportUsOn"), "html", null, true);
        echo "</span>

    <ul class=\"browser-default\">
        <li><a href=\"https://www.patreon.com/matomo\" target=\"_blank\" rel=\"noreferrer noopener\">Patreon</a></li>
        <li><a href=\"https://ko-fi.com/matomo\" target=\"_blank\" rel=\"noreferrer noopener\">Ko-fi</a></li>
        <li><a href=\"https://liberapay.com/Matomo\" target=\"_blank\" rel=\"noreferrer noopener\">Liberapay</a></li>
        <li><a href=\"https://opencollective.com/matomo-analytics\" target=\"_blank\" rel=\"noreferrer noopener\">Open Collective</a></li>
        <li><a href=\"https://www.paypal.com/donate/?cmd=_s-xclick&hosted_button_id=RPL23NJURMTFA\" target=\"_blank\" rel=\"noreferrer noopener\">PayPal</a></li>
    </ul>

    <p style=\"margin-top: 1em;\">
        ";
        // line 23
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreHome_YourDonationWillHelp"), "html", null, true);
        echo "
        <br><br>
        <strong>";
        // line 25
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreHome_ThanksFromAllOfUs"), "html", null, true);
        echo "</strong>
    </p>

    ";
        // line 28
        if (array_key_exists("footerMessage", $context)) {
            // line 29
            echo "        <div class=\"form-description\">
            ";
            // line 30
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["footerMessage"]) || array_key_exists("footerMessage", $context) ? $context["footerMessage"] : (function () { throw new RuntimeError('Variable "footerMessage" does not exist.', 30, $this->source); })()), "html", null, true);
            echo "
        </div>
    ";
        }
        // line 33
        echo "</div>
<script type=\"text/javascript\">
\$(document).ready(function () {
    // Note: this will cause problems if more than one donate form is on the page
    \$('.piwik-donate-slider').each(function () {
        \$(this).trigger('piwik:changePosition', {position: 1});
    });
});
</script>
";
    }

    public function getTemplateName()
    {
        return "@CoreHome/_donate.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 33,  97 => 30,  94 => 29,  92 => 28,  86 => 25,  81 => 23,  67 => 12,  63 => 10,  58 => 8,  54 => 7,  49 => 6,  43 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"piwik-donate-call\">
    <div class=\"piwik-donate-message\">
        {% if msg is defined %}
            {{ msg }}
        {% else %}
            <p>{{ 'CoreHome_DonateCall1'|translate }}</p>
            <p><strong>{{ 'CoreHome_DonateCall2'|translate }}</strong></p>
            <p>{{ 'CoreHome_DonateCall3'|translate('<strong>','</strong>', '<a target=\"_blank\" rel=\"nofollow\" href=\"https://matomo.org/recommends/premium-plugins/\"><strong>', '</strong></a>')|raw }}</p>
        {% endif %}
    </div>

    <span id=\"piwik-worth\">{{ 'CoreHome_SupportUsOn'|translate }}</span>

    <ul class=\"browser-default\">
        <li><a href=\"https://www.patreon.com/matomo\" target=\"_blank\" rel=\"noreferrer noopener\">Patreon</a></li>
        <li><a href=\"https://ko-fi.com/matomo\" target=\"_blank\" rel=\"noreferrer noopener\">Ko-fi</a></li>
        <li><a href=\"https://liberapay.com/Matomo\" target=\"_blank\" rel=\"noreferrer noopener\">Liberapay</a></li>
        <li><a href=\"https://opencollective.com/matomo-analytics\" target=\"_blank\" rel=\"noreferrer noopener\">Open Collective</a></li>
        <li><a href=\"https://www.paypal.com/donate/?cmd=_s-xclick&hosted_button_id=RPL23NJURMTFA\" target=\"_blank\" rel=\"noreferrer noopener\">PayPal</a></li>
    </ul>

    <p style=\"margin-top: 1em;\">
        {{ 'CoreHome_YourDonationWillHelp'|translate }}
        <br><br>
        <strong>{{ 'CoreHome_ThanksFromAllOfUs'|translate }}</strong>
    </p>

    {% if footerMessage is defined %}
        <div class=\"form-description\">
            {{ footerMessage }}
        </div>
    {% endif %}
</div>
<script type=\"text/javascript\">
\$(document).ready(function () {
    // Note: this will cause problems if more than one donate form is on the page
    \$('.piwik-donate-slider').each(function () {
        \$(this).trigger('piwik:changePosition', {position: 1});
    });
});
</script>
", "@CoreHome/_donate.twig", "/var/www/cse135.monster/public_html/matomo/plugins/CoreHome/templates/_donate.twig");
    }
}
