<?php

/* web_rtc.html */
class __TwigTemplate_135bfa3752c8e77b9496b10f67910e9df44fa174eef841e2d7a5a8905dd7417a extends Twig_Template
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
<!-- Include WebSockets -->

<!-- Page Container -->
<div id=\"web_rtc\" class=\"container\" style=\"font-family: quicksand; margin-top: 20px;\">
    <!-- Title -->
    <div class=\"row\">
        <h1>WebRTC Demo</h1>
    </div>
    
    <!-- Web RTC Demo -->
    <div class=\"row\">
        <div class=\"col-md-9\">
            <div class=\"panel panel-default\">
                <div class=\"panel-body\">
                    <br><br><br>
                    <br><br><br>
                    <br><br><br>
                    <br><br><br>
                    <br><br><br>
                    <br><br><br>                    
                </div>
            </div>
        </div>
        <div class=\"col-md-3\">
            <!-- MyWebcal -->
            <div class=\"panel panel-default\" id=\"webcam-view\">
                <center><br><i class=\"fa fa-refresh fa-spin fa-3x fa-fw\"></i><br><br></center>
            </div>
            <!-- Project Status -->
            <div class=\"panel panel-default\">
                <div class=\"panel-body\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Project Name\">
                    <br>
                    <table width=\"100%\">
                        <tr>
                            <td width=\"50%\" style=\"padding-right: 2px; padding-bottom: 2px;\"><button type=\"button\" class=\"btn btn-default btn-block\" style=\"padding-left: 0px;\"><span class=\"fa fa-clock-o\"></span>&nbsp;&nbsp;04:25</button></td>
                            <td width=\"50%\" style=\"padding-left: 2px; padding-bottom: 2px;\"><button type=\"button\" class=\"btn btn-default btn-block\" style=\"padding-left: 0px;\"><span class=\"fa fa-user\"></span>&nbsp;&nbsp;4 / 5</button></td>
                        </tr>
                        <tr>
                            <td width=\"50%\" style=\"padding-right: 2px; padding-top: 2px;\"><button type=\"button\" class=\"btn btn-default btn-block\" style=\"padding-left: 0px;\"><span class=\"fa fa-files-o\"></span>&nbsp;&nbsp;40</button></td>
                            <td width=\"50%\" style=\"padding-left: 2px; padding-top: 2px;\"><button type=\"button\" class=\"btn btn-default btn-block\" style=\"padding-left: 0px;\"><span class=\"fa fa-check\"></span>&nbsp;&nbsp;40 / 100</button></td>
                        </tr>                        
                    </table>
                </div>
            </div>
        
            <!-- Users -->
            <div class=\"panel panel-default\">
                <ul class=\"list-group\">
                    <li class=\"list-group-item list-group-item-info\">Severin Holm</li>
                    <li class=\"list-group-item list-group-item-info\">Albert Einstein</li>
                    <li class=\"list-group-item list-group-item-info active\">Maximilian Musterman</li>
                    <li class=\"list-group-item list-group-item-info\">Susanne Sorglos</li>
                    <li class=\"list-group-item\">Davide Goliath</li>
                </ul>                
            </div>      
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "web_rtc.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* */
/* <!-- Include WebSockets -->*/
/* */
/* <!-- Page Container -->*/
/* <div id="web_rtc" class="container" style="font-family: quicksand; margin-top: 20px;">*/
/*     <!-- Title -->*/
/*     <div class="row">*/
/*         <h1>WebRTC Demo</h1>*/
/*     </div>*/
/*     */
/*     <!-- Web RTC Demo -->*/
/*     <div class="row">*/
/*         <div class="col-md-9">*/
/*             <div class="panel panel-default">*/
/*                 <div class="panel-body">*/
/*                     <br><br><br>*/
/*                     <br><br><br>*/
/*                     <br><br><br>*/
/*                     <br><br><br>*/
/*                     <br><br><br>*/
/*                     <br><br><br>                    */
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="col-md-3">*/
/*             <!-- MyWebcal -->*/
/*             <div class="panel panel-default" id="webcam-view">*/
/*                 <center><br><i class="fa fa-refresh fa-spin fa-3x fa-fw"></i><br><br></center>*/
/*             </div>*/
/*             <!-- Project Status -->*/
/*             <div class="panel panel-default">*/
/*                 <div class="panel-body">*/
/*                     <input type="text" class="form-control" placeholder="Project Name">*/
/*                     <br>*/
/*                     <table width="100%">*/
/*                         <tr>*/
/*                             <td width="50%" style="padding-right: 2px; padding-bottom: 2px;"><button type="button" class="btn btn-default btn-block" style="padding-left: 0px;"><span class="fa fa-clock-o"></span>&nbsp;&nbsp;04:25</button></td>*/
/*                             <td width="50%" style="padding-left: 2px; padding-bottom: 2px;"><button type="button" class="btn btn-default btn-block" style="padding-left: 0px;"><span class="fa fa-user"></span>&nbsp;&nbsp;4 / 5</button></td>*/
/*                         </tr>*/
/*                         <tr>*/
/*                             <td width="50%" style="padding-right: 2px; padding-top: 2px;"><button type="button" class="btn btn-default btn-block" style="padding-left: 0px;"><span class="fa fa-files-o"></span>&nbsp;&nbsp;40</button></td>*/
/*                             <td width="50%" style="padding-left: 2px; padding-top: 2px;"><button type="button" class="btn btn-default btn-block" style="padding-left: 0px;"><span class="fa fa-check"></span>&nbsp;&nbsp;40 / 100</button></td>*/
/*                         </tr>                        */
/*                     </table>*/
/*                 </div>*/
/*             </div>*/
/*         */
/*             <!-- Users -->*/
/*             <div class="panel panel-default">*/
/*                 <ul class="list-group">*/
/*                     <li class="list-group-item list-group-item-info">Severin Holm</li>*/
/*                     <li class="list-group-item list-group-item-info">Albert Einstein</li>*/
/*                     <li class="list-group-item list-group-item-info active">Maximilian Musterman</li>*/
/*                     <li class="list-group-item list-group-item-info">Susanne Sorglos</li>*/
/*                     <li class="list-group-item">Davide Goliath</li>*/
/*                 </ul>                */
/*             </div>      */
/*         </div>*/
/*     </div>*/
/* </div>*/
