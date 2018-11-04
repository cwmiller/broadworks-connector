<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupVoiceMessagingGroupModifyVoicePortalRequest
 *
 * Request to modify the group voice portal information for a voice messaging
 * group.
 *         The following elements are only used in AS data mode:
 *           networkClassOfService
 *         The following elements are only used in AS data mode and ignored in XS
 * data mode:
 *          expressMode         
 *           
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class GroupVoiceMessagingGroupModifyVoicePortalRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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
     * @ElementName serviceInstanceProfile
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceModifyProfile|null
     */
    private $serviceInstanceProfile = null;

    /**
     * @ElementName isActive
     * @var bool|null
     */
    private $isActive = null;

    /**
     * @ElementName enableExtendedScope
     * @var bool|null
     */
    private $enableExtendedScope = null;

    /**
     * @ElementName allowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin
     * @var bool|null
     */
    private $allowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin = null;

    /**
     * @ElementName useVoicePortalWizard
     * @var bool|null
     */
    private $useVoicePortalWizard = null;

    /**
     * @ElementName voicePortalExternalRoutingScope
     * @var string|null
     */
    private $voicePortalExternalRoutingScope = null;

    /**
     * @ElementName useExternalRouting
     * @var bool|null
     */
    private $useExternalRouting = null;

    /**
     * @ElementName externalRoutingAddress
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $externalRoutingAddress = null;

    /**
     * @ElementName homeZoneName
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $homeZoneName = null;

    /**
     * @ElementName networkClassOfService
     * @var string|null
     */
    private $networkClassOfService = null;

    /**
     * @ElementName expressMode
     * @var bool|null
     */
    private $expressMode = null;

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
     * Getter for serviceInstanceProfile
     *
     * @ElementName serviceInstanceProfile
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceModifyProfile|null
     */
    public function getServiceInstanceProfile()
    {
        return $this->serviceInstanceProfile;
    }

    /**
     * Setter for serviceInstanceProfile
     *
     * @ElementName serviceInstanceProfile
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceModifyProfile|null $serviceInstanceProfile
     * @return $this
     */
    public function setServiceInstanceProfile($serviceInstanceProfile)
    {
        $this->serviceInstanceProfile = $serviceInstanceProfile;
        return $this;
    }

    /**
     * Getter for isActive
     *
     * @ElementName isActive
     * @return bool|null
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Setter for isActive
     *
     * @ElementName isActive
     * @param bool|null $isActive
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        return $this;
    }

    /**
     * Getter for enableExtendedScope
     *
     * @ElementName enableExtendedScope
     * @return bool|null
     */
    public function getEnableExtendedScope()
    {
        return $this->enableExtendedScope;
    }

    /**
     * Setter for enableExtendedScope
     *
     * @ElementName enableExtendedScope
     * @param bool|null $enableExtendedScope
     * @return $this
     */
    public function setEnableExtendedScope($enableExtendedScope)
    {
        $this->enableExtendedScope = $enableExtendedScope;
        return $this;
    }

    /**
     * Getter for allowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin
     *
     * @ElementName allowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin
     * @return bool|null
     */
    public function getAllowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin()
    {
        return $this->allowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin;
    }

    /**
     * Setter for allowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin
     *
     * @ElementName allowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin
     * @param bool|null $allowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin
     * @return $this
     */
    public function setAllowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin($allowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin)
    {
        $this->allowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin = $allowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin;
        return $this;
    }

    /**
     * Getter for useVoicePortalWizard
     *
     * @ElementName useVoicePortalWizard
     * @return bool|null
     */
    public function getUseVoicePortalWizard()
    {
        return $this->useVoicePortalWizard;
    }

    /**
     * Setter for useVoicePortalWizard
     *
     * @ElementName useVoicePortalWizard
     * @param bool|null $useVoicePortalWizard
     * @return $this
     */
    public function setUseVoicePortalWizard($useVoicePortalWizard)
    {
        $this->useVoicePortalWizard = $useVoicePortalWizard;
        return $this;
    }

    /**
     * Getter for voicePortalExternalRoutingScope
     *
     * @ElementName voicePortalExternalRoutingScope
     * @return string|null
     */
    public function getVoicePortalExternalRoutingScope()
    {
        return $this->voicePortalExternalRoutingScope;
    }

    /**
     * Setter for voicePortalExternalRoutingScope
     *
     * @ElementName voicePortalExternalRoutingScope
     * @param string|null $voicePortalExternalRoutingScope
     * @return $this
     */
    public function setVoicePortalExternalRoutingScope($voicePortalExternalRoutingScope)
    {
        $this->voicePortalExternalRoutingScope = $voicePortalExternalRoutingScope;
        return $this;
    }

    /**
     * Getter for useExternalRouting
     *
     * @ElementName useExternalRouting
     * @return bool|null
     */
    public function getUseExternalRouting()
    {
        return $this->useExternalRouting;
    }

    /**
     * Setter for useExternalRouting
     *
     * @ElementName useExternalRouting
     * @param bool|null $useExternalRouting
     * @return $this
     */
    public function setUseExternalRouting($useExternalRouting)
    {
        $this->useExternalRouting = $useExternalRouting;
        return $this;
    }

    /**
     * Getter for externalRoutingAddress
     *
     * @ElementName externalRoutingAddress
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getExternalRoutingAddress()
    {
        return $this->externalRoutingAddress;
    }

    /**
     * Setter for externalRoutingAddress
     *
     * @ElementName externalRoutingAddress
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $externalRoutingAddress
     * @return $this
     */
    public function setExternalRoutingAddress($externalRoutingAddress)
    {
        $this->externalRoutingAddress = $externalRoutingAddress;
        return $this;
    }

    /**
     * Getter for homeZoneName
     *
     * @ElementName homeZoneName
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getHomeZoneName()
    {
        return $this->homeZoneName;
    }

    /**
     * Setter for homeZoneName
     *
     * @ElementName homeZoneName
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $homeZoneName
     * @return $this
     */
    public function setHomeZoneName($homeZoneName)
    {
        $this->homeZoneName = $homeZoneName;
        return $this;
    }

    /**
     * Getter for networkClassOfService
     *
     * @ElementName networkClassOfService
     * @return string|null
     */
    public function getNetworkClassOfService()
    {
        return $this->networkClassOfService;
    }

    /**
     * Setter for networkClassOfService
     *
     * @ElementName networkClassOfService
     * @param string|null $networkClassOfService
     * @return $this
     */
    public function setNetworkClassOfService($networkClassOfService)
    {
        $this->networkClassOfService = $networkClassOfService;
        return $this;
    }

    /**
     * Getter for expressMode
     *
     * @ElementName expressMode
     * @return bool|null
     */
    public function getExpressMode()
    {
        return $this->expressMode;
    }

    /**
     * Setter for expressMode
     *
     * @ElementName expressMode
     * @param bool|null $expressMode
     * @return $this
     */
    public function setExpressMode($expressMode)
    {
        $this->expressMode = $expressMode;
        return $this;
    }


}

