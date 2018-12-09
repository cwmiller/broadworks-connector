<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemNumberPortabilityQueryDigitPatternGetRequest
 *
 * Request to get a System Number Portability Status Digit Pattern mapping.
 *         The response is either a SystemNumberPortabilityQueryDigitPatternGetResponse or an ErrorResponse.
 *
 * @see SystemNumberPortabilityQueryDigitPatternGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"b5f5416d9e71f8e4246cda16c4723744:11354","type":"sequence"}]
 */
class SystemNumberPortabilityQueryDigitPatternGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName digitPattern
     * @Type string
     * @Group b5f5416d9e71f8e4246cda16c4723744:11354
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

