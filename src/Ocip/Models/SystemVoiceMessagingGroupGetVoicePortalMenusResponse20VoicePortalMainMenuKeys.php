<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemVoiceMessagingGroupGetVoicePortalMenusResponse20VoicePortalMainMenuKeys
 *
 * @Groups [{"id":"4f0fb68b4d4b3ac50a70eeb01a628dce:31200","type":"sequence"}]
 */
class SystemVoiceMessagingGroupGetVoicePortalMenusResponse20VoicePortalMainMenuKeys
{

    /**
     * @ElementName voiceMessaging
     * @Type string
     * @Optional
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:31200
     * @var string|null
     */
    private $voiceMessaging = null;

    /**
     * @ElementName commPilotExpressProfile
     * @Type string
     * @Optional
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:31200
     * @var string|null
     */
    private $commPilotExpressProfile = null;

    /**
     * @ElementName greetings
     * @Type string
     * @Optional
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:31200
     * @var string|null
     */
    private $greetings = null;

    /**
     * @ElementName callForwardingOptions
     * @Type string
     * @Optional
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:31200
     * @var string|null
     */
    private $callForwardingOptions = null;

    /**
     * @ElementName voicePortalCalling
     * @Type string
     * @Optional
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:31200
     * @var string|null
     */
    private $voicePortalCalling = null;

    /**
     * @ElementName hoteling
     * @Type string
     * @Optional
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:31200
     * @var string|null
     */
    private $hoteling = null;

    /**
     * @ElementName passcode
     * @Type string
     * @Optional
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:31200
     * @var string|null
     */
    private $passcode = null;

    /**
     * @ElementName exitVoicePortal
     * @Type string
     * @Optional
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:31200
     * @var string|null
     */
    private $exitVoicePortal = null;

    /**
     * @ElementName repeatMenu
     * @Type string
     * @Optional
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:31200
     * @var string|null
     */
    private $repeatMenu = null;

    /**
     * @ElementName externalRouting
     * @Type string
     * @Optional
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:31200
     * @var string|null
     */
    private $externalRouting = null;

    /**
     * @ElementName announcement
     * @Type string
     * @Optional
     * @Group 4f0fb68b4d4b3ac50a70eeb01a628dce:31200
     * @var string|null
     */
    private $announcement = null;

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
     * Getter for greetings
     *
     * @return string
     */
    public function getGreetings()
    {
        return $this->greetings instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->greetings;
    }

    /**
     * Setter for greetings
     *
     * @param string $greetings
     * @return $this
     */
    public function setGreetings($greetings)
    {
        $this->greetings = $greetings;
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

    /**
     * Getter for announcement
     *
     * @return string
     */
    public function getAnnouncement()
    {
        return $this->announcement instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->announcement;
    }

    /**
     * Setter for announcement
     *
     * @param string $announcement
     * @return $this
     */
    public function setAnnouncement($announcement)
    {
        $this->announcement = $announcement;
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


}

