<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderMeetMeConferencingGetResponse
 *
 * Response to ServiceProviderMeetMeConferencingGetRequest.
 */
class ServiceProviderMeetMeConferencingGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName allocatedPorts
     * @var \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferencePorts|null
     */
    private $allocatedPorts = null;

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


}

