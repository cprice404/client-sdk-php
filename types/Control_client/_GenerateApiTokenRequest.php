<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: controlclient.proto

namespace Control_client;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>control_client._GenerateApiTokenRequest</code>
 */
class _GenerateApiTokenRequest extends \Google\Protobuf\Internal\Message
{
    protected $expiry;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Control_client\_GenerateApiTokenRequest\Never $never
     *     @type \Control_client\_GenerateApiTokenRequest\Expires $expires
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Controlclient::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.control_client._GenerateApiTokenRequest.Never never = 2;</code>
     * @return \Control_client\_GenerateApiTokenRequest\Never|null
     */
    public function getNever()
    {
        return $this->readOneof(2);
    }

    public function hasNever()
    {
        return $this->hasOneof(2);
    }

    /**
     * Generated from protobuf field <code>.control_client._GenerateApiTokenRequest.Never never = 2;</code>
     * @param \Control_client\_GenerateApiTokenRequest\Never $var
     * @return $this
     */
    public function setNever($var)
    {
        GPBUtil::checkMessage($var, \Control_client\_GenerateApiTokenRequest\Never::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.control_client._GenerateApiTokenRequest.Expires expires = 3;</code>
     * @return \Control_client\_GenerateApiTokenRequest\Expires|null
     */
    public function getExpires()
    {
        return $this->readOneof(3);
    }

    public function hasExpires()
    {
        return $this->hasOneof(3);
    }

    /**
     * Generated from protobuf field <code>.control_client._GenerateApiTokenRequest.Expires expires = 3;</code>
     * @param \Control_client\_GenerateApiTokenRequest\Expires $var
     * @return $this
     */
    public function setExpires($var)
    {
        GPBUtil::checkMessage($var, \Control_client\_GenerateApiTokenRequest\Expires::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getExpiry()
    {
        return $this->whichOneof("expiry");
    }

}

