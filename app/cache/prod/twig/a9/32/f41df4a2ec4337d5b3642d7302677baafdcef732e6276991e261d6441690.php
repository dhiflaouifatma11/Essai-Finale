<?php

/* UtilisateursBundle:Default/layout:facture.html.twig */
class __TwigTemplate_a932f41df4a2ec4337d5b3642d7302677baafdcef732e6276991e261d6441690 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"container\">
    <div class=\"row\">

        <div class=\"span3\">
            ";
        // line 8
        $this->env->loadTemplate("::modulesUsed/navigation.html.twig")->display($context);
        // line 9
        echo "            ";
        $this->env->loadTemplate("UtilisateursBundle:Default:modulesUsed/utilisateursConnecte.html.twig")->display($context);
        echo "   
            ";
        // line 10
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("EcommerceBundle:Panier:menu"), array());
        // line 11
        echo "            </div>\t\t\t\t
            <div class=\"span9\">
                
                ";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "flashbag"), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 15
            echo "                    <div class=\"alert alert-success\">
                        ";
            // line 16
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : null), "html", null, true);
            echo "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "flashbag"), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 20
            echo "                    <div class=\"alert alert-errors\">
                        ";
            // line 21
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : null), "html", null, true);
            echo "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "                
                <h2>Factures</h2>
                <form>
                    <table class=\"table table-striped table-hover\">
                        <thead>
                            <tr>
                                <th>Références</th>
                                <th>Date</th>
                                <th>Prix TTC</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 37
        if ((twig_length_filter($this->env, (isset($context["factures"]) ? $context["factures"] : null)) == 0)) {
            // line 38
            echo "                                <tr>
                                    <td colspan=\"4\"><center>Ancunne facture actuellement.</center></td>
                                </tr>
                            ";
        }
        // line 42
        echo "                            ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["factures"]) ? $context["factures"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["facture"]) {
            // line 43
            echo "                            <tr>
                                <td>ref : ";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["facture"]) ? $context["facture"] : null), "reference"), "html", null, true);
            echo "</td>
                                <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["facture"]) ? $context["facture"] : null), "date"), "d/m/Y"), "html", null, true);
            echo "</td>
                                <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["facture"]) ? $context["facture"] : null), "commande"), "prixTTC"), "html", null, true);
            echo " €</td>
                                <td><a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("facturesPDF", array("id" => $this->getAttribute((isset($context["facture"]) ? $context["facture"] : null), "id"))), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"icon-refresh\"></i></a></td>
                            </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['facture'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "                        </tbody>
                    </table>
                </form>

            </div>

        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "UtilisateursBundle:Default/layout:facture.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 12,  58 => 16,  70 => 11,  129 => 43,  96 => 29,  90 => 27,  84 => 24,  191 => 75,  180 => 70,  172 => 68,  155 => 61,  74 => 13,  37 => 8,  213 => 78,  202 => 73,  184 => 71,  170 => 63,  161 => 61,  150 => 56,  113 => 44,  174 => 65,  146 => 55,  100 => 30,  81 => 26,  192 => 45,  188 => 70,  181 => 39,  134 => 28,  114 => 26,  23 => 4,  77 => 14,  53 => 21,  65 => 24,  52 => 7,  83 => 27,  153 => 5,  148 => 65,  127 => 47,  120 => 39,  76 => 23,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 12,  140 => 55,  132 => 51,  128 => 49,  111 => 35,  107 => 42,  61 => 23,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 76,  204 => 72,  179 => 67,  159 => 62,  143 => 12,  135 => 53,  131 => 52,  119 => 45,  108 => 22,  102 => 31,  71 => 30,  67 => 19,  63 => 21,  59 => 19,  47 => 15,  38 => 8,  94 => 28,  89 => 31,  85 => 38,  79 => 27,  75 => 21,  68 => 22,  56 => 9,  50 => 16,  29 => 3,  87 => 35,  72 => 20,  55 => 15,  21 => 2,  26 => 12,  98 => 41,  93 => 40,  88 => 26,  78 => 34,  46 => 11,  27 => 4,  40 => 18,  44 => 10,  35 => 6,  31 => 4,  43 => 14,  41 => 14,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 60,  156 => 59,  151 => 63,  142 => 63,  138 => 52,  136 => 50,  123 => 46,  121 => 51,  117 => 50,  115 => 44,  105 => 40,  101 => 38,  91 => 37,  69 => 25,  66 => 22,  62 => 27,  49 => 8,  24 => 7,  32 => 4,  25 => 5,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 72,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 69,  173 => 33,  168 => 72,  164 => 62,  162 => 59,  154 => 30,  149 => 60,  147 => 58,  144 => 49,  141 => 53,  133 => 6,  130 => 57,  125 => 51,  122 => 51,  116 => 38,  112 => 43,  109 => 45,  106 => 44,  103 => 32,  99 => 37,  95 => 28,  92 => 42,  86 => 36,  82 => 29,  80 => 27,  73 => 26,  64 => 12,  60 => 10,  57 => 19,  54 => 14,  51 => 14,  48 => 12,  45 => 16,  42 => 18,  39 => 9,  36 => 17,  33 => 7,  30 => 2,);
    }
}
