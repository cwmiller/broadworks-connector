<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAdminGetPagedSortedListRequest
 *
 * Get a list of group and department administrators within the group.
 *         The response is either a GroupAdminGetPagedSortedListResponse or an ErrorResponse.
 *         If no sort criterion is included, the response is sorted by administrator id ascending by default.
 *         If the responsePagingControl element is not provided, the paging startIndex will be 
 *         set to 1 by default, and the responsePageSize will be set to the maximum 
 *         responsePageSize by default.
 *         Multiple search criteria are logically ANDed together unless the searchCriteriaModeOr option is 
 *         included. Then the search criteria are logically ORed together.
 *
 * @see GroupAdminGetPagedSortedListResponse
 * @see ErrorResponse
 * @Groups [{"id":"f3a93cf15de4abd7903673e44ee3e07b:1136","type":"sequence"}]
 */
class GroupAdminGetPagedSortedListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group f3a93cf15de4abd7903673e44ee3e07b:1136
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group f3a93cf15de4abd7903673e44ee3e07b:1136
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $groupId = null;

    /**
     * @ElementName responsePagingControl
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ResponsePagingControl
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:1136
     * @var \CWM\BroadWorksConnector\Ocip\Models\ResponsePagingControl|null
     */
    private $responsePagingControl = null;

    /**
     * @ElementName sortOrder
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SortOrderGroupAdminGetPagedSortedList
     * @Array
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:1136
     * @var \CWM\BroadWorksConnector\Ocip\Models\SortOrderGroupAdminGetPagedSortedList[]
     */
    private $sortOrder = array(
        
    );

    /**
     * @ElementName searchCriteriaAdminId
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaAdminId
     * @Array
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:1136
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaAdminId[]
     */
    private $searchCriteriaAdminId = array(
        
    );

    /**
     * @ElementName searchCriteriaAdminLastName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaAdminLastName
     * @Array
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:1136
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaAdminLastName[]
     */
    private $searchCriteriaAdminLastName = array(
        
    );

    /**
     * @ElementName searchCriteriaAdminFirstName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaAdminFirstName
     * @Array
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:1136
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaAdminFirstName[]
     */
    private $searchCriteriaAdminFirstName = array(
        
    );

    /**
     * @ElementName searchCriteriaExactGroupAdminType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactGroupAdminType
     * @Array
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:1136
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactGroupAdminType[]
     */
    private $searchCriteriaExactGroupAdminType = array(
        
    );

    /**
     * @ElementName searchCriteriaLanguage
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaLanguage
     * @Array
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:1136
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaLanguage[]
     */
    private $searchCriteriaLanguage = array(
        
    );

    /**
     * @ElementName searchCriteriaDepartmentName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDepartmentName
     * @Array
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:1136
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDepartmentName[]
     */
    private $searchCriteriaDepartmentName = array(
        
    );

    /**
     * @ElementName searchCriteriaModeOr
     * @Type bool
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:1136
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\SortOrderGroupAdminGetPagedSortedList[]
     */
    public function getSortOrder()
    {
        return $this->sortOrder instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sortOrder;
    }

    /**
     * Setter for sortOrder
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SortOrderGroupAdminGetPagedSortedList[] $sortOrder
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
     * @param \CWM\BroadWorksConnector\Ocip\Models\SortOrderGroupAdminGetPagedSortedList $sortOrder
     * @return $this
     */
    public function addSortOrder($sortOrder)
    {
        $this->sortOrder[] = $sortOrder;
        return $this;
    }

    /**
     * Getter for searchCriteriaAdminId
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaAdminId[]
     */
    public function getSearchCriteriaAdminId()
    {
        return $this->searchCriteriaAdminId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaAdminId;
    }

    /**
     * Setter for searchCriteriaAdminId
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaAdminId[] $searchCriteriaAdminId
     * @return $this
     */
    public function setSearchCriteriaAdminId(array $searchCriteriaAdminId)
    {
        $this->searchCriteriaAdminId = $searchCriteriaAdminId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaAdminId()
    {
        $this->searchCriteriaAdminId = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaAdminId
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaAdminId $searchCriteriaAdminId
     * @return $this
     */
    public function addSearchCriteriaAdminId($searchCriteriaAdminId)
    {
        $this->searchCriteriaAdminId[] = $searchCriteriaAdminId;
        return $this;
    }

    /**
     * Getter for searchCriteriaAdminLastName
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaAdminLastName[]
     */
    public function getSearchCriteriaAdminLastName()
    {
        return $this->searchCriteriaAdminLastName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaAdminLastName;
    }

    /**
     * Setter for searchCriteriaAdminLastName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaAdminLastName[] $searchCriteriaAdminLastName
     * @return $this
     */
    public function setSearchCriteriaAdminLastName(array $searchCriteriaAdminLastName)
    {
        $this->searchCriteriaAdminLastName = $searchCriteriaAdminLastName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaAdminLastName()
    {
        $this->searchCriteriaAdminLastName = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaAdminLastName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaAdminLastName $searchCriteriaAdminLastName
     * @return $this
     */
    public function addSearchCriteriaAdminLastName($searchCriteriaAdminLastName)
    {
        $this->searchCriteriaAdminLastName[] = $searchCriteriaAdminLastName;
        return $this;
    }

    /**
     * Getter for searchCriteriaAdminFirstName
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaAdminFirstName[]
     */
    public function getSearchCriteriaAdminFirstName()
    {
        return $this->searchCriteriaAdminFirstName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaAdminFirstName;
    }

    /**
     * Setter for searchCriteriaAdminFirstName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaAdminFirstName[] $searchCriteriaAdminFirstName
     * @return $this
     */
    public function setSearchCriteriaAdminFirstName(array $searchCriteriaAdminFirstName)
    {
        $this->searchCriteriaAdminFirstName = $searchCriteriaAdminFirstName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaAdminFirstName()
    {
        $this->searchCriteriaAdminFirstName = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaAdminFirstName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaAdminFirstName $searchCriteriaAdminFirstName
     * @return $this
     */
    public function addSearchCriteriaAdminFirstName($searchCriteriaAdminFirstName)
    {
        $this->searchCriteriaAdminFirstName[] = $searchCriteriaAdminFirstName;
        return $this;
    }

    /**
     * Getter for searchCriteriaExactGroupAdminType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactGroupAdminType[]
     */
    public function getSearchCriteriaExactGroupAdminType()
    {
        return $this->searchCriteriaExactGroupAdminType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaExactGroupAdminType;
    }

    /**
     * Setter for searchCriteriaExactGroupAdminType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactGroupAdminType[] $searchCriteriaExactGroupAdminType
     * @return $this
     */
    public function setSearchCriteriaExactGroupAdminType(array $searchCriteriaExactGroupAdminType)
    {
        $this->searchCriteriaExactGroupAdminType = $searchCriteriaExactGroupAdminType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaExactGroupAdminType()
    {
        $this->searchCriteriaExactGroupAdminType = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaExactGroupAdminType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactGroupAdminType $searchCriteriaExactGroupAdminType
     * @return $this
     */
    public function addSearchCriteriaExactGroupAdminType($searchCriteriaExactGroupAdminType)
    {
        $this->searchCriteriaExactGroupAdminType[] = $searchCriteriaExactGroupAdminType;
        return $this;
    }

    /**
     * Getter for searchCriteriaLanguage
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaLanguage[]
     */
    public function getSearchCriteriaLanguage()
    {
        return $this->searchCriteriaLanguage instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaLanguage;
    }

    /**
     * Setter for searchCriteriaLanguage
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaLanguage[] $searchCriteriaLanguage
     * @return $this
     */
    public function setSearchCriteriaLanguage(array $searchCriteriaLanguage)
    {
        $this->searchCriteriaLanguage = $searchCriteriaLanguage;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaLanguage()
    {
        $this->searchCriteriaLanguage = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaLanguage
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaLanguage $searchCriteriaLanguage
     * @return $this
     */
    public function addSearchCriteriaLanguage($searchCriteriaLanguage)
    {
        $this->searchCriteriaLanguage[] = $searchCriteriaLanguage;
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

