<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserVoiceMessagingUserModifyRequest
 *
 * Modify the user's voice messaging advanced voice management service setting.
 *         Modify a voice mail distribution list for a users voice message.
 *         Modify the user's voice messaging greeting.  
 *         Modify the user's voice messaging outgoing message waiting indicator service setting.
 *         Modify the user's voice messaging voice portal settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"1624846b7d87d3ab55e907c443fca9d6:2020","type":"sequence","children":[{"id":"1624846b7d87d3ab55e907c443fca9d6:2026","type":"choice","optional":true}]}]
 */
class UserVoiceMessagingUserModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 1624846b7d87d3ab55e907c443fca9d6:2020
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName mailServerSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingUserMailServerSelection
     * @Optional
     * @Group 1624846b7d87d3ab55e907c443fca9d6:2020
     * @var \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingUserMailServerSelection|null
     */
    private $mailServerSelection = null;

    /**
     * @ElementName groupMailServerEmailAddress
     * @Type string
     * @Optional
     * @Group 1624846b7d87d3ab55e907c443fca9d6:2020
     * @var string|null
     */
    private $groupMailServerEmailAddress = null;

    /**
     * @ElementName groupMailServerUserId
     * @Type string
     * @Optional
     * @Group 1624846b7d87d3ab55e907c443fca9d6:2020
     * @var string|null
     */
    private $groupMailServerUserId = null;

    /**
     * @ElementName groupMailServerPassword
     * @Type string
     * @Optional
     * @Group 1624846b7d87d3ab55e907c443fca9d6:2020
     * @var string|null
     */
    private $groupMailServerPassword = null;

    /**
     * @ElementName useGroupDefaultMailServerFullMailboxLimit
     * @Type bool
     * @Group 1624846b7d87d3ab55e907c443fca9d6:2026
     * @var bool|null
     */
    private $useGroupDefaultMailServerFullMailboxLimit = null;

    /**
     * @ElementName groupMailServerFullMailboxLimit
     * @Type \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingMailboxLengthMinutes
     * @Group 1624846b7d87d3ab55e907c443fca9d6:2026
     * @var \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingMailboxLengthMinutes|null
     */
    private $groupMailServerFullMailboxLimit = null;

    /**
     * @ElementName personalMailServerNetAddress
     * @Type string
     * @Optional
     * @Group 1624846b7d87d3ab55e907c443fca9d6:2020
     * @var string|null
     */
    private $personalMailServerNetAddress = null;

    /**
     * @ElementName personalMailServerProtocol
     * @Type \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingMailServerProtocol
     * @Optional
     * @Group 1624846b7d87d3ab55e907c443fca9d6:2020
     * @var \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingMailServerProtocol|null
     */
    private $personalMailServerProtocol = null;

    /**
     * @ElementName personalMailServerRealDeleteForImap
     * @Type bool
     * @Optional
     * @Group 1624846b7d87d3ab55e907c443fca9d6:2020
     * @var bool|null
     */
    private $personalMailServerRealDeleteForImap = null;

    /**
     * @ElementName personalMailServerEmailAddress
     * @Type string
     * @Optional
     * @Group 1624846b7d87d3ab55e907c443fca9d6:2020
     * @var string|null
     */
    private $personalMailServerEmailAddress = null;

    /**
     * @ElementName personalMailServerUserId
     * @Type string
     * @Optional
     * @Group 1624846b7d87d3ab55e907c443fca9d6:2020
     * @var string|null
     */
    private $personalMailServerUserId = null;

    /**
     * @ElementName personalMailServerPassword
     * @Type string
     * @Optional
     * @Group 1624846b7d87d3ab55e907c443fca9d6:2020
     * @var string|null
     */
    private $personalMailServerPassword = null;

    /**
     * @ElementName voiceMessagingDistributionList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingDistributionListModify
     * @Array
     * @Optional
     * @Group 1624846b7d87d3ab55e907c443fca9d6:2020
     * @var \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingDistributionListModify[]
     */
    private $voiceMessagingDistributionList = array(
        
    );

    /**
     * @ElementName busyAnnouncementSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AnnouncementSelection
     * @Optional
     * @Group 1624846b7d87d3ab55e907c443fca9d6:2020
     * @var \CWM\BroadWorksConnector\Ocip\Models\AnnouncementSelection|null
     */
    private $busyAnnouncementSelection = null;

    /**
     * @ElementName busyPersonalAudioFile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey
     * @Nillable
     * @Optional
     * @Group 1624846b7d87d3ab55e907c443fca9d6:2020
     * @var \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $busyPersonalAudioFile = null;

    /**
     * @ElementName busyPersonalVideoFile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey
     * @Nillable
     * @Optional
     * @Group 1624846b7d87d3ab55e907c443fca9d6:2020
     * @var \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $busyPersonalVideoFile = null;

    /**
     * @ElementName noAnswerAnnouncementSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingNoAnswerGreetingSelection
     * @Optional
     * @Group 1624846b7d87d3ab55e907c443fca9d6:2020
     * @var \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingNoAnswerGreetingSelection|null
     */
    private $noAnswerAnnouncementSelection = null;

    /**
     * @ElementName noAnswerPersonalAudioFile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey
     * @Nillable
     * @Optional
     * @Group 1624846b7d87d3ab55e907c443fca9d6:2020
     * @var \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $noAnswerPersonalAudioFile = null;

    /**
     * @ElementName noAnswerPersonalVideoFile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey
     * @Nillable
     * @Optional
     * @Group 1624846b7d87d3ab55e907c443fca9d6:2020
     * @var \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $noAnswerPersonalVideoFile = null;

    /**
     * @ElementName noAnswerAlternateGreeting01
     * @Type \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingAlternateNoAnswerGreetingModify20
     * @Optional
     * @Group 1624846b7d87d3ab55e907c443fca9d6:2020
     * @var \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingAlternateNoAnswerGreetingModify20|null
     */
    private $noAnswerAlternateGreeting01 = null;

    /**
     * @ElementName noAnswerAlternateGreeting02
     * @Type \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingAlternateNoAnswerGreetingModify20
     * @Optional
     * @Group 1624846b7d87d3ab55e907c443fca9d6:2020
     * @var \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingAlternateNoAnswerGreetingModify20|null
     */
    private $noAnswerAlternateGreeting02 = null;

    /**
     * @ElementName noAnswerAlternateGreeting03
     * @Type \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingAlternateNoAnswerGreetingModify20
     * @Optional
     * @Group 1624846b7d87d3ab55e907c443fca9d6:2020
     * @var \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingAlternateNoAnswerGreetingModify20|null
     */
    private $noAnswerAlternateGreeting03 = null;

    /**
     * @ElementName extendedAwayEnabled
     * @Type bool
     * @Optional
     * @Group 1624846b7d87d3ab55e907c443fca9d6:2020
     * @var bool|null
     */
    private $extendedAwayEnabled = null;

    /**
     * @ElementName extendedAwayDisableMessageDeposit
     * @Type bool
     * @Optional
     * @Group 1624846b7d87d3ab55e907c443fca9d6:2020
     * @var bool|null
     */
    private $extendedAwayDisableMessageDeposit = null;

    /**
     * @ElementName extendedAwayAudioFile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey
     * @Nillable
     * @Optional
     * @Group 1624846b7d87d3ab55e907c443fca9d6:2020
     * @var \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $extendedAwayAudioFile = null;

    /**
     * @ElementName extendedAwayVideoFile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey
     * @Nillable
     * @Optional
     * @Group 1624846b7d87d3ab55e907c443fca9d6:2020
     * @var \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $extendedAwayVideoFile = null;

    /**
     * @ElementName noAnswerNumberOfRings
     * @Type \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingNumberOfRings
     * @Optional
     * @Group 1624846b7d87d3ab55e907c443fca9d6:2020
     * @var \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingNumberOfRings|null
     */
    private $noAnswerNumberOfRings = null;

    /**
     * @ElementName disableMessageDeposit
     * @Type bool
     * @Optional
     * @Group 1624846b7d87d3ab55e907c443fca9d6:2020
     * @var bool|null
     */
    private $disableMessageDeposit = null;

    /**
     * @ElementName disableMessageDepositAction
     * @Type \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingDisableMessageDepositSelection
     * @Optional
     * @Group 1624846b7d87d3ab55e907c443fca9d6:2020
     * @var \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingDisableMessageDepositSelection|null
     */
    private $disableMessageDepositAction = null;

    /**
     * @ElementName greetingOnlyForwardDestination
     * @Type string
     * @Nillable
     * @Optional
     * @Group 1624846b7d87d3ab55e907c443fca9d6:2020
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $greetingOnlyForwardDestination = null;

    /**
     * @ElementName outgoingSMDIMWIisActive
     * @Type bool
     * @Optional
     * @Group 1624846b7d87d3ab55e907c443fca9d6:2020
     * @var bool|null
     */
    private $outgoingSMDIMWIisActive = null;

    /**
     * @ElementName outgoingSMDIMWIPhoneNumberList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ReplacementOutgoingDNList
     * @Nillable
     * @Optional
     * @Group 1624846b7d87d3ab55e907c443fca9d6:2020
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementOutgoingDNList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $outgoingSMDIMWIPhoneNumberList = null;

    /**
     * @ElementName voiceManagementisActive
     * @Type bool
     * @Optional
     * @Group 1624846b7d87d3ab55e907c443fca9d6:2020
     * @var bool|null
     */
    private $voiceManagementisActive = null;

    /**
     * @ElementName processing
     * @Type \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingMessageProcessing
     * @Optional
     * @Group 1624846b7d87d3ab55e907c443fca9d6:2020
     * @var \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingMessageProcessing|null
     */
    private $processing = null;

    /**
     * @ElementName voiceMessageDeliveryEmailAddress
     * @Type string
     * @Nillable
     * @Optional
     * @Group 1624846b7d87d3ab55e907c443fca9d6:2020
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $voiceMessageDeliveryEmailAddress = null;

    /**
     * @ElementName usePhoneMessageWaitingIndicator
     * @Type bool
     * @Optional
     * @Group 1624846b7d87d3ab55e907c443fca9d6:2020
     * @var bool|null
     */
    private $usePhoneMessageWaitingIndicator = null;

    /**
     * @ElementName sendVoiceMessageNotifyEmail
     * @Type bool
     * @Optional
     * @Group 1624846b7d87d3ab55e907c443fca9d6:2020
     * @var bool|null
     */
    private $sendVoiceMessageNotifyEmail = null;

    /**
     * @ElementName voiceMessageNotifyEmailAddress
     * @Type string
     * @Nillable
     * @Optional
     * @Group 1624846b7d87d3ab55e907c443fca9d6:2020
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $voiceMessageNotifyEmailAddress = null;

    /**
     * @ElementName sendCarbonCopyVoiceMessage
     * @Type bool
     * @Optional
     * @Group 1624846b7d87d3ab55e907c443fca9d6:2020
     * @var bool|null
     */
    private $sendCarbonCopyVoiceMessage = null;

    /**
     * @ElementName voiceMessageCarbonCopyEmailAddress
     * @Type string
     * @Nillable
     * @Optional
     * @Group 1624846b7d87d3ab55e907c443fca9d6:2020
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $voiceMessageCarbonCopyEmailAddress = null;

    /**
     * @ElementName transferOnZeroToPhoneNumber
     * @Type bool
     * @Optional
     * @Group 1624846b7d87d3ab55e907c443fca9d6:2020
     * @var bool|null
     */
    private $transferOnZeroToPhoneNumber = null;

    /**
     * @ElementName transferPhoneNumber
     * @Type string
     * @Nillable
     * @Optional
     * @Group 1624846b7d87d3ab55e907c443fca9d6:2020
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $transferPhoneNumber = null;

    /**
     * @ElementName alwaysRedirectToVoiceMail
     * @Type bool
     * @Optional
     * @Group 1624846b7d87d3ab55e907c443fca9d6:2020
     * @var bool|null
     */
    private $alwaysRedirectToVoiceMail = null;

    /**
     * @ElementName busyRedirectToVoiceMail
     * @Type bool
     * @Optional
     * @Group 1624846b7d87d3ab55e907c443fca9d6:2020
     * @var bool|null
     */
    private $busyRedirectToVoiceMail = null;

    /**
     * @ElementName noAnswerRedirectToVoiceMail
     * @Type bool
     * @Optional
     * @Group 1624846b7d87d3ab55e907c443fca9d6:2020
     * @var bool|null
     */
    private $noAnswerRedirectToVoiceMail = null;

    /**
     * @ElementName outOfPrimaryZoneRedirectToVoiceMail
     * @Type bool
     * @Optional
     * @Group 1624846b7d87d3ab55e907c443fca9d6:2020
     * @var bool|null
     */
    private $outOfPrimaryZoneRedirectToVoiceMail = null;

    /**
     * @ElementName usePersonalizedName
     * @Type bool
     * @Optional
     * @Group 1624846b7d87d3ab55e907c443fca9d6:2020
     * @var bool|null
     */
    private $usePersonalizedName = null;

    /**
     * @ElementName voicePortalAutoLogin
     * @Type bool
     * @Optional
     * @Group 1624846b7d87d3ab55e907c443fca9d6:2020
     * @var bool|null
     */
    private $voicePortalAutoLogin = null;

    /**
     * @ElementName personalizedNameAudioFile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey
     * @Nillable
     * @Optional
     * @Group 1624846b7d87d3ab55e907c443fca9d6:2020
     * @var \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $personalizedNameAudioFile = null;

    /**
     * @ElementName userMessagingAliasList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingAliasListModify
     * @Optional
     * @Group 1624846b7d87d3ab55e907c443fca9d6:2020
     * @var \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingAliasListModify|null
     */
    private $userMessagingAliasList = null;

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

    /**
     * Getter for voiceMessagingDistributionList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingDistributionListModify[]
     */
    public function getVoiceMessagingDistributionList()
    {
        return $this->voiceMessagingDistributionList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->voiceMessagingDistributionList;
    }

    /**
     * Setter for voiceMessagingDistributionList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingDistributionListModify[] $voiceMessagingDistributionList
     * @return $this
     */
    public function setVoiceMessagingDistributionList(array $voiceMessagingDistributionList)
    {
        $this->voiceMessagingDistributionList = $voiceMessagingDistributionList;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetVoiceMessagingDistributionList()
    {
        $this->voiceMessagingDistributionList = null;
        return $this;
    }

    /**
     * Adder for voiceMessagingDistributionList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingDistributionListModify $voiceMessagingDistributionList
     * @return $this
     */
    public function addVoiceMessagingDistributionList($voiceMessagingDistributionList)
    {
        $this->voiceMessagingDistributionList[] = $voiceMessagingDistributionList;
        return $this;
    }

    /**
     * Getter for busyAnnouncementSelection
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AnnouncementSelection
     */
    public function getBusyAnnouncementSelection()
    {
        return $this->busyAnnouncementSelection instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->busyAnnouncementSelection;
    }

    /**
     * Setter for busyAnnouncementSelection
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AnnouncementSelection $busyAnnouncementSelection
     * @return $this
     */
    public function setBusyAnnouncementSelection(\CWM\BroadWorksConnector\Ocip\Models\AnnouncementSelection $busyAnnouncementSelection)
    {
        $this->busyAnnouncementSelection = $busyAnnouncementSelection;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetBusyAnnouncementSelection()
    {
        $this->busyAnnouncementSelection = null;
        return $this;
    }

    /**
     * Getter for busyPersonalAudioFile
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey|null
     */
    public function getBusyPersonalAudioFile()
    {
        return $this->busyPersonalAudioFile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->busyPersonalAudioFile;
    }

    /**
     * Setter for busyPersonalAudioFile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey|null $busyPersonalAudioFile
     * @return $this
     */
    public function setBusyPersonalAudioFile(\CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey $busyPersonalAudioFile)
    {
        if ($busyPersonalAudioFile === null) {
            $this->busyPersonalAudioFile = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->busyPersonalAudioFile = $busyPersonalAudioFile;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetBusyPersonalAudioFile()
    {
        $this->busyPersonalAudioFile = null;
        return $this;
    }

    /**
     * Getter for busyPersonalVideoFile
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey|null
     */
    public function getBusyPersonalVideoFile()
    {
        return $this->busyPersonalVideoFile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->busyPersonalVideoFile;
    }

    /**
     * Setter for busyPersonalVideoFile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey|null $busyPersonalVideoFile
     * @return $this
     */
    public function setBusyPersonalVideoFile(\CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey $busyPersonalVideoFile)
    {
        if ($busyPersonalVideoFile === null) {
            $this->busyPersonalVideoFile = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->busyPersonalVideoFile = $busyPersonalVideoFile;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetBusyPersonalVideoFile()
    {
        $this->busyPersonalVideoFile = null;
        return $this;
    }

    /**
     * Getter for noAnswerAnnouncementSelection
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingNoAnswerGreetingSelection
     */
    public function getNoAnswerAnnouncementSelection()
    {
        return $this->noAnswerAnnouncementSelection instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->noAnswerAnnouncementSelection;
    }

    /**
     * Setter for noAnswerAnnouncementSelection
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingNoAnswerGreetingSelection $noAnswerAnnouncementSelection
     * @return $this
     */
    public function setNoAnswerAnnouncementSelection(\CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingNoAnswerGreetingSelection $noAnswerAnnouncementSelection)
    {
        $this->noAnswerAnnouncementSelection = $noAnswerAnnouncementSelection;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNoAnswerAnnouncementSelection()
    {
        $this->noAnswerAnnouncementSelection = null;
        return $this;
    }

    /**
     * Getter for noAnswerPersonalAudioFile
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey|null
     */
    public function getNoAnswerPersonalAudioFile()
    {
        return $this->noAnswerPersonalAudioFile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->noAnswerPersonalAudioFile;
    }

    /**
     * Setter for noAnswerPersonalAudioFile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey|null $noAnswerPersonalAudioFile
     * @return $this
     */
    public function setNoAnswerPersonalAudioFile(\CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey $noAnswerPersonalAudioFile)
    {
        if ($noAnswerPersonalAudioFile === null) {
            $this->noAnswerPersonalAudioFile = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->noAnswerPersonalAudioFile = $noAnswerPersonalAudioFile;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNoAnswerPersonalAudioFile()
    {
        $this->noAnswerPersonalAudioFile = null;
        return $this;
    }

    /**
     * Getter for noAnswerPersonalVideoFile
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey|null
     */
    public function getNoAnswerPersonalVideoFile()
    {
        return $this->noAnswerPersonalVideoFile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->noAnswerPersonalVideoFile;
    }

    /**
     * Setter for noAnswerPersonalVideoFile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey|null $noAnswerPersonalVideoFile
     * @return $this
     */
    public function setNoAnswerPersonalVideoFile(\CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey $noAnswerPersonalVideoFile)
    {
        if ($noAnswerPersonalVideoFile === null) {
            $this->noAnswerPersonalVideoFile = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->noAnswerPersonalVideoFile = $noAnswerPersonalVideoFile;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNoAnswerPersonalVideoFile()
    {
        $this->noAnswerPersonalVideoFile = null;
        return $this;
    }

    /**
     * Getter for noAnswerAlternateGreeting01
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingAlternateNoAnswerGreetingModify20
     */
    public function getNoAnswerAlternateGreeting01()
    {
        return $this->noAnswerAlternateGreeting01 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->noAnswerAlternateGreeting01;
    }

    /**
     * Setter for noAnswerAlternateGreeting01
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingAlternateNoAnswerGreetingModify20 $noAnswerAlternateGreeting01
     * @return $this
     */
    public function setNoAnswerAlternateGreeting01(\CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingAlternateNoAnswerGreetingModify20 $noAnswerAlternateGreeting01)
    {
        $this->noAnswerAlternateGreeting01 = $noAnswerAlternateGreeting01;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNoAnswerAlternateGreeting01()
    {
        $this->noAnswerAlternateGreeting01 = null;
        return $this;
    }

    /**
     * Getter for noAnswerAlternateGreeting02
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingAlternateNoAnswerGreetingModify20
     */
    public function getNoAnswerAlternateGreeting02()
    {
        return $this->noAnswerAlternateGreeting02 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->noAnswerAlternateGreeting02;
    }

    /**
     * Setter for noAnswerAlternateGreeting02
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingAlternateNoAnswerGreetingModify20 $noAnswerAlternateGreeting02
     * @return $this
     */
    public function setNoAnswerAlternateGreeting02(\CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingAlternateNoAnswerGreetingModify20 $noAnswerAlternateGreeting02)
    {
        $this->noAnswerAlternateGreeting02 = $noAnswerAlternateGreeting02;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNoAnswerAlternateGreeting02()
    {
        $this->noAnswerAlternateGreeting02 = null;
        return $this;
    }

    /**
     * Getter for noAnswerAlternateGreeting03
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingAlternateNoAnswerGreetingModify20
     */
    public function getNoAnswerAlternateGreeting03()
    {
        return $this->noAnswerAlternateGreeting03 instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->noAnswerAlternateGreeting03;
    }

    /**
     * Setter for noAnswerAlternateGreeting03
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingAlternateNoAnswerGreetingModify20 $noAnswerAlternateGreeting03
     * @return $this
     */
    public function setNoAnswerAlternateGreeting03(\CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingAlternateNoAnswerGreetingModify20 $noAnswerAlternateGreeting03)
    {
        $this->noAnswerAlternateGreeting03 = $noAnswerAlternateGreeting03;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNoAnswerAlternateGreeting03()
    {
        $this->noAnswerAlternateGreeting03 = null;
        return $this;
    }

    /**
     * Getter for extendedAwayEnabled
     *
     * @return bool
     */
    public function getExtendedAwayEnabled()
    {
        return $this->extendedAwayEnabled instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->extendedAwayEnabled;
    }

    /**
     * Setter for extendedAwayEnabled
     *
     * @param bool $extendedAwayEnabled
     * @return $this
     */
    public function setExtendedAwayEnabled($extendedAwayEnabled)
    {
        $this->extendedAwayEnabled = $extendedAwayEnabled;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetExtendedAwayEnabled()
    {
        $this->extendedAwayEnabled = null;
        return $this;
    }

    /**
     * Getter for extendedAwayDisableMessageDeposit
     *
     * @return bool
     */
    public function getExtendedAwayDisableMessageDeposit()
    {
        return $this->extendedAwayDisableMessageDeposit instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->extendedAwayDisableMessageDeposit;
    }

    /**
     * Setter for extendedAwayDisableMessageDeposit
     *
     * @param bool $extendedAwayDisableMessageDeposit
     * @return $this
     */
    public function setExtendedAwayDisableMessageDeposit($extendedAwayDisableMessageDeposit)
    {
        $this->extendedAwayDisableMessageDeposit = $extendedAwayDisableMessageDeposit;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetExtendedAwayDisableMessageDeposit()
    {
        $this->extendedAwayDisableMessageDeposit = null;
        return $this;
    }

    /**
     * Getter for extendedAwayAudioFile
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey|null
     */
    public function getExtendedAwayAudioFile()
    {
        return $this->extendedAwayAudioFile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->extendedAwayAudioFile;
    }

    /**
     * Setter for extendedAwayAudioFile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey|null $extendedAwayAudioFile
     * @return $this
     */
    public function setExtendedAwayAudioFile(\CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey $extendedAwayAudioFile)
    {
        if ($extendedAwayAudioFile === null) {
            $this->extendedAwayAudioFile = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->extendedAwayAudioFile = $extendedAwayAudioFile;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetExtendedAwayAudioFile()
    {
        $this->extendedAwayAudioFile = null;
        return $this;
    }

    /**
     * Getter for extendedAwayVideoFile
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey|null
     */
    public function getExtendedAwayVideoFile()
    {
        return $this->extendedAwayVideoFile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->extendedAwayVideoFile;
    }

    /**
     * Setter for extendedAwayVideoFile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey|null $extendedAwayVideoFile
     * @return $this
     */
    public function setExtendedAwayVideoFile(\CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey $extendedAwayVideoFile)
    {
        if ($extendedAwayVideoFile === null) {
            $this->extendedAwayVideoFile = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->extendedAwayVideoFile = $extendedAwayVideoFile;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetExtendedAwayVideoFile()
    {
        $this->extendedAwayVideoFile = null;
        return $this;
    }

    /**
     * Getter for noAnswerNumberOfRings
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingNumberOfRings
     */
    public function getNoAnswerNumberOfRings()
    {
        return $this->noAnswerNumberOfRings instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->noAnswerNumberOfRings;
    }

    /**
     * Setter for noAnswerNumberOfRings
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingNumberOfRings $noAnswerNumberOfRings
     * @return $this
     */
    public function setNoAnswerNumberOfRings(\CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingNumberOfRings $noAnswerNumberOfRings)
    {
        $this->noAnswerNumberOfRings = $noAnswerNumberOfRings;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNoAnswerNumberOfRings()
    {
        $this->noAnswerNumberOfRings = null;
        return $this;
    }

    /**
     * Getter for disableMessageDeposit
     *
     * @return bool
     */
    public function getDisableMessageDeposit()
    {
        return $this->disableMessageDeposit instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->disableMessageDeposit;
    }

    /**
     * Setter for disableMessageDeposit
     *
     * @param bool $disableMessageDeposit
     * @return $this
     */
    public function setDisableMessageDeposit($disableMessageDeposit)
    {
        $this->disableMessageDeposit = $disableMessageDeposit;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDisableMessageDeposit()
    {
        $this->disableMessageDeposit = null;
        return $this;
    }

    /**
     * Getter for disableMessageDepositAction
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingDisableMessageDepositSelection
     */
    public function getDisableMessageDepositAction()
    {
        return $this->disableMessageDepositAction instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->disableMessageDepositAction;
    }

    /**
     * Setter for disableMessageDepositAction
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingDisableMessageDepositSelection $disableMessageDepositAction
     * @return $this
     */
    public function setDisableMessageDepositAction(\CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingDisableMessageDepositSelection $disableMessageDepositAction)
    {
        $this->disableMessageDepositAction = $disableMessageDepositAction;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDisableMessageDepositAction()
    {
        $this->disableMessageDepositAction = null;
        return $this;
    }

    /**
     * Getter for greetingOnlyForwardDestination
     *
     * @return string|null
     */
    public function getGreetingOnlyForwardDestination()
    {
        return $this->greetingOnlyForwardDestination instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->greetingOnlyForwardDestination;
    }

    /**
     * Setter for greetingOnlyForwardDestination
     *
     * @param string|null $greetingOnlyForwardDestination
     * @return $this
     */
    public function setGreetingOnlyForwardDestination($greetingOnlyForwardDestination)
    {
        if ($greetingOnlyForwardDestination === null) {
            $this->greetingOnlyForwardDestination = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->greetingOnlyForwardDestination = $greetingOnlyForwardDestination;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGreetingOnlyForwardDestination()
    {
        $this->greetingOnlyForwardDestination = null;
        return $this;
    }

    /**
     * Getter for outgoingSMDIMWIisActive
     *
     * @return bool
     */
    public function getOutgoingSMDIMWIisActive()
    {
        return $this->outgoingSMDIMWIisActive instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->outgoingSMDIMWIisActive;
    }

    /**
     * Setter for outgoingSMDIMWIisActive
     *
     * @param bool $outgoingSMDIMWIisActive
     * @return $this
     */
    public function setOutgoingSMDIMWIisActive($outgoingSMDIMWIisActive)
    {
        $this->outgoingSMDIMWIisActive = $outgoingSMDIMWIisActive;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetOutgoingSMDIMWIisActive()
    {
        $this->outgoingSMDIMWIisActive = null;
        return $this;
    }

    /**
     * Getter for outgoingSMDIMWIPhoneNumberList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementOutgoingDNList|null
     */
    public function getOutgoingSMDIMWIPhoneNumberList()
    {
        return $this->outgoingSMDIMWIPhoneNumberList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->outgoingSMDIMWIPhoneNumberList;
    }

    /**
     * Setter for outgoingSMDIMWIPhoneNumberList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementOutgoingDNList|null $outgoingSMDIMWIPhoneNumberList
     * @return $this
     */
    public function setOutgoingSMDIMWIPhoneNumberList(\CWM\BroadWorksConnector\Ocip\Models\ReplacementOutgoingDNList $outgoingSMDIMWIPhoneNumberList)
    {
        if ($outgoingSMDIMWIPhoneNumberList === null) {
            $this->outgoingSMDIMWIPhoneNumberList = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->outgoingSMDIMWIPhoneNumberList = $outgoingSMDIMWIPhoneNumberList;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetOutgoingSMDIMWIPhoneNumberList()
    {
        $this->outgoingSMDIMWIPhoneNumberList = null;
        return $this;
    }

    /**
     * Getter for voiceManagementisActive
     *
     * @return bool
     */
    public function getVoiceManagementisActive()
    {
        return $this->voiceManagementisActive instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->voiceManagementisActive;
    }

    /**
     * Setter for voiceManagementisActive
     *
     * @param bool $voiceManagementisActive
     * @return $this
     */
    public function setVoiceManagementisActive($voiceManagementisActive)
    {
        $this->voiceManagementisActive = $voiceManagementisActive;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetVoiceManagementisActive()
    {
        $this->voiceManagementisActive = null;
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
    public function setVoiceMessageDeliveryEmailAddress($voiceMessageDeliveryEmailAddress)
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
    public function setVoiceMessageNotifyEmailAddress($voiceMessageNotifyEmailAddress)
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
    public function setVoiceMessageCarbonCopyEmailAddress($voiceMessageCarbonCopyEmailAddress)
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
    public function setTransferPhoneNumber($transferPhoneNumber)
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

    /**
     * Getter for usePersonalizedName
     *
     * @return bool
     */
    public function getUsePersonalizedName()
    {
        return $this->usePersonalizedName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->usePersonalizedName;
    }

    /**
     * Setter for usePersonalizedName
     *
     * @param bool $usePersonalizedName
     * @return $this
     */
    public function setUsePersonalizedName($usePersonalizedName)
    {
        $this->usePersonalizedName = $usePersonalizedName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUsePersonalizedName()
    {
        $this->usePersonalizedName = null;
        return $this;
    }

    /**
     * Getter for voicePortalAutoLogin
     *
     * @return bool
     */
    public function getVoicePortalAutoLogin()
    {
        return $this->voicePortalAutoLogin instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->voicePortalAutoLogin;
    }

    /**
     * Setter for voicePortalAutoLogin
     *
     * @param bool $voicePortalAutoLogin
     * @return $this
     */
    public function setVoicePortalAutoLogin($voicePortalAutoLogin)
    {
        $this->voicePortalAutoLogin = $voicePortalAutoLogin;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetVoicePortalAutoLogin()
    {
        $this->voicePortalAutoLogin = null;
        return $this;
    }

    /**
     * Getter for personalizedNameAudioFile
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey|null
     */
    public function getPersonalizedNameAudioFile()
    {
        return $this->personalizedNameAudioFile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->personalizedNameAudioFile;
    }

    /**
     * Setter for personalizedNameAudioFile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey|null $personalizedNameAudioFile
     * @return $this
     */
    public function setPersonalizedNameAudioFile(\CWM\BroadWorksConnector\Ocip\Models\AnnouncementFileLevelKey $personalizedNameAudioFile)
    {
        if ($personalizedNameAudioFile === null) {
            $this->personalizedNameAudioFile = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->personalizedNameAudioFile = $personalizedNameAudioFile;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPersonalizedNameAudioFile()
    {
        $this->personalizedNameAudioFile = null;
        return $this;
    }

    /**
     * Getter for userMessagingAliasList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingAliasListModify
     */
    public function getUserMessagingAliasList()
    {
        return $this->userMessagingAliasList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userMessagingAliasList;
    }

    /**
     * Setter for userMessagingAliasList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingAliasListModify $userMessagingAliasList
     * @return $this
     */
    public function setUserMessagingAliasList(\CWM\BroadWorksConnector\Ocip\Models\VoiceMessagingAliasListModify $userMessagingAliasList)
    {
        $this->userMessagingAliasList = $userMessagingAliasList;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserMessagingAliasList()
    {
        $this->userMessagingAliasList = null;
        return $this;
    }


}

