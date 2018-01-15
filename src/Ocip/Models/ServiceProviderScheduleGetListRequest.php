<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderScheduleGetListRequest
 *
 * Get the list of a service provider schedules. The list can be filtered by
 * schedule type.
 *         The response is either a ServiceProviderScheduleGetListResponse or an
 * ErrorResponse.
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
     * @var string|null
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
     * @return string|null
     */
    public function getScheduleType()
    {
        return $this->scheduleType;
    }

    /**
     * Setter for scheduleType
     *
     * @ElementName scheduleType
     * @param string|null $scheduleType
     * @return $this
     */
    public function setScheduleType($scheduleType)
    {
        $this->scheduleType = $scheduleType;
        return $this;
    }


}

