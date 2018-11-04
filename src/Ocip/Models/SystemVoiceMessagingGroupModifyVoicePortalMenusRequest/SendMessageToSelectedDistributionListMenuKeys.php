<?php

namespace CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest;

/**
 * SendMessageToSelectedDistributionListMenuKeys
 */
class SendMessageToSelectedDistributionListMenuKeys
{

    /**
     * @ElementName confirmSendingToDistributionList
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
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
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getConfirmSendingToDistributionList()
    {
        return $this->confirmSendingToDistributionList;
    }

    /**
     * Setter for confirmSendingToDistributionList
     *
     * @ElementName confirmSendingToDistributionList
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $confirmSendingToDistributionList
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

