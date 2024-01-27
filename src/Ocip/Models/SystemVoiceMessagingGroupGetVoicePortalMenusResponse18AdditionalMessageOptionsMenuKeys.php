<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemVoiceMessagingGroupGetVoicePortalMenusResponse18AdditionalMessageOptionsMenuKeys
 *
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:37632","type":"sequence"}]
 */
class SystemVoiceMessagingGroupGetVoicePortalMenusResponse18AdditionalMessageOptionsMenuKeys
{
    /**
     * @ElementName saveMessage
     * @Type string
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:37632
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    protected $saveMessage = null;

    /**
     * @ElementName deleteMessage
     * @Type string
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:37632
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    protected $deleteMessage = null;

    /**
     * @ElementName playEnvelope
     * @Type string
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:37632
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    protected $playEnvelope = null;

    /**
     * @ElementName callbackCaller
     * @Type string
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:37632
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    protected $callbackCaller = null;

    /**
     * @ElementName composeMessage
     * @Type string
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:37632
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    protected $composeMessage = null;

    /**
     * @ElementName replyMessage
     * @Type string
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:37632
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    protected $replyMessage = null;

    /**
     * @ElementName forwardMessage
     * @Type string
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:37632
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    protected $forwardMessage = null;

    /**
     * @ElementName personalizedName
     * @Type string
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:37632
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    protected $personalizedName = null;

    /**
     * @ElementName passcode
     * @Type string
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:37632
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    protected $passcode = null;

    /**
     * @ElementName returnToPreviousMenu
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:37632
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    protected $returnToPreviousMenu = null;

    /**
     * @ElementName repeatMenu
     * @Type string
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:37632
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    protected $repeatMenu = null;

    /**
     * Getter for saveMessage
     *
     * @return string
     */
    public function getSaveMessage()
    {
        return $this->saveMessage instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->saveMessage;
    }

    /**
     * Setter for saveMessage
     *
     * @param string $saveMessage
     * @return $this
     */
    public function setSaveMessage($saveMessage)
    {
        $this->saveMessage = $saveMessage;
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
     * @return string
     */
    public function getDeleteMessage()
    {
        return $this->deleteMessage instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deleteMessage;
    }

    /**
     * Setter for deleteMessage
     *
     * @param string $deleteMessage
     * @return $this
     */
    public function setDeleteMessage($deleteMessage)
    {
        $this->deleteMessage = $deleteMessage;
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
     * @return string
     */
    public function getPlayEnvelope()
    {
        return $this->playEnvelope instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->playEnvelope;
    }

    /**
     * Setter for playEnvelope
     *
     * @param string $playEnvelope
     * @return $this
     */
    public function setPlayEnvelope($playEnvelope)
    {
        $this->playEnvelope = $playEnvelope;
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
     * @return string
     */
    public function getCallbackCaller()
    {
        return $this->callbackCaller instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callbackCaller;
    }

    /**
     * Setter for callbackCaller
     *
     * @param string $callbackCaller
     * @return $this
     */
    public function setCallbackCaller($callbackCaller)
    {
        $this->callbackCaller = $callbackCaller;
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
     * Getter for replyMessage
     *
     * @return string
     */
    public function getReplyMessage()
    {
        return $this->replyMessage instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->replyMessage;
    }

    /**
     * Setter for replyMessage
     *
     * @param string $replyMessage
     * @return $this
     */
    public function setReplyMessage($replyMessage)
    {
        $this->replyMessage = $replyMessage;
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
     * @return string
     */
    public function getForwardMessage()
    {
        return $this->forwardMessage instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->forwardMessage;
    }

    /**
     * Setter for forwardMessage
     *
     * @param string $forwardMessage
     * @return $this
     */
    public function setForwardMessage($forwardMessage)
    {
        $this->forwardMessage = $forwardMessage;
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

