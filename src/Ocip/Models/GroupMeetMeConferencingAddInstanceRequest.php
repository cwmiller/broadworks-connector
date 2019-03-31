<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupMeetMeConferencingAddInstanceRequest
 *
 * Add a Meet-Me Conferencing bridge to a group.
 *                 The domain is required in the serviceUserId.
 *                 The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:19701","type":"sequence"}]
 */
class GroupMeetMeConferencingAddInstanceRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:19701
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:19701
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $groupId = null;

    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:19701
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    private $serviceUserId = null;

    /**
     * @ElementName serviceInstanceProfile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceAddProfile
     * @Group ab0042aa512abc10edb3c55e4b416b0b:19701
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceAddProfile|null
     */
    private $serviceInstanceProfile = null;

    /**
     * @ElementName allocatedPorts
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferencePorts
     * @Group ab0042aa512abc10edb3c55e4b416b0b:19701
     * @var \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferencePorts|null
     */
    private $allocatedPorts = null;

    /**
     * @ElementName networkClassOfService
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:19701
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    private $networkClassOfService = null;

    /**
     * @ElementName allowIndividualOutDial
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:19701
     * @var bool|null
     */
    private $allowIndividualOutDial = null;

    /**
     * @ElementName operatorNumber
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:19701
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    private $operatorNumber = null;

    /**
     * @ElementName conferenceHostUserId
     * @Type string
     * @Array
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:19701
     * @MinLength 1
     * @MaxLength 161
     * @var string[]
     */
    private $conferenceHostUserId = array(
        
    );

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


}

