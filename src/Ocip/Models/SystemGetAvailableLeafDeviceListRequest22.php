<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemGetAvailableLeafDeviceListRequest22
 *
 * Requests the list of available leaf devices that can be linked to a tree device for the entire system.
 *         A leaf device is a device associated with a device type that has the option
 *         supportLinks set to "Support Link to Device" or "Support Link to Device and User".  It can 
 *         be linked to only one tree device.
 *         The list returned includes devices created at the system, service provider, and group levels.
 *         If the leafDeviceCategory is not set in the request, then linked leaf devices of all categories are requested, otherwise only the linked leaf devices of the specified category are requested.
 *         The category values are: "Handset", "Base Station", "All".
 *         The response is either SystemGetAvailableLeafDeviceListResponse22 or
 *         ErrorResponse.
 *
 * @see SystemGetAvailableLeafDeviceListResponse22
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:10761","type":"sequence"}]
 */
class SystemGetAvailableLeafDeviceListRequest22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName leafDeviceCategory
     * @Type \CWM\BroadWorksConnector\Ocip\Models\LeafDeviceCategory
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:10761
     * @var \CWM\BroadWorksConnector\Ocip\Models\LeafDeviceCategory|null
     */
    protected $leafDeviceCategory = null;

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

