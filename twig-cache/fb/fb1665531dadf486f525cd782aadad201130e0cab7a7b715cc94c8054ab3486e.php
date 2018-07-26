<?php

/* _global/index.html */
class __TwigTemplate_bee3e6d2dea24f04d6e36f64e8828180e1892bb610100cc326f8eb5d50cb0e4c extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'naslov' => array($this, 'block_naslov'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "assets/css/main.css\">
    <title>
        Ta &amp; Ta 
        ";
        // line 10
        $this->displayBlock('naslov', $context, $blocks);
        // line 13
        echo "    </title>

</head>
<body>

    <header class=\"site-header\">
        <div class=\"banners\">
            <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "\" class=\"banner\"></a>
            <img src=\"https://qph.ec.quoracdn.net/main-qimg-3e1b1533e444c415486fe706f28f5180\" alt=\"BANNER1\" style=\"height:100px;\">
        </div>
        <div class=\"social-icons\">
            <a href=\"\"><img src=\"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSnON_222T4Z3zIL6W7IDjLKoZKOySrCOTH5WaK66_JQASIV5-j\" alt=\"LI\"></a>
            <a href=\"\"><img src=\"https://cdn2.iconfinder.com/data/icons/social-buttons-2/512/facebook-512.png\" alt=\"FB\"></a>
            <a href=\"\"><img src=\"https://cdn4.iconfinder.com/data/icons/social-media-icons-the-circle-set/48/twitter_circle-512.png\" alt=\"TW\"></a>
            <a href=\"\"><img src=\"https://i1.wp.com/www.vectorico.com/wp-content/uploads/2018/02/Google-Plus-Icon.png?resize=300%2C300\" alt=\"GP\"></a>
            <a href=\"\"><img src=\"http://icons.iconarchive.com/icons/dakirby309/simply-styled/256/YouTube-icon.png\" alt=\"YT\"></a>
        </div>

        <div class=\"search-box\">
            <form action=\"";
        // line 32
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "search\" method=\"POST\">
                <input type=\"text\" name=\"q\" placeholder=\"Unesite kljucne reci\">
                <button type=\"submit\">Search</button>
            </form>
        </div>

        <nav id=\"main-menu\">
            <ul>
                <li><a href=\"";
        // line 40
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "\">Pocetna</a>
                <li><a href=\"";
        // line 41
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "categories\">Kategorije</a>
                <li><a href=\"";
        // line 42
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "profile\">Profil</a>
                <li><a href=\"";
        // line 43
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "contact\">Kontakt</a>
                <li><a href=\"";
        // line 44
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "log-out\">Odjava</a>
            </ul>
        </nav>

    </header>

    <main>
        ";
        // line 51
        $this->displayBlock('main', $context, $blocks);
        // line 53
        echo "    </main>

    <div class=\"bookmarks\">Loading bookmarks...</div>

    <footer class=\"site-footer\">
        &copy; 2018 Aukcijska kuca Ta &amp; Ta
    </footer>
    <script>const BASE = '";
        // line 60
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "'</script>
<script src=\"";
        // line 61
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "assets/js/bookmark.js\"></script>
</body>
</html>";
    }

    // line 10
    public function block_naslov($context, array $blocks = array())
    {
        // line 11
        echo "        Pocetna
        ";
    }

    // line 51
    public function block_main($context, array $blocks = array())
    {
        // line 52
        echo "        ";
    }

    public function getTemplateName()
    {
        return "_global/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 52,  132 => 51,  127 => 11,  124 => 10,  117 => 61,  113 => 60,  104 => 53,  102 => 51,  92 => 44,  88 => 43,  84 => 42,  80 => 41,  76 => 40,  65 => 32,  50 => 20,  41 => 13,  39 => 10,  33 => 7,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "_global/index.html", "D:\\XAMPP\\htdocs\\milantair\\MVC\\views\\_global\\index.html");
    }
}
