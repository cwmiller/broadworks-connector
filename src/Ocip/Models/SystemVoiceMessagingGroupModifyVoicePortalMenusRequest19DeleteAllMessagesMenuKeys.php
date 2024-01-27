<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19DeleteAllMessagesMenuKeys
 *
 * @Groups [{"id":"1fea1222b6a78aa7b98fd5c41bdae113:1346","type":"sequence"}]
 */
class SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19DeleteAllMessagesMenuKeys
{
    /**
     * @ElementName confirmDeletion
     * @Type string
     * @Optional
     * @Group 1fea1222b6a78aa7b98fd5c41bdae113:1346
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    protected $confirmDeletion = null;

    /**
     * @ElementName cancelDeletion
     * @Type string
     * @Optional
     * @Group 1fea1222b6a78aa7b98fd5c41bdae113:1346
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    protected $cancelDeletion = null;

    /**
     * Getter for confirmDeletion
     *
     * @return string
     */
    public function getConfirmDeletion()
    {
        return $this->confirmDeletion instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->confirmDeletion;
    }

    /**
     * Setter for confirmDeletion
     *
     * @param string $confirmDeletion
     * @return $this
     */
    public function setConfirmDeletion($confirmDeletion)
    {
        $this->confirmDeletion = $confirmDeletion;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetConfirmDeletion()
    {
        $this->confirmDeletion = null;
        return $this;
    }

    /**
     * Getter for cancelDeletion
     *
     * @return string
     */
    public function getCancelDeletion()
    {
        return $this->cancelDeletion instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->cancelDeletion;
    }

    /**
     * Setter for cancelDeletion
     *
     * @param string $cancelDeletion
     * @return $this
     */
    public function setCancelDeletion($cancelDeletion)
    {
        $this->cancelDeletion = $cancelDeletion;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCancelDeletion()
    {
        $this->cancelDeletion = null;
        return $this;
    }
}

