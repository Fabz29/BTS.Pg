<?php

/* PgGsbFraisBundle:ListeFrais:listeMois.html.twig */
class __TwigTemplate_5c7e6c0dc54265667ffa9a71f912bb62b6a23566e2df11096297e60c20cc6177 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("PgGsbFraisBundle::accueil.html.twig");
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
        return "PgGsbFraisBundle::accueil.html.twig";
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
        // line 34
        echo "    ";
    }

    // line 3
    public function block_bloc1($context, array $blocks = array())
    {
        // line 4
        echo "
        <div id=\"contenu\">
            <h2>Mes fiches de frais</h2>
            <h3>Mois à sélectionner : </h3>
            <form method=\"post\">
                <div class=\"corpsForm\">
                    <p>
                        <label for=\"lstMois\" accesskey=\"n\">Mois : </label>
                        <select id=\"lstMois\" name=\"lstMois\">
                            ";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesmois"]) ? $context["lesmois"] : $this->getContext($context, "lesmois")));
        foreach ($context['_seq'] as $context["_key"] => $context["unMois"]) {
            // line 14
            echo "                                ";
            $context["mois"] = $this->getAttribute($context["unMois"], "mois", array());
            // line 15
            echo "                                ";
            $context["numAnnee"] = $this->getAttribute($context["unMois"], "numAnnee", array());
            // line 16
            echo "                                ";
            $context["numMois"] = $this->getAttribute($context["unMois"], "numMois", array());
            // line 17
            echo "                                ";
            if (((isset($context["mois"]) ? $context["mois"] : $this->getContext($context, "mois")) == (isset($context["lemois"]) ? $context["lemois"] : $this->getContext($context, "lemois")))) {
                // line 18
                echo "                                    <option selected value=\"";
                echo twig_escape_filter($this->env, (isset($context["mois"]) ? $context["mois"] : $this->getContext($context, "mois")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["numMois"]) ? $context["numMois"] : $this->getContext($context, "numMois")), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, (isset($context["numAnnee"]) ? $context["numAnnee"] : $this->getContext($context, "numAnnee")), "html", null, true);
                echo "</option>
                                ";
            } else {
                // line 20
                echo "                                    <option value=\"";
                echo twig_escape_filter($this->env, (isset($context["mois"]) ? $context["mois"] : $this->getContext($context, "mois")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["numMois"]) ? $context["numMois"] : $this->getContext($context, "numMois")), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, (isset($context["numAnnee"]) ? $context["numAnnee"] : $this->getContext($context, "numAnnee")), "html", null, true);
                echo "</option>
                                ";
            }
            // line 22
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unMois'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "                        </select>
                    </p>
                </div>
                <div class=\"piedForm\">
                    <p>
                        <input id=\"ok\" type=\"submit\" value=\"Valider\" size=\"20\" />
                        <input id=\"annuler\" type=\"reset\" value=\"Effacer\" size=\"20\" />
                    </p> 
                </div>
            </form>
        ";
    }

    public function getTemplateName()
    {
        return "PgGsbFraisBundle:ListeFrais:listeMois.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 23,  97 => 22,  87 => 20,  77 => 18,  74 => 17,  71 => 16,  68 => 15,  65 => 14,  61 => 13,  50 => 4,  47 => 3,  43 => 34,  40 => 3,  37 => 2,  11 => 1,);
    }
}
