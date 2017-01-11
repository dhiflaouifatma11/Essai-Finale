<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_16d1c0e1b7b5076f7bc99e403a9a61fec698c9dc29b075f6ee75d4b913a1e962 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FOSUserBundle::layout.html.twig");

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "username")), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((!twig_test_empty($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session")))) {
            // line 8
            echo "        ";
            $context["targetUrl"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "get", array(0 => (("_security." . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "security"), "token"), "providerKey")) . ".target_path")), "method");
            // line 9
            echo "        ";
            if ((!twig_test_empty((isset($context["targetUrl"]) ? $context["targetUrl"] : null)))) {
                echo "<p><a href=\"";
                echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
                echo "</a></p>";
            }
            // line 10
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 12,  58 => 11,  70 => 24,  129 => 43,  96 => 29,  90 => 27,  84 => 25,  191 => 75,  180 => 70,  172 => 68,  155 => 61,  74 => 13,  37 => 8,  213 => 78,  202 => 73,  184 => 71,  170 => 63,  161 => 61,  150 => 56,  113 => 44,  174 => 65,  146 => 55,  100 => 30,  81 => 26,  192 => 45,  188 => 70,  181 => 39,  134 => 28,  114 => 26,  23 => 4,  77 => 14,  53 => 18,  65 => 21,  52 => 18,  83 => 27,  153 => 5,  148 => 65,  127 => 44,  120 => 39,  76 => 23,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 12,  140 => 55,  132 => 51,  128 => 49,  111 => 35,  107 => 36,  61 => 26,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 76,  204 => 72,  179 => 67,  159 => 62,  143 => 12,  135 => 53,  131 => 52,  119 => 49,  108 => 22,  102 => 31,  71 => 30,  67 => 13,  63 => 25,  59 => 19,  47 => 15,  38 => 8,  94 => 28,  89 => 31,  85 => 38,  79 => 27,  75 => 23,  68 => 22,  56 => 13,  50 => 10,  29 => 3,  87 => 35,  72 => 22,  55 => 18,  21 => 2,  26 => 6,  98 => 41,  93 => 39,  88 => 26,  78 => 34,  46 => 14,  27 => 4,  40 => 13,  44 => 7,  35 => 13,  31 => 6,  43 => 11,  41 => 9,  28 => 5,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 60,  156 => 59,  151 => 63,  142 => 63,  138 => 52,  136 => 56,  123 => 42,  121 => 51,  117 => 50,  115 => 43,  105 => 40,  101 => 32,  91 => 37,  69 => 15,  66 => 16,  62 => 18,  49 => 8,  24 => 5,  32 => 4,  25 => 5,  22 => 3,  19 => 2,  209 => 82,  203 => 78,  199 => 72,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 69,  173 => 33,  168 => 72,  164 => 62,  162 => 59,  154 => 30,  149 => 60,  147 => 58,  144 => 49,  141 => 53,  133 => 6,  130 => 57,  125 => 51,  122 => 51,  116 => 38,  112 => 48,  109 => 45,  106 => 44,  103 => 32,  99 => 42,  95 => 28,  92 => 42,  86 => 26,  82 => 25,  80 => 24,  73 => 19,  64 => 12,  60 => 22,  57 => 15,  54 => 14,  51 => 11,  48 => 12,  45 => 15,  42 => 10,  39 => 6,  36 => 7,  33 => 6,  30 => 3,);
    }
}
