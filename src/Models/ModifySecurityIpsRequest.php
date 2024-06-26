<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\Tea\Model;

class ModifySecurityIpsRequest extends Model
{
    /**
     * @description The ID of the instance.
     *
     * This parameter is required.
     * @example r-bp1zxszhcgatnx****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The method that is used to modify the whitelist. Valid values:
     *
     *   **Cover**: overwrites the original whitelist.
     *   **Append**: appends data to the whitelist.
     *   **Delete**: deletes the whitelist.
     *
     * @example Append
     *
     * @var string
     */
    public $modifyMode;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description By default, this parameter is left empty. The attribute of the whitelist. The console does not display the whitelist whose value of this parameter is **hidden**.
     *
     * @example hidden
     *
     * @var string
     */
    public $securityIpGroupAttribute;

    /**
     * @description The name of the IP address whitelist.
     * >Warning: You cannot modify the whitelist that is generated by the system. If you do not specify this parameter, the default whitelist is modified by default.
     * @example default
     *
     * @var string
     */
    public $securityIpGroupName;

    /**
     * @description The IP addresses in the whitelist. Up to 1,000 IP addresses can be specified in a whitelist. Separate multiple IP addresses with a comma (,). Specify an IP address in the 0.0.0.0/0, 10.23.12.24, or 10.23.12.24/24 format. In CIDR block 10.23.12.24/24, /24 specifies the length of the prefix of an IP address. The prefix length ranges from 1 to 32.
     *
     * This parameter is required.
     * @example 100.64.***.0/24,10.101.11.***
     *
     * @var string
     */
    public $securityIps;

    /**
     * @var string
     */
    public $securityToken;
    protected $_name = [
        'instanceId'               => 'InstanceId',
        'modifyMode'               => 'ModifyMode',
        'ownerAccount'             => 'OwnerAccount',
        'ownerId'                  => 'OwnerId',
        'resourceOwnerAccount'     => 'ResourceOwnerAccount',
        'resourceOwnerId'          => 'ResourceOwnerId',
        'securityIpGroupAttribute' => 'SecurityIpGroupAttribute',
        'securityIpGroupName'      => 'SecurityIpGroupName',
        'securityIps'              => 'SecurityIps',
        'securityToken'            => 'SecurityToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->modifyMode) {
            $res['ModifyMode'] = $this->modifyMode;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->securityIpGroupAttribute) {
            $res['SecurityIpGroupAttribute'] = $this->securityIpGroupAttribute;
        }
        if (null !== $this->securityIpGroupName) {
            $res['SecurityIpGroupName'] = $this->securityIpGroupName;
        }
        if (null !== $this->securityIps) {
            $res['SecurityIps'] = $this->securityIps;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifySecurityIpsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ModifyMode'])) {
            $model->modifyMode = $map['ModifyMode'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['SecurityIpGroupAttribute'])) {
            $model->securityIpGroupAttribute = $map['SecurityIpGroupAttribute'];
        }
        if (isset($map['SecurityIpGroupName'])) {
            $model->securityIpGroupName = $map['SecurityIpGroupName'];
        }
        if (isset($map['SecurityIps'])) {
            $model->securityIps = $map['SecurityIps'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        return $model;
    }
}
