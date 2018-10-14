<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderAccessDeviceCustomTagDeleteListRequest
 *
 * Request to delete static configuration tags for a service provider access
 * device.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class ServiceProviderAccessDeviceCustomTagDeleteListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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
     * @ElementName tagName
     * @var string[]
     */
    private $tagName = array(
        
    );

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
     * Getter for tagName
     *
     * @ElementName tagName
     * @return string[]
     */
    public function getTagName()
    {
        return $this->tagName;
    }

    /**
     * Setter for tagName
     *
     * @ElementName tagName
     * @param string[] $tagName
     * @return $this
     */
    public function setTagName(array $tagName)
    {
        $this->tagName = $tagName;
        return $this;
    }

    /**
     * Adder for tagName
     *
     * @ElementName tagName
     * @param string $tagName
     * @return $this
     */
    public function addTagName(string $tagName)
    {
        $this->tagName []= $tagName;
        return $this;
    }


}

