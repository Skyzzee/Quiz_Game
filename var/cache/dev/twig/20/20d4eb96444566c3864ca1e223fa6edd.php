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

/* question/show.html.twig */
class __TwigTemplate_1437d8139efb4845fc29fefae7fd2070 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "question/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "question/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "question/show.html.twig", 1);
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

        echo "Nom de l'exercice";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<main class=\"mt-4\">
\t\t<!--Container Main start-->
\t\t<div class=\"pb-5\">
\t\t\t<div class=\"mx-4 my-4\">

\t\t\t\t<div class=\"bg w-100 p-5 text-white \">
\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t  <h1 class=\"text-white\">Nom de l'exercice</h1>
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
        // line 45
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
        // line 53
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
        // line 61
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_exercise_index");
        echo "\"><span class=\"spot\"></span>Afficher tous les Exercices</a>
\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t  </div>
  </main>
\t

\t<table class=\"table\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>Id</th>
\t\t\t\t<th>Question</th>
                <th>Illustration</th>
\t\t\t\t<th>Rép 1</th>
                <th>Rép 2</th>
                <th>Rép 3</th>
                <th>Rép 4</th>
                <th>Rép 5</th>
                <th>Rép 6</th>
                <th>Expications</th>

\t\t\t</tr>
\t\t</thead>
\t\t\t<tbody>
\t\t\t\t";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["questions"]) || array_key_exists("questions", $context) ? $context["questions"] : (function () { throw new RuntimeError('Variable "questions" does not exist.', 85, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 86
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "id", [], "any", false, false, false, 87), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "title", [], "any", false, false, false, 88), "html", null, true);
            echo "</td>

                        <td><img src=\"";
            // line 90
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["media"]) || array_key_exists("media", $context) ? $context["media"] : (function () { throw new RuntimeError('Variable "media" does not exist.', 90, $this->source); })()), "content", [], "any", false, false, false, 90), "html", null, true);
            echo "\" alt=\"img\" style=\"max-height: 50px;\"></td>

\t\t\t\t\t</tr>
\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 94
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td colspan=\"3\">Pas de résultats</td>
\t\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "\t\t\t</tbody>
\t\t</table>
\t\t
\t<a href=\"";
        // line 101
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_main_quiz");
        echo "\" class=\"btn btn-primary\">Retour à la création de quiz</a>
\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "question/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 101,  213 => 98,  204 => 94,  195 => 90,  190 => 88,  186 => 87,  183 => 86,  178 => 85,  151 => 61,  140 => 53,  129 => 45,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Nom de l'exercice{% endblock %}

{% block body %}

<main class=\"mt-4\">
\t\t<!--Container Main start-->
\t\t<div class=\"pb-5\">
\t\t\t<div class=\"mx-4 my-4\">

\t\t\t\t<div class=\"bg w-100 p-5 text-white \">
\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t  <h1 class=\"text-white\">Nom de l'exercice</h1>
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
\t

\t<table class=\"table\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>Id</th>
\t\t\t\t<th>Question</th>
                <th>Illustration</th>
\t\t\t\t<th>Rép 1</th>
                <th>Rép 2</th>
                <th>Rép 3</th>
                <th>Rép 4</th>
                <th>Rép 5</th>
                <th>Rép 6</th>
                <th>Expications</th>

\t\t\t</tr>
\t\t</thead>
\t\t\t<tbody>
\t\t\t\t{% for question in questions %}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>{{ question.id }}</td>
\t\t\t\t\t\t<td>{{ question.title }}</td>

                        <td><img src=\"{{ media.content }}\" alt=\"img\" style=\"max-height: 50px;\"></td>

\t\t\t\t\t</tr>
\t\t\t\t{% else %}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td colspan=\"3\">Pas de résultats</td>
\t\t\t\t\t</tr>
\t\t\t\t{% endfor %}
\t\t\t</tbody>
\t\t</table>
\t\t
\t<a href=\"{{ path('app_main_quiz') }}\" class=\"btn btn-primary\">Retour à la création de quiz</a>
\t{% endblock %}", "question/show.html.twig", "C:\\Users\\bchap\\Desktop\\Quiz_Game\\templates\\question\\show.html.twig");
    }
}
