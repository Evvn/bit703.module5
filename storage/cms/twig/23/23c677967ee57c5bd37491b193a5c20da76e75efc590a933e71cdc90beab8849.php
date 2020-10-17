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

/* /Applications/MAMP/htdocs/bit703/module5/plugins/evanamezcua/philter/components/addimages/default.htm */
class __TwigTemplate_7c3d05fc8910a77541906e721e54935027b37cb7287a4020fc0bc82596f2c936 extends \Twig\Template
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
        $tags = array("flash" => 2);
        $filters = array("escape" => 3);
        $functions = array("url" => 7, "form_token" => 9, "form_sessionKey" => 10);

        try {
            $this->sandbox->checkSecurity(
                ['flash'],
                ['escape'],
                ['url', 'form_token', 'form_sessionKey']
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
        echo "<div class=\"row\">
  ";
        $_type = isset($context["type"]) ? $context["type"] : null;        $_message = isset($context["message"]) ? $context["message"] : null;        // line 2
        foreach (Flash::getMessages() as $type => $messages) {
            foreach ($messages as $message) {
                $context["type"] = $type;                $context["message"] = $message;                // line 3
                echo "    <p><div class=\"alert alert-";
                echo (((($context["type"] ?? null) == "error")) ? ("danger") : ("success"));
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["message"] ?? null), 3, $this->source), "html", null, true);
                echo "</div></p>
  ";
            }
        }
        $context["type"] = $_type;        $context["message"] = $_message;        // line 5
        echo "</div>
<div class=\"row\">
  <form action=\"";
        // line 7
        echo url("image/add");
        echo "\" accept-charset=\"UTF8\" enctype=\"multipart/form-data\"  id=\"image-form\" class=\"col col-sm-8 col-md-6\">
  
    ";
        // line 9
        echo call_user_func_array($this->env->getFunction('form_token')->getCallable(), ["token"]);
        echo "
    ";
        // line 10
        echo call_user_func_array($this->env->getFunction('form_sessionKey')->getCallable(), ["sessionKey"]);
        echo "

    <!-- req form fields from module 2 -->
    <div class=\"form-group\">
      <label>Name</label>
      <input type=\"text\" name=\"title\" class=\"form-control\" />
    </div>
    <div class=\"form-group\">
      <label>Description</label>
      <input type=\"text\" name=\"description\" class=\"form-control\" />
    </div>
    <div class=\"form-group\">
      <label>Tags - add a comma after each tag.</label>
      <input type=\"text\" name=\"tags\" class=\"form-control\" />
    </div>
    <div class=\"form-group\">
      <label>Filter</label>
      <select name=\"filter\" class=\"custom-select\">
        <option value=\"_1977\">1977</option>
        <option value=\"aden\">Aden</option>
        <option value=\"brannan\">Brannan</option>
        <option value=\"brooklyn\">Brooklyn</option>
        <option value=\"clarendon\">Clarendon</option>
        <option value=\"earlybird\">Earlybird</option>
        <option value=\"gingham\">Gingham</option>
        <option value=\"hudson\">Hudson</option>
        <option value=\"inkwell\">Inkwell</option>
        <option value=\"kelvin\">Kelvin</option>
        <option value=\"lark\">Lark</option>
        <option value=\"lofi\">Lo-Fi</option>
        <option value=\"maven\">Maven</option>
        <option value=\"mayfair\">Mayfair</option>
        <option value=\"moon\">Moon</option>
        <option value=\"nashville\">Nashville</option>
        <option value=\"perpetua\">Perpetua</option>
        <option value=\"reyes\">Reyes</option>
        <option value=\"rise\">Rise</option>
        <option value=\"slumber\">Slumber</option>
        <option value=\"stinson\">Stinson</option>
        <option value=\"toaster\">Toaster</option>
        <option value=\"valencia\">Valencia</option>
        <option value=\"walden\">Walden</option>
        <option value=\"willow\">Willow</option>
        <option value=\"xpro2\">X-pro II</option>
      </select>
    </div>
    <div id=\"image-upload\" class=\"form-group\">
      <label>Image</label>
      <input type=\"file\" class=\"form-control-file\" name=\"file\" />
    </div>

    <input type=\"submit\" class=\"btn btn-primary\" name=\"submit\" value=\"submit\" />
    <input type=\"hidden\" name=\"_handler\" value=\"addImage\" >
  </form>
</div>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/bit703/module5/plugins/evanamezcua/philter/components/addimages/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 10,  86 => 9,  81 => 7,  77 => 5,  68 => 3,  65 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row\">
  {% flash %}
    <p><div class=\"alert alert-{{ type == 'error' ? 'danger' : 'success' }}\">{{ message }}</div></p>
  {% endflash %}
</div>
<div class=\"row\">
  <form action=\"{{ url('image/add') }}\" accept-charset=\"UTF8\" enctype=\"multipart/form-data\"  id=\"image-form\" class=\"col col-sm-8 col-md-6\">
  
    {{ form_token() }}
    {{ form_sessionKey() }}

    <!-- req form fields from module 2 -->
    <div class=\"form-group\">
      <label>Name</label>
      <input type=\"text\" name=\"title\" class=\"form-control\" />
    </div>
    <div class=\"form-group\">
      <label>Description</label>
      <input type=\"text\" name=\"description\" class=\"form-control\" />
    </div>
    <div class=\"form-group\">
      <label>Tags - add a comma after each tag.</label>
      <input type=\"text\" name=\"tags\" class=\"form-control\" />
    </div>
    <div class=\"form-group\">
      <label>Filter</label>
      <select name=\"filter\" class=\"custom-select\">
        <option value=\"_1977\">1977</option>
        <option value=\"aden\">Aden</option>
        <option value=\"brannan\">Brannan</option>
        <option value=\"brooklyn\">Brooklyn</option>
        <option value=\"clarendon\">Clarendon</option>
        <option value=\"earlybird\">Earlybird</option>
        <option value=\"gingham\">Gingham</option>
        <option value=\"hudson\">Hudson</option>
        <option value=\"inkwell\">Inkwell</option>
        <option value=\"kelvin\">Kelvin</option>
        <option value=\"lark\">Lark</option>
        <option value=\"lofi\">Lo-Fi</option>
        <option value=\"maven\">Maven</option>
        <option value=\"mayfair\">Mayfair</option>
        <option value=\"moon\">Moon</option>
        <option value=\"nashville\">Nashville</option>
        <option value=\"perpetua\">Perpetua</option>
        <option value=\"reyes\">Reyes</option>
        <option value=\"rise\">Rise</option>
        <option value=\"slumber\">Slumber</option>
        <option value=\"stinson\">Stinson</option>
        <option value=\"toaster\">Toaster</option>
        <option value=\"valencia\">Valencia</option>
        <option value=\"walden\">Walden</option>
        <option value=\"willow\">Willow</option>
        <option value=\"xpro2\">X-pro II</option>
      </select>
    </div>
    <div id=\"image-upload\" class=\"form-group\">
      <label>Image</label>
      <input type=\"file\" class=\"form-control-file\" name=\"file\" />
    </div>

    <input type=\"submit\" class=\"btn btn-primary\" name=\"submit\" value=\"submit\" />
    <input type=\"hidden\" name=\"_handler\" value=\"addImage\" >
  </form>
</div>", "/Applications/MAMP/htdocs/bit703/module5/plugins/evanamezcua/philter/components/addimages/default.htm", "");
    }
}
