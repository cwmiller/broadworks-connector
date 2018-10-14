<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupMeetMeConferencingModifyInstanceRequest
 *
 * Request to modify a Meet-Me Conferencing bridge.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class GroupMeetMeConferencingModifyInstanceRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @var string|null
     */
    private $serviceUserId = null;

    /**
     * @ElementName serviceInstanceProfile
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceModifyProfile|null
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
     * @ElementName securityPinLength
     * @var int|null
     */
    private $securityPinLength = null;

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
     * @ElementName conferenceHostUserIdList
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null
     */
    private $conferenceHostUserIdList = null;

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
     * @ElementName maxScheduledConferenceDurationMinutes
     * @var \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceDuration|null
     */
    private $maxScheduledConferenceDurationMinutes = null;

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
    public function setServiceInstanceProfile(\CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceModifyProfile $serviceInstanceProfile)
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
    public function setAllocatedPorts(\CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferencePorts $allocatedPorts)
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
     * Getter for securityPinLength
     *
     * @ElementName securityPinLength
     * @return int|null
     */
    public function getSecurityPinLength()
    {
        return $this->securityPinLength;
    }

    /**
     * Setter for securityPinLength
     *
     * @ElementName securityPinLength
     * @param int|null $securityPinLength
     * @return $this
     */
    public function setSecurityPinLength($securityPinLength)
    {
        $this->securityPinLength = $securityPinLength;
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
     * Getter for conferenceHostUserIdList
     *
     * @ElementName conferenceHostUserIdList
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null
     */
    public function getConferenceHostUserIdList()
    {
        return $this->conferenceHostUserIdList;
    }

    /**
     * Setter for conferenceHostUserIdList
     *
     * @ElementName conferenceHostUserIdList
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null $conferenceHostUserIdList
     * @return $this
     */
    public function setConferenceHostUserIdList(\CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList $conferenceHostUserIdList)
    {
        $this->conferenceHostUserIdList = $conferenceHostUserIdList;
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
    public function setMaxConferenceDurationMinutes(\CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceDuration $maxConferenceDurationMinutes)
    {
        $this->maxConferenceDurationMinutes = $maxConferenceDurationMinutes;
        return $this;
    }

    /**
     * Getter for maxScheduledConferenceDurationMinutes
     *
     * @ElementName maxScheduledConferenceDurationMinutes
     * @return \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceDuration|null
     */
    public function getMaxScheduledConferenceDurationMinutes()
    {
        return $this->maxScheduledConferenceDurationMinutes;
    }

    /**
     * Setter for maxScheduledConferenceDurationMinutes
     *
     * @ElementName maxScheduledConferenceDurationMinutes
     * @param \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceDuration|null $maxScheduledConferenceDurationMinutes
     * @return $this
     */
    public function setMaxScheduledConferenceDurationMinutes(\CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceDuration $maxScheduledConferenceDurationMinutes)
    {
        $this->maxScheduledConferenceDurationMinutes = $maxScheduledConferenceDurationMinutes;
        return $this;
    }


}

