<?php

/* home_user.html */
class __TwigTemplate_2e98fdeacf42ce60a550823736fd89644d73da2b0d7b7a95adcf33c8e2ecc381 extends Twig_Template
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
        echo "<!-- Page Container -->
<div class=\"container\" style=\"font-family: quicksand;\">

    <!-- Home User Page -->
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <h1>Hi, ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "nickname", array()), "html", null, true);
        echo " ";
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "profile_img", array(), "any", true, true)) {
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('slim')->pathFor("home"), "html", null, true);
            echo twig_escape_filter($this->env, (isset($context["profile_img"]) ? $context["profile_img"] : null), "html", null, true);
            echo "\" width=\"75px\" height=\"75px\" alt=\"User profile image\" class=\"img-circle\">";
        }
        echo "</h1>
            <p>Here is the Dashboard Section and you are successfully logged in.</p>
            <hr>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "home_user.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 7,  19 => 1,);
    }
}
/* <!-- Page Container -->*/
/* <div class="container" style="font-family: quicksand;">*/
/* */
/*     <!-- Home User Page -->*/
/*     <div class="row">*/
/*         <div class="col-lg-12">*/
/*             <h1>Hi, {{ user.nickname }} {% if user.profile_img is defined %}<img src="{{ path_for('home') }}{{ profile_img }}" width="75px" height="75px" alt="User profile image" class="img-circle">{% endif %}</h1>*/
/*             <p>Here is the Dashboard Section and you are successfully logged in.</p>*/
/*             <hr>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
