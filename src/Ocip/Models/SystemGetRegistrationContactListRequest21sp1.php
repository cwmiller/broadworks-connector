<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemGetRegistrationContactListRequest21sp1
 *
 * Get the list of registration contacts.
 *         This request handles all levels of administration privileges.  The
 * content of the response will only contain 
 *         items within the scope of the requester's login id.  At the system level
 * any of the choice parameters may be 
 *         specified to filter the registrations listed.  At the reseller level,
 * the resellerId must be specified. 
 *         ResellerId is not valid at service provider, group or user level. At the
 * service provider level the 
 *         serviceProviderId must be specified for the service provider and group
 * options.  When using the userId or 
 *         linePort options the specified value must be valid for that service
 * provider login.  At the group level 
 *         the servicProviderId and the groupId must be specified for the group
 * option. When using the userId or linePort 
 *         options the specified value must be valid for that group login.  
 *         The serviceProviderId option is not valid at the group level.  At the
 * user level when using the userId or 
 *         linePort options the specified value must be valid for that user login. 
 * The serviceProviderId and groupId 
 *         options are not valid at the user level.
 *         The response is either SystemGetRegistrationContactListResponse21sp1 or
 * ErrorResponse.
 *         The RegistrationEndpointType21sp1 is sent in response The Endpoint Type
 * column contains one of the enumerated RegistrationEndpointType21sp1 values.
 *         The value Mobility in Endpoint Type column is only applicable in AS data
 * mode.
 *         
 *         The following elements are only used in AS data mode:
 *           resellerId
 */
class SystemGetRegistrationContactListRequest21sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName resellerId
     * @var string|null
     */
    private $resellerId = null;

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName svcProviderId
     * @var string|null
     */
    private $svcProviderId = null;

    /**
     * @ElementName groupId
     * @var string|null
     */
    private $groupId = null;

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName linePort
     * @var string|null
     */
    private $linePort = null;

    /**
     * @ElementName deviceLevel
     * @var string|null
     */
    private $deviceLevel = null;

    /**
     * @ElementName deviceName
     * @var string|null
     */
    private $deviceName = null;

    /**
     * @ElementName deviceType
     * @var string|null
     */
    private $deviceType = null;

    /**
     * @ElementName searchCriteriaRegistrationURI
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaRegistrationURI[]
     */
    private $searchCriteriaRegistrationURI = array(
        
    );

    /**
     * @ElementName searchCriteriaSIPContact
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaSIPContact[]
     */
    private $searchCriteriaSIPContact = array(
        
    );

    /**
     * @ElementName endpointType
     * @var string|null
     */
    private $endpointType = null;

    /**
     * @ElementName expired
     * @var bool|null
     */
    private $expired = null;

    /**
     * Getter for resellerId
     *
     * @ElementName resellerId
     * @return string|null
     */
    public function getResellerId()
    {
        return $this->resellerId;
    }

    /**
     * Setter for resellerId
     *
     * @ElementName resellerId
     * @param string|null $resellerId
     * @return $this
     */
    public function setResellerId($resellerId)
    {
        $this->resellerId = $resellerId;
        return $this;
    }

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
     * Getter for svcProviderId
     *
     * @ElementName svcProviderId
     * @return string|null
     */
    public function getSvcProviderId()
    {
        return $this->svcProviderId;
    }

    /**
     * Setter for svcProviderId
     *
     * @ElementName svcProviderId
     * @param string|null $svcProviderId
     * @return $this
     */
    public function setSvcProviderId($svcProviderId)
    {
        $this->svcProviderId = $svcProviderId;
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
     * Getter for userId
     *
     * @ElementName userId
     * @return string|null
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Setter for userId
     *
     * @ElementName userId
     * @param string|null $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * Getter for linePort
     *
     * @ElementName linePort
     * @return string|null
     */
    public function getLinePort()
    {
        return $this->linePort;
    }

    /**
     * Setter for linePort
     *
     * @ElementName linePort
     * @param string|null $linePort
     * @return $this
     */
    public function setLinePort($linePort)
    {
        $this->linePort = $linePort;
        return $this;
    }

    /**
     * Getter for deviceLevel
     *
     * @ElementName deviceLevel
     * @return string|null
     */
    public function getDeviceLevel()
    {
        return $this->deviceLevel;
    }

    /**
     * Setter for deviceLevel
     *
     * @ElementName deviceLevel
     * @param string|null $deviceLevel
     * @return $this
     */
    public function setDeviceLevel($deviceLevel)
    {
        $this->deviceLevel = $deviceLevel;
        return $this;
    }

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
     * Getter for deviceType
     *
     * @ElementName deviceType
     * @return string|null
     */
    public function getDeviceType()
    {
        return $this->deviceType;
    }

    /**
     * Setter for deviceType
     *
     * @ElementName deviceType
     * @param string|null $deviceType
     * @return $this
     */
    public function setDeviceType($deviceType)
    {
        $this->deviceType = $deviceType;
        return $this;
    }

    /**
     * Getter for searchCriteriaRegistrationURI
     *
     * @ElementName searchCriteriaRegistrationURI
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaRegistrationURI[]
     */
    public function getSearchCriteriaRegistrationURI()
    {
        return $this->searchCriteriaRegistrationURI;
    }

    /**
     * Setter for searchCriteriaRegistrationURI
     *
     * @ElementName searchCriteriaRegistrationURI
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaRegistrationURI[] $searchCriteriaRegistrationURI
     * @return $this
     */
    public function setSearchCriteriaRegistrationURI($searchCriteriaRegistrationURI)
    {
        $this->searchCriteriaRegistrationURI = $searchCriteriaRegistrationURI;
        return $this;
    }

    /**
     * Adder for searchCriteriaRegistrationURI
     *
     * @ElementName searchCriteriaRegistrationURI
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaRegistrationURI $searchCriteriaRegistrationURI
     * @return $this
     */
    public function addSearchCriteriaRegistrationURI($searchCriteriaRegistrationURI)
    {
        $this->searchCriteriaRegistrationURI []= $searchCriteriaRegistrationURI;
        return $this;
    }

    /**
     * Getter for searchCriteriaSIPContact
     *
     * @ElementName searchCriteriaSIPContact
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaSIPContact[]
     */
    public function getSearchCriteriaSIPContact()
    {
        return $this->searchCriteriaSIPContact;
    }

    /**
     * Setter for searchCriteriaSIPContact
     *
     * @ElementName searchCriteriaSIPContact
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaSIPContact[] $searchCriteriaSIPContact
     * @return $this
     */
    public function setSearchCriteriaSIPContact($searchCriteriaSIPContact)
    {
        $this->searchCriteriaSIPContact = $searchCriteriaSIPContact;
        return $this;
    }

    /**
     * Adder for searchCriteriaSIPContact
     *
     * @ElementName searchCriteriaSIPContact
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaSIPContact $searchCriteriaSIPContact
     * @return $this
     */
    public function addSearchCriteriaSIPContact($searchCriteriaSIPContact)
    {
        $this->searchCriteriaSIPContact []= $searchCriteriaSIPContact;
        return $this;
    }

    /**
     * Getter for endpointType
     *
     * @ElementName endpointType
     * @return string|null
     */
    public function getEndpointType()
    {
        return $this->endpointType;
    }

    /**
     * Setter for endpointType
     *
     * @ElementName endpointType
     * @param string|null $endpointType
     * @return $this
     */
    public function setEndpointType($endpointType)
    {
        $this->endpointType = $endpointType;
        return $this;
    }

    /**
     * Getter for expired
     *
     * @ElementName expired
     * @return bool|null
     */
    public function getExpired()
    {
        return $this->expired;
    }

    /**
     * Setter for expired
     *
     * @ElementName expired
     * @param bool|null $expired
     * @return $this
     */
    public function setExpired($expired)
    {
        $this->expired = $expired;
        return $this;
    }


}

