<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupEmergencyZonesGetHomeZoneListResponse
 *
 * Response to GroupEmergencyZonesGetHomeZoneListRequest.
 *
 * @see GroupEmergencyZonesGetHomeZoneListRequest
 * @Groups [{"id":"993492ea5726d0f3ec8743f5cef40e23:103","type":"sequence"}]
 */
class GroupEmergencyZonesGetHomeZoneListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName homeZoneIpAddress
     * @Type string
     * @Array
     * @Optional
     * @Group 993492ea5726d0f3ec8743f5cef40e23:103
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
     * @Group 993492ea5726d0f3ec8743f5cef40e23:103
     * @var \CWM\BroadWorksConnector\Ocip\Models\IPAddressRange[]
     */
    protected $homeZoneIpAddressRange = [
        
    ];

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

