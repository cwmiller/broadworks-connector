<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAccessDeviceGetLinkedLeafDeviceListRequest22
 *
 * Requests the list of linked leaf devices for the system level tree device passed in the request.
 *         A tree device is a device associated with a device type that has the option 
 *         supportLinks set to "Support Links from Devices". Many leaf devices can be linked to it.
 *         A leaf device is a device associated with a device type that has the option
 *         supportLinks set to "Support Link to Device" or "Support Link to Device and User".  It can 
 *         be linked to only one tree device.
 *         The list includes devices created at the system, service provider, and group levels.
 *         If the leafDeviceCategory is not set in the request, then linked leaf devices of all categories are requested, otherwise only the linked leaf devices of the specified category are requested.
 *         The category values are: "Handset", "Base Station", "All".
 *
 *         The response is either SystemAccessDeviceGetLinkedLeafDeviceListResponse22 or
 *         ErrorResponse.
 *
 * @see SystemAccessDeviceGetLinkedLeafDeviceListResponse22
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:1168","type":"sequence"}]
 */
class SystemAccessDeviceGetLinkedLeafDeviceListRequest22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName deviceName
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:1168
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $deviceName = null;

    /**
     * @ElementName leafDeviceCategory
     * @Type \CWM\BroadWorksConnector\Ocip\Models\LeafDeviceCategory
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:1168
     * @var \CWM\BroadWorksConnector\Ocip\Models\LeafDeviceCategory|null
     */
    protected $leafDeviceCategory = null;

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
     * Getter for leafDeviceCategory
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\LeafDeviceCategory
     */
    public function getLeafDeviceCategory()
    {
        return $this->leafDeviceCategory instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->leafDeviceCategory;
    }

    /**
     * Setter for leafDeviceCategory
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\LeafDeviceCategory $leafDeviceCategory
     * @return $this
     */
    public function setLeafDeviceCategory(\CWM\BroadWorksConnector\Ocip\Models\LeafDeviceCategory $leafDeviceCategory)
    {
        $this->leafDeviceCategory = $leafDeviceCategory;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetLeafDeviceCategory()
    {
        $this->leafDeviceCategory = null;
        return $this;
    }
}

