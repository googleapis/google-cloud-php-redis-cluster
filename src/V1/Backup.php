<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/redis/cluster/v1/cloud_redis_cluster.proto

namespace Google\Cloud\Redis\Cluster\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Backup of a cluster.
 *
 * Generated from protobuf message <code>google.cloud.redis.cluster.v1.Backup</code>
 */
class Backup extends \Google\Protobuf\Internal\Message
{
    /**
     * Identifier. Full resource path of the backup. the last part of the name is
     * the backup id with the following format: [YYYYMMDDHHMMSS]_[Shorted Cluster
     * UID] OR customer specified while backup cluster. Example:
     * 20240515123000_1234
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER];</code>
     */
    protected $name = '';
    /**
     * Output only. The time when the backup was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $create_time = null;
    /**
     * Output only. Cluster resource path of this backup.
     *
     * Generated from protobuf field <code>string cluster = 3 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    protected $cluster = '';
    /**
     * Output only. Cluster uid of this backup.
     *
     * Generated from protobuf field <code>string cluster_uid = 4 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.field_info) = {</code>
     */
    protected $cluster_uid = '';
    /**
     * Output only. Total size of the backup in bytes.
     *
     * Generated from protobuf field <code>int64 total_size_bytes = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $total_size_bytes = 0;
    /**
     * Output only. The time when the backup will expire.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expire_time = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $expire_time = null;
    /**
     * Output only. redis-7.2, valkey-7.5
     *
     * Generated from protobuf field <code>string engine_version = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $engine_version = '';
    /**
     * Output only. List of backup files of the backup.
     *
     * Generated from protobuf field <code>repeated .google.cloud.redis.cluster.v1.BackupFile backup_files = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $backup_files;
    /**
     * Output only. Node type of the cluster.
     *
     * Generated from protobuf field <code>.google.cloud.redis.cluster.v1.NodeType node_type = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $node_type = 0;
    /**
     * Output only. Number of replicas for the cluster.
     *
     * Generated from protobuf field <code>int32 replica_count = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $replica_count = 0;
    /**
     * Output only. Number of shards for the cluster.
     *
     * Generated from protobuf field <code>int32 shard_count = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $shard_count = 0;
    /**
     * Output only. Type of the backup.
     *
     * Generated from protobuf field <code>.google.cloud.redis.cluster.v1.Backup.BackupType backup_type = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $backup_type = 0;
    /**
     * Output only. State of the backup.
     *
     * Generated from protobuf field <code>.google.cloud.redis.cluster.v1.Backup.State state = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $state = 0;
    /**
     * Output only. Encryption information of the backup.
     *
     * Generated from protobuf field <code>.google.cloud.redis.cluster.v1.EncryptionInfo encryption_info = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $encryption_info = null;
    /**
     * Output only. System assigned unique identifier of the backup.
     *
     * Generated from protobuf field <code>string uid = 15 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.field_info) = {</code>
     */
    protected $uid = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Identifier. Full resource path of the backup. the last part of the name is
     *           the backup id with the following format: [YYYYMMDDHHMMSS]_[Shorted Cluster
     *           UID] OR customer specified while backup cluster. Example:
     *           20240515123000_1234
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. The time when the backup was created.
     *     @type string $cluster
     *           Output only. Cluster resource path of this backup.
     *     @type string $cluster_uid
     *           Output only. Cluster uid of this backup.
     *     @type int|string $total_size_bytes
     *           Output only. Total size of the backup in bytes.
     *     @type \Google\Protobuf\Timestamp $expire_time
     *           Output only. The time when the backup will expire.
     *     @type string $engine_version
     *           Output only. redis-7.2, valkey-7.5
     *     @type array<\Google\Cloud\Redis\Cluster\V1\BackupFile>|\Google\Protobuf\Internal\RepeatedField $backup_files
     *           Output only. List of backup files of the backup.
     *     @type int $node_type
     *           Output only. Node type of the cluster.
     *     @type int $replica_count
     *           Output only. Number of replicas for the cluster.
     *     @type int $shard_count
     *           Output only. Number of shards for the cluster.
     *     @type int $backup_type
     *           Output only. Type of the backup.
     *     @type int $state
     *           Output only. State of the backup.
     *     @type \Google\Cloud\Redis\Cluster\V1\EncryptionInfo $encryption_info
     *           Output only. Encryption information of the backup.
     *     @type string $uid
     *           Output only. System assigned unique identifier of the backup.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Redis\Cluster\V1\CloudRedisCluster::initOnce();
        parent::__construct($data);
    }

    /**
     * Identifier. Full resource path of the backup. the last part of the name is
     * the backup id with the following format: [YYYYMMDDHHMMSS]_[Shorted Cluster
     * UID] OR customer specified while backup cluster. Example:
     * 20240515123000_1234
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Identifier. Full resource path of the backup. the last part of the name is
     * the backup id with the following format: [YYYYMMDDHHMMSS]_[Shorted Cluster
     * UID] OR customer specified while backup cluster. Example:
     * 20240515123000_1234
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Output only. The time when the backup was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. The time when the backup was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. Cluster resource path of this backup.
     *
     * Generated from protobuf field <code>string cluster = 3 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getCluster()
    {
        return $this->cluster;
    }

    /**
     * Output only. Cluster resource path of this backup.
     *
     * Generated from protobuf field <code>string cluster = 3 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setCluster($var)
    {
        GPBUtil::checkString($var, True);
        $this->cluster = $var;

        return $this;
    }

    /**
     * Output only. Cluster uid of this backup.
     *
     * Generated from protobuf field <code>string cluster_uid = 4 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.field_info) = {</code>
     * @return string
     */
    public function getClusterUid()
    {
        return $this->cluster_uid;
    }

    /**
     * Output only. Cluster uid of this backup.
     *
     * Generated from protobuf field <code>string cluster_uid = 4 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.field_info) = {</code>
     * @param string $var
     * @return $this
     */
    public function setClusterUid($var)
    {
        GPBUtil::checkString($var, True);
        $this->cluster_uid = $var;

        return $this;
    }

    /**
     * Output only. Total size of the backup in bytes.
     *
     * Generated from protobuf field <code>int64 total_size_bytes = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getTotalSizeBytes()
    {
        return $this->total_size_bytes;
    }

    /**
     * Output only. Total size of the backup in bytes.
     *
     * Generated from protobuf field <code>int64 total_size_bytes = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setTotalSizeBytes($var)
    {
        GPBUtil::checkInt64($var);
        $this->total_size_bytes = $var;

        return $this;
    }

    /**
     * Output only. The time when the backup will expire.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expire_time = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getExpireTime()
    {
        return $this->expire_time;
    }

    public function hasExpireTime()
    {
        return isset($this->expire_time);
    }

    public function clearExpireTime()
    {
        unset($this->expire_time);
    }

    /**
     * Output only. The time when the backup will expire.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expire_time = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setExpireTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->expire_time = $var;

        return $this;
    }

    /**
     * Output only. redis-7.2, valkey-7.5
     *
     * Generated from protobuf field <code>string engine_version = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getEngineVersion()
    {
        return $this->engine_version;
    }

    /**
     * Output only. redis-7.2, valkey-7.5
     *
     * Generated from protobuf field <code>string engine_version = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setEngineVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->engine_version = $var;

        return $this;
    }

    /**
     * Output only. List of backup files of the backup.
     *
     * Generated from protobuf field <code>repeated .google.cloud.redis.cluster.v1.BackupFile backup_files = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBackupFiles()
    {
        return $this->backup_files;
    }

    /**
     * Output only. List of backup files of the backup.
     *
     * Generated from protobuf field <code>repeated .google.cloud.redis.cluster.v1.BackupFile backup_files = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param array<\Google\Cloud\Redis\Cluster\V1\BackupFile>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBackupFiles($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Redis\Cluster\V1\BackupFile::class);
        $this->backup_files = $arr;

        return $this;
    }

    /**
     * Output only. Node type of the cluster.
     *
     * Generated from protobuf field <code>.google.cloud.redis.cluster.v1.NodeType node_type = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getNodeType()
    {
        return $this->node_type;
    }

    /**
     * Output only. Node type of the cluster.
     *
     * Generated from protobuf field <code>.google.cloud.redis.cluster.v1.NodeType node_type = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setNodeType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Redis\Cluster\V1\NodeType::class);
        $this->node_type = $var;

        return $this;
    }

    /**
     * Output only. Number of replicas for the cluster.
     *
     * Generated from protobuf field <code>int32 replica_count = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getReplicaCount()
    {
        return $this->replica_count;
    }

    /**
     * Output only. Number of replicas for the cluster.
     *
     * Generated from protobuf field <code>int32 replica_count = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setReplicaCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->replica_count = $var;

        return $this;
    }

    /**
     * Output only. Number of shards for the cluster.
     *
     * Generated from protobuf field <code>int32 shard_count = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getShardCount()
    {
        return $this->shard_count;
    }

    /**
     * Output only. Number of shards for the cluster.
     *
     * Generated from protobuf field <code>int32 shard_count = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setShardCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->shard_count = $var;

        return $this;
    }

    /**
     * Output only. Type of the backup.
     *
     * Generated from protobuf field <code>.google.cloud.redis.cluster.v1.Backup.BackupType backup_type = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getBackupType()
    {
        return $this->backup_type;
    }

    /**
     * Output only. Type of the backup.
     *
     * Generated from protobuf field <code>.google.cloud.redis.cluster.v1.Backup.BackupType backup_type = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setBackupType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Redis\Cluster\V1\Backup\BackupType::class);
        $this->backup_type = $var;

        return $this;
    }

    /**
     * Output only. State of the backup.
     *
     * Generated from protobuf field <code>.google.cloud.redis.cluster.v1.Backup.State state = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. State of the backup.
     *
     * Generated from protobuf field <code>.google.cloud.redis.cluster.v1.Backup.State state = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Redis\Cluster\V1\Backup\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Output only. Encryption information of the backup.
     *
     * Generated from protobuf field <code>.google.cloud.redis.cluster.v1.EncryptionInfo encryption_info = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\Redis\Cluster\V1\EncryptionInfo|null
     */
    public function getEncryptionInfo()
    {
        return $this->encryption_info;
    }

    public function hasEncryptionInfo()
    {
        return isset($this->encryption_info);
    }

    public function clearEncryptionInfo()
    {
        unset($this->encryption_info);
    }

    /**
     * Output only. Encryption information of the backup.
     *
     * Generated from protobuf field <code>.google.cloud.redis.cluster.v1.EncryptionInfo encryption_info = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\Redis\Cluster\V1\EncryptionInfo $var
     * @return $this
     */
    public function setEncryptionInfo($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Redis\Cluster\V1\EncryptionInfo::class);
        $this->encryption_info = $var;

        return $this;
    }

    /**
     * Output only. System assigned unique identifier of the backup.
     *
     * Generated from protobuf field <code>string uid = 15 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.field_info) = {</code>
     * @return string
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Output only. System assigned unique identifier of the backup.
     *
     * Generated from protobuf field <code>string uid = 15 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.field_info) = {</code>
     * @param string $var
     * @return $this
     */
    public function setUid($var)
    {
        GPBUtil::checkString($var, True);
        $this->uid = $var;

        return $this;
    }

}
