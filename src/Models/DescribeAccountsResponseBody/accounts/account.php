<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeAccountsResponseBody\accounts;

use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeAccountsResponseBody\accounts\account\databasePrivileges;
use AlibabaCloud\Tea\Model;

class account extends Model
{
    /**
     * @var string
     */
    public $accountStatus;

    /**
     * @var databasePrivileges
     */
    public $databasePrivileges;

    /**
     * @var string
     */
    public $accountDescription;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $accountType;

    /**
     * @var string
     */
    public $accountName;
    protected $_name = [
        'accountStatus'      => 'AccountStatus',
        'databasePrivileges' => 'DatabasePrivileges',
        'accountDescription' => 'AccountDescription',
        'instanceId'         => 'InstanceId',
        'accountType'        => 'AccountType',
        'accountName'        => 'AccountName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountStatus) {
            $res['AccountStatus'] = $this->accountStatus;
        }
        if (null !== $this->databasePrivileges) {
            $res['DatabasePrivileges'] = null !== $this->databasePrivileges ? $this->databasePrivileges->toMap() : null;
        }
        if (null !== $this->accountDescription) {
            $res['AccountDescription'] = $this->accountDescription;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->accountType) {
            $res['AccountType'] = $this->accountType;
        }
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return account
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountStatus'])) {
            $model->accountStatus = $map['AccountStatus'];
        }
        if (isset($map['DatabasePrivileges'])) {
            $model->databasePrivileges = databasePrivileges::fromMap($map['DatabasePrivileges']);
        }
        if (isset($map['AccountDescription'])) {
            $model->accountDescription = $map['AccountDescription'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['AccountType'])) {
            $model->accountType = $map['AccountType'];
        }
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }

        return $model;
    }
}
