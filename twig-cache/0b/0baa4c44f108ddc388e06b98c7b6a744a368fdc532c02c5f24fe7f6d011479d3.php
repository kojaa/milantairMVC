<?php

/* Category/show.html */
class __TwigTemplate_3281468df1336cfa792a85704c1452b1fe2a1c22b75f25c9cfcc757d592bfb1a extends Twig_Template
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

        <a href=\"";
            // line 9
            echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
            echo "auction/";
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

            <a class=\"auction-big-image\" href=\"";
            // line 16
            echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
            echo "auction/";
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
        return array (  109 => 31,  106 => 30,  98 => 24,  88 => 21,  83 => 19,  78 => 17,  72 => 16,  67 => 14,  63 => 13,  59 => 12,  54 => 10,  48 => 9,  44 => 7,  40 => 6,  36 => 4,  33 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Category/show.html", "D:\\XAMPP\\htdocs\\milantair\\MVC\\views\\Category\\show.html");
    }
}
