<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/go_company.proto

namespace CompanyGrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * формат ответа для rating.GetListByDay
 *
 * Generated from protobuf message <code>companyGrpc.RatingGetListByDayResponseStruct</code>
 */
class RatingGetListByDayResponseStruct extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .companyGrpc.UserDayStats user_day_stats_list = 1;</code>
     */
    private $user_day_stats_list;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \CompanyGrpc\UserDayStats[]|\Google\Protobuf\Internal\RepeatedField $user_day_stats_list
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\GoCompany::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .companyGrpc.UserDayStats user_day_stats_list = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUserDayStatsList()
    {
        return $this->user_day_stats_list;
    }

    /**
     * Generated from protobuf field <code>repeated .companyGrpc.UserDayStats user_day_stats_list = 1;</code>
     * @param \CompanyGrpc\UserDayStats[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUserDayStatsList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \CompanyGrpc\UserDayStats::class);
        $this->user_day_stats_list = $arr;

        return $this;
    }

}

