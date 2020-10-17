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

/* /Applications/MAMP/htdocs/bit703/module5/themes/philter/pages/add-image.htm */
class __TwigTemplate_8502e51f3142aa1b2fcb3d4cc62738e3def676496130727cf5590350a469c79f extends \Twig\Template
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
        $tags = array("component" => 8);
        $filters = array();
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['component'],
                [],
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
        echo "<div id=\"main\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"text-center\">
        <h2>Add an image</h2>
      </div>
    </div>
    ";
        // line 8
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("AddImages"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 9
        echo "  </div> <!-- /.container -->
</div>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/bit703/module5/themes/philter/pages/add-image.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 9,  71 => 8,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"main\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"text-center\">
        <h2>Add an image</h2>
      </div>
    </div>
    {% component 'AddImages' %}
  </div> <!-- /.container -->
</div>", "/Applications/MAMP/htdocs/bit703/module5/themes/philter/pages/add-image.htm", "");
    }
}
