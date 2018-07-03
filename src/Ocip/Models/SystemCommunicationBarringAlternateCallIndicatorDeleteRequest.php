<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCommunicationBarringAlternateCallIndicatorDeleteRequest
 *
 * Delete a Communication Barring Alternate Call Indicator.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SystemCommunicationBarringAlternateCallIndicatorDeleteRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName alternateCallIndicator
     * @var string|null
     */
    private $alternateCallIndicator = null;

    /**
     * Getter for alternateCallIndicator
     *
     * @ElementName alternateCallIndicator
     * @return string|null
     */
    public function getAlternateCallIndicator()
    {
        return $this->alternateCallIndicator;
    }

    /**
     * Setter for alternateCallIndicator
     *
     * @ElementName alternateCallIndicator
     * @param string|null $alternateCallIndicator
     * @return $this
     */
    public function setAlternateCallIndicator($alternateCallIndicator)
    {
        $this->alternateCallIndicator = $alternateCallIndicator;
        return $this;
    }


}

