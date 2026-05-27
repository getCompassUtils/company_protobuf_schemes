<?php
// GENERATED CODE -- DO NOT EDIT!

namespace SenderGrpc;

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
     * @param \SenderGrpc\SenderSetTokenRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SenderSetToken(\SenderGrpc\SenderSetTokenRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/senderGrpc.sender/SenderSetToken',
        $argument,
        ['\SenderGrpc\SenderSetTokenResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \SenderGrpc\SenderSetConfigRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SenderSetConfig(\SenderGrpc\SenderSetConfigRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/senderGrpc.sender/SenderSetConfig',
        $argument,
        ['\SenderGrpc\SenderSetConfigResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \SenderGrpc\SenderClearConfigRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SenderClearConfig(\SenderGrpc\SenderClearConfigRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/senderGrpc.sender/SenderClearConfig',
        $argument,
        ['\SenderGrpc\SenderClearConfigResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \SenderGrpc\SenderSendEventRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SenderSendEvent(\SenderGrpc\SenderSendEventRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/senderGrpc.sender/SenderSendEvent',
        $argument,
        ['\SenderGrpc\SenderSendEventResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \SenderGrpc\SenderSendEventToAllRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SenderSendEventToAll(\SenderGrpc\SenderSendEventToAllRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/senderGrpc.sender/SenderSendEventToAll',
        $argument,
        ['\SenderGrpc\SenderSendEventToAllResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \SenderGrpc\SenderGetOnlineConnectionsByUserIdRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SenderGetOnlineConnectionsByUserId(\SenderGrpc\SenderGetOnlineConnectionsByUserIdRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/senderGrpc.sender/SenderGetOnlineConnectionsByUserId',
        $argument,
        ['\SenderGrpc\SenderGetOnlineConnectionsByUserIdResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \SenderGrpc\SenderCloseConnectionsByUserIdRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SenderCloseConnectionsByUserId(\SenderGrpc\SenderCloseConnectionsByUserIdRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/senderGrpc.sender/SenderCloseConnectionsByUserId',
        $argument,
        ['\SenderGrpc\SenderCloseConnectionsByUserIdResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \SenderGrpc\SenderCloseConnectionsByUserIdWithWaitRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SenderCloseConnectionsByUserIdWithWait(\SenderGrpc\SenderCloseConnectionsByUserIdWithWaitRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/senderGrpc.sender/SenderCloseConnectionsByUserIdWithWait',
        $argument,
        ['\SenderGrpc\SenderCloseConnectionsByUserIdWithWaitResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \SenderGrpc\SenderCloseConnectionsByDeviceIdWithWaitRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SenderCloseConnectionsByDeviceIdWithWait(\SenderGrpc\SenderCloseConnectionsByDeviceIdWithWaitRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/senderGrpc.sender/SenderCloseConnectionsByDeviceIdWithWait',
        $argument,
        ['\SenderGrpc\SenderCloseConnectionsByDeviceIdWithWaitResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \SenderGrpc\SenderAddTaskPushNotificationRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SenderAddTaskPushNotification(\SenderGrpc\SenderAddTaskPushNotificationRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/senderGrpc.sender/SenderAddTaskPushNotification',
        $argument,
        ['\SenderGrpc\SenderAddTaskPushNotificationResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \SenderGrpc\SenderGetOnlineUsersRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SenderGetOnlineUsers(\SenderGrpc\SenderGetOnlineUsersRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/senderGrpc.sender/SenderGetOnlineUsers',
        $argument,
        ['\SenderGrpc\SenderGetOnlineUsersResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \SenderGrpc\SenderAddUsersToThreadRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SenderAddUsersToThread(\SenderGrpc\SenderAddUsersToThreadRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/senderGrpc.sender/SenderAddUsersToThread',
        $argument,
        ['\SenderGrpc\SenderAddUsersToThreadResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \SenderGrpc\SenderSendTypingEventRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SenderSendTypingEvent(\SenderGrpc\SenderSendTypingEventRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/senderGrpc.sender/SenderSendTypingEvent',
        $argument,
        ['\SenderGrpc\SenderSendTypingEventResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \SenderGrpc\SenderSendVoIPRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SenderSendVoIP(\SenderGrpc\SenderSendVoIPRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/senderGrpc.sender/SenderSendVoIP',
        $argument,
        ['\SenderGrpc\SenderSendVoIPResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \SenderGrpc\SenderSendIncomingCallRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SenderSendIncomingCall(\SenderGrpc\SenderSendIncomingCallRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/senderGrpc.sender/SenderSendIncomingCall',
        $argument,
        ['\SenderGrpc\SenderSendIncomingCallResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \SenderGrpc\ClearUserNotificationCacheRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ClearUserNotificationCache(\SenderGrpc\ClearUserNotificationCacheRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/senderGrpc.sender/ClearUserNotificationCache',
        $argument,
        ['\SenderGrpc\ClearUserNotificationCacheResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \SenderGrpc\SystemStatusRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SystemStatus(\SenderGrpc\SystemStatusRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/senderGrpc.sender/SystemStatus',
        $argument,
        ['\SenderGrpc\SystemStatusResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \SenderGrpc\SystemTraceGoroutineRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SystemTraceGoroutine(\SenderGrpc\SystemTraceGoroutineRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/senderGrpc.sender/SystemTraceGoroutine',
        $argument,
        ['\SenderGrpc\SystemTraceGoroutineResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \SenderGrpc\SystemTraceMemoryRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SystemTraceMemory(\SenderGrpc\SystemTraceMemoryRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/senderGrpc.sender/SystemTraceMemory',
        $argument,
        ['\SenderGrpc\SystemTraceMemoryResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \SenderGrpc\SystemCpuProfileRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SystemCpuProfile(\SenderGrpc\SystemCpuProfileRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/senderGrpc.sender/SystemCpuProfile',
        $argument,
        ['\SenderGrpc\SystemCpuProfileResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * двунаправленный сервис отправки ws
     * @param \SenderGrpc\SenderSendEventBatchingRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SenderSendEventBatching(\SenderGrpc\SenderSendEventBatchingRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/senderGrpc.sender/SenderSendEventBatching',
        $argument,
        ['\SenderGrpc\SenderSendEventBatchingResponseStruct', 'decode'],
        $metadata, $options);
    }

}
