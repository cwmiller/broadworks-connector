<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderInCallServiceActivationModifyRequest
 *
 * Modifies the service provider's DTMF based in-call service activation trigger attributes.The response is either a SuccessResponse or an ErrorResponse.
 *           Replaced by: ServiceProviderInCallServiceActivationModifyRequest17
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @see ServiceProviderInCallServiceActivationModifyRequest17
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:18957","type":"sequence"}]
 */
class ServiceProviderInCallServiceActivationModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:18957
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName activationDigits
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:18957
     * @MinLength 1
     * @MaxLength 8
     * @var string|null
     */
    protected $activationDigits = null;

    /**
     * Getter for serviceProviderId
     *
     * @return string
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @param string $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceProviderId()
    {
        $this->serviceProviderId = null;
        return $this;
    }

    /**
     * Getter for activationDigits
     *
     * @return string
     */
    public function getActivationDigits()
    {
        return $this->activationDigits instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->activationDigits;
    }

    /**
     * Setter for activationDigits
     *
     * @param string $activationDigits
     * @return $this
     */
    public function setActivationDigits($activationDigits)
    {
        $this->activationDigits = $activationDigits;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetActivationDigits()
    {
        $this->activationDigits = null;
        return $this;
    }


}

