<?php

/* webform.html */
class __TwigTemplate_75d1fa289d062d176f69038f5cae13a6c3295fbbb3a9bc4efc1724622462496e extends Twig_Template
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
<div id=\"webform\" class=\"container\" style=\"font-family: quicksand; margin-top: 20px;\">
    <div class=\"row\">
        <h1>WebForm Demo</h1>
    </div>
    <div class=\"row\">
        <!-- Simple Form -->
        <div class=\"col-md-6\">
            <div class=\"panel panel-default\">
                <div class=\"panel-body\">
                    <div class=\"row\">
                        <div class=\"col-md-3\">
                            <span class=\"pull-right\">Gender</span>
                        </div>
                        <div class=\"col-md-9\">
                            <select class=\"form-control\">
                                <option>Male</option>
                                <option>Female</option>
                            </select>
                        </div>
                    </div>
                    <div class=\"row\" style=\"margin-top: 15px;\">
                        <div class=\"col-md-3\">
                            <span class=\"pull-right\">Name</span>
                        </div>
                        <div class=\"col-md-9\">
                            <input type=\"text\" class=\"form-control\" placeholder=\"Name\">
                        </div>
                    </div>
                    <div class=\"row\" style=\"margin-top: 15px;\">
                        <div class=\"col-md-3\">
                            <span class=\"pull-right\">Familyname</span>
                        </div>
                        <div class=\"col-md-9\">
                            <input type=\"text\" class=\"form-control\" placeholder=\"Familyname\">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Multi Col Form -->
        <div class=\"col-md-6\">
            <div class=\"panel panel-default\">
                <div class=\"panel-body\">
                    <!-- Row 1-->
                    <div class=\"row\">
                        <div class=\"col-md-3\">
                            <span class=\"pull-right\">Name</span>
                        </div>
                        <div class=\"col-md-3\">
                            <select class=\"form-control\">
                                <option>Male</option>
                                <option>Female</option>
                            </select>
                        </div>
                        <div class=\"col-md-3\">
                            <input type=\"text\" class=\"form-control\" placeholder=\"Name\">
                        </div>
                        <div class=\"col-md-3\">
                            <input type=\"text\" class=\"form-control\" placeholder=\"Familyname\">
                        </div>
                    </div>

                    <!-- Row 2 -->
                    <div class=\"row\" style=\"margin-top: 15px;\">
                        <div class=\"col-md-3\">
                            <span class=\"pull-right\">Address</span>
                        </div>
                        <div class=\"col-md-9\">
                            <input type=\"text\" class=\"form-control\" placeholder=\"Street\">
                        </div>
                    </div>

                    <!-- Row 2 -->
                    <div class=\"row\" style=\"margin-top: 15px;\">
                        <div class=\"col-md-3\">
                        </div>
                        <div class=\"col-md-3\">
                            <input type=\"text\" class=\"form-control\" placeholder=\"ZIP\">
                        </div>
                        <div class=\"col-md-6\">
                            <input type=\"text\" class=\"form-control\" placeholder=\"City\">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Calendar test-->
    <div class=\"row\">
        <div class=\"col-md-6\">
            <table class=\"time-table\">
                <tr>
                    <td colspan=\"3\">KW 34</td>
                    <td>00</td><td>01</td><td>02</td><td>03</td><td>04</td><td>05</td><td>06</td><td>07</td><td>08</td><td>09</td>
                    <td>10</td><td>11</td><td>12</td><td>13</td><td>14</td><td>15</td><td>16</td><td>17</td><td>18</td><td>19</td>
                    <td>20</td><td>21</td><td>22</td><td>23</td>
                </tr>
                <tr>
                    <td rowspan=\"7\" class=\"year\"><span>2016</span></td>
                    <td rowspan=\"4\">04</td>
                    <td>Mo</td>
                    <td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td>
                    <td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td>
                    <td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"lastcell\">&nbsp;</td>
                </tr>
                <tr>
                    <td>Di</td>
                    <td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td>
                    <td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td>
                    <td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"lastcell\">&nbsp;</td>
                </tr>
                <tr>
                    <td>Mi</td>
                    <td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td>
                    <td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td>
                    <td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"lastcell\">&nbsp;</td>
                </tr>
                <tr>
                    <td>Do</td>
                    <td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td>
                    <td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td>
                    <td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"lastcell\">&nbsp;</td>
                </tr>
                <tr>
                    <td rowspan=\"3\">05</td>
                    <td>Fr</td>
                    <td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td>
                    <td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td>
                    <td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"lastcell\">&nbsp;</td>
                </tr>
                <tr>
                    <td>Sa</td>
                    <td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td>
                    <td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td>
                    <td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"lastcell\">&nbsp;</td>
                </tr>
                <tr>
                    <td>So</td>
                    <td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td>
                    <td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td>
                    <td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"cell\">&nbsp;</td><td class=\"lastcell\">&nbsp;</td>
                </tr>
            </table>
        </div>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "webform.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* */
/* <!-- Page Container -->*/
/* <div id="webform" class="container" style="font-family: quicksand; margin-top: 20px;">*/
/*     <div class="row">*/
/*         <h1>WebForm Demo</h1>*/
/*     </div>*/
/*     <div class="row">*/
/*         <!-- Simple Form -->*/
/*         <div class="col-md-6">*/
/*             <div class="panel panel-default">*/
/*                 <div class="panel-body">*/
/*                     <div class="row">*/
/*                         <div class="col-md-3">*/
/*                             <span class="pull-right">Gender</span>*/
/*                         </div>*/
/*                         <div class="col-md-9">*/
/*                             <select class="form-control">*/
/*                                 <option>Male</option>*/
/*                                 <option>Female</option>*/
/*                             </select>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="row" style="margin-top: 15px;">*/
/*                         <div class="col-md-3">*/
/*                             <span class="pull-right">Name</span>*/
/*                         </div>*/
/*                         <div class="col-md-9">*/
/*                             <input type="text" class="form-control" placeholder="Name">*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="row" style="margin-top: 15px;">*/
/*                         <div class="col-md-3">*/
/*                             <span class="pull-right">Familyname</span>*/
/*                         </div>*/
/*                         <div class="col-md-9">*/
/*                             <input type="text" class="form-control" placeholder="Familyname">*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <!-- Multi Col Form -->*/
/*         <div class="col-md-6">*/
/*             <div class="panel panel-default">*/
/*                 <div class="panel-body">*/
/*                     <!-- Row 1-->*/
/*                     <div class="row">*/
/*                         <div class="col-md-3">*/
/*                             <span class="pull-right">Name</span>*/
/*                         </div>*/
/*                         <div class="col-md-3">*/
/*                             <select class="form-control">*/
/*                                 <option>Male</option>*/
/*                                 <option>Female</option>*/
/*                             </select>*/
/*                         </div>*/
/*                         <div class="col-md-3">*/
/*                             <input type="text" class="form-control" placeholder="Name">*/
/*                         </div>*/
/*                         <div class="col-md-3">*/
/*                             <input type="text" class="form-control" placeholder="Familyname">*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <!-- Row 2 -->*/
/*                     <div class="row" style="margin-top: 15px;">*/
/*                         <div class="col-md-3">*/
/*                             <span class="pull-right">Address</span>*/
/*                         </div>*/
/*                         <div class="col-md-9">*/
/*                             <input type="text" class="form-control" placeholder="Street">*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <!-- Row 2 -->*/
/*                     <div class="row" style="margin-top: 15px;">*/
/*                         <div class="col-md-3">*/
/*                         </div>*/
/*                         <div class="col-md-3">*/
/*                             <input type="text" class="form-control" placeholder="ZIP">*/
/*                         </div>*/
/*                         <div class="col-md-6">*/
/*                             <input type="text" class="form-control" placeholder="City">*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <!-- Calendar test-->*/
/*     <div class="row">*/
/*         <div class="col-md-6">*/
/*             <table class="time-table">*/
/*                 <tr>*/
/*                     <td colspan="3">KW 34</td>*/
/*                     <td>00</td><td>01</td><td>02</td><td>03</td><td>04</td><td>05</td><td>06</td><td>07</td><td>08</td><td>09</td>*/
/*                     <td>10</td><td>11</td><td>12</td><td>13</td><td>14</td><td>15</td><td>16</td><td>17</td><td>18</td><td>19</td>*/
/*                     <td>20</td><td>21</td><td>22</td><td>23</td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td rowspan="7" class="year"><span>2016</span></td>*/
/*                     <td rowspan="4">04</td>*/
/*                     <td>Mo</td>*/
/*                     <td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td>*/
/*                     <td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td>*/
/*                     <td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="lastcell">&nbsp;</td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td>Di</td>*/
/*                     <td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td>*/
/*                     <td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td>*/
/*                     <td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="lastcell">&nbsp;</td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td>Mi</td>*/
/*                     <td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td>*/
/*                     <td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td>*/
/*                     <td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="lastcell">&nbsp;</td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td>Do</td>*/
/*                     <td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td>*/
/*                     <td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td>*/
/*                     <td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="lastcell">&nbsp;</td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td rowspan="3">05</td>*/
/*                     <td>Fr</td>*/
/*                     <td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td>*/
/*                     <td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td>*/
/*                     <td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="lastcell">&nbsp;</td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td>Sa</td>*/
/*                     <td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td>*/
/*                     <td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td>*/
/*                     <td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="lastcell">&nbsp;</td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td>So</td>*/
/*                     <td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td>*/
/*                     <td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td>*/
/*                     <td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="cell">&nbsp;</td><td class="lastcell">&nbsp;</td>*/
/*                 </tr>*/
/*             </table>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* */
