<?php

/* PilotParcLoginBundle:Default:testdbal.html.twig */
class __TwigTemplate_c3b1b2ac56c49e8d417c83f9d30eb79d1084326a5c41c87fb7c6c71fe61bc125 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "PilotParcLoginBundle:Default:testdbal.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8d41f87edf1e1b321793ac763daec8a9e2d65a4c3844bb243d8d7bab45ea86a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d41f87edf1e1b321793ac763daec8a9e2d65a4c3844bb243d8d7bab45ea86a4->enter($__internal_8d41f87edf1e1b321793ac763daec8a9e2d65a4c3844bb243d8d7bab45ea86a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PilotParcLoginBundle:Default:testdbal.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d41f87edf1e1b321793ac763daec8a9e2d65a4c3844bb243d8d7bab45ea86a4->leave($__internal_8d41f87edf1e1b321793ac763daec8a9e2d65a4c3844bb243d8d7bab45ea86a4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_599571edf53ccbecce8afca453e8e14e4ebc1a343d6900f31a58832fa22c6b6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_599571edf53ccbecce8afca453e8e14e4ebc1a343d6900f31a58832fa22c6b6a->enter($__internal_599571edf53ccbecce8afca453e8e14e4ebc1a343d6900f31a58832fa22c6b6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
\t<table border=\"4\" width=\"25%\">
\t<caption>tbplacesmarche</caption>
\t<tr>
\t\t<th>tb_idTbmarche</th><th>tb_idTbMarchand</th><th>typologiePlace</th>
\t</tr>
\t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liste"]) ? $context["liste"] : $this->getContext($context, "liste")));
        foreach ($context['_seq'] as $context["_key"] => $context["tbutilisateurs"]) {
            // line 11
            echo "\t\t<tr>
\t\t\t<td>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["tbutilisateurs"], "nom", array()), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["tbutilisateurs"], "prenom", array()), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["tbutilisateurs"], "email", array()), "html", null, true);
            echo "</td>
\t\t</tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tbutilisateurs'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_599571edf53ccbecce8afca453e8e14e4ebc1a343d6900f31a58832fa22c6b6a->leave($__internal_599571edf53ccbecce8afca453e8e14e4ebc1a343d6900f31a58832fa22c6b6a_prof);

    }

    public function getTemplateName()
    {
        return "PilotParcLoginBundle:Default:testdbal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 14,  59 => 13,  55 => 12,  52 => 11,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}

\t<table border=\"4\" width=\"25%\">
\t<caption>tbplacesmarche</caption>
\t<tr>
\t\t<th>tb_idTbmarche</th><th>tb_idTbMarchand</th><th>typologiePlace</th>
\t</tr>
\t{% for tbutilisateurs in liste %}
\t\t<tr>
\t\t\t<td>{{ tbutilisateurs.nom }}</td>
\t\t\t<td>{{ tbutilisateurs.prenom }}</td>
\t\t\t<td>{{ tbutilisateurs.email }}</td>
\t\t</tr>
\t{% endfor %}
{% endblock %}
", "PilotParcLoginBundle:Default:testdbal.html.twig", "/var/www/html/PilotParc/src/PilotParc/LoginBundle/Resources/views/Default/testdbal.html.twig");
    }
}
