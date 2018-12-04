<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupEmergencyZonesModifyHomeZoneListRequestHomeZoneIpAddressList
 *
 * @Groups [{"id":"6692e70a4ddc3776956b67ac9efa1c1a:159","type":"sequence"}]
 */
class GroupEmergencyZonesModifyHomeZoneListRequestHomeZoneIpAddressList
{

    /**
     * @ElementName homeZoneIpAddress
     * @Type string
     * @Group 6692e70a4ddc3776956b67ac9efa1c1a:159
     * @var string|null
     */
    private $homeZoneIpAddress = null;

    /**
     * @ElementName newHomeZoneIpAddress
     * @Type string
     * @Group 6692e70a4ddc3776956b67ac9efa1c1a:159
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

