<?php

/* UserCategoryManagement/getAdd.html */
class __TwigTemplate_8bac738899e4e07a0d1e080d0c371911f812b445975a6d0d0b70f42e4e427643 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("_global/index.html", "UserCategoryManagement/getAdd.html", 1);
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

    <form class=\"category-form\" method=\"POST\">
        <div>
            <label for=\"name\">Name: </label>
            <input type=\"text\" id=\"name\" name=\"name\" required>
        </div>

        <div>
            <button type=\"submit\">
                Add category
            </button>
        </div>
    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "UserCategoryManagement/getAdd.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 6,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "UserCategoryManagement/getAdd.html", "D:\\XAMPP\\htdocs\\milantair\\MVC\\views\\UserCategoryManagement\\getAdd.html");
    }
}
