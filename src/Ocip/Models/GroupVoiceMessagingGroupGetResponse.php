<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupVoiceMessagingGroupGetResponse
 *
 * Response to GroupVoiceMessagingGroupGetRequest.
 *         Contains the group's voice messaging settings.
 *
 * @see GroupVoiceMessagingGroupGetRequest
 * @Groups [{"id":"3347d430e0d5c93a9ff8dcf0e3b60d6c:131","type":"sequence"}]
 */
class GroupVoiceMessagingGroupGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName useMailServerSetting
     * @Type \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingGroupMailServerChoices
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:131
     * @var \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingGroupMailServerChoices|null
     */
    private $useMailServerSetting = null;

    /**
     * @ElementName warnCallerBeforeRecordingVoiceMessage
     * @Type bool
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:131
     * @var bool|null
     */
    private $warnCallerBeforeRecordingVoiceMessage = null;

    /**
     * @ElementName allowUsersConfiguringAdvancedSettings
     * @Type bool
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:131
     * @var bool|null
     */
    private $allowUsersConfiguringAdvancedSettings = null;

    /**
     * @ElementName allowComposeOrForwardMessageToEntireGroup
     * @Type bool
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:131
     * @var bool|null
     */
    private $allowComposeOrForwardMessageToEntireGroup = null;

    /**
     * @ElementName mailServerNetAddress
     * @Type string
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:131
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    private $mailServerNetAddress = null;

    /**
     * @ElementName mailServerProtocol
     * @Type \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingMailServerProtocol
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:131
     * @var \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingMailServerProtocol|null
     */
    private $mailServerProtocol = null;

    /**
     * @ElementName realDeleteForImap
     * @Type bool
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:131
     * @var bool|null
     */
    private $realDeleteForImap = null;

    /**
     * @ElementName maxMailboxLengthMinutes
     * @Type \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingMailboxLengthMinutes
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:131
     * @var \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingMailboxLengthMinutes|null
     */
    private $maxMailboxLengthMinutes = null;

    /**
     * @ElementName doesMessageAge
     * @Type bool
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:131
     * @var bool|null
     */
    private $doesMessageAge = null;

    /**
     * @ElementName holdPeriodDays
     * @Type \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingHoldPeriodDays
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:131
     * @var \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingHoldPeriodDays|null
     */
    private $holdPeriodDays = null;

    /**
     * Getter for useMailServerSetting
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingGroupMailServerChoices
     */
    public function getUseMailServerSetting()
    {
        return $this->useMailServerSetting instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useMailServerSetting;
    }

    /**
     * Setter for useMailServerSetting
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingGroupMailServerChoices $useMailServerSetting
     * @return $this
     */
    public function setUseMailServerSetting(\CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingGroupMailServerChoices $useMailServerSetting)
    {
        $this->useMailServerSetting = $useMailServerSetting;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseMailServerSetting()
    {
        $this->useMailServerSetting = null;
        return $this;
    }

    /**
     * Getter for warnCallerBeforeRecordingVoiceMessage
     *
     * @return bool
     */
    public function getWarnCallerBeforeRecordingVoiceMessage()
    {
        return $this->warnCallerBeforeRecordingVoiceMessage instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->warnCallerBeforeRecordingVoiceMessage;
    }

    /**
     * Setter for warnCallerBeforeRecordingVoiceMessage
     *
     * @param bool $warnCallerBeforeRecordingVoiceMessage
     * @return $this
     */
    public function setWarnCallerBeforeRecordingVoiceMessage($warnCallerBeforeRecordingVoiceMessage)
    {
        $this->warnCallerBeforeRecordingVoiceMessage = $warnCallerBeforeRecordingVoiceMessage;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetWarnCallerBeforeRecordingVoiceMessage()
    {
        $this->warnCallerBeforeRecordingVoiceMessage = null;
        return $this;
    }

    /**
     * Getter for allowUsersConfiguringAdvancedSettings
     *
     * @return bool
     */
    public function getAllowUsersConfiguringAdvancedSettings()
    {
        return $this->allowUsersConfiguringAdvancedSettings instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->allowUsersConfiguringAdvancedSettings;
    }

    /**
     * Setter for allowUsersConfiguringAdvancedSettings
     *
     * @param bool $allowUsersConfiguringAdvancedSettings
     * @return $this
     */
    public function setAllowUsersConfiguringAdvancedSettings($allowUsersConfiguringAdvancedSettings)
    {
        $this->allowUsersConfiguringAdvancedSettings = $allowUsersConfiguringAdvancedSettings;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAllowUsersConfiguringAdvancedSettings()
    {
        $this->allowUsersConfiguringAdvancedSettings = null;
        return $this;
    }

    /**
     * Getter for allowComposeOrForwardMessageToEntireGroup
     *
     * @return bool
     */
    public function getAllowComposeOrForwardMessageToEntireGroup()
    {
        return $this->allowComposeOrForwardMessageToEntireGroup instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->allowComposeOrForwardMessageToEntireGroup;
    }

    /**
     * Setter for allowComposeOrForwardMessageToEntireGroup
     *
     * @param bool $allowComposeOrForwardMessageToEntireGroup
     * @return $this
     */
    public function setAllowComposeOrForwardMessageToEntireGroup($allowComposeOrForwardMessageToEntireGroup)
    {
        $this->allowComposeOrForwardMessageToEntireGroup = $allowComposeOrForwardMessageToEntireGroup;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAllowComposeOrForwardMessageToEntireGroup()
    {
        $this->allowComposeOrForwardMessageToEntireGroup = null;
        return $this;
    }

    /**
     * Getter for mailServerNetAddress
     *
     * @return string
     */
    public function getMailServerNetAddress()
    {
        return $this->mailServerNetAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->mailServerNetAddress;
    }

    /**
     * Setter for mailServerNetAddress
     *
     * @param string $mailServerNetAddress
     * @return $this
     */
    public function setMailServerNetAddress($mailServerNetAddress)
    {
        $this->mailServerNetAddress = $mailServerNetAddress;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMailServerNetAddress()
    {
        $this->mailServerNetAddress = null;
        return $this;
    }

    /**
     * Getter for mailServerProtocol
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingMailServerProtocol
     */
    public function getMailServerProtocol()
    {
        return $this->mailServerProtocol instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->mailServerProtocol;
    }

    /**
     * Setter for mailServerProtocol
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingMailServerProtocol $mailServerProtocol
     * @return $this
     */
    public function setMailServerProtocol(\CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingMailServerProtocol $mailServerProtocol)
    {
        $this->mailServerProtocol = $mailServerProtocol;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMailServerProtocol()
    {
        $this->mailServerProtocol = null;
        return $this;
    }

    /**
     * Getter for realDeleteForImap
     *
     * @return bool
     */
    public function getRealDeleteForImap()
    {
        return $this->realDeleteForImap instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->realDeleteForImap;
    }

    /**
     * Setter for realDeleteForImap
     *
     * @param bool $realDeleteForImap
     * @return $this
     */
    public function setRealDeleteForImap($realDeleteForImap)
    {
        $this->realDeleteForImap = $realDeleteForImap;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRealDeleteForImap()
    {
        $this->realDeleteForImap = null;
        return $this;
    }

    /**
     * Getter for maxMailboxLengthMinutes
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingMailboxLengthMinutes
     */
    public function getMaxMailboxLengthMinutes()
    {
        return $this->maxMailboxLengthMinutes instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxMailboxLengthMinutes;
    }

    /**
     * Setter for maxMailboxLengthMinutes
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingMailboxLengthMinutes $maxMailboxLengthMinutes
     * @return $this
     */
    public function setMaxMailboxLengthMinutes(\CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingMailboxLengthMinutes $maxMailboxLengthMinutes)
    {
        $this->maxMailboxLengthMinutes = $maxMailboxLengthMinutes;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaxMailboxLengthMinutes()
    {
        $this->maxMailboxLengthMinutes = null;
        return $this;
    }

    /**
     * Getter for doesMessageAge
     *
     * @return bool
     */
    public function getDoesMessageAge()
    {
        return $this->doesMessageAge instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->doesMessageAge;
    }

    /**
     * Setter for doesMessageAge
     *
     * @param bool $doesMessageAge
     * @return $this
     */
    public function setDoesMessageAge($doesMessageAge)
    {
        $this->doesMessageAge = $doesMessageAge;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDoesMessageAge()
    {
        $this->doesMessageAge = null;
        return $this;
    }

    /**
     * Getter for holdPeriodDays
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingHoldPeriodDays
     */
    public function getHoldPeriodDays()
    {
        return $this->holdPeriodDays instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->holdPeriodDays;
    }

    /**
     * Setter for holdPeriodDays
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingHoldPeriodDays $holdPeriodDays
     * @return $this
     */
    public function setHoldPeriodDays(\CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingHoldPeriodDays $holdPeriodDays)
    {
        $this->holdPeriodDays = $holdPeriodDays;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetHoldPeriodDays()
    {
        $this->holdPeriodDays = null;
        return $this;
    }


}

