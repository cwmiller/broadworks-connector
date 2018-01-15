<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemInCallServiceActivationGetResponse
 *
 * Response to SystemInCallServiceActivationGetRequest.
 *
 *           Replaced by: SystemInCallServiceActivationGetResponse17
 */
class SystemInCallServiceActivationGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName defaultActivationDigits
     * @var string|null
     */
    private $defaultActivationDigits = null;

    /**
     * Getter for defaultActivationDigits
     *
     * @ElementName defaultActivationDigits
     * @return string|null
     */
    public function getDefaultActivationDigits()
    {
        return $this->defaultActivationDigits;
    }

    /**
     * Setter for defaultActivationDigits
     *
     * @ElementName defaultActivationDigits
     * @param string|null $defaultActivationDigits
     * @return $this
     */
    public function setDefaultActivationDigits($defaultActivationDigits)
    {
        $this->defaultActivationDigits = $defaultActivationDigits;
        return $this;
    }


}

