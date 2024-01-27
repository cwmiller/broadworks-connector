<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCPEConfigParametersGetResponse
 *
 * Response to SystemCPEConfigParametersGetListRequest.
 *         Contains a list of system CPE Config parameters.
 *         Replaced By: SystemCPEConfigParametersGetResponse14sp6
 *
 * @see SystemCPEConfigParametersGetListRequest
 * @see SystemCPEConfigParametersGetResponse14sp6
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:25879","type":"sequence"}]
 */
class SystemCPEConfigParametersGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName enableIPDeviceManagement
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:25879
     * @var bool|null
     */
    protected $enableIPDeviceManagement = null;

    /**
     * @ElementName ftpConnectTimeoutSeconds
     * @Type int
     * @Group d8f04177e438f303b41c211e518706bf:25879
     * @MinInclusive 1
     * @MaxInclusive 600
     * @var int|null
     */
    protected $ftpConnectTimeoutSeconds = null;

    /**
     * @ElementName ftpFileTransferTimeoutSeconds
     * @Type int
     * @Group d8f04177e438f303b41c211e518706bf:25879
     * @MinInclusive 1
     * @MaxInclusive 600
     * @var int|null
     */
    protected $ftpFileTransferTimeoutSeconds = null;

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
}

