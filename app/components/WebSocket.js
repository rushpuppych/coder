
/**
 * WebSocketComponent
 * This Component handels the WebSocket Communication and supports
 * a big set of Features.
 * @author: Severin Holm
 * @version: 1.0.0
 */
var WebSocketComponent = function(options) {
    var $this = this;
    
    // Class Options
    this.options = $.extend({
        server_url: 'ws://localhost:8110/broadcast',
        connection_object: null,
    }, options);
    
    /**
     * Initialize WebSocket Object
     */
    this.init = function() {
        $this.options.connection_object = new WebSocket($this.options.server_url);
        
        // Trigger on Connection Open
        $this.options.connection_object.onopen = function(e) {
            
        };

        // Trigger on Message
        $this.options.connection_object.onmessage = function(e) {
            
        };
    };

    /**
     * Sending a Message to the Service
     * @param strMessage
     */
    this.send = function(strMessage) {
        $this.options.connection_object.send(strMessage);
    }
    
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