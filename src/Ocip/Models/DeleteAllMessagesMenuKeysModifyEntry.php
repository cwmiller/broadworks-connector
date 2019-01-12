<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * DeleteAllMessagesMenuKeysModifyEntry
 *
 * The voice portal delete all messages menu keys modify entry modify entry.
 *
 * @Groups [{"id":"3347d430e0d5c93a9ff8dcf0e3b60d6c:2499","type":"sequence"}]
 */
class DeleteAllMessagesMenuKeysModifyEntry
{

    /**
     * @ElementName confirmDeletion
     * @Type string
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:2499
     * @var string|null
     */
    private $confirmDeletion = null;

    /**
     * @ElementName cancelDeletion
     * @Type string
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:2499
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

