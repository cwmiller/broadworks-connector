<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderDeviceTypeCustomTagAddRequest
 *
 * Request to add a static configuration tag for an access device type used in a service provider.
 *         
 *         The following elements are only used in XS data mode:
 *           isTagValueEncrypted, use value "false" in AS data mode
 *           
 *         The following elements are only used in XS data mode and ignored in AS data mode:
 *           tagValueToEncrypt      
 *
 *         The tagValueToEncrypt element can only be used by a system administrator.
 *         
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"f1088f4c5ceb30d524d2ba0f8097c393:3119","type":"sequence","children":[{"id":"f1088f4c5ceb30d524d2ba0f8097c393:3124","type":"choice"}]}]
 */
class ServiceProviderDeviceTypeCustomTagAddRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:3119
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName deviceType
     * @Type string
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:3119
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $deviceType = null;

    /**
     * @ElementName tagName
     * @Type string
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:3119
     * @MinLength 1
     * @MaxLength 64
     * @var string|null
     */
    protected $tagName = null;

    /**
     * @ElementName isTagValueEncrypted
     * @Type bool
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:3119
     * @var bool|null
     */
    protected $isTagValueEncrypted = null;

    /**
     * @ElementName tagValue
     * @Type string
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:3124
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    protected $tagValue = null;

    /**
     * @ElementName tagValueToEncrypt
     * @Type string
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:3124
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    protected $tagValueToEncrypt = null;

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
     * Getter for isTagValueEncrypted
     *
     * @return bool
     */
    public function getIsTagValueEncrypted()
    {
        return $this->isTagValueEncrypted instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isTagValueEncrypted;
    }

    /**
     * Setter for isTagValueEncrypted
     *
     * @param bool $isTagValueEncrypted
     * @return $this
     */
    public function setIsTagValueEncrypted($isTagValueEncrypted)
    {
        $this->isTagValueEncrypted = $isTagValueEncrypted;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsTagValueEncrypted()
    {
        $this->isTagValueEncrypted = null;
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

    /**
     * Getter for tagValueToEncrypt
     *
     * @return string
     */
    public function getTagValueToEncrypt()
    {
        return $this->tagValueToEncrypt instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->tagValueToEncrypt;
    }

    /**
     * Setter for tagValueToEncrypt
     *
     * @param string $tagValueToEncrypt
     * @return $this
     */
    public function setTagValueToEncrypt($tagValueToEncrypt)
    {
        $this->tagValueToEncrypt = $tagValueToEncrypt;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTagValueToEncrypt()
    {
        $this->tagValueToEncrypt = null;
        return $this;
    }


}

