<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCommunicationBarringDigitPatternCriteriaGetPatternListRequest
 *
 * Get an existing Digit Pattern Criteria.
 *         The response is either a
 * SystemCommunicationBarringDigitPatternCriteriaGetPatternListResponse or an
 * ErrorResponse.
 *
 * @see SystemCommunicationBarringDigitPatternCriteriaGetPatternListResponse
 * @see ErrorResponse
 */
class SystemCommunicationBarringDigitPatternCriteriaGetPatternListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName name
     * @var string|null
     */
    private $name = null;

    /**
     * @ElementName responseSizeLimit
     * @var int|null
     */
    private $responseSizeLimit = null;

    /**
     * @ElementName searchCriteriaDigitPattern
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDigitPattern[]
     */
    private $searchCriteriaDigitPattern = array(
        
    );

    /**
     * Getter for name
     *
     * @ElementName name
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Setter for name
     *
     * @ElementName name
     * @param string|null $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Getter for responseSizeLimit
     *
     * @ElementName responseSizeLimit
     * @return int|null
     */
    public function getResponseSizeLimit()
    {
        return $this->responseSizeLimit;
    }

    /**
     * Setter for responseSizeLimit
     *
     * @ElementName responseSizeLimit
     * @param int|null $responseSizeLimit
     * @return $this
     */
    public function setResponseSizeLimit($responseSizeLimit)
    {
        $this->responseSizeLimit = $responseSizeLimit;
        return $this;
    }

    /**
     * Getter for searchCriteriaDigitPattern
     *
     * @ElementName searchCriteriaDigitPattern
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDigitPattern[]
     */
    public function getSearchCriteriaDigitPattern()
    {
        return $this->searchCriteriaDigitPattern;
    }

    /**
     * Setter for searchCriteriaDigitPattern
     *
     * @ElementName searchCriteriaDigitPattern
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDigitPattern[] $searchCriteriaDigitPattern
     * @return $this
     */
    public function setSearchCriteriaDigitPattern(array $searchCriteriaDigitPattern)
    {
        $this->searchCriteriaDigitPattern = $searchCriteriaDigitPattern;
        return $this;
    }

    /**
     * Adder for searchCriteriaDigitPattern
     *
     * @ElementName searchCriteriaDigitPattern
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDigitPattern $searchCriteriaDigitPattern
     * @return $this
     */
    public function addSearchCriteriaDigitPattern($searchCriteriaDigitPattern)
    {
        $this->searchCriteriaDigitPattern []= $searchCriteriaDigitPattern;
        return $this;
    }


}

