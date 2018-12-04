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
 * @Groups [{"id":"1a79c7896cb04feac6eff47a5321756e:17483","type":"sequence"}]
 */
class SystemBCCTAddOCIInterfaceAddressRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName interfaceNetAddress
     * @Type string
     * @Group 1a79c7896cb04feac6eff47a5321756e:17483
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

