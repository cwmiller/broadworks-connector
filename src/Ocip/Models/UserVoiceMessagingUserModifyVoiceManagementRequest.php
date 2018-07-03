<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserVoiceMessagingUserModifyVoiceManagementRequest
 *
 * Modify the user's voice messaging voice management service setting.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class UserVoiceMessagingUserModifyVoiceManagementRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName isActive
     * @var bool|null
     */
    private $isActive = null;

    /**
     * @ElementName processing
     * @var string|null
     */
    private $processing = null;

    /**
     * @ElementName voiceMessageDeliveryEmailAddress
     * @var string|null
     */
    private $voiceMessageDeliveryEmailAddress = null;

    /**
     * @ElementName usePhoneMessageWaitingIndicator
     * @var bool|null
     */
    private $usePhoneMessageWaitingIndicator = null;

    /**
     * @ElementName sendVoiceMessageNotifyEmail
     * @var bool|null
     */
    private $sendVoiceMessageNotifyEmail = null;

    /**
     * @ElementName voiceMessageNotifyEmailAddress
     * @var string|null
     */
    private $voiceMessageNotifyEmailAddress = null;

    /**
     * @ElementName sendCarbonCopyVoiceMessage
     * @var bool|null
     */
    private $sendCarbonCopyVoiceMessage = null;

    /**
     * @ElementName voiceMessageCarbonCopyEmailAddress
     * @var string|null
     */
    private $voiceMessageCarbonCopyEmailAddress = null;

    /**
     * @ElementName transferOnZeroToPhoneNumber
     * @var bool|null
     */
    private $transferOnZeroToPhoneNumber = null;

    /**
     * @ElementName transferPhoneNumber
     * @var string|null
     */
    private $transferPhoneNumber = null;

    /**
     * @ElementName alwaysRedirectToVoiceMail
     * @var bool|null
     */
    private $alwaysRedirectToVoiceMail = null;

    /**
     * @ElementName busyRedirectToVoiceMail
     * @var bool|null
     */
    private $busyRedirectToVoiceMail = null;

    /**
     * @ElementName noAnswerRedirectToVoiceMail
     * @var bool|null
     */
    private $noAnswerRedirectToVoiceMail = null;

    /**
     * @ElementName outOfPrimaryZoneRedirectToVoiceMail
     * @var bool|null
     */
    private $outOfPrimaryZoneRedirectToVoiceMail = null;

    /**
     * Getter for userId
     *
     * @ElementName userId
     * @return string|null
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Setter for userId
     *
     * @ElementName userId
     * @param string|null $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * Getter for isActive
     *
     * @ElementName isActive
     * @return bool|null
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Setter for isActive
     *
     * @ElementName isActive
     * @param bool|null $isActive
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        return $this;
    }

    /**
     * Getter for processing
     *
     * @ElementName processing
     * @return string|null
     */
    public function getProcessing()
    {
        return $this->processing;
    }

    /**
     * Setter for processing
     *
     * @ElementName processing
     * @param string|null $processing
     * @return $this
     */
    public function setProcessing($processing)
    {
        $this->processing = $processing;
        return $this;
    }

    /**
     * Getter for voiceMessageDeliveryEmailAddress
     *
     * @ElementName voiceMessageDeliveryEmailAddress
     * @return string|null
     */
    public function getVoiceMessageDeliveryEmailAddress()
    {
        return $this->voiceMessageDeliveryEmailAddress;
    }

    /**
     * Setter for voiceMessageDeliveryEmailAddress
     *
     * @ElementName voiceMessageDeliveryEmailAddress
     * @param string|null $voiceMessageDeliveryEmailAddress
     * @return $this
     */
    public function setVoiceMessageDeliveryEmailAddress($voiceMessageDeliveryEmailAddress)
    {
        $this->voiceMessageDeliveryEmailAddress = $voiceMessageDeliveryEmailAddress;
        return $this;
    }

    /**
     * Getter for usePhoneMessageWaitingIndicator
     *
     * @ElementName usePhoneMessageWaitingIndicator
     * @return bool|null
     */
    public function getUsePhoneMessageWaitingIndicator()
    {
        return $this->usePhoneMessageWaitingIndicator;
    }

    /**
     * Setter for usePhoneMessageWaitingIndicator
     *
     * @ElementName usePhoneMessageWaitingIndicator
     * @param bool|null $usePhoneMessageWaitingIndicator
     * @return $this
     */
    public function setUsePhoneMessageWaitingIndicator($usePhoneMessageWaitingIndicator)
    {
        $this->usePhoneMessageWaitingIndicator = $usePhoneMessageWaitingIndicator;
        return $this;
    }

    /**
     * Getter for sendVoiceMessageNotifyEmail
     *
     * @ElementName sendVoiceMessageNotifyEmail
     * @return bool|null
     */
    public function getSendVoiceMessageNotifyEmail()
    {
        return $this->sendVoiceMessageNotifyEmail;
    }

    /**
     * Setter for sendVoiceMessageNotifyEmail
     *
     * @ElementName sendVoiceMessageNotifyEmail
     * @param bool|null $sendVoiceMessageNotifyEmail
     * @return $this
     */
    public function setSendVoiceMessageNotifyEmail($sendVoiceMessageNotifyEmail)
    {
        $this->sendVoiceMessageNotifyEmail = $sendVoiceMessageNotifyEmail;
        return $this;
    }

    /**
     * Getter for voiceMessageNotifyEmailAddress
     *
     * @ElementName voiceMessageNotifyEmailAddress
     * @return string|null
     */
    public function getVoiceMessageNotifyEmailAddress()
    {
        return $this->voiceMessageNotifyEmailAddress;
    }

    /**
     * Setter for voiceMessageNotifyEmailAddress
     *
     * @ElementName voiceMessageNotifyEmailAddress
     * @param string|null $voiceMessageNotifyEmailAddress
     * @return $this
     */
    public function setVoiceMessageNotifyEmailAddress($voiceMessageNotifyEmailAddress)
    {
        $this->voiceMessageNotifyEmailAddress = $voiceMessageNotifyEmailAddress;
        return $this;
    }

    /**
     * Getter for sendCarbonCopyVoiceMessage
     *
     * @ElementName sendCarbonCopyVoiceMessage
     * @return bool|null
     */
    public function getSendCarbonCopyVoiceMessage()
    {
        return $this->sendCarbonCopyVoiceMessage;
    }

    /**
     * Setter for sendCarbonCopyVoiceMessage
     *
     * @ElementName sendCarbonCopyVoiceMessage
     * @param bool|null $sendCarbonCopyVoiceMessage
     * @return $this
     */
    public function setSendCarbonCopyVoiceMessage($sendCarbonCopyVoiceMessage)
    {
        $this->sendCarbonCopyVoiceMessage = $sendCarbonCopyVoiceMessage;
        return $this;
    }

    /**
     * Getter for voiceMessageCarbonCopyEmailAddress
     *
     * @ElementName voiceMessageCarbonCopyEmailAddress
     * @return string|null
     */
    public function getVoiceMessageCarbonCopyEmailAddress()
    {
        return $this->voiceMessageCarbonCopyEmailAddress;
    }

    /**
     * Setter for voiceMessageCarbonCopyEmailAddress
     *
     * @ElementName voiceMessageCarbonCopyEmailAddress
     * @param string|null $voiceMessageCarbonCopyEmailAddress
     * @return $this
     */
    public function setVoiceMessageCarbonCopyEmailAddress($voiceMessageCarbonCopyEmailAddress)
    {
        $this->voiceMessageCarbonCopyEmailAddress = $voiceMessageCarbonCopyEmailAddress;
        return $this;
    }

    /**
     * Getter for transferOnZeroToPhoneNumber
     *
     * @ElementName transferOnZeroToPhoneNumber
     * @return bool|null
     */
    public function getTransferOnZeroToPhoneNumber()
    {
        return $this->transferOnZeroToPhoneNumber;
    }

    /**
     * Setter for transferOnZeroToPhoneNumber
     *
     * @ElementName transferOnZeroToPhoneNumber
     * @param bool|null $transferOnZeroToPhoneNumber
     * @return $this
     */
    public function setTransferOnZeroToPhoneNumber($transferOnZeroToPhoneNumber)
    {
        $this->transferOnZeroToPhoneNumber = $transferOnZeroToPhoneNumber;
        return $this;
    }

    /**
     * Getter for transferPhoneNumber
     *
     * @ElementName transferPhoneNumber
     * @return string|null
     */
    public function getTransferPhoneNumber()
    {
        return $this->transferPhoneNumber;
    }

    /**
     * Setter for transferPhoneNumber
     *
     * @ElementName transferPhoneNumber
     * @param string|null $transferPhoneNumber
     * @return $this
     */
    public function setTransferPhoneNumber($transferPhoneNumber)
    {
        $this->transferPhoneNumber = $transferPhoneNumber;
        return $this;
    }

    /**
     * Getter for alwaysRedirectToVoiceMail
     *
     * @ElementName alwaysRedirectToVoiceMail
     * @return bool|null
     */
    public function getAlwaysRedirectToVoiceMail()
    {
        return $this->alwaysRedirectToVoiceMail;
    }

    /**
     * Setter for alwaysRedirectToVoiceMail
     *
     * @ElementName alwaysRedirectToVoiceMail
     * @param bool|null $alwaysRedirectToVoiceMail
     * @return $this
     */
    public function setAlwaysRedirectToVoiceMail($alwaysRedirectToVoiceMail)
    {
        $this->alwaysRedirectToVoiceMail = $alwaysRedirectToVoiceMail;
        return $this;
    }

    /**
     * Getter for busyRedirectToVoiceMail
     *
     * @ElementName busyRedirectToVoiceMail
     * @return bool|null
     */
    public function getBusyRedirectToVoiceMail()
    {
        return $this->busyRedirectToVoiceMail;
    }

    /**
     * Setter for busyRedirectToVoiceMail
     *
     * @ElementName busyRedirectToVoiceMail
     * @param bool|null $busyRedirectToVoiceMail
     * @return $this
     */
    public function setBusyRedirectToVoiceMail($busyRedirectToVoiceMail)
    {
        $this->busyRedirectToVoiceMail = $busyRedirectToVoiceMail;
        return $this;
    }

    /**
     * Getter for noAnswerRedirectToVoiceMail
     *
     * @ElementName noAnswerRedirectToVoiceMail
     * @return bool|null
     */
    public function getNoAnswerRedirectToVoiceMail()
    {
        return $this->noAnswerRedirectToVoiceMail;
    }

    /**
     * Setter for noAnswerRedirectToVoiceMail
     *
     * @ElementName noAnswerRedirectToVoiceMail
     * @param bool|null $noAnswerRedirectToVoiceMail
     * @return $this
     */
    public function setNoAnswerRedirectToVoiceMail($noAnswerRedirectToVoiceMail)
    {
        $this->noAnswerRedirectToVoiceMail = $noAnswerRedirectToVoiceMail;
        return $this;
    }

    /**
     * Getter for outOfPrimaryZoneRedirectToVoiceMail
     *
     * @ElementName outOfPrimaryZoneRedirectToVoiceMail
     * @return bool|null
     */
    public function getOutOfPrimaryZoneRedirectToVoiceMail()
    {
        return $this->outOfPrimaryZoneRedirectToVoiceMail;
    }

    /**
     * Setter for outOfPrimaryZoneRedirectToVoiceMail
     *
     * @ElementName outOfPrimaryZoneRedirectToVoiceMail
     * @param bool|null $outOfPrimaryZoneRedirectToVoiceMail
     * @return $this
     */
    public function setOutOfPrimaryZoneRedirectToVoiceMail($outOfPrimaryZoneRedirectToVoiceMail)
    {
        $this->outOfPrimaryZoneRedirectToVoiceMail = $outOfPrimaryZoneRedirectToVoiceMail;
        return $this;
    }


}

