<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemVoiceMessagingGroupGetVoicePortalMenusResponse18VoicePortalMainMenuKeys
 *
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:36695","type":"sequence"}]
 */
class SystemVoiceMessagingGroupGetVoicePortalMenusResponse18VoicePortalMainMenuKeys
{

    /**
     * @ElementName voiceMessaging
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:36695
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    private $voiceMessaging = null;

    /**
     * @ElementName commPilotExpressProfile
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:36695
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    private $commPilotExpressProfile = null;

    /**
     * @ElementName personalizedName
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:36695
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    private $personalizedName = null;

    /**
     * @ElementName callForwardingOptions
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:36695
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    private $callForwardingOptions = null;

    /**
     * @ElementName voicePortalCalling
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:36695
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    private $voicePortalCalling = null;

    /**
     * @ElementName hoteling
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:36695
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    private $hoteling = null;

    /**
     * @ElementName passcode
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:36695
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    private $passcode = null;

    /**
     * @ElementName exitVoicePortal
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:36695
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    private $exitVoicePortal = null;

    /**
     * @ElementName repeatMenu
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:36695
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    private $repeatMenu = null;

    /**
     * @ElementName externalRouting
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:36695
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    private $externalRouting = null;

    /**
     * Getter for voiceMessaging
     *
     * @return string
     */
    public function getVoiceMessaging()
    {
        return $this->voiceMessaging instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->voiceMessaging;
    }

    /**
     * Setter for voiceMessaging
     *
     * @param string $voiceMessaging
     * @return $this
     */
    public function setVoiceMessaging($voiceMessaging)
    {
        $this->voiceMessaging = $voiceMessaging;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetVoiceMessaging()
    {
        $this->voiceMessaging = null;
        return $this;
    }

    /**
     * Getter for commPilotExpressProfile
     *
     * @return string
     */
    public function getCommPilotExpressProfile()
    {
        return $this->commPilotExpressProfile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->commPilotExpressProfile;
    }

    /**
     * Setter for commPilotExpressProfile
     *
     * @param string $commPilotExpressProfile
     * @return $this
     */
    public function setCommPilotExpressProfile($commPilotExpressProfile)
    {
        $this->commPilotExpressProfile = $commPilotExpressProfile;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCommPilotExpressProfile()
    {
        $this->commPilotExpressProfile = null;
        return $this;
    }

    /**
     * Getter for personalizedName
     *
     * @return string
     */
    public function getPersonalizedName()
    {
        return $this->personalizedName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->personalizedName;
    }

    /**
     * Setter for personalizedName
     *
     * @param string $personalizedName
     * @return $this
     */
    public function setPersonalizedName($personalizedName)
    {
        $this->personalizedName = $personalizedName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPersonalizedName()
    {
        $this->personalizedName = null;
        return $this;
    }

    /**
     * Getter for callForwardingOptions
     *
     * @return string
     */
    public function getCallForwardingOptions()
    {
        return $this->callForwardingOptions instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callForwardingOptions;
    }

    /**
     * Setter for callForwardingOptions
     *
     * @param string $callForwardingOptions
     * @return $this
     */
    public function setCallForwardingOptions($callForwardingOptions)
    {
        $this->callForwardingOptions = $callForwardingOptions;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallForwardingOptions()
    {
        $this->callForwardingOptions = null;
        return $this;
    }

    /**
     * Getter for voicePortalCalling
     *
     * @return string
     */
    public function getVoicePortalCalling()
    {
        return $this->voicePortalCalling instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->voicePortalCalling;
    }

    /**
     * Setter for voicePortalCalling
     *
     * @param string $voicePortalCalling
     * @return $this
     */
    public function setVoicePortalCalling($voicePortalCalling)
    {
        $this->voicePortalCalling = $voicePortalCalling;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetVoicePortalCalling()
    {
        $this->voicePortalCalling = null;
        return $this;
    }

    /**
     * Getter for hoteling
     *
     * @return string
     */
    public function getHoteling()
    {
        return $this->hoteling instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->hoteling;
    }

    /**
     * Setter for hoteling
     *
     * @param string $hoteling
     * @return $this
     */
    public function setHoteling($hoteling)
    {
        $this->hoteling = $hoteling;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetHoteling()
    {
        $this->hoteling = null;
        return $this;
    }

    /**
     * Getter for passcode
     *
     * @return string
     */
    public function getPasscode()
    {
        return $this->passcode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->passcode;
    }

    /**
     * Setter for passcode
     *
     * @param string $passcode
     * @return $this
     */
    public function setPasscode($passcode)
    {
        $this->passcode = $passcode;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPasscode()
    {
        $this->passcode = null;
        return $this;
    }

    /**
     * Getter for exitVoicePortal
     *
     * @return string
     */
    public function getExitVoicePortal()
    {
        return $this->exitVoicePortal instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->exitVoicePortal;
    }

    /**
     * Setter for exitVoicePortal
     *
     * @param string $exitVoicePortal
     * @return $this
     */
    public function setExitVoicePortal($exitVoicePortal)
    {
        $this->exitVoicePortal = $exitVoicePortal;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetExitVoicePortal()
    {
        $this->exitVoicePortal = null;
        return $this;
    }

    /**
     * Getter for repeatMenu
     *
     * @return string
     */
    public function getRepeatMenu()
    {
        return $this->repeatMenu instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->repeatMenu;
    }

    /**
     * Setter for repeatMenu
     *
     * @param string $repeatMenu
     * @return $this
     */
    public function setRepeatMenu($repeatMenu)
    {
        $this->repeatMenu = $repeatMenu;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRepeatMenu()
    {
        $this->repeatMenu = null;
        return $this;
    }

    /**
     * Getter for externalRouting
     *
     * @return string
     */
    public function getExternalRouting()
    {
        return $this->externalRouting instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->externalRouting;
    }

    /**
     * Setter for externalRouting
     *
     * @param string $externalRouting
     * @return $this
     */
    public function setExternalRouting($externalRouting)
    {
        $this->externalRouting = $externalRouting;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetExternalRouting()
    {
        $this->externalRouting = null;
        return $this;
    }


}

