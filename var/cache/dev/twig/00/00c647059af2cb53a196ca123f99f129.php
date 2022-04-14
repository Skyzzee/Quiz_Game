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

/* question/maker.html.twig */
class __TwigTemplate_773bacfbfe8910f4003a53e0fa651550 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "question/maker.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "question/maker.html.twig"));

        // line 4
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), [0 => "bootstrap_5_layout.html.twig"], true);
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "question/maker.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        echo "<div class=\"container mt-5 mb-5\">
    <div class=\"row\">
        <div class=\"col-sm\">

            <h2>Ajout de question</h2>

        ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), 'form_start');
        echo "
        
        ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), 'errors');
        echo "

        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "title", [], "any", false, false, false, 17), 'row', ["label" => "Quelle question souhaitez-vous poser ?"]);
        echo "

        ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "image", [], "any", false, false, false, 19), 'row', ["label" => "Ajoutez une ou plusieurs illustrations : (facultatif)"]);
        echo "

        <h4>Énnoncez ici les choix de réponses, et cochez ceux qui sont correctes.</h4>
        <h6>Les deux premiers choix sont requis, mais il est possible qu'il n'y est pas de bonne réponse.</h6>
        
        <div class=\"row\">
            <div class=\"col-4\">
                ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "answer1", [], "any", false, false, false, 26), 'row', ["label" => "Choix 1"]);
        echo "
                ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "isTrue1", [], "any", false, false, false, 27), 'row', ["label" => "Est-ce une bonne réponse ?"]);
        echo "

                ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "answer3", [], "any", false, false, false, 29), 'row', ["label" => "Choix 3"]);
        echo "
                ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "isTrue3", [], "any", false, false, false, 30), 'row', ["label" => "Est-ce une bonne réponse ?"]);
        echo "

                ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "answer5", [], "any", false, false, false, 32), 'row', ["label" => "Choix 5"]);
        echo "
                ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "isTrue5", [], "any", false, false, false, 33), 'row', ["label" => "Est-ce une bonne réponse ?"]);
        echo "
            </div>
            <div class=\"col-2\"></div>
            <div class=\"col-4\">
                ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "answer2", [], "any", false, false, false, 37), 'row', ["label" => "Choix 2"]);
        echo "
                ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "isTrue2", [], "any", false, false, false, 38), 'row', ["label" => "Est-ce une bonne réponse ?"]);
        echo "

                ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "answer4", [], "any", false, false, false, 40), 'row', ["label" => "Choix 4"]);
        echo "
                ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "isTrue4", [], "any", false, false, false, 41), 'row', ["label" => "Est-ce une bonne réponse ?"]);
        echo "

                ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "answer6", [], "any", false, false, false, 43), 'row', ["label" => "Choix 6"]);
        echo "
                ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "isTrue6", [], "any", false, false, false, 44), 'row', ["label" => "Est-ce une bonne réponse ?"]);
        echo "
            </div>
        </div>

        ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "explanation", [], "any", false, false, false, 48), 'row', ["label" => "Ici, expliquez la solution en quelques mots. (facultatif)"]);
        echo "

        <button type=\"submit\" class=\"btn btn-primary\">Ajouter à l'exercice</button>
        ";
        // line 51
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), 'form_end');
        echo "


        </div>
    </div>
</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "question/maker.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 51,  162 => 48,  155 => 44,  151 => 43,  146 => 41,  142 => 40,  137 => 38,  133 => 37,  126 => 33,  122 => 32,  117 => 30,  113 => 29,  108 => 27,  104 => 26,  94 => 19,  89 => 17,  84 => 15,  79 => 13,  71 => 7,  61 => 6,  50 => 1,  48 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{# TEMPORAIRE bootswatch lux theme #} 
{% form_theme form 'bootstrap_5_layout.html.twig' %}

{% block body %}
<div class=\"container mt-5 mb-5\">
    <div class=\"row\">
        <div class=\"col-sm\">

            <h2>Ajout de question</h2>

        {{ form_start(form) }}
        
        {{ form_errors(form) }}

        {{ form_row(form.title, {'label': 'Quelle question souhaitez-vous poser ?'}) }}

        {{ form_row(form.image, {'label': 'Ajoutez une ou plusieurs illustrations : (facultatif)'}) }}

        <h4>Énnoncez ici les choix de réponses, et cochez ceux qui sont correctes.</h4>
        <h6>Les deux premiers choix sont requis, mais il est possible qu'il n'y est pas de bonne réponse.</h6>
        
        <div class=\"row\">
            <div class=\"col-4\">
                {{ form_row(form.answer1, {'label': 'Choix 1'}) }}
                {{ form_row(form.isTrue1, {'label': 'Est-ce une bonne réponse ?'}) }}

                {{ form_row(form.answer3, {'label': 'Choix 3'}) }}
                {{ form_row(form.isTrue3, {'label': 'Est-ce une bonne réponse ?'}) }}

                {{ form_row(form.answer5, {'label': 'Choix 5'}) }}
                {{ form_row(form.isTrue5, {'label': 'Est-ce une bonne réponse ?'}) }}
            </div>
            <div class=\"col-2\"></div>
            <div class=\"col-4\">
                {{ form_row(form.answer2, {'label': 'Choix 2'}) }}
                {{ form_row(form.isTrue2, {'label': 'Est-ce une bonne réponse ?'}) }}

                {{ form_row(form.answer4, {'label': 'Choix 4'}) }}
                {{ form_row(form.isTrue4, {'label': 'Est-ce une bonne réponse ?'}) }}

                {{ form_row(form.answer6, {'label': 'Choix 6'}) }}
                {{ form_row(form.isTrue6, {'label': 'Est-ce une bonne réponse ?'}) }}
            </div>
        </div>

        {{ form_row(form.explanation, {'label': 'Ici, expliquez la solution en quelques mots. (facultatif)',}) }}

        <button type=\"submit\" class=\"btn btn-primary\">Ajouter à l'exercice</button>
        {{ form_end(form) }}


        </div>
    </div>
</div>

{% endblock %}
", "question/maker.html.twig", "C:\\Users\\bchap\\Desktop\\Quiz_Game\\templates\\question\\maker.html.twig");
    }
}
