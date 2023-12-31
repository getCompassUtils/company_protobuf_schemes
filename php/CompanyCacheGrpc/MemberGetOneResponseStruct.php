<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/go_company_cache.proto

namespace CompanyCacheGrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * формат ответа для member.getOne
 *
 * Generated from protobuf message <code>companyCacheGrpc.MemberGetOneResponseStruct</code>
 */
class MemberGetOneResponseStruct extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.companyCacheGrpc.MemberInfoStruct member = 1;</code>
     */
    protected $member = null;
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
     *     @type \CompanyCacheGrpc\MemberInfoStruct $member
     *     @type bool $exist
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\GoCompanyCache::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.companyCacheGrpc.MemberInfoStruct member = 1;</code>
     * @return \CompanyCacheGrpc\MemberInfoStruct|null
     */
    public function getMember()
    {
        return $this->member;
    }

    public function hasMember()
    {
        return isset($this->member);
    }

    public function clearMember()
    {
        unset($this->member);
    }

    /**
     * Generated from protobuf field <code>.companyCacheGrpc.MemberInfoStruct member = 1;</code>
     * @param \CompanyCacheGrpc\MemberInfoStruct $var
     * @return $this
     */
    public function setMember($var)
    {
        GPBUtil::checkMessage($var, \CompanyCacheGrpc\MemberInfoStruct::class);
        $this->member = $var;

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

