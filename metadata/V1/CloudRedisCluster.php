<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/redis/cluster/v1/cloud_redis_cluster.proto

namespace GPBMetadata\Google\Cloud\Redis\Cluster\V1;

class CloudRedisCluster
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\FieldInfo::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\Any::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Type\Dayofweek::initOnce();
        \GPBMetadata\Google\Type\Timeofday::initOnce();
        $pool->internalAddGeneratedFile(
            '
��
7google/cloud/redis/cluster/v1/cloud_redis_cluster.protogoogle.cloud.redis.cluster.v1google/api/client.protogoogle/api/field_behavior.protogoogle/api/field_info.protogoogle/api/resource.proto#google/longrunning/operations.protogoogle/protobuf/any.protogoogle/protobuf/duration.protogoogle/protobuf/empty.proto google/protobuf/field_mask.protogoogle/protobuf/timestamp.protogoogle/type/dayofweek.protogoogle/type/timeofday.proto"�
CreateClusterRequest9
parent (	B)�A�A#
!locations.googleapis.com/Location

cluster_id (	B�A<
cluster (2&.google.cloud.redis.cluster.v1.ClusterB�A

request_id (	"w
ListClustersRequest9
parent (	B)�A�A#
!locations.googleapis.com/Location
	page_size (

page_token (	"~
ListClustersResponse8
clusters (2&.google.cloud.redis.cluster.v1.Cluster
next_page_token (	
unreachable (	"�
UpdateClusterRequest4
update_mask (2.google.protobuf.FieldMaskB�A<
cluster (2&.google.cloud.redis.cluster.v1.ClusterB�A

request_id (	"G
GetClusterRequest2
name (	B$�A�A
redis.googleapis.com/Cluster"^
DeleteClusterRequest2
name (	B$�A�A
redis.googleapis.com/Cluster

request_id (	"h
%GetClusterCertificateAuthorityRequest?
name (	B1�A�A+
)redis.googleapis.com/CertificateAuthority"�
ListBackupCollectionsRequest=
parent (	B-�A�A\'%redis.googleapis.com/BackupCollection
	page_size (B�A

page_token (	B�A"�
ListBackupCollectionsResponseK
backup_collections (2/.google.cloud.redis.cluster.v1.BackupCollection
next_page_token (	
unreachable (	"Y
GetBackupCollectionRequest;
name (	B-�A�A\'
%redis.googleapis.com/BackupCollection"z
ListBackupsRequest3
parent (	B#�A�Aredis.googleapis.com/Backup
	page_size (B�A

page_token (	B�A"{
ListBackupsResponse6
backups (2%.google.cloud.redis.cluster.v1.Backup
next_page_token (	
unreachable (	"E
GetBackupRequest1
name (	B#�A�A
redis.googleapis.com/Backup"i
DeleteBackupRequest1
name (	B#�A�A
redis.googleapis.com/Backup

request_id (	B�A���"m
ExportBackupRequest

gcs_bucket (	H 1
name (	B#�A�A
redis.googleapis.com/BackupB
destination"�
BackupClusterRequest2
name (	B$�A�A
redis.googleapis.com/Cluster+
ttl (2.google.protobuf.DurationB�A
	backup_id (	B�AH �B

_backup_id"�
ClusterQ

gcs_source" (26.google.cloud.redis.cluster.v1.Cluster.GcsBackupSourceB�AH `
managed_backup_source# (2:.google.cloud.redis.cluster.v1.Cluster.ManagedBackupSourceB�AH 
name (	B�A�A4
create_time (2.google.protobuf.TimestampB�A@
state (2,.google.cloud.redis.cluster.v1.Cluster.StateB�A
uid (	B�A
replica_count (B�AH�Q
authorization_mode (20.google.cloud.redis.cluster.v1.AuthorizationModeB�AZ
transit_encryption_mode (24.google.cloud.redis.cluster.v1.TransitEncryptionModeB�A
size_gb (B�AH�
shard_count (B�AH�B
psc_configs (2(.google.cloud.redis.cluster.v1.PscConfigB�AR
discovery_endpoints (20.google.cloud.redis.cluster.v1.DiscoveryEndpointB�AJ
psc_connections (2,.google.cloud.redis.cluster.v1.PscConnectionB�AI

state_info (20.google.cloud.redis.cluster.v1.Cluster.StateInfoB�A?
	node_type (2\'.google.cloud.redis.cluster.v1.NodeTypeB�AX
persistence_config (27.google.cloud.redis.cluster.v1.ClusterPersistenceConfigB�AT
redis_configs (28.google.cloud.redis.cluster.v1.Cluster.RedisConfigsEntryB�A!
precise_size_gb (B�AH�\\
zone_distribution_config (25.google.cloud.redis.cluster.v1.ZoneDistributionConfigB�Ak
 cross_cluster_replication_config (2<.google.cloud.redis.cluster.v1.CrossClusterReplicationConfigB�A-
deletion_protection_enabled (B�AH�]
maintenance_policy (27.google.cloud.redis.cluster.v1.ClusterMaintenancePolicyB�AH�a
maintenance_schedule (29.google.cloud.redis.cluster.v1.ClusterMaintenanceScheduleB�AH�Y
psc_service_attachments (23.google.cloud.redis.cluster.v1.PscServiceAttachmentB�AN
cluster_endpoints$ (2..google.cloud.redis.cluster.v1.ClusterEndpointB�AP
backup_collection\' (	B0�A�A�A\'
%redis.googleapis.com/BackupCollectionH�?
kms_key( (	B)�A�A#
!cloudkms.googleapis.com/CryptoKeyH	�Z
automated_backup_config* (24.google.cloud.redis.cluster.v1.AutomatedBackupConfigB�AK
encryption_info+ (2-.google.cloud.redis.cluster.v1.EncryptionInfoB�A�
	StateInfoR
update_info (2;.google.cloud.redis.cluster.v1.Cluster.StateInfo.UpdateInfoH �

UpdateInfo
target_shard_count (H �!
target_replica_count (H�B
_target_shard_countB
_target_replica_countB
info$
GcsBackupSource
uris (	B�A*
ManagedBackupSource
backup (	B�A3
RedisConfigsEntry
key (	
value (	:8"T
State
STATE_UNSPECIFIED 
CREATING

ACTIVE
UPDATING
DELETING:p�Am
redis.googleapis.com/Cluster:projects/{project}/locations/{location}/clusters/{cluster}*clusters2clusterB
import_sourcesB
_replica_countB

_size_gbB
_shard_countB
_precise_size_gbB
_deletion_protection_enabledB
_maintenance_policyB
_maintenance_scheduleB
_backup_collectionB

_kms_key"�
AutomatedBackupConfigt
fixed_frequency_schedule (2K.google.cloud.redis.cluster.v1.AutomatedBackupConfig.FixedFrequencyScheduleB�AH l
automated_backup_mode (2H.google.cloud.redis.cluster.v1.AutomatedBackupConfig.AutomatedBackupModeB�A6
	retention (2.google.protobuf.DurationB�AH�]
FixedFrequencySchedule4

start_time (2.google.type.TimeOfDayB�AH �B
_start_time"W
AutomatedBackupMode%
!AUTOMATED_BACKUP_MODE_UNSPECIFIED 
DISABLED
ENABLEDB

scheduleB

_retention"�
BackupCollection
name (	B�A 
cluster_uid (	B�A���5
cluster (	B$�A�A
redis.googleapis.com/Cluster:
kms_key (	B)�A�A#
!cloudkms.googleapis.com/CryptoKey
uid (	B�A���:��A�
%redis.googleapis.com/BackupCollectionMprojects/{project}/locations/{location}/backupCollections/{backup_collection}*backupCollections2backupCollection"�
Backup
name (	B�A4
create_time (2.google.protobuf.TimestampB�A5
cluster (	B$�A�A
redis.googleapis.com/Cluster 
cluster_uid (	B�A���
total_size_bytes (B�A4
expire_time (2.google.protobuf.TimestampB�A
engine_version (	B�AD
backup_files (2).google.cloud.redis.cluster.v1.BackupFileB�A?
	node_type	 (2\'.google.cloud.redis.cluster.v1.NodeTypeB�A
replica_count
 (B�A
shard_count (B�AJ
backup_type (20.google.cloud.redis.cluster.v1.Backup.BackupTypeB�A?
state (2+.google.cloud.redis.cluster.v1.Backup.StateB�AK
encryption_info (2-.google.cloud.redis.cluster.v1.EncryptionInfoB�A
uid (	B�A���"G

BackupType
BACKUP_TYPE_UNSPECIFIED 
	ON_DEMAND
	AUTOMATED"U
State
STATE_UNSPECIFIED 
CREATING

ACTIVE
DELETING
	SUSPENDED:��A�
redis.googleapis.com/Backup^projects/{project}/locations/{location}/backupCollections/{backup_collection}/backups/{backup}*backups2backup"s

BackupFile
	file_name (	B�A

size_bytes (B�A4
create_time (2.google.protobuf.TimestampB�A"�
PscServiceAttachment
service_attachment (	B�AK
connection_type (2-.google.cloud.redis.cluster.v1.ConnectionTypeB�A"�
CrossClusterReplicationConfig^
cluster_role (2H.google.cloud.redis.cluster.v1.CrossClusterReplicationConfig.ClusterRolec
primary_cluster (2J.google.cloud.redis.cluster.v1.CrossClusterReplicationConfig.RemoteClusterf
secondary_clusters (2J.google.cloud.redis.cluster.v1.CrossClusterReplicationConfig.RemoteCluster4
update_time (2.google.protobuf.TimestampB�A`

membership (2G.google.cloud.redis.cluster.v1.CrossClusterReplicationConfig.MembershipB�AU
RemoteCluster2
cluster (	B!�A
redis.googleapis.com/Cluster
uid (	B�A�

Membershiph
primary_cluster (2J.google.cloud.redis.cluster.v1.CrossClusterReplicationConfig.RemoteClusterB�Ak
secondary_clusters (2J.google.cloud.redis.cluster.v1.CrossClusterReplicationConfig.RemoteClusterB�A"Q
ClusterRole
CLUSTER_ROLE_UNSPECIFIED 
NONE
PRIMARY
	SECONDARY"�
ClusterMaintenancePolicy4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�A`
weekly_maintenance_window (2=.google.cloud.redis.cluster.v1.ClusterWeeklyMaintenanceWindow"q
ClusterWeeklyMaintenanceWindow#
day (2.google.type.DayOfWeek*

start_time (2.google.type.TimeOfDay"�
ClusterMaintenanceSchedule3

start_time (2.google.protobuf.TimestampB�A1
end_time (2.google.protobuf.TimestampB�A"!
	PscConfig
network (	B�A"
DiscoveryEndpoint
address (	B�A
port (B�AA

psc_config (2(.google.cloud.redis.cluster.v1.PscConfigB�A"�
PscConnection
psc_connection_id (	B�A
address (	B�A���F
forwarding_rule (	B-�A�A\'
%compute.googleapis.com/ForwardingRule

project_id (	B�A7
network (	B&�A�A 
compute.googleapis.com/NetworkL
service_attachment (	B0�A�A*
(compute.googleapis.com/ServiceAttachmentV
psc_connection_status (22.google.cloud.redis.cluster.v1.PscConnectionStatusB�AK
connection_type
 (2-.google.cloud.redis.cluster.v1.ConnectionTypeB�A"W
ClusterEndpointD
connections (2/.google.cloud.redis.cluster.v1.ConnectionDetail"�
ConnectionDetailO
psc_auto_connection (20.google.cloud.redis.cluster.v1.PscAutoConnectionH F
psc_connection (2,.google.cloud.redis.cluster.v1.PscConnectionH B

connection"�
PscAutoConnection
psc_connection_id (	B�A
address (	B�A���F
forwarding_rule (	B-�A�A\'
%compute.googleapis.com/ForwardingRule

project_id (	B�A7
network (	B&�A�A 
compute.googleapis.com/NetworkL
service_attachment (	B0�A�A*
(compute.googleapis.com/ServiceAttachmentV
psc_connection_status (22.google.cloud.redis.cluster.v1.PscConnectionStatusB�AK
connection_type	 (2-.google.cloud.redis.cluster.v1.ConnectionTypeB�A"�
OperationMetadata4
create_time (2.google.protobuf.TimestampB�A1
end_time (2.google.protobuf.TimestampB�A
target (	B�A
verb (	B�A
status_message (	B�A#
requested_cancellation (B�A
api_version (	B�A"�
CertificateAuthorityl
managed_server_ca (2O.google.cloud.redis.cluster.v1.CertificateAuthority.ManagedCertificateAuthorityH 
name (	B�A�
ManagedCertificateAuthorityk
ca_certs (2Y.google.cloud.redis.cluster.v1.CertificateAuthority.ManagedCertificateAuthority.CertChain!
	CertChain
certificates (	:��A�
)redis.googleapis.com/CertificateAuthorityOprojects/{project}/locations/{location}/clusters/{cluster}/certificateAuthority*certificateAuthorities2certificateAuthorityB
	server_ca"�
ClusterPersistenceConfigZ
mode (2G.google.cloud.redis.cluster.v1.ClusterPersistenceConfig.PersistenceModeB�AZ

rdb_config (2A.google.cloud.redis.cluster.v1.ClusterPersistenceConfig.RDBConfigB�AZ

aof_config (2A.google.cloud.redis.cluster.v1.ClusterPersistenceConfig.AOFConfigB�A�
	RDBConfigr
rdb_snapshot_period (2P.google.cloud.redis.cluster.v1.ClusterPersistenceConfig.RDBConfig.SnapshotPeriodB�A@
rdb_snapshot_start_time (2.google.protobuf.TimestampB�A"w
SnapshotPeriod
SNAPSHOT_PERIOD_UNSPECIFIED 
ONE_HOUR
	SIX_HOURS
TWELVE_HOURS
TWENTY_FOUR_HOURS�
	AOFConfigh
append_fsync (2M.google.cloud.redis.cluster.v1.ClusterPersistenceConfig.AOFConfig.AppendFsyncB�A"M
AppendFsync
APPEND_FSYNC_UNSPECIFIED 
NO
EVERYSEC

ALWAYS"S
PersistenceMode 
PERSISTENCE_MODE_UNSPECIFIED 
DISABLED
RDB
AOF"�
ZoneDistributionConfig]
mode (2J.google.cloud.redis.cluster.v1.ZoneDistributionConfig.ZoneDistributionModeB�A
zone (	B�A"_
ZoneDistributionMode&
"ZONE_DISTRIBUTION_MODE_UNSPECIFIED 

MULTI_ZONE
SINGLE_ZONE"�
#RescheduleClusterMaintenanceRequest2
name (	B$�A�A
redis.googleapis.com/Clustero
reschedule_type (2Q.google.cloud.redis.cluster.v1.RescheduleClusterMaintenanceRequest.RescheduleTypeB�A6
schedule_time (2.google.protobuf.TimestampB�A"S
RescheduleType
RESCHEDULE_TYPE_UNSPECIFIED 
	IMMEDIATE
SPECIFIC_TIME"�
EncryptionInfoP
encryption_type (22.google.cloud.redis.cluster.v1.EncryptionInfo.TypeB�AJ
kms_key_versions (	B0�A�A*
(cloudkms.googleapis.com/CryptoKeyVersion]
kms_key_primary_state (29.google.cloud.redis.cluster.v1.EncryptionInfo.KmsKeyStateB�A9
last_update_time (2.google.protobuf.TimestampB�A"\\
Type
TYPE_UNSPECIFIED 
GOOGLE_DEFAULT_ENCRYPTION
CUSTOMER_MANAGED_ENCRYPTION"�
KmsKeyState
KMS_KEY_STATE_UNSPECIFIED 
ENABLED
PERMISSION_DENIED
DISABLED
	DESTROYED
DESTROY_SCHEDULED 
EKM_KEY_UNREACHABLE_DETECTED
BILLING_DISABLED
UNKNOWN_FAILURE*�
PscConnectionStatus%
!PSC_CONNECTION_STATUS_UNSPECIFIED  
PSC_CONNECTION_STATUS_ACTIVE#
PSC_CONNECTION_STATUS_NOT_FOUND*^
AuthorizationMode
AUTH_MODE_UNSPECIFIED 
AUTH_MODE_IAM_AUTH
AUTH_MODE_DISABLED*�
NodeType
NODE_TYPE_UNSPECIFIED 
REDIS_SHARED_CORE_NANO
REDIS_HIGHMEM_MEDIUM
REDIS_HIGHMEM_XLARGE
REDIS_STANDARD_SMALL*�
TransitEncryptionMode\'
#TRANSIT_ENCRYPTION_MODE_UNSPECIFIED $
 TRANSIT_ENCRYPTION_MODE_DISABLED1
-TRANSIT_ENCRYPTION_MODE_SERVER_AUTHENTICATION*�
ConnectionType
CONNECTION_TYPE_UNSPECIFIED 
CONNECTION_TYPE_DISCOVERY
CONNECTION_TYPE_PRIMARY
CONNECTION_TYPE_READER2�
CloudRedisCluster�
ListClusters2.google.cloud.redis.cluster.v1.ListClustersRequest3.google.cloud.redis.cluster.v1.ListClustersResponse"=�Aparent���.,/v1/{parent=projects/*/locations/*}/clusters�

GetCluster0.google.cloud.redis.cluster.v1.GetClusterRequest&.google.cloud.redis.cluster.v1.Cluster";�Aname���.,/v1/{name=projects/*/locations/*/clusters/*}�
UpdateCluster3.google.cloud.redis.cluster.v1.UpdateClusterRequest.google.longrunning.Operation"|�A
Clustergoogle.protobuf.Any�Acluster,update_mask���?24/v1/{cluster.name=projects/*/locations/*/clusters/*}:cluster�
DeleteCluster3.google.cloud.redis.cluster.v1.DeleteClusterRequest.google.longrunning.Operation"j�A,
google.protobuf.Emptygoogle.protobuf.Any�Aname���.*,/v1/{name=projects/*/locations/*/clusters/*}�
CreateCluster3.google.cloud.redis.cluster.v1.CreateClusterRequest.google.longrunning.Operation"z�A
Clustergoogle.protobuf.Any�Aparent,cluster,cluster_id���7",/v1/{parent=projects/*/locations/*}/clusters:cluster�
GetClusterCertificateAuthorityD.google.cloud.redis.cluster.v1.GetClusterCertificateAuthorityRequest3.google.cloud.redis.cluster.v1.CertificateAuthority"P�Aname���CA/v1/{name=projects/*/locations/*/clusters/*/certificateAuthority}�
RescheduleClusterMaintenanceB.google.cloud.redis.cluster.v1.RescheduleClusterMaintenanceRequest.google.longrunning.Operation"��A
Clustergoogle.protobuf.Any�A"name,reschedule_type,schedule_time���N"I/v1/{name=projects/*/locations/*/clusters/*}:rescheduleClusterMaintenance:*�
ListBackupCollections;.google.cloud.redis.cluster.v1.ListBackupCollectionsRequest<.google.cloud.redis.cluster.v1.ListBackupCollectionsResponse"F�Aparent���75/v1/{parent=projects/*/locations/*}/backupCollections�
GetBackupCollection9.google.cloud.redis.cluster.v1.GetBackupCollectionRequest/.google.cloud.redis.cluster.v1.BackupCollection"D�Aname���75/v1/{name=projects/*/locations/*/backupCollections/*}�
ListBackups1.google.cloud.redis.cluster.v1.ListBackupsRequest2.google.cloud.redis.cluster.v1.ListBackupsResponse"P�Aparent���A?/v1/{parent=projects/*/locations/*/backupCollections/*}/backups�
	GetBackup/.google.cloud.redis.cluster.v1.GetBackupRequest%.google.cloud.redis.cluster.v1.Backup"N�Aname���A?/v1/{name=projects/*/locations/*/backupCollections/*/backups/*}�
DeleteBackup2.google.cloud.redis.cluster.v1.DeleteBackupRequest.google.longrunning.Operation"}�A,
google.protobuf.Emptygoogle.protobuf.Any�Aname���A*?/v1/{name=projects/*/locations/*/backupCollections/*/backups/*}�
ExportBackup2.google.cloud.redis.cluster.v1.ExportBackupRequest.google.longrunning.Operation"q�A
Backupgoogle.protobuf.Any���K"F/v1/{name=projects/*/locations/*/backupCollections/*/backups/*}:export:*�
BackupCluster3.google.cloud.redis.cluster.v1.BackupClusterRequest.google.longrunning.Operation"f�A
Clustergoogle.protobuf.Any�Aname���8"3/v1/{name=projects/*/locations/*/clusters/*}:backup:*H�Aredis.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
!com.google.cloud.redis.cluster.v1BCloudRedisClusterProtoPZ;cloud.google.com/go/redis/cluster/apiv1/clusterpb;clusterpb�!Google::Cloud::Redis::Cluster::V1�An
%compute.googleapis.com/ForwardingRuleEprojects/{project}/regions/{region}/forwardingRules/{forwarding_rule}�AN
compute.googleapis.com/Network,projects/{project}/global/networks/{network}�Aw
(compute.googleapis.com/ServiceAttachmentKprojects/{project}/regions/{region}/serviceAttachments/{service_attachment}�Ax
!cloudkms.googleapis.com/CryptoKeySprojects/{project}/locations/{location}/keyRings/{key_ring}/cryptoKeys/{crypto_key}�A�
(cloudkms.googleapis.com/CryptoKeyVersionzprojects/{project}/locations/{location}/keyRings/{key_ring}/cryptoKeys/{crypto_key}/cryptoKeyVersions/{crypto_key_version}bproto3'
        , true);

        static::$is_initialized = true;
    }
}

