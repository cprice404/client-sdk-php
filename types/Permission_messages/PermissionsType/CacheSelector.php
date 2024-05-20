<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: permissionmessages.proto

namespace Permission_messages\PermissionsType;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>permission_messages.PermissionsType.CacheSelector</code>
 */
class CacheSelector extends \Google\Protobuf\Internal\Message
{
    protected $kind;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $cache_name
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Permissionmessages::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string cache_name = 1;</code>
     * @return string
     */
    public function getCacheName()
    {
        return $this->readOneof(1);
    }

    public function hasCacheName()
    {
        return $this->hasOneof(1);
    }

    /**
     * Generated from protobuf field <code>string cache_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setCacheName($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getKind()
    {
        return $this->whichOneof("kind");
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CacheSelector::class, \Permission_messages\PermissionsType_CacheSelector::class);
