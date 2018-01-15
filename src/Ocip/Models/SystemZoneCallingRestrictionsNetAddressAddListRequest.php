<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemZoneCallingRestrictionsNetAddressAddListRequest
 *
 * Adds a list of IP addresses to a zone
 *         The response is SuccessResponse or an ErrorResponse.
 *         Replaced by: SystemZoneNetAddressAddListRequest
 */
class SystemZoneCallingRestrictionsNetAddressAddListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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
    public function setNetAddress($netAddress)
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
    public function addNetAddress($netAddress)
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
    public function setNetAddressRange($netAddressRange)
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


}

