<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupEmergencyZonesModifyHomeZoneListRequestHomeZoneIpAddressList
 */
class GroupEmergencyZonesModifyHomeZoneListRequestHomeZoneIpAddressList
{

    /**
     * @ElementName homeZoneIpAddress
     * @Type string
     * @var string|null
     */
    private $homeZoneIpAddress = null;

    /**
     * @ElementName newHomeZoneIpAddress
     * @Type string
     * @var string|null
     */
    private $newHomeZoneIpAddress = null;

    /**
     * Getter for homeZoneIpAddress
     *
     * @return string
     */
    public function getHomeZoneIpAddress()
    {
        return $this->homeZoneIpAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->homeZoneIpAddress;
    }

    /**
     * Setter for homeZoneIpAddress
     *
     * @param string $homeZoneIpAddress
     * @return $this
     */
    public function setHomeZoneIpAddress($homeZoneIpAddress)
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
     * Getter for newHomeZoneIpAddress
     *
     * @return string
     */
    public function getNewHomeZoneIpAddress()
    {
        return $this->newHomeZoneIpAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->newHomeZoneIpAddress;
    }

    /**
     * Setter for newHomeZoneIpAddress
     *
     * @param string $newHomeZoneIpAddress
     * @return $this
     */
    public function setNewHomeZoneIpAddress($newHomeZoneIpAddress)
    {
        $this->newHomeZoneIpAddress = $newHomeZoneIpAddress;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNewHomeZoneIpAddress()
    {
        $this->newHomeZoneIpAddress = null;
        return $this;
    }


}

