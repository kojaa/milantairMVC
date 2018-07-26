<?php

/* Main/getRegister.html */
class __TwigTemplate_e9f5131f864b5cfaddc13f8f228c4d1801724f3efd916108f3dcd2cfad028391 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("_global/index.html", "Main/getRegister.html", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
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
<div class=\"row\">
    <form action=\"http://localhost/milantair/MVC/user/register\" method=\"POST\"
          class=\"col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-6 offset-lg-3 col-lg-6 offset-xl-3\">
        <div class=\"card\">
            <div class=\"card-header\">
                User Registration
            </div>

            <div class=\"card-body\">
                <div class=\"form-group\">
                    <label for=\"input_email\">E-mail:</label>
                    <input type=\"email\" id=\"input_email\" name=\"reg_email\" required class=\"form-control\"
                        placeholder=\"Unesite svoju adresu e-pošte u ovo polje.\">
                </div>

                <div class=\"form-group\">
                    <label for=\"input_forename\">Forename:</label>
                    <input type=\"text\" id=\"input_forename\" name=\"reg_forename\" required class=\"form-control\"
                        placeholder=\"Unesite svoje ime.\">
                </div>

                <div class=\"form-group\">
                    <label for=\"input_surname\">Surname:</label>
                    <input type=\"text\" id=\"input_surname\" name=\"reg_surname\" required class=\"form-control\"
                        placeholder=\"Unesite svoje prezime.\">
                </div>

                <div class=\"form-group\">
                    <label for=\"input_username\">Username:</label>
                    <input type=\"text\" id=\"input_username\" name=\"reg_username\" required class=\"form-control\"
                        placeholder=\"Unesite željeno korisničko ime.\">
                </div>

                <div class=\"form-group\">
                    <label for=\"input_password_1\">Password:</label>
                    <input type=\"password\" id=\"input_password_1\" name=\"reg_password_1\" required class=\"form-control\"
                        placeholder=\"Unesite željenu lozinku.\">
                </div>

                <div class=\"form-group\">
                    <label for=\"input_password_2\">Repeat your password:</label>
                    <input type=\"password\" id=\"input_password_2\" name=\"reg_password_2\" required class=\"form-control\"
                        placeholder=\"Unesite željenu lozinku još jednom.\">
                </div>
            </div>

            <div class=\"card-footer\">
                <button type=\"submit\" class=\"btn btn-primary\">
                    Register
                </button>
            </div>
        </div>
    </form>
</div>

";
    }

    public function getTemplateName()
    {
        return "Main/getRegister.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"_global/index.html\" %}

{% block main %}

<div class=\"row\">
    <form action=\"http://localhost/milantair/MVC/user/register\" method=\"POST\"
          class=\"col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-6 offset-lg-3 col-lg-6 offset-xl-3\">
        <div class=\"card\">
            <div class=\"card-header\">
                User Registration
            </div>

            <div class=\"card-body\">
                <div class=\"form-group\">
                    <label for=\"input_email\">E-mail:</label>
                    <input type=\"email\" id=\"input_email\" name=\"reg_email\" required class=\"form-control\"
                        placeholder=\"Unesite svoju adresu e-pošte u ovo polje.\">
                </div>

                <div class=\"form-group\">
                    <label for=\"input_forename\">Forename:</label>
                    <input type=\"text\" id=\"input_forename\" name=\"reg_forename\" required class=\"form-control\"
                        placeholder=\"Unesite svoje ime.\">
                </div>

                <div class=\"form-group\">
                    <label for=\"input_surname\">Surname:</label>
                    <input type=\"text\" id=\"input_surname\" name=\"reg_surname\" required class=\"form-control\"
                        placeholder=\"Unesite svoje prezime.\">
                </div>

                <div class=\"form-group\">
                    <label for=\"input_username\">Username:</label>
                    <input type=\"text\" id=\"input_username\" name=\"reg_username\" required class=\"form-control\"
                        placeholder=\"Unesite željeno korisničko ime.\">
                </div>

                <div class=\"form-group\">
                    <label for=\"input_password_1\">Password:</label>
                    <input type=\"password\" id=\"input_password_1\" name=\"reg_password_1\" required class=\"form-control\"
                        placeholder=\"Unesite željenu lozinku.\">
                </div>

                <div class=\"form-group\">
                    <label for=\"input_password_2\">Repeat your password:</label>
                    <input type=\"password\" id=\"input_password_2\" name=\"reg_password_2\" required class=\"form-control\"
                        placeholder=\"Unesite željenu lozinku još jednom.\">
                </div>
            </div>

            <div class=\"card-footer\">
                <button type=\"submit\" class=\"btn btn-primary\">
                    Register
                </button>
            </div>
        </div>
    </form>
</div>

{% endblock %}
", "Main/getRegister.html", "D:\\XAMPP\\htdocs\\milantair\\MVC\\views\\Main\\getRegister.html");
    }
}
