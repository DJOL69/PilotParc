<?php

/* PilotParcLoginBundle:Default:login.html.twig */
class __TwigTemplate_aa2f775a309f44d58f4f6dc257bbbe97886557c5943bad8a0923983e35180b1c extends Twig_Template
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
        $__internal_bf154a6a1e8b0deb3d6f2c1b4798fb2d04fc7e5769f8ee31a15a49dcd2e302ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf154a6a1e8b0deb3d6f2c1b4798fb2d04fc7e5769f8ee31a15a49dcd2e302ae->enter($__internal_bf154a6a1e8b0deb3d6f2c1b4798fb2d04fc7e5769f8ee31a15a49dcd2e302ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PilotParcLoginBundle:Default:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf154a6a1e8b0deb3d6f2c1b4798fb2d04fc7e5769f8ee31a15a49dcd2e302ae->leave($__internal_bf154a6a1e8b0deb3d6f2c1b4798fb2d04fc7e5769f8ee31a15a49dcd2e302ae_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_30d10b863e1e91ad9a97fabff773719349a0d4fbb17af6bd9d5ed5d40aaa926c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30d10b863e1e91ad9a97fabff773719349a0d4fbb17af6bd9d5ed5d40aaa926c->enter($__internal_30d10b863e1e91ad9a97fabff773719349a0d4fbb17af6bd9d5ed5d40aaa926c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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

    </style>
";
        
        $__internal_30d10b863e1e91ad9a97fabff773719349a0d4fbb17af6bd9d5ed5d40aaa926c->leave($__internal_30d10b863e1e91ad9a97fabff773719349a0d4fbb17af6bd9d5ed5d40aaa926c_prof);

    }

    // line 60
    public function block_container($context, array $blocks = array())
    {
        $__internal_b454be217c1f21bdf424040d1343c050c609677477206e40b4495314800ad263 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b454be217c1f21bdf424040d1343c050c609677477206e40b4495314800ad263->enter($__internal_b454be217c1f21bdf424040d1343c050c609677477206e40b4495314800ad263_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 61
        echo "    <div class=\"container\">

        <form class=\"form-signin\" method =\"POST\" action=\"";
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pilot_parc_login_homepage");
        echo "\" data-validate=\"parsley\">
            <h2 class=\"form-signin-heading-2\">Bienvenue sur PilotParc</h2>
            <h5 class=\"form-signin-heading\">Solution de gestion de mise à disposition du domaine public</h5>
            <input type=\"text\" id=\"email\" class=\"input-block-level\" name=\"email\" placeholder=\"Email\" data-trigger=\"change\" data-required=\"true\">
            <div class=\"marge\"></div>
            <input type=\"password\" class=\"input-block-level\" name=\"motdepasse\" placeholder=\"Mot de passe\" data-trigger=\"change\" data-required=\"true\">
            <div class=\"marge\"></div>
            <button class=\"btn btn-large btn-primary\" type=\"submit\">Se connecter</button>
            <div class=\"marge-s\"></div>
            <a href=\"";
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pilot_parc_login_signup");
        echo "\" >S'inscrire</a>
        </form>
    </div> 
    ";
        // line 75
        if (array_key_exists("email", $context)) {
            // line 76
            echo "    <div class=\"alert-info fade in\">
        <strong>";
            // line 77
            echo twig_escape_filter($this->env, (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email")), "html", null, true);
            echo "</strong>
    </div>
    ";
        }
        // line 80
        echo "    ";
        
        $__internal_b454be217c1f21bdf424040d1343c050c609677477206e40b4495314800ad263->leave($__internal_b454be217c1f21bdf424040d1343c050c609677477206e40b4495314800ad263_prof);

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
        return array (  143 => 80,  137 => 77,  134 => 76,  132 => 75,  126 => 72,  114 => 63,  110 => 61,  104 => 60,  41 => 3,  35 => 2,  11 => 1,);
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

    </style>
{%endblock%}
  {%block container %}
    <div class=\"container\">

        <form class=\"form-signin\" method =\"POST\" action=\"{{path('pilot_parc_login_homepage')}}\" data-validate=\"parsley\">
            <h2 class=\"form-signin-heading-2\">Bienvenue sur PilotParc</h2>
            <h5 class=\"form-signin-heading\">Solution de gestion de mise à disposition du domaine public</h5>
            <input type=\"text\" id=\"email\" class=\"input-block-level\" name=\"email\" placeholder=\"Email\" data-trigger=\"change\" data-required=\"true\">
            <div class=\"marge\"></div>
            <input type=\"password\" class=\"input-block-level\" name=\"motdepasse\" placeholder=\"Mot de passe\" data-trigger=\"change\" data-required=\"true\">
            <div class=\"marge\"></div>
            <button class=\"btn btn-large btn-primary\" type=\"submit\">Se connecter</button>
            <div class=\"marge-s\"></div>
            <a href=\"{{path('pilot_parc_login_signup')}}\" >S'inscrire</a>
        </form>
    </div> 
    {% if email is defined%}
    <div class=\"alert-info fade in\">
        <strong>{{email}}</strong>
    </div>
    {%endif%}
    {%endblock%}", "PilotParcLoginBundle:Default:login.html.twig", "/var/www/html/PilotParc/src/PilotParc/LoginBundle/Resources/views/Default/login.html.twig");
    }
}
