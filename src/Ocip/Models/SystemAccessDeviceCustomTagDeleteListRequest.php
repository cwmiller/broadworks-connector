<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAccessDeviceCustomTagDeleteListRequest
 *
 * Request to delete static configuration tags for a system access device.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:798","type":"sequence"}]
 */
class SystemAccessDeviceCustomTagDeleteListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName deviceName
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:798
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $deviceName = null;

    /**
     * @ElementName tagName
     * @Type string
     * @Array
     * @Group da582a1f8028404e70d260cf1f891033:798
     * @MinLength 1
     * @MaxLength 64
     * @var string[]
     */
    protected $tagName = [
        
    ];

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

