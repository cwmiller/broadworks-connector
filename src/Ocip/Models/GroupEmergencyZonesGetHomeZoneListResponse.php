<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupEmergencyZonesGetHomeZoneListResponse
 *
 * Response to GroupEmergencyZonesGetHomeZoneListRequest.
 *
 * @see GroupEmergencyZonesGetHomeZoneListRequest
 */
class GroupEmergencyZonesGetHomeZoneListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

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

