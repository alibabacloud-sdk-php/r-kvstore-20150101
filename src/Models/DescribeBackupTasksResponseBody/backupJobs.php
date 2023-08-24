<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeBackupTasksResponseBody;

use AlibabaCloud\Tea\Model;

class backupJobs extends Model
{
    /**
     * @description The ID of the backup task.
     *
     * @example 8491111
     *
     * @var int
     */
    public $backupJobID;

    /**
     * @description The beginning time when the backup task started. The time is in the *yyyy-MM-dd*T*HH:mm:ss*Z format and displayed in UTC.
     *
     * @example Automated
     *
     * @var string
     */
    public $backupProgressStatus;

    /**
     * @description Manual
     *
     * @example Manual
     *
     * @var string
     */
    public $jobMode;

    /**
     * @description The ID of the request.
     *
     * @example ****
     *
     * @var string
     */
    public $nodeId;

    /**
     * @description The backup mode. Valid values:
     *
     *   **Automated**: automatic backup
     *   **Manual**: manual backup
     *
     * @example 0
     *
     * @var string
     */
    public $process;

    /**
     * @description 1162****
     *
     * @example 2021-01-05T19:24:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @example NormalBackupTask
     *
     * @var string
     */
    public $taskAction;
    protected $_name = [
        'backupJobID'          => 'BackupJobID',
        'backupProgressStatus' => 'BackupProgressStatus',
        'jobMode'              => 'JobMode',
        'nodeId'               => 'NodeId',
        'process'              => 'Process',
        'startTime'            => 'StartTime',
        'taskAction'           => 'TaskAction',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupJobID) {
            $res['BackupJobID'] = $this->backupJobID;
        }
        if (null !== $this->backupProgressStatus) {
            $res['BackupProgressStatus'] = $this->backupProgressStatus;
        }
        if (null !== $this->jobMode) {
            $res['JobMode'] = $this->jobMode;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->process) {
            $res['Process'] = $this->process;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->taskAction) {
            $res['TaskAction'] = $this->taskAction;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return backupJobs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupJobID'])) {
            $model->backupJobID = $map['BackupJobID'];
        }
        if (isset($map['BackupProgressStatus'])) {
            $model->backupProgressStatus = $map['BackupProgressStatus'];
        }
        if (isset($map['JobMode'])) {
            $model->jobMode = $map['JobMode'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['Process'])) {
            $model->process = $map['Process'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['TaskAction'])) {
            $model->taskAction = $map['TaskAction'];
        }

        return $model;
    }
}
