<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemBCCTGetOCIInterfaceAddressListResponse
 *
 * Response to SystemBCCTGetOCIInterfaceAddressListRequest.
 */
class SystemBCCTGetOCIInterfaceAddressListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName interfaceNetAddress
     * @var string[]
     */
    private $interfaceNetAddress = array(
        
    );

    /**
     * Getter for interfaceNetAddress
     *
     * @ElementName interfaceNetAddress
     * @return string[]
     */
    public function getInterfaceNetAddress()
    {
        return $this->interfaceNetAddress;
    }

    /**
     * Setter for interfaceNetAddress
     *
     * @ElementName interfaceNetAddress
     * @param string[] $interfaceNetAddress
     * @return $this
     */
    public function setInterfaceNetAddress($interfaceNetAddress)
    {
        $this->interfaceNetAddress = $interfaceNetAddress;
        return $this;
    }

    /**
     * Adder for interfaceNetAddress
     *
     * @ElementName interfaceNetAddress
     * @param string $interfaceNetAddress
     * @return $this
     */
    public function addInterfaceNetAddress($interfaceNetAddress)
    {
        $this->interfaceNetAddress []= $interfaceNetAddress;
        return $this;
    }


}

