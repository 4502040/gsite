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

/* D:\web\OSPanel\domains\gsite/themes/demo/partials/account/signin.htm */
class __TwigTemplate_98d44a27d318df508b36c3fc083eaffb4936418a83bae2076dea34ae470c4244 extends \Twig\Template
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
        echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), ["ajax", "onSignin"]);
        echo "

    <div class=\"form-group\">
        <label for=\"userSigninLogin\">";
        // line 4
        echo twig_escape_filter($this->env, ($context["loginAttributeLabel"] ?? null), "html", null, true);
        echo "</label>
        <input
            name=\"login\"
            type=\"text\"
            class=\"form-control\"
            id=\"userSigninLogin\"
            placeholder=\"Ваш ";
        // line 10
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, ($context["loginAttributeLabel"] ?? null)), "html", null, true);
        echo "\" />
    </div>

    <div class=\"form-group\">
        <label for=\"userSigninPassword\">Пароль</label>
        <input
            name=\"password\"
            type=\"password\"
            class=\"form-control\"
            id=\"userSigninPassword\"
            placeholder=\"Введите пароль\" />
    </div>

    ";
        // line 23
        if ((($context["rememberLoginMode"] ?? null) == "ask")) {
            // line 24
            echo "    <div class=\"form-group\">
        <div class=\"checkbox\">
        <label><input name=\"remember\" type=\"checkbox\" value=\"1\">Stay logged in</label>
        </div>
    </div>
    ";
        }
        // line 30
        echo "
    <button type=\"submit\" class=\"btn btn-default\">Войти</button>

";
        // line 33
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
    }

    public function getTemplateName()
    {
        return "D:\\web\\OSPanel\\domains\\gsite/themes/demo/partials/account/signin.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 33,  78 => 30,  70 => 24,  68 => 23,  52 => 10,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_ajax('onSignin') }}

    <div class=\"form-group\">
        <label for=\"userSigninLogin\">{{ loginAttributeLabel }}</label>
        <input
            name=\"login\"
            type=\"text\"
            class=\"form-control\"
            id=\"userSigninLogin\"
            placeholder=\"Ваш {{ loginAttributeLabel|lower }}\" />
    </div>

    <div class=\"form-group\">
        <label for=\"userSigninPassword\">Пароль</label>
        <input
            name=\"password\"
            type=\"password\"
            class=\"form-control\"
            id=\"userSigninPassword\"
            placeholder=\"Введите пароль\" />
    </div>

    {% if rememberLoginMode == 'ask' %}
    <div class=\"form-group\">
        <div class=\"checkbox\">
        <label><input name=\"remember\" type=\"checkbox\" value=\"1\">Stay logged in</label>
        </div>
    </div>
    {% endif %}

    <button type=\"submit\" class=\"btn btn-default\">Войти</button>

{{ form_close() }}", "D:\\web\\OSPanel\\domains\\gsite/themes/demo/partials/account/signin.htm", "");
    }
}
