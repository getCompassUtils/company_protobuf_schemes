<?php
// GENERATED CODE -- DO NOT EDIT!

namespace SenderCacheGrpc;

/**
 * сервис, который описывает все метод go_company_cache
 */
class senderCacheClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \SenderCacheGrpc\SenderSetTokenRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \SenderCacheGrpc\SenderSetTokenResponseStruct
     */
    public function SenderSetToken(\SenderCacheGrpc\SenderSetTokenRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/senderCacheGrpc.senderCache/SenderSetToken',
        $argument,
        ['\SenderCacheGrpc\SenderSetTokenResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \SenderCacheGrpc\SenderSendEventRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \SenderCacheGrpc\SenderSendEventResponseStruct
     */
    public function SenderSendEvent(\SenderCacheGrpc\SenderSendEventRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/senderCacheGrpc.senderCache/SenderSendEvent',
        $argument,
        ['\SenderCacheGrpc\SenderSendEventResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \SenderCacheGrpc\SenderGetOnlineConnectionsByUserIdRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \SenderCacheGrpc\SenderGetOnlineConnectionsByUserIdResponseStruct
     */
    public function SenderGetOnlineConnectionsByUserId(\SenderCacheGrpc\SenderGetOnlineConnectionsByUserIdRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/senderCacheGrpc.senderCache/SenderGetOnlineConnectionsByUserId',
        $argument,
        ['\SenderCacheGrpc\SenderGetOnlineConnectionsByUserIdResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \SenderCacheGrpc\SenderCloseConnectionsByUserIdRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \SenderCacheGrpc\SenderCloseConnectionsByUserIdResponseStruct
     */
    public function SenderCloseConnectionsByUserId(\SenderCacheGrpc\SenderCloseConnectionsByUserIdRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/senderCacheGrpc.senderCache/SenderCloseConnectionsByUserId',
        $argument,
        ['\SenderCacheGrpc\SenderCloseConnectionsByUserIdResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \SenderCacheGrpc\SenderAddTaskPushNotificationRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \SenderCacheGrpc\SenderAddTaskPushNotificationResponseStruct
     */
    public function SenderAddTaskPushNotification(\SenderCacheGrpc\SenderAddTaskPushNotificationRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/senderCacheGrpc.senderCache/SenderAddTaskPushNotification',
        $argument,
        ['\SenderCacheGrpc\SenderAddTaskPushNotificationResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \SenderCacheGrpc\SenderGetOnlineUsersRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \SenderCacheGrpc\SenderGetOnlineUsersResponseStruct
     */
    public function SenderGetOnlineUsers(\SenderCacheGrpc\SenderGetOnlineUsersRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/senderCacheGrpc.senderCache/SenderGetOnlineUsers',
        $argument,
        ['\SenderCacheGrpc\SenderGetOnlineUsersResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \SenderCacheGrpc\SenderAddUsersToThreadRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \SenderCacheGrpc\SenderAddUsersToThreadResponseStruct
     */
    public function SenderAddUsersToThread(\SenderCacheGrpc\SenderAddUsersToThreadRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/senderCacheGrpc.senderCache/SenderAddUsersToThread',
        $argument,
        ['\SenderCacheGrpc\SenderAddUsersToThreadResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \SenderCacheGrpc\SenderSendTypingEventRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \SenderCacheGrpc\SenderSendTypingEventResponseStruct
     */
    public function SenderSendTypingEvent(\SenderCacheGrpc\SenderSendTypingEventRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/senderCacheGrpc.senderCache/SenderSendTypingEvent',
        $argument,
        ['\SenderCacheGrpc\SenderSendTypingEventResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \SenderCacheGrpc\SenderSendThreadTypingEventRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \SenderCacheGrpc\SenderSendThreadTypingEventResponseStruct
     */
    public function SenderSendThreadTypingEvent(\SenderCacheGrpc\SenderSendThreadTypingEventRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/senderCacheGrpc.senderCache/SenderSendThreadTypingEvent',
        $argument,
        ['\SenderCacheGrpc\SenderSendThreadTypingEventResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \SenderCacheGrpc\SenderSendVoIPRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \SenderCacheGrpc\SenderSendVoIPResponseStruct
     */
    public function SenderSendVoIP(\SenderCacheGrpc\SenderSendVoIPRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/senderCacheGrpc.senderCache/SenderSendVoIP',
        $argument,
        ['\SenderCacheGrpc\SenderSendVoIPResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \SenderCacheGrpc\SenderSendIncomingCallRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \SenderCacheGrpc\SenderSendIncomingCallResponseStruct
     */
    public function SenderSendIncomingCall(\SenderCacheGrpc\SenderSendIncomingCallRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/senderCacheGrpc.senderCache/SenderSendIncomingCall',
        $argument,
        ['\SenderCacheGrpc\SenderSendIncomingCallResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \SenderCacheGrpc\SystemStatusRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \SenderCacheGrpc\SystemStatusResponseStruct
     */
    public function SystemStatus(\SenderCacheGrpc\SystemStatusRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/senderCacheGrpc.senderCache/SystemStatus',
        $argument,
        ['\SenderCacheGrpc\SystemStatusResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \SenderCacheGrpc\SystemTraceGoroutineRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \SenderCacheGrpc\SystemTraceGoroutineResponseStruct
     */
    public function SystemTraceGoroutine(\SenderCacheGrpc\SystemTraceGoroutineRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/senderCacheGrpc.senderCache/SystemTraceGoroutine',
        $argument,
        ['\SenderCacheGrpc\SystemTraceGoroutineResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \SenderCacheGrpc\SystemTraceMemoryRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \SenderCacheGrpc\SystemTraceMemoryResponseStruct
     */
    public function SystemTraceMemory(\SenderCacheGrpc\SystemTraceMemoryRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/senderCacheGrpc.senderCache/SystemTraceMemory',
        $argument,
        ['\SenderCacheGrpc\SystemTraceMemoryResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \SenderCacheGrpc\SystemCpuProfileRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \SenderCacheGrpc\SystemCpuProfileResponseStruct
     */
    public function SystemCpuProfile(\SenderCacheGrpc\SystemCpuProfileRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/senderCacheGrpc.senderCache/SystemCpuProfile',
        $argument,
        ['\SenderCacheGrpc\SystemCpuProfileResponseStruct', 'decode'],
        $metadata, $options);
    }

}
