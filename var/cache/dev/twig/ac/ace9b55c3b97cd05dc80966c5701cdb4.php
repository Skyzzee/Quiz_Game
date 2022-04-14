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

/* play.html.twig */
class __TwigTemplate_9c7dc76eb459ffdd073cf2f2e7bcfa2a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "play.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "play.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "play.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"c1\">
        <h3>Exercice :</h3>
        <h3>\"Athletes en herbes\"</h3>       <!-- nom de l'exo -->
    </div>


    <div class=\"c2\">
        <p>Question 1</p>                   <!-- num de l'exo -->
        <p>Temps restant: 50s</p>           <!-- timer -->
    </div>



    <div class=\"c3\">
        <div class=\"c3-1\">
            <h1>Qui est Usain Bolt ?</h1>   <!-- question -->
        </div>

        <div class=\"c3-2\">
            <div class=\"couleur1\">
                <input type=\"checkbox\">
                <label>Un Athlete</label>   <!-- reponse 1 -->
            </div>
            <div class=\"couleur2\">
                <input type=\"checkbox\">
                <label>Un Chanteur</label>  <!-- reponse 2-->
            </div>
        </div>

    </div>

    <div class=\"c4\">
        <span>Répondre</span>   <!-- passer à la question suivante -->
    </div>                      <!-- c'est pas un bouton donc c horrible mais balek -->

    
    <!-- CSS PAS OUF MAIS TEMPORAIRE -->
    <style>
        .c1{
            text-align: center;
            margin-top: 20px;
        }

        .c2{
            display: flex;
            justify-content: space-between;
            margin: 50px 200px 10px 200px;
        }

        .c3{
            text-align: center;
            margin-top: 20px;
        }

        .c3-1{
            margin-bottom: 20px;
        }

        .c3-2{
            display: flex;
            justify-content: space-between;
            margin: 40px 500px 10px 500px;
        }

        .couleur1{
            background-color: rosybrown;
            padding: 10px 20px;
        }
        .couleur2{
            background-color: orange;  
            padding: 10px 20px;
        }

        .c4{
            text-align: center;
            margin-top: 60px;
        }
        .c4 span{
            border: 2px black solid;
            padding: 10px;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "play.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

    <div class=\"c1\">
        <h3>Exercice :</h3>
        <h3>\"Athletes en herbes\"</h3>       <!-- nom de l'exo -->
    </div>


    <div class=\"c2\">
        <p>Question 1</p>                   <!-- num de l'exo -->
        <p>Temps restant: 50s</p>           <!-- timer -->
    </div>



    <div class=\"c3\">
        <div class=\"c3-1\">
            <h1>Qui est Usain Bolt ?</h1>   <!-- question -->
        </div>

        <div class=\"c3-2\">
            <div class=\"couleur1\">
                <input type=\"checkbox\">
                <label>Un Athlete</label>   <!-- reponse 1 -->
            </div>
            <div class=\"couleur2\">
                <input type=\"checkbox\">
                <label>Un Chanteur</label>  <!-- reponse 2-->
            </div>
        </div>

    </div>

    <div class=\"c4\">
        <span>Répondre</span>   <!-- passer à la question suivante -->
    </div>                      <!-- c'est pas un bouton donc c horrible mais balek -->

    
    <!-- CSS PAS OUF MAIS TEMPORAIRE -->
    <style>
        .c1{
            text-align: center;
            margin-top: 20px;
        }

        .c2{
            display: flex;
            justify-content: space-between;
            margin: 50px 200px 10px 200px;
        }

        .c3{
            text-align: center;
            margin-top: 20px;
        }

        .c3-1{
            margin-bottom: 20px;
        }

        .c3-2{
            display: flex;
            justify-content: space-between;
            margin: 40px 500px 10px 500px;
        }

        .couleur1{
            background-color: rosybrown;
            padding: 10px 20px;
        }
        .couleur2{
            background-color: orange;  
            padding: 10px 20px;
        }

        .c4{
            text-align: center;
            margin-top: 60px;
        }
        .c4 span{
            border: 2px black solid;
            padding: 10px;
        }
    </style>
{% endblock %}", "play.html.twig", "C:\\Users\\bchap\\Desktop\\Quiz_Game\\templates\\play.html.twig");
    }
}
