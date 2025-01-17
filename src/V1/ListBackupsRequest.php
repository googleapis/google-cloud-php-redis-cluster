<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/redis/cluster/v1/cloud_redis_cluster.proto

namespace Google\Cloud\Redis\Cluster\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for [ListBackups].
 *
 * Generated from protobuf message <code>google.cloud.redis.cluster.v1.ListBackupsRequest</code>
 */
class ListBackupsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the backupCollection using the form:
     * `projects/{project_id}/locations/{location_id}/backupCollections/{backup_collection_id}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Optional. The maximum number of items to return.
     * If not specified, a default value of 1000 will be used by the service.
     * Regardless of the page_size value, the response may include a partial list
     * and a caller should only rely on response's
     * [`next_page_token`][google.cloud.redis.cluster.v1.ListBackupsResponse.next_page_token]
     * to determine if there are more clusters left to be queried.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $page_size = 0;
    /**
     * Optional. The `next_page_token` value returned from a previous
     * [ListBackupCollections] request, if any.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $page_token = '';

    /**
     * @param string $parent Required. The resource name of the backupCollection using the form:
     *                       `projects/{project_id}/locations/{location_id}/backupCollections/{backup_collection_id}`
     *                       Please see {@see CloudRedisClusterClient::backupCollectionName()} for help formatting this field.
     *
     * @return \Google\Cloud\Redis\Cluster\V1\ListBackupsRequest
     *
     * @experimental
     */
    public static function build(string $parent): self
    {
        return (new self())
            ->setParent($parent);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The resource name of the backupCollection using the form:
     *           `projects/{project_id}/locations/{location_id}/backupCollections/{backup_collection_id}`
     *     @type int $page_size
     *           Optional. The maximum number of items to return.
     *           If not specified, a default value of 1000 will be used by the service.
     *           Regardless of the page_size value, the response may include a partial list
     *           and a caller should only rely on response's
     *           [`next_page_token`][google.cloud.redis.cluster.v1.ListBackupsResponse.next_page_token]
     *           to determine if there are more clusters left to be queried.
     *     @type string $page_token
     *           Optional. The `next_page_token` value returned from a previous
     *           [ListBackupCollections] request, if any.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Redis\Cluster\V1\CloudRedisCluster::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the backupCollection using the form:
     * `projects/{project_id}/locations/{location_id}/backupCollections/{backup_collection_id}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The resource name of the backupCollection using the form:
     * `projects/{project_id}/locations/{location_id}/backupCollections/{backup_collection_id}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Optional. The maximum number of items to return.
     * If not specified, a default value of 1000 will be used by the service.
     * Regardless of the page_size value, the response may include a partial list
     * and a caller should only rely on response's
     * [`next_page_token`][google.cloud.redis.cluster.v1.ListBackupsResponse.next_page_token]
     * to determine if there are more clusters left to be queried.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Optional. The maximum number of items to return.
     * If not specified, a default value of 1000 will be used by the service.
     * Regardless of the page_size value, the response may include a partial list
     * and a caller should only rely on response's
     * [`next_page_token`][google.cloud.redis.cluster.v1.ListBackupsResponse.next_page_token]
     * to determine if there are more clusters left to be queried.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * Optional. The `next_page_token` value returned from a previous
     * [ListBackupCollections] request, if any.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Optional. The `next_page_token` value returned from a previous
     * [ListBackupCollections] request, if any.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

}
