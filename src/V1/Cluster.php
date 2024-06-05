<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/redis/cluster/v1/cloud_redis_cluster.proto

namespace Google\Cloud\Redis\Cluster\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A cluster instance.
 *
 * Generated from protobuf message <code>google.cloud.redis.cluster.v1.Cluster</code>
 */
class Cluster extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Unique name of the resource in this scope including project and
     * location using the form:
     *     `projects/{project_id}/locations/{location_id}/clusters/{cluster_id}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $name = '';
    /**
     * Output only. The timestamp associated with the cluster creation request.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $create_time = null;
    /**
     * Output only. The current state of this cluster.
     * Can be CREATING, READY, UPDATING, DELETING and SUSPENDED
     *
     * Generated from protobuf field <code>.google.cloud.redis.cluster.v1.Cluster.State state = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $state = 0;
    /**
     * Output only. System assigned, unique identifier for the cluster.
     *
     * Generated from protobuf field <code>string uid = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $uid = '';
    /**
     * Optional. The number of replica nodes per shard.
     *
     * Generated from protobuf field <code>optional int32 replica_count = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $replica_count = null;
    /**
     * Optional. The authorization mode of the Redis cluster.
     * If not provided, auth feature is disabled for the cluster.
     *
     * Generated from protobuf field <code>.google.cloud.redis.cluster.v1.AuthorizationMode authorization_mode = 11 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $authorization_mode = 0;
    /**
     * Optional. The in-transit encryption for the Redis cluster.
     * If not provided, encryption  is disabled for the cluster.
     *
     * Generated from protobuf field <code>.google.cloud.redis.cluster.v1.TransitEncryptionMode transit_encryption_mode = 12 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $transit_encryption_mode = 0;
    /**
     * Output only. Redis memory size in GB for the entire cluster rounded up to
     * the next integer.
     *
     * Generated from protobuf field <code>optional int32 size_gb = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $size_gb = null;
    /**
     * Required. Number of shards for the Redis cluster.
     *
     * Generated from protobuf field <code>optional int32 shard_count = 14 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $shard_count = null;
    /**
     * Required. Each PscConfig configures the consumer network where IPs will
     * be designated to the cluster for client access through Private Service
     * Connect Automation. Currently, only one PscConfig is supported.
     *
     * Generated from protobuf field <code>repeated .google.cloud.redis.cluster.v1.PscConfig psc_configs = 15 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $psc_configs;
    /**
     * Output only. Endpoints created on each given network, for Redis clients to
     * connect to the cluster. Currently only one discovery endpoint is supported.
     *
     * Generated from protobuf field <code>repeated .google.cloud.redis.cluster.v1.DiscoveryEndpoint discovery_endpoints = 16 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $discovery_endpoints;
    /**
     * Output only. PSC connections for discovery of the cluster topology and
     * accessing the cluster.
     *
     * Generated from protobuf field <code>repeated .google.cloud.redis.cluster.v1.PscConnection psc_connections = 17 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $psc_connections;
    /**
     * Output only. Additional information about the current state of the cluster.
     *
     * Generated from protobuf field <code>.google.cloud.redis.cluster.v1.Cluster.StateInfo state_info = 18 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $state_info = null;
    /**
     * Optional. The type of a redis node in the cluster. NodeType determines the
     * underlying machine-type of a redis node.
     *
     * Generated from protobuf field <code>.google.cloud.redis.cluster.v1.NodeType node_type = 19 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $node_type = 0;
    /**
     * Optional. Persistence config (RDB, AOF) for the cluster.
     *
     * Generated from protobuf field <code>.google.cloud.redis.cluster.v1.ClusterPersistenceConfig persistence_config = 20 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $persistence_config = null;
    /**
     * Optional. Key/Value pairs of customer overrides for mutable Redis Configs
     *
     * Generated from protobuf field <code>map<string, string> redis_configs = 21 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $redis_configs;
    /**
     * Output only. Precise value of redis memory size in GB for the entire
     * cluster.
     *
     * Generated from protobuf field <code>optional double precise_size_gb = 22 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $precise_size_gb = null;
    /**
     * Optional. This config will be used to determine how the customer wants us
     * to distribute cluster resources within the region.
     *
     * Generated from protobuf field <code>.google.cloud.redis.cluster.v1.ZoneDistributionConfig zone_distribution_config = 23 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $zone_distribution_config = null;
    /**
     * Optional. The delete operation will fail when the value is set to true.
     *
     * Generated from protobuf field <code>optional bool deletion_protection_enabled = 25 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $deletion_protection_enabled = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. Unique name of the resource in this scope including project and
     *           location using the form:
     *               `projects/{project_id}/locations/{location_id}/clusters/{cluster_id}`
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. The timestamp associated with the cluster creation request.
     *     @type int $state
     *           Output only. The current state of this cluster.
     *           Can be CREATING, READY, UPDATING, DELETING and SUSPENDED
     *     @type string $uid
     *           Output only. System assigned, unique identifier for the cluster.
     *     @type int $replica_count
     *           Optional. The number of replica nodes per shard.
     *     @type int $authorization_mode
     *           Optional. The authorization mode of the Redis cluster.
     *           If not provided, auth feature is disabled for the cluster.
     *     @type int $transit_encryption_mode
     *           Optional. The in-transit encryption for the Redis cluster.
     *           If not provided, encryption  is disabled for the cluster.
     *     @type int $size_gb
     *           Output only. Redis memory size in GB for the entire cluster rounded up to
     *           the next integer.
     *     @type int $shard_count
     *           Required. Number of shards for the Redis cluster.
     *     @type array<\Google\Cloud\Redis\Cluster\V1\PscConfig>|\Google\Protobuf\Internal\RepeatedField $psc_configs
     *           Required. Each PscConfig configures the consumer network where IPs will
     *           be designated to the cluster for client access through Private Service
     *           Connect Automation. Currently, only one PscConfig is supported.
     *     @type array<\Google\Cloud\Redis\Cluster\V1\DiscoveryEndpoint>|\Google\Protobuf\Internal\RepeatedField $discovery_endpoints
     *           Output only. Endpoints created on each given network, for Redis clients to
     *           connect to the cluster. Currently only one discovery endpoint is supported.
     *     @type array<\Google\Cloud\Redis\Cluster\V1\PscConnection>|\Google\Protobuf\Internal\RepeatedField $psc_connections
     *           Output only. PSC connections for discovery of the cluster topology and
     *           accessing the cluster.
     *     @type \Google\Cloud\Redis\Cluster\V1\Cluster\StateInfo $state_info
     *           Output only. Additional information about the current state of the cluster.
     *     @type int $node_type
     *           Optional. The type of a redis node in the cluster. NodeType determines the
     *           underlying machine-type of a redis node.
     *     @type \Google\Cloud\Redis\Cluster\V1\ClusterPersistenceConfig $persistence_config
     *           Optional. Persistence config (RDB, AOF) for the cluster.
     *     @type array|\Google\Protobuf\Internal\MapField $redis_configs
     *           Optional. Key/Value pairs of customer overrides for mutable Redis Configs
     *     @type float $precise_size_gb
     *           Output only. Precise value of redis memory size in GB for the entire
     *           cluster.
     *     @type \Google\Cloud\Redis\Cluster\V1\ZoneDistributionConfig $zone_distribution_config
     *           Optional. This config will be used to determine how the customer wants us
     *           to distribute cluster resources within the region.
     *     @type bool $deletion_protection_enabled
     *           Optional. The delete operation will fail when the value is set to true.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Redis\Cluster\V1\CloudRedisCluster::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Unique name of the resource in this scope including project and
     * location using the form:
     *     `projects/{project_id}/locations/{location_id}/clusters/{cluster_id}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. Unique name of the resource in this scope including project and
     * location using the form:
     *     `projects/{project_id}/locations/{location_id}/clusters/{cluster_id}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * Output only. The timestamp associated with the cluster creation request.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. The timestamp associated with the cluster creation request.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. The current state of this cluster.
     * Can be CREATING, READY, UPDATING, DELETING and SUSPENDED
     *
     * Generated from protobuf field <code>.google.cloud.redis.cluster.v1.Cluster.State state = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. The current state of this cluster.
     * Can be CREATING, READY, UPDATING, DELETING and SUSPENDED
     *
     * Generated from protobuf field <code>.google.cloud.redis.cluster.v1.Cluster.State state = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Redis\Cluster\V1\Cluster\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Output only. System assigned, unique identifier for the cluster.
     *
     * Generated from protobuf field <code>string uid = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Output only. System assigned, unique identifier for the cluster.
     *
     * Generated from protobuf field <code>string uid = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setUid($var)
    {
        GPBUtil::checkString($var, True);
        $this->uid = $var;

        return $this;
    }

    /**
     * Optional. The number of replica nodes per shard.
     *
     * Generated from protobuf field <code>optional int32 replica_count = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getReplicaCount()
    {
        return isset($this->replica_count) ? $this->replica_count : 0;
    }

    public function hasReplicaCount()
    {
        return isset($this->replica_count);
    }

    public function clearReplicaCount()
    {
        unset($this->replica_count);
    }

    /**
     * Optional. The number of replica nodes per shard.
     *
     * Generated from protobuf field <code>optional int32 replica_count = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * Optional. The authorization mode of the Redis cluster.
     * If not provided, auth feature is disabled for the cluster.
     *
     * Generated from protobuf field <code>.google.cloud.redis.cluster.v1.AuthorizationMode authorization_mode = 11 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getAuthorizationMode()
    {
        return $this->authorization_mode;
    }

    /**
     * Optional. The authorization mode of the Redis cluster.
     * If not provided, auth feature is disabled for the cluster.
     *
     * Generated from protobuf field <code>.google.cloud.redis.cluster.v1.AuthorizationMode authorization_mode = 11 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setAuthorizationMode($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Redis\Cluster\V1\AuthorizationMode::class);
        $this->authorization_mode = $var;

        return $this;
    }

    /**
     * Optional. The in-transit encryption for the Redis cluster.
     * If not provided, encryption  is disabled for the cluster.
     *
     * Generated from protobuf field <code>.google.cloud.redis.cluster.v1.TransitEncryptionMode transit_encryption_mode = 12 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getTransitEncryptionMode()
    {
        return $this->transit_encryption_mode;
    }

    /**
     * Optional. The in-transit encryption for the Redis cluster.
     * If not provided, encryption  is disabled for the cluster.
     *
     * Generated from protobuf field <code>.google.cloud.redis.cluster.v1.TransitEncryptionMode transit_encryption_mode = 12 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setTransitEncryptionMode($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Redis\Cluster\V1\TransitEncryptionMode::class);
        $this->transit_encryption_mode = $var;

        return $this;
    }

    /**
     * Output only. Redis memory size in GB for the entire cluster rounded up to
     * the next integer.
     *
     * Generated from protobuf field <code>optional int32 size_gb = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getSizeGb()
    {
        return isset($this->size_gb) ? $this->size_gb : 0;
    }

    public function hasSizeGb()
    {
        return isset($this->size_gb);
    }

    public function clearSizeGb()
    {
        unset($this->size_gb);
    }

    /**
     * Output only. Redis memory size in GB for the entire cluster rounded up to
     * the next integer.
     *
     * Generated from protobuf field <code>optional int32 size_gb = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setSizeGb($var)
    {
        GPBUtil::checkInt32($var);
        $this->size_gb = $var;

        return $this;
    }

    /**
     * Required. Number of shards for the Redis cluster.
     *
     * Generated from protobuf field <code>optional int32 shard_count = 14 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getShardCount()
    {
        return isset($this->shard_count) ? $this->shard_count : 0;
    }

    public function hasShardCount()
    {
        return isset($this->shard_count);
    }

    public function clearShardCount()
    {
        unset($this->shard_count);
    }

    /**
     * Required. Number of shards for the Redis cluster.
     *
     * Generated from protobuf field <code>optional int32 shard_count = 14 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * Required. Each PscConfig configures the consumer network where IPs will
     * be designated to the cluster for client access through Private Service
     * Connect Automation. Currently, only one PscConfig is supported.
     *
     * Generated from protobuf field <code>repeated .google.cloud.redis.cluster.v1.PscConfig psc_configs = 15 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPscConfigs()
    {
        return $this->psc_configs;
    }

    /**
     * Required. Each PscConfig configures the consumer network where IPs will
     * be designated to the cluster for client access through Private Service
     * Connect Automation. Currently, only one PscConfig is supported.
     *
     * Generated from protobuf field <code>repeated .google.cloud.redis.cluster.v1.PscConfig psc_configs = 15 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param array<\Google\Cloud\Redis\Cluster\V1\PscConfig>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPscConfigs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Redis\Cluster\V1\PscConfig::class);
        $this->psc_configs = $arr;

        return $this;
    }

    /**
     * Output only. Endpoints created on each given network, for Redis clients to
     * connect to the cluster. Currently only one discovery endpoint is supported.
     *
     * Generated from protobuf field <code>repeated .google.cloud.redis.cluster.v1.DiscoveryEndpoint discovery_endpoints = 16 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDiscoveryEndpoints()
    {
        return $this->discovery_endpoints;
    }

    /**
     * Output only. Endpoints created on each given network, for Redis clients to
     * connect to the cluster. Currently only one discovery endpoint is supported.
     *
     * Generated from protobuf field <code>repeated .google.cloud.redis.cluster.v1.DiscoveryEndpoint discovery_endpoints = 16 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param array<\Google\Cloud\Redis\Cluster\V1\DiscoveryEndpoint>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDiscoveryEndpoints($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Redis\Cluster\V1\DiscoveryEndpoint::class);
        $this->discovery_endpoints = $arr;

        return $this;
    }

    /**
     * Output only. PSC connections for discovery of the cluster topology and
     * accessing the cluster.
     *
     * Generated from protobuf field <code>repeated .google.cloud.redis.cluster.v1.PscConnection psc_connections = 17 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPscConnections()
    {
        return $this->psc_connections;
    }

    /**
     * Output only. PSC connections for discovery of the cluster topology and
     * accessing the cluster.
     *
     * Generated from protobuf field <code>repeated .google.cloud.redis.cluster.v1.PscConnection psc_connections = 17 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param array<\Google\Cloud\Redis\Cluster\V1\PscConnection>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPscConnections($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Redis\Cluster\V1\PscConnection::class);
        $this->psc_connections = $arr;

        return $this;
    }

    /**
     * Output only. Additional information about the current state of the cluster.
     *
     * Generated from protobuf field <code>.google.cloud.redis.cluster.v1.Cluster.StateInfo state_info = 18 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\Redis\Cluster\V1\Cluster\StateInfo|null
     */
    public function getStateInfo()
    {
        return $this->state_info;
    }

    public function hasStateInfo()
    {
        return isset($this->state_info);
    }

    public function clearStateInfo()
    {
        unset($this->state_info);
    }

    /**
     * Output only. Additional information about the current state of the cluster.
     *
     * Generated from protobuf field <code>.google.cloud.redis.cluster.v1.Cluster.StateInfo state_info = 18 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\Redis\Cluster\V1\Cluster\StateInfo $var
     * @return $this
     */
    public function setStateInfo($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Redis\Cluster\V1\Cluster\StateInfo::class);
        $this->state_info = $var;

        return $this;
    }

    /**
     * Optional. The type of a redis node in the cluster. NodeType determines the
     * underlying machine-type of a redis node.
     *
     * Generated from protobuf field <code>.google.cloud.redis.cluster.v1.NodeType node_type = 19 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getNodeType()
    {
        return $this->node_type;
    }

    /**
     * Optional. The type of a redis node in the cluster. NodeType determines the
     * underlying machine-type of a redis node.
     *
     * Generated from protobuf field <code>.google.cloud.redis.cluster.v1.NodeType node_type = 19 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * Optional. Persistence config (RDB, AOF) for the cluster.
     *
     * Generated from protobuf field <code>.google.cloud.redis.cluster.v1.ClusterPersistenceConfig persistence_config = 20 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Redis\Cluster\V1\ClusterPersistenceConfig|null
     */
    public function getPersistenceConfig()
    {
        return $this->persistence_config;
    }

    public function hasPersistenceConfig()
    {
        return isset($this->persistence_config);
    }

    public function clearPersistenceConfig()
    {
        unset($this->persistence_config);
    }

    /**
     * Optional. Persistence config (RDB, AOF) for the cluster.
     *
     * Generated from protobuf field <code>.google.cloud.redis.cluster.v1.ClusterPersistenceConfig persistence_config = 20 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Redis\Cluster\V1\ClusterPersistenceConfig $var
     * @return $this
     */
    public function setPersistenceConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Redis\Cluster\V1\ClusterPersistenceConfig::class);
        $this->persistence_config = $var;

        return $this;
    }

    /**
     * Optional. Key/Value pairs of customer overrides for mutable Redis Configs
     *
     * Generated from protobuf field <code>map<string, string> redis_configs = 21 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getRedisConfigs()
    {
        return $this->redis_configs;
    }

    /**
     * Optional. Key/Value pairs of customer overrides for mutable Redis Configs
     *
     * Generated from protobuf field <code>map<string, string> redis_configs = 21 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setRedisConfigs($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->redis_configs = $arr;

        return $this;
    }

    /**
     * Output only. Precise value of redis memory size in GB for the entire
     * cluster.
     *
     * Generated from protobuf field <code>optional double precise_size_gb = 22 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return float
     */
    public function getPreciseSizeGb()
    {
        return isset($this->precise_size_gb) ? $this->precise_size_gb : 0.0;
    }

    public function hasPreciseSizeGb()
    {
        return isset($this->precise_size_gb);
    }

    public function clearPreciseSizeGb()
    {
        unset($this->precise_size_gb);
    }

    /**
     * Output only. Precise value of redis memory size in GB for the entire
     * cluster.
     *
     * Generated from protobuf field <code>optional double precise_size_gb = 22 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param float $var
     * @return $this
     */
    public function setPreciseSizeGb($var)
    {
        GPBUtil::checkDouble($var);
        $this->precise_size_gb = $var;

        return $this;
    }

    /**
     * Optional. This config will be used to determine how the customer wants us
     * to distribute cluster resources within the region.
     *
     * Generated from protobuf field <code>.google.cloud.redis.cluster.v1.ZoneDistributionConfig zone_distribution_config = 23 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Redis\Cluster\V1\ZoneDistributionConfig|null
     */
    public function getZoneDistributionConfig()
    {
        return $this->zone_distribution_config;
    }

    public function hasZoneDistributionConfig()
    {
        return isset($this->zone_distribution_config);
    }

    public function clearZoneDistributionConfig()
    {
        unset($this->zone_distribution_config);
    }

    /**
     * Optional. This config will be used to determine how the customer wants us
     * to distribute cluster resources within the region.
     *
     * Generated from protobuf field <code>.google.cloud.redis.cluster.v1.ZoneDistributionConfig zone_distribution_config = 23 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Redis\Cluster\V1\ZoneDistributionConfig $var
     * @return $this
     */
    public function setZoneDistributionConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Redis\Cluster\V1\ZoneDistributionConfig::class);
        $this->zone_distribution_config = $var;

        return $this;
    }

    /**
     * Optional. The delete operation will fail when the value is set to true.
     *
     * Generated from protobuf field <code>optional bool deletion_protection_enabled = 25 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getDeletionProtectionEnabled()
    {
        return isset($this->deletion_protection_enabled) ? $this->deletion_protection_enabled : false;
    }

    public function hasDeletionProtectionEnabled()
    {
        return isset($this->deletion_protection_enabled);
    }

    public function clearDeletionProtectionEnabled()
    {
        unset($this->deletion_protection_enabled);
    }

    /**
     * Optional. The delete operation will fail when the value is set to true.
     *
     * Generated from protobuf field <code>optional bool deletion_protection_enabled = 25 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setDeletionProtectionEnabled($var)
    {
        GPBUtil::checkBool($var);
        $this->deletion_protection_enabled = $var;

        return $this;
    }

}

