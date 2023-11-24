<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/go_company.proto

namespace CompanyGrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * структура для rating.GetByUserId
 *
 * Generated from protobuf message <code>companyGrpc.UserRating</code>
 */
class UserRating extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 user_id = 1;</code>
     */
    protected $user_id = 0;
    /**
     * Generated from protobuf field <code>int64 general_position = 2;</code>
     */
    protected $general_position = 0;
    /**
     * Generated from protobuf field <code>int64 year = 3;</code>
     */
    protected $year = 0;
    /**
     * Generated from protobuf field <code>map<string, int64> event_count_list = 4;</code>
     */
    private $event_count_list;
    /**
     * Generated from protobuf field <code>int64 general_count = 5;</code>
     */
    protected $general_count = 0;
    /**
     * Generated from protobuf field <code>int64 updated_at = 6;</code>
     */
    protected $updated_at = 0;
    /**
     * Generated from protobuf field <code>int64 company_id = 7;</code>
     */
    protected $company_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $user_id
     *     @type int|string $general_position
     *     @type int|string $year
     *     @type array|\Google\Protobuf\Internal\MapField $event_count_list
     *     @type int|string $general_count
     *     @type int|string $updated_at
     *     @type int|string $company_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\GoCompany::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int64 user_id = 1;</code>
     * @return int|string
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Generated from protobuf field <code>int64 user_id = 1;</code>
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
     * Generated from protobuf field <code>int64 general_position = 2;</code>
     * @return int|string
     */
    public function getGeneralPosition()
    {
        return $this->general_position;
    }

    /**
     * Generated from protobuf field <code>int64 general_position = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setGeneralPosition($var)
    {
        GPBUtil::checkInt64($var);
        $this->general_position = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 year = 3;</code>
     * @return int|string
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Generated from protobuf field <code>int64 year = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setYear($var)
    {
        GPBUtil::checkInt64($var);
        $this->year = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>map<string, int64> event_count_list = 4;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getEventCountList()
    {
        return $this->event_count_list;
    }

    /**
     * Generated from protobuf field <code>map<string, int64> event_count_list = 4;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setEventCountList($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::INT64);
        $this->event_count_list = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 general_count = 5;</code>
     * @return int|string
     */
    public function getGeneralCount()
    {
        return $this->general_count;
    }

    /**
     * Generated from protobuf field <code>int64 general_count = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setGeneralCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->general_count = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 updated_at = 6;</code>
     * @return int|string
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * Generated from protobuf field <code>int64 updated_at = 6;</code>
     * @param int|string $var
     * @return $this
     */
    public function setUpdatedAt($var)
    {
        GPBUtil::checkInt64($var);
        $this->updated_at = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 company_id = 7;</code>
     * @return int|string
     */
    public function getCompanyId()
    {
        return $this->company_id;
    }

    /**
     * Generated from protobuf field <code>int64 company_id = 7;</code>
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

