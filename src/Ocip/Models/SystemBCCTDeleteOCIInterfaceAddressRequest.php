<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemBCCTDeleteOCIInterfaceAddressRequest
 *
 * Delete an OCI entry in the Broadworks Common Communication Transport (BCCT)
 * protocol to interface mapping table.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemBCCTDeleteOCIInterfaceAddressRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName interfaceNetAddress
     * @var string|null
     */
    private $interfaceNetAddress = null;

    /**
     * Getter for interfaceNetAddress
     *
     * @ElementName interfaceNetAddress
     * @return string|null
     */
    public function getInterfaceNetAddress()
    {
        return $this->interfaceNetAddress;
    }

    /**
     * Setter for interfaceNetAddress
     *
     * @ElementName interfaceNetAddress
     * @param string|null $interfaceNetAddress
     * @return $this
     */
    public function setInterfaceNetAddress($interfaceNetAddress)
    {
        $this->interfaceNetAddress = $interfaceNetAddress;
        return $this;
    }


}

