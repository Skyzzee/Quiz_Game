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

/* main/index.html.twig */
class __TwigTemplate_7621aa4347093a3e5d3a402b92474432 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "main/index.html.twig", 1);
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

        echo "Bonjour !";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "


<body id=\"body-pd\">
\t\t

\t\t<main class=\"mt-4\">
\t\t\t<!--Container Main start-->
\t\t\t<div class=\"height-100\">
\t\t\t\t<div class=\"mx-4 my-4\">
\t\t\t\t\t
\t\t\t\t\t<div class=\"bg w-100 p-5 text-white \">
\t\t\t    <div class=\"example-wrapper\">
                    ";
        // line 20
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "user", [], "any", false, false, false, 20)) {
            // line 21
            echo "                            <h1 class=\"text-white\">Bonjour, ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "user", [], "any", false, false, false, 21), "firstname", [], "any", false, false, false, 21), "html", null, true);
            echo "</h1>
                            <p class=\"text-white\">Comment allez-vous aujourd'hui ?<p>
                    ";
        } else {
            // line 24
            echo "                            <h1 class=\"text-white\">Bienvenue Monsieur, </h1>
                            <p class=\"text-white\">Connectez-vous afin d'effectuer vos premiers Quiz !<p>
                    ";
        }
        // line 27
        echo "                </div>
                    
                    
\t\t\t\t\t\t<div class=\"info\">
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
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"mx-4 selector\">
\t\t\t\t\t<nav class=\"navbar navbar-expand-lg navbar-white \">\t\t
\t\t\t\t\t\t  <div class=\"collapse navbar-collapse afficher \" id=\"navbarNav\">
\t\t\t\t\t\t\t<ul class=\"navbar-nav \">
\t\t\t\t\t\t\t\t<div class=\"svg-wrapper \">
\t\t\t\t\t\t\t\t\t<svg height=\"40\" width=\"150\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t  <rect id=\"shape\" height=\"40\" width=\"150\" />
\t\t\t\t\t\t\t\t\t  <div id=\"text\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 58
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
        // line 66
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
        // line 74
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_exercise_index");
        echo "\"><span class=\"spot\"></span>Afficher tous les Exercices</a>
\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t<li class=\"nav-item dropdown navbar-nav navbardrop\">\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<select class=\"navbardrop  btn nav-link\" id='navbarDropdown'>
\t\t\t\t\t\t\t\t\t<option value='1' class='volunteer'>Difficulté</option>
\t\t\t\t\t\t\t\t\t<li><hr  href=\"#\" class=\"dropdown-divider\"></li>
\t\t\t\t\t\t\t\t\t<option value='2' class='volunteer1'>Débutant</option>
\t\t\t\t\t\t\t\t\t<li><hr class=\"dropdown-divider\"></li>
\t\t\t\t\t\t\t\t\t<option value='3' class='volunteer2'>Intermédiaire</option>
\t\t\t\t\t\t\t\t\t<li><hr class=\"dropdown-divider\"></li>
\t\t\t\t\t\t\t\t\t<option value='4' class='volunteer3'>Expert</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t  </li>
\t\t\t\t\t\t\t</ul>\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t  </div>
\t\t\t\t\t</nav>
\t\t\t\t</div> 
\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</main>
\t</body>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "main/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 74,  161 => 66,  150 => 58,  117 => 27,  112 => 24,  105 => 21,  103 => 20,  88 => 7,  78 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Bonjour !{% endblock %}


{% block body %}



<body id=\"body-pd\">
\t\t

\t\t<main class=\"mt-4\">
\t\t\t<!--Container Main start-->
\t\t\t<div class=\"height-100\">
\t\t\t\t<div class=\"mx-4 my-4\">
\t\t\t\t\t
\t\t\t\t\t<div class=\"bg w-100 p-5 text-white \">
\t\t\t    <div class=\"example-wrapper\">
                    {% if app.user %}
                            <h1 class=\"text-white\">Bonjour, {{ app.user.firstname }}</h1>
                            <p class=\"text-white\">Comment allez-vous aujourd'hui ?<p>
                    {% else %}
                            <h1 class=\"text-white\">Bienvenue Monsieur, </h1>
                            <p class=\"text-white\">Connectez-vous afin d'effectuer vos premiers Quiz !<p>
                    {% endif %}
                </div>
                    
                    
\t\t\t\t\t\t<div class=\"info\">
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
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"mx-4 selector\">
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
\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t<li class=\"nav-item dropdown navbar-nav navbardrop\">\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<select class=\"navbardrop  btn nav-link\" id='navbarDropdown'>
\t\t\t\t\t\t\t\t\t<option value='1' class='volunteer'>Difficulté</option>
\t\t\t\t\t\t\t\t\t<li><hr  href=\"#\" class=\"dropdown-divider\"></li>
\t\t\t\t\t\t\t\t\t<option value='2' class='volunteer1'>Débutant</option>
\t\t\t\t\t\t\t\t\t<li><hr class=\"dropdown-divider\"></li>
\t\t\t\t\t\t\t\t\t<option value='3' class='volunteer2'>Intermédiaire</option>
\t\t\t\t\t\t\t\t\t<li><hr class=\"dropdown-divider\"></li>
\t\t\t\t\t\t\t\t\t<option value='4' class='volunteer3'>Expert</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t  </li>
\t\t\t\t\t\t\t</ul>\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t  </div>
\t\t\t\t\t</nav>
\t\t\t\t</div> 
\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</main>
\t</body>

{% endblock %}
", "main/index.html.twig", "C:\\Users\\bchap\\Desktop\\Quiz_Game\\templates\\main\\index.html.twig");
    }
}
