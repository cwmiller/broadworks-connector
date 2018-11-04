<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAccessDeviceCustomTagModifyRequest
 *
 * Request to modify a static configuration tag for a system access device.
 *
 *         The following elements are only used in XS data mode and ignored in AS
 * data mode:
 *           tagValueToEncrypt
 *           
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SystemAccessDeviceCustomTagModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName deviceName
     * @var string|null
     */
    private $deviceName = null;

    /**
     * @ElementName tagName
     * @var string|null
     */
    private $tagName = null;

    /**
     * @ElementName tagValue
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $tagValue = null;

    /**
     * @ElementName tagValueToEncrypt
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $tagValueToEncrypt = null;

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
     * @return string|null
     */
    public function getTagName()
    {
        return $this->tagName;
    }

    /**
     * Setter for tagName
     *
     * @ElementName tagName
     * @param string|null $tagName
     * @return $this
     */
    public function setTagName($tagName)
    {
        $this->tagName = $tagName;
        return $this;
    }

    /**
     * Getter for tagValue
     *
     * @ElementName tagValue
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getTagValue()
    {
        return $this->tagValue;
    }

    /**
     * Setter for tagValue
     *
     * @ElementName tagValue
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $tagValue
     * @return $this
     */
    public function setTagValue($tagValue)
    {
        $this->tagValue = $tagValue;
        return $this;
    }

    /**
     * Getter for tagValueToEncrypt
     *
     * @ElementName tagValueToEncrypt
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getTagValueToEncrypt()
    {
        return $this->tagValueToEncrypt;
    }

    /**
     * Setter for tagValueToEncrypt
     *
     * @ElementName tagValueToEncrypt
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $tagValueToEncrypt
     * @return $this
     */
    public function setTagValueToEncrypt($tagValueToEncrypt)
    {
        $this->tagValueToEncrypt = $tagValueToEncrypt;
        return $this;
    }


}

