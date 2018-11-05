<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19VoiceMessagingMenuKeys
 */
class SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19VoiceMessagingMenuKeys
{

    /**
     * @ElementName playMessages
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $playMessages = null;

    /**
     * @ElementName changeBusyGreeting
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $changeBusyGreeting = null;

    /**
     * @ElementName changeNoAnswerGreeting
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $changeNoAnswerGreeting = null;

    /**
     * @ElementName changeExtendedAwayGreeting
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $changeExtendedAwayGreeting = null;

    /**
     * @ElementName composeMessage
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $composeMessage = null;

    /**
     * @ElementName deleteAllMessages
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $deleteAllMessages = null;

    /**
     * @ElementName passcode
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $passcode = null;

    /**
     * @ElementName personalizedName
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $personalizedName = null;

    /**
     * @ElementName messageDeposit
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $messageDeposit = null;

    /**
     * @ElementName returnToPreviousMenu
     * @var string|null
     */
    private $returnToPreviousMenu = null;

    /**
     * @ElementName repeatMenu
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $repeatMenu = null;

    /**
     * Getter for playMessages
     *
     * @ElementName playMessages
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getPlayMessages()
    {
        return $this->playMessages;
    }

    /**
     * Setter for playMessages
     *
     * @ElementName playMessages
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $playMessages
     * @return $this
     */
    public function setPlayMessages($playMessages)
    {
        $this->playMessages = $playMessages;
        return $this;
    }

    /**
     * Getter for changeBusyGreeting
     *
     * @ElementName changeBusyGreeting
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getChangeBusyGreeting()
    {
        return $this->changeBusyGreeting;
    }

    /**
     * Setter for changeBusyGreeting
     *
     * @ElementName changeBusyGreeting
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $changeBusyGreeting
     * @return $this
     */
    public function setChangeBusyGreeting($changeBusyGreeting)
    {
        $this->changeBusyGreeting = $changeBusyGreeting;
        return $this;
    }

    /**
     * Getter for changeNoAnswerGreeting
     *
     * @ElementName changeNoAnswerGreeting
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getChangeNoAnswerGreeting()
    {
        return $this->changeNoAnswerGreeting;
    }

    /**
     * Setter for changeNoAnswerGreeting
     *
     * @ElementName changeNoAnswerGreeting
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $changeNoAnswerGreeting
     * @return $this
     */
    public function setChangeNoAnswerGreeting($changeNoAnswerGreeting)
    {
        $this->changeNoAnswerGreeting = $changeNoAnswerGreeting;
        return $this;
    }

    /**
     * Getter for changeExtendedAwayGreeting
     *
     * @ElementName changeExtendedAwayGreeting
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getChangeExtendedAwayGreeting()
    {
        return $this->changeExtendedAwayGreeting;
    }

    /**
     * Setter for changeExtendedAwayGreeting
     *
     * @ElementName changeExtendedAwayGreeting
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $changeExtendedAwayGreeting
     * @return $this
     */
    public function setChangeExtendedAwayGreeting($changeExtendedAwayGreeting)
    {
        $this->changeExtendedAwayGreeting = $changeExtendedAwayGreeting;
        return $this;
    }

    /**
     * Getter for composeMessage
     *
     * @ElementName composeMessage
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getComposeMessage()
    {
        return $this->composeMessage;
    }

    /**
     * Setter for composeMessage
     *
     * @ElementName composeMessage
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $composeMessage
     * @return $this
     */
    public function setComposeMessage($composeMessage)
    {
        $this->composeMessage = $composeMessage;
        return $this;
    }

    /**
     * Getter for deleteAllMessages
     *
     * @ElementName deleteAllMessages
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getDeleteAllMessages()
    {
        return $this->deleteAllMessages;
    }

    /**
     * Setter for deleteAllMessages
     *
     * @ElementName deleteAllMessages
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $deleteAllMessages
     * @return $this
     */
    public function setDeleteAllMessages($deleteAllMessages)
    {
        $this->deleteAllMessages = $deleteAllMessages;
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
     * Getter for personalizedName
     *
     * @ElementName personalizedName
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getPersonalizedName()
    {
        return $this->personalizedName;
    }

    /**
     * Setter for personalizedName
     *
     * @ElementName personalizedName
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $personalizedName
     * @return $this
     */
    public function setPersonalizedName($personalizedName)
    {
        $this->personalizedName = $personalizedName;
        return $this;
    }

    /**
     * Getter for messageDeposit
     *
     * @ElementName messageDeposit
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getMessageDeposit()
    {
        return $this->messageDeposit;
    }

    /**
     * Setter for messageDeposit
     *
     * @ElementName messageDeposit
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $messageDeposit
     * @return $this
     */
    public function setMessageDeposit($messageDeposit)
    {
        $this->messageDeposit = $messageDeposit;
        return $this;
    }

    /**
     * Getter for returnToPreviousMenu
     *
     * @ElementName returnToPreviousMenu
     * @return string|null
     */
    public function getReturnToPreviousMenu()
    {
        return $this->returnToPreviousMenu;
    }

    /**
     * Setter for returnToPreviousMenu
     *
     * @ElementName returnToPreviousMenu
     * @param string|null $returnToPreviousMenu
     * @return $this
     */
    public function setReturnToPreviousMenu($returnToPreviousMenu)
    {
        $this->returnToPreviousMenu = $returnToPreviousMenu;
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


}

