<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/go_rating.proto

namespace RatingGrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * формат запроса для rating.updateConversationAnswerState
 *
 * Generated from protobuf message <code>ratingGrpc.RatingUpdateConversationAnswerStateRequestStruct</code>
 */
class RatingUpdateConversationAnswerStateRequestStruct extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string conversation_key = 1;</code>
     */
    protected $conversation_key = '';
    /**
     * Generated from protobuf field <code>int64 sender_user_id = 2;</code>
     */
    protected $sender_user_id = 0;
    /**
     * Generated from protobuf field <code>repeated int64 receiver_user_id_list = 3;</code>
     */
    private $receiver_user_id_list;
    /**
     * Generated from protobuf field <code>int64 sent_at = 4;</code>
     */
    protected $sent_at = 0;
    /**
     * Generated from protobuf field <code>int64 space_id = 5;</code>
     */
    protected $space_id = 0;
    /**
     * Generated from protobuf field <code>string local_sent_at = 6;</code>
     */
    protected $local_sent_at = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $conversation_key
     *     @type int|string $sender_user_id
     *     @type int[]|string[]|\Google\Protobuf\Internal\RepeatedField $receiver_user_id_list
     *     @type int|string $sent_at
     *     @type int|string $space_id
     *     @type string $local_sent_at
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\GoRating::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string conversation_key = 1;</code>
     * @return string
     */
    public function getConversationKey()
    {
        return $this->conversation_key;
    }

    /**
     * Generated from protobuf field <code>string conversation_key = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setConversationKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->conversation_key = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 sender_user_id = 2;</code>
     * @return int|string
     */
    public function getSenderUserId()
    {
        return $this->sender_user_id;
    }

    /**
     * Generated from protobuf field <code>int64 sender_user_id = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setSenderUserId($var)
    {
        GPBUtil::checkInt64($var);
        $this->sender_user_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated int64 receiver_user_id_list = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getReceiverUserIdList()
    {
        return $this->receiver_user_id_list;
    }

    /**
     * Generated from protobuf field <code>repeated int64 receiver_user_id_list = 3;</code>
     * @param int[]|string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setReceiverUserIdList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT64);
        $this->receiver_user_id_list = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 sent_at = 4;</code>
     * @return int|string
     */
    public function getSentAt()
    {
        return $this->sent_at;
    }

    /**
     * Generated from protobuf field <code>int64 sent_at = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setSentAt($var)
    {
        GPBUtil::checkInt64($var);
        $this->sent_at = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 space_id = 5;</code>
     * @return int|string
     */
    public function getSpaceId()
    {
        return $this->space_id;
    }

    /**
     * Generated from protobuf field <code>int64 space_id = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setSpaceId($var)
    {
        GPBUtil::checkInt64($var);
        $this->space_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string local_sent_at = 6;</code>
     * @return string
     */
    public function getLocalSentAt()
    {
        return $this->local_sent_at;
    }

    /**
     * Generated from protobuf field <code>string local_sent_at = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setLocalSentAt($var)
    {
        GPBUtil::checkString($var, True);
        $this->local_sent_at = $var;

        return $this;
    }

}

