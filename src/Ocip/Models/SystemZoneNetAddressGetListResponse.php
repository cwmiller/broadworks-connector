<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemZoneNetAddressGetListResponse
 *
 * Response to SystemZoneNetAddressGetListRequest.
 */
class SystemZoneNetAddressGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

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

