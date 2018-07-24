<?php

/* Main/home.html */
class __TwigTemplate_53caff1a9e9d56517372e248298b99f229fa3f5d997b8fc2b329e88eea33db4a extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("_global/index.html", "Main/home.html", 1);
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
        ob_start();
        // line 5
        echo "
    <p>";
        // line 6
        echo twig_escape_filter($this->env, ($context["podatak"] ?? null), "html", null, true);
        echo "</p>

<div class=\"categories\">
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 10
            echo "        <a class=\"category\" href=\"http://localhost/milantair/MVC/category/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "category_id", array()), "html", null, true);
            echo "\">
            ";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", array()));
            echo "
        </a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "</div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "Main/home.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 14,  55 => 11,  50 => 10,  46 => 9,  40 => 6,  37 => 5,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '_global/index.html' %}

{% block main %}
{% spaceless %}

    <p>{{podatak}}</p>

<div class=\"categories\">
        {% for category in categories %}
        <a class=\"category\" href=\"http://localhost/milantair/MVC/category/{{ category.category_id }}\">
            {{ category.name|escape }}
        </a>
    {% endfor %}
</div>
{% endspaceless %}
{% endblock %}", "Main/home.html", "D:\\XAMPP\\htdocs\\milantair\\MVC\\views\\Main\\home.html");
    }
}
