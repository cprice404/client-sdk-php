<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: common.proto

namespace GPBMetadata;

class Common
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
common.protocommon"	
Present",
PresentAndNotEqual
value_to_check ("
Absent"
Equal
value_to_check ("\'

value_to_check (""
NotEqual
value_to_check ("

_Unbounded"
_EmptyBY
grpc.commonPZ0github.com/momentohq/client-sdk-go;client_sdk_go�Momento.Protos.Commonbproto3'
        , true);

        static::$is_initialized = true;
    }
}
