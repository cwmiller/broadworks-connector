<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1
 *
 * Response to SystemVoiceMessagingGroupGetVoicePortalMenusRequest19sp1.
 *         
 *         Replaced by SystemVoiceMessagingGroupGetVoicePortalMenusResponse20
 *
 * @see SystemVoiceMessagingGroupGetVoicePortalMenusRequest19sp1
 * @see SystemVoiceMessagingGroupGetVoicePortalMenusResponse20
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:37836","type":"sequence"}]
 */
class SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName useVoicePortalCustomization
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:37836
     * @var bool|null
     */
    protected $useVoicePortalCustomization = null;

    /**
     * @ElementName voicePortalMainMenuKeys
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1VoicePortalMainMenuKeys
     * @Group ab0042aa512abc10edb3c55e4b416b0b:37836
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1VoicePortalMainMenuKeys|null
     */
    protected $voicePortalMainMenuKeys = null;

    /**
     * @ElementName greetingsMenuKeys
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1GreetingsMenuKeys
     * @Group ab0042aa512abc10edb3c55e4b416b0b:37836
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1GreetingsMenuKeys|null
     */
    protected $greetingsMenuKeys = null;

    /**
     * @ElementName conferenceGreetingMenuKeys
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1ConferenceGreetingMenuKeys
     * @Group ab0042aa512abc10edb3c55e4b416b0b:37836
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1ConferenceGreetingMenuKeys|null
     */
    protected $conferenceGreetingMenuKeys = null;

    /**
     * @ElementName voiceMessagingMenuKeys
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1VoiceMessagingMenuKeys
     * @Group ab0042aa512abc10edb3c55e4b416b0b:37836
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1VoiceMessagingMenuKeys|null
     */
    protected $voiceMessagingMenuKeys = null;

    /**
     * @ElementName playGreetingMenuKeys
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1PlayGreetingMenuKeys
     * @Group ab0042aa512abc10edb3c55e4b416b0b:37836
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1PlayGreetingMenuKeys|null
     */
    protected $playGreetingMenuKeys = null;

    /**
     * @ElementName changeBusyOrNoAnswerGreetingMenuKeys
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1ChangeBusyOrNoAnswerGreetingMenuKeys
     * @Group ab0042aa512abc10edb3c55e4b416b0b:37836
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1ChangeBusyOrNoAnswerGreetingMenuKeys|null
     */
    protected $changeBusyOrNoAnswerGreetingMenuKeys = null;

    /**
     * @ElementName changeExtendedAwayGreetingMenuKeys
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1ChangeExtendedAwayGreetingMenuKeys
     * @Group ab0042aa512abc10edb3c55e4b416b0b:37836
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1ChangeExtendedAwayGreetingMenuKeys|null
     */
    protected $changeExtendedAwayGreetingMenuKeys = null;

    /**
     * @ElementName recordNewGreetingOrPersonalizedNameMenuKeys
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1RecordNewGreetingOrPersonalizedNameMenuKeys
     * @Group ab0042aa512abc10edb3c55e4b416b0b:37836
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1RecordNewGreetingOrPersonalizedNameMenuKeys|null
     */
    protected $recordNewGreetingOrPersonalizedNameMenuKeys = null;

    /**
     * @ElementName deleteAllMessagesMenuKeys
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1DeleteAllMessagesMenuKeys
     * @Group ab0042aa512abc10edb3c55e4b416b0b:37836
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1DeleteAllMessagesMenuKeys|null
     */
    protected $deleteAllMessagesMenuKeys = null;

    /**
     * @ElementName commPilotExpressProfileMenuKeys
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1CommPilotExpressProfileMenuKeys
     * @Group ab0042aa512abc10edb3c55e4b416b0b:37836
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1CommPilotExpressProfileMenuKeys|null
     */
    protected $commPilotExpressProfileMenuKeys = null;

    /**
     * @ElementName personalizedNameMenuKeys
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1PersonalizedNameMenuKeys
     * @Group ab0042aa512abc10edb3c55e4b416b0b:37836
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1PersonalizedNameMenuKeys|null
     */
    protected $personalizedNameMenuKeys = null;

    /**
     * @ElementName callForwardingOptionsMenuKeys
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1CallForwardingOptionsMenuKeys
     * @Group ab0042aa512abc10edb3c55e4b416b0b:37836
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1CallForwardingOptionsMenuKeys|null
     */
    protected $callForwardingOptionsMenuKeys = null;

    /**
     * @ElementName changeCallForwardingDestinationMenuKeys
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1ChangeCallForwardingDestinationMenuKeys
     * @Group ab0042aa512abc10edb3c55e4b416b0b:37836
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1ChangeCallForwardingDestinationMenuKeys|null
     */
    protected $changeCallForwardingDestinationMenuKeys = null;

    /**
     * @ElementName voicePortalCallingMenuKeys
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1VoicePortalCallingMenuKeys
     * @Group ab0042aa512abc10edb3c55e4b416b0b:37836
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1VoicePortalCallingMenuKeys|null
     */
    protected $voicePortalCallingMenuKeys = null;

    /**
     * @ElementName hotelingMenuKeys
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1HotelingMenuKeys
     * @Group ab0042aa512abc10edb3c55e4b416b0b:37836
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1HotelingMenuKeys|null
     */
    protected $hotelingMenuKeys = null;

    /**
     * @ElementName passcodeMenuKeys
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1PasscodeMenuKeys
     * @Group ab0042aa512abc10edb3c55e4b416b0b:37836
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1PasscodeMenuKeys|null
     */
    protected $passcodeMenuKeys = null;

    /**
     * @ElementName playMessagesMenuKeys
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1PlayMessagesMenuKeys
     * @Group ab0042aa512abc10edb3c55e4b416b0b:37836
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1PlayMessagesMenuKeys|null
     */
    protected $playMessagesMenuKeys = null;

    /**
     * @ElementName playMessageMenuKeys
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1PlayMessageMenuKeys
     * @Group ab0042aa512abc10edb3c55e4b416b0b:37836
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1PlayMessageMenuKeys|null
     */
    protected $playMessageMenuKeys = null;

    /**
     * @ElementName additionalMessageOptionsMenuKeys
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1AdditionalMessageOptionsMenuKeys
     * @Group ab0042aa512abc10edb3c55e4b416b0b:37836
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1AdditionalMessageOptionsMenuKeys|null
     */
    protected $additionalMessageOptionsMenuKeys = null;

    /**
     * @ElementName forwardOrComposeMessageMenuKeys
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1ForwardOrComposeMessageMenuKeys
     * @Group ab0042aa512abc10edb3c55e4b416b0b:37836
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1ForwardOrComposeMessageMenuKeys|null
     */
    protected $forwardOrComposeMessageMenuKeys = null;

    /**
     * @ElementName replyMessageMenuKeys
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1ReplyMessageMenuKeys
     * @Group ab0042aa512abc10edb3c55e4b416b0b:37836
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1ReplyMessageMenuKeys|null
     */
    protected $replyMessageMenuKeys = null;

    /**
     * @ElementName sendToDistributionListMenuKeys
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1SendToDistributionListMenuKeys
     * @Group ab0042aa512abc10edb3c55e4b416b0b:37836
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1SendToDistributionListMenuKeys|null
     */
    protected $sendToDistributionListMenuKeys = null;

    /**
     * @ElementName selectDistributionListMenuKeys
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1SelectDistributionListMenuKeys
     * @Group ab0042aa512abc10edb3c55e4b416b0b:37836
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1SelectDistributionListMenuKeys|null
     */
    protected $selectDistributionListMenuKeys = null;

    /**
     * @ElementName reviewSelectedDistributionListMenuKeys
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1ReviewSelectedDistributionListMenuKeys
     * @Group ab0042aa512abc10edb3c55e4b416b0b:37836
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1ReviewSelectedDistributionListMenuKeys|null
     */
    protected $reviewSelectedDistributionListMenuKeys = null;

    /**
     * @ElementName sendMessageToSelectedDistributionListMenuKeys
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1SendMessageToSelectedDistributionListMenuKeys
     * @Group ab0042aa512abc10edb3c55e4b416b0b:37836
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1SendMessageToSelectedDistributionListMenuKeys|null
     */
    protected $sendMessageToSelectedDistributionListMenuKeys = null;

    /**
     * @ElementName sendToAllGroupMembersMenuKeys
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1SendToAllGroupMembersMenuKeys
     * @Group ab0042aa512abc10edb3c55e4b416b0b:37836
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1SendToAllGroupMembersMenuKeys|null
     */
    protected $sendToAllGroupMembersMenuKeys = null;

    /**
     * @ElementName sendToPersonMenuKeys
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1SendToPersonMenuKeys
     * @Group ab0042aa512abc10edb3c55e4b416b0b:37836
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1SendToPersonMenuKeys|null
     */
    protected $sendToPersonMenuKeys = null;

    /**
     * @ElementName changeCurrentIntroductionOrMessageOrReplyMenuKeys
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1ChangeCurrentIntroductionOrMessageOrReplyMenuKeys
     * @Group ab0042aa512abc10edb3c55e4b416b0b:37836
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1ChangeCurrentIntroductionOrMessageOrReplyMenuKeys|null
     */
    protected $changeCurrentIntroductionOrMessageOrReplyMenuKeys = null;

    /**
     * @ElementName voicePortalLoginMenuKeys
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1VoicePortalLoginMenuKeys
     * @Group ab0042aa512abc10edb3c55e4b416b0b:37836
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1VoicePortalLoginMenuKeys|null
     */
    protected $voicePortalLoginMenuKeys = null;

    /**
     * @ElementName faxMessagingMenuKeys
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1FaxMessagingMenuKeys
     * @Group ab0042aa512abc10edb3c55e4b416b0b:37836
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1FaxMessagingMenuKeys|null
     */
    protected $faxMessagingMenuKeys = null;

    /**
     * @ElementName messageDepositMenuKeys
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1MessageDepositMenuKeys
     * @Group ab0042aa512abc10edb3c55e4b416b0b:37836
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1MessageDepositMenuKeys|null
     */
    protected $messageDepositMenuKeys = null;

    /**
     * @ElementName disableMessageDepositMenuKeys
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1DisableMessageDepositMenuKeys
     * @Group ab0042aa512abc10edb3c55e4b416b0b:37836
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1DisableMessageDepositMenuKeys|null
     */
    protected $disableMessageDepositMenuKeys = null;

    /**
     * @ElementName greetingOnlyForwardingDestinationMenuKeys
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1GreetingOnlyForwardingDestinationMenuKeys
     * @Group ab0042aa512abc10edb3c55e4b416b0b:37836
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1GreetingOnlyForwardingDestinationMenuKeys|null
     */
    protected $greetingOnlyForwardingDestinationMenuKeys = null;

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
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1VoicePortalMainMenuKeys
     */
    public function getVoicePortalMainMenuKeys()
    {
        return $this->voicePortalMainMenuKeys instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->voicePortalMainMenuKeys;
    }

    /**
     * Setter for voicePortalMainMenuKeys
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1VoicePortalMainMenuKeys $voicePortalMainMenuKeys
     * @return $this
     */
    public function setVoicePortalMainMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1VoicePortalMainMenuKeys $voicePortalMainMenuKeys)
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
     * Getter for greetingsMenuKeys
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1GreetingsMenuKeys
     */
    public function getGreetingsMenuKeys()
    {
        return $this->greetingsMenuKeys instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->greetingsMenuKeys;
    }

    /**
     * Setter for greetingsMenuKeys
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1GreetingsMenuKeys $greetingsMenuKeys
     * @return $this
     */
    public function setGreetingsMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1GreetingsMenuKeys $greetingsMenuKeys)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1ConferenceGreetingMenuKeys
     */
    public function getConferenceGreetingMenuKeys()
    {
        return $this->conferenceGreetingMenuKeys instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->conferenceGreetingMenuKeys;
    }

    /**
     * Setter for conferenceGreetingMenuKeys
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1ConferenceGreetingMenuKeys $conferenceGreetingMenuKeys
     * @return $this
     */
    public function setConferenceGreetingMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1ConferenceGreetingMenuKeys $conferenceGreetingMenuKeys)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1VoiceMessagingMenuKeys
     */
    public function getVoiceMessagingMenuKeys()
    {
        return $this->voiceMessagingMenuKeys instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->voiceMessagingMenuKeys;
    }

    /**
     * Setter for voiceMessagingMenuKeys
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1VoiceMessagingMenuKeys $voiceMessagingMenuKeys
     * @return $this
     */
    public function setVoiceMessagingMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1VoiceMessagingMenuKeys $voiceMessagingMenuKeys)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1PlayGreetingMenuKeys
     */
    public function getPlayGreetingMenuKeys()
    {
        return $this->playGreetingMenuKeys instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->playGreetingMenuKeys;
    }

    /**
     * Setter for playGreetingMenuKeys
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1PlayGreetingMenuKeys $playGreetingMenuKeys
     * @return $this
     */
    public function setPlayGreetingMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1PlayGreetingMenuKeys $playGreetingMenuKeys)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1ChangeBusyOrNoAnswerGreetingMenuKeys
     */
    public function getChangeBusyOrNoAnswerGreetingMenuKeys()
    {
        return $this->changeBusyOrNoAnswerGreetingMenuKeys instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->changeBusyOrNoAnswerGreetingMenuKeys;
    }

    /**
     * Setter for changeBusyOrNoAnswerGreetingMenuKeys
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1ChangeBusyOrNoAnswerGreetingMenuKeys $changeBusyOrNoAnswerGreetingMenuKeys
     * @return $this
     */
    public function setChangeBusyOrNoAnswerGreetingMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1ChangeBusyOrNoAnswerGreetingMenuKeys $changeBusyOrNoAnswerGreetingMenuKeys)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1ChangeExtendedAwayGreetingMenuKeys
     */
    public function getChangeExtendedAwayGreetingMenuKeys()
    {
        return $this->changeExtendedAwayGreetingMenuKeys instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->changeExtendedAwayGreetingMenuKeys;
    }

    /**
     * Setter for changeExtendedAwayGreetingMenuKeys
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1ChangeExtendedAwayGreetingMenuKeys $changeExtendedAwayGreetingMenuKeys
     * @return $this
     */
    public function setChangeExtendedAwayGreetingMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1ChangeExtendedAwayGreetingMenuKeys $changeExtendedAwayGreetingMenuKeys)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1RecordNewGreetingOrPersonalizedNameMenuKeys
     */
    public function getRecordNewGreetingOrPersonalizedNameMenuKeys()
    {
        return $this->recordNewGreetingOrPersonalizedNameMenuKeys instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->recordNewGreetingOrPersonalizedNameMenuKeys;
    }

    /**
     * Setter for recordNewGreetingOrPersonalizedNameMenuKeys
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1RecordNewGreetingOrPersonalizedNameMenuKeys $recordNewGreetingOrPersonalizedNameMenuKeys
     * @return $this
     */
    public function setRecordNewGreetingOrPersonalizedNameMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1RecordNewGreetingOrPersonalizedNameMenuKeys $recordNewGreetingOrPersonalizedNameMenuKeys)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1DeleteAllMessagesMenuKeys
     */
    public function getDeleteAllMessagesMenuKeys()
    {
        return $this->deleteAllMessagesMenuKeys instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deleteAllMessagesMenuKeys;
    }

    /**
     * Setter for deleteAllMessagesMenuKeys
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1DeleteAllMessagesMenuKeys $deleteAllMessagesMenuKeys
     * @return $this
     */
    public function setDeleteAllMessagesMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1DeleteAllMessagesMenuKeys $deleteAllMessagesMenuKeys)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1CommPilotExpressProfileMenuKeys
     */
    public function getCommPilotExpressProfileMenuKeys()
    {
        return $this->commPilotExpressProfileMenuKeys instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->commPilotExpressProfileMenuKeys;
    }

    /**
     * Setter for commPilotExpressProfileMenuKeys
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1CommPilotExpressProfileMenuKeys $commPilotExpressProfileMenuKeys
     * @return $this
     */
    public function setCommPilotExpressProfileMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1CommPilotExpressProfileMenuKeys $commPilotExpressProfileMenuKeys)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1PersonalizedNameMenuKeys
     */
    public function getPersonalizedNameMenuKeys()
    {
        return $this->personalizedNameMenuKeys instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->personalizedNameMenuKeys;
    }

    /**
     * Setter for personalizedNameMenuKeys
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1PersonalizedNameMenuKeys $personalizedNameMenuKeys
     * @return $this
     */
    public function setPersonalizedNameMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1PersonalizedNameMenuKeys $personalizedNameMenuKeys)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1CallForwardingOptionsMenuKeys
     */
    public function getCallForwardingOptionsMenuKeys()
    {
        return $this->callForwardingOptionsMenuKeys instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callForwardingOptionsMenuKeys;
    }

    /**
     * Setter for callForwardingOptionsMenuKeys
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1CallForwardingOptionsMenuKeys $callForwardingOptionsMenuKeys
     * @return $this
     */
    public function setCallForwardingOptionsMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1CallForwardingOptionsMenuKeys $callForwardingOptionsMenuKeys)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1ChangeCallForwardingDestinationMenuKeys
     */
    public function getChangeCallForwardingDestinationMenuKeys()
    {
        return $this->changeCallForwardingDestinationMenuKeys instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->changeCallForwardingDestinationMenuKeys;
    }

    /**
     * Setter for changeCallForwardingDestinationMenuKeys
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1ChangeCallForwardingDestinationMenuKeys $changeCallForwardingDestinationMenuKeys
     * @return $this
     */
    public function setChangeCallForwardingDestinationMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1ChangeCallForwardingDestinationMenuKeys $changeCallForwardingDestinationMenuKeys)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1VoicePortalCallingMenuKeys
     */
    public function getVoicePortalCallingMenuKeys()
    {
        return $this->voicePortalCallingMenuKeys instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->voicePortalCallingMenuKeys;
    }

    /**
     * Setter for voicePortalCallingMenuKeys
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1VoicePortalCallingMenuKeys $voicePortalCallingMenuKeys
     * @return $this
     */
    public function setVoicePortalCallingMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1VoicePortalCallingMenuKeys $voicePortalCallingMenuKeys)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1HotelingMenuKeys
     */
    public function getHotelingMenuKeys()
    {
        return $this->hotelingMenuKeys instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->hotelingMenuKeys;
    }

    /**
     * Setter for hotelingMenuKeys
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1HotelingMenuKeys $hotelingMenuKeys
     * @return $this
     */
    public function setHotelingMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1HotelingMenuKeys $hotelingMenuKeys)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1PasscodeMenuKeys
     */
    public function getPasscodeMenuKeys()
    {
        return $this->passcodeMenuKeys instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->passcodeMenuKeys;
    }

    /**
     * Setter for passcodeMenuKeys
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1PasscodeMenuKeys $passcodeMenuKeys
     * @return $this
     */
    public function setPasscodeMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1PasscodeMenuKeys $passcodeMenuKeys)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1PlayMessagesMenuKeys
     */
    public function getPlayMessagesMenuKeys()
    {
        return $this->playMessagesMenuKeys instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->playMessagesMenuKeys;
    }

    /**
     * Setter for playMessagesMenuKeys
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1PlayMessagesMenuKeys $playMessagesMenuKeys
     * @return $this
     */
    public function setPlayMessagesMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1PlayMessagesMenuKeys $playMessagesMenuKeys)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1PlayMessageMenuKeys
     */
    public function getPlayMessageMenuKeys()
    {
        return $this->playMessageMenuKeys instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->playMessageMenuKeys;
    }

    /**
     * Setter for playMessageMenuKeys
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1PlayMessageMenuKeys $playMessageMenuKeys
     * @return $this
     */
    public function setPlayMessageMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1PlayMessageMenuKeys $playMessageMenuKeys)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1AdditionalMessageOptionsMenuKeys
     */
    public function getAdditionalMessageOptionsMenuKeys()
    {
        return $this->additionalMessageOptionsMenuKeys instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->additionalMessageOptionsMenuKeys;
    }

    /**
     * Setter for additionalMessageOptionsMenuKeys
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1AdditionalMessageOptionsMenuKeys $additionalMessageOptionsMenuKeys
     * @return $this
     */
    public function setAdditionalMessageOptionsMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1AdditionalMessageOptionsMenuKeys $additionalMessageOptionsMenuKeys)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1ForwardOrComposeMessageMenuKeys
     */
    public function getForwardOrComposeMessageMenuKeys()
    {
        return $this->forwardOrComposeMessageMenuKeys instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->forwardOrComposeMessageMenuKeys;
    }

    /**
     * Setter for forwardOrComposeMessageMenuKeys
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1ForwardOrComposeMessageMenuKeys $forwardOrComposeMessageMenuKeys
     * @return $this
     */
    public function setForwardOrComposeMessageMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1ForwardOrComposeMessageMenuKeys $forwardOrComposeMessageMenuKeys)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1ReplyMessageMenuKeys
     */
    public function getReplyMessageMenuKeys()
    {
        return $this->replyMessageMenuKeys instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->replyMessageMenuKeys;
    }

    /**
     * Setter for replyMessageMenuKeys
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1ReplyMessageMenuKeys $replyMessageMenuKeys
     * @return $this
     */
    public function setReplyMessageMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1ReplyMessageMenuKeys $replyMessageMenuKeys)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1SendToDistributionListMenuKeys
     */
    public function getSendToDistributionListMenuKeys()
    {
        return $this->sendToDistributionListMenuKeys instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sendToDistributionListMenuKeys;
    }

    /**
     * Setter for sendToDistributionListMenuKeys
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1SendToDistributionListMenuKeys $sendToDistributionListMenuKeys
     * @return $this
     */
    public function setSendToDistributionListMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1SendToDistributionListMenuKeys $sendToDistributionListMenuKeys)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1SelectDistributionListMenuKeys
     */
    public function getSelectDistributionListMenuKeys()
    {
        return $this->selectDistributionListMenuKeys instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->selectDistributionListMenuKeys;
    }

    /**
     * Setter for selectDistributionListMenuKeys
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1SelectDistributionListMenuKeys $selectDistributionListMenuKeys
     * @return $this
     */
    public function setSelectDistributionListMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1SelectDistributionListMenuKeys $selectDistributionListMenuKeys)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1ReviewSelectedDistributionListMenuKeys
     */
    public function getReviewSelectedDistributionListMenuKeys()
    {
        return $this->reviewSelectedDistributionListMenuKeys instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->reviewSelectedDistributionListMenuKeys;
    }

    /**
     * Setter for reviewSelectedDistributionListMenuKeys
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1ReviewSelectedDistributionListMenuKeys $reviewSelectedDistributionListMenuKeys
     * @return $this
     */
    public function setReviewSelectedDistributionListMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1ReviewSelectedDistributionListMenuKeys $reviewSelectedDistributionListMenuKeys)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1SendMessageToSelectedDistributionListMenuKeys
     */
    public function getSendMessageToSelectedDistributionListMenuKeys()
    {
        return $this->sendMessageToSelectedDistributionListMenuKeys instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sendMessageToSelectedDistributionListMenuKeys;
    }

    /**
     * Setter for sendMessageToSelectedDistributionListMenuKeys
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1SendMessageToSelectedDistributionListMenuKeys $sendMessageToSelectedDistributionListMenuKeys
     * @return $this
     */
    public function setSendMessageToSelectedDistributionListMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1SendMessageToSelectedDistributionListMenuKeys $sendMessageToSelectedDistributionListMenuKeys)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1SendToAllGroupMembersMenuKeys
     */
    public function getSendToAllGroupMembersMenuKeys()
    {
        return $this->sendToAllGroupMembersMenuKeys instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sendToAllGroupMembersMenuKeys;
    }

    /**
     * Setter for sendToAllGroupMembersMenuKeys
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1SendToAllGroupMembersMenuKeys $sendToAllGroupMembersMenuKeys
     * @return $this
     */
    public function setSendToAllGroupMembersMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1SendToAllGroupMembersMenuKeys $sendToAllGroupMembersMenuKeys)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1SendToPersonMenuKeys
     */
    public function getSendToPersonMenuKeys()
    {
        return $this->sendToPersonMenuKeys instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sendToPersonMenuKeys;
    }

    /**
     * Setter for sendToPersonMenuKeys
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1SendToPersonMenuKeys $sendToPersonMenuKeys
     * @return $this
     */
    public function setSendToPersonMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1SendToPersonMenuKeys $sendToPersonMenuKeys)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1ChangeCurrentIntroductionOrMessageOrReplyMenuKeys
     */
    public function getChangeCurrentIntroductionOrMessageOrReplyMenuKeys()
    {
        return $this->changeCurrentIntroductionOrMessageOrReplyMenuKeys instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->changeCurrentIntroductionOrMessageOrReplyMenuKeys;
    }

    /**
     * Setter for changeCurrentIntroductionOrMessageOrReplyMenuKeys
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1ChangeCurrentIntroductionOrMessageOrReplyMenuKeys $changeCurrentIntroductionOrMessageOrReplyMenuKeys
     * @return $this
     */
    public function setChangeCurrentIntroductionOrMessageOrReplyMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1ChangeCurrentIntroductionOrMessageOrReplyMenuKeys $changeCurrentIntroductionOrMessageOrReplyMenuKeys)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1VoicePortalLoginMenuKeys
     */
    public function getVoicePortalLoginMenuKeys()
    {
        return $this->voicePortalLoginMenuKeys instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->voicePortalLoginMenuKeys;
    }

    /**
     * Setter for voicePortalLoginMenuKeys
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1VoicePortalLoginMenuKeys $voicePortalLoginMenuKeys
     * @return $this
     */
    public function setVoicePortalLoginMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1VoicePortalLoginMenuKeys $voicePortalLoginMenuKeys)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1FaxMessagingMenuKeys
     */
    public function getFaxMessagingMenuKeys()
    {
        return $this->faxMessagingMenuKeys instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->faxMessagingMenuKeys;
    }

    /**
     * Setter for faxMessagingMenuKeys
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1FaxMessagingMenuKeys $faxMessagingMenuKeys
     * @return $this
     */
    public function setFaxMessagingMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1FaxMessagingMenuKeys $faxMessagingMenuKeys)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1MessageDepositMenuKeys
     */
    public function getMessageDepositMenuKeys()
    {
        return $this->messageDepositMenuKeys instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->messageDepositMenuKeys;
    }

    /**
     * Setter for messageDepositMenuKeys
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1MessageDepositMenuKeys $messageDepositMenuKeys
     * @return $this
     */
    public function setMessageDepositMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1MessageDepositMenuKeys $messageDepositMenuKeys)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1DisableMessageDepositMenuKeys
     */
    public function getDisableMessageDepositMenuKeys()
    {
        return $this->disableMessageDepositMenuKeys instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->disableMessageDepositMenuKeys;
    }

    /**
     * Setter for disableMessageDepositMenuKeys
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1DisableMessageDepositMenuKeys $disableMessageDepositMenuKeys
     * @return $this
     */
    public function setDisableMessageDepositMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1DisableMessageDepositMenuKeys $disableMessageDepositMenuKeys)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1GreetingOnlyForwardingDestinationMenuKeys
     */
    public function getGreetingOnlyForwardingDestinationMenuKeys()
    {
        return $this->greetingOnlyForwardingDestinationMenuKeys instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->greetingOnlyForwardingDestinationMenuKeys;
    }

    /**
     * Setter for greetingOnlyForwardingDestinationMenuKeys
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1GreetingOnlyForwardingDestinationMenuKeys $greetingOnlyForwardingDestinationMenuKeys
     * @return $this
     */
    public function setGreetingOnlyForwardingDestinationMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupGetVoicePortalMenusResponse19sp1GreetingOnlyForwardingDestinationMenuKeys $greetingOnlyForwardingDestinationMenuKeys)
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

