<?php

/* PilotParcLoginBundle:Default:test.html.twig */
class __TwigTemplate_255af395ae80ea82a3c09236000ba1e86a52fb20c07261ad3d49f2c81e00ba5e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_839219ca842cf264978f56e0d43fbc42f968597585e3cd0127797466cdd32017 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_839219ca842cf264978f56e0d43fbc42f968597585e3cd0127797466cdd32017->enter($__internal_839219ca842cf264978f56e0d43fbc42f968597585e3cd0127797466cdd32017_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PilotParcLoginBundle:Default:test.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_839219ca842cf264978f56e0d43fbc42f968597585e3cd0127797466cdd32017->leave($__internal_839219ca842cf264978f56e0d43fbc42f968597585e3cd0127797466cdd32017_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_0b16e383a0c1c58889835d893d2eb68f8eb0f1ef05d600c624e8eeb3417145bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b16e383a0c1c58889835d893d2eb68f8eb0f1ef05d600c624e8eeb3417145bb->enter($__internal_0b16e383a0c1c58889835d893d2eb68f8eb0f1ef05d600c624e8eeb3417145bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " 

\t<table border=\"4\" width=\"25%\">
\t<caption>tbplacesmarche</caption>
\t<tr>
\t\t<th>tb_idTbmarche</th><th>tb_idTbMarchand</th><th>typologiePlace</th>
\t</tr>
\t";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liste"]) ? $context["liste"] : $this->getContext($context, "liste")));
        foreach ($context['_seq'] as $context["_key"] => $context["tbplacesmarche"]) {
            // line 9
            echo "\t\t<tr>
\t\t\t<td>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["tbplacesmarche"], "tb_idTbmarche", array()), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["tbplacesmarche"], "tb_idTbMarchand", array()), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["tbplacesmarche"], "typologiePlace", array()), "html", null, true);
            echo "</td>
\t\t</tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tbplacesmarche'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_0b16e383a0c1c58889835d893d2eb68f8eb0f1ef05d600c624e8eeb3417145bb->leave($__internal_0b16e383a0c1c58889835d893d2eb68f8eb0f1ef05d600c624e8eeb3417145bb_prof);

    }

    public function getTemplateName()
    {
        return "PilotParcLoginBundle:Default:test.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  58 => 12,  54 => 11,  50 => 10,  47 => 9,  43 => 8,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block body %} 

\t<table border=\"4\" width=\"25%\">
\t<caption>tbplacesmarche</caption>
\t<tr>
\t\t<th>tb_idTbmarche</th><th>tb_idTbMarchand</th><th>typologiePlace</th>
\t</tr>
\t{% for tbplacesmarche in liste %}
\t\t<tr>
\t\t\t<td>{{ tbplacesmarche.tb_idTbmarche }}</td>
\t\t\t<td>{{ tbplacesmarche.tb_idTbMarchand }}</td>
\t\t\t<td>{{ tbplacesmarche.typologiePlace }}</td>
\t\t</tr>
\t{% endfor %}
{% endblock %}
", "PilotParcLoginBundle:Default:test.html.twig", "/var/www/html/PilotParc/src/PilotParc/LoginBundle/Resources/views/Default/test.html.twig");
    }
}
