<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAccessDeviceCustomTagAddOrModifyListRequest
 *
 * Request to add or modify a list of static configuration tag for a system access
 *         device.  If the tag does not exist, it is added.  If the tag exists, its
 *         value is updated.
 *         
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:763","type":"sequence"}]
 */
class SystemAccessDeviceCustomTagAddOrModifyListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName deviceName
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:763
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $deviceName = null;

    /**
     * @ElementName tag
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementTag
     * @Array
     * @Group da582a1f8028404e70d260cf1f891033:763
     * @var \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementTag[]
     */
    protected $tag = [
        
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
     * Getter for tag
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementTag[]
     */
    public function getTag()
    {
        return $this->tag instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->tag;
    }

    /**
     * Setter for tag
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementTag[] $tag
     * @return $this
     */
    public function setTag(array $tag)
    {
        $this->tag = $tag;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTag()
    {
        $this->tag = null;
        return $this;
    }

    /**
     * Adder for tag
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\DeviceManagementTag $tag
     * @return $this
     */
    public function addTag($tag)
    {
        $this->tag[] = $tag;
        return $this;
    }
}

