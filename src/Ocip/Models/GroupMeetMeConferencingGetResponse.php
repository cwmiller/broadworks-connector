<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupMeetMeConferencingGetResponse
 *
 * Response to GroupMeetMeConferencingGetRequest.
 *
 * @see GroupMeetMeConferencingGetRequest
 */
class GroupMeetMeConferencingGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName availablePorts
     * @var \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferencePorts|null
     */
    private $availablePorts = null;

    /**
     * @ElementName allocatedPorts
     * @var \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferencePorts|null
     */
    private $allocatedPorts = null;

    /**
     * Getter for availablePorts
     *
     * @ElementName availablePorts
     * @return \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferencePorts|null
     */
    public function getAvailablePorts()
    {
        return $this->availablePorts;
    }

    /**
     * Setter for availablePorts
     *
     * @ElementName availablePorts
     * @param \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferencePorts|null $availablePorts
     * @return $this
     */
    public function setAvailablePorts(\CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferencePorts $availablePorts)
    {
        $this->availablePorts = $availablePorts;
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


}

