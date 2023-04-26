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

/* @CoreHome/_topScreen.twig */
class __TwigTemplate_50daf72b53f2e37725b624cc0e6ac51e extends Template
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
        echo "<nav>
    <div class=\"nav-wrapper\">
        <a href=\"#main\" tabindex=\"1\" class=\"accessibility-skip-to-content\">";
        // line 3
        echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("CoreHome_SkipToContent"), "html", null, true);
        echo "</a>
        ";
        // line 4
        $this->loadTemplate("@CoreHome/_logo.twig", "@CoreHome/_topScreen.twig", 4)->display($context);
        // line 5
        echo "        ";
        $this->loadTemplate("@CoreHome/_topBar.twig", "@CoreHome/_topScreen.twig", 5)->display($context);
        // line 6
        echo "    </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "@CoreHome/_topScreen.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 6,  47 => 5,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav>
    <div class=\"nav-wrapper\">
        <a href=\"#main\" tabindex=\"1\" class=\"accessibility-skip-to-content\">{{'CoreHome_SkipToContent'|translate}}</a>
        {% include \"@CoreHome/_logo.twig\" %}
        {% include \"@CoreHome/_topBar.twig\" %}
    </div>
</nav>", "@CoreHome/_topScreen.twig", "/var/www/cse135.monster/public_html/matomo/plugins/CoreHome/templates/_topScreen.twig");
    }
}
