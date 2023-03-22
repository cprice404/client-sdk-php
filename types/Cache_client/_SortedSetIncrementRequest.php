<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cacheclient.proto

namespace Cache_client;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>cache_client._SortedSetIncrementRequest</code>
 */
class _SortedSetIncrementRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bytes set_name = 1;</code>
     */
    protected $set_name = '';
    /**
     * Generated from protobuf field <code>bytes value = 2;</code>
     */
    protected $value = '';
    /**
     * Generated from protobuf field <code>double amount = 3;</code>
     */
    protected $amount = 0.0;
    /**
     * Generated from protobuf field <code>uint64 ttl_milliseconds = 4;</code>
     */
    protected $ttl_milliseconds = 0;
    /**
     * Generated from protobuf field <code>bool refresh_ttl = 5;</code>
     */
    protected $refresh_ttl = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $set_name
     *     @type string $value
     *     @type float $amount
     *     @type int|string $ttl_milliseconds
     *     @type bool $refresh_ttl
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Cacheclient::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bytes set_name = 1;</code>
     * @return string
     */
    public function getSetName()
    {
        return $this->set_name;
    }

    /**
     * Generated from protobuf field <code>bytes set_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSetName($var)
    {
        GPBUtil::checkString($var, False);
        $this->set_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes value = 2;</code>
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Generated from protobuf field <code>bytes value = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkString($var, False);
        $this->value = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double amount = 3;</code>
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Generated from protobuf field <code>double amount = 3;</code>
     * @param float $var
     * @return $this
     */
    public function setAmount($var)
    {
        GPBUtil::checkDouble($var);
        $this->amount = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 ttl_milliseconds = 4;</code>
     * @return int|string
     */
    public function getTtlMilliseconds()
    {
        return $this->ttl_milliseconds;
    }

    /**
     * Generated from protobuf field <code>uint64 ttl_milliseconds = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTtlMilliseconds($var)
    {
        GPBUtil::checkUint64($var);
        $this->ttl_milliseconds = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool refresh_ttl = 5;</code>
     * @return bool
     */
    public function getRefreshTtl()
    {
        return $this->refresh_ttl;
    }

    /**
     * Generated from protobuf field <code>bool refresh_ttl = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setRefreshTtl($var)
    {
        GPBUtil::checkBool($var);
        $this->refresh_ttl = $var;

        return $this;
    }

}
