<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_4fccd35a1625b2a1afb1c370a00155311017f34d52cf668c2c57d07fd28ac8f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6380ef5f9f15f5444d62d210147b4c4fb2a5ecda7b331ce3bd7451756fafba2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6380ef5f9f15f5444d62d210147b4c4fb2a5ecda7b331ce3bd7451756fafba2e->enter($__internal_6380ef5f9f15f5444d62d210147b4c4fb2a5ecda7b331ce3bd7451756fafba2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_6380ef5f9f15f5444d62d210147b4c4fb2a5ecda7b331ce3bd7451756fafba2e->leave($__internal_6380ef5f9f15f5444d62d210147b4c4fb2a5ecda7b331ce3bd7451756fafba2e_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_53e76c011ffa8e2850f6086e78258db7bfd796f5a639bc927dd14cb29f7903a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53e76c011ffa8e2850f6086e78258db7bfd796f5a639bc927dd14cb29f7903a8->enter($__internal_53e76c011ffa8e2850f6086e78258db7bfd796f5a639bc927dd14cb29f7903a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_53e76c011ffa8e2850f6086e78258db7bfd796f5a639bc927dd14cb29f7903a8->leave($__internal_53e76c011ffa8e2850f6086e78258db7bfd796f5a639bc927dd14cb29f7903a8_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/var/www/html/PilotParc/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
