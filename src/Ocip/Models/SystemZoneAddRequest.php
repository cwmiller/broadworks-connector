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
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:19599","type":"sequence"}]
 */
class SystemZoneAddRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName zoneName
     * @Type string
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:19599
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    private $zoneName = null;

    /**
     * @ElementName netAddress
     * @Type string
     * @Array
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:19599
     * @MinLength 1
     * @MaxLength 39
     * @var string[]
     */
    private $netAddress = array(
        
    );

    /**
     * @ElementName netAddressRange
     * @Type \CWM\BroadWorksConnector\Ocip\Models\IPAddressRange
     * @Array
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:19599
     * @var \CWM\BroadWorksConnector\Ocip\Models\IPAddressRange[]
     */
    private $netAddressRange = array(
        
    );

    /**
     * @ElementName locationBasedPhysicalLocation
     * @Type string
     * @Array
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:19599
     * @MinLength 1
     * @MaxLength 1024
     * @var string[]
     */
    private $locationBasedPhysicalLocation = array(
        
    );

    /**
     * @ElementName callingZonePhysicalLocation
     * @Type string
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:19599
     * @MinLength 1
     * @MaxLength 1024
     * @var string|null
     */
    private $callingZonePhysicalLocation = null;

    /**
     * Getter for zoneName
     *
     * @return string
     */
    public function getZoneName()
    {
        return $this->zoneName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->zoneName;
    }

    /**
     * Setter for zoneName
     *
     * @param string $zoneName
     * @return $this
     */
    public function setZoneName($zoneName)
    {
        $this->zoneName = $zoneName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetZoneName()
    {
        $this->zoneName = null;
        return $this;
    }

    /**
     * Getter for netAddress
     *
     * @return string[]
     */
    public function getNetAddress()
    {
        return $this->netAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->netAddress;
    }

    /**
     * Setter for netAddress
     *
     * @param string[] $netAddress
     * @return $this
     */
    public function setNetAddress(array $netAddress)
    {
        $this->netAddress = $netAddress;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNetAddress()
    {
        $this->netAddress = null;
        return $this;
    }

    /**
     * Adder for netAddress
     *
     * @param string $netAddress
     * @return $this
     */
    public function addNetAddress(string $netAddress)
    {
        $this->netAddress[] = $netAddress;
        return $this;
    }

    /**
     * Getter for netAddressRange
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\IPAddressRange[]
     */
    public function getNetAddressRange()
    {
        return $this->netAddressRange instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->netAddressRange;
    }

    /**
     * Setter for netAddressRange
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\IPAddressRange[] $netAddressRange
     * @return $this
     */
    public function setNetAddressRange(array $netAddressRange)
    {
        $this->netAddressRange = $netAddressRange;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNetAddressRange()
    {
        $this->netAddressRange = null;
        return $this;
    }

    /**
     * Adder for netAddressRange
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\IPAddressRange $netAddressRange
     * @return $this
     */
    public function addNetAddressRange($netAddressRange)
    {
        $this->netAddressRange[] = $netAddressRange;
        return $this;
    }

    /**
     * Getter for locationBasedPhysicalLocation
     *
     * @return string[]
     */
    public function getLocationBasedPhysicalLocation()
    {
        return $this->locationBasedPhysicalLocation instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->locationBasedPhysicalLocation;
    }

    /**
     * Setter for locationBasedPhysicalLocation
     *
     * @param string[] $locationBasedPhysicalLocation
     * @return $this
     */
    public function setLocationBasedPhysicalLocation(array $locationBasedPhysicalLocation)
    {
        $this->locationBasedPhysicalLocation = $locationBasedPhysicalLocation;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetLocationBasedPhysicalLocation()
    {
        $this->locationBasedPhysicalLocation = null;
        return $this;
    }

    /**
     * Adder for locationBasedPhysicalLocation
     *
     * @param string $locationBasedPhysicalLocation
     * @return $this
     */
    public function addLocationBasedPhysicalLocation(string $locationBasedPhysicalLocation)
    {
        $this->locationBasedPhysicalLocation[] = $locationBasedPhysicalLocation;
        return $this;
    }

    /**
     * Getter for callingZonePhysicalLocation
     *
     * @return string
     */
    public function getCallingZonePhysicalLocation()
    {
        return $this->callingZonePhysicalLocation instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callingZonePhysicalLocation;
    }

    /**
     * Setter for callingZonePhysicalLocation
     *
     * @param string $callingZonePhysicalLocation
     * @return $this
     */
    public function setCallingZonePhysicalLocation($callingZonePhysicalLocation)
    {
        $this->callingZonePhysicalLocation = $callingZonePhysicalLocation;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallingZonePhysicalLocation()
    {
        $this->callingZonePhysicalLocation = null;
        return $this;
    }


}

