<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemVoiceMessagingGroupGetVoicePortalMenusResponse19SendToPersonMenuKeys
 *
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:37751","type":"sequence"}]
 */
class SystemVoiceMessagingGroupGetVoicePortalMenusResponse19SendToPersonMenuKeys
{

    /**
     * @ElementName confirmSendingMessage
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:37751
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    protected $confirmSendingMessage = null;

    /**
     * @ElementName cancelSendingMessage
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:37751
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    protected $cancelSendingMessage = null;

    /**
     * @ElementName finishEnteringNumberWhereToSendMessageTo
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:37751
     * @Length 1
     * @Pattern \*|#
     * @var string|null
     */
    protected $finishEnteringNumberWhereToSendMessageTo = null;

    /**
     * @ElementName finishForwardingOrSendingMessage
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:37751
     * @Length 1
     * @Pattern [0-9]|\*|#
     * @var string|null
     */
    protected $finishForwardingOrSendingMessage = null;

    /**
     * Getter for confirmSendingMessage
     *
     * @return string
     */
    public function getConfirmSendingMessage()
    {
        return $this->confirmSendingMessage instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->confirmSendingMessage;
    }

    /**
     * Setter for confirmSendingMessage
     *
     * @param string $confirmSendingMessage
     * @return $this
     */
    public function setConfirmSendingMessage($confirmSendingMessage)
    {
        $this->confirmSendingMessage = $confirmSendingMessage;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetConfirmSendingMessage()
    {
        $this->confirmSendingMessage = null;
        return $this;
    }

    /**
     * Getter for cancelSendingMessage
     *
     * @return string
     */
    public function getCancelSendingMessage()
    {
        return $this->cancelSendingMessage instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->cancelSendingMessage;
    }

    /**
     * Setter for cancelSendingMessage
     *
     * @param string $cancelSendingMessage
     * @return $this
     */
    public function setCancelSendingMessage($cancelSendingMessage)
    {
        $this->cancelSendingMessage = $cancelSendingMessage;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCancelSendingMessage()
    {
        $this->cancelSendingMessage = null;
        return $this;
    }

    /**
     * Getter for finishEnteringNumberWhereToSendMessageTo
     *
     * @return string
     */
    public function getFinishEnteringNumberWhereToSendMessageTo()
    {
        return $this->finishEnteringNumberWhereToSendMessageTo instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->finishEnteringNumberWhereToSendMessageTo;
    }

    /**
     * Setter for finishEnteringNumberWhereToSendMessageTo
     *
     * @param string $finishEnteringNumberWhereToSendMessageTo
     * @return $this
     */
    public function setFinishEnteringNumberWhereToSendMessageTo($finishEnteringNumberWhereToSendMessageTo)
    {
        $this->finishEnteringNumberWhereToSendMessageTo = $finishEnteringNumberWhereToSendMessageTo;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetFinishEnteringNumberWhereToSendMessageTo()
    {
        $this->finishEnteringNumberWhereToSendMessageTo = null;
        return $this;
    }

    /**
     * Getter for finishForwardingOrSendingMessage
     *
     * @return string
     */
    public function getFinishForwardingOrSendingMessage()
    {
        return $this->finishForwardingOrSendingMessage instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->finishForwardingOrSendingMessage;
    }

    /**
     * Setter for finishForwardingOrSendingMessage
     *
     * @param string $finishForwardingOrSendingMessage
     * @return $this
     */
    public function setFinishForwardingOrSendingMessage($finishForwardingOrSendingMessage)
    {
        $this->finishForwardingOrSendingMessage = $finishForwardingOrSendingMessage;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetFinishForwardingOrSendingMessage()
    {
        $this->finishForwardingOrSendingMessage = null;
        return $this;
    }


}

