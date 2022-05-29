<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAccessDeviceCustomTagModifyRequest
 *
 * Request to modify a static configuration tag for a group access device.
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
 * @Groups [{"id":"f3a93cf15de4abd7903673e44ee3e07b:483","type":"sequence","children":[{"id":"f3a93cf15de4abd7903673e44ee3e07b:488","type":"choice"}]}]
 */
class GroupAccessDeviceCustomTagModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group f3a93cf15de4abd7903673e44ee3e07b:483
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group f3a93cf15de4abd7903673e44ee3e07b:483
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $groupId = null;

    /**
     * @ElementName deviceName
     * @Type string
     * @Group f3a93cf15de4abd7903673e44ee3e07b:483
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $deviceName = null;

    /**
     * @ElementName tagName
     * @Type string
     * @Group f3a93cf15de4abd7903673e44ee3e07b:483
     * @MinLength 1
     * @MaxLength 64
     * @var string|null
     */
    protected $tagName = null;

    /**
     * @ElementName tagValue
     * @Type string
     * @Nillable
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:488
     * @MinLength 1
     * @MaxLength 256
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $tagValue = null;

    /**
     * @ElementName tagValueToEncrypt
     * @Type string
     * @Nillable
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:488
     * @MinLength 1
     * @MaxLength 256
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
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
     * Getter for groupId
     *
     * @return string
     */
    public function getGroupId()
    {
        return $this->groupId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupId;
    }

    /**
     * Setter for groupId
     *
     * @param string $groupId
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupId()
    {
        $this->groupId = null;
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
    public function setTagValue($tagValue = null)
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
    public function setTagValueToEncrypt($tagValueToEncrypt = null)
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

