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
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:33314","type":"sequence","children":[{"id":"ab0042aa512abc10edb3c55e4b416b0b:33321","type":"choice","optional":true}]}]
 */
class SystemCPEConfigParametersModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName enableIPDeviceManagement
     * @Type bool
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:33314
     * @var bool|null
     */
    private $enableIPDeviceManagement = null;

    /**
     * @ElementName ftpConnectTimeoutSeconds
     * @Type int
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:33314
     * @var int|null
     */
    private $ftpConnectTimeoutSeconds = null;

    /**
     * @ElementName ftpFileTransferTimeoutSeconds
     * @Type int
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:33314
     * @var int|null
     */
    private $ftpFileTransferTimeoutSeconds = null;

    /**
     * @ElementName pauseBetweenFileRebuildMilliseconds
     * @Type int
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:33314
     * @var int|null
     */
    private $pauseBetweenFileRebuildMilliseconds = null;

    /**
     * @ElementName maxBusyTimeMinutes
     * @Type int
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:33314
     * @var int|null
     */
    private $maxBusyTimeMinutes = null;

    /**
     * @ElementName deviceAccessAppServerClusterName
     * @Type string
     * @Nillable
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:33314
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $deviceAccessAppServerClusterName = null;

    /**
     * @ElementName fileRebuildImmediate
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:33321
     * @var string|null
     */
    private $fileRebuildImmediate = null;

    /**
     * @ElementName fileRebuildDaily
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemCPEConfigParametersModifyRequestFileRebuildDaily
     * @Group ab0042aa512abc10edb3c55e4b416b0b:33321
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemCPEConfigParametersModifyRequestFileRebuildDaily|null
     */
    private $fileRebuildDaily = null;

    /**
     * @ElementName fileRebuildHourly
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemCPEConfigParametersModifyRequestFileRebuildHourly
     * @Group ab0042aa512abc10edb3c55e4b416b0b:33321
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemCPEConfigParametersModifyRequestFileRebuildHourly|null
     */
    private $fileRebuildHourly = null;

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
     * Getter for maxBusyTimeMinutes
     *
     * @return int
     */
    public function getMaxBusyTimeMinutes()
    {
        return $this->maxBusyTimeMinutes instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxBusyTimeMinutes;
    }

    /**
     * Setter for maxBusyTimeMinutes
     *
     * @param int $maxBusyTimeMinutes
     * @return $this
     */
    public function setMaxBusyTimeMinutes($maxBusyTimeMinutes)
    {
        $this->maxBusyTimeMinutes = $maxBusyTimeMinutes;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaxBusyTimeMinutes()
    {
        $this->maxBusyTimeMinutes = null;
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
    public function setDeviceAccessAppServerClusterName($deviceAccessAppServerClusterName = null)
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
     * Getter for fileRebuildImmediate
     *
     * @return string
     */
    public function getFileRebuildImmediate()
    {
        return $this->fileRebuildImmediate instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->fileRebuildImmediate;
    }

    /**
     * Setter for fileRebuildImmediate
     *
     * @param string $fileRebuildImmediate
     * @return $this
     */
    public function setFileRebuildImmediate($fileRebuildImmediate)
    {
        $this->fileRebuildImmediate = $fileRebuildImmediate;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetFileRebuildImmediate()
    {
        $this->fileRebuildImmediate = null;
        return $this;
    }

    /**
     * Getter for fileRebuildDaily
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemCPEConfigParametersModifyRequestFileRebuildDaily
     */
    public function getFileRebuildDaily()
    {
        return $this->fileRebuildDaily instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->fileRebuildDaily;
    }

    /**
     * Setter for fileRebuildDaily
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemCPEConfigParametersModifyRequestFileRebuildDaily $fileRebuildDaily
     * @return $this
     */
    public function setFileRebuildDaily(\CWM\BroadWorksConnector\Ocip\Models\SystemCPEConfigParametersModifyRequestFileRebuildDaily $fileRebuildDaily)
    {
        $this->fileRebuildDaily = $fileRebuildDaily;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetFileRebuildDaily()
    {
        $this->fileRebuildDaily = null;
        return $this;
    }

    /**
     * Getter for fileRebuildHourly
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemCPEConfigParametersModifyRequestFileRebuildHourly
     */
    public function getFileRebuildHourly()
    {
        return $this->fileRebuildHourly instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->fileRebuildHourly;
    }

    /**
     * Setter for fileRebuildHourly
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemCPEConfigParametersModifyRequestFileRebuildHourly $fileRebuildHourly
     * @return $this
     */
    public function setFileRebuildHourly(\CWM\BroadWorksConnector\Ocip\Models\SystemCPEConfigParametersModifyRequestFileRebuildHourly $fileRebuildHourly)
    {
        $this->fileRebuildHourly = $fileRebuildHourly;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetFileRebuildHourly()
    {
        $this->fileRebuildHourly = null;
        return $this;
    }


}

