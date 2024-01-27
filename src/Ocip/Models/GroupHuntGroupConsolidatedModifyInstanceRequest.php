<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupHuntGroupConsolidatedModifyInstanceRequest
 *
 * Request to modify a Hunt Group instance.
 *         
 *         When phone numbers are un-assigned from the user, the unused numbers may be un-assigned from the group and service provider. If UnassignPhoneNumbersLevel is set to 'Group', the user's primary phone number, fax number and any alternate numbers, will be un-assigned from the group if the command is executed by a service provider administrator or above.
 *         When set to 'Service Provider', they will be un-assigned from the group and service provider if the command is executed by a provisioning administrator or above.
 *         When omitted, the number(s) will be left assigned to the group.
 *         An ErrorResponse will be returned if any number cannot be unassigned because of insufficient privilege.
 *         
 *         If the phoneNumber has not been assigned to the group and addPhoneNumberToGroup is set to true, it will be added to group if needed if the command is executed by a service provider administrator and above. The command will fail otherwise.
 *         
 *         The response is either SuccessResponse or ErrorResponse.
 *         The following elements are only used in AS data mode:
 *            useSystemHuntGroupCLIDSetting
 *            includeHuntGroupNameInCLID
 *
 * @see ErrorResponse
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"781bbab86d937537938d4fe917029d5c:187","type":"sequence","children":[{"id":"781bbab86d937537938d4fe917029d5c:198","type":"choice"}]}]
 */
class GroupHuntGroupConsolidatedModifyInstanceRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group 781bbab86d937537938d4fe917029d5c:187
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $serviceUserId = null;

    /**
     * @ElementName unassignPhoneNumbers
     * @Type \CWM\BroadWorksConnector\Ocip\Models\UnassignPhoneNumbersLevel
     * @Optional
     * @Group 781bbab86d937537938d4fe917029d5c:187
     * @var \CWM\BroadWorksConnector\Ocip\Models\UnassignPhoneNumbersLevel|null
     */
    protected $unassignPhoneNumbers = null;

    /**
     * @ElementName addPhoneNumberToGroup
     * @Type bool
     * @Optional
     * @Group 781bbab86d937537938d4fe917029d5c:187
     * @var bool|null
     */
    protected $addPhoneNumberToGroup = null;

    /**
     * @ElementName serviceInstanceProfile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceModifyProfile
     * @Optional
     * @Group 781bbab86d937537938d4fe917029d5c:187
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceModifyProfile|null
     */
    protected $serviceInstanceProfile = null;

    /**
     * @ElementName policy
     * @Type \CWM\BroadWorksConnector\Ocip\Models\HuntPolicy
     * @Optional
     * @Group 781bbab86d937537938d4fe917029d5c:187
     * @var \CWM\BroadWorksConnector\Ocip\Models\HuntPolicy|null
     */
    protected $policy = null;

    /**
     * @ElementName huntAfterNoAnswer
     * @Type bool
     * @Optional
     * @Group 781bbab86d937537938d4fe917029d5c:187
     * @var bool|null
     */
    protected $huntAfterNoAnswer = null;

    /**
     * @ElementName noAnswerNumberOfRings
     * @Type int
     * @Optional
     * @Group 781bbab86d937537938d4fe917029d5c:187
     * @MinInclusive 1
     * @MaxInclusive 20
     * @var int|null
     */
    protected $noAnswerNumberOfRings = null;

    /**
     * @ElementName forwardAfterTimeout
     * @Type bool
     * @Optional
     * @Group 781bbab86d937537938d4fe917029d5c:187
     * @var bool|null
     */
    protected $forwardAfterTimeout = null;

    /**
     * @ElementName forwardTimeoutSeconds
     * @Type int
     * @Optional
     * @Group 781bbab86d937537938d4fe917029d5c:187
     * @MinInclusive 0
     * @MaxInclusive 7200
     * @var int|null
     */
    protected $forwardTimeoutSeconds = null;

    /**
     * @ElementName forwardToPhoneNumber
     * @Type string
     * @Nillable
     * @Optional
     * @Group 781bbab86d937537938d4fe917029d5c:187
     * @MinLength 1
     * @MaxLength 30
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $forwardToPhoneNumber = null;

    /**
     * @ElementName agentUserIdList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList
     * @Nillable
     * @Optional
     * @Group 781bbab86d937537938d4fe917029d5c:198
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $agentUserIdList = null;

    /**
     * @ElementName agentWeightList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ReplacementAgentWeightList
     * @Nillable
     * @Optional
     * @Group 781bbab86d937537938d4fe917029d5c:198
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementAgentWeightList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $agentWeightList = null;

    /**
     * @ElementName allowCallWaitingForAgents
     * @Type bool
     * @Optional
     * @Group 781bbab86d937537938d4fe917029d5c:187
     * @var bool|null
     */
    protected $allowCallWaitingForAgents = null;

    /**
     * @ElementName useSystemHuntGroupCLIDSetting
     * @Type bool
     * @Optional
     * @Group 781bbab86d937537938d4fe917029d5c:187
     * @var bool|null
     */
    protected $useSystemHuntGroupCLIDSetting = null;

    /**
     * @ElementName includeHuntGroupNameInCLID
     * @Type bool
     * @Optional
     * @Group 781bbab86d937537938d4fe917029d5c:187
     * @var bool|null
     */
    protected $includeHuntGroupNameInCLID = null;

    /**
     * @ElementName enableNotReachableForwarding
     * @Type bool
     * @Optional
     * @Group 781bbab86d937537938d4fe917029d5c:187
     * @var bool|null
     */
    protected $enableNotReachableForwarding = null;

    /**
     * @ElementName notReachableForwardToPhoneNumber
     * @Type string
     * @Nillable
     * @Optional
     * @Group 781bbab86d937537938d4fe917029d5c:187
     * @MinLength 1
     * @MaxLength 161
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $notReachableForwardToPhoneNumber = null;

    /**
     * @ElementName makeBusyWhenNotReachable
     * @Type bool
     * @Optional
     * @Group 781bbab86d937537938d4fe917029d5c:187
     * @var bool|null
     */
    protected $makeBusyWhenNotReachable = null;

    /**
     * @ElementName allowMembersToControlGroupBusy
     * @Type bool
     * @Optional
     * @Group 781bbab86d937537938d4fe917029d5c:187
     * @var bool|null
     */
    protected $allowMembersToControlGroupBusy = null;

    /**
     * @ElementName enableGroupBusy
     * @Type bool
     * @Optional
     * @Group 781bbab86d937537938d4fe917029d5c:187
     * @var bool|null
     */
    protected $enableGroupBusy = null;

    /**
     * @ElementName applyGroupBusyWhenTerminatingToAgent
     * @Type bool
     * @Optional
     * @Group 781bbab86d937537938d4fe917029d5c:187
     * @var bool|null
     */
    protected $applyGroupBusyWhenTerminatingToAgent = null;

    /**
     * @ElementName networkClassOfService
     * @Type string
     * @Optional
     * @Group 781bbab86d937537938d4fe917029d5c:187
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $networkClassOfService = null;

    /**
     * @ElementName serviceList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ReplacementConsolidatedUserServiceAssignmentList
     * @Nillable
     * @Optional
     * @Group 781bbab86d937537938d4fe917029d5c:187
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementConsolidatedUserServiceAssignmentList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $serviceList = null;

    /**
     * @ElementName isActive
     * @Type bool
     * @Optional
     * @Group 781bbab86d937537938d4fe917029d5c:187
     * @var bool|null
     */
    protected $isActive = null;

    /**
     * @ElementName directoryNumberHuntingAgentUserIdList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList
     * @Nillable
     * @Optional
     * @Group 781bbab86d937537938d4fe917029d5c:187
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $directoryNumberHuntingAgentUserIdList = null;

    /**
     * @ElementName directoryNumberHuntingUseTerminateCallToAgentFirst
     * @Type bool
     * @Optional
     * @Group 781bbab86d937537938d4fe917029d5c:187
     * @var bool|null
     */
    protected $directoryNumberHuntingUseTerminateCallToAgentFirst = null;

    /**
     * @ElementName directoryNumberHuntingUseOriginalAgentServicesForBusyAndNoAnswerCalls
     * @Type bool
     * @Optional
     * @Group 781bbab86d937537938d4fe917029d5c:187
     * @var bool|null
     */
    protected $directoryNumberHuntingUseOriginalAgentServicesForBusyAndNoAnswerCalls = null;

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
     * Getter for unassignPhoneNumbers
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\UnassignPhoneNumbersLevel
     */
    public function getUnassignPhoneNumbers()
    {
        return $this->unassignPhoneNumbers instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->unassignPhoneNumbers;
    }

    /**
     * Setter for unassignPhoneNumbers
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\UnassignPhoneNumbersLevel $unassignPhoneNumbers
     * @return $this
     */
    public function setUnassignPhoneNumbers(\CWM\BroadWorksConnector\Ocip\Models\UnassignPhoneNumbersLevel $unassignPhoneNumbers)
    {
        $this->unassignPhoneNumbers = $unassignPhoneNumbers;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUnassignPhoneNumbers()
    {
        $this->unassignPhoneNumbers = null;
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceModifyProfile
     */
    public function getServiceInstanceProfile()
    {
        return $this->serviceInstanceProfile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceInstanceProfile;
    }

    /**
     * Setter for serviceInstanceProfile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceModifyProfile $serviceInstanceProfile
     * @return $this
     */
    public function setServiceInstanceProfile(\CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceModifyProfile $serviceInstanceProfile)
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
     * @return string|null
     */
    public function getForwardToPhoneNumber()
    {
        return $this->forwardToPhoneNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->forwardToPhoneNumber;
    }

    /**
     * Setter for forwardToPhoneNumber
     *
     * @param string|null $forwardToPhoneNumber
     * @return $this
     */
    public function setForwardToPhoneNumber($forwardToPhoneNumber = null)
    {
        if ($forwardToPhoneNumber === null) {
            $this->forwardToPhoneNumber = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->forwardToPhoneNumber = $forwardToPhoneNumber;
        }
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
     * Getter for agentUserIdList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null
     */
    public function getAgentUserIdList()
    {
        return $this->agentUserIdList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->agentUserIdList;
    }

    /**
     * Setter for agentUserIdList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null $agentUserIdList
     * @return $this
     */
    public function setAgentUserIdList(\CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList $agentUserIdList = null)
    {
        if ($agentUserIdList === null) {
            $this->agentUserIdList = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->agentUserIdList = $agentUserIdList;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAgentUserIdList()
    {
        $this->agentUserIdList = null;
        return $this;
    }

    /**
     * Getter for agentWeightList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementAgentWeightList|null
     */
    public function getAgentWeightList()
    {
        return $this->agentWeightList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->agentWeightList;
    }

    /**
     * Setter for agentWeightList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementAgentWeightList|null $agentWeightList
     * @return $this
     */
    public function setAgentWeightList(\CWM\BroadWorksConnector\Ocip\Models\ReplacementAgentWeightList $agentWeightList = null)
    {
        if ($agentWeightList === null) {
            $this->agentWeightList = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->agentWeightList = $agentWeightList;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAgentWeightList()
    {
        $this->agentWeightList = null;
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
     * @return string|null
     */
    public function getNotReachableForwardToPhoneNumber()
    {
        return $this->notReachableForwardToPhoneNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->notReachableForwardToPhoneNumber;
    }

    /**
     * Setter for notReachableForwardToPhoneNumber
     *
     * @param string|null $notReachableForwardToPhoneNumber
     * @return $this
     */
    public function setNotReachableForwardToPhoneNumber($notReachableForwardToPhoneNumber = null)
    {
        if ($notReachableForwardToPhoneNumber === null) {
            $this->notReachableForwardToPhoneNumber = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->notReachableForwardToPhoneNumber = $notReachableForwardToPhoneNumber;
        }
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
     * Getter for serviceList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementConsolidatedUserServiceAssignmentList|null
     */
    public function getServiceList()
    {
        return $this->serviceList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceList;
    }

    /**
     * Setter for serviceList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementConsolidatedUserServiceAssignmentList|null $serviceList
     * @return $this
     */
    public function setServiceList(\CWM\BroadWorksConnector\Ocip\Models\ReplacementConsolidatedUserServiceAssignmentList $serviceList = null)
    {
        if ($serviceList === null) {
            $this->serviceList = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->serviceList = $serviceList;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceList()
    {
        $this->serviceList = null;
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null
     */
    public function getDirectoryNumberHuntingAgentUserIdList()
    {
        return $this->directoryNumberHuntingAgentUserIdList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->directoryNumberHuntingAgentUserIdList;
    }

    /**
     * Setter for directoryNumberHuntingAgentUserIdList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null $directoryNumberHuntingAgentUserIdList
     * @return $this
     */
    public function setDirectoryNumberHuntingAgentUserIdList(\CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList $directoryNumberHuntingAgentUserIdList = null)
    {
        if ($directoryNumberHuntingAgentUserIdList === null) {
            $this->directoryNumberHuntingAgentUserIdList = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->directoryNumberHuntingAgentUserIdList = $directoryNumberHuntingAgentUserIdList;
        }
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

