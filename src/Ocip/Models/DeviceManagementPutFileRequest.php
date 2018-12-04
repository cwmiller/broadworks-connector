<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * DeviceManagementPutFileRequest
 *
 * Informs BroadWorks that a file was uploaded to the repository. The response is always a SuccessResponse.
 *
 * @see SuccessResponse
 * @Groups [{"id":"d83be92ebac098705e715f24f025a9a9:199","type":"sequence"}]
 */
class DeviceManagementPutFileRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName deviceAccessURI
     * @Type string
     * @Group d83be92ebac098705e715f24f025a9a9:199
     * @var string|null
     */
    private $deviceAccessURI = null;

    /**
     * @ElementName ipAddress
     * @Type string
     * @Group d83be92ebac098705e715f24f025a9a9:199
     * @var string|null
     */
    private $ipAddress = null;

    /**
     * Getter for deviceAccessURI
     *
     * @return string
     */
    public function getDeviceAccessURI()
    {
        return $this->deviceAccessURI instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deviceAccessURI;
    }

    /**
     * Setter for deviceAccessURI
     *
     * @param string $deviceAccessURI
     * @return $this
     */
    public function setDeviceAccessURI($deviceAccessURI)
    {
        $this->deviceAccessURI = $deviceAccessURI;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDeviceAccessURI()
    {
        $this->deviceAccessURI = null;
        return $this;
    }

    /**
     * Getter for ipAddress
     *
     * @return string
     */
    public function getIpAddress()
    {
        return $this->ipAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->ipAddress;
    }

    /**
     * Setter for ipAddress
     *
     * @param string $ipAddress
     * @return $this
     */
    public function setIpAddress($ipAddress)
    {
        $this->ipAddress = $ipAddress;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIpAddress()
    {
        $this->ipAddress = null;
        return $this;
    }


}

