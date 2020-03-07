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

/* D:\web\OSPanel\domains\gsite/themes/demo/pages/posts-public.htm */
class __TwigTemplate_740ae4abcb100a573286712b95f8970e63ca52006bf82e0355173b1ba5d3b18b extends \Twig\Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("newsPosts"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 5
        echo "        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "D:\\web\\OSPanel\\domains\\gsite/themes/demo/pages/posts-public.htm";
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
            {% component 'newsPosts' %}
        </div>
    </div>
</div>", "D:\\web\\OSPanel\\domains\\gsite/themes/demo/pages/posts-public.htm", "");
    }
}
