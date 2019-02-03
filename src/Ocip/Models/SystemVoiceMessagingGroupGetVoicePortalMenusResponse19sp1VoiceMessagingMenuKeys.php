<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1VoiceMessagingMenuKeys
 *
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:32089","type":"sequence"}]
 */
class SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1VoiceMessagingMenuKeys
{

    /**
     * @ElementName playMessages
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:32089
     * @var string|null
     */
    private $playMessages = null;

    /**
     * @ElementName changeBusyGreeting
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:32089
     * @var string|null
     */
    private $changeBusyGreeting = null;

    /**
     * @ElementName changeNoAnswerGreeting
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:32089
     * @var string|null
     */
    private $changeNoAnswerGreeting = null;

    /**
     * @ElementName changeExtendedAwayGreeting
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:32089
     * @var string|null
     */
    private $changeExtendedAwayGreeting = null;

    /**
     * @ElementName composeMessage
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:32089
     * @var string|null
     */
    private $composeMessage = null;

    /**
     * @ElementName deleteAllMessages
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:32089
     * @var string|null
     */
    private $deleteAllMessages = null;

    /**
     * @ElementName passcode
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:32089
     * @var string|null
     */
    private $passcode = null;

    /**
     * @ElementName personalizedName
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:32089
     * @var string|null
     */
    private $personalizedName = null;

    /**
     * @ElementName messageDeposit
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:32089
     * @var string|null
     */
    private $messageDeposit = null;

    /**
     * @ElementName returnToPreviousMenu
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:32089
     * @var string|null
     */
    private $returnToPreviousMenu = null;

    /**
     * @ElementName repeatMenu
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:32089
     * @var string|null
     */
    private $repeatMenu = null;

    /**
     * Getter for playMessages
     *
     * @return string
     */
    public function getPlayMessages()
    {
        return $this->playMessages instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->playMessages;
    }

    /**
     * Setter for playMessages
     *
     * @param string $playMessages
     * @return $this
     */
    public function setPlayMessages($playMessages)
    {
        $this->playMessages = $playMessages;
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
     * @return string
     */
    public function getChangeBusyGreeting()
    {
        return $this->changeBusyGreeting instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->changeBusyGreeting;
    }

    /**
     * Setter for changeBusyGreeting
     *
     * @param string $changeBusyGreeting
     * @return $this
     */
    public function setChangeBusyGreeting($changeBusyGreeting)
    {
        $this->changeBusyGreeting = $changeBusyGreeting;
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
     * @return string
     */
    public function getChangeNoAnswerGreeting()
    {
        return $this->changeNoAnswerGreeting instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->changeNoAnswerGreeting;
    }

    /**
     * Setter for changeNoAnswerGreeting
     *
     * @param string $changeNoAnswerGreeting
     * @return $this
     */
    public function setChangeNoAnswerGreeting($changeNoAnswerGreeting)
    {
        $this->changeNoAnswerGreeting = $changeNoAnswerGreeting;
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
     * @return string
     */
    public function getChangeExtendedAwayGreeting()
    {
        return $this->changeExtendedAwayGreeting instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->changeExtendedAwayGreeting;
    }

    /**
     * Setter for changeExtendedAwayGreeting
     *
     * @param string $changeExtendedAwayGreeting
     * @return $this
     */
    public function setChangeExtendedAwayGreeting($changeExtendedAwayGreeting)
    {
        $this->changeExtendedAwayGreeting = $changeExtendedAwayGreeting;
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
     * @return string
     */
    public function getComposeMessage()
    {
        return $this->composeMessage instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->composeMessage;
    }

    /**
     * Setter for composeMessage
     *
     * @param string $composeMessage
     * @return $this
     */
    public function setComposeMessage($composeMessage)
    {
        $this->composeMessage = $composeMessage;
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
     * @return string
     */
    public function getDeleteAllMessages()
    {
        return $this->deleteAllMessages instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deleteAllMessages;
    }

    /**
     * Setter for deleteAllMessages
     *
     * @param string $deleteAllMessages
     * @return $this
     */
    public function setDeleteAllMessages($deleteAllMessages)
    {
        $this->deleteAllMessages = $deleteAllMessages;
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
     * Getter for messageDeposit
     *
     * @return string
     */
    public function getMessageDeposit()
    {
        return $this->messageDeposit instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->messageDeposit;
    }

    /**
     * Setter for messageDeposit
     *
     * @param string $messageDeposit
     * @return $this
     */
    public function setMessageDeposit($messageDeposit)
    {
        $this->messageDeposit = $messageDeposit;
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


}

