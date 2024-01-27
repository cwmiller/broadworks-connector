<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderScheduleDeleteListRequest
 *
 * Delete a list of service provider schedule.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"e19a9072c2dad499e9f28837da5768db:5777","type":"sequence"}]
 */
class ServiceProviderScheduleDeleteListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group e19a9072c2dad499e9f28837da5768db:5777
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName scheduleKey
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ScheduleKey
     * @Array
     * @Group e19a9072c2dad499e9f28837da5768db:5777
     * @var \CWM\BroadWorksConnector\Ocip\Models\ScheduleKey[]
     */
    protected $scheduleKey = [
        
    ];

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
     * Getter for scheduleKey
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ScheduleKey[]
     */
    public function getScheduleKey()
    {
        return $this->scheduleKey instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->scheduleKey;
    }

    /**
     * Setter for scheduleKey
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ScheduleKey[] $scheduleKey
     * @return $this
     */
    public function setScheduleKey(array $scheduleKey)
    {
        $this->scheduleKey = $scheduleKey;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetScheduleKey()
    {
        $this->scheduleKey = null;
        return $this;
    }

    /**
     * Adder for scheduleKey
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ScheduleKey $scheduleKey
     * @return $this
     */
    public function addScheduleKey($scheduleKey)
    {
        $this->scheduleKey[] = $scheduleKey;
        return $this;
    }
}

