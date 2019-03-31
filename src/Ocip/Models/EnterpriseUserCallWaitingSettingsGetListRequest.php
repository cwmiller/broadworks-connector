<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseUserCallWaitingSettingsGetListRequest
 *
 * Get a list of users and the Call Waiting service status (active or not active). 
 *         The response is either EnterpriseUserCallWaitingSettingsGetListResponse or ErrorResponse.
 *         By default, virtual users and non-virtual users that match the selected search criteria are included in the response when "includeVirtualUsers" is present; otherwise, if "includeVirtualUsers" is absent, then only non-virtual users are returned. 
 *         The search can be performed using multiple criteria. If search criteria is specified, only the users matching all of the specified search criteria are included in the response. If no search criteria is specified, all results are returned.
 *
 * @see EnterpriseUserCallWaitingSettingsGetListResponse
 * @see ErrorResponse
 * @Groups [{"id":"5395c7df0157d44aa22f3351d1a5f3da:1231","type":"sequence","children":[{"id":"5395c7df0157d44aa22f3351d1a5f3da:1234","type":"choice"}]}]
 */
class EnterpriseUserCallWaitingSettingsGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 5395c7df0157d44aa22f3351d1a5f3da:1231
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName responsePagingControl
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ResponsePagingControl
     * @Group 5395c7df0157d44aa22f3351d1a5f3da:1231
     * @var \CWM\BroadWorksConnector\Ocip\Models\ResponsePagingControl|null
     */
    private $responsePagingControl = null;

    /**
     * @ElementName sortByUserLastName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SortByUserLastName
     * @Group 5395c7df0157d44aa22f3351d1a5f3da:1234
     * @var \CWM\BroadWorksConnector\Ocip\Models\SortByUserLastName|null
     */
    private $sortByUserLastName = null;

    /**
     * @ElementName sortByUserFirstName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SortByUserFirstName
     * @Group 5395c7df0157d44aa22f3351d1a5f3da:1234
     * @var \CWM\BroadWorksConnector\Ocip\Models\SortByUserFirstName|null
     */
    private $sortByUserFirstName = null;

    /**
     * @ElementName sortByUserDepartment
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SortByUserDepartment
     * @Group 5395c7df0157d44aa22f3351d1a5f3da:1234
     * @var \CWM\BroadWorksConnector\Ocip\Models\SortByUserDepartment|null
     */
    private $sortByUserDepartment = null;

    /**
     * @ElementName sortByDn
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SortByDn
     * @Group 5395c7df0157d44aa22f3351d1a5f3da:1234
     * @var \CWM\BroadWorksConnector\Ocip\Models\SortByDn|null
     */
    private $sortByDn = null;

    /**
     * @ElementName sortByExtension
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SortByExtension
     * @Group 5395c7df0157d44aa22f3351d1a5f3da:1234
     * @var \CWM\BroadWorksConnector\Ocip\Models\SortByExtension|null
     */
    private $sortByExtension = null;

    /**
     * @ElementName sortByServiceStatus
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SortByServiceStatus
     * @Group 5395c7df0157d44aa22f3351d1a5f3da:1234
     * @var \CWM\BroadWorksConnector\Ocip\Models\SortByServiceStatus|null
     */
    private $sortByServiceStatus = null;

    /**
     * @ElementName sortByGroupId
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SortByGroupId
     * @Group 5395c7df0157d44aa22f3351d1a5f3da:1234
     * @var \CWM\BroadWorksConnector\Ocip\Models\SortByGroupId|null
     */
    private $sortByGroupId = null;

    /**
     * @ElementName includeVirtualUsers
     * @Type bool
     * @Optional
     * @Group 5395c7df0157d44aa22f3351d1a5f3da:1231
     * @var bool|null
     */
    private $includeVirtualUsers = null;

    /**
     * @ElementName searchCriteriaUserLastName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserLastName
     * @Array
     * @Optional
     * @Group 5395c7df0157d44aa22f3351d1a5f3da:1231
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserLastName[]
     */
    private $searchCriteriaUserLastName = array(
        
    );

    /**
     * @ElementName searchCriteriaUserFirstName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserFirstName
     * @Array
     * @Optional
     * @Group 5395c7df0157d44aa22f3351d1a5f3da:1231
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserFirstName[]
     */
    private $searchCriteriaUserFirstName = array(
        
    );

    /**
     * @ElementName searchCriteriaUserId
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserId
     * @Array
     * @Optional
     * @Group 5395c7df0157d44aa22f3351d1a5f3da:1231
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserId[]
     */
    private $searchCriteriaUserId = array(
        
    );

    /**
     * @ElementName searchCriteriaDn
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDn
     * @Array
     * @Optional
     * @Group 5395c7df0157d44aa22f3351d1a5f3da:1231
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDn[]
     */
    private $searchCriteriaDn = array(
        
    );

    /**
     * @ElementName searchCriteriaExtension
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExtension
     * @Array
     * @Optional
     * @Group 5395c7df0157d44aa22f3351d1a5f3da:1231
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExtension[]
     */
    private $searchCriteriaExtension = array(
        
    );

    /**
     * @ElementName searchCriteriaEmailAddress
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaEmailAddress
     * @Array
     * @Optional
     * @Group 5395c7df0157d44aa22f3351d1a5f3da:1231
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaEmailAddress[]
     */
    private $searchCriteriaEmailAddress = array(
        
    );

    /**
     * @ElementName searchCriteriaExactUserDepartment
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactUserDepartment
     * @Optional
     * @Group 5395c7df0157d44aa22f3351d1a5f3da:1231
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactUserDepartment|null
     */
    private $searchCriteriaExactUserDepartment = null;

    /**
     * @ElementName searchCriteriaExactUserInTrunkGroup
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactUserInTrunkGroup
     * @Optional
     * @Group 5395c7df0157d44aa22f3351d1a5f3da:1231
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactUserInTrunkGroup|null
     */
    private $searchCriteriaExactUserInTrunkGroup = null;

    /**
     * @ElementName searchCriteriaServiceStatus
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaServiceStatus
     * @Optional
     * @Group 5395c7df0157d44aa22f3351d1a5f3da:1231
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaServiceStatus|null
     */
    private $searchCriteriaServiceStatus = null;

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
     * Getter for sortByUserLastName
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SortByUserLastName
     */
    public function getSortByUserLastName()
    {
        return $this->sortByUserLastName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sortByUserLastName;
    }

    /**
     * Setter for sortByUserLastName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SortByUserLastName $sortByUserLastName
     * @return $this
     */
    public function setSortByUserLastName(\CWM\BroadWorksConnector\Ocip\Models\SortByUserLastName $sortByUserLastName)
    {
        $this->sortByUserLastName = $sortByUserLastName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSortByUserLastName()
    {
        $this->sortByUserLastName = null;
        return $this;
    }

    /**
     * Getter for sortByUserFirstName
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SortByUserFirstName
     */
    public function getSortByUserFirstName()
    {
        return $this->sortByUserFirstName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sortByUserFirstName;
    }

    /**
     * Setter for sortByUserFirstName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SortByUserFirstName $sortByUserFirstName
     * @return $this
     */
    public function setSortByUserFirstName(\CWM\BroadWorksConnector\Ocip\Models\SortByUserFirstName $sortByUserFirstName)
    {
        $this->sortByUserFirstName = $sortByUserFirstName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSortByUserFirstName()
    {
        $this->sortByUserFirstName = null;
        return $this;
    }

    /**
     * Getter for sortByUserDepartment
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SortByUserDepartment
     */
    public function getSortByUserDepartment()
    {
        return $this->sortByUserDepartment instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sortByUserDepartment;
    }

    /**
     * Setter for sortByUserDepartment
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SortByUserDepartment $sortByUserDepartment
     * @return $this
     */
    public function setSortByUserDepartment(\CWM\BroadWorksConnector\Ocip\Models\SortByUserDepartment $sortByUserDepartment)
    {
        $this->sortByUserDepartment = $sortByUserDepartment;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSortByUserDepartment()
    {
        $this->sortByUserDepartment = null;
        return $this;
    }

    /**
     * Getter for sortByDn
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SortByDn
     */
    public function getSortByDn()
    {
        return $this->sortByDn instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sortByDn;
    }

    /**
     * Setter for sortByDn
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SortByDn $sortByDn
     * @return $this
     */
    public function setSortByDn(\CWM\BroadWorksConnector\Ocip\Models\SortByDn $sortByDn)
    {
        $this->sortByDn = $sortByDn;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSortByDn()
    {
        $this->sortByDn = null;
        return $this;
    }

    /**
     * Getter for sortByExtension
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SortByExtension
     */
    public function getSortByExtension()
    {
        return $this->sortByExtension instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sortByExtension;
    }

    /**
     * Setter for sortByExtension
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SortByExtension $sortByExtension
     * @return $this
     */
    public function setSortByExtension(\CWM\BroadWorksConnector\Ocip\Models\SortByExtension $sortByExtension)
    {
        $this->sortByExtension = $sortByExtension;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSortByExtension()
    {
        $this->sortByExtension = null;
        return $this;
    }

    /**
     * Getter for sortByServiceStatus
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SortByServiceStatus
     */
    public function getSortByServiceStatus()
    {
        return $this->sortByServiceStatus instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sortByServiceStatus;
    }

    /**
     * Setter for sortByServiceStatus
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SortByServiceStatus $sortByServiceStatus
     * @return $this
     */
    public function setSortByServiceStatus(\CWM\BroadWorksConnector\Ocip\Models\SortByServiceStatus $sortByServiceStatus)
    {
        $this->sortByServiceStatus = $sortByServiceStatus;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSortByServiceStatus()
    {
        $this->sortByServiceStatus = null;
        return $this;
    }

    /**
     * Getter for sortByGroupId
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SortByGroupId
     */
    public function getSortByGroupId()
    {
        return $this->sortByGroupId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sortByGroupId;
    }

    /**
     * Setter for sortByGroupId
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SortByGroupId $sortByGroupId
     * @return $this
     */
    public function setSortByGroupId(\CWM\BroadWorksConnector\Ocip\Models\SortByGroupId $sortByGroupId)
    {
        $this->sortByGroupId = $sortByGroupId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSortByGroupId()
    {
        $this->sortByGroupId = null;
        return $this;
    }

    /**
     * Getter for includeVirtualUsers
     *
     * @return bool
     */
    public function getIncludeVirtualUsers()
    {
        return $this->includeVirtualUsers instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->includeVirtualUsers;
    }

    /**
     * Setter for includeVirtualUsers
     *
     * @param bool $includeVirtualUsers
     * @return $this
     */
    public function setIncludeVirtualUsers($includeVirtualUsers)
    {
        $this->includeVirtualUsers = $includeVirtualUsers;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIncludeVirtualUsers()
    {
        $this->includeVirtualUsers = null;
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
     * Getter for searchCriteriaExactUserDepartment
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactUserDepartment
     */
    public function getSearchCriteriaExactUserDepartment()
    {
        return $this->searchCriteriaExactUserDepartment instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaExactUserDepartment;
    }

    /**
     * Setter for searchCriteriaExactUserDepartment
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactUserDepartment $searchCriteriaExactUserDepartment
     * @return $this
     */
    public function setSearchCriteriaExactUserDepartment(\CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactUserDepartment $searchCriteriaExactUserDepartment)
    {
        $this->searchCriteriaExactUserDepartment = $searchCriteriaExactUserDepartment;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaExactUserDepartment()
    {
        $this->searchCriteriaExactUserDepartment = null;
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


}

