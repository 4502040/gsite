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

/* D:\web\OSPanel\domains\gsite/themes/demo/partials/account/register.htm */
class __TwigTemplate_aa5cfe9fcb383ac1abff183d189a3ed21160bdd851729e0c0c251b51013ec9d0 extends \Twig\Template
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
        if (($context["canRegister"] ?? null)) {
            // line 2
            echo "    <h3>Регистрация</h3>

    ";
            // line 4
            echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), ["ajax", "onRegister"]);
            echo "

        <div class=\"form-group\">
            <label for=\"registerName\">Полное имя</label>
            <input
                name=\"name\"
                type=\"text\"
                class=\"form-control\"
                id=\"registerName\"
                placeholder=\"Имя Фамилия\" />
        </div>

        <div class=\"form-group\">
            <label for=\"registerEmail\">Email</label>
            <input
                name=\"email\"
                type=\"email\"
                class=\"form-control\"
                id=\"registerEmail\"
                placeholder=\"Введите email\" />
        </div>

        ";
            // line 26
            if ((($context["loginAttribute"] ?? null) == "username")) {
                // line 27
                echo "            <div class=\"form-group\">
                <label for=\"registerUsername\">Username</label>
                <input
                    name=\"username\"
                    type=\"text\"
                    class=\"form-control\"
                    id=\"registerUsername\"
                    placeholder=\"Enter your username\" />
            </div>
        ";
            }
            // line 37
            echo "
        <div class=\"form-group\">
            <label for=\"registerPassword\">Пароль</label>
            <input
                name=\"password\"
                type=\"password\"
                class=\"form-control\"
                id=\"registerPassword\"
                placeholder=\"Напишите пароль\" />
        </div>

        <button type=\"submit\" class=\"btn btn-default\">Зарегистрироваться</button>

    ";
            // line 50
            echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
            echo "
";
        } else {
            // line 52
            echo "    <!-- Registration is disabled. -->
";
        }
    }

    public function getTemplateName()
    {
        return "D:\\web\\OSPanel\\domains\\gsite/themes/demo/partials/account/register.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 52,  97 => 50,  82 => 37,  70 => 27,  68 => 26,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if canRegister %}
    <h3>Регистрация</h3>

    {{ form_ajax('onRegister') }}

        <div class=\"form-group\">
            <label for=\"registerName\">Полное имя</label>
            <input
                name=\"name\"
                type=\"text\"
                class=\"form-control\"
                id=\"registerName\"
                placeholder=\"Имя Фамилия\" />
        </div>

        <div class=\"form-group\">
            <label for=\"registerEmail\">Email</label>
            <input
                name=\"email\"
                type=\"email\"
                class=\"form-control\"
                id=\"registerEmail\"
                placeholder=\"Введите email\" />
        </div>

        {% if loginAttribute == \"username\" %}
            <div class=\"form-group\">
                <label for=\"registerUsername\">Username</label>
                <input
                    name=\"username\"
                    type=\"text\"
                    class=\"form-control\"
                    id=\"registerUsername\"
                    placeholder=\"Enter your username\" />
            </div>
        {% endif %}

        <div class=\"form-group\">
            <label for=\"registerPassword\">Пароль</label>
            <input
                name=\"password\"
                type=\"password\"
                class=\"form-control\"
                id=\"registerPassword\"
                placeholder=\"Напишите пароль\" />
        </div>

        <button type=\"submit\" class=\"btn btn-default\">Зарегистрироваться</button>

    {{ form_close() }}
{% else %}
    <!-- Registration is disabled. -->
{% endif %}", "D:\\web\\OSPanel\\domains\\gsite/themes/demo/partials/account/register.htm", "");
    }
}
