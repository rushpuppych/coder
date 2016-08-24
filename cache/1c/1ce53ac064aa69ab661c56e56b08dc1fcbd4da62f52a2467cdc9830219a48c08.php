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
        echo "
<!-- BG Image Title -->
<div id=\"home\" class=\"container-fluid bg_geo_01 anim_bg bg_box_shadow_01\" style=\"height: 500px; width: 100%;\">
    <div style=\"text-align: center; font-family: quicksand; font-size: 100px; color: #ffffff; padding-top: 30px;\">
        Hi, ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "nickname", array()), "html", null, true);
        echo "
    </div>
    <div style=\"text-align: center; font-family: quicksand; font-size: 21px; color: #ffffff; padding-top: 0px;\">
        Here is the Dashboard Section and you are successfully logged in.
    </div>

    <div class=\"container\">
        <div class=\"row\">

        </div>
    </div>


</div>
<div class=\"container-fluid\">&nbsp;</div>

<!-- Page Container -->
<div class=\"container\" style=\"font-family: quicksand;\">

    <!-- Home User Page -->
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <h1>Hi, ";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "nickname", array()), "html", null, true);
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
        return array (  50 => 27,  25 => 5,  19 => 1,);
    }
}
/* */
/* <!-- BG Image Title -->*/
/* <div id="home" class="container-fluid bg_geo_01 anim_bg bg_box_shadow_01" style="height: 500px; width: 100%;">*/
/*     <div style="text-align: center; font-family: quicksand; font-size: 100px; color: #ffffff; padding-top: 30px;">*/
/*         Hi, {{ user.nickname }}*/
/*     </div>*/
/*     <div style="text-align: center; font-family: quicksand; font-size: 21px; color: #ffffff; padding-top: 0px;">*/
/*         Here is the Dashboard Section and you are successfully logged in.*/
/*     </div>*/
/* */
/*     <div class="container">*/
/*         <div class="row">*/
/* */
/*         </div>*/
/*     </div>*/
/* */
/* */
/* </div>*/
/* <div class="container-fluid">&nbsp;</div>*/
/* */
/* <!-- Page Container -->*/
/* <div class="container" style="font-family: quicksand;">*/
/* */
/*     <!-- Home User Page -->*/
/*     <div class="row">*/
/*         <div class="col-lg-12">*/
/*             <h1>Hi, {{ user.nickname }}</h1>*/
/*             <p>Here is the Dashboard Section and you are successfully logged in.</p>*/
/*             <hr>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
