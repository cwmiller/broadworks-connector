<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAccessDeviceGetUserListRequest
 *
 * Requests the configuration of a specified group access device.
 *         The response is either GroupAccessDeviceGetUserListResponse or ErrorResponse.
 *         The following elements are only used in XS data mode and ignored in AS data mode:
 *           searchCriteriaAccessDeviceEndpointPrivateIdentity
 *           
 *          Replaced by: GroupAccessDeviceGetUserListRequest21sp1 in AS data mode.
 *
 * @see GroupAccessDeviceGetUserListResponse
 * @see ErrorResponse
 * @see GroupAccessDeviceGetUserListRequest21sp1
 * @Groups [{"id":"de4d76f01f337fe4694212ec9f771753:837","type":"sequence"}]
 */
class GroupAccessDeviceGetUserListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group de4d76f01f337fe4694212ec9f771753:837
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group de4d76f01f337fe4694212ec9f771753:837
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $groupId = null;

    /**
     * @ElementName deviceName
     * @Type string
     * @Group de4d76f01f337fe4694212ec9f771753:837
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $deviceName = null;

    /**
     * @ElementName responseSizeLimit
     * @Type int
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:837
     * @MinInclusive 1
     * @var int|null
     */
    protected $responseSizeLimit = null;

    /**
     * @ElementName searchCriteriaLinePortUserPart
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaLinePortUserPart
     * @Array
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:837
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaLinePortUserPart[]
     */
    protected $searchCriteriaLinePortUserPart = array(
        
    );

    /**
     * @ElementName searchCriteriaLinePortDomain
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaLinePortDomain
     * @Array
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:837
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaLinePortDomain[]
     */
    protected $searchCriteriaLinePortDomain = array(
        
    );

    /**
     * @ElementName searchCriteriaUserLastName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserLastName
     * @Array
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:837
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserLastName[]
     */
    protected $searchCriteriaUserLastName = array(
        
    );

    /**
     * @ElementName searchCriteriaUserFirstName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserFirstName
     * @Array
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:837
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserFirstName[]
     */
    protected $searchCriteriaUserFirstName = array(
        
    );

    /**
     * @ElementName searchCriteriaDn
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDn
     * @Array
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:837
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDn[]
     */
    protected $searchCriteriaDn = array(
        
    );

    /**
     * @ElementName searchCriteriaUserId
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserId
     * @Array
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:837
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserId[]
     */
    protected $searchCriteriaUserId = array(
        
    );

    /**
     * @ElementName searchCriteriaExactEndpointType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactEndpointType
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:837
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactEndpointType|null
     */
    protected $searchCriteriaExactEndpointType = null;

    /**
     * @ElementName searchCriteriaExactUserType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactUserType
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:837
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactUserType|null
     */
    protected $searchCriteriaExactUserType = null;

    /**
     * @ElementName searchCriteriaExtension
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExtension
     * @Array
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:837
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExtension[]
     */
    protected $searchCriteriaExtension = array(
        
    );

    /**
     * @ElementName searchCriteriaExactUserDepartment
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactUserDepartment
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:837
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactUserDepartment|null
     */
    protected $searchCriteriaExactUserDepartment = null;

    /**
     * @ElementName searchCriteriaExactPortNumber
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactPortNumber
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:837
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactPortNumber|null
     */
    protected $searchCriteriaExactPortNumber = null;

    /**
     * @ElementName searchCriteriaAccessDeviceEndpointPrivateIdentity
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaAccessDeviceEndpointPrivateIdentity
     * @Array
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:837
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaAccessDeviceEndpointPrivateIdentity[]
     */
    protected $searchCriteriaAccessDeviceEndpointPrivateIdentity = array(
        
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
     * Getter for deviceName
     *
     * @return string
     */
    public function getDeviceName()
    {
        return $this->deviceName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deviceName;
    }

    /**
     * Setter for deviceName
     *
     * @param string $deviceName
     * @return $this
     */
    public function setDeviceName($deviceName)
    {
        $this->deviceName = $deviceName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDeviceName()
    {
        $this->deviceName = null;
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
     * Getter for searchCriteriaLinePortUserPart
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaLinePortUserPart[]
     */
    public function getSearchCriteriaLinePortUserPart()
    {
        return $this->searchCriteriaLinePortUserPart instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaLinePortUserPart;
    }

    /**
     * Setter for searchCriteriaLinePortUserPart
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaLinePortUserPart[] $searchCriteriaLinePortUserPart
     * @return $this
     */
    public function setSearchCriteriaLinePortUserPart(array $searchCriteriaLinePortUserPart)
    {
        $this->searchCriteriaLinePortUserPart = $searchCriteriaLinePortUserPart;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaLinePortUserPart()
    {
        $this->searchCriteriaLinePortUserPart = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaLinePortUserPart
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaLinePortUserPart $searchCriteriaLinePortUserPart
     * @return $this
     */
    public function addSearchCriteriaLinePortUserPart($searchCriteriaLinePortUserPart)
    {
        $this->searchCriteriaLinePortUserPart[] = $searchCriteriaLinePortUserPart;
        return $this;
    }

    /**
     * Getter for searchCriteriaLinePortDomain
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaLinePortDomain[]
     */
    public function getSearchCriteriaLinePortDomain()
    {
        return $this->searchCriteriaLinePortDomain instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaLinePortDomain;
    }

    /**
     * Setter for searchCriteriaLinePortDomain
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaLinePortDomain[] $searchCriteriaLinePortDomain
     * @return $this
     */
    public function setSearchCriteriaLinePortDomain(array $searchCriteriaLinePortDomain)
    {
        $this->searchCriteriaLinePortDomain = $searchCriteriaLinePortDomain;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaLinePortDomain()
    {
        $this->searchCriteriaLinePortDomain = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaLinePortDomain
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaLinePortDomain $searchCriteriaLinePortDomain
     * @return $this
     */
    public function addSearchCriteriaLinePortDomain($searchCriteriaLinePortDomain)
    {
        $this->searchCriteriaLinePortDomain[] = $searchCriteriaLinePortDomain;
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
     * Getter for searchCriteriaExactEndpointType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactEndpointType
     */
    public function getSearchCriteriaExactEndpointType()
    {
        return $this->searchCriteriaExactEndpointType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaExactEndpointType;
    }

    /**
     * Setter for searchCriteriaExactEndpointType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactEndpointType $searchCriteriaExactEndpointType
     * @return $this
     */
    public function setSearchCriteriaExactEndpointType(\CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactEndpointType $searchCriteriaExactEndpointType)
    {
        $this->searchCriteriaExactEndpointType = $searchCriteriaExactEndpointType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaExactEndpointType()
    {
        $this->searchCriteriaExactEndpointType = null;
        return $this;
    }

    /**
     * Getter for searchCriteriaExactUserType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactUserType
     */
    public function getSearchCriteriaExactUserType()
    {
        return $this->searchCriteriaExactUserType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaExactUserType;
    }

    /**
     * Setter for searchCriteriaExactUserType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactUserType $searchCriteriaExactUserType
     * @return $this
     */
    public function setSearchCriteriaExactUserType(\CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactUserType $searchCriteriaExactUserType)
    {
        $this->searchCriteriaExactUserType = $searchCriteriaExactUserType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaExactUserType()
    {
        $this->searchCriteriaExactUserType = null;
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
     * Getter for searchCriteriaExactPortNumber
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactPortNumber
     */
    public function getSearchCriteriaExactPortNumber()
    {
        return $this->searchCriteriaExactPortNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaExactPortNumber;
    }

    /**
     * Setter for searchCriteriaExactPortNumber
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactPortNumber $searchCriteriaExactPortNumber
     * @return $this
     */
    public function setSearchCriteriaExactPortNumber(\CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactPortNumber $searchCriteriaExactPortNumber)
    {
        $this->searchCriteriaExactPortNumber = $searchCriteriaExactPortNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaExactPortNumber()
    {
        $this->searchCriteriaExactPortNumber = null;
        return $this;
    }

    /**
     * Getter for searchCriteriaAccessDeviceEndpointPrivateIdentity
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaAccessDeviceEndpointPrivateIdentity[]
     */
    public function getSearchCriteriaAccessDeviceEndpointPrivateIdentity()
    {
        return $this->searchCriteriaAccessDeviceEndpointPrivateIdentity instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaAccessDeviceEndpointPrivateIdentity;
    }

    /**
     * Setter for searchCriteriaAccessDeviceEndpointPrivateIdentity
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaAccessDeviceEndpointPrivateIdentity[] $searchCriteriaAccessDeviceEndpointPrivateIdentity
     * @return $this
     */
    public function setSearchCriteriaAccessDeviceEndpointPrivateIdentity(array $searchCriteriaAccessDeviceEndpointPrivateIdentity)
    {
        $this->searchCriteriaAccessDeviceEndpointPrivateIdentity = $searchCriteriaAccessDeviceEndpointPrivateIdentity;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaAccessDeviceEndpointPrivateIdentity()
    {
        $this->searchCriteriaAccessDeviceEndpointPrivateIdentity = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaAccessDeviceEndpointPrivateIdentity
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaAccessDeviceEndpointPrivateIdentity $searchCriteriaAccessDeviceEndpointPrivateIdentity
     * @return $this
     */
    public function addSearchCriteriaAccessDeviceEndpointPrivateIdentity($searchCriteriaAccessDeviceEndpointPrivateIdentity)
    {
        $this->searchCriteriaAccessDeviceEndpointPrivateIdentity[] = $searchCriteriaAccessDeviceEndpointPrivateIdentity;
        return $this;
    }


}

