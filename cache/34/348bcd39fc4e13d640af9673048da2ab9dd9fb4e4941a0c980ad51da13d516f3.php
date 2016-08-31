<?php

/* websocket.html */
class __TwigTemplate_ec0b958cfada5ba614c8d60369d45ecc8b6646969c688830eca9aff25d78b258 extends Twig_Template
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
<div id=\"websocket_demo\" class=\"container\" style=\"font-family: quicksand; margin-top: 20px;\">
    <div class=\"row\">
        <h1>WebSocket Demo</h1>
    </div>
    <div class=\"row\">
        <!-- Chat Window -->
        <div class=\"col-md-9\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-body\" style=\"height: 535px; overflow: scroll;\">
                            <div id=\"chat_container\" class=\"col-md-12\">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-9\">
                    <input class=\"form-control\" type=\"text\" v-model=\"chat_message\" placeholder=\"Type your text in here...\">
                </div>
                <div class=\"col-md-3\">
                    <button class=\"btn btn-primary btn-block\" v-on:click=\"sendMessage\">Send</button>
                </div>
            </div>
        </div>
        
        <!-- Webcam Window -->
        <div class=\"col-md-3\">
            <div class=\"panel panel-default\">
                <div id=\"websocket_cam\" class=\"panel-body\" style=\"height: 600px;\">
                </div>
            </div>       
        </div>        
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "websocket.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* */
/* <!-- Page Container -->*/
/* <div id="websocket_demo" class="container" style="font-family: quicksand; margin-top: 20px;">*/
/*     <div class="row">*/
/*         <h1>WebSocket Demo</h1>*/
/*     </div>*/
/*     <div class="row">*/
/*         <!-- Chat Window -->*/
/*         <div class="col-md-9">*/
/*             <div class="row">*/
/*                 <div class="col-md-12">*/
/*                     <div class="panel panel-default">*/
/*                         <div class="panel-body" style="height: 535px; overflow: scroll;">*/
/*                             <div id="chat_container" class="col-md-12">*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="row">*/
/*                 <div class="col-md-9">*/
/*                     <input class="form-control" type="text" v-model="chat_message" placeholder="Type your text in here...">*/
/*                 </div>*/
/*                 <div class="col-md-3">*/
/*                     <button class="btn btn-primary btn-block" v-on:click="sendMessage">Send</button>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         */
/*         <!-- Webcam Window -->*/
/*         <div class="col-md-3">*/
/*             <div class="panel panel-default">*/
/*                 <div id="websocket_cam" class="panel-body" style="height: 600px;">*/
/*                 </div>*/
/*             </div>       */
/*         </div>        */
/*     </div>*/
/* </div>*/
/* */
/* */
