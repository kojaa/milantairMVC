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
        echo "<h1>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "name", array()));
        echo "</h1>
<p>Spisak aukcija u ovoj kategoriji je:</p>

<ul> 
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["auctionsInCategory"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["auction"]) {
            // line 9
            echo "        <li> 
        <a href=\"auction/";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["auction"], "auction_id", array()), "html", null, true);
            echo "\">
            ";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["auction"], "title", array()));
            echo "<br></a>
            ";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["auction"], "description", array()));
            echo "<br>
        
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['auction'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo " 
</ul>
";
    }

    // line 18
    public function block_naslov($context, array $blocks = array())
    {
        // line 19
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
        return array (  77 => 19,  74 => 18,  68 => 14,  59 => 12,  55 => 11,  51 => 10,  48 => 9,  44 => 8,  36 => 4,  33 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Category/show.html", "D:\\XAMPP\\htdocs\\milantair\\MVC\\views\\Category\\show.html");
    }
}
