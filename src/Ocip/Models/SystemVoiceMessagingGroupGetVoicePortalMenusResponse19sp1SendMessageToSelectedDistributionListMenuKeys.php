<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1SendMessageToSelectedDistributionListMenuKeys
 */
class SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1SendMessageToSelectedDistributionListMenuKeys
{

    /**
     * @ElementName confirmSendingToDistributionList
     * @Type string
     * @var string|null
     */
    private $confirmSendingToDistributionList = null;

    /**
     * @ElementName cancelSendingToDistributionList
     * @Type string
     * @var string|null
     */
    private $cancelSendingToDistributionList = null;

    /**
     * Getter for confirmSendingToDistributionList
     *
     * @return string
     */
    public function getConfirmSendingToDistributionList()
    {
        return $this->confirmSendingToDistributionList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->confirmSendingToDistributionList;
    }

    /**
     * Setter for confirmSendingToDistributionList
     *
     * @param string $confirmSendingToDistributionList
     * @return $this
     */
    public function setConfirmSendingToDistributionList($confirmSendingToDistributionList)
    {
        $this->confirmSendingToDistributionList = $confirmSendingToDistributionList;
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

