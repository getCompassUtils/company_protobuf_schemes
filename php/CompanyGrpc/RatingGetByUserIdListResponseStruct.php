<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/go_company.proto

namespace CompanyGrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>companyGrpc.RatingGetByUserIdListResponseStruct</code>
 */
class RatingGetByUserIdListResponseStruct extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .companyGrpc.RatingGetByUserIdResponseStruct user_rating_list = 1;</code>
     */
    private $user_rating_list;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \CompanyGrpc\RatingGetByUserIdResponseStruct[]|\Google\Protobuf\Internal\RepeatedField $user_rating_list
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\GoCompany::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .companyGrpc.RatingGetByUserIdResponseStruct user_rating_list = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUserRatingList()
    {
        return $this->user_rating_list;
    }

    /**
     * Generated from protobuf field <code>repeated .companyGrpc.RatingGetByUserIdResponseStruct user_rating_list = 1;</code>
     * @param \CompanyGrpc\RatingGetByUserIdResponseStruct[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUserRatingList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \CompanyGrpc\RatingGetByUserIdResponseStruct::class);
        $this->user_rating_list = $arr;

        return $this;
    }

}

