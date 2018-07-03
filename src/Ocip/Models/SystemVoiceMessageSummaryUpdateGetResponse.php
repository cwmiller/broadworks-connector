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
     * @var bool|null
     */
    private $sendSavedAndUrgentMWIOnNotification = null;

    /**
     * @ElementName sendMessageSummaryUpdateOnRegister
     * @var bool|null
     */
    private $sendMessageSummaryUpdateOnRegister = null;

    /**
     * @ElementName minTimeBetweenMWIOnRegister
     * @var int|null
     */
    private $minTimeBetweenMWIOnRegister = null;

    /**
     * Getter for sendSavedAndUrgentMWIOnNotification
     *
     * @ElementName sendSavedAndUrgentMWIOnNotification
     * @return bool|null
     */
    public function getSendSavedAndUrgentMWIOnNotification()
    {
        return $this->sendSavedAndUrgentMWIOnNotification;
    }

    /**
     * Setter for sendSavedAndUrgentMWIOnNotification
     *
     * @ElementName sendSavedAndUrgentMWIOnNotification
     * @param bool|null $sendSavedAndUrgentMWIOnNotification
     * @return $this
     */
    public function setSendSavedAndUrgentMWIOnNotification($sendSavedAndUrgentMWIOnNotification)
    {
        $this->sendSavedAndUrgentMWIOnNotification = $sendSavedAndUrgentMWIOnNotification;
        return $this;
    }

    /**
     * Getter for sendMessageSummaryUpdateOnRegister
     *
     * @ElementName sendMessageSummaryUpdateOnRegister
     * @return bool|null
     */
    public function getSendMessageSummaryUpdateOnRegister()
    {
        return $this->sendMessageSummaryUpdateOnRegister;
    }

    /**
     * Setter for sendMessageSummaryUpdateOnRegister
     *
     * @ElementName sendMessageSummaryUpdateOnRegister
     * @param bool|null $sendMessageSummaryUpdateOnRegister
     * @return $this
     */
    public function setSendMessageSummaryUpdateOnRegister($sendMessageSummaryUpdateOnRegister)
    {
        $this->sendMessageSummaryUpdateOnRegister = $sendMessageSummaryUpdateOnRegister;
        return $this;
    }

    /**
     * Getter for minTimeBetweenMWIOnRegister
     *
     * @ElementName minTimeBetweenMWIOnRegister
     * @return int|null
     */
    public function getMinTimeBetweenMWIOnRegister()
    {
        return $this->minTimeBetweenMWIOnRegister;
    }

    /**
     * Setter for minTimeBetweenMWIOnRegister
     *
     * @ElementName minTimeBetweenMWIOnRegister
     * @param int|null $minTimeBetweenMWIOnRegister
     * @return $this
     */
    public function setMinTimeBetweenMWIOnRegister($minTimeBetweenMWIOnRegister)
    {
        $this->minTimeBetweenMWIOnRegister = $minTimeBetweenMWIOnRegister;
        return $this;
    }


}

