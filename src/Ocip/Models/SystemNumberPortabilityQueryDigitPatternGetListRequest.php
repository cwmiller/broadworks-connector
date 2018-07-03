<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemNumberPortabilityQueryDigitPatternGetListRequest
 *
 * Request to get the System Number Portability Query Digit Pattern List
 * information.
 *         The response is either a
 * SystemNumberPortabilityQueryDigitPatternGetListResponse or an ErrorResponse.
 *
 * @see SystemNumberPortabilityQueryDigitPatternGetListResponse
 * @see ErrorResponse
 */
class SystemNumberPortabilityQueryDigitPatternGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName searchCriteriaNumberPortabilityQueryDigitPattern
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaNumberPortabilityQueryDigitPattern[]
     */
    private $searchCriteriaNumberPortabilityQueryDigitPattern = array(
        
    );

    /**
     * @ElementName searchCriteriaNumberPortabilityStatus
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaNumberPortabilityStatus[]
     */
    private $searchCriteriaNumberPortabilityStatus = array(
        
    );

    /**
     * @ElementName responseSizeLimit
     * @var int|null
     */
    private $responseSizeLimit = null;

    /**
     * Getter for searchCriteriaNumberPortabilityQueryDigitPattern
     *
     * @ElementName searchCriteriaNumberPortabilityQueryDigitPattern
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaNumberPortabilityQueryDigitPattern[]
     */
    public function getSearchCriteriaNumberPortabilityQueryDigitPattern()
    {
        return $this->searchCriteriaNumberPortabilityQueryDigitPattern;
    }

    /**
     * Setter for searchCriteriaNumberPortabilityQueryDigitPattern
     *
     * @ElementName searchCriteriaNumberPortabilityQueryDigitPattern
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaNumberPortabilityQueryDigitPattern[] $searchCriteriaNumberPortabilityQueryDigitPattern
     * @return $this
     */
    public function setSearchCriteriaNumberPortabilityQueryDigitPattern($searchCriteriaNumberPortabilityQueryDigitPattern)
    {
        $this->searchCriteriaNumberPortabilityQueryDigitPattern = $searchCriteriaNumberPortabilityQueryDigitPattern;
        return $this;
    }

    /**
     * Adder for searchCriteriaNumberPortabilityQueryDigitPattern
     *
     * @ElementName searchCriteriaNumberPortabilityQueryDigitPattern
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaNumberPortabilityQueryDigitPattern $searchCriteriaNumberPortabilityQueryDigitPattern
     * @return $this
     */
    public function addSearchCriteriaNumberPortabilityQueryDigitPattern($searchCriteriaNumberPortabilityQueryDigitPattern)
    {
        $this->searchCriteriaNumberPortabilityQueryDigitPattern []= $searchCriteriaNumberPortabilityQueryDigitPattern;
        return $this;
    }

    /**
     * Getter for searchCriteriaNumberPortabilityStatus
     *
     * @ElementName searchCriteriaNumberPortabilityStatus
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaNumberPortabilityStatus[]
     */
    public function getSearchCriteriaNumberPortabilityStatus()
    {
        return $this->searchCriteriaNumberPortabilityStatus;
    }

    /**
     * Setter for searchCriteriaNumberPortabilityStatus
     *
     * @ElementName searchCriteriaNumberPortabilityStatus
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaNumberPortabilityStatus[] $searchCriteriaNumberPortabilityStatus
     * @return $this
     */
    public function setSearchCriteriaNumberPortabilityStatus($searchCriteriaNumberPortabilityStatus)
    {
        $this->searchCriteriaNumberPortabilityStatus = $searchCriteriaNumberPortabilityStatus;
        return $this;
    }

    /**
     * Adder for searchCriteriaNumberPortabilityStatus
     *
     * @ElementName searchCriteriaNumberPortabilityStatus
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaNumberPortabilityStatus $searchCriteriaNumberPortabilityStatus
     * @return $this
     */
    public function addSearchCriteriaNumberPortabilityStatus($searchCriteriaNumberPortabilityStatus)
    {
        $this->searchCriteriaNumberPortabilityStatus []= $searchCriteriaNumberPortabilityStatus;
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


}

