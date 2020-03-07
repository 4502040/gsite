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

/* D:\web\OSPanel\domains\gsite/themes/demo/partials/account/default.htm */
class __TwigTemplate_b247575ac3bfdfd5f280f7984086c4a469e00efb5c3e04ee3970ffce0e97abb1 extends \Twig\Template
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
    ";
        // line 2
        if ( !($context["user"] ?? null)) {
            // line 3
            echo "
    <div class=\"row\">

        <div class=\"col-md-6\">
            <h3>Войти</h3>
            ";
            // line 8
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::signin")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 9
            echo "        </div>

        <div class=\"col-md-6\">
            ";
            // line 12
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::register")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 13
            echo "        </div>

    </div>

    ";
        } else {
            // line 18
            echo "
    ";
            // line 19
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::activation_check")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 20
            echo "
    ";
            // line 21
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::update")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 22
            echo "
    ";
            // line 23
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::deactivate_link")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 24
            echo "
    ";
        }
        // line 26
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "D:\\web\\OSPanel\\domains\\gsite/themes/demo/partials/account/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 26,  90 => 24,  86 => 23,  83 => 22,  79 => 21,  76 => 20,  72 => 19,  69 => 18,  62 => 13,  58 => 12,  53 => 9,  49 => 8,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
    {% if not user %}

    <div class=\"row\">

        <div class=\"col-md-6\">
            <h3>Войти</h3>
            {% partial __SELF__ ~ '::signin' %}
        </div>

        <div class=\"col-md-6\">
            {% partial __SELF__ ~ '::register' %}
        </div>

    </div>

    {% else %}

    {% partial __SELF__ ~ '::activation_check' %}

    {% partial __SELF__ ~ '::update' %}

    {% partial __SELF__ ~ '::deactivate_link' %}

    {% endif %}
</div>", "D:\\web\\OSPanel\\domains\\gsite/themes/demo/partials/account/default.htm", "");
    }
}
