<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseEnterpriseTrunkGetUserListRequest
 *
 * Request the list of users in an enterprise trunk.
 *         It is possible to search by various criteria to restrict the number of
 * rows returned.
 *         Multiple search criteria are logically ANDed together.
 *         The response is either a EnterpriseEnterpriseTrunkGetUserListResponse or
 * an ErrorResponse.
 */
class EnterpriseEnterpriseTrunkGetUserListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName enterpriseTrunkName
     * @var string|null
     */
    private $enterpriseTrunkName = null;

    /**
     * @ElementName responseSizeLimit
     * @var int|null
     */
    private $responseSizeLimit = null;

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
     * @ElementName searchCriteriaDn
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDn[]
     */
    private $searchCriteriaDn = array(
        
    );

    /**
     * @ElementName searchCriteriaUserId
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserId[]
     */
    private $searchCriteriaUserId = array(
        
    );

    /**
     * @ElementName searchCriteriaGroupId
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupId[]
     */
    private $searchCriteriaGroupId = array(
        
    );

    /**
     * @ElementName searchCriteriaAlternateTrunkIdentity
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaAlternateTrunkIdentity[]
     */
    private $searchCriteriaAlternateTrunkIdentity = array(
        
    );

    /**
     * @ElementName searchCriteriaAlternateTrunkIdentityDomain
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaAlternateTrunkIdentityDomain[]
     */
    private $searchCriteriaAlternateTrunkIdentityDomain = array(
        
    );

    /**
     * @ElementName searchCriteriaExtension
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExtension[]
     */
    private $searchCriteriaExtension = array(
        
    );

    /**
     * @ElementName searchCriteriaExactUserDepartment
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactUserDepartment[]
     */
    private $searchCriteriaExactUserDepartment = array(
        
    );

    /**
     * @ElementName searchCriteriaExactUserRouteListAssigned
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactUserRouteListAssigned[]
     */
    private $searchCriteriaExactUserRouteListAssigned = array(
        
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
     * Getter for enterpriseTrunkName
     *
     * @ElementName enterpriseTrunkName
     * @return string|null
     */
    public function getEnterpriseTrunkName()
    {
        return $this->enterpriseTrunkName;
    }

    /**
     * Setter for enterpriseTrunkName
     *
     * @ElementName enterpriseTrunkName
     * @param string|null $enterpriseTrunkName
     * @return $this
     */
    public function setEnterpriseTrunkName($enterpriseTrunkName)
    {
        $this->enterpriseTrunkName = $enterpriseTrunkName;
        return $this;
    }

    /**
     * Getter for responseSizeLimit
     *
     * @ElementName responseSizeLimit
     * @return int|null
     */
    public function getResponseSizeLimit()
    {
        return $this->responseSizeLimit;
    }

    /**
     * Setter for responseSizeLimit
     *
     * @ElementName responseSizeLimit
     * @param int|null $responseSizeLimit
     * @return $this
     */
    public function setResponseSizeLimit($responseSizeLimit)
    {
        $this->responseSizeLimit = $responseSizeLimit;
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
     * Getter for searchCriteriaGroupId
     *
     * @ElementName searchCriteriaGroupId
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupId[]
     */
    public function getSearchCriteriaGroupId()
    {
        return $this->searchCriteriaGroupId;
    }

    /**
     * Setter for searchCriteriaGroupId
     *
     * @ElementName searchCriteriaGroupId
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupId[] $searchCriteriaGroupId
     * @return $this
     */
    public function setSearchCriteriaGroupId($searchCriteriaGroupId)
    {
        $this->searchCriteriaGroupId = $searchCriteriaGroupId;
        return $this;
    }

    /**
     * Adder for searchCriteriaGroupId
     *
     * @ElementName searchCriteriaGroupId
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupId $searchCriteriaGroupId
     * @return $this
     */
    public function addSearchCriteriaGroupId($searchCriteriaGroupId)
    {
        $this->searchCriteriaGroupId []= $searchCriteriaGroupId;
        return $this;
    }

    /**
     * Getter for searchCriteriaAlternateTrunkIdentity
     *
     * @ElementName searchCriteriaAlternateTrunkIdentity
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaAlternateTrunkIdentity[]
     */
    public function getSearchCriteriaAlternateTrunkIdentity()
    {
        return $this->searchCriteriaAlternateTrunkIdentity;
    }

    /**
     * Setter for searchCriteriaAlternateTrunkIdentity
     *
     * @ElementName searchCriteriaAlternateTrunkIdentity
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaAlternateTrunkIdentity[] $searchCriteriaAlternateTrunkIdentity
     * @return $this
     */
    public function setSearchCriteriaAlternateTrunkIdentity($searchCriteriaAlternateTrunkIdentity)
    {
        $this->searchCriteriaAlternateTrunkIdentity = $searchCriteriaAlternateTrunkIdentity;
        return $this;
    }

    /**
     * Adder for searchCriteriaAlternateTrunkIdentity
     *
     * @ElementName searchCriteriaAlternateTrunkIdentity
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaAlternateTrunkIdentity $searchCriteriaAlternateTrunkIdentity
     * @return $this
     */
    public function addSearchCriteriaAlternateTrunkIdentity($searchCriteriaAlternateTrunkIdentity)
    {
        $this->searchCriteriaAlternateTrunkIdentity []= $searchCriteriaAlternateTrunkIdentity;
        return $this;
    }

    /**
     * Getter for searchCriteriaAlternateTrunkIdentityDomain
     *
     * @ElementName searchCriteriaAlternateTrunkIdentityDomain
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaAlternateTrunkIdentityDomain[]
     */
    public function getSearchCriteriaAlternateTrunkIdentityDomain()
    {
        return $this->searchCriteriaAlternateTrunkIdentityDomain;
    }

    /**
     * Setter for searchCriteriaAlternateTrunkIdentityDomain
     *
     * @ElementName searchCriteriaAlternateTrunkIdentityDomain
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaAlternateTrunkIdentityDomain[] $searchCriteriaAlternateTrunkIdentityDomain
     * @return $this
     */
    public function setSearchCriteriaAlternateTrunkIdentityDomain($searchCriteriaAlternateTrunkIdentityDomain)
    {
        $this->searchCriteriaAlternateTrunkIdentityDomain = $searchCriteriaAlternateTrunkIdentityDomain;
        return $this;
    }

    /**
     * Adder for searchCriteriaAlternateTrunkIdentityDomain
     *
     * @ElementName searchCriteriaAlternateTrunkIdentityDomain
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaAlternateTrunkIdentityDomain $searchCriteriaAlternateTrunkIdentityDomain
     * @return $this
     */
    public function addSearchCriteriaAlternateTrunkIdentityDomain($searchCriteriaAlternateTrunkIdentityDomain)
    {
        $this->searchCriteriaAlternateTrunkIdentityDomain []= $searchCriteriaAlternateTrunkIdentityDomain;
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
     * Getter for searchCriteriaExactUserDepartment
     *
     * @ElementName searchCriteriaExactUserDepartment
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactUserDepartment[]
     */
    public function getSearchCriteriaExactUserDepartment()
    {
        return $this->searchCriteriaExactUserDepartment;
    }

    /**
     * Setter for searchCriteriaExactUserDepartment
     *
     * @ElementName searchCriteriaExactUserDepartment
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactUserDepartment[] $searchCriteriaExactUserDepartment
     * @return $this
     */
    public function setSearchCriteriaExactUserDepartment($searchCriteriaExactUserDepartment)
    {
        $this->searchCriteriaExactUserDepartment = $searchCriteriaExactUserDepartment;
        return $this;
    }

    /**
     * Adder for searchCriteriaExactUserDepartment
     *
     * @ElementName searchCriteriaExactUserDepartment
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactUserDepartment $searchCriteriaExactUserDepartment
     * @return $this
     */
    public function addSearchCriteriaExactUserDepartment($searchCriteriaExactUserDepartment)
    {
        $this->searchCriteriaExactUserDepartment []= $searchCriteriaExactUserDepartment;
        return $this;
    }

    /**
     * Getter for searchCriteriaExactUserRouteListAssigned
     *
     * @ElementName searchCriteriaExactUserRouteListAssigned
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactUserRouteListAssigned[]
     */
    public function getSearchCriteriaExactUserRouteListAssigned()
    {
        return $this->searchCriteriaExactUserRouteListAssigned;
    }

    /**
     * Setter for searchCriteriaExactUserRouteListAssigned
     *
     * @ElementName searchCriteriaExactUserRouteListAssigned
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactUserRouteListAssigned[] $searchCriteriaExactUserRouteListAssigned
     * @return $this
     */
    public function setSearchCriteriaExactUserRouteListAssigned($searchCriteriaExactUserRouteListAssigned)
    {
        $this->searchCriteriaExactUserRouteListAssigned = $searchCriteriaExactUserRouteListAssigned;
        return $this;
    }

    /**
     * Adder for searchCriteriaExactUserRouteListAssigned
     *
     * @ElementName searchCriteriaExactUserRouteListAssigned
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactUserRouteListAssigned $searchCriteriaExactUserRouteListAssigned
     * @return $this
     */
    public function addSearchCriteriaExactUserRouteListAssigned($searchCriteriaExactUserRouteListAssigned)
    {
        $this->searchCriteriaExactUserRouteListAssigned []= $searchCriteriaExactUserRouteListAssigned;
        return $this;
    }


}

