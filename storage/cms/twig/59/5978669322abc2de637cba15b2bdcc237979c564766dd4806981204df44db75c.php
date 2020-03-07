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

/* D:\web\OSPanel\domains\gsite/themes/demo/partials/site/header.htm */
class __TwigTemplate_e5929330031faeab4078bae77d175da24d68199fd81ed3b9e3474300602af951 extends \Twig\Template
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
        echo "<!-- Nav -->
<nav id=\"layout-nav\" class=\"navbar navbar-inverse navbar-fixed-top navbar-autohide\" role=\"navigation\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-main-collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">Мой Сайт</a>
        </div>
        <div class=\"collapse navbar-collapse navbar-main-collapse\">
            <ul class=\"nav navbar-nav\">
                <li class=\"separator hidden-xs\"></li>
                <li class=\"";
        // line 16
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 16), "id", [], "any", false, false, false, 16) == "home")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">Главная</a></li>
                <li class=\"";
        // line 17
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 17), "id", [], "any", false, false, false, 17) == "posts-public")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("posts-public");
        echo "\">Объявления</a></li>
                <li class=\"";
        // line 18
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 18), "id", [], "any", false, false, false, 18) == "posts-private")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("posts-private");
        echo "\">Закрытая часть</a></li>
                ";
        // line 19
        if (($context["user"] ?? null)) {
            // line 20
            echo "                 <li>
                     <a data-request=\"onLogout\" data-request-data=\"redirect: '/'\" href=\"#\">Выйти</a>
                 </li>
                ";
        } else {
            // line 24
            echo "                <li class=\"";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 24), "id", [], "any", false, false, false, 24) == "login")) {
                echo "active";
            }
            echo "\"><a href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("login");
            echo "\">Войти</a></li>
                ";
        }
        // line 26
        echo "            </ul>
        </div>
    </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "D:\\web\\OSPanel\\domains\\gsite/themes/demo/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 26,  89 => 24,  83 => 20,  81 => 19,  73 => 18,  65 => 17,  57 => 16,  49 => 11,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Nav -->
<nav id=\"layout-nav\" class=\"navbar navbar-inverse navbar-fixed-top navbar-autohide\" role=\"navigation\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-main-collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"{{ 'home'|page }}\">Мой Сайт</a>
        </div>
        <div class=\"collapse navbar-collapse navbar-main-collapse\">
            <ul class=\"nav navbar-nav\">
                <li class=\"separator hidden-xs\"></li>
                <li class=\"{% if this.page.id == 'home' %}active{% endif %}\"><a href=\"{{ 'home'|page }}\">Главная</a></li>
                <li class=\"{% if this.page.id == 'posts-public' %}active{% endif %}\"><a href=\"{{ 'posts-public'|page }}\">Объявления</a></li>
                <li class=\"{% if this.page.id == 'posts-private' %}active{% endif %}\"><a href=\"{{ 'posts-private'|page }}\">Закрытая часть</a></li>
                {% if user %}
                 <li>
                     <a data-request=\"onLogout\" data-request-data=\"redirect: '/'\" href=\"#\">Выйти</a>
                 </li>
                {% else %}
                <li class=\"{% if this.page.id == 'login' %}active{% endif %}\"><a href=\"{{ 'login'|page }}\">Войти</a></li>
                {% endif %}
            </ul>
        </div>
    </div>
</nav>", "D:\\web\\OSPanel\\domains\\gsite/themes/demo/partials/site/header.htm", "");
    }
}
