<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeSecurityGroupConfigurationResponseBody\items;

use AlibabaCloud\Tea\Model;

class ecsSecurityGroupRelation extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $securityGroupId;

    /**
     * @var string
     */
    public $netType;
    protected $_name = [
        'regionId'        => 'RegionId',
        'securityGroupId' => 'SecurityGroupId',
        'netType'         => 'NetType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->netType) {
            $res['NetType'] = $this->netType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ecsSecurityGroupRelation
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['NetType'])) {
            $model->netType = $map['NetType'];
        }

        return $model;
    }
}
