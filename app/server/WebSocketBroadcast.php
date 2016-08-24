<?php

namespace app\server;

use Ratchet\MessageComponentInterface;
use Ratchet\ConnectionInterface;

/**
 * Ratchet WebSocket Server Class
 * This is a Rachet Broadcast Server so it has Internal Chanells and Broadcasts all the Recived Data to its Subscribers
 */
class WebSocketBroadcast implements MessageComponentInterface {
    
    protected $objClientList;
    
    /**
     * Constructor
     * This Initialises the WebSocket Broadcast Server
     */ 
    public function __construct() {
        $this->objClientList = new \SplObjectStorage;
    }
    
    /**
     * This will be triggered every time a connection gets openend
     * @param $objConn
     */
    public function onOpen(ConnectionInterface $objConn) {
        $this->objClientList->attach($objConn);
        echo "New connection! ({$conn->resourceId})\n";        
    }

    /**
     * This will be triggered every time a message reaches the server
     * @param $objFrom
     * @param $objMsg
     */
    public function onMessage(ConnectionInterface $objFrom, $objMsg) {
        $numRecv = count($this->objClientList) - 1;
        echo sprintf('Connection %d sending message "%s" to %d other connection%s' . "\n", $objFrom->resourceId, $objMsg, $numRecv, $numRecv == 1 ? '' : 's');
        foreach ($this->objClientList as $objClient) {
            // Broadcast if sender is not reciver
            if ($objFrom !== $objClient) {
                $objClient->send($msg);
            }
        }        
    }

    /**
     * This will be triggered every time a connection gets closed
     * @param $objConn
     */
    public function onClose(ConnectionInterface $objConn) {
        $this->objClientList->detach($objConn);
        echo "Connection {$objConn->resourceId} has disconnected\n";        
    }

    /**
     * This will be triggered every time a error occurs
     * @param objConnection
     * @param $objException
     */
    public function onError(ConnectionInterface $objConn, \Exception $objException) {
        echo "An error has occurred: {$objException->getMessage()}\n";
        $objConn->close();        
    }
}