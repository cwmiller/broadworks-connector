<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterGetInstancePagedSortedListRequest
 *
 * Get a list of Call Center instances within a group.
 *         The response is either GroupCallCenterGetInstancePagedSortedListResponse or ErrorResponse.
 *         It is possible to get the instances within a specified department.
 *         
 *         If the responsePagingControl element is not provided, the paging startIndex will be set to 1 
 *         by default, and the responsePageSize will be set to the maximum ResponsePageSize by default.
 *         It is possible to search by various criteria to restrict the number of rows returned.
 *         
 *         If no sortOrder is included the response is sorted by User Id ascending by default.
 *         
 *         Multiple search criteria are logically ANDed together unless the searchCriteriaModeOr option is included.
 *         Then the search criteria are logically ORed together.
 *         
 *         ErrorResponse is returned if searchCriteriaExactHuntPolicy or searchCriteriaExactCallCenterType have multiple entries and searchCriteriaModeOr is not include.
 *
 * @see GroupCallCenterGetInstancePagedSortedListResponse
 * @see ErrorResponse
 * @see ErrorResponse
 * @Groups [{"id":"e2c537e3e39483b96620673a7012ffdd:4577","type":"sequence"}]
 */
class GroupCallCenterGetInstancePagedSortedListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group e2c537e3e39483b96620673a7012ffdd:4577
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group e2c537e3e39483b96620673a7012ffdd:4577
     * @var string|null
     */
    private $groupId = null;

    /**
     * @ElementName responsePagingControl
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ResponsePagingControl
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:4577
     * @var \CWM\BroadWorksConnector\Ocip\Models\ResponsePagingControl|null
     */
    private $responsePagingControl = null;

    /**
     * @ElementName sortOrder
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SortOrderGroupCallCenterGetInstancePagedSortedList
     * @Array
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:4577
     * @var \CWM\BroadWorksConnector\Ocip\Models\SortOrderGroupCallCenterGetInstancePagedSortedList[]
     */
    private $sortOrder = array(
        
    );

    /**
     * @ElementName searchCriteriaUserId
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserId
     * @Array
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:4577
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserId[]
     */
    private $searchCriteriaUserId = array(
        
    );

    /**
     * @ElementName searchCriteriaCallCenterName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaCallCenterName
     * @Array
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:4577
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaCallCenterName[]
     */
    private $searchCriteriaCallCenterName = array(
        
    );

    /**
     * @ElementName searchCriteriaDn
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDn
     * @Array
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:4577
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDn[]
     */
    private $searchCriteriaDn = array(
        
    );

    /**
     * @ElementName searchCriteriaExtension
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExtension
     * @Array
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:4577
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExtension[]
     */
    private $searchCriteriaExtension = array(
        
    );

    /**
     * @ElementName searchCriteriaDepartmentName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDepartmentName
     * @Array
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:4577
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDepartmentName[]
     */
    private $searchCriteriaDepartmentName = array(
        
    );

    /**
     * @ElementName searchCriteriaServiceStatus
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaServiceStatus
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:4577
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaServiceStatus|null
     */
    private $searchCriteriaServiceStatus = null;

    /**
     * @ElementName searchCriteriaExactHuntPolicy
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactHuntPolicy
     * @Array
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:4577
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactHuntPolicy[]
     */
    private $searchCriteriaExactHuntPolicy = array(
        
    );

    /**
     * @ElementName searchCriteriaExactCallCenterType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactCallCenterType
     * @Array
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:4577
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactCallCenterType[]
     */
    private $searchCriteriaExactCallCenterType = array(
        
    );

    /**
     * @ElementName searchCriteriaModeOr
     * @Type bool
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:4577
     * @var bool|null
     */
    private $searchCriteriaModeOr = null;

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
     * Getter for sortOrder
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SortOrderGroupCallCenterGetInstancePagedSortedList[]
     */
    public function getSortOrder()
    {
        return $this->sortOrder instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sortOrder;
    }

    /**
     * Setter for sortOrder
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SortOrderGroupCallCenterGetInstancePagedSortedList[] $sortOrder
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
     * @param \CWM\BroadWorksConnector\Ocip\Models\SortOrderGroupCallCenterGetInstancePagedSortedList $sortOrder
     * @return $this
     */
    public function addSortOrder($sortOrder)
    {
        $this->sortOrder[] = $sortOrder;
        return $this;
    }

    /**
     * Getter for searchCriteriaUserId
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserId[]
     */
    public function getSearchCriteriaUserId()
    {
        return $this->searchCriteriaUserId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaUserId;
    }

    /**
     * Setter for searchCriteriaUserId
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserId[] $searchCriteriaUserId
     * @return $this
     */
    public function setSearchCriteriaUserId(array $searchCriteriaUserId)
    {
        $this->searchCriteriaUserId = $searchCriteriaUserId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaUserId()
    {
        $this->searchCriteriaUserId = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaUserId
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserId $searchCriteriaUserId
     * @return $this
     */
    public function addSearchCriteriaUserId($searchCriteriaUserId)
    {
        $this->searchCriteriaUserId[] = $searchCriteriaUserId;
        return $this;
    }

    /**
     * Getter for searchCriteriaCallCenterName
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaCallCenterName[]
     */
    public function getSearchCriteriaCallCenterName()
    {
        return $this->searchCriteriaCallCenterName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaCallCenterName;
    }

    /**
     * Setter for searchCriteriaCallCenterName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaCallCenterName[] $searchCriteriaCallCenterName
     * @return $this
     */
    public function setSearchCriteriaCallCenterName(array $searchCriteriaCallCenterName)
    {
        $this->searchCriteriaCallCenterName = $searchCriteriaCallCenterName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaCallCenterName()
    {
        $this->searchCriteriaCallCenterName = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaCallCenterName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaCallCenterName $searchCriteriaCallCenterName
     * @return $this
     */
    public function addSearchCriteriaCallCenterName($searchCriteriaCallCenterName)
    {
        $this->searchCriteriaCallCenterName[] = $searchCriteriaCallCenterName;
        return $this;
    }

    /**
     * Getter for searchCriteriaDn
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDn[]
     */
    public function getSearchCriteriaDn()
    {
        return $this->searchCriteriaDn instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaDn;
    }

    /**
     * Setter for searchCriteriaDn
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDn[] $searchCriteriaDn
     * @return $this
     */
    public function setSearchCriteriaDn(array $searchCriteriaDn)
    {
        $this->searchCriteriaDn = $searchCriteriaDn;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaDn()
    {
        $this->searchCriteriaDn = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaDn
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDn $searchCriteriaDn
     * @return $this
     */
    public function addSearchCriteriaDn($searchCriteriaDn)
    {
        $this->searchCriteriaDn[] = $searchCriteriaDn;
        return $this;
    }

    /**
     * Getter for searchCriteriaExtension
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExtension[]
     */
    public function getSearchCriteriaExtension()
    {
        return $this->searchCriteriaExtension instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaExtension;
    }

    /**
     * Setter for searchCriteriaExtension
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExtension[] $searchCriteriaExtension
     * @return $this
     */
    public function setSearchCriteriaExtension(array $searchCriteriaExtension)
    {
        $this->searchCriteriaExtension = $searchCriteriaExtension;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaExtension()
    {
        $this->searchCriteriaExtension = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaExtension
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExtension $searchCriteriaExtension
     * @return $this
     */
    public function addSearchCriteriaExtension($searchCriteriaExtension)
    {
        $this->searchCriteriaExtension[] = $searchCriteriaExtension;
        return $this;
    }

    /**
     * Getter for searchCriteriaDepartmentName
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDepartmentName[]
     */
    public function getSearchCriteriaDepartmentName()
    {
        return $this->searchCriteriaDepartmentName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaDepartmentName;
    }

    /**
     * Setter for searchCriteriaDepartmentName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDepartmentName[] $searchCriteriaDepartmentName
     * @return $this
     */
    public function setSearchCriteriaDepartmentName(array $searchCriteriaDepartmentName)
    {
        $this->searchCriteriaDepartmentName = $searchCriteriaDepartmentName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaDepartmentName()
    {
        $this->searchCriteriaDepartmentName = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaDepartmentName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDepartmentName $searchCriteriaDepartmentName
     * @return $this
     */
    public function addSearchCriteriaDepartmentName($searchCriteriaDepartmentName)
    {
        $this->searchCriteriaDepartmentName[] = $searchCriteriaDepartmentName;
        return $this;
    }

    /**
     * Getter for searchCriteriaServiceStatus
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaServiceStatus
     */
    public function getSearchCriteriaServiceStatus()
    {
        return $this->searchCriteriaServiceStatus instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaServiceStatus;
    }

    /**
     * Setter for searchCriteriaServiceStatus
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaServiceStatus $searchCriteriaServiceStatus
     * @return $this
     */
    public function setSearchCriteriaServiceStatus(\CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaServiceStatus $searchCriteriaServiceStatus)
    {
        $this->searchCriteriaServiceStatus = $searchCriteriaServiceStatus;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaServiceStatus()
    {
        $this->searchCriteriaServiceStatus = null;
        return $this;
    }

    /**
     * Getter for searchCriteriaExactHuntPolicy
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactHuntPolicy[]
     */
    public function getSearchCriteriaExactHuntPolicy()
    {
        return $this->searchCriteriaExactHuntPolicy instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaExactHuntPolicy;
    }

    /**
     * Setter for searchCriteriaExactHuntPolicy
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactHuntPolicy[] $searchCriteriaExactHuntPolicy
     * @return $this
     */
    public function setSearchCriteriaExactHuntPolicy(array $searchCriteriaExactHuntPolicy)
    {
        $this->searchCriteriaExactHuntPolicy = $searchCriteriaExactHuntPolicy;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaExactHuntPolicy()
    {
        $this->searchCriteriaExactHuntPolicy = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaExactHuntPolicy
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactHuntPolicy $searchCriteriaExactHuntPolicy
     * @return $this
     */
    public function addSearchCriteriaExactHuntPolicy($searchCriteriaExactHuntPolicy)
    {
        $this->searchCriteriaExactHuntPolicy[] = $searchCriteriaExactHuntPolicy;
        return $this;
    }

    /**
     * Getter for searchCriteriaExactCallCenterType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactCallCenterType[]
     */
    public function getSearchCriteriaExactCallCenterType()
    {
        return $this->searchCriteriaExactCallCenterType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaExactCallCenterType;
    }

    /**
     * Setter for searchCriteriaExactCallCenterType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactCallCenterType[] $searchCriteriaExactCallCenterType
     * @return $this
     */
    public function setSearchCriteriaExactCallCenterType(array $searchCriteriaExactCallCenterType)
    {
        $this->searchCriteriaExactCallCenterType = $searchCriteriaExactCallCenterType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaExactCallCenterType()
    {
        $this->searchCriteriaExactCallCenterType = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaExactCallCenterType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactCallCenterType $searchCriteriaExactCallCenterType
     * @return $this
     */
    public function addSearchCriteriaExactCallCenterType($searchCriteriaExactCallCenterType)
    {
        $this->searchCriteriaExactCallCenterType[] = $searchCriteriaExactCallCenterType;
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

