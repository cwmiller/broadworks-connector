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
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:19532","type":"sequence"}]
 */
class ServiceProviderInCallServiceActivationModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:19532
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName activationDigits
     * @Type string
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:19532
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

