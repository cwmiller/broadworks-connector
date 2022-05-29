<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallParkGetInstancePagedSortedListRequest
 *
 * Request to get a list of Call Park group instances within a group.
 *         
 *         If the responsePagingControl element is not provided, the paging startIndex will be set to 1 
 *         by default, and the responsePageSize will be set to the maximum ResponsePageSize by default.
 *         It is possible to search by various criteria to restrict the number of rows returned.
 *         
 *         Multiple search criteria are logically ANDed together unless the searchCriteriaModeOr option is included.
 *         Then the search criteria are logically ORed together.
 *         
 *         The response is either GroupCallParkGetInstancePagedSortedListResponse or ErrorResponse.
 *
 * @see GroupCallParkGetInstancePagedSortedListResponse
 * @see ErrorResponse
 * @Groups [{"id":"7a925e891158dfa3cb1319e045608894:326","type":"sequence"}]
 */
class GroupCallParkGetInstancePagedSortedListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 7a925e891158dfa3cb1319e045608894:326
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group 7a925e891158dfa3cb1319e045608894:326
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $groupId = null;

    /**
     * @ElementName responsePagingControl
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ResponsePagingControl
     * @Optional
     * @Group 7a925e891158dfa3cb1319e045608894:326
     * @var \CWM\BroadWorksConnector\Ocip\Models\ResponsePagingControl|null
     */
    protected $responsePagingControl = null;

    /**
     * @ElementName sortByCallParkName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SortByCallParkName
     * @Optional
     * @Group 7a925e891158dfa3cb1319e045608894:326
     * @var \CWM\BroadWorksConnector\Ocip\Models\SortByCallParkName|null
     */
    protected $sortByCallParkName = null;

    /**
     * @ElementName searchCriteriaCallParkName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaCallParkName
     * @Array
     * @Optional
     * @Group 7a925e891158dfa3cb1319e045608894:326
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaCallParkName[]
     */
    protected $searchCriteriaCallParkName = array(
        
    );

    /**
     * @ElementName searchCriteriaModeOr
     * @Type bool
     * @Optional
     * @Group 7a925e891158dfa3cb1319e045608894:326
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
     * Getter for sortByCallParkName
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SortByCallParkName
     */
    public function getSortByCallParkName()
    {
        return $this->sortByCallParkName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sortByCallParkName;
    }

    /**
     * Setter for sortByCallParkName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SortByCallParkName $sortByCallParkName
     * @return $this
     */
    public function setSortByCallParkName(\CWM\BroadWorksConnector\Ocip\Models\SortByCallParkName $sortByCallParkName)
    {
        $this->sortByCallParkName = $sortByCallParkName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSortByCallParkName()
    {
        $this->sortByCallParkName = null;
        return $this;
    }

    /**
     * Getter for searchCriteriaCallParkName
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaCallParkName[]
     */
    public function getSearchCriteriaCallParkName()
    {
        return $this->searchCriteriaCallParkName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaCallParkName;
    }

    /**
     * Setter for searchCriteriaCallParkName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaCallParkName[] $searchCriteriaCallParkName
     * @return $this
     */
    public function setSearchCriteriaCallParkName(array $searchCriteriaCallParkName)
    {
        $this->searchCriteriaCallParkName = $searchCriteriaCallParkName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaCallParkName()
    {
        $this->searchCriteriaCallParkName = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaCallParkName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaCallParkName $searchCriteriaCallParkName
     * @return $this
     */
    public function addSearchCriteriaCallParkName($searchCriteriaCallParkName)
    {
        $this->searchCriteriaCallParkName[] = $searchCriteriaCallParkName;
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

