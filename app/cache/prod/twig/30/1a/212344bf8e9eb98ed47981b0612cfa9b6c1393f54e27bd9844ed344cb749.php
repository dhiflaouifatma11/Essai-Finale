<?php

/* EcommerceBundle:Administration/Produits/layout:edit.html.twig */
class __TwigTemplate_301a212344bf8e9eb98ed47981b0612cfa9b6c1393f54e27bd9844ed344cb749 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout/layoutAdmin.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout/layoutAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h1>Produits edit</h1>
    
    <form action=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("adminProduits_update", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"))), "html", null, true);
        echo "\" method=\"POST\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'enctype');
        echo ">
    ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'form');
        echo "
    </form>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("adminProduits");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form');
        echo "</li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Administration/Produits/layout:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 22,  52 => 18,  83 => 30,  153 => 50,  148 => 33,  127 => 5,  120 => 50,  76 => 25,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  111 => 37,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 12,  135 => 53,  131 => 52,  119 => 42,  108 => 47,  102 => 32,  71 => 30,  67 => 15,  63 => 15,  59 => 12,  47 => 9,  38 => 6,  94 => 28,  89 => 20,  85 => 25,  79 => 18,  75 => 26,  68 => 14,  56 => 16,  50 => 10,  29 => 3,  87 => 25,  72 => 16,  55 => 11,  21 => 2,  26 => 6,  98 => 31,  93 => 34,  88 => 32,  78 => 21,  46 => 14,  27 => 4,  40 => 8,  44 => 15,  35 => 6,  31 => 4,  43 => 8,  41 => 7,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 7,  136 => 56,  123 => 47,  121 => 46,  117 => 44,  115 => 43,  105 => 40,  101 => 32,  91 => 33,  69 => 25,  66 => 21,  62 => 20,  49 => 12,  24 => 4,  32 => 4,  25 => 1,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 6,  130 => 41,  125 => 44,  122 => 51,  116 => 49,  112 => 48,  109 => 34,  106 => 33,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 31,  82 => 22,  80 => 19,  73 => 19,  64 => 26,  60 => 20,  57 => 18,  54 => 10,  51 => 17,  48 => 16,  45 => 16,  42 => 10,  39 => 10,  36 => 5,  33 => 4,  30 => 7,);
    }
}
