<?php

/* PgGsbFraisBundle:SaisirFrais:saisirfraisforfait.html.twig */
class __TwigTemplate_b658c7e5ee42f2170b3d811571784b310eb478d49a579739b2680b003234b4df extends Twig_Template
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
        // line 2
        echo "<div id=\"contenu\">
    <h2>Renseigner ma fiche de frais du mois ";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["nummois"]) ? $context["nummois"] : $this->getContext($context, "nummois")), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, (isset($context["numannee"]) ? $context["numannee"] : $this->getContext($context, "numannee")), "html", null, true);
        echo " </h2>
    <form action=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("pg_gsb_frais_saisirfrais");
        echo "\" method =\"POST\">
        <div class=\"corpsForm\">
            <fieldset>
                <legend>Eléments forfaitisés</legend>
                ";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesfraisforfait"]) ? $context["lesfraisforfait"] : $this->getContext($context, "lesfraisforfait")));
        foreach ($context['_seq'] as $context["_key"] => $context["unfrais"]) {
            // line 9
            echo "                    ";
            $context["idfrais"] = $this->getAttribute($context["unfrais"], "idfrais", array());
            // line 10
            echo "                    ";
            $context["libelle"] = $this->getAttribute($context["unfrais"], "libelle", array());
            // line 11
            echo "                    ";
            $context["quantite"] = $this->getAttribute($context["unfrais"], "quantite", array());
            // line 12
            echo "
                    <P>
                        <label for=\"idFrais\">";
            // line 14
            echo twig_escape_filter($this->env, (isset($context["libelle"]) ? $context["libelle"] : $this->getContext($context, "libelle")), "html", null, true);
            echo "</label>
                        <input type=\"text\" id=\"idFrais\" name=\"lesFrais[";
            // line 15
            echo twig_escape_filter($this->env, (isset($context["idfrais"]) ? $context["idfrais"] : $this->getContext($context, "idfrais")), "html", null, true);
            echo "]\" size=\"10\"
                               maxlength=\"5\" value=\"";
            // line 16
            echo twig_escape_filter($this->env, (isset($context["quantite"]) ? $context["quantite"] : $this->getContext($context, "quantite")), "html", null, true);
            echo "\">
                    </p>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unfrais'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "            </fieldset>
        </div>
        <div class=\"peidForm\">
            <p>
                <input id=\"ok\" type=\"submit\" value=\"Valider\" size=\"20\"/>
                <input id=\"annuler\" type=\"reset\" value=\"Effacer\" size=\"20\"/>
            </p>
        </div>
    </form>
</div>

";
    }

    public function getTemplateName()
    {
        return "PgGsbFraisBundle:SaisirFrais:saisirfraisforfait.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 19,  60 => 16,  56 => 15,  52 => 14,  48 => 12,  45 => 11,  42 => 10,  39 => 9,  35 => 8,  28 => 4,  22 => 3,  19 => 2,);
    }
}
