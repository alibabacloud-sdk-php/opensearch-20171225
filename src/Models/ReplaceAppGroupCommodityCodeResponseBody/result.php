<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\ReplaceAppGroupCommodityCodeResponseBody;

use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ReplaceAppGroupCommodityCodeResponseBody\result\quota;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The billing method. Valid values:
     *
     *   POSTPAY: pay-as-you-go.
     *   PREPAY: subscription.
     *
     * @example POSTPAY
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description The billing type. Valid values:
     *
     *   1: computing resources.
     *   2: queries per second (QPS).
     *
     * @example 1
     *
     * @var int
     */
    public $chargingWay;

    /**
     * @description The code of the commodity.
     *
     * @example opensearch
     *
     * @var string
     */
    public $commodityCode;

    /**
     * @description The timestamp when the application was created.
     *
     * @example 1588054131
     *
     * @var int
     */
    public $created;

    /**
     * @description The ID of the current online version.
     *
     * @example 100302903
     *
     * @var string
     */
    public $currentVersion;

    /**
     * @description The description of the application.
     *
     * @example ""
     *
     * @var string
     */
    public $description;

    /**
     * @description The expiration time.
     *
     * @example -
     *
     * @var string
     */
    public $expireOn;

    /**
     * @description The ID of the rough sort expression.
     *
     * @example 0
     *
     * @var int
     */
    public $firstRankAlgoDeploymentId;

    /**
     * @description The approval state of the quotas. Valid values:
     *
     *   0: The approval status is normal.
     *   1: The quotas are being approved.
     *
     * @example 0
     *
     * @var int
     */
    public $hasPendingQuotaReviewTask;

    /**
     * @description The application ID.
     *
     * @example -
     *
     * @var string
     */
    public $id;

    /**
     * @description The instance ID.
     *
     * @example -
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The lock state. Valid values:
     *
     *   Unlock: The instance is unlocked.
     *   LockByExpiration: The instance is automatically locked after it expires.
     *   ManualLock: The instance is manually locked.
     *
     * @example Unlock
     *
     * @var string
     */
    public $lockMode;

    /**
     * @description Indicates whether the instance is automatically locked after it expires. Valid values:
     *
     *   0: The instance is not automatically locked after it expires.
     *   1: The instance is automatically locked after it expires.
     *
     * @example 0
     *
     * @var int
     */
    public $lockedByExpiration;

    /**
     * @description The name of the order.
     *
     * @example -
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the fine sort expression that is being created.
     *
     * @example 0
     *
     * @var int
     */
    public $pendingSecondRankAlgoDeploymentId;

    /**
     * @description The ID of the order that is in progress.
     *
     * @example -
     *
     * @var string
     */
    public $processingOrderId;

    /**
     * @description Indicates whether the order is produced.
     *
     * @example 0
     *
     * @var int
     */
    public $produced;

    /**
     * @description The name of the A/B test group.
     *
     * @example -
     *
     * @var string
     */
    public $projectId;

    /**
     * @description The configuration information.
     *
     * @var quota
     */
    public $quota;

    /**
     * @description The ID of the fine sort expression.
     *
     * @example 0
     *
     * @var int
     */
    public $secondRankAlgoDeploymentId;

    /**
     * @description The status of the application.
     *
     * @example normal
     *
     * @var string
     */
    public $status;

    /**
     * @description The timestamp when the current online version was published.
     *
     * @example 1590486386
     *
     * @var int
     */
    public $switchedTime;

    /**
     * @description The type of the application.
     *
     * @example -
     *
     * @var string
     */
    public $type;

    /**
     * @description The timestamp when the application was updated.
     *
     * @example 1581065904
     *
     * @var int
     */
    public $updated;

    /**
     * @description The versions.
     *
     * @var string[]
     */
    public $versions;
    protected $_name = [
        'chargeType'                        => 'chargeType',
        'chargingWay'                       => 'chargingWay',
        'commodityCode'                     => 'commodityCode',
        'created'                           => 'created',
        'currentVersion'                    => 'currentVersion',
        'description'                       => 'description',
        'expireOn'                          => 'expireOn',
        'firstRankAlgoDeploymentId'         => 'firstRankAlgoDeploymentId',
        'hasPendingQuotaReviewTask'         => 'hasPendingQuotaReviewTask',
        'id'                                => 'id',
        'instanceId'                        => 'instanceId',
        'lockMode'                          => 'lockMode',
        'lockedByExpiration'                => 'lockedByExpiration',
        'name'                              => 'name',
        'pendingSecondRankAlgoDeploymentId' => 'pendingSecondRankAlgoDeploymentId',
        'processingOrderId'                 => 'processingOrderId',
        'produced'                          => 'produced',
        'projectId'                         => 'projectId',
        'quota'                             => 'quota',
        'secondRankAlgoDeploymentId'        => 'secondRankAlgoDeploymentId',
        'status'                            => 'status',
        'switchedTime'                      => 'switchedTime',
        'type'                              => 'type',
        'updated'                           => 'updated',
        'versions'                          => 'versions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->chargeType) {
            $res['chargeType'] = $this->chargeType;
        }
        if (null !== $this->chargingWay) {
            $res['chargingWay'] = $this->chargingWay;
        }
        if (null !== $this->commodityCode) {
            $res['commodityCode'] = $this->commodityCode;
        }
        if (null !== $this->created) {
            $res['created'] = $this->created;
        }
        if (null !== $this->currentVersion) {
            $res['currentVersion'] = $this->currentVersion;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->expireOn) {
            $res['expireOn'] = $this->expireOn;
        }
        if (null !== $this->firstRankAlgoDeploymentId) {
            $res['firstRankAlgoDeploymentId'] = $this->firstRankAlgoDeploymentId;
        }
        if (null !== $this->hasPendingQuotaReviewTask) {
            $res['hasPendingQuotaReviewTask'] = $this->hasPendingQuotaReviewTask;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }
        if (null !== $this->lockMode) {
            $res['lockMode'] = $this->lockMode;
        }
        if (null !== $this->lockedByExpiration) {
            $res['lockedByExpiration'] = $this->lockedByExpiration;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->pendingSecondRankAlgoDeploymentId) {
            $res['pendingSecondRankAlgoDeploymentId'] = $this->pendingSecondRankAlgoDeploymentId;
        }
        if (null !== $this->processingOrderId) {
            $res['processingOrderId'] = $this->processingOrderId;
        }
        if (null !== $this->produced) {
            $res['produced'] = $this->produced;
        }
        if (null !== $this->projectId) {
            $res['projectId'] = $this->projectId;
        }
        if (null !== $this->quota) {
            $res['quota'] = null !== $this->quota ? $this->quota->toMap() : null;
        }
        if (null !== $this->secondRankAlgoDeploymentId) {
            $res['secondRankAlgoDeploymentId'] = $this->secondRankAlgoDeploymentId;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->switchedTime) {
            $res['switchedTime'] = $this->switchedTime;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->updated) {
            $res['updated'] = $this->updated;
        }
        if (null !== $this->versions) {
            $res['versions'] = $this->versions;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['chargeType'])) {
            $model->chargeType = $map['chargeType'];
        }
        if (isset($map['chargingWay'])) {
            $model->chargingWay = $map['chargingWay'];
        }
        if (isset($map['commodityCode'])) {
            $model->commodityCode = $map['commodityCode'];
        }
        if (isset($map['created'])) {
            $model->created = $map['created'];
        }
        if (isset($map['currentVersion'])) {
            $model->currentVersion = $map['currentVersion'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['expireOn'])) {
            $model->expireOn = $map['expireOn'];
        }
        if (isset($map['firstRankAlgoDeploymentId'])) {
            $model->firstRankAlgoDeploymentId = $map['firstRankAlgoDeploymentId'];
        }
        if (isset($map['hasPendingQuotaReviewTask'])) {
            $model->hasPendingQuotaReviewTask = $map['hasPendingQuotaReviewTask'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }
        if (isset($map['lockMode'])) {
            $model->lockMode = $map['lockMode'];
        }
        if (isset($map['lockedByExpiration'])) {
            $model->lockedByExpiration = $map['lockedByExpiration'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['pendingSecondRankAlgoDeploymentId'])) {
            $model->pendingSecondRankAlgoDeploymentId = $map['pendingSecondRankAlgoDeploymentId'];
        }
        if (isset($map['processingOrderId'])) {
            $model->processingOrderId = $map['processingOrderId'];
        }
        if (isset($map['produced'])) {
            $model->produced = $map['produced'];
        }
        if (isset($map['projectId'])) {
            $model->projectId = $map['projectId'];
        }
        if (isset($map['quota'])) {
            $model->quota = quota::fromMap($map['quota']);
        }
        if (isset($map['secondRankAlgoDeploymentId'])) {
            $model->secondRankAlgoDeploymentId = $map['secondRankAlgoDeploymentId'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['switchedTime'])) {
            $model->switchedTime = $map['switchedTime'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['updated'])) {
            $model->updated = $map['updated'];
        }
        if (isset($map['versions'])) {
            if (!empty($map['versions'])) {
                $model->versions = $map['versions'];
            }
        }

        return $model;
    }
}
