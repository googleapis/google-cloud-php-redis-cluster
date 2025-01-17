<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/redis/cluster/v1/cloud_redis_cluster.proto

namespace Google\Cloud\Redis\Cluster\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Time window specified for weekly operations.
 *
 * Generated from protobuf message <code>google.cloud.redis.cluster.v1.ClusterWeeklyMaintenanceWindow</code>
 */
class ClusterWeeklyMaintenanceWindow extends \Google\Protobuf\Internal\Message
{
    /**
     * Allows to define schedule that runs specified day of the week.
     *
     * Generated from protobuf field <code>.google.type.DayOfWeek day = 1;</code>
     */
    protected $day = 0;
    /**
     * Start time of the window in UTC.
     *
     * Generated from protobuf field <code>.google.type.TimeOfDay start_time = 2;</code>
     */
    protected $start_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $day
     *           Allows to define schedule that runs specified day of the week.
     *     @type \Google\Type\TimeOfDay $start_time
     *           Start time of the window in UTC.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Redis\Cluster\V1\CloudRedisCluster::initOnce();
        parent::__construct($data);
    }

    /**
     * Allows to define schedule that runs specified day of the week.
     *
     * Generated from protobuf field <code>.google.type.DayOfWeek day = 1;</code>
     * @return int
     */
    public function getDay()
    {
        return $this->day;
    }

    /**
     * Allows to define schedule that runs specified day of the week.
     *
     * Generated from protobuf field <code>.google.type.DayOfWeek day = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setDay($var)
    {
        GPBUtil::checkEnum($var, \Google\Type\DayOfWeek::class);
        $this->day = $var;

        return $this;
    }

    /**
     * Start time of the window in UTC.
     *
     * Generated from protobuf field <code>.google.type.TimeOfDay start_time = 2;</code>
     * @return \Google\Type\TimeOfDay|null
     */
    public function getStartTime()
    {
        return $this->start_time;
    }

    public function hasStartTime()
    {
        return isset($this->start_time);
    }

    public function clearStartTime()
    {
        unset($this->start_time);
    }

    /**
     * Start time of the window in UTC.
     *
     * Generated from protobuf field <code>.google.type.TimeOfDay start_time = 2;</code>
     * @param \Google\Type\TimeOfDay $var
     * @return $this
     */
    public function setStartTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Type\TimeOfDay::class);
        $this->start_time = $var;

        return $this;
    }

}
