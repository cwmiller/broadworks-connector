<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupMeetMeConferencingGetInstanceResponse17sp3
 *
 * Response to GroupMeetMeConferencingGetInstanceRequest17sp3.
 *         Contains the service profile information and a table of assigned hosts.
 *         The table has column headings: "User Id", "Last Name", "First Name",
 * "Hiragana Last Name", and "Hiragana First Name".
 *
 * @see GroupMeetMeConferencingGetInstanceRequest17sp3
 */
class GroupMeetMeConferencingGetInstanceResponse17sp3 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName serviceInstanceProfile
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceReadProfile17|null
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
     * @ElementName conferenceHostUserTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $conferenceHostUserTable = null;

    /**
     * Getter for serviceInstanceProfile
     *
     * @ElementName serviceInstanceProfile
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceReadProfile17|null
     */
    public function getServiceInstanceProfile()
    {
        return $this->serviceInstanceProfile;
    }

    /**
     * Setter for serviceInstanceProfile
     *
     * @ElementName serviceInstanceProfile
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServiceInstanceReadProfile17|null $serviceInstanceProfile
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
     * Getter for conferenceHostUserTable
     *
     * @ElementName conferenceHostUserTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getConferenceHostUserTable()
    {
        return $this->conferenceHostUserTable;
    }

    /**
     * Setter for conferenceHostUserTable
     *
     * @ElementName conferenceHostUserTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $conferenceHostUserTable
     * @return $this
     */
    public function setConferenceHostUserTable($conferenceHostUserTable)
    {
        $this->conferenceHostUserTable = $conferenceHostUserTable;
        return $this;
    }


}

