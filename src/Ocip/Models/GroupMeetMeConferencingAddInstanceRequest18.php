<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupMeetMeConferencingAddInstanceRequest18
 *
 * Add a Meet-Me Conferencing bridge to a group.
 *                 The domain is required in the serviceUserId.
 *                 The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:25243","type":"sequence"}]
 */
class GroupMeetMeConferencingAddInstanceRequest18 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:25243
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:25243
     * @var string|null
     */
    private $groupId = null;

    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:25243
     * @var string|null
     */
    private $serviceUserId = null;

    /**
     * @ElementName serviceInstanceProfile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceAddProfile
     * @Group ab0042aa512abc10edb3c55e4b416b0b:25243
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceAddProfile|null
     */
    private $serviceInstanceProfile = null;

    /**
     * @ElementName allocatedPorts
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferencePorts
     * @Group ab0042aa512abc10edb3c55e4b416b0b:25243
     * @var \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferencePorts|null
     */
    private $allocatedPorts = null;

    /**
     * @ElementName networkClassOfService
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:25243
     * @var string|null
     */
    private $networkClassOfService = null;

    /**
     * @ElementName allowIndividualOutDial
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:25243
     * @var bool|null
     */
    private $allowIndividualOutDial = null;

    /**
     * @ElementName operatorNumber
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:25243
     * @var string|null
     */
    private $operatorNumber = null;

    /**
     * @ElementName conferenceHostUserId
     * @Type string
     * @Array
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:25243
     * @var string[]
     */
    private $conferenceHostUserId = array(
        
    );

    /**
     * @ElementName playWarningPrompt
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:25243
     * @var bool|null
     */
    private $playWarningPrompt = null;

    /**
     * @ElementName conferenceEndWarningPromptMinutes
     * @Type int
     * @Group ab0042aa512abc10edb3c55e4b416b0b:25243
     * @var int|null
     */
    private $conferenceEndWarningPromptMinutes = null;

    /**
     * @ElementName enableMaxConferenceDuration
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:25243
     * @var bool|null
     */
    private $enableMaxConferenceDuration = null;

    /**
     * @ElementName maxConferenceDurationMinutes
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceDuration
     * @Group ab0042aa512abc10edb3c55e4b416b0b:25243
     * @var \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceDuration|null
     */
    private $maxConferenceDurationMinutes = null;

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
     * Getter for allocatedPorts
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferencePorts
     */
    public function getAllocatedPorts()
    {
        return $this->allocatedPorts instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->allocatedPorts;
    }

    /**
     * Setter for allocatedPorts
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferencePorts $allocatedPorts
     * @return $this
     */
    public function setAllocatedPorts(\CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferencePorts $allocatedPorts)
    {
        $this->allocatedPorts = $allocatedPorts;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAllocatedPorts()
    {
        $this->allocatedPorts = null;
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
     * Getter for allowIndividualOutDial
     *
     * @return bool
     */
    public function getAllowIndividualOutDial()
    {
        return $this->allowIndividualOutDial instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->allowIndividualOutDial;
    }

    /**
     * Setter for allowIndividualOutDial
     *
     * @param bool $allowIndividualOutDial
     * @return $this
     */
    public function setAllowIndividualOutDial($allowIndividualOutDial)
    {
        $this->allowIndividualOutDial = $allowIndividualOutDial;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAllowIndividualOutDial()
    {
        $this->allowIndividualOutDial = null;
        return $this;
    }

    /**
     * Getter for operatorNumber
     *
     * @return string
     */
    public function getOperatorNumber()
    {
        return $this->operatorNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->operatorNumber;
    }

    /**
     * Setter for operatorNumber
     *
     * @param string $operatorNumber
     * @return $this
     */
    public function setOperatorNumber($operatorNumber)
    {
        $this->operatorNumber = $operatorNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetOperatorNumber()
    {
        $this->operatorNumber = null;
        return $this;
    }

    /**
     * Getter for conferenceHostUserId
     *
     * @return string[]
     */
    public function getConferenceHostUserId()
    {
        return $this->conferenceHostUserId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->conferenceHostUserId;
    }

    /**
     * Setter for conferenceHostUserId
     *
     * @param string[] $conferenceHostUserId
     * @return $this
     */
    public function setConferenceHostUserId(array $conferenceHostUserId)
    {
        $this->conferenceHostUserId = $conferenceHostUserId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetConferenceHostUserId()
    {
        $this->conferenceHostUserId = null;
        return $this;
    }

    /**
     * Adder for conferenceHostUserId
     *
     * @param string $conferenceHostUserId
     * @return $this
     */
    public function addConferenceHostUserId(string $conferenceHostUserId)
    {
        $this->conferenceHostUserId[] = $conferenceHostUserId;
        return $this;
    }

    /**
     * Getter for playWarningPrompt
     *
     * @return bool
     */
    public function getPlayWarningPrompt()
    {
        return $this->playWarningPrompt instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->playWarningPrompt;
    }

    /**
     * Setter for playWarningPrompt
     *
     * @param bool $playWarningPrompt
     * @return $this
     */
    public function setPlayWarningPrompt($playWarningPrompt)
    {
        $this->playWarningPrompt = $playWarningPrompt;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPlayWarningPrompt()
    {
        $this->playWarningPrompt = null;
        return $this;
    }

    /**
     * Getter for conferenceEndWarningPromptMinutes
     *
     * @return int
     */
    public function getConferenceEndWarningPromptMinutes()
    {
        return $this->conferenceEndWarningPromptMinutes instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->conferenceEndWarningPromptMinutes;
    }

    /**
     * Setter for conferenceEndWarningPromptMinutes
     *
     * @param int $conferenceEndWarningPromptMinutes
     * @return $this
     */
    public function setConferenceEndWarningPromptMinutes($conferenceEndWarningPromptMinutes)
    {
        $this->conferenceEndWarningPromptMinutes = $conferenceEndWarningPromptMinutes;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetConferenceEndWarningPromptMinutes()
    {
        $this->conferenceEndWarningPromptMinutes = null;
        return $this;
    }

    /**
     * Getter for enableMaxConferenceDuration
     *
     * @return bool
     */
    public function getEnableMaxConferenceDuration()
    {
        return $this->enableMaxConferenceDuration instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableMaxConferenceDuration;
    }

    /**
     * Setter for enableMaxConferenceDuration
     *
     * @param bool $enableMaxConferenceDuration
     * @return $this
     */
    public function setEnableMaxConferenceDuration($enableMaxConferenceDuration)
    {
        $this->enableMaxConferenceDuration = $enableMaxConferenceDuration;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableMaxConferenceDuration()
    {
        $this->enableMaxConferenceDuration = null;
        return $this;
    }

    /**
     * Getter for maxConferenceDurationMinutes
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceDuration
     */
    public function getMaxConferenceDurationMinutes()
    {
        return $this->maxConferenceDurationMinutes instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxConferenceDurationMinutes;
    }

    /**
     * Setter for maxConferenceDurationMinutes
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceDuration $maxConferenceDurationMinutes
     * @return $this
     */
    public function setMaxConferenceDurationMinutes(\CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceDuration $maxConferenceDurationMinutes)
    {
        $this->maxConferenceDurationMinutes = $maxConferenceDurationMinutes;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaxConferenceDurationMinutes()
    {
        $this->maxConferenceDurationMinutes = null;
        return $this;
    }


}

