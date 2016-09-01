<?php

/* navigation.html */
class __TwigTemplate_4827b82640c4b0f8d816b5bc669072e78c124b2e908e16e948d5c22bec873f8b extends Twig_Template
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
<!-- Bootstrap Navigation -->
<nav id=\"bootstrap-navigation\" class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
    <div class=\"container\">

        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->pathFor("home"), "html", null, true);
        echo "\">
                <span class=\"fa fa-angle-left\"></span><span class=\"fa fa-bolt\"></span><span class=\"fa fa-angle-right\"></span> CodeBot
            </a>
        </div>

        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            <!-- Render Navigation Left -->
            <ul class=\"nav navbar-nav\">
                ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["navigation"]) ? $context["navigation"] : null), "left", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["navi"]) {
            // line 22
            echo "                    ";
            if ($this->getAttribute($context["navi"], "children", array(), "any", true, true)) {
                // line 23
                echo "                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"><i class=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($context["navi"], "icon", array()), "html", null, true);
                echo "\"></i> ";
                if ($this->getAttribute($context["navi"], "badge", array(), "any", true, true)) {
                    echo "<span class=\"badge\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["navi"], "badge", array()), "html", null, true);
                    echo "</span> ";
                }
                echo twig_escape_filter($this->env, $this->getAttribute($context["navi"], "text", array()), "html", null, true);
                echo " </a>
                        <ul class=\"dropdown-menu\">
                            ";
                // line 26
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["navi"], "children", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 27
                    echo "                                ";
                    if ($this->getAttribute($context["child"], "href", array(), "any", true, true)) {
                        // line 28
                        echo "                                    <li><a href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "href", array()), "html", null, true);
                        echo "\"><i class=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "icon", array()), "html", null, true);
                        echo "\"></i> ";
                        if ($this->getAttribute($context["child"], "badge", array(), "any", true, true)) {
                            echo "<span class=\"badge\">";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "badge", array()), "html", null, true);
                            echo "</span> ";
                        }
                        echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "text", array()), "html", null, true);
                        echo "</a></li>
                                ";
                    } elseif ($this->getAttribute(                    // line 29
$context["child"], "linkto", array(), "any", true, true)) {
                        // line 30
                        echo "                                    ";
                        if ($this->getAttribute($context["child"], "args", array(), "any", true, true)) {
                            // line 31
                            echo "                                        <li><a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('slim')->pathFor($this->getAttribute($context["child"], "linkto", array()), $this->getAttribute($context["child"], "args", array())), "html", null, true);
                            echo "\"><i class=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "icon", array()), "html", null, true);
                            echo "\"></i> ";
                            if ($this->getAttribute($context["child"], "badge", array(), "any", true, true)) {
                                echo "<span class=\"badge\">";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "badge", array()), "html", null, true);
                                echo "</span> ";
                            }
                            echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "text", array()), "html", null, true);
                            echo "</a></li>
                                    ";
                        } else {
                            // line 33
                            echo "                                        <li><a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('slim')->pathFor($this->getAttribute($context["child"], "linkto", array())), "html", null, true);
                            echo "\"><i class=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "icon", array()), "html", null, true);
                            echo "\"></i> ";
                            if ($this->getAttribute($context["child"], "badge", array(), "any", true, true)) {
                                echo "<span class=\"badge\">";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "badge", array()), "html", null, true);
                                echo "</span> ";
                            }
                            echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "text", array()), "html", null, true);
                            echo "</a></li>
                                    ";
                        }
                        // line 35
                        echo "                                ";
                    } elseif ($this->getAttribute($context["child"], "divider", array(), "any", true, true)) {
                        // line 36
                        echo "                                    <li role=\"separator\" class=\"divider\"></li>
                                ";
                    }
                    // line 38
                    echo "                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 39
                echo "                        </ul>
                    </li>
                    ";
            } elseif ($this->getAttribute(            // line 41
$context["navi"], "href", array(), "any", true, true)) {
                // line 42
                echo "                        <li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["navi"], "href", array()), "html", null, true);
                echo "\"><i class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["navi"], "icon", array()), "html", null, true);
                echo "\"></i> ";
                if ($this->getAttribute($context["navi"], "badge", array(), "any", true, true)) {
                    echo "<span class=\"badge\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["navi"], "badge", array()), "html", null, true);
                    echo "</span> ";
                }
                echo twig_escape_filter($this->env, $this->getAttribute($context["navi"], "text", array()), "html", null, true);
                echo "</a></li>
                    ";
            } elseif ($this->getAttribute(            // line 43
$context["navi"], "linkto", array(), "any", true, true)) {
                // line 44
                echo "                        <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('slim')->pathFor($this->getAttribute($context["navi"], "linkto", array())), "html", null, true);
                echo "\"><i class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["navi"], "icon", array()), "html", null, true);
                echo "\"></i> ";
                if ($this->getAttribute($context["navi"], "badge", array(), "any", true, true)) {
                    echo "<span class=\"badge\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["navi"], "badge", array()), "html", null, true);
                    echo "</span> ";
                }
                echo twig_escape_filter($this->env, $this->getAttribute($context["navi"], "text", array()), "html", null, true);
                echo "</a></li>
                    ";
            }
            // line 46
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['navi'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "            </ul>

            <!-- Render Navigation Right -->
            <ul class=\"nav navbar-nav navbar-right\">
                ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["navigation"]) ? $context["navigation"] : null), "right", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["navi"]) {
            // line 52
            echo "                    ";
            if ($this->getAttribute($context["navi"], "children", array(), "any", true, true)) {
                // line 53
                echo "                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"><i class=\"";
                // line 54
                echo twig_escape_filter($this->env, $this->getAttribute($context["navi"], "icon", array()), "html", null, true);
                echo "\"></i> ";
                if ($this->getAttribute($context["navi"], "badge", array(), "any", true, true)) {
                    echo "<span class=\"badge\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["navi"], "badge", array()), "html", null, true);
                    echo "</span> ";
                }
                echo twig_escape_filter($this->env, $this->getAttribute($context["navi"], "text", array()), "html", null, true);
                echo "</a>
                        <ul class=\"dropdown-menu\">
                            ";
                // line 56
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["navi"], "children", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 57
                    echo "                                ";
                    if ($this->getAttribute($context["child"], "href", array(), "any", true, true)) {
                        // line 58
                        echo "                                    <li><a href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "href", array()), "html", null, true);
                        echo "\"><i class=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "icon", array()), "html", null, true);
                        echo "\"></i> ";
                        if ($this->getAttribute($context["child"], "badge", array(), "any", true, true)) {
                            echo "<span class=\"badge\">";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "badge", array()), "html", null, true);
                            echo "</span> ";
                        }
                        echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "text", array()), "html", null, true);
                        echo "</a></li>
                                ";
                    } elseif ($this->getAttribute(                    // line 59
$context["child"], "linkto", array(), "any", true, true)) {
                        // line 60
                        echo "                                    ";
                        if ($this->getAttribute($context["child"], "args", array(), "any", true, true)) {
                            // line 61
                            echo "                                        <li><a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('slim')->pathFor($this->getAttribute($context["child"], "linkto", array()), $this->getAttribute($context["child"], "args", array())), "html", null, true);
                            echo "\"><i class=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "icon", array()), "html", null, true);
                            echo "\"></i> ";
                            if ($this->getAttribute($context["child"], "badge", array(), "any", true, true)) {
                                echo "<span class=\"badge\">";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "badge", array()), "html", null, true);
                                echo "</span> ";
                            }
                            echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "text", array()), "html", null, true);
                            echo "</a></li>
                                    ";
                        } else {
                            // line 63
                            echo "                                        <li><a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('slim')->pathFor($this->getAttribute($context["child"], "linkto", array())), "html", null, true);
                            echo "\"><i class=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "icon", array()), "html", null, true);
                            echo "\"></i> ";
                            if ($this->getAttribute($context["child"], "badge", array(), "any", true, true)) {
                                echo "<span class=\"badge\">";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "badge", array()), "html", null, true);
                                echo "</span> ";
                            }
                            echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "text", array()), "html", null, true);
                            echo "</a></li>
                                    ";
                        }
                        // line 65
                        echo "                                ";
                    } elseif ($this->getAttribute($context["child"], "divider", array(), "any", true, true)) {
                        // line 66
                        echo "                                    <li role=\"separator\" class=\"divider\"></li>
                                ";
                    }
                    // line 68
                    echo "                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 69
                echo "                        </ul>
                    </li>
                    ";
            } elseif ($this->getAttribute(            // line 71
$context["navi"], "href", array(), "any", true, true)) {
                // line 72
                echo "                    <li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["navi"], "href", array()), "html", null, true);
                echo "\"><i class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["navi"], "icon", array()), "html", null, true);
                echo "\"></i> ";
                if ($this->getAttribute($context["navi"], "badge", array(), "any", true, true)) {
                    echo "<span class=\"badge\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["navi"], "badge", array()), "html", null, true);
                    echo "</span> ";
                }
                echo twig_escape_filter($this->env, $this->getAttribute($context["navi"], "text", array()), "html", null, true);
                echo "</a></li>
                    ";
            } elseif ($this->getAttribute(            // line 73
$context["navi"], "linkto", array(), "any", true, true)) {
                // line 74
                echo "                    <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('slim')->pathFor($this->getAttribute($context["navi"], "linkto", array())), "html", null, true);
                echo "\"><i class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["navi"], "icon", array()), "html", null, true);
                echo "\"></i> ";
                if ($this->getAttribute($context["navi"], "badge", array(), "any", true, true)) {
                    echo "<span class=\"badge\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["navi"], "badge", array()), "html", null, true);
                    echo "</span> ";
                }
                echo twig_escape_filter($this->env, $this->getAttribute($context["navi"], "text", array()), "html", null, true);
                echo "</a></li>
                    ";
            }
            // line 76
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['navi'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "            </ul>
        </div>
    </div>
</nav>
<div class=\"nav-spacer\" style=\"margin-bottom: 50px;\"></div>";
    }

    public function getTemplateName()
    {
        return "navigation.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  318 => 77,  312 => 76,  297 => 74,  295 => 73,  281 => 72,  279 => 71,  275 => 69,  269 => 68,  265 => 66,  262 => 65,  247 => 63,  232 => 61,  229 => 60,  227 => 59,  213 => 58,  210 => 57,  206 => 56,  194 => 54,  191 => 53,  188 => 52,  184 => 51,  178 => 47,  172 => 46,  157 => 44,  155 => 43,  141 => 42,  139 => 41,  135 => 39,  129 => 38,  125 => 36,  122 => 35,  107 => 33,  92 => 31,  89 => 30,  87 => 29,  73 => 28,  70 => 27,  66 => 26,  54 => 24,  51 => 23,  48 => 22,  44 => 21,  33 => 13,  19 => 1,);
    }
}
/* */
/* <!-- Bootstrap Navigation -->*/
/* <nav id="bootstrap-navigation" class="navbar navbar-inverse navbar-fixed-top" role="navigation">*/
/*     <div class="container">*/
/* */
/*         <div class="navbar-header">*/
/*             <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">*/
/*                 <span class="sr-only">Toggle navigation</span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*             </button>*/
/*             <a class="navbar-brand" href="{{ path_for('home') }}">*/
/*                 <span class="fa fa-angle-left"></span><span class="fa fa-bolt"></span><span class="fa fa-angle-right"></span> CodeBot*/
/*             </a>*/
/*         </div>*/
/* */
/*         <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*             <!-- Render Navigation Left -->*/
/*             <ul class="nav navbar-nav">*/
/*                 {% for navi in navigation.left %}*/
/*                     {% if navi.children is defined %}*/
/*                     <li class="dropdown">*/
/*                         <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="{{ navi.icon }}"></i> {% if navi.badge is defined %}<span class="badge">{{ navi.badge }}</span> {% endif %}{{ navi.text }} </a>*/
/*                         <ul class="dropdown-menu">*/
/*                             {% for child in navi.children %}*/
/*                                 {% if child.href is defined %}*/
/*                                     <li><a href="{{ child.href }}"><i class="{{ child.icon }}"></i> {% if child.badge is defined %}<span class="badge">{{ child.badge }}</span> {% endif %}{{ child.text }}</a></li>*/
/*                                 {% elseif child.linkto is defined %}*/
/*                                     {%if child.args is defined %}*/
/*                                         <li><a href="{{ path_for(child.linkto, child.args) }}"><i class="{{ child.icon }}"></i> {% if child.badge is defined %}<span class="badge">{{ child.badge }}</span> {% endif %}{{ child.text }}</a></li>*/
/*                                     {% else %}*/
/*                                         <li><a href="{{ path_for(child.linkto) }}"><i class="{{ child.icon }}"></i> {% if child.badge is defined %}<span class="badge">{{ child.badge }}</span> {% endif %}{{ child.text }}</a></li>*/
/*                                     {% endif %}*/
/*                                 {% elseif child.divider is defined %}*/
/*                                     <li role="separator" class="divider"></li>*/
/*                                 {% endif %}*/
/*                             {% endfor %}*/
/*                         </ul>*/
/*                     </li>*/
/*                     {% elseif navi.href is defined %}*/
/*                         <li><a href="{{ navi.href }}"><i class="{{ navi.icon }}"></i> {% if navi.badge is defined %}<span class="badge">{{ navi.badge }}</span> {% endif %}{{ navi.text }}</a></li>*/
/*                     {% elseif navi.linkto is defined %}*/
/*                         <li><a href="{{ path_for(navi.linkto) }}"><i class="{{ navi.icon }}"></i> {% if navi.badge is defined %}<span class="badge">{{ navi.badge }}</span> {% endif %}{{ navi.text }}</a></li>*/
/*                     {% endif %}*/
/*                 {% endfor %}*/
/*             </ul>*/
/* */
/*             <!-- Render Navigation Right -->*/
/*             <ul class="nav navbar-nav navbar-right">*/
/*                 {% for navi in navigation.right %}*/
/*                     {% if navi.children is defined %}*/
/*                     <li class="dropdown">*/
/*                         <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="{{ navi.icon }}"></i> {% if navi.badge is defined %}<span class="badge">{{ navi.badge }}</span> {% endif %}{{ navi.text }}</a>*/
/*                         <ul class="dropdown-menu">*/
/*                             {% for child in navi.children %}*/
/*                                 {% if child.href is defined %}*/
/*                                     <li><a href="{{ child.href }}"><i class="{{ child.icon }}"></i> {% if child.badge is defined %}<span class="badge">{{ child.badge }}</span> {% endif %}{{ child.text }}</a></li>*/
/*                                 {% elseif child.linkto is defined %}*/
/*                                     {%if child.args is defined %}*/
/*                                         <li><a href="{{ path_for(child.linkto, child.args) }}"><i class="{{ child.icon }}"></i> {% if child.badge is defined %}<span class="badge">{{ child.badge }}</span> {% endif %}{{ child.text }}</a></li>*/
/*                                     {% else %}*/
/*                                         <li><a href="{{ path_for(child.linkto) }}"><i class="{{ child.icon }}"></i> {% if child.badge is defined %}<span class="badge">{{ child.badge }}</span> {% endif %}{{ child.text }}</a></li>*/
/*                                     {% endif %}*/
/*                                 {% elseif child.divider is defined %}*/
/*                                     <li role="separator" class="divider"></li>*/
/*                                 {% endif %}*/
/*                             {% endfor %}*/
/*                         </ul>*/
/*                     </li>*/
/*                     {% elseif navi.href is defined %}*/
/*                     <li><a href="{{ navi.href }}"><i class="{{ navi.icon }}"></i> {% if navi.badge is defined %}<span class="badge">{{ navi.badge }}</span> {% endif %}{{ navi.text }}</a></li>*/
/*                     {% elseif navi.linkto is defined %}*/
/*                     <li><a href="{{ path_for(navi.linkto) }}"><i class="{{ navi.icon }}"></i> {% if navi.badge is defined %}<span class="badge">{{ navi.badge }}</span> {% endif %}{{ navi.text }}</a></li>*/
/*                     {% endif %}*/
/*                 {% endfor %}*/
/*             </ul>*/
/*         </div>*/
/*     </div>*/
/* </nav>*/
/* <div class="nav-spacer" style="margin-bottom: 50px;"></div>*/
