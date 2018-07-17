<?php

/* Auction/show.html */
class __TwigTemplate_b0d9ebd59a5faa4cfa0a8488f71828b2a98dec486aeea55263fbcf0d684b3cc8 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("_global/index.html", "Auction/show.html", 1);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["auction"] ?? null), "title", array()));
        echo "</h1>
<p>";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["auction"] ?? null), "description", array()), "html", null, true);
        echo "</p>
<p>Pocetna cena: ";
        // line 6
        echo twig_escape_filter($this->env, ($context["lastOfferPrice"] ?? null), "html", null, true);
        echo " EUR</p>
<p>Datum pocetka: ";
        // line 7
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["auction"] ?? null), "created_at", array()), "j. n. Y."), "html", null, true);
        echo "</p>
<p>Datum kraja: ";
        // line 8
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["auction"] ?? null), "expires_at", array()), "j. n. Y."), "html", null, true);
        echo "</p>

";
    }

    // line 12
    public function block_naslov($context, array $blocks = array())
    {
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["auction"] ?? null), "title", array()));
        echo "
";
    }

    public function getTemplateName()
    {
        return "Auction/show.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 13,  60 => 12,  53 => 8,  49 => 7,  45 => 6,  41 => 5,  36 => 4,  33 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Auction/show.html", "D:\\XAMPP\\htdocs\\milantair\\MVC\\views\\Auction\\show.html");
    }
}
