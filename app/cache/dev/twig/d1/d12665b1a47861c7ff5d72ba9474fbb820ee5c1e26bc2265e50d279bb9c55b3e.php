<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_6d7c7fcf972b2ab757f7519b92ada0c81ad841c7daa1b5a27ffa2ecf2ba898de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_74092477823db2d9983d0f33ff98d50926f8dd89ad14730ef005081aafea846e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74092477823db2d9983d0f33ff98d50926f8dd89ad14730ef005081aafea846e->enter($__internal_74092477823db2d9983d0f33ff98d50926f8dd89ad14730ef005081aafea846e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_74092477823db2d9983d0f33ff98d50926f8dd89ad14730ef005081aafea846e->leave($__internal_74092477823db2d9983d0f33ff98d50926f8dd89ad14730ef005081aafea846e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ee77e881c4988e015b4ade2e52f009371aabd974cfdbe06337cb134de031b491 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee77e881c4988e015b4ade2e52f009371aabd974cfdbe06337cb134de031b491->enter($__internal_ee77e881c4988e015b4ade2e52f009371aabd974cfdbe06337cb134de031b491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_ee77e881c4988e015b4ade2e52f009371aabd974cfdbe06337cb134de031b491->leave($__internal_ee77e881c4988e015b4ade2e52f009371aabd974cfdbe06337cb134de031b491_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_12c6dc33ca519590c6c5ba1599e9479a4ff21eb315366954a9925f482ee92027 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12c6dc33ca519590c6c5ba1599e9479a4ff21eb315366954a9925f482ee92027->enter($__internal_12c6dc33ca519590c6c5ba1599e9479a4ff21eb315366954a9925f482ee92027_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_12c6dc33ca519590c6c5ba1599e9479a4ff21eb315366954a9925f482ee92027->leave($__internal_12c6dc33ca519590c6c5ba1599e9479a4ff21eb315366954a9925f482ee92027_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/var/www/html/PilotParc/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
