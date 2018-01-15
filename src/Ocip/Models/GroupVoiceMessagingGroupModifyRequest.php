<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupVoiceMessagingGroupModifyRequest
 *
 * Request to modify the group's voice messaging settings.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupVoiceMessagingGroupModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @var string|null
     */
    private $groupId = null;

    /**
     * @ElementName useMailServerSetting
     * @var string|null
     */
    private $useMailServerSetting = null;

    /**
     * @ElementName warnCallerBeforeRecordingVoiceMessage
     * @var bool|null
     */
    private $warnCallerBeforeRecordingVoiceMessage = null;

    /**
     * @ElementName allowUsersConfiguringAdvancedSettings
     * @var bool|null
     */
    private $allowUsersConfiguringAdvancedSettings = null;

    /**
     * @ElementName allowComposeOrForwardMessageToEntireGroup
     * @var bool|null
     */
    private $allowComposeOrForwardMessageToEntireGroup = null;

    /**
     * @ElementName mailServerNetAddress
     * @var string|null
     */
    private $mailServerNetAddress = null;

    /**
     * @ElementName mailServerProtocol
     * @var string|null
     */
    private $mailServerProtocol = null;

    /**
     * @ElementName realDeleteForImap
     * @var bool|null
     */
    private $realDeleteForImap = null;

    /**
     * @ElementName maxMailboxLengthMinutes
     * @var int|null
     */
    private $maxMailboxLengthMinutes = null;

    /**
     * @ElementName doesMessageAge
     * @var bool|null
     */
    private $doesMessageAge = null;

    /**
     * @ElementName holdPeriodDays
     * @var int|null
     */
    private $holdPeriodDays = null;

    /**
     * Getter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @return string|null
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @param string|null $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * Getter for groupId
     *
     * @ElementName groupId
     * @return string|null
     */
    public function getGroupId()
    {
        return $this->groupId;
    }

    /**
     * Setter for groupId
     *
     * @ElementName groupId
     * @param string|null $groupId
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
        return $this;
    }

    /**
     * Getter for useMailServerSetting
     *
     * @ElementName useMailServerSetting
     * @return string|null
     */
    public function getUseMailServerSetting()
    {
        return $this->useMailServerSetting;
    }

    /**
     * Setter for useMailServerSetting
     *
     * @ElementName useMailServerSetting
     * @param string|null $useMailServerSetting
     * @return $this
     */
    public function setUseMailServerSetting($useMailServerSetting)
    {
        $this->useMailServerSetting = $useMailServerSetting;
        return $this;
    }

    /**
     * Getter for warnCallerBeforeRecordingVoiceMessage
     *
     * @ElementName warnCallerBeforeRecordingVoiceMessage
     * @return bool|null
     */
    public function getWarnCallerBeforeRecordingVoiceMessage()
    {
        return $this->warnCallerBeforeRecordingVoiceMessage;
    }

    /**
     * Setter for warnCallerBeforeRecordingVoiceMessage
     *
     * @ElementName warnCallerBeforeRecordingVoiceMessage
     * @param bool|null $warnCallerBeforeRecordingVoiceMessage
     * @return $this
     */
    public function setWarnCallerBeforeRecordingVoiceMessage($warnCallerBeforeRecordingVoiceMessage)
    {
        $this->warnCallerBeforeRecordingVoiceMessage = $warnCallerBeforeRecordingVoiceMessage;
        return $this;
    }

    /**
     * Getter for allowUsersConfiguringAdvancedSettings
     *
     * @ElementName allowUsersConfiguringAdvancedSettings
     * @return bool|null
     */
    public function getAllowUsersConfiguringAdvancedSettings()
    {
        return $this->allowUsersConfiguringAdvancedSettings;
    }

    /**
     * Setter for allowUsersConfiguringAdvancedSettings
     *
     * @ElementName allowUsersConfiguringAdvancedSettings
     * @param bool|null $allowUsersConfiguringAdvancedSettings
     * @return $this
     */
    public function setAllowUsersConfiguringAdvancedSettings($allowUsersConfiguringAdvancedSettings)
    {
        $this->allowUsersConfiguringAdvancedSettings = $allowUsersConfiguringAdvancedSettings;
        return $this;
    }

    /**
     * Getter for allowComposeOrForwardMessageToEntireGroup
     *
     * @ElementName allowComposeOrForwardMessageToEntireGroup
     * @return bool|null
     */
    public function getAllowComposeOrForwardMessageToEntireGroup()
    {
        return $this->allowComposeOrForwardMessageToEntireGroup;
    }

    /**
     * Setter for allowComposeOrForwardMessageToEntireGroup
     *
     * @ElementName allowComposeOrForwardMessageToEntireGroup
     * @param bool|null $allowComposeOrForwardMessageToEntireGroup
     * @return $this
     */
    public function setAllowComposeOrForwardMessageToEntireGroup($allowComposeOrForwardMessageToEntireGroup)
    {
        $this->allowComposeOrForwardMessageToEntireGroup = $allowComposeOrForwardMessageToEntireGroup;
        return $this;
    }

    /**
     * Getter for mailServerNetAddress
     *
     * @ElementName mailServerNetAddress
     * @return string|null
     */
    public function getMailServerNetAddress()
    {
        return $this->mailServerNetAddress;
    }

    /**
     * Setter for mailServerNetAddress
     *
     * @ElementName mailServerNetAddress
     * @param string|null $mailServerNetAddress
     * @return $this
     */
    public function setMailServerNetAddress($mailServerNetAddress)
    {
        $this->mailServerNetAddress = $mailServerNetAddress;
        return $this;
    }

    /**
     * Getter for mailServerProtocol
     *
     * @ElementName mailServerProtocol
     * @return string|null
     */
    public function getMailServerProtocol()
    {
        return $this->mailServerProtocol;
    }

    /**
     * Setter for mailServerProtocol
     *
     * @ElementName mailServerProtocol
     * @param string|null $mailServerProtocol
     * @return $this
     */
    public function setMailServerProtocol($mailServerProtocol)
    {
        $this->mailServerProtocol = $mailServerProtocol;
        return $this;
    }

    /**
     * Getter for realDeleteForImap
     *
     * @ElementName realDeleteForImap
     * @return bool|null
     */
    public function getRealDeleteForImap()
    {
        return $this->realDeleteForImap;
    }

    /**
     * Setter for realDeleteForImap
     *
     * @ElementName realDeleteForImap
     * @param bool|null $realDeleteForImap
     * @return $this
     */
    public function setRealDeleteForImap($realDeleteForImap)
    {
        $this->realDeleteForImap = $realDeleteForImap;
        return $this;
    }

    /**
     * Getter for maxMailboxLengthMinutes
     *
     * @ElementName maxMailboxLengthMinutes
     * @return int|null
     */
    public function getMaxMailboxLengthMinutes()
    {
        return $this->maxMailboxLengthMinutes;
    }

    /**
     * Setter for maxMailboxLengthMinutes
     *
     * @ElementName maxMailboxLengthMinutes
     * @param int|null $maxMailboxLengthMinutes
     * @return $this
     */
    public function setMaxMailboxLengthMinutes($maxMailboxLengthMinutes)
    {
        $this->maxMailboxLengthMinutes = $maxMailboxLengthMinutes;
        return $this;
    }

    /**
     * Getter for doesMessageAge
     *
     * @ElementName doesMessageAge
     * @return bool|null
     */
    public function getDoesMessageAge()
    {
        return $this->doesMessageAge;
    }

    /**
     * Setter for doesMessageAge
     *
     * @ElementName doesMessageAge
     * @param bool|null $doesMessageAge
     * @return $this
     */
    public function setDoesMessageAge($doesMessageAge)
    {
        $this->doesMessageAge = $doesMessageAge;
        return $this;
    }

    /**
     * Getter for holdPeriodDays
     *
     * @ElementName holdPeriodDays
     * @return int|null
     */
    public function getHoldPeriodDays()
    {
        return $this->holdPeriodDays;
    }

    /**
     * Setter for holdPeriodDays
     *
     * @ElementName holdPeriodDays
     * @param int|null $holdPeriodDays
     * @return $this
     */
    public function setHoldPeriodDays($holdPeriodDays)
    {
        $this->holdPeriodDays = $holdPeriodDays;
        return $this;
    }


}

