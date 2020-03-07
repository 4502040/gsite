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

/* D:\web\OSPanel\domains\gsite/themes/demo/partials/newspost/default.htm */
class __TwigTemplate_f35f325804a0a7d2241da33508c116236c5860c35a014c7af7e001b8de6d8711 extends \Twig\Template
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
        $context["post"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "post", [], "any", false, false, false, 1);
        // line 2
        echo "
<div class=\"post\">
    <div class=\"post-content\">
        <h2 class=\"post-title\">";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, false, 5), "html", null, true);
        echo "</h2>

        <p class=\"post-date\">
            <i class=\"icon icon-calendar\"> </i> Опубликовано: ";
        // line 8
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "published_at", [], "any", false, false, false, 8), "d.m.Y"), "html", null, true);
        echo "</p>
        ";
        // line 19
        echo "
        ";
        // line 20
        if (twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "image", [], "any", false, false, false, 20)) {
            echo "<div class=\"post-image\"><img src=\"";
            echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "image", [], "any", false, false, false, 20));
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, false, 20), "html", null, true);
            echo "\"></div>";
        }
        // line 24
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "content", [], "any", false, false, false, 24)) {
            echo "<div class=\"post-content\">";
            echo twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "content", [], "any", false, false, false, 24);
            echo "</div>";
        }
        // line 25
        echo "    </div>
    <div class=\"post-nav\">
        ";
        // line 27
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "prev", [], "method", false, false, false, 27), "title", [], "any", false, false, false, 27)) {
            echo "Prev: <a href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("blog");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "prev", [], "method", false, false, false, 27), "slug", [], "any", false, false, false, 27), "html", null, true);
            echo "\" class=\"prev\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "prev", [], "method", false, false, false, 27), "title", [], "any", false, false, false, 27), "html", null, true);
            echo "</a>";
        }
        // line 28
        echo "        <br>
        ";
        // line 29
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "next", [], "method", false, false, false, 29), "title", [], "any", false, false, false, 29)) {
            echo "Next: <a href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("blog");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "next", [], "method", false, false, false, 29), "slug", [], "any", false, false, false, 29), "html", null, true);
            echo "\" class=\"next\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "next", [], "method", false, false, false, 29), "title", [], "any", false, false, false, 29), "html", null, true);
            echo "</a>";
        }
        // line 30
        echo "    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "D:\\web\\OSPanel\\domains\\gsite/themes/demo/partials/newspost/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 30,  89 => 29,  86 => 28,  76 => 27,  72 => 25,  65 => 24,  57 => 20,  54 => 19,  50 => 8,  44 => 5,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set post = __SELF__.post %}

<div class=\"post\">
    <div class=\"post-content\">
        <h2 class=\"post-title\">{{ post.title }}</h2>

        <p class=\"post-date\">
            <i class=\"icon icon-calendar\"> </i> Опубликовано: {{ post.published_at|date('d.m.Y') }}</p>
        {#
        {% if post.tags %}
        <p class=\"post-tags\">Tags:
            {% for tag in post.tags %}
            <a href=\"{{ 'blog'|page }}/tag/{{ tag }}\">{{ tag }}</a>{% if not loop.last %},{% endif %}
            {% endfor %}
        </p>
        {% endif %}

        #}

        {% if post.image %}<div class=\"post-image\"><img src=\"{{ post.image|media }}\" alt=\"{{ post.title }}\"></div>{% endif %}
{#
        {% if post.introductory %}<div class=\"post-introductory\">{{ post.introductory|raw }}</div>{% endif %}
        #}
        {% if post.content %}<div class=\"post-content\">{{ post.content|raw }}</div>{% endif %}
    </div>
    <div class=\"post-nav\">
        {% if post.prev().title %}Prev: <a href=\"{{ 'blog'|page }}/{{ post.prev().slug }}\" class=\"prev\">{{ post.prev().title }}</a>{% endif %}
        <br>
        {% if post.next().title %}Next: <a href=\"{{ 'blog'|page }}/{{ post.next().slug }}\" class=\"next\">{{ post.next().title }}</a>{% endif %}
    </div>
</div>", "D:\\web\\OSPanel\\domains\\gsite/themes/demo/partials/newspost/default.htm", "");
    }
}
