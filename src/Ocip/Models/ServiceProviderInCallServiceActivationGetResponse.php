<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderInCallServiceActivationGetResponse
 *
 * Response to ServiceProviderInCallServiceActivationGetRequest.
 *           
 *           Replaced by: ServiceProviderInCallServiceActivationGetResponse17
 *
 * @see ServiceProviderInCallServiceActivationGetRequest
 * @see ServiceProviderInCallServiceActivationGetResponse17
 */
class ServiceProviderInCallServiceActivationGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName activationDigits
     * @var string|null
     */
    private $activationDigits = null;

    /**
     * Getter for activationDigits
     *
     * @ElementName activationDigits
     * @return string|null
     */
    public function getActivationDigits()
    {
        return $this->activationDigits;
    }

    /**
     * Setter for activationDigits
     *
     * @ElementName activationDigits
     * @param string|null $activationDigits
     * @return $this
     */
    public function setActivationDigits($activationDigits)
    {
        $this->activationDigits = $activationDigits;
        return $this;
    }


}

