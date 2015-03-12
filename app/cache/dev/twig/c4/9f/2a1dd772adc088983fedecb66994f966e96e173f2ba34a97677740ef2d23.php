<?php

/* PgGsbFraisBundle:SaisirFrais:saisirfraishorsforfait.html.twig */
class __TwigTemplate_c49f2a1dd772adc088983fedecb66994f966e96e173f2ba34a97677740ef2d23 extends Twig_Template
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
    <table class=\"listeLegere\">
        <captation>Descriptif des éléments hors forfaits - </captation>
        <tr>
            <th class=\"date\">Date</th>
            <th class=\"libelle\">Libellé</th>
            <th class=\"montant\">Montant</th>
        </tr>

        ";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesfraishorsforfait"]) ? $context["lesfraishorsforfait"] : $this->getContext($context, "lesfraishorsforfait")));
        foreach ($context['_seq'] as $context["_key"] => $context["unfrais"]) {
            // line 12
            echo "            ";
            $context["date"] = $this->getAttribute($context["unfrais"], "date", array());
            // line 13
            echo "            ";
            $context["libelle"] = $this->getAttribute($context["unfrais"], "libelle", array());
            // line 14
            echo "            ";
            $context["montant"] = $this->getAttribute($context["unfrais"], "montant", array());
            // line 15
            echo "            ";
            $context["idfrais"] = $this->getAttribute($context["unfrais"], "id", array());
            // line 16
            echo "            <tr>
                <td> ";
            // line 17
            echo twig_escape_filter($this->env, (isset($context["date"]) ? $context["date"] : $this->getContext($context, "date")), "html", null, true);
            echo " </td>
                <td> ";
            // line 18
            echo twig_escape_filter($this->env, (isset($context["libelle"]) ? $context["libelle"] : $this->getContext($context, "libelle")), "html", null, true);
            echo " </td>
                <td> ";
            // line 19
            echo twig_escape_filter($this->env, (isset($context["montant"]) ? $context["montant"] : $this->getContext($context, "montant")), "html", null, true);
            echo " </td>
                <td> <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pg_gsb_frais_supprimerfraishorsforfait", array("id" => (isset($context["idfrais"]) ? $context["idfrais"] : $this->getContext($context, "idfrais")))), "html", null, true);
            echo "\"
                        onclick=\"return confirm('Voulez-vous vraiment supprimer ce frais ?');\">
                        Supprimer ce frais
                    </a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unfrais'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "    </table>
    <form action=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("pg_gsb_frais_validerfraishorsforfait");
        echo "\" method =\"POST\">
        <div class=\"corpsForm\">
            <fieldset>
                <legend>Nouvel élément hors forfait</legend>
                <P>
                    <label for=\"txtDateHF\">Date(jj/mm/aaaa):</label>
                    <input type=\"text\" id=\"txtDateHF\" name=\"dateFrais\" size=\"10\" maxlength=\"10\" value=\"\">
                </p>
                <P>
                    <label for=\"txtLibelleHF\">Libelle:</label>
                    <input type=\"text\" id=\"txtLibelleHF\" name=\"libelle\" size=\"70\" maxlength=\"256\" value=\"\">
                </p>
                <P>
                    <label for=\"txtMontantHF\">Montant:</label>
                    <input type=\"text\" id=\"txtMontantHF\" name=\"montant\" size=\"10\" maxlength=\"10\" value=\"\">
                </p>
            </fieldset>
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
        return "PgGsbFraisBundle:SaisirFrais:saisirfraishorsforfait.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 28,  74 => 27,  61 => 20,  57 => 19,  53 => 18,  49 => 17,  46 => 16,  43 => 15,  40 => 14,  37 => 13,  34 => 12,  30 => 11,  19 => 2,);
    }
}
