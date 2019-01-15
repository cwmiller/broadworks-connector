<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19
 *
 * Request to modify the system voice portal menus setting.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"3347d430e0d5c93a9ff8dcf0e3b60d6c:1203","type":"sequence"}]
 */
class SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName useVoicePortalCustomization
     * @Type bool
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:1203
     * @var bool|null
     */
    private $useVoicePortalCustomization = null;

    /**
     * @ElementName voicePortalMainMenuKeys
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19VoicePortalMainMenuKeys
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:1203
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19VoicePortalMainMenuKeys|null
     */
    private $voicePortalMainMenuKeys = null;

    /**
     * @ElementName announcementMenuKeys
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19AnnouncementMenuKeys
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:1203
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19AnnouncementMenuKeys|null
     */
    private $announcementMenuKeys = null;

    /**
     * @ElementName announcementRecordingMenuKeys
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19AnnouncementRecordingMenuKeys
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:1203
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19AnnouncementRecordingMenuKeys|null
     */
    private $announcementRecordingMenuKeys = null;

    /**
     * @ElementName greetingsMenuKeys
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19GreetingsMenuKeys
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:1203
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19GreetingsMenuKeys|null
     */
    private $greetingsMenuKeys = null;

    /**
     * @ElementName conferenceGreetingMenuKeys
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19ConferenceGreetingMenuKeys
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:1203
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19ConferenceGreetingMenuKeys|null
     */
    private $conferenceGreetingMenuKeys = null;

    /**
     * @ElementName voiceMessagingMenuKeys
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19VoiceMessagingMenuKeys
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:1203
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19VoiceMessagingMenuKeys|null
     */
    private $voiceMessagingMenuKeys = null;

    /**
     * @ElementName playGreetingMenuKeys
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19PlayGreetingMenuKeys
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:1203
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19PlayGreetingMenuKeys|null
     */
    private $playGreetingMenuKeys = null;

    /**
     * @ElementName changeBusyOrNoAnswerGreetingMenuKeys
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19ChangeBusyOrNoAnswerGreetingMenuKeys
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:1203
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19ChangeBusyOrNoAnswerGreetingMenuKeys|null
     */
    private $changeBusyOrNoAnswerGreetingMenuKeys = null;

    /**
     * @ElementName changeExtendedAwayGreetingMenuKeys
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19ChangeExtendedAwayGreetingMenuKeys
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:1203
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19ChangeExtendedAwayGreetingMenuKeys|null
     */
    private $changeExtendedAwayGreetingMenuKeys = null;

    /**
     * @ElementName recordNewGreetingOrPersonalizedNameMenuKeys
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19RecordNewGreetingOrPersonalizedNameMenuKeys
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:1203
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19RecordNewGreetingOrPersonalizedNameMenuKeys|null
     */
    private $recordNewGreetingOrPersonalizedNameMenuKeys = null;

    /**
     * @ElementName deleteAllMessagesMenuKeys
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19DeleteAllMessagesMenuKeys
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:1203
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19DeleteAllMessagesMenuKeys|null
     */
    private $deleteAllMessagesMenuKeys = null;

    /**
     * @ElementName commPilotExpressProfileMenuKeys
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19CommPilotExpressProfileMenuKeys
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:1203
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19CommPilotExpressProfileMenuKeys|null
     */
    private $commPilotExpressProfileMenuKeys = null;

    /**
     * @ElementName personalizedNameMenuKeys
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19PersonalizedNameMenuKeys
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:1203
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19PersonalizedNameMenuKeys|null
     */
    private $personalizedNameMenuKeys = null;

    /**
     * @ElementName callForwardingOptionsMenuKeys
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19CallForwardingOptionsMenuKeys
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:1203
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19CallForwardingOptionsMenuKeys|null
     */
    private $callForwardingOptionsMenuKeys = null;

    /**
     * @ElementName changeCallForwardingDestinationMenuKeys
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19ChangeCallForwardingDestinationMenuKeys
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:1203
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19ChangeCallForwardingDestinationMenuKeys|null
     */
    private $changeCallForwardingDestinationMenuKeys = null;

    /**
     * @ElementName voicePortalCallingMenuKeys
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19VoicePortalCallingMenuKeys
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:1203
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19VoicePortalCallingMenuKeys|null
     */
    private $voicePortalCallingMenuKeys = null;

    /**
     * @ElementName hotelingMenuKeys
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19HotelingMenuKeys
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:1203
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19HotelingMenuKeys|null
     */
    private $hotelingMenuKeys = null;

    /**
     * @ElementName passcodeMenuKeys
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19PasscodeMenuKeys
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:1203
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19PasscodeMenuKeys|null
     */
    private $passcodeMenuKeys = null;

    /**
     * @ElementName playMessagesMenuKeys
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19PlayMessagesMenuKeys
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:1203
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19PlayMessagesMenuKeys|null
     */
    private $playMessagesMenuKeys = null;

    /**
     * @ElementName playMessageMenuKeys
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19PlayMessageMenuKeys
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:1203
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19PlayMessageMenuKeys|null
     */
    private $playMessageMenuKeys = null;

    /**
     * @ElementName additionalMessageOptionsMenuKeys
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19AdditionalMessageOptionsMenuKeys
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:1203
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19AdditionalMessageOptionsMenuKeys|null
     */
    private $additionalMessageOptionsMenuKeys = null;

    /**
     * @ElementName forwardOrComposeMessageMenuKeys
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19ForwardOrComposeMessageMenuKeys
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:1203
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19ForwardOrComposeMessageMenuKeys|null
     */
    private $forwardOrComposeMessageMenuKeys = null;

    /**
     * @ElementName replyMessageMenuKeys
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19ReplyMessageMenuKeys
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:1203
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19ReplyMessageMenuKeys|null
     */
    private $replyMessageMenuKeys = null;

    /**
     * @ElementName sendToDistributionListMenuKeys
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19SendToDistributionListMenuKeys
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:1203
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19SendToDistributionListMenuKeys|null
     */
    private $sendToDistributionListMenuKeys = null;

    /**
     * @ElementName selectDistributionListMenuKeys
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19SelectDistributionListMenuKeys
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:1203
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19SelectDistributionListMenuKeys|null
     */
    private $selectDistributionListMenuKeys = null;

    /**
     * @ElementName reviewSelectedDistributionListMenuKeys
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19ReviewSelectedDistributionListMenuKeys
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:1203
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19ReviewSelectedDistributionListMenuKeys|null
     */
    private $reviewSelectedDistributionListMenuKeys = null;

    /**
     * @ElementName sendMessageToSelectedDistributionListMenuKeys
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19SendMessageToSelectedDistributionListMenuKeys
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:1203
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19SendMessageToSelectedDistributionListMenuKeys|null
     */
    private $sendMessageToSelectedDistributionListMenuKeys = null;

    /**
     * @ElementName sendToAllGroupMembersMenuKeys
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19SendToAllGroupMembersMenuKeys
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:1203
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19SendToAllGroupMembersMenuKeys|null
     */
    private $sendToAllGroupMembersMenuKeys = null;

    /**
     * @ElementName sendToPersonMenuKeys
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19SendToPersonMenuKeys
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:1203
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19SendToPersonMenuKeys|null
     */
    private $sendToPersonMenuKeys = null;

    /**
     * @ElementName changeCurrentIntroductionOrMessageOrReplyMenuKeys
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19ChangeCurrentIntroductionOrMessageOrReplyMenuKeys
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:1203
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19ChangeCurrentIntroductionOrMessageOrReplyMenuKeys|null
     */
    private $changeCurrentIntroductionOrMessageOrReplyMenuKeys = null;

    /**
     * @ElementName voicePortalLoginMenuKeys
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19VoicePortalLoginMenuKeys
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:1203
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19VoicePortalLoginMenuKeys|null
     */
    private $voicePortalLoginMenuKeys = null;

    /**
     * @ElementName faxMessagingMenuKeys
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19FaxMessagingMenuKeys
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:1203
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19FaxMessagingMenuKeys|null
     */
    private $faxMessagingMenuKeys = null;

    /**
     * @ElementName messageDepositMenuKeys
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19MessageDepositMenuKeys
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:1203
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19MessageDepositMenuKeys|null
     */
    private $messageDepositMenuKeys = null;

    /**
     * @ElementName disableMessageDepositMenuKeys
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19DisableMessageDepositMenuKeys
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:1203
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19DisableMessageDepositMenuKeys|null
     */
    private $disableMessageDepositMenuKeys = null;

    /**
     * @ElementName greetingOnlyForwardingDestinationMenuKeys
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19GreetingOnlyForwardingDestinationMenuKeys
     * @Nillable
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:1203
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19GreetingOnlyForwardingDestinationMenuKeys|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $greetingOnlyForwardingDestinationMenuKeys = null;

    /**
     * @ElementName personalAssistantMenuKeys
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19PersonalAssistantMenuKeys
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:1203
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19PersonalAssistantMenuKeys|null
     */
    private $personalAssistantMenuKeys = null;

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
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19VoicePortalMainMenuKeys
     */
    public function getVoicePortalMainMenuKeys()
    {
        return $this->voicePortalMainMenuKeys instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->voicePortalMainMenuKeys;
    }

    /**
     * Setter for voicePortalMainMenuKeys
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19VoicePortalMainMenuKeys $voicePortalMainMenuKeys
     * @return $this
     */
    public function setVoicePortalMainMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19VoicePortalMainMenuKeys $voicePortalMainMenuKeys)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19AnnouncementMenuKeys
     */
    public function getAnnouncementMenuKeys()
    {
        return $this->announcementMenuKeys instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->announcementMenuKeys;
    }

    /**
     * Setter for announcementMenuKeys
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19AnnouncementMenuKeys $announcementMenuKeys
     * @return $this
     */
    public function setAnnouncementMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19AnnouncementMenuKeys $announcementMenuKeys)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19AnnouncementRecordingMenuKeys
     */
    public function getAnnouncementRecordingMenuKeys()
    {
        return $this->announcementRecordingMenuKeys instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->announcementRecordingMenuKeys;
    }

    /**
     * Setter for announcementRecordingMenuKeys
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19AnnouncementRecordingMenuKeys $announcementRecordingMenuKeys
     * @return $this
     */
    public function setAnnouncementRecordingMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19AnnouncementRecordingMenuKeys $announcementRecordingMenuKeys)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19GreetingsMenuKeys
     */
    public function getGreetingsMenuKeys()
    {
        return $this->greetingsMenuKeys instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->greetingsMenuKeys;
    }

    /**
     * Setter for greetingsMenuKeys
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19GreetingsMenuKeys $greetingsMenuKeys
     * @return $this
     */
    public function setGreetingsMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19GreetingsMenuKeys $greetingsMenuKeys)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19ConferenceGreetingMenuKeys
     */
    public function getConferenceGreetingMenuKeys()
    {
        return $this->conferenceGreetingMenuKeys instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->conferenceGreetingMenuKeys;
    }

    /**
     * Setter for conferenceGreetingMenuKeys
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19ConferenceGreetingMenuKeys $conferenceGreetingMenuKeys
     * @return $this
     */
    public function setConferenceGreetingMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19ConferenceGreetingMenuKeys $conferenceGreetingMenuKeys)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19VoiceMessagingMenuKeys
     */
    public function getVoiceMessagingMenuKeys()
    {
        return $this->voiceMessagingMenuKeys instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->voiceMessagingMenuKeys;
    }

    /**
     * Setter for voiceMessagingMenuKeys
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19VoiceMessagingMenuKeys $voiceMessagingMenuKeys
     * @return $this
     */
    public function setVoiceMessagingMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19VoiceMessagingMenuKeys $voiceMessagingMenuKeys)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19PlayGreetingMenuKeys
     */
    public function getPlayGreetingMenuKeys()
    {
        return $this->playGreetingMenuKeys instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->playGreetingMenuKeys;
    }

    /**
     * Setter for playGreetingMenuKeys
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19PlayGreetingMenuKeys $playGreetingMenuKeys
     * @return $this
     */
    public function setPlayGreetingMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19PlayGreetingMenuKeys $playGreetingMenuKeys)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19ChangeBusyOrNoAnswerGreetingMenuKeys
     */
    public function getChangeBusyOrNoAnswerGreetingMenuKeys()
    {
        return $this->changeBusyOrNoAnswerGreetingMenuKeys instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->changeBusyOrNoAnswerGreetingMenuKeys;
    }

    /**
     * Setter for changeBusyOrNoAnswerGreetingMenuKeys
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19ChangeBusyOrNoAnswerGreetingMenuKeys $changeBusyOrNoAnswerGreetingMenuKeys
     * @return $this
     */
    public function setChangeBusyOrNoAnswerGreetingMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19ChangeBusyOrNoAnswerGreetingMenuKeys $changeBusyOrNoAnswerGreetingMenuKeys)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19ChangeExtendedAwayGreetingMenuKeys
     */
    public function getChangeExtendedAwayGreetingMenuKeys()
    {
        return $this->changeExtendedAwayGreetingMenuKeys instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->changeExtendedAwayGreetingMenuKeys;
    }

    /**
     * Setter for changeExtendedAwayGreetingMenuKeys
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19ChangeExtendedAwayGreetingMenuKeys $changeExtendedAwayGreetingMenuKeys
     * @return $this
     */
    public function setChangeExtendedAwayGreetingMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19ChangeExtendedAwayGreetingMenuKeys $changeExtendedAwayGreetingMenuKeys)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19RecordNewGreetingOrPersonalizedNameMenuKeys
     */
    public function getRecordNewGreetingOrPersonalizedNameMenuKeys()
    {
        return $this->recordNewGreetingOrPersonalizedNameMenuKeys instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->recordNewGreetingOrPersonalizedNameMenuKeys;
    }

    /**
     * Setter for recordNewGreetingOrPersonalizedNameMenuKeys
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19RecordNewGreetingOrPersonalizedNameMenuKeys $recordNewGreetingOrPersonalizedNameMenuKeys
     * @return $this
     */
    public function setRecordNewGreetingOrPersonalizedNameMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19RecordNewGreetingOrPersonalizedNameMenuKeys $recordNewGreetingOrPersonalizedNameMenuKeys)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19DeleteAllMessagesMenuKeys
     */
    public function getDeleteAllMessagesMenuKeys()
    {
        return $this->deleteAllMessagesMenuKeys instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deleteAllMessagesMenuKeys;
    }

    /**
     * Setter for deleteAllMessagesMenuKeys
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19DeleteAllMessagesMenuKeys $deleteAllMessagesMenuKeys
     * @return $this
     */
    public function setDeleteAllMessagesMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19DeleteAllMessagesMenuKeys $deleteAllMessagesMenuKeys)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19CommPilotExpressProfileMenuKeys
     */
    public function getCommPilotExpressProfileMenuKeys()
    {
        return $this->commPilotExpressProfileMenuKeys instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->commPilotExpressProfileMenuKeys;
    }

    /**
     * Setter for commPilotExpressProfileMenuKeys
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19CommPilotExpressProfileMenuKeys $commPilotExpressProfileMenuKeys
     * @return $this
     */
    public function setCommPilotExpressProfileMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19CommPilotExpressProfileMenuKeys $commPilotExpressProfileMenuKeys)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19PersonalizedNameMenuKeys
     */
    public function getPersonalizedNameMenuKeys()
    {
        return $this->personalizedNameMenuKeys instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->personalizedNameMenuKeys;
    }

    /**
     * Setter for personalizedNameMenuKeys
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19PersonalizedNameMenuKeys $personalizedNameMenuKeys
     * @return $this
     */
    public function setPersonalizedNameMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19PersonalizedNameMenuKeys $personalizedNameMenuKeys)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19CallForwardingOptionsMenuKeys
     */
    public function getCallForwardingOptionsMenuKeys()
    {
        return $this->callForwardingOptionsMenuKeys instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callForwardingOptionsMenuKeys;
    }

    /**
     * Setter for callForwardingOptionsMenuKeys
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19CallForwardingOptionsMenuKeys $callForwardingOptionsMenuKeys
     * @return $this
     */
    public function setCallForwardingOptionsMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19CallForwardingOptionsMenuKeys $callForwardingOptionsMenuKeys)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19ChangeCallForwardingDestinationMenuKeys
     */
    public function getChangeCallForwardingDestinationMenuKeys()
    {
        return $this->changeCallForwardingDestinationMenuKeys instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->changeCallForwardingDestinationMenuKeys;
    }

    /**
     * Setter for changeCallForwardingDestinationMenuKeys
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19ChangeCallForwardingDestinationMenuKeys $changeCallForwardingDestinationMenuKeys
     * @return $this
     */
    public function setChangeCallForwardingDestinationMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19ChangeCallForwardingDestinationMenuKeys $changeCallForwardingDestinationMenuKeys)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19VoicePortalCallingMenuKeys
     */
    public function getVoicePortalCallingMenuKeys()
    {
        return $this->voicePortalCallingMenuKeys instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->voicePortalCallingMenuKeys;
    }

    /**
     * Setter for voicePortalCallingMenuKeys
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19VoicePortalCallingMenuKeys $voicePortalCallingMenuKeys
     * @return $this
     */
    public function setVoicePortalCallingMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19VoicePortalCallingMenuKeys $voicePortalCallingMenuKeys)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19HotelingMenuKeys
     */
    public function getHotelingMenuKeys()
    {
        return $this->hotelingMenuKeys instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->hotelingMenuKeys;
    }

    /**
     * Setter for hotelingMenuKeys
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19HotelingMenuKeys $hotelingMenuKeys
     * @return $this
     */
    public function setHotelingMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19HotelingMenuKeys $hotelingMenuKeys)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19PasscodeMenuKeys
     */
    public function getPasscodeMenuKeys()
    {
        return $this->passcodeMenuKeys instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->passcodeMenuKeys;
    }

    /**
     * Setter for passcodeMenuKeys
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19PasscodeMenuKeys $passcodeMenuKeys
     * @return $this
     */
    public function setPasscodeMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19PasscodeMenuKeys $passcodeMenuKeys)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19PlayMessagesMenuKeys
     */
    public function getPlayMessagesMenuKeys()
    {
        return $this->playMessagesMenuKeys instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->playMessagesMenuKeys;
    }

    /**
     * Setter for playMessagesMenuKeys
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19PlayMessagesMenuKeys $playMessagesMenuKeys
     * @return $this
     */
    public function setPlayMessagesMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19PlayMessagesMenuKeys $playMessagesMenuKeys)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19PlayMessageMenuKeys
     */
    public function getPlayMessageMenuKeys()
    {
        return $this->playMessageMenuKeys instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->playMessageMenuKeys;
    }

    /**
     * Setter for playMessageMenuKeys
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19PlayMessageMenuKeys $playMessageMenuKeys
     * @return $this
     */
    public function setPlayMessageMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19PlayMessageMenuKeys $playMessageMenuKeys)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19AdditionalMessageOptionsMenuKeys
     */
    public function getAdditionalMessageOptionsMenuKeys()
    {
        return $this->additionalMessageOptionsMenuKeys instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->additionalMessageOptionsMenuKeys;
    }

    /**
     * Setter for additionalMessageOptionsMenuKeys
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19AdditionalMessageOptionsMenuKeys $additionalMessageOptionsMenuKeys
     * @return $this
     */
    public function setAdditionalMessageOptionsMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19AdditionalMessageOptionsMenuKeys $additionalMessageOptionsMenuKeys)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19ForwardOrComposeMessageMenuKeys
     */
    public function getForwardOrComposeMessageMenuKeys()
    {
        return $this->forwardOrComposeMessageMenuKeys instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->forwardOrComposeMessageMenuKeys;
    }

    /**
     * Setter for forwardOrComposeMessageMenuKeys
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19ForwardOrComposeMessageMenuKeys $forwardOrComposeMessageMenuKeys
     * @return $this
     */
    public function setForwardOrComposeMessageMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19ForwardOrComposeMessageMenuKeys $forwardOrComposeMessageMenuKeys)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19ReplyMessageMenuKeys
     */
    public function getReplyMessageMenuKeys()
    {
        return $this->replyMessageMenuKeys instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->replyMessageMenuKeys;
    }

    /**
     * Setter for replyMessageMenuKeys
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19ReplyMessageMenuKeys $replyMessageMenuKeys
     * @return $this
     */
    public function setReplyMessageMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19ReplyMessageMenuKeys $replyMessageMenuKeys)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19SendToDistributionListMenuKeys
     */
    public function getSendToDistributionListMenuKeys()
    {
        return $this->sendToDistributionListMenuKeys instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sendToDistributionListMenuKeys;
    }

    /**
     * Setter for sendToDistributionListMenuKeys
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19SendToDistributionListMenuKeys $sendToDistributionListMenuKeys
     * @return $this
     */
    public function setSendToDistributionListMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19SendToDistributionListMenuKeys $sendToDistributionListMenuKeys)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19SelectDistributionListMenuKeys
     */
    public function getSelectDistributionListMenuKeys()
    {
        return $this->selectDistributionListMenuKeys instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->selectDistributionListMenuKeys;
    }

    /**
     * Setter for selectDistributionListMenuKeys
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19SelectDistributionListMenuKeys $selectDistributionListMenuKeys
     * @return $this
     */
    public function setSelectDistributionListMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19SelectDistributionListMenuKeys $selectDistributionListMenuKeys)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19ReviewSelectedDistributionListMenuKeys
     */
    public function getReviewSelectedDistributionListMenuKeys()
    {
        return $this->reviewSelectedDistributionListMenuKeys instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->reviewSelectedDistributionListMenuKeys;
    }

    /**
     * Setter for reviewSelectedDistributionListMenuKeys
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19ReviewSelectedDistributionListMenuKeys $reviewSelectedDistributionListMenuKeys
     * @return $this
     */
    public function setReviewSelectedDistributionListMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19ReviewSelectedDistributionListMenuKeys $reviewSelectedDistributionListMenuKeys)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19SendMessageToSelectedDistributionListMenuKeys
     */
    public function getSendMessageToSelectedDistributionListMenuKeys()
    {
        return $this->sendMessageToSelectedDistributionListMenuKeys instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sendMessageToSelectedDistributionListMenuKeys;
    }

    /**
     * Setter for sendMessageToSelectedDistributionListMenuKeys
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19SendMessageToSelectedDistributionListMenuKeys $sendMessageToSelectedDistributionListMenuKeys
     * @return $this
     */
    public function setSendMessageToSelectedDistributionListMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19SendMessageToSelectedDistributionListMenuKeys $sendMessageToSelectedDistributionListMenuKeys)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19SendToAllGroupMembersMenuKeys
     */
    public function getSendToAllGroupMembersMenuKeys()
    {
        return $this->sendToAllGroupMembersMenuKeys instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sendToAllGroupMembersMenuKeys;
    }

    /**
     * Setter for sendToAllGroupMembersMenuKeys
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19SendToAllGroupMembersMenuKeys $sendToAllGroupMembersMenuKeys
     * @return $this
     */
    public function setSendToAllGroupMembersMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19SendToAllGroupMembersMenuKeys $sendToAllGroupMembersMenuKeys)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19SendToPersonMenuKeys
     */
    public function getSendToPersonMenuKeys()
    {
        return $this->sendToPersonMenuKeys instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sendToPersonMenuKeys;
    }

    /**
     * Setter for sendToPersonMenuKeys
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19SendToPersonMenuKeys $sendToPersonMenuKeys
     * @return $this
     */
    public function setSendToPersonMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19SendToPersonMenuKeys $sendToPersonMenuKeys)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19ChangeCurrentIntroductionOrMessageOrReplyMenuKeys
     */
    public function getChangeCurrentIntroductionOrMessageOrReplyMenuKeys()
    {
        return $this->changeCurrentIntroductionOrMessageOrReplyMenuKeys instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->changeCurrentIntroductionOrMessageOrReplyMenuKeys;
    }

    /**
     * Setter for changeCurrentIntroductionOrMessageOrReplyMenuKeys
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19ChangeCurrentIntroductionOrMessageOrReplyMenuKeys $changeCurrentIntroductionOrMessageOrReplyMenuKeys
     * @return $this
     */
    public function setChangeCurrentIntroductionOrMessageOrReplyMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19ChangeCurrentIntroductionOrMessageOrReplyMenuKeys $changeCurrentIntroductionOrMessageOrReplyMenuKeys)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19VoicePortalLoginMenuKeys
     */
    public function getVoicePortalLoginMenuKeys()
    {
        return $this->voicePortalLoginMenuKeys instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->voicePortalLoginMenuKeys;
    }

    /**
     * Setter for voicePortalLoginMenuKeys
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19VoicePortalLoginMenuKeys $voicePortalLoginMenuKeys
     * @return $this
     */
    public function setVoicePortalLoginMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19VoicePortalLoginMenuKeys $voicePortalLoginMenuKeys)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19FaxMessagingMenuKeys
     */
    public function getFaxMessagingMenuKeys()
    {
        return $this->faxMessagingMenuKeys instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->faxMessagingMenuKeys;
    }

    /**
     * Setter for faxMessagingMenuKeys
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19FaxMessagingMenuKeys $faxMessagingMenuKeys
     * @return $this
     */
    public function setFaxMessagingMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19FaxMessagingMenuKeys $faxMessagingMenuKeys)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19MessageDepositMenuKeys
     */
    public function getMessageDepositMenuKeys()
    {
        return $this->messageDepositMenuKeys instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->messageDepositMenuKeys;
    }

    /**
     * Setter for messageDepositMenuKeys
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19MessageDepositMenuKeys $messageDepositMenuKeys
     * @return $this
     */
    public function setMessageDepositMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19MessageDepositMenuKeys $messageDepositMenuKeys)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19DisableMessageDepositMenuKeys
     */
    public function getDisableMessageDepositMenuKeys()
    {
        return $this->disableMessageDepositMenuKeys instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->disableMessageDepositMenuKeys;
    }

    /**
     * Setter for disableMessageDepositMenuKeys
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19DisableMessageDepositMenuKeys $disableMessageDepositMenuKeys
     * @return $this
     */
    public function setDisableMessageDepositMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19DisableMessageDepositMenuKeys $disableMessageDepositMenuKeys)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19GreetingOnlyForwardingDestinationMenuKeys|null
     */
    public function getGreetingOnlyForwardingDestinationMenuKeys()
    {
        return $this->greetingOnlyForwardingDestinationMenuKeys instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->greetingOnlyForwardingDestinationMenuKeys;
    }

    /**
     * Setter for greetingOnlyForwardingDestinationMenuKeys
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19GreetingOnlyForwardingDestinationMenuKeys|null $greetingOnlyForwardingDestinationMenuKeys
     * @return $this
     */
    public function setGreetingOnlyForwardingDestinationMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19GreetingOnlyForwardingDestinationMenuKeys $greetingOnlyForwardingDestinationMenuKeys = null)
    {
        if ($greetingOnlyForwardingDestinationMenuKeys === null) {
            $this->greetingOnlyForwardingDestinationMenuKeys = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->greetingOnlyForwardingDestinationMenuKeys = $greetingOnlyForwardingDestinationMenuKeys;
        }
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

    /**
     * Getter for personalAssistantMenuKeys
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19PersonalAssistantMenuKeys
     */
    public function getPersonalAssistantMenuKeys()
    {
        return $this->personalAssistantMenuKeys instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->personalAssistantMenuKeys;
    }

    /**
     * Setter for personalAssistantMenuKeys
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19PersonalAssistantMenuKeys $personalAssistantMenuKeys
     * @return $this
     */
    public function setPersonalAssistantMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequest19PersonalAssistantMenuKeys $personalAssistantMenuKeys)
    {
        $this->personalAssistantMenuKeys = $personalAssistantMenuKeys;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPersonalAssistantMenuKeys()
    {
        $this->personalAssistantMenuKeys = null;
        return $this;
    }


}

