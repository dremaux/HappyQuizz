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

/* randomQuestion/home.html.twig */
class __TwigTemplate_2aebcf2ec357156cab66edd4ca094b0b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "randomQuestion/home.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "randomQuestion/home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "randomQuestion/home.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 5
        echo "        
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "
    ";
        // line 10
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "user", [], "any", false, false, false, 10)) {
            // line 11
            echo "            
            <td>";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 12, $this->source); })()), "text", [], "any", false, false, false, 12), "html", null, true);
            echo "</td>
            <td>";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "user", [], "any", false, false, false, 13), "id", [], "any", false, false, false, 13), "html", null, true);
            echo "</td>
            <td>";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 14, $this->source); })()), "id", [], "any", false, false, false, 14), "html", null, true);
            echo "</td>


            ";
            // line 17
            if ((twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 17, $this->source); })()), "type", [], "any", false, false, false, 17) == "O/N")) {
                // line 18
                echo "
                ";
                // line 19
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), 'form_start');
                echo "
                    <fieldset>
                        <div>
                        <input type=\"radio\" id=\"huey\" name=\"drone\" value=\"huey\"
                                checked>
                        <label for=\"huey\">Oui</label>
                        </div>

                        <div>
                        <input type=\"radio\" id=\"dewey\" name=\"drone\" value=\"dewey\">
                        <label for=\"dewey\">Non</label>
                        </div>
                    </fieldset>

                    <div class=\"col-md-2\">";
                // line 33
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "value", [], "any", false, false, false, 33), 'row');
                echo "</div>
                        <button class=\"btn btn-primary\">";
                // line 34
                echo twig_escape_filter($this->env, ((array_key_exists("button", $context)) ? (_twig_default_filter((isset($context["button"]) || array_key_exists("button", $context) ? $context["button"] : (function () { throw new RuntimeError('Variable "button" does not exist.', 34, $this->source); })()), "enregistrer")) : ("enregistrer")), "html", null, true);
                echo "</button>
                ";
                // line 35
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), 'form_end', ["render_rest" => false]);
                echo "

            ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 37
(isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 37, $this->source); })()), "type", [], "any", false, false, false, 37) == "QCM")) {
                // line 38
                echo "
                ";
                // line 39
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form3"]) || array_key_exists("form3", $context) ? $context["form3"] : (function () { throw new RuntimeError('Variable "form3" does not exist.', 39, $this->source); })()), 'form_start');
                echo "
                    <div class=\"col-md-2\">";
                // line 40
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form3"]) || array_key_exists("form3", $context) ? $context["form3"] : (function () { throw new RuntimeError('Variable "form3" does not exist.', 40, $this->source); })()), "value", [], "any", false, false, false, 40), 'row');
                echo "</div>
                        <button class=\"btn btn-primary\">";
                // line 41
                echo twig_escape_filter($this->env, ((array_key_exists("button", $context)) ? (_twig_default_filter((isset($context["button"]) || array_key_exists("button", $context) ? $context["button"] : (function () { throw new RuntimeError('Variable "button" does not exist.', 41, $this->source); })()), "enregistrer")) : ("enregistrer")), "html", null, true);
                echo "</button>
                ";
                // line 42
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form3"]) || array_key_exists("form3", $context) ? $context["form3"] : (function () { throw new RuntimeError('Variable "form3" does not exist.', 42, $this->source); })()), 'form_end', ["render_rest" => false]);
                echo "


            ";
            } else {
                // line 46
                echo "
                ";
                // line 47
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form2"]) || array_key_exists("form2", $context) ? $context["form2"] : (function () { throw new RuntimeError('Variable "form2" does not exist.', 47, $this->source); })()), 'form_start');
                echo "
                    <div class=\"col-md-2\">";
                // line 48
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form2"]) || array_key_exists("form2", $context) ? $context["form2"] : (function () { throw new RuntimeError('Variable "form2" does not exist.', 48, $this->source); })()), "value", [], "any", false, false, false, 48), 'row');
                echo "</div>
                        <button class=\"btn btn-primary\">";
                // line 49
                echo twig_escape_filter($this->env, ((array_key_exists("button", $context)) ? (_twig_default_filter((isset($context["button"]) || array_key_exists("button", $context) ? $context["button"] : (function () { throw new RuntimeError('Variable "button" does not exist.', 49, $this->source); })()), "enregistrer")) : ("enregistrer")), "html", null, true);
                echo "</button>
                ";
                // line 50
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form2"]) || array_key_exists("form2", $context) ? $context["form2"] : (function () { throw new RuntimeError('Variable "form2" does not exist.', 50, $this->source); })()), 'form_end', ["render_rest" => false]);
                echo "

            ";
            }
            // line 53
            echo "    ";
        }
        // line 54
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "randomQuestion/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 54,  192 => 53,  186 => 50,  182 => 49,  178 => 48,  174 => 47,  171 => 46,  164 => 42,  160 => 41,  156 => 40,  152 => 39,  149 => 38,  147 => 37,  142 => 35,  138 => 34,  134 => 33,  117 => 19,  114 => 18,  112 => 17,  106 => 14,  102 => 13,  98 => 12,  95 => 11,  93 => 10,  90 => 9,  80 => 8,  69 => 5,  59 => 4,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'base.html.twig' %}

{% block javascripts %}
        
{% endblock %}

{% block body %}

    {% if app.user %}
            
            <td>{{ question.text }}</td>
            <td>{{ app.user.id }}</td>
            <td>{{ question.id }}</td>


            {% if question.type == \"O/N\" %}

                {{ form_start(form) }}
                    <fieldset>
                        <div>
                        <input type=\"radio\" id=\"huey\" name=\"drone\" value=\"huey\"
                                checked>
                        <label for=\"huey\">Oui</label>
                        </div>

                        <div>
                        <input type=\"radio\" id=\"dewey\" name=\"drone\" value=\"dewey\">
                        <label for=\"dewey\">Non</label>
                        </div>
                    </fieldset>

                    <div class=\"col-md-2\">{{ form_row(form.value) }}</div>
                        <button class=\"btn btn-primary\">{{ button|default('enregistrer') }}</button>
                {{ form_end(form, {'render_rest': false}) }}

            {% elseif  question.type == \"QCM\" %}

                {{ form_start(form3) }}
                    <div class=\"col-md-2\">{{ form_row(form3.value) }}</div>
                        <button class=\"btn btn-primary\">{{ button|default('enregistrer') }}</button>
                {{ form_end(form3, {'render_rest': false}) }}


            {% else %}

                {{ form_start(form2) }}
                    <div class=\"col-md-2\">{{ form_row(form2.value) }}</div>
                        <button class=\"btn btn-primary\">{{ button|default('enregistrer') }}</button>
                {{ form_end(form2, {'render_rest': false}) }}

            {% endif %}
    {% endif %}

{% endblock %}", "randomQuestion/home.html.twig", "C:\\Users\\Lucas.DREMAUX\\Documents\\GitHub\\handappy\\templates\\randomQuestion\\home.html.twig");
    }
}
