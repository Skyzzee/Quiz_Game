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

/* base.html.twig */
class __TwigTemplate_bea970c0069d766ae9cd721ddbfcf0c5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html class=\"h-100\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    ";
        // line 6
        echo " 
    <link rel=\"stylesheet\" href=\"https://bootswatch.com/5/lux/bootstrap.css\">
    <!-- Importation des bibliothèques externes -->
\t\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css\">
\t\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css\">
\t\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css\">

<!-- Importation de sa propre bibiliothèque CSS -->
\t\t<link rel=\"stylesheet\" href=\"css/style.css\">

\t\t<script type=\"text/javascript\" src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js\" defer></script>
\t\t<script type=\"text/javascript\" src=\"./js/script.js\" defer></script>


    <title>QuizGame - ";
        // line 20
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 23
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 26
        echo "
    ";
        // line 28
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 31
        echo "
</head>

   <!-- Haut de page -->
\t\t<header class=\"header\" id=\"header\">
\t\t\t
\t\t\t<div class=\"l-navbar\" id=\"nav-bar\">
\t\t\t\t
\t\t\t\t<nav class=\"nav\">
\t\t\t\t\t<div>
\t\t\t\t\t\t<div class=\"nav_list\"> 
\t\t\t\t\t\t\t<div class=\"header_toggle\"> 
\t\t\t\t\t\t\t\t<a class=\"nav_logo\" id=\"header-toggle\"> <i class='bx bx-menu nav_icon'></i></a>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<a href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_main_base");
        echo "\" class=\"nav_link\"> <i class='bx bx-grid-alt nav_icon'></i> <span class=\"nav_name\">Dashboard</span> </a>
\t\t\t\t\t\t\t<a href=\"#\" class=\"nav_link\"> <i class='bx bx-play-circle nav_icon'></i> <span class=\"nav_name\">Quiz</span> </a> 
\t\t\t\t\t\t\t<a href=\"#\" class=\"nav_link\"> <i class='bx bx-bar-chart-alt-2 nav_icon'></i> <span class=\"nav_name\">Stats</span> </a> 
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div> 
\t\t\t\t\t
\t\t\t\t    <div class=\"nav_list\">
                        ";
        // line 54
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 54, $this->source); })()), "user", [], "any", false, false, false, 54)) {
            // line 55
            echo "                            <li class=\"nav-item inscriptionbutton\">
                                <a href=\"";
            // line 56
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_main_register");
            echo "\" class=\"nav_link\"> <i class='bx bx-log-out nav_icon'></i> <span class=\"nav_name\">S'inscrire</span> </a>
                            </li> 
                            <li class=\"nav-item\">
                                <a href=\"";
            // line 59
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_main_login");
            echo "\" class=\"nav_link\"> <i class='bx bx-log-out nav_icon'></i> <span class=\"nav_name\">Connexion</span> </a>
                            </li> 
                        ";
        } else {
            // line 62
            echo "                            <li class=\"nav-item\">
                                <a href=\"";
            // line 63
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_main_logout");
            echo "\" class=\"nav_link\"> <i class='bx bx-log-out nav_icon'></i> <span class=\"nav_name\">Déconnexion</span> </a>
                            </li> 
                        ";
        }
        // line 65
        echo " 
                    </div>
\t\t\t\t</nav>
\t\t\t</div>\t
\t\t\t
\t\t</header>
\t\t
\t\t<div class=\"nav_top d-flex justify-content-between gap-3 px-4\">
\t\t\t<a href=\"";
        // line 73
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_main_base");
        echo "\" class=\"nav_icon nav_title-name2\"><span class=\"nav_title-name\">Quiz</span>Game</a>

\t\t\t<div class=\"d-flex form-inputs\"> 
\t\t\t\t<input class=\"form-control\" type=\"text\" placeholder=\"Search\"> 
\t\t\t\t<i class=\"bx bx-search\"></i> 
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"d-flex gap-4\">
\t\t\t\t<div class=\"separator\"></div>
\t
\t\t\t\t<div class=\"icons\">
\t\t\t\t\t<div class=\"circle\"></div>
\t\t\t\t\t<a class=\"text-dark\" href=\"#\"><i class=\"bx bx-bell\"></i></a>
\t\t\t\t</div>
\t
\t\t\t\t<div class=\"separator\"></div>

\t\t\t\t<div class=\"d-flex gap-4\">
\t\t\t\t\t<div class=\"example-wrapper\">
                    ";
        // line 92
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 92, $this->source); })()), "user", [], "any", false, false, false, 92)) {
            // line 93
            echo "                            <h5>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 93, $this->source); })()), "user", [], "any", false, false, false, 93), "firstname", [], "any", false, false, false, 93), "html", null, true);
            echo "</h5>
                    ";
        } else {
            // line 95
            echo "                            <p>Visiteur venue d'ailleurs </p>
                            
                    ";
        }
        // line 98
        echo "                </div>
\t\t\t\t\t<img class=\"avatar_image\" src=\"../assets/images/profile.jpg\" alt=\"404\">
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

<body class=\"d-flex flex-column h-100\">


    <main>

      ";
        // line 110
        echo "      ";
        $this->displayBlock('body', $context, $blocks);
        // line 111
        echo "
    </main>        

   

</body>

</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 20
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 23
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 24
        echo "        ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo "
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 28
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 29
        echo "        ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 110
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  281 => 110,  268 => 29,  258 => 28,  245 => 24,  235 => 23,  217 => 20,  199 => 111,  196 => 110,  183 => 98,  178 => 95,  172 => 93,  170 => 92,  148 => 73,  138 => 65,  132 => 63,  129 => 62,  123 => 59,  117 => 56,  114 => 55,  112 => 54,  101 => 46,  84 => 31,  81 => 28,  78 => 26,  75 => 23,  70 => 20,  54 => 6,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html class=\"h-100\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    {# TEMPORAIRE bootswatch lux theme #} 
    <link rel=\"stylesheet\" href=\"https://bootswatch.com/5/lux/bootstrap.css\">
    <!-- Importation des bibliothèques externes -->
\t\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css\">
\t\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css\">
\t\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css\">

<!-- Importation de sa propre bibiliothèque CSS -->
\t\t<link rel=\"stylesheet\" href=\"css/style.css\">

\t\t<script type=\"text/javascript\" src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js\" defer></script>
\t\t<script type=\"text/javascript\" src=\"./js/script.js\" defer></script>


    <title>QuizGame - {% block title %}{% endblock %}</title>

    {# BLOCK CSS #}
    {% block stylesheets %}
        {{ encore_entry_link_tags('app') }}
    {% endblock %}

    {# BLOCK JS #}
    {% block javascripts %}
        {{ encore_entry_script_tags('app') }}
    {% endblock %}

</head>

   <!-- Haut de page -->
\t\t<header class=\"header\" id=\"header\">
\t\t\t
\t\t\t<div class=\"l-navbar\" id=\"nav-bar\">
\t\t\t\t
\t\t\t\t<nav class=\"nav\">
\t\t\t\t\t<div>
\t\t\t\t\t\t<div class=\"nav_list\"> 
\t\t\t\t\t\t\t<div class=\"header_toggle\"> 
\t\t\t\t\t\t\t\t<a class=\"nav_logo\" id=\"header-toggle\"> <i class='bx bx-menu nav_icon'></i></a>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<a href=\"{{ path('app_main_base') }}\" class=\"nav_link\"> <i class='bx bx-grid-alt nav_icon'></i> <span class=\"nav_name\">Dashboard</span> </a>
\t\t\t\t\t\t\t<a href=\"#\" class=\"nav_link\"> <i class='bx bx-play-circle nav_icon'></i> <span class=\"nav_name\">Quiz</span> </a> 
\t\t\t\t\t\t\t<a href=\"#\" class=\"nav_link\"> <i class='bx bx-bar-chart-alt-2 nav_icon'></i> <span class=\"nav_name\">Stats</span> </a> 
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div> 
\t\t\t\t\t
\t\t\t\t    <div class=\"nav_list\">
                        {% if not app.user %}
                            <li class=\"nav-item inscriptionbutton\">
                                <a href=\"{{ path('app_main_register') }}\" class=\"nav_link\"> <i class='bx bx-log-out nav_icon'></i> <span class=\"nav_name\">S'inscrire</span> </a>
                            </li> 
                            <li class=\"nav-item\">
                                <a href=\"{{ path('app_main_login') }}\" class=\"nav_link\"> <i class='bx bx-log-out nav_icon'></i> <span class=\"nav_name\">Connexion</span> </a>
                            </li> 
                        {% else %}
                            <li class=\"nav-item\">
                                <a href=\"{{ path('app_main_logout') }}\" class=\"nav_link\"> <i class='bx bx-log-out nav_icon'></i> <span class=\"nav_name\">Déconnexion</span> </a>
                            </li> 
                        {% endif %} 
                    </div>
\t\t\t\t</nav>
\t\t\t</div>\t
\t\t\t
\t\t</header>
\t\t
\t\t<div class=\"nav_top d-flex justify-content-between gap-3 px-4\">
\t\t\t<a href=\"{{ path('app_main_base') }}\" class=\"nav_icon nav_title-name2\"><span class=\"nav_title-name\">Quiz</span>Game</a>

\t\t\t<div class=\"d-flex form-inputs\"> 
\t\t\t\t<input class=\"form-control\" type=\"text\" placeholder=\"Search\"> 
\t\t\t\t<i class=\"bx bx-search\"></i> 
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"d-flex gap-4\">
\t\t\t\t<div class=\"separator\"></div>
\t
\t\t\t\t<div class=\"icons\">
\t\t\t\t\t<div class=\"circle\"></div>
\t\t\t\t\t<a class=\"text-dark\" href=\"#\"><i class=\"bx bx-bell\"></i></a>
\t\t\t\t</div>
\t
\t\t\t\t<div class=\"separator\"></div>

\t\t\t\t<div class=\"d-flex gap-4\">
\t\t\t\t\t<div class=\"example-wrapper\">
                    {% if app.user %}
                            <h5>{{ app.user.firstname }}</h5>
                    {% else %}
                            <p>Visiteur venue d'ailleurs </p>
                            
                    {% endif %}
                </div>
\t\t\t\t\t<img class=\"avatar_image\" src=\"../assets/images/profile.jpg\" alt=\"404\">
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

<body class=\"d-flex flex-column h-100\">


    <main>

      {# BLOCK PRINCIPAL #}
      {% block body %}{% endblock %}

    </main>        

   

</body>

</html>
", "base.html.twig", "C:\\Users\\bchap\\Desktop\\Quiz_Game\\templates\\base.html.twig");
    }
}
