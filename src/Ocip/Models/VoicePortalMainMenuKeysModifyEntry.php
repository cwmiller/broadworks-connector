<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * VoicePortalMainMenuKeysModifyEntry
 *
 * The voice portal main menu keys modify entry.
 */
class VoicePortalMainMenuKeysModifyEntry
{

    /**
     * @ElementName voiceMessaging
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $voiceMessaging = null;

    /**
     * @ElementName commPilotExpressProfile
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $commPilotExpressProfile = null;

    /**
     * @ElementName greetings
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $greetings = null;

    /**
     * @ElementName callForwardingOptions
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $callForwardingOptions = null;

    /**
     * @ElementName voicePortalCalling
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $voicePortalCalling = null;

    /**
     * @ElementName hoteling
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $hoteling = null;

    /**
     * @ElementName passcode
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $passcode = null;

    /**
     * @ElementName exitVoicePortal
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $exitVoicePortal = null;

    /**
     * @ElementName repeatMenu
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $repeatMenu = null;

    /**
     * @ElementName externalRouting
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $externalRouting = null;

    /**
     * @ElementName announcement
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $announcement = null;

    /**
     * @ElementName personalAssistant
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $personalAssistant = null;

    /**
     * Getter for voiceMessaging
     *
     * @ElementName voiceMessaging
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getVoiceMessaging()
    {
        return $this->voiceMessaging;
    }

    /**
     * Setter for voiceMessaging
     *
     * @ElementName voiceMessaging
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $voiceMessaging
     * @return $this
     */
    public function setVoiceMessaging($voiceMessaging)
    {
        $this->voiceMessaging = $voiceMessaging;
        return $this;
    }

    /**
     * Getter for commPilotExpressProfile
     *
     * @ElementName commPilotExpressProfile
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getCommPilotExpressProfile()
    {
        return $this->commPilotExpressProfile;
    }

    /**
     * Setter for commPilotExpressProfile
     *
     * @ElementName commPilotExpressProfile
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $commPilotExpressProfile
     * @return $this
     */
    public function setCommPilotExpressProfile($commPilotExpressProfile)
    {
        $this->commPilotExpressProfile = $commPilotExpressProfile;
        return $this;
    }

    /**
     * Getter for greetings
     *
     * @ElementName greetings
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getGreetings()
    {
        return $this->greetings;
    }

    /**
     * Setter for greetings
     *
     * @ElementName greetings
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $greetings
     * @return $this
     */
    public function setGreetings($greetings)
    {
        $this->greetings = $greetings;
        return $this;
    }

    /**
     * Getter for callForwardingOptions
     *
     * @ElementName callForwardingOptions
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getCallForwardingOptions()
    {
        return $this->callForwardingOptions;
    }

    /**
     * Setter for callForwardingOptions
     *
     * @ElementName callForwardingOptions
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $callForwardingOptions
     * @return $this
     */
    public function setCallForwardingOptions($callForwardingOptions)
    {
        $this->callForwardingOptions = $callForwardingOptions;
        return $this;
    }

    /**
     * Getter for voicePortalCalling
     *
     * @ElementName voicePortalCalling
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getVoicePortalCalling()
    {
        return $this->voicePortalCalling;
    }

    /**
     * Setter for voicePortalCalling
     *
     * @ElementName voicePortalCalling
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $voicePortalCalling
     * @return $this
     */
    public function setVoicePortalCalling($voicePortalCalling)
    {
        $this->voicePortalCalling = $voicePortalCalling;
        return $this;
    }

    /**
     * Getter for hoteling
     *
     * @ElementName hoteling
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getHoteling()
    {
        return $this->hoteling;
    }

    /**
     * Setter for hoteling
     *
     * @ElementName hoteling
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $hoteling
     * @return $this
     */
    public function setHoteling($hoteling)
    {
        $this->hoteling = $hoteling;
        return $this;
    }

    /**
     * Getter for passcode
     *
     * @ElementName passcode
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getPasscode()
    {
        return $this->passcode;
    }

    /**
     * Setter for passcode
     *
     * @ElementName passcode
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $passcode
     * @return $this
     */
    public function setPasscode($passcode)
    {
        $this->passcode = $passcode;
        return $this;
    }

    /**
     * Getter for exitVoicePortal
     *
     * @ElementName exitVoicePortal
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getExitVoicePortal()
    {
        return $this->exitVoicePortal;
    }

    /**
     * Setter for exitVoicePortal
     *
     * @ElementName exitVoicePortal
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $exitVoicePortal
     * @return $this
     */
    public function setExitVoicePortal($exitVoicePortal)
    {
        $this->exitVoicePortal = $exitVoicePortal;
        return $this;
    }

    /**
     * Getter for repeatMenu
     *
     * @ElementName repeatMenu
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getRepeatMenu()
    {
        return $this->repeatMenu;
    }

    /**
     * Setter for repeatMenu
     *
     * @ElementName repeatMenu
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $repeatMenu
     * @return $this
     */
    public function setRepeatMenu($repeatMenu)
    {
        $this->repeatMenu = $repeatMenu;
        return $this;
    }

    /**
     * Getter for externalRouting
     *
     * @ElementName externalRouting
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getExternalRouting()
    {
        return $this->externalRouting;
    }

    /**
     * Setter for externalRouting
     *
     * @ElementName externalRouting
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $externalRouting
     * @return $this
     */
    public function setExternalRouting($externalRouting)
    {
        $this->externalRouting = $externalRouting;
        return $this;
    }

    /**
     * Getter for announcement
     *
     * @ElementName announcement
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getAnnouncement()
    {
        return $this->announcement;
    }

    /**
     * Setter for announcement
     *
     * @ElementName announcement
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $announcement
     * @return $this
     */
    public function setAnnouncement($announcement)
    {
        $this->announcement = $announcement;
        return $this;
    }

    /**
     * Getter for personalAssistant
     *
     * @ElementName personalAssistant
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getPersonalAssistant()
    {
        return $this->personalAssistant;
    }

    /**
     * Setter for personalAssistant
     *
     * @ElementName personalAssistant
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $personalAssistant
     * @return $this
     */
    public function setPersonalAssistant($personalAssistant)
    {
        $this->personalAssistant = $personalAssistant;
        return $this;
    }


}

