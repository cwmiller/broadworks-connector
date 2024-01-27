<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderAccessDeviceFileGetRequest
 *
 * Request to get a service provider device profile file.
 *           The response is either ServiceProviderAccessDeviceFileGetResponse or ErrorResponse.
 *           Replaced By: ServiceProviderAccessDeviceFileGetRequest14sp8
 *
 * @see ServiceProviderAccessDeviceFileGetResponse
 * @see ErrorResponse
 * @see ServiceProviderAccessDeviceFileGetRequest14sp8
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:17100","type":"sequence"}]
 */
class ServiceProviderAccessDeviceFileGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:17100
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName deviceName
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:17100
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $deviceName = null;

    /**
     * @ElementName fileType
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:17100
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $fileType = null;

    /**
     * Getter for serviceProviderId
     *
     * @return string
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @param string $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceProviderId()
    {
        $this->serviceProviderId = null;
        return $this;
    }

    /**
     * Getter for deviceName
     *
     * @return string
     */
    public function getDeviceName()
    {
        return $this->deviceName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deviceName;
    }

    /**
     * Setter for deviceName
     *
     * @param string $deviceName
     * @return $this
     */
    public function setDeviceName($deviceName)
    {
        $this->deviceName = $deviceName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDeviceName()
    {
        $this->deviceName = null;
        return $this;
    }

    /**
     * Getter for fileType
     *
     * @return string
     */
    public function getFileType()
    {
        return $this->fileType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->fileType;
    }

    /**
     * Setter for fileType
     *
     * @param string $fileType
     * @return $this
     */
    public function setFileType($fileType)
    {
        $this->fileType = $fileType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetFileType()
    {
        $this->fileType = null;
        return $this;
    }
}

