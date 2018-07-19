<?php

/* Category/show.html */
class __TwigTemplate_9c2afde91f7a799533ac5781fac6764f450754233212821f8918d01b109a113f extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("_global/index.html", "Category/show.html", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
            'naslov' => array($this, 'block_naslov'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_global/index.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        // line 4
        echo "    
<ul> 
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["auctionsInCategory"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["auction"]) {
            // line 7
            echo "        <li class=\"auction\"> 

        <a href=\"http://localhost/milantair/MVC/auction/";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["auction"], "auction_id", array()), "html", null, true);
            echo "\" class=\"auction-title\">
            ";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["auction"], "title", array()));
            echo "
        </a>
            <span class=\"auction-date1\"> ";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["auction"], "created_at", array()));
            echo "</span>
            <span class=\"auction-date2\"> ";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["auction"], "expires_at", array()));
            echo "</span>
            <span class=\"auction-price\"> ";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["auction"], "starting_price", array()));
            echo " &euro;</span>

            <a class=\"auction-big-image\" href=\"http://localhost/milantair/MVC/auction/";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["auction"], "auction_id", array()), "html", null, true);
            echo "\">
            <img src=\"#\" alt=\"Velika slika - ";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["auction"], "auction_id", array()), "html", null, true);
            echo "\" >
            </a>
            <img src=\"#\" alt=\"Mala slika 1- ";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["auction"], "auction_id", array()), "html", null, true);
            echo "\" class=\"auction-small-image image-1\">

            <img src=\"#\" alt=\"Mala slika 2- ";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["auction"], "auction_id", array()), "html", null, true);
            echo "\" class=\"auction-small-image image-2\">
            
        
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['auction'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo " 
</ul>


";
    }

    // line 30
    public function block_naslov($context, array $blocks = array())
    {
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "name", array()));
        echo "
";
    }

    public function getTemplateName()
    {
        return "Category/show.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 31,  102 => 30,  94 => 24,  84 => 21,  79 => 19,  74 => 17,  70 => 16,  65 => 14,  61 => 13,  57 => 12,  52 => 10,  48 => 9,  44 => 7,  40 => 6,  36 => 4,  33 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '_global/index.html' %}

{% block main %}
    
<ul> 
    {% for auction in auctionsInCategory %}
        <li class=\"auction\"> 

        <a href=\"http://localhost/milantair/MVC/auction/{{auction.auction_id}}\" class=\"auction-title\">
            {{auction.title|escape}}
        </a>
            <span class=\"auction-date1\"> {{auction.created_at|escape}}</span>
            <span class=\"auction-date2\"> {{auction.expires_at|escape}}</span>
            <span class=\"auction-price\"> {{auction.starting_price|escape}} &euro;</span>

            <a class=\"auction-big-image\" href=\"http://localhost/milantair/MVC/auction/{{auction.auction_id}}\">
            <img src=\"#\" alt=\"Velika slika - {{auction.auction_id}}\" >
            </a>
            <img src=\"#\" alt=\"Mala slika 1- {{auction.auction_id}}\" class=\"auction-small-image image-1\">

            <img src=\"#\" alt=\"Mala slika 2- {{auction.auction_id}}\" class=\"auction-small-image image-2\">
            
        
    {% endfor %} 
</ul>


{% endblock %}

{% block naslov %}
{{ category.name|escape }}
{% endblock %}", "Category/show.html", "D:\\XAMPP\\htdocs\\milantair\\MVC\\views\\Category\\show.html");
    }
}
