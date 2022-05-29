<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19VoiceMessagingMenuKeys
 *
 * @Groups [{"id":"3347d430e0d5c93a9ff8dcf0e3b60d6c:1275","type":"sequence"}]
 */
class SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19VoiceMessagingMenuKeys
{

    /**
     * @ElementName playMessages
     * @Type string
     * @Nillable
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:1275
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $playMessages = null;

    /**
     * @ElementName changeBusyGreeting
     * @Type string
     * @Nillable
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:1275
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $changeBusyGreeting = null;

    /**
     * @ElementName changeNoAnswerGreeting
     * @Type string
     * @Nillable
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:1275
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $changeNoAnswerGreeting = null;

    /**
     * @ElementName changeExtendedAwayGreeting
     * @Type string
     * @Nillable
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:1275
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $changeExtendedAwayGreeting = null;

    /**
     * @ElementName composeMessage
     * @Type string
     * @Nillable
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:1275
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $composeMessage = null;

    /**
     * @ElementName deleteAllMessages
     * @Type string
     * @Nillable
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:1275
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $deleteAllMessages = null;

    /**
     * @ElementName passcode
     * @Type string
     * @Nillable
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:1275
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $passcode = null;

    /**
     * @ElementName personalizedName
     * @Type string
     * @Nillable
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:1275
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $personalizedName = null;

    /**
     * @ElementName messageDeposit
     * @Type string
     * @Nillable
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:1275
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $messageDeposit = null;

    /**
     * @ElementName returnToPreviousMenu
     * @Type string
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:1275
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    protected $returnToPreviousMenu = null;

    /**
     * @ElementName repeatMenu
     * @Type string
     * @Nillable
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:1275
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $repeatMenu = null;

    /**
     * Getter for playMessages
     *
     * @return string|null
     */
    public function getPlayMessages()
    {
        return $this->playMessages instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->playMessages;
    }

    /**
     * Setter for playMessages
     *
     * @param string|null $playMessages
     * @return $this
     */
    public function setPlayMessages($playMessages = null)
    {
        if ($playMessages === null) {
            $this->playMessages = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->playMessages = $playMessages;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPlayMessages()
    {
        $this->playMessages = null;
        return $this;
    }

    /**
     * Getter for changeBusyGreeting
     *
     * @return string|null
     */
    public function getChangeBusyGreeting()
    {
        return $this->changeBusyGreeting instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->changeBusyGreeting;
    }

    /**
     * Setter for changeBusyGreeting
     *
     * @param string|null $changeBusyGreeting
     * @return $this
     */
    public function setChangeBusyGreeting($changeBusyGreeting = null)
    {
        if ($changeBusyGreeting === null) {
            $this->changeBusyGreeting = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->changeBusyGreeting = $changeBusyGreeting;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetChangeBusyGreeting()
    {
        $this->changeBusyGreeting = null;
        return $this;
    }

    /**
     * Getter for changeNoAnswerGreeting
     *
     * @return string|null
     */
    public function getChangeNoAnswerGreeting()
    {
        return $this->changeNoAnswerGreeting instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->changeNoAnswerGreeting;
    }

    /**
     * Setter for changeNoAnswerGreeting
     *
     * @param string|null $changeNoAnswerGreeting
     * @return $this
     */
    public function setChangeNoAnswerGreeting($changeNoAnswerGreeting = null)
    {
        if ($changeNoAnswerGreeting === null) {
            $this->changeNoAnswerGreeting = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->changeNoAnswerGreeting = $changeNoAnswerGreeting;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetChangeNoAnswerGreeting()
    {
        $this->changeNoAnswerGreeting = null;
        return $this;
    }

    /**
     * Getter for changeExtendedAwayGreeting
     *
     * @return string|null
     */
    public function getChangeExtendedAwayGreeting()
    {
        return $this->changeExtendedAwayGreeting instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->changeExtendedAwayGreeting;
    }

    /**
     * Setter for changeExtendedAwayGreeting
     *
     * @param string|null $changeExtendedAwayGreeting
     * @return $this
     */
    public function setChangeExtendedAwayGreeting($changeExtendedAwayGreeting = null)
    {
        if ($changeExtendedAwayGreeting === null) {
            $this->changeExtendedAwayGreeting = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->changeExtendedAwayGreeting = $changeExtendedAwayGreeting;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetChangeExtendedAwayGreeting()
    {
        $this->changeExtendedAwayGreeting = null;
        return $this;
    }

    /**
     * Getter for composeMessage
     *
     * @return string|null
     */
    public function getComposeMessage()
    {
        return $this->composeMessage instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->composeMessage;
    }

    /**
     * Setter for composeMessage
     *
     * @param string|null $composeMessage
     * @return $this
     */
    public function setComposeMessage($composeMessage = null)
    {
        if ($composeMessage === null) {
            $this->composeMessage = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->composeMessage = $composeMessage;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetComposeMessage()
    {
        $this->composeMessage = null;
        return $this;
    }

    /**
     * Getter for deleteAllMessages
     *
     * @return string|null
     */
    public function getDeleteAllMessages()
    {
        return $this->deleteAllMessages instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deleteAllMessages;
    }

    /**
     * Setter for deleteAllMessages
     *
     * @param string|null $deleteAllMessages
     * @return $this
     */
    public function setDeleteAllMessages($deleteAllMessages = null)
    {
        if ($deleteAllMessages === null) {
            $this->deleteAllMessages = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->deleteAllMessages = $deleteAllMessages;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDeleteAllMessages()
    {
        $this->deleteAllMessages = null;
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
     * Getter for personalizedName
     *
     * @return string|null
     */
    public function getPersonalizedName()
    {
        return $this->personalizedName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->personalizedName;
    }

    /**
     * Setter for personalizedName
     *
     * @param string|null $personalizedName
     * @return $this
     */
    public function setPersonalizedName($personalizedName = null)
    {
        if ($personalizedName === null) {
            $this->personalizedName = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->personalizedName = $personalizedName;
        }
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
     * Getter for messageDeposit
     *
     * @return string|null
     */
    public function getMessageDeposit()
    {
        return $this->messageDeposit instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->messageDeposit;
    }

    /**
     * Setter for messageDeposit
     *
     * @param string|null $messageDeposit
     * @return $this
     */
    public function setMessageDeposit($messageDeposit = null)
    {
        if ($messageDeposit === null) {
            $this->messageDeposit = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->messageDeposit = $messageDeposit;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMessageDeposit()
    {
        $this->messageDeposit = null;
        return $this;
    }

    /**
     * Getter for returnToPreviousMenu
     *
     * @return string
     */
    public function getReturnToPreviousMenu()
    {
        return $this->returnToPreviousMenu instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->returnToPreviousMenu;
    }

    /**
     * Setter for returnToPreviousMenu
     *
     * @param string $returnToPreviousMenu
     * @return $this
     */
    public function setReturnToPreviousMenu($returnToPreviousMenu)
    {
        $this->returnToPreviousMenu = $returnToPreviousMenu;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetReturnToPreviousMenu()
    {
        $this->returnToPreviousMenu = null;
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


}

