<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemPreferredCarrierDeleteRequest
 *
 * Delete a carrier from the system.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         An ErrorResponse is returned if the carrier is in use, or if the carrier didn't exist prior to deletion..
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @see ErrorResponse
 * @Groups [{"id":"31dec625cdd18e8228eb61ffb34ddc0e:341","type":"sequence"}]
 */
class SystemPreferredCarrierDeleteRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName carrier
     * @Type string
     * @Group 31dec625cdd18e8228eb61ffb34ddc0e:341
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $carrier = null;

    /**
     * Getter for carrier
     *
     * @return string
     */
    public function getCarrier()
    {
        return $this->carrier instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->carrier;
    }

    /**
     * Setter for carrier
     *
     * @param string $carrier
     * @return $this
     */
    public function setCarrier($carrier)
    {
        $this->carrier = $carrier;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCarrier()
    {
        $this->carrier = null;
        return $this;
    }
}

