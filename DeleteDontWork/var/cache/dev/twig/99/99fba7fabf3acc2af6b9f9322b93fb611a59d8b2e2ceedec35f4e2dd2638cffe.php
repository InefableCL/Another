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

/* index/shopCart.html.twig */
class __TwigTemplate_65a84b6ad4524d7ee9ba4d65a84ea1518ee840fe541258960ebe882eae75acb8 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index/shopCart.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index/shopCart.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "index/shopCart.html.twig", 1);
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
        echo "<style>
    .itemClass{
        text-decoration: none;
        color: #222222;
    }

    .itemClass:hover{
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

    ";
        // line 21
        $context["sum"] = 0;
        // line 22
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 23
            echo "    <div class=\"col-md-12\">
            <div class=\"card mb-12 shadow-sm\">
                <div class=\"card-body\">
                    <h4>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "shopItem", [], "any", false, false, false, 26), "title", [], "any", false, false, false, 26), "html", null, true);
            echo "</h4>
                    <p class=\"card-text\">";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "shopItem", [], "any", false, false, false, 27), "description", [], "any", false, false, false, 27), "html", null, true);
            echo "</p>
                    <h5>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "shopItem", [], "any", false, false, false, 28), "price", [], "any", false, false, false, 28), "html", null, true);
            echo " руб</h5>
                    ";
            // line 29
            $context["sum"] = ((isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new RuntimeError('Variable "sum" does not exist.', 29, $this->source); })()) + twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "shopItem", [], "any", false, false, false, 29), "price", [], "any", false, false, false, 29));
            // line 30
            echo "                </div>
            </div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "
    <hr>
    <h4>Итого: ";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new RuntimeError('Variable "sum" does not exist.', 36, $this->source); })()), "html", null, true);
        echo "</h4>
    <a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shopOrder");
        echo "\" class=\"float-right btn btn-success mt-2\">Оформить заказ</a>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "index/shopCart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 37,  147 => 36,  143 => 34,  134 => 30,  132 => 29,  128 => 28,  124 => 27,  120 => 26,  115 => 23,  110 => 22,  108 => 21,  102 => 18,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello IndexController!{% endblock %}

{% block body %}
<style>
    .itemClass{
        text-decoration: none;
        color: #222222;
    }

    .itemClass:hover{
        text-decoration: none;
        color: #222222;
    }
</style>
<div class=\"example-wrapper\">
    <h1>{{ title }}</h1>
    <hr>

    {% set sum = 0 %}
    {% for item in items %}
    <div class=\"col-md-12\">
            <div class=\"card mb-12 shadow-sm\">
                <div class=\"card-body\">
                    <h4>{{ item.shopItem.title }}</h4>
                    <p class=\"card-text\">{{ item.shopItem.description }}</p>
                    <h5>{{ item.shopItem.price }} руб</h5>
                    {% set sum = sum + item.shopItem.price %}
                </div>
            </div>
    </div>
    {% endfor %}

    <hr>
    <h4>Итого: {{ sum }}</h4>
    <a href=\"{{ path('shopOrder') }}\" class=\"float-right btn btn-success mt-2\">Оформить заказ</a>
</div>
{% endblock %}
", "index/shopCart.html.twig", "W:\\domains\\my.locs\\templates\\index\\shopCart.html.twig");
    }
}
