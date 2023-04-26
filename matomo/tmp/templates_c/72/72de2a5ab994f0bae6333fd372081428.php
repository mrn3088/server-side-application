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

/* @CoreHome/_notifications.twig */
class __TwigTemplate_f6760af83972e56dc30cb2f5989ab9da extends Template
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
        echo "<div id=\"notificationContainer\">
    ";
        // line 2
        if (twig_length_filter($this->env, (isset($context["notifications"]) || array_key_exists("notifications", $context) ? $context["notifications"] : (function () { throw new RuntimeError('Variable "notifications" does not exist.', 2, $this->source); })()))) {
            // line 3
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["notifications"]) || array_key_exists("notifications", $context) ? $context["notifications"] : (function () { throw new RuntimeError('Variable "notifications" does not exist.', 3, $this->source); })()));
            foreach ($context['_seq'] as $context["notificationId"] => $context["n"]) {
                // line 4
                echo "
            ";
                // line 5
                echo $this->env->getFilter('notification')->getCallable()(twig_get_attribute($this->env, $this->source, $context["n"], "message", [], "any", false, false, false, 5), ["id" => $context["notificationId"], "type" => twig_get_attribute($this->env, $this->source, $context["n"], "type", [], "any", false, false, false, 5), "title" => twig_get_attribute($this->env, $this->source, $context["n"], "title", [], "any", false, false, false, 5), "noclear" => twig_get_attribute($this->env, $this->source, $context["n"], "hasNoClear", [], "any", false, false, false, 5), "context" => twig_get_attribute($this->env, $this->source, $context["n"], "context", [], "any", false, false, false, 5), "raw" => twig_get_attribute($this->env, $this->source, $context["n"], "raw", [], "any", false, false, false, 5)], false);
                echo "

        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['notificationId'], $context['n'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "    ";
        }
        // line 9
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "@CoreHome/_notifications.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 9,  59 => 8,  50 => 5,  47 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"notificationContainer\">
    {% if notifications|length %}
        {% for notificationId, n in notifications %}

            {{ n.message|notification({'id': notificationId, 'type': n.type, 'title': n.title, 'noclear': n.hasNoClear, 'context': n.context, 'raw': n.raw}, false) }}

        {% endfor %}
    {% endif %}
</div>
", "@CoreHome/_notifications.twig", "/var/www/cse135.monster/public_html/matomo/plugins/CoreHome/templates/_notifications.twig");
    }
}
