<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/go_company_cache.proto

namespace CompanyCacheGrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * формат ответа для config.getList
 *
 * Generated from protobuf message <code>companyCacheGrpc.ConfigGetListResponseStruct</code>
 */
class ConfigGetListResponseStruct extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .companyCacheGrpc.KeyInfoStruct key_list = 1;</code>
     */
    private $key_list;
    /**
     * Generated from protobuf field <code>repeated string not_found_list = 2;</code>
     */
    private $not_found_list;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \CompanyCacheGrpc\KeyInfoStruct[]|\Google\Protobuf\Internal\RepeatedField $key_list
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $not_found_list
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\GoCompanyCache::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .companyCacheGrpc.KeyInfoStruct key_list = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getKeyList()
    {
        return $this->key_list;
    }

    /**
     * Generated from protobuf field <code>repeated .companyCacheGrpc.KeyInfoStruct key_list = 1;</code>
     * @param \CompanyCacheGrpc\KeyInfoStruct[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setKeyList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \CompanyCacheGrpc\KeyInfoStruct::class);
        $this->key_list = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string not_found_list = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNotFoundList()
    {
        return $this->not_found_list;
    }

    /**
     * Generated from protobuf field <code>repeated string not_found_list = 2;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNotFoundList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->not_found_list = $arr;

        return $this;
    }

}

