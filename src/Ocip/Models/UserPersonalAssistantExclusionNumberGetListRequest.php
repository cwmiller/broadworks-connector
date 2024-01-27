<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserPersonalAssistantExclusionNumberGetListRequest
 *
 * Request to get the User Personal Assistant Exclusion Number List information. 
 *         The response is either a UserPersonalAssistantExclusionNumberGetListResponse or an ErrorResponse.
 *
 * @see UserPersonalAssistantExclusionNumberGetListResponse
 * @see ErrorResponse
 * @Groups [{"id":"6bd221784ebf8af2fe1169d36a6ac2dd:267","type":"sequence"}]
 */
class UserPersonalAssistantExclusionNumberGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group 6bd221784ebf8af2fe1169d36a6ac2dd:267
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName searchCriteriaPersonalAssistantExclusionNumber
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaPersonalAssistantExclusionNumber
     * @Array
     * @Optional
     * @Group 6bd221784ebf8af2fe1169d36a6ac2dd:267
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaPersonalAssistantExclusionNumber[]
     */
    protected $searchCriteriaPersonalAssistantExclusionNumber = [
        
    ];

    /**
     * @ElementName searchCriteriaPersonalAssistantExclusionNumberDescription
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaPersonalAssistantExclusionNumberDescription
     * @Array
     * @Optional
     * @Group 6bd221784ebf8af2fe1169d36a6ac2dd:267
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaPersonalAssistantExclusionNumberDescription[]
     */
    protected $searchCriteriaPersonalAssistantExclusionNumberDescription = [
        
    ];

    /**
     * @ElementName responseSizeLimit
     * @Type int
     * @Optional
     * @Group 6bd221784ebf8af2fe1169d36a6ac2dd:267
     * @MinInclusive 1
     * @var int|null
     */
    protected $responseSizeLimit = null;

    /**
     * Getter for userId
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->userId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userId;
    }

    /**
     * Setter for userId
     *
     * @param string $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserId()
    {
        $this->userId = null;
        return $this;
    }

    /**
     * Getter for searchCriteriaPersonalAssistantExclusionNumber
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaPersonalAssistantExclusionNumber[]
     */
    public function getSearchCriteriaPersonalAssistantExclusionNumber()
    {
        return $this->searchCriteriaPersonalAssistantExclusionNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaPersonalAssistantExclusionNumber;
    }

    /**
     * Setter for searchCriteriaPersonalAssistantExclusionNumber
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaPersonalAssistantExclusionNumber[] $searchCriteriaPersonalAssistantExclusionNumber
     * @return $this
     */
    public function setSearchCriteriaPersonalAssistantExclusionNumber(array $searchCriteriaPersonalAssistantExclusionNumber)
    {
        $this->searchCriteriaPersonalAssistantExclusionNumber = $searchCriteriaPersonalAssistantExclusionNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaPersonalAssistantExclusionNumber()
    {
        $this->searchCriteriaPersonalAssistantExclusionNumber = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaPersonalAssistantExclusionNumber
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaPersonalAssistantExclusionNumber $searchCriteriaPersonalAssistantExclusionNumber
     * @return $this
     */
    public function addSearchCriteriaPersonalAssistantExclusionNumber($searchCriteriaPersonalAssistantExclusionNumber)
    {
        $this->searchCriteriaPersonalAssistantExclusionNumber[] = $searchCriteriaPersonalAssistantExclusionNumber;
        return $this;
    }

    /**
     * Getter for searchCriteriaPersonalAssistantExclusionNumberDescription
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaPersonalAssistantExclusionNumberDescription[]
     */
    public function getSearchCriteriaPersonalAssistantExclusionNumberDescription()
    {
        return $this->searchCriteriaPersonalAssistantExclusionNumberDescription instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaPersonalAssistantExclusionNumberDescription;
    }

    /**
     * Setter for searchCriteriaPersonalAssistantExclusionNumberDescription
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaPersonalAssistantExclusionNumberDescription[] $searchCriteriaPersonalAssistantExclusionNumberDescription
     * @return $this
     */
    public function setSearchCriteriaPersonalAssistantExclusionNumberDescription(array $searchCriteriaPersonalAssistantExclusionNumberDescription)
    {
        $this->searchCriteriaPersonalAssistantExclusionNumberDescription = $searchCriteriaPersonalAssistantExclusionNumberDescription;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaPersonalAssistantExclusionNumberDescription()
    {
        $this->searchCriteriaPersonalAssistantExclusionNumberDescription = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaPersonalAssistantExclusionNumberDescription
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaPersonalAssistantExclusionNumberDescription $searchCriteriaPersonalAssistantExclusionNumberDescription
     * @return $this
     */
    public function addSearchCriteriaPersonalAssistantExclusionNumberDescription($searchCriteriaPersonalAssistantExclusionNumberDescription)
    {
        $this->searchCriteriaPersonalAssistantExclusionNumberDescription[] = $searchCriteriaPersonalAssistantExclusionNumberDescription;
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

