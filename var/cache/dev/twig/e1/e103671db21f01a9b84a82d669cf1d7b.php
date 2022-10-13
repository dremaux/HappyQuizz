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
        echo "    <div class=\"alert alert-primary\" style=\"text-align:center\" role=\"alert\">
            
        
        ";
        // line 12
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "user", [], "any", false, false, false, 12)) {
            // line 13
            echo "                
            <td>";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 14, $this->source); })()), "text", [], "any", false, false, false, 14), "html", null, true);
            echo "</td>

                ";
            // line 16
            if ((twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 16, $this->source); })()), "type", [], "any", false, false, false, 16) == "O/N")) {
                // line 17
                echo "
                    ";
                // line 18
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), 'form_start');
                echo "

                        <div class=\"col-md-2\">";
                // line 20
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "value", [], "any", false, false, false, 20), 'row');
                echo "</div>
                        <div class=\"col-md-2\">";
                // line 21
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "anonymous", [], "any", false, false, false, 21), 'row');
                echo "</div>
                        <button class=\"btn btn-primary\">";
                // line 22
                echo twig_escape_filter($this->env, ((array_key_exists("button", $context)) ? (_twig_default_filter((isset($context["button"]) || array_key_exists("button", $context) ? $context["button"] : (function () { throw new RuntimeError('Variable "button" does not exist.', 22, $this->source); })()), "enregistrer")) : ("enregistrer")), "html", null, true);
                echo "</button>
                    ";
                // line 23
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), 'form_end', ["render_rest" => false]);
                echo "

                ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 25
(isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 25, $this->source); })()), "type", [], "any", false, false, false, 25) == "QCM")) {
                // line 26
                echo "
                    ";
                // line 27
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form3"]) || array_key_exists("form3", $context) ? $context["form3"] : (function () { throw new RuntimeError('Variable "form3" does not exist.', 27, $this->source); })()), 'form_start');
                echo "
                        <div class=\"col-md-2\">";
                // line 28
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form3"]) || array_key_exists("form3", $context) ? $context["form3"] : (function () { throw new RuntimeError('Variable "form3" does not exist.', 28, $this->source); })()), "value", [], "any", false, false, false, 28), 'row');
                echo "</div>
                        <div class=\"col-md-2\">";
                // line 29
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form3"]) || array_key_exists("form3", $context) ? $context["form3"] : (function () { throw new RuntimeError('Variable "form3" does not exist.', 29, $this->source); })()), "anonymous", [], "any", false, false, false, 29), 'row');
                echo "</div>
                        <button class=\"btn btn-primary\">";
                // line 30
                echo twig_escape_filter($this->env, ((array_key_exists("button", $context)) ? (_twig_default_filter((isset($context["button"]) || array_key_exists("button", $context) ? $context["button"] : (function () { throw new RuntimeError('Variable "button" does not exist.', 30, $this->source); })()), "enregistrer")) : ("enregistrer")), "html", null, true);
                echo "</button>
                    ";
                // line 31
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form3"]) || array_key_exists("form3", $context) ? $context["form3"] : (function () { throw new RuntimeError('Variable "form3" does not exist.', 31, $this->source); })()), 'form_end', ["render_rest" => false]);
                echo "

                ";
            } else {
                // line 34
                echo "
                    ";
                // line 35
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form2"]) || array_key_exists("form2", $context) ? $context["form2"] : (function () { throw new RuntimeError('Variable "form2" does not exist.', 35, $this->source); })()), 'form_start');
                echo "
                        <div class=\"col-md-12\">";
                // line 36
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form2"]) || array_key_exists("form2", $context) ? $context["form2"] : (function () { throw new RuntimeError('Variable "form2" does not exist.', 36, $this->source); })()), "value", [], "any", false, false, false, 36), 'row');
                echo "</div>
                        <div class=\"col-md-2\">";
                // line 37
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form2"]) || array_key_exists("form2", $context) ? $context["form2"] : (function () { throw new RuntimeError('Variable "form2" does not exist.', 37, $this->source); })()), "anonymous", [], "any", false, false, false, 37), 'row');
                echo "</div>
                        <button class=\"btn btn-primary\">";
                // line 38
                echo twig_escape_filter($this->env, ((array_key_exists("button", $context)) ? (_twig_default_filter((isset($context["button"]) || array_key_exists("button", $context) ? $context["button"] : (function () { throw new RuntimeError('Variable "button" does not exist.', 38, $this->source); })()), "enregistrer")) : ("enregistrer")), "html", null, true);
                echo "</button>
                    ";
                // line 39
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form2"]) || array_key_exists("form2", $context) ? $context["form2"] : (function () { throw new RuntimeError('Variable "form2" does not exist.', 39, $this->source); })()), 'form_end', ["render_rest" => false]);
                echo "

                ";
            }
            // line 42
            echo "
        ";
        }
        // line 44
        echo "    </div>
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
        return array (  188 => 44,  184 => 42,  178 => 39,  174 => 38,  170 => 37,  166 => 36,  162 => 35,  159 => 34,  153 => 31,  149 => 30,  145 => 29,  141 => 28,  137 => 27,  134 => 26,  132 => 25,  127 => 23,  123 => 22,  119 => 21,  115 => 20,  110 => 18,  107 => 17,  105 => 16,  100 => 14,  97 => 13,  95 => 12,  90 => 9,  80 => 8,  69 => 5,  59 => 4,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'base.html.twig' %}

{% block javascripts %}
        
{% endblock %}

{% block body %}
    <div class=\"alert alert-primary\" style=\"text-align:center\" role=\"alert\">
            
        
        {% if app.user %}
                
            <td>{{ question.text }}</td>

                {% if question.type == \"O/N\" %}

                    {{ form_start(form) }}

                        <div class=\"col-md-2\">{{ form_row(form.value) }}</div>
                        <div class=\"col-md-2\">{{ form_row(form.anonymous) }}</div>
                        <button class=\"btn btn-primary\">{{ button|default('enregistrer') }}</button>
                    {{ form_end(form, {'render_rest': false}) }}

                {% elseif  question.type == \"QCM\" %}

                    {{ form_start(form3) }}
                        <div class=\"col-md-2\">{{ form_row(form3.value) }}</div>
                        <div class=\"col-md-2\">{{ form_row(form3.anonymous) }}</div>
                        <button class=\"btn btn-primary\">{{ button|default('enregistrer') }}</button>
                    {{ form_end(form3, {'render_rest': false}) }}

                {% else %}

                    {{ form_start(form2) }}
                        <div class=\"col-md-12\">{{ form_row(form2.value) }}</div>
                        <div class=\"col-md-2\">{{ form_row(form2.anonymous) }}</div>
                        <button class=\"btn btn-primary\">{{ button|default('enregistrer') }}</button>
                    {{ form_end(form2, {'render_rest': false}) }}

                {% endif %}

        {% endif %}
    </div>
{% endblock %}", "randomQuestion/home.html.twig", "C:\\Users\\Lucas.DREMAUX\\Documents\\GitHub\\HappyQuizz\\templates\\randomQuestion\\home.html.twig");
    }
}
