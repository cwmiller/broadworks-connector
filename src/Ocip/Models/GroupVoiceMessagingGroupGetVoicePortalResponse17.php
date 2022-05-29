<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupVoiceMessagingGroupGetVoicePortalResponse17
 *
 * Response to the GroupVoiceMessagingGroupGetVoicePortalRequest17.
 *
 * @see GroupVoiceMessagingGroupGetVoicePortalRequest17
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:16297","type":"sequence"}]
 */
class GroupVoiceMessagingGroupGetVoicePortalResponse17 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:16297
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $serviceUserId = null;

    /**
     * @ElementName serviceInstanceProfile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceReadProfile17
     * @Group ab0042aa512abc10edb3c55e4b416b0b:16297
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceReadProfile17|null
     */
    protected $serviceInstanceProfile = null;

    /**
     * @ElementName isActive
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:16297
     * @var bool|null
     */
    protected $isActive = null;

    /**
     * @ElementName allowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:16297
     * @var bool|null
     */
    protected $allowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin = null;

    /**
     * @ElementName useVoicePortalWizard
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:16297
     * @var bool|null
     */
    protected $useVoicePortalWizard = null;

    /**
     * @ElementName voicePortalExternalRoutingScope
     * @Type \CWM\BroadWorksConnector\Ocip\Models\VoicePortalExternalRoutingScope
     * @Group ab0042aa512abc10edb3c55e4b416b0b:16297
     * @var \CWM\BroadWorksConnector\Ocip\Models\VoicePortalExternalRoutingScope|null
     */
    protected $voicePortalExternalRoutingScope = null;

    /**
     * @ElementName useExternalRouting
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:16297
     * @var bool|null
     */
    protected $useExternalRouting = null;

    /**
     * @ElementName externalRoutingAddress
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:16297
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $externalRoutingAddress = null;

    /**
     * @ElementName homeZoneName
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:16297
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $homeZoneName = null;

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
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceReadProfile17
     */
    public function getServiceInstanceProfile()
    {
        return $this->serviceInstanceProfile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceInstanceProfile;
    }

    /**
     * Setter for serviceInstanceProfile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceReadProfile17 $serviceInstanceProfile
     * @return $this
     */
    public function setServiceInstanceProfile(\CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceReadProfile17 $serviceInstanceProfile)
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


}

