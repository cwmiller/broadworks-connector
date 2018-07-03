<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupMeetMeConferencingAddInstanceRequest18
 *
 * Add a Meet-Me Conferencing bridge to a group.
 *         The domain is required in the serviceUserId.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class GroupMeetMeConferencingAddInstanceRequest18 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @var string|null
     */
    private $groupId = null;

    /**
     * @ElementName serviceUserId
     * @var string|null
     */
    private $serviceUserId = null;

    /**
     * @ElementName serviceInstanceProfile
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceAddProfile|null
     */
    private $serviceInstanceProfile = null;

    /**
     * @ElementName allocatedPorts
     * @var \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferencePorts|null
     */
    private $allocatedPorts = null;

    /**
     * @ElementName networkClassOfService
     * @var string|null
     */
    private $networkClassOfService = null;

    /**
     * @ElementName allowIndividualOutDial
     * @var bool|null
     */
    private $allowIndividualOutDial = null;

    /**
     * @ElementName operatorNumber
     * @var string|null
     */
    private $operatorNumber = null;

    /**
     * @ElementName conferenceHostUserId
     * @var string[]
     */
    private $conferenceHostUserId = array(
        
    );

    /**
     * @ElementName playWarningPrompt
     * @var bool|null
     */
    private $playWarningPrompt = null;

    /**
     * @ElementName conferenceEndWarningPromptMinutes
     * @var int|null
     */
    private $conferenceEndWarningPromptMinutes = null;

    /**
     * @ElementName enableMaxConferenceDuration
     * @var bool|null
     */
    private $enableMaxConferenceDuration = null;

    /**
     * @ElementName maxConferenceDurationMinutes
     * @var \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceDuration|null
     */
    private $maxConferenceDurationMinutes = null;

    /**
     * Getter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @return string|null
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @param string|null $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * Getter for groupId
     *
     * @ElementName groupId
     * @return string|null
     */
    public function getGroupId()
    {
        return $this->groupId;
    }

    /**
     * Setter for groupId
     *
     * @ElementName groupId
     * @param string|null $groupId
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
        return $this;
    }

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
     * Getter for serviceInstanceProfile
     *
     * @ElementName serviceInstanceProfile
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceAddProfile|null
     */
    public function getServiceInstanceProfile()
    {
        return $this->serviceInstanceProfile;
    }

    /**
     * Setter for serviceInstanceProfile
     *
     * @ElementName serviceInstanceProfile
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceAddProfile|null $serviceInstanceProfile
     * @return $this
     */
    public function setServiceInstanceProfile($serviceInstanceProfile)
    {
        $this->serviceInstanceProfile = $serviceInstanceProfile;
        return $this;
    }

    /**
     * Getter for allocatedPorts
     *
     * @ElementName allocatedPorts
     * @return \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferencePorts|null
     */
    public function getAllocatedPorts()
    {
        return $this->allocatedPorts;
    }

    /**
     * Setter for allocatedPorts
     *
     * @ElementName allocatedPorts
     * @param \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferencePorts|null $allocatedPorts
     * @return $this
     */
    public function setAllocatedPorts($allocatedPorts)
    {
        $this->allocatedPorts = $allocatedPorts;
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
     * Getter for allowIndividualOutDial
     *
     * @ElementName allowIndividualOutDial
     * @return bool|null
     */
    public function getAllowIndividualOutDial()
    {
        return $this->allowIndividualOutDial;
    }

    /**
     * Setter for allowIndividualOutDial
     *
     * @ElementName allowIndividualOutDial
     * @param bool|null $allowIndividualOutDial
     * @return $this
     */
    public function setAllowIndividualOutDial($allowIndividualOutDial)
    {
        $this->allowIndividualOutDial = $allowIndividualOutDial;
        return $this;
    }

    /**
     * Getter for operatorNumber
     *
     * @ElementName operatorNumber
     * @return string|null
     */
    public function getOperatorNumber()
    {
        return $this->operatorNumber;
    }

    /**
     * Setter for operatorNumber
     *
     * @ElementName operatorNumber
     * @param string|null $operatorNumber
     * @return $this
     */
    public function setOperatorNumber($operatorNumber)
    {
        $this->operatorNumber = $operatorNumber;
        return $this;
    }

    /**
     * Getter for conferenceHostUserId
     *
     * @ElementName conferenceHostUserId
     * @return string[]
     */
    public function getConferenceHostUserId()
    {
        return $this->conferenceHostUserId;
    }

    /**
     * Setter for conferenceHostUserId
     *
     * @ElementName conferenceHostUserId
     * @param string[] $conferenceHostUserId
     * @return $this
     */
    public function setConferenceHostUserId($conferenceHostUserId)
    {
        $this->conferenceHostUserId = $conferenceHostUserId;
        return $this;
    }

    /**
     * Adder for conferenceHostUserId
     *
     * @ElementName conferenceHostUserId
     * @param string $conferenceHostUserId
     * @return $this
     */
    public function addConferenceHostUserId($conferenceHostUserId)
    {
        $this->conferenceHostUserId []= $conferenceHostUserId;
        return $this;
    }

    /**
     * Getter for playWarningPrompt
     *
     * @ElementName playWarningPrompt
     * @return bool|null
     */
    public function getPlayWarningPrompt()
    {
        return $this->playWarningPrompt;
    }

    /**
     * Setter for playWarningPrompt
     *
     * @ElementName playWarningPrompt
     * @param bool|null $playWarningPrompt
     * @return $this
     */
    public function setPlayWarningPrompt($playWarningPrompt)
    {
        $this->playWarningPrompt = $playWarningPrompt;
        return $this;
    }

    /**
     * Getter for conferenceEndWarningPromptMinutes
     *
     * @ElementName conferenceEndWarningPromptMinutes
     * @return int|null
     */
    public function getConferenceEndWarningPromptMinutes()
    {
        return $this->conferenceEndWarningPromptMinutes;
    }

    /**
     * Setter for conferenceEndWarningPromptMinutes
     *
     * @ElementName conferenceEndWarningPromptMinutes
     * @param int|null $conferenceEndWarningPromptMinutes
     * @return $this
     */
    public function setConferenceEndWarningPromptMinutes($conferenceEndWarningPromptMinutes)
    {
        $this->conferenceEndWarningPromptMinutes = $conferenceEndWarningPromptMinutes;
        return $this;
    }

    /**
     * Getter for enableMaxConferenceDuration
     *
     * @ElementName enableMaxConferenceDuration
     * @return bool|null
     */
    public function getEnableMaxConferenceDuration()
    {
        return $this->enableMaxConferenceDuration;
    }

    /**
     * Setter for enableMaxConferenceDuration
     *
     * @ElementName enableMaxConferenceDuration
     * @param bool|null $enableMaxConferenceDuration
     * @return $this
     */
    public function setEnableMaxConferenceDuration($enableMaxConferenceDuration)
    {
        $this->enableMaxConferenceDuration = $enableMaxConferenceDuration;
        return $this;
    }

    /**
     * Getter for maxConferenceDurationMinutes
     *
     * @ElementName maxConferenceDurationMinutes
     * @return \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceDuration|null
     */
    public function getMaxConferenceDurationMinutes()
    {
        return $this->maxConferenceDurationMinutes;
    }

    /**
     * Setter for maxConferenceDurationMinutes
     *
     * @ElementName maxConferenceDurationMinutes
     * @param \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceDuration|null $maxConferenceDurationMinutes
     * @return $this
     */
    public function setMaxConferenceDurationMinutes($maxConferenceDurationMinutes)
    {
        $this->maxConferenceDurationMinutes = $maxConferenceDurationMinutes;
        return $this;
    }


}

