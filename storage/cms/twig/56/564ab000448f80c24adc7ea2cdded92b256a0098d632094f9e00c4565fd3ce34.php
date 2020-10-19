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

/* /Applications/MAMP/htdocs/bit703/module5/themes/philter/pages/home.htm */
class __TwigTemplate_593b8b51bbb398c7bde0262128fdaa6ea8ce0dedc37249f6451407cc040ae279 extends \Twig\Template
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
        $tags = array("if" => 7, "component" => 24);
        $filters = array("escape" => 19);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'component'],
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
        echo "<div id=\"hero_wrapper\">
  <div id=\"hero\">
    <div class=\"container-fluid\">
      <div class=\"row\">
        <h1>Welcome To Philter</h1>
        <p>Find something cool? Share it with our community.<br/> Look at other images as well</p>
        ";
        // line 7
        if (($context["is_logged_in"] ?? null)) {
            // line 8
            echo "            <p><a class=\"btn btn-primary text-center\" href=\"/image/add\">Upload an Image Now</a></p>
        ";
        } else {
            // line 10
            echo "            <p><a class=\"btn btn-primary text-center\" href=\"/user/login\">Login Now</a></p>
        ";
        }
        // line 12
        echo "      </div>
    </div>
  </div>
</div>

<div class=\"container-fluid\">
  <div class=\"row\">
    ";
        // line 19
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["message"] ?? null), 19, $this->source), "html", null, true);
        echo "
  </div>
</div>

<div id=\"other-images-home\" class=\"container-fluid\">
  ";
        // line 24
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("RecentImages"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 25
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/bit703/module5/themes/philter/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 25,  97 => 24,  89 => 19,  80 => 12,  76 => 10,  72 => 8,  70 => 7,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"hero_wrapper\">
  <div id=\"hero\">
    <div class=\"container-fluid\">
      <div class=\"row\">
        <h1>Welcome To Philter</h1>
        <p>Find something cool? Share it with our community.<br/> Look at other images as well</p>
        {% if is_logged_in %}
            <p><a class=\"btn btn-primary text-center\" href=\"/image/add\">Upload an Image Now</a></p>
        {% else %}
            <p><a class=\"btn btn-primary text-center\" href=\"/user/login\">Login Now</a></p>
        {% endif %}
      </div>
    </div>
  </div>
</div>

<div class=\"container-fluid\">
  <div class=\"row\">
    {{ message }}
  </div>
</div>

<div id=\"other-images-home\" class=\"container-fluid\">
  {% component 'RecentImages' %}
</div>", "/Applications/MAMP/htdocs/bit703/module5/themes/philter/pages/home.htm", "");
    }
}
