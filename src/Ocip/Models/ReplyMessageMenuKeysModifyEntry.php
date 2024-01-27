<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ReplyMessageMenuKeysModifyEntry
 *
 * The voice portal reply message menu keys modify entry.
 *
 * @Groups [{"id":"1fea1222b6a78aa7b98fd5c41bdae113:2974","type":"sequence"}]
 */
class ReplyMessageMenuKeysModifyEntry
{
    /**
     * @ElementName sendReplyToCaller
     * @Type string
     * @Optional
     * @Group 1fea1222b6a78aa7b98fd5c41bdae113:2974
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    protected $sendReplyToCaller = null;

    /**
     * @ElementName changeCurrentReply
     * @Type string
     * @Nillable
     * @Optional
     * @Group 1fea1222b6a78aa7b98fd5c41bdae113:2974
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $changeCurrentReply = null;

    /**
     * @ElementName listenToCurrentReply
     * @Type string
     * @Nillable
     * @Optional
     * @Group 1fea1222b6a78aa7b98fd5c41bdae113:2974
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $listenToCurrentReply = null;

    /**
     * @ElementName setOrClearUrgentIndicator
     * @Type string
     * @Nillable
     * @Optional
     * @Group 1fea1222b6a78aa7b98fd5c41bdae113:2974
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $setOrClearUrgentIndicator = null;

    /**
     * @ElementName setOrClearConfidentialIndicator
     * @Type string
     * @Nillable
     * @Optional
     * @Group 1fea1222b6a78aa7b98fd5c41bdae113:2974
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $setOrClearConfidentialIndicator = null;

    /**
     * @ElementName returnToPreviousMenu
     * @Type string
     * @Optional
     * @Group 1fea1222b6a78aa7b98fd5c41bdae113:2974
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
     * @Group 1fea1222b6a78aa7b98fd5c41bdae113:2974
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
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
     * @return string|null
     */
    public function getChangeCurrentReply()
    {
        return $this->changeCurrentReply instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->changeCurrentReply;
    }

    /**
     * Setter for changeCurrentReply
     *
     * @param string|null $changeCurrentReply
     * @return $this
     */
    public function setChangeCurrentReply($changeCurrentReply = null)
    {
        if ($changeCurrentReply === null) {
            $this->changeCurrentReply = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->changeCurrentReply = $changeCurrentReply;
        }
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
     * @return string|null
     */
    public function getListenToCurrentReply()
    {
        return $this->listenToCurrentReply instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->listenToCurrentReply;
    }

    /**
     * Setter for listenToCurrentReply
     *
     * @param string|null $listenToCurrentReply
     * @return $this
     */
    public function setListenToCurrentReply($listenToCurrentReply = null)
    {
        if ($listenToCurrentReply === null) {
            $this->listenToCurrentReply = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->listenToCurrentReply = $listenToCurrentReply;
        }
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
     * @return string|null
     */
    public function getSetOrClearUrgentIndicator()
    {
        return $this->setOrClearUrgentIndicator instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->setOrClearUrgentIndicator;
    }

    /**
     * Setter for setOrClearUrgentIndicator
     *
     * @param string|null $setOrClearUrgentIndicator
     * @return $this
     */
    public function setSetOrClearUrgentIndicator($setOrClearUrgentIndicator = null)
    {
        if ($setOrClearUrgentIndicator === null) {
            $this->setOrClearUrgentIndicator = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->setOrClearUrgentIndicator = $setOrClearUrgentIndicator;
        }
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
     * @return string|null
     */
    public function getSetOrClearConfidentialIndicator()
    {
        return $this->setOrClearConfidentialIndicator instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->setOrClearConfidentialIndicator;
    }

    /**
     * Setter for setOrClearConfidentialIndicator
     *
     * @param string|null $setOrClearConfidentialIndicator
     * @return $this
     */
    public function setSetOrClearConfidentialIndicator($setOrClearConfidentialIndicator = null)
    {
        if ($setOrClearConfidentialIndicator === null) {
            $this->setOrClearConfidentialIndicator = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->setOrClearConfidentialIndicator = $setOrClearConfidentialIndicator;
        }
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

