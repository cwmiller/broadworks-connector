<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupGetAvailableLeafDeviceListRequest22
 *
 * Requests the list of available leaf devices that can be linked to a tree device within a specific group.
 *         A leaf device is a device associated with a device type that has the option
 *         supportLinks set to "Support Link to Device" or "Support Link to Device and User".  It can 
 *         be linked to only one tree device.
 *         The list returned includes devices created at the system, service provider, and group levels.
 *         If the leafDeviceCategory is not set in the request, then linked leaf devices of all categories are requested, otherwise only the linked leaf devices of the specified category are requested.
 *         The category values are: "Handset", "Base Station", "All".
 *
 *         The response is either GroupGetAvailableLeafDeviceListResponse22 or
 *         ErrorResponse.
 *
 * @see GroupGetAvailableLeafDeviceListResponse22
 * @see ErrorResponse
 * @Groups [{"id":"4b0e7857796c636464362260a2f8e5ee:5716","type":"sequence"}]
 */
class GroupGetAvailableLeafDeviceListRequest22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 4b0e7857796c636464362260a2f8e5ee:5716
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group 4b0e7857796c636464362260a2f8e5ee:5716
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $groupId = null;

    /**
     * @ElementName leafDeviceCategory
     * @Type \CWM\BroadWorksConnector\Ocip\Models\LeafDeviceCategory
     * @Optional
     * @Group 4b0e7857796c636464362260a2f8e5ee:5716
     * @var \CWM\BroadWorksConnector\Ocip\Models\LeafDeviceCategory|null
     */
    protected $leafDeviceCategory = null;

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

