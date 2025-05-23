<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/go_sender.proto

namespace SenderGrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * формат запроса для Sender.SendEventBatching
 *
 * Generated from protobuf message <code>senderGrpc.SenderSendEventBatchingRequestStruct</code>
 */
class SenderSendEventBatchingRequestStruct extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .senderGrpc.SenderSendEventRequestStruct event_list = 1;</code>
     */
    private $event_list;
    /**
     * Generated from protobuf field <code>int64 company_id = 2;</code>
     */
    protected $company_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \SenderGrpc\SenderSendEventRequestStruct[]|\Google\Protobuf\Internal\RepeatedField $event_list
     *     @type int|string $company_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\GoSender::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .senderGrpc.SenderSendEventRequestStruct event_list = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEventList()
    {
        return $this->event_list;
    }

    /**
     * Generated from protobuf field <code>repeated .senderGrpc.SenderSendEventRequestStruct event_list = 1;</code>
     * @param \SenderGrpc\SenderSendEventRequestStruct[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEventList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \SenderGrpc\SenderSendEventRequestStruct::class);
        $this->event_list = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 company_id = 2;</code>
     * @return int|string
     */
    public function getCompanyId()
    {
        return $this->company_id;
    }

    /**
     * Generated from protobuf field <code>int64 company_id = 2;</code>
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

