<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupVoiceMessagingGroupConsolidatedModifyVoicePortalRequest
 *
 * Request to modify the group's voice messaging settings and voice portal branding settings.
 *         If UnassignPhoneNumbersLevel is set to 'Group', the user's primary phone number, fax number and any alternate numbers, will be un-assigned from the group if the command is executed by a service provider administrator or above.
 *         When set to 'Service Provider', they will be un-assigned from the group and service provider if the command is executed by a provisioning administrator or above.
 *         When omitted, the number(s) will be left assigned to the group.
 *         An ErrorResponse will be returned if any number cannot be unassigned because of insufficient privilege.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see ErrorResponse
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"3347d430e0d5c93a9ff8dcf0e3b60d6c:81","type":"sequence"}]
 */
class GroupVoiceMessagingGroupConsolidatedModifyVoicePortalRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:81
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:81
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $groupId = null;

    /**
     * @ElementName unassignPhoneNumbers
     * @Type \CWM\BroadWorksConnector\Ocip\Models\UnassignPhoneNumbersLevel
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:81
     * @var \CWM\BroadWorksConnector\Ocip\Models\UnassignPhoneNumbersLevel|null
     */
    protected $unassignPhoneNumbers = null;

    /**
     * @ElementName addPhoneNumberToGroup
     * @Type bool
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:81
     * @var bool|null
     */
    protected $addPhoneNumberToGroup = null;

    /**
     * @ElementName serviceInstanceProfile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceModifyProfile
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:81
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceModifyProfile|null
     */
    protected $serviceInstanceProfile = null;

    /**
     * @ElementName isActive
     * @Type bool
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:81
     * @var bool|null
     */
    protected $isActive = null;

    /**
     * @ElementName enableExtendedScope
     * @Type bool
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:81
     * @var bool|null
     */
    protected $enableExtendedScope = null;

    /**
     * @ElementName allowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin
     * @Type bool
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:81
     * @var bool|null
     */
    protected $allowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin = null;

    /**
     * @ElementName useVoicePortalWizard
     * @Type bool
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:81
     * @var bool|null
     */
    protected $useVoicePortalWizard = null;

    /**
     * @ElementName voicePortalExternalRoutingScope
     * @Type \CWM\BroadWorksConnector\Ocip\Models\VoicePortalExternalRoutingScope
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:81
     * @var \CWM\BroadWorksConnector\Ocip\Models\VoicePortalExternalRoutingScope|null
     */
    protected $voicePortalExternalRoutingScope = null;

    /**
     * @ElementName useExternalRouting
     * @Type bool
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:81
     * @var bool|null
     */
    protected $useExternalRouting = null;

    /**
     * @ElementName externalRoutingAddress
     * @Type string
     * @Nillable
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:81
     * @MinLength 1
     * @MaxLength 161
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $externalRoutingAddress = null;

    /**
     * @ElementName homeZoneName
     * @Type string
     * @Nillable
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:81
     * @MinLength 1
     * @MaxLength 80
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $homeZoneName = null;

    /**
     * @ElementName networkClassOfService
     * @Type string
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:81
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $networkClassOfService = null;

    /**
     * @ElementName voicePortalGreetingSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingBrandingSelection
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:81
     * @var \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingBrandingSelection|null
     */
    protected $voicePortalGreetingSelection = null;

    /**
     * @ElementName voicePortalGreetingFile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileKey
     * @Nillable
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:81
     * @var \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileKey|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $voicePortalGreetingFile = null;

    /**
     * @ElementName voiceMessagingGreetingSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingBrandingSelection
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:81
     * @var \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingBrandingSelection|null
     */
    protected $voiceMessagingGreetingSelection = null;

    /**
     * @ElementName voiceMessagingGreetingFile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileKey
     * @Nillable
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:81
     * @var \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileKey|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $voiceMessagingGreetingFile = null;

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
     * Getter for unassignPhoneNumbers
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\UnassignPhoneNumbersLevel
     */
    public function getUnassignPhoneNumbers()
    {
        return $this->unassignPhoneNumbers instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->unassignPhoneNumbers;
    }

    /**
     * Setter for unassignPhoneNumbers
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\UnassignPhoneNumbersLevel $unassignPhoneNumbers
     * @return $this
     */
    public function setUnassignPhoneNumbers(\CWM\BroadWorksConnector\Ocip\Models\UnassignPhoneNumbersLevel $unassignPhoneNumbers)
    {
        $this->unassignPhoneNumbers = $unassignPhoneNumbers;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUnassignPhoneNumbers()
    {
        $this->unassignPhoneNumbers = null;
        return $this;
    }

    /**
     * Getter for addPhoneNumberToGroup
     *
     * @return bool
     */
    public function getAddPhoneNumberToGroup()
    {
        return $this->addPhoneNumberToGroup instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->addPhoneNumberToGroup;
    }

    /**
     * Setter for addPhoneNumberToGroup
     *
     * @param bool $addPhoneNumberToGroup
     * @return $this
     */
    public function setAddPhoneNumberToGroup($addPhoneNumberToGroup)
    {
        $this->addPhoneNumberToGroup = $addPhoneNumberToGroup;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAddPhoneNumberToGroup()
    {
        $this->addPhoneNumberToGroup = null;
        return $this;
    }

    /**
     * Getter for serviceInstanceProfile
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceModifyProfile
     */
    public function getServiceInstanceProfile()
    {
        return $this->serviceInstanceProfile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceInstanceProfile;
    }

    /**
     * Setter for serviceInstanceProfile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceModifyProfile $serviceInstanceProfile
     * @return $this
     */
    public function setServiceInstanceProfile(\CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceModifyProfile $serviceInstanceProfile)
    {
        $this->serviceInstanceProfile = $serviceInstanceProfile;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceInstanceProfile()
    {
        $this->serviceInstanceProfile = null;
        return $this;
    }

    /**
     * Getter for isActive
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->isActive instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isActive;
    }

    /**
     * Setter for isActive
     *
     * @param bool $isActive
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsActive()
    {
        $this->isActive = null;
        return $this;
    }

    /**
     * Getter for enableExtendedScope
     *
     * @return bool
     */
    public function getEnableExtendedScope()
    {
        return $this->enableExtendedScope instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableExtendedScope;
    }

    /**
     * Setter for enableExtendedScope
     *
     * @param bool $enableExtendedScope
     * @return $this
     */
    public function setEnableExtendedScope($enableExtendedScope)
    {
        $this->enableExtendedScope = $enableExtendedScope;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableExtendedScope()
    {
        $this->enableExtendedScope = null;
        return $this;
    }

    /**
     * Getter for allowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin
     *
     * @return bool
     */
    public function getAllowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin()
    {
        return $this->allowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->allowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin;
    }

    /**
     * Setter for allowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin
     *
     * @param bool $allowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin
     * @return $this
     */
    public function setAllowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin($allowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin)
    {
        $this->allowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin = $allowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAllowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin()
    {
        $this->allowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin = null;
        return $this;
    }

    /**
     * Getter for useVoicePortalWizard
     *
     * @return bool
     */
    public function getUseVoicePortalWizard()
    {
        return $this->useVoicePortalWizard instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useVoicePortalWizard;
    }

    /**
     * Setter for useVoicePortalWizard
     *
     * @param bool $useVoicePortalWizard
     * @return $this
     */
    public function setUseVoicePortalWizard($useVoicePortalWizard)
    {
        $this->useVoicePortalWizard = $useVoicePortalWizard;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseVoicePortalWizard()
    {
        $this->useVoicePortalWizard = null;
        return $this;
    }

    /**
     * Getter for voicePortalExternalRoutingScope
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\VoicePortalExternalRoutingScope
     */
    public function getVoicePortalExternalRoutingScope()
    {
        return $this->voicePortalExternalRoutingScope instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->voicePortalExternalRoutingScope;
    }

    /**
     * Setter for voicePortalExternalRoutingScope
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\VoicePortalExternalRoutingScope $voicePortalExternalRoutingScope
     * @return $this
     */
    public function setVoicePortalExternalRoutingScope(\CWM\BroadWorksConnector\Ocip\Models\VoicePortalExternalRoutingScope $voicePortalExternalRoutingScope)
    {
        $this->voicePortalExternalRoutingScope = $voicePortalExternalRoutingScope;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetVoicePortalExternalRoutingScope()
    {
        $this->voicePortalExternalRoutingScope = null;
        return $this;
    }

    /**
     * Getter for useExternalRouting
     *
     * @return bool
     */
    public function getUseExternalRouting()
    {
        return $this->useExternalRouting instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useExternalRouting;
    }

    /**
     * Setter for useExternalRouting
     *
     * @param bool $useExternalRouting
     * @return $this
     */
    public function setUseExternalRouting($useExternalRouting)
    {
        $this->useExternalRouting = $useExternalRouting;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseExternalRouting()
    {
        $this->useExternalRouting = null;
        return $this;
    }

    /**
     * Getter for externalRoutingAddress
     *
     * @return string|null
     */
    public function getExternalRoutingAddress()
    {
        return $this->externalRoutingAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->externalRoutingAddress;
    }

    /**
     * Setter for externalRoutingAddress
     *
     * @param string|null $externalRoutingAddress
     * @return $this
     */
    public function setExternalRoutingAddress($externalRoutingAddress = null)
    {
        if ($externalRoutingAddress === null) {
            $this->externalRoutingAddress = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->externalRoutingAddress = $externalRoutingAddress;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetExternalRoutingAddress()
    {
        $this->externalRoutingAddress = null;
        return $this;
    }

    /**
     * Getter for homeZoneName
     *
     * @return string|null
     */
    public function getHomeZoneName()
    {
        return $this->homeZoneName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->homeZoneName;
    }

    /**
     * Setter for homeZoneName
     *
     * @param string|null $homeZoneName
     * @return $this
     */
    public function setHomeZoneName($homeZoneName = null)
    {
        if ($homeZoneName === null) {
            $this->homeZoneName = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->homeZoneName = $homeZoneName;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetHomeZoneName()
    {
        $this->homeZoneName = null;
        return $this;
    }

    /**
     * Getter for networkClassOfService
     *
     * @return string
     */
    public function getNetworkClassOfService()
    {
        return $this->networkClassOfService instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->networkClassOfService;
    }

    /**
     * Setter for networkClassOfService
     *
     * @param string $networkClassOfService
     * @return $this
     */
    public function setNetworkClassOfService($networkClassOfService)
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
     * Getter for voicePortalGreetingSelection
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingBrandingSelection
     */
    public function getVoicePortalGreetingSelection()
    {
        return $this->voicePortalGreetingSelection instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->voicePortalGreetingSelection;
    }

    /**
     * Setter for voicePortalGreetingSelection
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingBrandingSelection $voicePortalGreetingSelection
     * @return $this
     */
    public function setVoicePortalGreetingSelection(\CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingBrandingSelection $voicePortalGreetingSelection)
    {
        $this->voicePortalGreetingSelection = $voicePortalGreetingSelection;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetVoicePortalGreetingSelection()
    {
        $this->voicePortalGreetingSelection = null;
        return $this;
    }

    /**
     * Getter for voicePortalGreetingFile
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileKey|null
     */
    public function getVoicePortalGreetingFile()
    {
        return $this->voicePortalGreetingFile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->voicePortalGreetingFile;
    }

    /**
     * Setter for voicePortalGreetingFile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileKey|null $voicePortalGreetingFile
     * @return $this
     */
    public function setVoicePortalGreetingFile(\CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileKey $voicePortalGreetingFile = null)
    {
        if ($voicePortalGreetingFile === null) {
            $this->voicePortalGreetingFile = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->voicePortalGreetingFile = $voicePortalGreetingFile;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetVoicePortalGreetingFile()
    {
        $this->voicePortalGreetingFile = null;
        return $this;
    }

    /**
     * Getter for voiceMessagingGreetingSelection
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingBrandingSelection
     */
    public function getVoiceMessagingGreetingSelection()
    {
        return $this->voiceMessagingGreetingSelection instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->voiceMessagingGreetingSelection;
    }

    /**
     * Setter for voiceMessagingGreetingSelection
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingBrandingSelection $voiceMessagingGreetingSelection
     * @return $this
     */
    public function setVoiceMessagingGreetingSelection(\CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingBrandingSelection $voiceMessagingGreetingSelection)
    {
        $this->voiceMessagingGreetingSelection = $voiceMessagingGreetingSelection;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetVoiceMessagingGreetingSelection()
    {
        $this->voiceMessagingGreetingSelection = null;
        return $this;
    }

    /**
     * Getter for voiceMessagingGreetingFile
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileKey|null
     */
    public function getVoiceMessagingGreetingFile()
    {
        return $this->voiceMessagingGreetingFile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->voiceMessagingGreetingFile;
    }

    /**
     * Setter for voiceMessagingGreetingFile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileKey|null $voiceMessagingGreetingFile
     * @return $this
     */
    public function setVoiceMessagingGreetingFile(\CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileKey $voiceMessagingGreetingFile = null)
    {
        if ($voiceMessagingGreetingFile === null) {
            $this->voiceMessagingGreetingFile = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->voiceMessagingGreetingFile = $voiceMessagingGreetingFile;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetVoiceMessagingGreetingFile()
    {
        $this->voiceMessagingGreetingFile = null;
        return $this;
    }


}

