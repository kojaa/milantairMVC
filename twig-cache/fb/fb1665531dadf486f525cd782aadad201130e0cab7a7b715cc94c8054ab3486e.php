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
<html>
    <head>
        <title>Ta&amp;Ta - ";
        // line 4
        $this->displayBlock('naslov', $context, $blocks);
        echo "</title>
        <meta charset=\"utf-8\">
        <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "assets/libs/bootstrap/dist/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "assets/libs/font-awesome/css/font-awesome.min.css\">
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "assets/css/main.css\">
    </head>
    <body>
        <div class=\"container\">
            <header>
                <div class=\"row\">
                    <div class=\"col col-sm\">
                        <a href=\"";
        // line 15
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "\">
                            <img src=\"";
        // line 16
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "assets/img/banner-1.jpg\" alt=\"Banner 1\">
                        </a>
                    </div>

                    <div class=\"col col-sm\">
                        <div class=\"social-icons text-right\">
                            <a href=\"#\"><i class=\"fa fa-linkedin\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-youtube\"></i></a>
                        </div>

                        <div class=\"search-box\">
                            <form method=\"post\" action=\"";
        // line 29
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "search\">
                                <div class=\"form-group\">
                                    <div class=\"input-group\">
                                        <input type=\"text\" name=\"q\" class=\"form-control\"
                                               placeholder=\"Ključne reči pretrage\" required pattern=\"[^\\s]{2,}\">
                                        <div class=\"input-group-append\">
                                            <button type=\"submit\" class=\"btn btn-primary\">
                                                <i class=\"fa fa-search\"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <nav class=\"navbar navbar-expand-lg navbar-light bg-light main-menu\">
                    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavAltMarkup\" aria-controls=\"navbarNavAltMarkup\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                        <span class=\"navbar-toggler-icon\"></span>
                    </button>

                    <div class=\"collapse navbar-collapse\" id=\"navbarNavAltMarkup\">
                        <div class=\"navbar-nav\">
                            <a class=\"nav-item nav-link\" href=\"";
        // line 53
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "\"><i class=\"fa fa-home\"></i> Pocetna</a>
                            <a class=\"nav-item nav-link\" href=\"";
        // line 54
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "categories\"><i class=\"fa fa-list-alt\"></i> Kategorije</a>
                            <a class=\"nav-item nav-link\" href=\"";
        // line 55
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "user/profile\"><i class=\"fa fa-user\"></i> Profil</a>
                            <a class=\"nav-item nav-link\" href=\"";
        // line 56
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "contact\"><i class=\"fa fa-phone\"></i> Kontakt</a>
                            <a class=\"nav-item nav-link\" href=\"";
        // line 57
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "user/logout\"><i class=\"fa fa-sign-out\"></i> Odjava</a>
                        </div>
                    </div>
                </nav>
            </header>

            <main>
                ";
        // line 64
        $this->displayBlock('main', $context, $blocks);
        // line 66
        echo "            </main>

            <div class=\"card bookmark-card\">
                <div class=\"bookmarks card-body\">
                    Please wait, loading bookmarks...
                </div>
            </div>

            <footer class=\"site-footer text-center\">
                &copy; 2018 - Aukcijska kuca <a href=\"#\">Ta and Te</a>
            </footer>
        </div>

        <script>const BASE = '";
        // line 79
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "';</script>
        <script src=\"";
        // line 80
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "assets/libs/jquery/dist/jquery.min.js\"></script>
        <script src=\"";
        // line 81
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "assets/libs/bootstrap/dist/js/bootstrap.min.js\"></script>
        <script src=\"";
        // line 82
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "assets/js/bookmark.js\"></script>
        <script src=\"";
        // line 83
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "assets/js/offer.js\"></script>
    </body>
</html>
";
    }

    // line 4
    public function block_naslov($context, array $blocks = array())
    {
        echo "Pocetna";
    }

    // line 64
    public function block_main($context, array $blocks = array())
    {
        // line 65
        echo "                ";
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
        return array (  176 => 65,  173 => 64,  167 => 4,  159 => 83,  155 => 82,  151 => 81,  147 => 80,  143 => 79,  128 => 66,  126 => 64,  116 => 57,  112 => 56,  108 => 55,  104 => 54,  100 => 53,  73 => 29,  57 => 16,  53 => 15,  43 => 8,  39 => 7,  35 => 6,  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "_global/index.html", "D:\\XAMPP\\htdocs\\milantair\\MVC\\views\\_global\\index.html");
    }
}
