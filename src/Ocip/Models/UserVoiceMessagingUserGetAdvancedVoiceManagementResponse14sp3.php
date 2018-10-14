<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserVoiceMessagingUserGetAdvancedVoiceManagementResponse14sp3
 *
 * Response to the UserVoiceMessagingUserGetAdvancedVoiceManagementRequest14sp3.
 *
 * @see UserVoiceMessagingUserGetAdvancedVoiceManagementRequest14sp3
 */
class UserVoiceMessagingUserGetAdvancedVoiceManagementResponse14sp3 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName mailServerSelection
     * @var \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingUserMailServerSelection|null
     */
    private $mailServerSelection = null;

    /**
     * @ElementName groupMailServerEmailAddress
     * @var string|null
     */
    private $groupMailServerEmailAddress = null;

    /**
     * @ElementName groupMailServerUserId
     * @var string|null
     */
    private $groupMailServerUserId = null;

    /**
     * @ElementName useGroupDefaultMailServerFullMailboxLimit
     * @var bool|null
     */
    private $useGroupDefaultMailServerFullMailboxLimit = null;

    /**
     * @ElementName groupMailServerFullMailboxLimit
     * @var \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingMailboxLengthMinutes|null
     */
    private $groupMailServerFullMailboxLimit = null;

    /**
     * @ElementName personalMailServerNetAddress
     * @var string|null
     */
    private $personalMailServerNetAddress = null;

    /**
     * @ElementName personalMailServerProtocol
     * @var \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingMailServerProtocol|null
     */
    private $personalMailServerProtocol = null;

    /**
     * @ElementName personalMailServerRealDeleteForImap
     * @var bool|null
     */
    private $personalMailServerRealDeleteForImap = null;

    /**
     * @ElementName personalMailServerEmailAddress
     * @var string|null
     */
    private $personalMailServerEmailAddress = null;

    /**
     * @ElementName personalMailServerUserId
     * @var string|null
     */
    private $personalMailServerUserId = null;

    /**
     * Getter for mailServerSelection
     *
     * @ElementName mailServerSelection
     * @return \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingUserMailServerSelection|null
     */
    public function getMailServerSelection()
    {
        return $this->mailServerSelection;
    }

    /**
     * Setter for mailServerSelection
     *
     * @ElementName mailServerSelection
     * @param \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingUserMailServerSelection|null $mailServerSelection
     * @return $this
     */
    public function setMailServerSelection(\CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingUserMailServerSelection $mailServerSelection)
    {
        $this->mailServerSelection = $mailServerSelection;
        return $this;
    }

    /**
     * Getter for groupMailServerEmailAddress
     *
     * @ElementName groupMailServerEmailAddress
     * @return string|null
     */
    public function getGroupMailServerEmailAddress()
    {
        return $this->groupMailServerEmailAddress;
    }

    /**
     * Setter for groupMailServerEmailAddress
     *
     * @ElementName groupMailServerEmailAddress
     * @param string|null $groupMailServerEmailAddress
     * @return $this
     */
    public function setGroupMailServerEmailAddress($groupMailServerEmailAddress)
    {
        $this->groupMailServerEmailAddress = $groupMailServerEmailAddress;
        return $this;
    }

    /**
     * Getter for groupMailServerUserId
     *
     * @ElementName groupMailServerUserId
     * @return string|null
     */
    public function getGroupMailServerUserId()
    {
        return $this->groupMailServerUserId;
    }

    /**
     * Setter for groupMailServerUserId
     *
     * @ElementName groupMailServerUserId
     * @param string|null $groupMailServerUserId
     * @return $this
     */
    public function setGroupMailServerUserId($groupMailServerUserId)
    {
        $this->groupMailServerUserId = $groupMailServerUserId;
        return $this;
    }

    /**
     * Getter for useGroupDefaultMailServerFullMailboxLimit
     *
     * @ElementName useGroupDefaultMailServerFullMailboxLimit
     * @return bool|null
     */
    public function getUseGroupDefaultMailServerFullMailboxLimit()
    {
        return $this->useGroupDefaultMailServerFullMailboxLimit;
    }

    /**
     * Setter for useGroupDefaultMailServerFullMailboxLimit
     *
     * @ElementName useGroupDefaultMailServerFullMailboxLimit
     * @param bool|null $useGroupDefaultMailServerFullMailboxLimit
     * @return $this
     */
    public function setUseGroupDefaultMailServerFullMailboxLimit($useGroupDefaultMailServerFullMailboxLimit)
    {
        $this->useGroupDefaultMailServerFullMailboxLimit = $useGroupDefaultMailServerFullMailboxLimit;
        return $this;
    }

    /**
     * Getter for groupMailServerFullMailboxLimit
     *
     * @ElementName groupMailServerFullMailboxLimit
     * @return \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingMailboxLengthMinutes|null
     */
    public function getGroupMailServerFullMailboxLimit()
    {
        return $this->groupMailServerFullMailboxLimit;
    }

    /**
     * Setter for groupMailServerFullMailboxLimit
     *
     * @ElementName groupMailServerFullMailboxLimit
     * @param \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingMailboxLengthMinutes|null $groupMailServerFullMailboxLimit
     * @return $this
     */
    public function setGroupMailServerFullMailboxLimit(\CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingMailboxLengthMinutes $groupMailServerFullMailboxLimit)
    {
        $this->groupMailServerFullMailboxLimit = $groupMailServerFullMailboxLimit;
        return $this;
    }

    /**
     * Getter for personalMailServerNetAddress
     *
     * @ElementName personalMailServerNetAddress
     * @return string|null
     */
    public function getPersonalMailServerNetAddress()
    {
        return $this->personalMailServerNetAddress;
    }

    /**
     * Setter for personalMailServerNetAddress
     *
     * @ElementName personalMailServerNetAddress
     * @param string|null $personalMailServerNetAddress
     * @return $this
     */
    public function setPersonalMailServerNetAddress($personalMailServerNetAddress)
    {
        $this->personalMailServerNetAddress = $personalMailServerNetAddress;
        return $this;
    }

    /**
     * Getter for personalMailServerProtocol
     *
     * @ElementName personalMailServerProtocol
     * @return \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingMailServerProtocol|null
     */
    public function getPersonalMailServerProtocol()
    {
        return $this->personalMailServerProtocol;
    }

    /**
     * Setter for personalMailServerProtocol
     *
     * @ElementName personalMailServerProtocol
     * @param \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingMailServerProtocol|null $personalMailServerProtocol
     * @return $this
     */
    public function setPersonalMailServerProtocol(\CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingMailServerProtocol $personalMailServerProtocol)
    {
        $this->personalMailServerProtocol = $personalMailServerProtocol;
        return $this;
    }

    /**
     * Getter for personalMailServerRealDeleteForImap
     *
     * @ElementName personalMailServerRealDeleteForImap
     * @return bool|null
     */
    public function getPersonalMailServerRealDeleteForImap()
    {
        return $this->personalMailServerRealDeleteForImap;
    }

    /**
     * Setter for personalMailServerRealDeleteForImap
     *
     * @ElementName personalMailServerRealDeleteForImap
     * @param bool|null $personalMailServerRealDeleteForImap
     * @return $this
     */
    public function setPersonalMailServerRealDeleteForImap($personalMailServerRealDeleteForImap)
    {
        $this->personalMailServerRealDeleteForImap = $personalMailServerRealDeleteForImap;
        return $this;
    }

    /**
     * Getter for personalMailServerEmailAddress
     *
     * @ElementName personalMailServerEmailAddress
     * @return string|null
     */
    public function getPersonalMailServerEmailAddress()
    {
        return $this->personalMailServerEmailAddress;
    }

    /**
     * Setter for personalMailServerEmailAddress
     *
     * @ElementName personalMailServerEmailAddress
     * @param string|null $personalMailServerEmailAddress
     * @return $this
     */
    public function setPersonalMailServerEmailAddress($personalMailServerEmailAddress)
    {
        $this->personalMailServerEmailAddress = $personalMailServerEmailAddress;
        return $this;
    }

    /**
     * Getter for personalMailServerUserId
     *
     * @ElementName personalMailServerUserId
     * @return string|null
     */
    public function getPersonalMailServerUserId()
    {
        return $this->personalMailServerUserId;
    }

    /**
     * Setter for personalMailServerUserId
     *
     * @ElementName personalMailServerUserId
     * @param string|null $personalMailServerUserId
     * @return $this
     */
    public function setPersonalMailServerUserId($personalMailServerUserId)
    {
        $this->personalMailServerUserId = $personalMailServerUserId;
        return $this;
    }


}

