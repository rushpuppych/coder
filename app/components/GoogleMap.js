
/**
 * GoogleMapComponent
 * This Components should help you to work with the GoogleMap Api v3.
 * Bevore you can use this Component you should have includet the google.api Javascipt in yout HTML file.
 * And you have to use a proper API key in those include url. CAUTION: Do not load the map api "async".
 * @author: Severin Holm
 * @version: 1.0.0
 */
var GoogleMapComponent = function(options) {
    var $this = this;
    
    // Class Options
    this.options = $.extend({
        selector: '#google_map_container',
        latitude: 47.56005549,
        longitude: 7.58980393,
        zoom: 16,
        mapObject: null,
        mapDirectionService: null,
        mapDirectionDisplay: null,
        mapOptions: {},
        mapIcons: {},
        mapAnimation: {},
        mapMarkers: {},
        mapCircles: {},
        mapPolygon: {},
        mapPolyLine: {},
        mapGeoFences: {},
    }, options);
    
    /**
     * Initialize Google Map Object
     */
    this.init = function() {
        // Create Map Wrapper
        var strId = $this.guid();
        var strHtmlTpl = '<div id="' + strId +'_container" style="width: 100%; height: 100%;">';
            strHtmlTpl += '   <div id="' + strId +'" style="width: 100%; height: 100%;"></div>';
            strHtmlTpl += '</div>';
        $($this.options.selector).html(strHtmlTpl)
        
        // Create Google Map
        $this.options.mapObject = new google.maps.Map(document.getElementById(strId), $.extend({
            center: {
                lat: parseFloat($this.options.latitude),
                lng: parseFloat($this.options.longitude)
            },
            zoom: parseInt($this.options.zoom),
            mapTypeControlOptions: {
                mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
            }
        }, $this.options.mapOptions));
        
        // Create Direction Service
        $this.options.mapDirectionService = new google.maps.DirectionsService;
        $this.options.mapDirectionDisplay = new google.maps.DirectionsRenderer;
        $this.options.mapDirectionDisplay.setMap($this.options.mapObject);
        
        // Load Google Map Extendstion
        google.maps.LatLng.prototype.distanceTo=function(a){var b=Math.pow(this.lat()-a.lat(),2),c=Math.pow(this.lng()-a.lng(),2);return Math.sqrt(b+c)},google.maps.LatLng.prototype.rotate=function(a,b){var c=a*(Math.PI/180),d=this.distanceTo(b),e=c+Math.atan2(this.lng()-b.lng(),this.lat()-b.lat()),f=b.lat()+d*Math.cos(e),g=b.lng()+d*Math.sin(e);return new google.maps.LatLng(f,g)},google.maps.Point.prototype.rotate=function(a,b){var c=a*(Math.PI/180),d=this.x-b.x,e=this.y-b.y;return new google.maps.Point(d*Math.cos(c)-e*Math.sin(c)+b.x,d*Math.sin(c)+e*Math.cos(c)+b.y)},google.maps.Polygon.prototype.getCenter=function(){var a=this.getPath().getArray(),b=new google.maps.LatLngBounds;return a.forEach(function(c,d){b.extend(a[d])}),b.getCenter()},google.maps.Polygon.prototype.rotate=function(a,b,c){if(c=c||this.getMap(),void 0===c)return void console.warn("No valid google maps object found");var d=this.getPath().getArray(),e=c.getProjection(),f=e.fromLatLngToPoint(b);d.forEach(function(b,c){var g=e.fromLatLngToPoint(b).rotate(a,f);d[c]=e.fromPointToLatLng(g)}),this.setPaths(d)};
    };
    
    /**
     * Using the Buildin HTML5 WebBrowser Localisation to set Map Coordinates
     * @param fncSuccessCallback
     * @param fncErrorCallback
     */
    this.browserGeoLocation = function(fncSuccessCallback, fncErrorCallback) {  
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                var pos = {
                    lat: position.coords.latitude,
                    lng: position.coords.longitude
                };
                $this.options.mapObject.setCenter(pos);
                if($.isFunction(fncSuccessCallback)) {
                    fncSuccessCallback();
                }
            }, function() {
                if($.isFunction(fncErrorCallback)) {
                    fncErrorCallback();
                }
            });
        } else {
            if($.isFunction(fncErrorCallback)) {
                fncErrorCallback();
            }
        }
    };
    
    /**
     * This Centers the map to the specific Coordinates
     * @param numLatitude
     * @param numLongitude
     */
    this.setMapCenter = function(numLatitude, numLongitude) {
        var pos = {
            lat: parseFloat(numLatitude),
            lng: parseFloat(numLongitude)
        };
        $this.options.mapObject.setCenter(pos);
    };
    
    /**
     * This will Asynchronus Loading a MapStyle and apply it
     * @param strTheme
     */
    this.setThemeByPath = function(strPath) {
        $.getJSON(strPath, function(strJsonData) {
            var styledMap = new google.maps.StyledMapType(strJsonData, {name: "MapStyle"});
            $this.options.mapObject.mapTypes.set('map_style', styledMap);
            $this.options.mapObject.setMapTypeId('map_style');
        });
    };
    
    /**
     * This Adds a Marker Icon to the Icon Library. So that you can reuse this icon
     * as offter you need.
     * @param strName
     * @param StrImgPath
     * @param numWidth
     * @param numHeight
     * @param numOffsetX
     * @param numOffsetY
     */
    this.addMarkerIcon = function(strName, strImgPath, numWidth, numHeight, numOffsetX, numOffsetY) {
        var objIcon = {
            url: strImgPath,
            size: new google.maps.Size(numWidth, numHeight),
            origin: new google.maps.Point(0, 0),
            anchor: new google.maps.Point(numOffsetX, numOffsetY)
        };
        
        // Add Icon to Library
        $this.options.mapIcons[strName] = objIcon;
    };    
    
    /**
     * This adds a Marker to the Map
     * @param numLatitude
     * @param numLongitude
     */
    this.addMarker = function(strName, numLatitude, numLongitude, objOptions) {
        // Quit if allready exist
        if(!$.isEmptyObject($this.options.mapMarkers[strName])) {
            return;
        }
        
        // Reset Icon from Marker Icon Array
        if(typeof(objOptions.icon) != 'undefined') {
            objOptions.icon = $this.options.mapIcons[objOptions.icon];
        }
        
        // Add Marker to Map
        var objMarker = new google.maps.Marker($.extend({
            position: {lat: numLatitude, lng: numLongitude},
            map: $this.options.mapObject
        }, objOptions));
        
        // Add Marker to Library
        $this.options.mapMarkers[strName] = objMarker;
    };
    
    /**
     * This will remove a Marker from the Map and from the Library
     * @param strName
     */
    this.removeMarker = function(strName) {
        $this.options.mapMarkers[strName].setMap(null);
        $this.options.mapMarkers[strName] = null;
    };
    
    /**
     * This Adds a Circle to the Map and to the library
     * @param strName
     * @param numLatitude
     * @param numLongitude
     * @param numRadius
     * @param objOptions
     */
    this.addCircle = function(strName, numLatitude, numLogitude, numRadius, objOptions) {
        // Quit if allready exist
        if(!$.isEmptyObject($this.options.mapCircles[strName])) {
            return;
        }
        
        // Add Circle to Map
        var objCircle = new google.maps.Circle($.extend({
            strokeColor: '#FF0000',
            strokeOpacity: 0.8,
            strokeWeight: 1,
            fillColor: '#FF0000',
            fillOpacity: 0.35,
            map: $this.options.mapObject,
            center: {lat: numLatitude, lng: numLogitude},
            radius: numRadius
        }, objOptions));
        
        // Add Circle to Library
        $this.options.mapCircles[strName] = objCircle;
    };
    
    /**
     * Removes a circle from the map
     * @param strName
     */
    this.removeCircle = function(strName) {
        $this.options.mapCircles[strName].setMap(null);
        $this.options.mapCircles[strName] = null;
    };
    
    /**
     * This Method Adds animations to a specific Circle.
     * @param strName
     * @param strAnimation
     * @param objOptions
     */
    this.animateCircle = function(strName, strAnimation, objOptions) {
        var strAnimationKey = 'circle_' + strName + '_' + strAnimation;
        var objCircle = $this.options.mapCircles[strName];
        var boolAnimate = false;
        
        // Quit if allready exist
        if(!$.isEmptyObject($this.options.mapAnimation[strAnimationKey])) {
            return;
        }
        
        // Restore Animation Params
        var objParams = null;
        if(typeof($this.options.mapAnimation[strAnimationKey]) != 'undefined') {
            if($this.options.mapAnimation[strAnimationKey] != null) {
                objParams = $this.options.mapAnimation[strAnimationKey];
            }
        }
        
        // Calculate Animation Step
        switch(strAnimation) {
            case 'pulsate':
                boolAnimate = true;
                objParams = $this.handle_circle_pulsate(objParams, objOptions, objCircle);
                break;
        }
        
        // Set Animation
        if(boolAnimate) {
            $this.options.mapAnimation[strAnimationKey] = objParams;
            $this.animationHandler(strAnimationKey, objCircle);
        }
    };
    
    /**
     * Animation handler for Circle Pulsating
     * @param objParams
     * @param objOptions
     * @param objCircle
     */
    this.handle_circle_pulsate = function(objParams, objOptions, objCircle) {
        // Calculate Animation Steps
        if(objParams === null) {
            // Initialize Animation
            objParams = $.extend({
                direction: 'minimize',
                radius: objOptions.max,
                step: 1,
            }, objOptions); 
            
        } else {
            // Calculate Animation
            if(objParams.direction === 'minimize' && objParams.radius >= objParams.min) {
                objParams.radius -= objParams.step;
            } else {
                objParams.direction = 'maximize';
            }
            
            if(objParams.direction === 'maximize' && objParams.radius <= objParams.max) {
                objParams.radius += objParams.step;
            } else {
                objParams.direction = 'minimize';
            }            
        }
        
        // Do Animation
        objCircle.setRadius(objParams.radius);
        
        return objParams;
    };    
    
    /**
     * Draws a Polygon on the Map
     * @param strName
     * @param arrPosition
     */
    this.addPolygon = function(strName, arrPosition, objOptions) {
        // Quit if allready exist
        if(!$.isEmptyObject($this.options.mapPolygon[strName])) {
            return;
        }
        
        // Add Polygon to Map
        var objPolygon = new google.maps.Polygon($.extend({
            paths: arrPosition,
            strokeColor: '#0B610B',
            strokeOpacity: 0.8,
            strokeWeight: 1,
            fillColor: '#00FF00',
            fillOpacity: 0.35
        }, objOptions));
        objPolygon.setMap($this.options.mapObject);
        
        // Add Polygon to Library
        $this.options.mapPolygon[strName] = objPolygon;
    };
    
    /**
     * This draws a Radar Polygon on the map
     * @param strName
     * @param numLatitude
     * @param numLongitude
     * @param numRadius
     * @param numAngle
     * @param objOptions
     */
    this.addPolygonRadar = function(strName, numLatitude, numLongitude, numRadius, numAngle, objOptions) {
        // Convert Cordinate Position to Pixel Position
        var objPosition = new google.maps.LatLng({lat: numLatitude, lng: numLongitude});
        var objProjection = $this.options.mapObject.getProjection();
        var numScale = Math.pow(2, $this.options.mapObject.getZoom());
        var objWorldPoint = objProjection.fromLatLngToPoint(objPosition);
        
        // Calcuclate Center Point
        var arrPositions = [];
        var objCenterPos = {
            x: Math.floor((objWorldPoint.x) * numScale),
            y: Math.floor((objWorldPoint.y) * numScale)
        }        
        arrPositions.push(objCenterPos);
        
        // Calculate all Circle Point (for rounding Radar Outer Line)
        for(var numNewAngle = 0; numNewAngle <= numAngle; numNewAngle = numNewAngle + 10) {
            var numAngleRadian = numNewAngle * Math.PI / 180;
            var objMiddlePos = {
                x: objCenterPos.x + numRadius * Math.cos(numAngleRadian),
                y: objCenterPos.y + numRadius * Math.sin(numAngleRadian)
            }                
            arrPositions.push(objMiddlePos);
        };

        // Generate EndPoint (because numNewAngle + 4 does not perfectli fits the given angle)
        var objEndPos = {
            x: objCenterPos.x + numRadius * Math.cos(numAngleRadian),
            y: objCenterPos.y + numRadius * Math.sin(numAngleRadian)
        }                
        arrPositions.push(objEndPos);
        
        // Convert Back to Coordinates
        arrCoordinate = [];
        for(var numIndex in arrPositions) {
            var objPosition = arrPositions[numIndex];
                //var objPoint = new google.maps.Point((objPosition.x + numBottomLeft.x) / numScale, (objPosition.y + numTopRight.y) / numScale);
                var objPoint = new google.maps.Point(objPosition.x / numScale, objPosition.y / numScale);
                var objLatLng = objProjection.fromPointToLatLng(objPoint);
                arrCoordinate.push({lat: objLatLng.lat(), lng: objLatLng.lng()});
        }
        
        // Add Radar Polygon
        $this.addPolygon(strName, arrCoordinate, objOptions)
    };
    
    /**
     * Remove Polygon From Map
     * @param strName
     */
    this.removePolygon = function(strName) {
        $this.options.mapPolygon[strName].setMap(null);
        $this.options.mapPolygon[strName] = null;  
    };
    
    /**
     * This Method Adds animations to a specific Polygon.
     * @param strName
     * @param strAnimation
     * @objOptions
     */
    this.animatePolygon = function(strName, strAnimation, objOptions) {
        var strAnimationKey = 'polygon_' + strName + '_' + strAnimation;
        var objPolygon = $this.options.mapPolygon[strName];
        var boolAnimate = false;
        
        // Quit if allready exist
        if(!$.isEmptyObject($this.options.mapAnimation[strAnimationKey])) {
            return;
        }
        
        // Restore Animation Params
        var objParams = null;
        if(typeof($this.options.mapAnimation[strAnimationKey]) != 'undefined') {
            if($this.options.mapAnimation[strAnimationKey] != null) {
                objParams = $this.options.mapAnimation[strAnimationKey];
            }
        }
        
        // Calculate Animation Step
        switch(strAnimation) {
            case 'rotate':
                boolAnimate = true;
                objParams = $this.handle_polygon_rotate(objParams, objOptions, objPolygon);
                break;
        }
        
        // Set Animation
        if(boolAnimate) {
            $this.options.mapAnimation[strAnimationKey] = objParams;
            $this.animationHandler(strAnimationKey, objPolygon);
        }    
    };
    
    /**
     * This Animation handler lets a polygon rotate
     * @objParams
     * @objOptions
     * @objPolygon
     */
    this.handle_polygon_rotate = function(objParams, objOptions, objPolygon) {
        // Calculate Animation Steps
        if(objParams === null) {
            // Initialize Animation
            objParams = $.extend({
                angle: 0,
                min: 0,
                max: 0,
                counter: 0,
                step: 1,
                rotate: true,
                direction: 'left',
                begin: true,
                center: objOptions.center
            }, objOptions); 
            if(typeof(objOptions.center) === 'undefined') {
                var objPolygonBounds = objPolygon.getPath();                
                objParams.center = {lat: objPolygonBounds.getAt(0).lat(), lng: objPolygonBounds.getAt(0).lng()};
            }
            
        } else {
            // Calculate Animation
            if(objParams.rotate) {
                objParams.angle = 1;
            } else {
                // Left to Right
                var boolStoper = false;
                if(objParams.counter < objParams.min) {
                    objParams.counter = objParams.min;
                    objParams.direction = 'plus';
                    boolStoper = true;
                }
                if(objParams.counter > objParams.max) {
                    objParams.counter = objParams.max;
                    objParams.direction = 'minus';
                    boolStoper = true;
                }   
                
                if(objParams.direction === 'plus' && !boolStoper) {
                    objParams.counter += objParams.step;
                    objParams.angle = objParams.step;
                }
                if(objParams.direction === 'minus'  && !boolStoper) {
                    objParams.counter -= objParams.step;
                    objParams.angle = -objParams.step;
                }
                if(objParams.begin) {
                    objParams.angle = objParams.min;
                    objParams.begin = false;
                }
            }
        }
        
        // Do Animation
        $this.rotatePolygon(objPolygon, objParams.angle, objParams.center.lat, objParams.center.lng);
        
        return objParams;    
    };

    /**
     * This rotates the Polygon with a given angle
     * @param objPolygon
     * @param numAngle
     * @param objCenterPoint
     */    
    this.rotatePolygonByName = function(strName, numAngle, numLatitude, numLongitude) {
        var objPolygon = $this.options.mapPolygon[strName];
        $this.rotatePolygon(objPolygon, numAngle, numLatitude, numLongitude);
    };
    
    /**
     * This rotates the Polygon with a given angle
     * @param objPolygon
     * @param numAngle
     * @param objCenterPoint
     */
    this.rotatePolygon = function(objPolygon, numAngle, numLatitude, numLongitude) {
        objLatLng = new google.maps.LatLng({lat: numLatitude, lng: numLongitude}); 
        objPolygon.rotate(numAngle, objLatLng);
    };
    
    /**
     * Removing Animation from Animation Array
     * @param strType
     * @param strName
     * @param strAnimation
     */
    this.removeAnimation = function(strType, strName, strAnimation) {
        var strAnimationKey = strType + '_' + strName + '_' + strAnimation;
        $this.options.mapAnimation[strAnimationKey] = null;
    };
    
    /**
     * This is the Animation Handler that will Animate an object with timeout
     * @param objObject
     * @param objParams
     */
    this.animationHandler = function(strAnimationKey, objObject) {
        if($this.options.mapAnimation[strAnimationKey] != null) {
            var objParams = $this.options.mapAnimation[strAnimationKey];
            setTimeout(function() {
                if($this.options.mapAnimation[strAnimationKey] != null) {
                    // Apply Animation to Object
                    var arrCall = strAnimationKey.split('_');
                    objParams = eval('$this.handle_' + arrCall[0] + '_' + arrCall[2] + '(objParams, {}, objObject)');
                    $this.options.mapAnimation[strAnimationKey] = objParams;

                    // Reanimate
                    $this.animationHandler(strAnimationKey, objObject);
                }
            }, objParams.delay);
        }
    };
    
    /**
     * This Adds a Polyline to the Google Map
     * @param strName
     * @param arrPosition
     * @param objOptions
     */
    this.addPolyline = function(strName, arrPosition, objOptions) {
        // Quit if allready exist
        if(!$.isEmptyObject($this.options.mapPolyLine[strName])) {
            return;
        }
        
        // Add Polyline to Map
        var objPolyline = new google.maps.Polyline($.extend({
            path: arrPosition,
            geodesic: true,
            strokeColor: '#FF0000',
            strokeOpacity: 1.0,
            strokeWeight: 1
        }, objOptions));
        objPolyline.setMap($this.options.mapObject);                

        // Add PolyLine to Library
        $this.options.mapPolyLine[strName] = objPolyline;    
    };
    
    /**
     * This gets a Map Route and uses the Direction Service
     * @param strName
     * @param strFrom
     * @param strTo
     * @param objOptions
     * @param objLineOptions
     * @param fncCallbackSuccess
     * @param fncCallbackError
     */
    this.addRoute = function(strName, strFrom, strTo, objOptions, objLineOptions, fncCallbackSuccess, fncCallbackError) {
        // Quit if allready exist
        if(!$.isEmptyObject($this.options.mapPolyLine[strName])) {
            return;
        }
        
        $this.options.mapDirectionService.route($.extend({
            origin: strFrom,
            destination: strTo,
            travelMode: google.maps.TravelMode.WALKING
        }, objOptions), function(objResponse, strStatus) {
            if (strStatus === google.maps.DirectionsStatus.OK) {
                // Custom Way to render Route as Polyline
                $this.addPolyline(strName, objResponse.routes[0].overview_path, objLineOptions);
                if($.isFunction(fncCallbackSuccess)) {
                    fncCallbackSuccess(objResponse);
                }
                // Google Way to render Route
                //$this.options.mapDirectionDisplay.setDirections(objResponse);
            } else {
                if($.isFunction(fncCallbackError)) {
                    fncCallbackError(strStatus);
                }
            }
        });    
    };
    
    /**
     * Removes a Poly Line from the Map
     * @param strName
     */
    this.removePolyline = function(strName) {
        $this.options.mapPolyLine[strName].setMap(null);
        $this.options.mapPolyLine[strName] = null;
    };
    
    /**
     * This Generates a Tracking Route. This automatic generates a Animation Handler to 
     * Move the Tracking Object.
     * @param strFrom
     * @param strTo
     * @param objOptions
     * @param objTrackingOptions
     * @param fncCallbackSuccess
     * @param fncCallbackError
     */    
    this.addTrackingRoute = function(strName, strFrom, strTo, objOptions, objTrackingOptions, fncCallbackError) {
        // Quit if allready exist
        if(!$.isEmptyObject($this.options.mapPolyLine[strName])) {
            return;
        }
        
        // Create Tracking Animation
        var strAnimationKey = 'tracking_' + strName + '_' + 'route';
        if(!$.isEmptyObject($this.options.mapAnimation[strAnimationKey])) {
            return;
        }     

        // Generate Route
        $this.addRoute(strName, strFrom, strTo, objOptions, {visible: false}, function(objResponse) {
            // Tracking Path
            objWayPoints = [];
            for(var numIndex in objResponse.routes[0].overview_path) {
                var objPoint = objResponse.routes[0].overview_path[numIndex];
                objWayPoints.push({lat: objPoint.lat(), lng: objPoint.lng()});
            }

            // Create Tracking Object
            var objParams = $.extend({
                delay: 200,
                speed: 5,
                waypoints: objWayPoints
            }, objTrackingOptions);
            
            // Run Tracking Animation
            var objMarker = $this.options.mapMarkers[objTrackingOptions.marker];
            $this.handle_tracking_route(objParams, objOptions, objMarker);

            // Set Animation
            $this.options.mapAnimation[strAnimationKey] = objParams;
            $this.animationHandler(strAnimationKey, objMarker);
           
        }, fncCallbackError)
    };   
    
    /**
     * Handle the Tracking Animation over the normal Animation Handler
     * @param objParams
     * @param objOptions
     * @param objMarker
     */
    this.handle_tracking_route = function(objParams, objOptions, objMarker) {
        // Get Actuall Waypoint
        for(var numIndex in objParams.waypoints) {
            if(!$.isEmptyObject(objParams.waypoints[numIndex])) {
                var numTargetLat = objParams.waypoints[numIndex].lat;
                var numTargetLng = objParams.waypoints[numIndex].lng;                
                break;
            }
        }
    
        // Get Actuall Marker Position
        var numMarkerLat = objMarker.getPosition().lat();
        var numMarkerLng = objMarker.getPosition().lng();
        
        // Calculate Marker Movement by Speed
        var numNewMarkerLat = 0;
        var numNewMarkerLng = 0;
        // 1750000 = too slow || 1500000 to fast
        var numSpeed = objParams.speed / 1550000;
        if(numIndex === "0") {
            numNewMarkerLat = numTargetLat;
            numNewMarkerLng = numTargetLng;
            objParams.waypoints[0] = {};
        } else {
            // Calculate Distances (Pythagoras)
            var numDistanceLat = Math.abs((numTargetLat - numMarkerLat));
            var numDistanceLng = Math.abs((numTargetLng - numMarkerLng));
            var numTotalDistance = Math.sqrt(Math.pow(numDistanceLat, 2) + Math.pow(numDistanceLng, 2));

            // Get Steps
            var numSteps = numTotalDistance / numSpeed;
            var numStepLat = Math.abs(numDistanceLat / numSteps);
            var numStepLng = Math.abs(numDistanceLng / numSteps);
            
            // Negative Latitude Calculations
            if(numTargetLat < numMarkerLat) {
                if(numTargetLat < numMarkerLat - numStepLat) {
                    numNewMarkerLat = numMarkerLat - numStepLat;
                } else {
                    numNewMarkerLat = numTargetLat;
                }
            }
            // Positive Latitude Calculations
            if(numTargetLat > numMarkerLat) {
                if(numTargetLat > numMarkerLat + numStepLat) {
                    numNewMarkerLat = numMarkerLat + numStepLat;
                } else { 
                    numNewMarkerLat = numTargetLat;
                }
            }
            
            // Negative Longitude Calculations
            if(numTargetLng < numMarkerLng) {
                if(numTargetLng < numMarkerLng - numStepLng) {
                    numNewMarkerLng = numMarkerLng - numStepLng;
                } else { 
                    numNewMarkerLng = numTargetLng;
                }
            }
            
            // Negative Longitude Calculations
            if(numTargetLng > numMarkerLng) {
                if(numTargetLng > numMarkerLng + numStepLng) {
                    numNewMarkerLng = numMarkerLng + numStepLng;
                } else { 
                    numNewMarkerLng = numTargetLng;
                }
            }
            
            // Finish Route
            if(numNewMarkerLat === 0) {
                numNewMarkerLat = numTargetLat;
            }
            if(numNewMarkerLng === 0) {
                numNewMarkerLng = numTargetLng;
            }
            if(numNewMarkerLat === numTargetLat && numNewMarkerLng === numTargetLng) {
                objParams.waypoints[numIndex] = {};
            }
            
            // todo: Last Waypoint reached.
            // todo: quit animation.
        }
        
        // Set Marker Position   
        var objLatLng = objLatLng = new google.maps.LatLng({lat: numNewMarkerLat, lng: numNewMarkerLng}); 
        objMarker.setPosition(objLatLng);
        
        // On Change Listener
        if($.isFunction(objParams.onChange)) {
            objParams.onChange(objLatLng);
        }
        
        return objParams;    
    };
    
    /**
     * This is the EventListener For GeoFencing
     * @param strName
     * @param strTrackableType
     * @param strTrackableName
     * @param strTrackerType
     * @param strTrackerName
     * @param fncCallbackOnIn
     * @param fncCallbackOnOut
     */
    this.addGeoFence = function(strName, strTrackableType, strTrackableName, strTrackerType, strTrackerName, fncCallbackOnIn, fncCallbackOnOut) {
        // Quit if allready exist
        if(!$.isEmptyObject($this.options.mapGeoFences[strName])) {
            return;
        }
        
        // Get Objects
        var objTrackable = null;
        var objTracker = null;
        eval('objTrackable = $this.options.map' + strTrackableType[0].toUpperCase() + strTrackableType.substring(1) + '[strTrackableName];');
        eval('objTracker = $this.options.map' + strTrackerType[0].toUpperCase() + strTrackerType.substring(1) + '[strTrackerName];');
        
        // Add to Library
        $this.options.mapGeoFences[strName] = {enabled: true};
        
        // Call Event Handler
        $this.geoFencesHandler(strName, objTrackable, objTracker, fncCallbackOnIn, fncCallbackOnOut);
    };
    
    /**
     * GeoFencing Handler
     * @param strName
     * @param objTrackable
     * @param objTracker
     * @param fncCallbackOnIn
     * @param fncCallbackOnOut
     */
    this.geoFencesHandler = function(strName, objTrackable, objTracker, fncCallbackOnIn, fncCallbackOnOut) {
        // Quit if empty
        if($.isEmptyObject($this.options.mapGeoFences[strName])) {
            return;
        }
        
        // Tracking Detection
        var objLatLng = objTrackable.getPosition();
        if(google.maps.geometry.poly.containsLocation(objLatLng, objTracker)) {
            if($.isFunction(fncCallbackOnIn)) {
                fncCallbackOnIn(objTrackable, objTracker);
            }
        } else {
            if($.isFunction(fncCallbackOnOut)) {
                fncCallbackOnOut(objTrackable, objTracker);
            }        
        }        
        
        // Recall
        setTimeout(function() {
            $this.geoFencesHandler(strName, objTrackable, objTracker, fncCallbackOnIn, fncCallbackOnOut);
        }, 100);
    }
    
    /**
     * This will remove a GeoFence from the Map and from the Library
     * @param strName
     */
    this.removeGeoFence = function(strName) {
        $this.options.mapGeoFences[strName] = null;
    };    
    
    /**
     * Helper Method to create a unique Id
     * @return string
     */
    this.guid = function() {
        function s4() {return Math.floor((1 + Math.random()) * 0x10000).toString(16).substring(1);}
        return s4() + s4() + '-' + s4() + '-' + s4() + '-' + s4() + '-' + s4() + s4() + s4();
    };
    
    // Component Init Call
    $this.init();
}