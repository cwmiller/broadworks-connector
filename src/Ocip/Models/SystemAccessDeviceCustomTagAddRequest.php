<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAccessDeviceCustomTagAddRequest
 *
 * Request to add a static configuration tag for a system access device.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemAccessDeviceCustomTagAddRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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
     * @var string|null
     */
    private $tagValue = null;

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
     * @return string|null
     */
    public function getTagValue()
    {
        return $this->tagValue;
    }

    /**
     * Setter for tagValue
     *
     * @ElementName tagValue
     * @param string|null $tagValue
     * @return $this
     */
    public function setTagValue($tagValue)
    {
        $this->tagValue = $tagValue;
        return $this;
    }


}

