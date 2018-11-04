<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupModifyRequest
 *
 * Modify the profile for a group.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         The following elements are only used in Amplify data mode and ignored 
 *         in AS and XS data mode: 
 *         servicePolicy, 
 *         callProcessingSliceId, 
 *         provisioningSliceId, 
 *         subscriberPartition,
 *         preferredDataCenter.
 *         When the callProcessingSliceId or provisioningSliceId is set to
 * nillable, 
 *         it will be assigned to the default Slice.
 *         Only Provisioning admin and above can change the callProcessingSliceId,
 * provisioningSliceId 
 *         , subscriberPartition and preferredDataCenter.
 *         
 *         The following elements are only used in XS data mode and ignored in data
 * mode:
 *         defaultUserCallingLineIdPhoneNumber.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class GroupModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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
     * @ElementName defaultDomain
     * @var string|null
     */
    private $defaultDomain = null;

    /**
     * @ElementName userLimit
     * @var int|null
     */
    private $userLimit = null;

    /**
     * @ElementName groupName
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $groupName = null;

    /**
     * @ElementName callingLineIdName
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $callingLineIdName = null;

    /**
     * @ElementName callingLineIdPhoneNumber
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $callingLineIdPhoneNumber = null;

    /**
     * @ElementName timeZone
     * @var string|null
     */
    private $timeZone = null;

    /**
     * @ElementName locationDialingCode
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $locationDialingCode = null;

    /**
     * @ElementName contact
     * @var \CWM\BroadWorksConnector\Ocip\Models\Contact|null
     */
    private $contact = null;

    /**
     * @ElementName address
     * @var \CWM\BroadWorksConnector\Ocip\Models\StreetAddress|null
     */
    private $address = null;

    /**
     * @ElementName servicePolicy
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $servicePolicy = null;

    /**
     * @ElementName callProcessingSliceId
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $callProcessingSliceId = null;

    /**
     * @ElementName provisioningSliceId
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $provisioningSliceId = null;

    /**
     * @ElementName subscriberPartition
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $subscriberPartition = null;

    /**
     * @ElementName preferredDataCenter
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $preferredDataCenter = null;

    /**
     * @ElementName defaultUserCallingLineIdPhoneNumber
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $defaultUserCallingLineIdPhoneNumber = null;

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
     * Getter for defaultDomain
     *
     * @ElementName defaultDomain
     * @return string|null
     */
    public function getDefaultDomain()
    {
        return $this->defaultDomain;
    }

    /**
     * Setter for defaultDomain
     *
     * @ElementName defaultDomain
     * @param string|null $defaultDomain
     * @return $this
     */
    public function setDefaultDomain($defaultDomain)
    {
        $this->defaultDomain = $defaultDomain;
        return $this;
    }

    /**
     * Getter for userLimit
     *
     * @ElementName userLimit
     * @return int|null
     */
    public function getUserLimit()
    {
        return $this->userLimit;
    }

    /**
     * Setter for userLimit
     *
     * @ElementName userLimit
     * @param int|null $userLimit
     * @return $this
     */
    public function setUserLimit($userLimit)
    {
        $this->userLimit = $userLimit;
        return $this;
    }

    /**
     * Getter for groupName
     *
     * @ElementName groupName
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getGroupName()
    {
        return $this->groupName;
    }

    /**
     * Setter for groupName
     *
     * @ElementName groupName
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $groupName
     * @return $this
     */
    public function setGroupName($groupName)
    {
        $this->groupName = $groupName;
        return $this;
    }

    /**
     * Getter for callingLineIdName
     *
     * @ElementName callingLineIdName
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getCallingLineIdName()
    {
        return $this->callingLineIdName;
    }

    /**
     * Setter for callingLineIdName
     *
     * @ElementName callingLineIdName
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $callingLineIdName
     * @return $this
     */
    public function setCallingLineIdName($callingLineIdName)
    {
        $this->callingLineIdName = $callingLineIdName;
        return $this;
    }

    /**
     * Getter for callingLineIdPhoneNumber
     *
     * @ElementName callingLineIdPhoneNumber
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getCallingLineIdPhoneNumber()
    {
        return $this->callingLineIdPhoneNumber;
    }

    /**
     * Setter for callingLineIdPhoneNumber
     *
     * @ElementName callingLineIdPhoneNumber
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $callingLineIdPhoneNumber
     * @return $this
     */
    public function setCallingLineIdPhoneNumber($callingLineIdPhoneNumber)
    {
        $this->callingLineIdPhoneNumber = $callingLineIdPhoneNumber;
        return $this;
    }

    /**
     * Getter for timeZone
     *
     * @ElementName timeZone
     * @return string|null
     */
    public function getTimeZone()
    {
        return $this->timeZone;
    }

    /**
     * Setter for timeZone
     *
     * @ElementName timeZone
     * @param string|null $timeZone
     * @return $this
     */
    public function setTimeZone($timeZone)
    {
        $this->timeZone = $timeZone;
        return $this;
    }

    /**
     * Getter for locationDialingCode
     *
     * @ElementName locationDialingCode
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getLocationDialingCode()
    {
        return $this->locationDialingCode;
    }

    /**
     * Setter for locationDialingCode
     *
     * @ElementName locationDialingCode
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $locationDialingCode
     * @return $this
     */
    public function setLocationDialingCode($locationDialingCode)
    {
        $this->locationDialingCode = $locationDialingCode;
        return $this;
    }

    /**
     * Getter for contact
     *
     * @ElementName contact
     * @return \CWM\BroadWorksConnector\Ocip\Models\Contact|null
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Setter for contact
     *
     * @ElementName contact
     * @param \CWM\BroadWorksConnector\Ocip\Models\Contact|null $contact
     * @return $this
     */
    public function setContact($contact)
    {
        $this->contact = $contact;
        return $this;
    }

    /**
     * Getter for address
     *
     * @ElementName address
     * @return \CWM\BroadWorksConnector\Ocip\Models\StreetAddress|null
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Setter for address
     *
     * @ElementName address
     * @param \CWM\BroadWorksConnector\Ocip\Models\StreetAddress|null $address
     * @return $this
     */
    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * Getter for servicePolicy
     *
     * @ElementName servicePolicy
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getServicePolicy()
    {
        return $this->servicePolicy;
    }

    /**
     * Setter for servicePolicy
     *
     * @ElementName servicePolicy
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $servicePolicy
     * @return $this
     */
    public function setServicePolicy($servicePolicy)
    {
        $this->servicePolicy = $servicePolicy;
        return $this;
    }

    /**
     * Getter for callProcessingSliceId
     *
     * @ElementName callProcessingSliceId
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getCallProcessingSliceId()
    {
        return $this->callProcessingSliceId;
    }

    /**
     * Setter for callProcessingSliceId
     *
     * @ElementName callProcessingSliceId
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $callProcessingSliceId
     * @return $this
     */
    public function setCallProcessingSliceId($callProcessingSliceId)
    {
        $this->callProcessingSliceId = $callProcessingSliceId;
        return $this;
    }

    /**
     * Getter for provisioningSliceId
     *
     * @ElementName provisioningSliceId
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getProvisioningSliceId()
    {
        return $this->provisioningSliceId;
    }

    /**
     * Setter for provisioningSliceId
     *
     * @ElementName provisioningSliceId
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $provisioningSliceId
     * @return $this
     */
    public function setProvisioningSliceId($provisioningSliceId)
    {
        $this->provisioningSliceId = $provisioningSliceId;
        return $this;
    }

    /**
     * Getter for subscriberPartition
     *
     * @ElementName subscriberPartition
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getSubscriberPartition()
    {
        return $this->subscriberPartition;
    }

    /**
     * Setter for subscriberPartition
     *
     * @ElementName subscriberPartition
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $subscriberPartition
     * @return $this
     */
    public function setSubscriberPartition($subscriberPartition)
    {
        $this->subscriberPartition = $subscriberPartition;
        return $this;
    }

    /**
     * Getter for preferredDataCenter
     *
     * @ElementName preferredDataCenter
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getPreferredDataCenter()
    {
        return $this->preferredDataCenter;
    }

    /**
     * Setter for preferredDataCenter
     *
     * @ElementName preferredDataCenter
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $preferredDataCenter
     * @return $this
     */
    public function setPreferredDataCenter($preferredDataCenter)
    {
        $this->preferredDataCenter = $preferredDataCenter;
        return $this;
    }

    /**
     * Getter for defaultUserCallingLineIdPhoneNumber
     *
     * @ElementName defaultUserCallingLineIdPhoneNumber
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getDefaultUserCallingLineIdPhoneNumber()
    {
        return $this->defaultUserCallingLineIdPhoneNumber;
    }

    /**
     * Setter for defaultUserCallingLineIdPhoneNumber
     *
     * @ElementName defaultUserCallingLineIdPhoneNumber
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $defaultUserCallingLineIdPhoneNumber
     * @return $this
     */
    public function setDefaultUserCallingLineIdPhoneNumber($defaultUserCallingLineIdPhoneNumber)
    {
        $this->defaultUserCallingLineIdPhoneNumber = $defaultUserCallingLineIdPhoneNumber;
        return $this;
    }


}

