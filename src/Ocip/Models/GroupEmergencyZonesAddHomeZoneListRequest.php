<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupEmergencyZonesAddHomeZoneListRequest
 *
 * Add a list of home zones and/or home zone ranges to the group.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupEmergencyZonesAddHomeZoneListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @var string|null
     */
    private $groupId = null;

    /**
     * @ElementName homeZoneIpAddress
     * @var string[]
     */
    private $homeZoneIpAddress = array(
        
    );

    /**
     * @ElementName homeZoneIpAddressRange
     * @var \CWM\BroadWorksConnector\Ocip\Models\IPAddressRange[]
     */
    private $homeZoneIpAddressRange = array(
        
    );

    /**
     * Getter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @return string|null
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @param string|null $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * Getter for groupId
     *
     * @ElementName groupId
     * @return string|null
     */
    public function getGroupId()
    {
        return $this->groupId;
    }

    /**
     * Setter for groupId
     *
     * @ElementName groupId
     * @param string|null $groupId
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
        return $this;
    }

    /**
     * Getter for homeZoneIpAddress
     *
     * @ElementName homeZoneIpAddress
     * @return string[]
     */
    public function getHomeZoneIpAddress()
    {
        return $this->homeZoneIpAddress;
    }

    /**
     * Setter for homeZoneIpAddress
     *
     * @ElementName homeZoneIpAddress
     * @param string[] $homeZoneIpAddress
     * @return $this
     */
    public function setHomeZoneIpAddress($homeZoneIpAddress)
    {
        $this->homeZoneIpAddress = $homeZoneIpAddress;
        return $this;
    }

    /**
     * Adder for homeZoneIpAddress
     *
     * @ElementName homeZoneIpAddress
     * @param string $homeZoneIpAddress
     * @return $this
     */
    public function addHomeZoneIpAddress($homeZoneIpAddress)
    {
        $this->homeZoneIpAddress []= $homeZoneIpAddress;
        return $this;
    }

    /**
     * Getter for homeZoneIpAddressRange
     *
     * @ElementName homeZoneIpAddressRange
     * @return \CWM\BroadWorksConnector\Ocip\Models\IPAddressRange[]
     */
    public function getHomeZoneIpAddressRange()
    {
        return $this->homeZoneIpAddressRange;
    }

    /**
     * Setter for homeZoneIpAddressRange
     *
     * @ElementName homeZoneIpAddressRange
     * @param \CWM\BroadWorksConnector\Ocip\Models\IPAddressRange[] $homeZoneIpAddressRange
     * @return $this
     */
    public function setHomeZoneIpAddressRange($homeZoneIpAddressRange)
    {
        $this->homeZoneIpAddressRange = $homeZoneIpAddressRange;
        return $this;
    }

    /**
     * Adder for homeZoneIpAddressRange
     *
     * @ElementName homeZoneIpAddressRange
     * @param \CWM\BroadWorksConnector\Ocip\Models\IPAddressRange $homeZoneIpAddressRange
     * @return $this
     */
    public function addHomeZoneIpAddressRange($homeZoneIpAddressRange)
    {
        $this->homeZoneIpAddressRange []= $homeZoneIpAddressRange;
        return $this;
    }


}

