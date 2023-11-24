<?php
// GENERATED CODE -- DO NOT EDIT!

namespace CompanyCacheGrpc;

/**
 * сервис, который описывает все метод go_company_cache
 */
class companyCacheClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \CompanyCacheGrpc\SessionGetInfoRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SessionGetInfo(\CompanyCacheGrpc\SessionGetInfoRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/companyCacheGrpc.companyCache/SessionGetInfo',
        $argument,
        ['\CompanyCacheGrpc\SessionGetInfoResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \CompanyCacheGrpc\SessionDeleteByUserIdRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SessionDeleteByUserId(\CompanyCacheGrpc\SessionDeleteByUserIdRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/companyCacheGrpc.companyCache/SessionDeleteByUserId',
        $argument,
        ['\CompanyCacheGrpc\SessionDeleteByUserIdResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \CompanyCacheGrpc\SessionDeleteBySessionUniqRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SessionDeleteBySessionUniq(\CompanyCacheGrpc\SessionDeleteBySessionUniqRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/companyCacheGrpc.companyCache/SessionDeleteBySessionUniq',
        $argument,
        ['\CompanyCacheGrpc\SessionDeleteBySessionUniqResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \CompanyCacheGrpc\SessionGetListByUserIdRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SessionGetListByUserId(\CompanyCacheGrpc\SessionGetListByUserIdRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/companyCacheGrpc.companyCache/SessionGetListByUserId',
        $argument,
        ['\CompanyCacheGrpc\SessionGetListByUserIdResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \CompanyCacheGrpc\SessionClearCacheRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SessionClearCache(\CompanyCacheGrpc\SessionClearCacheRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/companyCacheGrpc.companyCache/SessionClearCache',
        $argument,
        ['\CompanyCacheGrpc\SessionClearCacheResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \CompanyCacheGrpc\SystemStatusRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SystemStatus(\CompanyCacheGrpc\SystemStatusRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/companyCacheGrpc.companyCache/SystemStatus',
        $argument,
        ['\CompanyCacheGrpc\SystemStatusResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \CompanyCacheGrpc\SystemTraceGoroutineRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SystemTraceGoroutine(\CompanyCacheGrpc\SystemTraceGoroutineRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/companyCacheGrpc.companyCache/SystemTraceGoroutine',
        $argument,
        ['\CompanyCacheGrpc\SystemTraceGoroutineResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \CompanyCacheGrpc\SystemTraceMemoryRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SystemTraceMemory(\CompanyCacheGrpc\SystemTraceMemoryRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/companyCacheGrpc.companyCache/SystemTraceMemory',
        $argument,
        ['\CompanyCacheGrpc\SystemTraceMemoryResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \CompanyCacheGrpc\SystemCpuProfileRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SystemCpuProfile(\CompanyCacheGrpc\SystemCpuProfileRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/companyCacheGrpc.companyCache/SystemCpuProfile',
        $argument,
        ['\CompanyCacheGrpc\SystemCpuProfileResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \CompanyCacheGrpc\SystemReloadConfigRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SystemReloadConfig(\CompanyCacheGrpc\SystemReloadConfigRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/companyCacheGrpc.companyCache/SystemReloadConfig',
        $argument,
        ['\CompanyCacheGrpc\SystemReloadConfigResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \CompanyCacheGrpc\SystemReloadShardingRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SystemReloadSharding(\CompanyCacheGrpc\SystemReloadShardingRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/companyCacheGrpc.companyCache/SystemReloadSharding',
        $argument,
        ['\CompanyCacheGrpc\SystemReloadShardingResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \CompanyCacheGrpc\SystemCheckShardingRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SystemCheckSharding(\CompanyCacheGrpc\SystemCheckShardingRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/companyCacheGrpc.companyCache/SystemCheckSharding',
        $argument,
        ['\CompanyCacheGrpc\SystemCheckShardingResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \CompanyCacheGrpc\MemberGetListRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function MemberGetList(\CompanyCacheGrpc\MemberGetListRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/companyCacheGrpc.companyCache/MemberGetList',
        $argument,
        ['\CompanyCacheGrpc\MemberGetListResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \CompanyCacheGrpc\MemberGetShortListRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function MemberGetShortList(\CompanyCacheGrpc\MemberGetShortListRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/companyCacheGrpc.companyCache/MemberGetShortList',
        $argument,
        ['\CompanyCacheGrpc\MemberGetShortListResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \CompanyCacheGrpc\MemberGetOneRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function MemberGetOne(\CompanyCacheGrpc\MemberGetOneRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/companyCacheGrpc.companyCache/MemberGetOne',
        $argument,
        ['\CompanyCacheGrpc\MemberGetOneResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \CompanyCacheGrpc\MemberDeleteFromCacheByUserIdRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function MemberDeleteFromCacheByUserId(\CompanyCacheGrpc\MemberDeleteFromCacheByUserIdRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/companyCacheGrpc.companyCache/MemberDeleteFromCacheByUserId',
        $argument,
        ['\CompanyCacheGrpc\MemberDeleteFromCacheByUserIdResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \CompanyCacheGrpc\MemberDeleteFromCacheByUserIdListRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function MemberDeleteFromCacheByUserIdList(\CompanyCacheGrpc\MemberDeleteFromCacheByUserIdListRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/companyCacheGrpc.companyCache/MemberDeleteFromCacheByUserIdList',
        $argument,
        ['\CompanyCacheGrpc\MemberDeleteFromCacheByUserIdListResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \CompanyCacheGrpc\MemberClearCacheRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function MemberClearCache(\CompanyCacheGrpc\MemberClearCacheRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/companyCacheGrpc.companyCache/MemberClearCache',
        $argument,
        ['\CompanyCacheGrpc\MemberClearCacheResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \CompanyCacheGrpc\ConfigGetListRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ConfigGetList(\CompanyCacheGrpc\ConfigGetListRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/companyCacheGrpc.companyCache/ConfigGetList',
        $argument,
        ['\CompanyCacheGrpc\ConfigGetListResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \CompanyCacheGrpc\ConfigGetOneRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ConfigGetOne(\CompanyCacheGrpc\ConfigGetOneRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/companyCacheGrpc.companyCache/ConfigGetOne',
        $argument,
        ['\CompanyCacheGrpc\ConfigGetOneResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \CompanyCacheGrpc\ConfigDeleteFromCacheByKeyRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ConfigDeleteFromCacheByKey(\CompanyCacheGrpc\ConfigDeleteFromCacheByKeyRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/companyCacheGrpc.companyCache/ConfigDeleteFromCacheByKey',
        $argument,
        ['\CompanyCacheGrpc\ConfigDeleteFromCacheByKeyResponseStruct', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \CompanyCacheGrpc\ConfigClearCacheRequestStruct $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ConfigClearCache(\CompanyCacheGrpc\ConfigClearCacheRequestStruct $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/companyCacheGrpc.companyCache/ConfigClearCache',
        $argument,
        ['\CompanyCacheGrpc\ConfigClearCacheResponseStruct', 'decode'],
        $metadata, $options);
    }

}
