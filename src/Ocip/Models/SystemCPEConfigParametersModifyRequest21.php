<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCPEConfigParametersModifyRequest21
 *
 * Request to modify CPE Config system parameters.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"610f84d3e188f0477c3ae1a82ee036da:6345","type":"sequence"}]
 */
class SystemCPEConfigParametersModifyRequest21 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName enableIPDeviceManagement
     * @Type bool
     * @Optional
     * @Group 610f84d3e188f0477c3ae1a82ee036da:6345
     * @var bool|null
     */
    private $enableIPDeviceManagement = null;

    /**
     * @ElementName ftpConnectTimeoutSeconds
     * @Type int
     * @Optional
     * @Group 610f84d3e188f0477c3ae1a82ee036da:6345
     * @var int|null
     */
    private $ftpConnectTimeoutSeconds = null;

    /**
     * @ElementName ftpFileTransferTimeoutSeconds
     * @Type int
     * @Optional
     * @Group 610f84d3e188f0477c3ae1a82ee036da:6345
     * @var int|null
     */
    private $ftpFileTransferTimeoutSeconds = null;

    /**
     * @ElementName pauseBetweenFileRebuildMilliseconds
     * @Type int
     * @Optional
     * @Group 610f84d3e188f0477c3ae1a82ee036da:6345
     * @var int|null
     */
    private $pauseBetweenFileRebuildMilliseconds = null;

    /**
     * @ElementName deviceAccessAppServerClusterName
     * @Type string
     * @Nillable
     * @Optional
     * @Group 610f84d3e188f0477c3ae1a82ee036da:6345
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $deviceAccessAppServerClusterName = null;

    /**
     * @ElementName minTimeBetweenResetMilliseconds
     * @Type int
     * @Optional
     * @Group 610f84d3e188f0477c3ae1a82ee036da:6345
     * @var int|null
     */
    private $minTimeBetweenResetMilliseconds = null;

    /**
     * @ElementName alwaysPushFilesOnRebuild
     * @Type bool
     * @Optional
     * @Group 610f84d3e188f0477c3ae1a82ee036da:6345
     * @var bool|null
     */
    private $alwaysPushFilesOnRebuild = null;

    /**
     * @ElementName maxFileOperationRetryAttempts
     * @Type int
     * @Optional
     * @Group 610f84d3e188f0477c3ae1a82ee036da:6345
     * @var int|null
     */
    private $maxFileOperationRetryAttempts = null;

    /**
     * @ElementName enableAutoRebuildConfig
     * @Type bool
     * @Optional
     * @Group 610f84d3e188f0477c3ae1a82ee036da:6345
     * @var bool|null
     */
    private $enableAutoRebuildConfig = null;

    /**
     * @ElementName eventQueueSize
     * @Type int
     * @Optional
     * @Group 610f84d3e188f0477c3ae1a82ee036da:6345
     * @var int|null
     */
    private $eventQueueSize = null;

    /**
     * @ElementName allowDeviceCredentialsRetrieval
     * @Type bool
     * @Optional
     * @Group 610f84d3e188f0477c3ae1a82ee036da:6345
     * @var bool|null
     */
    private $allowDeviceCredentialsRetrieval = null;

    /**
     * Getter for enableIPDeviceManagement
     *
     * @return bool
     */
    public function getEnableIPDeviceManagement()
    {
        return $this->enableIPDeviceManagement instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableIPDeviceManagement;
    }

    /**
     * Setter for enableIPDeviceManagement
     *
     * @param bool $enableIPDeviceManagement
     * @return $this
     */
    public function setEnableIPDeviceManagement($enableIPDeviceManagement)
    {
        $this->enableIPDeviceManagement = $enableIPDeviceManagement;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableIPDeviceManagement()
    {
        $this->enableIPDeviceManagement = null;
        return $this;
    }

    /**
     * Getter for ftpConnectTimeoutSeconds
     *
     * @return int
     */
    public function getFtpConnectTimeoutSeconds()
    {
        return $this->ftpConnectTimeoutSeconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->ftpConnectTimeoutSeconds;
    }

    /**
     * Setter for ftpConnectTimeoutSeconds
     *
     * @param int $ftpConnectTimeoutSeconds
     * @return $this
     */
    public function setFtpConnectTimeoutSeconds($ftpConnectTimeoutSeconds)
    {
        $this->ftpConnectTimeoutSeconds = $ftpConnectTimeoutSeconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetFtpConnectTimeoutSeconds()
    {
        $this->ftpConnectTimeoutSeconds = null;
        return $this;
    }

    /**
     * Getter for ftpFileTransferTimeoutSeconds
     *
     * @return int
     */
    public function getFtpFileTransferTimeoutSeconds()
    {
        return $this->ftpFileTransferTimeoutSeconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->ftpFileTransferTimeoutSeconds;
    }

    /**
     * Setter for ftpFileTransferTimeoutSeconds
     *
     * @param int $ftpFileTransferTimeoutSeconds
     * @return $this
     */
    public function setFtpFileTransferTimeoutSeconds($ftpFileTransferTimeoutSeconds)
    {
        $this->ftpFileTransferTimeoutSeconds = $ftpFileTransferTimeoutSeconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetFtpFileTransferTimeoutSeconds()
    {
        $this->ftpFileTransferTimeoutSeconds = null;
        return $this;
    }

    /**
     * Getter for pauseBetweenFileRebuildMilliseconds
     *
     * @return int
     */
    public function getPauseBetweenFileRebuildMilliseconds()
    {
        return $this->pauseBetweenFileRebuildMilliseconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->pauseBetweenFileRebuildMilliseconds;
    }

    /**
     * Setter for pauseBetweenFileRebuildMilliseconds
     *
     * @param int $pauseBetweenFileRebuildMilliseconds
     * @return $this
     */
    public function setPauseBetweenFileRebuildMilliseconds($pauseBetweenFileRebuildMilliseconds)
    {
        $this->pauseBetweenFileRebuildMilliseconds = $pauseBetweenFileRebuildMilliseconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPauseBetweenFileRebuildMilliseconds()
    {
        $this->pauseBetweenFileRebuildMilliseconds = null;
        return $this;
    }

    /**
     * Getter for deviceAccessAppServerClusterName
     *
     * @return string|null
     */
    public function getDeviceAccessAppServerClusterName()
    {
        return $this->deviceAccessAppServerClusterName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deviceAccessAppServerClusterName;
    }

    /**
     * Setter for deviceAccessAppServerClusterName
     *
     * @param string|null $deviceAccessAppServerClusterName
     * @return $this
     */
    public function setDeviceAccessAppServerClusterName($deviceAccessAppServerClusterName)
    {
        if ($deviceAccessAppServerClusterName === null) {
            $this->deviceAccessAppServerClusterName = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->deviceAccessAppServerClusterName = $deviceAccessAppServerClusterName;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDeviceAccessAppServerClusterName()
    {
        $this->deviceAccessAppServerClusterName = null;
        return $this;
    }

    /**
     * Getter for minTimeBetweenResetMilliseconds
     *
     * @return int
     */
    public function getMinTimeBetweenResetMilliseconds()
    {
        return $this->minTimeBetweenResetMilliseconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->minTimeBetweenResetMilliseconds;
    }

    /**
     * Setter for minTimeBetweenResetMilliseconds
     *
     * @param int $minTimeBetweenResetMilliseconds
     * @return $this
     */
    public function setMinTimeBetweenResetMilliseconds($minTimeBetweenResetMilliseconds)
    {
        $this->minTimeBetweenResetMilliseconds = $minTimeBetweenResetMilliseconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMinTimeBetweenResetMilliseconds()
    {
        $this->minTimeBetweenResetMilliseconds = null;
        return $this;
    }

    /**
     * Getter for alwaysPushFilesOnRebuild
     *
     * @return bool
     */
    public function getAlwaysPushFilesOnRebuild()
    {
        return $this->alwaysPushFilesOnRebuild instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->alwaysPushFilesOnRebuild;
    }

    /**
     * Setter for alwaysPushFilesOnRebuild
     *
     * @param bool $alwaysPushFilesOnRebuild
     * @return $this
     */
    public function setAlwaysPushFilesOnRebuild($alwaysPushFilesOnRebuild)
    {
        $this->alwaysPushFilesOnRebuild = $alwaysPushFilesOnRebuild;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAlwaysPushFilesOnRebuild()
    {
        $this->alwaysPushFilesOnRebuild = null;
        return $this;
    }

    /**
     * Getter for maxFileOperationRetryAttempts
     *
     * @return int
     */
    public function getMaxFileOperationRetryAttempts()
    {
        return $this->maxFileOperationRetryAttempts instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxFileOperationRetryAttempts;
    }

    /**
     * Setter for maxFileOperationRetryAttempts
     *
     * @param int $maxFileOperationRetryAttempts
     * @return $this
     */
    public function setMaxFileOperationRetryAttempts($maxFileOperationRetryAttempts)
    {
        $this->maxFileOperationRetryAttempts = $maxFileOperationRetryAttempts;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaxFileOperationRetryAttempts()
    {
        $this->maxFileOperationRetryAttempts = null;
        return $this;
    }

    /**
     * Getter for enableAutoRebuildConfig
     *
     * @return bool
     */
    public function getEnableAutoRebuildConfig()
    {
        return $this->enableAutoRebuildConfig instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableAutoRebuildConfig;
    }

    /**
     * Setter for enableAutoRebuildConfig
     *
     * @param bool $enableAutoRebuildConfig
     * @return $this
     */
    public function setEnableAutoRebuildConfig($enableAutoRebuildConfig)
    {
        $this->enableAutoRebuildConfig = $enableAutoRebuildConfig;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableAutoRebuildConfig()
    {
        $this->enableAutoRebuildConfig = null;
        return $this;
    }

    /**
     * Getter for eventQueueSize
     *
     * @return int
     */
    public function getEventQueueSize()
    {
        return $this->eventQueueSize instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->eventQueueSize;
    }

    /**
     * Setter for eventQueueSize
     *
     * @param int $eventQueueSize
     * @return $this
     */
    public function setEventQueueSize($eventQueueSize)
    {
        $this->eventQueueSize = $eventQueueSize;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEventQueueSize()
    {
        $this->eventQueueSize = null;
        return $this;
    }

    /**
     * Getter for allowDeviceCredentialsRetrieval
     *
     * @return bool
     */
    public function getAllowDeviceCredentialsRetrieval()
    {
        return $this->allowDeviceCredentialsRetrieval instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->allowDeviceCredentialsRetrieval;
    }

    /**
     * Setter for allowDeviceCredentialsRetrieval
     *
     * @param bool $allowDeviceCredentialsRetrieval
     * @return $this
     */
    public function setAllowDeviceCredentialsRetrieval($allowDeviceCredentialsRetrieval)
    {
        $this->allowDeviceCredentialsRetrieval = $allowDeviceCredentialsRetrieval;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAllowDeviceCredentialsRetrieval()
    {
        $this->allowDeviceCredentialsRetrieval = null;
        return $this;
    }


}

