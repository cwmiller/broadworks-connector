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
 *         subscriberPartition.
 *         When the callProcessingSliceId or provisioningSliceId is set to nillable, 
 *         it will be assigned to the default Slice.
 *         Only Provisioning admin and above can change the callProcessingSliceId, provisioningSliceId, and subscriberPartition.
 *         
 *         The following elements are only used in Amplify and XS data mode and ignored in AS data mode:
 *         preferredDataCenter.
 *         Only Provisioning admin and above can change the preferredDataCenter.
 *         
 *         The following elements are only used in XS data mode and ignored in Amplify and AS data mode:
 *         defaultUserCallingLineIdPhoneNumber.
 *         
 *         The following elements are only used in AS data mode and ignored in the XS data mode:
 * 		 extensionLengthSettings
 * 		 dialPlanAccessCode
 * 		 dialPlanPolicy
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"f3a93cf15de4abd7903673e44ee3e07b:6434","type":"sequence"}]
 */
class GroupModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group f3a93cf15de4abd7903673e44ee3e07b:6434
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group f3a93cf15de4abd7903673e44ee3e07b:6434
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $groupId = null;

    /**
     * @ElementName defaultDomain
     * @Type string
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:6434
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $defaultDomain = null;

    /**
     * @ElementName userLimit
     * @Type int
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:6434
     * @MinInclusive 1
     * @MaxInclusive 999999
     * @var int|null
     */
    protected $userLimit = null;

    /**
     * @ElementName groupName
     * @Type string
     * @Nillable
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:6434
     * @MinLength 1
     * @MaxLength 80
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $groupName = null;

    /**
     * @ElementName callingLineIdName
     * @Type string
     * @Nillable
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:6434
     * @MinLength 1
     * @MaxLength 80
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $callingLineIdName = null;

    /**
     * @ElementName callingLineIdPhoneNumber
     * @Type string
     * @Nillable
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:6434
     * @MinLength 1
     * @MaxLength 23
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $callingLineIdPhoneNumber = null;

    /**
     * @ElementName timeZone
     * @Type string
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:6434
     * @MinLength 1
     * @MaxLength 127
     * @var string|null
     */
    protected $timeZone = null;

    /**
     * @ElementName locationDialingCode
     * @Type string
     * @Nillable
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:6434
     * @MinLength 1
     * @MaxLength 15
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $locationDialingCode = null;

    /**
     * @ElementName contact
     * @Type \CWM\BroadWorksConnector\Ocip\Models\Contact
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:6434
     * @var \CWM\BroadWorksConnector\Ocip\Models\Contact|null
     */
    protected $contact = null;

    /**
     * @ElementName address
     * @Type \CWM\BroadWorksConnector\Ocip\Models\StreetAddress
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:6434
     * @var \CWM\BroadWorksConnector\Ocip\Models\StreetAddress|null
     */
    protected $address = null;

    /**
     * @ElementName servicePolicy
     * @Type string
     * @Nillable
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:6434
     * @MinLength 1
     * @MaxLength 80
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $servicePolicy = null;

    /**
     * @ElementName callProcessingSliceId
     * @Type string
     * @Nillable
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:6434
     * @MinLength 1
     * @MaxLength 80
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $callProcessingSliceId = null;

    /**
     * @ElementName provisioningSliceId
     * @Type string
     * @Nillable
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:6434
     * @MinLength 1
     * @MaxLength 80
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $provisioningSliceId = null;

    /**
     * @ElementName subscriberPartition
     * @Type string
     * @Nillable
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:6434
     * @MinLength 1
     * @MaxLength 80
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $subscriberPartition = null;

    /**
     * @ElementName preferredDataCenter
     * @Type string
     * @Nillable
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:6434
     * @MinLength 1
     * @MaxLength 80
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $preferredDataCenter = null;

    /**
     * @ElementName defaultUserCallingLineIdPhoneNumber
     * @Type string
     * @Nillable
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:6434
     * @MinLength 1
     * @MaxLength 23
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $defaultUserCallingLineIdPhoneNumber = null;

    /**
     * @ElementName extensionLengthSettings
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupExtensionLengthSettings
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:6434
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupExtensionLengthSettings|null
     */
    protected $extensionLengthSettings = null;

    /**
     * @ElementName dialPlanAccessCode
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DialPlanPolicyAccessCode
     * @Nillable
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:6434
     * @var \CWM\BroadWorksConnector\Ocip\Models\DialPlanPolicyAccessCode|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $dialPlanAccessCode = null;

    /**
     * @ElementName dialPlanPolicy
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DialPlanPolicy
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:6434
     * @var \CWM\BroadWorksConnector\Ocip\Models\DialPlanPolicy|null
     */
    protected $dialPlanPolicy = null;

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
     * @return string|null
     */
    public function getGroupName()
    {
        return $this->groupName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupName;
    }

    /**
     * Setter for groupName
     *
     * @param string|null $groupName
     * @return $this
     */
    public function setGroupName($groupName = null)
    {
        if ($groupName === null) {
            $this->groupName = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->groupName = $groupName;
        }
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
     * @return string|null
     */
    public function getCallingLineIdName()
    {
        return $this->callingLineIdName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callingLineIdName;
    }

    /**
     * Setter for callingLineIdName
     *
     * @param string|null $callingLineIdName
     * @return $this
     */
    public function setCallingLineIdName($callingLineIdName = null)
    {
        if ($callingLineIdName === null) {
            $this->callingLineIdName = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->callingLineIdName = $callingLineIdName;
        }
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
     * Getter for callingLineIdPhoneNumber
     *
     * @return string|null
     */
    public function getCallingLineIdPhoneNumber()
    {
        return $this->callingLineIdPhoneNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callingLineIdPhoneNumber;
    }

    /**
     * Setter for callingLineIdPhoneNumber
     *
     * @param string|null $callingLineIdPhoneNumber
     * @return $this
     */
    public function setCallingLineIdPhoneNumber($callingLineIdPhoneNumber = null)
    {
        if ($callingLineIdPhoneNumber === null) {
            $this->callingLineIdPhoneNumber = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->callingLineIdPhoneNumber = $callingLineIdPhoneNumber;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallingLineIdPhoneNumber()
    {
        $this->callingLineIdPhoneNumber = null;
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
     * @return string|null
     */
    public function getLocationDialingCode()
    {
        return $this->locationDialingCode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->locationDialingCode;
    }

    /**
     * Setter for locationDialingCode
     *
     * @param string|null $locationDialingCode
     * @return $this
     */
    public function setLocationDialingCode($locationDialingCode = null)
    {
        if ($locationDialingCode === null) {
            $this->locationDialingCode = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->locationDialingCode = $locationDialingCode;
        }
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
     * Getter for servicePolicy
     *
     * @return string|null
     */
    public function getServicePolicy()
    {
        return $this->servicePolicy instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->servicePolicy;
    }

    /**
     * Setter for servicePolicy
     *
     * @param string|null $servicePolicy
     * @return $this
     */
    public function setServicePolicy($servicePolicy = null)
    {
        if ($servicePolicy === null) {
            $this->servicePolicy = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->servicePolicy = $servicePolicy;
        }
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

    /**
     * Getter for callProcessingSliceId
     *
     * @return string|null
     */
    public function getCallProcessingSliceId()
    {
        return $this->callProcessingSliceId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callProcessingSliceId;
    }

    /**
     * Setter for callProcessingSliceId
     *
     * @param string|null $callProcessingSliceId
     * @return $this
     */
    public function setCallProcessingSliceId($callProcessingSliceId = null)
    {
        if ($callProcessingSliceId === null) {
            $this->callProcessingSliceId = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->callProcessingSliceId = $callProcessingSliceId;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallProcessingSliceId()
    {
        $this->callProcessingSliceId = null;
        return $this;
    }

    /**
     * Getter for provisioningSliceId
     *
     * @return string|null
     */
    public function getProvisioningSliceId()
    {
        return $this->provisioningSliceId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->provisioningSliceId;
    }

    /**
     * Setter for provisioningSliceId
     *
     * @param string|null $provisioningSliceId
     * @return $this
     */
    public function setProvisioningSliceId($provisioningSliceId = null)
    {
        if ($provisioningSliceId === null) {
            $this->provisioningSliceId = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->provisioningSliceId = $provisioningSliceId;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetProvisioningSliceId()
    {
        $this->provisioningSliceId = null;
        return $this;
    }

    /**
     * Getter for subscriberPartition
     *
     * @return string|null
     */
    public function getSubscriberPartition()
    {
        return $this->subscriberPartition instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->subscriberPartition;
    }

    /**
     * Setter for subscriberPartition
     *
     * @param string|null $subscriberPartition
     * @return $this
     */
    public function setSubscriberPartition($subscriberPartition = null)
    {
        if ($subscriberPartition === null) {
            $this->subscriberPartition = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->subscriberPartition = $subscriberPartition;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSubscriberPartition()
    {
        $this->subscriberPartition = null;
        return $this;
    }

    /**
     * Getter for preferredDataCenter
     *
     * @return string|null
     */
    public function getPreferredDataCenter()
    {
        return $this->preferredDataCenter instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->preferredDataCenter;
    }

    /**
     * Setter for preferredDataCenter
     *
     * @param string|null $preferredDataCenter
     * @return $this
     */
    public function setPreferredDataCenter($preferredDataCenter = null)
    {
        if ($preferredDataCenter === null) {
            $this->preferredDataCenter = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->preferredDataCenter = $preferredDataCenter;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPreferredDataCenter()
    {
        $this->preferredDataCenter = null;
        return $this;
    }

    /**
     * Getter for defaultUserCallingLineIdPhoneNumber
     *
     * @return string|null
     */
    public function getDefaultUserCallingLineIdPhoneNumber()
    {
        return $this->defaultUserCallingLineIdPhoneNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->defaultUserCallingLineIdPhoneNumber;
    }

    /**
     * Setter for defaultUserCallingLineIdPhoneNumber
     *
     * @param string|null $defaultUserCallingLineIdPhoneNumber
     * @return $this
     */
    public function setDefaultUserCallingLineIdPhoneNumber($defaultUserCallingLineIdPhoneNumber = null)
    {
        if ($defaultUserCallingLineIdPhoneNumber === null) {
            $this->defaultUserCallingLineIdPhoneNumber = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->defaultUserCallingLineIdPhoneNumber = $defaultUserCallingLineIdPhoneNumber;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDefaultUserCallingLineIdPhoneNumber()
    {
        $this->defaultUserCallingLineIdPhoneNumber = null;
        return $this;
    }

    /**
     * Getter for extensionLengthSettings
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupExtensionLengthSettings
     */
    public function getExtensionLengthSettings()
    {
        return $this->extensionLengthSettings instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->extensionLengthSettings;
    }

    /**
     * Setter for extensionLengthSettings
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupExtensionLengthSettings $extensionLengthSettings
     * @return $this
     */
    public function setExtensionLengthSettings(\CWM\BroadWorksConnector\Ocip\Models\GroupExtensionLengthSettings $extensionLengthSettings)
    {
        $this->extensionLengthSettings = $extensionLengthSettings;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetExtensionLengthSettings()
    {
        $this->extensionLengthSettings = null;
        return $this;
    }

    /**
     * Getter for dialPlanAccessCode
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\DialPlanPolicyAccessCode|null
     */
    public function getDialPlanAccessCode()
    {
        return $this->dialPlanAccessCode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->dialPlanAccessCode;
    }

    /**
     * Setter for dialPlanAccessCode
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\DialPlanPolicyAccessCode|null $dialPlanAccessCode
     * @return $this
     */
    public function setDialPlanAccessCode(\CWM\BroadWorksConnector\Ocip\Models\DialPlanPolicyAccessCode $dialPlanAccessCode = null)
    {
        if ($dialPlanAccessCode === null) {
            $this->dialPlanAccessCode = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->dialPlanAccessCode = $dialPlanAccessCode;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDialPlanAccessCode()
    {
        $this->dialPlanAccessCode = null;
        return $this;
    }

    /**
     * Getter for dialPlanPolicy
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\DialPlanPolicy
     */
    public function getDialPlanPolicy()
    {
        return $this->dialPlanPolicy instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->dialPlanPolicy;
    }

    /**
     * Setter for dialPlanPolicy
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\DialPlanPolicy $dialPlanPolicy
     * @return $this
     */
    public function setDialPlanPolicy(\CWM\BroadWorksConnector\Ocip\Models\DialPlanPolicy $dialPlanPolicy)
    {
        $this->dialPlanPolicy = $dialPlanPolicy;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDialPlanPolicy()
    {
        $this->dialPlanPolicy = null;
        return $this;
    }


}

