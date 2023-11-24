<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/go_company.proto

namespace CompanyGrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * формат запроса для reactions.AddInConversation
 *
 * Generated from protobuf message <code>companyGrpc.ReactionsAddInConversationRequestStruct</code>
 */
class ReactionsAddInConversationRequestStruct extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.companyGrpc.ConversationReactionStruct conversation_reaction = 1;</code>
     */
    protected $conversation_reaction = null;
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
     *     @type \CompanyGrpc\ConversationReactionStruct $conversation_reaction
     *     @type int|string $company_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\GoCompany::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.companyGrpc.ConversationReactionStruct conversation_reaction = 1;</code>
     * @return \CompanyGrpc\ConversationReactionStruct|null
     */
    public function getConversationReaction()
    {
        return $this->conversation_reaction;
    }

    public function hasConversationReaction()
    {
        return isset($this->conversation_reaction);
    }

    public function clearConversationReaction()
    {
        unset($this->conversation_reaction);
    }

    /**
     * Generated from protobuf field <code>.companyGrpc.ConversationReactionStruct conversation_reaction = 1;</code>
     * @param \CompanyGrpc\ConversationReactionStruct $var
     * @return $this
     */
    public function setConversationReaction($var)
    {
        GPBUtil::checkMessage($var, \CompanyGrpc\ConversationReactionStruct::class);
        $this->conversation_reaction = $var;

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

