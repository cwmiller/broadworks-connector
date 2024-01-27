<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderMeetMeConferencingGetResponse
 *
 * Response to ServiceProviderMeetMeConferencingGetRequest.
 *
 * @see ServiceProviderMeetMeConferencingGetRequest
 * @Groups [{"id":"adf25df72505d1c476ebb480b6cce18d:414","type":"sequence"}]
 */
class ServiceProviderMeetMeConferencingGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName allocatedPorts
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferencePorts
     * @Group adf25df72505d1c476ebb480b6cce18d:414
     * @var \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferencePorts|null
     */
    protected $allocatedPorts = null;

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

