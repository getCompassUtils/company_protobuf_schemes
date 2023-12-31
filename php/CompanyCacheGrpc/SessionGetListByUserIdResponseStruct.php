<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/go_company_cache.proto

namespace CompanyCacheGrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * формат ответа для session.getListByUserId
 *
 * Generated from protobuf message <code>companyCacheGrpc.SessionGetListByUserIdResponseStruct</code>
 */
class SessionGetListByUserIdResponseStruct extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated string session_uniq_list = 1;</code>
     */
    private $session_uniq_list;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $session_uniq_list
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\GoCompanyCache::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated string session_uniq_list = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSessionUniqList()
    {
        return $this->session_uniq_list;
    }

    /**
     * Generated from protobuf field <code>repeated string session_uniq_list = 1;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSessionUniqList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->session_uniq_list = $arr;

        return $this;
    }

}

