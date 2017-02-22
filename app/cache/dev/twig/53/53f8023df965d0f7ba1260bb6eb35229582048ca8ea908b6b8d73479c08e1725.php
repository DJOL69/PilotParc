<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_afac42027dc617f4362ef534bdfa28777f57173c96ffafb6d61ddeb18825b748 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_256d7f751f362a47ecb06d0c35e9bd259651225633b80c4d99ddec11d8ea4568 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_256d7f751f362a47ecb06d0c35e9bd259651225633b80c4d99ddec11d8ea4568->enter($__internal_256d7f751f362a47ecb06d0c35e9bd259651225633b80c4d99ddec11d8ea4568_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_256d7f751f362a47ecb06d0c35e9bd259651225633b80c4d99ddec11d8ea4568->leave($__internal_256d7f751f362a47ecb06d0c35e9bd259651225633b80c4d99ddec11d8ea4568_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_007a00d79c915b4028d96586117c79bf29b2e7195c56b85c97e80e3f552bbd88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_007a00d79c915b4028d96586117c79bf29b2e7195c56b85c97e80e3f552bbd88->enter($__internal_007a00d79c915b4028d96586117c79bf29b2e7195c56b85c97e80e3f552bbd88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_007a00d79c915b4028d96586117c79bf29b2e7195c56b85c97e80e3f552bbd88->leave($__internal_007a00d79c915b4028d96586117c79bf29b2e7195c56b85c97e80e3f552bbd88_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_25fe46fe58f76c75d5944d55adbbaffda8c28f3258930e327f4cf5ee768ca2b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25fe46fe58f76c75d5944d55adbbaffda8c28f3258930e327f4cf5ee768ca2b2->enter($__internal_25fe46fe58f76c75d5944d55adbbaffda8c28f3258930e327f4cf5ee768ca2b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_25fe46fe58f76c75d5944d55adbbaffda8c28f3258930e327f4cf5ee768ca2b2->leave($__internal_25fe46fe58f76c75d5944d55adbbaffda8c28f3258930e327f4cf5ee768ca2b2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_72e71a251d033586e9e1fe9e29df13d70093d80ad7177c6b4ab51e2e882dca0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72e71a251d033586e9e1fe9e29df13d70093d80ad7177c6b4ab51e2e882dca0d->enter($__internal_72e71a251d033586e9e1fe9e29df13d70093d80ad7177c6b4ab51e2e882dca0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_72e71a251d033586e9e1fe9e29df13d70093d80ad7177c6b4ab51e2e882dca0d->leave($__internal_72e71a251d033586e9e1fe9e29df13d70093d80ad7177c6b4ab51e2e882dca0d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "/var/www/html/PilotParc/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
