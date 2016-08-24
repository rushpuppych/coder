<?php

/* home_guest.html */
class __TwigTemplate_6d1abde69b390d1b8ef5126ac65a9820796133590872254db406309bd561bc68 extends Twig_Template
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
        echo "
<!-- BG Image Title -->
<div class=\"container-fluid bg_geo_09 bg_box_shadow_01 anim_bg\" style=\"height: 500px; width: 100%;\">
    <div style=\"text-align: center; color: #ffffff; padding-top: 60px;\">
        <span style=\"font-size: 164px;\" class=\"fa fa-angle-left\"></span>
        <span style=\"font-size: 164px;\" class=\"fa fa-bolt\"></span>
        <span style=\"font-size: 164px;\" class=\"fa fa-angle-right\"></span>
    </div>
    <div style=\"text-align: center; font-family: quicksand; font-size: 100px; color: #ffffff; padding-top: 10px;\">
        CodeBot
    </div>
    <div style=\"text-align: center; font-family: quicksand; font-size: 21px; color: #ffffff; padding-top: 0px;\">
        The Ultimative Web Experience
    </div>
</div>
<div class=\"container-fluid\">&nbsp;</div>

<div id=\"home_guest\" class=\"container\" style=\"font-family: quicksand;\">
    <!-- Account Tabs -->
    <div class=\"row\" style=\"padding-bottom: 20px; padding-top: 20px;\">
        <div id=\"navigation_tab\" class=\"col-sm-8 col-sm-offset-2\">
            <ul class=\"nav nav-pills\">
                <li role=\"presentation\" class=\"active\"><a href=\"#login_tab\" data-toggle=\"tab\">Login</a></li>
                <li role=\"presentation\"><a href=\"#signup_tab\" data-toggle=\"tab\">Signup</a></li>
                <li role=\"presentation\"><a href=\"#recovery_tab\" data-toggle=\"tab\">Password Recovery</a></li>
                <li role=\"presentation\" class=\"pull-right\"><a href=\"#impressum_tab\" data-toggle=\"tab\">Impressum</a></li>
            </ul>
        </div>
    </div>

    <!-- Tab Contents -->
    <div class=\"row tab-content\" style=\"padding-bottom: 100px;\">
        <!-- Login Form -->
        <div id=\"login_tab\" class=\"col-sm-8 col-sm-offset-2 tab-pane active\">
            <h1>Login</h1><hr>
            <div id=\"login_info\">
                <!-- Login Codes -->
                ";
        // line 38
        if (((isset($context["code"]) ? $context["code"] : null) == "login_deny_active")) {
            echo "<div data-tab=\"login_tab\" class=\"message alert alert-warning\" role=\"alert\"><span class=\"fa fa-exclamation-triangle\"></span> Your Account is not activated. Please Check your emails.</div>";
        }
        // line 39
        echo "                ";
        if (((isset($context["code"]) ? $context["code"] : null) == "login_deny_block")) {
            echo "<div data-tab=\"login_tab\" class=\"message alert alert-danger\" role=\"alert\"><span class=\"fa fa-ban\"></span> Your Account is blocked. Please contact the Webmaster.</div>";
        }
        // line 40
        echo "                ";
        if (((isset($context["code"]) ? $context["code"] : null) == "login_deny_deleted")) {
            echo "<div data-tab=\"login_tab\" class=\"message alert alert-warning\" role=\"alert\"><span class=\"fa fa-trash\"></span> This Account is deleted. (For reactivation contact the Webmaster)</div>";
        }
        // line 41
        echo "                ";
        if (((isset($context["code"]) ? $context["code"] : null) == "login_deny")) {
            echo "<div data-tab=\"login_tab\" class=\"message alert alert-danger\" role=\"alert\"><span class=\"fa fa-times\"></span> Your login Credentials are not correct. Please try again.</div>";
        }
        // line 42
        echo "                ";
        if (((isset($context["code"]) ? $context["code"] : null) == "login_error")) {
            echo "<div data-tab=\"login_tab\" class=\"message alert alert-danger\" role=\"alert\"><span class=\"fa fa-ban\"></span> Sorry we where not able to activate your account.</div>";
        }
        // line 43
        echo "                ";
        if (((isset($context["code"]) ? $context["code"] : null) == "login_success")) {
            echo "<div data-tab=\"login_tab\" class=\"message alert alert-success\" role=\"alert\"><span class=\"fa fa-check-circle-o\"></span> Account Successfully activatet. You can login now.</div>";
        }
        // line 44
        echo "                ";
        if (((isset($context["code"]) ? $context["code"] : null) == "login_logout")) {
            echo "<div data-tab=\"login_tab\" class=\"message alert alert-success\" role=\"alert\"><span class=\"fa fa-check-circle-o\"></span> Your Logged out now.</div>";
        }
        // line 45
        echo "                ";
        if (((isset($context["code"]) ? $context["code"] : null) == "login_error_3")) {
            echo "<div data-tab=\"login_tab\" class=\"message alert alert-warning\" role=\"alert\"><span class=\"fa fa-exclamation-triangle\"></span> The email address is already in use. Please login.</div>";
        }
        // line 46
        echo "                ";
        if (((isset($context["code"]) ? $context["code"] : null) == "login_send")) {
            echo "<div data-tab=\"login_tab\" class=\"message alert alert-success\" role=\"alert\"><span class=\"fa fa-envelope-o\"></span> Please check your mail for activation link.</div>";
        }
        // line 47
        echo "                ";
        if (((isset($context["code"]) ? $context["code"] : null) == "login_no_session")) {
            echo "<div data-tab=\"login_tab\" class=\"message alert alert-warning\" role=\"alert\"><span class=\"fa fa-exclamation-triangle\"></span> Your user session expired. Please login.</div>";
        }
        // line 48
        echo "            </div>
            <form action=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->pathFor("account_login"), "html", null, true);
        echo "\" method=\"post\">
                <div class=\"form-group\">
                    <label for=\"email\">Email address</label>
                    <input name=\"email\" type=\"email\" class=\"form-control\" id=\"email\" placeholder=\"Email\">
                </div>
                <div class=\"form-group\">
                    <label for=\"password\">Password</label>
                    <input name=\"password\" type=\"password\" class=\"form-control\" id=\"password\" placeholder=\"Password\">
                </div>
                <br>
                <button type=\"submit\" class=\"btn btn-default\">Login</button>
            </form>
        </div>

        <!-- Signup Form -->
        <div id=\"signup_tab\" class=\"col-sm-8 col-sm-offset-2 tab-pane\">
            <h1>Signup</h1><hr>
            <div id=\"signup_info\">
                <!-- Signup Codes -->
                ";
        // line 68
        if (((isset($context["code"]) ? $context["code"] : null) == "signup_error_1")) {
            echo "<div data-tab=\"signup_tab\" class=\"message alert alert-danger\" role=\"alert\"><span class=\"fa fa-times\"></span> The Captcha test says you are a Robot?!!!</div>";
        }
        // line 69
        echo "                ";
        if (((isset($context["code"]) ? $context["code"] : null) == "signup_error_2")) {
            echo "<div data-tab=\"signup_tab\" class=\"message alert alert-danger\" role=\"alert\"><span class=\"fa fa-times\"></span> You retyped the password wrong. Please try again.</div>";
        }
        // line 70
        echo "                ";
        if (((isset($context["code"]) ? $context["code"] : null) == "signup_error_4")) {
            echo "<div data-tab=\"signup_tab\" class=\"message alert alert-danger\" role=\"alert\"><span class=\"fa fa-times\"></span> Your Datas are not valide. Please fill in the correct values.</div>";
        }
        // line 71
        echo "            </div>
            <form action=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->pathFor("account_signup"), "html", null, true);
        echo "\" method=\"post\">
                <div class=\"form-group\">
                    <label for=\"signup_email\">Email address</label>
                    <input name=\"email\" type=\"email\" class=\"form-control\" id=\"signup_email\" placeholder=\"Email\">
                </div>
                <div class=\"form-group\">
                    <label for=\"signup_nickname\">Nickname</label>
                    <input name=\"nickname\" type=\"text\" class=\"form-control\" id=\"signup_nickname\" placeholder=\"Nickname\">
                </div>
                <div class=\"form-group\">
                    <label for=\"signup_pwd1\">Password</label>
                    <input name=\"password_1\" type=\"password\" class=\"form-control\" id=\"signup_pwd1\" placeholder=\"Password\">
                </div>
                <div class=\"form-group\">
                    <label for=\"signup_pwd2\">Retype Password</label>
                    <input name=\"password_2\" type=\"password\" class=\"form-control\" id=\"signup_pwd2\" placeholder=\"Password\">
                </div>
                <br>
                <div class=\"g-recaptcha\" id=\"signup_recaptcha\" data-sitekey=\"6LcQzxoTAAAAAHNE6ilzwle_qKCJ-VsoAyFcfY_w\"></div>
                <br>
                <span style=\"font-size: 11px;\">
                    By clicking \"Signup\", you  confirm that you have read and agree our <a href=\"#\">therms and conditions</a>.
                </span>
                <br>
                <br>
                <button type=\"submit\" class=\"btn btn-default\">Signup</button>
            </form>
        </div>

        <!-- Password Recovery Form -->
        <div id=\"recovery_tab\" class=\"col-sm-8 col-sm-offset-2 tab-pane\">
            <h1>Password Recovery</h1><hr>
            <div id=\"recovery_info\">
                <!-- Recovery Codes -->
                ";
        // line 106
        if (((isset($context["code"]) ? $context["code"] : null) == "recovery_error_1")) {
            echo "<div data-tab=\"recovery_tab\" class=\"message alert alert-danger\" role=\"alert\"><span class=\"fa fa-times\"></span> The email address is not registered. Please try again.</div>";
        }
        // line 107
        echo "                ";
        if (((isset($context["code"]) ? $context["code"] : null) == "recovery_success")) {
            echo "<div data-tab=\"recovery_tab\" class=\"message alert alert-success\" role=\"alert\"><span class=\"fa fa-envelope-o\"></span> Please check your mail for reset link.</div>";
        }
        // line 108
        echo "                ";
        if (((isset($context["code"]) ? $context["code"] : null) == "recovery_error")) {
            echo "<div data-tab=\"recovery_tab\" class=\"message alert alert-danger\" role=\"alert\"><span class=\"fa fa-ban\"></span> Sorry we where not able to recover your account.</div>";
        }
        // line 109
        echo "                ";
        if (((isset($context["code"]) ? $context["code"] : null) == "recovery_sendpassword")) {
            echo "<div data-tab=\"recovery_tab\" class=\"message alert alert-success\" role=\"alert\"><span class=\"fa fa-envelope-o\"></span> Please check your mail for new Password.</div>";
        }
        // line 110
        echo "            </div>
            <form action=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->pathFor("account_recovery"), "html", null, true);
        echo "\" method=\"post\">
                <div class=\"form-group\">
                    <label for=\"recovery_email\">Email address</label>
                    <input name=\"email\" type=\"email\" class=\"form-control\" id=\"recovery_email\" placeholder=\"Email\">
                </div>
                <br>
                <button type=\"submit\" class=\"btn btn-default\">Recover Password</button>
            </form>
        </div>

        <!-- Impressum -->
        <style>
            .btn-social{position:relative;padding-left:44px;text-align:left;white-space:nowrap;overflow:hidden;text-overflow:ellipsis}.btn-social :first-child{position:absolute;left:0;top:0;bottom:0;width:32px;line-height:34px;font-size:1.6em;text-align:center;border-right:1px solid rgba(0,0,0,0.2)}
            .btn-social.btn-lg{padding-left:61px}.btn-social.btn-lg :first-child{line-height:45px;width:45px;font-size:1.8em}
            .btn-social.btn-sm{padding-left:38px}.btn-social.btn-sm :first-child{line-height:28px;width:28px;font-size:1.4em}
            .btn-social.btn-xs{padding-left:30px}.btn-social.btn-xs :first-child{line-height:20px;width:20px;font-size:1.2em}
            .btn-social-icon{position:relative;padding-left:44px;text-align:left;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;height:34px;width:34px;padding:0}.btn-social-icon :first-child{position:absolute;left:0;top:0;bottom:0;width:32px;line-height:34px;font-size:1.6em;text-align:center;border-right:1px solid rgba(0,0,0,0.2)}
            .btn-social-icon.btn-lg{padding-left:61px}.btn-social-icon.btn-lg :first-child{line-height:45px;width:45px;font-size:1.8em}
            .btn-social-icon.btn-sm{padding-left:38px}.btn-social-icon.btn-sm :first-child{line-height:28px;width:28px;font-size:1.4em}
            .btn-social-icon.btn-xs{padding-left:30px}.btn-social-icon.btn-xs :first-child{line-height:20px;width:20px;font-size:1.2em}
            .btn-social-icon :first-child{border:none;text-align:center;width:100% !important}
            .btn-social-icon.btn-lg{height:45px;width:45px;padding-left:0;padding-right:0}
            .btn-social-icon.btn-sm{height:30px;width:30px;padding-left:0;padding-right:0}
            .btn-social-icon.btn-xs{height:22px;width:22px;padding-left:0;padding-right:0}
            .btn-bitbucket{color:#fff;background-color:#205081;border-color:rgba(0,0,0,0.2)}.btn-bitbucket:hover,.btn-bitbucket:focus,.btn-bitbucket:active,.btn-bitbucket.active,.open .dropdown-toggle.btn-bitbucket{color:#fff;background-color:#183c60;border-color:rgba(0,0,0,0.2)}
            .btn-bitbucket:active,.btn-bitbucket.active,.open .dropdown-toggle.btn-bitbucket{background-image:none}
            .btn-bitbucket.disabled,.btn-bitbucket[disabled],fieldset[disabled] .btn-bitbucket,.btn-bitbucket.disabled:hover,.btn-bitbucket[disabled]:hover,fieldset[disabled] .btn-bitbucket:hover,.btn-bitbucket.disabled:focus,.btn-bitbucket[disabled]:focus,fieldset[disabled] .btn-bitbucket:focus,.btn-bitbucket.disabled:active,.btn-bitbucket[disabled]:active,fieldset[disabled] .btn-bitbucket:active,.btn-bitbucket.disabled.active,.btn-bitbucket[disabled].active,fieldset[disabled] .btn-bitbucket.active{background-color:#205081;border-color:rgba(0,0,0,0.2)}

            .btn-facebook{color:#fff;background-color:#3b5998;border-color:rgba(0,0,0,0.2)}.btn-facebook:hover,.btn-facebook:focus,.btn-facebook:active,.btn-facebook.active,.open .dropdown-toggle.btn-facebook{color:#fff;background-color:#30487b;border-color:rgba(0,0,0,0.2)}
            .btn-facebook:active,.btn-facebook.active,.open .dropdown-toggle.btn-facebook{background-image:none}
            .btn-facebook.disabled,.btn-facebook[disabled],fieldset[disabled] .btn-facebook,.btn-facebook.disabled:hover,.btn-facebook[disabled]:hover,fieldset[disabled] .btn-facebook:hover,.btn-facebook.disabled:focus,.btn-facebook[disabled]:focus,fieldset[disabled] .btn-facebook:focus,.btn-facebook.disabled:active,.btn-facebook[disabled]:active,fieldset[disabled] .btn-facebook:active,.btn-facebook.disabled.active,.btn-facebook[disabled].active,fieldset[disabled] .btn-facebook.active{background-color:#3b5998;border-color:rgba(0,0,0,0.2)}

            .btn-github{color:#fff;background-color:#444;border-color:rgba(0,0,0,0.2)}.btn-github:hover,.btn-github:focus,.btn-github:active,.btn-github.active,.open .dropdown-toggle.btn-github{color:#fff;background-color:#303030;border-color:rgba(0,0,0,0.2)}
            .btn-github:active,.btn-github.active,.open .dropdown-toggle.btn-github{background-image:none}
            .btn-github.disabled,.btn-github[disabled],fieldset[disabled] .btn-github,.btn-github.disabled:hover,.btn-github[disabled]:hover,fieldset[disabled] .btn-github:hover,.btn-github.disabled:focus,.btn-github[disabled]:focus,fieldset[disabled] .btn-github:focus,.btn-github.disabled:active,.btn-github[disabled]:active,fieldset[disabled] .btn-github:active,.btn-github.disabled.active,.btn-github[disabled].active,fieldset[disabled] .btn-github.active{background-color:#444;border-color:rgba(0,0,0,0.2)}

            .btn-linkedin{color:#fff;background-color:#007bb6;border-color:rgba(0,0,0,0.2)}.btn-linkedin:hover,.btn-linkedin:focus,.btn-linkedin:active,.btn-linkedin.active,.open .dropdown-toggle.btn-linkedin{color:#fff;background-color:#005f8d;border-color:rgba(0,0,0,0.2)}
            .btn-linkedin:active,.btn-linkedin.active,.open .dropdown-toggle.btn-linkedin{background-image:none}
            .btn-linkedin.disabled,.btn-linkedin[disabled],fieldset[disabled] .btn-linkedin,.btn-linkedin.disabled:hover,.btn-linkedin[disabled]:hover,fieldset[disabled] .btn-linkedin:hover,.btn-linkedin.disabled:focus,.btn-linkedin[disabled]:focus,fieldset[disabled] .btn-linkedin:focus,.btn-linkedin.disabled:active,.btn-linkedin[disabled]:active,fieldset[disabled] .btn-linkedin:active,.btn-linkedin.disabled.active,.btn-linkedin[disabled].active,fieldset[disabled] .btn-linkedin.active{background-color:#007bb6;border-color:rgba(0,0,0,0.2)}

            .btn-xing{color:#fff;background-color:#0B614B;border-color:rgba(0,0,0,0.2)}.btn-xing:hover,.btn-xing:focus,.btn-xing:active,.btn-xing.active,.open .dropdown-toggle.btn-xing{color:#fff;background-color:#0B614B;border-color:rgba(0,0,0,0.2)}
            .btn-xing:active,.btn-xing.active,.open .dropdown-toggle.btn-xing{background-image:none}
            .btn-xing.disabled,.btn-xing[disabled],fieldset[disabled] .btn-xing,.btn-xing.disabled:hover,.btn-xing[disabled]:hover,fieldset[disabled] .btn-xing:hover,.btn-xing.disabled:focus,.btn-xing[disabled]:focus,fieldset[disabled] .btn-xing:focus,.btn-xing.disabled:active,.btn-xing[disabled]:active,fieldset[disabled] .btn-xing:active,.btn-xing.disabled.active,.btn-xing[disabled].active,fieldset[disabled] .btn-xing.active{background-color:#0B614B;border-color:rgba(0,0,0,0.2)}
        </style>
        <div id=\"impressum_tab\" class=\"col-sm-8 col-sm-offset-2 tab-pane\">
            <h1>Impressum</h1><hr>
            <div class=\"row\">
                <div class=\"col-sm-6\">
                    <p style=\"font-size: 18px;\">Feel free to contact me.</p><br>
                    <b>John Doe</b><br>
                    Webdeveloper<br>
                    Somestreet 34<br>
                    CH-0000 City<br>
                </div>
                <div class=\"col-sm-6\">
                    <p>
                        <a class=\"btn btn-social btn-facebook btn-block\" href=\"https://www.facebook.com/John Doe\">
                            <i class=\"fa fa-facebook\"></i> Find me on Facebook
                        </a>
                    </p>
                    <p>
                        <a class=\"btn btn-social btn-github btn-block\" href=\"https://bitbucket.org/John Doe/\">
                            <i class=\"fa fa-bitbucket\"></i> Follow me on BitBucked
                        </a>
                    </p>
                    <p>
                        <a class=\"btn btn-social btn-linkedin btn-block\">
                            <i class=\"fa fa-linkedin\"></i> Find me on LinkedIn
                        </a>
                    </p>
                    <p>
                        <a class=\"btn btn-social btn-xing btn-block\">
                            <i class=\"fa fa-xing\"></i> Find me on Xing
                        </a>
                    </p>
                </div>

            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "home_guest.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 111,  205 => 110,  200 => 109,  195 => 108,  190 => 107,  186 => 106,  149 => 72,  146 => 71,  141 => 70,  136 => 69,  132 => 68,  110 => 49,  107 => 48,  102 => 47,  97 => 46,  92 => 45,  87 => 44,  82 => 43,  77 => 42,  72 => 41,  67 => 40,  62 => 39,  58 => 38,  19 => 1,);
    }
}
/* */
/* <!-- BG Image Title -->*/
/* <div class="container-fluid bg_geo_09 bg_box_shadow_01 anim_bg" style="height: 500px; width: 100%;">*/
/*     <div style="text-align: center; color: #ffffff; padding-top: 60px;">*/
/*         <span style="font-size: 164px;" class="fa fa-angle-left"></span>*/
/*         <span style="font-size: 164px;" class="fa fa-bolt"></span>*/
/*         <span style="font-size: 164px;" class="fa fa-angle-right"></span>*/
/*     </div>*/
/*     <div style="text-align: center; font-family: quicksand; font-size: 100px; color: #ffffff; padding-top: 10px;">*/
/*         CodeBot*/
/*     </div>*/
/*     <div style="text-align: center; font-family: quicksand; font-size: 21px; color: #ffffff; padding-top: 0px;">*/
/*         The Ultimative Web Experience*/
/*     </div>*/
/* </div>*/
/* <div class="container-fluid">&nbsp;</div>*/
/* */
/* <div id="home_guest" class="container" style="font-family: quicksand;">*/
/*     <!-- Account Tabs -->*/
/*     <div class="row" style="padding-bottom: 20px; padding-top: 20px;">*/
/*         <div id="navigation_tab" class="col-sm-8 col-sm-offset-2">*/
/*             <ul class="nav nav-pills">*/
/*                 <li role="presentation" class="active"><a href="#login_tab" data-toggle="tab">Login</a></li>*/
/*                 <li role="presentation"><a href="#signup_tab" data-toggle="tab">Signup</a></li>*/
/*                 <li role="presentation"><a href="#recovery_tab" data-toggle="tab">Password Recovery</a></li>*/
/*                 <li role="presentation" class="pull-right"><a href="#impressum_tab" data-toggle="tab">Impressum</a></li>*/
/*             </ul>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <!-- Tab Contents -->*/
/*     <div class="row tab-content" style="padding-bottom: 100px;">*/
/*         <!-- Login Form -->*/
/*         <div id="login_tab" class="col-sm-8 col-sm-offset-2 tab-pane active">*/
/*             <h1>Login</h1><hr>*/
/*             <div id="login_info">*/
/*                 <!-- Login Codes -->*/
/*                 {% if code == "login_deny_active" %}<div data-tab="login_tab" class="message alert alert-warning" role="alert"><span class="fa fa-exclamation-triangle"></span> Your Account is not activated. Please Check your emails.</div>{% endif %}*/
/*                 {% if code == "login_deny_block" %}<div data-tab="login_tab" class="message alert alert-danger" role="alert"><span class="fa fa-ban"></span> Your Account is blocked. Please contact the Webmaster.</div>{% endif %}*/
/*                 {% if code == "login_deny_deleted" %}<div data-tab="login_tab" class="message alert alert-warning" role="alert"><span class="fa fa-trash"></span> This Account is deleted. (For reactivation contact the Webmaster)</div>{% endif %}*/
/*                 {% if code == "login_deny" %}<div data-tab="login_tab" class="message alert alert-danger" role="alert"><span class="fa fa-times"></span> Your login Credentials are not correct. Please try again.</div>{% endif %}*/
/*                 {% if code == "login_error" %}<div data-tab="login_tab" class="message alert alert-danger" role="alert"><span class="fa fa-ban"></span> Sorry we where not able to activate your account.</div>{% endif %}*/
/*                 {% if code == "login_success" %}<div data-tab="login_tab" class="message alert alert-success" role="alert"><span class="fa fa-check-circle-o"></span> Account Successfully activatet. You can login now.</div>{% endif %}*/
/*                 {% if code == "login_logout" %}<div data-tab="login_tab" class="message alert alert-success" role="alert"><span class="fa fa-check-circle-o"></span> Your Logged out now.</div>{% endif %}*/
/*                 {% if code == "login_error_3" %}<div data-tab="login_tab" class="message alert alert-warning" role="alert"><span class="fa fa-exclamation-triangle"></span> The email address is already in use. Please login.</div>{% endif %}*/
/*                 {% if code == "login_send" %}<div data-tab="login_tab" class="message alert alert-success" role="alert"><span class="fa fa-envelope-o"></span> Please check your mail for activation link.</div>{% endif %}*/
/*                 {% if code == "login_no_session" %}<div data-tab="login_tab" class="message alert alert-warning" role="alert"><span class="fa fa-exclamation-triangle"></span> Your user session expired. Please login.</div>{% endif %}*/
/*             </div>*/
/*             <form action="{{ path_for('account_login') }}" method="post">*/
/*                 <div class="form-group">*/
/*                     <label for="email">Email address</label>*/
/*                     <input name="email" type="email" class="form-control" id="email" placeholder="Email">*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     <label for="password">Password</label>*/
/*                     <input name="password" type="password" class="form-control" id="password" placeholder="Password">*/
/*                 </div>*/
/*                 <br>*/
/*                 <button type="submit" class="btn btn-default">Login</button>*/
/*             </form>*/
/*         </div>*/
/* */
/*         <!-- Signup Form -->*/
/*         <div id="signup_tab" class="col-sm-8 col-sm-offset-2 tab-pane">*/
/*             <h1>Signup</h1><hr>*/
/*             <div id="signup_info">*/
/*                 <!-- Signup Codes -->*/
/*                 {% if code == "signup_error_1" %}<div data-tab="signup_tab" class="message alert alert-danger" role="alert"><span class="fa fa-times"></span> The Captcha test says you are a Robot?!!!</div>{% endif %}*/
/*                 {% if code == "signup_error_2" %}<div data-tab="signup_tab" class="message alert alert-danger" role="alert"><span class="fa fa-times"></span> You retyped the password wrong. Please try again.</div>{% endif %}*/
/*                 {% if code == "signup_error_4" %}<div data-tab="signup_tab" class="message alert alert-danger" role="alert"><span class="fa fa-times"></span> Your Datas are not valide. Please fill in the correct values.</div>{% endif %}*/
/*             </div>*/
/*             <form action="{{ path_for('account_signup') }}" method="post">*/
/*                 <div class="form-group">*/
/*                     <label for="signup_email">Email address</label>*/
/*                     <input name="email" type="email" class="form-control" id="signup_email" placeholder="Email">*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     <label for="signup_nickname">Nickname</label>*/
/*                     <input name="nickname" type="text" class="form-control" id="signup_nickname" placeholder="Nickname">*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     <label for="signup_pwd1">Password</label>*/
/*                     <input name="password_1" type="password" class="form-control" id="signup_pwd1" placeholder="Password">*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     <label for="signup_pwd2">Retype Password</label>*/
/*                     <input name="password_2" type="password" class="form-control" id="signup_pwd2" placeholder="Password">*/
/*                 </div>*/
/*                 <br>*/
/*                 <div class="g-recaptcha" id="signup_recaptcha" data-sitekey="6LcQzxoTAAAAAHNE6ilzwle_qKCJ-VsoAyFcfY_w"></div>*/
/*                 <br>*/
/*                 <span style="font-size: 11px;">*/
/*                     By clicking "Signup", you  confirm that you have read and agree our <a href="#">therms and conditions</a>.*/
/*                 </span>*/
/*                 <br>*/
/*                 <br>*/
/*                 <button type="submit" class="btn btn-default">Signup</button>*/
/*             </form>*/
/*         </div>*/
/* */
/*         <!-- Password Recovery Form -->*/
/*         <div id="recovery_tab" class="col-sm-8 col-sm-offset-2 tab-pane">*/
/*             <h1>Password Recovery</h1><hr>*/
/*             <div id="recovery_info">*/
/*                 <!-- Recovery Codes -->*/
/*                 {% if code == "recovery_error_1" %}<div data-tab="recovery_tab" class="message alert alert-danger" role="alert"><span class="fa fa-times"></span> The email address is not registered. Please try again.</div>{% endif %}*/
/*                 {% if code == "recovery_success" %}<div data-tab="recovery_tab" class="message alert alert-success" role="alert"><span class="fa fa-envelope-o"></span> Please check your mail for reset link.</div>{% endif %}*/
/*                 {% if code == "recovery_error" %}<div data-tab="recovery_tab" class="message alert alert-danger" role="alert"><span class="fa fa-ban"></span> Sorry we where not able to recover your account.</div>{% endif %}*/
/*                 {% if code == "recovery_sendpassword" %}<div data-tab="recovery_tab" class="message alert alert-success" role="alert"><span class="fa fa-envelope-o"></span> Please check your mail for new Password.</div>{% endif %}*/
/*             </div>*/
/*             <form action="{{ path_for('account_recovery') }}" method="post">*/
/*                 <div class="form-group">*/
/*                     <label for="recovery_email">Email address</label>*/
/*                     <input name="email" type="email" class="form-control" id="recovery_email" placeholder="Email">*/
/*                 </div>*/
/*                 <br>*/
/*                 <button type="submit" class="btn btn-default">Recover Password</button>*/
/*             </form>*/
/*         </div>*/
/* */
/*         <!-- Impressum -->*/
/*         <style>*/
/*             .btn-social{position:relative;padding-left:44px;text-align:left;white-space:nowrap;overflow:hidden;text-overflow:ellipsis}.btn-social :first-child{position:absolute;left:0;top:0;bottom:0;width:32px;line-height:34px;font-size:1.6em;text-align:center;border-right:1px solid rgba(0,0,0,0.2)}*/
/*             .btn-social.btn-lg{padding-left:61px}.btn-social.btn-lg :first-child{line-height:45px;width:45px;font-size:1.8em}*/
/*             .btn-social.btn-sm{padding-left:38px}.btn-social.btn-sm :first-child{line-height:28px;width:28px;font-size:1.4em}*/
/*             .btn-social.btn-xs{padding-left:30px}.btn-social.btn-xs :first-child{line-height:20px;width:20px;font-size:1.2em}*/
/*             .btn-social-icon{position:relative;padding-left:44px;text-align:left;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;height:34px;width:34px;padding:0}.btn-social-icon :first-child{position:absolute;left:0;top:0;bottom:0;width:32px;line-height:34px;font-size:1.6em;text-align:center;border-right:1px solid rgba(0,0,0,0.2)}*/
/*             .btn-social-icon.btn-lg{padding-left:61px}.btn-social-icon.btn-lg :first-child{line-height:45px;width:45px;font-size:1.8em}*/
/*             .btn-social-icon.btn-sm{padding-left:38px}.btn-social-icon.btn-sm :first-child{line-height:28px;width:28px;font-size:1.4em}*/
/*             .btn-social-icon.btn-xs{padding-left:30px}.btn-social-icon.btn-xs :first-child{line-height:20px;width:20px;font-size:1.2em}*/
/*             .btn-social-icon :first-child{border:none;text-align:center;width:100% !important}*/
/*             .btn-social-icon.btn-lg{height:45px;width:45px;padding-left:0;padding-right:0}*/
/*             .btn-social-icon.btn-sm{height:30px;width:30px;padding-left:0;padding-right:0}*/
/*             .btn-social-icon.btn-xs{height:22px;width:22px;padding-left:0;padding-right:0}*/
/*             .btn-bitbucket{color:#fff;background-color:#205081;border-color:rgba(0,0,0,0.2)}.btn-bitbucket:hover,.btn-bitbucket:focus,.btn-bitbucket:active,.btn-bitbucket.active,.open .dropdown-toggle.btn-bitbucket{color:#fff;background-color:#183c60;border-color:rgba(0,0,0,0.2)}*/
/*             .btn-bitbucket:active,.btn-bitbucket.active,.open .dropdown-toggle.btn-bitbucket{background-image:none}*/
/*             .btn-bitbucket.disabled,.btn-bitbucket[disabled],fieldset[disabled] .btn-bitbucket,.btn-bitbucket.disabled:hover,.btn-bitbucket[disabled]:hover,fieldset[disabled] .btn-bitbucket:hover,.btn-bitbucket.disabled:focus,.btn-bitbucket[disabled]:focus,fieldset[disabled] .btn-bitbucket:focus,.btn-bitbucket.disabled:active,.btn-bitbucket[disabled]:active,fieldset[disabled] .btn-bitbucket:active,.btn-bitbucket.disabled.active,.btn-bitbucket[disabled].active,fieldset[disabled] .btn-bitbucket.active{background-color:#205081;border-color:rgba(0,0,0,0.2)}*/
/* */
/*             .btn-facebook{color:#fff;background-color:#3b5998;border-color:rgba(0,0,0,0.2)}.btn-facebook:hover,.btn-facebook:focus,.btn-facebook:active,.btn-facebook.active,.open .dropdown-toggle.btn-facebook{color:#fff;background-color:#30487b;border-color:rgba(0,0,0,0.2)}*/
/*             .btn-facebook:active,.btn-facebook.active,.open .dropdown-toggle.btn-facebook{background-image:none}*/
/*             .btn-facebook.disabled,.btn-facebook[disabled],fieldset[disabled] .btn-facebook,.btn-facebook.disabled:hover,.btn-facebook[disabled]:hover,fieldset[disabled] .btn-facebook:hover,.btn-facebook.disabled:focus,.btn-facebook[disabled]:focus,fieldset[disabled] .btn-facebook:focus,.btn-facebook.disabled:active,.btn-facebook[disabled]:active,fieldset[disabled] .btn-facebook:active,.btn-facebook.disabled.active,.btn-facebook[disabled].active,fieldset[disabled] .btn-facebook.active{background-color:#3b5998;border-color:rgba(0,0,0,0.2)}*/
/* */
/*             .btn-github{color:#fff;background-color:#444;border-color:rgba(0,0,0,0.2)}.btn-github:hover,.btn-github:focus,.btn-github:active,.btn-github.active,.open .dropdown-toggle.btn-github{color:#fff;background-color:#303030;border-color:rgba(0,0,0,0.2)}*/
/*             .btn-github:active,.btn-github.active,.open .dropdown-toggle.btn-github{background-image:none}*/
/*             .btn-github.disabled,.btn-github[disabled],fieldset[disabled] .btn-github,.btn-github.disabled:hover,.btn-github[disabled]:hover,fieldset[disabled] .btn-github:hover,.btn-github.disabled:focus,.btn-github[disabled]:focus,fieldset[disabled] .btn-github:focus,.btn-github.disabled:active,.btn-github[disabled]:active,fieldset[disabled] .btn-github:active,.btn-github.disabled.active,.btn-github[disabled].active,fieldset[disabled] .btn-github.active{background-color:#444;border-color:rgba(0,0,0,0.2)}*/
/* */
/*             .btn-linkedin{color:#fff;background-color:#007bb6;border-color:rgba(0,0,0,0.2)}.btn-linkedin:hover,.btn-linkedin:focus,.btn-linkedin:active,.btn-linkedin.active,.open .dropdown-toggle.btn-linkedin{color:#fff;background-color:#005f8d;border-color:rgba(0,0,0,0.2)}*/
/*             .btn-linkedin:active,.btn-linkedin.active,.open .dropdown-toggle.btn-linkedin{background-image:none}*/
/*             .btn-linkedin.disabled,.btn-linkedin[disabled],fieldset[disabled] .btn-linkedin,.btn-linkedin.disabled:hover,.btn-linkedin[disabled]:hover,fieldset[disabled] .btn-linkedin:hover,.btn-linkedin.disabled:focus,.btn-linkedin[disabled]:focus,fieldset[disabled] .btn-linkedin:focus,.btn-linkedin.disabled:active,.btn-linkedin[disabled]:active,fieldset[disabled] .btn-linkedin:active,.btn-linkedin.disabled.active,.btn-linkedin[disabled].active,fieldset[disabled] .btn-linkedin.active{background-color:#007bb6;border-color:rgba(0,0,0,0.2)}*/
/* */
/*             .btn-xing{color:#fff;background-color:#0B614B;border-color:rgba(0,0,0,0.2)}.btn-xing:hover,.btn-xing:focus,.btn-xing:active,.btn-xing.active,.open .dropdown-toggle.btn-xing{color:#fff;background-color:#0B614B;border-color:rgba(0,0,0,0.2)}*/
/*             .btn-xing:active,.btn-xing.active,.open .dropdown-toggle.btn-xing{background-image:none}*/
/*             .btn-xing.disabled,.btn-xing[disabled],fieldset[disabled] .btn-xing,.btn-xing.disabled:hover,.btn-xing[disabled]:hover,fieldset[disabled] .btn-xing:hover,.btn-xing.disabled:focus,.btn-xing[disabled]:focus,fieldset[disabled] .btn-xing:focus,.btn-xing.disabled:active,.btn-xing[disabled]:active,fieldset[disabled] .btn-xing:active,.btn-xing.disabled.active,.btn-xing[disabled].active,fieldset[disabled] .btn-xing.active{background-color:#0B614B;border-color:rgba(0,0,0,0.2)}*/
/*         </style>*/
/*         <div id="impressum_tab" class="col-sm-8 col-sm-offset-2 tab-pane">*/
/*             <h1>Impressum</h1><hr>*/
/*             <div class="row">*/
/*                 <div class="col-sm-6">*/
/*                     <p style="font-size: 18px;">Feel free to contact me.</p><br>*/
/*                     <b>John Doe</b><br>*/
/*                     Webdeveloper<br>*/
/*                     Somestreet 34<br>*/
/*                     CH-0000 City<br>*/
/*                 </div>*/
/*                 <div class="col-sm-6">*/
/*                     <p>*/
/*                         <a class="btn btn-social btn-facebook btn-block" href="https://www.facebook.com/John Doe">*/
/*                             <i class="fa fa-facebook"></i> Find me on Facebook*/
/*                         </a>*/
/*                     </p>*/
/*                     <p>*/
/*                         <a class="btn btn-social btn-github btn-block" href="https://bitbucket.org/John Doe/">*/
/*                             <i class="fa fa-bitbucket"></i> Follow me on BitBucked*/
/*                         </a>*/
/*                     </p>*/
/*                     <p>*/
/*                         <a class="btn btn-social btn-linkedin btn-block">*/
/*                             <i class="fa fa-linkedin"></i> Find me on LinkedIn*/
/*                         </a>*/
/*                     </p>*/
/*                     <p>*/
/*                         <a class="btn btn-social btn-xing btn-block">*/
/*                             <i class="fa fa-xing"></i> Find me on Xing*/
/*                         </a>*/
/*                     </p>*/
/*                 </div>*/
/* */
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
