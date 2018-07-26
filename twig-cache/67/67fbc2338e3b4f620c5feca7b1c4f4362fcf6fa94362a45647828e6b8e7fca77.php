<?php

/* UserCategoryManagement/postAdd.html */
class __TwigTemplate_f380974fc085960132d49814a4aacecc7b62a6fa5d1ebdc60ea3e5e848c1a84b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("_global/index.html", "UserCategoryManagement/postAdd.html", 1);
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
        echo "<div>
    <div class=\"options\">
        <a href=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "user/categories\">List of all categories</a>
    </div>

    <p>";
        // line 9
        echo twig_escape_filter($this->env, ($context["message"] ?? null));
        echo "</p>
</div>
";
    }

    public function getTemplateName()
    {
        return "UserCategoryManagement/postAdd.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 9,  39 => 6,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "UserCategoryManagement/postAdd.html", "D:\\XAMPP\\htdocs\\milantair\\MVC\\views\\UserCategoryManagement\\postAdd.html");
    }
}
