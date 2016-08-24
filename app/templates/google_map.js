
var controller = new Vue({
    el: '#google_map',
    data: {
        map: null,
        lat: 1,
        long: 1,
        theme: ''
    },
    methods: {
        init: function() {
            var objMapParams = {
                selector: '#google_map_container',
                mapOptions: {
                    disableDefaultUI: true,
                    zoomControl: false, 
                    scrollwheel: false, 
                    disableDoubleClickZoom: true
                }
            };
            this.map = new GoogleMapComponent(objMapParams);
        },
        
        setLatLong: function() {
            this.map.setMapCenter(this.lat, this.long);
        },
        
        localize: function() {
            this.map.browserGeoLocation();
        },
        
        setMapTheme: function() {
            if(this.theme.length > 0) {
                this.map.setThemeByPath(this.theme);
            }
        },
        
        addMarker: function() {
            this.map.addMarker('simple_marker', 47.560055, 7.589803, {});
            var map = this.map;
            setTimeout(function() {
                map.removeMarker('simple_marker');
            }, 5000);
        },
        
        addImageMarker: function() {
            this.map.addMarkerIcon('icon', 'https://cdn4.iconfinder.com/data/icons/32x32-free-design-icons/32/Help.png', 32, 32, 16, 16)
            this.map.addMarker('icon_marker', 47.559341, 7.590544, {icon: 'icon'});
            var map = this.map;
            setTimeout(function() {
                map.removeMarker('icon_marker');
            }, 5000);
        },
        
        addCircle: function() {
            this.map.addCircle('circle', 47.560055, 7.589803, 100, {});
            this.map.animateCircle('circle', 'pulsate', {delay: 25, min: 50, max: 100});              
            var map = this.map;
            setTimeout(function() {
                map.removeAnimation('circle', 'circle', 'pulsate');
                map.removeCircle('circle');
            }, 5000);     
        },
        
        addRadar: function() {
            this.map.addPolygonRadar('radar', 47.560055, 7.589803, 50, 90, {});
            this.map.animatePolygon('radar', 'rotate', {delay: 50, min: 180, max: 360, rotate: false, step: 4});
            
            var map = this.map;
            setTimeout(function() {
                map.removeAnimation('polygon', 'radar', 'rotate');
                map.removePolygon('radar');
            }, 5000);
        },
        
        setRoute: function() {
            this.map.addRoute('route1', 'Basel', 'Allschwil', {}, {}, null);
            this.map.addRoute('route2', 'Basel', 'Pratteln', {}, {}, null);
            this.map.addRoute('route3', 'Basel', 'Oberwil', {}, {}, null);
            
            var map = this.map;
            setTimeout(function() {
                map.removePolyline('route1');
                map.removePolyline('route2');
                map.removePolyline('route3');
            }, 5000);            
        },
        
        setTrackingRoute: function() {
            this.map.addCircle('circle-tracker', 47.560055, 7.589803, 100, {});
            this.map.animateCircle('circle-tracker', 'pulsate', {delay: 25, min: 10, max: 25, step: 0.2});
            this.map.addMarker('tracker', 47.559341, 7.590544, {});
            var map = this.map;
            this.map.addTrackingRoute('tracking', 'Basel', 'Petersplatz, 4051 Basel', {}, {speed: 25, marker: 'tracker', onChange: function(objPosition) {
                console.log(map.options.mapCircles);
                map.options.mapCircles['circle-tracker'].setCenter(objPosition);
            }}, null);
        },
        
        setGeoFence: function() {
            this.map.addMarker('geomarker', 47.559814, 7.589171, {});
            this.map.addPolygonRadar('georadar', 47.560055, 7.589803, 50, 90, {});
            this.map.animatePolygon('georadar', 'rotate', {delay: 5, min: 0, max: 360, rotate: true, step: 25});
            
            
            var map = this.map;
            this.map.addGeoFence('geofence', 'markers', 'geomarker', 'polygon', 'georadar', 
                                function(objTackable, objTracker) {
                                    map.options.mapPolygon['georadar'].setOptions({fillColor: '#FF0000', strokeColor: '#FF0000'});
                                }, 
                                function (objTackable, objTracker) {
                                    map.options.mapPolygon['georadar'].setOptions({fillColor: '#00FF00', strokeColor: '#0B610B'});
                                });
            
            setTimeout(function() {
                map.removeAnimation('polygon', 'georadar', 'rotate');
                map.removePolygon('georadar');
                map.removeMarker('geomarker');
                map.removeGeoFence('geofence');
            }, 10000);
        },
    }

});

$(function() {
    controller.init();
});
