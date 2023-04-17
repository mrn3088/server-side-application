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

/* @LanguagesManager/getLanguagesSelector.twig */
class __TwigTemplate_cf96ee0450bf7c6d006ecbb412835288 extends Template
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
        echo "<div class=\"languageSelection\"
     ng-cloak
     menu-title=\"";
        // line 3
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["currentLanguageName"]) || array_key_exists("currentLanguageName", $context) ? $context["currentLanguageName"] : (function () { throw new RuntimeError('Variable "currentLanguageName" does not exist.', 3, $this->source); })()), "html_attr");
        echo "\"
     piwik-menudropdown>
    <a class=\"item\" target=\"_blank\" rel=\"noreferrer noopener\"
        href=\"https://matomo.org/translations/\">";
        // line 6
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("LanguagesManager_AboutPiwikTranslations"), "html", null, true);
        echo "</a>
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) || array_key_exists("languages", $context) ? $context["languages"] : (function () { throw new RuntimeError('Variable "languages" does not exist.', 7, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 8
            echo "        <a class=\"item ";
            if ((twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 8) == (isset($context["currentLanguageCode"]) || array_key_exists("currentLanguageCode", $context) ? $context["currentLanguageCode"] : (function () { throw new RuntimeError('Variable "currentLanguageCode" does not exist.', 8, $this->source); })()))) {
                echo "active";
            }
            echo "\"
           value=\"";
            // line 9
            echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 9), "html_attr");
            echo "\"
           title=\"";
            // line 10
            echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 10), "html_attr");
            echo " (";
            echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["language"], "english_name", [], "any", false, false, false, 10), "html_attr");
            echo ")\">";
            echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 10), "html", null, true);
            echo "</a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "
    <form action=\"index.php?module=LanguagesManager&amp;action=saveLanguage\" method=\"post\">
        <input type=\"hidden\" name=\"language\" id=\"language\">
        <input type=\"hidden\" name=\"nonce\" id=\"nonce\" value=\"";
        // line 15
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["nonce"]) || array_key_exists("nonce", $context) ? $context["nonce"] : (function () { throw new RuntimeError('Variable "nonce" does not exist.', 15, $this->source); })()), "html_attr");
        echo "\">
        ";
        // line 17
        echo "        ";
        if (array_key_exists("token_auth", $context)) {
            echo "<input type=\"hidden\" name=\"token_auth\" value=\"";
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["token_auth"]) || array_key_exists("token_auth", $context) ? $context["token_auth"] : (function () { throw new RuntimeError('Variable "token_auth" does not exist.', 17, $this->source); })()), "html_attr");
            echo "\"/>";
        }
        // line 18
        echo "    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "@LanguagesManager/getLanguagesSelector.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 18,  87 => 17,  83 => 15,  78 => 12,  66 => 10,  62 => 9,  55 => 8,  51 => 7,  47 => 6,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"languageSelection\"
     ng-cloak
     menu-title=\"{{ currentLanguageName|e('html_attr') }}\"
     piwik-menudropdown>
    <a class=\"item\" target=\"_blank\" rel=\"noreferrer noopener\"
        href=\"https://matomo.org/translations/\">{{ 'LanguagesManager_AboutPiwikTranslations'|translate }}</a>
    {% for language in languages %}
        <a class=\"item {% if language.code == currentLanguageCode %}active{% endif %}\"
           value=\"{{ language.code|e('html_attr') }}\"
           title=\"{{ language.name|e('html_attr') }} ({{ language.english_name|e('html_attr') }})\">{{ language.name }}</a>
    {% endfor %}

    <form action=\"index.php?module=LanguagesManager&amp;action=saveLanguage\" method=\"post\">
        <input type=\"hidden\" name=\"language\" id=\"language\">
        <input type=\"hidden\" name=\"nonce\" id=\"nonce\" value=\"{{ nonce|e('html_attr') }}\">
        {# During installation token_auth is not set #}
        {% if token_auth is defined %}<input type=\"hidden\" name=\"token_auth\" value=\"{{ token_auth|e('html_attr') }}\"/>{% endif %}
    </form>
</div>
", "@LanguagesManager/getLanguagesSelector.twig", "/var/www/cse135.monster/public_html/matomo/plugins/LanguagesManager/templates/getLanguagesSelector.twig");
    }
}
