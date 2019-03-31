<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderDeviceTypeCustomTagDeleteListRequest
 *
 * Request to delete static configuration tags for an access device type used in a service provider.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"f1088f4c5ceb30d524d2ba0f8097c393:2493","type":"sequence"}]
 */
class ServiceProviderDeviceTypeCustomTagDeleteListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:2493
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName deviceType
     * @Type string
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:2493
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    private $deviceType = null;

    /**
     * @ElementName tagName
     * @Type string
     * @Array
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:2493
     * @MinLength 1
     * @MaxLength 64
     * @var string[]
     */
    private $tagName = array(
        
    );

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
     * Getter for deviceType
     *
     * @return string
     */
    public function getDeviceType()
    {
        return $this->deviceType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deviceType;
    }

    /**
     * Setter for deviceType
     *
     * @param string $deviceType
     * @return $this
     */
    public function setDeviceType($deviceType)
    {
        $this->deviceType = $deviceType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDeviceType()
    {
        $this->deviceType = null;
        return $this;
    }

    /**
     * Getter for tagName
     *
     * @return string[]
     */
    public function getTagName()
    {
        return $this->tagName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->tagName;
    }

    /**
     * Setter for tagName
     *
     * @param string[] $tagName
     * @return $this
     */
    public function setTagName(array $tagName)
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
     * Adder for tagName
     *
     * @param string $tagName
     * @return $this
     */
    public function addTagName(string $tagName)
    {
        $this->tagName[] = $tagName;
        return $this;
    }


}

