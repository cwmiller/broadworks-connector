<?php

namespace CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20;

/**
 * SendMessageToSelectedDistributionListMenuKeys
 */
class SendMessageToSelectedDistributionListMenuKeys
{

    /**
     * @ElementName confirmSendingToDistributionList
     * @var string|null
     */
    private $confirmSendingToDistributionList = null;

    /**
     * @ElementName cancelSendingToDistributionList
     * @var string|null
     */
    private $cancelSendingToDistributionList = null;

    /**
     * Getter for confirmSendingToDistributionList
     *
     * @ElementName confirmSendingToDistributionList
     * @return string|null
     */
    public function getConfirmSendingToDistributionList()
    {
        return $this->confirmSendingToDistributionList;
    }

    /**
     * Setter for confirmSendingToDistributionList
     *
     * @ElementName confirmSendingToDistributionList
     * @param string|null $confirmSendingToDistributionList
     * @return $this
     */
    public function setConfirmSendingToDistributionList($confirmSendingToDistributionList)
    {
        $this->confirmSendingToDistributionList = $confirmSendingToDistributionList;
        return $this;
    }

    /**
     * Getter for cancelSendingToDistributionList
     *
     * @ElementName cancelSendingToDistributionList
     * @return string|null
     */
    public function getCancelSendingToDistributionList()
    {
        return $this->cancelSendingToDistributionList;
    }

    /**
     * Setter for cancelSendingToDistributionList
     *
     * @ElementName cancelSendingToDistributionList
     * @param string|null $cancelSendingToDistributionList
     * @return $this
     */
    public function setCancelSendingToDistributionList($cancelSendingToDistributionList)
    {
        $this->cancelSendingToDistributionList = $cancelSendingToDistributionList;
        return $this;
    }


}

