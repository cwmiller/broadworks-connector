<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupEmergencyZonesModifyHomeZoneListRequestHomeZoneIpAddressList
 */
class GroupEmergencyZonesModifyHomeZoneListRequestHomeZoneIpAddressList
{

    /**
     * @ElementName homeZoneIpAddress
     * @var string|null
     */
    private $homeZoneIpAddress = null;

    /**
     * @ElementName newHomeZoneIpAddress
     * @var string|null
     */
    private $newHomeZoneIpAddress = null;

    /**
     * Getter for homeZoneIpAddress
     *
     * @ElementName homeZoneIpAddress
     * @return string|null
     */
    public function getHomeZoneIpAddress()
    {
        return $this->homeZoneIpAddress;
    }

    /**
     * Setter for homeZoneIpAddress
     *
     * @ElementName homeZoneIpAddress
     * @param string|null $homeZoneIpAddress
     * @return $this
     */
    public function setHomeZoneIpAddress($homeZoneIpAddress)
    {
        $this->homeZoneIpAddress = $homeZoneIpAddress;
        return $this;
    }

    /**
     * Getter for newHomeZoneIpAddress
     *
     * @ElementName newHomeZoneIpAddress
     * @return string|null
     */
    public function getNewHomeZoneIpAddress()
    {
        return $this->newHomeZoneIpAddress;
    }

    /**
     * Setter for newHomeZoneIpAddress
     *
     * @ElementName newHomeZoneIpAddress
     * @param string|null $newHomeZoneIpAddress
     * @return $this
     */
    public function setNewHomeZoneIpAddress($newHomeZoneIpAddress)
    {
        $this->newHomeZoneIpAddress = $newHomeZoneIpAddress;
        return $this;
    }


}

