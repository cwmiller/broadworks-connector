<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserPersonalAssistantExclusionNumberGetListRequest
 *
 * Request to get the User Personal Assistant Exclusion Number List information. 
 *         The response is either a
 * userPersonalAssistantExclusionNumberGetListResponse or an ErrorResponse.
 *
 * @see userPersonalAssistantExclusionNumberGetListResponse
 * @see ErrorResponse
 */
class UserPersonalAssistantExclusionNumberGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName searchCriteriaPersonalAssistantExclusionNumber
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaPersonalAssistantExclusionNumber
     * @Array
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaPersonalAssistantExclusionNumber[]
     */
    private $searchCriteriaPersonalAssistantExclusionNumber = array(
        
    );

    /**
     * @ElementName searchCriteriaPersonalAssistantExclusionNumberDescription
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaPersonalAssistantExclusionNumberDescription
     * @Array
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaPersonalAssistantExclusionNumberDescription[]
     */
    private $searchCriteriaPersonalAssistantExclusionNumberDescription = array(
        
    );

    /**
     * @ElementName responseSizeLimit
     * @Type int
     * @var int|null
     */
    private $responseSizeLimit = null;

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

