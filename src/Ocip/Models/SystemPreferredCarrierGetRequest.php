<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemPreferredCarrierGetRequest
 *
 * Requests the attributes of carrier.
 *         The response is either a SystemPreferreredCarrierGetResponse or an
 * ErrorResponse.
 */
class SystemPreferredCarrierGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

