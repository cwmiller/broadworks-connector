<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemNumberPortabilityQueryDigitPatternGetRequest
 *
 * Request to get a System Number Portability Status Digit Pattern mapping.
 *         The response is either a
 * SystemNumberPortabilityQueryDigitPatternGetResponse or an ErrorResponse.
 */
class SystemNumberPortabilityQueryDigitPatternGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName digitPattern
     * @var string|null
     */
    private $digitPattern = null;

    /**
     * Getter for digitPattern
     *
     * @ElementName digitPattern
     * @return string|null
     */
    public function getDigitPattern()
    {
        return $this->digitPattern;
    }

    /**
     * Setter for digitPattern
     *
     * @ElementName digitPattern
     * @param string|null $digitPattern
     * @return $this
     */
    public function setDigitPattern($digitPattern)
    {
        $this->digitPattern = $digitPattern;
        return $this;
    }


}

