<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupUserCallForwardingSettingsGetListRequest
 *
 * Get a list of users and the service settings for a Call Forwarding service.
 *         The response is either GroupUserCallForwardingSettingsGetListResponse or
 * ErrorResponse.
 *         By default, virtual users and non-virtual users that match the selected
 * search criteria are included in the response when "includeVirtualUsers" is
 * present; otherwise, if "includeVirtualUsers" is absent, then only non-virtual
 * users are returned. 
 *         The search can be performed using multiple criteria. If search criteria
 * is specified, only the users matching all of the specified search criteria are
 * included in the response. If no search criteria is specified, all results are
 * returned.
 */
class GroupUserCallForwardingSettingsGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @var string|null
     */
    private $groupId = null;

    /**
     * @ElementName callForwardingService
     * @var string|null
     */
    private $callForwardingService = null;

    /**
     * @ElementName responsePagingControl
     * @var \CWM\BroadWorksConnector\Ocip\Models\ResponsePagingControl|null
     */
    private $responsePagingControl = null;

    /**
     * @ElementName sortByUserLastName
     * @var \CWM\BroadWorksConnector\Ocip\Models\SortByUserLastName|null
     */
    private $sortByUserLastName = null;

    /**
     * @ElementName sortByUserFirstName
     * @var \CWM\BroadWorksConnector\Ocip\Models\SortByUserFirstName|null
     */
    private $sortByUserFirstName = null;

    /**
     * @ElementName sortByUserDepartment
     * @var \CWM\BroadWorksConnector\Ocip\Models\SortByUserDepartment|null
     */
    private $sortByUserDepartment = null;

    /**
     * @ElementName sortByDn
     * @var \CWM\BroadWorksConnector\Ocip\Models\SortByDn|null
     */
    private $sortByDn = null;

    /**
     * @ElementName sortByExtension
     * @var \CWM\BroadWorksConnector\Ocip\Models\SortByExtension|null
     */
    private $sortByExtension = null;

    /**
     * @ElementName sortByForwardedToNumber
     * @var \CWM\BroadWorksConnector\Ocip\Models\SortByForwardedToNumber|null
     */
    private $sortByForwardedToNumber = null;

    /**
     * @ElementName includeVirtualUsers
     * @var bool|null
     */
    private $includeVirtualUsers = null;

    /**
     * @ElementName searchCriteriaUserLastName
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserLastName[]
     */
    private $searchCriteriaUserLastName = array(
        
    );

    /**
     * @ElementName searchCriteriaUserFirstName
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserFirstName[]
     */
    private $searchCriteriaUserFirstName = array(
        
    );

    /**
     * @ElementName searchCriteriaUserId
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserId[]
     */
    private $searchCriteriaUserId = array(
        
    );

    /**
     * @ElementName searchCriteriaDn
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDn[]
     */
    private $searchCriteriaDn = array(
        
    );

    /**
     * @ElementName searchCriteriaExtension
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExtension[]
     */
    private $searchCriteriaExtension = array(
        
    );

    /**
     * @ElementName searchCriteriaEmailAddress
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaEmailAddress[]
     */
    private $searchCriteriaEmailAddress = array(
        
    );

    /**
     * @ElementName searchCriteriaExactUserDepartment
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactUserDepartment|null
     */
    private $searchCriteriaExactUserDepartment = null;

    /**
     * @ElementName searchCriteriaExactUserInTrunkGroup
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactUserInTrunkGroup|null
     */
    private $searchCriteriaExactUserInTrunkGroup = null;

    /**
     * @ElementName searchCriteriaForwardedToNumber
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaForwardedToNumber[]
     */
    private $searchCriteriaForwardedToNumber = array(
        
    );

    /**
     * Getter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @return string|null
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @param string|null $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * Getter for groupId
     *
     * @ElementName groupId
     * @return string|null
     */
    public function getGroupId()
    {
        return $this->groupId;
    }

    /**
     * Setter for groupId
     *
     * @ElementName groupId
     * @param string|null $groupId
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
        return $this;
    }

    /**
     * Getter for callForwardingService
     *
     * @ElementName callForwardingService
     * @return string|null
     */
    public function getCallForwardingService()
    {
        return $this->callForwardingService;
    }

    /**
     * Setter for callForwardingService
     *
     * @ElementName callForwardingService
     * @param string|null $callForwardingService
     * @return $this
     */
    public function setCallForwardingService($callForwardingService)
    {
        $this->callForwardingService = $callForwardingService;
        return $this;
    }

    /**
     * Getter for responsePagingControl
     *
     * @ElementName responsePagingControl
     * @return \CWM\BroadWorksConnector\Ocip\Models\ResponsePagingControl|null
     */
    public function getResponsePagingControl()
    {
        return $this->responsePagingControl;
    }

    /**
     * Setter for responsePagingControl
     *
     * @ElementName responsePagingControl
     * @param \CWM\BroadWorksConnector\Ocip\Models\ResponsePagingControl|null $responsePagingControl
     * @return $this
     */
    public function setResponsePagingControl($responsePagingControl)
    {
        $this->responsePagingControl = $responsePagingControl;
        return $this;
    }

    /**
     * Getter for sortByUserLastName
     *
     * @ElementName sortByUserLastName
     * @return \CWM\BroadWorksConnector\Ocip\Models\SortByUserLastName|null
     */
    public function getSortByUserLastName()
    {
        return $this->sortByUserLastName;
    }

    /**
     * Setter for sortByUserLastName
     *
     * @ElementName sortByUserLastName
     * @param \CWM\BroadWorksConnector\Ocip\Models\SortByUserLastName|null $sortByUserLastName
     * @return $this
     */
    public function setSortByUserLastName($sortByUserLastName)
    {
        $this->sortByUserLastName = $sortByUserLastName;
        return $this;
    }

    /**
     * Getter for sortByUserFirstName
     *
     * @ElementName sortByUserFirstName
     * @return \CWM\BroadWorksConnector\Ocip\Models\SortByUserFirstName|null
     */
    public function getSortByUserFirstName()
    {
        return $this->sortByUserFirstName;
    }

    /**
     * Setter for sortByUserFirstName
     *
     * @ElementName sortByUserFirstName
     * @param \CWM\BroadWorksConnector\Ocip\Models\SortByUserFirstName|null $sortByUserFirstName
     * @return $this
     */
    public function setSortByUserFirstName($sortByUserFirstName)
    {
        $this->sortByUserFirstName = $sortByUserFirstName;
        return $this;
    }

    /**
     * Getter for sortByUserDepartment
     *
     * @ElementName sortByUserDepartment
     * @return \CWM\BroadWorksConnector\Ocip\Models\SortByUserDepartment|null
     */
    public function getSortByUserDepartment()
    {
        return $this->sortByUserDepartment;
    }

    /**
     * Setter for sortByUserDepartment
     *
     * @ElementName sortByUserDepartment
     * @param \CWM\BroadWorksConnector\Ocip\Models\SortByUserDepartment|null $sortByUserDepartment
     * @return $this
     */
    public function setSortByUserDepartment($sortByUserDepartment)
    {
        $this->sortByUserDepartment = $sortByUserDepartment;
        return $this;
    }

    /**
     * Getter for sortByDn
     *
     * @ElementName sortByDn
     * @return \CWM\BroadWorksConnector\Ocip\Models\SortByDn|null
     */
    public function getSortByDn()
    {
        return $this->sortByDn;
    }

    /**
     * Setter for sortByDn
     *
     * @ElementName sortByDn
     * @param \CWM\BroadWorksConnector\Ocip\Models\SortByDn|null $sortByDn
     * @return $this
     */
    public function setSortByDn($sortByDn)
    {
        $this->sortByDn = $sortByDn;
        return $this;
    }

    /**
     * Getter for sortByExtension
     *
     * @ElementName sortByExtension
     * @return \CWM\BroadWorksConnector\Ocip\Models\SortByExtension|null
     */
    public function getSortByExtension()
    {
        return $this->sortByExtension;
    }

    /**
     * Setter for sortByExtension
     *
     * @ElementName sortByExtension
     * @param \CWM\BroadWorksConnector\Ocip\Models\SortByExtension|null $sortByExtension
     * @return $this
     */
    public function setSortByExtension($sortByExtension)
    {
        $this->sortByExtension = $sortByExtension;
        return $this;
    }

    /**
     * Getter for sortByForwardedToNumber
     *
     * @ElementName sortByForwardedToNumber
     * @return \CWM\BroadWorksConnector\Ocip\Models\SortByForwardedToNumber|null
     */
    public function getSortByForwardedToNumber()
    {
        return $this->sortByForwardedToNumber;
    }

    /**
     * Setter for sortByForwardedToNumber
     *
     * @ElementName sortByForwardedToNumber
     * @param \CWM\BroadWorksConnector\Ocip\Models\SortByForwardedToNumber|null $sortByForwardedToNumber
     * @return $this
     */
    public function setSortByForwardedToNumber($sortByForwardedToNumber)
    {
        $this->sortByForwardedToNumber = $sortByForwardedToNumber;
        return $this;
    }

    /**
     * Getter for includeVirtualUsers
     *
     * @ElementName includeVirtualUsers
     * @return bool|null
     */
    public function getIncludeVirtualUsers()
    {
        return $this->includeVirtualUsers;
    }

    /**
     * Setter for includeVirtualUsers
     *
     * @ElementName includeVirtualUsers
     * @param bool|null $includeVirtualUsers
     * @return $this
     */
    public function setIncludeVirtualUsers($includeVirtualUsers)
    {
        $this->includeVirtualUsers = $includeVirtualUsers;
        return $this;
    }

    /**
     * Getter for searchCriteriaUserLastName
     *
     * @ElementName searchCriteriaUserLastName
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserLastName[]
     */
    public function getSearchCriteriaUserLastName()
    {
        return $this->searchCriteriaUserLastName;
    }

    /**
     * Setter for searchCriteriaUserLastName
     *
     * @ElementName searchCriteriaUserLastName
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserLastName[] $searchCriteriaUserLastName
     * @return $this
     */
    public function setSearchCriteriaUserLastName($searchCriteriaUserLastName)
    {
        $this->searchCriteriaUserLastName = $searchCriteriaUserLastName;
        return $this;
    }

    /**
     * Adder for searchCriteriaUserLastName
     *
     * @ElementName searchCriteriaUserLastName
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserLastName $searchCriteriaUserLastName
     * @return $this
     */
    public function addSearchCriteriaUserLastName($searchCriteriaUserLastName)
    {
        $this->searchCriteriaUserLastName []= $searchCriteriaUserLastName;
        return $this;
    }

    /**
     * Getter for searchCriteriaUserFirstName
     *
     * @ElementName searchCriteriaUserFirstName
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserFirstName[]
     */
    public function getSearchCriteriaUserFirstName()
    {
        return $this->searchCriteriaUserFirstName;
    }

    /**
     * Setter for searchCriteriaUserFirstName
     *
     * @ElementName searchCriteriaUserFirstName
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserFirstName[] $searchCriteriaUserFirstName
     * @return $this
     */
    public function setSearchCriteriaUserFirstName($searchCriteriaUserFirstName)
    {
        $this->searchCriteriaUserFirstName = $searchCriteriaUserFirstName;
        return $this;
    }

    /**
     * Adder for searchCriteriaUserFirstName
     *
     * @ElementName searchCriteriaUserFirstName
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserFirstName $searchCriteriaUserFirstName
     * @return $this
     */
    public function addSearchCriteriaUserFirstName($searchCriteriaUserFirstName)
    {
        $this->searchCriteriaUserFirstName []= $searchCriteriaUserFirstName;
        return $this;
    }

    /**
     * Getter for searchCriteriaUserId
     *
     * @ElementName searchCriteriaUserId
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserId[]
     */
    public function getSearchCriteriaUserId()
    {
        return $this->searchCriteriaUserId;
    }

    /**
     * Setter for searchCriteriaUserId
     *
     * @ElementName searchCriteriaUserId
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserId[] $searchCriteriaUserId
     * @return $this
     */
    public function setSearchCriteriaUserId($searchCriteriaUserId)
    {
        $this->searchCriteriaUserId = $searchCriteriaUserId;
        return $this;
    }

    /**
     * Adder for searchCriteriaUserId
     *
     * @ElementName searchCriteriaUserId
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserId $searchCriteriaUserId
     * @return $this
     */
    public function addSearchCriteriaUserId($searchCriteriaUserId)
    {
        $this->searchCriteriaUserId []= $searchCriteriaUserId;
        return $this;
    }

    /**
     * Getter for searchCriteriaDn
     *
     * @ElementName searchCriteriaDn
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDn[]
     */
    public function getSearchCriteriaDn()
    {
        return $this->searchCriteriaDn;
    }

    /**
     * Setter for searchCriteriaDn
     *
     * @ElementName searchCriteriaDn
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDn[] $searchCriteriaDn
     * @return $this
     */
    public function setSearchCriteriaDn($searchCriteriaDn)
    {
        $this->searchCriteriaDn = $searchCriteriaDn;
        return $this;
    }

    /**
     * Adder for searchCriteriaDn
     *
     * @ElementName searchCriteriaDn
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDn $searchCriteriaDn
     * @return $this
     */
    public function addSearchCriteriaDn($searchCriteriaDn)
    {
        $this->searchCriteriaDn []= $searchCriteriaDn;
        return $this;
    }

    /**
     * Getter for searchCriteriaExtension
     *
     * @ElementName searchCriteriaExtension
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExtension[]
     */
    public function getSearchCriteriaExtension()
    {
        return $this->searchCriteriaExtension;
    }

    /**
     * Setter for searchCriteriaExtension
     *
     * @ElementName searchCriteriaExtension
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExtension[] $searchCriteriaExtension
     * @return $this
     */
    public function setSearchCriteriaExtension($searchCriteriaExtension)
    {
        $this->searchCriteriaExtension = $searchCriteriaExtension;
        return $this;
    }

    /**
     * Adder for searchCriteriaExtension
     *
     * @ElementName searchCriteriaExtension
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExtension $searchCriteriaExtension
     * @return $this
     */
    public function addSearchCriteriaExtension($searchCriteriaExtension)
    {
        $this->searchCriteriaExtension []= $searchCriteriaExtension;
        return $this;
    }

    /**
     * Getter for searchCriteriaEmailAddress
     *
     * @ElementName searchCriteriaEmailAddress
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaEmailAddress[]
     */
    public function getSearchCriteriaEmailAddress()
    {
        return $this->searchCriteriaEmailAddress;
    }

    /**
     * Setter for searchCriteriaEmailAddress
     *
     * @ElementName searchCriteriaEmailAddress
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaEmailAddress[] $searchCriteriaEmailAddress
     * @return $this
     */
    public function setSearchCriteriaEmailAddress($searchCriteriaEmailAddress)
    {
        $this->searchCriteriaEmailAddress = $searchCriteriaEmailAddress;
        return $this;
    }

    /**
     * Adder for searchCriteriaEmailAddress
     *
     * @ElementName searchCriteriaEmailAddress
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaEmailAddress $searchCriteriaEmailAddress
     * @return $this
     */
    public function addSearchCriteriaEmailAddress($searchCriteriaEmailAddress)
    {
        $this->searchCriteriaEmailAddress []= $searchCriteriaEmailAddress;
        return $this;
    }

    /**
     * Getter for searchCriteriaExactUserDepartment
     *
     * @ElementName searchCriteriaExactUserDepartment
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactUserDepartment|null
     */
    public function getSearchCriteriaExactUserDepartment()
    {
        return $this->searchCriteriaExactUserDepartment;
    }

    /**
     * Setter for searchCriteriaExactUserDepartment
     *
     * @ElementName searchCriteriaExactUserDepartment
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactUserDepartment|null $searchCriteriaExactUserDepartment
     * @return $this
     */
    public function setSearchCriteriaExactUserDepartment($searchCriteriaExactUserDepartment)
    {
        $this->searchCriteriaExactUserDepartment = $searchCriteriaExactUserDepartment;
        return $this;
    }

    /**
     * Getter for searchCriteriaExactUserInTrunkGroup
     *
     * @ElementName searchCriteriaExactUserInTrunkGroup
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactUserInTrunkGroup|null
     */
    public function getSearchCriteriaExactUserInTrunkGroup()
    {
        return $this->searchCriteriaExactUserInTrunkGroup;
    }

    /**
     * Setter for searchCriteriaExactUserInTrunkGroup
     *
     * @ElementName searchCriteriaExactUserInTrunkGroup
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactUserInTrunkGroup|null $searchCriteriaExactUserInTrunkGroup
     * @return $this
     */
    public function setSearchCriteriaExactUserInTrunkGroup($searchCriteriaExactUserInTrunkGroup)
    {
        $this->searchCriteriaExactUserInTrunkGroup = $searchCriteriaExactUserInTrunkGroup;
        return $this;
    }

    /**
     * Getter for searchCriteriaForwardedToNumber
     *
     * @ElementName searchCriteriaForwardedToNumber
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaForwardedToNumber[]
     */
    public function getSearchCriteriaForwardedToNumber()
    {
        return $this->searchCriteriaForwardedToNumber;
    }

    /**
     * Setter for searchCriteriaForwardedToNumber
     *
     * @ElementName searchCriteriaForwardedToNumber
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaForwardedToNumber[] $searchCriteriaForwardedToNumber
     * @return $this
     */
    public function setSearchCriteriaForwardedToNumber($searchCriteriaForwardedToNumber)
    {
        $this->searchCriteriaForwardedToNumber = $searchCriteriaForwardedToNumber;
        return $this;
    }

    /**
     * Adder for searchCriteriaForwardedToNumber
     *
     * @ElementName searchCriteriaForwardedToNumber
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaForwardedToNumber $searchCriteriaForwardedToNumber
     * @return $this
     */
    public function addSearchCriteriaForwardedToNumber($searchCriteriaForwardedToNumber)
    {
        $this->searchCriteriaForwardedToNumber []= $searchCriteriaForwardedToNumber;
        return $this;
    }


}

