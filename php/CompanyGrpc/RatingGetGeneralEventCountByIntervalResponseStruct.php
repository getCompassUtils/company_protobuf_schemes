<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/go_company.proto

namespace CompanyGrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * формат ответа для rating.GetGeneralEventCountByInterval
 *
 * Generated from protobuf message <code>companyGrpc.RatingGetGeneralEventCountByIntervalResponseStruct</code>
 */
class RatingGetGeneralEventCountByIntervalResponseStruct extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .companyGrpc.EventCount event_count_list = 1;</code>
     */
    private $event_count_list;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \CompanyGrpc\EventCount[]|\Google\Protobuf\Internal\RepeatedField $event_count_list
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\GoCompany::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .companyGrpc.EventCount event_count_list = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEventCountList()
    {
        return $this->event_count_list;
    }

    /**
     * Generated from protobuf field <code>repeated .companyGrpc.EventCount event_count_list = 1;</code>
     * @param \CompanyGrpc\EventCount[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEventCountList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \CompanyGrpc\EventCount::class);
        $this->event_count_list = $arr;

        return $this;
    }

}

