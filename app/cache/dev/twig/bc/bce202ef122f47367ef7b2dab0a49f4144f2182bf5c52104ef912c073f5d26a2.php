<?php

/* PilotParcLoginBundle:Default:welcome.html.twig */
class __TwigTemplate_f7092c85fea6ec1af99964db56e33e080fe5accef3eff95868f0c0bfee6ddae8 extends Twig_Template
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
        $__internal_b68216db3e8be0acb38abcf973c4afb6dece9cf80c42961d56f7bac87f2f5123 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b68216db3e8be0acb38abcf973c4afb6dece9cf80c42961d56f7bac87f2f5123->enter($__internal_b68216db3e8be0acb38abcf973c4afb6dece9cf80c42961d56f7bac87f2f5123_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PilotParcLoginBundle:Default:welcome.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b68216db3e8be0acb38abcf973c4afb6dece9cf80c42961d56f7bac87f2f5123->leave($__internal_b68216db3e8be0acb38abcf973c4afb6dece9cf80c42961d56f7bac87f2f5123_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b2a0651fcb7793ea8a73099832102a2f85fd2abc763d187ee5f878935825505a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2a0651fcb7793ea8a73099832102a2f85fd2abc763d187ee5f878935825505a->enter($__internal_b2a0651fcb7793ea8a73099832102a2f85fd2abc763d187ee5f878935825505a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b2a0651fcb7793ea8a73099832102a2f85fd2abc763d187ee5f878935825505a->leave($__internal_b2a0651fcb7793ea8a73099832102a2f85fd2abc763d187ee5f878935825505a_prof);

    }

    // line 6
    public function block_container($context, array $blocks = array())
    {
        $__internal_f65f8ad10f8ec7c583ca35cc7f962ae7324cb5c1dc89addb7280af452a29a96a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f65f8ad10f8ec7c583ca35cc7f962ae7324cb5c1dc89addb7280af452a29a96a->enter($__internal_f65f8ad10f8ec7c583ca35cc7f962ae7324cb5c1dc89addb7280af452a29a96a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 7
        echo "
<body style=\"padding-top: 0px;\">

<div class=\"container\">

<div id=\"page-wrapper\" >
    <div class=\"well well-sm text-center\"> <!-- / entête de la page-->
    Les Marchés du jour 
    </div>
        <div class=\"row\">  <!-- Première ligne -->
\t\t\t<div class=\"col-lg-4\"><!-- résumé-->
          \t\t<div class=\"panel panel-primary\">
                        <div class=\"panel-heading\">
                            Jacquard
                                <span class=\"dropdown pull-right\">
                                    <a data-toggle=\"modal\" data-target=\"#marche1\" class=\"btn btn-default  btn-xs\" title=\"Afficher les données sur les places\">
                                <span class=\"glyphicon glyphicon-folder-open\"></span> 
                                    </a>
                                    &nbsp;
                                    <a title=\"Aller sur mon marché\" href=\"index.php?:nav=pages::dashboard&marche=1\" class=\"btn btn-success  btn-xs\">
                                    <i class=\"fa fa-hand-o-right\"></i> 
                                    </a>                                        
                                </span>
                        </div> <!-- /.panel-heading -->
                        <div class=\"modal fade\" id=\"marche1\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                            <div class=\"modal-dialog \">
                                <div class=\"modal-content col-lg-6\">
                                    <div class=\"modal-header \" >
                                    Jacquard
                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                </div>
                                <div class=\"modal-body\">
                                <!-- Nav tabs -->
                                    <ul class=\"nav nav-tabs\">
                                                            <li class=\"active\">
                                                                <a href=\"#home_1_modal\" data-toggle=\"tab\" title=\"Onglet Général\"><h6>Général</h6></a>
                                                            </li>
                                                            <li><a href=\"#passager_1_modal\" data-toggle=\"tab\"  title=\"Onglet Passager\" style=\"color:red;\"><h6>Passager</h6></a>
                                                            </li>
                                                            <li><a href=\"#abonnes_1_modal\" data-toggle=\"tab\"  title=\"Onglet Abonnés\"><h6>Abo.</h6></a>
                                                            </li>
                                    </ul>

<div class=\"tab-content\">
                                                    <div class=\"tab-pane fade in active\" id=\"home_1_modal\">
                                                                <table class=\"table table-hover table-condensed\"  style=\"border: 1px solid  black;\">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td><i class=\"fa fa-users\"></i>&nbsp;Total Places</td>
                                                                            <td ><os-p >
                                                                                <input name=\"nbPlaces\" value=\"<?php echo \$cpt; ?>\" style=\"text-align : right\" class=\"form-control\" type=\"text\" READONLY size=\"2\">
                                                                                </os-p>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><i class=\"fa fa-leaf\"></i>&nbsp; Alimentaires</td>
                                                                            <td ><os-p >
                                                                                <input name=\"nbPlaces\" value=\"<?php echo \$alimentaire; ?>\" style=\"text-align : right\" class=\"form-control\" type=\"text\" READONLY size=\"2\">
                                                                                </os-p>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><i class=\"fa fa-lemon-o\"></i>&nbsp;Primeurs</td>
                                                                            <td ><os-p >
                                                                                <input name=\"nbPlaces\" value=\"<?php echo \$fruitLegume; ?>\" style=\"text-align : right\" class=\"form-control\" type=\"text\" READONLY size=\"2\">
                                                                                </os-p>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><i class=\"fa fa-lightbulb-o \"></i>&nbsp; Manufacturés</td>
                                                                            <td ><os-p >
                                                                                <input name=\"nbPlaces\" value=\"<?php echo \$manufacture; ?>\" style=\"text-align : right\" class=\"form-control\" type=\"text\" READONLY size=\"2\">
                                                                                </os-p>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Places occup&eacute;es</td>
                                                                            <td ><os-p >
                                                                                <input name=\"nbPlaces\" value=\"<?php echo \$placesPrises; ?>\" style=\"text-align : right\" class=\"form-control\" type=\"text\" READONLY size=\"2\">
                                                                                </os-p>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Places disponibles</td>
                                                                            <td ><os-p >
                                                                                <input name=\"nbPlaces\" value=\"<?php echo \$placeslibres; ?>\" style=\"text-align : right\" class=\"form-control\" type=\"text\" READONLY size=\"2\">
                                                                                </os-p>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                    <div class=\"tab-pane fade\" id=\"abonnes_1_modal\">
                                                        <table class=\"table table-hover table-condensed\" style=\"border: 1px solid  blue;\">
                                                            <tbody>
                                                                        <tr>
                                                                            <td><i class=\"fa fa-users\"></i>&nbsp;Abonnés présents</td>
                                                                            <td ><os-p >
                                                                                <input name=\"nbPlaces\" value=\"<?php echo (\$totalAbo) ; ?>\" style=\"text-align : right\" class=\"form-control\" type=\"text\" READONLY size=\"2\">
                                                                                </os-p>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Abonnés -> Passagers</td>
                                                                            <td ><os-p >
                                                                                <input name=\"nbPlaces\" value=\"<?php echo (\$cptBasculeAboPass); ?>\" style=\"text-align : right\" class=\"form-control\" type=\"text\" READONLY size=\"2\">
                                                                                </os-p>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><i class=\"fa fa-users\"></i> &nbsp;Total Abonnés</td>
                                                                            <td ><os-p >
                                                                                <input name=\"nbPlaces\" value=\"<?php echo (\$aboAlim + \$aboFL + \$aboManu + \$cptBasculeAboPass) ; ?>\" style=\"text-align : right\" class=\"form-control\" type=\"text\" READONLY size=\"2\">
                                                                                </os-p>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><i class=\"fa fa-leaf\"></i>&nbsp; Alimentaires</td>
                                                                            <td ><os-p >
                                                                                <input name=\"nbPlaces\" value=\"<?php echo (\$aboAlim); ?>\" style=\"text-align : right\" class=\"form-control\" type=\"text\" READONLY size=\"2\">
                                                                                </os-p>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><i class=\"fa fa-lemon-o\"></i>&nbsp;Primeurs</td>
                                                                            <td ><os-p >
                                                                                <input name=\"nbPlaces\" value=\"<?php echo (\$aboFL); ?>\" style=\"text-align : right\" class=\"form-control\" type=\"text\" READONLY size=\"2\">
                                                                                </os-p>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><i class=\"fa fa-lightbulb-o \"></i>&nbsp; Manufacturés</td>
                                                                            <td ><os-p >
                                                                                <input name=\"nbPlaces\" value=\"<?php echo (\$aboManu); ?>\" style=\"text-align : right\" class=\"form-control\" type=\"text\" READONLY size=\"2\">
                                                                                </os-p>
                                                                            </td>
                                                                        </tr>

                                                            </tbody>
                                                        </table>
                                                    </div>
                                    </div>
                                </div>
                            </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div>
                    </div><!-- /.panel -->
                </div><!--div /. class=\"col-lg-4\"-->

    <div class=\"col-lg-4\"><!-- résumé-->
    <div class=\"panel panel-primary\">
                        <div class=\"panel-heading\">
                            Carnot
                                <span class=\"pull-right\">
                                    <a data-toggle=\"modal\" data-target=\"#marche2\" class=\"btn btn-default  btn-xs\" title=\"Afficher les données sur les places\">
                                        <span class=\"glyphicon glyphicon-folder-open\"></span> 
                                    </a>
                                    &nbsp;
                                    <a   title=\"Aller sur mon marché\" href=\"index.php?:nav=pages::dashboard&marche=2\" class=\"btn btn-success  btn-xs\" >
                                        <i class=\"fa fa-hand-o-right\"></i> 
                                    </a>                                        </span>
                        </div> <!-- /.panel-heading -->
                        <div class=\"modal fade\" id=\"marche2\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                            <div class=\"modal-dialog \">
                                <div class=\"modal-content col-lg-6\">
                                    <div class=\"modal-header \" >
                                    Carnot
                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                </div>
                                <div class=\"modal-body\">
                                    <!-- Nav tabs -->
                                    <ul class=\"nav nav-tabs\">
                                                            <li class=\"active\">
                                                                <a href=\"#home_2_modal\" data-toggle=\"tab\" title=\"Onglet Général\"><h6>Général</h6></a>
                                                            </li>
                                                            <li><a href=\"#passager_2_modal\" data-toggle=\"tab\"  title=\"Onglet Passager\" style=\"color:red;\"><h6>Passager</h6></a>
                                                            </li>
                                                            <li><a href=\"#abonnes_2_modal\" data-toggle=\"tab\"  title=\"Onglet Abonnés\"><h6>Abo.</h6></a>
                                                            </li>
                                    </ul>
                                    <!-- Tab panes -->
                                    <div class=\"tab-content\">
                                                    <div class=\"tab-pane fade in active\" id=\"home_2_modal\">
                                                                <table class=\"table table-hover table-condensed\"  style=\"border: 1px solid  black;\">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td><i class=\"fa fa-users\"></i>&nbsp;Total Places</td>
                                                                            <td ><os-p >
                                                                                <input name=\"nbPlaces\" value=\"<?php echo \$cpt; ?>\" style=\"text-align : right\" class=\"form-control\" type=\"text\" READONLY size=\"2\">
                                                                                </os-p>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><i class=\"fa fa-leaf\"></i>&nbsp; Alimentaires</td>
                                                                            <td ><os-p >
                                                                                <input name=\"nbPlaces\" value=\"<?php echo \$alimentaire; ?>\" style=\"text-align : right\" class=\"form-control\" type=\"text\" READONLY size=\"2\">
                                                                                </os-p>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><i class=\"fa fa-lemon-o\"></i>&nbsp;Primeurs</td>
                                                                            <td ><os-p >
                                                                                <input name=\"nbPlaces\" value=\"<?php echo \$fruitLegume; ?>\" style=\"text-align : right\" class=\"form-control\" type=\"text\" READONLY size=\"2\">
                                                                                </os-p>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><i class=\"fa fa-lightbulb-o \"></i>&nbsp; Manufacturés</td>
                                                                            <td ><os-p >
                                                                                <input name=\"nbPlaces\" value=\"<?php echo \$manufacture; ?>\" style=\"text-align : right\" class=\"form-control\" type=\"text\" READONLY size=\"2\">
                                                                                </os-p>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Places occup&eacute;es</td>
                                                                            <td ><os-p >
                                                                                <input name=\"nbPlaces\" value=\"<?php echo \$placesPrises; ?>\" style=\"text-align : right\" class=\"form-control\" type=\"text\" READONLY size=\"2\">
                                                                                </os-p>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Places disponibles</td>
                                                                            <td ><os-p >
                                                                                <input name=\"nbPlaces\" value=\"<?php echo \$placeslibres; ?>\" style=\"text-align : right\" class=\"form-control\" type=\"text\" READONLY size=\"2\">
                                                                                </os-p>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                    </div>
                                                    <div class=\"tab-pane fade\" id=\"passager_2_modal\">
                                                                <table class=\"table table-hover table-condensed\" style=\"border: 1px solid  red;\">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td><i class=\"fa fa-users\"></i> &nbsp;Total Passagers</td>
                                                                            <td ><os-p >
                                                                                <input name=\"nbPlaces\" value=\"<?php echo (\$alimentaire + \$fruitLegume + \$manufacture - \$aboAlim - \$aboFL - \$aboManu ) ; ?>\" style=\"text-align : right\" class=\"form-control\" type=\"text\" READONLY size=\"2\">
                                                                                </os-p>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Abonnés -> Passagers</td>
                                                                            <td ><os-p >
                                                                                <input name=\"nbPlaces\" value=\"<?php echo (\$cptBasculeAboPass); ?>\" style=\"text-align : right\" class=\"form-control\" type=\"text\" READONLY size=\"2\">
                                                                                </os-p>
                                                                            </td>
                                                                        </tr>                                                    
                                                                        <tr>
                                                                            <td>Places  dispo.</td>
                                                                            <td ><os-p >
                                                                                <input name=\"nbPlaces\" value=\"<?php echo \$placeslibres; ?>\" style=\"text-align : right\" class=\"form-control\" type=\"text\" READONLY size=\"2\">
                                                                                </os-p>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><i class=\"fa fa-leaf\"></i>&nbsp; Alimentaires</td>
                                                                            <td ><os-p >
                                                                                <input name=\"nbPlaces\" value=\"<?php echo (\$alimentaire - \$aboAlim); ?>\" style=\"text-align : right\" class=\"form-control\" type=\"text\" READONLY size=\"2\">
                                                                                </os-p>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><i class=\"fa fa-lemon-o\"></i>&nbsp;Primeurs</td>
                                                                            <td ><os-p >
                                                                                <input name=\"nbPlaces\" value=\"<?php echo (\$fruitLegume - \$aboFL); ?>\" style=\"text-align : right\" class=\"form-control\" type=\"text\" READONLY size=\"2\">
                                                                                </os-p>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><i class=\"fa fa-lightbulb-o \"></i>&nbsp; Manufacturés</td>
                                                                            <td ><os-p >
                                                                                <input name=\"nbPlaces\" value=\"<?php echo (\$manufacture - \$aboManu); ?>\" style=\"text-align : right\" class=\"form-control\" type=\"text\" READONLY size=\"2\">
                                                                                </os-p>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                    </div>
                                                    <div class=\"tab-pane fade\" id=\"abonnes_2_modal\">
                                                        <table class=\"table table-hover table-condensed\" style=\"border: 1px solid  blue;\">
                                                            <tbody>
                                                                        <tr>
                                                                            <td><i class=\"fa fa-users\"></i>&nbsp;Abonnés présents</td>
                                                                            <td ><os-p >
                                                                                <input name=\"nbPlaces\" value=\"<?php echo (\$totalAbo) ; ?>\" style=\"text-align : right\" class=\"form-control\" type=\"text\" READONLY size=\"2\">
                                                                                </os-p>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Abonnés -> Passagers</td>
                                                                            <td ><os-p >
                                                                                <input name=\"nbPlaces\" value=\"<?php echo (\$cptBasculeAboPass); ?>\" style=\"text-align : right\" class=\"form-control\" type=\"text\" READONLY size=\"2\">
                                                                                </os-p>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><i class=\"fa fa-users\"></i> &nbsp;Total Abonnés</td>
                                                                            <td ><os-p >
                                                                                <input name=\"nbPlaces\" value=\"<?php echo (\$aboAlim + \$aboFL + \$aboManu + \$cptBasculeAboPass) ; ?>\" style=\"text-align : right\" class=\"form-control\" type=\"text\" READONLY size=\"2\">
                                                                                </os-p>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><i class=\"fa fa-leaf\"></i>&nbsp; Alimentaires</td>
                                                                            <td ><os-p >
                                                                                <input name=\"nbPlaces\" value=\"<?php echo (\$aboAlim); ?>\" style=\"text-align : right\" class=\"form-control\" type=\"text\" READONLY size=\"2\">
                                                                                </os-p>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><i class=\"fa fa-lemon-o\"></i>&nbsp;Primeurs</td>
                                                                            <td ><os-p >
                                                                                <input name=\"nbPlaces\" value=\"<?php echo (\$aboFL); ?>\" style=\"text-align : right\" class=\"form-control\" type=\"text\" READONLY size=\"2\">
                                                                                </os-p>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><i class=\"fa fa-lightbulb-o \"></i>&nbsp; Manufacturés</td>
                                                                            <td ><os-p >
                                                                                <input name=\"nbPlaces\" value=\"<?php echo (\$aboManu); ?>\" style=\"text-align : right\" class=\"form-control\" type=\"text\" READONLY size=\"2\">
                                                                                </os-p>
                                                                            </td>
                                                                        </tr>

                                                            </tbody>
                                                        </table>
                                                    </div>
                                    </div>
                                </div>
                            </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div>


                    </div> <!-- /.panel -->
                </div><!--div /. class=\"col-lg-4\"-->
 
 <div class=\"col-lg-4\"><!-- résumé-->
 <div class=\"panel panel-primary\">
                        <div class=\"panel-heading\">
                            Fauriel
                                <span class=\"pull-right\">
                                    <a data-toggle=\"modal\" data-target=\"#marche3\" class=\"btn btn-default  btn-xs\" title=\"Afficher les données sur les places\">
                                        <span class=\"glyphicon glyphicon-folder-open\"></span> 
                                    </a>
                                    &nbsp;
                                    <a   title=\"Aller sur mon marché\" href=\"index.php?:nav=pages::dashboard&marche=3\" class=\"btn btn-success  btn-xs\" >
                                        <i class=\"fa fa-hand-o-right\"></i> 
                                    </a>                                        </span>
                        </div>
                        <!-- /.panel-heading -->
                        <div class=\"modal fade\" id=\"marche3\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                            <div class=\"modal-dialog \">
                                <div class=\"modal-content col-lg-6\">
                                    <div class=\"modal-header \" >
                                    Fauriel
                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                </div>
                                <div class=\"modal-body\">
                                    <!-- Nav tabs -->
                                    <ul class=\"nav nav-tabs\">
                                                            <li class=\"active\">
                                                                <a href=\"#home_3_modal\" data-toggle=\"tab\" title=\"Onglet Général\"><h6>Général</h6></a>
                                                            </li>
                                                            <li><a href=\"#passager_3_modal\" data-toggle=\"tab\"  title=\"Onglet Passager\" style=\"color:red;\"><h6>Passager</h6></a>
                                                            </li>
                                                            <li><a href=\"#abonnes_3_modal\" data-toggle=\"tab\"  title=\"Onglet Abonnés\"><h6>Abo.</h6></a>
                                                            </li>
                                    </ul>
                                    <!-- Tab panes -->
                                    <div class=\"tab-content\">
                                                    <div class=\"tab-pane fade in active\" id=\"home_3_modal\">
                                                                <table class=\"table table-hover table-condensed\"  style=\"border: 1px solid  black;\">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td><i class=\"fa fa-users\"></i>&nbsp;Total Places</td>
                                                                            <td ><os-p >
                                                                                <input name=\"nbPlaces\" value=\"<?php echo \$cpt; ?>\" style=\"text-align : right\" class=\"form-control\" type=\"text\" READONLY size=\"2\">
                                                                                </os-p>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><i class=\"fa fa-leaf\"></i>&nbsp; Alimentaires</td>
                                                                            <td ><os-p >
                                                                                <input name=\"nbPlaces\" value=\"<?php echo \$alimentaire; ?>\" style=\"text-align : right\" class=\"form-control\" type=\"text\" READONLY size=\"2\">
                                                                                </os-p>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><i class=\"fa fa-lemon-o\"></i>&nbsp;Primeurs</td>
                                                                            <td ><os-p >
                                                                                <input name=\"nbPlaces\" value=\"<?php echo \$fruitLegume; ?>\" style=\"text-align : right\" class=\"form-control\" type=\"text\" READONLY size=\"2\">
                                                                                </os-p>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><i class=\"fa fa-lightbulb-o \"></i>&nbsp; Manufacturés</td>
                                                                            <td ><os-p >
                                                                                <input name=\"nbPlaces\" value=\"<?php echo \$manufacture; ?>\" style=\"text-align : right\" class=\"form-control\" type=\"text\" READONLY size=\"2\">
                                                                                </os-p>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Places occup&eacute;es</td>
                                                                            <td ><os-p >
                                                                                <input name=\"nbPlaces\" value=\"<?php echo \$placesPrises; ?>\" style=\"text-align : right\" class=\"form-control\" type=\"text\" READONLY size=\"2\">
                                                                                </os-p>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Places disponibles</td>
                                                                            <td ><os-p >
                                                                                <input name=\"nbPlaces\" value=\"<?php echo \$placeslibres; ?>\" style=\"text-align : right\" class=\"form-control\" type=\"text\" READONLY size=\"2\">
                                                                                </os-p>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                    </div>
                                                    <div class=\"tab-pane fade\" id=\"passager_3_modal\">
                                                                <table class=\"table table-hover table-condensed\" style=\"border: 1px solid  red;\">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td><i class=\"fa fa-users\"></i> &nbsp;Total Passagers</td>
                                                                            <td ><os-p >
                                                                                <input name=\"nbPlaces\" value=\"<?php echo (\$alimentaire + \$fruitLegume + \$manufacture - \$aboAlim - \$aboFL - \$aboManu ) ; ?>\" style=\"text-align : right\" class=\"form-control\" type=\"text\" READONLY size=\"2\">
                                                                                </os-p>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Abonnés -> Passagers</td>
                                                                            <td ><os-p >
                                                                                <input name=\"nbPlaces\" value=\"<?php echo (\$cptBasculeAboPass); ?>\" style=\"text-align : right\" class=\"form-control\" type=\"text\" READONLY size=\"2\">
                                                                                </os-p>
                                                                            </td>
                                                                        </tr>                                                    
                                                                        <tr>
                                                                            <td>Places  dispo.</td>
                                                                            <td ><os-p >
                                                                                <input name=\"nbPlaces\" value=\"<?php echo \$placeslibres; ?>\" style=\"text-align : right\" class=\"form-control\" type=\"text\" READONLY size=\"2\">
                                                                                </os-p>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><i class=\"fa fa-leaf\"></i>&nbsp; Alimentaires</td>
                                                                            <td ><os-p >
                                                                                <input name=\"nbPlaces\" value=\"<?php echo (\$alimentaire - \$aboAlim); ?>\" style=\"text-align : right\" class=\"form-control\" type=\"text\" READONLY size=\"2\">
                                                                                </os-p>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><i class=\"fa fa-lemon-o\"></i>&nbsp;Primeurs</td>
                                                                            <td ><os-p >
                                                                                <input name=\"nbPlaces\" value=\"<?php echo (\$fruitLegume - \$aboFL); ?>\" style=\"text-align : right\" class=\"form-control\" type=\"text\" READONLY size=\"2\">
                                                                                </os-p>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><i class=\"fa fa-lightbulb-o \"></i>&nbsp; Manufacturés</td>
                                                                            <td ><os-p >
                                                                                <input name=\"nbPlaces\" value=\"<?php echo (\$manufacture - \$aboManu); ?>\" style=\"text-align : right\" class=\"form-control\" type=\"text\" READONLY size=\"2\">
                                                                                </os-p>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                    </div>
                                                    <div class=\"tab-pane fade\" id=\"abonnes_3_modal\">
                                                        <table class=\"table table-hover table-condensed\" style=\"border: 1px solid  blue;\">
                                                            <tbody>
                                                                        <tr>
                                                                            <td><i class=\"fa fa-users\"></i>&nbsp;Abonnés présents</td>
                                                                            <td ><os-p >
                                                                                <input name=\"nbPlaces\" value=\"<?php echo (\$totalAbo) ; ?>\" style=\"text-align : right\" class=\"form-control\" type=\"text\" READONLY size=\"2\">
                                                                                </os-p>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Abonnés -> Passagers</td>
                                                                            <td ><os-p >
                                                                                <input name=\"nbPlaces\" value=\"<?php echo (\$cptBasculeAboPass); ?>\" style=\"text-align : right\" class=\"form-control\" type=\"text\" READONLY size=\"2\">
                                                                                </os-p>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><i class=\"fa fa-users\"></i> &nbsp;Total Abonnés</td>
                                                                            <td ><os-p >
                                                                                <input name=\"nbPlaces\" value=\"<?php echo (\$aboAlim + \$aboFL + \$aboManu + \$cptBasculeAboPass) ; ?>\" style=\"text-align : right\" class=\"form-control\" type=\"text\" READONLY size=\"2\">
                                                                                </os-p>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><i class=\"fa fa-leaf\"></i>&nbsp; Alimentaires</td>
                                                                            <td ><os-p >
                                                                                <input name=\"nbPlaces\" value=\"<?php echo (\$aboAlim); ?>\" style=\"text-align : right\" class=\"form-control\" type=\"text\" READONLY size=\"2\">
                                                                                </os-p>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><i class=\"fa fa-lemon-o\"></i>&nbsp;Primeurs</td>
                                                                            <td ><os-p >
                                                                                <input name=\"nbPlaces\" value=\"<?php echo (\$aboFL); ?>\" style=\"text-align : right\" class=\"form-control\" type=\"text\" READONLY size=\"2\">
                                                                                </os-p>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><i class=\"fa fa-lightbulb-o \"></i>&nbsp; Manufacturés</td>
                                                                            <td ><os-p >
                                                                                <input name=\"nbPlaces\" value=\"<?php echo (\$aboManu); ?>\" style=\"text-align : right\" class=\"form-control\" type=\"text\" READONLY size=\"2\">
                                                                                </os-p>
                                                                            </td>
                                                                        </tr>

                                                            </tbody>
                                                        </table>
                                                    </div>
                                    </div>
                                </div>
                            </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div>
                    </div>
                    <!-- /.panel -->
                </div><!--div /. class=\"col-lg-4\"-->
            
            </div><!-- / première Ligne-->
          
        </div><!-- / page-wrapper -->
    </div><!-- /#fin de conteneur- -->

 
  </div></body>

<h2>Hello ";
        // line 539
        echo twig_escape_filter($this->env, (isset($context["prenom"]) ? $context["prenom"] : $this->getContext($context, "prenom")), "html", null, true);
        echo " ! </h2>

";
        // line 541
        $this->loadTemplate("PilotParcLoginBundle:Default:test.html.twig", "PilotParcLoginBundle:Default:welcome.html.twig", 541)->display($context);
        // line 542
        echo "

<a href=\"";
        // line 544
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pilot_parc_login_logout");
        echo "\" >Se déconnecter</a>
    ";
        
        $__internal_f65f8ad10f8ec7c583ca35cc7f962ae7324cb5c1dc89addb7280af452a29a96a->leave($__internal_f65f8ad10f8ec7c583ca35cc7f962ae7324cb5c1dc89addb7280af452a29a96a_prof);

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
        return array (  597 => 544,  593 => 542,  591 => 541,  586 => 539,  52 => 7,  46 => 6,  35 => 3,  11 => 1,);
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
{%endblock%}
   
{%block container %}

<body style=\"padding-top: 0px;\">

<div class=\"container\">

<div id=\"page-wrapper\" >
    <div class=\"well well-sm text-center\"> <!-- / entête de la page-->
    Les Marchés du jour 
    </div>
        <div class=\"row\">  <!-- Première ligne -->
\t\t\t<div class=\"col-lg-4\"><!-- résumé-->
          \t\t<div class=\"panel panel-primary\">
                        <div class=\"panel-heading\">
                            Jacquard
                                <span class=\"dropdown pull-right\">
                                    <a data-toggle=\"modal\" data-target=\"#marche1\" class=\"btn btn-default  btn-xs\" title=\"Afficher les données sur les places\">
                                <span class=\"glyphicon glyphicon-folder-open\"></span> 
                                    </a>
                                    &nbsp;
                                    <a title=\"Aller sur mon marché\" href=\"index.php?:nav=pages::dashboard&marche=1\" class=\"btn btn-success  btn-xs\">
                                    <i class=\"fa fa-hand-o-right\"></i> 
                                    </a>                                        
                                </span>
                        </div> <!-- /.panel-heading -->
                        <div class=\"modal fade\" id=\"marche1\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                            <div class=\"modal-dialog \">
                                <div class=\"modal-content col-lg-6\">
                                    <div class=\"modal-header \" >
                                    Jacquard
                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                </div>
                                <div class=\"modal-body\">
                                <!-- Nav tabs -->
                                    <ul class=\"nav nav-tabs\">
                                                            <li class=\"active\">
                                                                <a href=\"#home_1_modal\" data-toggle=\"tab\" title=\"Onglet Général\"><h6>Général</h6></a>
                                                            </li>
                                                            <li><a href=\"#passager_1_modal\" data-toggle=\"tab\"  title=\"Onglet Passager\" style=\"color:red;\"><h6>Passager</h6></a>
                                                            </li>
                                                            <li><a href=\"#abonnes_1_modal\" data-toggle=\"tab\"  title=\"Onglet Abonnés\"><h6>Abo.</h6></a>
                                                            </li>
                                    </ul>

<div class=\"tab-content\">
                                                    <div class=\"tab-pane fade in active\" id=\"home_1_modal\">
                                                                <table class=\"table table-hover table-condensed\"  style=\"border: 1px solid  black;\">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td><i class=\"fa fa-users\"></i>&nbsp;Total Places</td>
                                                                            <td ><os-p >
                                                                                <input name=\"nbPlaces\" value=\"<?php echo \$cpt; ?>\" style=\"text-align : right\" class=\"form-control\" type=\"text\" READONLY size=\"2\">
                                                                                </os-p>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><i class=\"fa fa-leaf\"></i>&nbsp; Alimentaires</td>
                                                                            <td ><os-p >
                                                                                <input name=\"nbPlaces\" value=\"<?php echo \$alimentaire; ?>\" style=\"text-align : right\" class=\"form-control\" type=\"text\" READONLY size=\"2\">
                                                                                </os-p>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><i class=\"fa fa-lemon-o\"></i>&nbsp;Primeurs</td>
                                                                            <td ><os-p >
                                                                                <input name=\"nbPlaces\" value=\"<?php echo \$fruitLegume; ?>\" style=\"text-align : right\" class=\"form-control\" type=\"text\" READONLY size=\"2\">
                                                                                </os-p>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><i class=\"fa fa-lightbulb-o \"></i>&nbsp; Manufacturés</td>
                                                                            <td ><os-p >
                                                                                <input name=\"nbPlaces\" value=\"<?php echo \$manufacture; ?>\" style=\"text-align : right\" class=\"form-control\" type=\"text\" READONLY size=\"2\">
                                                                                </os-p>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Places occup&eacute;es</td>
                                                                            <td ><os-p >
                                                                                <input name=\"nbPlaces\" value=\"<?php echo \$placesPrises; ?>\" style=\"text-align : right\" class=\"form-control\" type=\"text\" READONLY size=\"2\">
                                                                                </os-p>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Places disponibles</td>
                                                                            <td ><os-p >
                                                                                <input name=\"nbPlaces\" value=\"<?php echo \$placeslibres; ?>\" style=\"text-align : right\" class=\"form-control\" type=\"text\" READONLY size=\"2\">
                                                                                </os-p>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                    <div class=\"tab-pane fade\" id=\"abonnes_1_modal\">
                                                        <table class=\"table table-hover table-condensed\" style=\"border: 1px solid  blue;\">
                                                            <tbody>
                                                                        <tr>
                                                                            <td><i class=\"fa fa-users\"></i>&nbsp;Abonnés présents</td>
                                                                            <td ><os-p >
                                                                                <input name=\"nbPlaces\" value=\"<?php echo (\$totalAbo) ; ?>\" style=\"text-align : right\" class=\"form-control\" type=\"text\" READONLY size=\"2\">
                                                                                </os-p>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Abonnés -> Passagers</td>
                                                                            <td ><os-p >
                                                                                <input name=\"nbPlaces\" value=\"<?php echo (\$cptBasculeAboPass); ?>\" style=\"text-align : right\" class=\"form-control\" type=\"text\" READONLY size=\"2\">
                                                                                </os-p>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><i class=\"fa fa-users\"></i> &nbsp;Total Abonnés</td>
                                                                            <td ><os-p >
                                                                                <input name=\"nbPlaces\" value=\"<?php echo (\$aboAlim + \$aboFL + \$aboManu + \$cptBasculeAboPass) ; ?>\" style=\"text-align : right\" class=\"form-control\" type=\"text\" READONLY size=\"2\">
                                                                                </os-p>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><i class=\"fa fa-leaf\"></i>&nbsp; Alimentaires</td>
                                                                            <td ><os-p >
                                                                                <input name=\"nbPlaces\" value=\"<?php echo (\$aboAlim); ?>\" style=\"text-align : right\" class=\"form-control\" type=\"text\" READONLY size=\"2\">
                                                                                </os-p>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><i class=\"fa fa-lemon-o\"></i>&nbsp;Primeurs</td>
                                                                            <td ><os-p >
                                                                                <input name=\"nbPlaces\" value=\"<?php echo (\$aboFL); ?>\" style=\"text-align : right\" class=\"form-control\" type=\"text\" READONLY size=\"2\">
                                                                                </os-p>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><i class=\"fa fa-lightbulb-o \"></i>&nbsp; Manufacturés</td>
                                                                            <td ><os-p >
                                                                                <input name=\"nbPlaces\" value=\"<?php echo (\$aboManu); ?>\" style=\"text-align : right\" class=\"form-control\" type=\"text\" READONLY size=\"2\">
                                                                                </os-p>
                                                                            </td>
                                                                        </tr>

                                                            </tbody>
                                                        </table>
                                                    </div>
                                    </div>
                                </div>
                            </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div>
                    </div><!-- /.panel -->
                </div><!--div /. class=\"col-lg-4\"-->

    <div class=\"col-lg-4\"><!-- résumé-->
    <div class=\"panel panel-primary\">
                        <div class=\"panel-heading\">
                            Carnot
                                <span class=\"pull-right\">
                                    <a data-toggle=\"modal\" data-target=\"#marche2\" class=\"btn btn-default  btn-xs\" title=\"Afficher les données sur les places\">
                                        <span class=\"glyphicon glyphicon-folder-open\"></span> 
                                    </a>
                                    &nbsp;
                                    <a   title=\"Aller sur mon marché\" href=\"index.php?:nav=pages::dashboard&marche=2\" class=\"btn btn-success  btn-xs\" >
                                        <i class=\"fa fa-hand-o-right\"></i> 
                                    </a>                                        </span>
                        </div> <!-- /.panel-heading -->
                        <div class=\"modal fade\" id=\"marche2\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                            <div class=\"modal-dialog \">
                                <div class=\"modal-content col-lg-6\">
                                    <div class=\"modal-header \" >
                                    Carnot
                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                </div>
                                <div class=\"modal-body\">
                                    <!-- Nav tabs -->
                                    <ul class=\"nav nav-tabs\">
                                                            <li class=\"active\">
                                                                <a href=\"#home_2_modal\" data-toggle=\"tab\" title=\"Onglet Général\"><h6>Général</h6></a>
                                                            </li>
                                                            <li><a href=\"#passager_2_modal\" data-toggle=\"tab\"  title=\"Onglet Passager\" style=\"color:red;\"><h6>Passager</h6></a>
                                                            </li>
                                                            <li><a href=\"#abonnes_2_modal\" data-toggle=\"tab\"  title=\"Onglet Abonnés\"><h6>Abo.</h6></a>
                                                            </li>
                                    </ul>
                                    <!-- Tab panes -->
                                    <div class=\"tab-content\">
                                                    <div class=\"tab-pane fade in active\" id=\"home_2_modal\">
                                                                <table class=\"table table-hover table-condensed\"  style=\"border: 1px solid  black;\">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td><i class=\"fa fa-users\"></i>&nbsp;Total Places</td>
                                                                            <td ><os-p >
                                                                                <input name=\"nbPlaces\" value=\"<?php echo \$cpt; ?>\" style=\"text-align : right\" class=\"form-control\" type=\"text\" READONLY size=\"2\">
                                                                                </os-p>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><i class=\"fa fa-leaf\"></i>&nbsp; Alimentaires</td>
                                                                            <td ><os-p >
                                                                                <input name=\"nbPlaces\" value=\"<?php echo \$alimentaire; ?>\" style=\"text-align : right\" class=\"form-control\" type=\"text\" READONLY size=\"2\">
                                                                                </os-p>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><i class=\"fa fa-lemon-o\"></i>&nbsp;Primeurs</td>
                                                                            <td ><os-p >
                                                                                <input name=\"nbPlaces\" value=\"<?php echo \$fruitLegume; ?>\" style=\"text-align : right\" class=\"form-control\" type=\"text\" READONLY size=\"2\">
                                                                                </os-p>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><i class=\"fa fa-lightbulb-o \"></i>&nbsp; Manufacturés</td>
                                                                            <td ><os-p >
                                                                                <input name=\"nbPlaces\" value=\"<?php echo \$manufacture; ?>\" style=\"text-align : right\" class=\"form-control\" type=\"text\" READONLY size=\"2\">
                                                                                </os-p>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Places occup&eacute;es</td>
                                                                            <td ><os-p >
                                                                                <input name=\"nbPlaces\" value=\"<?php echo \$placesPrises; ?>\" style=\"text-align : right\" class=\"form-control\" type=\"text\" READONLY size=\"2\">
                                                                                </os-p>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Places disponibles</td>
                                                                            <td ><os-p >
                                                                                <input name=\"nbPlaces\" value=\"<?php echo \$placeslibres; ?>\" style=\"text-align : right\" class=\"form-control\" type=\"text\" READONLY size=\"2\">
                                                                                </os-p>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                    </div>
                                                    <div class=\"tab-pane fade\" id=\"passager_2_modal\">
                                                                <table class=\"table table-hover table-condensed\" style=\"border: 1px solid  red;\">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td><i class=\"fa fa-users\"></i> &nbsp;Total Passagers</td>
                                                                            <td ><os-p >
                                                                                <input name=\"nbPlaces\" value=\"<?php echo (\$alimentaire + \$fruitLegume + \$manufacture - \$aboAlim - \$aboFL - \$aboManu ) ; ?>\" style=\"text-align : right\" class=\"form-control\" type=\"text\" READONLY size=\"2\">
                                                                                </os-p>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Abonnés -> Passagers</td>
                                                                            <td ><os-p >
                                                                                <input name=\"nbPlaces\" value=\"<?php echo (\$cptBasculeAboPass); ?>\" style=\"text-align : right\" class=\"form-control\" type=\"text\" READONLY size=\"2\">
                                                                                </os-p>
                                                                            </td>
                                                                        </tr>                                                    
                                                                        <tr>
                                                                            <td>Places  dispo.</td>
                                                                            <td ><os-p >
                                                                                <input name=\"nbPlaces\" value=\"<?php echo \$placeslibres; ?>\" style=\"text-align : right\" class=\"form-control\" type=\"text\" READONLY size=\"2\">
                                                                                </os-p>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><i class=\"fa fa-leaf\"></i>&nbsp; Alimentaires</td>
                                                                            <td ><os-p >
                                                                                <input name=\"nbPlaces\" value=\"<?php echo (\$alimentaire - \$aboAlim); ?>\" style=\"text-align : right\" class=\"form-control\" type=\"text\" READONLY size=\"2\">
                                                                                </os-p>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><i class=\"fa fa-lemon-o\"></i>&nbsp;Primeurs</td>
                                                                            <td ><os-p >
                                                                                <input name=\"nbPlaces\" value=\"<?php echo (\$fruitLegume - \$aboFL); ?>\" style=\"text-align : right\" class=\"form-control\" type=\"text\" READONLY size=\"2\">
                                                                                </os-p>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><i class=\"fa fa-lightbulb-o \"></i>&nbsp; Manufacturés</td>
                                                                            <td ><os-p >
                                                                                <input name=\"nbPlaces\" value=\"<?php echo (\$manufacture - \$aboManu); ?>\" style=\"text-align : right\" class=\"form-control\" type=\"text\" READONLY size=\"2\">
                                                                                </os-p>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                    </div>
                                                    <div class=\"tab-pane fade\" id=\"abonnes_2_modal\">
                                                        <table class=\"table table-hover table-condensed\" style=\"border: 1px solid  blue;\">
                                                            <tbody>
                                                                        <tr>
                                                                            <td><i class=\"fa fa-users\"></i>&nbsp;Abonnés présents</td>
                                                                            <td ><os-p >
                                                                                <input name=\"nbPlaces\" value=\"<?php echo (\$totalAbo) ; ?>\" style=\"text-align : right\" class=\"form-control\" type=\"text\" READONLY size=\"2\">
                                                                                </os-p>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Abonnés -> Passagers</td>
                                                                            <td ><os-p >
                                                                                <input name=\"nbPlaces\" value=\"<?php echo (\$cptBasculeAboPass); ?>\" style=\"text-align : right\" class=\"form-control\" type=\"text\" READONLY size=\"2\">
                                                                                </os-p>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><i class=\"fa fa-users\"></i> &nbsp;Total Abonnés</td>
                                                                            <td ><os-p >
                                                                                <input name=\"nbPlaces\" value=\"<?php echo (\$aboAlim + \$aboFL + \$aboManu + \$cptBasculeAboPass) ; ?>\" style=\"text-align : right\" class=\"form-control\" type=\"text\" READONLY size=\"2\">
                                                                                </os-p>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><i class=\"fa fa-leaf\"></i>&nbsp; Alimentaires</td>
                                                                            <td ><os-p >
                                                                                <input name=\"nbPlaces\" value=\"<?php echo (\$aboAlim); ?>\" style=\"text-align : right\" class=\"form-control\" type=\"text\" READONLY size=\"2\">
                                                                                </os-p>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><i class=\"fa fa-lemon-o\"></i>&nbsp;Primeurs</td>
                                                                            <td ><os-p >
                                                                                <input name=\"nbPlaces\" value=\"<?php echo (\$aboFL); ?>\" style=\"text-align : right\" class=\"form-control\" type=\"text\" READONLY size=\"2\">
                                                                                </os-p>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><i class=\"fa fa-lightbulb-o \"></i>&nbsp; Manufacturés</td>
                                                                            <td ><os-p >
                                                                                <input name=\"nbPlaces\" value=\"<?php echo (\$aboManu); ?>\" style=\"text-align : right\" class=\"form-control\" type=\"text\" READONLY size=\"2\">
                                                                                </os-p>
                                                                            </td>
                                                                        </tr>

                                                            </tbody>
                                                        </table>
                                                    </div>
                                    </div>
                                </div>
                            </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div>


                    </div> <!-- /.panel -->
                </div><!--div /. class=\"col-lg-4\"-->
 
 <div class=\"col-lg-4\"><!-- résumé-->
 <div class=\"panel panel-primary\">
                        <div class=\"panel-heading\">
                            Fauriel
                                <span class=\"pull-right\">
                                    <a data-toggle=\"modal\" data-target=\"#marche3\" class=\"btn btn-default  btn-xs\" title=\"Afficher les données sur les places\">
                                        <span class=\"glyphicon glyphicon-folder-open\"></span> 
                                    </a>
                                    &nbsp;
                                    <a   title=\"Aller sur mon marché\" href=\"index.php?:nav=pages::dashboard&marche=3\" class=\"btn btn-success  btn-xs\" >
                                        <i class=\"fa fa-hand-o-right\"></i> 
                                    </a>                                        </span>
                        </div>
                        <!-- /.panel-heading -->
                        <div class=\"modal fade\" id=\"marche3\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                            <div class=\"modal-dialog \">
                                <div class=\"modal-content col-lg-6\">
                                    <div class=\"modal-header \" >
                                    Fauriel
                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                </div>
                                <div class=\"modal-body\">
                                    <!-- Nav tabs -->
                                    <ul class=\"nav nav-tabs\">
                                                            <li class=\"active\">
                                                                <a href=\"#home_3_modal\" data-toggle=\"tab\" title=\"Onglet Général\"><h6>Général</h6></a>
                                                            </li>
                                                            <li><a href=\"#passager_3_modal\" data-toggle=\"tab\"  title=\"Onglet Passager\" style=\"color:red;\"><h6>Passager</h6></a>
                                                            </li>
                                                            <li><a href=\"#abonnes_3_modal\" data-toggle=\"tab\"  title=\"Onglet Abonnés\"><h6>Abo.</h6></a>
                                                            </li>
                                    </ul>
                                    <!-- Tab panes -->
                                    <div class=\"tab-content\">
                                                    <div class=\"tab-pane fade in active\" id=\"home_3_modal\">
                                                                <table class=\"table table-hover table-condensed\"  style=\"border: 1px solid  black;\">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td><i class=\"fa fa-users\"></i>&nbsp;Total Places</td>
                                                                            <td ><os-p >
                                                                                <input name=\"nbPlaces\" value=\"<?php echo \$cpt; ?>\" style=\"text-align : right\" class=\"form-control\" type=\"text\" READONLY size=\"2\">
                                                                                </os-p>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><i class=\"fa fa-leaf\"></i>&nbsp; Alimentaires</td>
                                                                            <td ><os-p >
                                                                                <input name=\"nbPlaces\" value=\"<?php echo \$alimentaire; ?>\" style=\"text-align : right\" class=\"form-control\" type=\"text\" READONLY size=\"2\">
                                                                                </os-p>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><i class=\"fa fa-lemon-o\"></i>&nbsp;Primeurs</td>
                                                                            <td ><os-p >
                                                                                <input name=\"nbPlaces\" value=\"<?php echo \$fruitLegume; ?>\" style=\"text-align : right\" class=\"form-control\" type=\"text\" READONLY size=\"2\">
                                                                                </os-p>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><i class=\"fa fa-lightbulb-o \"></i>&nbsp; Manufacturés</td>
                                                                            <td ><os-p >
                                                                                <input name=\"nbPlaces\" value=\"<?php echo \$manufacture; ?>\" style=\"text-align : right\" class=\"form-control\" type=\"text\" READONLY size=\"2\">
                                                                                </os-p>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Places occup&eacute;es</td>
                                                                            <td ><os-p >
                                                                                <input name=\"nbPlaces\" value=\"<?php echo \$placesPrises; ?>\" style=\"text-align : right\" class=\"form-control\" type=\"text\" READONLY size=\"2\">
                                                                                </os-p>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Places disponibles</td>
                                                                            <td ><os-p >
                                                                                <input name=\"nbPlaces\" value=\"<?php echo \$placeslibres; ?>\" style=\"text-align : right\" class=\"form-control\" type=\"text\" READONLY size=\"2\">
                                                                                </os-p>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                    </div>
                                                    <div class=\"tab-pane fade\" id=\"passager_3_modal\">
                                                                <table class=\"table table-hover table-condensed\" style=\"border: 1px solid  red;\">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td><i class=\"fa fa-users\"></i> &nbsp;Total Passagers</td>
                                                                            <td ><os-p >
                                                                                <input name=\"nbPlaces\" value=\"<?php echo (\$alimentaire + \$fruitLegume + \$manufacture - \$aboAlim - \$aboFL - \$aboManu ) ; ?>\" style=\"text-align : right\" class=\"form-control\" type=\"text\" READONLY size=\"2\">
                                                                                </os-p>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Abonnés -> Passagers</td>
                                                                            <td ><os-p >
                                                                                <input name=\"nbPlaces\" value=\"<?php echo (\$cptBasculeAboPass); ?>\" style=\"text-align : right\" class=\"form-control\" type=\"text\" READONLY size=\"2\">
                                                                                </os-p>
                                                                            </td>
                                                                        </tr>                                                    
                                                                        <tr>
                                                                            <td>Places  dispo.</td>
                                                                            <td ><os-p >
                                                                                <input name=\"nbPlaces\" value=\"<?php echo \$placeslibres; ?>\" style=\"text-align : right\" class=\"form-control\" type=\"text\" READONLY size=\"2\">
                                                                                </os-p>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><i class=\"fa fa-leaf\"></i>&nbsp; Alimentaires</td>
                                                                            <td ><os-p >
                                                                                <input name=\"nbPlaces\" value=\"<?php echo (\$alimentaire - \$aboAlim); ?>\" style=\"text-align : right\" class=\"form-control\" type=\"text\" READONLY size=\"2\">
                                                                                </os-p>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><i class=\"fa fa-lemon-o\"></i>&nbsp;Primeurs</td>
                                                                            <td ><os-p >
                                                                                <input name=\"nbPlaces\" value=\"<?php echo (\$fruitLegume - \$aboFL); ?>\" style=\"text-align : right\" class=\"form-control\" type=\"text\" READONLY size=\"2\">
                                                                                </os-p>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><i class=\"fa fa-lightbulb-o \"></i>&nbsp; Manufacturés</td>
                                                                            <td ><os-p >
                                                                                <input name=\"nbPlaces\" value=\"<?php echo (\$manufacture - \$aboManu); ?>\" style=\"text-align : right\" class=\"form-control\" type=\"text\" READONLY size=\"2\">
                                                                                </os-p>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                    </div>
                                                    <div class=\"tab-pane fade\" id=\"abonnes_3_modal\">
                                                        <table class=\"table table-hover table-condensed\" style=\"border: 1px solid  blue;\">
                                                            <tbody>
                                                                        <tr>
                                                                            <td><i class=\"fa fa-users\"></i>&nbsp;Abonnés présents</td>
                                                                            <td ><os-p >
                                                                                <input name=\"nbPlaces\" value=\"<?php echo (\$totalAbo) ; ?>\" style=\"text-align : right\" class=\"form-control\" type=\"text\" READONLY size=\"2\">
                                                                                </os-p>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Abonnés -> Passagers</td>
                                                                            <td ><os-p >
                                                                                <input name=\"nbPlaces\" value=\"<?php echo (\$cptBasculeAboPass); ?>\" style=\"text-align : right\" class=\"form-control\" type=\"text\" READONLY size=\"2\">
                                                                                </os-p>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><i class=\"fa fa-users\"></i> &nbsp;Total Abonnés</td>
                                                                            <td ><os-p >
                                                                                <input name=\"nbPlaces\" value=\"<?php echo (\$aboAlim + \$aboFL + \$aboManu + \$cptBasculeAboPass) ; ?>\" style=\"text-align : right\" class=\"form-control\" type=\"text\" READONLY size=\"2\">
                                                                                </os-p>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><i class=\"fa fa-leaf\"></i>&nbsp; Alimentaires</td>
                                                                            <td ><os-p >
                                                                                <input name=\"nbPlaces\" value=\"<?php echo (\$aboAlim); ?>\" style=\"text-align : right\" class=\"form-control\" type=\"text\" READONLY size=\"2\">
                                                                                </os-p>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><i class=\"fa fa-lemon-o\"></i>&nbsp;Primeurs</td>
                                                                            <td ><os-p >
                                                                                <input name=\"nbPlaces\" value=\"<?php echo (\$aboFL); ?>\" style=\"text-align : right\" class=\"form-control\" type=\"text\" READONLY size=\"2\">
                                                                                </os-p>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><i class=\"fa fa-lightbulb-o \"></i>&nbsp; Manufacturés</td>
                                                                            <td ><os-p >
                                                                                <input name=\"nbPlaces\" value=\"<?php echo (\$aboManu); ?>\" style=\"text-align : right\" class=\"form-control\" type=\"text\" READONLY size=\"2\">
                                                                                </os-p>
                                                                            </td>
                                                                        </tr>

                                                            </tbody>
                                                        </table>
                                                    </div>
                                    </div>
                                </div>
                            </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div>
                    </div>
                    <!-- /.panel -->
                </div><!--div /. class=\"col-lg-4\"-->
            
            </div><!-- / première Ligne-->
          
        </div><!-- / page-wrapper -->
    </div><!-- /#fin de conteneur- -->

 
  </div></body>

<h2>Hello {{ prenom }} ! </h2>

{% include \"PilotParcLoginBundle:Default:test.html.twig\" %}


<a href=\"{{path('pilot_parc_login_logout')}}\" >Se déconnecter</a>
    {%endblock%}", "PilotParcLoginBundle:Default:welcome.html.twig", "/var/www/html/PilotParc/src/PilotParc/LoginBundle/Resources/views/Default/welcome.html.twig");
    }
}
