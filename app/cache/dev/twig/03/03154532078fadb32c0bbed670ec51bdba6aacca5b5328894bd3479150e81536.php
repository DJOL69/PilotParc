<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_baed9dc7273f051f8883ca558d4e2f23d61a1cd8b979b8ab34467bc21fe61a74 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_80e0c3f65cb9e1702a4689d47412544e8ab7afd4296ad6062fa99da37a6eab7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80e0c3f65cb9e1702a4689d47412544e8ab7afd4296ad6062fa99da37a6eab7a->enter($__internal_80e0c3f65cb9e1702a4689d47412544e8ab7afd4296ad6062fa99da37a6eab7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_80e0c3f65cb9e1702a4689d47412544e8ab7afd4296ad6062fa99da37a6eab7a->leave($__internal_80e0c3f65cb9e1702a4689d47412544e8ab7afd4296ad6062fa99da37a6eab7a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/var/www/html/PilotParc/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
