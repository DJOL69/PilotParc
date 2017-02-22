<?php

/* PilotParcLoginBundle:Default:login.html.twig */
class __TwigTemplate_63334183d90f31c8c9accd0ad92cea2e327cfc94e0b74ccd9610359970a28f7f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PilotParcLoginBundle:Default:index.html.twig", "PilotParcLoginBundle:Default:login.html.twig", 1);
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
        $__internal_6ea090094f7f87c8c877730767dbe83b3e92612ee577c8757139be244627df71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ea090094f7f87c8c877730767dbe83b3e92612ee577c8757139be244627df71->enter($__internal_6ea090094f7f87c8c877730767dbe83b3e92612ee577c8757139be244627df71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PilotParcLoginBundle:Default:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ea090094f7f87c8c877730767dbe83b3e92612ee577c8757139be244627df71->leave($__internal_6ea090094f7f87c8c877730767dbe83b3e92612ee577c8757139be244627df71_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8d06bea1202d6816810da4804a924e5642bf57bc0d891c7f82f04a9cdfee5060 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d06bea1202d6816810da4804a924e5642bf57bc0d891c7f82f04a9cdfee5060->enter($__internal_8d06bea1202d6816810da4804a924e5642bf57bc0d891c7f82f04a9cdfee5060_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "
<style type=\"text/css\">
        body {
            padding-top: 40px;
            padding-bottom: 40px;
            background-image: url(\"http://www.parisinfo.com/var/otcp/sites/images/node_43/node_51/node_232/march%C3%A9-%7C-630x405-%7C-%C2%A9-otcp-am%C3%A9lie-dupont-%7C-169-11/23331-1-fre-FR/March%C3%A9-%7C-630x405-%7C-%C2%A9-OTCP-Am%C3%A9lie-Dupont-%7C-169-11.jpg\");
        }

        .form-signin {
            max-width: 500px;
            padding: 19px 29px 29px;
            margin: 0 auto 20px;
            background-color: #fff;
            border: 1px solid #e5e5e5;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
            -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
            -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
            box-shadow: 0 1px 2px rgba(0,0,0,.05);
        }

        .form-signin .form-signin-heading,
        .form-signin .checkbox {
            margin-bottom: 50px;
        }

        .marge{
            margin-bottom: 15px;
        }

        .marge-s{
           margin-bottom: 10px;
        }
        

        .form-signin-heading{
            margin-bottom: 50px;
            text-align: center;
        }

        .form-signin-heading-2{
            margin-bottom: 25px;
            text-align: center;
            color:blue;
        }

        .form-signin input[type=\"text\"],
        .form-signin input[type=\"password\"] {
            font-size: 16px;
            height: auto;
            margin-bottom: 15px;
            padding: 7px 9px;
        }

        .flash-notice{
            background-color: blue;
            color: white;
            margin-bottom: 10px;
        }

    </style>
";
        
        $__internal_8d06bea1202d6816810da4804a924e5642bf57bc0d891c7f82f04a9cdfee5060->leave($__internal_8d06bea1202d6816810da4804a924e5642bf57bc0d891c7f82f04a9cdfee5060_prof);

    }

    // line 66
    public function block_container($context, array $blocks = array())
    {
        $__internal_2c9bc5eb38168a122697ec9eb84f6f9bcb252b1328555e0a37c859542aafa924 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c9bc5eb38168a122697ec9eb84f6f9bcb252b1328555e0a37c859542aafa924->enter($__internal_2c9bc5eb38168a122697ec9eb84f6f9bcb252b1328555e0a37c859542aafa924_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 67
        echo "    <div class=\"container\">

        <form class=\"form-signin\" method =\"POST\" action=\"";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pilot_parc_login_homepage");
        echo "\" data-validate=\"parsley\">
            <h2 class=\"form-signin-heading-2\">Bienvenue sur PilotParc</h2>
            <h5 class=\"form-signin-heading\">Solution de gestion de mise à disposition du domaine public</h5>
            <input type=\"text\" id=\"email\" name=\"email\" class=\"input-block-level\" placeholder=\"Email\" data-trigger=\"change\" data-required=\"true\" data-type=\"email\">
            <div class=\"marge\"></div>
            <input type=\"password\" id=\"motdepasse\" name=\"motdepasse\" class=\"input-block-level\" placeholder=\"Mot de passe\" data-trigger=\"change\" data-required=\"true\">
            <div class=\"marge\"></div>
            <button class=\"btn btn-large btn-primary\" type=\"submit\">Se connecter</button>
            <div class=\"marge-s\"></div>
            <a href=\"";
        // line 78
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pilot_parc_login_signup");
        echo "\" >S'inscrire</a>
        </form>
    </div> 
    ";
        // line 81
        if (array_key_exists("prenom", $context)) {
            // line 82
            echo "    <div class=\"alert-info fade in\">
        <strong>";
            // line 83
            echo twig_escape_filter($this->env, (isset($context["prenom"]) ? $context["prenom"] : $this->getContext($context, "prenom")), "html", null, true);
            echo "</strong>
    </div>
    ";
        }
        // line 86
        echo "    ";
        
        $__internal_2c9bc5eb38168a122697ec9eb84f6f9bcb252b1328555e0a37c859542aafa924->leave($__internal_2c9bc5eb38168a122697ec9eb84f6f9bcb252b1328555e0a37c859542aafa924_prof);

    }

    public function getTemplateName()
    {
        return "PilotParcLoginBundle:Default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 86,  143 => 83,  140 => 82,  138 => 81,  132 => 78,  120 => 69,  116 => 67,  110 => 66,  41 => 3,  35 => 2,  11 => 1,);
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
        body {
            padding-top: 40px;
            padding-bottom: 40px;
            background-image: url(\"http://www.parisinfo.com/var/otcp/sites/images/node_43/node_51/node_232/march%C3%A9-%7C-630x405-%7C-%C2%A9-otcp-am%C3%A9lie-dupont-%7C-169-11/23331-1-fre-FR/March%C3%A9-%7C-630x405-%7C-%C2%A9-OTCP-Am%C3%A9lie-Dupont-%7C-169-11.jpg\");
        }

        .form-signin {
            max-width: 500px;
            padding: 19px 29px 29px;
            margin: 0 auto 20px;
            background-color: #fff;
            border: 1px solid #e5e5e5;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
            -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
            -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
            box-shadow: 0 1px 2px rgba(0,0,0,.05);
        }

        .form-signin .form-signin-heading,
        .form-signin .checkbox {
            margin-bottom: 50px;
        }

        .marge{
            margin-bottom: 15px;
        }

        .marge-s{
           margin-bottom: 10px;
        }
        

        .form-signin-heading{
            margin-bottom: 50px;
            text-align: center;
        }

        .form-signin-heading-2{
            margin-bottom: 25px;
            text-align: center;
            color:blue;
        }

        .form-signin input[type=\"text\"],
        .form-signin input[type=\"password\"] {
            font-size: 16px;
            height: auto;
            margin-bottom: 15px;
            padding: 7px 9px;
        }

        .flash-notice{
            background-color: blue;
            color: white;
            margin-bottom: 10px;
        }

    </style>
{%endblock%}
  {%block container %}
    <div class=\"container\">

        <form class=\"form-signin\" method =\"POST\" action=\"{{path('pilot_parc_login_homepage')}}\" data-validate=\"parsley\">
            <h2 class=\"form-signin-heading-2\">Bienvenue sur PilotParc</h2>
            <h5 class=\"form-signin-heading\">Solution de gestion de mise à disposition du domaine public</h5>
            <input type=\"text\" id=\"email\" name=\"email\" class=\"input-block-level\" placeholder=\"Email\" data-trigger=\"change\" data-required=\"true\" data-type=\"email\">
            <div class=\"marge\"></div>
            <input type=\"password\" id=\"motdepasse\" name=\"motdepasse\" class=\"input-block-level\" placeholder=\"Mot de passe\" data-trigger=\"change\" data-required=\"true\">
            <div class=\"marge\"></div>
            <button class=\"btn btn-large btn-primary\" type=\"submit\">Se connecter</button>
            <div class=\"marge-s\"></div>
            <a href=\"{{path('pilot_parc_login_signup')}}\" >S'inscrire</a>
        </form>
    </div> 
    {% if prenom is defined%}
    <div class=\"alert-info fade in\">
        <strong>{{prenom}}</strong>
    </div>
    {%endif%}
    {%endblock%}", "PilotParcLoginBundle:Default:login.html.twig", "/var/www/html/PilotParc/src/PilotParc/LoginBundle/Resources/views/Default/login.html.twig");
    }
}
