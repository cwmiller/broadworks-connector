<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupVoiceMessagingGroupModifyRequest
 *
 * Request to modify the group's voice messaging settings.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"3347d430e0d5c93a9ff8dcf0e3b60d6c:239","type":"sequence"}]
 */
class GroupVoiceMessagingGroupModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:239
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:239
     * @var string|null
     */
    private $groupId = null;

    /**
     * @ElementName useMailServerSetting
     * @Type \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingGroupMailServerChoices
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:239
     * @var \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingGroupMailServerChoices|null
     */
    private $useMailServerSetting = null;

    /**
     * @ElementName warnCallerBeforeRecordingVoiceMessage
     * @Type bool
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:239
     * @var bool|null
     */
    private $warnCallerBeforeRecordingVoiceMessage = null;

    /**
     * @ElementName allowUsersConfiguringAdvancedSettings
     * @Type bool
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:239
     * @var bool|null
     */
    private $allowUsersConfiguringAdvancedSettings = null;

    /**
     * @ElementName allowComposeOrForwardMessageToEntireGroup
     * @Type bool
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:239
     * @var bool|null
     */
    private $allowComposeOrForwardMessageToEntireGroup = null;

    /**
     * @ElementName mailServerNetAddress
     * @Type string
     * @Nillable
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:239
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $mailServerNetAddress = null;

    /**
     * @ElementName mailServerProtocol
     * @Type \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingMailServerProtocol
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:239
     * @var \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingMailServerProtocol|null
     */
    private $mailServerProtocol = null;

    /**
     * @ElementName realDeleteForImap
     * @Type bool
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:239
     * @var bool|null
     */
    private $realDeleteForImap = null;

    /**
     * @ElementName maxMailboxLengthMinutes
     * @Type \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingMailboxLengthMinutes
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:239
     * @var \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingMailboxLengthMinutes|null
     */
    private $maxMailboxLengthMinutes = null;

    /**
     * @ElementName doesMessageAge
     * @Type bool
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:239
     * @var bool|null
     */
    private $doesMessageAge = null;

    /**
     * @ElementName holdPeriodDays
     * @Type \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingHoldPeriodDays
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:239
     * @var \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingHoldPeriodDays|null
     */
    private $holdPeriodDays = null;

    /**
     * Getter for serviceProviderId
     *
     * @return string
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @param string $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceProviderId()
    {
        $this->serviceProviderId = null;
        return $this;
    }

    /**
     * Getter for groupId
     *
     * @return string
     */
    public function getGroupId()
    {
        return $this->groupId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupId;
    }

    /**
     * Setter for groupId
     *
     * @param string $groupId
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupId()
    {
        $this->groupId = null;
        return $this;
    }

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
     * @return string|null
     */
    public function getMailServerNetAddress()
    {
        return $this->mailServerNetAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->mailServerNetAddress;
    }

    /**
     * Setter for mailServerNetAddress
     *
     * @param string|null $mailServerNetAddress
     * @return $this
     */
    public function setMailServerNetAddress($mailServerNetAddress)
    {
        if ($mailServerNetAddress === null) {
            $this->mailServerNetAddress = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->mailServerNetAddress = $mailServerNetAddress;
        }
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

