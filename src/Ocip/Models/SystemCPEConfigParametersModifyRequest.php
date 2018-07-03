<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCPEConfigParametersModifyRequest
 *
 * Request to modify CPE Config system parameters.
 *         The response is either SuccessResponse or ErrorResponse.
 *         
 *         Replaced by: SystemCPEConfigParametersModifyRequest20.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @see SystemCPEConfigParametersModifyRequest20
 */
class SystemCPEConfigParametersModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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
     * @ElementName maxBusyTimeMinutes
     * @var int|null
     */
    private $maxBusyTimeMinutes = null;

    /**
     * @ElementName deviceAccessAppServerClusterName
     * @var string|null
     */
    private $deviceAccessAppServerClusterName = null;

    /**
     * @ElementName fileRebuildImmediate
     * @var string|null
     */
    private $fileRebuildImmediate = null;

    /**
     * @ElementName fileRebuildDaily
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemCPEConfigParametersModifyRequest\FileRebuildDaily|null
     */
    private $fileRebuildDaily = null;

    /**
     * @ElementName fileRebuildHourly
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemCPEConfigParametersModifyRequest\FileRebuildHourly|null
     */
    private $fileRebuildHourly = null;

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
     * Getter for maxBusyTimeMinutes
     *
     * @ElementName maxBusyTimeMinutes
     * @return int|null
     */
    public function getMaxBusyTimeMinutes()
    {
        return $this->maxBusyTimeMinutes;
    }

    /**
     * Setter for maxBusyTimeMinutes
     *
     * @ElementName maxBusyTimeMinutes
     * @param int|null $maxBusyTimeMinutes
     * @return $this
     */
    public function setMaxBusyTimeMinutes($maxBusyTimeMinutes)
    {
        $this->maxBusyTimeMinutes = $maxBusyTimeMinutes;
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
     * Getter for fileRebuildImmediate
     *
     * @ElementName fileRebuildImmediate
     * @return string|null
     */
    public function getFileRebuildImmediate()
    {
        return $this->fileRebuildImmediate;
    }

    /**
     * Setter for fileRebuildImmediate
     *
     * @ElementName fileRebuildImmediate
     * @param string|null $fileRebuildImmediate
     * @return $this
     */
    public function setFileRebuildImmediate($fileRebuildImmediate)
    {
        $this->fileRebuildImmediate = $fileRebuildImmediate;
        return $this;
    }

    /**
     * Getter for fileRebuildDaily
     *
     * @ElementName fileRebuildDaily
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemCPEConfigParametersModifyRequest\FileRebuildDaily|null
     */
    public function getFileRebuildDaily()
    {
        return $this->fileRebuildDaily;
    }

    /**
     * Setter for fileRebuildDaily
     *
     * @ElementName fileRebuildDaily
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemCPEConfigParametersModifyRequest\FileRebuildDaily|null $fileRebuildDaily
     * @return $this
     */
    public function setFileRebuildDaily($fileRebuildDaily)
    {
        $this->fileRebuildDaily = $fileRebuildDaily;
        return $this;
    }

    /**
     * Getter for fileRebuildHourly
     *
     * @ElementName fileRebuildHourly
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemCPEConfigParametersModifyRequest\FileRebuildHourly|null
     */
    public function getFileRebuildHourly()
    {
        return $this->fileRebuildHourly;
    }

    /**
     * Setter for fileRebuildHourly
     *
     * @ElementName fileRebuildHourly
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemCPEConfigParametersModifyRequest\FileRebuildHourly|null $fileRebuildHourly
     * @return $this
     */
    public function setFileRebuildHourly($fileRebuildHourly)
    {
        $this->fileRebuildHourly = $fileRebuildHourly;
        return $this;
    }


}

