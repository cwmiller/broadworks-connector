<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupMeetMeConferencingGetInstanceResponse17sp3
 *
 * Response to GroupMeetMeConferencingGetInstanceRequest17sp3.
 *                 Contains the service profile information and a table of assigned hosts.
 *                 The table has column headings: "User Id", "Last Name", "First Name", "Hiragana Last Name", and "Hiragana
 *                 First Name".
 *
 * @see GroupMeetMeConferencingGetInstanceRequest17sp3
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:19798","type":"sequence"}]
 */
class GroupMeetMeConferencingGetInstanceResponse17sp3 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName serviceInstanceProfile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceReadProfile17
     * @Group ab0042aa512abc10edb3c55e4b416b0b:19798
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceReadProfile17|null
     */
    private $serviceInstanceProfile = null;

    /**
     * @ElementName allocatedPorts
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferencePorts
     * @Group ab0042aa512abc10edb3c55e4b416b0b:19798
     * @var \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferencePorts|null
     */
    private $allocatedPorts = null;

    /**
     * @ElementName networkClassOfService
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:19798
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    private $networkClassOfService = null;

    /**
     * @ElementName allowIndividualOutDial
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:19798
     * @var bool|null
     */
    private $allowIndividualOutDial = null;

    /**
     * @ElementName operatorNumber
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:19798
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    private $operatorNumber = null;

    /**
     * @ElementName conferenceHostUserTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group ab0042aa512abc10edb3c55e4b416b0b:19798
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $conferenceHostUserTable = null;

    /**
     * Getter for serviceInstanceProfile
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceReadProfile17
     */
    public function getServiceInstanceProfile()
    {
        return $this->serviceInstanceProfile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceInstanceProfile;
    }

    /**
     * Setter for serviceInstanceProfile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceReadProfile17 $serviceInstanceProfile
     * @return $this
     */
    public function setServiceInstanceProfile(\CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceReadProfile17 $serviceInstanceProfile)
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
     * Getter for conferenceHostUserTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getConferenceHostUserTable()
    {
        return $this->conferenceHostUserTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->conferenceHostUserTable;
    }

    /**
     * Setter for conferenceHostUserTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $conferenceHostUserTable
     * @return $this
     */
    public function setConferenceHostUserTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $conferenceHostUserTable)
    {
        $this->conferenceHostUserTable = $conferenceHostUserTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetConferenceHostUserTable()
    {
        $this->conferenceHostUserTable = null;
        return $this;
    }


}

