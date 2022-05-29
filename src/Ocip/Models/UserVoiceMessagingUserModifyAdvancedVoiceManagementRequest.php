<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserVoiceMessagingUserModifyAdvancedVoiceManagementRequest
 *
 * Modify the user's voice messaging advanced voice management service setting.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"3347d430e0d5c93a9ff8dcf0e3b60d6c:1966","type":"sequence","children":[{"id":"3347d430e0d5c93a9ff8dcf0e3b60d6c:1972","type":"choice","optional":true}]}]
 */
class UserVoiceMessagingUserModifyAdvancedVoiceManagementRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:1966
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName mailServerSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingUserMailServerSelection
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:1966
     * @var \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingUserMailServerSelection|null
     */
    protected $mailServerSelection = null;

    /**
     * @ElementName groupMailServerEmailAddress
     * @Type string
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:1966
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $groupMailServerEmailAddress = null;

    /**
     * @ElementName groupMailServerUserId
     * @Type string
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:1966
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $groupMailServerUserId = null;

    /**
     * @ElementName groupMailServerPassword
     * @Type string
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:1966
     * @MinLength 1
     * @MaxLength 60
     * @var string|null
     */
    protected $groupMailServerPassword = null;

    /**
     * @ElementName useGroupDefaultMailServerFullMailboxLimit
     * @Type bool
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:1972
     * @var bool|null
     */
    protected $useGroupDefaultMailServerFullMailboxLimit = null;

    /**
     * @ElementName groupMailServerFullMailboxLimit
     * @Type \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingMailboxLengthMinutes
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:1972
     * @var \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingMailboxLengthMinutes|null
     */
    protected $groupMailServerFullMailboxLimit = null;

    /**
     * @ElementName personalMailServerNetAddress
     * @Type string
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:1966
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $personalMailServerNetAddress = null;

    /**
     * @ElementName personalMailServerProtocol
     * @Type \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingMailServerProtocol
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:1966
     * @var \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingMailServerProtocol|null
     */
    protected $personalMailServerProtocol = null;

    /**
     * @ElementName personalMailServerRealDeleteForImap
     * @Type bool
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:1966
     * @var bool|null
     */
    protected $personalMailServerRealDeleteForImap = null;

    /**
     * @ElementName personalMailServerEmailAddress
     * @Type string
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:1966
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $personalMailServerEmailAddress = null;

    /**
     * @ElementName personalMailServerUserId
     * @Type string
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:1966
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $personalMailServerUserId = null;

    /**
     * @ElementName personalMailServerPassword
     * @Type string
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:1966
     * @MinLength 1
     * @MaxLength 60
     * @var string|null
     */
    protected $personalMailServerPassword = null;

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
     * Getter for mailServerSelection
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingUserMailServerSelection
     */
    public function getMailServerSelection()
    {
        return $this->mailServerSelection instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->mailServerSelection;
    }

    /**
     * Setter for mailServerSelection
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingUserMailServerSelection $mailServerSelection
     * @return $this
     */
    public function setMailServerSelection(\CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingUserMailServerSelection $mailServerSelection)
    {
        $this->mailServerSelection = $mailServerSelection;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMailServerSelection()
    {
        $this->mailServerSelection = null;
        return $this;
    }

    /**
     * Getter for groupMailServerEmailAddress
     *
     * @return string
     */
    public function getGroupMailServerEmailAddress()
    {
        return $this->groupMailServerEmailAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupMailServerEmailAddress;
    }

    /**
     * Setter for groupMailServerEmailAddress
     *
     * @param string $groupMailServerEmailAddress
     * @return $this
     */
    public function setGroupMailServerEmailAddress($groupMailServerEmailAddress)
    {
        $this->groupMailServerEmailAddress = $groupMailServerEmailAddress;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupMailServerEmailAddress()
    {
        $this->groupMailServerEmailAddress = null;
        return $this;
    }

    /**
     * Getter for groupMailServerUserId
     *
     * @return string
     */
    public function getGroupMailServerUserId()
    {
        return $this->groupMailServerUserId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupMailServerUserId;
    }

    /**
     * Setter for groupMailServerUserId
     *
     * @param string $groupMailServerUserId
     * @return $this
     */
    public function setGroupMailServerUserId($groupMailServerUserId)
    {
        $this->groupMailServerUserId = $groupMailServerUserId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupMailServerUserId()
    {
        $this->groupMailServerUserId = null;
        return $this;
    }

    /**
     * Getter for groupMailServerPassword
     *
     * @return string
     */
    public function getGroupMailServerPassword()
    {
        return $this->groupMailServerPassword instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupMailServerPassword;
    }

    /**
     * Setter for groupMailServerPassword
     *
     * @param string $groupMailServerPassword
     * @return $this
     */
    public function setGroupMailServerPassword($groupMailServerPassword)
    {
        $this->groupMailServerPassword = $groupMailServerPassword;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupMailServerPassword()
    {
        $this->groupMailServerPassword = null;
        return $this;
    }

    /**
     * Getter for useGroupDefaultMailServerFullMailboxLimit
     *
     * @return bool
     */
    public function getUseGroupDefaultMailServerFullMailboxLimit()
    {
        return $this->useGroupDefaultMailServerFullMailboxLimit instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useGroupDefaultMailServerFullMailboxLimit;
    }

    /**
     * Setter for useGroupDefaultMailServerFullMailboxLimit
     *
     * @param bool $useGroupDefaultMailServerFullMailboxLimit
     * @return $this
     */
    public function setUseGroupDefaultMailServerFullMailboxLimit($useGroupDefaultMailServerFullMailboxLimit)
    {
        $this->useGroupDefaultMailServerFullMailboxLimit = $useGroupDefaultMailServerFullMailboxLimit;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseGroupDefaultMailServerFullMailboxLimit()
    {
        $this->useGroupDefaultMailServerFullMailboxLimit = null;
        return $this;
    }

    /**
     * Getter for groupMailServerFullMailboxLimit
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingMailboxLengthMinutes
     */
    public function getGroupMailServerFullMailboxLimit()
    {
        return $this->groupMailServerFullMailboxLimit instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupMailServerFullMailboxLimit;
    }

    /**
     * Setter for groupMailServerFullMailboxLimit
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingMailboxLengthMinutes $groupMailServerFullMailboxLimit
     * @return $this
     */
    public function setGroupMailServerFullMailboxLimit(\CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingMailboxLengthMinutes $groupMailServerFullMailboxLimit)
    {
        $this->groupMailServerFullMailboxLimit = $groupMailServerFullMailboxLimit;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupMailServerFullMailboxLimit()
    {
        $this->groupMailServerFullMailboxLimit = null;
        return $this;
    }

    /**
     * Getter for personalMailServerNetAddress
     *
     * @return string
     */
    public function getPersonalMailServerNetAddress()
    {
        return $this->personalMailServerNetAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->personalMailServerNetAddress;
    }

    /**
     * Setter for personalMailServerNetAddress
     *
     * @param string $personalMailServerNetAddress
     * @return $this
     */
    public function setPersonalMailServerNetAddress($personalMailServerNetAddress)
    {
        $this->personalMailServerNetAddress = $personalMailServerNetAddress;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPersonalMailServerNetAddress()
    {
        $this->personalMailServerNetAddress = null;
        return $this;
    }

    /**
     * Getter for personalMailServerProtocol
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingMailServerProtocol
     */
    public function getPersonalMailServerProtocol()
    {
        return $this->personalMailServerProtocol instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->personalMailServerProtocol;
    }

    /**
     * Setter for personalMailServerProtocol
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingMailServerProtocol $personalMailServerProtocol
     * @return $this
     */
    public function setPersonalMailServerProtocol(\CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingMailServerProtocol $personalMailServerProtocol)
    {
        $this->personalMailServerProtocol = $personalMailServerProtocol;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPersonalMailServerProtocol()
    {
        $this->personalMailServerProtocol = null;
        return $this;
    }

    /**
     * Getter for personalMailServerRealDeleteForImap
     *
     * @return bool
     */
    public function getPersonalMailServerRealDeleteForImap()
    {
        return $this->personalMailServerRealDeleteForImap instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->personalMailServerRealDeleteForImap;
    }

    /**
     * Setter for personalMailServerRealDeleteForImap
     *
     * @param bool $personalMailServerRealDeleteForImap
     * @return $this
     */
    public function setPersonalMailServerRealDeleteForImap($personalMailServerRealDeleteForImap)
    {
        $this->personalMailServerRealDeleteForImap = $personalMailServerRealDeleteForImap;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPersonalMailServerRealDeleteForImap()
    {
        $this->personalMailServerRealDeleteForImap = null;
        return $this;
    }

    /**
     * Getter for personalMailServerEmailAddress
     *
     * @return string
     */
    public function getPersonalMailServerEmailAddress()
    {
        return $this->personalMailServerEmailAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->personalMailServerEmailAddress;
    }

    /**
     * Setter for personalMailServerEmailAddress
     *
     * @param string $personalMailServerEmailAddress
     * @return $this
     */
    public function setPersonalMailServerEmailAddress($personalMailServerEmailAddress)
    {
        $this->personalMailServerEmailAddress = $personalMailServerEmailAddress;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPersonalMailServerEmailAddress()
    {
        $this->personalMailServerEmailAddress = null;
        return $this;
    }

    /**
     * Getter for personalMailServerUserId
     *
     * @return string
     */
    public function getPersonalMailServerUserId()
    {
        return $this->personalMailServerUserId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->personalMailServerUserId;
    }

    /**
     * Setter for personalMailServerUserId
     *
     * @param string $personalMailServerUserId
     * @return $this
     */
    public function setPersonalMailServerUserId($personalMailServerUserId)
    {
        $this->personalMailServerUserId = $personalMailServerUserId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPersonalMailServerUserId()
    {
        $this->personalMailServerUserId = null;
        return $this;
    }

    /**
     * Getter for personalMailServerPassword
     *
     * @return string
     */
    public function getPersonalMailServerPassword()
    {
        return $this->personalMailServerPassword instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->personalMailServerPassword;
    }

    /**
     * Setter for personalMailServerPassword
     *
     * @param string $personalMailServerPassword
     * @return $this
     */
    public function setPersonalMailServerPassword($personalMailServerPassword)
    {
        $this->personalMailServerPassword = $personalMailServerPassword;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPersonalMailServerPassword()
    {
        $this->personalMailServerPassword = null;
        return $this;
    }


}

