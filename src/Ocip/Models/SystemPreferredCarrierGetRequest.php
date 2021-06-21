<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemPreferredCarrierGetRequest
 *
 * Requests the attributes of carrier.
 *         The response is either a SystemPreferreredCarrierGetResponse or an ErrorResponse.
 *
 * @see SystemPreferreredCarrierGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"74a46a9bfccb54713c1d19735843f1df:433","type":"sequence"}]
 */
class SystemPreferredCarrierGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName carrier
     * @Type string
     * @Group 74a46a9bfccb54713c1d19735843f1df:433
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    private $carrier = null;

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

