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

/* D:\web\OSPanel\domains\gsite/themes/demo/pages/posts-private.htm */
class __TwigTemplate_a36b5ed695634eb3be09a44986565183f570b60887d3cffd1ef048568c92c0d5 extends \Twig\Template
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
        $context['__cms_component_params']['cat'] = 1        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("newsPosts"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 5
        echo "        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "D:\\web\\OSPanel\\domains\\gsite/themes/demo/pages/posts-private.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            {% component 'newsPosts' cat=1 %}
        </div>
    </div>
</div>", "D:\\web\\OSPanel\\domains\\gsite/themes/demo/pages/posts-private.htm", "");
    }
}
