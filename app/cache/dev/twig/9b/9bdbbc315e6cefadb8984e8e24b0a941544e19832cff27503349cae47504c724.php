<?php

/* base.html.twig */
class __TwigTemplate_08739bb40ecc11e84d4c2bc0aa9d005b0f8b5c2ad05bd3b5a688a62eb5a8130e extends Twig_Template
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
        $__internal_b8102e53aff3c113629b2a274a1af8d62099b3fa03629ef82f1800d3c079cfcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8102e53aff3c113629b2a274a1af8d62099b3fa03629ef82f1800d3c079cfcc->enter($__internal_b8102e53aff3c113629b2a274a1af8d62099b3fa03629ef82f1800d3c079cfcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_b8102e53aff3c113629b2a274a1af8d62099b3fa03629ef82f1800d3c079cfcc->leave($__internal_b8102e53aff3c113629b2a274a1af8d62099b3fa03629ef82f1800d3c079cfcc_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_546e19e7cdc76d4fc01f1963a68d3123839387f5140332fd53ff647db2ba1ec6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_546e19e7cdc76d4fc01f1963a68d3123839387f5140332fd53ff647db2ba1ec6->enter($__internal_546e19e7cdc76d4fc01f1963a68d3123839387f5140332fd53ff647db2ba1ec6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_546e19e7cdc76d4fc01f1963a68d3123839387f5140332fd53ff647db2ba1ec6->leave($__internal_546e19e7cdc76d4fc01f1963a68d3123839387f5140332fd53ff647db2ba1ec6_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a887309aada5a4f919b66fe246b6471224493329d99473cc5e5eb2d31467bbc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a887309aada5a4f919b66fe246b6471224493329d99473cc5e5eb2d31467bbc4->enter($__internal_a887309aada5a4f919b66fe246b6471224493329d99473cc5e5eb2d31467bbc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a887309aada5a4f919b66fe246b6471224493329d99473cc5e5eb2d31467bbc4->leave($__internal_a887309aada5a4f919b66fe246b6471224493329d99473cc5e5eb2d31467bbc4_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_647315746c11f4a9659d95609b4e2ed9582fdb793e637075af5e72436025ce3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_647315746c11f4a9659d95609b4e2ed9582fdb793e637075af5e72436025ce3d->enter($__internal_647315746c11f4a9659d95609b4e2ed9582fdb793e637075af5e72436025ce3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_647315746c11f4a9659d95609b4e2ed9582fdb793e637075af5e72436025ce3d->leave($__internal_647315746c11f4a9659d95609b4e2ed9582fdb793e637075af5e72436025ce3d_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_763ca70be9218dba1a126f32cc5a7b38e2d2de2a4937e3049529a728e7c299ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_763ca70be9218dba1a126f32cc5a7b38e2d2de2a4937e3049529a728e7c299ec->enter($__internal_763ca70be9218dba1a126f32cc5a7b38e2d2de2a4937e3049529a728e7c299ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_763ca70be9218dba1a126f32cc5a7b38e2d2de2a4937e3049529a728e7c299ec->leave($__internal_763ca70be9218dba1a126f32cc5a7b38e2d2de2a4937e3049529a728e7c299ec_prof);

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
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
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
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/html/PilotParc/app/Resources/views/base.html.twig");
    }
}
