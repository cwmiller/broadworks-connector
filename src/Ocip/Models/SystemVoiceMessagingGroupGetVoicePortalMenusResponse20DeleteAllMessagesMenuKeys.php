<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemVoiceMessagingGroupGetVoicePortalMenusResponse20DeleteAllMessagesMenuKeys
 *
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:34048","type":"sequence"}]
 */
class SystemVoiceMessagingGroupGetVoicePortalMenusResponse20DeleteAllMessagesMenuKeys
{

    /**
     * @ElementName confirmDeletion
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:34048
     * @var string|null
     */
    private $confirmDeletion = null;

    /**
     * @ElementName cancelDeletion
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:34048
     * @var string|null
     */
    private $cancelDeletion = null;

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

