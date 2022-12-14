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

/* pages/home.html.twig */
class __TwigTemplate_e7cd75a0358b16c289726a2a4b1c15d9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/home.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/home.html.twig", 2);
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
    <body>
        <div class=\"col text-center\">

        ";
        // line 13
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "user", [], "any", false, false, false, 13)) {
            // line 14
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "user", [], "any", false, false, false, 14), "role", [], "any", false, false, false, 14) == "Admin")) {
                // line 15
                echo "                <a class=\"btn btn-primary btn-lg mt-4\" href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
                echo "\">
                    <i class=\"fa-solid fa-user me-2\"></i> Page Admin
                </a>
                ";
            }
            // line 19
            echo "        ";
        }
        // line 20
        echo "        </div>
        <div class=\"container text-center\">
            <div class=\"row mt-4\" style=\"height: 100px;\">
                <div class=\"col-sm-4\">
                    <button class=\"btn btn-secondary btn-lg w-100 h-100\" type=\"button\">
                        <i class=\"fa-solid fa-calendar-days me-2\"></i> Emploi du temps
                    </button>
                </div>
                <div class=\"col-sm-4\">
                    <button class=\"btn btn-secondary btn-lg w-100 h-100\" type=\"button\">
                        <i class=\"fa-solid fa-file-contract me-2\"></i> Fiche de paie
                    </button>
                </div>
                <div class=\"col-sm-4\">
                    <button class=\"btn btn-secondary btn-lg w-100 h-100\" type=\"button\">
                        <i class=\"fa-solid fa-plane-departure me-2\"></i> Cong??s
                    </button>
                </div>
            </div>
            <div class=\"row mt-4\" style=\"height: 100px;\">
                <div class=\"col-sm-4\">
                    <button class=\"btn btn-secondary btn-lg w-100  h-100\" type=\"button\">
                        <i class=\"fa-solid fa-clock me-2\"></i> Pointage
                    </button>
                </div>
                <div class=\"col-sm-4\">
                    <button class=\"btn btn-secondary btn-lg w-100  h-100\" type=\"button\">
                        <i class=\"fa-solid fa-umbrella-beach me-2\"></i> CSE
                    </button>
                </div>
                <div class=\"col-sm-4\">
                    <button class=\"btn btn-secondary btn-lg w-100  h-100\" type=\"button\">
                        <i class=\"fa-solid fa-circle-info me-2\"></i> Informations
                    </button>
                </div>
            </div>
        </div>
    </body>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "pages/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 20,  109 => 19,  101 => 15,  98 => 14,  96 => 13,  90 => 9,  80 => 8,  69 => 5,  59 => 4,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'base.html.twig' %}

{% block javascripts %}
        
{% endblock %}

{% block body %}

    <body>
        <div class=\"col text-center\">

        {% if app.user %}
            {% if app.user.role == \"Admin\" %}
                <a class=\"btn btn-primary btn-lg mt-4\" href=\"{{ path('admin') }}\">
                    <i class=\"fa-solid fa-user me-2\"></i> Page Admin
                </a>
                {% endif %}
        {% endif %}
        </div>
        <div class=\"container text-center\">
            <div class=\"row mt-4\" style=\"height: 100px;\">
                <div class=\"col-sm-4\">
                    <button class=\"btn btn-secondary btn-lg w-100 h-100\" type=\"button\">
                        <i class=\"fa-solid fa-calendar-days me-2\"></i> Emploi du temps
                    </button>
                </div>
                <div class=\"col-sm-4\">
                    <button class=\"btn btn-secondary btn-lg w-100 h-100\" type=\"button\">
                        <i class=\"fa-solid fa-file-contract me-2\"></i> Fiche de paie
                    </button>
                </div>
                <div class=\"col-sm-4\">
                    <button class=\"btn btn-secondary btn-lg w-100 h-100\" type=\"button\">
                        <i class=\"fa-solid fa-plane-departure me-2\"></i> Cong??s
                    </button>
                </div>
            </div>
            <div class=\"row mt-4\" style=\"height: 100px;\">
                <div class=\"col-sm-4\">
                    <button class=\"btn btn-secondary btn-lg w-100  h-100\" type=\"button\">
                        <i class=\"fa-solid fa-clock me-2\"></i> Pointage
                    </button>
                </div>
                <div class=\"col-sm-4\">
                    <button class=\"btn btn-secondary btn-lg w-100  h-100\" type=\"button\">
                        <i class=\"fa-solid fa-umbrella-beach me-2\"></i> CSE
                    </button>
                </div>
                <div class=\"col-sm-4\">
                    <button class=\"btn btn-secondary btn-lg w-100  h-100\" type=\"button\">
                        <i class=\"fa-solid fa-circle-info me-2\"></i> Informations
                    </button>
                </div>
            </div>
        </div>
    </body>


{% endblock %}", "pages/home.html.twig", "C:\\Users\\Lucas.DREMAUX\\Documents\\GitHub\\HappyQuizz\\templates\\pages\\home.html.twig");
    }
}
