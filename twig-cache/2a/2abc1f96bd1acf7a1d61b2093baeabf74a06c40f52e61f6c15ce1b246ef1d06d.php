<?php

/* _global/index.html */
class __TwigTemplate_c2cce91fc28d3400fe58670d0eb475f033bcba3a334539374bd0c54d7f12245d extends Twig_Template
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
    <link rel=\"stylesheet\" href=\"http://localhost/milantair/MVC/assets/css/main.css\">
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
            <a href=\"http://localhost/milantair/MVC/\" class=\"banner\"></a>
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
            <form action=\"http://localhost/milantair/MVC/search\" method=\"POST\">
                <input type=\"text\" name=\"q\" placeholder=\"Unesite kljucne reci\">
                <button type=\"submit\">Search</button>
            </form>
        </div>

        <nav id=\"main-menu\">
            <ul>
                <li><a href=\"http://localhost/milantair/MVC/\">Pocetna</a>
                <li><a href=\"http://localhost/milantair/MVC/categories\">Kategorije</a>
                <li><a href=\"http://localhost/milantair/MVC/profile\">Profil</a>
                <li><a href=\"http://localhost/milantair/MVC/contact\">Kontakt</a>
                <li><a href=\"http://localhost/milantair/MVC/log-out\">Odjava</a>
            </ul>
        </nav>

    </header>

    <main>
        ";
        // line 51
        $this->displayBlock('main', $context, $blocks);
        // line 53
        echo "    </main>

    <footer class=\"site-footer\">
        &copy; 2018 Aukcijska kuca Ta &amp; Ta
    </footer>
<script src=\"http://localhost/milantair/MVC/assets/js/bookmark.js\"></script>
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

    public function getDebugInfo()
    {
        return array (  102 => 52,  99 => 51,  94 => 11,  91 => 10,  80 => 53,  78 => 51,  38 => 13,  36 => 10,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <link rel=\"stylesheet\" href=\"http://localhost/milantair/MVC/assets/css/main.css\">
    <title>
        Ta &amp; Ta 
        {% block naslov %}
        Pocetna
        {% endblock %}
    </title>

</head>
<body>

    <header class=\"site-header\">
        <div class=\"banners\">
            <a href=\"http://localhost/milantair/MVC/\" class=\"banner\"></a>
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
            <form action=\"http://localhost/milantair/MVC/search\" method=\"POST\">
                <input type=\"text\" name=\"q\" placeholder=\"Unesite kljucne reci\">
                <button type=\"submit\">Search</button>
            </form>
        </div>

        <nav id=\"main-menu\">
            <ul>
                <li><a href=\"http://localhost/milantair/MVC/\">Pocetna</a>
                <li><a href=\"http://localhost/milantair/MVC/categories\">Kategorije</a>
                <li><a href=\"http://localhost/milantair/MVC/profile\">Profil</a>
                <li><a href=\"http://localhost/milantair/MVC/contact\">Kontakt</a>
                <li><a href=\"http://localhost/milantair/MVC/log-out\">Odjava</a>
            </ul>
        </nav>

    </header>

    <main>
        {% block main %}
        {% endblock %}
    </main>

    <footer class=\"site-footer\">
        &copy; 2018 Aukcijska kuca Ta &amp; Ta
    </footer>
<script src=\"http://localhost/milantair/MVC/assets/js/bookmark.js\"></script>
</body>
</html>", "_global/index.html", "D:\\XAMPP\\htdocs\\milantair\\MVC\\views\\_global\\index.html");
    }
}
