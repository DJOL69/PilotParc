<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_0e26a3acbb72d80d27d487463eb0318e49472e88c46857572cd24c1391cce77f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1a432148f0ef5d701a52ddac10e6ced2bbe6f149499e1f034db953bd3bf06829 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a432148f0ef5d701a52ddac10e6ced2bbe6f149499e1f034db953bd3bf06829->enter($__internal_1a432148f0ef5d701a52ddac10e6ced2bbe6f149499e1f034db953bd3bf06829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_1a432148f0ef5d701a52ddac10e6ced2bbe6f149499e1f034db953bd3bf06829->leave($__internal_1a432148f0ef5d701a52ddac10e6ced2bbe6f149499e1f034db953bd3bf06829_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "/var/www/html/PilotParc/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
