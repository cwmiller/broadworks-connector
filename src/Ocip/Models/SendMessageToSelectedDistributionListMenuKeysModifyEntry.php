<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SendMessageToSelectedDistributionListMenuKeysModifyEntry
 *
 * The voice portal send message to selected distribution list menu keys modify entry.
 *
 * @Groups [{"id":"1fea1222b6a78aa7b98fd5c41bdae113:3054","type":"sequence"}]
 */
class SendMessageToSelectedDistributionListMenuKeysModifyEntry
{
    /**
     * @ElementName confirmSendingToDistributionList
     * @Type string
     * @Nillable
     * @Optional
     * @Group 1fea1222b6a78aa7b98fd5c41bdae113:3054
     * @Length 1
     * @Pattern \*|#
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $confirmSendingToDistributionList = null;

    /**
     * @ElementName cancelSendingToDistributionList
     * @Type string
     * @Optional
     * @Group 1fea1222b6a78aa7b98fd5c41bdae113:3054
     * @Length 1
     * @Pattern \*|#
     * @var string|null
     */
    protected $cancelSendingToDistributionList = null;

    /**
     * Getter for confirmSendingToDistributionList
     *
     * @return string|null
     */
    public function getConfirmSendingToDistributionList()
    {
        return $this->confirmSendingToDistributionList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->confirmSendingToDistributionList;
    }

    /**
     * Setter for confirmSendingToDistributionList
     *
     * @param string|null $confirmSendingToDistributionList
     * @return $this
     */
    public function setConfirmSendingToDistributionList($confirmSendingToDistributionList = null)
    {
        if ($confirmSendingToDistributionList === null) {
            $this->confirmSendingToDistributionList = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->confirmSendingToDistributionList = $confirmSendingToDistributionList;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetConfirmSendingToDistributionList()
    {
        $this->confirmSendingToDistributionList = null;
        return $this;
    }

    /**
     * Getter for cancelSendingToDistributionList
     *
     * @return string
     */
    public function getCancelSendingToDistributionList()
    {
        return $this->cancelSendingToDistributionList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->cancelSendingToDistributionList;
    }

    /**
     * Setter for cancelSendingToDistributionList
     *
     * @param string $cancelSendingToDistributionList
     * @return $this
     */
    public function setCancelSendingToDistributionList($cancelSendingToDistributionList)
    {
        $this->cancelSendingToDistributionList = $cancelSendingToDistributionList;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCancelSendingToDistributionList()
    {
        $this->cancelSendingToDistributionList = null;
        return $this;
    }
}

