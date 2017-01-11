<?php

/* EcommerceBundle:Default/panier/layout:panier.html.twig */
class __TwigTemplate_73b3448d9757fad5f60a0cfe72de0fd7e741448fb922bdfddfbc5c29d27b03c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout/layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["totalHT"] = 0;
        // line 4
        $context["totalTTC"] = 0;
        // line 5
        $context["refTva"] = array();
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 7
            $context["refTva"] = twig_array_merge((isset($context["refTva"]) ? $context["refTva"] : null), array(("%" . $this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : null), "tva"), "valeur")) => 0));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "<div class=\"container\">
    <div class=\"row\">
        
        <div class=\"span3\">
            ";
        // line 15
        $this->env->loadTemplate("::modulesUsed/navigation.html.twig")->display($context);
        // line 16
        echo "        </div>
        
        <div class=\"span9\">
            
            ";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "flashbag"), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 21
            echo "                <div class=\"alert alert-success\">
                    ";
            // line 22
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : null), "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "            
            <h2>Votre panier</h2>
            <table class=\"table table-striped table-hover\">
                <thead>
                    <tr>
                        <th>Références</th>
                        <th>Quantité</th>
                        <th>Prix unitaire</th>
                        <th>Total HT</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 37
        if ((twig_length_filter($this->env, (isset($context["produits"]) ? $context["produits"] : null)) == 0)) {
            // line 38
            echo "                        <tr>
                            <td colspan=\"4\"><center>Aucun articles dans votre panier</center></td>
                        </tr>
                    ";
        }
        // line 42
        echo "                    
                    ";
        // line 43
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 44
            echo "                    <tr>
                        <form action=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ajouter", array("id" => $this->getAttribute((isset($context["produit"]) ? $context["produit"] : null), "id"))), "html", null, true);
            echo "\" method=\"get\">
                            <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : null), "nom"), "html", null, true);
            echo "</td>
                            <td>
                                <select name=\"qte\" class=\"span1\" onChange=\"this.form.submit()\">
                                    ";
            // line 49
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 10));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 50
                echo "                                        <option value=\"";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
                echo "\" ";
                if (((isset($context["i"]) ? $context["i"] : null) == $this->getAttribute((isset($context["panier"]) ? $context["panier"] : null), $this->getAttribute((isset($context["produit"]) ? $context["produit"] : null), "id"), array(), "array"))) {
                    echo " selected=\"selected\" ";
                }
                echo ">";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
                echo "</option>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "                                </select>&nbsp;
                                <a href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("supprimer", array("id" => $this->getAttribute((isset($context["produit"]) ? $context["produit"] : null), "id"))), "html", null, true);
            echo "\"><i class=\"icon-trash\"></i></a>
                            </td>
                            <td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : null), "prix"), "html", null, true);
            echo " €</td>
                            <td>";
            // line 56
            echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["produit"]) ? $context["produit"] : null), "prix") * $this->getAttribute((isset($context["panier"]) ? $context["panier"] : null), $this->getAttribute((isset($context["produit"]) ? $context["produit"] : null), "id"), array(), "array")), "html", null, true);
            echo " €</td>
                        </form>
                    </tr>
                    ";
            // line 59
            $context["totalHT"] = ((isset($context["totalHT"]) ? $context["totalHT"] : null) + ($this->getAttribute((isset($context["produit"]) ? $context["produit"] : null), "prix") * $this->getAttribute((isset($context["panier"]) ? $context["panier"] : null), $this->getAttribute((isset($context["produit"]) ? $context["produit"] : null), "id"), array(), "array")));
            // line 60
            echo "                    ";
            $context["totalTTC"] = ((isset($context["totalTTC"]) ? $context["totalTTC"] : null) + $this->env->getExtension('tva_extension')->calculTva(($this->getAttribute((isset($context["produit"]) ? $context["produit"] : null), "prix") * $this->getAttribute((isset($context["panier"]) ? $context["panier"] : null), $this->getAttribute((isset($context["produit"]) ? $context["produit"] : null), "id"), array(), "array")), $this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : null), "tva"), "multiplicate")));
            // line 61
            echo "                    ";
            $context["refTva"] = twig_array_merge((isset($context["refTva"]) ? $context["refTva"] : null), array(("%" . $this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : null), "tva"), "valeur")) => ($this->getAttribute((isset($context["refTva"]) ? $context["refTva"] : null), ("%" . $this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : null), "tva"), "valeur")), array(), "array") + $this->env->getExtension('montant_tva_extension')->montantTva(($this->getAttribute((isset($context["produit"]) ? $context["produit"] : null), "prix") * $this->getAttribute((isset($context["panier"]) ? $context["panier"] : null), $this->getAttribute((isset($context["produit"]) ? $context["produit"] : null), "id"), array(), "array")), $this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : null), "tva"), "multiplicate")))));
            // line 62
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "                </tbody>
            </table>
            ";
        // line 65
        if ((twig_length_filter($this->env, (isset($context["produits"]) ? $context["produits"] : null)) != 0)) {
            // line 66
            echo "            <dl class=\"dl-horizontal pull-right\">
                <dt>Total HT :</dt><dd>";
            // line 67
            echo twig_escape_filter($this->env, (isset($context["totalHT"]) ? $context["totalHT"] : null), "html", null, true);
            echo " €</dd>
                
                ";
            // line 69
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["refTva"]) ? $context["refTva"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["tva"]) {
                // line 70
                echo "                    <dt>TVA ";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo " :</dt><dd>";
                echo twig_escape_filter($this->env, (isset($context["tva"]) ? $context["tva"] : null), "html", null, true);
                echo " €</dd>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['tva'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "
                <dt>Total TTC :</dt><dd>";
            // line 73
            echo twig_escape_filter($this->env, (isset($context["totalTTC"]) ? $context["totalTTC"] : null), "html", null, true);
            echo " €</dd>
            </dl>
            <div class=\"clearfix\"></div>
            <a href=\"";
            // line 76
            echo $this->env->getExtension('routing')->getPath("livraison");
            echo "\" class=\"btn btn-success pull-right\">Valider mon panier</a>
            ";
        }
        // line 78
        echo "            <a href=\"";
        echo $this->env->getExtension('routing')->getPath("produits");
        echo "\" class=\"btn btn-primary\">Continuer mes achats</a>
        </div>

    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default/panier/layout:panier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 78,  202 => 73,  184 => 69,  170 => 63,  161 => 61,  150 => 56,  113 => 46,  174 => 65,  146 => 55,  100 => 39,  81 => 26,  192 => 45,  188 => 70,  181 => 39,  134 => 28,  114 => 26,  23 => 2,  77 => 25,  53 => 15,  65 => 21,  52 => 18,  83 => 27,  153 => 5,  148 => 65,  127 => 5,  120 => 50,  76 => 24,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 12,  140 => 55,  132 => 51,  128 => 49,  111 => 37,  107 => 36,  61 => 20,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 76,  204 => 72,  179 => 67,  159 => 6,  143 => 12,  135 => 53,  131 => 27,  119 => 49,  108 => 22,  102 => 43,  71 => 30,  67 => 26,  63 => 15,  59 => 12,  47 => 11,  38 => 6,  94 => 28,  89 => 31,  85 => 38,  79 => 27,  75 => 26,  68 => 22,  56 => 19,  50 => 10,  29 => 5,  87 => 25,  72 => 16,  55 => 16,  21 => 2,  26 => 3,  98 => 31,  93 => 38,  88 => 32,  78 => 21,  46 => 14,  27 => 4,  40 => 11,  44 => 10,  35 => 7,  31 => 6,  43 => 8,  41 => 7,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 60,  156 => 59,  151 => 63,  142 => 63,  138 => 52,  136 => 56,  123 => 50,  121 => 51,  117 => 50,  115 => 43,  105 => 40,  101 => 32,  91 => 37,  69 => 17,  66 => 16,  62 => 20,  49 => 15,  24 => 4,  32 => 4,  25 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 72,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 66,  173 => 33,  168 => 72,  164 => 62,  162 => 59,  154 => 30,  149 => 51,  147 => 58,  144 => 49,  141 => 53,  133 => 6,  130 => 57,  125 => 44,  122 => 51,  116 => 49,  112 => 48,  109 => 45,  106 => 44,  103 => 32,  99 => 42,  95 => 28,  92 => 42,  86 => 32,  82 => 22,  80 => 19,  73 => 19,  64 => 26,  60 => 22,  57 => 18,  54 => 10,  51 => 10,  48 => 16,  45 => 16,  42 => 12,  39 => 7,  36 => 5,  33 => 4,  30 => 7,);
    }
}
