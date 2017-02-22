<?php

/* PilotParcLoginBundle:Default:login.html.twig */
class __TwigTemplate_9a2f08e59c98d17406874c5fb3067103bd1413448495457902e99ce001c6f113 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
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
    }

    // line 60
    public function block_container($context, array $blocks = array())
    {
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
            echo twig_escape_filter($this->env, (isset($context["email"]) ? $context["email"] : null), "html", null, true);
            echo "</strong>
    </div>
    ";
        }
        // line 80
        echo "    ";
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
        return array (  128 => 80,  122 => 77,  119 => 76,  117 => 75,  111 => 72,  99 => 63,  95 => 61,  92 => 60,  32 => 3,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "PilotParcLoginBundle:Default:login.html.twig", "/var/www/html/PilotParc/src/PilotParc/LoginBundle/Resources/views/Default/login.html.twig");
    }
}
