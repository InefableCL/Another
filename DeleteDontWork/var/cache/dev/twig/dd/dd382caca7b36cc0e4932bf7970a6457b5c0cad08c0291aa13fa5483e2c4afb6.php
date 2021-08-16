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

/* index/shopList.html.twig */
class __TwigTemplate_6434f2f4ba12640d565baa57b75644563c0e95cf7b649dda645d9c64dfd7b8c2 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index/shopList.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index/shopList.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "index/shopList.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello IndexController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <style>
        .itemClass {
            text-decoration: none;
            color: #222222;
        }

        .itemClass:hover {
            text-decoration: none;
            color: #222222;
        }
    </style>
    <div class=\"example-wrapper\">
        <h1>";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 18, $this->source); })()), "html", null, true);
        echo "</h1>
        <hr>

        <div class=\"row\">
            ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 23
            echo "                <div class=\"col-md-4\">
                    <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shopItem", ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 24)]), "html", null, true);
            echo "\" class=\"itemClass\">
                        <div class=\"card mb-4 shadow-sm\">
                            <svg class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"225\"
                                 xmlns=\"http://www.w3.org/2000/svg\" preserveAspectRatio=\"xMidYMid slice\"
                                 focusable=\"false\" role=\"img\" aria-label=\"Placeholder: Thumbnail\"><title>
                                    Placeholder</title>
                                <rect width=\"100%\" height=\"100%\" fill=\"#55595c\"></rect>
                                <text x=\"50%\" y=\"50%\" fill=\"#eceeef\" dy=\".3em\">Thumbnail</text>
                            </svg>
                            <div class=\"card-body\">
                                <h4>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 34), "html", null, true);
            echo "</h4>
                                <p class=\"card-text\">";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 35), "html", null, true);
            echo "</p>
                                <div class=\"d-flex justify-content-between align-items-center\">
                                    <h5>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "price", [], "any", false, false, false, 37), "html", null, true);
            echo " руб.</h5>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "index/shopList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 44,  138 => 37,  133 => 35,  129 => 34,  116 => 24,  113 => 23,  109 => 22,  102 => 18,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello IndexController!{% endblock %}

{% block body %}
    <style>
        .itemClass {
            text-decoration: none;
            color: #222222;
        }

        .itemClass:hover {
            text-decoration: none;
            color: #222222;
        }
    </style>
    <div class=\"example-wrapper\">
        <h1>{{ title }}</h1>
        <hr>

        <div class=\"row\">
            {% for item in items %}
                <div class=\"col-md-4\">
                    <a href=\"{{ path('shopItem', {'id': item.id}) }}\" class=\"itemClass\">
                        <div class=\"card mb-4 shadow-sm\">
                            <svg class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"225\"
                                 xmlns=\"http://www.w3.org/2000/svg\" preserveAspectRatio=\"xMidYMid slice\"
                                 focusable=\"false\" role=\"img\" aria-label=\"Placeholder: Thumbnail\"><title>
                                    Placeholder</title>
                                <rect width=\"100%\" height=\"100%\" fill=\"#55595c\"></rect>
                                <text x=\"50%\" y=\"50%\" fill=\"#eceeef\" dy=\".3em\">Thumbnail</text>
                            </svg>
                            <div class=\"card-body\">
                                <h4>{{ item.title }}</h4>
                                <p class=\"card-text\">{{ item.description }}</p>
                                <div class=\"d-flex justify-content-between align-items-center\">
                                    <h5>{{ item.price }} руб.</h5>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            {% endfor %}
        </div>
    </div>
{% endblock %}
", "index/shopList.html.twig", "W:\\domains\\my.locs\\templates\\index\\shopList.html.twig");
    }
}
