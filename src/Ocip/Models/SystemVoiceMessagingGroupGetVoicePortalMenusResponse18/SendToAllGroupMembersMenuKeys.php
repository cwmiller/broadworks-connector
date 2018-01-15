<?php

namespace CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse18;

/**
 * SendToAllGroupMembersMenuKeys
 */
class SendToAllGroupMembersMenuKeys
{

    /**
     * @ElementName confirmSendingToEntireGroup
     * @var string|null
     */
    private $confirmSendingToEntireGroup = null;

    /**
     * @ElementName cancelSendingToEntireGroup
     * @var string|null
     */
    private $cancelSendingToEntireGroup = null;

    /**
     * Getter for confirmSendingToEntireGroup
     *
     * @ElementName confirmSendingToEntireGroup
     * @return string|null
     */
    public function getConfirmSendingToEntireGroup()
    {
        return $this->confirmSendingToEntireGroup;
    }

    /**
     * Setter for confirmSendingToEntireGroup
     *
     * @ElementName confirmSendingToEntireGroup
     * @param string|null $confirmSendingToEntireGroup
     * @return $this
     */
    public function setConfirmSendingToEntireGroup($confirmSendingToEntireGroup)
    {
        $this->confirmSendingToEntireGroup = $confirmSendingToEntireGroup;
        return $this;
    }

    /**
     * Getter for cancelSendingToEntireGroup
     *
     * @ElementName cancelSendingToEntireGroup
     * @return string|null
     */
    public function getCancelSendingToEntireGroup()
    {
        return $this->cancelSendingToEntireGroup;
    }

    /**
     * Setter for cancelSendingToEntireGroup
     *
     * @ElementName cancelSendingToEntireGroup
     * @param string|null $cancelSendingToEntireGroup
     * @return $this
     */
    public function setCancelSendingToEntireGroup($cancelSendingToEntireGroup)
    {
        $this->cancelSendingToEntireGroup = $cancelSendingToEntireGroup;
        return $this;
    }


}

