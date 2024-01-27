<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCommunicationBarringDigitPatternCriteriaGetPatternListRequest
 *
 * Get an existing Digit Pattern Criteria.
 *         The response is either a SystemCommunicationBarringDigitPatternCriteriaGetPatternListResponse or an ErrorResponse.
 *
 * @see SystemCommunicationBarringDigitPatternCriteriaGetPatternListResponse
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:6066","type":"sequence"}]
 */
class SystemCommunicationBarringDigitPatternCriteriaGetPatternListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName name
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:6066
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $name = null;

    /**
     * @ElementName responseSizeLimit
     * @Type int
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:6066
     * @MinInclusive 1
     * @var int|null
     */
    protected $responseSizeLimit = null;

    /**
     * @ElementName searchCriteriaDigitPattern
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDigitPattern
     * @Array
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:6066
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDigitPattern[]
     */
    protected $searchCriteriaDigitPattern = [
        
    ];

    /**
     * Getter for name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->name;
    }

    /**
     * Setter for name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetName()
    {
        $this->name = null;
        return $this;
    }

    /**
     * Getter for responseSizeLimit
     *
     * @return int
     */
    public function getResponseSizeLimit()
    {
        return $this->responseSizeLimit instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->responseSizeLimit;
    }

    /**
     * Setter for responseSizeLimit
     *
     * @param int $responseSizeLimit
     * @return $this
     */
    public function setResponseSizeLimit($responseSizeLimit)
    {
        $this->responseSizeLimit = $responseSizeLimit;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetResponseSizeLimit()
    {
        $this->responseSizeLimit = null;
        return $this;
    }

    /**
     * Getter for searchCriteriaDigitPattern
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDigitPattern[]
     */
    public function getSearchCriteriaDigitPattern()
    {
        return $this->searchCriteriaDigitPattern instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaDigitPattern;
    }

    /**
     * Setter for searchCriteriaDigitPattern
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDigitPattern[] $searchCriteriaDigitPattern
     * @return $this
     */
    public function setSearchCriteriaDigitPattern(array $searchCriteriaDigitPattern)
    {
        $this->searchCriteriaDigitPattern = $searchCriteriaDigitPattern;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaDigitPattern()
    {
        $this->searchCriteriaDigitPattern = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaDigitPattern
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDigitPattern $searchCriteriaDigitPattern
     * @return $this
     */
    public function addSearchCriteriaDigitPattern($searchCriteriaDigitPattern)
    {
        $this->searchCriteriaDigitPattern[] = $searchCriteriaDigitPattern;
        return $this;
    }
}

