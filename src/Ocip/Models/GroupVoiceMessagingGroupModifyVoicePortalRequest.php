<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupVoiceMessagingGroupModifyVoicePortalRequest
 *
 * Request to modify the group voice portal information for a voice messaging group.
 *         The following elements are only used in AS data mode:
 *           networkClassOfService
 *         The following elements are only used in AS data mode and ignored in XS data mode:
 *          expressMode         
 *           
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"3347d430e0d5c93a9ff8dcf0e3b60d6c:292","type":"sequence"}]
 */
class GroupVoiceMessagingGroupModifyVoicePortalRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:292
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:292
     * @var string|null
     */
    private $groupId = null;

    /**
     * @ElementName serviceInstanceProfile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceModifyProfile
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:292
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceModifyProfile|null
     */
    private $serviceInstanceProfile = null;

    /**
     * @ElementName isActive
     * @Type bool
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:292
     * @var bool|null
     */
    private $isActive = null;

    /**
     * @ElementName enableExtendedScope
     * @Type bool
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:292
     * @var bool|null
     */
    private $enableExtendedScope = null;

    /**
     * @ElementName allowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin
     * @Type bool
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:292
     * @var bool|null
     */
    private $allowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin = null;

    /**
     * @ElementName useVoicePortalWizard
     * @Type bool
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:292
     * @var bool|null
     */
    private $useVoicePortalWizard = null;

    /**
     * @ElementName voicePortalExternalRoutingScope
     * @Type \CWM\BroadWorksConnector\Ocip\Models\VoicePortalExternalRoutingScope
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:292
     * @var \CWM\BroadWorksConnector\Ocip\Models\VoicePortalExternalRoutingScope|null
     */
    private $voicePortalExternalRoutingScope = null;

    /**
     * @ElementName useExternalRouting
     * @Type bool
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:292
     * @var bool|null
     */
    private $useExternalRouting = null;

    /**
     * @ElementName externalRoutingAddress
     * @Type string
     * @Nillable
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:292
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $externalRoutingAddress = null;

    /**
     * @ElementName homeZoneName
     * @Type string
     * @Nillable
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:292
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $homeZoneName = null;

    /**
     * @ElementName networkClassOfService
     * @Type string
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:292
     * @var string|null
     */
    private $networkClassOfService = null;

    /**
     * @ElementName expressMode
     * @Type bool
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:292
     * @var bool|null
     */
    private $expressMode = null;

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
     * Getter for expressMode
     *
     * @return bool
     */
    public function getExpressMode()
    {
        return $this->expressMode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->expressMode;
    }

    /**
     * Setter for expressMode
     *
     * @param bool $expressMode
     * @return $this
     */
    public function setExpressMode($expressMode)
    {
        $this->expressMode = $expressMode;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetExpressMode()
    {
        $this->expressMode = null;
        return $this;
    }


}

