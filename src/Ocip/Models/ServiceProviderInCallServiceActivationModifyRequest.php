<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderInCallServiceActivationModifyRequest
 *
 * Modifies the service provider's DTMF based in-call service activation trigger
 * attributes.The response is either a SuccessResponse or an ErrorResponse.
 *           Replaced by: ServiceProviderInCallServiceActivationModifyRequest17
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @see ServiceProviderInCallServiceActivationModifyRequest17
 */
class ServiceProviderInCallServiceActivationModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName activationDigits
     * @var string|null
     */
    private $activationDigits = null;

    /**
     * Getter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @return string|null
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @param string|null $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

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

