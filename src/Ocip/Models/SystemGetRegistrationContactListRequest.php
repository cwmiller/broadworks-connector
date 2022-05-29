<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemGetRegistrationContactListRequest
 *
 * Get the list of registration contacts.
 *         This request handles all levels of administration privileges.  The content of the response will only contain 
 *         items within the scope of the requester's login id.  At the system level any of the choice parameters may be 
 *         specified to filter the registrations listed.  At the reseller level, the resellerId must be specified. 
 *         ResellerId is not valid at service provider, group or user level. At the service provider level the 
 *         serviceProviderId must be specified for the service provider and group options.  When using the userId or 
 *         linePort options the specified value must be valid for that service provider login.  At the group level 
 *         the servicProviderId and the groupId must be specified for the group option. When using the userId or linePort 
 *         options the specified value must be valid for that group login.  
 *         The serviceProviderId option is not valid at the group level.  At the user level when using the userId or 
 *         linePort options the specified value must be valid for that user login.  The serviceProviderId and groupId 
 *         options are not valid at the user level.
 *         The response is either SystemGetRegistrationContactListResponse or ErrorResponse.
 *         
 *         The following elements are only used in AS data mode:
 *           resellerId
 *
 * @see SystemGetRegistrationContactListResponse
 * @see ErrorResponse
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:27045","type":"sequence","children":[{"id":"ab0042aa512abc10edb3c55e4b416b0b:27046","type":"choice","optional":true,"children":[{"id":"ab0042aa512abc10edb3c55e4b416b0b:27049","type":"sequence"}]}]}]
 */
class SystemGetRegistrationContactListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName resellerId
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:27046
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $resellerId = null;

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:27046
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName svcProviderId
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:27049
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $svcProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:27049
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $groupId = null;

    /**
     * @ElementName userId
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:27046
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName linePort
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:27046
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $linePort = null;

    /**
     * @ElementName deviceLevel
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceLevel
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:27045
     * @var \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceLevel|null
     */
    protected $deviceLevel = null;

    /**
     * @ElementName deviceName
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:27045
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $deviceName = null;

    /**
     * @ElementName deviceType
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:27045
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $deviceType = null;

    /**
     * @ElementName searchCriteriaRegistrationURI
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaRegistrationURI
     * @Array
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:27045
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaRegistrationURI[]
     */
    protected $searchCriteriaRegistrationURI = array(
        
    );

    /**
     * @ElementName searchCriteriaSIPContact
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaSIPContact
     * @Array
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:27045
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaSIPContact[]
     */
    protected $searchCriteriaSIPContact = array(
        
    );

    /**
     * @ElementName endpointType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\RegistrationEndpointType
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:27045
     * @var \CWM\BroadWorksConnector\Ocip\Models\RegistrationEndpointType|null
     */
    protected $endpointType = null;

    /**
     * @ElementName expired
     * @Type bool
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:27045
     * @var bool|null
     */
    protected $expired = null;

    /**
     * Getter for resellerId
     *
     * @return string
     */
    public function getResellerId()
    {
        return $this->resellerId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->resellerId;
    }

    /**
     * Setter for resellerId
     *
     * @param string $resellerId
     * @return $this
     */
    public function setResellerId($resellerId)
    {
        $this->resellerId = $resellerId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetResellerId()
    {
        $this->resellerId = null;
        return $this;
    }

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
     * Getter for svcProviderId
     *
     * @return string
     */
    public function getSvcProviderId()
    {
        return $this->svcProviderId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->svcProviderId;
    }

    /**
     * Setter for svcProviderId
     *
     * @param string $svcProviderId
     * @return $this
     */
    public function setSvcProviderId($svcProviderId)
    {
        $this->svcProviderId = $svcProviderId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSvcProviderId()
    {
        $this->svcProviderId = null;
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
     * Getter for userId
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->userId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userId;
    }

    /**
     * Setter for userId
     *
     * @param string $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserId()
    {
        $this->userId = null;
        return $this;
    }

    /**
     * Getter for linePort
     *
     * @return string
     */
    public function getLinePort()
    {
        return $this->linePort instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->linePort;
    }

    /**
     * Setter for linePort
     *
     * @param string $linePort
     * @return $this
     */
    public function setLinePort($linePort)
    {
        $this->linePort = $linePort;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetLinePort()
    {
        $this->linePort = null;
        return $this;
    }

    /**
     * Getter for deviceLevel
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceLevel
     */
    public function getDeviceLevel()
    {
        return $this->deviceLevel instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deviceLevel;
    }

    /**
     * Setter for deviceLevel
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AccessDeviceLevel $deviceLevel
     * @return $this
     */
    public function setDeviceLevel(\CWM\BroadWorksConnector\Ocip\Models\AccessDeviceLevel $deviceLevel)
    {
        $this->deviceLevel = $deviceLevel;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDeviceLevel()
    {
        $this->deviceLevel = null;
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
     * Getter for deviceType
     *
     * @return string
     */
    public function getDeviceType()
    {
        return $this->deviceType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deviceType;
    }

    /**
     * Setter for deviceType
     *
     * @param string $deviceType
     * @return $this
     */
    public function setDeviceType($deviceType)
    {
        $this->deviceType = $deviceType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDeviceType()
    {
        $this->deviceType = null;
        return $this;
    }

    /**
     * Getter for searchCriteriaRegistrationURI
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaRegistrationURI[]
     */
    public function getSearchCriteriaRegistrationURI()
    {
        return $this->searchCriteriaRegistrationURI instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaRegistrationURI;
    }

    /**
     * Setter for searchCriteriaRegistrationURI
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaRegistrationURI[] $searchCriteriaRegistrationURI
     * @return $this
     */
    public function setSearchCriteriaRegistrationURI(array $searchCriteriaRegistrationURI)
    {
        $this->searchCriteriaRegistrationURI = $searchCriteriaRegistrationURI;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaRegistrationURI()
    {
        $this->searchCriteriaRegistrationURI = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaRegistrationURI
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaRegistrationURI $searchCriteriaRegistrationURI
     * @return $this
     */
    public function addSearchCriteriaRegistrationURI($searchCriteriaRegistrationURI)
    {
        $this->searchCriteriaRegistrationURI[] = $searchCriteriaRegistrationURI;
        return $this;
    }

    /**
     * Getter for searchCriteriaSIPContact
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaSIPContact[]
     */
    public function getSearchCriteriaSIPContact()
    {
        return $this->searchCriteriaSIPContact instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaSIPContact;
    }

    /**
     * Setter for searchCriteriaSIPContact
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaSIPContact[] $searchCriteriaSIPContact
     * @return $this
     */
    public function setSearchCriteriaSIPContact(array $searchCriteriaSIPContact)
    {
        $this->searchCriteriaSIPContact = $searchCriteriaSIPContact;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaSIPContact()
    {
        $this->searchCriteriaSIPContact = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaSIPContact
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaSIPContact $searchCriteriaSIPContact
     * @return $this
     */
    public function addSearchCriteriaSIPContact($searchCriteriaSIPContact)
    {
        $this->searchCriteriaSIPContact[] = $searchCriteriaSIPContact;
        return $this;
    }

    /**
     * Getter for endpointType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\RegistrationEndpointType
     */
    public function getEndpointType()
    {
        return $this->endpointType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->endpointType;
    }

    /**
     * Setter for endpointType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\RegistrationEndpointType $endpointType
     * @return $this
     */
    public function setEndpointType(\CWM\BroadWorksConnector\Ocip\Models\RegistrationEndpointType $endpointType)
    {
        $this->endpointType = $endpointType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEndpointType()
    {
        $this->endpointType = null;
        return $this;
    }

    /**
     * Getter for expired
     *
     * @return bool
     */
    public function getExpired()
    {
        return $this->expired instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->expired;
    }

    /**
     * Setter for expired
     *
     * @param bool $expired
     * @return $this
     */
    public function setExpired($expired)
    {
        $this->expired = $expired;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetExpired()
    {
        $this->expired = null;
        return $this;
    }


}

