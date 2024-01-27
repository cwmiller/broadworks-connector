<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallPickupGetInstancePagedSortedListRequest
 *
 * Request to get a list of Call Pickup instances within a group.
 *         
 *         If the responsePagingControl element is not provided, the paging startIndex will be set to 1 
 *         by default, and the responsePageSize will be set to the maximum ResponsePageSize by default.
 *         It is possible to search by various criteria to restrict the number of rows returned.
 *         
 *         Multiple search criteria are logically ANDed together unless the searchCriteriaModeOr option is included.
 *         Then the search criteria are logically ORed together.
 *         
 *         The response is either GroupCallPickupGetInstancePagedSortedListResponse or ErrorResponse.
 *
 * @see GroupCallPickupGetInstancePagedSortedListResponse
 * @see ErrorResponse
 * @Groups [{"id":"e52f623f7e5f77c5ed7bb6ba0012d5cd:229","type":"sequence"}]
 */
class GroupCallPickupGetInstancePagedSortedListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group e52f623f7e5f77c5ed7bb6ba0012d5cd:229
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group e52f623f7e5f77c5ed7bb6ba0012d5cd:229
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $groupId = null;

    /**
     * @ElementName responsePagingControl
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ResponsePagingControl
     * @Optional
     * @Group e52f623f7e5f77c5ed7bb6ba0012d5cd:229
     * @var \CWM\BroadWorksConnector\Ocip\Models\ResponsePagingControl|null
     */
    protected $responsePagingControl = null;

    /**
     * @ElementName sortByCallPickupName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SortByCallPickupName
     * @Optional
     * @Group e52f623f7e5f77c5ed7bb6ba0012d5cd:229
     * @var \CWM\BroadWorksConnector\Ocip\Models\SortByCallPickupName|null
     */
    protected $sortByCallPickupName = null;

    /**
     * @ElementName searchCriteriaCallPickupName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaCallPickupName
     * @Array
     * @Optional
     * @Group e52f623f7e5f77c5ed7bb6ba0012d5cd:229
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaCallPickupName[]
     */
    protected $searchCriteriaCallPickupName = [
        
    ];

    /**
     * @ElementName searchCriteriaModeOr
     * @Type bool
     * @Optional
     * @Group e52f623f7e5f77c5ed7bb6ba0012d5cd:229
     * @var bool|null
     */
    protected $searchCriteriaModeOr = null;

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
     * Getter for responsePagingControl
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ResponsePagingControl
     */
    public function getResponsePagingControl()
    {
        return $this->responsePagingControl instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->responsePagingControl;
    }

    /**
     * Setter for responsePagingControl
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ResponsePagingControl $responsePagingControl
     * @return $this
     */
    public function setResponsePagingControl(\CWM\BroadWorksConnector\Ocip\Models\ResponsePagingControl $responsePagingControl)
    {
        $this->responsePagingControl = $responsePagingControl;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetResponsePagingControl()
    {
        $this->responsePagingControl = null;
        return $this;
    }

    /**
     * Getter for sortByCallPickupName
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SortByCallPickupName
     */
    public function getSortByCallPickupName()
    {
        return $this->sortByCallPickupName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sortByCallPickupName;
    }

    /**
     * Setter for sortByCallPickupName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SortByCallPickupName $sortByCallPickupName
     * @return $this
     */
    public function setSortByCallPickupName(\CWM\BroadWorksConnector\Ocip\Models\SortByCallPickupName $sortByCallPickupName)
    {
        $this->sortByCallPickupName = $sortByCallPickupName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSortByCallPickupName()
    {
        $this->sortByCallPickupName = null;
        return $this;
    }

    /**
     * Getter for searchCriteriaCallPickupName
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaCallPickupName[]
     */
    public function getSearchCriteriaCallPickupName()
    {
        return $this->searchCriteriaCallPickupName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaCallPickupName;
    }

    /**
     * Setter for searchCriteriaCallPickupName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaCallPickupName[] $searchCriteriaCallPickupName
     * @return $this
     */
    public function setSearchCriteriaCallPickupName(array $searchCriteriaCallPickupName)
    {
        $this->searchCriteriaCallPickupName = $searchCriteriaCallPickupName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaCallPickupName()
    {
        $this->searchCriteriaCallPickupName = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaCallPickupName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaCallPickupName $searchCriteriaCallPickupName
     * @return $this
     */
    public function addSearchCriteriaCallPickupName($searchCriteriaCallPickupName)
    {
        $this->searchCriteriaCallPickupName[] = $searchCriteriaCallPickupName;
        return $this;
    }

    /**
     * Getter for searchCriteriaModeOr
     *
     * @return bool
     */
    public function getSearchCriteriaModeOr()
    {
        return $this->searchCriteriaModeOr instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaModeOr;
    }

    /**
     * Setter for searchCriteriaModeOr
     *
     * @param bool $searchCriteriaModeOr
     * @return $this
     */
    public function setSearchCriteriaModeOr($searchCriteriaModeOr)
    {
        $this->searchCriteriaModeOr = $searchCriteriaModeOr;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaModeOr()
    {
        $this->searchCriteriaModeOr = null;
        return $this;
    }
}

