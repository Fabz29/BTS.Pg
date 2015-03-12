<?php

/* PgGsbFraisBundle:Home:connexion.html.twig */
class __TwigTemplate_6bee0fcc8bcee14e7669fe2032cf2b0c7bb0438510562de0e22f2d9c2d7cd6fa extends Twig_Template
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
            'body' => array($this, 'block_body'),
            'bloc1' => array($this, 'block_bloc1'),
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
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        $this->displayBlock('bloc1', $context, $blocks);
    }

    public function block_bloc1($context, array $blocks = array())
    {
        // line 4
        echo "        <div id=\"contenu\">
            <h2>Authentification utilisateur</h2>
            ";
        // line 6
        if (array_key_exists("message", $context)) {
            // line 7
            echo "                <div class=\"erreur\">
                    <ul>
                        ";
            // line 9
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
            echo "
                    </ul>
                </div>
            ";
        }
        // line 13
        echo "            <form method=\"POST\" action=\"";
        echo $this->env->getExtension('routing')->getPath("pg_gsb_frais_validerconnexion");
        echo "\">
                <p>
                    <label for=\"nom\">Login*</label>
                    <input id=\"login\" type=\"text\" name=\"login\"  size=\"30\" maxlength=\"45\">
                </p>
                <p>
                    <label for=\"mdp\">Mot de passe*</label>
                    <input id=\"mdp\"  type=\"password\"  name=\"mdp\" size=\"30\" maxlength=\"45\">
                </p>
                <p>
                    <input type=\"submit\" value=\"Valider\" name=\"valider\">
                    <input type=\"reset\" value=\"Annuler\" name=\"annuler\"> 
                </p>
            </form>
        </div>
    ";
    }

    public function getTemplateName()
    {
        return "PgGsbFraisBundle:Home:connexion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 13,  57 => 9,  53 => 7,  51 => 6,  47 => 4,  40 => 3,  37 => 2,  11 => 1,);
    }
}
