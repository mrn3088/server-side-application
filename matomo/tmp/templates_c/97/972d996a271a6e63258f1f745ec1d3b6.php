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

/* @CoreHome/_menu.twig */
class __TwigTemplate_ebf9075de34120077aa01781fa59dbaa extends Template
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
    }

    // line 1
    public function macro_menu($__menu__ = null, $__anchorlink__ = null, $__cssClass__ = null, $__currentModule__ = null, $__currentAction__ = null, $__collapsible__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "menu" => $__menu__,
            "anchorlink" => $__anchorlink__,
            "cssClass" => $__cssClass__,
            "currentModule" => $__currentModule__,
            "currentAction" => $__currentAction__,
            "collapsible" => $__collapsible__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 2
            echo "    <div id=\"secondNavBar\" class=\"";
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["cssClass"]) || array_key_exists("cssClass", $context) ? $context["cssClass"] : (function () { throw new RuntimeError('Variable "cssClass" does not exist.', 2, $this->source); })()), "html", null, true);
            echo " z-depth-1\">
        <ul class=\"navbar ";
            // line 3
            if ((isset($context["collapsible"]) || array_key_exists("collapsible", $context) ? $context["collapsible"] : (function () { throw new RuntimeError('Variable "collapsible" does not exist.', 3, $this->source); })())) {
                echo "collapsible collapsible-accordion";
            }
            echo " hide-on-med-and-down\" aria-label=\"";
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreHome_MainNavigation"), "html_attr");
            echo "\" role=\"menu\">
            ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 4, $this->source); })()));
            foreach ($context['_seq'] as $context["level1"] => $context["level2"]) {
                // line 5
                echo "
                ";
                // line 6
                $context["hasSubmenuItem"] = false;
                // line 7
                echo "                ";
                $context["hasActive"] = false;
                // line 8
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["level2"]);
                foreach ($context['_seq'] as $context["name"] => $context["urlParameters"]) {
                    // line 9
                    echo "                    ";
                    if ((twig_slice($this->env, $context["name"], 0, 1) != "_")) {
                        // line 10
                        echo "                        ";
                        $context["hasSubmenuItem"] = true;
                        // line 11
                        echo "                    ";
                    }
                    // line 12
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['name'], $context['urlParameters'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 13
                echo "
                ";
                // line 14
                if ((isset($context["hasSubmenuItem"]) || array_key_exists("hasSubmenuItem", $context) ? $context["hasSubmenuItem"] : (function () { throw new RuntimeError('Variable "hasSubmenuItem" does not exist.', 14, $this->source); })())) {
                    // line 15
                    echo "                    ";
                    ob_start();
                    // line 16
                    echo "                        <a class=\"item ";
                    if ((isset($context["collapsible"]) || array_key_exists("collapsible", $context) ? $context["collapsible"] : (function () { throw new RuntimeError('Variable "collapsible" does not exist.', 16, $this->source); })())) {
                        echo "collapsible-header";
                    }
                    echo "\" tabindex=\"5\">
                            <span class=\"menu-icon ";
                    // line 17
                    echo \Piwik\piwik_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["level2"], "_icon", [], "any", true, true, false, 17)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["level2"], "_icon", [], "any", false, false, false, 17), "icon-arrow-right")) : ("icon-arrow-right")), "html", null, true);
                    echo "\"></span>";
                    echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()($context["level1"]), "html", null, true);
                    echo "
                            <span class=\"hidden\">
                             ";
                    // line 19
                    echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreHome_Menu"), "html", null, true);
                    echo "
                           </span>
                        </a>
                        <ul role=\"menu\" ";
                    // line 22
                    if ((isset($context["collapsible"]) || array_key_exists("collapsible", $context) ? $context["collapsible"] : (function () { throw new RuntimeError('Variable "collapsible" does not exist.', 22, $this->source); })())) {
                        echo "class=\"collapsible-body\"";
                    }
                    echo ">
                            ";
                    // line 23
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["level2"]);
                    foreach ($context['_seq'] as $context["name"] => $context["urlParameters"]) {
                        // line 24
                        echo "                                ";
                        if ((twig_slice($this->env, $context["name"], 0, 1) != "_")) {
                            // line 25
                            echo "                                    ";
                            $context["isActive"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["urlParameters"], "_url", [], "any", false, true, false, 25), "module", [], "any", true, true, false, 25) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["urlParameters"], "_url", [], "any", false, false, false, 25), "module", [], "any", false, false, false, 25) == (isset($context["currentModule"]) || array_key_exists("currentModule", $context) ? $context["currentModule"] : (function () { throw new RuntimeError('Variable "currentModule" does not exist.', 25, $this->source); })()))) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["urlParameters"], "_url", [], "any", false, true, false, 25), "action", [], "any", true, true, false, 25)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["urlParameters"], "_url", [], "any", false, false, false, 25), "action", [], "any", false, false, false, 25) == (isset($context["currentAction"]) || array_key_exists("currentAction", $context) ? $context["currentAction"] : (function () { throw new RuntimeError('Variable "currentAction" does not exist.', 25, $this->source); })())));
                            // line 26
                            echo "                                    ";
                            $context["hasActive"] = ((isset($context["hasActive"]) || array_key_exists("hasActive", $context) ? $context["hasActive"] : (function () { throw new RuntimeError('Variable "hasActive" does not exist.', 26, $this->source); })()) || (isset($context["isActive"]) || array_key_exists("isActive", $context) ? $context["isActive"] : (function () { throw new RuntimeError('Variable "isActive" does not exist.', 26, $this->source); })()));
                            // line 27
                            echo "                                    <li ";
                            if ((isset($context["isActive"]) || array_key_exists("isActive", $context) ? $context["isActive"] : (function () { throw new RuntimeError('Variable "isActive" does not exist.', 27, $this->source); })())) {
                                echo "class=\"active\"";
                            }
                            // line 28
                            echo "                                        role=\"menuitem\"
                                    >
                                        <a class=\"item\" tabindex=\"5\" target=\"_self\"
                                           title=\"";
                            // line 31
                            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()(((twig_get_attribute($this->env, $this->source, $context["urlParameters"], "_tooltip", [], "any", true, true, false, 31)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["urlParameters"], "_tooltip", [], "any", false, false, false, 31), "")) : (""))), "html_attr");
                            echo "\"
                                            ";
                            // line 32
                            if ((twig_get_attribute($this->env, $this->source, $context["urlParameters"], "_onclick", [], "any", true, true, false, 32) && twig_get_attribute($this->env, $this->source, $context["urlParameters"], "_onclick", [], "any", false, false, false, 32))) {
                                // line 33
                                echo "                                                onclick=\"";
                                echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["urlParameters"], "_onclick", [], "any", false, false, false, 33), "html_attr");
                                echo ";return false;\"
                                            ";
                            }
                            // line 35
                            echo "                                            ";
                            if (twig_get_attribute($this->env, $this->source, $context["urlParameters"], "_url", [], "any", false, false, false, 35)) {
                                // line 36
                                echo "                                                href=\"index.php?";
                                echo \Piwik\piwik_escape_filter($this->env, twig_slice($this->env, $this->env->getFilter('urlRewriteWithParameters')->getCallable()(twig_get_attribute($this->env, $this->source, $context["urlParameters"], "_url", [], "any", false, false, false, 36)), 1), "html", null, true);
                                echo "\"
                                            ";
                            }
                            // line 37
                            echo ">
                                            ";
                            // line 38
                            if ((twig_get_attribute($this->env, $this->source, $context["urlParameters"], "_icon", [], "any", true, true, false, 38) && twig_get_attribute($this->env, $this->source, $context["urlParameters"], "_icon", [], "any", false, false, false, 38))) {
                                echo "<span class=\"icon ";
                                echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["urlParameters"], "_icon", [], "any", false, false, false, 38), "html_attr");
                                echo "\" style=\"margin-right: 5px;\"></span>";
                            }
                            // line 39
                            echo "                                            ";
                            echo $this->env->getFilter('rawSafeDecoded')->getCallable()($this->env->getFilter('translate')->getCallable()($context["name"]));
                            echo "
                                        </a>
                                        ";
                            // line 41
                            if (twig_get_attribute($this->env, $this->source, $context["urlParameters"], "_help", [], "any", false, false, false, 41)) {
                                // line 42
                                echo "                                            <div piwik-show-help-link name=\"";
                                echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["urlParameters"], "_name", [], "any", false, false, false, 42), "html", null, true);
                                echo "\" message=\"";
                                echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["urlParameters"], "_help", [], "any", false, false, false, 42), "html_attr");
                                echo "\"></div>
                                        ";
                            }
                            // line 44
                            echo "                                    </li>
                                ";
                        }
                        // line 46
                        echo "                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['name'], $context['urlParameters'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 47
                    echo "                        </ul>
                    ";
                    $context["subMenu"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 49
                    echo "                    <li class=\"menuTab ";
                    if ((isset($context["hasActive"]) || array_key_exists("hasActive", $context) ? $context["hasActive"] : (function () { throw new RuntimeError('Variable "hasActive" does not exist.', 49, $this->source); })())) {
                        echo "active";
                    }
                    echo "\" role=\"menuitem\">
                        ";
                    // line 50
                    echo \Piwik\piwik_escape_filter($this->env, (isset($context["subMenu"]) || array_key_exists("subMenu", $context) ? $context["subMenu"] : (function () { throw new RuntimeError('Variable "subMenu" does not exist.', 50, $this->source); })()), "html", null, true);
                    echo "
                    </li>
                ";
                }
                // line 53
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['level1'], $context['level2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "        </ul>
        <ul id=\"mobile-left-menu\" class=\"sidenav hide-on-large-only\">
            ";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 56, $this->source); })()));
            foreach ($context['_seq'] as $context["level1"] => $context["level2"]) {
                // line 57
                echo "
            ";
                // line 58
                $context["hasSubmenuItem"] = false;
                // line 59
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["level2"]);
                foreach ($context['_seq'] as $context["name"] => $context["urlParameters"]) {
                    // line 60
                    echo "                ";
                    if ((twig_slice($this->env, $context["name"], 0, 1) != "_")) {
                        // line 61
                        echo "                    ";
                        $context["hasSubmenuItem"] = true;
                        // line 62
                        echo "                ";
                    }
                    // line 63
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['name'], $context['urlParameters'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 64
                echo "
            ";
                // line 65
                if ((isset($context["hasSubmenuItem"]) || array_key_exists("hasSubmenuItem", $context) ? $context["hasSubmenuItem"] : (function () { throw new RuntimeError('Variable "hasSubmenuItem" does not exist.', 65, $this->source); })())) {
                    // line 66
                    echo "            <li class=\"no-padding\">
                <ul class=\"collapsible collapsible-accordion\" piwik-side-nav=\"nav .activateLeftMenu\">
                    <li>
                        <a class=\"collapsible-header\">";
                    // line 69
                    echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()($context["level1"]), "html", null, true);
                    echo "<i class=\"";
                    echo \Piwik\piwik_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["level2"], "_icon", [], "any", true, true, false, 69)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["level2"], "_icon", [], "any", false, false, false, 69), "icon-arrow-down")) : ("icon-arrow-down")), "html", null, true);
                    echo "\"></i></a>
                        <div class=\"collapsible-body\">
                            <ul>
                                ";
                    // line 72
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["level2"]);
                    foreach ($context['_seq'] as $context["name"] => $context["urlParameters"]) {
                        // line 73
                        echo "                                    ";
                        if ((twig_slice($this->env, $context["name"], 0, 1) != "_")) {
                            // line 74
                            echo "                                        <li>
                                            <a title=\"";
                            // line 75
                            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()(((twig_get_attribute($this->env, $this->source, $context["urlParameters"], "_tooltip", [], "any", true, true, false, 75)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["urlParameters"], "_tooltip", [], "any", false, false, false, 75), "")) : (""))), "html_attr");
                            echo "\" target=\"_self\"
                                               href=\"index.php?";
                            // line 76
                            echo \Piwik\piwik_escape_filter($this->env, twig_slice($this->env, $this->env->getFilter('urlRewriteWithParameters')->getCallable()(twig_get_attribute($this->env, $this->source, $context["urlParameters"], "_url", [], "any", false, false, false, 76)), 1), "html", null, true);
                            echo "\">";
                            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()($context["name"]), "html", null, true);
                            echo "</a>
                                        </li>
                                    ";
                        }
                        // line 79
                        echo "                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['name'], $context['urlParameters'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 80
                    echo "                            </ul>
                        </div>
                    </li>
                </ul>
                ";
                }
                // line 85
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['level1'], $context['level2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 86
            echo "            </li>
        </ul>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@CoreHome/_menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  330 => 86,  324 => 85,  317 => 80,  311 => 79,  303 => 76,  299 => 75,  296 => 74,  293 => 73,  289 => 72,  281 => 69,  276 => 66,  274 => 65,  271 => 64,  265 => 63,  262 => 62,  259 => 61,  256 => 60,  251 => 59,  249 => 58,  246 => 57,  242 => 56,  238 => 54,  232 => 53,  226 => 50,  219 => 49,  215 => 47,  209 => 46,  205 => 44,  197 => 42,  195 => 41,  189 => 39,  183 => 38,  180 => 37,  174 => 36,  171 => 35,  165 => 33,  163 => 32,  159 => 31,  154 => 28,  149 => 27,  146 => 26,  143 => 25,  140 => 24,  136 => 23,  130 => 22,  124 => 19,  117 => 17,  110 => 16,  107 => 15,  105 => 14,  102 => 13,  96 => 12,  93 => 11,  90 => 10,  87 => 9,  82 => 8,  79 => 7,  77 => 6,  74 => 5,  70 => 4,  62 => 3,  57 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% macro menu(menu, anchorlink, cssClass, currentModule, currentAction, collapsible) %}
    <div id=\"secondNavBar\" class=\"{{ cssClass }} z-depth-1\">
        <ul class=\"navbar {% if collapsible %}collapsible collapsible-accordion{% endif %} hide-on-med-and-down\" aria-label=\"{{ 'CoreHome_MainNavigation'|translate|e('html_attr') }}\" role=\"menu\">
            {% for level1,level2 in menu %}

                {% set hasSubmenuItem = false %}
                {% set hasActive = false %}
                {% for name,urlParameters in level2 %}
                    {% if name|slice(0,1) != '_' %}
                        {% set hasSubmenuItem = true %}
                    {% endif %}
                {% endfor %}

                {% if hasSubmenuItem %}
                    {% set subMenu %}
                        <a class=\"item {% if collapsible %}collapsible-header{% endif %}\" tabindex=\"5\">
                            <span class=\"menu-icon {{ level2._icon|default('icon-arrow-right') }}\"></span>{{ level1|translate }}
                            <span class=\"hidden\">
                             {{ 'CoreHome_Menu'|translate }}
                           </span>
                        </a>
                        <ul role=\"menu\" {% if collapsible %}class=\"collapsible-body\"{% endif %}>
                            {% for name,urlParameters in level2 %}
                                {% if name|slice(0,1) != '_' %}
                                    {% set isActive = urlParameters._url.module is defined and urlParameters._url.module == currentModule and urlParameters._url.action is defined and urlParameters._url.action == currentAction %}
                                    {% set hasActive = hasActive or isActive %}
                                    <li {% if isActive %}class=\"active\"{% endif %}
                                        role=\"menuitem\"
                                    >
                                        <a class=\"item\" tabindex=\"5\" target=\"_self\"
                                           title=\"{{ urlParameters._tooltip|default('')|translate|e('html_attr') }}\"
                                            {% if urlParameters._onclick is defined and urlParameters._onclick %}
                                                onclick=\"{{ urlParameters._onclick|e('html_attr') }};return false;\"
                                            {% endif %}
                                            {% if urlParameters._url %}
                                                href=\"index.php?{{ urlParameters._url|urlRewriteWithParameters|slice(1) }}\"
                                            {% endif %}>
                                            {% if urlParameters._icon is defined and urlParameters._icon %}<span class=\"icon {{ urlParameters._icon|e('html_attr') }}\" style=\"margin-right: 5px;\"></span>{% endif %}
                                            {{ name|translate|rawSafeDecoded }}
                                        </a>
                                        {% if urlParameters._help %}
                                            <div piwik-show-help-link name=\"{{ urlParameters._name }}\" message=\"{{ urlParameters._help|e('html_attr') }}\"></div>
                                        {% endif %}
                                    </li>
                                {% endif %}
                            {% endfor %}
                        </ul>
                    {% endset %}
                    <li class=\"menuTab {% if hasActive %}active{% endif %}\" role=\"menuitem\">
                        {{ subMenu }}
                    </li>
                {% endif %}
            {% endfor %}
        </ul>
        <ul id=\"mobile-left-menu\" class=\"sidenav hide-on-large-only\">
            {% for level1,level2 in menu %}

            {% set hasSubmenuItem = false %}
            {% for name,urlParameters in level2 %}
                {% if name|slice(0,1) != '_' %}
                    {% set hasSubmenuItem = true %}
                {% endif %}
            {% endfor %}

            {% if hasSubmenuItem %}
            <li class=\"no-padding\">
                <ul class=\"collapsible collapsible-accordion\" piwik-side-nav=\"nav .activateLeftMenu\">
                    <li>
                        <a class=\"collapsible-header\">{{ level1|translate }}<i class=\"{{ level2._icon|default('icon-arrow-down') }}\"></i></a>
                        <div class=\"collapsible-body\">
                            <ul>
                                {% for name,urlParameters in level2 %}
                                    {% if name|slice(0,1) != '_' %}
                                        <li>
                                            <a title=\"{{ urlParameters._tooltip|default('')|translate|e('html_attr') }}\" target=\"_self\"
                                               href=\"index.php?{{ urlParameters._url|urlRewriteWithParameters|slice(1) }}\">{{ name|translate }}</a>
                                        </li>
                                    {% endif %}
                                {% endfor %}
                            </ul>
                        </div>
                    </li>
                </ul>
                {% endif %}
                {% endfor %}
            </li>
        </ul>
    </div>
{% endmacro %}
", "@CoreHome/_menu.twig", "/var/www/cse135.monster/public_html/matomo/plugins/CoreHome/templates/_menu.twig");
    }
}
