<?php
// GENERATED CODE -- DO NOT EDIT!

namespace RatingGrpc;

/**
 * сервис, который описывает все методы go_rating
 */
class ratingClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \RatingGrpc\SystemStatusRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SystemStatus(\RatingGrpc\SystemStatusRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/ratingGrpc.rating/SystemStatus',
        $argument,
        ['\RatingGrpc\SystemStatusResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \RatingGrpc\SystemTraceGoroutineRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SystemTraceGoroutine(\RatingGrpc\SystemTraceGoroutineRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/ratingGrpc.rating/SystemTraceGoroutine',
        $argument,
        ['\RatingGrpc\SystemTraceGoroutineResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \RatingGrpc\SystemTraceMemoryRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SystemTraceMemory(\RatingGrpc\SystemTraceMemoryRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/ratingGrpc.rating/SystemTraceMemory',
        $argument,
        ['\RatingGrpc\SystemTraceMemoryResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \RatingGrpc\SystemCpuProfileRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SystemCpuProfile(\RatingGrpc\SystemCpuProfileRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/ratingGrpc.rating/SystemCpuProfile',
        $argument,
        ['\RatingGrpc\SystemCpuProfileResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \RatingGrpc\SystemReloadConfigRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SystemReloadConfig(\RatingGrpc\SystemReloadConfigRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/ratingGrpc.rating/SystemReloadConfig',
        $argument,
        ['\RatingGrpc\SystemReloadConfigResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \RatingGrpc\SystemReloadShardingRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SystemReloadSharding(\RatingGrpc\SystemReloadShardingRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/ratingGrpc.rating/SystemReloadSharding',
        $argument,
        ['\RatingGrpc\SystemReloadShardingResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \RatingGrpc\SystemCheckShardingRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SystemCheckSharding(\RatingGrpc\SystemCheckShardingRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/ratingGrpc.rating/SystemCheckSharding',
        $argument,
        ['\RatingGrpc\SystemCheckShardingResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \RatingGrpc\RatingUpdateConversationAnswerStateRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RatingUpdateConversationAnswerState(\RatingGrpc\RatingUpdateConversationAnswerStateRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/ratingGrpc.rating/RatingUpdateConversationAnswerState',
        $argument,
        ['\RatingGrpc\RatingUpdateConversationAnswerStateResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \RatingGrpc\RatingUpdateConversationAnswerStateForReceiversRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RatingUpdateConversationAnswerStateForReceivers(\RatingGrpc\RatingUpdateConversationAnswerStateForReceiversRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/ratingGrpc.rating/RatingUpdateConversationAnswerStateForReceivers',
        $argument,
        ['\RatingGrpc\RatingUpdateConversationAnswerStateForReceiversResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \RatingGrpc\RatingCloseMicroConversationRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RatingCloseMicroConversation(\RatingGrpc\RatingCloseMicroConversationRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/ratingGrpc.rating/RatingCloseMicroConversation',
        $argument,
        ['\RatingGrpc\RatingCloseMicroConversationResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \RatingGrpc\RatingAddScreenTimeRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RatingAddScreenTime(\RatingGrpc\RatingAddScreenTimeRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/ratingGrpc.rating/RatingAddScreenTime',
        $argument,
        ['\RatingGrpc\RatingAddScreenTimeResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \RatingGrpc\RatingIncActionCountRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RatingIncActionCount(\RatingGrpc\RatingIncActionCountRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/ratingGrpc.rating/RatingIncActionCount',
        $argument,
        ['\RatingGrpc\RatingIncActionCountResponseStruct', 'decode'],
        $metadata, $options);
    }

}
