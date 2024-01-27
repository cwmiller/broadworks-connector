<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderMeetMeConferencingModifyRequest
 *
 * Modify the service provider/enterprise level data associated with Meet-Me Conferencing functions.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"adf25df72505d1c476ebb480b6cce18d:430","type":"sequence"}]
 */
class ServiceProviderMeetMeConferencingModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group adf25df72505d1c476ebb480b6cce18d:430
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName allocatedPorts
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferencePorts
     * @Optional
     * @Group adf25df72505d1c476ebb480b6cce18d:430
     * @var \CWM\BroadWorksConnector\Ocip\Models\MeetMeConferencingConferencePorts|null
     */
    protected $allocatedPorts = null;

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

