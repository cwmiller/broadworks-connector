<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemVoiceMessageSummaryUpdateGetResponse25
 *
 * Response to SystemVoiceMessageSummaryUpdateGetRequest25.
 *
 * @see SystemVoiceMessageSummaryUpdateGetRequest25
 * @Groups [{"id":"1fea1222b6a78aa7b98fd5c41bdae113:549","type":"sequence"}]
 */
class SystemVoiceMessageSummaryUpdateGetResponse25 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName sendSavedAndUrgentMWIOnNotification
     * @Type bool
     * @Group 1fea1222b6a78aa7b98fd5c41bdae113:549
     * @var bool|null
     */
    protected $sendSavedAndUrgentMWIOnNotification = null;

    /**
     * @ElementName sendMessageSummaryUpdateOnRegister
     * @Type bool
     * @Group 1fea1222b6a78aa7b98fd5c41bdae113:549
     * @var bool|null
     */
    protected $sendMessageSummaryUpdateOnRegister = null;

    /**
     * @ElementName minTimeBetweenMWIOnRegister
     * @Type int
     * @Group 1fea1222b6a78aa7b98fd5c41bdae113:549
     * @MinInclusive 0
     * @MaxInclusive 86400
     * @var int|null
     */
    protected $minTimeBetweenMWIOnRegister = null;

    /**
     * @ElementName allowMultipleUsersPerAccount
     * @Type bool
     * @Group 1fea1222b6a78aa7b98fd5c41bdae113:549
     * @var bool|null
     */
    protected $allowMultipleUsersPerAccount = null;

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

    /**
     * Getter for allowMultipleUsersPerAccount
     *
     * @return bool
     */
    public function getAllowMultipleUsersPerAccount()
    {
        return $this->allowMultipleUsersPerAccount instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->allowMultipleUsersPerAccount;
    }

    /**
     * Setter for allowMultipleUsersPerAccount
     *
     * @param bool $allowMultipleUsersPerAccount
     * @return $this
     */
    public function setAllowMultipleUsersPerAccount($allowMultipleUsersPerAccount)
    {
        $this->allowMultipleUsersPerAccount = $allowMultipleUsersPerAccount;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAllowMultipleUsersPerAccount()
    {
        $this->allowMultipleUsersPerAccount = null;
        return $this;
    }
}

