<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupScheduleGetPagedSortedListRequest
 *
 * Get the list of schedules viewable by a group.
 *         The response is either a GroupScheduleGetPagedSortedListResponse or an ErrorResponse.
 *         If no sortOrder is included, the response is sorted by Name ascending by default.
 *         If the responsePagingControl element is not provided, the paging startIndex will be 
 *         set to 1 by default, and the responsePageSize will be set to the maximum 
 *         responsePageSize by default.
 *         Multiple search criteria are logically ANDed together unless the searchCriteriaModeOr option 
 *         is included. Then the search criteria are logically ORed together.
 *
 * @see GroupScheduleGetPagedSortedListResponse
 * @see ErrorResponse
 * @Groups [{"id":"f3a93cf15de4abd7903673e44ee3e07b:7561","type":"sequence"}]
 */
class GroupScheduleGetPagedSortedListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group f3a93cf15de4abd7903673e44ee3e07b:7561
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group f3a93cf15de4abd7903673e44ee3e07b:7561
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $groupId = null;

    /**
     * @ElementName responsePagingControl
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ResponsePagingControl
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:7561
     * @var \CWM\BroadWorksConnector\Ocip\Models\ResponsePagingControl|null
     */
    protected $responsePagingControl = null;

    /**
     * @ElementName sortByScheduleName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SortByScheduleName
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:7561
     * @var \CWM\BroadWorksConnector\Ocip\Models\SortByScheduleName|null
     */
    protected $sortByScheduleName = null;

    /**
     * @ElementName searchCriteriaScheduleName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaScheduleName
     * @Array
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:7561
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaScheduleName[]
     */
    protected $searchCriteriaScheduleName = array(
        
    );

    /**
     * @ElementName searchCriteriaExactScheduleType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactScheduleType
     * @Array
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:7561
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactScheduleType[]
     */
    protected $searchCriteriaExactScheduleType = array(
        
    );

    /**
     * @ElementName searchCriteriaExactScheduleLevel
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactScheduleLevel
     * @Array
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:7561
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactScheduleLevel[]
     */
    protected $searchCriteriaExactScheduleLevel = array(
        
    );

    /**
     * @ElementName searchCriteriaModeOr
     * @Type bool
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:7561
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
     * Getter for sortByScheduleName
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SortByScheduleName
     */
    public function getSortByScheduleName()
    {
        return $this->sortByScheduleName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sortByScheduleName;
    }

    /**
     * Setter for sortByScheduleName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SortByScheduleName $sortByScheduleName
     * @return $this
     */
    public function setSortByScheduleName(\CWM\BroadWorksConnector\Ocip\Models\SortByScheduleName $sortByScheduleName)
    {
        $this->sortByScheduleName = $sortByScheduleName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSortByScheduleName()
    {
        $this->sortByScheduleName = null;
        return $this;
    }

    /**
     * Getter for searchCriteriaScheduleName
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaScheduleName[]
     */
    public function getSearchCriteriaScheduleName()
    {
        return $this->searchCriteriaScheduleName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaScheduleName;
    }

    /**
     * Setter for searchCriteriaScheduleName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaScheduleName[] $searchCriteriaScheduleName
     * @return $this
     */
    public function setSearchCriteriaScheduleName(array $searchCriteriaScheduleName)
    {
        $this->searchCriteriaScheduleName = $searchCriteriaScheduleName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaScheduleName()
    {
        $this->searchCriteriaScheduleName = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaScheduleName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaScheduleName $searchCriteriaScheduleName
     * @return $this
     */
    public function addSearchCriteriaScheduleName($searchCriteriaScheduleName)
    {
        $this->searchCriteriaScheduleName[] = $searchCriteriaScheduleName;
        return $this;
    }

    /**
     * Getter for searchCriteriaExactScheduleType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactScheduleType[]
     */
    public function getSearchCriteriaExactScheduleType()
    {
        return $this->searchCriteriaExactScheduleType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaExactScheduleType;
    }

    /**
     * Setter for searchCriteriaExactScheduleType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactScheduleType[] $searchCriteriaExactScheduleType
     * @return $this
     */
    public function setSearchCriteriaExactScheduleType(array $searchCriteriaExactScheduleType)
    {
        $this->searchCriteriaExactScheduleType = $searchCriteriaExactScheduleType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaExactScheduleType()
    {
        $this->searchCriteriaExactScheduleType = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaExactScheduleType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactScheduleType $searchCriteriaExactScheduleType
     * @return $this
     */
    public function addSearchCriteriaExactScheduleType($searchCriteriaExactScheduleType)
    {
        $this->searchCriteriaExactScheduleType[] = $searchCriteriaExactScheduleType;
        return $this;
    }

    /**
     * Getter for searchCriteriaExactScheduleLevel
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactScheduleLevel[]
     */
    public function getSearchCriteriaExactScheduleLevel()
    {
        return $this->searchCriteriaExactScheduleLevel instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaExactScheduleLevel;
    }

    /**
     * Setter for searchCriteriaExactScheduleLevel
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactScheduleLevel[] $searchCriteriaExactScheduleLevel
     * @return $this
     */
    public function setSearchCriteriaExactScheduleLevel(array $searchCriteriaExactScheduleLevel)
    {
        $this->searchCriteriaExactScheduleLevel = $searchCriteriaExactScheduleLevel;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaExactScheduleLevel()
    {
        $this->searchCriteriaExactScheduleLevel = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaExactScheduleLevel
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactScheduleLevel $searchCriteriaExactScheduleLevel
     * @return $this
     */
    public function addSearchCriteriaExactScheduleLevel($searchCriteriaExactScheduleLevel)
    {
        $this->searchCriteriaExactScheduleLevel[] = $searchCriteriaExactScheduleLevel;
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

