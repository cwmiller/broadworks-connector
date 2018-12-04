<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCPEConfigParametersGetResponse14sp6
 *
 * Response to SystemCPEConfigParametersGetListRequest14sp6.
 *         Contains a list of system CPE Config parameters.
 *         
 *         Replaced by: SystemCPEConfigParametersGetResponse20
 *
 * @see SystemCPEConfigParametersGetListRequest14sp6
 * @see SystemCPEConfigParametersGetResponse20
 * @Groups [{"id":"1a79c7896cb04feac6eff47a5321756e:21325","type":"sequence","children":[{"id":"1a79c7896cb04feac6eff47a5321756e:21332","type":"choice","children":[{"id":"1a79c7896cb04feac6eff47a5321756e:21337","type":"sequence"},{"id":"1a79c7896cb04feac6eff47a5321756e:21346","type":"sequence"}]}]}]
 */
class SystemCPEConfigParametersGetResponse14sp6 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName enableIPDeviceManagement
     * @Type bool
     * @Group 1a79c7896cb04feac6eff47a5321756e:21325
     * @var bool|null
     */
    private $enableIPDeviceManagement = null;

    /**
     * @ElementName ftpConnectTimeoutSeconds
     * @Type int
     * @Group 1a79c7896cb04feac6eff47a5321756e:21325
     * @var int|null
     */
    private $ftpConnectTimeoutSeconds = null;

    /**
     * @ElementName ftpFileTransferTimeoutSeconds
     * @Type int
     * @Group 1a79c7896cb04feac6eff47a5321756e:21325
     * @var int|null
     */
    private $ftpFileTransferTimeoutSeconds = null;

    /**
     * @ElementName pauseBetweenFileRebuildMilliseconds
     * @Type int
     * @Group 1a79c7896cb04feac6eff47a5321756e:21325
     * @var int|null
     */
    private $pauseBetweenFileRebuildMilliseconds = null;

    /**
     * @ElementName maxBusyTimeMinutes
     * @Type int
     * @Group 1a79c7896cb04feac6eff47a5321756e:21325
     * @var int|null
     */
    private $maxBusyTimeMinutes = null;

    /**
     * @ElementName deviceAccessAppServerClusterName
     * @Type string
     * @Optional
     * @Group 1a79c7896cb04feac6eff47a5321756e:21325
     * @var string|null
     */
    private $deviceAccessAppServerClusterName = null;

    /**
     * @ElementName fileRebuildImmediate
     * @Type string
     * @Group 1a79c7896cb04feac6eff47a5321756e:21332
     * @var string|null
     */
    private $fileRebuildImmediate = null;

    /**
     * @ElementName fileRebuildDaily
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemCPEConfigParametersGetResponse14sp6FileRebuildDaily
     * @Group 1a79c7896cb04feac6eff47a5321756e:21332
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemCPEConfigParametersGetResponse14sp6FileRebuildDaily|null
     */
    private $fileRebuildDaily = null;

    /**
     * @ElementName fileRebuildHourly
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemCPEConfigParametersGetResponse14sp6FileRebuildHourly
     * @Group 1a79c7896cb04feac6eff47a5321756e:21332
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemCPEConfigParametersGetResponse14sp6FileRebuildHourly|null
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
     * @return string
     */
    public function getDeviceAccessAppServerClusterName()
    {
        return $this->deviceAccessAppServerClusterName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deviceAccessAppServerClusterName;
    }

    /**
     * Setter for deviceAccessAppServerClusterName
     *
     * @param string $deviceAccessAppServerClusterName
     * @return $this
     */
    public function setDeviceAccessAppServerClusterName($deviceAccessAppServerClusterName)
    {
        $this->deviceAccessAppServerClusterName = $deviceAccessAppServerClusterName;
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemCPEConfigParametersGetResponse14sp6FileRebuildDaily
     */
    public function getFileRebuildDaily()
    {
        return $this->fileRebuildDaily instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->fileRebuildDaily;
    }

    /**
     * Setter for fileRebuildDaily
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemCPEConfigParametersGetResponse14sp6FileRebuildDaily $fileRebuildDaily
     * @return $this
     */
    public function setFileRebuildDaily(\CWM\BroadWorksConnector\Ocip\Models\SystemCPEConfigParametersGetResponse14sp6FileRebuildDaily $fileRebuildDaily)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemCPEConfigParametersGetResponse14sp6FileRebuildHourly
     */
    public function getFileRebuildHourly()
    {
        return $this->fileRebuildHourly instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->fileRebuildHourly;
    }

    /**
     * Setter for fileRebuildHourly
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemCPEConfigParametersGetResponse14sp6FileRebuildHourly $fileRebuildHourly
     * @return $this
     */
    public function setFileRebuildHourly(\CWM\BroadWorksConnector\Ocip\Models\SystemCPEConfigParametersGetResponse14sp6FileRebuildHourly $fileRebuildHourly)
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

