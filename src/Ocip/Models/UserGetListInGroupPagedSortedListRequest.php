<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserGetListInGroupPagedSortedListRequest
 *
 * Request the list of users in a group.
 *         The response is either a UserGetListInGroupPagedSortedListResponse or an ErrorResponse.
 *   
 *         If the responsePagingControl element is not provided, the paging startIndex will be set to 1 
 *         by default, and the responsePageSize will be set to the maximum ResponsePageSize by default.
 *         It is possible to search by various criteria to restrict the number of rows returned.
 *         
 *         If no sortOrder is included the response is sorted by User Id ascending by default. 
 *         
 *         A limitation to the search by DN activation exists when the Number Activation mode is set to
 *         Off. In this case DNs not assigned to users are never returned by queries with the
 *         "dnActivationSearchCriteria" included.
 *         
 *         Multiple search criteria are logically ANDed together unless the searchCriteriaModeOr option is included.
 *         Then the search criteria are logically ORed together.
 *
 * @see UserGetListInGroupPagedSortedListResponse
 * @see ErrorResponse
 * @Groups [{"id":"53d18cc797d03d802cbc411ad821f1d4:1737","type":"sequence"}]
 */
class UserGetListInGroupPagedSortedListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 53d18cc797d03d802cbc411ad821f1d4:1737
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group 53d18cc797d03d802cbc411ad821f1d4:1737
     * @var string|null
     */
    private $groupId = null;

    /**
     * @ElementName responsePagingControl
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ResponsePagingControl
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:1737
     * @var \CWM\BroadWorksConnector\Ocip\Models\ResponsePagingControl|null
     */
    private $responsePagingControl = null;

    /**
     * @ElementName sortOrder
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SortOrderUserGetListInGroupPagedSortedList
     * @Array
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:1737
     * @var \CWM\BroadWorksConnector\Ocip\Models\SortOrderUserGetListInGroupPagedSortedList[]
     */
    private $sortOrder = array(
        
    );

    /**
     * @ElementName searchCriteriaUserLastName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserLastName
     * @Array
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:1737
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserLastName[]
     */
    private $searchCriteriaUserLastName = array(
        
    );

    /**
     * @ElementName searchCriteriaUserFirstName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserFirstName
     * @Array
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:1737
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserFirstName[]
     */
    private $searchCriteriaUserFirstName = array(
        
    );

    /**
     * @ElementName searchCriteriaDn
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDn
     * @Array
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:1737
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDn[]
     */
    private $searchCriteriaDn = array(
        
    );

    /**
     * @ElementName searchCriteriaEmailAddress
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaEmailAddress
     * @Array
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:1737
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaEmailAddress[]
     */
    private $searchCriteriaEmailAddress = array(
        
    );

    /**
     * @ElementName searchCriteriaDepartmentName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDepartmentName
     * @Array
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:1737
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDepartmentName[]
     */
    private $searchCriteriaDepartmentName = array(
        
    );

    /**
     * @ElementName searchCriteriaExactUserInTrunkGroup
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactUserInTrunkGroup
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:1737
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactUserInTrunkGroup|null
     */
    private $searchCriteriaExactUserInTrunkGroup = null;

    /**
     * @ElementName searchCriteriaUserId
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserId
     * @Array
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:1737
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserId[]
     */
    private $searchCriteriaUserId = array(
        
    );

    /**
     * @ElementName searchCriteriaExtension
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExtension
     * @Array
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:1737
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExtension[]
     */
    private $searchCriteriaExtension = array(
        
    );

    /**
     * @ElementName searchCriteriaExactDnActivation
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactDnActivation
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:1737
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactDnActivation|null
     */
    private $searchCriteriaExactDnActivation = null;

    /**
     * @ElementName searchCriteriaModeOr
     * @Type bool
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:1737
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\SortOrderUserGetListInGroupPagedSortedList[]
     */
    public function getSortOrder()
    {
        return $this->sortOrder instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sortOrder;
    }

    /**
     * Setter for sortOrder
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SortOrderUserGetListInGroupPagedSortedList[] $sortOrder
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
     * @param \CWM\BroadWorksConnector\Ocip\Models\SortOrderUserGetListInGroupPagedSortedList $sortOrder
     * @return $this
     */
    public function addSortOrder($sortOrder)
    {
        $this->sortOrder[] = $sortOrder;
        return $this;
    }

    /**
     * Getter for searchCriteriaUserLastName
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserLastName[]
     */
    public function getSearchCriteriaUserLastName()
    {
        return $this->searchCriteriaUserLastName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaUserLastName;
    }

    /**
     * Setter for searchCriteriaUserLastName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserLastName[] $searchCriteriaUserLastName
     * @return $this
     */
    public function setSearchCriteriaUserLastName(array $searchCriteriaUserLastName)
    {
        $this->searchCriteriaUserLastName = $searchCriteriaUserLastName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaUserLastName()
    {
        $this->searchCriteriaUserLastName = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaUserLastName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserLastName $searchCriteriaUserLastName
     * @return $this
     */
    public function addSearchCriteriaUserLastName($searchCriteriaUserLastName)
    {
        $this->searchCriteriaUserLastName[] = $searchCriteriaUserLastName;
        return $this;
    }

    /**
     * Getter for searchCriteriaUserFirstName
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserFirstName[]
     */
    public function getSearchCriteriaUserFirstName()
    {
        return $this->searchCriteriaUserFirstName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaUserFirstName;
    }

    /**
     * Setter for searchCriteriaUserFirstName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserFirstName[] $searchCriteriaUserFirstName
     * @return $this
     */
    public function setSearchCriteriaUserFirstName(array $searchCriteriaUserFirstName)
    {
        $this->searchCriteriaUserFirstName = $searchCriteriaUserFirstName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaUserFirstName()
    {
        $this->searchCriteriaUserFirstName = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaUserFirstName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserFirstName $searchCriteriaUserFirstName
     * @return $this
     */
    public function addSearchCriteriaUserFirstName($searchCriteriaUserFirstName)
    {
        $this->searchCriteriaUserFirstName[] = $searchCriteriaUserFirstName;
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
     * Getter for searchCriteriaEmailAddress
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaEmailAddress[]
     */
    public function getSearchCriteriaEmailAddress()
    {
        return $this->searchCriteriaEmailAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaEmailAddress;
    }

    /**
     * Setter for searchCriteriaEmailAddress
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaEmailAddress[] $searchCriteriaEmailAddress
     * @return $this
     */
    public function setSearchCriteriaEmailAddress(array $searchCriteriaEmailAddress)
    {
        $this->searchCriteriaEmailAddress = $searchCriteriaEmailAddress;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaEmailAddress()
    {
        $this->searchCriteriaEmailAddress = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaEmailAddress
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaEmailAddress $searchCriteriaEmailAddress
     * @return $this
     */
    public function addSearchCriteriaEmailAddress($searchCriteriaEmailAddress)
    {
        $this->searchCriteriaEmailAddress[] = $searchCriteriaEmailAddress;
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
     * Getter for searchCriteriaExactUserInTrunkGroup
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactUserInTrunkGroup
     */
    public function getSearchCriteriaExactUserInTrunkGroup()
    {
        return $this->searchCriteriaExactUserInTrunkGroup instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaExactUserInTrunkGroup;
    }

    /**
     * Setter for searchCriteriaExactUserInTrunkGroup
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactUserInTrunkGroup $searchCriteriaExactUserInTrunkGroup
     * @return $this
     */
    public function setSearchCriteriaExactUserInTrunkGroup(\CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactUserInTrunkGroup $searchCriteriaExactUserInTrunkGroup)
    {
        $this->searchCriteriaExactUserInTrunkGroup = $searchCriteriaExactUserInTrunkGroup;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaExactUserInTrunkGroup()
    {
        $this->searchCriteriaExactUserInTrunkGroup = null;
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
     * Getter for searchCriteriaExactDnActivation
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactDnActivation
     */
    public function getSearchCriteriaExactDnActivation()
    {
        return $this->searchCriteriaExactDnActivation instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaExactDnActivation;
    }

    /**
     * Setter for searchCriteriaExactDnActivation
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactDnActivation $searchCriteriaExactDnActivation
     * @return $this
     */
    public function setSearchCriteriaExactDnActivation(\CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactDnActivation $searchCriteriaExactDnActivation)
    {
        $this->searchCriteriaExactDnActivation = $searchCriteriaExactDnActivation;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaExactDnActivation()
    {
        $this->searchCriteriaExactDnActivation = null;
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

