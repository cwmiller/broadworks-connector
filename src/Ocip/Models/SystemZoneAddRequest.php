<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemZoneAddRequest
 *
 * Add a Zone and optional Net Addresses and Physical Locations.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SystemZoneAddRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName zoneName
     * @var string|null
     */
    private $zoneName = null;

    /**
     * @ElementName netAddress
     * @var string[]
     */
    private $netAddress = array(
        
    );

    /**
     * @ElementName netAddressRange
     * @var \CWM\BroadWorksConnector\Ocip\Models\IPAddressRange[]
     */
    private $netAddressRange = array(
        
    );

    /**
     * @ElementName locationBasedPhysicalLocation
     * @var string[]
     */
    private $locationBasedPhysicalLocation = array(
        
    );

    /**
     * @ElementName callingZonePhysicalLocation
     * @var string|null
     */
    private $callingZonePhysicalLocation = null;

    /**
     * Getter for zoneName
     *
     * @ElementName zoneName
     * @return string|null
     */
    public function getZoneName()
    {
        return $this->zoneName;
    }

    /**
     * Setter for zoneName
     *
     * @ElementName zoneName
     * @param string|null $zoneName
     * @return $this
     */
    public function setZoneName($zoneName)
    {
        $this->zoneName = $zoneName;
        return $this;
    }

    /**
     * Getter for netAddress
     *
     * @ElementName netAddress
     * @return string[]
     */
    public function getNetAddress()
    {
        return $this->netAddress;
    }

    /**
     * Setter for netAddress
     *
     * @ElementName netAddress
     * @param string[] $netAddress
     * @return $this
     */
    public function setNetAddress(array $netAddress)
    {
        $this->netAddress = $netAddress;
        return $this;
    }

    /**
     * Adder for netAddress
     *
     * @ElementName netAddress
     * @param string $netAddress
     * @return $this
     */
    public function addNetAddress(string $netAddress)
    {
        $this->netAddress []= $netAddress;
        return $this;
    }

    /**
     * Getter for netAddressRange
     *
     * @ElementName netAddressRange
     * @return \CWM\BroadWorksConnector\Ocip\Models\IPAddressRange[]
     */
    public function getNetAddressRange()
    {
        return $this->netAddressRange;
    }

    /**
     * Setter for netAddressRange
     *
     * @ElementName netAddressRange
     * @param \CWM\BroadWorksConnector\Ocip\Models\IPAddressRange[] $netAddressRange
     * @return $this
     */
    public function setNetAddressRange(array $netAddressRange)
    {
        $this->netAddressRange = $netAddressRange;
        return $this;
    }

    /**
     * Adder for netAddressRange
     *
     * @ElementName netAddressRange
     * @param \CWM\BroadWorksConnector\Ocip\Models\IPAddressRange $netAddressRange
     * @return $this
     */
    public function addNetAddressRange($netAddressRange)
    {
        $this->netAddressRange []= $netAddressRange;
        return $this;
    }

    /**
     * Getter for locationBasedPhysicalLocation
     *
     * @ElementName locationBasedPhysicalLocation
     * @return string[]
     */
    public function getLocationBasedPhysicalLocation()
    {
        return $this->locationBasedPhysicalLocation;
    }

    /**
     * Setter for locationBasedPhysicalLocation
     *
     * @ElementName locationBasedPhysicalLocation
     * @param string[] $locationBasedPhysicalLocation
     * @return $this
     */
    public function setLocationBasedPhysicalLocation(array $locationBasedPhysicalLocation)
    {
        $this->locationBasedPhysicalLocation = $locationBasedPhysicalLocation;
        return $this;
    }

    /**
     * Adder for locationBasedPhysicalLocation
     *
     * @ElementName locationBasedPhysicalLocation
     * @param string $locationBasedPhysicalLocation
     * @return $this
     */
    public function addLocationBasedPhysicalLocation(string $locationBasedPhysicalLocation)
    {
        $this->locationBasedPhysicalLocation []= $locationBasedPhysicalLocation;
        return $this;
    }

    /**
     * Getter for callingZonePhysicalLocation
     *
     * @ElementName callingZonePhysicalLocation
     * @return string|null
     */
    public function getCallingZonePhysicalLocation()
    {
        return $this->callingZonePhysicalLocation;
    }

    /**
     * Setter for callingZonePhysicalLocation
     *
     * @ElementName callingZonePhysicalLocation
     * @param string|null $callingZonePhysicalLocation
     * @return $this
     */
    public function setCallingZonePhysicalLocation($callingZonePhysicalLocation)
    {
        $this->callingZonePhysicalLocation = $callingZonePhysicalLocation;
        return $this;
    }


}

