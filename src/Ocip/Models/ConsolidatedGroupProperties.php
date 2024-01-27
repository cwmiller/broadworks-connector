<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ConsolidatedGroupProperties
 *
 * @Groups [{"id":"6337d0cfba4de1c83587203c5b0bae54:1707","type":"sequence"}]
 */
class ConsolidatedGroupProperties
{
    /**
     * @ElementName defaultDomain
     * @Type string
     * @Group 6337d0cfba4de1c83587203c5b0bae54:1707
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $defaultDomain = null;

    /**
     * @ElementName userLimit
     * @Type int
     * @Group 6337d0cfba4de1c83587203c5b0bae54:1707
     * @MinInclusive 1
     * @MaxInclusive 999999
     * @var int|null
     */
    protected $userLimit = null;

    /**
     * @ElementName groupName
     * @Type string
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:1707
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $groupName = null;

    /**
     * @ElementName callingLineIdName
     * @Type string
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:1707
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $callingLineIdName = null;

    /**
     * @ElementName timeZone
     * @Type string
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:1707
     * @MinLength 1
     * @MaxLength 127
     * @var string|null
     */
    protected $timeZone = null;

    /**
     * @ElementName locationDialingCode
     * @Type string
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:1707
     * @MinLength 1
     * @MaxLength 15
     * @var string|null
     */
    protected $locationDialingCode = null;

    /**
     * @ElementName contact
     * @Type \CWM\BroadWorksConnector\Ocip\Models\Contact
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:1707
     * @var \CWM\BroadWorksConnector\Ocip\Models\Contact|null
     */
    protected $contact = null;

    /**
     * @ElementName address
     * @Type \CWM\BroadWorksConnector\Ocip\Models\StreetAddress
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:1707
     * @var \CWM\BroadWorksConnector\Ocip\Models\StreetAddress|null
     */
    protected $address = null;

    /**
     * @ElementName networkClassOfService
     * @Type string
     * @Array
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:1707
     * @MinLength 1
     * @MaxLength 40
     * @var string[]
     */
    protected $networkClassOfService = [
        
    ];

    /**
     * @ElementName defaultNetworkClassOfService
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DefaultNetworkClassOfService
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:1707
     * @var \CWM\BroadWorksConnector\Ocip\Models\DefaultNetworkClassOfService|null
     */
    protected $defaultNetworkClassOfService = null;

    /**
     * @ElementName groupService
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ConsolidatedGroupServiceAssignment
     * @Array
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:1707
     * @var \CWM\BroadWorksConnector\Ocip\Models\ConsolidatedGroupServiceAssignment[]
     */
    protected $groupService = [
        
    ];

    /**
     * @ElementName servicePolicy
     * @Type string
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:1707
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $servicePolicy = null;

    /**
     * Getter for defaultDomain
     *
     * @return string
     */
    public function getDefaultDomain()
    {
        return $this->defaultDomain instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->defaultDomain;
    }

    /**
     * Setter for defaultDomain
     *
     * @param string $defaultDomain
     * @return $this
     */
    public function setDefaultDomain($defaultDomain)
    {
        $this->defaultDomain = $defaultDomain;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDefaultDomain()
    {
        $this->defaultDomain = null;
        return $this;
    }

    /**
     * Getter for userLimit
     *
     * @return int
     */
    public function getUserLimit()
    {
        return $this->userLimit instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userLimit;
    }

    /**
     * Setter for userLimit
     *
     * @param int $userLimit
     * @return $this
     */
    public function setUserLimit($userLimit)
    {
        $this->userLimit = $userLimit;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserLimit()
    {
        $this->userLimit = null;
        return $this;
    }

    /**
     * Getter for groupName
     *
     * @return string
     */
    public function getGroupName()
    {
        return $this->groupName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupName;
    }

    /**
     * Setter for groupName
     *
     * @param string $groupName
     * @return $this
     */
    public function setGroupName($groupName)
    {
        $this->groupName = $groupName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupName()
    {
        $this->groupName = null;
        return $this;
    }

    /**
     * Getter for callingLineIdName
     *
     * @return string
     */
    public function getCallingLineIdName()
    {
        return $this->callingLineIdName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callingLineIdName;
    }

    /**
     * Setter for callingLineIdName
     *
     * @param string $callingLineIdName
     * @return $this
     */
    public function setCallingLineIdName($callingLineIdName)
    {
        $this->callingLineIdName = $callingLineIdName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallingLineIdName()
    {
        $this->callingLineIdName = null;
        return $this;
    }

    /**
     * Getter for timeZone
     *
     * @return string
     */
    public function getTimeZone()
    {
        return $this->timeZone instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->timeZone;
    }

    /**
     * Setter for timeZone
     *
     * @param string $timeZone
     * @return $this
     */
    public function setTimeZone($timeZone)
    {
        $this->timeZone = $timeZone;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTimeZone()
    {
        $this->timeZone = null;
        return $this;
    }

    /**
     * Getter for locationDialingCode
     *
     * @return string
     */
    public function getLocationDialingCode()
    {
        return $this->locationDialingCode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->locationDialingCode;
    }

    /**
     * Setter for locationDialingCode
     *
     * @param string $locationDialingCode
     * @return $this
     */
    public function setLocationDialingCode($locationDialingCode)
    {
        $this->locationDialingCode = $locationDialingCode;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetLocationDialingCode()
    {
        $this->locationDialingCode = null;
        return $this;
    }

    /**
     * Getter for contact
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\Contact
     */
    public function getContact()
    {
        return $this->contact instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->contact;
    }

    /**
     * Setter for contact
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\Contact $contact
     * @return $this
     */
    public function setContact(\CWM\BroadWorksConnector\Ocip\Models\Contact $contact)
    {
        $this->contact = $contact;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetContact()
    {
        $this->contact = null;
        return $this;
    }

    /**
     * Getter for address
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\StreetAddress
     */
    public function getAddress()
    {
        return $this->address instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->address;
    }

    /**
     * Setter for address
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\StreetAddress $address
     * @return $this
     */
    public function setAddress(\CWM\BroadWorksConnector\Ocip\Models\StreetAddress $address)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAddress()
    {
        $this->address = null;
        return $this;
    }

    /**
     * Getter for networkClassOfService
     *
     * @return string[]
     */
    public function getNetworkClassOfService()
    {
        return $this->networkClassOfService instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->networkClassOfService;
    }

    /**
     * Setter for networkClassOfService
     *
     * @param string[] $networkClassOfService
     * @return $this
     */
    public function setNetworkClassOfService(array $networkClassOfService)
    {
        $this->networkClassOfService = $networkClassOfService;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNetworkClassOfService()
    {
        $this->networkClassOfService = null;
        return $this;
    }

    /**
     * Adder for networkClassOfService
     *
     * @param string $networkClassOfService
     * @return $this
     */
    public function addNetworkClassOfService(string $networkClassOfService)
    {
        $this->networkClassOfService[] = $networkClassOfService;
        return $this;
    }

    /**
     * Getter for defaultNetworkClassOfService
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\DefaultNetworkClassOfService
     */
    public function getDefaultNetworkClassOfService()
    {
        return $this->defaultNetworkClassOfService instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->defaultNetworkClassOfService;
    }

    /**
     * Setter for defaultNetworkClassOfService
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\DefaultNetworkClassOfService $defaultNetworkClassOfService
     * @return $this
     */
    public function setDefaultNetworkClassOfService(\CWM\BroadWorksConnector\Ocip\Models\DefaultNetworkClassOfService $defaultNetworkClassOfService)
    {
        $this->defaultNetworkClassOfService = $defaultNetworkClassOfService;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDefaultNetworkClassOfService()
    {
        $this->defaultNetworkClassOfService = null;
        return $this;
    }

    /**
     * Getter for groupService
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ConsolidatedGroupServiceAssignment[]
     */
    public function getGroupService()
    {
        return $this->groupService instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupService;
    }

    /**
     * Setter for groupService
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ConsolidatedGroupServiceAssignment[] $groupService
     * @return $this
     */
    public function setGroupService(array $groupService)
    {
        $this->groupService = $groupService;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupService()
    {
        $this->groupService = null;
        return $this;
    }

    /**
     * Adder for groupService
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ConsolidatedGroupServiceAssignment $groupService
     * @return $this
     */
    public function addGroupService($groupService)
    {
        $this->groupService[] = $groupService;
        return $this;
    }

    /**
     * Getter for servicePolicy
     *
     * @return string
     */
    public function getServicePolicy()
    {
        return $this->servicePolicy instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->servicePolicy;
    }

    /**
     * Setter for servicePolicy
     *
     * @param string $servicePolicy
     * @return $this
     */
    public function setServicePolicy($servicePolicy)
    {
        $this->servicePolicy = $servicePolicy;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServicePolicy()
    {
        $this->servicePolicy = null;
        return $this;
    }
}

