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

/* main/quiz.html.twig */
class __TwigTemplate_37fd0c658039f0486f38b42fa5bc1c28 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/quiz.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/quiz.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "main/quiz.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Création d'un Quiz";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "

\t

\t\t<div class=\"d-flex gap-4\">
\t\t\t<div class=\"separator\"></div>
\t\t\t<div class=\"separator\"></div>
\t\t</div>
\t</div>

\t<main class=\"mt-4\">
\t\t<!--Container Main start-->
\t\t<div class=\"pb-5\">
\t\t\t<div class=\"mx-4 my-4\">

\t\t\t\t<div class=\"bg w-100 p-5 text-white \">
\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t<h1>Bonjour John D.</h1>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\" info\">
\t\t\t\t\t\t<div class=\"mx-5\">
\t\t\t\t\t\t\t<h3>14</h3>
\t\t\t\t\t\t\t<p>Thèmes</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"mx-5\">
\t\t\t\t\t\t\t<h3>23</h3>
\t\t\t\t\t\t\t<p>Exercices</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"mx-5\">
\t\t\t\t\t\t\t<h3>465</h3>
\t\t\t\t\t\t\t<p>Questions</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"mx-4 selector\">
\t\t\t\t<nav class=\"navbar navbar-expand-lg navbar-white \">
\t\t\t\t\t<div class=\"collapse navbar-collapse afficher \" id=\"navbarNav\">
\t\t\t\t\t\t<ul class=\"navbar-nav \">
\t\t\t\t\t\t\t<div class=\"svg-wrapper \">
\t\t\t\t\t\t\t\t<svg height=\"40\" width=\"150\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t<rect id=\"shape\" height=\"40\" width=\"150\" />
\t\t\t\t\t\t\t\t\t<div id=\"text\">
\t\t\t\t\t\t\t\t\t\t<a href=\"app_main_quiz\"><span class=\"spot\"></span>Ajout d'un quizz</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"svg-wrapper2 \">
\t\t\t\t\t\t\t\t<svg height=\"40\" width=\"250\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t<rect id=\"shape2\" height=\"40\" width=\"250\" />
\t\t\t\t\t\t\t\t\t<div id=\"text\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_category_index");
        echo "\"><span class=\"spot\"></span>Afficher tous les thèmes</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"svg-wrapper2 \">
\t\t\t\t\t\t\t\t<svg height=\"40\" width=\"250\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t<rect id=\"shape2\" height=\"40\" width=\"250\" />
\t\t\t\t\t\t\t\t\t<div id=\"text\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 68
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_exercise_index");
        echo "\"<span class=\"spot\"></span>Afficher tous les Exercices</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<li class=\"nav-item dropdown navbar-nav navbardrop\">
\t\t\t\t\t\t\t\t<select class=\"navbardrop  btn nav-link\" id='navbarDropdown'>
\t\t\t\t\t\t\t\t\t<option value='1' class='volunteer'>Difficulté</option>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<hr href=\"#\" class=\"dropdown-divider\">
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<option value='2' class='volunteer1'>Débutant</option>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<option value='3' class='volunteer2'>Intermédiaire</option>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<option value='4' class='volunteer3'>Expert</option>
\t\t\t\t\t\t\t</select>

\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>

\t\t\t\t\t</div>
\t\t\t\t</nav>
\t\t\t</div>

\t\t</div>
\t\t</div>
\t\t<section class=\"d-flex\">


\t\t\t<div class=\"mx-4 box-left\">
\t\t\t\t<div class=\"img\"></div>
\t\t\t\t<div class=\"example-wrappe \">

\t\t\t\t\t<h1 class=\"p-5 text-center\">Création d'un Quiz</h1>
\t\t\t\t\t<!-- <p>Bonjour, je vais vous accompagner dans la création du quiz, j'espère pouvoir vous guider de la meilleure façon possible.</p>
\t\t<p>La création du quiz se fait en 3 étapes : Le thème / la difficulté / l'exercice (qui regroupera tous les QCM) -->
\t\t\t\t</div>

\t\t\t\t<div>
\t\t\t\t\t<p class=\"text-center\">Pour débuter la création d'un quiz, veuillez créer un thème :</p>
\t\t\t\t\t<div class=\"btn-block\">
\t\t\t\t\t\t<a href=\"";
        // line 113
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_category_new");
        echo "\" class=\"btn\">Nouveau thème</a>
\t\t\t\t\t\t<div class=\"grid-right\">
\t\t\t\t\t\t\t<a href=\"";
        // line 115
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_category_index");
        echo "\" class=\"btn\">Liste des thèmes</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<p class=\"text-center p-4\">Si vous avez déja un thème de créer et que vous souhaitez l'utiliser,
\t\t\t\t\t\tpassez
\t\t\t\t\t\tcette étape !</p>
\t\t\t\t</div>




\t\t\t\t<div>
\t\t\t\t\t<p class=\"text-center\">Pour débuter la création d'un quiz, veuillez créer une difficulté</p>
\t\t\t\t\t<div class=\"btn-block\">
\t\t\t\t\t\t<a href=\"";
        // line 129
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_difficulty_new");
        echo "\" class=\"btn\">Nouvelle difficulté</a>
\t\t\t\t\t\t<div class=\"grid-right\">
\t\t\t\t\t\t\t<a href=\"";
        // line 131
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_difficulty_index");
        echo "\" class=\"btn\">Liste des difficultés</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<p class=\"text-center p-4\">Si vous avez déja une difficulté de créer et que vous souhaitez
\t\t\t\t\t\tl'utiliser,
\t\t\t\t\t\tpassez cette étape !</p>
\t\t\t\t</div>


\t\t\t\t<div>
\t\t\t\t\t<p class=\"text-center\">Pour débuter la création d'un quiz, veuillez créer un exercice</p>
\t\t\t\t\t<div class=\"btn-block\">
\t\t\t\t\t\t<a href=\"";
        // line 143
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_exercise_new");
        echo "\" class=\"btn\">Nouvelle exercice</a>
\t\t\t\t\t\t<div class=\"grid-right\">
\t\t\t\t\t\t\t<a href=\"";
        // line 145
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_exercise_index");
        echo "\" class=\"btn\">Liste des exercices</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<p class=\"text-center p-4\">Si vous avez déja un exercice de créer et que vous souhaitez l'utiliser,
\t\t\t\t\t\tpassez cette étape !</p>
\t\t\t\t</div>


\t\t\t\t<div>
\t\t\t\t\t<p class=\"text-center\">Félicitation ! Vous avez terminé la création du quiz !</p>
\t\t\t\t</div>
\t\t\t</div>


\t\t\t<div class=\"box-right mx-4 d-flex\">

\t\t\t\t<h3 class=\"m-3\">Exercice récent</h3>
\t\t\t\t<a href=\"#\" class=\"btn-view p-4\">Voir plus ></a>
\t\t\t\t<hr>

\t\t\t</div>


\t\t</section>
\t</main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "main/quiz.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  251 => 145,  246 => 143,  231 => 131,  226 => 129,  209 => 115,  204 => 113,  156 => 68,  145 => 60,  88 => 5,  78 => 4,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Création d'un Quiz{% endblock %}

{% block body %}


\t

\t\t<div class=\"d-flex gap-4\">
\t\t\t<div class=\"separator\"></div>
\t\t\t<div class=\"separator\"></div>
\t\t</div>
\t</div>

\t<main class=\"mt-4\">
\t\t<!--Container Main start-->
\t\t<div class=\"pb-5\">
\t\t\t<div class=\"mx-4 my-4\">

\t\t\t\t<div class=\"bg w-100 p-5 text-white \">
\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t<h1>Bonjour John D.</h1>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\" info\">
\t\t\t\t\t\t<div class=\"mx-5\">
\t\t\t\t\t\t\t<h3>14</h3>
\t\t\t\t\t\t\t<p>Thèmes</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"mx-5\">
\t\t\t\t\t\t\t<h3>23</h3>
\t\t\t\t\t\t\t<p>Exercices</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"mx-5\">
\t\t\t\t\t\t\t<h3>465</h3>
\t\t\t\t\t\t\t<p>Questions</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"mx-4 selector\">
\t\t\t\t<nav class=\"navbar navbar-expand-lg navbar-white \">
\t\t\t\t\t<div class=\"collapse navbar-collapse afficher \" id=\"navbarNav\">
\t\t\t\t\t\t<ul class=\"navbar-nav \">
\t\t\t\t\t\t\t<div class=\"svg-wrapper \">
\t\t\t\t\t\t\t\t<svg height=\"40\" width=\"150\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t<rect id=\"shape\" height=\"40\" width=\"150\" />
\t\t\t\t\t\t\t\t\t<div id=\"text\">
\t\t\t\t\t\t\t\t\t\t<a href=\"app_main_quiz\"><span class=\"spot\"></span>Ajout d'un quizz</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"svg-wrapper2 \">
\t\t\t\t\t\t\t\t<svg height=\"40\" width=\"250\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t<rect id=\"shape2\" height=\"40\" width=\"250\" />
\t\t\t\t\t\t\t\t\t<div id=\"text\">
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_category_index') }}\"><span class=\"spot\"></span>Afficher tous les thèmes</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"svg-wrapper2 \">
\t\t\t\t\t\t\t\t<svg height=\"40\" width=\"250\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t<rect id=\"shape2\" height=\"40\" width=\"250\" />
\t\t\t\t\t\t\t\t\t<div id=\"text\">
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_exercise_index') }}\"<span class=\"spot\"></span>Afficher tous les Exercices</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<li class=\"nav-item dropdown navbar-nav navbardrop\">
\t\t\t\t\t\t\t\t<select class=\"navbardrop  btn nav-link\" id='navbarDropdown'>
\t\t\t\t\t\t\t\t\t<option value='1' class='volunteer'>Difficulté</option>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<hr href=\"#\" class=\"dropdown-divider\">
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<option value='2' class='volunteer1'>Débutant</option>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<option value='3' class='volunteer2'>Intermédiaire</option>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<option value='4' class='volunteer3'>Expert</option>
\t\t\t\t\t\t\t</select>

\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>

\t\t\t\t\t</div>
\t\t\t\t</nav>
\t\t\t</div>

\t\t</div>
\t\t</div>
\t\t<section class=\"d-flex\">


\t\t\t<div class=\"mx-4 box-left\">
\t\t\t\t<div class=\"img\"></div>
\t\t\t\t<div class=\"example-wrappe \">

\t\t\t\t\t<h1 class=\"p-5 text-center\">Création d'un Quiz</h1>
\t\t\t\t\t<!-- <p>Bonjour, je vais vous accompagner dans la création du quiz, j'espère pouvoir vous guider de la meilleure façon possible.</p>
\t\t<p>La création du quiz se fait en 3 étapes : Le thème / la difficulté / l'exercice (qui regroupera tous les QCM) -->
\t\t\t\t</div>

\t\t\t\t<div>
\t\t\t\t\t<p class=\"text-center\">Pour débuter la création d'un quiz, veuillez créer un thème :</p>
\t\t\t\t\t<div class=\"btn-block\">
\t\t\t\t\t\t<a href=\"{{ path('app_category_new') }}\" class=\"btn\">Nouveau thème</a>
\t\t\t\t\t\t<div class=\"grid-right\">
\t\t\t\t\t\t\t<a href=\"{{ path('app_category_index') }}\" class=\"btn\">Liste des thèmes</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<p class=\"text-center p-4\">Si vous avez déja un thème de créer et que vous souhaitez l'utiliser,
\t\t\t\t\t\tpassez
\t\t\t\t\t\tcette étape !</p>
\t\t\t\t</div>




\t\t\t\t<div>
\t\t\t\t\t<p class=\"text-center\">Pour débuter la création d'un quiz, veuillez créer une difficulté</p>
\t\t\t\t\t<div class=\"btn-block\">
\t\t\t\t\t\t<a href=\"{{ path('app_difficulty_new') }}\" class=\"btn\">Nouvelle difficulté</a>
\t\t\t\t\t\t<div class=\"grid-right\">
\t\t\t\t\t\t\t<a href=\"{{ path('app_difficulty_index') }}\" class=\"btn\">Liste des difficultés</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<p class=\"text-center p-4\">Si vous avez déja une difficulté de créer et que vous souhaitez
\t\t\t\t\t\tl'utiliser,
\t\t\t\t\t\tpassez cette étape !</p>
\t\t\t\t</div>


\t\t\t\t<div>
\t\t\t\t\t<p class=\"text-center\">Pour débuter la création d'un quiz, veuillez créer un exercice</p>
\t\t\t\t\t<div class=\"btn-block\">
\t\t\t\t\t\t<a href=\"{{ path('app_exercise_new') }}\" class=\"btn\">Nouvelle exercice</a>
\t\t\t\t\t\t<div class=\"grid-right\">
\t\t\t\t\t\t\t<a href=\"{{ path('app_exercise_index') }}\" class=\"btn\">Liste des exercices</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<p class=\"text-center p-4\">Si vous avez déja un exercice de créer et que vous souhaitez l'utiliser,
\t\t\t\t\t\tpassez cette étape !</p>
\t\t\t\t</div>


\t\t\t\t<div>
\t\t\t\t\t<p class=\"text-center\">Félicitation ! Vous avez terminé la création du quiz !</p>
\t\t\t\t</div>
\t\t\t</div>


\t\t\t<div class=\"box-right mx-4 d-flex\">

\t\t\t\t<h3 class=\"m-3\">Exercice récent</h3>
\t\t\t\t<a href=\"#\" class=\"btn-view p-4\">Voir plus ></a>
\t\t\t\t<hr>

\t\t\t</div>


\t\t</section>
\t</main>
{% endblock %}", "main/quiz.html.twig", "C:\\Users\\bchap\\Desktop\\Quiz_Game\\templates\\main\\quiz.html.twig");
    }
}
