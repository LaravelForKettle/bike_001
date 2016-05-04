<?php

/* Error.html */
class __TwigTemplate_bba0abbce1138e68624a91052407b5cd5055eb29ac4c6f76dca319875fc5aab1 extends Twig_Template
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
        $this->loadTemplate("header.html", "Error.html", 1)->display($context);
        // line 2
        echo "    <body class=\" login_page\">


    <div class=\"login-wrapper\">
        <div id=\"login\" class=\"login loginpage col-lg-offset-4 col-lg-4 col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6 col-xs-offset-2 col-xs-8\">
            <h1><a href=\"#\" title=\"Login Page\" tabindex=\"-1\">Admin Panel</a></h1>

            <h1 style=\"color: #FFFFFF; font-weight: 600; text-align: center;\">Ошибка 404: Страница не существует.</h1>


        </div>
    </div>
";
        // line 14
        $this->loadTemplate("footer.html", "Error.html", 14)->display($context);
        // line 15
        echo "





";
    }

    public function getTemplateName()
    {
        return "Error.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 15,  35 => 14,  21 => 2,  19 => 1,);
    }
}
/* {% include "header.html" %}*/
/*     <body class=" login_page">*/
/* */
/* */
/*     <div class="login-wrapper">*/
/*         <div id="login" class="login loginpage col-lg-offset-4 col-lg-4 col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6 col-xs-offset-2 col-xs-8">*/
/*             <h1><a href="#" title="Login Page" tabindex="-1">Admin Panel</a></h1>*/
/* */
/*             <h1 style="color: #FFFFFF; font-weight: 600; text-align: center;">Ошибка 404: Страница не существует.</h1>*/
/* */
/* */
/*         </div>*/
/*     </div>*/
/* {% include "footer.html" %}*/
/* */
/* */
/* */
/* */
/* */
/* */
/* */
