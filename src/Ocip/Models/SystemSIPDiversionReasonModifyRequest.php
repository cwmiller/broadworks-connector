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
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:17509","type":"sequence"}]
 */
class SystemSIPDiversionReasonModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName diversionReason
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SIPDiversionReason
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:17509
     * @var \CWM\BroadWorksConnector\Ocip\Models\SIPDiversionReason|null
     */
    protected $diversionReason = null;

    /**
     * @ElementName causeValue
     * @Type string
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:17509
     * @Length 3
     * @var string|null
     */
    protected $causeValue = null;

    /**
     * Getter for diversionReason
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SIPDiversionReason
     */
    public function getDiversionReason()
    {
        return $this->diversionReason instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->diversionReason;
    }

    /**
     * Setter for diversionReason
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SIPDiversionReason $diversionReason
     * @return $this
     */
    public function setDiversionReason(\CWM\BroadWorksConnector\Ocip\Models\SIPDiversionReason $diversionReason)
    {
        $this->diversionReason = $diversionReason;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDiversionReason()
    {
        $this->diversionReason = null;
        return $this;
    }

    /**
     * Getter for causeValue
     *
     * @return string
     */
    public function getCauseValue()
    {
        return $this->causeValue instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->causeValue;
    }

    /**
     * Setter for causeValue
     *
     * @param string $causeValue
     * @return $this
     */
    public function setCauseValue($causeValue)
    {
        $this->causeValue = $causeValue;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCauseValue()
    {
        $this->causeValue = null;
        return $this;
    }


}

