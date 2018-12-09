<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderDeviceTypeCustomTagModifyRequest
 *
 * Request to modify a static configuration tag for an access device type used in a service provider.
 *
 *         The tagValueToEncrypt element can only be used by a system administrator.
 *         
 *         The following elements are only used in XS data mode and ignored in AS data mode:
 *           tagValueToEncrypt
 *           
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"8eb862aea0ee5d4211db0a0d3fe7c164:2498","type":"sequence","children":[{"id":"8eb862aea0ee5d4211db0a0d3fe7c164:2502","type":"choice"}]}]
 */
class ServiceProviderDeviceTypeCustomTagModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 8eb862aea0ee5d4211db0a0d3fe7c164:2498
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName deviceType
     * @Type string
     * @Group 8eb862aea0ee5d4211db0a0d3fe7c164:2498
     * @var string|null
     */
    private $deviceType = null;

    /**
     * @ElementName tagName
     * @Type string
     * @Group 8eb862aea0ee5d4211db0a0d3fe7c164:2498
     * @var string|null
     */
    private $tagName = null;

    /**
     * @ElementName tagValue
     * @Type string
     * @Nillable
     * @Optional
     * @Group 8eb862aea0ee5d4211db0a0d3fe7c164:2502
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $tagValue = null;

    /**
     * @ElementName tagValueToEncrypt
     * @Type string
     * @Nillable
     * @Optional
     * @Group 8eb862aea0ee5d4211db0a0d3fe7c164:2502
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $tagValueToEncrypt = null;

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
     * Getter for tagValue
     *
     * @return string|null
     */
    public function getTagValue()
    {
        return $this->tagValue instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->tagValue;
    }

    /**
     * Setter for tagValue
     *
     * @param string|null $tagValue
     * @return $this
     */
    public function setTagValue($tagValue)
    {
        if ($tagValue === null) {
            $this->tagValue = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->tagValue = $tagValue;
        }
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
     * @return string|null
     */
    public function getTagValueToEncrypt()
    {
        return $this->tagValueToEncrypt instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->tagValueToEncrypt;
    }

    /**
     * Setter for tagValueToEncrypt
     *
     * @param string|null $tagValueToEncrypt
     * @return $this
     */
    public function setTagValueToEncrypt($tagValueToEncrypt)
    {
        if ($tagValueToEncrypt === null) {
            $this->tagValueToEncrypt = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->tagValueToEncrypt = $tagValueToEncrypt;
        }
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

