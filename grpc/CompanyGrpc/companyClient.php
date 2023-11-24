<?php
// GENERATED CODE -- DO NOT EDIT!

namespace CompanyGrpc;

/**
 * сервис, который описывает все метод go_company
 */
class companyClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \CompanyGrpc\RatingIncRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RatingInc(\CompanyGrpc\RatingIncRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/companyGrpc.company/RatingInc',
        $argument,
        ['\CompanyGrpc\RatingIncResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \CompanyGrpc\RatingGetRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RatingGet(\CompanyGrpc\RatingGetRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/companyGrpc.company/RatingGet',
        $argument,
        ['\CompanyGrpc\RatingGetResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \CompanyGrpc\RatingGetByUserIdRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RatingGetByUserId(\CompanyGrpc\RatingGetByUserIdRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/companyGrpc.company/RatingGetByUserId',
        $argument,
        ['\CompanyGrpc\RatingGetByUserIdListResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \CompanyGrpc\RatingGetEventCountByIntervalRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RatingGetEventCountByInterval(\CompanyGrpc\RatingGetEventCountByIntervalRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/companyGrpc.company/RatingGetEventCountByInterval',
        $argument,
        ['\CompanyGrpc\RatingGetEventCountByIntervalResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \CompanyGrpc\RatingGetGeneralEventCountByIntervalRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RatingGetGeneralEventCountByInterval(\CompanyGrpc\RatingGetGeneralEventCountByIntervalRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/companyGrpc.company/RatingGetGeneralEventCountByInterval',
        $argument,
        ['\CompanyGrpc\RatingGetGeneralEventCountByIntervalResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \CompanyGrpc\RatingForceSaveCacheRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RatingForceSaveCache(\CompanyGrpc\RatingForceSaveCacheRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/companyGrpc.company/RatingForceSaveCache',
        $argument,
        ['\CompanyGrpc\RatingForceSaveCacheResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \CompanyGrpc\RatingSetUserBlockInSystemStatusRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RatingSetUserBlockInSystemStatus(\CompanyGrpc\RatingSetUserBlockInSystemStatusRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/companyGrpc.company/RatingSetUserBlockInSystemStatus',
        $argument,
        ['\CompanyGrpc\RatingSetUserBlockInSystemStatusResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \CompanyGrpc\RatingGetUserStatusRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RatingGetUserStatus(\CompanyGrpc\RatingGetUserStatusRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/companyGrpc.company/RatingGetUserStatus',
        $argument,
        ['\CompanyGrpc\RatingGetUserStatusResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \CompanyGrpc\RatingGetListByDayRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RatingGetListByDay(\CompanyGrpc\RatingGetListByDayRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/companyGrpc.company/RatingGetListByDay',
        $argument,
        ['\CompanyGrpc\RatingGetListByDayResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \CompanyGrpc\ReactionsAddInConversationRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ReactionsAddInConversation(\CompanyGrpc\ReactionsAddInConversationRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/companyGrpc.company/ReactionsAddInConversation',
        $argument,
        ['\CompanyGrpc\ReactionsAddInConversationResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \CompanyGrpc\ReactionsRemoveInConversationRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ReactionsRemoveInConversation(\CompanyGrpc\ReactionsRemoveInConversationRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/companyGrpc.company/ReactionsRemoveInConversation',
        $argument,
        ['\CompanyGrpc\ReactionsRemoveInConversationResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \CompanyGrpc\ReactionsAddInThreadRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ReactionsAddInThread(\CompanyGrpc\ReactionsAddInThreadRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/companyGrpc.company/ReactionsAddInThread',
        $argument,
        ['\CompanyGrpc\ReactionsAddInThreadResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \CompanyGrpc\ReactionsRemoveInThreadRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ReactionsRemoveInThread(\CompanyGrpc\ReactionsRemoveInThreadRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/companyGrpc.company/ReactionsRemoveInThread',
        $argument,
        ['\CompanyGrpc\ReactionsRemoveInThreadResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \CompanyGrpc\SystemStatusRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SystemStatus(\CompanyGrpc\SystemStatusRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/companyGrpc.company/SystemStatus',
        $argument,
        ['\CompanyGrpc\SystemStatusResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \CompanyGrpc\SystemTraceGoroutineRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SystemTraceGoroutine(\CompanyGrpc\SystemTraceGoroutineRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/companyGrpc.company/SystemTraceGoroutine',
        $argument,
        ['\CompanyGrpc\SystemTraceGoroutineResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \CompanyGrpc\SystemTraceMemoryRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SystemTraceMemory(\CompanyGrpc\SystemTraceMemoryRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/companyGrpc.company/SystemTraceMemory',
        $argument,
        ['\CompanyGrpc\SystemTraceMemoryResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \CompanyGrpc\SystemCpuProfileRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SystemCpuProfile(\CompanyGrpc\SystemCpuProfileRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/companyGrpc.company/SystemCpuProfile',
        $argument,
        ['\CompanyGrpc\SystemCpuProfileResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \CompanyGrpc\SystemReloadConfigRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SystemReloadConfig(\CompanyGrpc\SystemReloadConfigRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/companyGrpc.company/SystemReloadConfig',
        $argument,
        ['\CompanyGrpc\SystemReloadConfigResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \CompanyGrpc\SystemReloadShardingRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SystemReloadSharding(\CompanyGrpc\SystemReloadShardingRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/companyGrpc.company/SystemReloadSharding',
        $argument,
        ['\CompanyGrpc\SystemReloadShardingResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \CompanyGrpc\SystemCheckShardingRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SystemCheckSharding(\CompanyGrpc\SystemCheckShardingRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/companyGrpc.company/SystemCheckSharding',
        $argument,
        ['\CompanyGrpc\SystemCheckShardingResponseStruct', 'decode'],
        $metadata, $options);
    }

}
