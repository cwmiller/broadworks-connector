<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemVoiceMessagingGroupGetVoicePortalMenusResponse20
 *
 * Response to SystemVoiceMessagingGroupGetVoicePortalMenusRequest20.
 *
 * @see SystemVoiceMessagingGroupGetVoicePortalMenusRequest20
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:35209","type":"sequence"}]
 */
class SystemVoiceMessagingGroupGetVoicePortalMenusResponse20 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName useVoicePortalCustomization
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:35209
     * @var bool|null
     */
    private $useVoicePortalCustomization = null;

    /**
     * @ElementName voicePortalMainMenuKeys
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20VoicePortalMainMenuKeys
     * @Group ab0042aa512abc10edb3c55e4b416b0b:35209
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20VoicePortalMainMenuKeys|null
     */
    private $voicePortalMainMenuKeys = null;

    /**
     * @ElementName announcementMenuKeys
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20AnnouncementMenuKeys
     * @Group ab0042aa512abc10edb3c55e4b416b0b:35209
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20AnnouncementMenuKeys|null
     */
    private $announcementMenuKeys = null;

    /**
     * @ElementName announcementRecordingMenuKeys
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20AnnouncementRecordingMenuKeys
     * @Group ab0042aa512abc10edb3c55e4b416b0b:35209
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20AnnouncementRecordingMenuKeys|null
     */
    private $announcementRecordingMenuKeys = null;

    /**
     * @ElementName greetingsMenuKeys
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20GreetingsMenuKeys
     * @Group ab0042aa512abc10edb3c55e4b416b0b:35209
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20GreetingsMenuKeys|null
     */
    private $greetingsMenuKeys = null;

    /**
     * @ElementName conferenceGreetingMenuKeys
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20ConferenceGreetingMenuKeys
     * @Group ab0042aa512abc10edb3c55e4b416b0b:35209
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20ConferenceGreetingMenuKeys|null
     */
    private $conferenceGreetingMenuKeys = null;

    /**
     * @ElementName voiceMessagingMenuKeys
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20VoiceMessagingMenuKeys
     * @Group ab0042aa512abc10edb3c55e4b416b0b:35209
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20VoiceMessagingMenuKeys|null
     */
    private $voiceMessagingMenuKeys = null;

    /**
     * @ElementName playGreetingMenuKeys
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20PlayGreetingMenuKeys
     * @Group ab0042aa512abc10edb3c55e4b416b0b:35209
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20PlayGreetingMenuKeys|null
     */
    private $playGreetingMenuKeys = null;

    /**
     * @ElementName changeBusyOrNoAnswerGreetingMenuKeys
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20ChangeBusyOrNoAnswerGreetingMenuKeys
     * @Group ab0042aa512abc10edb3c55e4b416b0b:35209
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20ChangeBusyOrNoAnswerGreetingMenuKeys|null
     */
    private $changeBusyOrNoAnswerGreetingMenuKeys = null;

    /**
     * @ElementName changeExtendedAwayGreetingMenuKeys
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20ChangeExtendedAwayGreetingMenuKeys
     * @Group ab0042aa512abc10edb3c55e4b416b0b:35209
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20ChangeExtendedAwayGreetingMenuKeys|null
     */
    private $changeExtendedAwayGreetingMenuKeys = null;

    /**
     * @ElementName recordNewGreetingOrPersonalizedNameMenuKeys
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20RecordNewGreetingOrPersonalizedNameMenuKeys
     * @Group ab0042aa512abc10edb3c55e4b416b0b:35209
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20RecordNewGreetingOrPersonalizedNameMenuKeys|null
     */
    private $recordNewGreetingOrPersonalizedNameMenuKeys = null;

    /**
     * @ElementName deleteAllMessagesMenuKeys
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20DeleteAllMessagesMenuKeys
     * @Group ab0042aa512abc10edb3c55e4b416b0b:35209
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20DeleteAllMessagesMenuKeys|null
     */
    private $deleteAllMessagesMenuKeys = null;

    /**
     * @ElementName commPilotExpressProfileMenuKeys
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20CommPilotExpressProfileMenuKeys
     * @Group ab0042aa512abc10edb3c55e4b416b0b:35209
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20CommPilotExpressProfileMenuKeys|null
     */
    private $commPilotExpressProfileMenuKeys = null;

    /**
     * @ElementName personalizedNameMenuKeys
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20PersonalizedNameMenuKeys
     * @Group ab0042aa512abc10edb3c55e4b416b0b:35209
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20PersonalizedNameMenuKeys|null
     */
    private $personalizedNameMenuKeys = null;

    /**
     * @ElementName callForwardingOptionsMenuKeys
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20CallForwardingOptionsMenuKeys
     * @Group ab0042aa512abc10edb3c55e4b416b0b:35209
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20CallForwardingOptionsMenuKeys|null
     */
    private $callForwardingOptionsMenuKeys = null;

    /**
     * @ElementName changeCallForwardingDestinationMenuKeys
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20ChangeCallForwardingDestinationMenuKeys
     * @Group ab0042aa512abc10edb3c55e4b416b0b:35209
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20ChangeCallForwardingDestinationMenuKeys|null
     */
    private $changeCallForwardingDestinationMenuKeys = null;

    /**
     * @ElementName voicePortalCallingMenuKeys
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20VoicePortalCallingMenuKeys
     * @Group ab0042aa512abc10edb3c55e4b416b0b:35209
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20VoicePortalCallingMenuKeys|null
     */
    private $voicePortalCallingMenuKeys = null;

    /**
     * @ElementName hotelingMenuKeys
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20HotelingMenuKeys
     * @Group ab0042aa512abc10edb3c55e4b416b0b:35209
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20HotelingMenuKeys|null
     */
    private $hotelingMenuKeys = null;

    /**
     * @ElementName passcodeMenuKeys
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20PasscodeMenuKeys
     * @Group ab0042aa512abc10edb3c55e4b416b0b:35209
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20PasscodeMenuKeys|null
     */
    private $passcodeMenuKeys = null;

    /**
     * @ElementName playMessagesMenuKeys
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20PlayMessagesMenuKeys
     * @Group ab0042aa512abc10edb3c55e4b416b0b:35209
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20PlayMessagesMenuKeys|null
     */
    private $playMessagesMenuKeys = null;

    /**
     * @ElementName playMessageMenuKeys
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20PlayMessageMenuKeys
     * @Group ab0042aa512abc10edb3c55e4b416b0b:35209
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20PlayMessageMenuKeys|null
     */
    private $playMessageMenuKeys = null;

    /**
     * @ElementName additionalMessageOptionsMenuKeys
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20AdditionalMessageOptionsMenuKeys
     * @Group ab0042aa512abc10edb3c55e4b416b0b:35209
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20AdditionalMessageOptionsMenuKeys|null
     */
    private $additionalMessageOptionsMenuKeys = null;

    /**
     * @ElementName forwardOrComposeMessageMenuKeys
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20ForwardOrComposeMessageMenuKeys
     * @Group ab0042aa512abc10edb3c55e4b416b0b:35209
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20ForwardOrComposeMessageMenuKeys|null
     */
    private $forwardOrComposeMessageMenuKeys = null;

    /**
     * @ElementName replyMessageMenuKeys
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20ReplyMessageMenuKeys
     * @Group ab0042aa512abc10edb3c55e4b416b0b:35209
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20ReplyMessageMenuKeys|null
     */
    private $replyMessageMenuKeys = null;

    /**
     * @ElementName sendToDistributionListMenuKeys
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20SendToDistributionListMenuKeys
     * @Group ab0042aa512abc10edb3c55e4b416b0b:35209
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20SendToDistributionListMenuKeys|null
     */
    private $sendToDistributionListMenuKeys = null;

    /**
     * @ElementName selectDistributionListMenuKeys
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20SelectDistributionListMenuKeys
     * @Group ab0042aa512abc10edb3c55e4b416b0b:35209
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20SelectDistributionListMenuKeys|null
     */
    private $selectDistributionListMenuKeys = null;

    /**
     * @ElementName reviewSelectedDistributionListMenuKeys
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20ReviewSelectedDistributionListMenuKeys
     * @Group ab0042aa512abc10edb3c55e4b416b0b:35209
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20ReviewSelectedDistributionListMenuKeys|null
     */
    private $reviewSelectedDistributionListMenuKeys = null;

    /**
     * @ElementName sendMessageToSelectedDistributionListMenuKeys
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20SendMessageToSelectedDistributionListMenuKeys
     * @Group ab0042aa512abc10edb3c55e4b416b0b:35209
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20SendMessageToSelectedDistributionListMenuKeys|null
     */
    private $sendMessageToSelectedDistributionListMenuKeys = null;

    /**
     * @ElementName sendToAllGroupMembersMenuKeys
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20SendToAllGroupMembersMenuKeys
     * @Group ab0042aa512abc10edb3c55e4b416b0b:35209
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20SendToAllGroupMembersMenuKeys|null
     */
    private $sendToAllGroupMembersMenuKeys = null;

    /**
     * @ElementName sendToPersonMenuKeys
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20SendToPersonMenuKeys
     * @Group ab0042aa512abc10edb3c55e4b416b0b:35209
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20SendToPersonMenuKeys|null
     */
    private $sendToPersonMenuKeys = null;

    /**
     * @ElementName changeCurrentIntroductionOrMessageOrReplyMenuKeys
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20ChangeCurrentIntroductionOrMessageOrReplyMenuKeys
     * @Group ab0042aa512abc10edb3c55e4b416b0b:35209
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20ChangeCurrentIntroductionOrMessageOrReplyMenuKeys|null
     */
    private $changeCurrentIntroductionOrMessageOrReplyMenuKeys = null;

    /**
     * @ElementName voicePortalLoginMenuKeys
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20VoicePortalLoginMenuKeys
     * @Group ab0042aa512abc10edb3c55e4b416b0b:35209
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20VoicePortalLoginMenuKeys|null
     */
    private $voicePortalLoginMenuKeys = null;

    /**
     * @ElementName faxMessagingMenuKeys
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20FaxMessagingMenuKeys
     * @Group ab0042aa512abc10edb3c55e4b416b0b:35209
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20FaxMessagingMenuKeys|null
     */
    private $faxMessagingMenuKeys = null;

    /**
     * @ElementName messageDepositMenuKeys
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20MessageDepositMenuKeys
     * @Group ab0042aa512abc10edb3c55e4b416b0b:35209
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20MessageDepositMenuKeys|null
     */
    private $messageDepositMenuKeys = null;

    /**
     * @ElementName disableMessageDepositMenuKeys
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20DisableMessageDepositMenuKeys
     * @Group ab0042aa512abc10edb3c55e4b416b0b:35209
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20DisableMessageDepositMenuKeys|null
     */
    private $disableMessageDepositMenuKeys = null;

    /**
     * @ElementName greetingOnlyForwardingDestinationMenuKeys
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20GreetingOnlyForwardingDestinationMenuKeys
     * @Group ab0042aa512abc10edb3c55e4b416b0b:35209
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20GreetingOnlyForwardingDestinationMenuKeys|null
     */
    private $greetingOnlyForwardingDestinationMenuKeys = null;

    /**
     * Getter for useVoicePortalCustomization
     *
     * @return bool
     */
    public function getUseVoicePortalCustomization()
    {
        return $this->useVoicePortalCustomization instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useVoicePortalCustomization;
    }

    /**
     * Setter for useVoicePortalCustomization
     *
     * @param bool $useVoicePortalCustomization
     * @return $this
     */
    public function setUseVoicePortalCustomization($useVoicePortalCustomization)
    {
        $this->useVoicePortalCustomization = $useVoicePortalCustomization;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseVoicePortalCustomization()
    {
        $this->useVoicePortalCustomization = null;
        return $this;
    }

    /**
     * Getter for voicePortalMainMenuKeys
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20VoicePortalMainMenuKeys
     */
    public function getVoicePortalMainMenuKeys()
    {
        return $this->voicePortalMainMenuKeys instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->voicePortalMainMenuKeys;
    }

    /**
     * Setter for voicePortalMainMenuKeys
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20VoicePortalMainMenuKeys $voicePortalMainMenuKeys
     * @return $this
     */
    public function setVoicePortalMainMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20VoicePortalMainMenuKeys $voicePortalMainMenuKeys)
    {
        $this->voicePortalMainMenuKeys = $voicePortalMainMenuKeys;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetVoicePortalMainMenuKeys()
    {
        $this->voicePortalMainMenuKeys = null;
        return $this;
    }

    /**
     * Getter for announcementMenuKeys
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20AnnouncementMenuKeys
     */
    public function getAnnouncementMenuKeys()
    {
        return $this->announcementMenuKeys instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->announcementMenuKeys;
    }

    /**
     * Setter for announcementMenuKeys
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20AnnouncementMenuKeys $announcementMenuKeys
     * @return $this
     */
    public function setAnnouncementMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20AnnouncementMenuKeys $announcementMenuKeys)
    {
        $this->announcementMenuKeys = $announcementMenuKeys;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAnnouncementMenuKeys()
    {
        $this->announcementMenuKeys = null;
        return $this;
    }

    /**
     * Getter for announcementRecordingMenuKeys
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20AnnouncementRecordingMenuKeys
     */
    public function getAnnouncementRecordingMenuKeys()
    {
        return $this->announcementRecordingMenuKeys instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->announcementRecordingMenuKeys;
    }

    /**
     * Setter for announcementRecordingMenuKeys
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20AnnouncementRecordingMenuKeys $announcementRecordingMenuKeys
     * @return $this
     */
    public function setAnnouncementRecordingMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20AnnouncementRecordingMenuKeys $announcementRecordingMenuKeys)
    {
        $this->announcementRecordingMenuKeys = $announcementRecordingMenuKeys;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAnnouncementRecordingMenuKeys()
    {
        $this->announcementRecordingMenuKeys = null;
        return $this;
    }

    /**
     * Getter for greetingsMenuKeys
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20GreetingsMenuKeys
     */
    public function getGreetingsMenuKeys()
    {
        return $this->greetingsMenuKeys instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->greetingsMenuKeys;
    }

    /**
     * Setter for greetingsMenuKeys
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20GreetingsMenuKeys $greetingsMenuKeys
     * @return $this
     */
    public function setGreetingsMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20GreetingsMenuKeys $greetingsMenuKeys)
    {
        $this->greetingsMenuKeys = $greetingsMenuKeys;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGreetingsMenuKeys()
    {
        $this->greetingsMenuKeys = null;
        return $this;
    }

    /**
     * Getter for conferenceGreetingMenuKeys
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20ConferenceGreetingMenuKeys
     */
    public function getConferenceGreetingMenuKeys()
    {
        return $this->conferenceGreetingMenuKeys instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->conferenceGreetingMenuKeys;
    }

    /**
     * Setter for conferenceGreetingMenuKeys
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20ConferenceGreetingMenuKeys $conferenceGreetingMenuKeys
     * @return $this
     */
    public function setConferenceGreetingMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20ConferenceGreetingMenuKeys $conferenceGreetingMenuKeys)
    {
        $this->conferenceGreetingMenuKeys = $conferenceGreetingMenuKeys;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetConferenceGreetingMenuKeys()
    {
        $this->conferenceGreetingMenuKeys = null;
        return $this;
    }

    /**
     * Getter for voiceMessagingMenuKeys
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20VoiceMessagingMenuKeys
     */
    public function getVoiceMessagingMenuKeys()
    {
        return $this->voiceMessagingMenuKeys instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->voiceMessagingMenuKeys;
    }

    /**
     * Setter for voiceMessagingMenuKeys
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20VoiceMessagingMenuKeys $voiceMessagingMenuKeys
     * @return $this
     */
    public function setVoiceMessagingMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20VoiceMessagingMenuKeys $voiceMessagingMenuKeys)
    {
        $this->voiceMessagingMenuKeys = $voiceMessagingMenuKeys;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetVoiceMessagingMenuKeys()
    {
        $this->voiceMessagingMenuKeys = null;
        return $this;
    }

    /**
     * Getter for playGreetingMenuKeys
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20PlayGreetingMenuKeys
     */
    public function getPlayGreetingMenuKeys()
    {
        return $this->playGreetingMenuKeys instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->playGreetingMenuKeys;
    }

    /**
     * Setter for playGreetingMenuKeys
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20PlayGreetingMenuKeys $playGreetingMenuKeys
     * @return $this
     */
    public function setPlayGreetingMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20PlayGreetingMenuKeys $playGreetingMenuKeys)
    {
        $this->playGreetingMenuKeys = $playGreetingMenuKeys;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPlayGreetingMenuKeys()
    {
        $this->playGreetingMenuKeys = null;
        return $this;
    }

    /**
     * Getter for changeBusyOrNoAnswerGreetingMenuKeys
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20ChangeBusyOrNoAnswerGreetingMenuKeys
     */
    public function getChangeBusyOrNoAnswerGreetingMenuKeys()
    {
        return $this->changeBusyOrNoAnswerGreetingMenuKeys instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->changeBusyOrNoAnswerGreetingMenuKeys;
    }

    /**
     * Setter for changeBusyOrNoAnswerGreetingMenuKeys
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20ChangeBusyOrNoAnswerGreetingMenuKeys $changeBusyOrNoAnswerGreetingMenuKeys
     * @return $this
     */
    public function setChangeBusyOrNoAnswerGreetingMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20ChangeBusyOrNoAnswerGreetingMenuKeys $changeBusyOrNoAnswerGreetingMenuKeys)
    {
        $this->changeBusyOrNoAnswerGreetingMenuKeys = $changeBusyOrNoAnswerGreetingMenuKeys;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetChangeBusyOrNoAnswerGreetingMenuKeys()
    {
        $this->changeBusyOrNoAnswerGreetingMenuKeys = null;
        return $this;
    }

    /**
     * Getter for changeExtendedAwayGreetingMenuKeys
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20ChangeExtendedAwayGreetingMenuKeys
     */
    public function getChangeExtendedAwayGreetingMenuKeys()
    {
        return $this->changeExtendedAwayGreetingMenuKeys instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->changeExtendedAwayGreetingMenuKeys;
    }

    /**
     * Setter for changeExtendedAwayGreetingMenuKeys
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20ChangeExtendedAwayGreetingMenuKeys $changeExtendedAwayGreetingMenuKeys
     * @return $this
     */
    public function setChangeExtendedAwayGreetingMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20ChangeExtendedAwayGreetingMenuKeys $changeExtendedAwayGreetingMenuKeys)
    {
        $this->changeExtendedAwayGreetingMenuKeys = $changeExtendedAwayGreetingMenuKeys;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetChangeExtendedAwayGreetingMenuKeys()
    {
        $this->changeExtendedAwayGreetingMenuKeys = null;
        return $this;
    }

    /**
     * Getter for recordNewGreetingOrPersonalizedNameMenuKeys
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20RecordNewGreetingOrPersonalizedNameMenuKeys
     */
    public function getRecordNewGreetingOrPersonalizedNameMenuKeys()
    {
        return $this->recordNewGreetingOrPersonalizedNameMenuKeys instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->recordNewGreetingOrPersonalizedNameMenuKeys;
    }

    /**
     * Setter for recordNewGreetingOrPersonalizedNameMenuKeys
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20RecordNewGreetingOrPersonalizedNameMenuKeys $recordNewGreetingOrPersonalizedNameMenuKeys
     * @return $this
     */
    public function setRecordNewGreetingOrPersonalizedNameMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20RecordNewGreetingOrPersonalizedNameMenuKeys $recordNewGreetingOrPersonalizedNameMenuKeys)
    {
        $this->recordNewGreetingOrPersonalizedNameMenuKeys = $recordNewGreetingOrPersonalizedNameMenuKeys;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRecordNewGreetingOrPersonalizedNameMenuKeys()
    {
        $this->recordNewGreetingOrPersonalizedNameMenuKeys = null;
        return $this;
    }

    /**
     * Getter for deleteAllMessagesMenuKeys
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20DeleteAllMessagesMenuKeys
     */
    public function getDeleteAllMessagesMenuKeys()
    {
        return $this->deleteAllMessagesMenuKeys instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deleteAllMessagesMenuKeys;
    }

    /**
     * Setter for deleteAllMessagesMenuKeys
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20DeleteAllMessagesMenuKeys $deleteAllMessagesMenuKeys
     * @return $this
     */
    public function setDeleteAllMessagesMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20DeleteAllMessagesMenuKeys $deleteAllMessagesMenuKeys)
    {
        $this->deleteAllMessagesMenuKeys = $deleteAllMessagesMenuKeys;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDeleteAllMessagesMenuKeys()
    {
        $this->deleteAllMessagesMenuKeys = null;
        return $this;
    }

    /**
     * Getter for commPilotExpressProfileMenuKeys
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20CommPilotExpressProfileMenuKeys
     */
    public function getCommPilotExpressProfileMenuKeys()
    {
        return $this->commPilotExpressProfileMenuKeys instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->commPilotExpressProfileMenuKeys;
    }

    /**
     * Setter for commPilotExpressProfileMenuKeys
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20CommPilotExpressProfileMenuKeys $commPilotExpressProfileMenuKeys
     * @return $this
     */
    public function setCommPilotExpressProfileMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20CommPilotExpressProfileMenuKeys $commPilotExpressProfileMenuKeys)
    {
        $this->commPilotExpressProfileMenuKeys = $commPilotExpressProfileMenuKeys;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCommPilotExpressProfileMenuKeys()
    {
        $this->commPilotExpressProfileMenuKeys = null;
        return $this;
    }

    /**
     * Getter for personalizedNameMenuKeys
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20PersonalizedNameMenuKeys
     */
    public function getPersonalizedNameMenuKeys()
    {
        return $this->personalizedNameMenuKeys instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->personalizedNameMenuKeys;
    }

    /**
     * Setter for personalizedNameMenuKeys
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20PersonalizedNameMenuKeys $personalizedNameMenuKeys
     * @return $this
     */
    public function setPersonalizedNameMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20PersonalizedNameMenuKeys $personalizedNameMenuKeys)
    {
        $this->personalizedNameMenuKeys = $personalizedNameMenuKeys;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPersonalizedNameMenuKeys()
    {
        $this->personalizedNameMenuKeys = null;
        return $this;
    }

    /**
     * Getter for callForwardingOptionsMenuKeys
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20CallForwardingOptionsMenuKeys
     */
    public function getCallForwardingOptionsMenuKeys()
    {
        return $this->callForwardingOptionsMenuKeys instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callForwardingOptionsMenuKeys;
    }

    /**
     * Setter for callForwardingOptionsMenuKeys
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20CallForwardingOptionsMenuKeys $callForwardingOptionsMenuKeys
     * @return $this
     */
    public function setCallForwardingOptionsMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20CallForwardingOptionsMenuKeys $callForwardingOptionsMenuKeys)
    {
        $this->callForwardingOptionsMenuKeys = $callForwardingOptionsMenuKeys;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallForwardingOptionsMenuKeys()
    {
        $this->callForwardingOptionsMenuKeys = null;
        return $this;
    }

    /**
     * Getter for changeCallForwardingDestinationMenuKeys
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20ChangeCallForwardingDestinationMenuKeys
     */
    public function getChangeCallForwardingDestinationMenuKeys()
    {
        return $this->changeCallForwardingDestinationMenuKeys instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->changeCallForwardingDestinationMenuKeys;
    }

    /**
     * Setter for changeCallForwardingDestinationMenuKeys
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20ChangeCallForwardingDestinationMenuKeys $changeCallForwardingDestinationMenuKeys
     * @return $this
     */
    public function setChangeCallForwardingDestinationMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20ChangeCallForwardingDestinationMenuKeys $changeCallForwardingDestinationMenuKeys)
    {
        $this->changeCallForwardingDestinationMenuKeys = $changeCallForwardingDestinationMenuKeys;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetChangeCallForwardingDestinationMenuKeys()
    {
        $this->changeCallForwardingDestinationMenuKeys = null;
        return $this;
    }

    /**
     * Getter for voicePortalCallingMenuKeys
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20VoicePortalCallingMenuKeys
     */
    public function getVoicePortalCallingMenuKeys()
    {
        return $this->voicePortalCallingMenuKeys instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->voicePortalCallingMenuKeys;
    }

    /**
     * Setter for voicePortalCallingMenuKeys
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20VoicePortalCallingMenuKeys $voicePortalCallingMenuKeys
     * @return $this
     */
    public function setVoicePortalCallingMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20VoicePortalCallingMenuKeys $voicePortalCallingMenuKeys)
    {
        $this->voicePortalCallingMenuKeys = $voicePortalCallingMenuKeys;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetVoicePortalCallingMenuKeys()
    {
        $this->voicePortalCallingMenuKeys = null;
        return $this;
    }

    /**
     * Getter for hotelingMenuKeys
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20HotelingMenuKeys
     */
    public function getHotelingMenuKeys()
    {
        return $this->hotelingMenuKeys instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->hotelingMenuKeys;
    }

    /**
     * Setter for hotelingMenuKeys
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20HotelingMenuKeys $hotelingMenuKeys
     * @return $this
     */
    public function setHotelingMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20HotelingMenuKeys $hotelingMenuKeys)
    {
        $this->hotelingMenuKeys = $hotelingMenuKeys;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetHotelingMenuKeys()
    {
        $this->hotelingMenuKeys = null;
        return $this;
    }

    /**
     * Getter for passcodeMenuKeys
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20PasscodeMenuKeys
     */
    public function getPasscodeMenuKeys()
    {
        return $this->passcodeMenuKeys instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->passcodeMenuKeys;
    }

    /**
     * Setter for passcodeMenuKeys
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20PasscodeMenuKeys $passcodeMenuKeys
     * @return $this
     */
    public function setPasscodeMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20PasscodeMenuKeys $passcodeMenuKeys)
    {
        $this->passcodeMenuKeys = $passcodeMenuKeys;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPasscodeMenuKeys()
    {
        $this->passcodeMenuKeys = null;
        return $this;
    }

    /**
     * Getter for playMessagesMenuKeys
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20PlayMessagesMenuKeys
     */
    public function getPlayMessagesMenuKeys()
    {
        return $this->playMessagesMenuKeys instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->playMessagesMenuKeys;
    }

    /**
     * Setter for playMessagesMenuKeys
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20PlayMessagesMenuKeys $playMessagesMenuKeys
     * @return $this
     */
    public function setPlayMessagesMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20PlayMessagesMenuKeys $playMessagesMenuKeys)
    {
        $this->playMessagesMenuKeys = $playMessagesMenuKeys;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPlayMessagesMenuKeys()
    {
        $this->playMessagesMenuKeys = null;
        return $this;
    }

    /**
     * Getter for playMessageMenuKeys
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20PlayMessageMenuKeys
     */
    public function getPlayMessageMenuKeys()
    {
        return $this->playMessageMenuKeys instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->playMessageMenuKeys;
    }

    /**
     * Setter for playMessageMenuKeys
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20PlayMessageMenuKeys $playMessageMenuKeys
     * @return $this
     */
    public function setPlayMessageMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20PlayMessageMenuKeys $playMessageMenuKeys)
    {
        $this->playMessageMenuKeys = $playMessageMenuKeys;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPlayMessageMenuKeys()
    {
        $this->playMessageMenuKeys = null;
        return $this;
    }

    /**
     * Getter for additionalMessageOptionsMenuKeys
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20AdditionalMessageOptionsMenuKeys
     */
    public function getAdditionalMessageOptionsMenuKeys()
    {
        return $this->additionalMessageOptionsMenuKeys instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->additionalMessageOptionsMenuKeys;
    }

    /**
     * Setter for additionalMessageOptionsMenuKeys
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20AdditionalMessageOptionsMenuKeys $additionalMessageOptionsMenuKeys
     * @return $this
     */
    public function setAdditionalMessageOptionsMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20AdditionalMessageOptionsMenuKeys $additionalMessageOptionsMenuKeys)
    {
        $this->additionalMessageOptionsMenuKeys = $additionalMessageOptionsMenuKeys;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAdditionalMessageOptionsMenuKeys()
    {
        $this->additionalMessageOptionsMenuKeys = null;
        return $this;
    }

    /**
     * Getter for forwardOrComposeMessageMenuKeys
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20ForwardOrComposeMessageMenuKeys
     */
    public function getForwardOrComposeMessageMenuKeys()
    {
        return $this->forwardOrComposeMessageMenuKeys instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->forwardOrComposeMessageMenuKeys;
    }

    /**
     * Setter for forwardOrComposeMessageMenuKeys
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20ForwardOrComposeMessageMenuKeys $forwardOrComposeMessageMenuKeys
     * @return $this
     */
    public function setForwardOrComposeMessageMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20ForwardOrComposeMessageMenuKeys $forwardOrComposeMessageMenuKeys)
    {
        $this->forwardOrComposeMessageMenuKeys = $forwardOrComposeMessageMenuKeys;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetForwardOrComposeMessageMenuKeys()
    {
        $this->forwardOrComposeMessageMenuKeys = null;
        return $this;
    }

    /**
     * Getter for replyMessageMenuKeys
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20ReplyMessageMenuKeys
     */
    public function getReplyMessageMenuKeys()
    {
        return $this->replyMessageMenuKeys instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->replyMessageMenuKeys;
    }

    /**
     * Setter for replyMessageMenuKeys
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20ReplyMessageMenuKeys $replyMessageMenuKeys
     * @return $this
     */
    public function setReplyMessageMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20ReplyMessageMenuKeys $replyMessageMenuKeys)
    {
        $this->replyMessageMenuKeys = $replyMessageMenuKeys;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetReplyMessageMenuKeys()
    {
        $this->replyMessageMenuKeys = null;
        return $this;
    }

    /**
     * Getter for sendToDistributionListMenuKeys
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20SendToDistributionListMenuKeys
     */
    public function getSendToDistributionListMenuKeys()
    {
        return $this->sendToDistributionListMenuKeys instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sendToDistributionListMenuKeys;
    }

    /**
     * Setter for sendToDistributionListMenuKeys
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20SendToDistributionListMenuKeys $sendToDistributionListMenuKeys
     * @return $this
     */
    public function setSendToDistributionListMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20SendToDistributionListMenuKeys $sendToDistributionListMenuKeys)
    {
        $this->sendToDistributionListMenuKeys = $sendToDistributionListMenuKeys;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSendToDistributionListMenuKeys()
    {
        $this->sendToDistributionListMenuKeys = null;
        return $this;
    }

    /**
     * Getter for selectDistributionListMenuKeys
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20SelectDistributionListMenuKeys
     */
    public function getSelectDistributionListMenuKeys()
    {
        return $this->selectDistributionListMenuKeys instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->selectDistributionListMenuKeys;
    }

    /**
     * Setter for selectDistributionListMenuKeys
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20SelectDistributionListMenuKeys $selectDistributionListMenuKeys
     * @return $this
     */
    public function setSelectDistributionListMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20SelectDistributionListMenuKeys $selectDistributionListMenuKeys)
    {
        $this->selectDistributionListMenuKeys = $selectDistributionListMenuKeys;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSelectDistributionListMenuKeys()
    {
        $this->selectDistributionListMenuKeys = null;
        return $this;
    }

    /**
     * Getter for reviewSelectedDistributionListMenuKeys
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20ReviewSelectedDistributionListMenuKeys
     */
    public function getReviewSelectedDistributionListMenuKeys()
    {
        return $this->reviewSelectedDistributionListMenuKeys instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->reviewSelectedDistributionListMenuKeys;
    }

    /**
     * Setter for reviewSelectedDistributionListMenuKeys
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20ReviewSelectedDistributionListMenuKeys $reviewSelectedDistributionListMenuKeys
     * @return $this
     */
    public function setReviewSelectedDistributionListMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20ReviewSelectedDistributionListMenuKeys $reviewSelectedDistributionListMenuKeys)
    {
        $this->reviewSelectedDistributionListMenuKeys = $reviewSelectedDistributionListMenuKeys;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetReviewSelectedDistributionListMenuKeys()
    {
        $this->reviewSelectedDistributionListMenuKeys = null;
        return $this;
    }

    /**
     * Getter for sendMessageToSelectedDistributionListMenuKeys
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20SendMessageToSelectedDistributionListMenuKeys
     */
    public function getSendMessageToSelectedDistributionListMenuKeys()
    {
        return $this->sendMessageToSelectedDistributionListMenuKeys instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sendMessageToSelectedDistributionListMenuKeys;
    }

    /**
     * Setter for sendMessageToSelectedDistributionListMenuKeys
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20SendMessageToSelectedDistributionListMenuKeys $sendMessageToSelectedDistributionListMenuKeys
     * @return $this
     */
    public function setSendMessageToSelectedDistributionListMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20SendMessageToSelectedDistributionListMenuKeys $sendMessageToSelectedDistributionListMenuKeys)
    {
        $this->sendMessageToSelectedDistributionListMenuKeys = $sendMessageToSelectedDistributionListMenuKeys;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSendMessageToSelectedDistributionListMenuKeys()
    {
        $this->sendMessageToSelectedDistributionListMenuKeys = null;
        return $this;
    }

    /**
     * Getter for sendToAllGroupMembersMenuKeys
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20SendToAllGroupMembersMenuKeys
     */
    public function getSendToAllGroupMembersMenuKeys()
    {
        return $this->sendToAllGroupMembersMenuKeys instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sendToAllGroupMembersMenuKeys;
    }

    /**
     * Setter for sendToAllGroupMembersMenuKeys
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20SendToAllGroupMembersMenuKeys $sendToAllGroupMembersMenuKeys
     * @return $this
     */
    public function setSendToAllGroupMembersMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20SendToAllGroupMembersMenuKeys $sendToAllGroupMembersMenuKeys)
    {
        $this->sendToAllGroupMembersMenuKeys = $sendToAllGroupMembersMenuKeys;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSendToAllGroupMembersMenuKeys()
    {
        $this->sendToAllGroupMembersMenuKeys = null;
        return $this;
    }

    /**
     * Getter for sendToPersonMenuKeys
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20SendToPersonMenuKeys
     */
    public function getSendToPersonMenuKeys()
    {
        return $this->sendToPersonMenuKeys instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sendToPersonMenuKeys;
    }

    /**
     * Setter for sendToPersonMenuKeys
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20SendToPersonMenuKeys $sendToPersonMenuKeys
     * @return $this
     */
    public function setSendToPersonMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20SendToPersonMenuKeys $sendToPersonMenuKeys)
    {
        $this->sendToPersonMenuKeys = $sendToPersonMenuKeys;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSendToPersonMenuKeys()
    {
        $this->sendToPersonMenuKeys = null;
        return $this;
    }

    /**
     * Getter for changeCurrentIntroductionOrMessageOrReplyMenuKeys
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20ChangeCurrentIntroductionOrMessageOrReplyMenuKeys
     */
    public function getChangeCurrentIntroductionOrMessageOrReplyMenuKeys()
    {
        return $this->changeCurrentIntroductionOrMessageOrReplyMenuKeys instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->changeCurrentIntroductionOrMessageOrReplyMenuKeys;
    }

    /**
     * Setter for changeCurrentIntroductionOrMessageOrReplyMenuKeys
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20ChangeCurrentIntroductionOrMessageOrReplyMenuKeys $changeCurrentIntroductionOrMessageOrReplyMenuKeys
     * @return $this
     */
    public function setChangeCurrentIntroductionOrMessageOrReplyMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20ChangeCurrentIntroductionOrMessageOrReplyMenuKeys $changeCurrentIntroductionOrMessageOrReplyMenuKeys)
    {
        $this->changeCurrentIntroductionOrMessageOrReplyMenuKeys = $changeCurrentIntroductionOrMessageOrReplyMenuKeys;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetChangeCurrentIntroductionOrMessageOrReplyMenuKeys()
    {
        $this->changeCurrentIntroductionOrMessageOrReplyMenuKeys = null;
        return $this;
    }

    /**
     * Getter for voicePortalLoginMenuKeys
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20VoicePortalLoginMenuKeys
     */
    public function getVoicePortalLoginMenuKeys()
    {
        return $this->voicePortalLoginMenuKeys instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->voicePortalLoginMenuKeys;
    }

    /**
     * Setter for voicePortalLoginMenuKeys
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20VoicePortalLoginMenuKeys $voicePortalLoginMenuKeys
     * @return $this
     */
    public function setVoicePortalLoginMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20VoicePortalLoginMenuKeys $voicePortalLoginMenuKeys)
    {
        $this->voicePortalLoginMenuKeys = $voicePortalLoginMenuKeys;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetVoicePortalLoginMenuKeys()
    {
        $this->voicePortalLoginMenuKeys = null;
        return $this;
    }

    /**
     * Getter for faxMessagingMenuKeys
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20FaxMessagingMenuKeys
     */
    public function getFaxMessagingMenuKeys()
    {
        return $this->faxMessagingMenuKeys instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->faxMessagingMenuKeys;
    }

    /**
     * Setter for faxMessagingMenuKeys
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20FaxMessagingMenuKeys $faxMessagingMenuKeys
     * @return $this
     */
    public function setFaxMessagingMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20FaxMessagingMenuKeys $faxMessagingMenuKeys)
    {
        $this->faxMessagingMenuKeys = $faxMessagingMenuKeys;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetFaxMessagingMenuKeys()
    {
        $this->faxMessagingMenuKeys = null;
        return $this;
    }

    /**
     * Getter for messageDepositMenuKeys
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20MessageDepositMenuKeys
     */
    public function getMessageDepositMenuKeys()
    {
        return $this->messageDepositMenuKeys instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->messageDepositMenuKeys;
    }

    /**
     * Setter for messageDepositMenuKeys
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20MessageDepositMenuKeys $messageDepositMenuKeys
     * @return $this
     */
    public function setMessageDepositMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20MessageDepositMenuKeys $messageDepositMenuKeys)
    {
        $this->messageDepositMenuKeys = $messageDepositMenuKeys;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMessageDepositMenuKeys()
    {
        $this->messageDepositMenuKeys = null;
        return $this;
    }

    /**
     * Getter for disableMessageDepositMenuKeys
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20DisableMessageDepositMenuKeys
     */
    public function getDisableMessageDepositMenuKeys()
    {
        return $this->disableMessageDepositMenuKeys instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->disableMessageDepositMenuKeys;
    }

    /**
     * Setter for disableMessageDepositMenuKeys
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20DisableMessageDepositMenuKeys $disableMessageDepositMenuKeys
     * @return $this
     */
    public function setDisableMessageDepositMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20DisableMessageDepositMenuKeys $disableMessageDepositMenuKeys)
    {
        $this->disableMessageDepositMenuKeys = $disableMessageDepositMenuKeys;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDisableMessageDepositMenuKeys()
    {
        $this->disableMessageDepositMenuKeys = null;
        return $this;
    }

    /**
     * Getter for greetingOnlyForwardingDestinationMenuKeys
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20GreetingOnlyForwardingDestinationMenuKeys
     */
    public function getGreetingOnlyForwardingDestinationMenuKeys()
    {
        return $this->greetingOnlyForwardingDestinationMenuKeys instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->greetingOnlyForwardingDestinationMenuKeys;
    }

    /**
     * Setter for greetingOnlyForwardingDestinationMenuKeys
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20GreetingOnlyForwardingDestinationMenuKeys $greetingOnlyForwardingDestinationMenuKeys
     * @return $this
     */
    public function setGreetingOnlyForwardingDestinationMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse20GreetingOnlyForwardingDestinationMenuKeys $greetingOnlyForwardingDestinationMenuKeys)
    {
        $this->greetingOnlyForwardingDestinationMenuKeys = $greetingOnlyForwardingDestinationMenuKeys;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGreetingOnlyForwardingDestinationMenuKeys()
    {
        $this->greetingOnlyForwardingDestinationMenuKeys = null;
        return $this;
    }


}

