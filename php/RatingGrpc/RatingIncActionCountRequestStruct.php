<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/go_rating.proto

namespace RatingGrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * формат запроса для rating.incActionCount
 *
 * Generated from protobuf message <code>ratingGrpc.RatingIncActionCountRequestStruct</code>
 */
class RatingIncActionCountRequestStruct extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 space_id = 1;</code>
     */
    protected $space_id = 0;
    /**
     * Generated from protobuf field <code>int64 user_id = 2;</code>
     */
    protected $user_id = 0;
    /**
     * Generated from protobuf field <code>string conversation_map = 3;</code>
     */
    protected $conversation_map = '';
    /**
     * Generated from protobuf field <code>string action = 4;</code>
     */
    protected $action = '';
    /**
     * Generated from protobuf field <code>int64 is_human = 5;</code>
     */
    protected $is_human = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $space_id
     *     @type int|string $user_id
     *     @type string $conversation_map
     *     @type string $action
     *     @type int|string $is_human
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\GoRating::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int64 space_id = 1;</code>
     * @return int|string
     */
    public function getSpaceId()
    {
        return $this->space_id;
    }

    /**
     * Generated from protobuf field <code>int64 space_id = 1;</code>
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
     * Generated from protobuf field <code>string conversation_map = 3;</code>
     * @return string
     */
    public function getConversationMap()
    {
        return $this->conversation_map;
    }

    /**
     * Generated from protobuf field <code>string conversation_map = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setConversationMap($var)
    {
        GPBUtil::checkString($var, True);
        $this->conversation_map = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string action = 4;</code>
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Generated from protobuf field <code>string action = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setAction($var)
    {
        GPBUtil::checkString($var, True);
        $this->action = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 is_human = 5;</code>
     * @return int|string
     */
    public function getIsHuman()
    {
        return $this->is_human;
    }

    /**
     * Generated from protobuf field <code>int64 is_human = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setIsHuman($var)
    {
        GPBUtil::checkInt64($var);
        $this->is_human = $var;

        return $this;
    }

}

