<?php

/* RessourcesBundle:Client:indexProprietaire.html.twig */
class __TwigTemplate_c449123c0a6f4c4591041feef1cf76bb23b6ae363a610278d661cfc9b04fdf21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "\t<h2> Page index proprietaires</h2>
\t
\t<div class=\"col-md-12\">
\t\t<button href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("Exia_Lps_creation_creer_fiche_client_proprietaire");
        echo " \"> Nouvelle Fiche </button>
\t</div>

\t<div class=\"col-md-12\">
\t\tListes des clients propriétaires :
\t</div>
";
    }

    public function getTemplateName()
    {
        return "RessourcesBundle:Client:indexProprietaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 7,  31 => 4,  28 => 3,);
    }
}
