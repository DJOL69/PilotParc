<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_77d354c55baac426746697d7b2454cd05fe29e3ca5047df53ab40d3477c9a7b0 extends Twig_Template
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
        $__internal_b54f05547d53cb9e56d42b7b9b8b1a9b14a4dc3b36be02496c7047b7e9ccb5a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b54f05547d53cb9e56d42b7b9b8b1a9b14a4dc3b36be02496c7047b7e9ccb5a7->enter($__internal_b54f05547d53cb9e56d42b7b9b8b1a9b14a4dc3b36be02496c7047b7e9ccb5a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_b54f05547d53cb9e56d42b7b9b8b1a9b14a4dc3b36be02496c7047b7e9ccb5a7->leave($__internal_b54f05547d53cb9e56d42b7b9b8b1a9b14a4dc3b36be02496c7047b7e9ccb5a7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/var/www/html/PilotParc/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
