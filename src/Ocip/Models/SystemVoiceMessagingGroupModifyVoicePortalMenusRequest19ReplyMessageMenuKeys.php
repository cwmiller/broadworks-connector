<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19ReplyMessageMenuKeys
 */
class SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19ReplyMessageMenuKeys
{

    /**
     * @ElementName sendReplyToCaller
     * @var string|null
     */
    private $sendReplyToCaller = null;

    /**
     * @ElementName changeCurrentReply
     * @var string|null
     */
    private $changeCurrentReply = null;

    /**
     * @ElementName listenToCurrentReply
     * @var string|null
     */
    private $listenToCurrentReply = null;

    /**
     * @ElementName setOrClearUrgentIndicator
     * @var string|null
     */
    private $setOrClearUrgentIndicator = null;

    /**
     * @ElementName setOrClearConfidentialIndicator
     * @var string|null
     */
    private $setOrClearConfidentialIndicator = null;

    /**
     * @ElementName returnToPreviousMenu
     * @var string|null
     */
    private $returnToPreviousMenu = null;

    /**
     * @ElementName repeatMenu
     * @var string|null
     */
    private $repeatMenu = null;

    /**
     * Getter for sendReplyToCaller
     *
     * @ElementName sendReplyToCaller
     * @return string|null
     */
    public function getSendReplyToCaller()
    {
        return $this->sendReplyToCaller;
    }

    /**
     * Setter for sendReplyToCaller
     *
     * @ElementName sendReplyToCaller
     * @param string|null $sendReplyToCaller
     * @return $this
     */
    public function setSendReplyToCaller($sendReplyToCaller)
    {
        $this->sendReplyToCaller = $sendReplyToCaller;
        return $this;
    }

    /**
     * Getter for changeCurrentReply
     *
     * @ElementName changeCurrentReply
     * @return string|null
     */
    public function getChangeCurrentReply()
    {
        return $this->changeCurrentReply;
    }

    /**
     * Setter for changeCurrentReply
     *
     * @ElementName changeCurrentReply
     * @param string|null $changeCurrentReply
     * @return $this
     */
    public function setChangeCurrentReply($changeCurrentReply)
    {
        $this->changeCurrentReply = $changeCurrentReply;
        return $this;
    }

    /**
     * Getter for listenToCurrentReply
     *
     * @ElementName listenToCurrentReply
     * @return string|null
     */
    public function getListenToCurrentReply()
    {
        return $this->listenToCurrentReply;
    }

    /**
     * Setter for listenToCurrentReply
     *
     * @ElementName listenToCurrentReply
     * @param string|null $listenToCurrentReply
     * @return $this
     */
    public function setListenToCurrentReply($listenToCurrentReply)
    {
        $this->listenToCurrentReply = $listenToCurrentReply;
        return $this;
    }

    /**
     * Getter for setOrClearUrgentIndicator
     *
     * @ElementName setOrClearUrgentIndicator
     * @return string|null
     */
    public function getSetOrClearUrgentIndicator()
    {
        return $this->setOrClearUrgentIndicator;
    }

    /**
     * Setter for setOrClearUrgentIndicator
     *
     * @ElementName setOrClearUrgentIndicator
     * @param string|null $setOrClearUrgentIndicator
     * @return $this
     */
    public function setSetOrClearUrgentIndicator($setOrClearUrgentIndicator)
    {
        $this->setOrClearUrgentIndicator = $setOrClearUrgentIndicator;
        return $this;
    }

    /**
     * Getter for setOrClearConfidentialIndicator
     *
     * @ElementName setOrClearConfidentialIndicator
     * @return string|null
     */
    public function getSetOrClearConfidentialIndicator()
    {
        return $this->setOrClearConfidentialIndicator;
    }

    /**
     * Setter for setOrClearConfidentialIndicator
     *
     * @ElementName setOrClearConfidentialIndicator
     * @param string|null $setOrClearConfidentialIndicator
     * @return $this
     */
    public function setSetOrClearConfidentialIndicator($setOrClearConfidentialIndicator)
    {
        $this->setOrClearConfidentialIndicator = $setOrClearConfidentialIndicator;
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
     * @return string|null
     */
    public function getRepeatMenu()
    {
        return $this->repeatMenu;
    }

    /**
     * Setter for repeatMenu
     *
     * @ElementName repeatMenu
     * @param string|null $repeatMenu
     * @return $this
     */
    public function setRepeatMenu($repeatMenu)
    {
        $this->repeatMenu = $repeatMenu;
        return $this;
    }


}

