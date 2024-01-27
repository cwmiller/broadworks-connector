<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderCommunicationBarringDigitPatternCriteriaGetPatternListResponse
 *
 * Response to the ServiceProviderCommunicationBarringDigitPatternCriteriaGetPatternListRequest.
 *         The response contains the Digit Pattern Criteria information.
 *
 * @see ServiceProviderCommunicationBarringDigitPatternCriteriaGetPatternListRequest
 * @Groups [{"id":"e19a9072c2dad499e9f28837da5768db:2207","type":"sequence"}]
 */
class ServiceProviderCommunicationBarringDigitPatternCriteriaGetPatternListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName matchDigitPattern
     * @Type string
     * @Array
     * @Optional
     * @Group e19a9072c2dad499e9f28837da5768db:2207
     * @MinLength 1
     * @MaxLength 160
     * @var string[]
     */
    protected $matchDigitPattern = [
        
    ];

    /**
     * Getter for matchDigitPattern
     *
     * @return string[]
     */
    public function getMatchDigitPattern()
    {
        return $this->matchDigitPattern instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->matchDigitPattern;
    }

    /**
     * Setter for matchDigitPattern
     *
     * @param string[] $matchDigitPattern
     * @return $this
     */
    public function setMatchDigitPattern(array $matchDigitPattern)
    {
        $this->matchDigitPattern = $matchDigitPattern;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMatchDigitPattern()
    {
        $this->matchDigitPattern = null;
        return $this;
    }

    /**
     * Adder for matchDigitPattern
     *
     * @param string $matchDigitPattern
     * @return $this
     */
    public function addMatchDigitPattern(string $matchDigitPattern)
    {
        $this->matchDigitPattern[] = $matchDigitPattern;
        return $this;
    }
}

