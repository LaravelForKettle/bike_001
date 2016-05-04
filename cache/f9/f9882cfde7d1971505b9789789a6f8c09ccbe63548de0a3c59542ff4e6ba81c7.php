<?php

/* login.html */
class __TwigTemplate_a7982e96b785f331f78f7af6f235af06cb22f5daf1f104dea25cc7f229df5e85 extends Twig_Template
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
        $this->loadTemplate("header.html", "login.html", 1)->display($context);
        // line 2
        echo "
<!-- BEGIN BODY -->

<body class=\" login_page\">

<div class=\"login-wrapper\">
    <div id=\"login\" class=\"login loginpage col-lg-offset-4 col-lg-4 col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6 col-xs-offset-2 col-xs-8\">
        <h1><a href=\"#\" title=\"Login Page\" tabindex=\"-1\">Admin Panel</a></h1>

        <form name=\"loginform\" id=\"loginform\" action=\"index.html\" method=\"post\">
            <p>
                <label for=\"user_login\">Ваш email<br>
                    <input type=\"text\" name=\"log\" id=\"user_login\" class=\"input\" value=\"demo\" size=\"20\"></label>
            </p>
            <p>
                <label for=\"user_pass\">Ваш пароль<br>
                    <input type=\"password\" name=\"pwd\" id=\"user_pass\" class=\"input\" value=\"demo\" size=\"20\"></label>
            </p>
            <p class=\"forgetmenot\">
                <label class=\"icheck-label form-label\" for=\"rememberme\">
                    <input name=\"rememberme\" type=\"checkbox\" id=\"rememberme\" value=\"forever\" class=\"skin-square-orange\" checked=\"\"> Remember me</label>
            </p>



            <p class=\"submit\">
                <input type=\"submit\" name=\"wp-submit\" id=\"wp-submit\" class=\"btn btn-orange btn-block\" value=\"Sign In\">
            </p>
        </form>

        <p id=\"nav\">
            <a class=\"pull-left\" href=\"#\" title=\"Password Lost and Found\">Forgot password?</a>
            <a class=\"pull-right\" href=\"ui-register.html\" title=\"Sign Up\">Sign Up</a>
        </p>


    </div>
</div>
";
        // line 40
        $this->loadTemplate("footer.html", "login.html", 40)->display($context);
    }

    public function getTemplateName()
    {
        return "login.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 40,  21 => 2,  19 => 1,);
    }
}
/* {% include "header.html" %}*/
/* */
/* <!-- BEGIN BODY -->*/
/* */
/* <body class=" login_page">*/
/* */
/* <div class="login-wrapper">*/
/*     <div id="login" class="login loginpage col-lg-offset-4 col-lg-4 col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6 col-xs-offset-2 col-xs-8">*/
/*         <h1><a href="#" title="Login Page" tabindex="-1">Admin Panel</a></h1>*/
/* */
/*         <form name="loginform" id="loginform" action="index.html" method="post">*/
/*             <p>*/
/*                 <label for="user_login">Ваш email<br>*/
/*                     <input type="text" name="log" id="user_login" class="input" value="demo" size="20"></label>*/
/*             </p>*/
/*             <p>*/
/*                 <label for="user_pass">Ваш пароль<br>*/
/*                     <input type="password" name="pwd" id="user_pass" class="input" value="demo" size="20"></label>*/
/*             </p>*/
/*             <p class="forgetmenot">*/
/*                 <label class="icheck-label form-label" for="rememberme">*/
/*                     <input name="rememberme" type="checkbox" id="rememberme" value="forever" class="skin-square-orange" checked=""> Remember me</label>*/
/*             </p>*/
/* */
/* */
/* */
/*             <p class="submit">*/
/*                 <input type="submit" name="wp-submit" id="wp-submit" class="btn btn-orange btn-block" value="Sign In">*/
/*             </p>*/
/*         </form>*/
/* */
/*         <p id="nav">*/
/*             <a class="pull-left" href="#" title="Password Lost and Found">Forgot password?</a>*/
/*             <a class="pull-right" href="ui-register.html" title="Sign Up">Sign Up</a>*/
/*         </p>*/
/* */
/* */
/*     </div>*/
/* </div>*/
/* {% include "footer.html" %}*/
