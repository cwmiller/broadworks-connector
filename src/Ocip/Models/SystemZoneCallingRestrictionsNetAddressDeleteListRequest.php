<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemZoneCallingRestrictionsNetAddressDeleteListRequest
 *
 * Deletes a list of IP addresses from a zone
 *         The response is SuccessResponse or an ErrorResponse.
 *         Replaced by: SystemZoneNetAddressDeleteListRequest
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @see SystemZoneNetAddressDeleteListRequest
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:39904","type":"sequence"}]
 */
class SystemZoneCallingRestrictionsNetAddressDeleteListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName zoneName
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:39904
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $zoneName = null;

    /**
     * @ElementName netAddress
     * @Type string
     * @Array
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:39904
     * @MinLength 1
     * @MaxLength 39
     * @var string[]
     */
    protected $netAddress = [
        
    ];

    /**
     * @ElementName netAddressRange
     * @Type \CWM\BroadWorksConnector\Ocip\Models\IPAddressRange
     * @Array
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:39904
     * @var \CWM\BroadWorksConnector\Ocip\Models\IPAddressRange[]
     */
    protected $netAddressRange = [
        
    ];

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
}

