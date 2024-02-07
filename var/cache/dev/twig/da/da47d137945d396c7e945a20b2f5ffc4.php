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

/* cart/index.html.twig */
class __TwigTemplate_13f9812fd76ef40c3562420a7bbdda0d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cart/index.html.twig", 1);
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
        echo "    <main class=\"container\">
        ";
        // line 5
        if ((twig_length_filter($this->env, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 5, $this->source); })())) > 0)) {
            // line 6
            echo "            <aside class=\"col-12 border border-light bg-dark p-2\">
                ";
            // line 8
            echo "                    <div class=\"card-header\">
                        <h1>
                            Mon panier
                        </h1>
                    </div>
                    <div class=\"card-body\">
                        <table class=\"table\">
                            <thead>
                                <tr>
                                    <th>Total</th>

                                </tr>
                            </thead>
                            <tbody>
                                ";
            // line 22
            $context["total"] = null;
            // line 23
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 23, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 24
                echo "                                    ";
                $context["total"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "formedeboxe", [], "any", false, false, false, 24), "prix", [], "any", false, false, false, 24);
                // line 25
                echo "                                    <tr>
                                        <td>
                                        <td>";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "formedeboxe", [], "any", false, false, false, 27), "prix", [], "any", false, false, false, 27), "html", null, true);
                echo "
                                            €</td>
                                        <td>
                                            ";
                // line 31
                echo "                                        </td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "
                                </tbody>
                        </table>
                        <a href=\"#\" class=\"btn btn-dark\">Valider le Panier</a>
                        <a href=\"";
            // line 38
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_removeAll");
            echo "\" class=\"btn btn-dark\">
                            Supprimer tout mon panier
                        </a>

                    </div>
                </article>
            </aside>
        </main>
    ";
        } else {
            // line 47
            echo "        <div class=\"container\">
            <div class=\"col-12 border border-light bg-dark p-2\">
                ";
            // line 50
            echo "                    <div class=\"card-header\">
                        <h1>
                            Votre panier est vide</h1>
                    </div>
                </div>
            </div>
        </div>
    ";
        }
        // line 58
        echo "

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "cart/index.html.twig";
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
        return array (  152 => 58,  142 => 50,  138 => 47,  126 => 38,  120 => 34,  112 => 31,  106 => 27,  102 => 25,  99 => 24,  94 => 23,  92 => 22,  76 => 8,  73 => 6,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <main class=\"container\">
        {% if cart|length > 0 %}
            <aside class=\"col-12 border border-light bg-dark p-2\">
                {# <article class=\"card mb-3\"> #}
                    <div class=\"card-header\">
                        <h1>
                            Mon panier
                        </h1>
                    </div>
                    <div class=\"card-body\">
                        <table class=\"table\">
                            <thead>
                                <tr>
                                    <th>Total</th>

                                </tr>
                            </thead>
                            <tbody>
                                {% set total = null %}
                                {% for element in cart %}
                                    {% set total = (element.formedeboxe.prix ) %}
                                    <tr>
                                        <td>
                                        <td>{{ element.formedeboxe.prix }}
                                            €</td>
                                        <td>
                                            {# <a href=\"{{path('cart_remove', {id: element.formedeboxe.id}) }}\" class=\"btn btn-danger\">Supprimer</a> #}
                                        </td>
                                    </tr>
                                {% endfor %}

                                </tbody>
                        </table>
                        <a href=\"#\" class=\"btn btn-dark\">Valider le Panier</a>
                        <a href=\"{{path('cart_removeAll')}}\" class=\"btn btn-dark\">
                            Supprimer tout mon panier
                        </a>

                    </div>
                </article>
            </aside>
        </main>
    {% else %}
        <div class=\"container\">
            <div class=\"col-12 border border-light bg-dark p-2\">
                {# <div class=\"card mb-3\"> #}
                    <div class=\"card-header\">
                        <h1>
                            Votre panier est vide</h1>
                    </div>
                </div>
            </div>
        </div>
    {% endif %}


{% endblock %}", "cart/index.html.twig", "/home/lulu/Bureau/amiens/amiensbc/templates/cart/index.html.twig");
    }
}
