<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemBCCTGetOCIInterfaceAddressListResponse
 *
 * Response to SystemBCCTGetOCIInterfaceAddressListRequest.
 *
 * @see SystemBCCTGetOCIInterfaceAddressListRequest
 * @Groups [{"id":"4f0fb68b4d4b3ac50a70eeb01a628dce:17528","type":"sequence"}]
 */
class SystemBCCTGetOCIInterfaceAddressListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName interfaceNetAddress
     * @Type string
     * @Array
     * @Optional
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:17528
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

