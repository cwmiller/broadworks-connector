<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderCommunicationBarringDigitPatternCriteriaGetPatternListResponse
 *
 * Response to the
 * ServiceProviderCommunicationBarringDigitPatternCriteriaGetPatternListRequest.
 *         The response contains the Digit Pattern Criteria information.
 *
 * @see
 * ServiceProviderCommunicationBarringDigitPatternCriteriaGetPatternListRequest
 */
class ServiceProviderCommunicationBarringDigitPatternCriteriaGetPatternListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName matchDigitPattern
     * @var string[]
     */
    private $matchDigitPattern = array(
        
    );

    /**
     * Getter for matchDigitPattern
     *
     * @ElementName matchDigitPattern
     * @return string[]
     */
    public function getMatchDigitPattern()
    {
        return $this->matchDigitPattern;
    }

    /**
     * Setter for matchDigitPattern
     *
     * @ElementName matchDigitPattern
     * @param string[] $matchDigitPattern
     * @return $this
     */
    public function setMatchDigitPattern($matchDigitPattern)
    {
        $this->matchDigitPattern = $matchDigitPattern;
        return $this;
    }

    /**
     * Adder for matchDigitPattern
     *
     * @ElementName matchDigitPattern
     * @param string $matchDigitPattern
     * @return $this
     */
    public function addMatchDigitPattern($matchDigitPattern)
    {
        $this->matchDigitPattern []= $matchDigitPattern;
        return $this;
    }


}

