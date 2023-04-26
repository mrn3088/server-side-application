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

/* @CoreHome/_topBar.twig */
class __TwigTemplate_d0382def1d514959019e2ac0d2cbfaac extends Template
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
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo $this->env->getFunction('postEvent')->getCallable()("Template.beforeTopBar", (isset($context["userLogin"]) || array_key_exists("userLogin", $context) ? $context["userLogin"] : (function () { throw new RuntimeError('Variable "userLogin" does not exist.', 1, $this->source); })()), (isset($context["topMenu"]) || array_key_exists("topMenu", $context) ? $context["topMenu"] : (function () { throw new RuntimeError('Variable "topMenu" does not exist.', 1, $this->source); })()));
        echo "
<ul class=\"right hide-on-med-and-down\">
    ";
        // line 10
        echo "
    ";
        // line 27
        echo "
    ";
        // line 29
        echo "
    ";
        // line 30
        if ( !array_key_exists("topMenuModule", $context)) {
            // line 31
            echo "        ";
            $context["topMenuModule"] = (isset($context["currentModule"]) || array_key_exists("currentModule", $context) ? $context["currentModule"] : (function () { throw new RuntimeError('Variable "currentModule" does not exist.', 31, $this->source); })());
            // line 32
            echo "        ";
            $context["topMenuAction"] = (isset($context["currentAction"]) || array_key_exists("currentAction", $context) ? $context["currentAction"] : (function () { throw new RuntimeError('Variable "currentAction" does not exist.', 32, $this->source); })());
            // line 33
            echo "    ";
        }
        // line 34
        echo "
    ";
        // line 35
        ob_start();
        // line 36
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["topMenu"]) || array_key_exists("topMenu", $context) ? $context["topMenu"] : (function () { throw new RuntimeError('Variable "topMenu" does not exist.', 36, $this->source); })()));
        foreach ($context['_seq'] as $context["label"] => $context["menu"]) {
            // line 37
            echo "            <li role=\"menuitem\" class=\"";
            echo twig_call_macro($macros["_self"], "macro_isActiveItem", [$context["menu"], (isset($context["topMenuModule"]) || array_key_exists("topMenuModule", $context) ? $context["topMenuModule"] : (function () { throw new RuntimeError('Variable "topMenuModule" does not exist.', 37, $this->source); })()), (isset($context["topMenuAction"]) || array_key_exists("topMenuAction", $context) ? $context["topMenuAction"] : (function () { throw new RuntimeError('Variable "topMenuAction" does not exist.', 37, $this->source); })())], 37, $context, $this->getSourceContext());
            echo "\">";
            echo twig_call_macro($macros["_self"], "macro_topMenuItem", [$context["label"], twig_get_attribute($this->env, $this->source, $context["menu"], "_icon", [], "any", false, false, false, 37), $context["menu"]], 37, $context, $this->getSourceContext());
            echo "</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "    ";
        $___internal_parse_0_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 35
        echo twig_spaceless($___internal_parse_0_);
        // line 40
        echo "</ul>
<ul class=\"sidenav hide-on-large-only\" id=\"mobile-top-menu\">
    ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["topMenu"]) || array_key_exists("topMenu", $context) ? $context["topMenu"] : (function () { throw new RuntimeError('Variable "topMenu" does not exist.', 42, $this->source); })()));
        foreach ($context['_seq'] as $context["label"] => $context["menu"]) {
            // line 43
            echo "        <li role=\"menuitem\" class=\"";
            echo twig_call_macro($macros["_self"], "macro_isActiveItem", [$context["menu"], (isset($context["topMenuModule"]) || array_key_exists("topMenuModule", $context) ? $context["topMenuModule"] : (function () { throw new RuntimeError('Variable "topMenuModule" does not exist.', 43, $this->source); })()), (isset($context["topMenuAction"]) || array_key_exists("topMenuAction", $context) ? $context["topMenuAction"] : (function () { throw new RuntimeError('Variable "topMenuAction" does not exist.', 43, $this->source); })())], 43, $context, $this->getSourceContext());
            echo "\"
            >";
            // line 44
            echo twig_call_macro($macros["_self"], "macro_topMenuItem", [$context["label"], "", $context["menu"]], 44, $context, $this->getSourceContext());
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "</ul>
<a href=\"javascript:;\" data-target=\"mobile-left-menu\" class=\"activateLeftMenu hide-on-large-only button-collapse sidenav-trigger\" style=\"display:none;\"><span class=\"icon-menu-hamburger\"></span></a>
<a href=\"javascript:;\" data-target=\"mobile-top-menu\" class=\"activateTopMenu hide-on-large-only button-collapse sidenav-trigger\"><span class=\"icon-more-verti\"></span></a>
";
    }

    // line 3
    public function macro_menuItemLabel($__label__ = null, $__icon__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "label" => $__label__,
            "icon" => $__icon__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 4
            echo "        ";
            if (((array_key_exists("icon", $context) && (isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 4, $this->source); })())) && (is_string($__internal_compile_0 = (isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 4, $this->source); })())) && is_string($__internal_compile_1 = "icon-") && ('' === $__internal_compile_1 || 0 === strpos($__internal_compile_0, $__internal_compile_1))))) {
                // line 5
                echo "            <span class=\"navbar-icon ";
                echo \Piwik\piwik_escape_filter($this->env, twig_striptags((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 5, $this->source); })())), "html", null, true);
                echo "\" aria-label=\"";
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 5, $this->source); })())), "html_attr");
                echo "\"></span>
        ";
            } else {
                // line 7
                echo "            ";
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 7, $this->source); })())), "html", null, true);
                echo "
        ";
            }
            // line 9
            echo "    ";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 11
    public function macro_topMenuItem($__label__ = null, $__icon__ = null, $__menu__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "label" => $__label__,
            "icon" => $__icon__,
            "menu" => $__menu__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 12
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "_html", [], "any", true, true, false, 12)) {
                // line 13
                echo "            ";
                echo twig_get_attribute($this->env, $this->source, (isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 13, $this->source); })()), "_html", [], "any", false, false, false, 13);
                echo "
        ";
            } else {
                // line 15
                echo "            <a ";
                if (twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "_tooltip", [], "any", true, true, false, 15)) {
                    echo "title=\"";
                    echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 15, $this->source); })()), "_tooltip", [], "any", false, false, false, 15), "html", null, true);
                    echo "\"";
                }
                // line 16
                echo "               ";
                if (twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "_attribute", [], "any", true, true, false, 16)) {
                    echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 16, $this->source); })()), "_attribute", [], "any", false, false, false, 16), "html", null, true);
                }
                // line 17
                echo "               ";
                if (twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "_onclick", [], "any", true, true, false, 17)) {
                    echo "onClick=\"";
                    echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 17, $this->source); })()), "_onclick", [], "any", false, false, false, 17), "html", null, true);
                    echo "\"";
                }
                // line 18
                echo "               ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "_url", [], "any", false, true, false, 18), "module", [], "any", true, true, false, 18)) {
                    // line 19
                    echo "                  id=\"topmenu-";
                    echo \Piwik\piwik_escape_filter($this->env, twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 19, $this->source); })()), "_url", [], "any", false, false, false, 19), "module", [], "any", false, false, false, 19)), "html", null, true);
                    echo "\"
                  href=\"index.php";
                    // line 20
                    echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('urlRewriteWithParameters')->getCallable()(twig_get_attribute($this->env, $this->source, (isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 20, $this->source); })()), "_url", [], "any", false, false, false, 20)), "html", null, true);
                    echo "\"
               ";
                } else {
                    // line 22
                    echo "                  href=\"";
                    echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 22, $this->source); })()), "_url", [], "any", false, false, false, 22), "html", null, true);
                    echo "\" rel=\"noreferrer noopener\"
               ";
                }
                // line 24
                echo "               target=\"_self\" tabindex=\"3\">";
                echo twig_call_macro($macros["_self"], "macro_menuItemLabel", [(isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 24, $this->source); })()), (isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 24, $this->source); })())], 24, $context, $this->getSourceContext());
                echo "</a>
        ";
            }
            // line 26
            echo "    ";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 28
    public function macro_isActiveItem($__menu__ = null, $__currentModule__ = null, $__currentAction__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "menu" => $__menu__,
            "currentModule" => $__currentModule__,
            "currentAction" => $__currentAction__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            if ((((((isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 28, $this->source); })()) && twig_get_attribute($this->env, $this->source, (isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 28, $this->source); })()), "_url", [], "any", false, false, false, 28)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "_url", [], "any", false, true, false, 28), "module", [], "any", true, true, false, 28)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 28, $this->source); })()), "_url", [], "any", false, false, false, 28), "module", [], "any", false, false, false, 28) == (isset($context["currentModule"]) || array_key_exists("currentModule", $context) ? $context["currentModule"] : (function () { throw new RuntimeError('Variable "currentModule" does not exist.', 28, $this->source); })()))) && (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 28, $this->source); })()), "_url", [], "any", false, false, false, 28), "action", [], "any", false, false, false, 28)) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 28, $this->source); })()), "_url", [], "any", false, false, false, 28), "action", [], "any", false, false, false, 28) == (isset($context["currentAction"]) || array_key_exists("currentAction", $context) ? $context["currentAction"] : (function () { throw new RuntimeError('Variable "currentAction" does not exist.', 28, $this->source); })()))))) {
                echo "active";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@CoreHome/_topBar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 28,  225 => 26,  219 => 24,  213 => 22,  208 => 20,  203 => 19,  200 => 18,  193 => 17,  188 => 16,  181 => 15,  175 => 13,  172 => 12,  157 => 11,  148 => 9,  142 => 7,  134 => 5,  131 => 4,  117 => 3,  110 => 46,  102 => 44,  97 => 43,  93 => 42,  89 => 40,  87 => 35,  84 => 39,  73 => 37,  68 => 36,  66 => 35,  63 => 34,  60 => 33,  57 => 32,  54 => 31,  52 => 30,  49 => 29,  46 => 27,  43 => 10,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ postEvent(\"Template.beforeTopBar\", userLogin, topMenu) }}
<ul class=\"right hide-on-med-and-down\">
    {% macro menuItemLabel(label, icon) %}
        {% if icon is defined and icon and icon starts with 'icon-' %}
            <span class=\"navbar-icon {{ icon|striptags }}\" aria-label=\"{{ label|translate|e('html_attr') }}\"></span>
        {% else %}
            {{ label|translate }}
        {% endif %}
    {% endmacro %}

    {% macro topMenuItem(label, icon, menu) %}
        {% if menu._html is defined %}
            {{ menu._html|raw }}
        {% else %}
            <a {% if menu._tooltip is defined %}title=\"{{ menu._tooltip }}\"{% endif %}
               {% if menu._attribute is defined %}{{ menu._attribute }}{% endif %}
               {% if menu._onclick is defined %}onClick=\"{{ menu._onclick }}\"{% endif %}
               {% if menu._url.module is defined %}
                  id=\"topmenu-{{ menu._url.module|lower }}\"
                  href=\"index.php{{ menu._url|urlRewriteWithParameters }}\"
               {% else %}
                  href=\"{{ menu._url }}\" rel=\"noreferrer noopener\"
               {% endif %}
               target=\"_self\" tabindex=\"3\">{{ _self.menuItemLabel(label, icon) }}</a>
        {% endif %}
    {% endmacro %}

    {% macro isActiveItem(menu, currentModule, currentAction) %}{% if (menu and menu._url and menu._url.module is defined and menu._url.module == currentModule and (menu._url.action is empty or menu._url.action == currentAction)) %}active{% endif %}{% endmacro %}

    {% if topMenuModule is not defined %}
        {% set topMenuModule = currentModule %}
        {% set topMenuAction = currentAction %}
    {% endif %}

    {% apply spaceless %}
        {% for label,menu in topMenu %}
            <li role=\"menuitem\" class=\"{{ _self.isActiveItem(menu, topMenuModule, topMenuAction) }}\">{{ _self.topMenuItem(label, menu._icon, menu) }}</li>
        {% endfor %}
    {% endapply %}
</ul>
<ul class=\"sidenav hide-on-large-only\" id=\"mobile-top-menu\">
    {% for label,menu in topMenu %}
        <li role=\"menuitem\" class=\"{{ _self.isActiveItem(menu, topMenuModule, topMenuAction) }}\"
            >{{ _self.topMenuItem(label, '', menu) }}</li>
    {% endfor %}
</ul>
<a href=\"javascript:;\" data-target=\"mobile-left-menu\" class=\"activateLeftMenu hide-on-large-only button-collapse sidenav-trigger\" style=\"display:none;\"><span class=\"icon-menu-hamburger\"></span></a>
<a href=\"javascript:;\" data-target=\"mobile-top-menu\" class=\"activateTopMenu hide-on-large-only button-collapse sidenav-trigger\"><span class=\"icon-more-verti\"></span></a>
", "@CoreHome/_topBar.twig", "/var/www/cse135.monster/public_html/matomo/plugins/CoreHome/templates/_topBar.twig");
    }
}
