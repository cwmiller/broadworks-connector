<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupMeetMeConferencingGetResponse
 *
 * Response to GroupMeetMeConferencingGetRequest.
 *
 * @see GroupMeetMeConferencingGetRequest
 * @Groups [{"id":"e51a0a16349851c3fad768a24a35838d:253","type":"sequence"}]
 */
class GroupMeetMeConferencingGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName availablePorts
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferencePorts
     * @Group e51a0a16349851c3fad768a24a35838d:253
     * @var \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferencePorts|null
     */
    private $availablePorts = null;

    /**
     * @ElementName allocatedPorts
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferencePorts
     * @Group e51a0a16349851c3fad768a24a35838d:253
     * @var \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferencePorts|null
     */
    private $allocatedPorts = null;

    /**
     * Getter for availablePorts
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferencePorts
     */
    public function getAvailablePorts()
    {
        return $this->availablePorts instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->availablePorts;
    }

    /**
     * Setter for availablePorts
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferencePorts $availablePorts
     * @return $this
     */
    public function setAvailablePorts(\CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferencePorts $availablePorts)
    {
        $this->availablePorts = $availablePorts;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAvailablePorts()
    {
        $this->availablePorts = null;
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


}

