<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderScheduleGetListRequest
 *
 * Get the list of a service provider schedules. The list can be filtered by schedule type.
 *         The response is either a ServiceProviderScheduleGetListResponse or an ErrorResponse.
 *
 * @see ServiceProviderScheduleGetListResponse
 * @see ErrorResponse
 * @Groups [{"id":"e19a9072c2dad499e9f28837da5768db:5904","type":"sequence"}]
 */
class ServiceProviderScheduleGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group e19a9072c2dad499e9f28837da5768db:5904
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName scheduleType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ScheduleType
     * @Optional
     * @Group e19a9072c2dad499e9f28837da5768db:5904
     * @var \CWM\BroadWorksConnector\Ocip\Models\ScheduleType|null
     */
    protected $scheduleType = null;

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
     * Getter for scheduleType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ScheduleType
     */
    public function getScheduleType()
    {
        return $this->scheduleType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->scheduleType;
    }

    /**
     * Setter for scheduleType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ScheduleType $scheduleType
     * @return $this
     */
    public function setScheduleType(\CWM\BroadWorksConnector\Ocip\Models\ScheduleType $scheduleType)
    {
        $this->scheduleType = $scheduleType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetScheduleType()
    {
        $this->scheduleType = null;
        return $this;
    }
}

