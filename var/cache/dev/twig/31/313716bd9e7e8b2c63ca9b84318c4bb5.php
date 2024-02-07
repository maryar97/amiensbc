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

/* formedeboxe/detail.html.twig */
class __TwigTemplate_e0df3fe914c3792a29fdb88e82506e17 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formedeboxe/detail.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formedeboxe/detail.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "formedeboxe/detail.html.twig", 1);
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

        // line 4
        echo "\t
\t";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formedeboxe"]) || array_key_exists("formedeboxe", $context) ? $context["formedeboxe"] : (function () { throw new RuntimeError('Variable "formedeboxe" does not exist.', 5, $this->source); })()), "nom", [], "any", false, false, false, 5), "html", null, true);
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
        echo "\t<main class=\"container\">
\t\t<section class=\"row\">
\t\t\t<div class=\"col-12\">
\t\t\t\t<h1>
\t\t\t\t\t
\t                ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formedeboxe"]) || array_key_exists("formedeboxe", $context) ? $context["formedeboxe"] : (function () { throw new RuntimeError('Variable "formedeboxe" does not exist.', 14, $this->source); })()), "nom", [], "any", false, false, false, 14), "html", null, true);
        echo "
\t\t\t\t</h1>

\t\t\t</div>
\t\t\t<div class=\"col-6\">
\t\t\t\t<div class=\"carousel-inner\">

\t\t\t\t\t<img src=\"/image/";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formedeboxe"]) || array_key_exists("formedeboxe", $context) ? $context["formedeboxe"] : (function () { throw new RuntimeError('Variable "formedeboxe" does not exist.', 21, $this->source); })()), "photo", [], "any", false, false, false, 21), "html", null, true);
        echo "\" class=\"card-img-top\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formedeboxe"]) || array_key_exists("formedeboxe", $context) ? $context["formedeboxe"] : (function () { throw new RuntimeError('Variable "formedeboxe" does not exist.', 21, $this->source); })()), "photo", [], "any", false, false, false, 21), "html", null, true);
        echo "\">
\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"col-6\">
\t\t\t\t<p>
\t\t\t\t\t
\t                ";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formedeboxe"]) || array_key_exists("formedeboxe", $context) ? $context["formedeboxe"] : (function () { throw new RuntimeError('Variable "formedeboxe" does not exist.', 28, $this->source); })()), "nom", [], "any", false, false, false, 28), "html", null, true);
        echo "
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\t";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formedeboxe"]) || array_key_exists("formedeboxe", $context) ? $context["formedeboxe"] : (function () { throw new RuntimeError('Variable "formedeboxe" does not exist.', 31, $this->source); })()), "description", [], "any", false, false, false, 31), "html", null, true);
        echo "
\t\t\t\t</p>

\t\t\t\t<p>
\t\t\t\t\tPrix :
\t\t\t\t\t";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formedeboxe"]) || array_key_exists("formedeboxe", $context) ? $context["formedeboxe"] : (function () { throw new RuntimeError('Variable "formedeboxe" does not exist.', 36, $this->source); })()), "prix", [], "any", false, false, false, 36), "html", null, true);
        echo "€
\t\t\t\t</p>

\t\t\t\t";
        // line 39
        if ((twig_get_attribute($this->env, $this->source, (isset($context["formedeboxe"]) || array_key_exists("formedeboxe", $context) ? $context["formedeboxe"] : (function () { throw new RuntimeError('Variable "formedeboxe" does not exist.', 39, $this->source); })()), "prix", [], "any", false, false, false, 39) > 0)) {
            // line 40
            echo "\t\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_add", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["formedeboxe"]) || array_key_exists("formedeboxe", $context) ? $context["formedeboxe"] : (function () { throw new RuntimeError('Variable "formedeboxe" does not exist.', 40, $this->source); })()), "id", [], "any", false, false, false, 40)]), "html", null, true);
            echo "\" class=\"btn btn-danger\">
\t\t\t\t\t\tAjouter au panier
\t\t\t\t\t</a> 
\t\t\t\t";
        }
        // line 44
        echo "\t\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["formedeboxe"]) || array_key_exists("formedeboxe", $context) ? $context["formedeboxe"] : (function () { throw new RuntimeError('Variable "formedeboxe" does not exist.', 44, $this->source); })()), "prix", [], "any", false, false, false, 44) < 0)) {
            // line 45
            echo "\t\t\t\t\t<p class=\"text-warning\">
\t\t\t\t\t\tTemporairement en rupture de stock
\t\t\t\t\t</p>
\t\t\t\t";
        }
        // line 49
        echo "
\t\t\t</div>

\t</section>
</main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "formedeboxe/detail.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  162 => 49,  156 => 45,  153 => 44,  145 => 40,  143 => 39,  137 => 36,  129 => 31,  123 => 28,  111 => 21,  101 => 14,  94 => 9,  84 => 8,  72 => 5,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
\t
\t{{ formedeboxe.nom}}
{% endblock %}

{% block body %}
\t<main class=\"container\">
\t\t<section class=\"row\">
\t\t\t<div class=\"col-12\">
\t\t\t\t<h1>
\t\t\t\t\t
\t                {{ formedeboxe.nom}}
\t\t\t\t</h1>

\t\t\t</div>
\t\t\t<div class=\"col-6\">
\t\t\t\t<div class=\"carousel-inner\">

\t\t\t\t\t<img src=\"/image/{{ formedeboxe.photo }}\" class=\"card-img-top\" alt=\"{{ formedeboxe.photo}}\">
\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"col-6\">
\t\t\t\t<p>
\t\t\t\t\t
\t                {{ formedeboxe.nom}}
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\t{{ formedeboxe.description }}
\t\t\t\t</p>

\t\t\t\t<p>
\t\t\t\t\tPrix :
\t\t\t\t\t{{ formedeboxe.prix }}€
\t\t\t\t</p>

\t\t\t\t{% if formedeboxe.prix > 0 %}
\t\t\t\t\t<a href=\"{{path('cart_add', {id: formedeboxe.id}) }}\" class=\"btn btn-danger\">
\t\t\t\t\t\tAjouter au panier
\t\t\t\t\t</a> 
\t\t\t\t{% endif %}
\t\t\t\t{% if formedeboxe.prix < 0  %}
\t\t\t\t\t<p class=\"text-warning\">
\t\t\t\t\t\tTemporairement en rupture de stock
\t\t\t\t\t</p>
\t\t\t\t{% endif %}

\t\t\t</div>

\t</section>
</main>
{% endblock %}", "formedeboxe/detail.html.twig", "/home/lulu/Bureau/amiens/amiensbc/templates/formedeboxe/detail.html.twig");
    }
}
