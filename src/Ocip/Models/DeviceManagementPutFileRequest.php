<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * DeviceManagementPutFileRequest
 *
 * Informs BroadWorks that a file was uploaded to the repository. The response is
 * always a SuccessResponse.
 */
class DeviceManagementPutFileRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName deviceAccessURI
     * @var string|null
     */
    private $deviceAccessURI = null;

    /**
     * @ElementName ipAddress
     * @var string|null
     */
    private $ipAddress = null;

    /**
     * Getter for deviceAccessURI
     *
     * @ElementName deviceAccessURI
     * @return string|null
     */
    public function getDeviceAccessURI()
    {
        return $this->deviceAccessURI;
    }

    /**
     * Setter for deviceAccessURI
     *
     * @ElementName deviceAccessURI
     * @param string|null $deviceAccessURI
     * @return $this
     */
    public function setDeviceAccessURI($deviceAccessURI)
    {
        $this->deviceAccessURI = $deviceAccessURI;
        return $this;
    }

    /**
     * Getter for ipAddress
     *
     * @ElementName ipAddress
     * @return string|null
     */
    public function getIpAddress()
    {
        return $this->ipAddress;
    }

    /**
     * Setter for ipAddress
     *
     * @ElementName ipAddress
     * @param string|null $ipAddress
     * @return $this
     */
    public function setIpAddress($ipAddress)
    {
        $this->ipAddress = $ipAddress;
        return $this;
    }


}

