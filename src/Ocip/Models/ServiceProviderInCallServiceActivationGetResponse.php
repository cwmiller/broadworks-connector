<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderInCallServiceActivationGetResponse
 *
 * Response to ServiceProviderInCallServiceActivationGetRequest.
 *
 *                 Replaced by: ServiceProviderInCallServiceActivationGetResponse17
 *
 * @see ServiceProviderInCallServiceActivationGetRequest
 * @see ServiceProviderInCallServiceActivationGetResponse17
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:14732","type":"sequence"}]
 */
class ServiceProviderInCallServiceActivationGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName activationDigits
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:14732
     * @MinLength 1
     * @MaxLength 8
     * @var string|null
     */
    private $activationDigits = null;

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

