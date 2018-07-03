<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAccountingDeleteChargingFunctionElementServerRequest
 *
 * Request to delete a ChargingFunctionElementServer from the system.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SystemAccountingDeleteChargingFunctionElementServerRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName address
     * @var string|null
     */
    private $address = null;

    /**
     * Getter for address
     *
     * @ElementName address
     * @return string|null
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Setter for address
     *
     * @ElementName address
     * @param string|null $address
     * @return $this
     */
    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }


}

