<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAddRequest
 *
 * Add a group.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         The following elements are only used in Amplify data mode and ignored in
 * AS and XS data mode:
 *         servicePolicy,
 *         callProcessingSliceId, 
 *         provisioningSliceId, 
 *         subscriberPartition,
 *         preferredDataCenter.
 *         When the callProcessingSliceId or provisioningSliceId is not specified
 * in the AmplifyDataMode, 
 *         the default slice Id is assigned to the Group.
 *         Only Provisioning admin and above can change the callProcessingSliceId, 
 *
 *         provisioningSliceId, subscriberPartition, preferredDataCenter.
 *        
 *         The following elements are only used in XS data mode and ignored in AS
 * data mode:
 *         defaultUserCallingLineIdPhoneNumber.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class GroupAddRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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
     * @var string|null
     */
    private $groupName = null;

    /**
     * @ElementName callingLineIdName
     * @var string|null
     */
    private $callingLineIdName = null;

    /**
     * @ElementName timeZone
     * @var string|null
     */
    private $timeZone = null;

    /**
     * @ElementName locationDialingCode
     * @var string|null
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
     * @var string|null
     */
    private $servicePolicy = null;

    /**
     * @ElementName callProcessingSliceId
     * @var string|null
     */
    private $callProcessingSliceId = null;

    /**
     * @ElementName provisioningSliceId
     * @var string|null
     */
    private $provisioningSliceId = null;

    /**
     * @ElementName subscriberPartition
     * @var string|null
     */
    private $subscriberPartition = null;

    /**
     * @ElementName preferredDataCenter
     * @var string|null
     */
    private $preferredDataCenter = null;

    /**
     * @ElementName defaultUserCallingLineIdPhoneNumber
     * @var string|null
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
     * @return string|null
     */
    public function getGroupName()
    {
        return $this->groupName;
    }

    /**
     * Setter for groupName
     *
     * @ElementName groupName
     * @param string|null $groupName
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
     * @return string|null
     */
    public function getCallingLineIdName()
    {
        return $this->callingLineIdName;
    }

    /**
     * Setter for callingLineIdName
     *
     * @ElementName callingLineIdName
     * @param string|null $callingLineIdName
     * @return $this
     */
    public function setCallingLineIdName($callingLineIdName)
    {
        $this->callingLineIdName = $callingLineIdName;
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
     * @return string|null
     */
    public function getLocationDialingCode()
    {
        return $this->locationDialingCode;
    }

    /**
     * Setter for locationDialingCode
     *
     * @ElementName locationDialingCode
     * @param string|null $locationDialingCode
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
    public function setContact(\CWM\BroadWorksConnector\Ocip\Models\Contact $contact)
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
    public function setAddress(\CWM\BroadWorksConnector\Ocip\Models\StreetAddress $address)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * Getter for servicePolicy
     *
     * @ElementName servicePolicy
     * @return string|null
     */
    public function getServicePolicy()
    {
        return $this->servicePolicy;
    }

    /**
     * Setter for servicePolicy
     *
     * @ElementName servicePolicy
     * @param string|null $servicePolicy
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
     * @return string|null
     */
    public function getCallProcessingSliceId()
    {
        return $this->callProcessingSliceId;
    }

    /**
     * Setter for callProcessingSliceId
     *
     * @ElementName callProcessingSliceId
     * @param string|null $callProcessingSliceId
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
     * @return string|null
     */
    public function getProvisioningSliceId()
    {
        return $this->provisioningSliceId;
    }

    /**
     * Setter for provisioningSliceId
     *
     * @ElementName provisioningSliceId
     * @param string|null $provisioningSliceId
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
     * @return string|null
     */
    public function getSubscriberPartition()
    {
        return $this->subscriberPartition;
    }

    /**
     * Setter for subscriberPartition
     *
     * @ElementName subscriberPartition
     * @param string|null $subscriberPartition
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
     * @return string|null
     */
    public function getPreferredDataCenter()
    {
        return $this->preferredDataCenter;
    }

    /**
     * Setter for preferredDataCenter
     *
     * @ElementName preferredDataCenter
     * @param string|null $preferredDataCenter
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
     * @return string|null
     */
    public function getDefaultUserCallingLineIdPhoneNumber()
    {
        return $this->defaultUserCallingLineIdPhoneNumber;
    }

    /**
     * Setter for defaultUserCallingLineIdPhoneNumber
     *
     * @ElementName defaultUserCallingLineIdPhoneNumber
     * @param string|null $defaultUserCallingLineIdPhoneNumber
     * @return $this
     */
    public function setDefaultUserCallingLineIdPhoneNumber($defaultUserCallingLineIdPhoneNumber)
    {
        $this->defaultUserCallingLineIdPhoneNumber = $defaultUserCallingLineIdPhoneNumber;
        return $this;
    }


}

