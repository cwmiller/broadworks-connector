<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderAccessDeviceFileGetRequest
 *
 * Request to get a service provider device profile file.
 *           The response is either ServiceProviderAccessDeviceFileGetResponse or
 * ErrorResponse.
 *           Replaced By: ServiceProviderAccessDeviceFileGetRequest14sp8
 *
 * @see ServiceProviderAccessDeviceFileGetResponse
 * @see ErrorResponse
 * @see ServiceProviderAccessDeviceFileGetRequest14sp8
 */
class ServiceProviderAccessDeviceFileGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName deviceName
     * @var string|null
     */
    private $deviceName = null;

    /**
     * @ElementName fileType
     * @var string|null
     */
    private $fileType = null;

    /**
     * Getter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @return string|null
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @param string|null $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * Getter for deviceName
     *
     * @ElementName deviceName
     * @return string|null
     */
    public function getDeviceName()
    {
        return $this->deviceName;
    }

    /**
     * Setter for deviceName
     *
     * @ElementName deviceName
     * @param string|null $deviceName
     * @return $this
     */
    public function setDeviceName($deviceName)
    {
        $this->deviceName = $deviceName;
        return $this;
    }

    /**
     * Getter for fileType
     *
     * @ElementName fileType
     * @return string|null
     */
    public function getFileType()
    {
        return $this->fileType;
    }

    /**
     * Setter for fileType
     *
     * @ElementName fileType
     * @param string|null $fileType
     * @return $this
     */
    public function setFileType($fileType)
    {
        $this->fileType = $fileType;
        return $this;
    }


}

