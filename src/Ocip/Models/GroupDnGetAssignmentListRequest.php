<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupDnGetAssignmentListRequest
 *
 * Get the list of assigned and unassigned DNs in a group. Each DN can be assigned
 *         to a user and/or department. Ranges of DNs with identical assignment and
 * activation properties
 *         are coalesced to a single table row entry.
 *         The response is either a GroupDnGetAssignmentListResponse or an
 * ErrorResponse.
 *   
 *         Replaced by: GroupDnGetAssignmentListRequest18
 *
 * @see GroupDnGetAssignmentListResponse
 * @see ErrorResponse
 * @see GroupDnGetAssignmentListRequest18
 */
class GroupDnGetAssignmentListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @var string|null
     */
    private $groupId = null;

    /**
     * @ElementName responseSizeLimit
     * @var int|null
     */
    private $responseSizeLimit = null;

    /**
     * @ElementName searchCriteriaDn
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDn[]
     */
    private $searchCriteriaDn = array(
        
    );

    /**
     * @ElementName searchCriteriaUserFirstName
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserFirstName[]
     */
    private $searchCriteriaUserFirstName = array(
        
    );

    /**
     * @ElementName searchCriteriaUserLastName
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserLastName[]
     */
    private $searchCriteriaUserLastName = array(
        
    );

    /**
     * @ElementName searchCriteriaExactDnDepartment
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactDnDepartment|null
     */
    private $searchCriteriaExactDnDepartment = null;

    /**
     * @ElementName searchCriteriaExactDnActivation
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactDnActivation|null
     */
    private $searchCriteriaExactDnActivation = null;

    /**
     * Getter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @return string|null
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @param string|null $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * Getter for groupId
     *
     * @ElementName groupId
     * @return string|null
     */
    public function getGroupId()
    {
        return $this->groupId;
    }

    /**
     * Setter for groupId
     *
     * @ElementName groupId
     * @param string|null $groupId
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
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
     * Getter for searchCriteriaDn
     *
     * @ElementName searchCriteriaDn
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDn[]
     */
    public function getSearchCriteriaDn()
    {
        return $this->searchCriteriaDn;
    }

    /**
     * Setter for searchCriteriaDn
     *
     * @ElementName searchCriteriaDn
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDn[] $searchCriteriaDn
     * @return $this
     */
    public function setSearchCriteriaDn($searchCriteriaDn)
    {
        $this->searchCriteriaDn = $searchCriteriaDn;
        return $this;
    }

    /**
     * Adder for searchCriteriaDn
     *
     * @ElementName searchCriteriaDn
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDn $searchCriteriaDn
     * @return $this
     */
    public function addSearchCriteriaDn($searchCriteriaDn)
    {
        $this->searchCriteriaDn []= $searchCriteriaDn;
        return $this;
    }

    /**
     * Getter for searchCriteriaUserFirstName
     *
     * @ElementName searchCriteriaUserFirstName
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserFirstName[]
     */
    public function getSearchCriteriaUserFirstName()
    {
        return $this->searchCriteriaUserFirstName;
    }

    /**
     * Setter for searchCriteriaUserFirstName
     *
     * @ElementName searchCriteriaUserFirstName
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserFirstName[] $searchCriteriaUserFirstName
     * @return $this
     */
    public function setSearchCriteriaUserFirstName($searchCriteriaUserFirstName)
    {
        $this->searchCriteriaUserFirstName = $searchCriteriaUserFirstName;
        return $this;
    }

    /**
     * Adder for searchCriteriaUserFirstName
     *
     * @ElementName searchCriteriaUserFirstName
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserFirstName $searchCriteriaUserFirstName
     * @return $this
     */
    public function addSearchCriteriaUserFirstName($searchCriteriaUserFirstName)
    {
        $this->searchCriteriaUserFirstName []= $searchCriteriaUserFirstName;
        return $this;
    }

    /**
     * Getter for searchCriteriaUserLastName
     *
     * @ElementName searchCriteriaUserLastName
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserLastName[]
     */
    public function getSearchCriteriaUserLastName()
    {
        return $this->searchCriteriaUserLastName;
    }

    /**
     * Setter for searchCriteriaUserLastName
     *
     * @ElementName searchCriteriaUserLastName
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserLastName[] $searchCriteriaUserLastName
     * @return $this
     */
    public function setSearchCriteriaUserLastName($searchCriteriaUserLastName)
    {
        $this->searchCriteriaUserLastName = $searchCriteriaUserLastName;
        return $this;
    }

    /**
     * Adder for searchCriteriaUserLastName
     *
     * @ElementName searchCriteriaUserLastName
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserLastName $searchCriteriaUserLastName
     * @return $this
     */
    public function addSearchCriteriaUserLastName($searchCriteriaUserLastName)
    {
        $this->searchCriteriaUserLastName []= $searchCriteriaUserLastName;
        return $this;
    }

    /**
     * Getter for searchCriteriaExactDnDepartment
     *
     * @ElementName searchCriteriaExactDnDepartment
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactDnDepartment|null
     */
    public function getSearchCriteriaExactDnDepartment()
    {
        return $this->searchCriteriaExactDnDepartment;
    }

    /**
     * Setter for searchCriteriaExactDnDepartment
     *
     * @ElementName searchCriteriaExactDnDepartment
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactDnDepartment|null $searchCriteriaExactDnDepartment
     * @return $this
     */
    public function setSearchCriteriaExactDnDepartment($searchCriteriaExactDnDepartment)
    {
        $this->searchCriteriaExactDnDepartment = $searchCriteriaExactDnDepartment;
        return $this;
    }

    /**
     * Getter for searchCriteriaExactDnActivation
     *
     * @ElementName searchCriteriaExactDnActivation
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactDnActivation|null
     */
    public function getSearchCriteriaExactDnActivation()
    {
        return $this->searchCriteriaExactDnActivation;
    }

    /**
     * Setter for searchCriteriaExactDnActivation
     *
     * @ElementName searchCriteriaExactDnActivation
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactDnActivation|null $searchCriteriaExactDnActivation
     * @return $this
     */
    public function setSearchCriteriaExactDnActivation($searchCriteriaExactDnActivation)
    {
        $this->searchCriteriaExactDnActivation = $searchCriteriaExactDnActivation;
        return $this;
    }


}

