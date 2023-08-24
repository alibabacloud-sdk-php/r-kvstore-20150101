<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\Tea\Model;

class DescribeEngineVersionResponseBody extends Model
{
    /**
     * @description The release notes for the minor version of the instance, including the release date, minor version number, release type such as new feature, and description.
     *
     * @example {\\"releaseInfo\\":{\\"createTime\\":\\"2021-07-27\\",\\"level\\":1,\\"releaseVersion\\":\\"0.5.4\\",\\"releaseNote\\":\\"\[Optimized feature]: The stability is improved. \\"}],\\"versionChangesLevel\\":2}
     *
     * @var string
     */
    public $DBVersionRelease;

    /**
     * @description Indicates whether the instance major version can be upgraded. Valid values:
     *
     *   **true**: The major version can be upgraded.
     *   **false**: The major version is the latest version and cannot be upgraded.
     *
     * > To upgrade the major version, call the [ModifyInstanceMajorVersion](~~95259~~) operation.
     * @example true
     *
     * @var bool
     */
    public $enableUpgradeMajorVersion;

    /**
     * @description Indicates whether the instance minor version can be updated. Valid values:
     *
     *   **true**: The minor version can be updated.
     *   **false**: The minor version is the latest version and cannot be updated.
     *
     * > To update the minor version, call the [ModifyInstanceMinorVersion](~~129381~~) operation.
     * @example true
     *
     * @var bool
     */
    public $enableUpgradeMinorVersion;

    /**
     * @description The database engine of the instance. Valid values: **redis** and **memcache**.
     *
     * @example redis
     *
     * @var string
     */
    public $engine;

    /**
     * @description Indicates whether the instance uses the latest minor version. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example false
     *
     * @var bool
     */
    public $isLatestVersion;

    /**
     * @description Indicates whether the instance supports the new SSL encryption feature.
     *
     * @example 1
     *
     * @var string
     */
    public $isNewSSLMode;

    /**
     * @description Indicates whether the instance runs a Redis version.
     *
     * @example 1
     *
     * @var string
     */
    public $isRedisCompatibleVersion;

    /**
     * @description Indicate whether the instance has the SSL encryption feature enabled.
     *
     * @example 1
     *
     * @var string
     */
    public $isSSLEnable;

    /**
     * @description The major version of the instance.
     *
     * @example 5.0
     *
     * @var string
     */
    public $majorVersion;

    /**
     * @description The minor version of the instance.
     *
     * @example redis-5.0_0.5.0
     *
     * @var string
     */
    public $minorVersion;

    /**
     * @description The minor version of proxy nodes.
     *
     * > This parameter is returned only for cluster and read/write splitting instances.
     * @example 6.6.0
     *
     * @var string
     */
    public $proxyMinorVersion;

    /**
     * @description The release notes for the minor version of proxy nodes. The release notes include the release date, minor version number, release type such as new feature, and description.
     *
     * > This parameter is returned only for cluster and read/write splitting instances.
     * @example {\\"releaseInfo\\":\[{\\"createTime\\":\\"2021-06-08\\",\\"level\\":0,\\"releaseVersion\\":\\"6.6.2\\",\\"releaseNote\\":\\"\[New feature]: More commands are available for internal use within ApsaraDB for Redis. \\"}],\\"versionChangesLevel\\":2}
     *
     * @var string
     */
    public $proxyVersionRelease;

    /**
     * @description The request ID.
     *
     * @example A52974D1-9D57-4805-86CC-92E6EDE8****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'DBVersionRelease'          => 'DBVersionRelease',
        'enableUpgradeMajorVersion' => 'EnableUpgradeMajorVersion',
        'enableUpgradeMinorVersion' => 'EnableUpgradeMinorVersion',
        'engine'                    => 'Engine',
        'isLatestVersion'           => 'IsLatestVersion',
        'isNewSSLMode'              => 'IsNewSSLMode',
        'isRedisCompatibleVersion'  => 'IsRedisCompatibleVersion',
        'isSSLEnable'               => 'IsSSLEnable',
        'majorVersion'              => 'MajorVersion',
        'minorVersion'              => 'MinorVersion',
        'proxyMinorVersion'         => 'ProxyMinorVersion',
        'proxyVersionRelease'       => 'ProxyVersionRelease',
        'requestId'                 => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBVersionRelease) {
            $res['DBVersionRelease'] = $this->DBVersionRelease;
        }
        if (null !== $this->enableUpgradeMajorVersion) {
            $res['EnableUpgradeMajorVersion'] = $this->enableUpgradeMajorVersion;
        }
        if (null !== $this->enableUpgradeMinorVersion) {
            $res['EnableUpgradeMinorVersion'] = $this->enableUpgradeMinorVersion;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->isLatestVersion) {
            $res['IsLatestVersion'] = $this->isLatestVersion;
        }
        if (null !== $this->isNewSSLMode) {
            $res['IsNewSSLMode'] = $this->isNewSSLMode;
        }
        if (null !== $this->isRedisCompatibleVersion) {
            $res['IsRedisCompatibleVersion'] = $this->isRedisCompatibleVersion;
        }
        if (null !== $this->isSSLEnable) {
            $res['IsSSLEnable'] = $this->isSSLEnable;
        }
        if (null !== $this->majorVersion) {
            $res['MajorVersion'] = $this->majorVersion;
        }
        if (null !== $this->minorVersion) {
            $res['MinorVersion'] = $this->minorVersion;
        }
        if (null !== $this->proxyMinorVersion) {
            $res['ProxyMinorVersion'] = $this->proxyMinorVersion;
        }
        if (null !== $this->proxyVersionRelease) {
            $res['ProxyVersionRelease'] = $this->proxyVersionRelease;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeEngineVersionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBVersionRelease'])) {
            $model->DBVersionRelease = $map['DBVersionRelease'];
        }
        if (isset($map['EnableUpgradeMajorVersion'])) {
            $model->enableUpgradeMajorVersion = $map['EnableUpgradeMajorVersion'];
        }
        if (isset($map['EnableUpgradeMinorVersion'])) {
            $model->enableUpgradeMinorVersion = $map['EnableUpgradeMinorVersion'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['IsLatestVersion'])) {
            $model->isLatestVersion = $map['IsLatestVersion'];
        }
        if (isset($map['IsNewSSLMode'])) {
            $model->isNewSSLMode = $map['IsNewSSLMode'];
        }
        if (isset($map['IsRedisCompatibleVersion'])) {
            $model->isRedisCompatibleVersion = $map['IsRedisCompatibleVersion'];
        }
        if (isset($map['IsSSLEnable'])) {
            $model->isSSLEnable = $map['IsSSLEnable'];
        }
        if (isset($map['MajorVersion'])) {
            $model->majorVersion = $map['MajorVersion'];
        }
        if (isset($map['MinorVersion'])) {
            $model->minorVersion = $map['MinorVersion'];
        }
        if (isset($map['ProxyMinorVersion'])) {
            $model->proxyMinorVersion = $map['ProxyMinorVersion'];
        }
        if (isset($map['ProxyVersionRelease'])) {
            $model->proxyVersionRelease = $map['ProxyVersionRelease'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
