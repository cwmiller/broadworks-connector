<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemRoutingDeleteTranslationRequest
 *
 * Request to delete a digit routing table entry from the system.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:15295","type":"sequence"}]
 */
class SystemRoutingDeleteTranslationRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName digits
     * @Type string
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:15295
     * @MinLength 1
     * @MaxLength 6
     * @var string|null
     */
    private $digits = null;

    /**
     * Getter for digits
     *
     * @return string
     */
    public function getDigits()
    {
        return $this->digits instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->digits;
    }

    /**
     * Setter for digits
     *
     * @param string $digits
     * @return $this
     */
    public function setDigits($digits)
    {
        $this->digits = $digits;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDigits()
    {
        $this->digits = null;
        return $this;
    }


}

