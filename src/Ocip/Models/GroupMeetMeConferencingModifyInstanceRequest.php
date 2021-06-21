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
 * @Groups [{"id":"0fd24121d16995c994d40bc408dbcfa5:289","type":"sequence"}]
 */
class GroupMeetMeConferencingModifyInstanceRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group 0fd24121d16995c994d40bc408dbcfa5:289
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    private $serviceUserId = null;

    /**
     * @ElementName serviceInstanceProfile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceModifyProfile
     * @Optional
     * @Group 0fd24121d16995c994d40bc408dbcfa5:289
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceModifyProfile|null
     */
    private $serviceInstanceProfile = null;

    /**
     * @ElementName allocatedPorts
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferencePorts
     * @Optional
     * @Group 0fd24121d16995c994d40bc408dbcfa5:289
     * @var \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferencePorts|null
     */
    private $allocatedPorts = null;

    /**
     * @ElementName networkClassOfService
     * @Type string
     * @Optional
     * @Group 0fd24121d16995c994d40bc408dbcfa5:289
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    private $networkClassOfService = null;

    /**
     * @ElementName securityPinLength
     * @Type int
     * @Optional
     * @Group 0fd24121d16995c994d40bc408dbcfa5:289
     * @MinInclusive 4
     * @MaxInclusive 12
     * @var int|null
     */
    private $securityPinLength = null;

    /**
     * @ElementName allowIndividualOutDial
     * @Type bool
     * @Optional
     * @Group 0fd24121d16995c994d40bc408dbcfa5:289
     * @var bool|null
     */
    private $allowIndividualOutDial = null;

    /**
     * @ElementName operatorNumber
     * @Type string
     * @Nillable
     * @Optional
     * @Group 0fd24121d16995c994d40bc408dbcfa5:289
     * @MinLength 1
     * @MaxLength 161
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $operatorNumber = null;

    /**
     * @ElementName conferenceHostUserIdList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList
     * @Nillable
     * @Optional
     * @Group 0fd24121d16995c994d40bc408dbcfa5:289
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $conferenceHostUserIdList = null;

    /**
     * @ElementName playWarningPrompt
     * @Type bool
     * @Optional
     * @Group 0fd24121d16995c994d40bc408dbcfa5:289
     * @var bool|null
     */
    private $playWarningPrompt = null;

    /**
     * @ElementName conferenceEndWarningPromptMinutes
     * @Type int
     * @Optional
     * @Group 0fd24121d16995c994d40bc408dbcfa5:289
     * @MinInclusive 1
     * @MaxInclusive 15
     * @var int|null
     */
    private $conferenceEndWarningPromptMinutes = null;

    /**
     * @ElementName enableMaxConferenceDuration
     * @Type bool
     * @Optional
     * @Group 0fd24121d16995c994d40bc408dbcfa5:289
     * @var bool|null
     */
    private $enableMaxConferenceDuration = null;

    /**
     * @ElementName maxConferenceDurationMinutes
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceDuration
     * @Optional
     * @Group 0fd24121d16995c994d40bc408dbcfa5:289
     * @var \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceDuration|null
     */
    private $maxConferenceDurationMinutes = null;

    /**
     * @ElementName maxScheduledConferenceDurationMinutes
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceDuration
     * @Optional
     * @Group 0fd24121d16995c994d40bc408dbcfa5:289
     * @var \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceDuration|null
     */
    private $maxScheduledConferenceDurationMinutes = null;

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
     * Getter for securityPinLength
     *
     * @return int
     */
    public function getSecurityPinLength()
    {
        return $this->securityPinLength instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->securityPinLength;
    }

    /**
     * Setter for securityPinLength
     *
     * @param int $securityPinLength
     * @return $this
     */
    public function setSecurityPinLength($securityPinLength)
    {
        $this->securityPinLength = $securityPinLength;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSecurityPinLength()
    {
        $this->securityPinLength = null;
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
     * @return string|null
     */
    public function getOperatorNumber()
    {
        return $this->operatorNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->operatorNumber;
    }

    /**
     * Setter for operatorNumber
     *
     * @param string|null $operatorNumber
     * @return $this
     */
    public function setOperatorNumber($operatorNumber = null)
    {
        if ($operatorNumber === null) {
            $this->operatorNumber = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->operatorNumber = $operatorNumber;
        }
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
     * Getter for conferenceHostUserIdList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null
     */
    public function getConferenceHostUserIdList()
    {
        return $this->conferenceHostUserIdList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->conferenceHostUserIdList;
    }

    /**
     * Setter for conferenceHostUserIdList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null $conferenceHostUserIdList
     * @return $this
     */
    public function setConferenceHostUserIdList(\CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList $conferenceHostUserIdList = null)
    {
        if ($conferenceHostUserIdList === null) {
            $this->conferenceHostUserIdList = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->conferenceHostUserIdList = $conferenceHostUserIdList;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetConferenceHostUserIdList()
    {
        $this->conferenceHostUserIdList = null;
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

    /**
     * Getter for maxScheduledConferenceDurationMinutes
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceDuration
     */
    public function getMaxScheduledConferenceDurationMinutes()
    {
        return $this->maxScheduledConferenceDurationMinutes instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxScheduledConferenceDurationMinutes;
    }

    /**
     * Setter for maxScheduledConferenceDurationMinutes
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceDuration $maxScheduledConferenceDurationMinutes
     * @return $this
     */
    public function setMaxScheduledConferenceDurationMinutes(\CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferenceDuration $maxScheduledConferenceDurationMinutes)
    {
        $this->maxScheduledConferenceDurationMinutes = $maxScheduledConferenceDurationMinutes;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaxScheduledConferenceDurationMinutes()
    {
        $this->maxScheduledConferenceDurationMinutes = null;
        return $this;
    }


}

