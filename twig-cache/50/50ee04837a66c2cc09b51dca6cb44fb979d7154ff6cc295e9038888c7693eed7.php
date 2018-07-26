<?php

/* Main/postRegister.html */
class __TwigTemplate_bfacfb71de3dcb1624025ff12df98f35d590e7b69ff41cd03f879ece01d852ba extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("_global/index.html", "Main/postRegister.html", 1);
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
    <p>";
        // line 5
        echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
        echo "</p>

    <p>Klikni <a href=\"http://localhost/milantair/MVC/user/register\">ovde</a> da se vratiš nazad.</p>
</div>
";
    }

    public function getTemplateName()
    {
        return "Main/postRegister.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 5,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"_global/index.html\" %}

{% block main %}
<div>
    <p>{{ message }}</p>

    <p>Klikni <a href=\"http://localhost/milantair/MVC/user/register\">ovde</a> da se vratiš nazad.</p>
</div>
{% endblock %}
", "Main/postRegister.html", "D:\\XAMPP\\htdocs\\milantair\\MVC\\views\\Main\\postRegister.html");
    }
}
