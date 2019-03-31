<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupEmergencyZonesGetHomeZoneListResponse
 *
 * Response to GroupEmergencyZonesGetHomeZoneListRequest.
 *
 * @see GroupEmergencyZonesGetHomeZoneListRequest
 * @Groups [{"id":"e71c2205fb31894f87810b330a85ede2:103","type":"sequence"}]
 */
class GroupEmergencyZonesGetHomeZoneListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName homeZoneIpAddress
     * @Type string
     * @Array
     * @Optional
     * @Group e71c2205fb31894f87810b330a85ede2:103
     * @MinLength 1
     * @MaxLength 39
     * @var string[]
     */
    private $homeZoneIpAddress = array(
        
    );

    /**
     * @ElementName homeZoneIpAddressRange
     * @Type \CWM\BroadWorksConnector\Ocip\Models\IPAddressRange
     * @Array
     * @Optional
     * @Group e71c2205fb31894f87810b330a85ede2:103
     * @var \CWM\BroadWorksConnector\Ocip\Models\IPAddressRange[]
     */
    private $homeZoneIpAddressRange = array(
        
    );

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

