<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupHuntGroupConsolidatedModifyInstanceRequest
 *
 * Request to modify a Hunt Group instance.
 *         
 *         When phone numbers are un-assigned from the user, the unused numbers may
 * be un-assigned from the group and service provider. If UnassignPhoneNumbersLevel
 * is set to 'Group', the user's primary phone number, fax number and any alternate
 * numbers, will be un-assigned from the group if the command is executed by a
 * service provider administrator or above.
 *         When set to 'Service Provider', they will be un-assigned from the group
 * and service provider if the command is executed by a provisioning administrator
 * or above.
 *         When omitted, the number(s) will be left assigned to the group.
 *         An ErrorResponse will be returned if any number cannot be unassigned
 * because of insufficient privilege.
 *         
 *         If the phoneNumber has not been assigned to the group and
 * addPhoneNumberToGroup is set to true, it will be added to group if needed if the
 * command is executed by a service provider administrator and above. The command
 * will fail otherwise.
 *         
 *         The response is either SuccessResponse or ErrorResponse.
 *         The following elements are only used in AS data mode:
 *            useSystemHuntGroupCLIDSetting
 *            includeHuntGroupNameInCLID
 *
 * @see ErrorResponse
 * @see SuccessResponse
 * @see ErrorResponse
 */
class GroupHuntGroupConsolidatedModifyInstanceRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @var string|null
     */
    private $serviceUserId = null;

    /**
     * @ElementName unassignPhoneNumbers
     * @var string|null
     */
    private $unassignPhoneNumbers = null;

    /**
     * @ElementName addPhoneNumberToGroup
     * @var bool|null
     */
    private $addPhoneNumberToGroup = null;

    /**
     * @ElementName serviceInstanceProfile
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceModifyProfile|null
     */
    private $serviceInstanceProfile = null;

    /**
     * @ElementName policy
     * @var string|null
     */
    private $policy = null;

    /**
     * @ElementName huntAfterNoAnswer
     * @var bool|null
     */
    private $huntAfterNoAnswer = null;

    /**
     * @ElementName noAnswerNumberOfRings
     * @var int|null
     */
    private $noAnswerNumberOfRings = null;

    /**
     * @ElementName forwardAfterTimeout
     * @var bool|null
     */
    private $forwardAfterTimeout = null;

    /**
     * @ElementName forwardTimeoutSeconds
     * @var int|null
     */
    private $forwardTimeoutSeconds = null;

    /**
     * @ElementName forwardToPhoneNumber
     * @var string|null
     */
    private $forwardToPhoneNumber = null;

    /**
     * @ElementName agentUserIdList
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null
     */
    private $agentUserIdList = null;

    /**
     * @ElementName agentWeightList
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementAgentWeightList|null
     */
    private $agentWeightList = null;

    /**
     * @ElementName allowCallWaitingForAgents
     * @var bool|null
     */
    private $allowCallWaitingForAgents = null;

    /**
     * @ElementName useSystemHuntGroupCLIDSetting
     * @var bool|null
     */
    private $useSystemHuntGroupCLIDSetting = null;

    /**
     * @ElementName includeHuntGroupNameInCLID
     * @var bool|null
     */
    private $includeHuntGroupNameInCLID = null;

    /**
     * @ElementName enableNotReachableForwarding
     * @var bool|null
     */
    private $enableNotReachableForwarding = null;

    /**
     * @ElementName notReachableForwardToPhoneNumber
     * @var string|null
     */
    private $notReachableForwardToPhoneNumber = null;

    /**
     * @ElementName makeBusyWhenNotReachable
     * @var bool|null
     */
    private $makeBusyWhenNotReachable = null;

    /**
     * @ElementName allowMembersToControlGroupBusy
     * @var bool|null
     */
    private $allowMembersToControlGroupBusy = null;

    /**
     * @ElementName enableGroupBusy
     * @var bool|null
     */
    private $enableGroupBusy = null;

    /**
     * @ElementName applyGroupBusyWhenTerminatingToAgent
     * @var bool|null
     */
    private $applyGroupBusyWhenTerminatingToAgent = null;

    /**
     * @ElementName networkClassOfService
     * @var string|null
     */
    private $networkClassOfService = null;

    /**
     * @ElementName serviceList
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementConsolidatedUserServiceAssignmentList|null
     */
    private $serviceList = null;

    /**
     * @ElementName isActive
     * @var bool|null
     */
    private $isActive = null;

    /**
     * @ElementName directoryNumberHuntingAgentUserIdList
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null
     */
    private $directoryNumberHuntingAgentUserIdList = null;

    /**
     * @ElementName directoryNumberHuntingUseTerminateCallToAgentFirst
     * @var bool|null
     */
    private $directoryNumberHuntingUseTerminateCallToAgentFirst = null;

    /**
     * @ElementName directoryNumberHuntingUseOriginalAgentServicesForBusyAndNoAnswerCalls
     * @var bool|null
     */
    private $directoryNumberHuntingUseOriginalAgentServicesForBusyAndNoAnswerCalls = null;

    /**
     * Getter for serviceUserId
     *
     * @ElementName serviceUserId
     * @return string|null
     */
    public function getServiceUserId()
    {
        return $this->serviceUserId;
    }

    /**
     * Setter for serviceUserId
     *
     * @ElementName serviceUserId
     * @param string|null $serviceUserId
     * @return $this
     */
    public function setServiceUserId($serviceUserId)
    {
        $this->serviceUserId = $serviceUserId;
        return $this;
    }

    /**
     * Getter for unassignPhoneNumbers
     *
     * @ElementName unassignPhoneNumbers
     * @return string|null
     */
    public function getUnassignPhoneNumbers()
    {
        return $this->unassignPhoneNumbers;
    }

    /**
     * Setter for unassignPhoneNumbers
     *
     * @ElementName unassignPhoneNumbers
     * @param string|null $unassignPhoneNumbers
     * @return $this
     */
    public function setUnassignPhoneNumbers($unassignPhoneNumbers)
    {
        $this->unassignPhoneNumbers = $unassignPhoneNumbers;
        return $this;
    }

    /**
     * Getter for addPhoneNumberToGroup
     *
     * @ElementName addPhoneNumberToGroup
     * @return bool|null
     */
    public function getAddPhoneNumberToGroup()
    {
        return $this->addPhoneNumberToGroup;
    }

    /**
     * Setter for addPhoneNumberToGroup
     *
     * @ElementName addPhoneNumberToGroup
     * @param bool|null $addPhoneNumberToGroup
     * @return $this
     */
    public function setAddPhoneNumberToGroup($addPhoneNumberToGroup)
    {
        $this->addPhoneNumberToGroup = $addPhoneNumberToGroup;
        return $this;
    }

    /**
     * Getter for serviceInstanceProfile
     *
     * @ElementName serviceInstanceProfile
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceModifyProfile|null
     */
    public function getServiceInstanceProfile()
    {
        return $this->serviceInstanceProfile;
    }

    /**
     * Setter for serviceInstanceProfile
     *
     * @ElementName serviceInstanceProfile
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceModifyProfile|null $serviceInstanceProfile
     * @return $this
     */
    public function setServiceInstanceProfile($serviceInstanceProfile)
    {
        $this->serviceInstanceProfile = $serviceInstanceProfile;
        return $this;
    }

    /**
     * Getter for policy
     *
     * @ElementName policy
     * @return string|null
     */
    public function getPolicy()
    {
        return $this->policy;
    }

    /**
     * Setter for policy
     *
     * @ElementName policy
     * @param string|null $policy
     * @return $this
     */
    public function setPolicy($policy)
    {
        $this->policy = $policy;
        return $this;
    }

    /**
     * Getter for huntAfterNoAnswer
     *
     * @ElementName huntAfterNoAnswer
     * @return bool|null
     */
    public function getHuntAfterNoAnswer()
    {
        return $this->huntAfterNoAnswer;
    }

    /**
     * Setter for huntAfterNoAnswer
     *
     * @ElementName huntAfterNoAnswer
     * @param bool|null $huntAfterNoAnswer
     * @return $this
     */
    public function setHuntAfterNoAnswer($huntAfterNoAnswer)
    {
        $this->huntAfterNoAnswer = $huntAfterNoAnswer;
        return $this;
    }

    /**
     * Getter for noAnswerNumberOfRings
     *
     * @ElementName noAnswerNumberOfRings
     * @return int|null
     */
    public function getNoAnswerNumberOfRings()
    {
        return $this->noAnswerNumberOfRings;
    }

    /**
     * Setter for noAnswerNumberOfRings
     *
     * @ElementName noAnswerNumberOfRings
     * @param int|null $noAnswerNumberOfRings
     * @return $this
     */
    public function setNoAnswerNumberOfRings($noAnswerNumberOfRings)
    {
        $this->noAnswerNumberOfRings = $noAnswerNumberOfRings;
        return $this;
    }

    /**
     * Getter for forwardAfterTimeout
     *
     * @ElementName forwardAfterTimeout
     * @return bool|null
     */
    public function getForwardAfterTimeout()
    {
        return $this->forwardAfterTimeout;
    }

    /**
     * Setter for forwardAfterTimeout
     *
     * @ElementName forwardAfterTimeout
     * @param bool|null $forwardAfterTimeout
     * @return $this
     */
    public function setForwardAfterTimeout($forwardAfterTimeout)
    {
        $this->forwardAfterTimeout = $forwardAfterTimeout;
        return $this;
    }

    /**
     * Getter for forwardTimeoutSeconds
     *
     * @ElementName forwardTimeoutSeconds
     * @return int|null
     */
    public function getForwardTimeoutSeconds()
    {
        return $this->forwardTimeoutSeconds;
    }

    /**
     * Setter for forwardTimeoutSeconds
     *
     * @ElementName forwardTimeoutSeconds
     * @param int|null $forwardTimeoutSeconds
     * @return $this
     */
    public function setForwardTimeoutSeconds($forwardTimeoutSeconds)
    {
        $this->forwardTimeoutSeconds = $forwardTimeoutSeconds;
        return $this;
    }

    /**
     * Getter for forwardToPhoneNumber
     *
     * @ElementName forwardToPhoneNumber
     * @return string|null
     */
    public function getForwardToPhoneNumber()
    {
        return $this->forwardToPhoneNumber;
    }

    /**
     * Setter for forwardToPhoneNumber
     *
     * @ElementName forwardToPhoneNumber
     * @param string|null $forwardToPhoneNumber
     * @return $this
     */
    public function setForwardToPhoneNumber($forwardToPhoneNumber)
    {
        $this->forwardToPhoneNumber = $forwardToPhoneNumber;
        return $this;
    }

    /**
     * Getter for agentUserIdList
     *
     * @ElementName agentUserIdList
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null
     */
    public function getAgentUserIdList()
    {
        return $this->agentUserIdList;
    }

    /**
     * Setter for agentUserIdList
     *
     * @ElementName agentUserIdList
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null $agentUserIdList
     * @return $this
     */
    public function setAgentUserIdList($agentUserIdList)
    {
        $this->agentUserIdList = $agentUserIdList;
        return $this;
    }

    /**
     * Getter for agentWeightList
     *
     * @ElementName agentWeightList
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementAgentWeightList|null
     */
    public function getAgentWeightList()
    {
        return $this->agentWeightList;
    }

    /**
     * Setter for agentWeightList
     *
     * @ElementName agentWeightList
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementAgentWeightList|null $agentWeightList
     * @return $this
     */
    public function setAgentWeightList($agentWeightList)
    {
        $this->agentWeightList = $agentWeightList;
        return $this;
    }

    /**
     * Getter for allowCallWaitingForAgents
     *
     * @ElementName allowCallWaitingForAgents
     * @return bool|null
     */
    public function getAllowCallWaitingForAgents()
    {
        return $this->allowCallWaitingForAgents;
    }

    /**
     * Setter for allowCallWaitingForAgents
     *
     * @ElementName allowCallWaitingForAgents
     * @param bool|null $allowCallWaitingForAgents
     * @return $this
     */
    public function setAllowCallWaitingForAgents($allowCallWaitingForAgents)
    {
        $this->allowCallWaitingForAgents = $allowCallWaitingForAgents;
        return $this;
    }

    /**
     * Getter for useSystemHuntGroupCLIDSetting
     *
     * @ElementName useSystemHuntGroupCLIDSetting
     * @return bool|null
     */
    public function getUseSystemHuntGroupCLIDSetting()
    {
        return $this->useSystemHuntGroupCLIDSetting;
    }

    /**
     * Setter for useSystemHuntGroupCLIDSetting
     *
     * @ElementName useSystemHuntGroupCLIDSetting
     * @param bool|null $useSystemHuntGroupCLIDSetting
     * @return $this
     */
    public function setUseSystemHuntGroupCLIDSetting($useSystemHuntGroupCLIDSetting)
    {
        $this->useSystemHuntGroupCLIDSetting = $useSystemHuntGroupCLIDSetting;
        return $this;
    }

    /**
     * Getter for includeHuntGroupNameInCLID
     *
     * @ElementName includeHuntGroupNameInCLID
     * @return bool|null
     */
    public function getIncludeHuntGroupNameInCLID()
    {
        return $this->includeHuntGroupNameInCLID;
    }

    /**
     * Setter for includeHuntGroupNameInCLID
     *
     * @ElementName includeHuntGroupNameInCLID
     * @param bool|null $includeHuntGroupNameInCLID
     * @return $this
     */
    public function setIncludeHuntGroupNameInCLID($includeHuntGroupNameInCLID)
    {
        $this->includeHuntGroupNameInCLID = $includeHuntGroupNameInCLID;
        return $this;
    }

    /**
     * Getter for enableNotReachableForwarding
     *
     * @ElementName enableNotReachableForwarding
     * @return bool|null
     */
    public function getEnableNotReachableForwarding()
    {
        return $this->enableNotReachableForwarding;
    }

    /**
     * Setter for enableNotReachableForwarding
     *
     * @ElementName enableNotReachableForwarding
     * @param bool|null $enableNotReachableForwarding
     * @return $this
     */
    public function setEnableNotReachableForwarding($enableNotReachableForwarding)
    {
        $this->enableNotReachableForwarding = $enableNotReachableForwarding;
        return $this;
    }

    /**
     * Getter for notReachableForwardToPhoneNumber
     *
     * @ElementName notReachableForwardToPhoneNumber
     * @return string|null
     */
    public function getNotReachableForwardToPhoneNumber()
    {
        return $this->notReachableForwardToPhoneNumber;
    }

    /**
     * Setter for notReachableForwardToPhoneNumber
     *
     * @ElementName notReachableForwardToPhoneNumber
     * @param string|null $notReachableForwardToPhoneNumber
     * @return $this
     */
    public function setNotReachableForwardToPhoneNumber($notReachableForwardToPhoneNumber)
    {
        $this->notReachableForwardToPhoneNumber = $notReachableForwardToPhoneNumber;
        return $this;
    }

    /**
     * Getter for makeBusyWhenNotReachable
     *
     * @ElementName makeBusyWhenNotReachable
     * @return bool|null
     */
    public function getMakeBusyWhenNotReachable()
    {
        return $this->makeBusyWhenNotReachable;
    }

    /**
     * Setter for makeBusyWhenNotReachable
     *
     * @ElementName makeBusyWhenNotReachable
     * @param bool|null $makeBusyWhenNotReachable
     * @return $this
     */
    public function setMakeBusyWhenNotReachable($makeBusyWhenNotReachable)
    {
        $this->makeBusyWhenNotReachable = $makeBusyWhenNotReachable;
        return $this;
    }

    /**
     * Getter for allowMembersToControlGroupBusy
     *
     * @ElementName allowMembersToControlGroupBusy
     * @return bool|null
     */
    public function getAllowMembersToControlGroupBusy()
    {
        return $this->allowMembersToControlGroupBusy;
    }

    /**
     * Setter for allowMembersToControlGroupBusy
     *
     * @ElementName allowMembersToControlGroupBusy
     * @param bool|null $allowMembersToControlGroupBusy
     * @return $this
     */
    public function setAllowMembersToControlGroupBusy($allowMembersToControlGroupBusy)
    {
        $this->allowMembersToControlGroupBusy = $allowMembersToControlGroupBusy;
        return $this;
    }

    /**
     * Getter for enableGroupBusy
     *
     * @ElementName enableGroupBusy
     * @return bool|null
     */
    public function getEnableGroupBusy()
    {
        return $this->enableGroupBusy;
    }

    /**
     * Setter for enableGroupBusy
     *
     * @ElementName enableGroupBusy
     * @param bool|null $enableGroupBusy
     * @return $this
     */
    public function setEnableGroupBusy($enableGroupBusy)
    {
        $this->enableGroupBusy = $enableGroupBusy;
        return $this;
    }

    /**
     * Getter for applyGroupBusyWhenTerminatingToAgent
     *
     * @ElementName applyGroupBusyWhenTerminatingToAgent
     * @return bool|null
     */
    public function getApplyGroupBusyWhenTerminatingToAgent()
    {
        return $this->applyGroupBusyWhenTerminatingToAgent;
    }

    /**
     * Setter for applyGroupBusyWhenTerminatingToAgent
     *
     * @ElementName applyGroupBusyWhenTerminatingToAgent
     * @param bool|null $applyGroupBusyWhenTerminatingToAgent
     * @return $this
     */
    public function setApplyGroupBusyWhenTerminatingToAgent($applyGroupBusyWhenTerminatingToAgent)
    {
        $this->applyGroupBusyWhenTerminatingToAgent = $applyGroupBusyWhenTerminatingToAgent;
        return $this;
    }

    /**
     * Getter for networkClassOfService
     *
     * @ElementName networkClassOfService
     * @return string|null
     */
    public function getNetworkClassOfService()
    {
        return $this->networkClassOfService;
    }

    /**
     * Setter for networkClassOfService
     *
     * @ElementName networkClassOfService
     * @param string|null $networkClassOfService
     * @return $this
     */
    public function setNetworkClassOfService($networkClassOfService)
    {
        $this->networkClassOfService = $networkClassOfService;
        return $this;
    }

    /**
     * Getter for serviceList
     *
     * @ElementName serviceList
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementConsolidatedUserServiceAssignmentList|null
     */
    public function getServiceList()
    {
        return $this->serviceList;
    }

    /**
     * Setter for serviceList
     *
     * @ElementName serviceList
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementConsolidatedUserServiceAssignmentList|null $serviceList
     * @return $this
     */
    public function setServiceList($serviceList)
    {
        $this->serviceList = $serviceList;
        return $this;
    }

    /**
     * Getter for isActive
     *
     * @ElementName isActive
     * @return bool|null
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Setter for isActive
     *
     * @ElementName isActive
     * @param bool|null $isActive
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        return $this;
    }

    /**
     * Getter for directoryNumberHuntingAgentUserIdList
     *
     * @ElementName directoryNumberHuntingAgentUserIdList
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null
     */
    public function getDirectoryNumberHuntingAgentUserIdList()
    {
        return $this->directoryNumberHuntingAgentUserIdList;
    }

    /**
     * Setter for directoryNumberHuntingAgentUserIdList
     *
     * @ElementName directoryNumberHuntingAgentUserIdList
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null $directoryNumberHuntingAgentUserIdList
     * @return $this
     */
    public function setDirectoryNumberHuntingAgentUserIdList($directoryNumberHuntingAgentUserIdList)
    {
        $this->directoryNumberHuntingAgentUserIdList = $directoryNumberHuntingAgentUserIdList;
        return $this;
    }

    /**
     * Getter for directoryNumberHuntingUseTerminateCallToAgentFirst
     *
     * @ElementName directoryNumberHuntingUseTerminateCallToAgentFirst
     * @return bool|null
     */
    public function getDirectoryNumberHuntingUseTerminateCallToAgentFirst()
    {
        return $this->directoryNumberHuntingUseTerminateCallToAgentFirst;
    }

    /**
     * Setter for directoryNumberHuntingUseTerminateCallToAgentFirst
     *
     * @ElementName directoryNumberHuntingUseTerminateCallToAgentFirst
     * @param bool|null $directoryNumberHuntingUseTerminateCallToAgentFirst
     * @return $this
     */
    public function setDirectoryNumberHuntingUseTerminateCallToAgentFirst($directoryNumberHuntingUseTerminateCallToAgentFirst)
    {
        $this->directoryNumberHuntingUseTerminateCallToAgentFirst = $directoryNumberHuntingUseTerminateCallToAgentFirst;
        return $this;
    }

    /**
     * Getter for directoryNumberHuntingUseOriginalAgentServicesForBusyAndNoAnswerCalls
     *
     * @ElementName directoryNumberHuntingUseOriginalAgentServicesForBusyAndNoAnswerCalls
     * @return bool|null
     */
    public function getDirectoryNumberHuntingUseOriginalAgentServicesForBusyAndNoAnswerCalls()
    {
        return $this->directoryNumberHuntingUseOriginalAgentServicesForBusyAndNoAnswerCalls;
    }

    /**
     * Setter for directoryNumberHuntingUseOriginalAgentServicesForBusyAndNoAnswerCalls
     *
     * @ElementName directoryNumberHuntingUseOriginalAgentServicesForBusyAndNoAnswerCalls
     * @param bool|null $directoryNumberHuntingUseOriginalAgentServicesForBusyAndNoAnswerCalls
     * @return $this
     */
    public function setDirectoryNumberHuntingUseOriginalAgentServicesForBusyAndNoAnswerCalls($directoryNumberHuntingUseOriginalAgentServicesForBusyAndNoAnswerCalls)
    {
        $this->directoryNumberHuntingUseOriginalAgentServicesForBusyAndNoAnswerCalls = $directoryNumberHuntingUseOriginalAgentServicesForBusyAndNoAnswerCalls;
        return $this;
    }


}

