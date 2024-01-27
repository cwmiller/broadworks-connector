<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderAccessDeviceGetLinkedLeafDeviceListRequest22
 *
 * Requests the list of linked leaf devices for the service provider level tree device passed in the request.
 *         A tree device is a device associated with a device type that has the option 
 *         supportLinks set to "Support Links from Devices". Many leaf devices can be linked to it.
 *         A leaf device is a device associated with a device type that has the option
 *         supportLinks set to "Support Link to Device" or "Support Link to Device and User".  It can 
 *         be linked to only one tree device.
 *         The list includes devices created at the system, service provider, and group levels.
 *         If the leafDeviceCategory is not set in the request, then linked leaf devices of all categories are requested, otherwise only the linked leaf devices of the specified category are requested.
 *         The category values are: "Handset", "Base Station", "All".
 *
 *         The response is either ServiceProviderAccessDeviceGetLinkedLeafDeviceListResponse22 or
 *         ErrorResponse.
 *
 * @see ServiceProviderAccessDeviceGetLinkedLeafDeviceListResponse22
 * @see ErrorResponse
 * @Groups [{"id":"e19a9072c2dad499e9f28837da5768db:750","type":"sequence"}]
 */
class ServiceProviderAccessDeviceGetLinkedLeafDeviceListRequest22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group e19a9072c2dad499e9f28837da5768db:750
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName deviceName
     * @Type string
     * @Group e19a9072c2dad499e9f28837da5768db:750
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $deviceName = null;

    /**
     * @ElementName leafDeviceCategory
     * @Type \CWM\BroadWorksConnector\Ocip\Models\LeafDeviceCategory
     * @Optional
     * @Group e19a9072c2dad499e9f28837da5768db:750
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

