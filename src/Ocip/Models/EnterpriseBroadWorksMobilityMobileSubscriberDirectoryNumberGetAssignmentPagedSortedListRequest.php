<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseBroadWorksMobilityMobileSubscriberDirectoryNumberGetAssignmentPagedSortedListRequest
 *
 * Request a summary table of all Mobile Subscriber Directory Numbers in an enterprise.
 *         If the responsePagingControl element is not provided, the paging startIndex will be set to 1 
 *         by default, and the  responsePageSize will be set to  the maximum ResponsePageSize by default.
 *         If no sortOrder is included the response is sorted by Mobile Number ascending by default.
 *         Multiple search criteria are logically ANDed together unless the searchCriteriaModeOr option is included.
 *         Then the search criteria are logically ORed together.
 *         The department in both the search criteria and sort by fields refer to the department of the user.        
 *         The response is either EnterpriseBroadWorksMobilityMobileSubscriberDirectoryNumberGetAssignmentPagedSortedListResponse or ErrorResponse.
 *         Replaced by: EnterpriseBroadWorksMobilityMobileSubscriberDirectoryNumberGetAssignmentPagedSortedListRequest22
 *
 * @see EnterpriseBroadWorksMobilityMobileSubscriberDirectoryNumberGetAssignmentPagedSortedListResponse
 * @see ErrorResponse
 * @see EnterpriseBroadWorksMobilityMobileSubscriberDirectoryNumberGetAssignmentPagedSortedListRequest22
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:2010","type":"sequence"}]
 */
class EnterpriseBroadWorksMobilityMobileSubscriberDirectoryNumberGetAssignmentPagedSortedListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:2010
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName responsePagingControl
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ResponsePagingControl
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:2010
     * @var \CWM\BroadWorksConnector\Ocip\Models\ResponsePagingControl|null
     */
    protected $responsePagingControl = null;

    /**
     * @ElementName sortOrder
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SortOrderEnterpriseBroadWorksMobilityMobileSubscriberDirectoryNumberGetAssignmentPagedSortedList
     * @Array
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:2010
     * @var \CWM\BroadWorksConnector\Ocip\Models\SortOrderEnterpriseBroadWorksMobilityMobileSubscriberDirectoryNumberGetAssignmentPagedSortedList[]
     */
    protected $sortOrder = [
        
    ];

    /**
     * @ElementName searchCriteriaMobileSubscriberDirectoryNumber
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaMobileSubscriberDirectoryNumber
     * @Array
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:2010
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaMobileSubscriberDirectoryNumber[]
     */
    protected $searchCriteriaMobileSubscriberDirectoryNumber = [
        
    ];

    /**
     * @ElementName searchCriteriaGroupId
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupId
     * @Array
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:2010
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupId[]
     */
    protected $searchCriteriaGroupId = [
        
    ];

    /**
     * @ElementName searchCriteriaUserId
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserId
     * @Array
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:2010
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserId[]
     */
    protected $searchCriteriaUserId = [
        
    ];

    /**
     * @ElementName searchCriteriaUserLastName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserLastName
     * @Array
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:2010
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserLastName[]
     */
    protected $searchCriteriaUserLastName = [
        
    ];

    /**
     * @ElementName searchCriteriaUserFirstName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserFirstName
     * @Array
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:2010
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserFirstName[]
     */
    protected $searchCriteriaUserFirstName = [
        
    ];

    /**
     * @ElementName searchCriteriaDn
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDn
     * @Array
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:2010
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDn[]
     */
    protected $searchCriteriaDn = [
        
    ];

    /**
     * @ElementName searchCriteriaExtension
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExtension
     * @Array
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:2010
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExtension[]
     */
    protected $searchCriteriaExtension = [
        
    ];

    /**
     * @ElementName searchCriteriaDepartmentName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDepartmentName
     * @Array
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:2010
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDepartmentName[]
     */
    protected $searchCriteriaDepartmentName = [
        
    ];

    /**
     * @ElementName searchCriteriaExactMobileNetwork
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactMobileNetwork
     * @Array
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:2010
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactMobileNetwork[]
     */
    protected $searchCriteriaExactMobileNetwork = [
        
    ];

    /**
     * @ElementName searchCriteriaExactMobileDnAvailability
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactMobileDnAvailability
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:2010
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactMobileDnAvailability|null
     */
    protected $searchCriteriaExactMobileDnAvailability = null;

    /**
     * @ElementName searchCriteriaModeOr
     * @Type bool
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:2010
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\SortOrderEnterpriseBroadWorksMobilityMobileSubscriberDirectoryNumberGetAssignmentPagedSortedList[]
     */
    public function getSortOrder()
    {
        return $this->sortOrder instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sortOrder;
    }

    /**
     * Setter for sortOrder
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SortOrderEnterpriseBroadWorksMobilityMobileSubscriberDirectoryNumberGetAssignmentPagedSortedList[] $sortOrder
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
     * @param \CWM\BroadWorksConnector\Ocip\Models\SortOrderEnterpriseBroadWorksMobilityMobileSubscriberDirectoryNumberGetAssignmentPagedSortedList $sortOrder
     * @return $this
     */
    public function addSortOrder($sortOrder)
    {
        $this->sortOrder[] = $sortOrder;
        return $this;
    }

    /**
     * Getter for searchCriteriaMobileSubscriberDirectoryNumber
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaMobileSubscriberDirectoryNumber[]
     */
    public function getSearchCriteriaMobileSubscriberDirectoryNumber()
    {
        return $this->searchCriteriaMobileSubscriberDirectoryNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaMobileSubscriberDirectoryNumber;
    }

    /**
     * Setter for searchCriteriaMobileSubscriberDirectoryNumber
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaMobileSubscriberDirectoryNumber[] $searchCriteriaMobileSubscriberDirectoryNumber
     * @return $this
     */
    public function setSearchCriteriaMobileSubscriberDirectoryNumber(array $searchCriteriaMobileSubscriberDirectoryNumber)
    {
        $this->searchCriteriaMobileSubscriberDirectoryNumber = $searchCriteriaMobileSubscriberDirectoryNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaMobileSubscriberDirectoryNumber()
    {
        $this->searchCriteriaMobileSubscriberDirectoryNumber = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaMobileSubscriberDirectoryNumber
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaMobileSubscriberDirectoryNumber $searchCriteriaMobileSubscriberDirectoryNumber
     * @return $this
     */
    public function addSearchCriteriaMobileSubscriberDirectoryNumber($searchCriteriaMobileSubscriberDirectoryNumber)
    {
        $this->searchCriteriaMobileSubscriberDirectoryNumber[] = $searchCriteriaMobileSubscriberDirectoryNumber;
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
     * Getter for searchCriteriaExactMobileNetwork
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactMobileNetwork[]
     */
    public function getSearchCriteriaExactMobileNetwork()
    {
        return $this->searchCriteriaExactMobileNetwork instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaExactMobileNetwork;
    }

    /**
     * Setter for searchCriteriaExactMobileNetwork
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactMobileNetwork[] $searchCriteriaExactMobileNetwork
     * @return $this
     */
    public function setSearchCriteriaExactMobileNetwork(array $searchCriteriaExactMobileNetwork)
    {
        $this->searchCriteriaExactMobileNetwork = $searchCriteriaExactMobileNetwork;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaExactMobileNetwork()
    {
        $this->searchCriteriaExactMobileNetwork = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaExactMobileNetwork
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactMobileNetwork $searchCriteriaExactMobileNetwork
     * @return $this
     */
    public function addSearchCriteriaExactMobileNetwork($searchCriteriaExactMobileNetwork)
    {
        $this->searchCriteriaExactMobileNetwork[] = $searchCriteriaExactMobileNetwork;
        return $this;
    }

    /**
     * Getter for searchCriteriaExactMobileDnAvailability
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactMobileDnAvailability
     */
    public function getSearchCriteriaExactMobileDnAvailability()
    {
        return $this->searchCriteriaExactMobileDnAvailability instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaExactMobileDnAvailability;
    }

    /**
     * Setter for searchCriteriaExactMobileDnAvailability
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactMobileDnAvailability $searchCriteriaExactMobileDnAvailability
     * @return $this
     */
    public function setSearchCriteriaExactMobileDnAvailability(\CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactMobileDnAvailability $searchCriteriaExactMobileDnAvailability)
    {
        $this->searchCriteriaExactMobileDnAvailability = $searchCriteriaExactMobileDnAvailability;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaExactMobileDnAvailability()
    {
        $this->searchCriteriaExactMobileDnAvailability = null;
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

