<?php

/* KnpPaginatorBundle:Pagination:sortable_link.html.twig */
class __TwigTemplate_47af7ea5f6606a3e82134cd75d4865ca0257ea35b91d979c0a061f1f0d711be2 extends Twig_Template
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
        echo "<a";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : null));
        foreach ($context['_seq'] as $context["attr"] => $context["value"]) {
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["attr"]) ? $context["attr"] : null), "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attr'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "</a>
";
    }

    public function getTemplateName()
    {
        return "KnpPaginatorBundle:Pagination:sortable_link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 69,  124 => 55,  104 => 46,  34 => 12,  58 => 16,  70 => 11,  129 => 43,  96 => 44,  90 => 27,  84 => 24,  191 => 75,  180 => 70,  172 => 68,  155 => 67,  74 => 13,  37 => 8,  213 => 78,  202 => 73,  184 => 71,  170 => 63,  161 => 61,  150 => 56,  113 => 49,  174 => 65,  146 => 55,  100 => 33,  81 => 40,  192 => 45,  188 => 70,  181 => 39,  134 => 28,  114 => 39,  23 => 4,  77 => 14,  53 => 21,  65 => 20,  52 => 16,  83 => 27,  153 => 5,  148 => 63,  127 => 47,  120 => 39,  76 => 23,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 12,  140 => 55,  132 => 51,  128 => 56,  111 => 35,  107 => 42,  61 => 23,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 76,  204 => 72,  179 => 67,  159 => 62,  143 => 12,  135 => 58,  131 => 57,  119 => 53,  108 => 36,  102 => 31,  71 => 30,  67 => 19,  63 => 21,  59 => 18,  47 => 24,  38 => 10,  94 => 30,  89 => 28,  85 => 41,  79 => 25,  75 => 21,  68 => 22,  56 => 9,  50 => 16,  29 => 6,  87 => 35,  72 => 20,  55 => 17,  21 => 2,  26 => 12,  98 => 41,  93 => 40,  88 => 42,  78 => 34,  46 => 13,  27 => 5,  40 => 18,  44 => 10,  35 => 6,  31 => 4,  43 => 12,  41 => 11,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 60,  156 => 59,  151 => 63,  142 => 63,  138 => 52,  136 => 50,  123 => 46,  121 => 51,  117 => 50,  115 => 44,  105 => 35,  101 => 38,  91 => 29,  69 => 25,  66 => 22,  62 => 19,  49 => 8,  24 => 4,  32 => 7,  25 => 3,  22 => 3,  19 => 1,  209 => 82,  203 => 78,  199 => 72,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 69,  173 => 33,  168 => 72,  164 => 62,  162 => 59,  154 => 30,  149 => 60,  147 => 58,  144 => 61,  141 => 53,  133 => 6,  130 => 57,  125 => 51,  122 => 51,  116 => 38,  112 => 43,  109 => 45,  106 => 44,  103 => 34,  99 => 37,  95 => 28,  92 => 43,  86 => 27,  82 => 29,  80 => 27,  73 => 23,  64 => 30,  60 => 29,  57 => 19,  54 => 28,  51 => 14,  48 => 7,  45 => 16,  42 => 13,  39 => 9,  36 => 10,  33 => 5,  30 => 7,);
    }
}
