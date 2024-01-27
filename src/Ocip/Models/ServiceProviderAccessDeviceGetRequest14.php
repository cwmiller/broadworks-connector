<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderAccessDeviceGetRequest14
 *
 * Requests the configuration of a specified service provider access device.
 *         The response is either ServiceProviderAccessDeviceGetResponse14 or ErrorResponse.
 *         Replaced By: ServiceProviderAccessDeviceGetRequest14sp3
 *
 * @see ServiceProviderAccessDeviceGetResponse14
 * @see ErrorResponse
 * @see ServiceProviderAccessDeviceGetRequest14sp3
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:17276","type":"sequence"}]
 */
class ServiceProviderAccessDeviceGetRequest14 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:17276
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName deviceName
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:17276
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $deviceName = null;

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
}

