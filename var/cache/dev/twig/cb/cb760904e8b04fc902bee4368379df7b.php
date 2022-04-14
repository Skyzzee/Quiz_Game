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

/* category/index.html.twig */
class __TwigTemplate_885775deb2c81ba278c9229593ee9ca6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "category/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "category/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "category/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Thème";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
<main class=\"mt-4\">
\t\t<!--Container Main start-->
\t\t<div class=\"pb-5\">
\t\t\t<div class=\"mx-4 my-4\">

\t\t\t\t<div class=\"bg w-100 p-5 text-white \">
\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t  <h1 class=\"text-white\">Thème</h1>
\t\t\t\t\t</div>
\t\t\t\t<div class=\"info\">
\t\t\t\t\t\t\t<div class=\"mx-5\">
\t\t\t\t\t\t\t\t<h3 class=\"text-white\">14</h3>
\t\t\t\t\t\t\t\t<p>Thèmes</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"mx-5\">
\t\t\t\t\t\t\t\t<h3 class=\"text-white\">23</h3>
\t\t\t\t\t\t\t\t<p>Exercices</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"mx-5\">
\t\t\t\t\t\t\t\t<h3 class=\"text-white\">465</h3>
\t\t\t\t\t\t\t\t<p>Questions</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>


            <div class=\"mx-4 selector\">
\t\t\t\t\t<nav class=\"navbar navbar-expand-lg navbar-white \">\t\t
\t\t\t\t\t\t  <div class=\"collapse navbar-collapse afficher \" id=\"navbarNav\">
\t\t\t\t\t\t\t<ul class=\"navbar-nav \">
\t\t\t\t\t\t\t\t<div class=\"svg-wrapper \">
\t\t\t\t\t\t\t\t\t<svg height=\"40\" width=\"150\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t  <rect id=\"shape\" height=\"40\" width=\"150\" />
\t\t\t\t\t\t\t\t\t  <div id=\"text\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_main_quiz");
        echo "\"><span class=\"spot\"></span>Ajout d'un quizz</a>
\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t  <div class=\"svg-wrapper2 \">
\t\t\t\t\t\t\t\t\t<svg height=\"40\" width=\"250\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t  <rect id=\"shape2\" height=\"40\" width=\"250\" />
\t\t\t\t\t\t\t\t\t  <div id=\"text\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_category_index");
        echo "\"><span class=\"spot\"></span>Afficher tous les thèmes</a>
\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t  <div class=\"svg-wrapper2 \">
\t\t\t\t\t\t\t\t\t<svg height=\"40\" width=\"250\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t  <rect id=\"shape2\" height=\"40\" width=\"250\" />
\t\t\t\t\t\t\t\t\t  <div id=\"text\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_exercise_index");
        echo "\"><span class=\"spot\"></span>Afficher tous les Exercices</a>
\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t  </div>
  </main>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom du Thème</th>

            </tr>
        </thead>
        <tbody>
        ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 78, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 79
            echo "            <tr>
                <td>";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 80), "html", null, true);
            echo "</td>
                <td>";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 81), "html", null, true);
            echo "</td>
                <td>
                    
                    <a href=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_category_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 84)]), "html", null, true);
            echo "\">Modifier</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 88
            echo "            <tr>
                <td colspan=\"3\">Pas de résultats</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "        </tbody>
    </table>

    <a href=\"";
        // line 95
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_category_new");
        echo "\" class=\"btn btn-primary\">Ajouter un Thème</a>
    <a href=\"";
        // line 96
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_main_quiz");
        echo "\" class=\"btn btn-primary\">Retour à la création de quiz</a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "category/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 96,  210 => 95,  205 => 92,  196 => 88,  187 => 84,  181 => 81,  177 => 80,  174 => 79,  169 => 78,  151 => 63,  140 => 55,  129 => 47,  88 => 8,  78 => 7,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Thème{% endblock %}



{% block body %}

<main class=\"mt-4\">
\t\t<!--Container Main start-->
\t\t<div class=\"pb-5\">
\t\t\t<div class=\"mx-4 my-4\">

\t\t\t\t<div class=\"bg w-100 p-5 text-white \">
\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t  <h1 class=\"text-white\">Thème</h1>
\t\t\t\t\t</div>
\t\t\t\t<div class=\"info\">
\t\t\t\t\t\t\t<div class=\"mx-5\">
\t\t\t\t\t\t\t\t<h3 class=\"text-white\">14</h3>
\t\t\t\t\t\t\t\t<p>Thèmes</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"mx-5\">
\t\t\t\t\t\t\t\t<h3 class=\"text-white\">23</h3>
\t\t\t\t\t\t\t\t<p>Exercices</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"mx-5\">
\t\t\t\t\t\t\t\t<h3 class=\"text-white\">465</h3>
\t\t\t\t\t\t\t\t<p>Questions</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>


            <div class=\"mx-4 selector\">
\t\t\t\t\t<nav class=\"navbar navbar-expand-lg navbar-white \">\t\t
\t\t\t\t\t\t  <div class=\"collapse navbar-collapse afficher \" id=\"navbarNav\">
\t\t\t\t\t\t\t<ul class=\"navbar-nav \">
\t\t\t\t\t\t\t\t<div class=\"svg-wrapper \">
\t\t\t\t\t\t\t\t\t<svg height=\"40\" width=\"150\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t  <rect id=\"shape\" height=\"40\" width=\"150\" />
\t\t\t\t\t\t\t\t\t  <div id=\"text\">
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_main_quiz') }}\"><span class=\"spot\"></span>Ajout d'un quizz</a>
\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t  <div class=\"svg-wrapper2 \">
\t\t\t\t\t\t\t\t\t<svg height=\"40\" width=\"250\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t  <rect id=\"shape2\" height=\"40\" width=\"250\" />
\t\t\t\t\t\t\t\t\t  <div id=\"text\">
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_category_index') }}\"><span class=\"spot\"></span>Afficher tous les thèmes</a>
\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t  <div class=\"svg-wrapper2 \">
\t\t\t\t\t\t\t\t\t<svg height=\"40\" width=\"250\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t  <rect id=\"shape2\" height=\"40\" width=\"250\" />
\t\t\t\t\t\t\t\t\t  <div id=\"text\">
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_exercise_index') }}\"><span class=\"spot\"></span>Afficher tous les Exercices</a>
\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t  </div>
  </main>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom du Thème</th>

            </tr>
        </thead>
        <tbody>
        {% for category in categories %}
            <tr>
                <td>{{ category.id }}</td>
                <td>{{ category.name }}</td>
                <td>
                    
                    <a href=\"{{ path('app_category_edit', {'id': category.id}) }}\">Modifier</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"3\">Pas de résultats</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('app_category_new') }}\" class=\"btn btn-primary\">Ajouter un Thème</a>
    <a href=\"{{ path('app_main_quiz') }}\" class=\"btn btn-primary\">Retour à la création de quiz</a>
{% endblock %}", "category/index.html.twig", "C:\\Users\\bchap\\Desktop\\Quiz_Game\\templates\\category\\index.html.twig");
    }
}
