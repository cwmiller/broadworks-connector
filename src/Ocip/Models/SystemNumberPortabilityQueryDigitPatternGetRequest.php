<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemNumberPortabilityQueryDigitPatternGetRequest
 *
 * Request to get a System Number Portability Status Digit Pattern mapping.
 *         The response is either a
 * SystemNumberPortabilityQueryDigitPatternGetResponse or an ErrorResponse.
 *
 * @see SystemNumberPortabilityQueryDigitPatternGetResponse
 * @see ErrorResponse
 */
class SystemNumberPortabilityQueryDigitPatternGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName digitPattern
     * @Type string
     * @var string|null
     */
    private $digitPattern = null;

    /**
     * Getter for digitPattern
     *
     * @return string
     */
    public function getDigitPattern()
    {
        return $this->digitPattern instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->digitPattern;
    }

    /**
     * Setter for digitPattern
     *
     * @param string $digitPattern
     * @return $this
     */
    public function setDigitPattern($digitPattern)
    {
        $this->digitPattern = $digitPattern;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDigitPattern()
    {
        $this->digitPattern = null;
        return $this;
    }


}

