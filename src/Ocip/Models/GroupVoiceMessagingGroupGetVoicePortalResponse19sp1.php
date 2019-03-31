<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupVoiceMessagingGroupGetVoicePortalResponse19sp1
 *
 * Response to the GroupVoiceMessagingGroupGetVoicePortalRequest19sp1.
 *         
 *         The following elements are only used in XS data mode:
 *         enableExtendedScope
 *         
 *         Replaced by: GroupVoiceMessagingGroupGetVoicePortalResponse21sp1 in AS data mode.
 *
 * @see GroupVoiceMessagingGroupGetVoicePortalRequest19sp1
 * @see GroupVoiceMessagingGroupGetVoicePortalResponse21sp1
 * @Groups [{"id":"de4d76f01f337fe4694212ec9f771753:5283","type":"sequence"}]
 */
class GroupVoiceMessagingGroupGetVoicePortalResponse19sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group de4d76f01f337fe4694212ec9f771753:5283
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    private $serviceUserId = null;

    /**
     * @ElementName serviceInstanceProfile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceReadProfile19sp1
     * @Group de4d76f01f337fe4694212ec9f771753:5283
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceReadProfile19sp1|null
     */
    private $serviceInstanceProfile = null;

    /**
     * @ElementName isActive
     * @Type bool
     * @Group de4d76f01f337fe4694212ec9f771753:5283
     * @var bool|null
     */
    private $isActive = null;

    /**
     * @ElementName enableExtendedScope
     * @Type bool
     * @Group de4d76f01f337fe4694212ec9f771753:5283
     * @var bool|null
     */
    private $enableExtendedScope = null;

    /**
     * @ElementName allowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin
     * @Type bool
     * @Group de4d76f01f337fe4694212ec9f771753:5283
     * @var bool|null
     */
    private $allowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin = null;

    /**
     * @ElementName useVoicePortalWizard
     * @Type bool
     * @Group de4d76f01f337fe4694212ec9f771753:5283
     * @var bool|null
     */
    private $useVoicePortalWizard = null;

    /**
     * @ElementName voicePortalExternalRoutingScope
     * @Type \CWM\BroadWorksConnector\Ocip\Models\VoicePortalExternalRoutingScope
     * @Group de4d76f01f337fe4694212ec9f771753:5283
     * @var \CWM\BroadWorksConnector\Ocip\Models\VoicePortalExternalRoutingScope|null
     */
    private $voicePortalExternalRoutingScope = null;

    /**
     * @ElementName useExternalRouting
     * @Type bool
     * @Group de4d76f01f337fe4694212ec9f771753:5283
     * @var bool|null
     */
    private $useExternalRouting = null;

    /**
     * @ElementName externalRoutingAddress
     * @Type string
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:5283
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    private $externalRoutingAddress = null;

    /**
     * @ElementName homeZoneName
     * @Type string
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:5283
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    private $homeZoneName = null;

    /**
     * @ElementName networkClassOfService
     * @Type string
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:5283
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    private $networkClassOfService = null;

    /**
     * Getter for serviceUserId
     *
     * @return string
     */
    public function getServiceUserId()
    {
        return $this->serviceUserId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceUserId;
    }

    /**
     * Setter for serviceUserId
     *
     * @param string $serviceUserId
     * @return $this
     */
    public function setServiceUserId($serviceUserId)
    {
        $this->serviceUserId = $serviceUserId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceUserId()
    {
        $this->serviceUserId = null;
        return $this;
    }

    /**
     * Getter for serviceInstanceProfile
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceReadProfile19sp1
     */
    public function getServiceInstanceProfile()
    {
        return $this->serviceInstanceProfile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceInstanceProfile;
    }

    /**
     * Setter for serviceInstanceProfile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceReadProfile19sp1 $serviceInstanceProfile
     * @return $this
     */
    public function setServiceInstanceProfile(\CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceReadProfile19sp1 $serviceInstanceProfile)
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
     * @return string
     */
    public function getExternalRoutingAddress()
    {
        return $this->externalRoutingAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->externalRoutingAddress;
    }

    /**
     * Setter for externalRoutingAddress
     *
     * @param string $externalRoutingAddress
     * @return $this
     */
    public function setExternalRoutingAddress($externalRoutingAddress)
    {
        $this->externalRoutingAddress = $externalRoutingAddress;
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
     * @return string
     */
    public function getHomeZoneName()
    {
        return $this->homeZoneName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->homeZoneName;
    }

    /**
     * Setter for homeZoneName
     *
     * @param string $homeZoneName
     * @return $this
     */
    public function setHomeZoneName($homeZoneName)
    {
        $this->homeZoneName = $homeZoneName;
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


}

