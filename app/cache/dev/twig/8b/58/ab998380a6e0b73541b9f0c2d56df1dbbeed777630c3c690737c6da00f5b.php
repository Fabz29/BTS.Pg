<?php

/* PgGsbFraisBundle:ListeFrais:listefraishorsforfait.html.twig */
class __TwigTemplate_8b58ab998380a6e0b73541b9f0c2d56df1dbbeed777630c3c690737c6da00f5b extends Twig_Template
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
        // line 1
        echo "<table class=\"listeLegere\">
    <captation>Descriptif des éléments hors forfait - ";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["nbjustificatifs"]) ? $context["nbjustificatifs"] : $this->getContext($context, "nbjustificatifs")), "html", null, true);
        echo " justificatifs reçus - </captation>
    <tr>
        <th class=\"date\">Date</th>
        <th class=\"libelle\">Libellé</th>
        <th class=\"montant\">Montant</th>
    </tr>

    ";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesfraishorsforfait"]) ? $context["lesfraishorsforfait"] : $this->getContext($context, "lesfraishorsforfait")));
        foreach ($context['_seq'] as $context["_key"] => $context["unFrais"]) {
            // line 10
            echo "        ";
            $context["date"] = $this->getAttribute($context["unFrais"], "date", array());
            // line 11
            echo "        ";
            $context["libelle"] = $this->getAttribute($context["unFrais"], "libelle", array());
            // line 12
            echo "        ";
            $context["montant"] = $this->getAttribute($context["unFrais"], "montant", array());
            // line 13
            echo "        <tr>
            <td> ";
            // line 14
            echo twig_escape_filter($this->env, (isset($context["date"]) ? $context["date"] : $this->getContext($context, "date")), "html", null, true);
            echo " </td>
            <td> ";
            // line 15
            echo twig_escape_filter($this->env, (isset($context["libelle"]) ? $context["libelle"] : $this->getContext($context, "libelle")), "html", null, true);
            echo " </td>
            <td> ";
            // line 16
            echo twig_escape_filter($this->env, (isset($context["montant"]) ? $context["montant"] : $this->getContext($context, "montant")), "html", null, true);
            echo " </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unFrais'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "</table>
";
    }

    public function getTemplateName()
    {
        return "PgGsbFraisBundle:ListeFrais:listefraishorsforfait.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 19,  56 => 16,  52 => 15,  48 => 14,  45 => 13,  42 => 12,  39 => 11,  36 => 10,  32 => 9,  22 => 2,  19 => 1,);
    }
}
