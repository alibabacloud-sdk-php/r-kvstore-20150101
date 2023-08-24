<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeLogicInstanceTopologyResponseBody\redisProxyList;

use AlibabaCloud\Tea\Model;

class nodeInfo extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 96
     *
     * @var string
     */
    public $bandwidth;

    /**
     * @description The detailed proxy information, including information about proxy nodes.
     *
     * @example 5120
     *
     * @var string
     */
    public $capacity;

    /**
     * @description The ID of the instance whose topology information you want to query.
     *
     * @example 320000
     *
     * @var string
     */
    public $connection;

    /**
     * @description Queries the logical topology of an ApsaraDB for Redis instance.
     *
     * @example r-bp10noxlhcoim2****-proxy-3#542****
     *
     * @var string
     */
    public $nodeId;

    /**
     * @description The ID of the node.
     *
     * @example proxy
     *
     * @var string
     */
    public $nodeType;
    protected $_name = [
        'bandwidth'  => 'Bandwidth',
        'capacity'   => 'Capacity',
        'connection' => 'Connection',
        'nodeId'     => 'NodeId',
        'nodeType'   => 'NodeType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->capacity) {
            $res['Capacity'] = $this->capacity;
        }
        if (null !== $this->connection) {
            $res['Connection'] = $this->connection;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->nodeType) {
            $res['NodeType'] = $this->nodeType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nodeInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['Capacity'])) {
            $model->capacity = $map['Capacity'];
        }
        if (isset($map['Connection'])) {
            $model->connection = $map['Connection'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['NodeType'])) {
            $model->nodeType = $map['NodeType'];
        }

        return $model;
    }
}
