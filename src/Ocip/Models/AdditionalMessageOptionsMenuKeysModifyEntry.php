<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * AdditionalMessageOptionsMenuKeysModifyEntry
 *
 * The voice portal additional message options modify entry.
 */
class AdditionalMessageOptionsMenuKeysModifyEntry
{

    /**
     * @ElementName saveMessage
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $saveMessage = null;

    /**
     * @ElementName deleteMessage
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $deleteMessage = null;

    /**
     * @ElementName playEnvelope
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $playEnvelope = null;

    /**
     * @ElementName callbackCaller
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $callbackCaller = null;

    /**
     * @ElementName composeMessage
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $composeMessage = null;

    /**
     * @ElementName replyMessage
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $replyMessage = null;

    /**
     * @ElementName forwardMessage
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $forwardMessage = null;

    /**
     * @ElementName personalizedName
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $personalizedName = null;

    /**
     * @ElementName passcode
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $passcode = null;

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
     * Getter for saveMessage
     *
     * @ElementName saveMessage
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getSaveMessage()
    {
        return $this->saveMessage;
    }

    /**
     * Setter for saveMessage
     *
     * @ElementName saveMessage
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $saveMessage
     * @return $this
     */
    public function setSaveMessage($saveMessage)
    {
        $this->saveMessage = $saveMessage;
        return $this;
    }

    /**
     * Getter for deleteMessage
     *
     * @ElementName deleteMessage
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getDeleteMessage()
    {
        return $this->deleteMessage;
    }

    /**
     * Setter for deleteMessage
     *
     * @ElementName deleteMessage
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $deleteMessage
     * @return $this
     */
    public function setDeleteMessage($deleteMessage)
    {
        $this->deleteMessage = $deleteMessage;
        return $this;
    }

    /**
     * Getter for playEnvelope
     *
     * @ElementName playEnvelope
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getPlayEnvelope()
    {
        return $this->playEnvelope;
    }

    /**
     * Setter for playEnvelope
     *
     * @ElementName playEnvelope
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $playEnvelope
     * @return $this
     */
    public function setPlayEnvelope($playEnvelope)
    {
        $this->playEnvelope = $playEnvelope;
        return $this;
    }

    /**
     * Getter for callbackCaller
     *
     * @ElementName callbackCaller
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getCallbackCaller()
    {
        return $this->callbackCaller;
    }

    /**
     * Setter for callbackCaller
     *
     * @ElementName callbackCaller
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $callbackCaller
     * @return $this
     */
    public function setCallbackCaller($callbackCaller)
    {
        $this->callbackCaller = $callbackCaller;
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
     * Getter for replyMessage
     *
     * @ElementName replyMessage
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getReplyMessage()
    {
        return $this->replyMessage;
    }

    /**
     * Setter for replyMessage
     *
     * @ElementName replyMessage
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $replyMessage
     * @return $this
     */
    public function setReplyMessage($replyMessage)
    {
        $this->replyMessage = $replyMessage;
        return $this;
    }

    /**
     * Getter for forwardMessage
     *
     * @ElementName forwardMessage
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getForwardMessage()
    {
        return $this->forwardMessage;
    }

    /**
     * Setter for forwardMessage
     *
     * @ElementName forwardMessage
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $forwardMessage
     * @return $this
     */
    public function setForwardMessage($forwardMessage)
    {
        $this->forwardMessage = $forwardMessage;
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

