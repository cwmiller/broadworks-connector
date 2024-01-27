<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserVoiceMessagingUserGetVoiceManagementResponse13mp8
 *
 * Response to the UserVoiceMessagingUserGetVoiceManagementRequest13mp8.
 *         Replaced by: UserVoiceMessagingUserGetVoiceManagementResponse17
 *
 * @see UserVoiceMessagingUserGetVoiceManagementRequest13mp8
 * @see UserVoiceMessagingUserGetVoiceManagementResponse17
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:47988","type":"sequence"}]
 */
class UserVoiceMessagingUserGetVoiceManagementResponse13mp8 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName isActive
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:47988
     * @var bool|null
     */
    protected $isActive = null;

    /**
     * @ElementName processing
     * @Type \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingMessageProcessing
     * @Group d8f04177e438f303b41c211e518706bf:47988
     * @var \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingMessageProcessing|null
     */
    protected $processing = null;

    /**
     * @ElementName voiceMessageDeliveryEmailAddress
     * @Type string
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:47988
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $voiceMessageDeliveryEmailAddress = null;

    /**
     * @ElementName usePhoneMessageWaitingIndicator
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:47988
     * @var bool|null
     */
    protected $usePhoneMessageWaitingIndicator = null;

    /**
     * @ElementName sendVoiceMessageNotifyEmail
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:47988
     * @var bool|null
     */
    protected $sendVoiceMessageNotifyEmail = null;

    /**
     * @ElementName voiceMessageNotifyEmailAddress
     * @Type string
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:47988
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $voiceMessageNotifyEmailAddress = null;

    /**
     * @ElementName sendCarbonCopyVoiceMessage
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:47988
     * @var bool|null
     */
    protected $sendCarbonCopyVoiceMessage = null;

    /**
     * @ElementName voiceMessageCarbonCopyEmailAddress
     * @Type string
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:47988
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $voiceMessageCarbonCopyEmailAddress = null;

    /**
     * @ElementName transferOnZeroToPhoneNumber
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:47988
     * @var bool|null
     */
    protected $transferOnZeroToPhoneNumber = null;

    /**
     * @ElementName transferPhoneNumber
     * @Type string
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:47988
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $transferPhoneNumber = null;

    /**
     * @ElementName alwaysRedirectToVoiceMail
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:47988
     * @var bool|null
     */
    protected $alwaysRedirectToVoiceMail = null;

    /**
     * @ElementName busyRedirectToVoiceMail
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:47988
     * @var bool|null
     */
    protected $busyRedirectToVoiceMail = null;

    /**
     * @ElementName noAnswerRedirectToVoiceMail
     * @Type bool
     * @Group d8f04177e438f303b41c211e518706bf:47988
     * @var bool|null
     */
    protected $noAnswerRedirectToVoiceMail = null;

    /**
     * Getter for isActive
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->isActive instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isActive;
    }

    /**
     * Setter for isActive
     *
     * @param bool $isActive
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsActive()
    {
        $this->isActive = null;
        return $this;
    }

    /**
     * Getter for processing
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingMessageProcessing
     */
    public function getProcessing()
    {
        return $this->processing instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->processing;
    }

    /**
     * Setter for processing
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingMessageProcessing $processing
     * @return $this
     */
    public function setProcessing(\CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingMessageProcessing $processing)
    {
        $this->processing = $processing;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetProcessing()
    {
        $this->processing = null;
        return $this;
    }

    /**
     * Getter for voiceMessageDeliveryEmailAddress
     *
     * @return string
     */
    public function getVoiceMessageDeliveryEmailAddress()
    {
        return $this->voiceMessageDeliveryEmailAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->voiceMessageDeliveryEmailAddress;
    }

    /**
     * Setter for voiceMessageDeliveryEmailAddress
     *
     * @param string $voiceMessageDeliveryEmailAddress
     * @return $this
     */
    public function setVoiceMessageDeliveryEmailAddress($voiceMessageDeliveryEmailAddress)
    {
        $this->voiceMessageDeliveryEmailAddress = $voiceMessageDeliveryEmailAddress;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetVoiceMessageDeliveryEmailAddress()
    {
        $this->voiceMessageDeliveryEmailAddress = null;
        return $this;
    }

    /**
     * Getter for usePhoneMessageWaitingIndicator
     *
     * @return bool
     */
    public function getUsePhoneMessageWaitingIndicator()
    {
        return $this->usePhoneMessageWaitingIndicator instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->usePhoneMessageWaitingIndicator;
    }

    /**
     * Setter for usePhoneMessageWaitingIndicator
     *
     * @param bool $usePhoneMessageWaitingIndicator
     * @return $this
     */
    public function setUsePhoneMessageWaitingIndicator($usePhoneMessageWaitingIndicator)
    {
        $this->usePhoneMessageWaitingIndicator = $usePhoneMessageWaitingIndicator;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUsePhoneMessageWaitingIndicator()
    {
        $this->usePhoneMessageWaitingIndicator = null;
        return $this;
    }

    /**
     * Getter for sendVoiceMessageNotifyEmail
     *
     * @return bool
     */
    public function getSendVoiceMessageNotifyEmail()
    {
        return $this->sendVoiceMessageNotifyEmail instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sendVoiceMessageNotifyEmail;
    }

    /**
     * Setter for sendVoiceMessageNotifyEmail
     *
     * @param bool $sendVoiceMessageNotifyEmail
     * @return $this
     */
    public function setSendVoiceMessageNotifyEmail($sendVoiceMessageNotifyEmail)
    {
        $this->sendVoiceMessageNotifyEmail = $sendVoiceMessageNotifyEmail;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSendVoiceMessageNotifyEmail()
    {
        $this->sendVoiceMessageNotifyEmail = null;
        return $this;
    }

    /**
     * Getter for voiceMessageNotifyEmailAddress
     *
     * @return string
     */
    public function getVoiceMessageNotifyEmailAddress()
    {
        return $this->voiceMessageNotifyEmailAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->voiceMessageNotifyEmailAddress;
    }

    /**
     * Setter for voiceMessageNotifyEmailAddress
     *
     * @param string $voiceMessageNotifyEmailAddress
     * @return $this
     */
    public function setVoiceMessageNotifyEmailAddress($voiceMessageNotifyEmailAddress)
    {
        $this->voiceMessageNotifyEmailAddress = $voiceMessageNotifyEmailAddress;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetVoiceMessageNotifyEmailAddress()
    {
        $this->voiceMessageNotifyEmailAddress = null;
        return $this;
    }

    /**
     * Getter for sendCarbonCopyVoiceMessage
     *
     * @return bool
     */
    public function getSendCarbonCopyVoiceMessage()
    {
        return $this->sendCarbonCopyVoiceMessage instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sendCarbonCopyVoiceMessage;
    }

    /**
     * Setter for sendCarbonCopyVoiceMessage
     *
     * @param bool $sendCarbonCopyVoiceMessage
     * @return $this
     */
    public function setSendCarbonCopyVoiceMessage($sendCarbonCopyVoiceMessage)
    {
        $this->sendCarbonCopyVoiceMessage = $sendCarbonCopyVoiceMessage;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSendCarbonCopyVoiceMessage()
    {
        $this->sendCarbonCopyVoiceMessage = null;
        return $this;
    }

    /**
     * Getter for voiceMessageCarbonCopyEmailAddress
     *
     * @return string
     */
    public function getVoiceMessageCarbonCopyEmailAddress()
    {
        return $this->voiceMessageCarbonCopyEmailAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->voiceMessageCarbonCopyEmailAddress;
    }

    /**
     * Setter for voiceMessageCarbonCopyEmailAddress
     *
     * @param string $voiceMessageCarbonCopyEmailAddress
     * @return $this
     */
    public function setVoiceMessageCarbonCopyEmailAddress($voiceMessageCarbonCopyEmailAddress)
    {
        $this->voiceMessageCarbonCopyEmailAddress = $voiceMessageCarbonCopyEmailAddress;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetVoiceMessageCarbonCopyEmailAddress()
    {
        $this->voiceMessageCarbonCopyEmailAddress = null;
        return $this;
    }

    /**
     * Getter for transferOnZeroToPhoneNumber
     *
     * @return bool
     */
    public function getTransferOnZeroToPhoneNumber()
    {
        return $this->transferOnZeroToPhoneNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->transferOnZeroToPhoneNumber;
    }

    /**
     * Setter for transferOnZeroToPhoneNumber
     *
     * @param bool $transferOnZeroToPhoneNumber
     * @return $this
     */
    public function setTransferOnZeroToPhoneNumber($transferOnZeroToPhoneNumber)
    {
        $this->transferOnZeroToPhoneNumber = $transferOnZeroToPhoneNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTransferOnZeroToPhoneNumber()
    {
        $this->transferOnZeroToPhoneNumber = null;
        return $this;
    }

    /**
     * Getter for transferPhoneNumber
     *
     * @return string
     */
    public function getTransferPhoneNumber()
    {
        return $this->transferPhoneNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->transferPhoneNumber;
    }

    /**
     * Setter for transferPhoneNumber
     *
     * @param string $transferPhoneNumber
     * @return $this
     */
    public function setTransferPhoneNumber($transferPhoneNumber)
    {
        $this->transferPhoneNumber = $transferPhoneNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTransferPhoneNumber()
    {
        $this->transferPhoneNumber = null;
        return $this;
    }

    /**
     * Getter for alwaysRedirectToVoiceMail
     *
     * @return bool
     */
    public function getAlwaysRedirectToVoiceMail()
    {
        return $this->alwaysRedirectToVoiceMail instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->alwaysRedirectToVoiceMail;
    }

    /**
     * Setter for alwaysRedirectToVoiceMail
     *
     * @param bool $alwaysRedirectToVoiceMail
     * @return $this
     */
    public function setAlwaysRedirectToVoiceMail($alwaysRedirectToVoiceMail)
    {
        $this->alwaysRedirectToVoiceMail = $alwaysRedirectToVoiceMail;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAlwaysRedirectToVoiceMail()
    {
        $this->alwaysRedirectToVoiceMail = null;
        return $this;
    }

    /**
     * Getter for busyRedirectToVoiceMail
     *
     * @return bool
     */
    public function getBusyRedirectToVoiceMail()
    {
        return $this->busyRedirectToVoiceMail instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->busyRedirectToVoiceMail;
    }

    /**
     * Setter for busyRedirectToVoiceMail
     *
     * @param bool $busyRedirectToVoiceMail
     * @return $this
     */
    public function setBusyRedirectToVoiceMail($busyRedirectToVoiceMail)
    {
        $this->busyRedirectToVoiceMail = $busyRedirectToVoiceMail;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetBusyRedirectToVoiceMail()
    {
        $this->busyRedirectToVoiceMail = null;
        return $this;
    }

    /**
     * Getter for noAnswerRedirectToVoiceMail
     *
     * @return bool
     */
    public function getNoAnswerRedirectToVoiceMail()
    {
        return $this->noAnswerRedirectToVoiceMail instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->noAnswerRedirectToVoiceMail;
    }

    /**
     * Setter for noAnswerRedirectToVoiceMail
     *
     * @param bool $noAnswerRedirectToVoiceMail
     * @return $this
     */
    public function setNoAnswerRedirectToVoiceMail($noAnswerRedirectToVoiceMail)
    {
        $this->noAnswerRedirectToVoiceMail = $noAnswerRedirectToVoiceMail;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNoAnswerRedirectToVoiceMail()
    {
        $this->noAnswerRedirectToVoiceMail = null;
        return $this;
    }
}

