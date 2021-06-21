<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemNumberPortabilityQueryDigitPatternDeleteListRequest
 *
 * Request to delete a list of System Number Portability Status Digit Pattern mappings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:13061","type":"sequence"}]
 */
class SystemNumberPortabilityQueryDigitPatternDeleteListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName digitPattern
     * @Type string
     * @Array
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:13061
     * @MinLength 1
     * @MaxLength 160
     * @var string[]
     */
    private $digitPattern = array(
        
    );

    /**
     * Getter for digitPattern
     *
     * @return string[]
     */
    public function getDigitPattern()
    {
        return $this->digitPattern instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->digitPattern;
    }

    /**
     * Setter for digitPattern
     *
     * @param string[] $digitPattern
     * @return $this
     */
    public function setDigitPattern(array $digitPattern)
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

    /**
     * Adder for digitPattern
     *
     * @param string $digitPattern
     * @return $this
     */
    public function addDigitPattern(string $digitPattern)
    {
        $this->digitPattern[] = $digitPattern;
        return $this;
    }


}

