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
 */
class SystemRoutingDeleteTranslationRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName digits
     * @var string|null
     */
    private $digits = null;

    /**
     * Getter for digits
     *
     * @ElementName digits
     * @return string|null
     */
    public function getDigits()
    {
        return $this->digits;
    }

    /**
     * Setter for digits
     *
     * @ElementName digits
     * @param string|null $digits
     * @return $this
     */
    public function setDigits($digits)
    {
        $this->digits = $digits;
        return $this;
    }


}

