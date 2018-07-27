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
        echo "    <ul>
        ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["auctionsInCategory"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["auction"]) {
            // line 6
            echo "        <li class=\"auction row\">
            <div class=\"col-12 col-md-2\">
                <a href=\"";
            // line 8
            echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
            echo "auction/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["auction"], "auction_id", array()), "html", null, true);
            echo "\">
                    <img src=\"";
            // line 9
            echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
            echo "assets/uploads/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["auction"], "image_path", array()), "html", null, true);
            echo "\"
                         alt=\"Velika slika - ";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["auction"], "auction_id", array()), "html", null, true);
            echo "\" class=\"width-100-percent\">
                </a>
            </div>

            <div class=\"col-12 col-md-10\">
                <a href=\"";
            // line 15
            echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
            echo "auction/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["auction"], "auction_id", array()), "html", null, true);
            echo "\">
                    ";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["auction"], "title", array()));
            echo "
                </a>

                <div class=\"row\">
                    <span class=\"col-6 col-md-4\">";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["auction"], "starts_at", array()));
            echo "</span>
                    <span class=\"col-6 col-md-4\">";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["auction"], "ends_at", array()));
            echo "</span>
                    <span class=\"col-12 col-md-4\">";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["auction"], "last_offer_price", array()));
            echo " &euro;</span>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['auction'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "    </ul>
";
    }

    // line 29
    public function block_naslov($context, array $blocks = array())
    {
        // line 30
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
        return array (  106 => 30,  103 => 29,  98 => 26,  88 => 22,  84 => 21,  80 => 20,  73 => 16,  67 => 15,  59 => 10,  53 => 9,  47 => 8,  43 => 6,  39 => 5,  36 => 4,  33 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Category/show.html", "D:\\XAMPP\\htdocs\\milantair\\MVC\\views\\Category\\show.html");
    }
}
