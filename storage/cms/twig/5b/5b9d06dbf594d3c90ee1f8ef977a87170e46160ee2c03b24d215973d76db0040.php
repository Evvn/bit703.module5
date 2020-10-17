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

/* /Applications/MAMP/htdocs/bit703/module5/plugins/evanamezcua/philter/components/recentimages/default.htm */
class __TwigTemplate_d7b7aa1d2d8337ea67a17007e6518f95e5edb1a847e8af352641bb16bdf5d9a2 extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = array("set" => 1, "if" => 1, "for" => 7);
        $filters = array("escape" => 9);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["images"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "images", [], "any", false, false, true, 1);
        echo " ";
        if (($context["images"] ?? null)) {
            // line 2
            echo "<div class=\"row\">
  <h2>Latest Images</h2>
</div>
<div class=\"row\">
  <div id=\"others-images\" class=\"grid\">
    ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 8
                echo "    <div class=\"grid-item other\">
      <picture id=\"image";
                // line 9
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "id", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
                echo "\">
        <img src=\"";
                // line 10
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["image"], "image", [], "any", false, false, true, 10), "path", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "description", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
                echo "\" />
      </picture>
      <h5>";
                // line 12
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "name", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
                echo "</h5>
      <p>";
                // line 13
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "description", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
                echo "</p>
    </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "    <div class=\"clearfix\"></div>
  </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/bit703/module5/plugins/evanamezcua/philter/components/recentimages/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 16,  95 => 13,  91 => 12,  84 => 10,  80 => 9,  77 => 8,  73 => 7,  66 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set images = __SELF__.images %} {% if images %}
<div class=\"row\">
  <h2>Latest Images</h2>
</div>
<div class=\"row\">
  <div id=\"others-images\" class=\"grid\">
    {% for image in images %}
    <div class=\"grid-item other\">
      <picture id=\"image{{ image.id }}\">
        <img src=\"{{ image.image.path }}\" alt=\"{{ image.description }}\" />
      </picture>
      <h5>{{ image.name }}</h5>
      <p>{{ image.description }}</p>
    </div>
    {% endfor %}
    <div class=\"clearfix\"></div>
  </div>
</div>
{% endif %}
", "/Applications/MAMP/htdocs/bit703/module5/plugins/evanamezcua/philter/components/recentimages/default.htm", "");
    }
}
