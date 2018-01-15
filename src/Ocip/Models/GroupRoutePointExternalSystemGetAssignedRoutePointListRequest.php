<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupRoutePointExternalSystemGetAssignedRoutePointListRequest
 *
 * Request a list of route points within in a group that have a given external
 * system assigned.
 *         The response is either
 * GroupRoutePointExternalSystemGetAssignedRoutePointListResponse or ErrorResponse.
 */
class GroupRoutePointExternalSystemGetAssignedRoutePointListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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
     * @ElementName externalSystem
     * @var string|null
     */
    private $externalSystem = null;

    /**
     * @ElementName responseSizeLimit
     * @var int|null
     */
    private $responseSizeLimit = null;

    /**
     * @ElementName searchCriteriaRoutePointName
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaRoutePointName[]
     */
    private $searchCriteriaRoutePointName = array(
        
    );

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
     * Getter for externalSystem
     *
     * @ElementName externalSystem
     * @return string|null
     */
    public function getExternalSystem()
    {
        return $this->externalSystem;
    }

    /**
     * Setter for externalSystem
     *
     * @ElementName externalSystem
     * @param string|null $externalSystem
     * @return $this
     */
    public function setExternalSystem($externalSystem)
    {
        $this->externalSystem = $externalSystem;
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
     * Getter for searchCriteriaRoutePointName
     *
     * @ElementName searchCriteriaRoutePointName
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaRoutePointName[]
     */
    public function getSearchCriteriaRoutePointName()
    {
        return $this->searchCriteriaRoutePointName;
    }

    /**
     * Setter for searchCriteriaRoutePointName
     *
     * @ElementName searchCriteriaRoutePointName
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaRoutePointName[] $searchCriteriaRoutePointName
     * @return $this
     */
    public function setSearchCriteriaRoutePointName($searchCriteriaRoutePointName)
    {
        $this->searchCriteriaRoutePointName = $searchCriteriaRoutePointName;
        return $this;
    }

    /**
     * Adder for searchCriteriaRoutePointName
     *
     * @ElementName searchCriteriaRoutePointName
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaRoutePointName $searchCriteriaRoutePointName
     * @return $this
     */
    public function addSearchCriteriaRoutePointName($searchCriteriaRoutePointName)
    {
        $this->searchCriteriaRoutePointName []= $searchCriteriaRoutePointName;
        return $this;
    }


}

