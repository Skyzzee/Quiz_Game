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

/* exercise/show.html.twig */
class __TwigTemplate_f0c28dda2873363d50a4017276e43ed7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "exercise/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "exercise/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "exercise/show.html.twig", 1);
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

        echo "Exercise
";
        
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
        echo "\t<h1>Exercise</h1>

\t<table class=\"table\">
\t\t<tbody>
\t\t\t<tr>
\t\t\t\t<th>Id</th>
\t\t\t\t<td>";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["exercise"]) || array_key_exists("exercise", $context) ? $context["exercise"] : (function () { throw new RuntimeError('Variable "exercise" does not exist.', 13, $this->source); })()), "id", [], "any", false, false, false, 13), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Titre</th>
\t\t\t\t<td>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["exercise"]) || array_key_exists("exercise", $context) ? $context["exercise"] : (function () { throw new RuntimeError('Variable "exercise" does not exist.', 17, $this->source); })()), "title", [], "any", false, false, false, 17), "html", null, true);
        echo "</td>
\t\t\t</tr>

\t\t\t<tr>
\t\t\t\t<th>Catgerory</th>
\t\t\t\t<td>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["exercise"]) || array_key_exists("exercise", $context) ? $context["exercise"] : (function () { throw new RuntimeError('Variable "exercise" does not exist.', 22, $this->source); })()), "category", [], "any", false, false, false, 22), "name", [], "any", false, false, false, 22), "html", null, true);
        echo "</td>
\t\t\t</tr>

\t\t\t<tr>
\t\t\t\t<th>Difficulté</th>
\t\t\t\t<td>";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["exercise"]) || array_key_exists("exercise", $context) ? $context["exercise"] : (function () { throw new RuntimeError('Variable "exercise" does not exist.', 27, $this->source); })()), "difficulty", [], "any", false, false, false, 27), "name", [], "any", false, false, false, 27), "html", null, true);
        echo "</td>
\t\t\t</tr>

\t\t</tbody>
\t</table>

\t<a href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_exercise_index");
        echo "\" class=\"btn btn-primary\">Retour à la liste d'exercice</a>
    <a href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_main_quiz");
        echo "\" class=\"btn btn-primary\">Retour à la création de quiz</a>

\t<a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_exercise_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["exercise"]) || array_key_exists("exercise", $context) ? $context["exercise"] : (function () { throw new RuntimeError('Variable "exercise" does not exist.', 36, $this->source); })()), "id", [], "any", false, false, false, 36)]), "html", null, true);
        echo "\">Modifier</a>

\t";
        // line 38
        echo twig_include($this->env, $context, "exercise/_delete_form.html.twig");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "exercise/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 38,  138 => 36,  133 => 34,  129 => 33,  120 => 27,  112 => 22,  104 => 17,  97 => 13,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Exercise
{% endblock %}

{% block body %}
\t<h1>Exercise</h1>

\t<table class=\"table\">
\t\t<tbody>
\t\t\t<tr>
\t\t\t\t<th>Id</th>
\t\t\t\t<td>{{ exercise.id }}</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Titre</th>
\t\t\t\t<td>{{ exercise.title }}</td>
\t\t\t</tr>

\t\t\t<tr>
\t\t\t\t<th>Catgerory</th>
\t\t\t\t<td>{{ exercise.category.name }}</td>
\t\t\t</tr>

\t\t\t<tr>
\t\t\t\t<th>Difficulté</th>
\t\t\t\t<td>{{ exercise.difficulty.name }}</td>
\t\t\t</tr>

\t\t</tbody>
\t</table>

\t<a href=\"{{ path('app_exercise_index') }}\" class=\"btn btn-primary\">Retour à la liste d'exercice</a>
    <a href=\"{{ path('app_main_quiz') }}\" class=\"btn btn-primary\">Retour à la création de quiz</a>

\t<a href=\"{{ path('app_exercise_edit', {'id': exercise.id}) }}\">Modifier</a>

\t{{ include('exercise/_delete_form.html.twig') }}
{% endblock %}", "exercise/show.html.twig", "C:\\Users\\bchap\\Desktop\\Quiz_Game\\templates\\exercise\\show.html.twig");
    }
}
