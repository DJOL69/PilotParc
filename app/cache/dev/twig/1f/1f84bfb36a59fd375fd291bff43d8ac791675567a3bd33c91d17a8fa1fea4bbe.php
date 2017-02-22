<?php

/* PilotParcLoginBundle:Default:signup.html.twig */
class __TwigTemplate_ca2eff4965f7c76e9b012914b01841ac1e2243f4ed1b6480fc79e8524c2affdb extends Twig_Template
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
        $__internal_ba2fef343319fcb071e8146f040ead717a69a4628f617abad27241e063b2dc06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba2fef343319fcb071e8146f040ead717a69a4628f617abad27241e063b2dc06->enter($__internal_ba2fef343319fcb071e8146f040ead717a69a4628f617abad27241e063b2dc06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PilotParcLoginBundle:Default:signup.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba2fef343319fcb071e8146f040ead717a69a4628f617abad27241e063b2dc06->leave($__internal_ba2fef343319fcb071e8146f040ead717a69a4628f617abad27241e063b2dc06_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d34f32924783c79f600bc2d02de578548aed3f7dc90952c64943a5fea5012e5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d34f32924783c79f600bc2d02de578548aed3f7dc90952c64943a5fea5012e5d->enter($__internal_d34f32924783c79f600bc2d02de578548aed3f7dc90952c64943a5fea5012e5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "<style type=\"text/css\">

 .marge{
           margin-bottom: 10px;
        }


 </style>
";
        
        $__internal_d34f32924783c79f600bc2d02de578548aed3f7dc90952c64943a5fea5012e5d->leave($__internal_d34f32924783c79f600bc2d02de578548aed3f7dc90952c64943a5fea5012e5d_prof);

    }

    // line 14
    public function block_container($context, array $blocks = array())
    {
        $__internal_f0f928b18227f51d19d1ad544abe2fcf5754f276cd3736d47b23536474cfe2fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0f928b18227f51d19d1ad544abe2fcf5754f276cd3736d47b23536474cfe2fb->enter($__internal_f0f928b18227f51d19d1ad544abe2fcf5754f276cd3736d47b23536474cfe2fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 15
        echo "<div class=\"container\" >
    <form id=\"form\" class=\"well\" method=\"POST\" action=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pilot_parc_login_signup");
        echo "\" data-validate=\"parsley\">
        <h2>S'inscrire</h2>
        <label>Adresse email</label>
        <input type=\"text\" id=\"email\" name=\"email\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\" data-type=\"email\">
        <div class=\"marge\"></div>
        <label>Confirmation adresse email </label>
        <input type=\"text\" id=\"emailRe\" name=\"emailRe\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\" data-type=\"email\" data-equalto=\"#email\">
        <div class=\"marge\"></div>
        <label>Prénom</label>
        <input type=\"text\" name=\"prenom\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\">
        <div class=\"marge\"></div>
        <label>Nom</label>
        <input type=\"text\" name=\"nom\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\">
        <div class=\"marge\"></div>
        <label>Mot de passe</label>
        <input type=\"password\" name=\"motdepasse\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\">
        <div class=\"marge\"></div>
        <div>
            <button class=\"btn btn-primary\" type=\"submit\" >Créer mon compte</button>
        </div>

    </form>
</div>
 ";
        
        $__internal_f0f928b18227f51d19d1ad544abe2fcf5754f276cd3736d47b23536474cfe2fb->leave($__internal_f0f928b18227f51d19d1ad544abe2fcf5754f276cd3736d47b23536474cfe2fb_prof);

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
        <div class=\"marge\"></div>
        <label>Confirmation adresse email </label>
        <input type=\"text\" id=\"emailRe\" name=\"emailRe\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\" data-type=\"email\" data-equalto=\"#email\">
        <div class=\"marge\"></div>
        <label>Prénom</label>
        <input type=\"text\" name=\"prenom\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\">
        <div class=\"marge\"></div>
        <label>Nom</label>
        <input type=\"text\" name=\"nom\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\">
        <div class=\"marge\"></div>
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
