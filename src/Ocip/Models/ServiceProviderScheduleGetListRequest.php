<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderScheduleGetListRequest
 *
 * Get the list of a service provider schedules. The list can be filtered by
 * schedule type.
 *         The response is either a ServiceProviderScheduleGetListResponse or an
 * ErrorResponse.
 *
 * @see ServiceProviderScheduleGetListResponse
 * @see ErrorResponse
 */
class ServiceProviderScheduleGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName scheduleType
     * @var \CWM\BroadWorksConnector\Ocip\Models\ScheduleType|null
     */
    private $scheduleType = null;

    /**
     * Getter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @return string|null
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @param string|null $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * Getter for scheduleType
     *
     * @ElementName scheduleType
     * @return \CWM\BroadWorksConnector\Ocip\Models\ScheduleType|null
     */
    public function getScheduleType()
    {
        return $this->scheduleType;
    }

    /**
     * Setter for scheduleType
     *
     * @ElementName scheduleType
     * @param \CWM\BroadWorksConnector\Ocip\Models\ScheduleType|null $scheduleType
     * @return $this
     */
    public function setScheduleType(\CWM\BroadWorksConnector\Ocip\Models\ScheduleType $scheduleType)
    {
        $this->scheduleType = $scheduleType;
        return $this;
    }


}

