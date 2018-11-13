<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupHuntGroupConsolidatedAddInstanceRequest
 *
 * Add a Hunt Group instance to a group.
 *         The domain is required in the serviceUserId.
 *         
 *         If the phoneNumber has not been assigned to the group and
 * addPhoneNumberToGroup is set to true,
 *         it will be added to group if the command is executed by a service
 * provider administrator or above
 *         and the number is already assigned to the service provider. The command
 * will fail otherwise.
 *         
 *         The response is either SuccessResponse or ErrorResponse.
 *         The following elements are only used in AS data mode:
 *            useSystemHuntGroupCLIDSetting, use value "true" in HSS data mode
 *            includeHuntGroupNameInCLID, use value "true" in HSS data mode
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class GroupHuntGroupConsolidatedAddInstanceRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @var string|null
     */
    private $groupId = null;

    /**
     * @ElementName serviceUserId
     * @Type string
     * @var string|null
     */
    private $serviceUserId = null;

    /**
     * @ElementName addPhoneNumberToGroup
     * @Type bool
     * @var bool|null
     */
    private $addPhoneNumberToGroup = null;

    /**
     * @ElementName serviceInstanceProfile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceAddProfile
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceAddProfile|null
     */
    private $serviceInstanceProfile = null;

    /**
     * @ElementName policy
     * @Type \CWM\BroadWorksConnector\Ocip\Models\HuntPolicy
     * @var \CWM\BroadWorksConnector\Ocip\Models\HuntPolicy|null
     */
    private $policy = null;

    /**
     * @ElementName huntAfterNoAnswer
     * @Type bool
     * @var bool|null
     */
    private $huntAfterNoAnswer = null;

    /**
     * @ElementName noAnswerNumberOfRings
     * @Type int
     * @var int|null
     */
    private $noAnswerNumberOfRings = null;

    /**
     * @ElementName forwardAfterTimeout
     * @Type bool
     * @var bool|null
     */
    private $forwardAfterTimeout = null;

    /**
     * @ElementName forwardTimeoutSeconds
     * @Type int
     * @var int|null
     */
    private $forwardTimeoutSeconds = null;

    /**
     * @ElementName forwardToPhoneNumber
     * @Type string
     * @var string|null
     */
    private $forwardToPhoneNumber = null;

    /**
     * @ElementName agentUserId
     * @Type string
     * @Array
     * @var string[]
     */
    private $agentUserId = array(
        
    );

    /**
     * @ElementName agentWeight
     * @Type \CWM\BroadWorksConnector\Ocip\Models\HuntAgentWeight
     * @Array
     * @var \CWM\BroadWorksConnector\Ocip\Models\HuntAgentWeight[]
     */
    private $agentWeight = array(
        
    );

    /**
     * @ElementName allowCallWaitingForAgents
     * @Type bool
     * @var bool|null
     */
    private $allowCallWaitingForAgents = null;

    /**
     * @ElementName useSystemHuntGroupCLIDSetting
     * @Type bool
     * @var bool|null
     */
    private $useSystemHuntGroupCLIDSetting = null;

    /**
     * @ElementName includeHuntGroupNameInCLID
     * @Type bool
     * @var bool|null
     */
    private $includeHuntGroupNameInCLID = null;

    /**
     * @ElementName enableNotReachableForwarding
     * @Type bool
     * @var bool|null
     */
    private $enableNotReachableForwarding = null;

    /**
     * @ElementName notReachableForwardToPhoneNumber
     * @Type string
     * @var string|null
     */
    private $notReachableForwardToPhoneNumber = null;

    /**
     * @ElementName makeBusyWhenNotReachable
     * @Type bool
     * @var bool|null
     */
    private $makeBusyWhenNotReachable = null;

    /**
     * @ElementName allowMembersToControlGroupBusy
     * @Type bool
     * @var bool|null
     */
    private $allowMembersToControlGroupBusy = null;

    /**
     * @ElementName enableGroupBusy
     * @Type bool
     * @var bool|null
     */
    private $enableGroupBusy = null;

    /**
     * @ElementName applyGroupBusyWhenTerminatingToAgent
     * @Type bool
     * @var bool|null
     */
    private $applyGroupBusyWhenTerminatingToAgent = null;

    /**
     * @ElementName networkClassOfService
     * @Type string
     * @var string|null
     */
    private $networkClassOfService = null;

    /**
     * @ElementName service
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ConsolidatedUserServiceAssignment
     * @Array
     * @var \CWM\BroadWorksConnector\Ocip\Models\ConsolidatedUserServiceAssignment[]
     */
    private $service = array(
        
    );

    /**
     * @ElementName isActive
     * @Type bool
     * @var bool|null
     */
    private $isActive = null;

    /**
     * @ElementName directoryNumberHuntingAgentUserIdList
     * @Type string
     * @Array
     * @var string[]
     */
    private $directoryNumberHuntingAgentUserIdList = array(
        
    );

    /**
     * @ElementName directoryNumberHuntingUseTerminateCallToAgentFirst
     * @Type bool
     * @var bool|null
     */
    private $directoryNumberHuntingUseTerminateCallToAgentFirst = null;

    /**
     * @ElementName directoryNumberHuntingUseOriginalAgentServicesForBusyAndNoAnswerCalls
     * @Type bool
     * @var bool|null
     */
    private $directoryNumberHuntingUseOriginalAgentServicesForBusyAndNoAnswerCalls = null;

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
     * Getter for serviceUserId
     *
     * @return string
     */
    public function getServiceUserId()
    {
        return $this->serviceUserId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceUserId;
    }

    /**
     * Setter for serviceUserId
     *
     * @param string $serviceUserId
     * @return $this
     */
    public function setServiceUserId($serviceUserId)
    {
        $this->serviceUserId = $serviceUserId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceUserId()
    {
        $this->serviceUserId = null;
        return $this;
    }

    /**
     * Getter for addPhoneNumberToGroup
     *
     * @return bool
     */
    public function getAddPhoneNumberToGroup()
    {
        return $this->addPhoneNumberToGroup instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->addPhoneNumberToGroup;
    }

    /**
     * Setter for addPhoneNumberToGroup
     *
     * @param bool $addPhoneNumberToGroup
     * @return $this
     */
    public function setAddPhoneNumberToGroup($addPhoneNumberToGroup)
    {
        $this->addPhoneNumberToGroup = $addPhoneNumberToGroup;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAddPhoneNumberToGroup()
    {
        $this->addPhoneNumberToGroup = null;
        return $this;
    }

    /**
     * Getter for serviceInstanceProfile
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceAddProfile
     */
    public function getServiceInstanceProfile()
    {
        return $this->serviceInstanceProfile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceInstanceProfile;
    }

    /**
     * Setter for serviceInstanceProfile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceAddProfile $serviceInstanceProfile
     * @return $this
     */
    public function setServiceInstanceProfile(\CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceAddProfile $serviceInstanceProfile)
    {
        $this->serviceInstanceProfile = $serviceInstanceProfile;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceInstanceProfile()
    {
        $this->serviceInstanceProfile = null;
        return $this;
    }

    /**
     * Getter for policy
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\HuntPolicy
     */
    public function getPolicy()
    {
        return $this->policy instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->policy;
    }

    /**
     * Setter for policy
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\HuntPolicy $policy
     * @return $this
     */
    public function setPolicy(\CWM\BroadWorksConnector\Ocip\Models\HuntPolicy $policy)
    {
        $this->policy = $policy;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPolicy()
    {
        $this->policy = null;
        return $this;
    }

    /**
     * Getter for huntAfterNoAnswer
     *
     * @return bool
     */
    public function getHuntAfterNoAnswer()
    {
        return $this->huntAfterNoAnswer instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->huntAfterNoAnswer;
    }

    /**
     * Setter for huntAfterNoAnswer
     *
     * @param bool $huntAfterNoAnswer
     * @return $this
     */
    public function setHuntAfterNoAnswer($huntAfterNoAnswer)
    {
        $this->huntAfterNoAnswer = $huntAfterNoAnswer;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetHuntAfterNoAnswer()
    {
        $this->huntAfterNoAnswer = null;
        return $this;
    }

    /**
     * Getter for noAnswerNumberOfRings
     *
     * @return int
     */
    public function getNoAnswerNumberOfRings()
    {
        return $this->noAnswerNumberOfRings instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->noAnswerNumberOfRings;
    }

    /**
     * Setter for noAnswerNumberOfRings
     *
     * @param int $noAnswerNumberOfRings
     * @return $this
     */
    public function setNoAnswerNumberOfRings($noAnswerNumberOfRings)
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
     * Getter for forwardAfterTimeout
     *
     * @return bool
     */
    public function getForwardAfterTimeout()
    {
        return $this->forwardAfterTimeout instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->forwardAfterTimeout;
    }

    /**
     * Setter for forwardAfterTimeout
     *
     * @param bool $forwardAfterTimeout
     * @return $this
     */
    public function setForwardAfterTimeout($forwardAfterTimeout)
    {
        $this->forwardAfterTimeout = $forwardAfterTimeout;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetForwardAfterTimeout()
    {
        $this->forwardAfterTimeout = null;
        return $this;
    }

    /**
     * Getter for forwardTimeoutSeconds
     *
     * @return int
     */
    public function getForwardTimeoutSeconds()
    {
        return $this->forwardTimeoutSeconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->forwardTimeoutSeconds;
    }

    /**
     * Setter for forwardTimeoutSeconds
     *
     * @param int $forwardTimeoutSeconds
     * @return $this
     */
    public function setForwardTimeoutSeconds($forwardTimeoutSeconds)
    {
        $this->forwardTimeoutSeconds = $forwardTimeoutSeconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetForwardTimeoutSeconds()
    {
        $this->forwardTimeoutSeconds = null;
        return $this;
    }

    /**
     * Getter for forwardToPhoneNumber
     *
     * @return string
     */
    public function getForwardToPhoneNumber()
    {
        return $this->forwardToPhoneNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->forwardToPhoneNumber;
    }

    /**
     * Setter for forwardToPhoneNumber
     *
     * @param string $forwardToPhoneNumber
     * @return $this
     */
    public function setForwardToPhoneNumber($forwardToPhoneNumber)
    {
        $this->forwardToPhoneNumber = $forwardToPhoneNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetForwardToPhoneNumber()
    {
        $this->forwardToPhoneNumber = null;
        return $this;
    }

    /**
     * Getter for agentUserId
     *
     * @return string[]
     */
    public function getAgentUserId()
    {
        return $this->agentUserId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->agentUserId;
    }

    /**
     * Setter for agentUserId
     *
     * @param string[] $agentUserId
     * @return $this
     */
    public function setAgentUserId(array $agentUserId)
    {
        $this->agentUserId = $agentUserId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAgentUserId()
    {
        $this->agentUserId = null;
        return $this;
    }

    /**
     * Adder for agentUserId
     *
     * @param string $agentUserId
     * @return $this
     */
    public function addAgentUserId(string $agentUserId)
    {
        $this->agentUserId[] = $agentUserId;
        return $this;
    }

    /**
     * Getter for agentWeight
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\HuntAgentWeight[]
     */
    public function getAgentWeight()
    {
        return $this->agentWeight instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->agentWeight;
    }

    /**
     * Setter for agentWeight
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\HuntAgentWeight[] $agentWeight
     * @return $this
     */
    public function setAgentWeight(array $agentWeight)
    {
        $this->agentWeight = $agentWeight;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAgentWeight()
    {
        $this->agentWeight = null;
        return $this;
    }

    /**
     * Adder for agentWeight
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\HuntAgentWeight $agentWeight
     * @return $this
     */
    public function addAgentWeight($agentWeight)
    {
        $this->agentWeight[] = $agentWeight;
        return $this;
    }

    /**
     * Getter for allowCallWaitingForAgents
     *
     * @return bool
     */
    public function getAllowCallWaitingForAgents()
    {
        return $this->allowCallWaitingForAgents instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->allowCallWaitingForAgents;
    }

    /**
     * Setter for allowCallWaitingForAgents
     *
     * @param bool $allowCallWaitingForAgents
     * @return $this
     */
    public function setAllowCallWaitingForAgents($allowCallWaitingForAgents)
    {
        $this->allowCallWaitingForAgents = $allowCallWaitingForAgents;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAllowCallWaitingForAgents()
    {
        $this->allowCallWaitingForAgents = null;
        return $this;
    }

    /**
     * Getter for useSystemHuntGroupCLIDSetting
     *
     * @return bool
     */
    public function getUseSystemHuntGroupCLIDSetting()
    {
        return $this->useSystemHuntGroupCLIDSetting instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useSystemHuntGroupCLIDSetting;
    }

    /**
     * Setter for useSystemHuntGroupCLIDSetting
     *
     * @param bool $useSystemHuntGroupCLIDSetting
     * @return $this
     */
    public function setUseSystemHuntGroupCLIDSetting($useSystemHuntGroupCLIDSetting)
    {
        $this->useSystemHuntGroupCLIDSetting = $useSystemHuntGroupCLIDSetting;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseSystemHuntGroupCLIDSetting()
    {
        $this->useSystemHuntGroupCLIDSetting = null;
        return $this;
    }

    /**
     * Getter for includeHuntGroupNameInCLID
     *
     * @return bool
     */
    public function getIncludeHuntGroupNameInCLID()
    {
        return $this->includeHuntGroupNameInCLID instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->includeHuntGroupNameInCLID;
    }

    /**
     * Setter for includeHuntGroupNameInCLID
     *
     * @param bool $includeHuntGroupNameInCLID
     * @return $this
     */
    public function setIncludeHuntGroupNameInCLID($includeHuntGroupNameInCLID)
    {
        $this->includeHuntGroupNameInCLID = $includeHuntGroupNameInCLID;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIncludeHuntGroupNameInCLID()
    {
        $this->includeHuntGroupNameInCLID = null;
        return $this;
    }

    /**
     * Getter for enableNotReachableForwarding
     *
     * @return bool
     */
    public function getEnableNotReachableForwarding()
    {
        return $this->enableNotReachableForwarding instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableNotReachableForwarding;
    }

    /**
     * Setter for enableNotReachableForwarding
     *
     * @param bool $enableNotReachableForwarding
     * @return $this
     */
    public function setEnableNotReachableForwarding($enableNotReachableForwarding)
    {
        $this->enableNotReachableForwarding = $enableNotReachableForwarding;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableNotReachableForwarding()
    {
        $this->enableNotReachableForwarding = null;
        return $this;
    }

    /**
     * Getter for notReachableForwardToPhoneNumber
     *
     * @return string
     */
    public function getNotReachableForwardToPhoneNumber()
    {
        return $this->notReachableForwardToPhoneNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->notReachableForwardToPhoneNumber;
    }

    /**
     * Setter for notReachableForwardToPhoneNumber
     *
     * @param string $notReachableForwardToPhoneNumber
     * @return $this
     */
    public function setNotReachableForwardToPhoneNumber($notReachableForwardToPhoneNumber)
    {
        $this->notReachableForwardToPhoneNumber = $notReachableForwardToPhoneNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNotReachableForwardToPhoneNumber()
    {
        $this->notReachableForwardToPhoneNumber = null;
        return $this;
    }

    /**
     * Getter for makeBusyWhenNotReachable
     *
     * @return bool
     */
    public function getMakeBusyWhenNotReachable()
    {
        return $this->makeBusyWhenNotReachable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->makeBusyWhenNotReachable;
    }

    /**
     * Setter for makeBusyWhenNotReachable
     *
     * @param bool $makeBusyWhenNotReachable
     * @return $this
     */
    public function setMakeBusyWhenNotReachable($makeBusyWhenNotReachable)
    {
        $this->makeBusyWhenNotReachable = $makeBusyWhenNotReachable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMakeBusyWhenNotReachable()
    {
        $this->makeBusyWhenNotReachable = null;
        return $this;
    }

    /**
     * Getter for allowMembersToControlGroupBusy
     *
     * @return bool
     */
    public function getAllowMembersToControlGroupBusy()
    {
        return $this->allowMembersToControlGroupBusy instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->allowMembersToControlGroupBusy;
    }

    /**
     * Setter for allowMembersToControlGroupBusy
     *
     * @param bool $allowMembersToControlGroupBusy
     * @return $this
     */
    public function setAllowMembersToControlGroupBusy($allowMembersToControlGroupBusy)
    {
        $this->allowMembersToControlGroupBusy = $allowMembersToControlGroupBusy;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAllowMembersToControlGroupBusy()
    {
        $this->allowMembersToControlGroupBusy = null;
        return $this;
    }

    /**
     * Getter for enableGroupBusy
     *
     * @return bool
     */
    public function getEnableGroupBusy()
    {
        return $this->enableGroupBusy instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableGroupBusy;
    }

    /**
     * Setter for enableGroupBusy
     *
     * @param bool $enableGroupBusy
     * @return $this
     */
    public function setEnableGroupBusy($enableGroupBusy)
    {
        $this->enableGroupBusy = $enableGroupBusy;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableGroupBusy()
    {
        $this->enableGroupBusy = null;
        return $this;
    }

    /**
     * Getter for applyGroupBusyWhenTerminatingToAgent
     *
     * @return bool
     */
    public function getApplyGroupBusyWhenTerminatingToAgent()
    {
        return $this->applyGroupBusyWhenTerminatingToAgent instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->applyGroupBusyWhenTerminatingToAgent;
    }

    /**
     * Setter for applyGroupBusyWhenTerminatingToAgent
     *
     * @param bool $applyGroupBusyWhenTerminatingToAgent
     * @return $this
     */
    public function setApplyGroupBusyWhenTerminatingToAgent($applyGroupBusyWhenTerminatingToAgent)
    {
        $this->applyGroupBusyWhenTerminatingToAgent = $applyGroupBusyWhenTerminatingToAgent;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetApplyGroupBusyWhenTerminatingToAgent()
    {
        $this->applyGroupBusyWhenTerminatingToAgent = null;
        return $this;
    }

    /**
     * Getter for networkClassOfService
     *
     * @return string
     */
    public function getNetworkClassOfService()
    {
        return $this->networkClassOfService instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->networkClassOfService;
    }

    /**
     * Setter for networkClassOfService
     *
     * @param string $networkClassOfService
     * @return $this
     */
    public function setNetworkClassOfService($networkClassOfService)
    {
        $this->networkClassOfService = $networkClassOfService;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNetworkClassOfService()
    {
        $this->networkClassOfService = null;
        return $this;
    }

    /**
     * Getter for service
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ConsolidatedUserServiceAssignment[]
     */
    public function getService()
    {
        return $this->service instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->service;
    }

    /**
     * Setter for service
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ConsolidatedUserServiceAssignment[] $service
     * @return $this
     */
    public function setService(array $service)
    {
        $this->service = $service;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetService()
    {
        $this->service = null;
        return $this;
    }

    /**
     * Adder for service
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ConsolidatedUserServiceAssignment $service
     * @return $this
     */
    public function addService($service)
    {
        $this->service[] = $service;
        return $this;
    }

    /**
     * Getter for isActive
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->isActive instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isActive;
    }

    /**
     * Setter for isActive
     *
     * @param bool $isActive
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsActive()
    {
        $this->isActive = null;
        return $this;
    }

    /**
     * Getter for directoryNumberHuntingAgentUserIdList
     *
     * @return string[]
     */
    public function getDirectoryNumberHuntingAgentUserIdList()
    {
        return $this->directoryNumberHuntingAgentUserIdList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->directoryNumberHuntingAgentUserIdList;
    }

    /**
     * Setter for directoryNumberHuntingAgentUserIdList
     *
     * @param string[] $directoryNumberHuntingAgentUserIdList
     * @return $this
     */
    public function setDirectoryNumberHuntingAgentUserIdList(array $directoryNumberHuntingAgentUserIdList)
    {
        $this->directoryNumberHuntingAgentUserIdList = $directoryNumberHuntingAgentUserIdList;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDirectoryNumberHuntingAgentUserIdList()
    {
        $this->directoryNumberHuntingAgentUserIdList = null;
        return $this;
    }

    /**
     * Adder for directoryNumberHuntingAgentUserIdList
     *
     * @param string $directoryNumberHuntingAgentUserIdList
     * @return $this
     */
    public function addDirectoryNumberHuntingAgentUserIdList(string $directoryNumberHuntingAgentUserIdList)
    {
        $this->directoryNumberHuntingAgentUserIdList[] = $directoryNumberHuntingAgentUserIdList;
        return $this;
    }

    /**
     * Getter for directoryNumberHuntingUseTerminateCallToAgentFirst
     *
     * @return bool
     */
    public function getDirectoryNumberHuntingUseTerminateCallToAgentFirst()
    {
        return $this->directoryNumberHuntingUseTerminateCallToAgentFirst instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->directoryNumberHuntingUseTerminateCallToAgentFirst;
    }

    /**
     * Setter for directoryNumberHuntingUseTerminateCallToAgentFirst
     *
     * @param bool $directoryNumberHuntingUseTerminateCallToAgentFirst
     * @return $this
     */
    public function setDirectoryNumberHuntingUseTerminateCallToAgentFirst($directoryNumberHuntingUseTerminateCallToAgentFirst)
    {
        $this->directoryNumberHuntingUseTerminateCallToAgentFirst = $directoryNumberHuntingUseTerminateCallToAgentFirst;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDirectoryNumberHuntingUseTerminateCallToAgentFirst()
    {
        $this->directoryNumberHuntingUseTerminateCallToAgentFirst = null;
        return $this;
    }

    /**
     * Getter for directoryNumberHuntingUseOriginalAgentServicesForBusyAndNoAnswerCalls
     *
     * @return bool
     */
    public function getDirectoryNumberHuntingUseOriginalAgentServicesForBusyAndNoAnswerCalls()
    {
        return $this->directoryNumberHuntingUseOriginalAgentServicesForBusyAndNoAnswerCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->directoryNumberHuntingUseOriginalAgentServicesForBusyAndNoAnswerCalls;
    }

    /**
     * Setter for directoryNumberHuntingUseOriginalAgentServicesForBusyAndNoAnswerCalls
     *
     * @param bool $directoryNumberHuntingUseOriginalAgentServicesForBusyAndNoAnswerCalls
     * @return $this
     */
    public function setDirectoryNumberHuntingUseOriginalAgentServicesForBusyAndNoAnswerCalls($directoryNumberHuntingUseOriginalAgentServicesForBusyAndNoAnswerCalls)
    {
        $this->directoryNumberHuntingUseOriginalAgentServicesForBusyAndNoAnswerCalls = $directoryNumberHuntingUseOriginalAgentServicesForBusyAndNoAnswerCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDirectoryNumberHuntingUseOriginalAgentServicesForBusyAndNoAnswerCalls()
    {
        $this->directoryNumberHuntingUseOriginalAgentServicesForBusyAndNoAnswerCalls = null;
        return $this;
    }


}

