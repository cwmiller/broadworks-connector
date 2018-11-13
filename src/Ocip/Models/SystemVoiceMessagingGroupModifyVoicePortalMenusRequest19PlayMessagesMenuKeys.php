<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19PlayMessagesMenuKeys
 */
class SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19PlayMessagesMenuKeys
{

    /**
     * @ElementName saveMessage
     * @Type string
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $saveMessage = null;

    /**
     * @ElementName deleteMessage
     * @Type string
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $deleteMessage = null;

    /**
     * @ElementName playMessage
     * @Type string
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $playMessage = null;

    /**
     * @ElementName previousMessage
     * @Type string
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $previousMessage = null;

    /**
     * @ElementName playEnvelope
     * @Type string
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $playEnvelope = null;

    /**
     * @ElementName nextMessage
     * @Type string
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $nextMessage = null;

    /**
     * @ElementName callbackCaller
     * @Type string
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $callbackCaller = null;

    /**
     * @ElementName composeMessage
     * @Type string
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $composeMessage = null;

    /**
     * @ElementName replyMessage
     * @Type string
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $replyMessage = null;

    /**
     * @ElementName forwardMessage
     * @Type string
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $forwardMessage = null;

    /**
     * @ElementName additionalMessageOptions
     * @Type string
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $additionalMessageOptions = null;

    /**
     * @ElementName personalizedName
     * @Type string
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $personalizedName = null;

    /**
     * @ElementName passcode
     * @Type string
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $passcode = null;

    /**
     * @ElementName returnToPreviousMenu
     * @Type string
     * @var string|null
     */
    private $returnToPreviousMenu = null;

    /**
     * @ElementName repeatMenu
     * @Type string
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $repeatMenu = null;

    /**
     * Getter for saveMessage
     *
     * @return string|null
     */
    public function getSaveMessage()
    {
        return $this->saveMessage instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->saveMessage;
    }

    /**
     * Setter for saveMessage
     *
     * @param string|null $saveMessage
     * @return $this
     */
    public function setSaveMessage($saveMessage)
    {
        if ($saveMessage === null) {
            $this->saveMessage = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->saveMessage = $saveMessage;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSaveMessage()
    {
        $this->saveMessage = null;
        return $this;
    }

    /**
     * Getter for deleteMessage
     *
     * @return string|null
     */
    public function getDeleteMessage()
    {
        return $this->deleteMessage instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deleteMessage;
    }

    /**
     * Setter for deleteMessage
     *
     * @param string|null $deleteMessage
     * @return $this
     */
    public function setDeleteMessage($deleteMessage)
    {
        if ($deleteMessage === null) {
            $this->deleteMessage = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->deleteMessage = $deleteMessage;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDeleteMessage()
    {
        $this->deleteMessage = null;
        return $this;
    }

    /**
     * Getter for playMessage
     *
     * @return string|null
     */
    public function getPlayMessage()
    {
        return $this->playMessage instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->playMessage;
    }

    /**
     * Setter for playMessage
     *
     * @param string|null $playMessage
     * @return $this
     */
    public function setPlayMessage($playMessage)
    {
        if ($playMessage === null) {
            $this->playMessage = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->playMessage = $playMessage;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPlayMessage()
    {
        $this->playMessage = null;
        return $this;
    }

    /**
     * Getter for previousMessage
     *
     * @return string|null
     */
    public function getPreviousMessage()
    {
        return $this->previousMessage instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->previousMessage;
    }

    /**
     * Setter for previousMessage
     *
     * @param string|null $previousMessage
     * @return $this
     */
    public function setPreviousMessage($previousMessage)
    {
        if ($previousMessage === null) {
            $this->previousMessage = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->previousMessage = $previousMessage;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPreviousMessage()
    {
        $this->previousMessage = null;
        return $this;
    }

    /**
     * Getter for playEnvelope
     *
     * @return string|null
     */
    public function getPlayEnvelope()
    {
        return $this->playEnvelope instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->playEnvelope;
    }

    /**
     * Setter for playEnvelope
     *
     * @param string|null $playEnvelope
     * @return $this
     */
    public function setPlayEnvelope($playEnvelope)
    {
        if ($playEnvelope === null) {
            $this->playEnvelope = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->playEnvelope = $playEnvelope;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPlayEnvelope()
    {
        $this->playEnvelope = null;
        return $this;
    }

    /**
     * Getter for nextMessage
     *
     * @return string|null
     */
    public function getNextMessage()
    {
        return $this->nextMessage instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->nextMessage;
    }

    /**
     * Setter for nextMessage
     *
     * @param string|null $nextMessage
     * @return $this
     */
    public function setNextMessage($nextMessage)
    {
        if ($nextMessage === null) {
            $this->nextMessage = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->nextMessage = $nextMessage;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNextMessage()
    {
        $this->nextMessage = null;
        return $this;
    }

    /**
     * Getter for callbackCaller
     *
     * @return string|null
     */
    public function getCallbackCaller()
    {
        return $this->callbackCaller instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callbackCaller;
    }

    /**
     * Setter for callbackCaller
     *
     * @param string|null $callbackCaller
     * @return $this
     */
    public function setCallbackCaller($callbackCaller)
    {
        if ($callbackCaller === null) {
            $this->callbackCaller = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->callbackCaller = $callbackCaller;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallbackCaller()
    {
        $this->callbackCaller = null;
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
    public function setComposeMessage($composeMessage)
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
     * Getter for replyMessage
     *
     * @return string|null
     */
    public function getReplyMessage()
    {
        return $this->replyMessage instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->replyMessage;
    }

    /**
     * Setter for replyMessage
     *
     * @param string|null $replyMessage
     * @return $this
     */
    public function setReplyMessage($replyMessage)
    {
        if ($replyMessage === null) {
            $this->replyMessage = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->replyMessage = $replyMessage;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetReplyMessage()
    {
        $this->replyMessage = null;
        return $this;
    }

    /**
     * Getter for forwardMessage
     *
     * @return string|null
     */
    public function getForwardMessage()
    {
        return $this->forwardMessage instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->forwardMessage;
    }

    /**
     * Setter for forwardMessage
     *
     * @param string|null $forwardMessage
     * @return $this
     */
    public function setForwardMessage($forwardMessage)
    {
        if ($forwardMessage === null) {
            $this->forwardMessage = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->forwardMessage = $forwardMessage;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetForwardMessage()
    {
        $this->forwardMessage = null;
        return $this;
    }

    /**
     * Getter for additionalMessageOptions
     *
     * @return string|null
     */
    public function getAdditionalMessageOptions()
    {
        return $this->additionalMessageOptions instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->additionalMessageOptions;
    }

    /**
     * Setter for additionalMessageOptions
     *
     * @param string|null $additionalMessageOptions
     * @return $this
     */
    public function setAdditionalMessageOptions($additionalMessageOptions)
    {
        if ($additionalMessageOptions === null) {
            $this->additionalMessageOptions = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->additionalMessageOptions = $additionalMessageOptions;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAdditionalMessageOptions()
    {
        $this->additionalMessageOptions = null;
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
    public function setPersonalizedName($personalizedName)
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
    public function setPasscode($passcode)
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
    public function setRepeatMenu($repeatMenu)
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

