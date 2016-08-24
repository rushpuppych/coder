<?php

/* google_map.html */
class __TwigTemplate_37a87e3b8ec99db69af2b5a7dc6fae8dfd95446083897bcb63e2a5443b57c297 extends Twig_Template
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
        echo "<!-- Include Google Map API -->
<script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyAd19VpKQZwKSFxlvyVfXgNKchJW_LTks0\"></script>

<!-- Page Container -->
<div id=\"google_map\" class=\"container\" style=\"font-family: quicksand; margin-top: 20px;\">
    <div class=\"row\">
        <h1>GoogleMap API Demo</h1>
    </div>
    <div class=\"row\">
        <div class=\"col-md-9\">
            <div class=\"panel panel-default\">
                <div id=\"google_map_container\" class=\"panel-body\" style=\"height: 800px;\">
                </div>
            </div>       
        </div>
        <div class=\"col-md-3\">
            <!-- Map Position Options -->
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-body\">
                            <div class=\"form-group\">
                                <label for=\"latitude_txt\">Latitude:</label>
                                <input type=\"text\" class=\"form-control\" id=\"latitude_txt\" v-model=\"lat\">
                            </div>
                            <div class=\"form-group\">
                                <label for=\"longitude_txt\">Longitude:</label>
                                <input type=\"text\" class=\"form-control\" id=\"longitude_txt\" v-model=\"long\">
                            </div>
                            <div class=\"form-group\">
                                <button type=\"button\" class=\"btn btn-sm btn-primar\" v-on:click=\"setLatLong\">Apply</button>
                                <button type=\"button\" class=\"btn btn-sm btn-primar\" v-on:click=\"localize\"><span class=\"fa fa-location-arrow\"></span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- MapStyle Options -->
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-body\">
                            <div class=\"form-group\">
                                <select class=\"form-control\" v-model=\"theme\">
                                    <option value=\"../../data/googlemap_themes/midnight_commander.json\">Midnight Commander</option>
                                    <option value=\"../../data/googlemap_themes/midnight_clean.json\">Midnight Clean</option>
                                    <option value=\"../../data/googlemap_themes/pokemon.json\">Pokemon GO</option>
                                    <option value=\"../../data/googlemap_themes/presto_map.json\">Presto Map</option>
                                    <option value=\"../../data/googlemap_themes/military.json\">Military</option>
                                    <option value=\"../../data/googlemap_themes/spy_map.json\">Spy Map</option>
                                    <option value=\"../../data/googlemap_themes/ghoddosi.json\">Ghoddosi</option>
                                    <option value=\"../../data/googlemap_themes/watch_dogs.json\">Watchdogs</option>
                                </select>
                            </div>
                            <div class=\"form-group\">
                                <button type=\"button\" class=\"btn btn-sm btn-primar\" v-on:click=\"setMapTheme\">Apply</button>
                            </div>          
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Buttons -->
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-body\">
                            <button type=\"button\" class=\"btn btn-sm btn-block\" v-on:click=\"addMarker\">Classic Marker</button>
                            <button type=\"button\" class=\"btn btn-sm btn-block\" v-on:click=\"addImageMarker\">Image Marker</button>
                            <button type=\"button\" class=\"btn btn-sm btn-block\" v-on:click=\"addCircle\">Pulsating Circle</button>
                            <button type=\"button\" class=\"btn btn-sm btn-block\" v-on:click=\"addRadar\">Radar Polygon</button>
                            <button type=\"button\" class=\"btn btn-sm btn-block\" v-on:click=\"setRoute\">Set Route</button>
                            <button type=\"button\" class=\"btn btn-sm btn-block\" v-on:click=\"setTrackingRoute\">Set Tracking Route</button>
                            <button type=\"button\" class=\"btn btn-sm btn-block\" v-on:click=\"setGeoFence\">GeoFencing</button>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "google_map.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <!-- Include Google Map API -->*/
/* <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAd19VpKQZwKSFxlvyVfXgNKchJW_LTks0"></script>*/
/* */
/* <!-- Page Container -->*/
/* <div id="google_map" class="container" style="font-family: quicksand; margin-top: 20px;">*/
/*     <div class="row">*/
/*         <h1>GoogleMap API Demo</h1>*/
/*     </div>*/
/*     <div class="row">*/
/*         <div class="col-md-9">*/
/*             <div class="panel panel-default">*/
/*                 <div id="google_map_container" class="panel-body" style="height: 800px;">*/
/*                 </div>*/
/*             </div>       */
/*         </div>*/
/*         <div class="col-md-3">*/
/*             <!-- Map Position Options -->*/
/*             <div class="row">*/
/*                 <div class="col-md-12">*/
/*                     <div class="panel panel-default">*/
/*                         <div class="panel-body">*/
/*                             <div class="form-group">*/
/*                                 <label for="latitude_txt">Latitude:</label>*/
/*                                 <input type="text" class="form-control" id="latitude_txt" v-model="lat">*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 <label for="longitude_txt">Longitude:</label>*/
/*                                 <input type="text" class="form-control" id="longitude_txt" v-model="long">*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 <button type="button" class="btn btn-sm btn-primar" v-on:click="setLatLong">Apply</button>*/
/*                                 <button type="button" class="btn btn-sm btn-primar" v-on:click="localize"><span class="fa fa-location-arrow"></span></button>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             */
/*             <!-- MapStyle Options -->*/
/*             <div class="row">*/
/*                 <div class="col-md-12">*/
/*                     <div class="panel panel-default">*/
/*                         <div class="panel-body">*/
/*                             <div class="form-group">*/
/*                                 <select class="form-control" v-model="theme">*/
/*                                     <option value="../../data/googlemap_themes/midnight_commander.json">Midnight Commander</option>*/
/*                                     <option value="../../data/googlemap_themes/midnight_clean.json">Midnight Clean</option>*/
/*                                     <option value="../../data/googlemap_themes/pokemon.json">Pokemon GO</option>*/
/*                                     <option value="../../data/googlemap_themes/presto_map.json">Presto Map</option>*/
/*                                     <option value="../../data/googlemap_themes/military.json">Military</option>*/
/*                                     <option value="../../data/googlemap_themes/spy_map.json">Spy Map</option>*/
/*                                     <option value="../../data/googlemap_themes/ghoddosi.json">Ghoddosi</option>*/
/*                                     <option value="../../data/googlemap_themes/watch_dogs.json">Watchdogs</option>*/
/*                                 </select>*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 <button type="button" class="btn btn-sm btn-primar" v-on:click="setMapTheme">Apply</button>*/
/*                             </div>          */
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             */
/*             <!-- Buttons -->*/
/*             <div class="row">*/
/*                 <div class="col-md-12">*/
/*                     <div class="panel panel-default">*/
/*                         <div class="panel-body">*/
/*                             <button type="button" class="btn btn-sm btn-block" v-on:click="addMarker">Classic Marker</button>*/
/*                             <button type="button" class="btn btn-sm btn-block" v-on:click="addImageMarker">Image Marker</button>*/
/*                             <button type="button" class="btn btn-sm btn-block" v-on:click="addCircle">Pulsating Circle</button>*/
/*                             <button type="button" class="btn btn-sm btn-block" v-on:click="addRadar">Radar Polygon</button>*/
/*                             <button type="button" class="btn btn-sm btn-block" v-on:click="setRoute">Set Route</button>*/
/*                             <button type="button" class="btn btn-sm btn-block" v-on:click="setTrackingRoute">Set Tracking Route</button>*/
/*                             <button type="button" class="btn btn-sm btn-block" v-on:click="setGeoFence">GeoFencing</button>                            */
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
