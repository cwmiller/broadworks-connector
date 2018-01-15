<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserPersonalAssistantExclusionNumberGetListRequest
 *
 * Request to get the User Personal Assistant Exclusion Number List information. 
 *         The response is either a
 * userPersonalAssistantExclusionNumberGetListResponse or an ErrorResponse.
 */
class UserPersonalAssistantExclusionNumberGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName searchCriteriaPersonalAssistantExclusionNumber
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaPersonalAssistantExclusionNumber[]
     */
    private $searchCriteriaPersonalAssistantExclusionNumber = array(
        
    );

    /**
     * @ElementName searchCriteriaPersonalAssistantExclusionNumberDescription
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaPersonalAssistantExclusionNumberDescription[]
     */
    private $searchCriteriaPersonalAssistantExclusionNumberDescription = array(
        
    );

    /**
     * @ElementName responseSizeLimit
     * @var int|null
     */
    private $responseSizeLimit = null;

    /**
     * Getter for userId
     *
     * @ElementName userId
     * @return string|null
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Setter for userId
     *
     * @ElementName userId
     * @param string|null $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * Getter for searchCriteriaPersonalAssistantExclusionNumber
     *
     * @ElementName searchCriteriaPersonalAssistantExclusionNumber
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaPersonalAssistantExclusionNumber[]
     */
    public function getSearchCriteriaPersonalAssistantExclusionNumber()
    {
        return $this->searchCriteriaPersonalAssistantExclusionNumber;
    }

    /**
     * Setter for searchCriteriaPersonalAssistantExclusionNumber
     *
     * @ElementName searchCriteriaPersonalAssistantExclusionNumber
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaPersonalAssistantExclusionNumber[] $searchCriteriaPersonalAssistantExclusionNumber
     * @return $this
     */
    public function setSearchCriteriaPersonalAssistantExclusionNumber($searchCriteriaPersonalAssistantExclusionNumber)
    {
        $this->searchCriteriaPersonalAssistantExclusionNumber = $searchCriteriaPersonalAssistantExclusionNumber;
        return $this;
    }

    /**
     * Adder for searchCriteriaPersonalAssistantExclusionNumber
     *
     * @ElementName searchCriteriaPersonalAssistantExclusionNumber
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaPersonalAssistantExclusionNumber $searchCriteriaPersonalAssistantExclusionNumber
     * @return $this
     */
    public function addSearchCriteriaPersonalAssistantExclusionNumber($searchCriteriaPersonalAssistantExclusionNumber)
    {
        $this->searchCriteriaPersonalAssistantExclusionNumber []= $searchCriteriaPersonalAssistantExclusionNumber;
        return $this;
    }

    /**
     * Getter for searchCriteriaPersonalAssistantExclusionNumberDescription
     *
     * @ElementName searchCriteriaPersonalAssistantExclusionNumberDescription
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaPersonalAssistantExclusionNumberDescription[]
     */
    public function getSearchCriteriaPersonalAssistantExclusionNumberDescription()
    {
        return $this->searchCriteriaPersonalAssistantExclusionNumberDescription;
    }

    /**
     * Setter for searchCriteriaPersonalAssistantExclusionNumberDescription
     *
     * @ElementName searchCriteriaPersonalAssistantExclusionNumberDescription
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaPersonalAssistantExclusionNumberDescription[] $searchCriteriaPersonalAssistantExclusionNumberDescription
     * @return $this
     */
    public function setSearchCriteriaPersonalAssistantExclusionNumberDescription($searchCriteriaPersonalAssistantExclusionNumberDescription)
    {
        $this->searchCriteriaPersonalAssistantExclusionNumberDescription = $searchCriteriaPersonalAssistantExclusionNumberDescription;
        return $this;
    }

    /**
     * Adder for searchCriteriaPersonalAssistantExclusionNumberDescription
     *
     * @ElementName searchCriteriaPersonalAssistantExclusionNumberDescription
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaPersonalAssistantExclusionNumberDescription $searchCriteriaPersonalAssistantExclusionNumberDescription
     * @return $this
     */
    public function addSearchCriteriaPersonalAssistantExclusionNumberDescription($searchCriteriaPersonalAssistantExclusionNumberDescription)
    {
        $this->searchCriteriaPersonalAssistantExclusionNumberDescription []= $searchCriteriaPersonalAssistantExclusionNumberDescription;
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

