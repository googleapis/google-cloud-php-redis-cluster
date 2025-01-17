<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/redis/cluster/v1/cloud_redis_cluster.proto

namespace Google\Cloud\Redis\Cluster\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Configuration of a service attachment of the cluster, for creating PSC
 * connections.
 *
 * Generated from protobuf message <code>google.cloud.redis.cluster.v1.PscServiceAttachment</code>
 */
class PscServiceAttachment extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Service attachment URI which your self-created PscConnection
     * should use as target
     *
     * Generated from protobuf field <code>string service_attachment = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $service_attachment = '';
    /**
     * Output only. Type of a PSC connection targeting this service attachment.
     *
     * Generated from protobuf field <code>.google.cloud.redis.cluster.v1.ConnectionType connection_type = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $connection_type = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $service_attachment
     *           Output only. Service attachment URI which your self-created PscConnection
     *           should use as target
     *     @type int $connection_type
     *           Output only. Type of a PSC connection targeting this service attachment.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Redis\Cluster\V1\CloudRedisCluster::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Service attachment URI which your self-created PscConnection
     * should use as target
     *
     * Generated from protobuf field <code>string service_attachment = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getServiceAttachment()
    {
        return $this->service_attachment;
    }

    /**
     * Output only. Service attachment URI which your self-created PscConnection
     * should use as target
     *
     * Generated from protobuf field <code>string service_attachment = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setServiceAttachment($var)
    {
        GPBUtil::checkString($var, True);
        $this->service_attachment = $var;

        return $this;
    }

    /**
     * Output only. Type of a PSC connection targeting this service attachment.
     *
     * Generated from protobuf field <code>.google.cloud.redis.cluster.v1.ConnectionType connection_type = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getConnectionType()
    {
        return $this->connection_type;
    }

    /**
     * Output only. Type of a PSC connection targeting this service attachment.
     *
     * Generated from protobuf field <code>.google.cloud.redis.cluster.v1.ConnectionType connection_type = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setConnectionType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Redis\Cluster\V1\ConnectionType::class);
        $this->connection_type = $var;

        return $this;
    }

}
