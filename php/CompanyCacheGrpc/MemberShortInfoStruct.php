<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/go_company_cache.proto

namespace CompanyCacheGrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * структура пользователя
 *
 * Generated from protobuf message <code>companyCacheGrpc.MemberShortInfoStruct</code>
 */
class MemberShortInfoStruct extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 user_id = 1;</code>
     */
    protected $user_id = 0;
    /**
     * Generated from protobuf field <code>int32 role = 2;</code>
     */
    protected $role = 0;
    /**
     * Generated from protobuf field <code>int32 npc_type = 3;</code>
     */
    protected $npc_type = 0;
    /**
     * Generated from protobuf field <code>int32 permissions = 4;</code>
     */
    protected $permissions = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $user_id
     *     @type int $role
     *     @type int $npc_type
     *     @type int $permissions
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\GoCompanyCache::initOnce();
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
     * Generated from protobuf field <code>int32 role = 2;</code>
     * @return int
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Generated from protobuf field <code>int32 role = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setRole($var)
    {
        GPBUtil::checkInt32($var);
        $this->role = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 npc_type = 3;</code>
     * @return int
     */
    public function getNpcType()
    {
        return $this->npc_type;
    }

    /**
     * Generated from protobuf field <code>int32 npc_type = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setNpcType($var)
    {
        GPBUtil::checkInt32($var);
        $this->npc_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 permissions = 4;</code>
     * @return int
     */
    public function getPermissions()
    {
        return $this->permissions;
    }

    /**
     * Generated from protobuf field <code>int32 permissions = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setPermissions($var)
    {
        GPBUtil::checkInt32($var);
        $this->permissions = $var;

        return $this;
    }

}

