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

/* @CoreVisualizations/_dataTableViz_sparklines.twig */
class __TwigTemplate_5e3cd48c88b886e993ba5a43bde1ca62 extends Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("@CoreVisualizations/macros.twig", "@CoreVisualizations/_dataTableViz_sparklines.twig", 1)->unwrap();
        // line 2
        echo "
";
        // line 3
        if ( !(isset($context["isWidget"]) || array_key_exists("isWidget", $context) ? $context["isWidget"] : (function () { throw new RuntimeError('Variable "isWidget" does not exist.', 3, $this->source); })())) {
            // line 4
            echo "    <div class=\"card\"><div class=\"card-content\">
";
        }
        // line 6
        echo "    ";
        if ( !twig_test_empty((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 6, $this->source); })()))) {
            echo "<h2 class=\"card-title\"
                                    ";
            // line 7
            if ( !twig_test_empty((isset($context["titleAttributes"]) || array_key_exists("titleAttributes", $context) ? $context["titleAttributes"] : (function () { throw new RuntimeError('Variable "titleAttributes" does not exist.', 7, $this->source); })()))) {
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["titleAttributes"]) || array_key_exists("titleAttributes", $context) ? $context["titleAttributes"] : (function () { throw new RuntimeError('Variable "titleAttributes" does not exist.', 7, $this->source); })()));
                foreach ($context['_seq'] as $context["attribute"] => $context["value"]) {
                    echo \Piwik\piwik_escape_filter($this->env, $context["attribute"], "html", null, true);
                    echo "=\"";
                    echo \Piwik\piwik_escape_filter($this->env, $context["value"], "html", null, true);
                    echo "\"";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            // line 8
            echo "                                >";
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 8, $this->source); })()), "html", null, true);
            echo "</h2>";
        }
        // line 9
        echo "    ";
        if ( !(isset($context["isWidget"]) || array_key_exists("isWidget", $context) ? $context["isWidget"] : (function () { throw new RuntimeError('Variable "isWidget" does not exist.', 9, $this->source); })())) {
            // line 10
            echo "    <div class=\"row\">
        <div class=\"col m6\">
    ";
        }
        // line 13
        echo "            ";
        if ((twig_length_filter($this->env, (isset($context["sparklines"]) || array_key_exists("sparklines", $context) ? $context["sparklines"] : (function () { throw new RuntimeError('Variable "sparklines" does not exist.', 13, $this->source); })())) == 1)) {
            // line 14
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_first($this->env, (isset($context["sparklines"]) || array_key_exists("sparklines", $context) ? $context["sparklines"] : (function () { throw new RuntimeError('Variable "sparklines" does not exist.', 14, $this->source); })())));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["key"] => $context["sparkline"]) {
                // line 15
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 15) % 2 == 0)) {
                    // line 16
                    echo "                    ";
                    echo twig_call_macro($macros["macros"], "macro_singleSparkline", [$context["sparkline"], (isset($context["allMetricsDocumentation"]) || array_key_exists("allMetricsDocumentation", $context) ? $context["allMetricsDocumentation"] : (function () { throw new RuntimeError('Variable "allMetricsDocumentation" does not exist.', 16, $this->source); })()), (isset($context["areSparklinesLinkable"]) || array_key_exists("areSparklinesLinkable", $context) ? $context["areSparklinesLinkable"] : (function () { throw new RuntimeError('Variable "areSparklinesLinkable" does not exist.', 16, $this->source); })())], 16, $context, $this->getSourceContext());
                    echo "
                ";
                }
                // line 18
                echo "            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['sparkline'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "            ";
        } else {
            // line 20
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["sparklines"]) || array_key_exists("sparklines", $context) ? $context["sparklines"] : (function () { throw new RuntimeError('Variable "sparklines" does not exist.', 20, $this->source); })()));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 21
                echo "                    ";
                if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 21) % 2 == 0)) {
                    // line 22
                    echo "                        <div>
                            ";
                    // line 23
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["group"]);
                    foreach ($context['_seq'] as $context["key"] => $context["sparkline"]) {
                        // line 24
                        echo "                                ";
                        echo twig_call_macro($macros["macros"], "macro_singleSparkline", [$context["sparkline"], (isset($context["allMetricsDocumentation"]) || array_key_exists("allMetricsDocumentation", $context) ? $context["allMetricsDocumentation"] : (function () { throw new RuntimeError('Variable "allMetricsDocumentation" does not exist.', 24, $this->source); })()), (isset($context["areSparklinesLinkable"]) || array_key_exists("areSparklinesLinkable", $context) ? $context["areSparklinesLinkable"] : (function () { throw new RuntimeError('Variable "areSparklinesLinkable" does not exist.', 24, $this->source); })())], 24, $context, $this->getSourceContext());
                        echo "
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['key'], $context['sparkline'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 26
                    echo "                        </div>
                    ";
                }
                // line 28
                echo "                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "            ";
        }
        // line 30
        echo "
    ";
        // line 31
        if ( !(isset($context["isWidget"]) || array_key_exists("isWidget", $context) ? $context["isWidget"] : (function () { throw new RuntimeError('Variable "isWidget" does not exist.', 31, $this->source); })())) {
            // line 32
            echo "            <br style=\"clear:left\"/>
        </div>
        <div class=\"col m6\">
    ";
        }
        // line 36
        echo "
            ";
        // line 37
        if ((twig_length_filter($this->env, (isset($context["sparklines"]) || array_key_exists("sparklines", $context) ? $context["sparklines"] : (function () { throw new RuntimeError('Variable "sparklines" does not exist.', 37, $this->source); })())) == 1)) {
            // line 38
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["sparklines"]) || array_key_exists("sparklines", $context) ? $context["sparklines"] : (function () { throw new RuntimeError('Variable "sparklines" does not exist.', 38, $this->source); })()));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["key"] => $context["sparkline"]) {
                // line 39
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 39) % 2 != 0)) {
                    // line 40
                    echo "                    ";
                    echo twig_call_macro($macros["macros"], "macro_singleSparkline", [$context["sparkline"], (isset($context["allMetricsDocumentation"]) || array_key_exists("allMetricsDocumentation", $context) ? $context["allMetricsDocumentation"] : (function () { throw new RuntimeError('Variable "allMetricsDocumentation" does not exist.', 40, $this->source); })()), (isset($context["areSparklinesLinkable"]) || array_key_exists("areSparklinesLinkable", $context) ? $context["areSparklinesLinkable"] : (function () { throw new RuntimeError('Variable "areSparklinesLinkable" does not exist.', 40, $this->source); })())], 40, $context, $this->getSourceContext());
                    echo "
                ";
                }
                // line 42
                echo "            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['sparkline'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "            ";
        } else {
            // line 44
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["sparklines"]) || array_key_exists("sparklines", $context) ? $context["sparklines"] : (function () { throw new RuntimeError('Variable "sparklines" does not exist.', 44, $this->source); })()));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 45
                echo "                    ";
                if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 45) % 2 != 0)) {
                    // line 46
                    echo "                        <div>
                            ";
                    // line 47
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["group"]);
                    foreach ($context['_seq'] as $context["key"] => $context["sparkline"]) {
                        // line 48
                        echo "                                ";
                        echo twig_call_macro($macros["macros"], "macro_singleSparkline", [$context["sparkline"], (isset($context["allMetricsDocumentation"]) || array_key_exists("allMetricsDocumentation", $context) ? $context["allMetricsDocumentation"] : (function () { throw new RuntimeError('Variable "allMetricsDocumentation" does not exist.', 48, $this->source); })()), (isset($context["areSparklinesLinkable"]) || array_key_exists("areSparklinesLinkable", $context) ? $context["areSparklinesLinkable"] : (function () { throw new RuntimeError('Variable "areSparklinesLinkable" does not exist.', 48, $this->source); })())], 48, $context, $this->getSourceContext());
                        echo "
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['key'], $context['sparkline'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 50
                    echo "                        </div>
                    ";
                }
                // line 52
                echo "                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "            ";
        }
        // line 54
        echo "
            <br style=\"clear:left\"/>

    ";
        // line 57
        if ( !(isset($context["isWidget"]) || array_key_exists("isWidget", $context) ? $context["isWidget"] : (function () { throw new RuntimeError('Variable "isWidget" does not exist.', 57, $this->source); })())) {
            // line 58
            echo "        </div>
    </div>
    ";
        }
        // line 61
        echo "
    ";
        // line 62
        if ((isset($context["areSparklinesLinkable"]) || array_key_exists("areSparklinesLinkable", $context) ? $context["areSparklinesLinkable"] : (function () { throw new RuntimeError('Variable "areSparklinesLinkable" does not exist.', 62, $this->source); })())) {
            // line 63
            echo "        ";
            $this->loadTemplate("_sparklineFooter.twig", "@CoreVisualizations/_dataTableViz_sparklines.twig", 63)->display($context);
            // line 64
            echo "    ";
        }
        // line 65
        echo "
    ";
        // line 66
        if ( !twig_test_empty((isset($context["footerMessage"]) || array_key_exists("footerMessage", $context) ? $context["footerMessage"] : (function () { throw new RuntimeError('Variable "footerMessage" does not exist.', 66, $this->source); })()))) {
            // line 67
            echo "        <div class='datatableFooterMessage'>";
            echo (isset($context["footerMessage"]) || array_key_exists("footerMessage", $context) ? $context["footerMessage"] : (function () { throw new RuntimeError('Variable "footerMessage" does not exist.', 67, $this->source); })());
            echo "</div>
    ";
        }
        // line 69
        if ( !(isset($context["isWidget"]) || array_key_exists("isWidget", $context) ? $context["isWidget"] : (function () { throw new RuntimeError('Variable "isWidget" does not exist.', 69, $this->source); })())) {
            // line 70
            echo "        </div></div>
";
        }
    }

    public function getTemplateName()
    {
        return "@CoreVisualizations/_dataTableViz_sparklines.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  339 => 70,  337 => 69,  331 => 67,  329 => 66,  326 => 65,  323 => 64,  320 => 63,  318 => 62,  315 => 61,  310 => 58,  308 => 57,  303 => 54,  300 => 53,  286 => 52,  282 => 50,  273 => 48,  269 => 47,  266 => 46,  263 => 45,  245 => 44,  242 => 43,  228 => 42,  222 => 40,  219 => 39,  201 => 38,  199 => 37,  196 => 36,  190 => 32,  188 => 31,  185 => 30,  182 => 29,  168 => 28,  164 => 26,  155 => 24,  151 => 23,  148 => 22,  145 => 21,  127 => 20,  124 => 19,  110 => 18,  104 => 16,  101 => 15,  83 => 14,  80 => 13,  75 => 10,  72 => 9,  67 => 8,  53 => 7,  48 => 6,  44 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import '@CoreVisualizations/macros.twig' as macros %}

{% if not isWidget %}
    <div class=\"card\"><div class=\"card-content\">
{% endif %}
    {% if title is not empty %}<h2 class=\"card-title\"
                                    {% if titleAttributes is not empty %}{% for attribute, value in titleAttributes %}{{ attribute }}=\"{{ value }}\"{% endfor %}{% endif %}
                                >{{ title }}</h2>{% endif %}
    {% if not isWidget %}
    <div class=\"row\">
        <div class=\"col m6\">
    {% endif %}
            {% if sparklines|length == 1 %}
            {% for key, sparkline in sparklines|first %}
                {% if loop.index0 is even %}
                    {{ macros.singleSparkline(sparkline, allMetricsDocumentation, areSparklinesLinkable) }}
                {% endif %}
            {% endfor %}
            {% else %}
                {% for group in sparklines %}
                    {% if loop.index0 is even %}
                        <div>
                            {% for key, sparkline in group %}
                                {{ macros.singleSparkline(sparkline, allMetricsDocumentation, areSparklinesLinkable) }}
                            {% endfor %}
                        </div>
                    {% endif %}
                {% endfor %}
            {% endif %}

    {% if not isWidget %}
            <br style=\"clear:left\"/>
        </div>
        <div class=\"col m6\">
    {% endif %}

            {% if sparklines|length == 1 %}
            {% for key, sparkline in sparklines %}
                {% if loop.index0 is odd %}
                    {{ macros.singleSparkline(sparkline, allMetricsDocumentation, areSparklinesLinkable) }}
                {% endif %}
            {% endfor %}
            {% else %}
                {% for group in sparklines %}
                    {% if loop.index0 is odd %}
                        <div>
                            {% for key, sparkline in group %}
                                {{ macros.singleSparkline(sparkline, allMetricsDocumentation, areSparklinesLinkable) }}
                            {% endfor %}
                        </div>
                    {% endif %}
                {% endfor %}
            {% endif %}

            <br style=\"clear:left\"/>

    {% if not isWidget %}
        </div>
    </div>
    {% endif %}

    {%  if areSparklinesLinkable %}
        {% include \"_sparklineFooter.twig\" %}
    {% endif %}

    {% if footerMessage is not empty %}
        <div class='datatableFooterMessage'>{{ footerMessage | raw }}</div>
    {% endif %}
{% if not isWidget %}
        </div></div>
{% endif %}", "@CoreVisualizations/_dataTableViz_sparklines.twig", "/var/www/cse135.monster/public_html/matomo/plugins/CoreVisualizations/templates/_dataTableViz_sparklines.twig");
    }
}
