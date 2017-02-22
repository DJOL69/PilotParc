<?php

/* PilotParcLoginBundle:Default:welcome.html.twig */
class __TwigTemplate_8dbf0f64ebe0daa806fbb18791a974ed15d110192a80d23120dbc3fd7f393bb2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PilotParcLoginBundle:Default:index.html.twig", "PilotParcLoginBundle:Default:welcome.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PilotParcLoginBundle:Default:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fb1a45697a70c73eae6faac8e8fb33bec7b0a9a375d34ed60d7ffa10cd3b016d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb1a45697a70c73eae6faac8e8fb33bec7b0a9a375d34ed60d7ffa10cd3b016d->enter($__internal_fb1a45697a70c73eae6faac8e8fb33bec7b0a9a375d34ed60d7ffa10cd3b016d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PilotParcLoginBundle:Default:welcome.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb1a45697a70c73eae6faac8e8fb33bec7b0a9a375d34ed60d7ffa10cd3b016d->leave($__internal_fb1a45697a70c73eae6faac8e8fb33bec7b0a9a375d34ed60d7ffa10cd3b016d_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4c6bffd5e0d513074da5ba480a39fbe7f0726c0dfb9c229abbad16fd625510a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c6bffd5e0d513074da5ba480a39fbe7f0726c0dfb9c229abbad16fd625510a0->enter($__internal_4c6bffd5e0d513074da5ba480a39fbe7f0726c0dfb9c229abbad16fd625510a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "
";
        
        $__internal_4c6bffd5e0d513074da5ba480a39fbe7f0726c0dfb9c229abbad16fd625510a0->leave($__internal_4c6bffd5e0d513074da5ba480a39fbe7f0726c0dfb9c229abbad16fd625510a0_prof);

    }

    // line 5
    public function block_container($context, array $blocks = array())
    {
        $__internal_6e9f76e95584018e8136faac0bdf2af780c0a5a27a548d3bd8e4bf03b2cbdba0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e9f76e95584018e8136faac0bdf2af780c0a5a27a548d3bd8e4bf03b2cbdba0->enter($__internal_6e9f76e95584018e8136faac0bdf2af780c0a5a27a548d3bd8e4bf03b2cbdba0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 6
        echo "<div class=\"container\">
    <h2>Hello ";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email")), "html", null, true);
        echo "</h2>
</div> 
<a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pilot_parc_login_logout");
        echo "\" >Se déconnecter</a>
    ";
        
        $__internal_6e9f76e95584018e8136faac0bdf2af780c0a5a27a548d3bd8e4bf03b2cbdba0->leave($__internal_6e9f76e95584018e8136faac0bdf2af780c0a5a27a548d3bd8e4bf03b2cbdba0_prof);

    }

    public function getTemplateName()
    {
        return "PilotParcLoginBundle:Default:welcome.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 9,  58 => 7,  55 => 6,  49 => 5,  41 => 3,  35 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{%extends \"PilotParcLoginBundle:Default:index.html.twig\"%}
{%block stylesheets %}

{%endblock%}
   {%block container %}
<div class=\"container\">
    <h2>Hello {{email}}</h2>
</div> 
<a href=\"{{path('pilot_parc_login_logout')}}\" >Se déconnecter</a>
    {%endblock%}", "PilotParcLoginBundle:Default:welcome.html.twig", "/var/www/html/PilotParc/src/PilotParc/LoginBundle/Resources/views/Default/welcome.html.twig");
    }
}
