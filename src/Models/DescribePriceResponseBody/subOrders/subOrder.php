<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribePriceResponseBody\subOrders;

use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribePriceResponseBody\subOrders\subOrder\ruleIds;
use AlibabaCloud\Tea\Model;

class subOrder extends Model
{
    /**
     * @description The discount amount of the order.
     *
     * @example 0.21
     *
     * @var string
     */
    public $discountAmount;

    /**
     * @description The instance ID.
     *
     * @example r-bp1xxxxxxxxxxxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The list price of the order.
     *
     * @example 0.21
     *
     * @var string
     */
    public $originalAmount;

    /**
     * @description The ID of the promotion rule.
     *
     * @var ruleIds
     */
    public $ruleIds;

    /**
     * @description The final price of the order.
     *
     * @example 10
     *
     * @var string
     */
    public $tradeAmount;
    protected $_name = [
        'discountAmount' => 'DiscountAmount',
        'instanceId'     => 'InstanceId',
        'originalAmount' => 'OriginalAmount',
        'ruleIds'        => 'RuleIds',
        'tradeAmount'    => 'TradeAmount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->discountAmount) {
            $res['DiscountAmount'] = $this->discountAmount;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->originalAmount) {
            $res['OriginalAmount'] = $this->originalAmount;
        }
        if (null !== $this->ruleIds) {
            $res['RuleIds'] = null !== $this->ruleIds ? $this->ruleIds->toMap() : null;
        }
        if (null !== $this->tradeAmount) {
            $res['TradeAmount'] = $this->tradeAmount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return subOrder
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DiscountAmount'])) {
            $model->discountAmount = $map['DiscountAmount'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['OriginalAmount'])) {
            $model->originalAmount = $map['OriginalAmount'];
        }
        if (isset($map['RuleIds'])) {
            $model->ruleIds = ruleIds::fromMap($map['RuleIds']);
        }
        if (isset($map['TradeAmount'])) {
            $model->tradeAmount = $map['TradeAmount'];
        }

        return $model;
    }
}
