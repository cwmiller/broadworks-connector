<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderAccessDeviceCustomTagAddRequest
 *
 * Request to add a static configuration tag for a service provider access device.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"f1088f4c5ceb30d524d2ba0f8097c393:322","type":"sequence"}]
 */
class ServiceProviderAccessDeviceCustomTagAddRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:322
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName deviceName
     * @Type string
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:322
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    private $deviceName = null;

    /**
     * @ElementName tagName
     * @Type string
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:322
     * @MinLength 1
     * @MaxLength 64
     * @var string|null
     */
    private $tagName = null;

    /**
     * @ElementName tagValue
     * @Type string
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:322
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    private $tagValue = null;

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
     * Getter for tagName
     *
     * @return string
     */
    public function getTagName()
    {
        return $this->tagName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->tagName;
    }

    /**
     * Setter for tagName
     *
     * @param string $tagName
     * @return $this
     */
    public function setTagName($tagName)
    {
        $this->tagName = $tagName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTagName()
    {
        $this->tagName = null;
        return $this;
    }

    /**
     * Getter for tagValue
     *
     * @return string
     */
    public function getTagValue()
    {
        return $this->tagValue instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->tagValue;
    }

    /**
     * Setter for tagValue
     *
     * @param string $tagValue
     * @return $this
     */
    public function setTagValue($tagValue)
    {
        $this->tagValue = $tagValue;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTagValue()
    {
        $this->tagValue = null;
        return $this;
    }


}

