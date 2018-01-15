<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemInCallServiceActivationModifyRequest
 *
 * Modifies the system's DTMF based in-call service activation trigger 
 * attributes.The response is either a SuccessResponse or an ErrorResponse.
 *
 *           Replaced by: SystemInCallServiceActivationModifyRequest17
 */
class SystemInCallServiceActivationModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

