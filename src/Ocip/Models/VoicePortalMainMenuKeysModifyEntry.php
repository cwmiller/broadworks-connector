<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * VoicePortalMainMenuKeysModifyEntry
 *
 * The voice portal main menu keys modify entry.
 *
 * @Groups [{"id":"3347d430e0d5c93a9ff8dcf0e3b60d6c:3296","type":"sequence"}]
 */
class VoicePortalMainMenuKeysModifyEntry
{

    /**
     * @ElementName voiceMessaging
     * @Type string
     * @Nillable
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:3296
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $voiceMessaging = null;

    /**
     * @ElementName commPilotExpressProfile
     * @Type string
     * @Nillable
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:3296
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $commPilotExpressProfile = null;

    /**
     * @ElementName greetings
     * @Type string
     * @Nillable
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:3296
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $greetings = null;

    /**
     * @ElementName callForwardingOptions
     * @Type string
     * @Nillable
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:3296
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $callForwardingOptions = null;

    /**
     * @ElementName voicePortalCalling
     * @Type string
     * @Nillable
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:3296
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $voicePortalCalling = null;

    /**
     * @ElementName hoteling
     * @Type string
     * @Nillable
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:3296
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $hoteling = null;

    /**
     * @ElementName passcode
     * @Type string
     * @Nillable
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:3296
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $passcode = null;

    /**
     * @ElementName exitVoicePortal
     * @Type string
     * @Nillable
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:3296
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $exitVoicePortal = null;

    /**
     * @ElementName repeatMenu
     * @Type string
     * @Nillable
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:3296
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $repeatMenu = null;

    /**
     * @ElementName externalRouting
     * @Type string
     * @Nillable
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:3296
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $externalRouting = null;

    /**
     * @ElementName announcement
     * @Type string
     * @Nillable
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:3296
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $announcement = null;

    /**
     * @ElementName personalAssistant
     * @Type string
     * @Nillable
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:3296
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $personalAssistant = null;

    /**
     * Getter for voiceMessaging
     *
     * @return string|null
     */
    public function getVoiceMessaging()
    {
        return $this->voiceMessaging instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->voiceMessaging;
    }

    /**
     * Setter for voiceMessaging
     *
     * @param string|null $voiceMessaging
     * @return $this
     */
    public function setVoiceMessaging($voiceMessaging = null)
    {
        if ($voiceMessaging === null) {
            $this->voiceMessaging = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->voiceMessaging = $voiceMessaging;
        }
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
     * @return string|null
     */
    public function getCommPilotExpressProfile()
    {
        return $this->commPilotExpressProfile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->commPilotExpressProfile;
    }

    /**
     * Setter for commPilotExpressProfile
     *
     * @param string|null $commPilotExpressProfile
     * @return $this
     */
    public function setCommPilotExpressProfile($commPilotExpressProfile = null)
    {
        if ($commPilotExpressProfile === null) {
            $this->commPilotExpressProfile = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->commPilotExpressProfile = $commPilotExpressProfile;
        }
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
     * Getter for greetings
     *
     * @return string|null
     */
    public function getGreetings()
    {
        return $this->greetings instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->greetings;
    }

    /**
     * Setter for greetings
     *
     * @param string|null $greetings
     * @return $this
     */
    public function setGreetings($greetings = null)
    {
        if ($greetings === null) {
            $this->greetings = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->greetings = $greetings;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGreetings()
    {
        $this->greetings = null;
        return $this;
    }

    /**
     * Getter for callForwardingOptions
     *
     * @return string|null
     */
    public function getCallForwardingOptions()
    {
        return $this->callForwardingOptions instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callForwardingOptions;
    }

    /**
     * Setter for callForwardingOptions
     *
     * @param string|null $callForwardingOptions
     * @return $this
     */
    public function setCallForwardingOptions($callForwardingOptions = null)
    {
        if ($callForwardingOptions === null) {
            $this->callForwardingOptions = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->callForwardingOptions = $callForwardingOptions;
        }
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
     * @return string|null
     */
    public function getVoicePortalCalling()
    {
        return $this->voicePortalCalling instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->voicePortalCalling;
    }

    /**
     * Setter for voicePortalCalling
     *
     * @param string|null $voicePortalCalling
     * @return $this
     */
    public function setVoicePortalCalling($voicePortalCalling = null)
    {
        if ($voicePortalCalling === null) {
            $this->voicePortalCalling = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->voicePortalCalling = $voicePortalCalling;
        }
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
     * @return string|null
     */
    public function getHoteling()
    {
        return $this->hoteling instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->hoteling;
    }

    /**
     * Setter for hoteling
     *
     * @param string|null $hoteling
     * @return $this
     */
    public function setHoteling($hoteling = null)
    {
        if ($hoteling === null) {
            $this->hoteling = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->hoteling = $hoteling;
        }
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
     * @return string|null
     */
    public function getPasscode()
    {
        return $this->passcode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->passcode;
    }

    /**
     * Setter for passcode
     *
     * @param string|null $passcode
     * @return $this
     */
    public function setPasscode($passcode = null)
    {
        if ($passcode === null) {
            $this->passcode = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->passcode = $passcode;
        }
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
     * @return string|null
     */
    public function getExitVoicePortal()
    {
        return $this->exitVoicePortal instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->exitVoicePortal;
    }

    /**
     * Setter for exitVoicePortal
     *
     * @param string|null $exitVoicePortal
     * @return $this
     */
    public function setExitVoicePortal($exitVoicePortal = null)
    {
        if ($exitVoicePortal === null) {
            $this->exitVoicePortal = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->exitVoicePortal = $exitVoicePortal;
        }
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
     * @return string|null
     */
    public function getRepeatMenu()
    {
        return $this->repeatMenu instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->repeatMenu;
    }

    /**
     * Setter for repeatMenu
     *
     * @param string|null $repeatMenu
     * @return $this
     */
    public function setRepeatMenu($repeatMenu = null)
    {
        if ($repeatMenu === null) {
            $this->repeatMenu = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->repeatMenu = $repeatMenu;
        }
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
     * @return string|null
     */
    public function getExternalRouting()
    {
        return $this->externalRouting instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->externalRouting;
    }

    /**
     * Setter for externalRouting
     *
     * @param string|null $externalRouting
     * @return $this
     */
    public function setExternalRouting($externalRouting = null)
    {
        if ($externalRouting === null) {
            $this->externalRouting = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->externalRouting = $externalRouting;
        }
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

    /**
     * Getter for announcement
     *
     * @return string|null
     */
    public function getAnnouncement()
    {
        return $this->announcement instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->announcement;
    }

    /**
     * Setter for announcement
     *
     * @param string|null $announcement
     * @return $this
     */
    public function setAnnouncement($announcement = null)
    {
        if ($announcement === null) {
            $this->announcement = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->announcement = $announcement;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAnnouncement()
    {
        $this->announcement = null;
        return $this;
    }

    /**
     * Getter for personalAssistant
     *
     * @return string|null
     */
    public function getPersonalAssistant()
    {
        return $this->personalAssistant instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->personalAssistant;
    }

    /**
     * Setter for personalAssistant
     *
     * @param string|null $personalAssistant
     * @return $this
     */
    public function setPersonalAssistant($personalAssistant = null)
    {
        if ($personalAssistant === null) {
            $this->personalAssistant = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->personalAssistant = $personalAssistant;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPersonalAssistant()
    {
        $this->personalAssistant = null;
        return $this;
    }


}

