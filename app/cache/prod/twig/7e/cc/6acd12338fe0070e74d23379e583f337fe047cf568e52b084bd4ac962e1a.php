<?php

/* UtilisateursBundle:Default/layout:facturePDF.html.twig */
class __TwigTemplate_7ecc6acd12338fe0070e74d23379e583f337fe047cf568e52b084bd4ac962e1a extends Twig_Template
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
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>Facture</title>
        <link href=\"./css/facture.css\" rel=\"stylesheet\" type=\"text/css\" />
    </head>
    <body>
        <h1>DevAndClick</h1>
        <table id=\"enTete\">
            <tr>
                <td colspan=\"1\"></td>
                <td colspan=\"1\"><h1>Facture</h1></td>
                <td colspan=\"1\"></td>
            </tr>
            <tr>
                <td width=\"80\">Page</td>
                <td width=\"100\">Date</td>
                <td width=\"120\">Ref</td>
            </tr>
            <tr>
                <td class=\"color\">[[page_nb]]</td>
                <td class=\"color\">";
        // line 23
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["facture"]) ? $context["facture"] : null), "date"), "d-m-Y"), "html", null, true);
        echo "</td>
                <td class=\"color\">";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["facture"]) ? $context["facture"] : null), "reference"), "html", null, true);
        echo "</td>
            </tr>
        </table>
        <ul id=\"coordonnes\">
            <li>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["facture"]) ? $context["facture"] : null), "commande"), "facturation"), "nom"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["facture"]) ? $context["facture"] : null), "commande"), "facturation"), "prenom"), "html", null, true);
        echo "</li>
            <li>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["facture"]) ? $context["facture"] : null), "commande"), "facturation"), "adresse"), "html", null, true);
        echo "</li>
            <li>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["facture"]) ? $context["facture"] : null), "commande"), "facturation"), "cp"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["facture"]) ? $context["facture"] : null), "commande"), "facturation"), "ville"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["facture"]) ? $context["facture"] : null), "commande"), "facturation"), "pays"), "html", null, true);
        echo "</li>
        </ul>
        <table id=\"entity\">
            <tr>
                <td width=\"280\">DESIGNATION</td>
                <td width=\"105\">QUANTITE</td>
                <td width=\"100\">P.U - HT</td>
                <td width=\"105\">MONTANT HT</td>
                <td width=\"105\">MONTANT TTC</td>
            </tr>
                ";
        // line 40
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["facture"]) ? $context["facture"] : null), "commande"), "produit"));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 41
            echo "                <tr>
                    <td class=\"color\">";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : null), "reference"), "html", null, true);
            echo "</td>
                    <td class=\"color\">";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : null), "quantite"), "html", null, true);
            echo "</td>
                    <td class=\"color\">";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : null), "prixHT"), "html", null, true);
            echo " €</td>
                    <td class=\"color\">";
            // line 45
            echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["produit"]) ? $context["produit"] : null), "prixHT") * $this->getAttribute((isset($context["produit"]) ? $context["produit"] : null), "quantite")), "html", null, true);
            echo " €</td>
                    <td class=\"color\">";
            // line 46
            echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["produit"]) ? $context["produit"] : null), "prixTTC") * $this->getAttribute((isset($context["produit"]) ? $context["produit"] : null), "quantite")), "html", null, true);
            echo " €</td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "        </table>
        <table id=\"total\">
            <tr>
                <td width=\"110\">TOTAL HT :</td>
                <td width=\"100\" class=\"color\">";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["facture"]) ? $context["facture"] : null), "commande"), "prixHT"), "html", null, true);
        echo " €</td>
            </tr>
            ";
        // line 55
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["facture"]) ? $context["facture"] : null), "commande"), "tva"));
        foreach ($context['_seq'] as $context["key"] => $context["tva"]) {
            // line 56
            echo "            <tr>
                <td width=\"110\">TVA <span class=\"color min\">";
            // line 57
            echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
            echo "</span> :</td>
                <td width=\"100\" class=\"color\">";
            // line 58
            echo twig_escape_filter($this->env, (isset($context["tva"]) ? $context["tva"] : null), "html", null, true);
            echo " €</td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['tva'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "            <tr>
                <td width=\"110\">TOTAL TTC :</td>
                <td width=\"100\" class=\"color\">";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["facture"]) ? $context["facture"] : null), "commande"), "prixTTC"), "html", null, true);
        echo " €</td>
            </tr>
        </table>
        <div id=\"footer\">
            <span class=\"color strong\">";
        // line 67
        echo twig_escape_filter($this->env, (isset($context["adresse"]) ? $context["adresse"] : null), "html", null, true);
        echo "</span>
            <br />
            ";
        // line 69
        echo twig_escape_filter($this->env, (isset($context["telephone"]) ? $context["telephone"] : null), "html", null, true);
        echo "
        </div>
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "UtilisateursBundle:Default/layout:facturePDF.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 69,  124 => 55,  104 => 46,  34 => 12,  58 => 16,  70 => 11,  129 => 43,  96 => 44,  90 => 27,  84 => 24,  191 => 75,  180 => 70,  172 => 68,  155 => 67,  74 => 13,  37 => 8,  213 => 78,  202 => 73,  184 => 71,  170 => 63,  161 => 61,  150 => 56,  113 => 49,  174 => 65,  146 => 55,  100 => 45,  81 => 40,  192 => 45,  188 => 70,  181 => 39,  134 => 28,  114 => 26,  23 => 4,  77 => 14,  53 => 21,  65 => 24,  52 => 7,  83 => 27,  153 => 5,  148 => 63,  127 => 47,  120 => 39,  76 => 23,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 12,  140 => 55,  132 => 51,  128 => 56,  111 => 35,  107 => 42,  61 => 23,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 76,  204 => 72,  179 => 67,  159 => 62,  143 => 12,  135 => 58,  131 => 57,  119 => 53,  108 => 22,  102 => 31,  71 => 30,  67 => 19,  63 => 21,  59 => 19,  47 => 24,  38 => 8,  94 => 28,  89 => 31,  85 => 41,  79 => 27,  75 => 21,  68 => 22,  56 => 9,  50 => 16,  29 => 3,  87 => 35,  72 => 20,  55 => 15,  21 => 2,  26 => 12,  98 => 41,  93 => 40,  88 => 42,  78 => 34,  46 => 11,  27 => 4,  40 => 18,  44 => 10,  35 => 6,  31 => 4,  43 => 23,  41 => 14,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 60,  156 => 59,  151 => 63,  142 => 63,  138 => 52,  136 => 50,  123 => 46,  121 => 51,  117 => 50,  115 => 44,  105 => 40,  101 => 38,  91 => 37,  69 => 25,  66 => 22,  62 => 27,  49 => 8,  24 => 7,  32 => 4,  25 => 5,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 72,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 69,  173 => 33,  168 => 72,  164 => 62,  162 => 59,  154 => 30,  149 => 60,  147 => 58,  144 => 61,  141 => 53,  133 => 6,  130 => 57,  125 => 51,  122 => 51,  116 => 38,  112 => 43,  109 => 45,  106 => 44,  103 => 32,  99 => 37,  95 => 28,  92 => 43,  86 => 36,  82 => 29,  80 => 27,  73 => 26,  64 => 30,  60 => 29,  57 => 19,  54 => 28,  51 => 14,  48 => 12,  45 => 16,  42 => 18,  39 => 9,  36 => 17,  33 => 7,  30 => 2,);
    }
}
