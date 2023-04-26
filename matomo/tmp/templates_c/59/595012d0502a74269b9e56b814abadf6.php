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

/* @Feedback/index.twig */
class __TwigTemplate_9d4cfc9ba0872b0b5245243624d85389 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "dashboard.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $context["test_piwikUrl"] = "http://demo.matomo.org/";
        // line 4
        ob_start();
        echo \Piwik\piwik_escape_filter($this->env, (((isset($context["piwikUrl"]) || array_key_exists("piwikUrl", $context) ? $context["piwikUrl"] : (function () { throw new RuntimeError('Variable "piwikUrl" does not exist.', 4, $this->source); })()) == "http://demo.matomo.org/") || ((isset($context["piwikUrl"]) || array_key_exists("piwikUrl", $context) ? $context["piwikUrl"] : (function () { throw new RuntimeError('Variable "piwikUrl" does not exist.', 4, $this->source); })()) == "https://demo.matomo.org/")), "html", null, true);
        $context["isPiwikDemo"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 6
        ob_start();
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_AboutPiwikX", (isset($context["piwikVersion"]) || array_key_exists("piwikVersion", $context) ? $context["piwikVersion"] : (function () { throw new RuntimeError('Variable "piwikVersion" does not exist.', 6, $this->source); })())), "html", null, true);
        $context["headline"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        $this->parent = $this->loadTemplate("dashboard.twig", "@Feedback/index.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "
    <div id=\"feedback-faq\" class=\"admin\">
        <div piwik-content-block content-title=\"";
        // line 11
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Feedback_HowCanWeHelp"), "html_attr");
        echo "\" class=\"feedback-help-resources\">
            <form target=\"_blank\" method=\"GET\" action=\"https://matomo.org/\">
                <div class=\"search-matomo-form z-depth-1\">
                    <div class=\"search-field\">
                        <span class=\"icon-search\"></span>
                        <input type=\"text\" placeholder=\"";
        // line 16
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Feedback_SearchHelpResources"), "html_attr");
        echo "\" name=\"s\"/>
                    </div>
                    <div class=\"search-button\">
                        <input type=\"submit\" value=\"Search\" class=\"btn hide-on-small-only\"/>
                    </div>
                </div>
            </form>

            <h4>";
        // line 24
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Feedback_FrequentlyAskedQuestions"), "html", null, true);
        echo "</h4>
            ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["popularHelpTopics"]) || array_key_exists("popularHelpTopics", $context) ? $context["popularHelpTopics"] : (function () { throw new RuntimeError('Variable "popularHelpTopics" does not exist.', 25, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["helpTopic"]) {
            // line 26
            echo "                <p> &bull;  <a rel=\"noreferrer noopener\" target=\"_blank\" href=\"";
            echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["helpTopic"], "url", [], "any", false, false, false, 26), "html_attr");
            echo "?mtm_campaign=App_Help&mtm_source=Matomo_App&mtm_keyword=UserGuides\">";
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()(twig_get_attribute($this->env, $this->source, $context["helpTopic"], "title", [], "any", false, false, false, 26)), "html", null, true);
            echo "</a></p>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['helpTopic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "
            <h4>";
        // line 29
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Feedback_MatomoHelpCentre"), "html", null, true);
        echo "</h4>
            <p> &bull; <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://matomo.org/guides/?mtm_campaign=App_Help&mtm_source=Matomo_App&mtm_keyword=docs\">";
        // line 30
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Feedback_KnowledgeBase"), "html", null, true);
        echo "</a> - ";
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Feedback_KnowledgeBaseDescription"), "html", null, true);
        echo "</p>
            <p> &bull; <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://matomo.org/web-analytics-training/?mtm_campaign=App_Help&mtm_source=Matomo_App&mtm_keyword=docs\">";
        // line 31
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Feedback_MatomoVideoTraining"), "html", null, true);
        echo "</a> - ";
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Feedback_MatomoVideoTrainingDescription"), "html", null, true);
        echo "</p>
            <p> &bull; <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://matomo.org/tag-manager-training/?mtm_campaign=App_Help&mtm_source=Matomo_App&mtm_keyword=docs\">";
        // line 32
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Feedback_MtmVideoTraining"), "html", null, true);
        echo "</a> - ";
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Feedback_MtmVideoTrainingDescription"), "html", null, true);
        echo "</p>
            <p> &bull; <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://forum.matomo.org/\">";
        // line 33
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Feedback_CommunityForum"), "html", null, true);
        echo "</a> - ";
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Feedback_CommunityForumDescription"), "html", null, true);
        echo "</p>
            <p> &bull; <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"";
        // line 34
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFunction('linkTo')->getCallable()(["module" => "API", "action" => "glossary"]), "html", null, true);
        echo "&mtm_campaign=App_Help&mtm_source=Matomo_App&mtm_keyword=glossary\">";
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("API_Glossary"), "html", null, true);
        echo "</a> - ";
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Feedback_GlossaryDescription"), "html", null, true);
        echo "</p>

            <h4>";
        // line 36
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Feedback_ProfessionalHelp"), "html", null, true);
        echo "</h4>
            <p>";
        // line 37
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Feedback_ProfessionalServicesIntro"), "html", null, true);
        echo "</p>

            <p>";
        // line 39
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Feedback_ProfessionalServicesOfferIntro"), "html", null, true);
        echo "</p>
            <p> &bull; ";
        // line 40
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Feedback_ProfessionalServicesDedicatedSupport"), "html", null, true);
        echo "</p>
            <p> &bull; ";
        // line 41
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Feedback_ProfessionalServicesOnboarding"), "html", null, true);
        echo "</p>
            <p> &bull; ";
        // line 42
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Feedback_ProfessionalServicesTraining"), "html", null, true);
        echo "</p>
            <p> &bull; ";
        // line 43
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Feedback_ProfessionalServicesSupport"), "html", null, true);
        echo "</p>
            <p> &bull; ";
        // line 44
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Feedback_ProfessionalServicesEmailAlerts"), "html", null, true);
        echo "</p>

            <form target=\"_blank\" action=\"https://matomo.org/support-plans/\">
                <input type=\"hidden\" name=\"pk_campaign\" value=\"App_Help\">
                <input type=\"hidden\" name=\"pk_source\" value=\"Matomo_App\">
                <input type=\"hidden\" name=\"pk_medium\" value=\"App_ContactUs_button\">
                <br />
                <input type=\"submit\" class=\"btn\" value=\"";
        // line 51
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_MoreDetails"), "html", null, true);
        echo "\">
            </form>
        </div>

        <div piwik-content-block
             content-title=\"";
        // line 56
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["headline"]) || array_key_exists("headline", $context) ? $context["headline"] : (function () { throw new RuntimeError('Variable "headline" does not exist.', 56, $this->source); })()), "html_attr");
        echo "\"
             feature=\"";
        // line 57
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_Help"), "html_attr");
        echo "\">
            <p>";
        // line 58
        echo $this->env->getFilter('translate')->getCallable()("General_MatomoIsACollaborativeProjectYouCanContributeAndDonateNextRelease", "<a target='_blank' rel='noreferrer noopener' href='https://matomo.org'>", "</a>", "<a target='_blank' rel='noreferrer noopener' href='https://matomo.org/get-involved/'>", "</a>", (("<a href='" . $this->env->getFunction('linkTo')->getCallable()(["module" => "CoreAdminHome", "action" => "home"])) . "'>"), "</a>", "<a target='_blank' rel='noreferrer noopener' href='https://matomo.org/team/'>", "</a>");
        // line 67
        echo "
            </p>
        </div>

        <div piwik-content-block content-title=\"Premium products\">
            <p>Grow your business, understand your audience better and increase your sales and conversions with a premium plugin:
            <p> &bull;  <a rel='noreferrer noopener' target='_blank' href='https://matomo.org/recommends/users-flow/?mtm_campaign=App_Help&mtm_source=Matomo_App&mtm_keyword=UserGuides'>Users Flow</a>: a visual representation of the most popular paths your users take through your website or app.</p>
            <p> &bull;  <a rel='noreferrer noopener' target='_blank' href='https://matomo.org/recommends/ab-testing-learn-more/?mtm_campaign=App_Help&mtm_source=Matomo_App&mtm_keyword=UserGuides'>A/B Testing</a>: compare different versions of your websites or apps and detect the winning variation.</p>
            <p> &bull;  <a rel='noreferrer noopener' target='_blank' href='https://matomo.org/recommends/conversion-funnels?mtm_campaign=App_Help&mtm_source=Matomo_App&mtm_keyword=UserGuides'>Funnels</a>: identify and understand where your visitors drop off in your conversion funnels.</p>
            <p> &bull;  <a rel='noreferrer noopener' target='_blank' href='https://matomo.org/recommends/form-analytics/?mtm_campaign=App_Help&mtm_source=Matomo_App&mtm_keyword=UserGuides'>Form Analytics</a>: increase conversions and get better leads from your website forms.</p>
            <p> &bull;  <a rel='noreferrer noopener' target='_blank' href='https://matomo.org/recommends/media-analytics-website/?mtm_campaign=App_Help&mtm_source=Matomo_App&mtm_keyword=UserGuides'>Video and Audio Analytics</a>: powerful insights into how your audience watches your videos and listens to your audio.</p>
            <p> &bull;  <a rel='noreferrer noopener' target='_blank' href='https://matomo.org/recommends/roll-up-reporting/?mtm_campaign=App_Help&mtm_source=Matomo_App&mtm_keyword=UserGuides'>Roll-Up Reporting</a>: aggregate data from multiple websites, apps and shops into a Roll-Up site to gain new insights.</p>
            <p> &bull;  <a rel='noreferrer noopener' target='_blank' href='https://matomo.org/recommends/search-keywords-performance/?mtm_campaign=App_Help&mtm_source=Matomo_App&mtm_keyword=UserGuides'>Search Keywords Performance</a>: all keywords searched by your users on Google+Bing+Yahoo into your Matomo reports.</p>
            <p> &bull;  <a rel='noreferrer noopener' target='_blank' href='https://matomo.org/recommends/activity-log/?mtm_campaign=App_Help&mtm_source=Matomo_App&mtm_keyword=UserGuides'>Audit log</a>: better security and problem diagnostic with a detailed audit log of Matomo user activities.</p>
            <p> &bull;  <a rel='noreferrer noopener' target='_blank' href='https://matomo.org/recommends/white-label/?mtm_campaign=App_Help&mtm_source=Matomo_App&mtm_keyword=UserGuides'>White Label</a>: give your clients access to their analytics reports where all Matomo-branded widgets are removed.</p>
            <p> &bull;  <strong><a rel='noreferrer noopener' target='_blank' href='https://matomo.org/recommends/premium-plugins?mtm_campaign=App_Help&mtm_source=Matomo_App&mtm_keyword=UserGuides'>All premium plugins.</a></strong></p>
        </div>

        <div piwik-content-block content-title=\"";
        // line 85
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Feedback_DoYouHaveBugReportOrFeatureRequest"), "html_attr");
        echo "\">
            <p>";
        // line 86
        echo $this->env->getFilter('translate')->getCallable()("Feedback_HowToCreateTicket", "<a target='_blank' rel='noreferrer noopener' href='https://developer.matomo.org/guides/core-team-workflow#submitting-a-bug-report'>", "</a>", "<a target='_blank' rel='noreferrer noopener' href='https://developer.matomo.org/guides/core-team-workflow#submitting-a-feature-request'>", "</a>", "<a target='_blank' rel='noreferrer noopener' href='https://github.com/matomo-org/matomo/issues'>", "</a>", "<a target='_blank' rel='noreferrer noopener' href='https://github.com/matomo-org/matomo/issues/new'>", "</a>");
        // line 95
        echo "</p>
        </div>

        <div class=\"footer\">
            <ul class=\"social\">
                <li>
                    <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://matomo.org/newsletter/\"><img class=\"icon\" src=\"plugins/Feedback/images/newsletter.svg\"></a>
                    <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://matomo.org/newsletter/\">Newsletter</a>
                </li>
                <li>
                    <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://www.facebook.com/Matomo.org\"><img class=\"icon\" src=\"plugins/Morpheus/icons/dist/socials/facebook.com.png\"></a>
                    <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://www.facebook.com/Matomo.org\">Facebook</a>
                </li>
                <li>
                    <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://twitter.com/matomo_org\"><img class=\"icon\" src=\"plugins/Morpheus/icons/dist/socials/twitter.com.png\"></a>
                    <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://twitter.com/matomo_org\">Twitter</a>
                </li>
                <li>
                    <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://www.linkedin.com/groups/867857/\"><img class=\"icon\" src=\"plugins/Morpheus/icons/dist/socials/linkedin.com.png\"></a>
                    <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://www.linkedin.com/groups/867857/\">Linkedin</a>
                </li>
                <li>
                    <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://github.com/matomo-org/matomo\"><img class=\"icon\" src=\"plugins/Morpheus/icons/dist/socials/github.com.png\"></a>
                    <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://github.com/matomo-org/matomo\">GitHub</a>
                </li>
            </ul>
            <ul class=\"menu\">
                <li><a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://matomo.org/blog/\">Blog</a></li>
                <li><a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://matomo.org/get-involved/\">Get involved</a></li>
                <li><a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://developer.matomo.org\">Developers</a></li>
                <li><a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://plugins.matomo.org\">Marketplace</a></li>
                <li><a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://matomo.org/thank-you-all/\">Credits</a></li>
            </ul>
            <p class=\"claim\"><small>";
        // line 128
        echo $this->env->getFilter('translate')->getCallable()("Feedback_PrivacyClaim", "<a target='_blank' rel='noreferrer noopener' href='https://matomo.org/privacy/'>", "</a>");
        // line 131
        echo "</small></p>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@Feedback/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 131,  261 => 128,  226 => 95,  224 => 86,  220 => 85,  200 => 67,  198 => 58,  194 => 57,  190 => 56,  182 => 51,  172 => 44,  168 => 43,  164 => 42,  160 => 41,  156 => 40,  152 => 39,  147 => 37,  143 => 36,  134 => 34,  128 => 33,  122 => 32,  116 => 31,  110 => 30,  106 => 29,  103 => 28,  92 => 26,  88 => 25,  84 => 24,  73 => 16,  65 => 11,  61 => 9,  57 => 8,  52 => 1,  48 => 6,  44 => 4,  42 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'dashboard.twig' %}

{% set test_piwikUrl='http://demo.matomo.org/' %}
{% set isPiwikDemo %}{{ piwikUrl == 'http://demo.matomo.org/' or piwikUrl == 'https://demo.matomo.org/'}}{% endset %}

{% set headline %}{{ 'General_AboutPiwikX'|translate(piwikVersion) }}{% endset %}

{% block content %}

    <div id=\"feedback-faq\" class=\"admin\">
        <div piwik-content-block content-title=\"{{ \"Feedback_HowCanWeHelp\"|translate|e('html_attr') }}\" class=\"feedback-help-resources\">
            <form target=\"_blank\" method=\"GET\" action=\"https://matomo.org/\">
                <div class=\"search-matomo-form z-depth-1\">
                    <div class=\"search-field\">
                        <span class=\"icon-search\"></span>
                        <input type=\"text\" placeholder=\"{{'Feedback_SearchHelpResources'|translate|e('html_attr')}}\" name=\"s\"/>
                    </div>
                    <div class=\"search-button\">
                        <input type=\"submit\" value=\"Search\" class=\"btn hide-on-small-only\"/>
                    </div>
                </div>
            </form>

            <h4>{{'Feedback_FrequentlyAskedQuestions'|translate}}</h4>
            {% for helpTopic in popularHelpTopics %}
                <p> &bull;  <a rel=\"noreferrer noopener\" target=\"_blank\" href=\"{{helpTopic.url|e('html_attr')}}?mtm_campaign=App_Help&mtm_source=Matomo_App&mtm_keyword=UserGuides\">{{helpTopic.title|translate}}</a></p>
            {% endfor %}

            <h4>{{ 'Feedback_MatomoHelpCentre'|translate }}</h4>
            <p> &bull; <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://matomo.org/guides/?mtm_campaign=App_Help&mtm_source=Matomo_App&mtm_keyword=docs\">{{ 'Feedback_KnowledgeBase'|translate }}</a> - {{ 'Feedback_KnowledgeBaseDescription'|translate }}</p>
            <p> &bull; <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://matomo.org/web-analytics-training/?mtm_campaign=App_Help&mtm_source=Matomo_App&mtm_keyword=docs\">{{ 'Feedback_MatomoVideoTraining'|translate }}</a> - {{ 'Feedback_MatomoVideoTrainingDescription'|translate }}</p>
            <p> &bull; <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://matomo.org/tag-manager-training/?mtm_campaign=App_Help&mtm_source=Matomo_App&mtm_keyword=docs\">{{ 'Feedback_MtmVideoTraining'|translate }}</a> - {{ 'Feedback_MtmVideoTrainingDescription'|translate }}</p>
            <p> &bull; <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://forum.matomo.org/\">{{ 'Feedback_CommunityForum'|translate }}</a> - {{ 'Feedback_CommunityForumDescription'|translate }}</p>
            <p> &bull; <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"{{ linkTo({'module':\"API\",'action':\"glossary\"}) }}&mtm_campaign=App_Help&mtm_source=Matomo_App&mtm_keyword=glossary\">{{ 'API_Glossary'|translate }}</a> - {{ 'Feedback_GlossaryDescription'|translate }}</p>

            <h4>{{ 'Feedback_ProfessionalHelp'|translate }}</h4>
            <p>{{ 'Feedback_ProfessionalServicesIntro'|translate }}</p>

            <p>{{ 'Feedback_ProfessionalServicesOfferIntro'|translate }}</p>
            <p> &bull; {{ 'Feedback_ProfessionalServicesDedicatedSupport'|translate }}</p>
            <p> &bull; {{ 'Feedback_ProfessionalServicesOnboarding'|translate }}</p>
            <p> &bull; {{ 'Feedback_ProfessionalServicesTraining'|translate }}</p>
            <p> &bull; {{ 'Feedback_ProfessionalServicesSupport'|translate }}</p>
            <p> &bull; {{ 'Feedback_ProfessionalServicesEmailAlerts'|translate }}</p>

            <form target=\"_blank\" action=\"https://matomo.org/support-plans/\">
                <input type=\"hidden\" name=\"pk_campaign\" value=\"App_Help\">
                <input type=\"hidden\" name=\"pk_source\" value=\"Matomo_App\">
                <input type=\"hidden\" name=\"pk_medium\" value=\"App_ContactUs_button\">
                <br />
                <input type=\"submit\" class=\"btn\" value=\"{{ 'General_MoreDetails'|translate }}\">
            </form>
        </div>

        <div piwik-content-block
             content-title=\"{{ headline|e('html_attr') }}\"
             feature=\"{{ 'General_Help'|translate|e('html_attr') }}\">
            <p>{{ 'General_MatomoIsACollaborativeProjectYouCanContributeAndDonateNextRelease'|translate(
                    \"<a target='_blank' rel='noreferrer noopener' href='https://matomo.org'>\",
                    \"</a>\",
                    \"<a target='_blank' rel='noreferrer noopener' href='https://matomo.org/get-involved/'>\",
                    \"</a>\",
                    \"<a href='\" ~ linkTo({'module':'CoreAdminHome', 'action': 'home'})~\"'>\",
                    \"</a>\",
                    \"<a target='_blank' rel='noreferrer noopener' href='https://matomo.org/team/'>\",
                    \"</a>\"
                )|raw }}
            </p>
        </div>

        <div piwik-content-block content-title=\"Premium products\">
            <p>Grow your business, understand your audience better and increase your sales and conversions with a premium plugin:
            <p> &bull;  <a rel='noreferrer noopener' target='_blank' href='https://matomo.org/recommends/users-flow/?mtm_campaign=App_Help&mtm_source=Matomo_App&mtm_keyword=UserGuides'>Users Flow</a>: a visual representation of the most popular paths your users take through your website or app.</p>
            <p> &bull;  <a rel='noreferrer noopener' target='_blank' href='https://matomo.org/recommends/ab-testing-learn-more/?mtm_campaign=App_Help&mtm_source=Matomo_App&mtm_keyword=UserGuides'>A/B Testing</a>: compare different versions of your websites or apps and detect the winning variation.</p>
            <p> &bull;  <a rel='noreferrer noopener' target='_blank' href='https://matomo.org/recommends/conversion-funnels?mtm_campaign=App_Help&mtm_source=Matomo_App&mtm_keyword=UserGuides'>Funnels</a>: identify and understand where your visitors drop off in your conversion funnels.</p>
            <p> &bull;  <a rel='noreferrer noopener' target='_blank' href='https://matomo.org/recommends/form-analytics/?mtm_campaign=App_Help&mtm_source=Matomo_App&mtm_keyword=UserGuides'>Form Analytics</a>: increase conversions and get better leads from your website forms.</p>
            <p> &bull;  <a rel='noreferrer noopener' target='_blank' href='https://matomo.org/recommends/media-analytics-website/?mtm_campaign=App_Help&mtm_source=Matomo_App&mtm_keyword=UserGuides'>Video and Audio Analytics</a>: powerful insights into how your audience watches your videos and listens to your audio.</p>
            <p> &bull;  <a rel='noreferrer noopener' target='_blank' href='https://matomo.org/recommends/roll-up-reporting/?mtm_campaign=App_Help&mtm_source=Matomo_App&mtm_keyword=UserGuides'>Roll-Up Reporting</a>: aggregate data from multiple websites, apps and shops into a Roll-Up site to gain new insights.</p>
            <p> &bull;  <a rel='noreferrer noopener' target='_blank' href='https://matomo.org/recommends/search-keywords-performance/?mtm_campaign=App_Help&mtm_source=Matomo_App&mtm_keyword=UserGuides'>Search Keywords Performance</a>: all keywords searched by your users on Google+Bing+Yahoo into your Matomo reports.</p>
            <p> &bull;  <a rel='noreferrer noopener' target='_blank' href='https://matomo.org/recommends/activity-log/?mtm_campaign=App_Help&mtm_source=Matomo_App&mtm_keyword=UserGuides'>Audit log</a>: better security and problem diagnostic with a detailed audit log of Matomo user activities.</p>
            <p> &bull;  <a rel='noreferrer noopener' target='_blank' href='https://matomo.org/recommends/white-label/?mtm_campaign=App_Help&mtm_source=Matomo_App&mtm_keyword=UserGuides'>White Label</a>: give your clients access to their analytics reports where all Matomo-branded widgets are removed.</p>
            <p> &bull;  <strong><a rel='noreferrer noopener' target='_blank' href='https://matomo.org/recommends/premium-plugins?mtm_campaign=App_Help&mtm_source=Matomo_App&mtm_keyword=UserGuides'>All premium plugins.</a></strong></p>
        </div>

        <div piwik-content-block content-title=\"{{ 'Feedback_DoYouHaveBugReportOrFeatureRequest'|translate|e('html_attr') }}\">
            <p>{{ 'Feedback_HowToCreateTicket'|translate(
            \"<a target='_blank' rel='noreferrer noopener' href='https://developer.matomo.org/guides/core-team-workflow#submitting-a-bug-report'>\",
            \"</a>\",
            \"<a target='_blank' rel='noreferrer noopener' href='https://developer.matomo.org/guides/core-team-workflow#submitting-a-feature-request'>\",
            \"</a>\",
            \"<a target='_blank' rel='noreferrer noopener' href='https://github.com/matomo-org/matomo/issues'>\",
            \"</a>\",
            \"<a target='_blank' rel='noreferrer noopener' href='https://github.com/matomo-org/matomo/issues/new'>\",
            \"</a>\"
            )|raw }}</p>
        </div>

        <div class=\"footer\">
            <ul class=\"social\">
                <li>
                    <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://matomo.org/newsletter/\"><img class=\"icon\" src=\"plugins/Feedback/images/newsletter.svg\"></a>
                    <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://matomo.org/newsletter/\">Newsletter</a>
                </li>
                <li>
                    <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://www.facebook.com/Matomo.org\"><img class=\"icon\" src=\"plugins/Morpheus/icons/dist/socials/facebook.com.png\"></a>
                    <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://www.facebook.com/Matomo.org\">Facebook</a>
                </li>
                <li>
                    <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://twitter.com/matomo_org\"><img class=\"icon\" src=\"plugins/Morpheus/icons/dist/socials/twitter.com.png\"></a>
                    <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://twitter.com/matomo_org\">Twitter</a>
                </li>
                <li>
                    <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://www.linkedin.com/groups/867857/\"><img class=\"icon\" src=\"plugins/Morpheus/icons/dist/socials/linkedin.com.png\"></a>
                    <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://www.linkedin.com/groups/867857/\">Linkedin</a>
                </li>
                <li>
                    <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://github.com/matomo-org/matomo\"><img class=\"icon\" src=\"plugins/Morpheus/icons/dist/socials/github.com.png\"></a>
                    <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://github.com/matomo-org/matomo\">GitHub</a>
                </li>
            </ul>
            <ul class=\"menu\">
                <li><a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://matomo.org/blog/\">Blog</a></li>
                <li><a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://matomo.org/get-involved/\">Get involved</a></li>
                <li><a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://developer.matomo.org\">Developers</a></li>
                <li><a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://plugins.matomo.org\">Marketplace</a></li>
                <li><a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://matomo.org/thank-you-all/\">Credits</a></li>
            </ul>
            <p class=\"claim\"><small>{{ 'Feedback_PrivacyClaim'|translate(
                    \"<a target='_blank' rel='noreferrer noopener' href='https://matomo.org/privacy/'>\",
                    \"</a>\"
                )|raw}}</small></p>
        </div>
    </div>
{% endblock %}
", "@Feedback/index.twig", "/var/www/cse135.monster/public_html/matomo/plugins/Feedback/templates/index.twig");
    }
}
