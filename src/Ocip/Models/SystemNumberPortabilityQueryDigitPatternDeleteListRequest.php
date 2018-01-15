<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemNumberPortabilityQueryDigitPatternDeleteListRequest
 *
 * Request to delete a list of System Number Portability Status Digit Pattern
 * mappings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemNumberPortabilityQueryDigitPatternDeleteListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName digitPattern
     * @var string[]
     */
    private $digitPattern = array(
        
    );

    /**
     * Getter for digitPattern
     *
     * @ElementName digitPattern
     * @return string[]
     */
    public function getDigitPattern()
    {
        return $this->digitPattern;
    }

    /**
     * Setter for digitPattern
     *
     * @ElementName digitPattern
     * @param string[] $digitPattern
     * @return $this
     */
    public function setDigitPattern($digitPattern)
    {
        $this->digitPattern = $digitPattern;
        return $this;
    }

    /**
     * Adder for digitPattern
     *
     * @ElementName digitPattern
     * @param string $digitPattern
     * @return $this
     */
    public function addDigitPattern($digitPattern)
    {
        $this->digitPattern []= $digitPattern;
        return $this;
    }


}

