<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAccessDeviceGetUserListRequest21sp1
 *
 * Requests the users associated with a specified system access device.
 *         The response is either SystemAccessDeviceGetUserListResponse21sp1 or
 * ErrorResponse.
 *         The following elements are only used in XS data mode and ignored in AS
 * data mode:
 *           searchCriteriaAccessDeviceEndpointPrivateIdentity
 *
 * @see SystemAccessDeviceGetUserListResponse21sp1
 * @see ErrorResponse
 */
class SystemAccessDeviceGetUserListRequest21sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName deviceName
     * @var string|null
     */
    private $deviceName = null;

    /**
     * @ElementName responseSizeLimit
     * @var int|null
     */
    private $responseSizeLimit = null;

    /**
     * @ElementName searchCriteriaLinePortUserPart
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaLinePortUserPart[]
     */
    private $searchCriteriaLinePortUserPart = array(
        
    );

    /**
     * @ElementName searchCriteriaLinePortDomain
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaLinePortDomain[]
     */
    private $searchCriteriaLinePortDomain = array(
        
    );

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
     * @ElementName searchCriteriaExactServiceProvider
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactServiceProvider|null
     */
    private $searchCriteriaExactServiceProvider = null;

    /**
     * @ElementName searchCriteriaServiceProviderId
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaServiceProviderId[]
     */
    private $searchCriteriaServiceProviderId = array(
        
    );

    /**
     * @ElementName searchCriteriaExactEndpointType
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactEndpointType21sp1|null
     */
    private $searchCriteriaExactEndpointType = null;

    /**
     * @ElementName searchCriteriaExactUserType
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactUserType|null
     */
    private $searchCriteriaExactUserType = null;

    /**
     * @ElementName searchCriteriaExtension
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExtension[]
     */
    private $searchCriteriaExtension = array(
        
    );

    /**
     * @ElementName searchCriteriaExactPortNumber
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactPortNumber|null
     */
    private $searchCriteriaExactPortNumber = null;

    /**
     * @ElementName searchCriteriaAccessDeviceEndpointPrivateIdentity
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaAccessDeviceEndpointPrivateIdentity[]
     */
    private $searchCriteriaAccessDeviceEndpointPrivateIdentity = array(
        
    );

    /**
     * Getter for deviceName
     *
     * @ElementName deviceName
     * @return string|null
     */
    public function getDeviceName()
    {
        return $this->deviceName;
    }

    /**
     * Setter for deviceName
     *
     * @ElementName deviceName
     * @param string|null $deviceName
     * @return $this
     */
    public function setDeviceName($deviceName)
    {
        $this->deviceName = $deviceName;
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
     * Getter for searchCriteriaLinePortUserPart
     *
     * @ElementName searchCriteriaLinePortUserPart
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaLinePortUserPart[]
     */
    public function getSearchCriteriaLinePortUserPart()
    {
        return $this->searchCriteriaLinePortUserPart;
    }

    /**
     * Setter for searchCriteriaLinePortUserPart
     *
     * @ElementName searchCriteriaLinePortUserPart
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaLinePortUserPart[] $searchCriteriaLinePortUserPart
     * @return $this
     */
    public function setSearchCriteriaLinePortUserPart($searchCriteriaLinePortUserPart)
    {
        $this->searchCriteriaLinePortUserPart = $searchCriteriaLinePortUserPart;
        return $this;
    }

    /**
     * Adder for searchCriteriaLinePortUserPart
     *
     * @ElementName searchCriteriaLinePortUserPart
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaLinePortUserPart $searchCriteriaLinePortUserPart
     * @return $this
     */
    public function addSearchCriteriaLinePortUserPart($searchCriteriaLinePortUserPart)
    {
        $this->searchCriteriaLinePortUserPart []= $searchCriteriaLinePortUserPart;
        return $this;
    }

    /**
     * Getter for searchCriteriaLinePortDomain
     *
     * @ElementName searchCriteriaLinePortDomain
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaLinePortDomain[]
     */
    public function getSearchCriteriaLinePortDomain()
    {
        return $this->searchCriteriaLinePortDomain;
    }

    /**
     * Setter for searchCriteriaLinePortDomain
     *
     * @ElementName searchCriteriaLinePortDomain
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaLinePortDomain[] $searchCriteriaLinePortDomain
     * @return $this
     */
    public function setSearchCriteriaLinePortDomain($searchCriteriaLinePortDomain)
    {
        $this->searchCriteriaLinePortDomain = $searchCriteriaLinePortDomain;
        return $this;
    }

    /**
     * Adder for searchCriteriaLinePortDomain
     *
     * @ElementName searchCriteriaLinePortDomain
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaLinePortDomain $searchCriteriaLinePortDomain
     * @return $this
     */
    public function addSearchCriteriaLinePortDomain($searchCriteriaLinePortDomain)
    {
        $this->searchCriteriaLinePortDomain []= $searchCriteriaLinePortDomain;
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
     * Getter for searchCriteriaExactServiceProvider
     *
     * @ElementName searchCriteriaExactServiceProvider
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactServiceProvider|null
     */
    public function getSearchCriteriaExactServiceProvider()
    {
        return $this->searchCriteriaExactServiceProvider;
    }

    /**
     * Setter for searchCriteriaExactServiceProvider
     *
     * @ElementName searchCriteriaExactServiceProvider
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactServiceProvider|null $searchCriteriaExactServiceProvider
     * @return $this
     */
    public function setSearchCriteriaExactServiceProvider($searchCriteriaExactServiceProvider)
    {
        $this->searchCriteriaExactServiceProvider = $searchCriteriaExactServiceProvider;
        return $this;
    }

    /**
     * Getter for searchCriteriaServiceProviderId
     *
     * @ElementName searchCriteriaServiceProviderId
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaServiceProviderId[]
     */
    public function getSearchCriteriaServiceProviderId()
    {
        return $this->searchCriteriaServiceProviderId;
    }

    /**
     * Setter for searchCriteriaServiceProviderId
     *
     * @ElementName searchCriteriaServiceProviderId
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaServiceProviderId[] $searchCriteriaServiceProviderId
     * @return $this
     */
    public function setSearchCriteriaServiceProviderId($searchCriteriaServiceProviderId)
    {
        $this->searchCriteriaServiceProviderId = $searchCriteriaServiceProviderId;
        return $this;
    }

    /**
     * Adder for searchCriteriaServiceProviderId
     *
     * @ElementName searchCriteriaServiceProviderId
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaServiceProviderId $searchCriteriaServiceProviderId
     * @return $this
     */
    public function addSearchCriteriaServiceProviderId($searchCriteriaServiceProviderId)
    {
        $this->searchCriteriaServiceProviderId []= $searchCriteriaServiceProviderId;
        return $this;
    }

    /**
     * Getter for searchCriteriaExactEndpointType
     *
     * @ElementName searchCriteriaExactEndpointType
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactEndpointType21sp1|null
     */
    public function getSearchCriteriaExactEndpointType()
    {
        return $this->searchCriteriaExactEndpointType;
    }

    /**
     * Setter for searchCriteriaExactEndpointType
     *
     * @ElementName searchCriteriaExactEndpointType
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactEndpointType21sp1|null $searchCriteriaExactEndpointType
     * @return $this
     */
    public function setSearchCriteriaExactEndpointType($searchCriteriaExactEndpointType)
    {
        $this->searchCriteriaExactEndpointType = $searchCriteriaExactEndpointType;
        return $this;
    }

    /**
     * Getter for searchCriteriaExactUserType
     *
     * @ElementName searchCriteriaExactUserType
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactUserType|null
     */
    public function getSearchCriteriaExactUserType()
    {
        return $this->searchCriteriaExactUserType;
    }

    /**
     * Setter for searchCriteriaExactUserType
     *
     * @ElementName searchCriteriaExactUserType
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactUserType|null $searchCriteriaExactUserType
     * @return $this
     */
    public function setSearchCriteriaExactUserType($searchCriteriaExactUserType)
    {
        $this->searchCriteriaExactUserType = $searchCriteriaExactUserType;
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
     * Getter for searchCriteriaExactPortNumber
     *
     * @ElementName searchCriteriaExactPortNumber
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactPortNumber|null
     */
    public function getSearchCriteriaExactPortNumber()
    {
        return $this->searchCriteriaExactPortNumber;
    }

    /**
     * Setter for searchCriteriaExactPortNumber
     *
     * @ElementName searchCriteriaExactPortNumber
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactPortNumber|null $searchCriteriaExactPortNumber
     * @return $this
     */
    public function setSearchCriteriaExactPortNumber($searchCriteriaExactPortNumber)
    {
        $this->searchCriteriaExactPortNumber = $searchCriteriaExactPortNumber;
        return $this;
    }

    /**
     * Getter for searchCriteriaAccessDeviceEndpointPrivateIdentity
     *
     * @ElementName searchCriteriaAccessDeviceEndpointPrivateIdentity
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaAccessDeviceEndpointPrivateIdentity[]
     */
    public function getSearchCriteriaAccessDeviceEndpointPrivateIdentity()
    {
        return $this->searchCriteriaAccessDeviceEndpointPrivateIdentity;
    }

    /**
     * Setter for searchCriteriaAccessDeviceEndpointPrivateIdentity
     *
     * @ElementName searchCriteriaAccessDeviceEndpointPrivateIdentity
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaAccessDeviceEndpointPrivateIdentity[] $searchCriteriaAccessDeviceEndpointPrivateIdentity
     * @return $this
     */
    public function setSearchCriteriaAccessDeviceEndpointPrivateIdentity($searchCriteriaAccessDeviceEndpointPrivateIdentity)
    {
        $this->searchCriteriaAccessDeviceEndpointPrivateIdentity = $searchCriteriaAccessDeviceEndpointPrivateIdentity;
        return $this;
    }

    /**
     * Adder for searchCriteriaAccessDeviceEndpointPrivateIdentity
     *
     * @ElementName searchCriteriaAccessDeviceEndpointPrivateIdentity
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaAccessDeviceEndpointPrivateIdentity $searchCriteriaAccessDeviceEndpointPrivateIdentity
     * @return $this
     */
    public function addSearchCriteriaAccessDeviceEndpointPrivateIdentity($searchCriteriaAccessDeviceEndpointPrivateIdentity)
    {
        $this->searchCriteriaAccessDeviceEndpointPrivateIdentity []= $searchCriteriaAccessDeviceEndpointPrivateIdentity;
        return $this;
    }


}

