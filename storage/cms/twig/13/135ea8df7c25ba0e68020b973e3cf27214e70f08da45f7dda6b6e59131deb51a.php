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

/* /Applications/MAMP/htdocs/bit703/module5/themes/philter/layouts/default.htm */
class __TwigTemplate_47b3f45f95409d5c00cc3a6b348bfa30b51b6430d5a38455540ffdd37597dc33 extends \Twig\Template
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
        $tags = array("styles" => 21, "partial" => 46, "page" => 49, "framework" => 70, "scripts" => 70);
        $filters = array("escape" => 5, "theme" => 14);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['styles', 'partial', 'page', 'framework', 'scripts'],
                ['escape', 'theme'],
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
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"utf-8\" />
    <title>Philter - ";
        // line 5
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 5), "title", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
        echo "</title>
    <meta name=\"description\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 6), "meta_description", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
        echo "\" />
    <meta name=\"title\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 7), "meta_title", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
        echo "\" />
    <meta name=\"author\" content=\"Evan Amezcua\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    <meta name=\"generator\" content=\"OctoberCMS\" />
    <link
      rel=\"icon\"
      type=\"image/png\"
      href=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/october.png");
        echo "\"
    />
    <link
      href=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/vendor/cssgram.min.css");
        echo "\"
      rel=\"stylesheet\"
    />
    <link href=\"";
        // line 20
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/styles.css");
        echo "\" rel=\"stylesheet\" />
    ";
        // line 21
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 22
        echo "    <link
      rel=\"stylesheet\"
      href=\"https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700\"
    />
    <link
      rel=\"stylesheet\"
      href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,700\"
    />
    <!-- fontawesome import -->
    <link
      rel=\"stylesheet\"
      href=\"https://use.fontawesome.com/releases/v5.3.1/css/all.css\"
      integrity=\"sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU\"
      crossorigin=\"anonymous\"
    />
  </head>
  <body>
    <div class=\"loader\">
      <div class=\"spinner\">
        <div class=\"double-bounce1\"></div>
        <div class=\"double-bounce2\"></div>
      </div>
    </div>
    <!-- Header -->
    <header id=\"layout-header\">";
        // line 46
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        echo "</header>

    <!-- Content -->
    <section id=\"layout-content\">";
        // line 49
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        echo "</section>

    <!-- Footer -->
    <footer id=\"layout-footer\">";
        // line 52
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        echo "</footer>

    <!--start scripts-->
    <script src=\"";
        // line 55
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/vendor/modernizr-3.6.0.min.js");
        echo "\"></script>
    <script
      src=\"https://code.jquery.com/jquery-3.3.1.min.js\"
      integrity=\"sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=\"
      crossorigin=\"anonymous\"
    ></script>
    <script>
      window.jQuery ||
        document.write(
          '<script src=\"js/vendor/jquery-3.3.1.min.js\"><\\/script>'
        );
    </script>
    <script src=\"";
        // line 67
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/vendor/bootstrap.min.js");
        echo "\"></script>
    <script src=\"";
        // line 68
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/vendor/masonry.min.js");
        echo "\"></script>
    <script src=\"";
        // line 69
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/main.js");
        echo "\"></script>
    ";
        // line 70
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="' . Request::getBasePath() .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        echo " ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 71
        echo "  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/bit703/module5/themes/philter/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 71,  180 => 70,  176 => 69,  172 => 68,  168 => 67,  153 => 55,  145 => 52,  139 => 49,  131 => 46,  105 => 22,  102 => 21,  98 => 20,  92 => 17,  86 => 14,  76 => 7,  72 => 6,  68 => 5,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"utf-8\" />
    <title>Philter - {{ this.page.title }}</title>
    <meta name=\"description\" content=\"{{ this.page.meta_description }}\" />
    <meta name=\"title\" content=\"{{ this.page.meta_title }}\" />
    <meta name=\"author\" content=\"Evan Amezcua\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    <meta name=\"generator\" content=\"OctoberCMS\" />
    <link
      rel=\"icon\"
      type=\"image/png\"
      href=\"{{ 'assets/images/october.png'|theme }}\"
    />
    <link
      href=\"{{ 'assets/css/vendor/cssgram.min.css'|theme }}\"
      rel=\"stylesheet\"
    />
    <link href=\"{{ 'assets/css/styles.css'|theme }}\" rel=\"stylesheet\" />
    {% styles %}
    <link
      rel=\"stylesheet\"
      href=\"https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700\"
    />
    <link
      rel=\"stylesheet\"
      href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,700\"
    />
    <!-- fontawesome import -->
    <link
      rel=\"stylesheet\"
      href=\"https://use.fontawesome.com/releases/v5.3.1/css/all.css\"
      integrity=\"sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU\"
      crossorigin=\"anonymous\"
    />
  </head>
  <body>
    <div class=\"loader\">
      <div class=\"spinner\">
        <div class=\"double-bounce1\"></div>
        <div class=\"double-bounce2\"></div>
      </div>
    </div>
    <!-- Header -->
    <header id=\"layout-header\">{% partial 'header' %}</header>

    <!-- Content -->
    <section id=\"layout-content\">{% page %}</section>

    <!-- Footer -->
    <footer id=\"layout-footer\">{% partial 'footer' %}</footer>

    <!--start scripts-->
    <script src=\"{{ 'assets/js/vendor/modernizr-3.6.0.min.js' |theme }}\"></script>
    <script
      src=\"https://code.jquery.com/jquery-3.3.1.min.js\"
      integrity=\"sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=\"
      crossorigin=\"anonymous\"
    ></script>
    <script>
      window.jQuery ||
        document.write(
          '<script src=\"js/vendor/jquery-3.3.1.min.js\"><\\/script>'
        );
    </script>
    <script src=\"{{ 'assets/js/vendor/bootstrap.min.js' |theme }}\"></script>
    <script src=\"{{ 'assets/js/vendor/masonry.min.js' |theme }}\"></script>
    <script src=\"{{ 'assets/js/main.js' |theme }}\"></script>
    {% framework extras %} {% scripts %}
  </body>
</html>", "/Applications/MAMP/htdocs/bit703/module5/themes/philter/layouts/default.htm", "");
    }
}
