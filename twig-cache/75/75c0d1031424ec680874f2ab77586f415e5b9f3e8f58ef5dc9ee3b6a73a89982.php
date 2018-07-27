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
        echo "    <a href=\"#\" onclick=\"addBookmark(";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["auction"] ?? null), "auction_id", array()), "html", null, true);
        echo ");\">Add to bookmark</a>
    <h1>";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["auction"] ?? null), "title", array()));
        echo "</h1>
    <p>";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["auction"] ?? null), "description", array()), "html", null, true);
        echo "</p>
    <p>Trenutna cena: <span id=\"current_auction_price\">";
        // line 7
        echo twig_escape_filter($this->env, ($context["lastOfferPrice"] ?? null), "html", null, true);
        echo "</span> EUR
        ";
        // line 8
        if ((($context["showBidForm"] ?? null) == true)) {
            // line 9
            echo "        <div class=\"form-group\">
            <input type=\"hidden\" id=\"auction_id\" value=\"";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["auction"] ?? null), "auction_id", array()), "html", null, true);
            echo "\">
            <input type=\"number\" min=\"";
            // line 11
            echo twig_escape_filter($this->env, (($context["lastOfferPrice"] ?? null) + 2), "html", null, true);
            echo "\" step=\"0.01\"
                   value=\"";
            // line 12
            echo twig_escape_filter($this->env, (($context["lastOfferPrice"] ?? null) + 2), "html", null, true);
            echo "\" id=\"offer_price\" class=\"form-control\">
            <button type=\"button\" onclick=\"actionBid();\" class=\"btn btn-primary\">
                <i class=\"fa fa-money\"></i> Licitiraj
            </button>
        </div>
        ";
        }
        // line 18
        echo "    </p>
    <p>Datum pocetka: ";
        // line 19
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["auction"] ?? null), "starts_at", array()), "j. n. Y."), "html", null, true);
        echo "</p>
    <p>Datum isteka: ";
        // line 20
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["auction"] ?? null), "ends_at", array()), "j. n. Y."), "html", null, true);
        echo "</p>
    <div id=\"message\"></div>

    <script>
        function actionBid() {
            const auctionId  = document.querySelector('#auction_id').value;
            const offerPrice = document.querySelector('#offer_price').value;

            addOffer(auctionId, offerPrice, updatePriceOnPage, showErrorMessage);
        }

        function updatePriceOnPage(newPrice) {
            document.querySelector('#current_auction_price').innerHTML = newPrice;
            showMessage('Nova ponuda je uspesno dodata!');
        }

        function showErrorMessage(errorCode) {
            switch (errorCode) {
                case -10001 : showMessage('Niste prijavljeni!'); break;
                case -10002 : showMessage('Ne mozete da licitirate na svojoj aukciji!'); break;
                case -20001 : showMessage('Aukcija ne postoji!'); break;
                case -20002 : showMessage('Aukcija nije aktivna!'); break;
                case -20003 : showMessage('Aukcija se zavrsila!'); break;
                case -20004 : showMessage('Aukcija nije pocela!'); break;
                case -20005 : showMessage('Cena nije ispravna!'); break;
                case -20006 : showMessage('Greska prilikom dodavanja ponude!'); break;
                default: showMessage('Nepoznata greska!'); break;
            }
        }

        function showMessage(message) {
            document.querySelector('#message').innerHTML = message;

            setTimeout(function(){
                document.querySelector('#message').innerHTML = '';
            }, 5000);
        }
    </script>
";
    }

    // line 60
    public function block_naslov($context, array $blocks = array())
    {
        // line 61
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
        return array (  128 => 61,  125 => 60,  82 => 20,  78 => 19,  75 => 18,  66 => 12,  62 => 11,  58 => 10,  55 => 9,  53 => 8,  49 => 7,  45 => 6,  41 => 5,  36 => 4,  33 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Auction/show.html", "D:\\XAMPP\\htdocs\\milantair\\MVC\\views\\Auction\\show.html");
    }
}
