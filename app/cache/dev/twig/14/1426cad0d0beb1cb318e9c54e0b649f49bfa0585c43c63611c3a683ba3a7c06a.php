<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_343b115ccdd51cd93b37d85e2cd247375e1cda9bf83f25f82f80318a01a340be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_54735126c8902de8724911cefb60dc15555cadbf2c7e0d7e3fa349a16af7091c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54735126c8902de8724911cefb60dc15555cadbf2c7e0d7e3fa349a16af7091c->enter($__internal_54735126c8902de8724911cefb60dc15555cadbf2c7e0d7e3fa349a16af7091c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54735126c8902de8724911cefb60dc15555cadbf2c7e0d7e3fa349a16af7091c->leave($__internal_54735126c8902de8724911cefb60dc15555cadbf2c7e0d7e3fa349a16af7091c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2a7fa0f4106cf1dde5cecb4d6257cc7f69176bb526bfbe7500c31045b7bb7d29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a7fa0f4106cf1dde5cecb4d6257cc7f69176bb526bfbe7500c31045b7bb7d29->enter($__internal_2a7fa0f4106cf1dde5cecb4d6257cc7f69176bb526bfbe7500c31045b7bb7d29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2a7fa0f4106cf1dde5cecb4d6257cc7f69176bb526bfbe7500c31045b7bb7d29->leave($__internal_2a7fa0f4106cf1dde5cecb4d6257cc7f69176bb526bfbe7500c31045b7bb7d29_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_036abd1f7dcf92aae3d7d40c830d6cea976997179a051fcd54c962b798dea1e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_036abd1f7dcf92aae3d7d40c830d6cea976997179a051fcd54c962b798dea1e2->enter($__internal_036abd1f7dcf92aae3d7d40c830d6cea976997179a051fcd54c962b798dea1e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_036abd1f7dcf92aae3d7d40c830d6cea976997179a051fcd54c962b798dea1e2->leave($__internal_036abd1f7dcf92aae3d7d40c830d6cea976997179a051fcd54c962b798dea1e2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f8998f4e8b877fac0c9286fb549e6dc3cd3e2e9e88f9a9b224f5870d65bc9656 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8998f4e8b877fac0c9286fb549e6dc3cd3e2e9e88f9a9b224f5870d65bc9656->enter($__internal_f8998f4e8b877fac0c9286fb549e6dc3cd3e2e9e88f9a9b224f5870d65bc9656_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f8998f4e8b877fac0c9286fb549e6dc3cd3e2e9e88f9a9b224f5870d65bc9656->leave($__internal_f8998f4e8b877fac0c9286fb549e6dc3cd3e2e9e88f9a9b224f5870d65bc9656_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/PilotParc/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
