<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemVoiceMessagingGroupModifyVoicePortalMenusRequest
 *
 * Request to modify the system voice portal menus setting.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SystemVoiceMessagingGroupModifyVoicePortalMenusRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName useVoicePortalCustomization
     * @var bool|null
     */
    private $useVoicePortalCustomization = null;

    /**
     * @ElementName voicePortalMainMenuKeys
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestVoicePortalMainMenuKeys|null
     */
    private $voicePortalMainMenuKeys = null;

    /**
     * @ElementName voiceMessagingMenuKeys
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestVoiceMessagingMenuKeys|null
     */
    private $voiceMessagingMenuKeys = null;

    /**
     * @ElementName playGreetingMenuKeys
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestPlayGreetingMenuKeys|null
     */
    private $playGreetingMenuKeys = null;

    /**
     * @ElementName changeBusyOrNoAnswerGreetingMenuKeys
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestChangeBusyOrNoAnswerGreetingMenuKeys|null
     */
    private $changeBusyOrNoAnswerGreetingMenuKeys = null;

    /**
     * @ElementName changeExtendedAwayGreetingMenuKeys
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestChangeExtendedAwayGreetingMenuKeys|null
     */
    private $changeExtendedAwayGreetingMenuKeys = null;

    /**
     * @ElementName recordNewGreetingOrPersonalizedNameMenuKeys
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestRecordNewGreetingOrPersonalizedNameMenuKeys|null
     */
    private $recordNewGreetingOrPersonalizedNameMenuKeys = null;

    /**
     * @ElementName deleteAllMessagesMenuKeys
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestDeleteAllMessagesMenuKeys|null
     */
    private $deleteAllMessagesMenuKeys = null;

    /**
     * @ElementName commPilotExpressProfileMenuKeys
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestCommPilotExpressProfileMenuKeys|null
     */
    private $commPilotExpressProfileMenuKeys = null;

    /**
     * @ElementName personalizedNameMenuKeys
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestPersonalizedNameMenuKeys|null
     */
    private $personalizedNameMenuKeys = null;

    /**
     * @ElementName callForwardingOptionsMenuKeys
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestCallForwardingOptionsMenuKeys|null
     */
    private $callForwardingOptionsMenuKeys = null;

    /**
     * @ElementName changeCallForwardingDestinationMenuKeys
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestChangeCallForwardingDestinationMenuKeys|null
     */
    private $changeCallForwardingDestinationMenuKeys = null;

    /**
     * @ElementName voicePortalCallingMenuKeys
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestVoicePortalCallingMenuKeys|null
     */
    private $voicePortalCallingMenuKeys = null;

    /**
     * @ElementName hotelingMenuKeys
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestHotelingMenuKeys|null
     */
    private $hotelingMenuKeys = null;

    /**
     * @ElementName passcodeMenuKeys
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestPasscodeMenuKeys|null
     */
    private $passcodeMenuKeys = null;

    /**
     * @ElementName playMessagesMenuKeys
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestPlayMessagesMenuKeys|null
     */
    private $playMessagesMenuKeys = null;

    /**
     * @ElementName playMessageMenuKeys
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestPlayMessageMenuKeys|null
     */
    private $playMessageMenuKeys = null;

    /**
     * @ElementName additionalMessageOptionsMenuKeys
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestAdditionalMessageOptionsMenuKeys|null
     */
    private $additionalMessageOptionsMenuKeys = null;

    /**
     * @ElementName forwardOrComposeMessageMenuKeys
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestForwardOrComposeMessageMenuKeys|null
     */
    private $forwardOrComposeMessageMenuKeys = null;

    /**
     * @ElementName replyMessageMenuKeys
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestReplyMessageMenuKeys|null
     */
    private $replyMessageMenuKeys = null;

    /**
     * @ElementName sendToDistributionListMenuKeys
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestSendToDistributionListMenuKeys|null
     */
    private $sendToDistributionListMenuKeys = null;

    /**
     * @ElementName selectDistributionListMenuKeys
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestSelectDistributionListMenuKeys|null
     */
    private $selectDistributionListMenuKeys = null;

    /**
     * @ElementName reviewSelectedDistributionListMenuKeys
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestReviewSelectedDistributionListMenuKeys|null
     */
    private $reviewSelectedDistributionListMenuKeys = null;

    /**
     * @ElementName sendMessageToSelectedDistributionListMenuKeys
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestSendMessageToSelectedDistributionListMenuKeys|null
     */
    private $sendMessageToSelectedDistributionListMenuKeys = null;

    /**
     * @ElementName sendToAllGroupMembersMenuKeys
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestSendToAllGroupMembersMenuKeys|null
     */
    private $sendToAllGroupMembersMenuKeys = null;

    /**
     * @ElementName sendToPersonMenuKeys
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestSendToPersonMenuKeys|null
     */
    private $sendToPersonMenuKeys = null;

    /**
     * @ElementName changeCurrentIntroductionOrMessageOrReplyMenuKeys
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestChangeCurrentIntroductionOrMessageOrReplyMenuKeys|null
     */
    private $changeCurrentIntroductionOrMessageOrReplyMenuKeys = null;

    /**
     * @ElementName voicePortalLoginMenuKeys
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestVoicePortalLoginMenuKeys|null
     */
    private $voicePortalLoginMenuKeys = null;

    /**
     * @ElementName faxMessagingMenuKeys
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestFaxMessagingMenuKeys|null
     */
    private $faxMessagingMenuKeys = null;

    /**
     * @ElementName messageDepositMenuKeys
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestMessageDepositMenuKeys|null
     */
    private $messageDepositMenuKeys = null;

    /**
     * @ElementName disableMessageDepositMenuKeys
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestDisableMessageDepositMenuKeys|null
     */
    private $disableMessageDepositMenuKeys = null;

    /**
     * @ElementName greetingOnlyForwardingDestinationMenuKeys
     * @Nillable
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestGreetingOnlyForwardingDestinationMenuKeys|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $greetingOnlyForwardingDestinationMenuKeys = null;

    /**
     * Getter for useVoicePortalCustomization
     *
     * @ElementName useVoicePortalCustomization
     * @return bool|null
     */
    public function getUseVoicePortalCustomization()
    {
        return $this->useVoicePortalCustomization;
    }

    /**
     * Setter for useVoicePortalCustomization
     *
     * @ElementName useVoicePortalCustomization
     * @param bool|null $useVoicePortalCustomization
     * @return $this
     */
    public function setUseVoicePortalCustomization($useVoicePortalCustomization)
    {
        $this->useVoicePortalCustomization = $useVoicePortalCustomization;
        return $this;
    }

    /**
     * Getter for voicePortalMainMenuKeys
     *
     * @ElementName voicePortalMainMenuKeys
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestVoicePortalMainMenuKeys|null
     */
    public function getVoicePortalMainMenuKeys()
    {
        return $this->voicePortalMainMenuKeys;
    }

    /**
     * Setter for voicePortalMainMenuKeys
     *
     * @ElementName voicePortalMainMenuKeys
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestVoicePortalMainMenuKeys|null $voicePortalMainMenuKeys
     * @return $this
     */
    public function setVoicePortalMainMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestVoicePortalMainMenuKeys $voicePortalMainMenuKeys)
    {
        $this->voicePortalMainMenuKeys = $voicePortalMainMenuKeys;
        return $this;
    }

    /**
     * Getter for voiceMessagingMenuKeys
     *
     * @ElementName voiceMessagingMenuKeys
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestVoiceMessagingMenuKeys|null
     */
    public function getVoiceMessagingMenuKeys()
    {
        return $this->voiceMessagingMenuKeys;
    }

    /**
     * Setter for voiceMessagingMenuKeys
     *
     * @ElementName voiceMessagingMenuKeys
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestVoiceMessagingMenuKeys|null $voiceMessagingMenuKeys
     * @return $this
     */
    public function setVoiceMessagingMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestVoiceMessagingMenuKeys $voiceMessagingMenuKeys)
    {
        $this->voiceMessagingMenuKeys = $voiceMessagingMenuKeys;
        return $this;
    }

    /**
     * Getter for playGreetingMenuKeys
     *
     * @ElementName playGreetingMenuKeys
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestPlayGreetingMenuKeys|null
     */
    public function getPlayGreetingMenuKeys()
    {
        return $this->playGreetingMenuKeys;
    }

    /**
     * Setter for playGreetingMenuKeys
     *
     * @ElementName playGreetingMenuKeys
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestPlayGreetingMenuKeys|null $playGreetingMenuKeys
     * @return $this
     */
    public function setPlayGreetingMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestPlayGreetingMenuKeys $playGreetingMenuKeys)
    {
        $this->playGreetingMenuKeys = $playGreetingMenuKeys;
        return $this;
    }

    /**
     * Getter for changeBusyOrNoAnswerGreetingMenuKeys
     *
     * @ElementName changeBusyOrNoAnswerGreetingMenuKeys
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestChangeBusyOrNoAnswerGreetingMenuKeys|null
     */
    public function getChangeBusyOrNoAnswerGreetingMenuKeys()
    {
        return $this->changeBusyOrNoAnswerGreetingMenuKeys;
    }

    /**
     * Setter for changeBusyOrNoAnswerGreetingMenuKeys
     *
     * @ElementName changeBusyOrNoAnswerGreetingMenuKeys
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestChangeBusyOrNoAnswerGreetingMenuKeys|null $changeBusyOrNoAnswerGreetingMenuKeys
     * @return $this
     */
    public function setChangeBusyOrNoAnswerGreetingMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestChangeBusyOrNoAnswerGreetingMenuKeys $changeBusyOrNoAnswerGreetingMenuKeys)
    {
        $this->changeBusyOrNoAnswerGreetingMenuKeys = $changeBusyOrNoAnswerGreetingMenuKeys;
        return $this;
    }

    /**
     * Getter for changeExtendedAwayGreetingMenuKeys
     *
     * @ElementName changeExtendedAwayGreetingMenuKeys
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestChangeExtendedAwayGreetingMenuKeys|null
     */
    public function getChangeExtendedAwayGreetingMenuKeys()
    {
        return $this->changeExtendedAwayGreetingMenuKeys;
    }

    /**
     * Setter for changeExtendedAwayGreetingMenuKeys
     *
     * @ElementName changeExtendedAwayGreetingMenuKeys
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestChangeExtendedAwayGreetingMenuKeys|null $changeExtendedAwayGreetingMenuKeys
     * @return $this
     */
    public function setChangeExtendedAwayGreetingMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestChangeExtendedAwayGreetingMenuKeys $changeExtendedAwayGreetingMenuKeys)
    {
        $this->changeExtendedAwayGreetingMenuKeys = $changeExtendedAwayGreetingMenuKeys;
        return $this;
    }

    /**
     * Getter for recordNewGreetingOrPersonalizedNameMenuKeys
     *
     * @ElementName recordNewGreetingOrPersonalizedNameMenuKeys
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestRecordNewGreetingOrPersonalizedNameMenuKeys|null
     */
    public function getRecordNewGreetingOrPersonalizedNameMenuKeys()
    {
        return $this->recordNewGreetingOrPersonalizedNameMenuKeys;
    }

    /**
     * Setter for recordNewGreetingOrPersonalizedNameMenuKeys
     *
     * @ElementName recordNewGreetingOrPersonalizedNameMenuKeys
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestRecordNewGreetingOrPersonalizedNameMenuKeys|null $recordNewGreetingOrPersonalizedNameMenuKeys
     * @return $this
     */
    public function setRecordNewGreetingOrPersonalizedNameMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestRecordNewGreetingOrPersonalizedNameMenuKeys $recordNewGreetingOrPersonalizedNameMenuKeys)
    {
        $this->recordNewGreetingOrPersonalizedNameMenuKeys = $recordNewGreetingOrPersonalizedNameMenuKeys;
        return $this;
    }

    /**
     * Getter for deleteAllMessagesMenuKeys
     *
     * @ElementName deleteAllMessagesMenuKeys
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestDeleteAllMessagesMenuKeys|null
     */
    public function getDeleteAllMessagesMenuKeys()
    {
        return $this->deleteAllMessagesMenuKeys;
    }

    /**
     * Setter for deleteAllMessagesMenuKeys
     *
     * @ElementName deleteAllMessagesMenuKeys
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestDeleteAllMessagesMenuKeys|null $deleteAllMessagesMenuKeys
     * @return $this
     */
    public function setDeleteAllMessagesMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestDeleteAllMessagesMenuKeys $deleteAllMessagesMenuKeys)
    {
        $this->deleteAllMessagesMenuKeys = $deleteAllMessagesMenuKeys;
        return $this;
    }

    /**
     * Getter for commPilotExpressProfileMenuKeys
     *
     * @ElementName commPilotExpressProfileMenuKeys
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestCommPilotExpressProfileMenuKeys|null
     */
    public function getCommPilotExpressProfileMenuKeys()
    {
        return $this->commPilotExpressProfileMenuKeys;
    }

    /**
     * Setter for commPilotExpressProfileMenuKeys
     *
     * @ElementName commPilotExpressProfileMenuKeys
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestCommPilotExpressProfileMenuKeys|null $commPilotExpressProfileMenuKeys
     * @return $this
     */
    public function setCommPilotExpressProfileMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestCommPilotExpressProfileMenuKeys $commPilotExpressProfileMenuKeys)
    {
        $this->commPilotExpressProfileMenuKeys = $commPilotExpressProfileMenuKeys;
        return $this;
    }

    /**
     * Getter for personalizedNameMenuKeys
     *
     * @ElementName personalizedNameMenuKeys
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestPersonalizedNameMenuKeys|null
     */
    public function getPersonalizedNameMenuKeys()
    {
        return $this->personalizedNameMenuKeys;
    }

    /**
     * Setter for personalizedNameMenuKeys
     *
     * @ElementName personalizedNameMenuKeys
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestPersonalizedNameMenuKeys|null $personalizedNameMenuKeys
     * @return $this
     */
    public function setPersonalizedNameMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestPersonalizedNameMenuKeys $personalizedNameMenuKeys)
    {
        $this->personalizedNameMenuKeys = $personalizedNameMenuKeys;
        return $this;
    }

    /**
     * Getter for callForwardingOptionsMenuKeys
     *
     * @ElementName callForwardingOptionsMenuKeys
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestCallForwardingOptionsMenuKeys|null
     */
    public function getCallForwardingOptionsMenuKeys()
    {
        return $this->callForwardingOptionsMenuKeys;
    }

    /**
     * Setter for callForwardingOptionsMenuKeys
     *
     * @ElementName callForwardingOptionsMenuKeys
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestCallForwardingOptionsMenuKeys|null $callForwardingOptionsMenuKeys
     * @return $this
     */
    public function setCallForwardingOptionsMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestCallForwardingOptionsMenuKeys $callForwardingOptionsMenuKeys)
    {
        $this->callForwardingOptionsMenuKeys = $callForwardingOptionsMenuKeys;
        return $this;
    }

    /**
     * Getter for changeCallForwardingDestinationMenuKeys
     *
     * @ElementName changeCallForwardingDestinationMenuKeys
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestChangeCallForwardingDestinationMenuKeys|null
     */
    public function getChangeCallForwardingDestinationMenuKeys()
    {
        return $this->changeCallForwardingDestinationMenuKeys;
    }

    /**
     * Setter for changeCallForwardingDestinationMenuKeys
     *
     * @ElementName changeCallForwardingDestinationMenuKeys
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestChangeCallForwardingDestinationMenuKeys|null $changeCallForwardingDestinationMenuKeys
     * @return $this
     */
    public function setChangeCallForwardingDestinationMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestChangeCallForwardingDestinationMenuKeys $changeCallForwardingDestinationMenuKeys)
    {
        $this->changeCallForwardingDestinationMenuKeys = $changeCallForwardingDestinationMenuKeys;
        return $this;
    }

    /**
     * Getter for voicePortalCallingMenuKeys
     *
     * @ElementName voicePortalCallingMenuKeys
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestVoicePortalCallingMenuKeys|null
     */
    public function getVoicePortalCallingMenuKeys()
    {
        return $this->voicePortalCallingMenuKeys;
    }

    /**
     * Setter for voicePortalCallingMenuKeys
     *
     * @ElementName voicePortalCallingMenuKeys
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestVoicePortalCallingMenuKeys|null $voicePortalCallingMenuKeys
     * @return $this
     */
    public function setVoicePortalCallingMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestVoicePortalCallingMenuKeys $voicePortalCallingMenuKeys)
    {
        $this->voicePortalCallingMenuKeys = $voicePortalCallingMenuKeys;
        return $this;
    }

    /**
     * Getter for hotelingMenuKeys
     *
     * @ElementName hotelingMenuKeys
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestHotelingMenuKeys|null
     */
    public function getHotelingMenuKeys()
    {
        return $this->hotelingMenuKeys;
    }

    /**
     * Setter for hotelingMenuKeys
     *
     * @ElementName hotelingMenuKeys
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestHotelingMenuKeys|null $hotelingMenuKeys
     * @return $this
     */
    public function setHotelingMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestHotelingMenuKeys $hotelingMenuKeys)
    {
        $this->hotelingMenuKeys = $hotelingMenuKeys;
        return $this;
    }

    /**
     * Getter for passcodeMenuKeys
     *
     * @ElementName passcodeMenuKeys
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestPasscodeMenuKeys|null
     */
    public function getPasscodeMenuKeys()
    {
        return $this->passcodeMenuKeys;
    }

    /**
     * Setter for passcodeMenuKeys
     *
     * @ElementName passcodeMenuKeys
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestPasscodeMenuKeys|null $passcodeMenuKeys
     * @return $this
     */
    public function setPasscodeMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestPasscodeMenuKeys $passcodeMenuKeys)
    {
        $this->passcodeMenuKeys = $passcodeMenuKeys;
        return $this;
    }

    /**
     * Getter for playMessagesMenuKeys
     *
     * @ElementName playMessagesMenuKeys
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestPlayMessagesMenuKeys|null
     */
    public function getPlayMessagesMenuKeys()
    {
        return $this->playMessagesMenuKeys;
    }

    /**
     * Setter for playMessagesMenuKeys
     *
     * @ElementName playMessagesMenuKeys
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestPlayMessagesMenuKeys|null $playMessagesMenuKeys
     * @return $this
     */
    public function setPlayMessagesMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestPlayMessagesMenuKeys $playMessagesMenuKeys)
    {
        $this->playMessagesMenuKeys = $playMessagesMenuKeys;
        return $this;
    }

    /**
     * Getter for playMessageMenuKeys
     *
     * @ElementName playMessageMenuKeys
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestPlayMessageMenuKeys|null
     */
    public function getPlayMessageMenuKeys()
    {
        return $this->playMessageMenuKeys;
    }

    /**
     * Setter for playMessageMenuKeys
     *
     * @ElementName playMessageMenuKeys
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestPlayMessageMenuKeys|null $playMessageMenuKeys
     * @return $this
     */
    public function setPlayMessageMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestPlayMessageMenuKeys $playMessageMenuKeys)
    {
        $this->playMessageMenuKeys = $playMessageMenuKeys;
        return $this;
    }

    /**
     * Getter for additionalMessageOptionsMenuKeys
     *
     * @ElementName additionalMessageOptionsMenuKeys
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestAdditionalMessageOptionsMenuKeys|null
     */
    public function getAdditionalMessageOptionsMenuKeys()
    {
        return $this->additionalMessageOptionsMenuKeys;
    }

    /**
     * Setter for additionalMessageOptionsMenuKeys
     *
     * @ElementName additionalMessageOptionsMenuKeys
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestAdditionalMessageOptionsMenuKeys|null $additionalMessageOptionsMenuKeys
     * @return $this
     */
    public function setAdditionalMessageOptionsMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestAdditionalMessageOptionsMenuKeys $additionalMessageOptionsMenuKeys)
    {
        $this->additionalMessageOptionsMenuKeys = $additionalMessageOptionsMenuKeys;
        return $this;
    }

    /**
     * Getter for forwardOrComposeMessageMenuKeys
     *
     * @ElementName forwardOrComposeMessageMenuKeys
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestForwardOrComposeMessageMenuKeys|null
     */
    public function getForwardOrComposeMessageMenuKeys()
    {
        return $this->forwardOrComposeMessageMenuKeys;
    }

    /**
     * Setter for forwardOrComposeMessageMenuKeys
     *
     * @ElementName forwardOrComposeMessageMenuKeys
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestForwardOrComposeMessageMenuKeys|null $forwardOrComposeMessageMenuKeys
     * @return $this
     */
    public function setForwardOrComposeMessageMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestForwardOrComposeMessageMenuKeys $forwardOrComposeMessageMenuKeys)
    {
        $this->forwardOrComposeMessageMenuKeys = $forwardOrComposeMessageMenuKeys;
        return $this;
    }

    /**
     * Getter for replyMessageMenuKeys
     *
     * @ElementName replyMessageMenuKeys
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestReplyMessageMenuKeys|null
     */
    public function getReplyMessageMenuKeys()
    {
        return $this->replyMessageMenuKeys;
    }

    /**
     * Setter for replyMessageMenuKeys
     *
     * @ElementName replyMessageMenuKeys
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestReplyMessageMenuKeys|null $replyMessageMenuKeys
     * @return $this
     */
    public function setReplyMessageMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestReplyMessageMenuKeys $replyMessageMenuKeys)
    {
        $this->replyMessageMenuKeys = $replyMessageMenuKeys;
        return $this;
    }

    /**
     * Getter for sendToDistributionListMenuKeys
     *
     * @ElementName sendToDistributionListMenuKeys
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestSendToDistributionListMenuKeys|null
     */
    public function getSendToDistributionListMenuKeys()
    {
        return $this->sendToDistributionListMenuKeys;
    }

    /**
     * Setter for sendToDistributionListMenuKeys
     *
     * @ElementName sendToDistributionListMenuKeys
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestSendToDistributionListMenuKeys|null $sendToDistributionListMenuKeys
     * @return $this
     */
    public function setSendToDistributionListMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestSendToDistributionListMenuKeys $sendToDistributionListMenuKeys)
    {
        $this->sendToDistributionListMenuKeys = $sendToDistributionListMenuKeys;
        return $this;
    }

    /**
     * Getter for selectDistributionListMenuKeys
     *
     * @ElementName selectDistributionListMenuKeys
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestSelectDistributionListMenuKeys|null
     */
    public function getSelectDistributionListMenuKeys()
    {
        return $this->selectDistributionListMenuKeys;
    }

    /**
     * Setter for selectDistributionListMenuKeys
     *
     * @ElementName selectDistributionListMenuKeys
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestSelectDistributionListMenuKeys|null $selectDistributionListMenuKeys
     * @return $this
     */
    public function setSelectDistributionListMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestSelectDistributionListMenuKeys $selectDistributionListMenuKeys)
    {
        $this->selectDistributionListMenuKeys = $selectDistributionListMenuKeys;
        return $this;
    }

    /**
     * Getter for reviewSelectedDistributionListMenuKeys
     *
     * @ElementName reviewSelectedDistributionListMenuKeys
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestReviewSelectedDistributionListMenuKeys|null
     */
    public function getReviewSelectedDistributionListMenuKeys()
    {
        return $this->reviewSelectedDistributionListMenuKeys;
    }

    /**
     * Setter for reviewSelectedDistributionListMenuKeys
     *
     * @ElementName reviewSelectedDistributionListMenuKeys
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestReviewSelectedDistributionListMenuKeys|null $reviewSelectedDistributionListMenuKeys
     * @return $this
     */
    public function setReviewSelectedDistributionListMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestReviewSelectedDistributionListMenuKeys $reviewSelectedDistributionListMenuKeys)
    {
        $this->reviewSelectedDistributionListMenuKeys = $reviewSelectedDistributionListMenuKeys;
        return $this;
    }

    /**
     * Getter for sendMessageToSelectedDistributionListMenuKeys
     *
     * @ElementName sendMessageToSelectedDistributionListMenuKeys
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestSendMessageToSelectedDistributionListMenuKeys|null
     */
    public function getSendMessageToSelectedDistributionListMenuKeys()
    {
        return $this->sendMessageToSelectedDistributionListMenuKeys;
    }

    /**
     * Setter for sendMessageToSelectedDistributionListMenuKeys
     *
     * @ElementName sendMessageToSelectedDistributionListMenuKeys
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestSendMessageToSelectedDistributionListMenuKeys|null $sendMessageToSelectedDistributionListMenuKeys
     * @return $this
     */
    public function setSendMessageToSelectedDistributionListMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestSendMessageToSelectedDistributionListMenuKeys $sendMessageToSelectedDistributionListMenuKeys)
    {
        $this->sendMessageToSelectedDistributionListMenuKeys = $sendMessageToSelectedDistributionListMenuKeys;
        return $this;
    }

    /**
     * Getter for sendToAllGroupMembersMenuKeys
     *
     * @ElementName sendToAllGroupMembersMenuKeys
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestSendToAllGroupMembersMenuKeys|null
     */
    public function getSendToAllGroupMembersMenuKeys()
    {
        return $this->sendToAllGroupMembersMenuKeys;
    }

    /**
     * Setter for sendToAllGroupMembersMenuKeys
     *
     * @ElementName sendToAllGroupMembersMenuKeys
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestSendToAllGroupMembersMenuKeys|null $sendToAllGroupMembersMenuKeys
     * @return $this
     */
    public function setSendToAllGroupMembersMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestSendToAllGroupMembersMenuKeys $sendToAllGroupMembersMenuKeys)
    {
        $this->sendToAllGroupMembersMenuKeys = $sendToAllGroupMembersMenuKeys;
        return $this;
    }

    /**
     * Getter for sendToPersonMenuKeys
     *
     * @ElementName sendToPersonMenuKeys
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestSendToPersonMenuKeys|null
     */
    public function getSendToPersonMenuKeys()
    {
        return $this->sendToPersonMenuKeys;
    }

    /**
     * Setter for sendToPersonMenuKeys
     *
     * @ElementName sendToPersonMenuKeys
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestSendToPersonMenuKeys|null $sendToPersonMenuKeys
     * @return $this
     */
    public function setSendToPersonMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestSendToPersonMenuKeys $sendToPersonMenuKeys)
    {
        $this->sendToPersonMenuKeys = $sendToPersonMenuKeys;
        return $this;
    }

    /**
     * Getter for changeCurrentIntroductionOrMessageOrReplyMenuKeys
     *
     * @ElementName changeCurrentIntroductionOrMessageOrReplyMenuKeys
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestChangeCurrentIntroductionOrMessageOrReplyMenuKeys|null
     */
    public function getChangeCurrentIntroductionOrMessageOrReplyMenuKeys()
    {
        return $this->changeCurrentIntroductionOrMessageOrReplyMenuKeys;
    }

    /**
     * Setter for changeCurrentIntroductionOrMessageOrReplyMenuKeys
     *
     * @ElementName changeCurrentIntroductionOrMessageOrReplyMenuKeys
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestChangeCurrentIntroductionOrMessageOrReplyMenuKeys|null $changeCurrentIntroductionOrMessageOrReplyMenuKeys
     * @return $this
     */
    public function setChangeCurrentIntroductionOrMessageOrReplyMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestChangeCurrentIntroductionOrMessageOrReplyMenuKeys $changeCurrentIntroductionOrMessageOrReplyMenuKeys)
    {
        $this->changeCurrentIntroductionOrMessageOrReplyMenuKeys = $changeCurrentIntroductionOrMessageOrReplyMenuKeys;
        return $this;
    }

    /**
     * Getter for voicePortalLoginMenuKeys
     *
     * @ElementName voicePortalLoginMenuKeys
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestVoicePortalLoginMenuKeys|null
     */
    public function getVoicePortalLoginMenuKeys()
    {
        return $this->voicePortalLoginMenuKeys;
    }

    /**
     * Setter for voicePortalLoginMenuKeys
     *
     * @ElementName voicePortalLoginMenuKeys
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestVoicePortalLoginMenuKeys|null $voicePortalLoginMenuKeys
     * @return $this
     */
    public function setVoicePortalLoginMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestVoicePortalLoginMenuKeys $voicePortalLoginMenuKeys)
    {
        $this->voicePortalLoginMenuKeys = $voicePortalLoginMenuKeys;
        return $this;
    }

    /**
     * Getter for faxMessagingMenuKeys
     *
     * @ElementName faxMessagingMenuKeys
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestFaxMessagingMenuKeys|null
     */
    public function getFaxMessagingMenuKeys()
    {
        return $this->faxMessagingMenuKeys;
    }

    /**
     * Setter for faxMessagingMenuKeys
     *
     * @ElementName faxMessagingMenuKeys
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestFaxMessagingMenuKeys|null $faxMessagingMenuKeys
     * @return $this
     */
    public function setFaxMessagingMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestFaxMessagingMenuKeys $faxMessagingMenuKeys)
    {
        $this->faxMessagingMenuKeys = $faxMessagingMenuKeys;
        return $this;
    }

    /**
     * Getter for messageDepositMenuKeys
     *
     * @ElementName messageDepositMenuKeys
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestMessageDepositMenuKeys|null
     */
    public function getMessageDepositMenuKeys()
    {
        return $this->messageDepositMenuKeys;
    }

    /**
     * Setter for messageDepositMenuKeys
     *
     * @ElementName messageDepositMenuKeys
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestMessageDepositMenuKeys|null $messageDepositMenuKeys
     * @return $this
     */
    public function setMessageDepositMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestMessageDepositMenuKeys $messageDepositMenuKeys)
    {
        $this->messageDepositMenuKeys = $messageDepositMenuKeys;
        return $this;
    }

    /**
     * Getter for disableMessageDepositMenuKeys
     *
     * @ElementName disableMessageDepositMenuKeys
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestDisableMessageDepositMenuKeys|null
     */
    public function getDisableMessageDepositMenuKeys()
    {
        return $this->disableMessageDepositMenuKeys;
    }

    /**
     * Setter for disableMessageDepositMenuKeys
     *
     * @ElementName disableMessageDepositMenuKeys
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestDisableMessageDepositMenuKeys|null $disableMessageDepositMenuKeys
     * @return $this
     */
    public function setDisableMessageDepositMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestDisableMessageDepositMenuKeys $disableMessageDepositMenuKeys)
    {
        $this->disableMessageDepositMenuKeys = $disableMessageDepositMenuKeys;
        return $this;
    }

    /**
     * Getter for greetingOnlyForwardingDestinationMenuKeys
     *
     * @ElementName greetingOnlyForwardingDestinationMenuKeys
     * @Nillable
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestGreetingOnlyForwardingDestinationMenuKeys|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getGreetingOnlyForwardingDestinationMenuKeys()
    {
        return $this->greetingOnlyForwardingDestinationMenuKeys;
    }

    /**
     * Setter for greetingOnlyForwardingDestinationMenuKeys
     *
     * @ElementName greetingOnlyForwardingDestinationMenuKeys
     * @Nillable
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestGreetingOnlyForwardingDestinationMenuKeys|null|\CWM\BroadWorksConnector\Ocip\Nil $greetingOnlyForwardingDestinationMenuKeys
     * @return $this
     */
    public function setGreetingOnlyForwardingDestinationMenuKeys(\CWM\BroadWorksConnector\Ocip\Models\SystemVoiceMessagingGroupModifyVoicePortalMenusRequestGreetingOnlyForwardingDestinationMenuKeys $greetingOnlyForwardingDestinationMenuKeys)
    {
        $this->greetingOnlyForwardingDestinationMenuKeys = $greetingOnlyForwardingDestinationMenuKeys;
        return $this;
    }


}

