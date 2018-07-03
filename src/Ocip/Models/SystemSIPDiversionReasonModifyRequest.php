<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSIPDiversionReasonModifyRequest
 *
 * Request to modify the SIP cause value for a given diversion reason.
 *         The response is either a SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SystemSIPDiversionReasonModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName diversionReason
     * @var string|null
     */
    private $diversionReason = null;

    /**
     * @ElementName causeValue
     * @var string|null
     */
    private $causeValue = null;

    /**
     * Getter for diversionReason
     *
     * @ElementName diversionReason
     * @return string|null
     */
    public function getDiversionReason()
    {
        return $this->diversionReason;
    }

    /**
     * Setter for diversionReason
     *
     * @ElementName diversionReason
     * @param string|null $diversionReason
     * @return $this
     */
    public function setDiversionReason($diversionReason)
    {
        $this->diversionReason = $diversionReason;
        return $this;
    }

    /**
     * Getter for causeValue
     *
     * @ElementName causeValue
     * @return string|null
     */
    public function getCauseValue()
    {
        return $this->causeValue;
    }

    /**
     * Setter for causeValue
     *
     * @ElementName causeValue
     * @param string|null $causeValue
     * @return $this
     */
    public function setCauseValue($causeValue)
    {
        $this->causeValue = $causeValue;
        return $this;
    }


}

