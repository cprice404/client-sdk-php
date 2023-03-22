<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cacheclient.proto

namespace Cache_client;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>cache_client._SortedSetGetScoreRequest</code>
 */
class _SortedSetGetScoreRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bytes set_name = 1;</code>
     */
    protected $set_name = '';
    /**
     * Generated from protobuf field <code>repeated bytes values = 2;</code>
     */
    private $values;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $set_name
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $values
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
     * Generated from protobuf field <code>repeated bytes values = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getValues()
    {
        return $this->values;
    }

    /**
     * Generated from protobuf field <code>repeated bytes values = 2;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setValues($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::BYTES);
        $this->values = $arr;

        return $this;
    }

}
