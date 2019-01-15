<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19AdditionalMessageOptionsMenuKeys
 *
 * @Groups [{"id":"3347d430e0d5c93a9ff8dcf0e3b60d6c:1460","type":"sequence"}]
 */
class SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19AdditionalMessageOptionsMenuKeys
{

    /**
     * @ElementName saveMessage
     * @Type string
     * @Nillable
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:1460
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $saveMessage = null;

    /**
     * @ElementName deleteMessage
     * @Type string
     * @Nillable
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:1460
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $deleteMessage = null;

    /**
     * @ElementName playEnvelope
     * @Type string
     * @Nillable
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:1460
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $playEnvelope = null;

    /**
     * @ElementName callbackCaller
     * @Type string
     * @Nillable
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:1460
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $callbackCaller = null;

    /**
     * @ElementName composeMessage
     * @Type string
     * @Nillable
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:1460
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $composeMessage = null;

    /**
     * @ElementName replyMessage
     * @Type string
     * @Nillable
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:1460
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $replyMessage = null;

    /**
     * @ElementName forwardMessage
     * @Type string
     * @Nillable
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:1460
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $forwardMessage = null;

    /**
     * @ElementName personalizedName
     * @Type string
     * @Nillable
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:1460
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $personalizedName = null;

    /**
     * @ElementName passcode
     * @Type string
     * @Nillable
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:1460
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $passcode = null;

    /**
     * @ElementName returnToPreviousMenu
     * @Type string
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:1460
     * @var string|null
     */
    private $returnToPreviousMenu = null;

    /**
     * @ElementName repeatMenu
     * @Type string
     * @Nillable
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:1460
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
    public function setSaveMessage($saveMessage = null)
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
    public function setDeleteMessage($deleteMessage = null)
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
    public function setPlayEnvelope($playEnvelope = null)
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
    public function setCallbackCaller($callbackCaller = null)
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
    public function setReplyMessage($replyMessage = null)
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
    public function setForwardMessage($forwardMessage = null)
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

