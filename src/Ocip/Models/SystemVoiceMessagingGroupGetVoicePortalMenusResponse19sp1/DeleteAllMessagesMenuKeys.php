<?php

namespace CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1;

/**
 * DeleteAllMessagesMenuKeys
 */
class DeleteAllMessagesMenuKeys
{

    /**
     * @ElementName confirmDeletion
     * @var string|null
     */
    private $confirmDeletion = null;

    /**
     * @ElementName cancelDeletion
     * @var string|null
     */
    private $cancelDeletion = null;

    /**
     * Getter for confirmDeletion
     *
     * @ElementName confirmDeletion
     * @return string|null
     */
    public function getConfirmDeletion()
    {
        return $this->confirmDeletion;
    }

    /**
     * Setter for confirmDeletion
     *
     * @ElementName confirmDeletion
     * @param string|null $confirmDeletion
     * @return $this
     */
    public function setConfirmDeletion($confirmDeletion)
    {
        $this->confirmDeletion = $confirmDeletion;
        return $this;
    }

    /**
     * Getter for cancelDeletion
     *
     * @ElementName cancelDeletion
     * @return string|null
     */
    public function getCancelDeletion()
    {
        return $this->cancelDeletion;
    }

    /**
     * Setter for cancelDeletion
     *
     * @ElementName cancelDeletion
     * @param string|null $cancelDeletion
     * @return $this
     */
    public function setCancelDeletion($cancelDeletion)
    {
        $this->cancelDeletion = $cancelDeletion;
        return $this;
    }


}

