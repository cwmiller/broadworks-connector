<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupGetListInServiceProviderPagedSortedListRequest
 *
 * Request the list of groups in a service provider or enterprise.
 *         If no sortOrder is included, the response is sorted by Group Id ascending by default.
 *         The response is either a GroupGetListInServiceProviderPagedSortedListResponse or an ErrorResponse.
 *         If the responsePagingControl element is not provided, the paging startIndex will be set to 1 by 
 *         default, and the responsePageSize will be set to the maximum responsePageSize by default.
 *         Multiple search criteria are logically ANDed together unless the searchCriteriaModeOr option is 
 *         included. Then the search criteria are logically ORed together.
 *
 * @see GroupGetListInServiceProviderPagedSortedListResponse
 * @see ErrorResponse
 * @Groups [{"id":"f3a93cf15de4abd7903673e44ee3e07b:6083","type":"sequence"}]
 */
class GroupGetListInServiceProviderPagedSortedListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group f3a93cf15de4abd7903673e44ee3e07b:6083
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName responsePagingControl
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ResponsePagingControl
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:6083
     * @var \CWM\BroadWorksConnector\Ocip\Models\ResponsePagingControl|null
     */
    protected $responsePagingControl = null;

    /**
     * @ElementName sortOrder
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SortOrderGroupGetListInServiceProviderPagedSortedList
     * @Array
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:6083
     * @var \CWM\BroadWorksConnector\Ocip\Models\SortOrderGroupGetListInServiceProviderPagedSortedList[]
     */
    protected $sortOrder = array(
        
    );

    /**
     * @ElementName searchCriteriaGroupId
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupId
     * @Array
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:6083
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupId[]
     */
    protected $searchCriteriaGroupId = array(
        
    );

    /**
     * @ElementName searchCriteriaGroupName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupName
     * @Array
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:6083
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupName[]
     */
    protected $searchCriteriaGroupName = array(
        
    );

    /**
     * @ElementName searchCriteriaModeOr
     * @Type bool
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:6083
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
     * Getter for sortOrder
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SortOrderGroupGetListInServiceProviderPagedSortedList[]
     */
    public function getSortOrder()
    {
        return $this->sortOrder instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sortOrder;
    }

    /**
     * Setter for sortOrder
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SortOrderGroupGetListInServiceProviderPagedSortedList[] $sortOrder
     * @return $this
     */
    public function setSortOrder(array $sortOrder)
    {
        $this->sortOrder = $sortOrder;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSortOrder()
    {
        $this->sortOrder = null;
        return $this;
    }

    /**
     * Adder for sortOrder
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SortOrderGroupGetListInServiceProviderPagedSortedList $sortOrder
     * @return $this
     */
    public function addSortOrder($sortOrder)
    {
        $this->sortOrder[] = $sortOrder;
        return $this;
    }

    /**
     * Getter for searchCriteriaGroupId
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupId[]
     */
    public function getSearchCriteriaGroupId()
    {
        return $this->searchCriteriaGroupId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaGroupId;
    }

    /**
     * Setter for searchCriteriaGroupId
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupId[] $searchCriteriaGroupId
     * @return $this
     */
    public function setSearchCriteriaGroupId(array $searchCriteriaGroupId)
    {
        $this->searchCriteriaGroupId = $searchCriteriaGroupId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaGroupId()
    {
        $this->searchCriteriaGroupId = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaGroupId
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupId $searchCriteriaGroupId
     * @return $this
     */
    public function addSearchCriteriaGroupId($searchCriteriaGroupId)
    {
        $this->searchCriteriaGroupId[] = $searchCriteriaGroupId;
        return $this;
    }

    /**
     * Getter for searchCriteriaGroupName
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupName[]
     */
    public function getSearchCriteriaGroupName()
    {
        return $this->searchCriteriaGroupName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaGroupName;
    }

    /**
     * Setter for searchCriteriaGroupName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupName[] $searchCriteriaGroupName
     * @return $this
     */
    public function setSearchCriteriaGroupName(array $searchCriteriaGroupName)
    {
        $this->searchCriteriaGroupName = $searchCriteriaGroupName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaGroupName()
    {
        $this->searchCriteriaGroupName = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaGroupName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupName $searchCriteriaGroupName
     * @return $this
     */
    public function addSearchCriteriaGroupName($searchCriteriaGroupName)
    {
        $this->searchCriteriaGroupName[] = $searchCriteriaGroupName;
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

