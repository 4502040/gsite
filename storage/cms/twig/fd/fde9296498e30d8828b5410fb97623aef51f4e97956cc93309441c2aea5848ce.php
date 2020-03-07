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

/* D:\web\OSPanel\domains\gsite/themes/demo/pages/post.htm */
class __TwigTemplate_1152c710e19329f939e6ca68067dc90b425e933ef1e52043e6478b8e6ef22d01 extends \Twig\Template
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
        echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            ";
        // line 4
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("newsPost"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 5
        echo "        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "D:\\web\\OSPanel\\domains\\gsite/themes/demo/pages/post.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            {% component 'newsPost' %}
        </div>
    </div>
</div>", "D:\\web\\OSPanel\\domains\\gsite/themes/demo/pages/post.htm", "");
    }
}
