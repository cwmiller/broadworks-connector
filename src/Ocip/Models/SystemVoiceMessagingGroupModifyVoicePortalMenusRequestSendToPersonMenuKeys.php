<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemVoiceMessagingGroupModifyVoicePortalMenusRequestSendToPersonMenuKeys
 */
class SystemVoiceMessagingGroupModifyVoicePortalMenusRequestSendToPersonMenuKeys
{

    /**
     * @ElementName confirmSendingMessage
     * @var string|null
     */
    private $confirmSendingMessage = null;

    /**
     * @ElementName cancelSendingMessage
     * @var string|null
     */
    private $cancelSendingMessage = null;

    /**
     * @ElementName finishEnteringNumberWhereToSendMessageTo
     * @var string|null
     */
    private $finishEnteringNumberWhereToSendMessageTo = null;

    /**
     * @ElementName finishForwardingOrSendingMessage
     * @var string|null
     */
    private $finishForwardingOrSendingMessage = null;

    /**
     * Getter for confirmSendingMessage
     *
     * @ElementName confirmSendingMessage
     * @return string|null
     */
    public function getConfirmSendingMessage()
    {
        return $this->confirmSendingMessage;
    }

    /**
     * Setter for confirmSendingMessage
     *
     * @ElementName confirmSendingMessage
     * @param string|null $confirmSendingMessage
     * @return $this
     */
    public function setConfirmSendingMessage($confirmSendingMessage)
    {
        $this->confirmSendingMessage = $confirmSendingMessage;
        return $this;
    }

    /**
     * Getter for cancelSendingMessage
     *
     * @ElementName cancelSendingMessage
     * @return string|null
     */
    public function getCancelSendingMessage()
    {
        return $this->cancelSendingMessage;
    }

    /**
     * Setter for cancelSendingMessage
     *
     * @ElementName cancelSendingMessage
     * @param string|null $cancelSendingMessage
     * @return $this
     */
    public function setCancelSendingMessage($cancelSendingMessage)
    {
        $this->cancelSendingMessage = $cancelSendingMessage;
        return $this;
    }

    /**
     * Getter for finishEnteringNumberWhereToSendMessageTo
     *
     * @ElementName finishEnteringNumberWhereToSendMessageTo
     * @return string|null
     */
    public function getFinishEnteringNumberWhereToSendMessageTo()
    {
        return $this->finishEnteringNumberWhereToSendMessageTo;
    }

    /**
     * Setter for finishEnteringNumberWhereToSendMessageTo
     *
     * @ElementName finishEnteringNumberWhereToSendMessageTo
     * @param string|null $finishEnteringNumberWhereToSendMessageTo
     * @return $this
     */
    public function setFinishEnteringNumberWhereToSendMessageTo($finishEnteringNumberWhereToSendMessageTo)
    {
        $this->finishEnteringNumberWhereToSendMessageTo = $finishEnteringNumberWhereToSendMessageTo;
        return $this;
    }

    /**
     * Getter for finishForwardingOrSendingMessage
     *
     * @ElementName finishForwardingOrSendingMessage
     * @return string|null
     */
    public function getFinishForwardingOrSendingMessage()
    {
        return $this->finishForwardingOrSendingMessage;
    }

    /**
     * Setter for finishForwardingOrSendingMessage
     *
     * @ElementName finishForwardingOrSendingMessage
     * @param string|null $finishForwardingOrSendingMessage
     * @return $this
     */
    public function setFinishForwardingOrSendingMessage($finishForwardingOrSendingMessage)
    {
        $this->finishForwardingOrSendingMessage = $finishForwardingOrSendingMessage;
        return $this;
    }


}

