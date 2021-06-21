<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemBCCTGetOCIInterfaceAddressListResponse
 *
 * Response to SystemBCCTGetOCIInterfaceAddressListRequest.
 *
 * @see SystemBCCTGetOCIInterfaceAddressListRequest
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:20081","type":"sequence"}]
 */
class SystemBCCTGetOCIInterfaceAddressListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName interfaceNetAddress
     * @Type string
     * @Array
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:20081
     * @MinLength 1
     * @MaxLength 80
     * @var string[]
     */
    private $interfaceNetAddress = array(
        
    );

    /**
     * Getter for interfaceNetAddress
     *
     * @return string[]
     */
    public function getInterfaceNetAddress()
    {
        return $this->interfaceNetAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->interfaceNetAddress;
    }

    /**
     * Setter for interfaceNetAddress
     *
     * @param string[] $interfaceNetAddress
     * @return $this
     */
    public function setInterfaceNetAddress(array $interfaceNetAddress)
    {
        $this->interfaceNetAddress = $interfaceNetAddress;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetInterfaceNetAddress()
    {
        $this->interfaceNetAddress = null;
        return $this;
    }

    /**
     * Adder for interfaceNetAddress
     *
     * @param string $interfaceNetAddress
     * @return $this
     */
    public function addInterfaceNetAddress(string $interfaceNetAddress)
    {
        $this->interfaceNetAddress[] = $interfaceNetAddress;
        return $this;
    }


}

