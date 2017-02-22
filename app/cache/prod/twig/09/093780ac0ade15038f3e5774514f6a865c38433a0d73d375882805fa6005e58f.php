<?php

/* PilotParcLoginBundle:Default:welcome.html.twig */
class __TwigTemplate_69843e39558f552e7d7b6ad440e3237f86a2264d7bad2b914569b7c563fe0e04 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 3
        echo "
";
    }

    // line 5
    public function block_container($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"container\">
    <h2>Hello ";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["email"]) ? $context["email"] : null), "html", null, true);
        echo "</h2>
</div> 
<a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pilot_parc_login_logout");
        echo "\" >Se déconnecter</a>
    ";
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
        return array (  48 => 9,  43 => 7,  40 => 6,  37 => 5,  32 => 3,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "PilotParcLoginBundle:Default:welcome.html.twig", "/var/www/html/PilotParc/src/PilotParc/LoginBundle/Resources/views/Default/welcome.html.twig");
    }
}
