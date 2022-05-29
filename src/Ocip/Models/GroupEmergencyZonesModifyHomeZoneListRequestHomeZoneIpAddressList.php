<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupEmergencyZonesModifyHomeZoneListRequestHomeZoneIpAddressList
 *
 * @Groups [{"id":"e71c2205fb31894f87810b330a85ede2:162","type":"sequence"}]
 */
class GroupEmergencyZonesModifyHomeZoneListRequestHomeZoneIpAddressList
{

    /**
     * @ElementName homeZoneIpAddress
     * @Type string
     * @Group e71c2205fb31894f87810b330a85ede2:162
     * @MinLength 1
     * @MaxLength 39
     * @var string|null
     */
    protected $homeZoneIpAddress = null;

    /**
     * @ElementName newHomeZoneIpAddress
     * @Type string
     * @Group e71c2205fb31894f87810b330a85ede2:162
     * @MinLength 1
     * @MaxLength 39
     * @var string|null
     */
    protected $newHomeZoneIpAddress = null;

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

