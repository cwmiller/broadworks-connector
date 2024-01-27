<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupEmergencyZonesDeleteHomeZoneListRequest
 *
 * Delete a list of home zones and/or home zone ranges to the group.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"993492ea5726d0f3ec8743f5cef40e23:68","type":"sequence"}]
 */
class GroupEmergencyZonesDeleteHomeZoneListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 993492ea5726d0f3ec8743f5cef40e23:68
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group 993492ea5726d0f3ec8743f5cef40e23:68
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $groupId = null;

    /**
     * @ElementName homeZoneIpAddress
     * @Type string
     * @Array
     * @Optional
     * @Group 993492ea5726d0f3ec8743f5cef40e23:68
     * @MinLength 1
     * @MaxLength 39
     * @var string[]
     */
    protected $homeZoneIpAddress = [
        
    ];

    /**
     * @ElementName homeZoneIpAddressRange
     * @Type \CWM\BroadWorksConnector\Ocip\Models\IPAddressRange
     * @Array
     * @Optional
     * @Group 993492ea5726d0f3ec8743f5cef40e23:68
     * @var \CWM\BroadWorksConnector\Ocip\Models\IPAddressRange[]
     */
    protected $homeZoneIpAddressRange = [
        
    ];

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
     * Getter for homeZoneIpAddress
     *
     * @return string[]
     */
    public function getHomeZoneIpAddress()
    {
        return $this->homeZoneIpAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->homeZoneIpAddress;
    }

    /**
     * Setter for homeZoneIpAddress
     *
     * @param string[] $homeZoneIpAddress
     * @return $this
     */
    public function setHomeZoneIpAddress(array $homeZoneIpAddress)
    {
        $this->homeZoneIpAddress = $homeZoneIpAddress;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetHomeZoneIpAddress()
    {
        $this->homeZoneIpAddress = null;
        return $this;
    }

    /**
     * Adder for homeZoneIpAddress
     *
     * @param string $homeZoneIpAddress
     * @return $this
     */
    public function addHomeZoneIpAddress(string $homeZoneIpAddress)
    {
        $this->homeZoneIpAddress[] = $homeZoneIpAddress;
        return $this;
    }

    /**
     * Getter for homeZoneIpAddressRange
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\IPAddressRange[]
     */
    public function getHomeZoneIpAddressRange()
    {
        return $this->homeZoneIpAddressRange instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->homeZoneIpAddressRange;
    }

    /**
     * Setter for homeZoneIpAddressRange
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\IPAddressRange[] $homeZoneIpAddressRange
     * @return $this
     */
    public function setHomeZoneIpAddressRange(array $homeZoneIpAddressRange)
    {
        $this->homeZoneIpAddressRange = $homeZoneIpAddressRange;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetHomeZoneIpAddressRange()
    {
        $this->homeZoneIpAddressRange = null;
        return $this;
    }

    /**
     * Adder for homeZoneIpAddressRange
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\IPAddressRange $homeZoneIpAddressRange
     * @return $this
     */
    public function addHomeZoneIpAddressRange($homeZoneIpAddressRange)
    {
        $this->homeZoneIpAddressRange[] = $homeZoneIpAddressRange;
        return $this;
    }
}

