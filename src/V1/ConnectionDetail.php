<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/redis/cluster/v1/cloud_redis_cluster.proto

namespace Google\Cloud\Redis\Cluster\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Detailed information of each PSC connection.
 *
 * Generated from protobuf message <code>google.cloud.redis.cluster.v1.ConnectionDetail</code>
 */
class ConnectionDetail extends \Google\Protobuf\Internal\Message
{
    protected $connection;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Redis\Cluster\V1\PscAutoConnection $psc_auto_connection
     *           Detailed information of a PSC connection that is created through
     *           service connectivity automation.
     *     @type \Google\Cloud\Redis\Cluster\V1\PscConnection $psc_connection
     *           Detailed information of a PSC connection that is created by the customer
     *           who owns the cluster.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Redis\Cluster\V1\CloudRedisCluster::initOnce();
        parent::__construct($data);
    }

    /**
     * Detailed information of a PSC connection that is created through
     * service connectivity automation.
     *
     * Generated from protobuf field <code>.google.cloud.redis.cluster.v1.PscAutoConnection psc_auto_connection = 1;</code>
     * @return \Google\Cloud\Redis\Cluster\V1\PscAutoConnection|null
     */
    public function getPscAutoConnection()
    {
        return $this->readOneof(1);
    }

    public function hasPscAutoConnection()
    {
        return $this->hasOneof(1);
    }

    /**
     * Detailed information of a PSC connection that is created through
     * service connectivity automation.
     *
     * Generated from protobuf field <code>.google.cloud.redis.cluster.v1.PscAutoConnection psc_auto_connection = 1;</code>
     * @param \Google\Cloud\Redis\Cluster\V1\PscAutoConnection $var
     * @return $this
     */
    public function setPscAutoConnection($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Redis\Cluster\V1\PscAutoConnection::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Detailed information of a PSC connection that is created by the customer
     * who owns the cluster.
     *
     * Generated from protobuf field <code>.google.cloud.redis.cluster.v1.PscConnection psc_connection = 2;</code>
     * @return \Google\Cloud\Redis\Cluster\V1\PscConnection|null
     */
    public function getPscConnection()
    {
        return $this->readOneof(2);
    }

    public function hasPscConnection()
    {
        return $this->hasOneof(2);
    }

    /**
     * Detailed information of a PSC connection that is created by the customer
     * who owns the cluster.
     *
     * Generated from protobuf field <code>.google.cloud.redis.cluster.v1.PscConnection psc_connection = 2;</code>
     * @param \Google\Cloud\Redis\Cluster\V1\PscConnection $var
     * @return $this
     */
    public function setPscConnection($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Redis\Cluster\V1\PscConnection::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getConnection()
    {
        return $this->whichOneof("connection");
    }

}
