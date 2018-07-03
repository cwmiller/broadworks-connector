<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemPreferredCarrierDeleteRequest
 *
 * Delete a carrier from the system.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         An ErrorResponse is returned if the carrier is in use, or if the carrier
 * didn't exist prior to deletion..
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @see ErrorResponse
 */
class SystemPreferredCarrierDeleteRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName carrier
     * @var string|null
     */
    private $carrier = null;

    /**
     * Getter for carrier
     *
     * @ElementName carrier
     * @return string|null
     */
    public function getCarrier()
    {
        return $this->carrier;
    }

    /**
     * Setter for carrier
     *
     * @ElementName carrier
     * @param string|null $carrier
     * @return $this
     */
    public function setCarrier($carrier)
    {
        $this->carrier = $carrier;
        return $this;
    }


}

