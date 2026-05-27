<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Company\EventGrpc;

/**
 * сервис, который описывает все метод go_event
 */
class eventClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Company\EventGrpc\EventSetEventTrapRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function EventSetEventTrap(\Company\EventGrpc\EventSetEventTrapRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/eventGrpc.event/EventSetEventTrap',
        $argument,
        ['\Company\EventGrpc\EventSetEventTrapResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Company\EventGrpc\EventWaitEventTrapRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function EventWaitEventTrap(\Company\EventGrpc\EventWaitEventTrapRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/eventGrpc.event/EventWaitEventTrap',
        $argument,
        ['\Company\EventGrpc\EventWaitEventTrapResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Company\EventGrpc\TaskPushRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function TaskPush(\Company\EventGrpc\TaskPushRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/eventGrpc.event/TaskPush',
        $argument,
        ['\Company\EventGrpc\TaskPushResponseStruct', 'decode'],
        $metadata, $options);
    }

}
