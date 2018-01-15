<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCPEConfigParametersModifyRequest21
 *
 * Request to modify CPE Config system parameters.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemCPEConfigParametersModifyRequest21 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName enableIPDeviceManagement
     * @var bool|null
     */
    private $enableIPDeviceManagement = null;

    /**
     * @ElementName ftpConnectTimeoutSeconds
     * @var int|null
     */
    private $ftpConnectTimeoutSeconds = null;

    /**
     * @ElementName ftpFileTransferTimeoutSeconds
     * @var int|null
     */
    private $ftpFileTransferTimeoutSeconds = null;

    /**
     * @ElementName pauseBetweenFileRebuildMilliseconds
     * @var int|null
     */
    private $pauseBetweenFileRebuildMilliseconds = null;

    /**
     * @ElementName deviceAccessAppServerClusterName
     * @var string|null
     */
    private $deviceAccessAppServerClusterName = null;

    /**
     * @ElementName minTimeBetweenResetMilliseconds
     * @var int|null
     */
    private $minTimeBetweenResetMilliseconds = null;

    /**
     * @ElementName alwaysPushFilesOnRebuild
     * @var bool|null
     */
    private $alwaysPushFilesOnRebuild = null;

    /**
     * @ElementName maxFileOperationRetryAttempts
     * @var int|null
     */
    private $maxFileOperationRetryAttempts = null;

    /**
     * @ElementName enableAutoRebuildConfig
     * @var bool|null
     */
    private $enableAutoRebuildConfig = null;

    /**
     * @ElementName eventQueueSize
     * @var int|null
     */
    private $eventQueueSize = null;

    /**
     * @ElementName allowDeviceCredentialsRetrieval
     * @var bool|null
     */
    private $allowDeviceCredentialsRetrieval = null;

    /**
     * Getter for enableIPDeviceManagement
     *
     * @ElementName enableIPDeviceManagement
     * @return bool|null
     */
    public function getEnableIPDeviceManagement()
    {
        return $this->enableIPDeviceManagement;
    }

    /**
     * Setter for enableIPDeviceManagement
     *
     * @ElementName enableIPDeviceManagement
     * @param bool|null $enableIPDeviceManagement
     * @return $this
     */
    public function setEnableIPDeviceManagement($enableIPDeviceManagement)
    {
        $this->enableIPDeviceManagement = $enableIPDeviceManagement;
        return $this;
    }

    /**
     * Getter for ftpConnectTimeoutSeconds
     *
     * @ElementName ftpConnectTimeoutSeconds
     * @return int|null
     */
    public function getFtpConnectTimeoutSeconds()
    {
        return $this->ftpConnectTimeoutSeconds;
    }

    /**
     * Setter for ftpConnectTimeoutSeconds
     *
     * @ElementName ftpConnectTimeoutSeconds
     * @param int|null $ftpConnectTimeoutSeconds
     * @return $this
     */
    public function setFtpConnectTimeoutSeconds($ftpConnectTimeoutSeconds)
    {
        $this->ftpConnectTimeoutSeconds = $ftpConnectTimeoutSeconds;
        return $this;
    }

    /**
     * Getter for ftpFileTransferTimeoutSeconds
     *
     * @ElementName ftpFileTransferTimeoutSeconds
     * @return int|null
     */
    public function getFtpFileTransferTimeoutSeconds()
    {
        return $this->ftpFileTransferTimeoutSeconds;
    }

    /**
     * Setter for ftpFileTransferTimeoutSeconds
     *
     * @ElementName ftpFileTransferTimeoutSeconds
     * @param int|null $ftpFileTransferTimeoutSeconds
     * @return $this
     */
    public function setFtpFileTransferTimeoutSeconds($ftpFileTransferTimeoutSeconds)
    {
        $this->ftpFileTransferTimeoutSeconds = $ftpFileTransferTimeoutSeconds;
        return $this;
    }

    /**
     * Getter for pauseBetweenFileRebuildMilliseconds
     *
     * @ElementName pauseBetweenFileRebuildMilliseconds
     * @return int|null
     */
    public function getPauseBetweenFileRebuildMilliseconds()
    {
        return $this->pauseBetweenFileRebuildMilliseconds;
    }

    /**
     * Setter for pauseBetweenFileRebuildMilliseconds
     *
     * @ElementName pauseBetweenFileRebuildMilliseconds
     * @param int|null $pauseBetweenFileRebuildMilliseconds
     * @return $this
     */
    public function setPauseBetweenFileRebuildMilliseconds($pauseBetweenFileRebuildMilliseconds)
    {
        $this->pauseBetweenFileRebuildMilliseconds = $pauseBetweenFileRebuildMilliseconds;
        return $this;
    }

    /**
     * Getter for deviceAccessAppServerClusterName
     *
     * @ElementName deviceAccessAppServerClusterName
     * @return string|null
     */
    public function getDeviceAccessAppServerClusterName()
    {
        return $this->deviceAccessAppServerClusterName;
    }

    /**
     * Setter for deviceAccessAppServerClusterName
     *
     * @ElementName deviceAccessAppServerClusterName
     * @param string|null $deviceAccessAppServerClusterName
     * @return $this
     */
    public function setDeviceAccessAppServerClusterName($deviceAccessAppServerClusterName)
    {
        $this->deviceAccessAppServerClusterName = $deviceAccessAppServerClusterName;
        return $this;
    }

    /**
     * Getter for minTimeBetweenResetMilliseconds
     *
     * @ElementName minTimeBetweenResetMilliseconds
     * @return int|null
     */
    public function getMinTimeBetweenResetMilliseconds()
    {
        return $this->minTimeBetweenResetMilliseconds;
    }

    /**
     * Setter for minTimeBetweenResetMilliseconds
     *
     * @ElementName minTimeBetweenResetMilliseconds
     * @param int|null $minTimeBetweenResetMilliseconds
     * @return $this
     */
    public function setMinTimeBetweenResetMilliseconds($minTimeBetweenResetMilliseconds)
    {
        $this->minTimeBetweenResetMilliseconds = $minTimeBetweenResetMilliseconds;
        return $this;
    }

    /**
     * Getter for alwaysPushFilesOnRebuild
     *
     * @ElementName alwaysPushFilesOnRebuild
     * @return bool|null
     */
    public function getAlwaysPushFilesOnRebuild()
    {
        return $this->alwaysPushFilesOnRebuild;
    }

    /**
     * Setter for alwaysPushFilesOnRebuild
     *
     * @ElementName alwaysPushFilesOnRebuild
     * @param bool|null $alwaysPushFilesOnRebuild
     * @return $this
     */
    public function setAlwaysPushFilesOnRebuild($alwaysPushFilesOnRebuild)
    {
        $this->alwaysPushFilesOnRebuild = $alwaysPushFilesOnRebuild;
        return $this;
    }

    /**
     * Getter for maxFileOperationRetryAttempts
     *
     * @ElementName maxFileOperationRetryAttempts
     * @return int|null
     */
    public function getMaxFileOperationRetryAttempts()
    {
        return $this->maxFileOperationRetryAttempts;
    }

    /**
     * Setter for maxFileOperationRetryAttempts
     *
     * @ElementName maxFileOperationRetryAttempts
     * @param int|null $maxFileOperationRetryAttempts
     * @return $this
     */
    public function setMaxFileOperationRetryAttempts($maxFileOperationRetryAttempts)
    {
        $this->maxFileOperationRetryAttempts = $maxFileOperationRetryAttempts;
        return $this;
    }

    /**
     * Getter for enableAutoRebuildConfig
     *
     * @ElementName enableAutoRebuildConfig
     * @return bool|null
     */
    public function getEnableAutoRebuildConfig()
    {
        return $this->enableAutoRebuildConfig;
    }

    /**
     * Setter for enableAutoRebuildConfig
     *
     * @ElementName enableAutoRebuildConfig
     * @param bool|null $enableAutoRebuildConfig
     * @return $this
     */
    public function setEnableAutoRebuildConfig($enableAutoRebuildConfig)
    {
        $this->enableAutoRebuildConfig = $enableAutoRebuildConfig;
        return $this;
    }

    /**
     * Getter for eventQueueSize
     *
     * @ElementName eventQueueSize
     * @return int|null
     */
    public function getEventQueueSize()
    {
        return $this->eventQueueSize;
    }

    /**
     * Setter for eventQueueSize
     *
     * @ElementName eventQueueSize
     * @param int|null $eventQueueSize
     * @return $this
     */
    public function setEventQueueSize($eventQueueSize)
    {
        $this->eventQueueSize = $eventQueueSize;
        return $this;
    }

    /**
     * Getter for allowDeviceCredentialsRetrieval
     *
     * @ElementName allowDeviceCredentialsRetrieval
     * @return bool|null
     */
    public function getAllowDeviceCredentialsRetrieval()
    {
        return $this->allowDeviceCredentialsRetrieval;
    }

    /**
     * Setter for allowDeviceCredentialsRetrieval
     *
     * @ElementName allowDeviceCredentialsRetrieval
     * @param bool|null $allowDeviceCredentialsRetrieval
     * @return $this
     */
    public function setAllowDeviceCredentialsRetrieval($allowDeviceCredentialsRetrieval)
    {
        $this->allowDeviceCredentialsRetrieval = $allowDeviceCredentialsRetrieval;
        return $this;
    }


}

