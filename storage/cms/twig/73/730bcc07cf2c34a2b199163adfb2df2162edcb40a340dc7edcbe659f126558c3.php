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

/* D:\web\OSPanel\domains\gsite/themes/demo/partials/newsposts/default.htm */
class __TwigTemplate_f0a7744a6fff295f57fcfddca08512981c48cf8f85d3fba4eba6fa6f46b9fb96 extends \Twig\Template
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
        $context["posts"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "posts", [], "any", false, false, false, 1);
        // line 2
        echo "
<div class=\"row\" style=\"margin-top: 50px;\">
    <div class=\"col-md-6\">
        <div class=\"post-list\">
            ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 7
            echo "
            ";
            // line 8
            if ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "category", [], "any", false, false, false, 8), "id", [], "any", false, false, false, 8) == 2) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 8), "id", [], "any", false, false, false, 8) == "posts-public")) || ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 9
$context["post"], "category", [], "any", false, false, false, 9), "id", [], "any", false, false, false, 9) == 1) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 9), "id", [], "any", false, false, false, 9) == "posts-private")))) {
                // line 11
                echo "            <div class=\"post-item\">

                ";
                // line 13
                if (twig_get_attribute($this->env, $this->source, $context["post"], "image", [], "any", false, false, false, 13)) {
                    // line 14
                    echo "                <div class=\"post-image\">
                    <a href=\"/";
                    // line 15
                    echo twig_escape_filter($this->env, ($context["postPage"] ?? null), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, false, 15), "html", null, true);
                    echo "\">
                        <img src=\"";
                    // line 16
                    echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["post"], "image", [], "any", false, false, false, 16));
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 16), "html", null, true);
                    echo "\" width=\"300px\">

                    </a>
                </div>
                ";
                }
                // line 21
                echo "
                <h3 class=\"post-title\"><a href=\"/";
                // line 22
                echo twig_escape_filter($this->env, ($context["postPage"] ?? null), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, false, 22), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 22), "html", null, true);
                echo "</a></h3>
                <p class=\"post-date\"><i class=\"icon icon-calendar\"> </i> ";
                // line 23
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "published_at", [], "any", false, false, false, 23), "d.m.Y"), "html", null, true);
                echo "</p>
                ";
                // line 40
                echo "            </div>

            ";
            }
            // line 43
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "        </div>
    </div>
</div>

";
        // line 49
        echo twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "render", [], "any", false, false, false, 49);
    }

    public function getTemplateName()
    {
        return "D:\\web\\OSPanel\\domains\\gsite/themes/demo/partials/newsposts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 49,  107 => 45,  100 => 43,  95 => 40,  91 => 23,  83 => 22,  80 => 21,  70 => 16,  64 => 15,  61 => 14,  59 => 13,  55 => 11,  53 => 9,  52 => 8,  49 => 7,  45 => 6,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set posts = __SELF__.posts %}

<div class=\"row\" style=\"margin-top: 50px;\">
    <div class=\"col-md-6\">
        <div class=\"post-list\">
            {% for post in posts %}

            {% if ((post.category.id==2 and this.page.id == 'posts-public')
            or (post.category.id==1 and this.page.id == 'posts-private')
            ) %}
            <div class=\"post-item\">

                {% if post.image %}
                <div class=\"post-image\">
                    <a href=\"/{{ postPage }}/{{ post.slug }}\">
                        <img src=\"{{ post.image|media }}\" alt=\"{{ post.title }}\" width=\"300px\">

                    </a>
                </div>
                {% endif %}

                <h3 class=\"post-title\"><a href=\"/{{ postPage }}/{{ post.slug }}\">{{ post.title }}</a></h3>
                <p class=\"post-date\"><i class=\"icon icon-calendar\"> </i> {{ post.published_at|date('d.m.Y') }}</p>
                {#
                {% if post.tags %}
                <p class=\"post-tags\">Tags:
                    {% for tag in post.tags %}
                    <a href=\"{{ 'blog'|page }}/tag/{{ tag }}\">{{ tag }}</a>{% if not loop.last %},{% endif %}
                    {% endfor %}
                </p>
                {% endif %}

                {% if post.introductory %}
                <div class=\"post-introductory\">{{ post.introductory|raw }}</div>
                {% elseif post.content %}
                <div class=\"post-content\">{{ post.content|raw }}</div>
                {% endif %}

                #}
            </div>

            {% endif %}

            {% endfor %}
        </div>
    </div>
</div>

{{ posts.render|raw }}", "D:\\web\\OSPanel\\domains\\gsite/themes/demo/partials/newsposts/default.htm", "");
    }
}
