<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupRoutePointGetInstanceListRequest
 *
 * Get a list of Route Point instances within a group. 
 *         It is possible to search by various criteria to restrict the number of rows returned.
 *         The response is either GroupRoutePointGetInstanceListResponse or ErrorResponse.
 *         It is possible to get the instances within a specified department.
 *
 * @see GroupRoutePointGetInstanceListResponse
 * @see ErrorResponse
 * @Groups [{"id":"a27224a048c30ff69eab9209dec841cc:620","type":"sequence"}]
 */
class GroupRoutePointGetInstanceListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group a27224a048c30ff69eab9209dec841cc:620
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group a27224a048c30ff69eab9209dec841cc:620
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $groupId = null;

    /**
     * @ElementName groupDepartmentName
     * @Type string
     * @Optional
     * @Group a27224a048c30ff69eab9209dec841cc:620
     * @MinLength 1
     * @MaxLength 50
     * @var string|null
     */
    private $groupDepartmentName = null;

    /**
     * @ElementName responseSizeLimit
     * @Type int
     * @Optional
     * @Group a27224a048c30ff69eab9209dec841cc:620
     * @MinInclusive 1
     * @var int|null
     */
    private $responseSizeLimit = null;

    /**
     * @ElementName searchCriteriaRoutePointName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaRoutePointName
     * @Array
     * @Optional
     * @Group a27224a048c30ff69eab9209dec841cc:620
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaRoutePointName[]
     */
    private $searchCriteriaRoutePointName = array(
        
    );

    /**
     * Getter for serviceProviderId
     *
     * @return string
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @param string $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceProviderId()
    {
        $this->serviceProviderId = null;
        return $this;
    }

    /**
     * Getter for groupId
     *
     * @return string
     */
    public function getGroupId()
    {
        return $this->groupId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupId;
    }

    /**
     * Setter for groupId
     *
     * @param string $groupId
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupId()
    {
        $this->groupId = null;
        return $this;
    }

    /**
     * Getter for groupDepartmentName
     *
     * @return string
     */
    public function getGroupDepartmentName()
    {
        return $this->groupDepartmentName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupDepartmentName;
    }

    /**
     * Setter for groupDepartmentName
     *
     * @param string $groupDepartmentName
     * @return $this
     */
    public function setGroupDepartmentName($groupDepartmentName)
    {
        $this->groupDepartmentName = $groupDepartmentName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupDepartmentName()
    {
        $this->groupDepartmentName = null;
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
     * Getter for searchCriteriaRoutePointName
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaRoutePointName[]
     */
    public function getSearchCriteriaRoutePointName()
    {
        return $this->searchCriteriaRoutePointName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaRoutePointName;
    }

    /**
     * Setter for searchCriteriaRoutePointName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaRoutePointName[] $searchCriteriaRoutePointName
     * @return $this
     */
    public function setSearchCriteriaRoutePointName(array $searchCriteriaRoutePointName)
    {
        $this->searchCriteriaRoutePointName = $searchCriteriaRoutePointName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaRoutePointName()
    {
        $this->searchCriteriaRoutePointName = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaRoutePointName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaRoutePointName $searchCriteriaRoutePointName
     * @return $this
     */
    public function addSearchCriteriaRoutePointName($searchCriteriaRoutePointName)
    {
        $this->searchCriteriaRoutePointName[] = $searchCriteriaRoutePointName;
        return $this;
    }


}

