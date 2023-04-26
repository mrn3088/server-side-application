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

/* @Tour/engagement.twig */
class __TwigTemplate_37f3a04b5bf73030dc60246fcd85e7a8 extends Template
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
        echo "<div class=\"widgetBody tourEngagement\">
    <p aria-hidden=\"true\">
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, (isset($context["level"]) || array_key_exists("level", $context) ? $context["level"] : (function () { throw new RuntimeError('Variable "level" does not exist.', 3, $this->source); })()), "numLevelsTotal", [], "any", false, false, false, 3)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 4
            echo "        <span class=\"icon-star ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["level"]) || array_key_exists("level", $context) ? $context["level"] : (function () { throw new RuntimeError('Variable "level" does not exist.', 4, $this->source); })()), "currentLevel", [], "any", false, false, false, 4) >= $context["i"])) {
                echo "successStar";
            } else {
                echo "upgradeStar";
            }
            echo "\"></span>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "    </p>

    ";
        // line 8
        if ((isset($context["isCompleted"]) || array_key_exists("isCompleted", $context) ? $context["isCompleted"] : (function () { throw new RuntimeError('Variable "isCompleted" does not exist.', 8, $this->source); })())) {
            // line 9
            echo "       <p><strong class=\"completed\">";
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Tour_CompletionTitle"), "html", null, true);
            echo "</strong>
           ";
            // line 10
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Tour_CompletionMessage"), "html", null, true);
            echo "
            <br />
            <br />
           ";
            // line 13
            echo $this->env->getFilter('translate')->getCallable()("Tour_YouCanCallYourselfExpert", "<strong class=\"successStar\">", "</strong>");
            echo "<br /><br />
           ";
            // line 14
            echo $this->env->getFilter('translate')->getCallable()("Tour_ShareYourAchievementOn", (((("<a target=\"_blank\" rel=\"noreferrer noopener\" href=\"http://twitter.com/share?text=" . \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Tour_ShareAllChallengesCompleted", twig_get_attribute($this->env, $this->source, (isset($context["level"]) || array_key_exists("level", $context) ? $context["level"] : (function () { throw new RuntimeError('Variable "level" does not exist.', 14, $this->source); })()), "currentLevelName", [], "any", false, false, false, 14)), "url")) . "&url=") . \Piwik\piwik_escape_filter($this->env, "https://matomo.org", "url")) . "\">Twitter</a>"));
            echo "
       </p>
    ";
        } else {
            // line 17
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["level"]) || array_key_exists("level", $context) ? $context["level"] : (function () { throw new RuntimeError('Variable "level" does not exist.', 17, $this->source); })()), "description", [], "any", false, false, false, 17)) {
                echo "<p>";
                echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["level"]) || array_key_exists("level", $context) ? $context["level"] : (function () { throw new RuntimeError('Variable "level" does not exist.', 17, $this->source); })()), "description", [], "any", false, false, false, 17), "html", null, true);
                echo "</p>";
            }
            // line 18
            echo "
        <p>
            ";
            // line 20
            echo $this->env->getFilter('translate')->getCallable()("Tour_StatusLevel", (("<strong>" . twig_get_attribute($this->env, $this->source, (isset($context["level"]) || array_key_exists("level", $context) ? $context["level"] : (function () { throw new RuntimeError('Variable "level" does not exist.', 20, $this->source); })()), "currentLevelName", [], "any", false, false, false, 20)) . "</strong>"), twig_get_attribute($this->env, $this->source, (isset($context["level"]) || array_key_exists("level", $context) ? $context["level"] : (function () { throw new RuntimeError('Variable "level" does not exist.', 20, $this->source); })()), "challengesNeededForNextLevel", [], "any", false, false, false, 20), (("<strong>" . twig_get_attribute($this->env, $this->source, (isset($context["level"]) || array_key_exists("level", $context) ? $context["level"] : (function () { throw new RuntimeError('Variable "level" does not exist.', 20, $this->source); })()), "nextLevelName", [], "any", false, false, false, 20)) . "</strong>"));
            echo "
        </p>

        <ul>
            ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["challenges"]) || array_key_exists("challenges", $context) ? $context["challenges"] : (function () { throw new RuntimeError('Variable "challenges" does not exist.', 24, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["challenge"]) {
                // line 25
                echo "                <li class=\"tourChallenge ";
                echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["challenge"], "id", [], "any", false, false, false, 25), "html_attr");
                echo "\" title=\"";
                echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["challenge"], "description", [], "any", false, false, false, 25), "html_attr");
                echo "\">";
                // line 26
                if ((twig_get_attribute($this->env, $this->source, $context["challenge"], "isCompleted", [], "any", false, false, false, 26) || twig_get_attribute($this->env, $this->source, $context["challenge"], "isSkipped", [], "any", false, false, false, 26))) {
                    // line 27
                    echo "                        <span class=\"icon-ok\" title=\"";
                    echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Tour_ChallengeCompleted"), "html_attr");
                    echo "\"></span>
                    ";
                } else {
                    // line 29
                    echo "                        <a href=\"javascript:void 0;\" onclick=\"tourEngagement.skipChallenge('";
                    echo \Piwik\piwik_escape_filter($this->env, \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["challenge"], "id", [], "any", false, false, false, 29), "js"), "html", null, true);
                    echo "')\" title=\"";
                    echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Tour_SkipThisChallenge"), "html_attr");
                    echo "\"><span class=\"icon-hide\"></span></a>
                    ";
                }
                // line 31
                echo "                    ";
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["challenge"], "url", [], "any", false, false, false, 31))) {
                    // line 32
                    echo "                        <a href=\"";
                    echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('safelink')->getCallable()(twig_get_attribute($this->env, $this->source, $context["challenge"], "url", [], "any", false, false, false, 32)), "html_attr");
                    echo "\" target=\"_blank\" rel=\"noreferrer noopener\">";
                    echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["challenge"], "name", [], "any", false, false, false, 32), "html", null, true);
                    echo "</a>
                    ";
                } else {
                    // line 34
                    echo "                        ";
                    echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["challenge"], "name", [], "any", false, false, false, 34), "html", null, true);
                    echo "
                    ";
                }
                // line 36
                echo "                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['challenge'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "        </ul>
        <hr />
        <p style=\"text-align: center;padding-bottom: 0;\">
        ";
            // line 41
            if ( !(null === (isset($context["previousPage"]) || array_key_exists("previousPage", $context) ? $context["previousPage"] : (function () { throw new RuntimeError('Variable "previousPage" does not exist.', 41, $this->source); })()))) {
                // line 42
                echo "            <a class=\"previousChallenges\" onclick=\"tourEngagement.goToPage(";
                echo \Piwik\piwik_escape_filter($this->env, \Piwik\piwik_escape_filter($this->env, (isset($context["previousPage"]) || array_key_exists("previousPage", $context) ? $context["previousPage"] : (function () { throw new RuntimeError('Variable "previousPage" does not exist.', 42, $this->source); })()), "js"), "html", null, true);
                echo ")\">&lsaquo; ";
                if ((isset($context["nextPage"]) || array_key_exists("nextPage", $context) ? $context["nextPage"] : (function () { throw new RuntimeError('Variable "nextPage" does not exist.', 42, $this->source); })())) {
                    echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_Previous"), "html", null, true);
                } else {
                    echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Tour_PreviousChallenges"), "html", null, true);
                }
                echo "</a>
        ";
            }
            // line 44
            echo "        ";
            if ((isset($context["nextPage"]) || array_key_exists("nextPage", $context) ? $context["nextPage"] : (function () { throw new RuntimeError('Variable "nextPage" does not exist.', 44, $this->source); })())) {
                // line 45
                echo "            ";
                if ( !(null === (isset($context["previousPage"]) || array_key_exists("previousPage", $context) ? $context["previousPage"] : (function () { throw new RuntimeError('Variable "previousPage" does not exist.', 45, $this->source); })()))) {
                    echo " | ";
                }
                // line 46
                echo "            <a class=\"nextChallenges\" onclick=\"tourEngagement.goToPage(";
                echo \Piwik\piwik_escape_filter($this->env, \Piwik\piwik_escape_filter($this->env, (isset($context["nextPage"]) || array_key_exists("nextPage", $context) ? $context["nextPage"] : (function () { throw new RuntimeError('Variable "nextPage" does not exist.', 46, $this->source); })()), "js"), "html", null, true);
                echo ")\">";
                if ( !(null === (isset($context["previousPage"]) || array_key_exists("previousPage", $context) ? $context["previousPage"] : (function () { throw new RuntimeError('Variable "previousPage" does not exist.', 46, $this->source); })()))) {
                    echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_Next"), "html", null, true);
                } else {
                    echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Tour_NextChallenges"), "html", null, true);
                }
                echo " &rsaquo;</a>
        ";
            }
            // line 48
            echo "        </p>
        <hr />
        <p class=\"tourSuperUserNote\">";
            // line 50
            echo $this->env->getFilter('translate')->getCallable()("Tour_OnlyVisibleToSuperUser", "<a href=\"https://matomo.org/faq/general/faq_35/\" target=\"_blank\" rel=\"noreferrer noopener\">", "</a>");
            echo "</p>
        <script>
            jQuery(window).off('focus.tourEngagement').on('focus.tourEngagement', function () {
                if (jQuery('#widgetTourgetEngagement').length) {
                    tourEngagement.goToPage(";
            // line 54
            echo \Piwik\piwik_escape_filter($this->env, \Piwik\piwik_escape_filter($this->env, (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 54, $this->source); })()), "js"), "html", null, true);
            echo ");
                }
            });
        </script>
    ";
        }
        // line 59
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "@Tour/engagement.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 59,  203 => 54,  196 => 50,  192 => 48,  180 => 46,  175 => 45,  172 => 44,  160 => 42,  158 => 41,  153 => 38,  146 => 36,  140 => 34,  132 => 32,  129 => 31,  121 => 29,  115 => 27,  113 => 26,  107 => 25,  103 => 24,  96 => 20,  92 => 18,  85 => 17,  79 => 14,  75 => 13,  69 => 10,  64 => 9,  62 => 8,  58 => 6,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"widgetBody tourEngagement\">
    <p aria-hidden=\"true\">
    {% for i in 1..level.numLevelsTotal %}
        <span class=\"icon-star {% if level.currentLevel >= i %}successStar{% else %}upgradeStar{% endif %}\"></span>
    {% endfor %}
    </p>

    {% if isCompleted %}
       <p><strong class=\"completed\">{{ 'Tour_CompletionTitle'|translate }}</strong>
           {{ 'Tour_CompletionMessage'|translate }}
            <br />
            <br />
           {{ 'Tour_YouCanCallYourselfExpert'|translate('<strong class=\"successStar\">', '</strong>')|raw }}<br /><br />
           {{ 'Tour_ShareYourAchievementOn'|translate('<a target=\"_blank\" rel=\"noreferrer noopener\" href=\"http://twitter.com/share?text='~ \"Tour_ShareAllChallengesCompleted\"|translate(level.currentLevelName)|e('url') ~ '&url=' ~ \"https://matomo.org\"|e('url') ~ '\">Twitter</a>')|raw }}
       </p>
    {% else %}
        {% if level.description %}<p>{{ level.description }}</p>{% endif %}

        <p>
            {{ 'Tour_StatusLevel'|translate('<strong>'~ level.currentLevelName ~'</strong>', level.challengesNeededForNextLevel, '<strong>'~ level.nextLevelName ~'</strong>')|raw }}
        </p>

        <ul>
            {% for challenge in challenges %}
                <li class=\"tourChallenge {{ challenge.id|e('html_attr') }}\" title=\"{{ challenge.description|e('html_attr') }}\">
                    {%- if challenge.isCompleted or challenge.isSkipped %}
                        <span class=\"icon-ok\" title=\"{{ 'Tour_ChallengeCompleted'|translate|e('html_attr') }}\"></span>
                    {% else %}
                        <a href=\"javascript:void 0;\" onclick=\"tourEngagement.skipChallenge('{{ challenge.id|e('js') }}')\" title=\"{{ 'Tour_SkipThisChallenge'|translate|e('html_attr') }}\"><span class=\"icon-hide\"></span></a>
                    {% endif %}
                    {% if challenge.url is not empty %}
                        <a href=\"{{ challenge.url|safelink|e('html_attr') }}\" target=\"_blank\" rel=\"noreferrer noopener\">{{ challenge.name }}</a>
                    {% else %}
                        {{ challenge.name }}
                    {% endif %}
                </li>
            {% endfor %}
        </ul>
        <hr />
        <p style=\"text-align: center;padding-bottom: 0;\">
        {% if previousPage is not null %}
            <a class=\"previousChallenges\" onclick=\"tourEngagement.goToPage({{ previousPage|e('js') }})\">&lsaquo; {% if nextPage %}{{ 'General_Previous'|translate }}{% else %}{{ 'Tour_PreviousChallenges'|translate }}{% endif %}</a>
        {% endif %}
        {% if nextPage %}
            {% if previousPage is not null %} | {% endif %}
            <a class=\"nextChallenges\" onclick=\"tourEngagement.goToPage({{ nextPage|e('js') }})\">{% if previousPage is not null %}{{ 'General_Next'|translate }}{% else %}{{ 'Tour_NextChallenges'|translate }}{% endif %} &rsaquo;</a>
        {% endif %}
        </p>
        <hr />
        <p class=\"tourSuperUserNote\">{{ 'Tour_OnlyVisibleToSuperUser'|translate('<a href=\"https://matomo.org/faq/general/faq_35/\" target=\"_blank\" rel=\"noreferrer noopener\">', '</a>')|raw }}</p>
        <script>
            jQuery(window).off('focus.tourEngagement').on('focus.tourEngagement', function () {
                if (jQuery('#widgetTourgetEngagement').length) {
                    tourEngagement.goToPage({{ currentPage|e('js') }});
                }
            });
        </script>
    {% endif %}

</div>
", "@Tour/engagement.twig", "/var/www/cse135.monster/public_html/matomo/plugins/Tour/templates/engagement.twig");
    }
}
