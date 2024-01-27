<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemVoiceMessageSummaryUpdateGetResponse
 *
 * Response to SystemVoiceMessageSummaryUpdateGetRequest.
 *         
 *         Replaced By: SystemVoiceMessageSummaryUpdateGetResponse25
 *
 * @see SystemVoiceMessageSummaryUpdateGetRequest
 * @see SystemVoiceMessageSummaryUpdateGetResponse25
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:36770","type":"sequence"}]
 */
class SystemVoiceMessageSummaryUpdateGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName sendSavedAndUrgentMWIOnNotification
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:36770
     * @var bool|null
     */
    protected $sendSavedAndUrgentMWIOnNotification = null;

    /**
     * @ElementName sendMessageSummaryUpdateOnRegister
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:36770
     * @var bool|null
     */
    protected $sendMessageSummaryUpdateOnRegister = null;

    /**
     * @ElementName minTimeBetweenMWIOnRegister
     * @Type int
     * @Group d8f04177e438f303b41c211e518706bf:36770
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

