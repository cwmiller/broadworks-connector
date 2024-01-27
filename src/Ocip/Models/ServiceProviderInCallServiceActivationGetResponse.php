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
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:19516","type":"sequence"}]
 */
class ServiceProviderInCallServiceActivationGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName activationDigits
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:19516
     * @MinLength 1
     * @MaxLength 8
     * @var string|null
     */
    protected $activationDigits = null;

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

