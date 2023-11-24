<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/go_company.proto

namespace CompanyGrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * формат запроса для rating.Inc
 *
 * Generated from protobuf message <code>companyGrpc.RatingIncRequestStruct</code>
 */
class RatingIncRequestStruct extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string event = 1;</code>
     */
    protected $event = '';
    /**
     * Generated from protobuf field <code>int64 user_id = 2;</code>
     */
    protected $user_id = 0;
    /**
     * Generated from protobuf field <code>int64 inc = 3;</code>
     */
    protected $inc = 0;
    /**
     * Generated from protobuf field <code>int64 company_id = 4;</code>
     */
    protected $company_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $event
     *     @type int|string $user_id
     *     @type int|string $inc
     *     @type int|string $company_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\GoCompany::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string event = 1;</code>
     * @return string
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * Generated from protobuf field <code>string event = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setEvent($var)
    {
        GPBUtil::checkString($var, True);
        $this->event = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 user_id = 2;</code>
     * @return int|string
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Generated from protobuf field <code>int64 user_id = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setUserId($var)
    {
        GPBUtil::checkInt64($var);
        $this->user_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 inc = 3;</code>
     * @return int|string
     */
    public function getInc()
    {
        return $this->inc;
    }

    /**
     * Generated from protobuf field <code>int64 inc = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setInc($var)
    {
        GPBUtil::checkInt64($var);
        $this->inc = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 company_id = 4;</code>
     * @return int|string
     */
    public function getCompanyId()
    {
        return $this->company_id;
    }

    /**
     * Generated from protobuf field <code>int64 company_id = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCompanyId($var)
    {
        GPBUtil::checkInt64($var);
        $this->company_id = $var;

        return $this;
    }

}
