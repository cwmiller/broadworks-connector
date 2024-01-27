<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderDeviceManagementInProgressAndPendingEventCancelRequest
 *
 * Cancel pending and in progress events.  A list of individual events can 
 *         be canceled.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"e19a9072c2dad499e9f28837da5768db:3082","type":"sequence"}]
 */
class ServiceProviderDeviceManagementInProgressAndPendingEventCancelRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group e19a9072c2dad499e9f28837da5768db:3082
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName eventId
     * @Type int
     * @Array
     * @Group e19a9072c2dad499e9f28837da5768db:3082
     * @var int[]
     */
    protected $eventId = [
        
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
     * Getter for eventId
     *
     * @return int[]
     */
    public function getEventId()
    {
        return $this->eventId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->eventId;
    }

    /**
     * Setter for eventId
     *
     * @param int[] $eventId
     * @return $this
     */
    public function setEventId(array $eventId)
    {
        $this->eventId = $eventId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEventId()
    {
        $this->eventId = null;
        return $this;
    }

    /**
     * Adder for eventId
     *
     * @param int $eventId
     * @return $this
     */
    public function addEventId(int $eventId)
    {
        $this->eventId[] = $eventId;
        return $this;
    }
}

