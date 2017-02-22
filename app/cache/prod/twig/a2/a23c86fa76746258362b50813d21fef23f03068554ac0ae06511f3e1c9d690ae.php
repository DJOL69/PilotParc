<?php

/* PilotParcLoginBundle:Default:signup.html.twig */
class __TwigTemplate_0ef55f9a56ada30a0bcc36ec81e43959294d822e73c2bbe5291043392d99f3e6 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 3
        echo "<style type=\"text/css\">

 .marge{
           margin-bottom: 10px;
        }


 </style>
";
    }

    // line 14
    public function block_container($context, array $blocks = array())
    {
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
        return array (  50 => 16,  47 => 15,  44 => 14,  32 => 3,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "PilotParcLoginBundle:Default:signup.html.twig", "/var/www/html/PilotParc/src/PilotParc/LoginBundle/Resources/views/Default/signup.html.twig");
    }
}
