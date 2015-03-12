<?php

/* PgGsbFraisBundle::accueil.html.twig */
class __TwigTemplate_4a59a738d0da65fb9583cb8eac03c6928feba74b9dc76c7bf1d29bba4db94cc0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("PgGsbFraisBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PgGsbFraisBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_menu($context, array $blocks = array())
    {
        // line 3
        echo "
    <!-- Division pour le sommaire -->
    <div id=\"menuGauche\">
        <div id=\"infosUtil\">
            <h3>
                ";
        // line 8
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "nom"), "method", true, true)) {
            // line 9
            echo "                    Visteur: bonjour ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "nom"), "method"), "html", null, true);
            echo " <br>
                ";
        }
        // line 10
        echo " 
            </h3>
        </div>  
        <ul id=\"menuList\">
            <li class=\"smenu\">
                <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("pg_gsb_frais_saisirfrais");
        echo "\" title=\"Saisie fiche de frais \">Saisie fiche de frais</a>
            </li>
            <li class=\"smenu\">
                ";
        // line 19
        echo "                <a href=\"";
        echo $this->env->getExtension('routing')->getPath("pg_gsb_frais_listefrais");
        echo "\" title=\"Consultation de mes fiches de frais\">Mes fiches de frais</a>
            </li>
            <li class=\"smenu\">
                <a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("pg_gsb_frais_deconnexion");
        echo "\" title=\"Se déconnecter\">Déconnexion</a>
            </li>
            <li class=\"smenu\">
                <a href=\"index.php?uc=validerFrais&action=voirFrais\" title=\"Se déconnecter\">Valider les frais</a>
            </li>
        </ul>
    </div>
                
";
    }

    public function getTemplateName()
    {
        return "PgGsbFraisBundle::accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 22,  67 => 19,  61 => 15,  54 => 10,  48 => 9,  46 => 8,  39 => 3,  36 => 2,  11 => 1,);
    }
}
