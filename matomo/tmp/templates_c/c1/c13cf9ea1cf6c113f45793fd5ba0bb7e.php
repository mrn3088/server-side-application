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

/* @Dashboard/embeddedIndex.twig */
class __TwigTemplate_4342d3a7c1cd1995149f3b3dd7b9cd0c extends Template
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
        echo "<div id=\"dashboard\" piwik-dashboard dashboardid=\"";
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["dashboardId"]) || array_key_exists("dashboardId", $context) ? $context["dashboardId"] : (function () { throw new RuntimeError('Variable "dashboardId" does not exist.', 1, $this->source); })()), "html", null, true);
        echo "\">
    <div class=\"ui-confirm\" id=\"confirm\">
        <h2>";
        // line 3
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Dashboard_DeleteWidgetConfirm"), "html", null, true);
        echo "</h2>
        <input role=\"yes\" type=\"button\" value=\"";
        // line 4
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_Yes"), "html", null, true);
        echo "\"/>
        <input role=\"no\" type=\"button\" value=\"";
        // line 5
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_No"), "html", null, true);
        echo "\"/>
    </div>

    <div class=\"ui-confirm\" id=\"setAsDefaultWidgetsConfirm\">
        <h2>";
        // line 9
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Dashboard_SetAsDefaultWidgetsConfirm"), "html", null, true);
        echo "</h2>
        ";
        // line 10
        ob_start();
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Dashboard_ResetDashboard"), "html", null, true);
        $context["resetDashboard"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 11
        echo "        <div class=\"popoverSubMessage\">";
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Dashboard_SetAsDefaultWidgetsConfirmHelp", (isset($context["resetDashboard"]) || array_key_exists("resetDashboard", $context) ? $context["resetDashboard"] : (function () { throw new RuntimeError('Variable "resetDashboard" does not exist.', 11, $this->source); })())), "html", null, true);
        echo "</div>
        <input role=\"yes\" type=\"button\" value=\"";
        // line 12
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_Yes"), "html", null, true);
        echo "\"/>
        <input role=\"no\" type=\"button\" value=\"";
        // line 13
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_No"), "html", null, true);
        echo "\"/>
    </div>

    <div class=\"ui-confirm\" id=\"resetDashboardConfirm\">
        <h2>";
        // line 17
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Dashboard_ResetDashboardConfirm"), "html", null, true);
        echo "</h2>
        <input role=\"yes\" type=\"button\" value=\"";
        // line 18
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_Yes"), "html", null, true);
        echo "\"/>
        <input role=\"no\" type=\"button\" value=\"";
        // line 19
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_No"), "html", null, true);
        echo "\"/>
    </div>

    <div class=\"ui-confirm\" id=\"dashboardEmptyNotification\">
        <h2>";
        // line 23
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Dashboard_DashboardEmptyNotification"), "html", null, true);
        echo "</h2>
        <input role=\"addWidget\" type=\"button\" value=\"";
        // line 24
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Dashboard_AddAWidget"), "html", null, true);
        echo "\"/>
        <input role=\"resetDashboard\" type=\"button\" value=\"";
        // line 25
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Dashboard_ResetDashboard"), "html", null, true);
        echo "\"/>
    </div>

    <div class=\"ui-confirm\" id=\"changeDashboardLayout\">
        <h2>";
        // line 29
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Dashboard_SelectDashboardLayout"), "html", null, true);
        echo "</h2>

        <div id=\"columnPreview\">
            ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["availableLayouts"]) || array_key_exists("availableLayouts", $context) ? $context["availableLayouts"] : (function () { throw new RuntimeError('Variable "availableLayouts" does not exist.', 32, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["layout"]) {
            // line 33
            echo "            <div>
                ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["layout"]);
            foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                // line 35
                echo "                <div class=\"width-";
                echo \Piwik\piwik_escape_filter($this->env, $context["column"], "html", null, true);
                echo "\"><span></span></div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "            <br class=\"clearfix\" />
        </div>
        <input role=\"yes\" type=\"button\" value=\"";
        // line 41
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_Save"), "html", null, true);
        echo "\"/>
        <input role=\"cancel\" type=\"button\" value=\"";
        // line 42
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_Cancel"), "html", null, true);
        echo "\"/>
    </div>

    <div class=\"ui-confirm\" id=\"renameDashboardConfirm\">
        <h2>";
        // line 46
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Dashboard_RenameDashboard"), "html", null, true);
        echo "</h2>

        <div id=\"newDashboardNameInput\">
            <label for=\"newDashboardName\">";
        // line 49
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Dashboard_DashboardName"), "html", null, true);
        echo " </label>
            <input type=\"text\" name=\"newDashboardName\" id=\"newDashboardName\" value=\"\"/>
        </div>
        <input role=\"yes\" type=\"button\" value=\"";
        // line 52
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_Save"), "html", null, true);
        echo "\"/>
        <input role=\"cancel\" type=\"button\" value=\"";
        // line 53
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_Cancel"), "html", null, true);
        echo "\"/>
    </div>

    ";
        // line 56
        if ((isset($context["hasSomeAdminAccess"]) || array_key_exists("hasSomeAdminAccess", $context) ? $context["hasSomeAdminAccess"] : (function () { throw new RuntimeError('Variable "hasSomeAdminAccess" does not exist.', 56, $this->source); })())) {
            // line 57
            echo "        <div class=\"ui-confirm\" id=\"copyDashboardToUserConfirm\">
            <h2>";
            // line 58
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Dashboard_CopyDashboardToUser"), "html", null, true);
            echo "</h2>

            <div class=\"inputs\">
                <div class=\"row\">
                    <div class=\"col s12 m6\"><label for=\"copyDashboardName\">";
            // line 62
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Dashboard_DashboardName"), "html", null, true);
            echo " </label></div>
                    <div class=\"col s12 m6\"><input type=\"text\" name=\"copyDashboardName\" id=\"copyDashboardName\" value=\"\"/></div>
                </div>
                <div class=\"row\">
                    <div class=\"col s12 m6\"><label for=\"copyDashboardUser\">";
            // line 66
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_Username"), "html", null, true);
            echo " </label></div>
                    <div class=\"col s12 m6\"><select class=\"browser-default\" name=\"copyDashboardUser\" id=\"copyDashboardUser\">
                            <option>";
            // line 68
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_LoadingData"), "html", null, true);
            echo "</option></select></div>
                </div>
            </div>

            <input role=\"yes\" type=\"button\" value=\"";
            // line 72
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_Ok"), "html", null, true);
            echo "\"/>
            <input role=\"cancel\" type=\"button\" value=\"";
            // line 73
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_Cancel"), "html", null, true);
            echo "\"/>
        </div>
    ";
        }
        // line 76
        echo "
    <div class=\"ui-confirm\" id=\"createDashboardConfirm\">
        <h2>";
        // line 78
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Dashboard_CreateNewDashboard"), "html", null, true);
        echo "</h2>

        <div id=\"createDashboardNameInput\">
            <p>
                <label>";
        // line 82
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Dashboard_DashboardName"), "html", null, true);
        echo " </label>
                <input type=\"text\" name=\"newDashboardName\" id=\"createDashboardName\" value=\"\"/>
            </p>
            <p>
                <label>
                    <input type=\"radio\" checked=\"checked\" name=\"type\" value=\"default\" id=\"dashboard_type_default\" />
                    <span>";
        // line 88
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Dashboard_DefaultDashboard"), "html", null, true);
        echo "</span>
                </label>
            </p>
            <p>
                <label>
                    <input type=\"radio\" name=\"type\" value=\"empty\" id=\"dashboard_type_empty\" />
                    <span>";
        // line 94
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Dashboard_EmptyDashboard"), "html", null, true);
        echo "</span>
                </label>
            </p>
        </div>
        <input role=\"yes\" type=\"button\" value=\"";
        // line 98
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_Ok"), "html", null, true);
        echo "\"/>
        <input role=\"no\" type=\"button\" value=\"";
        // line 99
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_Cancel"), "html", null, true);
        echo "\"/>
    </div>

    <div class=\"ui-confirm\" id=\"removeDashboardConfirm\">
        <h2>";
        // line 103
        echo $this->env->getFilter('translate')->getCallable()("Dashboard_RemoveDashboardConfirm", "<span></span>");
        echo "</h2>

        <div class=\"popoverSubMessage\">";
        // line 105
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Dashboard_NotUndo", (isset($context["resetDashboard"]) || array_key_exists("resetDashboard", $context) ? $context["resetDashboard"] : (function () { throw new RuntimeError('Variable "resetDashboard" does not exist.', 105, $this->source); })())), "html", null, true);
        echo "</div>
        <input role=\"yes\" type=\"button\" value=\"";
        // line 106
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_Yes"), "html", null, true);
        echo "\"/>
        <input role=\"no\" type=\"button\" value=\"";
        // line 107
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_No"), "html", null, true);
        echo "\"/>
    </div>

    ";
        // line 110
        $this->loadTemplate("@Dashboard/_widgetFactoryTemplate.twig", "@Dashboard/embeddedIndex.twig", 110)->display($context);
        // line 111
        echo "
    <div id=\"dashboardWidgetsArea\" class=\"row\"></div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@Dashboard/embeddedIndex.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  291 => 111,  289 => 110,  283 => 107,  279 => 106,  275 => 105,  270 => 103,  263 => 99,  259 => 98,  252 => 94,  243 => 88,  234 => 82,  227 => 78,  223 => 76,  217 => 73,  213 => 72,  206 => 68,  201 => 66,  194 => 62,  187 => 58,  184 => 57,  182 => 56,  176 => 53,  172 => 52,  166 => 49,  160 => 46,  153 => 42,  149 => 41,  145 => 39,  138 => 37,  129 => 35,  125 => 34,  122 => 33,  118 => 32,  112 => 29,  105 => 25,  101 => 24,  97 => 23,  90 => 19,  86 => 18,  82 => 17,  75 => 13,  71 => 12,  66 => 11,  62 => 10,  58 => 9,  51 => 5,  47 => 4,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"dashboard\" piwik-dashboard dashboardid=\"{{ dashboardId }}\">
    <div class=\"ui-confirm\" id=\"confirm\">
        <h2>{{ 'Dashboard_DeleteWidgetConfirm'|translate }}</h2>
        <input role=\"yes\" type=\"button\" value=\"{{ 'General_Yes'|translate }}\"/>
        <input role=\"no\" type=\"button\" value=\"{{ 'General_No'|translate }}\"/>
    </div>

    <div class=\"ui-confirm\" id=\"setAsDefaultWidgetsConfirm\">
        <h2>{{ 'Dashboard_SetAsDefaultWidgetsConfirm'|translate }}</h2>
        {% set resetDashboard %}{{ 'Dashboard_ResetDashboard'|translate }}{% endset %}
        <div class=\"popoverSubMessage\">{{ 'Dashboard_SetAsDefaultWidgetsConfirmHelp'|translate(resetDashboard) }}</div>
        <input role=\"yes\" type=\"button\" value=\"{{ 'General_Yes'|translate }}\"/>
        <input role=\"no\" type=\"button\" value=\"{{ 'General_No'|translate }}\"/>
    </div>

    <div class=\"ui-confirm\" id=\"resetDashboardConfirm\">
        <h2>{{ 'Dashboard_ResetDashboardConfirm'|translate }}</h2>
        <input role=\"yes\" type=\"button\" value=\"{{ 'General_Yes'|translate }}\"/>
        <input role=\"no\" type=\"button\" value=\"{{ 'General_No'|translate }}\"/>
    </div>

    <div class=\"ui-confirm\" id=\"dashboardEmptyNotification\">
        <h2>{{ 'Dashboard_DashboardEmptyNotification'|translate }}</h2>
        <input role=\"addWidget\" type=\"button\" value=\"{{ 'Dashboard_AddAWidget'|translate }}\"/>
        <input role=\"resetDashboard\" type=\"button\" value=\"{{ 'Dashboard_ResetDashboard'|translate }}\"/>
    </div>

    <div class=\"ui-confirm\" id=\"changeDashboardLayout\">
        <h2>{{ 'Dashboard_SelectDashboardLayout'|translate }}</h2>

        <div id=\"columnPreview\">
            {% for layout in availableLayouts %}
            <div>
                {% for column in layout %}
                <div class=\"width-{{ column }}\"><span></span></div>
                {% endfor %}
            </div>
            {% endfor %}
            <br class=\"clearfix\" />
        </div>
        <input role=\"yes\" type=\"button\" value=\"{{ 'General_Save'|translate }}\"/>
        <input role=\"cancel\" type=\"button\" value=\"{{ 'General_Cancel'|translate }}\"/>
    </div>

    <div class=\"ui-confirm\" id=\"renameDashboardConfirm\">
        <h2>{{ 'Dashboard_RenameDashboard'|translate }}</h2>

        <div id=\"newDashboardNameInput\">
            <label for=\"newDashboardName\">{{ 'Dashboard_DashboardName'|translate }} </label>
            <input type=\"text\" name=\"newDashboardName\" id=\"newDashboardName\" value=\"\"/>
        </div>
        <input role=\"yes\" type=\"button\" value=\"{{ 'General_Save'|translate }}\"/>
        <input role=\"cancel\" type=\"button\" value=\"{{ 'General_Cancel'|translate }}\"/>
    </div>

    {% if hasSomeAdminAccess %}
        <div class=\"ui-confirm\" id=\"copyDashboardToUserConfirm\">
            <h2>{{ 'Dashboard_CopyDashboardToUser'|translate }}</h2>

            <div class=\"inputs\">
                <div class=\"row\">
                    <div class=\"col s12 m6\"><label for=\"copyDashboardName\">{{ 'Dashboard_DashboardName'|translate }} </label></div>
                    <div class=\"col s12 m6\"><input type=\"text\" name=\"copyDashboardName\" id=\"copyDashboardName\" value=\"\"/></div>
                </div>
                <div class=\"row\">
                    <div class=\"col s12 m6\"><label for=\"copyDashboardUser\">{{ 'General_Username'|translate }} </label></div>
                    <div class=\"col s12 m6\"><select class=\"browser-default\" name=\"copyDashboardUser\" id=\"copyDashboardUser\">
                            <option>{{ 'General_LoadingData'|translate }}</option></select></div>
                </div>
            </div>

            <input role=\"yes\" type=\"button\" value=\"{{ 'General_Ok'|translate }}\"/>
            <input role=\"cancel\" type=\"button\" value=\"{{ 'General_Cancel'|translate }}\"/>
        </div>
    {% endif %}

    <div class=\"ui-confirm\" id=\"createDashboardConfirm\">
        <h2>{{ 'Dashboard_CreateNewDashboard'|translate }}</h2>

        <div id=\"createDashboardNameInput\">
            <p>
                <label>{{ 'Dashboard_DashboardName'|translate }} </label>
                <input type=\"text\" name=\"newDashboardName\" id=\"createDashboardName\" value=\"\"/>
            </p>
            <p>
                <label>
                    <input type=\"radio\" checked=\"checked\" name=\"type\" value=\"default\" id=\"dashboard_type_default\" />
                    <span>{{ 'Dashboard_DefaultDashboard'|translate }}</span>
                </label>
            </p>
            <p>
                <label>
                    <input type=\"radio\" name=\"type\" value=\"empty\" id=\"dashboard_type_empty\" />
                    <span>{{ 'Dashboard_EmptyDashboard'|translate }}</span>
                </label>
            </p>
        </div>
        <input role=\"yes\" type=\"button\" value=\"{{ 'General_Ok'|translate }}\"/>
        <input role=\"no\" type=\"button\" value=\"{{ 'General_Cancel'|translate }}\"/>
    </div>

    <div class=\"ui-confirm\" id=\"removeDashboardConfirm\">
        <h2>{{ 'Dashboard_RemoveDashboardConfirm'|translate('<span></span>')|raw }}</h2>

        <div class=\"popoverSubMessage\">{{ 'Dashboard_NotUndo'|translate(resetDashboard) }}</div>
        <input role=\"yes\" type=\"button\" value=\"{{ 'General_Yes'|translate }}\"/>
        <input role=\"no\" type=\"button\" value=\"{{ 'General_No'|translate }}\"/>
    </div>

    {% include \"@Dashboard/_widgetFactoryTemplate.twig\" %}

    <div id=\"dashboardWidgetsArea\" class=\"row\"></div>
</div>
", "@Dashboard/embeddedIndex.twig", "/var/www/cse135.monster/public_html/matomo/plugins/Dashboard/templates/embeddedIndex.twig");
    }
}
