<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemVoiceMessagingGroupGetVoicePortalMenusResponse18sp1ReplyMessageMenuKeys
 *
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:38051","type":"sequence"}]
 */
class SystemVoiceMessagingGroupGetVoicePortalMenusResponse18sp1ReplyMessageMenuKeys
{
    /**
     * @ElementName sendReplyToCaller
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:38051
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    protected $sendReplyToCaller = null;

    /**
     * @ElementName changeCurrentReply
     * @Type string
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:38051
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    protected $changeCurrentReply = null;

    /**
     * @ElementName listenToCurrentReply
     * @Type string
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:38051
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    protected $listenToCurrentReply = null;

    /**
     * @ElementName setOrClearUrgentIndicator
     * @Type string
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:38051
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    protected $setOrClearUrgentIndicator = null;

    /**
     * @ElementName setOrClearConfidentialIndicator
     * @Type string
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:38051
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    protected $setOrClearConfidentialIndicator = null;

    /**
     * @ElementName returnToPreviousMenu
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:38051
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    protected $returnToPreviousMenu = null;

    /**
     * @ElementName repeatMenu
     * @Type string
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:38051
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    protected $repeatMenu = null;

    /**
     * Getter for sendReplyToCaller
     *
     * @return string
     */
    public function getSendReplyToCaller()
    {
        return $this->sendReplyToCaller instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sendReplyToCaller;
    }

    /**
     * Setter for sendReplyToCaller
     *
     * @param string $sendReplyToCaller
     * @return $this
     */
    public function setSendReplyToCaller($sendReplyToCaller)
    {
        $this->sendReplyToCaller = $sendReplyToCaller;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSendReplyToCaller()
    {
        $this->sendReplyToCaller = null;
        return $this;
    }

    /**
     * Getter for changeCurrentReply
     *
     * @return string
     */
    public function getChangeCurrentReply()
    {
        return $this->changeCurrentReply instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->changeCurrentReply;
    }

    /**
     * Setter for changeCurrentReply
     *
     * @param string $changeCurrentReply
     * @return $this
     */
    public function setChangeCurrentReply($changeCurrentReply)
    {
        $this->changeCurrentReply = $changeCurrentReply;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetChangeCurrentReply()
    {
        $this->changeCurrentReply = null;
        return $this;
    }

    /**
     * Getter for listenToCurrentReply
     *
     * @return string
     */
    public function getListenToCurrentReply()
    {
        return $this->listenToCurrentReply instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->listenToCurrentReply;
    }

    /**
     * Setter for listenToCurrentReply
     *
     * @param string $listenToCurrentReply
     * @return $this
     */
    public function setListenToCurrentReply($listenToCurrentReply)
    {
        $this->listenToCurrentReply = $listenToCurrentReply;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetListenToCurrentReply()
    {
        $this->listenToCurrentReply = null;
        return $this;
    }

    /**
     * Getter for setOrClearUrgentIndicator
     *
     * @return string
     */
    public function getSetOrClearUrgentIndicator()
    {
        return $this->setOrClearUrgentIndicator instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->setOrClearUrgentIndicator;
    }

    /**
     * Setter for setOrClearUrgentIndicator
     *
     * @param string $setOrClearUrgentIndicator
     * @return $this
     */
    public function setSetOrClearUrgentIndicator($setOrClearUrgentIndicator)
    {
        $this->setOrClearUrgentIndicator = $setOrClearUrgentIndicator;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSetOrClearUrgentIndicator()
    {
        $this->setOrClearUrgentIndicator = null;
        return $this;
    }

    /**
     * Getter for setOrClearConfidentialIndicator
     *
     * @return string
     */
    public function getSetOrClearConfidentialIndicator()
    {
        return $this->setOrClearConfidentialIndicator instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->setOrClearConfidentialIndicator;
    }

    /**
     * Setter for setOrClearConfidentialIndicator
     *
     * @param string $setOrClearConfidentialIndicator
     * @return $this
     */
    public function setSetOrClearConfidentialIndicator($setOrClearConfidentialIndicator)
    {
        $this->setOrClearConfidentialIndicator = $setOrClearConfidentialIndicator;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSetOrClearConfidentialIndicator()
    {
        $this->setOrClearConfidentialIndicator = null;
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

