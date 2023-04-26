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

/* @SegmentEditor/_segmentSelector.twig */
class __TwigTemplate_310ffad6880f03e57fb23acd569ea18e extends Template
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
        echo "<div class=\"SegmentEditor\" style=\"display:none;\">
    <div class=\"segmentationContainer listHtml\" title=\"";
        // line 2
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SegmentEditor_ChooseASegment"), "html_attr");
        echo ". ";
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SegmentEditor_CurrentlySelectedSegment", (isset($context["segmentDescription"]) || array_key_exists("segmentDescription", $context) ? $context["segmentDescription"] : (function () { throw new RuntimeError('Variable "segmentDescription" does not exist.', 2, $this->source); })())), "html_attr");
        echo "\">
        <a class=\"title\" tabindex=\"4\"><span class=\"icon icon-segment\"></span><span class=\"segmentationTitle\"></span></a>
        <div class=\"dropdown dropdown-body\">
            <div class=\"segmentFilterContainer\">
                <input class=\"segmentFilter browser-default\" type=\"text\" tabindex=\"4\" value=\"";
        // line 6
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_Search"), "html", null, true);
        echo "\"/>
                <span></span>
            </div>
            <ul class=\"submenu\">
                <li>";
        // line 10
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SegmentEditor_SelectSegmentOfVisits"), "html", null, true);
        echo "
                    <div class=\"segmentList\">
                        <ul>
                        </ul>
                    </div>
                </li>
            </ul>

            ";
        // line 18
        if ((isset($context["authorizedToCreateSegments"]) || array_key_exists("authorizedToCreateSegments", $context) ? $context["authorizedToCreateSegments"] : (function () { throw new RuntimeError('Variable "authorizedToCreateSegments" does not exist.', 18, $this->source); })())) {
            // line 19
            echo "                <a tabindex=\"4\" class=\"add_new_segment btn\">";
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SegmentEditor_AddNewSegment"), "html", null, true);
            echo "</a>
            ";
        } else {
            // line 21
            echo "                <hr/>
                <ul class=\"submenu\">
                <li>
                    ";
            // line 24
            if ((isset($context["isUserAnonymous"]) || array_key_exists("isUserAnonymous", $context) ? $context["isUserAnonymous"] : (function () { throw new RuntimeError('Variable "isUserAnonymous" does not exist.', 24, $this->source); })())) {
                // line 25
                echo "                        <span class='youMustBeLoggedIn'>";
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SegmentEditor_YouMustBeLoggedInToCreateSegments"), "html", null, true);
                echo "
                        <br/>&rsaquo; <a href='index.php?module=";
                // line 26
                echo \Piwik\piwik_escape_filter($this->env, (isset($context["loginModule"]) || array_key_exists("loginModule", $context) ? $context["loginModule"] : (function () { throw new RuntimeError('Variable "loginModule" does not exist.', 26, $this->source); })()), "html", null, true);
                echo "'>";
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Login_LogIn"), "html", null, true);
                echo "</a> </span>
                    ";
            }
            // line 28
            echo "                </li>
                </ul>
                <br/><br/>
            ";
        }
        // line 32
        echo "        </div>
    </div>

    <div class=\"segment-element borderedControl expanded\">

        <div class=\"segment-content\">
            <div class=\"segment-top\" ";
        // line 38
        if ( !(isset($context["isSuperUser"]) || array_key_exists("isSuperUser", $context) ? $context["isSuperUser"] : (function () { throw new RuntimeError('Variable "isSuperUser" does not exist.', 38, $this->source); })())) {
            echo "style=\"display:none\"";
        }
        echo ">
               <input type=\"hidden\" class=\"available_segments_select\"/>
               <div class=\"segment-top-item grid-1\">
                ";
        // line 41
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SegmentEditor_ThisSegmentIsVisibleTo"), "html", null, true);
        echo " <div class=\"enable_all_users\"><strong>
                        <select class=\"enable_all_users_select\">
                            <option ";
        // line 43
        if ( !(isset($context["isSuperUser"]) || array_key_exists("isSuperUser", $context) ? $context["isSuperUser"] : (function () { throw new RuntimeError('Variable "isSuperUser" does not exist.', 43, $this->source); })())) {
            echo "selected=\"1\"";
        }
        echo " value=\"0\">";
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SegmentEditor_VisibleToMe"), "html", null, true);
        echo "</option>
                            <option ";
        // line 44
        if ((isset($context["isSuperUser"]) || array_key_exists("isSuperUser", $context) ? $context["isSuperUser"] : (function () { throw new RuntimeError('Variable "isSuperUser" does not exist.', 44, $this->source); })())) {
            echo "selected=\"1\"";
        }
        echo " value=\"1\">";
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SegmentEditor_VisibleToAllUsers"), "html", null, true);
        echo "</option>
                        </select>
                    </strong></div>
                </div>
                <div class=\"segment-top-item grid-2\">
                ";
        // line 49
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SegmentEditor_SegmentIsDisplayedForWebsite"), "html", null, true);
        echo "<div class=\"visible_to_website\"><strong>
                        <select class=\"visible_to_website_select\">
                            <option selected=\"\" value=\"";
        // line 51
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["idSite"]) || array_key_exists("idSite", $context) ? $context["idSite"] : (function () { throw new RuntimeError('Variable "idSite" does not exist.', 51, $this->source); })()), "html", null, true);
        echo "\">";
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SegmentEditor_SegmentDisplayedThisWebsiteOnly"), "html", null, true);
        echo "</option>
                            ";
        // line 52
        if ((isset($context["isAddingSegmentsForAllWebsitesEnabled"]) || array_key_exists("isAddingSegmentsForAllWebsitesEnabled", $context) ? $context["isAddingSegmentsForAllWebsitesEnabled"] : (function () { throw new RuntimeError('Variable "isAddingSegmentsForAllWebsitesEnabled" does not exist.', 52, $this->source); })())) {
            echo "<option value=\"0\">";
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SegmentEditor_SegmentDisplayedAllWebsites"), "html", null, true);
            echo "</option>";
        }
        // line 53
        echo "                        </select>
                    </strong></div>
                </div>
                ";
        // line 56
        if ((isset($context["isCreateRealtimeSegmentsEnabled"]) || array_key_exists("isCreateRealtimeSegmentsEnabled", $context) ? $context["isCreateRealtimeSegmentsEnabled"] : (function () { throw new RuntimeError('Variable "isCreateRealtimeSegmentsEnabled" does not exist.', 56, $this->source); })())) {
            // line 57
            echo "                   <div class=\"segment-top-item grid-3\">
                    ";
            // line 58
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_And"), "html", null, true);
            echo "
                    <div class=\"auto_archive\"><strong>
                            <select class=\"auto_archive_select\">
                                ";
            // line 61
            if ((isset($context["createRealTimeSegmentsIsEnabled"]) || array_key_exists("createRealTimeSegmentsIsEnabled", $context) ? $context["createRealTimeSegmentsIsEnabled"] : (function () { throw new RuntimeError('Variable "createRealTimeSegmentsIsEnabled" does not exist.', 61, $this->source); })())) {
                // line 62
                echo "                                    <option ";
                if ((isset($context["isBrowserArchivingEnabled"]) || array_key_exists("isBrowserArchivingEnabled", $context) ? $context["isBrowserArchivingEnabled"] : (function () { throw new RuntimeError('Variable "isBrowserArchivingEnabled" does not exist.', 62, $this->source); })())) {
                    echo "selected=\"1\"";
                }
                echo " value=\"0\">";
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SegmentEditor_AutoArchiveRealTime"), "html", null, true);
                echo "</option>
                                ";
            }
            // line 64
            echo "                                <option ";
            if (( !(isset($context["isBrowserArchivingEnabled"]) || array_key_exists("isBrowserArchivingEnabled", $context) ? $context["isBrowserArchivingEnabled"] : (function () { throw new RuntimeError('Variable "isBrowserArchivingEnabled" does not exist.', 64, $this->source); })()) ||  !(isset($context["createRealTimeSegmentsIsEnabled"]) || array_key_exists("createRealTimeSegmentsIsEnabled", $context) ? $context["createRealTimeSegmentsIsEnabled"] : (function () { throw new RuntimeError('Variable "createRealTimeSegmentsIsEnabled" does not exist.', 64, $this->source); })()))) {
                echo "selected=\"1\"";
            }
            echo " value=\"1\">";
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SegmentEditor_AutoArchivePreProcessed"), "html", null, true);
            echo " </option>
                            </select>
                        </strong>
                    </div>
                   </div>
                ";
        }
        // line 70
        echo "
            </div>
            <h3 style=\"margin: 12px 6px;\">";
        // line 72
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_Name"), "html", null, true);
        echo ": <span  class=\"segmentName\"></span> <a class=\"editSegmentName\" href=\"#\">";
        echo \Piwik\piwik_escape_filter($this->env, twig_lower_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_Edit")), "html", null, true);
        echo "</a></h3>
        </div>
        <div class=\"segment-footer\">
            <div piwik-rate-feature title=\"Segment Editor\" style=\"display:inline-block;float: left;margin-top: 2px;margin-right: 10px;\"></div>
            <a class=\"btn-flat delete\" href=\"#\">";
        // line 76
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_Delete"), "html", null, true);
        echo "</a>
            <a class=\"btn-flat close\" href=\"#\">";
        // line 77
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_Close"), "html", null, true);
        echo "</a>
            ";
        // line 78
        if ((isset($context["isVisitorLogEnabled"]) || array_key_exists("isVisitorLogEnabled", $context) ? $context["isVisitorLogEnabled"] : (function () { throw new RuntimeError('Variable "isVisitorLogEnabled" does not exist.', 78, $this->source); })())) {
            // line 79
            echo "            <a class=\"btn-flat testSegment\">";
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SegmentEditor_Test"), "html", null, true);
            echo "</a>
            ";
        }
        // line 81
        echo "            <button class=\"btn saveAndApply\">";
        echo $this->env->getFilter('translate')->getCallable()("SegmentEditor_SaveAndApply");
        echo "</button>
        </div>
    </div>
</div>
<div class=\"segmentListContainer\">
<div class=\"ui-confirm\" id=\"segment-delete-confirm\">
    <h2>";
        // line 87
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SegmentEditor_AreYouSureDeleteSegment"), "html", null, true);
        echo "</h2>
    <input role=\"yes\" type=\"button\" value=\"";
        // line 88
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_Yes"), "html", null, true);
        echo "\"/>
    <input role=\"no\" type=\"button\" value=\"";
        // line 89
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_No"), "html", null, true);
        echo "\"/>
</div>
<div class=\"ui-confirm segment-definition-change-confirm\" data-segment-processed-on-request=\"";
        // line 91
        echo \Piwik\piwik_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["segmentProcessedOnRequest"]) || array_key_exists("segmentProcessedOnRequest", $context) ? $context["segmentProcessedOnRequest"] : (function () { throw new RuntimeError('Variable "segmentProcessedOnRequest" does not exist.', 91, $this->source); })())), "html", null, true);
        echo "\" data-hide-message=\"";
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["hideSegmentDefinitionChangeMessage"]) || array_key_exists("hideSegmentDefinitionChangeMessage", $context) ? $context["hideSegmentDefinitionChangeMessage"] : (function () { throw new RuntimeError('Variable "hideSegmentDefinitionChangeMessage" does not exist.', 91, $this->source); })()), "html", null, true);
        echo "\">
    <h2>
        <span class=\"process-on-request\">
            ";
        // line 94
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SegmentEditor_ChangingSegmentDefinitionConfirmationProcessedOnRequest"), "html", null, true);
        echo "
        </span>
        <span class=\"no-process-on-request\">
            ";
        // line 97
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SegmentEditor_ChangingSegmentDefinitionConfirmationNotProcessedOnRequest"), "html", null, true);
        echo "
        </span>
    </h2>
    <p class=\"description\">
        <span>
            <label>
                <input type=\"checkbox\" id=\"hideSegmentMessage\" name=\"hideSegmentMessage\" />
                <span>";
        // line 104
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SegmentEditor_HideMessageInFuture"), "html", null, true);
        echo "</span>
            </label>
        </span>
    </p>
    <input role=\"yes\" type=\"button\" value=\"";
        // line 108
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_Yes"), "html", null, true);
        echo "\"/>
    <input role=\"no\" type=\"button\" value=\"";
        // line 109
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_No"), "html", null, true);
        echo "\"/>
</div>
<div class=\"ui-confirm pleaseChangeBrowserAchivingDisabledSetting\">
    <h2>";
        // line 112
        echo $this->env->getFilter('rawSafeDecoded')->getCallable()($this->env->getFilter('translate')->getCallable()("SegmentEditor_SegmentNotApplied", (isset($context["nameOfCurrentSegment"]) || array_key_exists("nameOfCurrentSegment", $context) ? $context["nameOfCurrentSegment"] : (function () { throw new RuntimeError('Variable "nameOfCurrentSegment" does not exist.', 112, $this->source); })())));
        echo "</h2>
    ";
        // line 113
        ob_start();
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SegmentEditor_AutoArchivePreProcessed"), "html", null, true);
        $context["segmentSetting"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 114
        echo "    <p class=\"description\">
        ";
        // line 115
        echo $this->env->getFilter('rawSafeDecoded')->getCallable()($this->env->getFilter('translate')->getCallable()("SegmentEditor_SegmentNotAppliedMessage", (isset($context["nameOfCurrentSegment"]) || array_key_exists("nameOfCurrentSegment", $context) ? $context["nameOfCurrentSegment"] : (function () { throw new RuntimeError('Variable "nameOfCurrentSegment" does not exist.', 115, $this->source); })())));
        echo "
        <br/>
        ";
        // line 117
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SegmentEditor_DataAvailableAtLaterDate"), "html", null, true);
        echo "
        ";
        // line 118
        if ((isset($context["isSuperUser"]) || array_key_exists("isSuperUser", $context) ? $context["isSuperUser"] : (function () { throw new RuntimeError('Variable "isSuperUser" does not exist.', 118, $this->source); })())) {
            // line 119
            echo "            <br/> <br/> ";
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SegmentEditor_YouMayChangeSetting", "browser_archiving_disabled_enforce", (isset($context["segmentSetting"]) || array_key_exists("segmentSetting", $context) ? $context["segmentSetting"] : (function () { throw new RuntimeError('Variable "segmentSetting" does not exist.', 119, $this->source); })())), "html", null, true);
            echo "
        ";
        }
        // line 121
        echo "    </p>

    <input role=\"yes\" type=\"button\" value=\"";
        // line 123
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_Ok"), "html", null, true);
        echo "\"/>
</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@SegmentEditor/_segmentSelector.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  325 => 123,  321 => 121,  315 => 119,  313 => 118,  309 => 117,  304 => 115,  301 => 114,  297 => 113,  293 => 112,  287 => 109,  283 => 108,  276 => 104,  266 => 97,  260 => 94,  252 => 91,  247 => 89,  243 => 88,  239 => 87,  229 => 81,  223 => 79,  221 => 78,  217 => 77,  213 => 76,  204 => 72,  200 => 70,  186 => 64,  176 => 62,  174 => 61,  168 => 58,  165 => 57,  163 => 56,  158 => 53,  152 => 52,  146 => 51,  141 => 49,  129 => 44,  121 => 43,  116 => 41,  108 => 38,  100 => 32,  94 => 28,  87 => 26,  82 => 25,  80 => 24,  75 => 21,  69 => 19,  67 => 18,  56 => 10,  49 => 6,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"SegmentEditor\" style=\"display:none;\">
    <div class=\"segmentationContainer listHtml\" title=\"{{ 'SegmentEditor_ChooseASegment'|translate|e('html_attr') }}. {{ 'SegmentEditor_CurrentlySelectedSegment'|translate(segmentDescription)|e('html_attr') }}\">
        <a class=\"title\" tabindex=\"4\"><span class=\"icon icon-segment\"></span><span class=\"segmentationTitle\"></span></a>
        <div class=\"dropdown dropdown-body\">
            <div class=\"segmentFilterContainer\">
                <input class=\"segmentFilter browser-default\" type=\"text\" tabindex=\"4\" value=\"{{ 'General_Search'|translate }}\"/>
                <span></span>
            </div>
            <ul class=\"submenu\">
                <li>{{ 'SegmentEditor_SelectSegmentOfVisits'|translate }}
                    <div class=\"segmentList\">
                        <ul>
                        </ul>
                    </div>
                </li>
            </ul>

            {% if authorizedToCreateSegments %}
                <a tabindex=\"4\" class=\"add_new_segment btn\">{{ 'SegmentEditor_AddNewSegment'|translate }}</a>
            {% else %}
                <hr/>
                <ul class=\"submenu\">
                <li>
                    {% if isUserAnonymous %}
                        <span class='youMustBeLoggedIn'>{{ 'SegmentEditor_YouMustBeLoggedInToCreateSegments'|translate }}
                        <br/>&rsaquo; <a href='index.php?module={{ loginModule }}'>{{ 'Login_LogIn'|translate }}</a> </span>
                    {% endif %}
                </li>
                </ul>
                <br/><br/>
            {% endif %}
        </div>
    </div>

    <div class=\"segment-element borderedControl expanded\">

        <div class=\"segment-content\">
            <div class=\"segment-top\" {% if not isSuperUser %}style=\"display:none\"{% endif %}>
               <input type=\"hidden\" class=\"available_segments_select\"/>
               <div class=\"segment-top-item grid-1\">
                {{ 'SegmentEditor_ThisSegmentIsVisibleTo'|translate }} <div class=\"enable_all_users\"><strong>
                        <select class=\"enable_all_users_select\">
                            <option {% if not isSuperUser %}selected=\"1\"{% endif %} value=\"0\">{{ 'SegmentEditor_VisibleToMe'|translate }}</option>
                            <option {% if isSuperUser %}selected=\"1\"{% endif %} value=\"1\">{{ 'SegmentEditor_VisibleToAllUsers'|translate }}</option>
                        </select>
                    </strong></div>
                </div>
                <div class=\"segment-top-item grid-2\">
                {{ 'SegmentEditor_SegmentIsDisplayedForWebsite'|translate }}<div class=\"visible_to_website\"><strong>
                        <select class=\"visible_to_website_select\">
                            <option selected=\"\" value=\"{{ idSite }}\">{{ 'SegmentEditor_SegmentDisplayedThisWebsiteOnly'|translate }}</option>
                            {% if isAddingSegmentsForAllWebsitesEnabled %}<option value=\"0\">{{ 'SegmentEditor_SegmentDisplayedAllWebsites'|translate }}</option>{% endif %}
                        </select>
                    </strong></div>
                </div>
                {% if isCreateRealtimeSegmentsEnabled %}
                   <div class=\"segment-top-item grid-3\">
                    {{ 'General_And'|translate }}
                    <div class=\"auto_archive\"><strong>
                            <select class=\"auto_archive_select\">
                                {% if createRealTimeSegmentsIsEnabled %}
                                    <option {% if isBrowserArchivingEnabled %}selected=\"1\"{% endif%} value=\"0\">{{ 'SegmentEditor_AutoArchiveRealTime'|translate }}</option>
                                {% endif %}
                                <option {% if not isBrowserArchivingEnabled or not createRealTimeSegmentsIsEnabled %}selected=\"1\"{% endif %} value=\"1\">{{ 'SegmentEditor_AutoArchivePreProcessed'|translate }} </option>
                            </select>
                        </strong>
                    </div>
                   </div>
                {% endif %}

            </div>
            <h3 style=\"margin: 12px 6px;\">{{ 'General_Name'|translate }}: <span  class=\"segmentName\"></span> <a class=\"editSegmentName\" href=\"#\">{{ 'General_Edit'|translate|lower }}</a></h3>
        </div>
        <div class=\"segment-footer\">
            <div piwik-rate-feature title=\"Segment Editor\" style=\"display:inline-block;float: left;margin-top: 2px;margin-right: 10px;\"></div>
            <a class=\"btn-flat delete\" href=\"#\">{{ 'General_Delete'|translate }}</a>
            <a class=\"btn-flat close\" href=\"#\">{{ 'General_Close'|translate }}</a>
            {% if isVisitorLogEnabled %}
            <a class=\"btn-flat testSegment\">{{ 'SegmentEditor_Test'|translate }}</a>
            {% endif %}
            <button class=\"btn saveAndApply\">{{ 'SegmentEditor_SaveAndApply'|translate|raw }}</button>
        </div>
    </div>
</div>
<div class=\"segmentListContainer\">
<div class=\"ui-confirm\" id=\"segment-delete-confirm\">
    <h2>{{ 'SegmentEditor_AreYouSureDeleteSegment'|translate }}</h2>
    <input role=\"yes\" type=\"button\" value=\"{{ 'General_Yes'|translate }}\"/>
    <input role=\"no\" type=\"button\" value=\"{{ 'General_No'|translate }}\"/>
</div>
<div class=\"ui-confirm segment-definition-change-confirm\" data-segment-processed-on-request=\"{{ segmentProcessedOnRequest|number_format }}\" data-hide-message=\"{{ hideSegmentDefinitionChangeMessage }}\">
    <h2>
        <span class=\"process-on-request\">
            {{ 'SegmentEditor_ChangingSegmentDefinitionConfirmationProcessedOnRequest'|translate }}
        </span>
        <span class=\"no-process-on-request\">
            {{ 'SegmentEditor_ChangingSegmentDefinitionConfirmationNotProcessedOnRequest'|translate }}
        </span>
    </h2>
    <p class=\"description\">
        <span>
            <label>
                <input type=\"checkbox\" id=\"hideSegmentMessage\" name=\"hideSegmentMessage\" />
                <span>{{ 'SegmentEditor_HideMessageInFuture'|translate }}</span>
            </label>
        </span>
    </p>
    <input role=\"yes\" type=\"button\" value=\"{{ 'General_Yes'|translate }}\"/>
    <input role=\"no\" type=\"button\" value=\"{{ 'General_No'|translate }}\"/>
</div>
<div class=\"ui-confirm pleaseChangeBrowserAchivingDisabledSetting\">
    <h2>{{ 'SegmentEditor_SegmentNotApplied'|translate(nameOfCurrentSegment)|rawSafeDecoded|raw }}</h2>
    {% set segmentSetting %}{{ 'SegmentEditor_AutoArchivePreProcessed'|translate }}{% endset %}
    <p class=\"description\">
        {{ 'SegmentEditor_SegmentNotAppliedMessage'|translate(nameOfCurrentSegment)|rawSafeDecoded|raw }}
        <br/>
        {{ 'SegmentEditor_DataAvailableAtLaterDate'|translate }}
        {% if isSuperUser %}
            <br/> <br/> {{ 'SegmentEditor_YouMayChangeSetting'|translate('browser_archiving_disabled_enforce', segmentSetting) }}
        {% endif %}
    </p>

    <input role=\"yes\" type=\"button\" value=\"{{ 'General_Ok'|translate }}\"/>
</div>
</div>
", "@SegmentEditor/_segmentSelector.twig", "/var/www/cse135.monster/public_html/matomo/plugins/SegmentEditor/templates/_segmentSelector.twig");
    }
}
