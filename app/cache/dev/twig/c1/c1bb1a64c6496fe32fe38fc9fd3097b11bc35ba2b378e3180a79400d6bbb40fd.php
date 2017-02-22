<?php

/* base.html.twig */
class __TwigTemplate_0c03b4841501f1c3f29838aefa3b650af57728639fc45cd064209ac225a6c2fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ab3040d49e9af3f4ab5f8072c361e959bca5d5d39bcb5f9fbf830857edaa86f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab3040d49e9af3f4ab5f8072c361e959bca5d5d39bcb5f9fbf830857edaa86f4->enter($__internal_ab3040d49e9af3f4ab5f8072c361e959bca5d5d39bcb5f9fbf830857edaa86f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 12
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 13
        echo "    </body>
</html>
";
        
        $__internal_ab3040d49e9af3f4ab5f8072c361e959bca5d5d39bcb5f9fbf830857edaa86f4->leave($__internal_ab3040d49e9af3f4ab5f8072c361e959bca5d5d39bcb5f9fbf830857edaa86f4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_95dd0233cb3da95957b0ea71483f86a3cfe67b196ed61954c37c8e67438ebbe5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95dd0233cb3da95957b0ea71483f86a3cfe67b196ed61954c37c8e67438ebbe5->enter($__internal_95dd0233cb3da95957b0ea71483f86a3cfe67b196ed61954c37c8e67438ebbe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_95dd0233cb3da95957b0ea71483f86a3cfe67b196ed61954c37c8e67438ebbe5->leave($__internal_95dd0233cb3da95957b0ea71483f86a3cfe67b196ed61954c37c8e67438ebbe5_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_532d2b3ddee10e3895cb45dddfcc9328a845d081f26cfc2b3b98f429806d979b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_532d2b3ddee10e3895cb45dddfcc9328a845d081f26cfc2b3b98f429806d979b->enter($__internal_532d2b3ddee10e3895cb45dddfcc9328a845d081f26cfc2b3b98f429806d979b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_532d2b3ddee10e3895cb45dddfcc9328a845d081f26cfc2b3b98f429806d979b->leave($__internal_532d2b3ddee10e3895cb45dddfcc9328a845d081f26cfc2b3b98f429806d979b_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_d198866a38e7cc8fcdc2fff6e32d2c47eabc48a8b0c3dc79943333acb9e6af6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d198866a38e7cc8fcdc2fff6e32d2c47eabc48a8b0c3dc79943333acb9e6af6f->enter($__internal_d198866a38e7cc8fcdc2fff6e32d2c47eabc48a8b0c3dc79943333acb9e6af6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "        ";
        
        $__internal_d198866a38e7cc8fcdc2fff6e32d2c47eabc48a8b0c3dc79943333acb9e6af6f->leave($__internal_d198866a38e7cc8fcdc2fff6e32d2c47eabc48a8b0c3dc79943333acb9e6af6f_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a60e91c5fdb057712da711fb82bd97bcf32f21bdfa7774642dd5a248f0e2ca21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a60e91c5fdb057712da711fb82bd97bcf32f21bdfa7774642dd5a248f0e2ca21->enter($__internal_a60e91c5fdb057712da711fb82bd97bcf32f21bdfa7774642dd5a248f0e2ca21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a60e91c5fdb057712da711fb82bd97bcf32f21bdfa7774642dd5a248f0e2ca21->leave($__internal_a60e91c5fdb057712da711fb82bd97bcf32f21bdfa7774642dd5a248f0e2ca21_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 12,  88 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 13,  47 => 12,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}
        {% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/html/PilotParc/app/Resources/views/base.html.twig");
    }
}
