<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemVoiceMessageSummaryUpdateGetResponse
 *
 * Response to SystemVoiceMessageSummaryUpdateGetRequest.
 *
 * @see SystemVoiceMessageSummaryUpdateGetRequest
 */
class SystemVoiceMessageSummaryUpdateGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName sendSavedAndUrgentMWIOnNotification
     * @Type bool
     * @var bool|null
     */
    private $sendSavedAndUrgentMWIOnNotification = null;

    /**
     * @ElementName sendMessageSummaryUpdateOnRegister
     * @Type bool
     * @var bool|null
     */
    private $sendMessageSummaryUpdateOnRegister = null;

    /**
     * @ElementName minTimeBetweenMWIOnRegister
     * @Type int
     * @var int|null
     */
    private $minTimeBetweenMWIOnRegister = null;

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

