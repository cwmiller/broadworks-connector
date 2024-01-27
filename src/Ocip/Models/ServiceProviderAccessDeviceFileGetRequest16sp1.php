<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderAccessDeviceFileGetRequest16sp1
 *
 * Request to get a service provider device profile file.
 *         The response is either ServiceProviderAccessDeviceFileGetResponse16sp1 or ErrorResponse.
 *         
 *         Replaced by: ServiceProviderAccessDeviceFileGetRequest20
 *
 * @see ServiceProviderAccessDeviceFileGetResponse16sp1
 * @see ErrorResponse
 * @see ServiceProviderAccessDeviceFileGetRequest20
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:17139","type":"sequence"}]
 */
class ServiceProviderAccessDeviceFileGetRequest16sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:17139
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName deviceName
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:17139
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $deviceName = null;

    /**
     * @ElementName fileFormat
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:17139
     * @MinLength 1
     * @MaxLength 128
     * @var string|null
     */
    protected $fileFormat = null;

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
     * Getter for fileFormat
     *
     * @return string
     */
    public function getFileFormat()
    {
        return $this->fileFormat instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->fileFormat;
    }

    /**
     * Setter for fileFormat
     *
     * @param string $fileFormat
     * @return $this
     */
    public function setFileFormat($fileFormat)
    {
        $this->fileFormat = $fileFormat;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetFileFormat()
    {
        $this->fileFormat = null;
        return $this;
    }
}

