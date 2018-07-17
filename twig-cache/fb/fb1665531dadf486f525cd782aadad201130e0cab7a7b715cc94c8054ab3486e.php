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

    <title>
        Ta &amp; Ta 
        ";
        // line 10
        $this->displayBlock('naslov', $context, $blocks);
        // line 13
        echo "    </title>

</head>
<body>

    <header>
        <div class=\"banners\">
            <a href=\"milantair/mvc/\" class=\"banner\"></a>
            <img src=\"milantair/mvc/assets/img/banner-1.jpg\" alt=\"BANNER 1\">
        </div>

        <nav id=\"main-menu\">
            <ul>
                <li><a href=\"index.php\">Pocetna</a>
                <li><a href=\"categories\">Kategorije</a>
                <li><a href=\"profile\">Profil</a>
                <li><a href=\"contact\">Kontakt</a>
                <li><a href=\"log-out\">Odjava</a>
            </ul>
        </nav>

    </header>

    <main>
        ";
        // line 37
        $this->displayBlock('main', $context, $blocks);
        // line 39
        echo "    </main>

    <footer>
        &copy; 2018 Aukcijska kuca Ta &amp; Ta
    </footer>

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

    // line 37
    public function block_main($context, array $blocks = array())
    {
        // line 38
        echo "        ";
    }

    public function getTemplateName()
    {
        return "_global/index.html";
    }

    public function getDebugInfo()
    {
        return array (  88 => 38,  85 => 37,  80 => 11,  77 => 10,  66 => 39,  64 => 37,  38 => 13,  36 => 10,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "_global/index.html", "D:\\XAMPP\\htdocs\\milantair\\MVC\\views\\_global\\index.html");
    }
}
