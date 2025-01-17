<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/redis/cluster/v1/cloud_redis_cluster.proto

namespace Google\Cloud\Redis\Cluster\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Maintenance policy per cluster.
 *
 * Generated from protobuf message <code>google.cloud.redis.cluster.v1.ClusterMaintenancePolicy</code>
 */
class ClusterMaintenancePolicy extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The time when the policy was created i.e. Maintenance Window
     * or Deny Period was assigned.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $create_time = null;
    /**
     * Output only. The time when the policy was updated i.e. Maintenance Window
     * or Deny Period was updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $update_time = null;
    /**
     * Optional. Maintenance window that is applied to resources covered by this
     * policy. Minimum 1. For the current version, the maximum number of
     * weekly_maintenance_window is expected to be one.
     *
     * Generated from protobuf field <code>repeated .google.cloud.redis.cluster.v1.ClusterWeeklyMaintenanceWindow weekly_maintenance_window = 3;</code>
     */
    private $weekly_maintenance_window;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. The time when the policy was created i.e. Maintenance Window
     *           or Deny Period was assigned.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. The time when the policy was updated i.e. Maintenance Window
     *           or Deny Period was updated.
     *     @type array<\Google\Cloud\Redis\Cluster\V1\ClusterWeeklyMaintenanceWindow>|\Google\Protobuf\Internal\RepeatedField $weekly_maintenance_window
     *           Optional. Maintenance window that is applied to resources covered by this
     *           policy. Minimum 1. For the current version, the maximum number of
     *           weekly_maintenance_window is expected to be one.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Redis\Cluster\V1\CloudRedisCluster::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The time when the policy was created i.e. Maintenance Window
     * or Deny Period was assigned.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Output only. The time when the policy was created i.e. Maintenance Window
     * or Deny Period was assigned.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Output only. The time when the policy was updated i.e. Maintenance Window
     * or Deny Period was updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * Output only. The time when the policy was updated i.e. Maintenance Window
     * or Deny Period was updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * Optional. Maintenance window that is applied to resources covered by this
     * policy. Minimum 1. For the current version, the maximum number of
     * weekly_maintenance_window is expected to be one.
     *
     * Generated from protobuf field <code>repeated .google.cloud.redis.cluster.v1.ClusterWeeklyMaintenanceWindow weekly_maintenance_window = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getWeeklyMaintenanceWindow()
    {
        return $this->weekly_maintenance_window;
    }

    /**
     * Optional. Maintenance window that is applied to resources covered by this
     * policy. Minimum 1. For the current version, the maximum number of
     * weekly_maintenance_window is expected to be one.
     *
     * Generated from protobuf field <code>repeated .google.cloud.redis.cluster.v1.ClusterWeeklyMaintenanceWindow weekly_maintenance_window = 3;</code>
     * @param array<\Google\Cloud\Redis\Cluster\V1\ClusterWeeklyMaintenanceWindow>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setWeeklyMaintenanceWindow($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Redis\Cluster\V1\ClusterWeeklyMaintenanceWindow::class);
        $this->weekly_maintenance_window = $arr;

        return $this;
    }

}

