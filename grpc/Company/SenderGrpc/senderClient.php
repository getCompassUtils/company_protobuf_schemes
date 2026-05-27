<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Company\SenderGrpc;

/**
 * сервис, который описывает все метод go_sender
 */
class senderClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Company\SenderGrpc\SenderSetTokenRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SenderSetToken(\Company\SenderGrpc\SenderSetTokenRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/senderGrpc.sender/SenderSetToken',
        $argument,
        ['\Company\SenderGrpc\SenderSetTokenResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Company\SenderGrpc\SenderSetConfigRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SenderSetConfig(\Company\SenderGrpc\SenderSetConfigRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/senderGrpc.sender/SenderSetConfig',
        $argument,
        ['\Company\SenderGrpc\SenderSetConfigResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Company\SenderGrpc\SenderClearConfigRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SenderClearConfig(\Company\SenderGrpc\SenderClearConfigRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/senderGrpc.sender/SenderClearConfig',
        $argument,
        ['\Company\SenderGrpc\SenderClearConfigResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Company\SenderGrpc\SenderSendEventRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SenderSendEvent(\Company\SenderGrpc\SenderSendEventRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/senderGrpc.sender/SenderSendEvent',
        $argument,
        ['\Company\SenderGrpc\SenderSendEventResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Company\SenderGrpc\SenderSendEventToAllRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SenderSendEventToAll(\Company\SenderGrpc\SenderSendEventToAllRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/senderGrpc.sender/SenderSendEventToAll',
        $argument,
        ['\Company\SenderGrpc\SenderSendEventToAllResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Company\SenderGrpc\SenderGetOnlineConnectionsByUserIdRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SenderGetOnlineConnectionsByUserId(\Company\SenderGrpc\SenderGetOnlineConnectionsByUserIdRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/senderGrpc.sender/SenderGetOnlineConnectionsByUserId',
        $argument,
        ['\Company\SenderGrpc\SenderGetOnlineConnectionsByUserIdResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Company\SenderGrpc\SenderCloseConnectionsByUserIdRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SenderCloseConnectionsByUserId(\Company\SenderGrpc\SenderCloseConnectionsByUserIdRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/senderGrpc.sender/SenderCloseConnectionsByUserId',
        $argument,
        ['\Company\SenderGrpc\SenderCloseConnectionsByUserIdResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Company\SenderGrpc\SenderCloseConnectionsByUserIdWithWaitRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SenderCloseConnectionsByUserIdWithWait(\Company\SenderGrpc\SenderCloseConnectionsByUserIdWithWaitRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/senderGrpc.sender/SenderCloseConnectionsByUserIdWithWait',
        $argument,
        ['\Company\SenderGrpc\SenderCloseConnectionsByUserIdWithWaitResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Company\SenderGrpc\SenderCloseConnectionsByDeviceIdWithWaitRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SenderCloseConnectionsByDeviceIdWithWait(\Company\SenderGrpc\SenderCloseConnectionsByDeviceIdWithWaitRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/senderGrpc.sender/SenderCloseConnectionsByDeviceIdWithWait',
        $argument,
        ['\Company\SenderGrpc\SenderCloseConnectionsByDeviceIdWithWaitResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Company\SenderGrpc\SenderAddTaskPushNotificationRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SenderAddTaskPushNotification(\Company\SenderGrpc\SenderAddTaskPushNotificationRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/senderGrpc.sender/SenderAddTaskPushNotification',
        $argument,
        ['\Company\SenderGrpc\SenderAddTaskPushNotificationResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Company\SenderGrpc\SenderGetOnlineUsersRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SenderGetOnlineUsers(\Company\SenderGrpc\SenderGetOnlineUsersRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/senderGrpc.sender/SenderGetOnlineUsers',
        $argument,
        ['\Company\SenderGrpc\SenderGetOnlineUsersResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Company\SenderGrpc\SenderAddUsersToThreadRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SenderAddUsersToThread(\Company\SenderGrpc\SenderAddUsersToThreadRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/senderGrpc.sender/SenderAddUsersToThread',
        $argument,
        ['\Company\SenderGrpc\SenderAddUsersToThreadResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Company\SenderGrpc\SenderSendTypingEventRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SenderSendTypingEvent(\Company\SenderGrpc\SenderSendTypingEventRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/senderGrpc.sender/SenderSendTypingEvent',
        $argument,
        ['\Company\SenderGrpc\SenderSendTypingEventResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Company\SenderGrpc\SenderSendVoIPRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SenderSendVoIP(\Company\SenderGrpc\SenderSendVoIPRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/senderGrpc.sender/SenderSendVoIP',
        $argument,
        ['\Company\SenderGrpc\SenderSendVoIPResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Company\SenderGrpc\SenderSendIncomingCallRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SenderSendIncomingCall(\Company\SenderGrpc\SenderSendIncomingCallRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/senderGrpc.sender/SenderSendIncomingCall',
        $argument,
        ['\Company\SenderGrpc\SenderSendIncomingCallResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Company\SenderGrpc\ClearUserNotificationCacheRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ClearUserNotificationCache(\Company\SenderGrpc\ClearUserNotificationCacheRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/senderGrpc.sender/ClearUserNotificationCache',
        $argument,
        ['\Company\SenderGrpc\ClearUserNotificationCacheResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Company\SenderGrpc\SystemStatusRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SystemStatus(\Company\SenderGrpc\SystemStatusRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/senderGrpc.sender/SystemStatus',
        $argument,
        ['\Company\SenderGrpc\SystemStatusResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Company\SenderGrpc\SystemTraceGoroutineRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SystemTraceGoroutine(\Company\SenderGrpc\SystemTraceGoroutineRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/senderGrpc.sender/SystemTraceGoroutine',
        $argument,
        ['\Company\SenderGrpc\SystemTraceGoroutineResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Company\SenderGrpc\SystemTraceMemoryRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SystemTraceMemory(\Company\SenderGrpc\SystemTraceMemoryRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/senderGrpc.sender/SystemTraceMemory',
        $argument,
        ['\Company\SenderGrpc\SystemTraceMemoryResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Company\SenderGrpc\SystemCpuProfileRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SystemCpuProfile(\Company\SenderGrpc\SystemCpuProfileRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/senderGrpc.sender/SystemCpuProfile',
        $argument,
        ['\Company\SenderGrpc\SystemCpuProfileResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * двунаправленный сервис отправки ws
     * @param \Company\SenderGrpc\SenderSendEventBatchingRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SenderSendEventBatching(\Company\SenderGrpc\SenderSendEventBatchingRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/senderGrpc.sender/SenderSendEventBatching',
        $argument,
        ['\Company\SenderGrpc\SenderSendEventBatchingResponseStruct', 'decode'],
        $metadata, $options);
    }

}
