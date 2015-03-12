<?php

/* PgGsbFraisBundle::layout.html.twig */
class __TwigTemplate_8b33ec806f211c1d44607332b8d16a8798161379a94a1d4c29b9c47840e24000 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'body' => array($this, 'block_body'),
            'bloc1' => array($this, 'block_bloc1'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\"
    \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"fr\" lang=\"fr\">
    <head>
        <title>Intranet du Laboratoire Galaxy-Swiss Bourdin</title>
        <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />
        <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gsbfrais/styles/styles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"./images/favicon.ico\" />
    </head>
    <body>
        <div id=\"page\">
            <div id=\"entete\">
                <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gsbfrais/images/logo.jpg"), "html", null, true);
        echo "\" id=\"logoGSB\" alt=\"Laboratoire Galaxy-Swiss Bourdin\" title=\"Laboratoire Galaxy-Swiss Bourdin\" />
                <h1>Suivi du remboursement des frais</h1>
            </div>
            ";
        // line 16
        $this->displayBlock('menu', $context, $blocks);
        // line 18
        echo "            ";
        $this->displayBlock('body', $context, $blocks);
        // line 22
        echo "        </div>
    </body>
</html>
";
    }

    // line 16
    public function block_menu($context, array $blocks = array())
    {
        // line 17
        echo "            ";
    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        // line 19
        echo "                ";
        $this->displayBlock('bloc1', $context, $blocks);
        // line 21
        echo "            ";
    }

    // line 19
    public function block_bloc1($context, array $blocks = array())
    {
        // line 20
        echo "                ";
    }

    public function getTemplateName()
    {
        return "PgGsbFraisBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 20,  74 => 19,  70 => 21,  67 => 19,  64 => 18,  60 => 17,  57 => 16,  50 => 22,  47 => 18,  45 => 16,  39 => 13,  30 => 7,  22 => 1,);
    }
}
