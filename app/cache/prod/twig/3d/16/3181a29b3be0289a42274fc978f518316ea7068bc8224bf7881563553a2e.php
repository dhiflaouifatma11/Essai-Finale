<?php

/* PagesBundle:Administration/pages/layout:index.html.twig */
class __TwigTemplate_3d163181a29b3be0289a42274fc978f518316ea7068bc8224bf7881563553a2e extends Twig_Template
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
        echo "<h1>Pages list</h1>

    <table class=\"table table-striped table-hover\">
        <thead>
            <tr>
                <th>Titre</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 15
            echo "            <tr>
                <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "titre"), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("adminPages_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"))), "html", null, true);
            echo "\"><i class=\"icon-book\"></i></a>
                    <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("adminPages_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"))), "html", null, true);
            echo "\"><i class=\"icon-edit\"></i></a>
                </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("adminPages_new");
        echo "\">
                nouvelle page
            </a>
        </li>
    </ul>
    ";
    }

    public function getTemplateName()
    {
        return "PagesBundle:Administration/pages/layout:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 24,  129 => 43,  96 => 29,  90 => 27,  84 => 25,  191 => 75,  180 => 70,  172 => 68,  155 => 61,  74 => 31,  37 => 8,  213 => 78,  202 => 73,  184 => 71,  170 => 63,  161 => 61,  150 => 56,  113 => 44,  174 => 65,  146 => 55,  100 => 30,  81 => 26,  192 => 45,  188 => 70,  181 => 39,  134 => 28,  114 => 26,  23 => 2,  77 => 29,  53 => 12,  65 => 21,  52 => 18,  83 => 27,  153 => 5,  148 => 65,  127 => 44,  120 => 39,  76 => 23,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 12,  140 => 55,  132 => 51,  128 => 49,  111 => 35,  107 => 36,  61 => 26,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 76,  204 => 72,  179 => 67,  159 => 62,  143 => 12,  135 => 53,  131 => 52,  119 => 49,  108 => 22,  102 => 31,  71 => 21,  67 => 20,  63 => 18,  59 => 19,  47 => 15,  38 => 6,  94 => 28,  89 => 31,  85 => 38,  79 => 27,  75 => 23,  68 => 22,  56 => 13,  50 => 16,  29 => 4,  87 => 35,  72 => 22,  55 => 18,  21 => 2,  26 => 3,  98 => 41,  93 => 39,  88 => 26,  78 => 32,  46 => 14,  27 => 4,  40 => 11,  44 => 10,  35 => 6,  31 => 4,  43 => 14,  41 => 7,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 60,  156 => 59,  151 => 63,  142 => 63,  138 => 52,  136 => 56,  123 => 42,  121 => 51,  117 => 50,  115 => 43,  105 => 40,  101 => 32,  91 => 37,  69 => 29,  66 => 16,  62 => 18,  49 => 15,  24 => 2,  32 => 4,  25 => 5,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 72,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 69,  173 => 33,  168 => 72,  164 => 62,  162 => 59,  154 => 30,  149 => 60,  147 => 58,  144 => 49,  141 => 53,  133 => 6,  130 => 57,  125 => 51,  122 => 51,  116 => 38,  112 => 48,  109 => 45,  106 => 44,  103 => 32,  99 => 42,  95 => 28,  92 => 42,  86 => 26,  82 => 25,  80 => 24,  73 => 19,  64 => 19,  60 => 22,  57 => 15,  54 => 14,  51 => 11,  48 => 12,  45 => 7,  42 => 10,  39 => 9,  36 => 4,  33 => 4,  30 => 3,);
    }
}
