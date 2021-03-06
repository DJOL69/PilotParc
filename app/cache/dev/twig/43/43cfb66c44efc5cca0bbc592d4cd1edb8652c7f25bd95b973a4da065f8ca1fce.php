<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_6a00d285ccb5eb53480eccd0360ec5cac8e8850e48547db8e0ad4dd8c73e7f8d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_46be12db69f99db38ba781cdfc0ceb00f559d2d1eb876563365fc729eb481c0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46be12db69f99db38ba781cdfc0ceb00f559d2d1eb876563365fc729eb481c0b->enter($__internal_46be12db69f99db38ba781cdfc0ceb00f559d2d1eb876563365fc729eb481c0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_46be12db69f99db38ba781cdfc0ceb00f559d2d1eb876563365fc729eb481c0b->leave($__internal_46be12db69f99db38ba781cdfc0ceb00f559d2d1eb876563365fc729eb481c0b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_85b90804cb2a70ae591adce1feea47ac625a58699c5b9867d168905dfcc95833 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85b90804cb2a70ae591adce1feea47ac625a58699c5b9867d168905dfcc95833->enter($__internal_85b90804cb2a70ae591adce1feea47ac625a58699c5b9867d168905dfcc95833_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_85b90804cb2a70ae591adce1feea47ac625a58699c5b9867d168905dfcc95833->leave($__internal_85b90804cb2a70ae591adce1feea47ac625a58699c5b9867d168905dfcc95833_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f7aaf325585b1e790bda240cd349020bdeaf2f7f71dafc68eeb4df1239b20cd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7aaf325585b1e790bda240cd349020bdeaf2f7f71dafc68eeb4df1239b20cd4->enter($__internal_f7aaf325585b1e790bda240cd349020bdeaf2f7f71dafc68eeb4df1239b20cd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f7aaf325585b1e790bda240cd349020bdeaf2f7f71dafc68eeb4df1239b20cd4->leave($__internal_f7aaf325585b1e790bda240cd349020bdeaf2f7f71dafc68eeb4df1239b20cd4_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_229b6a05d7b976d981f376e83b2a3c7290d3837432f1114f7021e4ada6c5c7a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_229b6a05d7b976d981f376e83b2a3c7290d3837432f1114f7021e4ada6c5c7a9->enter($__internal_229b6a05d7b976d981f376e83b2a3c7290d3837432f1114f7021e4ada6c5c7a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_229b6a05d7b976d981f376e83b2a3c7290d3837432f1114f7021e4ada6c5c7a9->leave($__internal_229b6a05d7b976d981f376e83b2a3c7290d3837432f1114f7021e4ada6c5c7a9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/PilotParc/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
