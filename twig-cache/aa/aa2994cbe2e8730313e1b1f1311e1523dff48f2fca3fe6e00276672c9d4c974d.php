<?php

/* Main/getLogin.html */
class __TwigTemplate_d8cafefbb7d393e3fd593e8a879337f019a4730e9c283514135579c318c94b8a extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("_global/index.html", "Main/getLogin.html", 1);
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
        echo "<form action=\"";
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "user/login\" method=\"POST\">
    <div class=\"form-group\">
        <label for=\"input_username\">Username:</label>
        <input type=\"text\" id=\"input_username\" name=\"login_username\" required
               class=\"form-control\" pattern=\"^[^\\s]{3,}\$\"
               placeholder=\"Unesite korisničko ime.\">
    </div>

    <div class=\"form-group\">
        <label for=\"input_password\">Password:</label>
        <input type=\"password\" id=\"input_password\" name=\"login_password\" required
               class=\"form-control\" pattern=\"^.{6,}\$\"
               placeholder=\"Unesite lozinku.\">
    </div>

    <div class=\"form-group\">
        <button type=\"submit\" class=\"btn btn-primary\">
            <i class=\"fa fa-sign-in\"></i>
            Log in
        </button>
    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "Main/getLogin.html";
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
        return new Twig_Source("", "Main/getLogin.html", "D:\\XAMPP\\htdocs\\milantair\\MVC\\views\\Main\\getLogin.html");
    }
}
