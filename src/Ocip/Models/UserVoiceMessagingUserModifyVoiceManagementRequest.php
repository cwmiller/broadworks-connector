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
 * @Groups [{"id":"240b50f54d060859e5e275082fdf49f9:19082","type":"sequence"}]
 */
class UserVoiceMessagingUserModifyVoiceManagementRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group 240b50f54d060859e5e275082fdf49f9:19082
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName isActive
     * @Type bool
     * @Optional
     * @Group 240b50f54d060859e5e275082fdf49f9:19082
     * @var bool|null
     */
    protected $isActive = null;

    /**
     * @ElementName processing
     * @Type \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingMessageProcessing
     * @Optional
     * @Group 240b50f54d060859e5e275082fdf49f9:19082
     * @var \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingMessageProcessing|null
     */
    protected $processing = null;

    /**
     * @ElementName voiceMessageDeliveryEmailAddress
     * @Type string
     * @Nillable
     * @Optional
     * @Group 240b50f54d060859e5e275082fdf49f9:19082
     * @MinLength 1
     * @MaxLength 80
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $voiceMessageDeliveryEmailAddress = null;

    /**
     * @ElementName usePhoneMessageWaitingIndicator
     * @Type bool
     * @Optional
     * @Group 240b50f54d060859e5e275082fdf49f9:19082
     * @var bool|null
     */
    protected $usePhoneMessageWaitingIndicator = null;

    /**
     * @ElementName sendVoiceMessageNotifyEmail
     * @Type bool
     * @Optional
     * @Group 240b50f54d060859e5e275082fdf49f9:19082
     * @var bool|null
     */
    protected $sendVoiceMessageNotifyEmail = null;

    /**
     * @ElementName voiceMessageNotifyEmailAddress
     * @Type string
     * @Nillable
     * @Optional
     * @Group 240b50f54d060859e5e275082fdf49f9:19082
     * @MinLength 1
     * @MaxLength 80
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $voiceMessageNotifyEmailAddress = null;

    /**
     * @ElementName sendCarbonCopyVoiceMessage
     * @Type bool
     * @Optional
     * @Group 240b50f54d060859e5e275082fdf49f9:19082
     * @var bool|null
     */
    protected $sendCarbonCopyVoiceMessage = null;

    /**
     * @ElementName voiceMessageCarbonCopyEmailAddress
     * @Type string
     * @Nillable
     * @Optional
     * @Group 240b50f54d060859e5e275082fdf49f9:19082
     * @MinLength 1
     * @MaxLength 80
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $voiceMessageCarbonCopyEmailAddress = null;

    /**
     * @ElementName transferOnZeroToPhoneNumber
     * @Type bool
     * @Optional
     * @Group 240b50f54d060859e5e275082fdf49f9:19082
     * @var bool|null
     */
    protected $transferOnZeroToPhoneNumber = null;

    /**
     * @ElementName transferPhoneNumber
     * @Type string
     * @Nillable
     * @Optional
     * @Group 240b50f54d060859e5e275082fdf49f9:19082
     * @MinLength 1
     * @MaxLength 30
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $transferPhoneNumber = null;

    /**
     * @ElementName alwaysRedirectToVoiceMail
     * @Type bool
     * @Optional
     * @Group 240b50f54d060859e5e275082fdf49f9:19082
     * @var bool|null
     */
    protected $alwaysRedirectToVoiceMail = null;

    /**
     * @ElementName busyRedirectToVoiceMail
     * @Type bool
     * @Optional
     * @Group 240b50f54d060859e5e275082fdf49f9:19082
     * @var bool|null
     */
    protected $busyRedirectToVoiceMail = null;

    /**
     * @ElementName noAnswerRedirectToVoiceMail
     * @Type bool
     * @Optional
     * @Group 240b50f54d060859e5e275082fdf49f9:19082
     * @var bool|null
     */
    protected $noAnswerRedirectToVoiceMail = null;

    /**
     * @ElementName outOfPrimaryZoneRedirectToVoiceMail
     * @Type bool
     * @Optional
     * @Group 240b50f54d060859e5e275082fdf49f9:19082
     * @var bool|null
     */
    protected $outOfPrimaryZoneRedirectToVoiceMail = null;

    /**
     * Getter for userId
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->userId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userId;
    }

    /**
     * Setter for userId
     *
     * @param string $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserId()
    {
        $this->userId = null;
        return $this;
    }

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
     * @return string|null
     */
    public function getVoiceMessageDeliveryEmailAddress()
    {
        return $this->voiceMessageDeliveryEmailAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->voiceMessageDeliveryEmailAddress;
    }

    /**
     * Setter for voiceMessageDeliveryEmailAddress
     *
     * @param string|null $voiceMessageDeliveryEmailAddress
     * @return $this
     */
    public function setVoiceMessageDeliveryEmailAddress($voiceMessageDeliveryEmailAddress = null)
    {
        if ($voiceMessageDeliveryEmailAddress === null) {
            $this->voiceMessageDeliveryEmailAddress = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->voiceMessageDeliveryEmailAddress = $voiceMessageDeliveryEmailAddress;
        }
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
     * @return string|null
     */
    public function getVoiceMessageNotifyEmailAddress()
    {
        return $this->voiceMessageNotifyEmailAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->voiceMessageNotifyEmailAddress;
    }

    /**
     * Setter for voiceMessageNotifyEmailAddress
     *
     * @param string|null $voiceMessageNotifyEmailAddress
     * @return $this
     */
    public function setVoiceMessageNotifyEmailAddress($voiceMessageNotifyEmailAddress = null)
    {
        if ($voiceMessageNotifyEmailAddress === null) {
            $this->voiceMessageNotifyEmailAddress = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->voiceMessageNotifyEmailAddress = $voiceMessageNotifyEmailAddress;
        }
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
     * @return string|null
     */
    public function getVoiceMessageCarbonCopyEmailAddress()
    {
        return $this->voiceMessageCarbonCopyEmailAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->voiceMessageCarbonCopyEmailAddress;
    }

    /**
     * Setter for voiceMessageCarbonCopyEmailAddress
     *
     * @param string|null $voiceMessageCarbonCopyEmailAddress
     * @return $this
     */
    public function setVoiceMessageCarbonCopyEmailAddress($voiceMessageCarbonCopyEmailAddress = null)
    {
        if ($voiceMessageCarbonCopyEmailAddress === null) {
            $this->voiceMessageCarbonCopyEmailAddress = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->voiceMessageCarbonCopyEmailAddress = $voiceMessageCarbonCopyEmailAddress;
        }
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
     * @return string|null
     */
    public function getTransferPhoneNumber()
    {
        return $this->transferPhoneNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->transferPhoneNumber;
    }

    /**
     * Setter for transferPhoneNumber
     *
     * @param string|null $transferPhoneNumber
     * @return $this
     */
    public function setTransferPhoneNumber($transferPhoneNumber = null)
    {
        if ($transferPhoneNumber === null) {
            $this->transferPhoneNumber = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->transferPhoneNumber = $transferPhoneNumber;
        }
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

    /**
     * Getter for outOfPrimaryZoneRedirectToVoiceMail
     *
     * @return bool
     */
    public function getOutOfPrimaryZoneRedirectToVoiceMail()
    {
        return $this->outOfPrimaryZoneRedirectToVoiceMail instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->outOfPrimaryZoneRedirectToVoiceMail;
    }

    /**
     * Setter for outOfPrimaryZoneRedirectToVoiceMail
     *
     * @param bool $outOfPrimaryZoneRedirectToVoiceMail
     * @return $this
     */
    public function setOutOfPrimaryZoneRedirectToVoiceMail($outOfPrimaryZoneRedirectToVoiceMail)
    {
        $this->outOfPrimaryZoneRedirectToVoiceMail = $outOfPrimaryZoneRedirectToVoiceMail;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetOutOfPrimaryZoneRedirectToVoiceMail()
    {
        $this->outOfPrimaryZoneRedirectToVoiceMail = null;
        return $this;
    }
}

