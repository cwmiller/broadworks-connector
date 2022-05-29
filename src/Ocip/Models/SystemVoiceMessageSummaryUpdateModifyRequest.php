<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemVoiceMessageSummaryUpdateModifyRequest
 *
 * Modify the system level data associated with Voice Messaging.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"3347d430e0d5c93a9ff8dcf0e3b60d6c:568","type":"sequence"}]
 */
class SystemVoiceMessageSummaryUpdateModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName sendSavedAndUrgentMWIOnNotification
     * @Type bool
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:568
     * @var bool|null
     */
    protected $sendSavedAndUrgentMWIOnNotification = null;

    /**
     * @ElementName sendMessageSummaryUpdateOnRegister
     * @Type bool
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:568
     * @var bool|null
     */
    protected $sendMessageSummaryUpdateOnRegister = null;

    /**
     * @ElementName minTimeBetweenMWIOnRegister
     * @Type int
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:568
     * @MinInclusive 0
     * @MaxInclusive 86400
     * @var int|null
     */
    protected $minTimeBetweenMWIOnRegister = null;

    /**
     * Getter for sendSavedAndUrgentMWIOnNotification
     *
     * @return bool
     */
    public function getSendSavedAndUrgentMWIOnNotification()
    {
        return $this->sendSavedAndUrgentMWIOnNotification instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sendSavedAndUrgentMWIOnNotification;
    }

    /**
     * Setter for sendSavedAndUrgentMWIOnNotification
     *
     * @param bool $sendSavedAndUrgentMWIOnNotification
     * @return $this
     */
    public function setSendSavedAndUrgentMWIOnNotification($sendSavedAndUrgentMWIOnNotification)
    {
        $this->sendSavedAndUrgentMWIOnNotification = $sendSavedAndUrgentMWIOnNotification;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSendSavedAndUrgentMWIOnNotification()
    {
        $this->sendSavedAndUrgentMWIOnNotification = null;
        return $this;
    }

    /**
     * Getter for sendMessageSummaryUpdateOnRegister
     *
     * @return bool
     */
    public function getSendMessageSummaryUpdateOnRegister()
    {
        return $this->sendMessageSummaryUpdateOnRegister instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sendMessageSummaryUpdateOnRegister;
    }

    /**
     * Setter for sendMessageSummaryUpdateOnRegister
     *
     * @param bool $sendMessageSummaryUpdateOnRegister
     * @return $this
     */
    public function setSendMessageSummaryUpdateOnRegister($sendMessageSummaryUpdateOnRegister)
    {
        $this->sendMessageSummaryUpdateOnRegister = $sendMessageSummaryUpdateOnRegister;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSendMessageSummaryUpdateOnRegister()
    {
        $this->sendMessageSummaryUpdateOnRegister = null;
        return $this;
    }

    /**
     * Getter for minTimeBetweenMWIOnRegister
     *
     * @return int
     */
    public function getMinTimeBetweenMWIOnRegister()
    {
        return $this->minTimeBetweenMWIOnRegister instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->minTimeBetweenMWIOnRegister;
    }

    /**
     * Setter for minTimeBetweenMWIOnRegister
     *
     * @param int $minTimeBetweenMWIOnRegister
     * @return $this
     */
    public function setMinTimeBetweenMWIOnRegister($minTimeBetweenMWIOnRegister)
    {
        $this->minTimeBetweenMWIOnRegister = $minTimeBetweenMWIOnRegister;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMinTimeBetweenMWIOnRegister()
    {
        $this->minTimeBetweenMWIOnRegister = null;
        return $this;
    }


}

