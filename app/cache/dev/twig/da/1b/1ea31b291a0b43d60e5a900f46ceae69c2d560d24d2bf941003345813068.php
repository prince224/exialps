<?php

/* ::layout.html.twig */
class __TwigTemplate_da1b1ea31b291a0b43d60e5a900f46ceae69c2d560d24d2bf941003345813068 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <title>EXIA Gestion LPS </title>
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/css/bootstrap-theme.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

</head>

<body class=\"container\">
    <header>
        <nav class=\"navbar navbar-default\" role=\"navigation\">
          <div class=\"container-fluid\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
              <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
              </button>
              <a class=\"navbar-brand\" href=\"#\">ACCUEIL</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
              <ul class=\"nav navbar-nav\">
                <li class=\"dropdown\">
                  <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">CLIENTS<span class=\"caret\"></span></a>
                  <ul class=\"dropdown-menu\" role=\"menu\">
                    <li><a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("Exia_Lps_clients_proprietaires_homepage");
        echo " \">NOS PROPRIETAIRES</a></li>
                    <li><a href=\"#\">NOS LOCATAIRES</a></li>
                    <li class=\"divider\"></li>
                    <li><a href=\"#\">NOS FOURNISSEURS</a></li>
                    
                  </ul>
                </li>
                <li class=\"dropdown\">
                  <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">TRAVAUX<span class=\"caret\"></span></a>
                  <ul class=\"dropdown-menu\" role=\"menu\">
                    <li><a href=\"#\">NOS INTERVENTIONS</a></li>
                    <li><a href=\"#\">NOS CHANTIERS</a></li>
                    <li class=\"divider\"></li>
                    <li><a href=\"#\">CREER UN DEVIS</a></li>
                  </ul>
                </li>

                <li class=\"dropdown\">
                  <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">RESSOURCES<span class=\"caret\"></span></a>
                  <ul class=\"dropdown-menu\" role=\"menu\">
                    <li><a href=\"#\">NOS EMPLOYES</a></li>
                    <li><a href=\"#\">NOS SOUS-TRAITANTS</a></li>
                    <li class=\"divider\"></li>
                    <li><a href=\"#\">LISTE DES RESSOURCES</a></li>
                  </ul>
                </li>

                <!--
                <li class=\"dropdown\">
                  <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">DEBOURSES<span class=\"caret\"></span></a>
                  <ul class=\"dropdown-menu\" role=\"menu\">
                    <li><a href=\"#\">INTERVENTIONS</a></li>
                    <li><a href=\"#\">CHANTIERS</a></li>
                    <li class=\"divider\"></li>
                    <li><a href=\"#\">LISTE DES DEBOURSES</a></li>
                  </ul>
                </li>

                <li class=\"dropdown\">
                  <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">FACTURATIONS<span class=\"caret\"></span></a>
                  <ul class=\"dropdown-menu\" role=\"menu\">
                    <li><a href=\"#\">SITUATION</a></li>
                    <li><a href=\"#\">DEFINITIVES</a></li>
                    <li class=\"divider\"></li>
                    <li><a href=\"#\">LISTE DES FACTURES</a></li>
                  </ul>
                </li>
              -->

              </ul>
              <form class=\"navbar-form navbar-left\" role=\"search\">
                <div class=\"form-group\">
                  <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
                </div>
                <button type=\"submit\" class=\"btn btn-default\">Submit</button>
              </form>
              <ul class=\"nav navbar-nav navbar-right\">
                <li><a href=\"#\">Link</a></li>
                <li class=\"dropdown\">
                  <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Dropdown <span class=\"caret\"></span></a>
                  <ul class=\"dropdown-menu\" role=\"menu\">
                    <li><a href=\"#\">Action</a></li>
                    <li><a href=\"#\">Another action</a></li>
                    <li><a href=\"#\">Something else here</a></li>
                    <li class=\"divider\"></li>
                    <li><a href=\"#\">Separated link</a></li>
                  </ul>
                </li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>

    </header>
    ";
        // line 105
        $this->displayBlock('body', $context, $blocks);
        // line 108
        echo "
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>

    <script src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/js/bootstrap.js"), "html", null, true);
        echo " \"></script>
    
    <script type=\"text/javascript\">
        \$(document).ready(function(){
            //alert('yep');
        });
    </script>
</body>
</html>";
    }

    // line 105
    public function block_body($context, array $blocks = array())
    {
        // line 106
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 106,  155 => 105,  142 => 111,  137 => 108,  135 => 105,  58 => 31,  30 => 6,  26 => 5,  20 => 1,);
    }
}
