<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupVoiceMessagingGroupGetVoicePortalResponse17
 *
 * Response to the GroupVoiceMessagingGroupGetVoicePortalRequest17.
 */
class GroupVoiceMessagingGroupGetVoicePortalResponse17 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName serviceUserId
     * @var string|null
     */
    private $serviceUserId = null;

    /**
     * @ElementName serviceInstanceProfile
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceReadProfile17|null
     */
    private $serviceInstanceProfile = null;

    /**
     * @ElementName isActive
     * @var bool|null
     */
    private $isActive = null;

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
     * @var string|null
     */
    private $externalRoutingAddress = null;

    /**
     * @ElementName homeZoneName
     * @var string|null
     */
    private $homeZoneName = null;

    /**
     * Getter for serviceUserId
     *
     * @ElementName serviceUserId
     * @return string|null
     */
    public function getServiceUserId()
    {
        return $this->serviceUserId;
    }

    /**
     * Setter for serviceUserId
     *
     * @ElementName serviceUserId
     * @param string|null $serviceUserId
     * @return $this
     */
    public function setServiceUserId($serviceUserId)
    {
        $this->serviceUserId = $serviceUserId;
        return $this;
    }

    /**
     * Getter for serviceInstanceProfile
     *
     * @ElementName serviceInstanceProfile
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceReadProfile17|null
     */
    public function getServiceInstanceProfile()
    {
        return $this->serviceInstanceProfile;
    }

    /**
     * Setter for serviceInstanceProfile
     *
     * @ElementName serviceInstanceProfile
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceReadProfile17|null $serviceInstanceProfile
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
     * @return string|null
     */
    public function getExternalRoutingAddress()
    {
        return $this->externalRoutingAddress;
    }

    /**
     * Setter for externalRoutingAddress
     *
     * @ElementName externalRoutingAddress
     * @param string|null $externalRoutingAddress
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
     * @return string|null
     */
    public function getHomeZoneName()
    {
        return $this->homeZoneName;
    }

    /**
     * Setter for homeZoneName
     *
     * @ElementName homeZoneName
     * @param string|null $homeZoneName
     * @return $this
     */
    public function setHomeZoneName($homeZoneName)
    {
        $this->homeZoneName = $homeZoneName;
        return $this;
    }


}

