<?php

/* user_settings.html */
class __TwigTemplate_c8be420c56d8e7f378691333075989b84a6d11de8ca5ae71fa23154ecc22c74c extends Twig_Template
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
<!-- Page Container -->
<div id=\"account_settings\" class=\"container\" style=\"font-family: quicksand; margin-top: 20px;\">
    <!-- Title Bar-->
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <h1>Account Settings <img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->pathFor("home"), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["profile_img"]) ? $context["profile_img"] : null), "html", null, true);
        echo "\" width=\"75px\" height=\"75px\" alt=\"User profile image\" class=\"img-circle\"></h1>
            <p>Here you can change your preferences and configurate your settings.</p>
            <br>
        </div>
    </div>

    <!-- Setting Tabs -->
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <div id=\"setting_info\">
                <!-- Setting Codes -->
                ";
        // line 18
        if (((isset($context["code"]) ? $context["code"] : null) == "profile_error_1")) {
            echo "<div data-tab=\"user_profile_tab\" class=\"message alert alert-warning\" role=\"alert\"><span class=\"fa fa-exclamation-triangle\"></span> Your profile image is to big (max size: 1MB).</div>";
        }
        // line 19
        echo "                ";
        if (((isset($context["code"]) ? $context["code"] : null) == "profile_error_2")) {
            echo "<div data-tab=\"user_profile_tab\" class=\"message alert alert-warning\" role=\"alert\"><span class=\"fa fa-exclamation-triangle\"></span> Your image profile doesnt have the correct format (allowed are .jpg, .png, .gif).</div>";
        }
        // line 20
        echo "                ";
        if (((isset($context["code"]) ? $context["code"] : null) == "profile_error_3")) {
            echo "<div data-tab=\"user_profile_tab\" class=\"message alert alert-danger\" role=\"alert\"><span class=\"fa fa-exclamation-triangle\"></span> Sorry there was an Error. Please try again.</div>";
        }
        // line 21
        echo "                ";
        if (((isset($context["code"]) ? $context["code"] : null) == "profile_success")) {
            echo "<div data-tab=\"user_profile_tab\" class=\"message alert alert-success\" role=\"alert\"><span class=\"fa fa-check-circle-o\"></span> Profile successfully updatet.</div>";
        }
        // line 22
        echo "                ";
        if (((isset($context["code"]) ? $context["code"] : null) == "password_error_1")) {
            echo "<div data-tab=\"reset_password_tab\" class=\"message alert alert-warning\" role=\"alert\"><span class=\"fa fa-exclamation-triangle\"></span> Password dosnt match the retyped password. Please try again.</div>";
        }
        // line 23
        echo "                ";
        if (((isset($context["code"]) ? $context["code"] : null) == "password_error_2")) {
            echo "<div data-tab=\"reset_password_tab\" class=\"message alert alert-warning\" role=\"alert\"><span class=\"fa fa-exclamation-triangle\"></span> The Old Password is not correct. Please try again.</div>";
        }
        // line 24
        echo "                ";
        if (((isset($context["code"]) ? $context["code"] : null) == "password_success_1")) {
            echo "<div data-tab=\"reset_password_tab\" class=\"message alert alert-success\" role=\"alert\"><span class=\"fa fa-check-circle-o\"></span> Password successfully changed.</div>";
        }
        // line 25
        echo "                ";
        if (((isset($context["code"]) ? $context["code"] : null) == "email_success_1")) {
            echo "<div data-tab=\"reset_email_tab\" class=\"message alert alert-success\" role=\"alert\"><span class=\"fa fa-envelope-o\"></span> The email change link is sendet. Please Check your mails.</div>";
        }
        // line 26
        echo "                ";
        if (((isset($context["code"]) ? $context["code"] : null) == "email_error_1")) {
            echo "<div data-tab=\"reset_email_tab\" class=\"message alert alert-warning\" role=\"alert\"><span class=\"fa fa-exclamation-triangle\"></span> Sorry there was an Error. Please try again.</div>";
        }
        // line 27
        echo "                ";
        if (((isset($context["code"]) ? $context["code"] : null) == "email_success_2")) {
            echo "<div data-tab=\"reset_email_tab\" class=\"message alert alert-success\" role=\"alert\"><span class=\"fa fa-check-circle-o\"></span> Email successfully changed.</div>";
        }
        // line 28
        echo "                ";
        if (((isset($context["code"]) ? $context["code"] : null) == "delete_error_1")) {
            echo "<div data-tab=\"delete_account_tab\" class=\"message alert alert-warning\" role=\"alert\"><span class=\"fa fa-exclamation-triangle\"></span> Please write \"Yes\" in the first Checkbox. Please try again.</div>";
        }
        // line 29
        echo "                ";
        if (((isset($context["code"]) ? $context["code"] : null) == "delete_error_2")) {
            echo "<div data-tab=\"delete_account_tab\" class=\"message alert alert-warning\" role=\"alert\"><span class=\"fa fa-exclamation-triangle\"></span> Please enter you correct account Password..</div>";
        }
        // line 30
        echo "            </div>
            <ul class=\"nav nav-tabs\">
                <li role=\"presentation\" class=\"active\"><a href=\"#user_profile_tab\" data-toggle=\"tab\">User Profile</a></li>
                <li role=\"presentation\"><a href=\"#reset_password_tab\" data-toggle=\"tab\">Reset Password</a></li>
                <li role=\"presentation\"><a href=\"#reset_email_tab\" data-toggle=\"tab\">Reset Email</a></li>
                <li role=\"presentation\"><a href=\"#delete_account_tab\" data-toggle=\"tab\">Delete Account</a></li>
            </ul>
        </div>
    </div>

    <!-- User Settings Page -->
    <div class=\"row\">
        <div class=\"col-lg-12 tab-content\">
            <!-- User Profile Tab -->
            <div id=\"user_profile_tab\" class=\"panel panel-default tab-pane active\" style=\"border-top: none;\">
                <div class=\"panel-body \">
                    <form action=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->pathFor("account_change_profile"), "html", null, true);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
                        <div class=\"form-group\">
                            <label for=\"nickname\">Nickname</label>
                            <input type=\"text\" name=\"nickname\" class=\"form-control\" id=\"nickname\" placeholder=\"Nickname\" value=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form_data"]) ? $context["form_data"] : null), "nickname", array()), "html", null, true);
        echo "\">
                        </div>
                        <div class=\"form-group\">
                            <label for=\"default_lang\">Default Language</label>
                            <select class=\"form-control\" name=\"language\" id=\"default_lang\">
                                ";
        // line 54
        if (($this->getAttribute((isset($context["form_data"]) ? $context["form_data"] : null), "default_lang", array()) == "en")) {
            // line 55
            echo "                                    <option value=\"en\" selected>English</option>
                                ";
        } else {
            // line 57
            echo "                                    <option value=\"en\">English</option>
                                ";
        }
        // line 59
        echo "                                ";
        if (($this->getAttribute((isset($context["form_data"]) ? $context["form_data"] : null), "default_lang", array()) == "de")) {
            // line 60
            echo "                                    <option value=\"de\" selected>Deutsch</option>
                                ";
        } else {
            // line 62
            echo "                                    <option value=\"de\">Deutsch</option>
                                ";
        }
        // line 64
        echo "                                ";
        if (($this->getAttribute((isset($context["form_data"]) ? $context["form_data"] : null), "default_lang", array()) == "fr")) {
            // line 65
            echo "                                    <option value=\"fr\" selected>Français</option>
                                ";
        } else {
            // line 67
            echo "                                    <option value=\"fr\">Français</option>
                                ";
        }
        // line 69
        echo "                                ";
        if (($this->getAttribute((isset($context["form_data"]) ? $context["form_data"] : null), "default_lang", array()) == "it")) {
            // line 70
            echo "                                    <option value=\"it\" selected>Italiano</option>
                                ";
        } else {
            // line 72
            echo "                                    <option value=\"it\">Italiano</option>
                                ";
        }
        // line 74
        echo "                            </select>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"profile_img\">Profile Image</label>
                            <input type=\"file\" name=\"profile_img\" id=\"profile_img\">
                            <p class=\"help-block\">Upload your Profile Image. (max. 1MB)</p>
                        </div>

                        <button type=\"submit\" class=\"btn btn-default\"><span class=\"fa fa-save\"></span> Save</button>
                    </form>
                </div>
            </div>

            <!-- Reset Password Tab -->
            <div id=\"reset_password_tab\" class=\"panel panel-default tab-pane\" style=\"border-top: none;\">
                <div class=\"panel-body \">
                    <form  action=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->pathFor("account_change_password"), "html", null, true);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
                        <div class=\"form-group\">
                            <label for=\"old_password\">Old Password</label>
                            <input type=\"password\" name=\"old_password\" class=\"form-control\" id=\"old_password\" placeholder=\"Old Password\">
                        </div>
                        <div class=\"form-group\">
                            <label for=\"new_password_1\">New Password</label>
                            <input type=\"password\" name=\"new_password_1\" class=\"form-control\" id=\"new_password_1\" placeholder=\"New Password\">
                        </div>
                        <div class=\"form-group\">
                            <label for=\"new_password_2\">Retype new Password</label>
                            <input type=\"password\" name=\"new_password_2\" class=\"form-control\" id=\"new_password_2\" placeholder=\"New Password\">
                        </div>

                        <button type=\"submit\" class=\"btn btn-default\"><span class=\"fa fa-save\"></span> Save</button>
                    </form>
                </div>
            </div>

            <!-- Reset Email Tab -->
            <div id=\"reset_email_tab\" class=\"panel panel-default tab-pane\" style=\"border-top: none;\">
                <div class=\"panel-body \">
                    <form action=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->pathFor("account_send_change_email"), "html", null, true);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
                        <p>If you want to change your email address (witch is also your loginname), type in your new email and we send you a activation link.</p>
                        <div class=\"form-group\">
                            <label for=\"new_email\">New Email</label>
                            <input type=\"email\" name=\"email\" class=\"form-control\" id=\"new_email\" placeholder=\"New Email\">
                        </div>
                        <button type=\"submit\" class=\"btn btn-default\"><span class=\"fa fa-envelope-o\"></span> Send Change Link</button>
                    </form>
                </div>
            </div>

            <!-- Delete Account Tab -->
            <div id=\"delete_account_tab\" class=\"panel panel-default tab-pane\" style=\"border-top: none;\">
                <div class=\"panel-body \">
                    <form action=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->pathFor("account_delete"), "html", null, true);
        echo "\" method=\"post\">
                        <div class=\"alert alert-danger\" role=\"alert\"><b>Caution:</b><br> After you deleted your account it is not possible to restore it!!</div>
                        <div class=\"form-group\">
                            <label for=\"delete\">Do You realy want to delete this awesome Account ?</label>
                            <input type=\"text\" name=\"delete\" class=\"form-control\" id=\"delete\" placeholder=\"Type the Word: 'Yes' in here.\">
                        </div>
                        <div class=\"form-group\">
                            <label for=\"delete_password\">Type in your Account Password</label>
                            <input type=\"password\" name=\"delete_password\" class=\"form-control\" id=\"delete_password\" placeholder=\"Password\">
                        </div>
                        <button type=\"submit\" class=\"btn btn-danger\"><span class=\"fa fa-trash\"></span> Delete Account</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "user_settings.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 126,  219 => 112,  194 => 90,  176 => 74,  172 => 72,  168 => 70,  165 => 69,  161 => 67,  157 => 65,  154 => 64,  150 => 62,  146 => 60,  143 => 59,  139 => 57,  135 => 55,  133 => 54,  125 => 49,  119 => 46,  101 => 30,  96 => 29,  91 => 28,  86 => 27,  81 => 26,  76 => 25,  71 => 24,  66 => 23,  61 => 22,  56 => 21,  51 => 20,  46 => 19,  42 => 18,  27 => 7,  19 => 1,);
    }
}
/* */
/* <!-- Page Container -->*/
/* <div id="account_settings" class="container" style="font-family: quicksand; margin-top: 20px;">*/
/*     <!-- Title Bar-->*/
/*     <div class="row">*/
/*         <div class="col-lg-12">*/
/*             <h1>Account Settings <img src="{{ path_for('home') }}{{ profile_img }}" width="75px" height="75px" alt="User profile image" class="img-circle"></h1>*/
/*             <p>Here you can change your preferences and configurate your settings.</p>*/
/*             <br>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <!-- Setting Tabs -->*/
/*     <div class="row">*/
/*         <div class="col-lg-12">*/
/*             <div id="setting_info">*/
/*                 <!-- Setting Codes -->*/
/*                 {% if code == "profile_error_1" %}<div data-tab="user_profile_tab" class="message alert alert-warning" role="alert"><span class="fa fa-exclamation-triangle"></span> Your profile image is to big (max size: 1MB).</div>{% endif %}*/
/*                 {% if code == "profile_error_2" %}<div data-tab="user_profile_tab" class="message alert alert-warning" role="alert"><span class="fa fa-exclamation-triangle"></span> Your image profile doesnt have the correct format (allowed are .jpg, .png, .gif).</div>{% endif %}*/
/*                 {% if code == "profile_error_3" %}<div data-tab="user_profile_tab" class="message alert alert-danger" role="alert"><span class="fa fa-exclamation-triangle"></span> Sorry there was an Error. Please try again.</div>{% endif %}*/
/*                 {% if code == "profile_success" %}<div data-tab="user_profile_tab" class="message alert alert-success" role="alert"><span class="fa fa-check-circle-o"></span> Profile successfully updatet.</div>{% endif %}*/
/*                 {% if code == "password_error_1" %}<div data-tab="reset_password_tab" class="message alert alert-warning" role="alert"><span class="fa fa-exclamation-triangle"></span> Password dosnt match the retyped password. Please try again.</div>{% endif %}*/
/*                 {% if code == "password_error_2" %}<div data-tab="reset_password_tab" class="message alert alert-warning" role="alert"><span class="fa fa-exclamation-triangle"></span> The Old Password is not correct. Please try again.</div>{% endif %}*/
/*                 {% if code == "password_success_1" %}<div data-tab="reset_password_tab" class="message alert alert-success" role="alert"><span class="fa fa-check-circle-o"></span> Password successfully changed.</div>{% endif %}*/
/*                 {% if code == "email_success_1" %}<div data-tab="reset_email_tab" class="message alert alert-success" role="alert"><span class="fa fa-envelope-o"></span> The email change link is sendet. Please Check your mails.</div>{% endif %}*/
/*                 {% if code == "email_error_1" %}<div data-tab="reset_email_tab" class="message alert alert-warning" role="alert"><span class="fa fa-exclamation-triangle"></span> Sorry there was an Error. Please try again.</div>{% endif %}*/
/*                 {% if code == "email_success_2" %}<div data-tab="reset_email_tab" class="message alert alert-success" role="alert"><span class="fa fa-check-circle-o"></span> Email successfully changed.</div>{% endif %}*/
/*                 {% if code == "delete_error_1" %}<div data-tab="delete_account_tab" class="message alert alert-warning" role="alert"><span class="fa fa-exclamation-triangle"></span> Please write "Yes" in the first Checkbox. Please try again.</div>{% endif %}*/
/*                 {% if code == "delete_error_2" %}<div data-tab="delete_account_tab" class="message alert alert-warning" role="alert"><span class="fa fa-exclamation-triangle"></span> Please enter you correct account Password..</div>{% endif %}*/
/*             </div>*/
/*             <ul class="nav nav-tabs">*/
/*                 <li role="presentation" class="active"><a href="#user_profile_tab" data-toggle="tab">User Profile</a></li>*/
/*                 <li role="presentation"><a href="#reset_password_tab" data-toggle="tab">Reset Password</a></li>*/
/*                 <li role="presentation"><a href="#reset_email_tab" data-toggle="tab">Reset Email</a></li>*/
/*                 <li role="presentation"><a href="#delete_account_tab" data-toggle="tab">Delete Account</a></li>*/
/*             </ul>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <!-- User Settings Page -->*/
/*     <div class="row">*/
/*         <div class="col-lg-12 tab-content">*/
/*             <!-- User Profile Tab -->*/
/*             <div id="user_profile_tab" class="panel panel-default tab-pane active" style="border-top: none;">*/
/*                 <div class="panel-body ">*/
/*                     <form action="{{ path_for('account_change_profile') }}" method="post" enctype="multipart/form-data">*/
/*                         <div class="form-group">*/
/*                             <label for="nickname">Nickname</label>*/
/*                             <input type="text" name="nickname" class="form-control" id="nickname" placeholder="Nickname" value="{{ form_data.nickname }}">*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label for="default_lang">Default Language</label>*/
/*                             <select class="form-control" name="language" id="default_lang">*/
/*                                 {% if form_data.default_lang == 'en' %}*/
/*                                     <option value="en" selected>English</option>*/
/*                                 {% else %}*/
/*                                     <option value="en">English</option>*/
/*                                 {% endif %}*/
/*                                 {% if form_data.default_lang == 'de' %}*/
/*                                     <option value="de" selected>Deutsch</option>*/
/*                                 {% else %}*/
/*                                     <option value="de">Deutsch</option>*/
/*                                 {% endif %}*/
/*                                 {% if form_data.default_lang == 'fr' %}*/
/*                                     <option value="fr" selected>Français</option>*/
/*                                 {% else %}*/
/*                                     <option value="fr">Français</option>*/
/*                                 {% endif %}*/
/*                                 {% if form_data.default_lang == 'it' %}*/
/*                                     <option value="it" selected>Italiano</option>*/
/*                                 {% else %}*/
/*                                     <option value="it">Italiano</option>*/
/*                                 {% endif %}*/
/*                             </select>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label for="profile_img">Profile Image</label>*/
/*                             <input type="file" name="profile_img" id="profile_img">*/
/*                             <p class="help-block">Upload your Profile Image. (max. 1MB)</p>*/
/*                         </div>*/
/* */
/*                         <button type="submit" class="btn btn-default"><span class="fa fa-save"></span> Save</button>*/
/*                     </form>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <!-- Reset Password Tab -->*/
/*             <div id="reset_password_tab" class="panel panel-default tab-pane" style="border-top: none;">*/
/*                 <div class="panel-body ">*/
/*                     <form  action="{{ path_for('account_change_password') }}" method="post" enctype="multipart/form-data">*/
/*                         <div class="form-group">*/
/*                             <label for="old_password">Old Password</label>*/
/*                             <input type="password" name="old_password" class="form-control" id="old_password" placeholder="Old Password">*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label for="new_password_1">New Password</label>*/
/*                             <input type="password" name="new_password_1" class="form-control" id="new_password_1" placeholder="New Password">*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label for="new_password_2">Retype new Password</label>*/
/*                             <input type="password" name="new_password_2" class="form-control" id="new_password_2" placeholder="New Password">*/
/*                         </div>*/
/* */
/*                         <button type="submit" class="btn btn-default"><span class="fa fa-save"></span> Save</button>*/
/*                     </form>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <!-- Reset Email Tab -->*/
/*             <div id="reset_email_tab" class="panel panel-default tab-pane" style="border-top: none;">*/
/*                 <div class="panel-body ">*/
/*                     <form action="{{ path_for('account_send_change_email') }}" method="post" enctype="multipart/form-data">*/
/*                         <p>If you want to change your email address (witch is also your loginname), type in your new email and we send you a activation link.</p>*/
/*                         <div class="form-group">*/
/*                             <label for="new_email">New Email</label>*/
/*                             <input type="email" name="email" class="form-control" id="new_email" placeholder="New Email">*/
/*                         </div>*/
/*                         <button type="submit" class="btn btn-default"><span class="fa fa-envelope-o"></span> Send Change Link</button>*/
/*                     </form>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <!-- Delete Account Tab -->*/
/*             <div id="delete_account_tab" class="panel panel-default tab-pane" style="border-top: none;">*/
/*                 <div class="panel-body ">*/
/*                     <form action="{{ path_for('account_delete') }}" method="post">*/
/*                         <div class="alert alert-danger" role="alert"><b>Caution:</b><br> After you deleted your account it is not possible to restore it!!</div>*/
/*                         <div class="form-group">*/
/*                             <label for="delete">Do You realy want to delete this awesome Account ?</label>*/
/*                             <input type="text" name="delete" class="form-control" id="delete" placeholder="Type the Word: 'Yes' in here.">*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label for="delete_password">Type in your Account Password</label>*/
/*                             <input type="password" name="delete_password" class="form-control" id="delete_password" placeholder="Password">*/
/*                         </div>*/
/*                         <button type="submit" class="btn btn-danger"><span class="fa fa-trash"></span> Delete Account</button>*/
/*                     </form>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
