<?php

/* PilotParcLoginBundle:Default:signup.html.twig */
class __TwigTemplate_784ee65fd35a9cdd3feedee9ea9ff0d4dbb6cd3d8f9bca819344fed88c3747c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PilotParcLoginBundle:Default:index.html.twig", "PilotParcLoginBundle:Default:signup.html.twig", 1);
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
        $__internal_4b9892f413c056be31b4abd97e112ee65d6407a5b4c3f7511748f2ade85418a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b9892f413c056be31b4abd97e112ee65d6407a5b4c3f7511748f2ade85418a9->enter($__internal_4b9892f413c056be31b4abd97e112ee65d6407a5b4c3f7511748f2ade85418a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PilotParcLoginBundle:Default:signup.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b9892f413c056be31b4abd97e112ee65d6407a5b4c3f7511748f2ade85418a9->leave($__internal_4b9892f413c056be31b4abd97e112ee65d6407a5b4c3f7511748f2ade85418a9_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9762eb1b271780d9bc97943221a8ee595bae98512d8558a9ccfd47be6a552ee4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9762eb1b271780d9bc97943221a8ee595bae98512d8558a9ccfd47be6a552ee4->enter($__internal_9762eb1b271780d9bc97943221a8ee595bae98512d8558a9ccfd47be6a552ee4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "<style type=\"text/css\">

 .marge{
           margin-bottom: 10px;
        }


 </style>
";
        
        $__internal_9762eb1b271780d9bc97943221a8ee595bae98512d8558a9ccfd47be6a552ee4->leave($__internal_9762eb1b271780d9bc97943221a8ee595bae98512d8558a9ccfd47be6a552ee4_prof);

    }

    // line 14
    public function block_container($context, array $blocks = array())
    {
        $__internal_7ee5c3e9b41917a9889761b49029c8c4f8c314b4db01e6e3634a2dec58795917 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ee5c3e9b41917a9889761b49029c8c4f8c314b4db01e6e3634a2dec58795917->enter($__internal_7ee5c3e9b41917a9889761b49029c8c4f8c314b4db01e6e3634a2dec58795917_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 15
        echo "<div class=\"container\" >
    <form id=\"form\" class=\"well\" method=\"POST\" action=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pilot_parc_login_signup");
        echo "\" data-validate=\"parsley\">
        <h2>S'inscrire</h2>
        <label>Adresse email</label>
        <input type=\"text\" id=\"email\" name=\"email\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\" data-type=\"email\">
        <label>Confirmation adresse email </label>
        <input type=\"text\" id=\"emailRe\" name=\"emailRe\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\" data-type=\"email\" data-equalto=\"#email\">
        <label>Prénom</label>
        <input type=\"text\" name=\"prenom\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\">
        <label>Nom</label>
        <input type=\"text\" name=\"nom\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\">
        <label>Mot de passe</label>
        <input type=\"password\" name=\"motdepasse\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\">
        <div class=\"marge\"></div>
        <div>
            <button class=\"btn btn-primary\" type=\"submit\" >Créer mon compte</button>
        </div>

    </form>
</div>
 ";
        
        $__internal_7ee5c3e9b41917a9889761b49029c8c4f8c314b4db01e6e3634a2dec58795917->leave($__internal_7ee5c3e9b41917a9889761b49029c8c4f8c314b4db01e6e3634a2dec58795917_prof);

    }

    public function getTemplateName()
    {
        return "PilotParcLoginBundle:Default:signup.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 16,  62 => 15,  56 => 14,  41 => 3,  35 => 2,  11 => 1,);
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
<style type=\"text/css\">

 .marge{
           margin-bottom: 10px;
        }


 </style>
{%endblock%}


{%block container %}
<div class=\"container\" >
    <form id=\"form\" class=\"well\" method=\"POST\" action=\"{{path('pilot_parc_login_signup')}}\" data-validate=\"parsley\">
        <h2>S'inscrire</h2>
        <label>Adresse email</label>
        <input type=\"text\" id=\"email\" name=\"email\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\" data-type=\"email\">
        <label>Confirmation adresse email </label>
        <input type=\"text\" id=\"emailRe\" name=\"emailRe\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\" data-type=\"email\" data-equalto=\"#email\">
        <label>Prénom</label>
        <input type=\"text\" name=\"prenom\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\">
        <label>Nom</label>
        <input type=\"text\" name=\"nom\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\">
        <label>Mot de passe</label>
        <input type=\"password\" name=\"motdepasse\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\">
        <div class=\"marge\"></div>
        <div>
            <button class=\"btn btn-primary\" type=\"submit\" >Créer mon compte</button>
        </div>

    </form>
</div>
 {%endblock%}", "PilotParcLoginBundle:Default:signup.html.twig", "/var/www/html/PilotParc/src/PilotParc/LoginBundle/Resources/views/Default/signup.html.twig");
    }
}
