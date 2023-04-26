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

/* @Annotations/getEvolutionIcons.twig */
class __TwigTemplate_cb80093efeddbbaafa4e8f465b830a57 extends Template
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
        echo "<div class=\"evolution-annotations\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["annotationCounts"]) || array_key_exists("annotationCounts", $context) ? $context["annotationCounts"] : (function () { throw new RuntimeError('Variable "annotationCounts" does not exist.', 2, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["dateCountPair"]) {
            // line 3
            echo "        ";
            $context["date"] = twig_get_attribute($this->env, $this->source, $context["dateCountPair"], 0, [], "array", false, false, false, 3);
            // line 4
            echo "        ";
            $context["counts"] = twig_get_attribute($this->env, $this->source, $context["dateCountPair"], 1, [], "array", false, false, false, 4);
            // line 5
            echo "        <span data-date=\"";
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 5, $this->source); })()), "html", null, true);
            echo "\" data-count=\"";
            echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["counts"]) || array_key_exists("counts", $context) ? $context["counts"] : (function () { throw new RuntimeError('Variable "counts" does not exist.', 5, $this->source); })()), "count", [], "any", false, false, false, 5), "html", null, true);
            echo "\" data-starred=\"";
            echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["counts"]) || array_key_exists("counts", $context) ? $context["counts"] : (function () { throw new RuntimeError('Variable "counts" does not exist.', 5, $this->source); })()), "starred", [], "any", false, false, false, 5), "html", null, true);
            echo "\"
              ";
            // line 6
            if ((twig_get_attribute($this->env, $this->source, (isset($context["counts"]) || array_key_exists("counts", $context) ? $context["counts"] : (function () { throw new RuntimeError('Variable "counts" does not exist.', 6, $this->source); })()), "count", [], "any", false, false, false, 6) == 0)) {
                echo "title=\"";
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Annotations_AddAnnotationsFor", (isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 6, $this->source); })())), "html", null, true);
                echo "\"
              ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 7
(isset($context["counts"]) || array_key_exists("counts", $context) ? $context["counts"] : (function () { throw new RuntimeError('Variable "counts" does not exist.', 7, $this->source); })()), "count", [], "any", false, false, false, 7) == 1)) {
                echo "title=\"";
                echo $this->env->getFilter('translate')->getCallable()("Annotations_AnnotationOnDate", (isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 7, $this->source); })()), \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source,                 // line 8
(isset($context["counts"]) || array_key_exists("counts", $context) ? $context["counts"] : (function () { throw new RuntimeError('Variable "counts" does not exist.', 8, $this->source); })()), "note", [], "any", false, false, false, 8), "html_attr"));
                echo "
";
                // line 9
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Annotations_ClickToEditOrAdd"), "html", null, true);
                echo "\"
              ";
            } else {
                // line 10
                echo "}title=\"";
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Annotations_ViewAndAddAnnotations", (isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 10, $this->source); })())), "html", null, true);
                echo "\"";
            }
            echo ">
            <span class=\"icon-annotation ";
            // line 11
            if ((twig_get_attribute($this->env, $this->source, (isset($context["counts"]) || array_key_exists("counts", $context) ? $context["counts"] : (function () { throw new RuntimeError('Variable "counts" does not exist.', 11, $this->source); })()), "starred", [], "any", false, false, false, 11) > 0)) {
                echo "starred";
            }
            echo "\"></span>
        </span>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dateCountPair'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "@Annotations/getEvolutionIcons.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 14,  84 => 11,  77 => 10,  72 => 9,  68 => 8,  65 => 7,  59 => 6,  50 => 5,  47 => 4,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"evolution-annotations\">
    {% for dateCountPair in annotationCounts %}
        {% set date=dateCountPair[0] %}
        {% set counts=dateCountPair[1] %}
        <span data-date=\"{{ date }}\" data-count=\"{{ counts.count }}\" data-starred=\"{{ counts.starred }}\"
              {% if counts.count == 0 %}title=\"{{ 'Annotations_AddAnnotationsFor'|translate(date) }}\"
              {% elseif counts.count == 1 %}title=\"{{ 'Annotations_AnnotationOnDate'|translate(date,
                  (counts.note|e('html_attr')))|raw }}
{{ 'Annotations_ClickToEditOrAdd'|translate }}\"
              {% else %}}title=\"{{ 'Annotations_ViewAndAddAnnotations'|translate(date) }}\"{% endif %}>
            <span class=\"icon-annotation {% if counts.starred > 0 %}starred{% endif %}\"></span>
        </span>
    {% endfor %}
</div>
", "@Annotations/getEvolutionIcons.twig", "/var/www/cse135.monster/public_html/matomo/plugins/Annotations/templates/getEvolutionIcons.twig");
    }
}
