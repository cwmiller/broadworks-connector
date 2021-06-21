<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseEnterpriseTrunkGetUserListRequest
 *
 * Request the list of users in an enterprise trunk.
 *         It is possible to search by various criteria to restrict the number of rows returned.
 *         Multiple search criteria are logically ANDed together.
 *         The response is either a EnterpriseEnterpriseTrunkGetUserListResponse or an ErrorResponse.
 *
 * @see EnterpriseEnterpriseTrunkGetUserListResponse
 * @see ErrorResponse
 * @Groups [{"id":"b9c14e2d80e4e7749688ca13ba233b44:385","type":"sequence"}]
 */
class EnterpriseEnterpriseTrunkGetUserListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group b9c14e2d80e4e7749688ca13ba233b44:385
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName enterpriseTrunkName
     * @Type string
     * @Group b9c14e2d80e4e7749688ca13ba233b44:385
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $enterpriseTrunkName = null;

    /**
     * @ElementName responseSizeLimit
     * @Type int
     * @Optional
     * @Group b9c14e2d80e4e7749688ca13ba233b44:385
     * @MinInclusive 1
     * @var int|null
     */
    private $responseSizeLimit = null;

    /**
     * @ElementName searchCriteriaUserLastName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserLastName
     * @Array
     * @Optional
     * @Group b9c14e2d80e4e7749688ca13ba233b44:385
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserLastName[]
     */
    private $searchCriteriaUserLastName = array(
        
    );

    /**
     * @ElementName searchCriteriaUserFirstName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserFirstName
     * @Array
     * @Optional
     * @Group b9c14e2d80e4e7749688ca13ba233b44:385
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserFirstName[]
     */
    private $searchCriteriaUserFirstName = array(
        
    );

    /**
     * @ElementName searchCriteriaDn
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDn
     * @Array
     * @Optional
     * @Group b9c14e2d80e4e7749688ca13ba233b44:385
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDn[]
     */
    private $searchCriteriaDn = array(
        
    );

    /**
     * @ElementName searchCriteriaUserId
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserId
     * @Array
     * @Optional
     * @Group b9c14e2d80e4e7749688ca13ba233b44:385
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserId[]
     */
    private $searchCriteriaUserId = array(
        
    );

    /**
     * @ElementName searchCriteriaGroupId
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupId
     * @Array
     * @Optional
     * @Group b9c14e2d80e4e7749688ca13ba233b44:385
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupId[]
     */
    private $searchCriteriaGroupId = array(
        
    );

    /**
     * @ElementName searchCriteriaAlternateTrunkIdentity
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaAlternateTrunkIdentity
     * @Array
     * @Optional
     * @Group b9c14e2d80e4e7749688ca13ba233b44:385
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaAlternateTrunkIdentity[]
     */
    private $searchCriteriaAlternateTrunkIdentity = array(
        
    );

    /**
     * @ElementName searchCriteriaAlternateTrunkIdentityDomain
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaAlternateTrunkIdentityDomain
     * @Array
     * @Optional
     * @Group b9c14e2d80e4e7749688ca13ba233b44:385
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaAlternateTrunkIdentityDomain[]
     */
    private $searchCriteriaAlternateTrunkIdentityDomain = array(
        
    );

    /**
     * @ElementName searchCriteriaExtension
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExtension
     * @Array
     * @Optional
     * @Group b9c14e2d80e4e7749688ca13ba233b44:385
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExtension[]
     */
    private $searchCriteriaExtension = array(
        
    );

    /**
     * @ElementName searchCriteriaExactUserDepartment
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactUserDepartment
     * @Array
     * @Optional
     * @Group b9c14e2d80e4e7749688ca13ba233b44:385
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactUserDepartment[]
     */
    private $searchCriteriaExactUserDepartment = array(
        
    );

    /**
     * @ElementName searchCriteriaExactUserRouteListAssigned
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactUserRouteListAssigned
     * @Array
     * @Optional
     * @Group b9c14e2d80e4e7749688ca13ba233b44:385
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactUserRouteListAssigned[]
     */
    private $searchCriteriaExactUserRouteListAssigned = array(
        
    );

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
     * Getter for enterpriseTrunkName
     *
     * @return string
     */
    public function getEnterpriseTrunkName()
    {
        return $this->enterpriseTrunkName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enterpriseTrunkName;
    }

    /**
     * Setter for enterpriseTrunkName
     *
     * @param string $enterpriseTrunkName
     * @return $this
     */
    public function setEnterpriseTrunkName($enterpriseTrunkName)
    {
        $this->enterpriseTrunkName = $enterpriseTrunkName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnterpriseTrunkName()
    {
        $this->enterpriseTrunkName = null;
        return $this;
    }

    /**
     * Getter for responseSizeLimit
     *
     * @return int
     */
    public function getResponseSizeLimit()
    {
        return $this->responseSizeLimit instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->responseSizeLimit;
    }

    /**
     * Setter for responseSizeLimit
     *
     * @param int $responseSizeLimit
     * @return $this
     */
    public function setResponseSizeLimit($responseSizeLimit)
    {
        $this->responseSizeLimit = $responseSizeLimit;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetResponseSizeLimit()
    {
        $this->responseSizeLimit = null;
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
     * Getter for searchCriteriaAlternateTrunkIdentity
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaAlternateTrunkIdentity[]
     */
    public function getSearchCriteriaAlternateTrunkIdentity()
    {
        return $this->searchCriteriaAlternateTrunkIdentity instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaAlternateTrunkIdentity;
    }

    /**
     * Setter for searchCriteriaAlternateTrunkIdentity
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaAlternateTrunkIdentity[] $searchCriteriaAlternateTrunkIdentity
     * @return $this
     */
    public function setSearchCriteriaAlternateTrunkIdentity(array $searchCriteriaAlternateTrunkIdentity)
    {
        $this->searchCriteriaAlternateTrunkIdentity = $searchCriteriaAlternateTrunkIdentity;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaAlternateTrunkIdentity()
    {
        $this->searchCriteriaAlternateTrunkIdentity = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaAlternateTrunkIdentity
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaAlternateTrunkIdentity $searchCriteriaAlternateTrunkIdentity
     * @return $this
     */
    public function addSearchCriteriaAlternateTrunkIdentity($searchCriteriaAlternateTrunkIdentity)
    {
        $this->searchCriteriaAlternateTrunkIdentity[] = $searchCriteriaAlternateTrunkIdentity;
        return $this;
    }

    /**
     * Getter for searchCriteriaAlternateTrunkIdentityDomain
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaAlternateTrunkIdentityDomain[]
     */
    public function getSearchCriteriaAlternateTrunkIdentityDomain()
    {
        return $this->searchCriteriaAlternateTrunkIdentityDomain instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaAlternateTrunkIdentityDomain;
    }

    /**
     * Setter for searchCriteriaAlternateTrunkIdentityDomain
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaAlternateTrunkIdentityDomain[] $searchCriteriaAlternateTrunkIdentityDomain
     * @return $this
     */
    public function setSearchCriteriaAlternateTrunkIdentityDomain(array $searchCriteriaAlternateTrunkIdentityDomain)
    {
        $this->searchCriteriaAlternateTrunkIdentityDomain = $searchCriteriaAlternateTrunkIdentityDomain;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaAlternateTrunkIdentityDomain()
    {
        $this->searchCriteriaAlternateTrunkIdentityDomain = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaAlternateTrunkIdentityDomain
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaAlternateTrunkIdentityDomain $searchCriteriaAlternateTrunkIdentityDomain
     * @return $this
     */
    public function addSearchCriteriaAlternateTrunkIdentityDomain($searchCriteriaAlternateTrunkIdentityDomain)
    {
        $this->searchCriteriaAlternateTrunkIdentityDomain[] = $searchCriteriaAlternateTrunkIdentityDomain;
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
     * Getter for searchCriteriaExactUserDepartment
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactUserDepartment[]
     */
    public function getSearchCriteriaExactUserDepartment()
    {
        return $this->searchCriteriaExactUserDepartment instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaExactUserDepartment;
    }

    /**
     * Setter for searchCriteriaExactUserDepartment
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactUserDepartment[] $searchCriteriaExactUserDepartment
     * @return $this
     */
    public function setSearchCriteriaExactUserDepartment(array $searchCriteriaExactUserDepartment)
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
     * Adder for searchCriteriaExactUserDepartment
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactUserDepartment $searchCriteriaExactUserDepartment
     * @return $this
     */
    public function addSearchCriteriaExactUserDepartment($searchCriteriaExactUserDepartment)
    {
        $this->searchCriteriaExactUserDepartment[] = $searchCriteriaExactUserDepartment;
        return $this;
    }

    /**
     * Getter for searchCriteriaExactUserRouteListAssigned
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactUserRouteListAssigned[]
     */
    public function getSearchCriteriaExactUserRouteListAssigned()
    {
        return $this->searchCriteriaExactUserRouteListAssigned instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaExactUserRouteListAssigned;
    }

    /**
     * Setter for searchCriteriaExactUserRouteListAssigned
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactUserRouteListAssigned[] $searchCriteriaExactUserRouteListAssigned
     * @return $this
     */
    public function setSearchCriteriaExactUserRouteListAssigned(array $searchCriteriaExactUserRouteListAssigned)
    {
        $this->searchCriteriaExactUserRouteListAssigned = $searchCriteriaExactUserRouteListAssigned;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaExactUserRouteListAssigned()
    {
        $this->searchCriteriaExactUserRouteListAssigned = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaExactUserRouteListAssigned
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactUserRouteListAssigned $searchCriteriaExactUserRouteListAssigned
     * @return $this
     */
    public function addSearchCriteriaExactUserRouteListAssigned($searchCriteriaExactUserRouteListAssigned)
    {
        $this->searchCriteriaExactUserRouteListAssigned[] = $searchCriteriaExactUserRouteListAssigned;
        return $this;
    }


}

