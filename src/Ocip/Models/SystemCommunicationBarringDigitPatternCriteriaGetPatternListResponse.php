<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCommunicationBarringDigitPatternCriteriaGetPatternListResponse
 *
 * Response to the SystemCommunicationBarringDigitPatternCriteriaGetPatternListRequest.
 *         The response contains the Digit Pattern Criteria information.
 *
 * @see SystemCommunicationBarringDigitPatternCriteriaGetPatternListRequest
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:6084","type":"sequence"}]
 */
class SystemCommunicationBarringDigitPatternCriteriaGetPatternListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName matchDigitPattern
     * @Type string
     * @Array
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:6084
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

