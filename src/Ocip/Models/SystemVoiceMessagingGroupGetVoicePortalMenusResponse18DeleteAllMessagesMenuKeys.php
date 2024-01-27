<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemVoiceMessagingGroupGetVoicePortalMenusResponse18DeleteAllMessagesMenuKeys
 *
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:37512","type":"sequence"}]
 */
class SystemVoiceMessagingGroupGetVoicePortalMenusResponse18DeleteAllMessagesMenuKeys
{
    /**
     * @ElementName confirmDeletion
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:37512
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    protected $confirmDeletion = null;

    /**
     * @ElementName cancelDeletion
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:37512
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

