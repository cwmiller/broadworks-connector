<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemBCCTAddOCIInterfaceAddressRequest
 *
 * Add an OCI entry to the Broadworks Common Communication Transport (BCCT) protocol to interface mapping table.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:4165","type":"sequence"}]
 */
class SystemBCCTAddOCIInterfaceAddressRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName interfaceNetAddress
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:4165
     * @var string|null
     */
    private $interfaceNetAddress = null;

    /**
     * Getter for interfaceNetAddress
     *
     * @return string
     */
    public function getInterfaceNetAddress()
    {
        return $this->interfaceNetAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->interfaceNetAddress;
    }

    /**
     * Setter for interfaceNetAddress
     *
     * @param string $interfaceNetAddress
     * @return $this
     */
    public function setInterfaceNetAddress($interfaceNetAddress)
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


}

