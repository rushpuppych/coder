<?php

/* index.html */
class __TwigTemplate_94e351d4983e77a5b47b493b274009ce175dc0dd3acbf2aad1f0373bc05c31b2 extends Twig_Template
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
<!DOCTYPE html>
<html lang=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "html_lang", array()), "html", null, true);
        echo "\">
    <head>
        <!-- Page Config -->
        <meta charset=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "meta_charset", array()), "html", null, true);
        echo "\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta name=\"description\" content=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "meta_description", array()), "html", null, true);
        echo "\">
        <meta name=\"keywords\" content=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "meta_keywords", array()), "html", null, true);
        echo "\">
        <meta name=\"application-name\" content=\"";
        // line 11
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "meta_application", array()) - (isset($context["name"]) ? $context["name"] : null)), "html", null, true);
        echo "\">
        <meta name=\"author\" content=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "meta_author", array()), "html", null, true);
        echo "\">
        <title>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "page_title", array()), "html", null, true);
        echo "</title>
         
        <!-- Including Framework Stylesheets -->
        <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->pathFor("home"), "html", null, true);
        echo "assets/javascript/bootstrap-3.3.6/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->pathFor("home"), "html", null, true);
        echo "assets/javascript/flat-ui-master/dist/css/flat-ui.min.css\">
        <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->pathFor("home"), "html", null, true);
        echo "assets/javascript/font-awesome-4.5.0/css/font-awesome.min.css\">
        
        <!-- Including Custom Stylesheets -->
        <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->pathFor("home"), "html", null, true);
        echo "assets/fonts/fonts.css\">
        <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->pathFor("home"), "html", null, true);
        echo "assets/image/backgrounds/bg_geo/bg_geo.css\">
        <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->pathFor("home"), "html", null, true);
        echo "assets/styles/global_style.css\">
    </head>
    <body>
        <div id=\"app\">
            <!-- Bootstrap Navigation -->
            ";
        // line 28
        echo twig_include($this->env, $context, "navigation.html");
        echo "

            <!-- Vue Routing Body -->
            ";
        // line 31
        echo twig_include($this->env, $context, (isset($context["page"]) ? $context["page"] : null));
        echo "
        </div>
    </body>
    
    <!-- Include Framework Javascripts -->
    <script type=\"text/javascript\" src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->pathFor("home"), "html", null, true);
        echo "assets/javascript/jquery-1.12.1/jquery-1.12.1.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->pathFor("home"), "html", null, true);
        echo "assets/javascript/flat-ui-master/dist/js/flat-ui.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->pathFor("home"), "html", null, true);
        echo "assets/javascript/vue.js/vue.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->pathFor("home"), "html", null, true);
        echo "assets/javascript/vue.js/vue-strap.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->pathFor("home"), "html", null, true);
        echo "assets/javascript/vue.js/vue-validator.min.js\"></script>
    <script type=\"text/javascript\">Vue.config.delimiters = ['[[', ']]'];</script>
    ";
        // line 42
        if (array_key_exists("vue", $context)) {
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('slim')->pathFor("home"), "html", null, true);
            echo "app/templates/";
            echo twig_escape_filter($this->env, (isset($context["vue"]) ? $context["vue"] : null), "html", null, true);
            echo "\"></script>";
        }
        // line 43
        echo "    <script type=\"text/javascript\" src='https://www.google.com/recaptcha/api.js'></script>

    <!-- Load Components -->
    ";
        // line 46
        if (array_key_exists("components", $context)) {
            // line 47
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["components"]) ? $context["components"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["component"]) {
                // line 48
                echo "            <script type=\"text/javascript\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('slim')->pathFor("home"), "html", null, true);
                echo "app/components/";
                echo twig_escape_filter($this->env, $context["component"], "html", null, true);
                echo ".js\"></script>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['component'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "    ";
        }
        // line 51
        echo "    
    <!-- Custom Javascripts-->
    
</html>";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 51,  153 => 50,  142 => 48,  137 => 47,  135 => 46,  130 => 43,  122 => 42,  117 => 40,  113 => 39,  109 => 38,  105 => 37,  101 => 36,  93 => 31,  87 => 28,  79 => 23,  75 => 22,  71 => 21,  65 => 18,  61 => 17,  57 => 16,  51 => 13,  47 => 12,  43 => 11,  39 => 10,  35 => 9,  29 => 6,  23 => 3,  19 => 1,);
    }
}
/* */
/* <!DOCTYPE html>*/
/* <html lang="{{ config.html_lang }}">*/
/*     <head>*/
/*         <!-- Page Config -->*/
/*         <meta charset="{{ config.meta_charset }}">*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*         <meta name="description" content="{{ config.meta_description }}">*/
/*         <meta name="keywords" content="{{ config.meta_keywords }}">*/
/*         <meta name="application-name" content="{{ config.meta_application-name }}">*/
/*         <meta name="author" content="{{ config.meta_author }}">*/
/*         <title>{{ config.page_title }}</title>*/
/*          */
/*         <!-- Including Framework Stylesheets -->*/
/*         <link rel="stylesheet" href="{{ path_for('home') }}assets/javascript/bootstrap-3.3.6/css/bootstrap.min.css">*/
/*         <link rel="stylesheet" href="{{ path_for('home') }}assets/javascript/flat-ui-master/dist/css/flat-ui.min.css">*/
/*         <link rel="stylesheet" href="{{ path_for('home') }}assets/javascript/font-awesome-4.5.0/css/font-awesome.min.css">*/
/*         */
/*         <!-- Including Custom Stylesheets -->*/
/*         <link rel="stylesheet" href="{{ path_for('home') }}assets/fonts/fonts.css">*/
/*         <link rel="stylesheet" href="{{ path_for('home') }}assets/image/backgrounds/bg_geo/bg_geo.css">*/
/*         <link rel="stylesheet" href="{{ path_for('home') }}assets/styles/global_style.css">*/
/*     </head>*/
/*     <body>*/
/*         <div id="app">*/
/*             <!-- Bootstrap Navigation -->*/
/*             {{ include('navigation.html') }}*/
/* */
/*             <!-- Vue Routing Body -->*/
/*             {{ include(page) }}*/
/*         </div>*/
/*     </body>*/
/*     */
/*     <!-- Include Framework Javascripts -->*/
/*     <script type="text/javascript" src="{{ path_for('home') }}assets/javascript/jquery-1.12.1/jquery-1.12.1.min.js"></script>*/
/*     <script type="text/javascript" src="{{ path_for('home') }}assets/javascript/flat-ui-master/dist/js/flat-ui.min.js"></script>*/
/*     <script type="text/javascript" src="{{ path_for('home') }}assets/javascript/vue.js/vue.min.js"></script>*/
/*     <script type="text/javascript" src="{{ path_for('home') }}assets/javascript/vue.js/vue-strap.min.js"></script>*/
/*     <script type="text/javascript" src="{{ path_for('home') }}assets/javascript/vue.js/vue-validator.min.js"></script>*/
/*     <script type="text/javascript">Vue.config.delimiters = ['[[', ']]'];</script>*/
/*     {% if vue is defined %}<script type="text/javascript" src="{{ path_for('home') }}app/templates/{{ vue }}"></script>{% endif %}*/
/*     <script type="text/javascript" src='https://www.google.com/recaptcha/api.js'></script>*/
/* */
/*     <!-- Load Components -->*/
/*     {% if components is defined %}*/
/*         {% for component in components %}*/
/*             <script type="text/javascript" src="{{ path_for('home') }}app/components/{{ component }}.js"></script>*/
/*         {% endfor %}*/
/*     {% endif %}*/
/*     */
/*     <!-- Custom Javascripts-->*/
/*     */
/* </html>*/
