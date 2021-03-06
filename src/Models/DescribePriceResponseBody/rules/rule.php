<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribePriceResponseBody\rules;

use AlibabaCloud\Tea\Model;

class rule extends Model
{
    /**
     * @var int
     */
    public $ruleDescId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'ruleDescId' => 'RuleDescId',
        'name'       => 'Name',
        'title'      => 'Title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ruleDescId) {
            $res['RuleDescId'] = $this->ruleDescId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return rule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RuleDescId'])) {
            $model->ruleDescId = $map['RuleDescId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
