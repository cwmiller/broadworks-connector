<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemNumberPortabilityQueryDigitPatternGetListRequest
 *
 * Request to get the System Number Portability Query Digit Pattern List information.
 *         The response is either a SystemNumberPortabilityQueryDigitPatternGetListResponse or an ErrorResponse.
 *
 * @see SystemNumberPortabilityQueryDigitPatternGetListResponse
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:13244","type":"sequence"}]
 */
class SystemNumberPortabilityQueryDigitPatternGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName searchCriteriaNumberPortabilityQueryDigitPattern
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaNumberPortabilityQueryDigitPattern
     * @Array
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:13244
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaNumberPortabilityQueryDigitPattern[]
     */
    protected $searchCriteriaNumberPortabilityQueryDigitPattern = [
        
    ];

    /**
     * @ElementName searchCriteriaNumberPortabilityStatus
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaNumberPortabilityStatus
     * @Array
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:13244
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaNumberPortabilityStatus[]
     */
    protected $searchCriteriaNumberPortabilityStatus = [
        
    ];

    /**
     * @ElementName responseSizeLimit
     * @Type int
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:13244
     * @MinInclusive 1
     * @var int|null
     */
    protected $responseSizeLimit = null;

    /**
     * Getter for searchCriteriaNumberPortabilityQueryDigitPattern
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaNumberPortabilityQueryDigitPattern[]
     */
    public function getSearchCriteriaNumberPortabilityQueryDigitPattern()
    {
        return $this->searchCriteriaNumberPortabilityQueryDigitPattern instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaNumberPortabilityQueryDigitPattern;
    }

    /**
     * Setter for searchCriteriaNumberPortabilityQueryDigitPattern
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaNumberPortabilityQueryDigitPattern[] $searchCriteriaNumberPortabilityQueryDigitPattern
     * @return $this
     */
    public function setSearchCriteriaNumberPortabilityQueryDigitPattern(array $searchCriteriaNumberPortabilityQueryDigitPattern)
    {
        $this->searchCriteriaNumberPortabilityQueryDigitPattern = $searchCriteriaNumberPortabilityQueryDigitPattern;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaNumberPortabilityQueryDigitPattern()
    {
        $this->searchCriteriaNumberPortabilityQueryDigitPattern = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaNumberPortabilityQueryDigitPattern
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaNumberPortabilityQueryDigitPattern $searchCriteriaNumberPortabilityQueryDigitPattern
     * @return $this
     */
    public function addSearchCriteriaNumberPortabilityQueryDigitPattern($searchCriteriaNumberPortabilityQueryDigitPattern)
    {
        $this->searchCriteriaNumberPortabilityQueryDigitPattern[] = $searchCriteriaNumberPortabilityQueryDigitPattern;
        return $this;
    }

    /**
     * Getter for searchCriteriaNumberPortabilityStatus
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaNumberPortabilityStatus[]
     */
    public function getSearchCriteriaNumberPortabilityStatus()
    {
        return $this->searchCriteriaNumberPortabilityStatus instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaNumberPortabilityStatus;
    }

    /**
     * Setter for searchCriteriaNumberPortabilityStatus
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaNumberPortabilityStatus[] $searchCriteriaNumberPortabilityStatus
     * @return $this
     */
    public function setSearchCriteriaNumberPortabilityStatus(array $searchCriteriaNumberPortabilityStatus)
    {
        $this->searchCriteriaNumberPortabilityStatus = $searchCriteriaNumberPortabilityStatus;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaNumberPortabilityStatus()
    {
        $this->searchCriteriaNumberPortabilityStatus = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaNumberPortabilityStatus
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaNumberPortabilityStatus $searchCriteriaNumberPortabilityStatus
     * @return $this
     */
    public function addSearchCriteriaNumberPortabilityStatus($searchCriteriaNumberPortabilityStatus)
    {
        $this->searchCriteriaNumberPortabilityStatus[] = $searchCriteriaNumberPortabilityStatus;
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
}

