<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ReplyMessageMenuKeysModifyEntry
 *
 * The voice portal reply message menu keys modify entry.
 */
class ReplyMessageMenuKeysModifyEntry
{

    /**
     * @ElementName sendReplyToCaller
     * @var string|null
     */
    private $sendReplyToCaller = null;

    /**
     * @ElementName changeCurrentReply
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $changeCurrentReply = null;

    /**
     * @ElementName listenToCurrentReply
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $listenToCurrentReply = null;

    /**
     * @ElementName setOrClearUrgentIndicator
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $setOrClearUrgentIndicator = null;

    /**
     * @ElementName setOrClearConfidentialIndicator
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $setOrClearConfidentialIndicator = null;

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
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getChangeCurrentReply()
    {
        return $this->changeCurrentReply;
    }

    /**
     * Setter for changeCurrentReply
     *
     * @ElementName changeCurrentReply
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $changeCurrentReply
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
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getListenToCurrentReply()
    {
        return $this->listenToCurrentReply;
    }

    /**
     * Setter for listenToCurrentReply
     *
     * @ElementName listenToCurrentReply
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $listenToCurrentReply
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
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getSetOrClearUrgentIndicator()
    {
        return $this->setOrClearUrgentIndicator;
    }

    /**
     * Setter for setOrClearUrgentIndicator
     *
     * @ElementName setOrClearUrgentIndicator
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $setOrClearUrgentIndicator
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
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getSetOrClearConfidentialIndicator()
    {
        return $this->setOrClearConfidentialIndicator;
    }

    /**
     * Setter for setOrClearConfidentialIndicator
     *
     * @ElementName setOrClearConfidentialIndicator
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $setOrClearConfidentialIndicator
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

