<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/go_company_cache.proto

namespace CompanyCacheGrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * формат ответа для config.getOne
 *
 * Generated from protobuf message <code>companyCacheGrpc.ConfigGetOneResponseStruct</code>
 */
class ConfigGetOneResponseStruct extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.companyCacheGrpc.KeyInfoStruct key = 1;</code>
     */
    protected $key = null;
    /**
     * Generated from protobuf field <code>bool exist = 2;</code>
     */
    protected $exist = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \CompanyCacheGrpc\KeyInfoStruct $key
     *     @type bool $exist
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\GoCompanyCache::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.companyCacheGrpc.KeyInfoStruct key = 1;</code>
     * @return \CompanyCacheGrpc\KeyInfoStruct|null
     */
    public function getKey()
    {
        return $this->key;
    }

    public function hasKey()
    {
        return isset($this->key);
    }

    public function clearKey()
    {
        unset($this->key);
    }

    /**
     * Generated from protobuf field <code>.companyCacheGrpc.KeyInfoStruct key = 1;</code>
     * @param \CompanyCacheGrpc\KeyInfoStruct $var
     * @return $this
     */
    public function setKey($var)
    {
        GPBUtil::checkMessage($var, \CompanyCacheGrpc\KeyInfoStruct::class);
        $this->key = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool exist = 2;</code>
     * @return bool
     */
    public function getExist()
    {
        return $this->exist;
    }

    /**
     * Generated from protobuf field <code>bool exist = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setExist($var)
    {
        GPBUtil::checkBool($var);
        $this->exist = $var;

        return $this;
    }

}

