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

/* /Applications/MAMP/htdocs/bit703/module5/themes/philter/partials/header.htm */
class __TwigTemplate_23ba783c76a994f204818dd57b4f8c507b26bc6134fa0e8a838e03966f0bb948 extends \Twig\Template
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
        $tags = array("if" => 18);
        $filters = array("escape" => 19);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
        echo "<div class=\"container-fluid\">
  <nav id=\"menu\" class=\"navbar navbar-expand-md navbar-light\">
    <button
      class=\"navbar-toggler\"
      type=\"button\"
      data-toggle=\"collapse\"
      data-target=\"#main-navbar\"
      aria-controls=\"main-navbar\"
      aria-expanded=\"false\"
      aria-label=\"Toggle navigation\"
    >
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"main-navbar\">
      <ul class=\"navbar-nav ml-md-auto\">
        <li><a href=\"/\">Home</a></li>
        <li><a href=\"/image\">Images</a></li>
        ";
        // line 18
        if (($context["user"] ?? null)) {
            // line 19
            echo "        <li><a href=\"/account\">Welcome ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
            echo "</a></li>
        <li>
          <a href=\"#\" data-request=\"onLogout\" data-request-data=\"redirect: '/'\"
            >Logout</a
          >
        </li>
        ";
        } else {
            // line 26
            echo "        <li><a href=\"/account\">Login</a></li>
        <li><a href=\"/account\">Register</a></li>
        ";
        }
        // line 29
        echo "      </ul>
    </div>
  </nav>
</div>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/bit703/module5/themes/philter/partials/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 29,  94 => 26,  83 => 19,  81 => 18,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container-fluid\">
  <nav id=\"menu\" class=\"navbar navbar-expand-md navbar-light\">
    <button
      class=\"navbar-toggler\"
      type=\"button\"
      data-toggle=\"collapse\"
      data-target=\"#main-navbar\"
      aria-controls=\"main-navbar\"
      aria-expanded=\"false\"
      aria-label=\"Toggle navigation\"
    >
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"main-navbar\">
      <ul class=\"navbar-nav ml-md-auto\">
        <li><a href=\"/\">Home</a></li>
        <li><a href=\"/image\">Images</a></li>
        {% if user %}
        <li><a href=\"/account\">Welcome {{ user.name }}</a></li>
        <li>
          <a href=\"#\" data-request=\"onLogout\" data-request-data=\"redirect: '/'\"
            >Logout</a
          >
        </li>
        {% else %}
        <li><a href=\"/account\">Login</a></li>
        <li><a href=\"/account\">Register</a></li>
        {% endif %}
      </ul>
    </div>
  </nav>
</div>", "/Applications/MAMP/htdocs/bit703/module5/themes/philter/partials/header.htm", "");
    }
}
