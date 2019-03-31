<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemInCallServiceActivationModifyRequest
 *
 * Modifies the system's DTMF based in-call service activation trigger attributes.
 *                 The response is either a SuccessResponse or an ErrorResponse.
 *                 Replaced by: SystemInCallServiceActivationModifyRequest17
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @see SystemInCallServiceActivationModifyRequest17
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:15581","type":"sequence"}]
 */
class SystemInCallServiceActivationModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName defaultActivationDigits
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:15581
     * @MinLength 1
     * @MaxLength 8
     * @var string|null
     */
    private $defaultActivationDigits = null;

    /**
     * Getter for defaultActivationDigits
     *
     * @return string
     */
    public function getDefaultActivationDigits()
    {
        return $this->defaultActivationDigits instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->defaultActivationDigits;
    }

    /**
     * Setter for defaultActivationDigits
     *
     * @param string $defaultActivationDigits
     * @return $this
     */
    public function setDefaultActivationDigits($defaultActivationDigits)
    {
        $this->defaultActivationDigits = $defaultActivationDigits;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDefaultActivationDigits()
    {
        $this->defaultActivationDigits = null;
        return $this;
    }


}

