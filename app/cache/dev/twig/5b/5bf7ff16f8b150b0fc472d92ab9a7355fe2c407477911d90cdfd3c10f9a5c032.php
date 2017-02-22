<?php

/* PilotParcLoginBundle:Default:index.html.twig */
class __TwigTemplate_835965336e5605978c6e71b5026780fa721bdd91dfac9a3fd65fdf5d6df8ad72 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'container' => array($this, 'block_container'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ab31dddce2987813a1c1780356e768dad45699aace213e6da713ebe2f5327991 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab31dddce2987813a1c1780356e768dad45699aace213e6da713ebe2f5327991->enter($__internal_ab31dddce2987813a1c1780356e768dad45699aace213e6da713ebe2f5327991_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PilotParcLoginBundle:Default:index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <meta charset=\"utf-8\">
        <title>Pilot Parc</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

        <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/login/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/login/css/bootstrap-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/login/css/parsley/parsley.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "
    </head>

        <body>

";
        // line 19
        $this->displayBlock('body', $context, $blocks);
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('container', $context, $blocks);
        // line 29
        echo "
            <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/login/js/jquery.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/login/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/login/js/parsley/parsley.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/login/js/parsley/parsley.extend.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/login/js/parsley/fr.js"), "html", null, true);
        echo "\"></script>

";
        // line 36
        $this->displayBlock('javascripts', $context, $blocks);
        // line 38
        echo "
        </body>
</html>
";
        
        $__internal_ab31dddce2987813a1c1780356e768dad45699aace213e6da713ebe2f5327991->leave($__internal_ab31dddce2987813a1c1780356e768dad45699aace213e6da713ebe2f5327991_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_dbd3c7ebc5b33d77ee1a4bcd138d0c885d500bf8caa6de60bcedd0732c1871f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbd3c7ebc5b33d77ee1a4bcd138d0c885d500bf8caa6de60bcedd0732c1871f8->enter($__internal_dbd3c7ebc5b33d77ee1a4bcd138d0c885d500bf8caa6de60bcedd0732c1871f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_dbd3c7ebc5b33d77ee1a4bcd138d0c885d500bf8caa6de60bcedd0732c1871f8->leave($__internal_dbd3c7ebc5b33d77ee1a4bcd138d0c885d500bf8caa6de60bcedd0732c1871f8_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_a8247263c2b2df3b07f4cd230bfa700d38fba4e865969353e82382bcb63741bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8247263c2b2df3b07f4cd230bfa700d38fba4e865969353e82382bcb63741bc->enter($__internal_a8247263c2b2df3b07f4cd230bfa700d38fba4e865969353e82382bcb63741bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 20
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 21
            echo "    <div class=\"flash-notice\">
        ";
            // line 22
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
    </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_a8247263c2b2df3b07f4cd230bfa700d38fba4e865969353e82382bcb63741bc->leave($__internal_a8247263c2b2df3b07f4cd230bfa700d38fba4e865969353e82382bcb63741bc_prof);

    }

    // line 27
    public function block_container($context, array $blocks = array())
    {
        $__internal_a97f70ff3babfe97c1a1cdaf64c035b42c17fabd2e6f3b111d875c223fdd7b50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a97f70ff3babfe97c1a1cdaf64c035b42c17fabd2e6f3b111d875c223fdd7b50->enter($__internal_a97f70ff3babfe97c1a1cdaf64c035b42c17fabd2e6f3b111d875c223fdd7b50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        
        $__internal_a97f70ff3babfe97c1a1cdaf64c035b42c17fabd2e6f3b111d875c223fdd7b50->leave($__internal_a97f70ff3babfe97c1a1cdaf64c035b42c17fabd2e6f3b111d875c223fdd7b50_prof);

    }

    // line 36
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6bf7c866078edc8aeeec5b5b4d5321b3db5a9661f56021493960d0bda5e0f73e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bf7c866078edc8aeeec5b5b4d5321b3db5a9661f56021493960d0bda5e0f73e->enter($__internal_6bf7c866078edc8aeeec5b5b4d5321b3db5a9661f56021493960d0bda5e0f73e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 37
        echo " ";
        
        $__internal_6bf7c866078edc8aeeec5b5b4d5321b3db5a9661f56021493960d0bda5e0f73e->leave($__internal_6bf7c866078edc8aeeec5b5b4d5321b3db5a9661f56021493960d0bda5e0f73e_prof);

    }

    public function getTemplateName()
    {
        return "PilotParcLoginBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 37,  150 => 36,  139 => 27,  125 => 22,  122 => 21,  117 => 20,  111 => 19,  100 => 12,  90 => 38,  88 => 36,  83 => 34,  79 => 33,  75 => 32,  71 => 31,  67 => 30,  64 => 29,  62 => 27,  59 => 26,  57 => 19,  50 => 14,  48 => 12,  43 => 10,  39 => 9,  35 => 8,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <meta charset=\"utf-8\">
        <title>Pilot Parc</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

        <link href=\"{{asset('bundles/login/css/bootstrap.css')}}\" rel=\"stylesheet\">
        <link href=\"{{asset('bundles/login/css/bootstrap-responsive.css')}}\" rel=\"stylesheet\">
        <link href=\"{{asset('bundles/login/css/parsley/parsley.css')}}\" rel=\"stylesheet\">

{%block stylesheets %}
{%endblock%}

    </head>

        <body>

{% block body %}
        {% for flash_message in app.session.flashBag.get('notice') %}
    <div class=\"flash-notice\">
        {{ flash_message }}
    </div>
        {% endfor %}
{% endblock %}

{%block container %}
{%endblock%}

            <script src=\"{{asset('bundles/login/js/jquery.js')}}\"></script>
            <script src=\"{{asset('bundles/login/js/bootstrap.js')}}\"></script>
            <script src=\"{{asset('bundles/login/js/parsley/parsley.min.js')}}\"></script>
            <script src=\"{{asset('bundles/login/js/parsley/parsley.extend.min.js')}}\"></script>
            <script src=\"{{asset('bundles/login/js/parsley/fr.js')}}\"></script>

{%block javascripts %}
 {%endblock%}

        </body>
</html>
", "PilotParcLoginBundle:Default:index.html.twig", "/var/www/html/PilotParc/src/PilotParc/LoginBundle/Resources/views/Default/index.html.twig");
    }
}
