<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemBCCTGetOCIInterfaceAddressListResponse
 *
 * Response to SystemBCCTGetOCIInterfaceAddressListRequest.
 *
 * @see SystemBCCTGetOCIInterfaceAddressListRequest
 */
class SystemBCCTGetOCIInterfaceAddressListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName interfaceNetAddress
     * @Type string
     * @Array
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

