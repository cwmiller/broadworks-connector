<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19SendToAllGroupMembersMenuKeys
 *
 * @Groups [{"id":"1fea1222b6a78aa7b98fd5c41bdae113:1553","type":"sequence"}]
 */
class SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19SendToAllGroupMembersMenuKeys
{
    /**
     * @ElementName confirmSendingToEntireGroup
     * @Type string
     * @Optional
     * @Group 1fea1222b6a78aa7b98fd5c41bdae113:1553
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    protected $confirmSendingToEntireGroup = null;

    /**
     * @ElementName cancelSendingToEntireGroup
     * @Type string
     * @Optional
     * @Group 1fea1222b6a78aa7b98fd5c41bdae113:1553
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    protected $cancelSendingToEntireGroup = null;

    /**
     * Getter for confirmSendingToEntireGroup
     *
     * @return string
     */
    public function getConfirmSendingToEntireGroup()
    {
        return $this->confirmSendingToEntireGroup instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->confirmSendingToEntireGroup;
    }

    /**
     * Setter for confirmSendingToEntireGroup
     *
     * @param string $confirmSendingToEntireGroup
     * @return $this
     */
    public function setConfirmSendingToEntireGroup($confirmSendingToEntireGroup)
    {
        $this->confirmSendingToEntireGroup = $confirmSendingToEntireGroup;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetConfirmSendingToEntireGroup()
    {
        $this->confirmSendingToEntireGroup = null;
        return $this;
    }

    /**
     * Getter for cancelSendingToEntireGroup
     *
     * @return string
     */
    public function getCancelSendingToEntireGroup()
    {
        return $this->cancelSendingToEntireGroup instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->cancelSendingToEntireGroup;
    }

    /**
     * Setter for cancelSendingToEntireGroup
     *
     * @param string $cancelSendingToEntireGroup
     * @return $this
     */
    public function setCancelSendingToEntireGroup($cancelSendingToEntireGroup)
    {
        $this->cancelSendingToEntireGroup = $cancelSendingToEntireGroup;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCancelSendingToEntireGroup()
    {
        $this->cancelSendingToEntireGroup = null;
        return $this;
    }
}

