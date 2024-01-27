<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemZoneNetAddressGetListResponse
 *
 * Response to SystemZoneNetAddressGetListRequest.
 *
 * @see SystemZoneNetAddressGetListRequest
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:20146","type":"sequence"}]
 */
class SystemZoneNetAddressGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName netAddress
     * @Type string
     * @Array
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:20146
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
     * @Group da582a1f8028404e70d260cf1f891033:20146
     * @var \CWM\BroadWorksConnector\Ocip\Models\IPAddressRange[]
     */
    protected $netAddressRange = [
        
    ];

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

